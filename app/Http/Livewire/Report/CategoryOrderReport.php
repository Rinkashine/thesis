<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class CategoryOrderReport extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $from ='2023-01-01T00:00';
    public $to ='2023-12-31T00:00';
    public $sorting = 'order_quantity_desc';
    public $column_name;
    public $order_name;
    public $perPage = 10;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];


    public $categorylabel = [];
    public $categoryordersdataset = [];

    public function cleanvars(){
        $this->categorylabel = [];
        $this->categoryordersdataset = [];
    }
    public function render()
    {
        $this->cleanvars();

        if($this->sorting == 'category_name_asc'){
            $this->column_name = "name";
            $this->order_name = "asc";
        }elseif($this->sorting == 'category_name_desc'){
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


        $categories = Category::select([
            'category.id',
            'category.name',
            DB::raw(value: 'SUM(CASE WHEN customer_orders.status = "Completed" then ordered_products.quantity else 0 end) as order_quantity')
            ])->leftjoin('product','category.id','=','product.category_id')
            ->leftjoin('ordered_products', 'product.name','=','ordered_products.product_name')
            ->leftjoin('customer_orders',function($join){
                $join->on('ordered_products.customer_orders_id', '=', 'customer_orders.id')
                ->where('customer_orders.created_at', '>', $this->from)
                ->where('customer_orders.created_at','<',$this->to);
            })
            ->where('category.name','like','%'.$this->search.'%')
            ->groupBy('category.id','category.name')
            ->orderBy($this->column_name, $this->order_name)
            ->paginate($this->perPage);

        $categorieschart =  Category::select([
            'category.id',
            'category.name',
            DB::raw(value: 'SUM(CASE WHEN customer_orders.status = "Completed" then ordered_products.quantity else 0 end) as order_quantity')
            ])->leftjoin('product','category.id','=','product.category_id')
            ->leftjoin('ordered_products', 'product.name','=','ordered_products.product_name')
            ->leftjoin('customer_orders',function($join){
                $join->on('ordered_products.customer_orders_id', '=', 'customer_orders.id')
                ->where('customer_orders.created_at', '>', $this->from)
                ->where('customer_orders.created_at','<',$this->to);
            })
            ->groupBy('category.id','category.name')
            ->orderBy($this->column_name, $this->order_name)
            ->get();

        foreach($categorieschart as $category){
            array_push($this->categorylabel, $category->name);
            array_push($this->categoryordersdataset, $category->order_quantity);
        }

        $this->dispatchBrowserEvent('render-chart', [
            "label" => $this->categorylabel,
            "orderdataset" => $this->categoryordersdataset
        ]);

        return view('livewire.report.category-order-report',[
            'categories' => $categories
        ]);
    }
}
