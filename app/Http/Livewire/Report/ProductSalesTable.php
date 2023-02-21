<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\CustomerOrder;
use App\Models\OrderedProduct;
use Illuminate\Support\Facades\DB;


class ProductSalesTable extends Component
{
    public $from ='2023-01-01';
    public $to ='2023-12-31';
    public $sorting = 'ordered_products.product_name';
    public $x = 'asc';
    public function render()
    {
        if($this->sorting == 'ordered_products.product_name'){
            $this->x = 'asc';
        }
        else{
            $this->x = 'desc';
        }
        $this->products = CustomerOrder::join('ordered_products', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
        ->select([
            'ordered_products.product_name',

            DB::raw(value: 'SUM(ordered_products.quantity) as order_quantity'),
            DB::raw(value: 'COUNT(ordered_products.product_name) as order_total'),
            DB::raw(value: '(SUM(ordered_products.quantity*ordered_products.price)) as total_sales'),
            // DB::raw('(SELECT brand.name FROM brand WHERE brand.id = product.brand_id) as brand_name'),
        ])
        ->where('customer_orders.status','Completed')
        ->where('customer_orders.created_at', '>=', $this->from)
        ->where('customer_orders.created_at', '<=', $this->to)
        ->groupBy('ordered_products.product_name')
        ->orderBy($this->sorting, $this->x)
        ->get();

        // dd($this->products);
        $this->pending = CustomerOrder::join('ordered_products', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
        ->select([
            'ordered_products.product_name',
        ])
        ->where('customer_orders.status','!=','Completed')
        ->groupBy('ordered_products.product_name')
        ->get();

        $this->nonbuyer = DB::table('product')
        ->whereNotExists(function ($query){
            $query->select(DB::raw(1))
            ->from('ordered_products')
            ->whereColumn('product.name', 'ordered_products.product_name');
        })->orderBy('name')->get();


        return view('livewire.report.product-sales-table');
    }
}
