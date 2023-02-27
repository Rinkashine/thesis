<?php

namespace App\Exports;

use App\Models\Customer;
use App\Models\CustomerOrder;
use App\Models\SalesCustomer;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class CategoryNoOrder implements FromCollection, ShouldAutoSize,WithHeadings,WithMapping
{
    protected $startdate, $enddate;
    function __construct($startdate,$enddate){
        $this->startdate = $startdate;
        $this->enddate = $enddate;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CustomerOrder::join('ordered_products', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
        ->select([
            DB::raw('(SELECT category.name from category where
            (SELECT product.category_id from product where ordered_products.product_name = product.name) = category.id) AS category_name'),
            DB::raw(value: 'SUM(ordered_products.quantity) as order_quantity'),
            DB::raw(value: 'COUNT(ordered_products.product_name) as order_total'),

        ])
        ->where('customer_orders.status','Completed')
        ->where('customer_orders.created_at', '>=', $this->startdate)
        ->where('customer_orders.created_at', '<=', $this->enddate)
        ->groupBy('category_name')
        ->get();
    }
    public function map($category): array
    {
        return [
            $category->category_name,
            $category->order_quantity,

        ];
    }

    public function headings(): array
    {
        return [
            'Category Name',
            'Total Ordered Products',
        ];
    }
}
