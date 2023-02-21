<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\Customer;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\DB;

class CustomerSalesTable extends Component
{
    public $customers;
    public $status = 'COMPLETED';
    public $from ='2023-01-01';
    public $to ='2023-12-31';
    public $sorting = 'name';
    public $x = 'asc';
    public function render()
    {
        $this->customers = CustomerOrder::join('ordered_products', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
        ->select([
            DB::raw('(SELECT name FROM customers WHERE customers.id = customer_orders.customers_id) as name'),
            DB::raw('(SELECT email FROM customers WHERE customers.id = customer_orders.customers_id) as email'),
            DB::raw(value: 'SUM(ordered_products.quantity) as order_quantity'),
            DB::raw(value: 'COUNT(ordered_products.product_name) as order_total'),
            DB::raw(value: '(SUM(ordered_products.quantity*ordered_products.price)) as total_sales'),

        ])
        ->where('customer_orders.status','Completed')
        ->where('customer_orders.created_at', '>=', $this->from)
        ->where('customer_orders.created_at', '<=', $this->to)
        ->groupBy('customer_orders.customers_id', 'name')
        ->orderBy($this->sorting, 'desc')
        ->get();


        $this->nonbuyer = DB::table('customers')
        ->whereNotExists(function ( $query){
            $query->select(DB::raw(1))
            ->from('customer_orders')
            ->whereColumn('customers.id', 'customer_orders.customers_id')
            ->where('status', 'completed');
        })->orderBy('id')->get();
        return view('livewire.report.customer-sales-table');
    }
}
