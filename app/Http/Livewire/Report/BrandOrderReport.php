<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class BrandOrderReport extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $from ='2023-01-01T00:00';
    public $to ='2023-12-31T00:00';
    public $sorting = 'quantity_asc';
    public $column_name;
    public $order_name;
    public $perPage = 10;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];

    public $brandlabel = [];
    public $brandordersdataset = [];

    public function cleanvars(){
        $this->brandlabel = [];
        $this->brandordersdataset = [];
    }

    public function render()
    {
        $this->cleanvars();

        if($this->sorting == 'brand_name_asc'){
            $this->column_name = "name";
            $this->order_name = "asc";
        }elseif($this->sorting == 'brand_name_desc'){
            $this->column_name = "name";
            $this->order_name = 'desc';
        }elseif($this->sorting == 'order_quantity_asc'){
            $this->column_name = 'order_quantity';
            $this->order_name = "asc";
        }elseif($this->sorting == 'order_quantity_desc'){
            $this->column_name = 'order_quantity';
            $this->order_name = 'desc';
        }else{
            $this->column_name = "name";
            $this->order_name = "asc";
        }

        $brands = Brand::select([
            'brand.id',
            'brand.name',
            DB::raw(value: 'SUM(CASE WHEN customer_orders.status = "Completed" then ordered_products.quantity else 0 end) as order_quantity')
        ])
        ->leftjoin('product','brand.id','=','product.brand_id')
        ->leftjoin('ordered_products', 'product.name','=','ordered_products.product_name')
        ->leftjoin('customer_orders',function($join){
            $join->on('ordered_products.customer_orders_id', '=', 'customer_orders.id')
            ->where('customer_orders.created_at', '>', $this->from)
            ->where('customer_orders.created_at','<',$this->to);
        })
        ->where('brand.name','like','%'.$this->search.'%')
        ->groupBy('brand.id','brand.name')
        ->orderBy($this->column_name, $this->order_name)
        ->paginate($this->perPage);


        $brandchart = Brand::select([
            'brand.id',
            'brand.name',
            DB::raw(value: 'SUM(CASE WHEN customer_orders.status = "Completed" then ordered_products.quantity else 0 end) as order_quantity')
        ])
        ->leftjoin('product','brand.id','=','product.brand_id')
        ->leftjoin('ordered_products', 'product.name','=','ordered_products.product_name')
        ->leftjoin('customer_orders',function($join){
            $join->on('ordered_products.customer_orders_id', '=', 'customer_orders.id')
            ->where('customer_orders.created_at', '>', $this->from)
            ->where('customer_orders.created_at','<',$this->to);
        })
        ->groupBy('brand.id','brand.name')
        ->orderBy($this->column_name, $this->order_name)
        ->get();

        foreach($brandchart as $brand){
            array_push($this->brandlabel, $brand->name);
            array_push($this->brandordersdataset, $brand->order_quantity);
        }


        $this->dispatchBrowserEvent('render-chart', [
            "label" => $this->brandlabel,
            "orderdataset" => $this->brandordersdataset
        ]);


        return view('livewire.report.brand-order-report',[
            'brands' => $brands
        ]);
    }
}
