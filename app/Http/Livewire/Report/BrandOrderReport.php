<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\DB;

class BrandOrderReport extends Component
{
    public $brands;
    public $status = 'COMPLETED';
    public $from ='2023-01-01';
    public $to ='2023-12-31';
    public $sorting = 'brand_name';
    public $x = 'asc';

    public $brandlabel = [];
    public $brandordersdataset = [];

    public function cleanvars(){
        $this->brandlabel = [];
        $this->brandordersdataset = [];
    }

    public function render()
    {
        $this->cleanvars();

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
        ])
        ->where('customer_orders.status','Completed')
        ->where('customer_orders.created_at', '>=', $this->from)
        ->where('customer_orders.created_at', '<=', $this->to)
        ->groupBy('brand_name')
        ->orderBy($this->sorting, $this->x)
        ->get();

        foreach($this->brands as $brand){
            array_push($this->brandlabel, $brand->brand_name);
            array_push($this->brandordersdataset, $brand->order_quantity);
        }


        $this->dispatchBrowserEvent('render-chart', [
            "label" => $this->brandlabel,
            "orderdataset" => $this->brandordersdataset
        ]);


        return view('livewire.report.brand-order-report');
    }
}
