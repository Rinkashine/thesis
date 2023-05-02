<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\CustomerOrder;
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

class SalesOverTimeExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping,  WithStyles, WithEvents, WithColumnWidths, WithDrawings
{
    protected $user_name;
    /**
     * @return \Illuminate\Support\Collection
     */

     public function columnWidths(): array
    {
        return [
            'A' => 30,
            'B' => 35,
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
                $event->sheet->setCellValue('A2','Sales Over Time Report');
                $event->sheet->getDelegate()->getStyle('A:C')
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
            },
        ];
    }

    public function __construct()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->user_name = $user->name;
        } else {
            $this->user_name = 'Unknown';
        }

    }
    public function collection()
    {
        return CustomerOrder::join('customer_order_item', 'customer_order.id', '=', 'customer_order_item.customer_order_id')
        ->select([
            DB::raw(value: 'YEAR(customer_order.created_at) as year'),
            DB::raw(value: 'MONTHNAME(customer_order.created_at) as month_name'),
            DB::raw(value: 'MONTH(customer_order.created_at) as month'),
            DB::raw(value: 'SUM(customer_order_item.quantity*customer_order_item.price) as total'),
        ])
        ->where('customer_order.status', 'Completed')
        ->groupBy('month_name', 'year', 'month')
        ->orderBy('year', 'asc')
        ->orderBy('month', 'asc')
        ->get();
    }

    public function map($sales): array
    {
        return [
            $sales->year,
            $sales->month_name,
            $sales->total,
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
            ['Year','Month', 'Total Sales',]
        ];
    }
}
