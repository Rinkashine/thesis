<?php

namespace App\Exports;

use App\Models\Product;
use App\Models\SalesProduct;
use App\Models\CustomerOrder;
use App\Models\OrderedProduct;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SalesProductExport implements FromCollection, ShouldAutoSize,WithHeadings,WithMapping
{
    protected $startdate,$enddate;

    function __construct($startdate,$enddate){
        $this->startdate = $startdate;
        $this->enddate = $enddate;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public $x = 0;
    public function collection()
    {
        return CustomerOrder::join('ordered_products', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
        ->select([
            'ordered_products.product_name',
            DB::raw(value: 'SUM(ordered_products.quantity) as order_quantity'),
            DB::raw(value: 'COUNT(ordered_products.product_name) as order_total'),
            DB::raw(value: '(SUM(ordered_products.quantity*ordered_products.price)) as total_sales'),
        ])
        ->where('customer_orders.status','Completed')
        ->where('customer_orders.created_at', '>=', $this->startdate)
        ->where('customer_orders.created_at', '<=', $this->enddate)
        ->groupBy('ordered_products.product_name')

        ->get();
    }

    public function map($product): array
    {
        return [
            $product->product_name,
            $product->order_total,
            $product->order_quantity,
            $product->total_sales,
        ];
    }
    public function headings(): array
    {
        return [
            'Product Title',
            'Number of Orders',
            'Total Quantity',
            'Total Sales',
        ];
    }
}
