<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Product;
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
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class SalesProductExport implements FromCollection,
ShouldAutoSize,
WithHeadings,
WithMapping,
WithStyles,
WithEvents,
WithColumnWidths,
WithHeadingRow,
WithCustomStartCell
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
            'A' => 56,
        ];
    }
    public function startCell(): string
    {
        return 'A6';
    }
    public function styles(Worksheet $sheet)
    {




    }
    public function registerEvents(): array
    {
        return [
              AfterSheet::class => function(AfterSheet $event) {
                // dd($this->sort);
                $event->sheet->setBreak('A10', \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet::BREAK_ROW);



                $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\HeaderFooterDrawing();
                $drawing->setName('PhpSpreadsheet logo');
                $drawing->setPath(public_path('/dist/images/MainLogo.png'));
                $drawing->setHeight(80);
                $event->sheet->getHeaderFooter()->addImage($drawing, \PhpOffice\PhpSpreadsheet\Worksheet\HeaderFooter::IMAGE_HEADER_RIGHT);

                // Set header

                $event->sheet->getHeaderFooter()->setOddHeader('&C&18
Roman Dental Supplies Trading
&12Address:Grand Royale Subdivision
&12Contact: 09452692274
                &L&G');
                $event->sheet->getHeaderFooter()->setOddFooter('&R&P');


               // $event->sheet->getDelegate()->freezePane('A7');



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
        } else {
            $this->user_name = 'Unknown';
        }

        if ($this->sorting == 'product_name_asc') {
            $this->sort  = 'Product Name (A-Z)';
            $this->column_name = 'name';
            $this->order_name = 'asc';
        } elseif ($this->sorting == 'product_name_desc') {
            $this->sort  = 'Product Name (Z-A)';
            $this->column_name = 'name';
            $this->order_name = 'desc';
        } elseif ($this->sorting == 'total_sales_asc') {
            $this->sort  = 'Total Sales (Low to High)';
            $this->column_name = 'total_sales';
            $this->order_name = 'asc';
        } elseif ($this->sorting == 'total_sales_desc') {
            $this->sort  = 'Total Sales (High to Low)';
            $this->column_name = 'total_sales';
            $this->order_name = 'desc';
        } elseif ($this->sorting == 'order_quantity_asc') {
            $this->sort  = 'Order Quantity (Low to High)';
            $this->column_name = 'quantity';
            $this->order_name = 'asc';
        } elseif ($this->sorting == 'order_quantity_desc') {
            $this->sort  = 'Order Quantity (High to Low)';
            $this->column_name = 'quantity';
            $this->order_name = 'desc';
        } else {
            $this->column_name = 'name';
            $this->order_name = 'asc';
        }

    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Product::select([
            'product.id',
            'product.name',
            DB::raw(value: 'SUM(CASE WHEN customer_order.status = "Completed" then customer_order_item.quantity else 0 end) AS quantity'),
            DB::raw(value: 'SUM(CASE WHEN customer_order.status = "Completed" then customer_order_item.quantity * customer_order_item.price  else 0 end) as total_sales'),
        ])
        ->leftjoin('customer_order_item', 'product.id', '=', 'customer_order_item.product_id')
        ->leftjoin('customer_order', function ($join) {
            $join->on('customer_order_item.customer_order_id', '=', 'customer_order.id')
            ->where('customer_order.created_at', '>=', $this->startdate)
            ->where('customer_order.created_at', '<=', $this->enddate);
        })
        ->groupBy('product.name', 'product.id')
        ->orderBy($this->column_name, $this->order_name)
        ->get();
    }

    public function map($product): array
    {
        return [

        ];
    }
    public function headingRow(): int
    {
        return 2;
    }
    public function headings(): array
    {
        return [
            ['Product Name','Total Quantity', 'Total Sales',]
        ];
    }
}
