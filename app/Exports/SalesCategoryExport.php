<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Category;
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

class SalesCategoryExport implements FromCollection, ShouldAutoSize, WithHeadings, WithMapping,  WithStyles, WithEvents, WithColumnWidths, WithDrawings
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
        
        $sheet->getStyle('A6:B' . $sheet->getHighestDataRow())
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
        $sheet->getStyle('A6:B6')->applyFromArray([
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => '064e3b'
                ],
            ],
        ]);
        $sheet->getStyle('A6:B6')->getFont()->setColor(new Color('FFFFFF'));
        $sheet->getStyle('A2:B2')->getFont()->setColor(new Color('000000'));

        // loop through each row and set its style
        for ($i = 7; $i <= $totalRows; $i++) {
            $sheet->getStyle("A{$i}:B{$i}")->applyFromArray([
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
            'A:B'  => ['font' => ['size' => 15]],
            'A6:B6' => ['font' => ['bold' => true]],
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
                $event->sheet->setCellValue('A2','Sales by Category Report');
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
                $event->sheet->mergeCells('A2:B2');
                $event->sheet->getStyle('A2:B2')->getAlignment()->setHorizontal('center');
                $event->sheet->mergeCells('A3:B3');
                $event->sheet->getStyle('A3:B3')->getAlignment()->setHorizontal('center');
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

        if ($this->sorting == 'category_name_asc') {
            $this->sort = 'Category Name (A-Z)';
            $this->column_name = 'name';
            $this->order_name = 'asc';
        } elseif ($this->sorting == 'Category_name_desc') {
            $this->sort = 'Category Name (Z-A)';
            $this->column_name = 'name';
            $this->order_name = 'desc';
        } elseif ($this->sorting == 'total_sales_asc') {
            $this->sort = 'Total Sales (Low-High)';
            $this->column_name = 'total_sales';
            $this->order_name = 'asc';
        } elseif ($this->sorting == 'total_sales_desc') {
            $this->sort = 'Total Sales (High-Low)';
            $this->column_name = 'total_sales';
            $this->order_name = 'desc';
        } else {
            $this->column_name = 'name';
            $this->order_name = 'asc';
        }
        // dd($this->sort);
        
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        
        return Category::select([
            'category.id',
            'category.name',
            DB::raw(value: 'SUM(CASE WHEN customer_order.status = "Completed" then customer_order_item.quantity * customer_order_item.price else 0 end) as total_sales'),
        ])->leftjoin('product', 'category.id', '=', 'product.category_id')
            ->leftjoin('customer_order_item', 'product.id', '=', 'customer_order_item.product_id')
            ->leftjoin('customer_order', function ($join) {
                $join->on('customer_order_item.customer_order_id', '=', 'customer_order.id')
                ->where('customer_order.created_at', '>=', $this->startdate)
                ->where('customer_order.created_at', '<=', $this->enddate);
            })
            ->groupBy('category.id', 'category.name')
            ->orderBy($this->column_name, $this->order_name)
            ->get();
    }

    public function map($category): array
    {
        return [
            $category->name,
            number_format($category->total_sales, 2),

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
            ['Category Name', 'Total Sales',]
        ];
    }
}
