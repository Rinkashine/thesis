<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Events\BeforeSheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Style;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithFooter;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\RichText\Run;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CancelledOrdersExport implements FromCollection,WithHeadings,ShouldAutoSize,WithMapping, WithStyles, WithEvents, WithColumnWidths, WithDrawings
{
    protected $sorting;

    protected $sort;

    protected $column_name;

    protected $order_name;

    protected $startdate;

    protected $enddate;

    protected $user_name;

    protected $date;

    protected $last_row;

    public function columnWidths(): array
    {
        return [
            'A' => 35,       
            'B' => 45,    
            'C' => 20,   
        ];
    }
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('My Image');
        $drawing->setDescription('This is my image');
        $drawing->setPath(public_path('/dist/images/MainLogo.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('A1');

        return [$drawing];
    }
    public function styles(Worksheet $sheet)
    {
        
        $sheet->getStyle('A6:C' . $sheet->getHighestDataRow())
              ->getBorders()
              ->getAllBorders()
              ->setBorderStyle(Border::BORDER_THIN);
            
        $sheet->getPageMargins()->setTop(0.3);
        $sheet->getPageMargins()->setLeft(0.25);
        $sheet->getPageMargins()->setRight(0.25);

        // get the total number of rows in the sheet
        $totalRows = $sheet->getHighestRow();

        // initializ a variable to keep track of the row color
        $rowColor = 'cddbd7'; 
        $fontColor = 'FAFAFA';
        $sheet->getStyle('A6:C6')->applyFromArray([
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => '064e3b'
                ],
            ],
        ]);
        $sheet->getStyle('A6:C6')->getFont()->setColor(new Color('FFFFFF'));
        $sheet->getStyle('A2:C2')->getFont()->setColor(new Color('000000'));

        // loop through each row and set its style
        for ($i = 7; $i <= $totalRows; $i++) {
            $sheet->getStyle("A{$i}:C{$i}")->applyFromArray([
                'font' => ['size' => 15],
                // 'font' => ['bold' => true],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID,
                    'startColor' => [
                        'argb' => $rowColor,
                    ],
                ],
                
            ]);
            $rowColor = ($rowColor === 'FAFAFA') ? 'cddbd7' : 'FAFAFA';
            // $fontColor = ($fontColor === 'FFFFFF') ? '000000' : 'FFFFFF';
        }
        $this->last_row = $sheet->getHighestDataRow();
        return [
            // Style the first row as bold text.
            1 => ['font' => ['bold' => true]],
            3 => ['font' => ['bold' => true]],
            'A146' => ['font' => ['bold' => true]],
            'A146' => ['font' =>  ['size' => 14]],
            'A:C'  => ['font' => ['size' => 15]],
            'A6:C6' => ['font' => ['bold' => true]],
            2 => ['font' =>  ['size' => 20]],
            'A3' => ['font' => ['size' => 14]],
            'A2' => ['font' => ['bold' => true]],
            'A5' => ['font' => ['size' => 13]],
            
        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                // dd($this->sort);
                $event->sheet->setCellValue('A2','Customer Total Cancellations Report');
                $event->sheet->setCellValue('A3', date('F d, Y', strtotime($this->startdate)). ' - ' . date('F d, Y', strtotime($this->enddate)));
                $event->sheet->setCellValue('A5', 'Sorted by: '.$this->sort);
                $event->sheet->getDelegate()->getStyle('B:C')
                                ->getAlignment()
                                ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->setCellValue('A' . $this->last_row + 2,'Prepared by: ' . $this->user_name);
                $event->sheet->setCellValue('A' . $this->last_row + 3, date('F d, Y h:i:s', strtotime(Carbon::now())));
                $event->sheet->getDelegate()->freezePane('A7');
                
            },
            BeforeSheet::class => function(BeforeSheet $event) {
                $event->sheet->mergeCells('A2:C2');
                $event->sheet->getStyle('A2:C2')->getAlignment()->setHorizontal('center');
                $event->sheet->mergeCells('A3:C3');
                $event->sheet->getStyle('A3:C3')->getAlignment()->setHorizontal('center');
                $event->sheet->getDelegate()->getPageSetup()->setHorizontalCentered(true);
                // $event->sheet->getDelegate()->getPageSetup()->setVerticalCentered(true);
            },
        ];
    }

    public function __construct($sorting, $startdate, $enddate)
    {
        $this->sorting = $sorting;
        $this->startdate = $startdate;
        $this->enddate = $enddate;

        if (Auth::check()) {
            $user = Auth::user();
            $this->user_name = $user->name;
            // dd($this->user_name);
        } else {
            $this->user_name = 'Unknown';
        }

        if($this->sorting == 'customer_name_asc'){
            $this->sort = 'Customer Name (A-Z)';
            $this->column_name = "customers.name";
            $this->order_name = "asc";
        }elseif($this->sorting == 'customer_name_desc'){
            $this->sort = 'Customer Name (Z-A)';
            $this->column_name = "customers.name";
            $this->order_name = 'desc';
        }elseif($this->sorting == 'total_spent_asc'){
            $this->sort = 'Total Cancellation (Low-High)';
            $this->column_name = 'total';
            $this->order_name = "asc";
        }elseif($this->sorting == 'total_spent_desc'){
            $this->sort = 'Total Cancellation (High-Low)';
            $this->column_name = 'total';
            $this->order_name = 'desc';
        }
        // dd($this->sort);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Customer::select([
            'customers.id',
            'customers.name',
            'customers.email',
            DB::raw(value: 'COUNT(CASE WHEN customer_order.status = "Cancelled" and customer_order.created_at >= "'.$this->startdate.'" and customer_order.created_at <= "'.$this->enddate.'" then customer_order.cancellation_reason_id end) as total'),    
        ])
        ->leftjoin('customer_order','customers.id','=','customer_order.customers_id')
        ->groupBy('customers.name','customers.id','customers.email')
        ->orderBy($this->column_name, $this->order_name)
        ->get();
    }

    public function map($customer): array
    {
        return [
            $customer->name,
            $customer->email,
            number_format($customer->total),

        ];
    }

    public function headings(): array
    {
        return [
            [],
            [],
            [],
            [],
            [],
            ['Customer Name','Customer Email', 'Cancellations',]
        ];
    }
}
