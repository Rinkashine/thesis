<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\DB;

class BrandSalesTable extends Component
{
    public $brands;
    public $status = 'COMPLETED';
    public $from ='2023-01-01';
    public $to ='2023-12-31';
    public $sorting = 'brand_name';
    public $x = 'asc';
    public function render()
    {
        if($this->sorting == 'brand_name'){
            $this->x = 'asc';
        }
        else{
            $this->x = 'desc';
        }
        $this->brands = CustomerOrder::join('ordered_products', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
        ->select([
            DB::raw('(SELECT brand.name from brand where
            (SELECT product.brand_id from product where ordered_products.product_name = product.name) = brand.id) AS brand_name'),
            DB::raw(value: 'SUM(ordered_products.quantity) as order_quantity'),
            DB::raw(value: 'COUNT(ordered_products.product_name) as order_total'),
            DB::raw(value: '(SUM(ordered_products.quantity*ordered_products.price)) as total_sales'),

        ])
        ->where('customer_orders.status','Completed')
        ->where('customer_orders.created_at', '>=', $this->from)
        ->where('customer_orders.created_at', '<=', $this->to)
        ->groupBy('brand_name')
        ->orderBy($this->sorting, $this->x)
        ->get();
        return view('livewire.report.brand-sales-table');
    }
}
