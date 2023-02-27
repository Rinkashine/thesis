<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\DB;
class CategoryOrderReport extends Component
{
    public $categories;
    public $status = 'COMPLETED';
    public $from ='2023-01-01';
    public $to ='2023-12-31';
    public $sorting = 'category_name';
    public $x = 'asc';

    public $categorylabel = [];
    public $categoryordersdataset = [];

    public function cleanvars(){
        $this->categorylabel = [];
        $this->categoryordersdataset = [];
    }
    public function render()
    {
        $this->cleanvars();

        if($this->sorting == 'category_name'){
            $this->x = 'asc';
        }
        else{
            $this->x = 'desc';
        }

        $this->categories = CustomerOrder::join('ordered_products', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
        ->select([
            DB::raw('(SELECT category.name from category where
            (SELECT product.category_id from product where ordered_products.product_name = product.name) = category.id) AS category_name'),
            DB::raw(value: 'SUM(ordered_products.quantity) as order_quantity'),
            DB::raw(value: 'COUNT(ordered_products.product_name) as order_total'),

        ])
        ->where('customer_orders.status','Completed')
        ->where('customer_orders.created_at', '>=', $this->from)
        ->where('customer_orders.created_at', '<=', $this->to)
        ->groupBy('category_name')
        ->orderBy($this->sorting, $this->x)
        ->get();

        foreach($this->categories as $category){
            array_push($this->categorylabel, $category->category_name);
            array_push($this->categoryordersdataset, $category->order_quantity);
        }

        $this->dispatchBrowserEvent('render-chart', [
            "label" => $this->categorylabel,
            "orderdataset" => $this->categoryordersdataset
        ]);

        return view('livewire.report.category-order-report');
    }
}
