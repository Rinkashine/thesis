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

class SalesCustomerExport implements FromCollection, ShouldAutoSize,WithHeadings,WithMapping
{
    protected $startdate,$enddate;

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
            DB::raw('(SELECT name FROM customers WHERE customers.id = customer_orders.customers_id) as name'),
            DB::raw('(SELECT email FROM customers WHERE customers.id = customer_orders.customers_id) as email'),
            DB::raw(value: 'SUM(ordered_products.quantity) as order_quantity'),
            DB::raw(value: 'COUNT(ordered_products.product_name) as order_total'),
            DB::raw(value: '(SUM(ordered_products.quantity*ordered_products.price)) as total_sales'),

        ])
        ->where('customer_orders.status','Completed')
        ->where('customer_orders.created_at', '>=', $this->startdate)
        ->where('customer_orders.created_at', '<=', $this->enddate)
        ->groupBy('customer_orders.customers_id', 'name')
        ->orderBy('name', 'desc')
        ->get();
    }

    public function map($customer): array
    {
        return [
            $customer->name,
            $customer->email,
            $customer->order_total,
            $customer->order_quantity,
            $customer->total_sales,

        ];
    }

    public function headings(): array
    {
        return [
            'Customer Name',
            'Customer Email',
            'Total Orders',
            'Total Ordered Products',
            'Total Sales',
        ];
    }
}
