<?php

namespace App\Http\Livewire\Table;

use App\Models\Images;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\OrderedProduct;
use Illuminate\Support\Facades\DB;

class ProductInventoryTable extends Component
{
    use WithPagination;
    public $sorting ;
    public $perPage = 10;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';

    public $action;
    public $selectedItem;
    public $x = 'asc';


    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function mount(){
        $this->perPage = 10;
    }

    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;

        if($action == 'adjust'){
            $this->emit('getAdjustModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openAdjustModal');
        }else{
            $this->emit('getEditModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openEditModal');
        }
        $this->action = $action;
    }

    public function render()
    {

        if($this->sorting == 'nameaz'){
            $this->sorting = 'name';
            $this->x = 'asc';
        }elseif($this->sorting == 'nameza'){
            $this->sorting = 'name';
            $this->x = 'desc';
        }elseif($this->sorting == 'createdold'){
            $this->sorting = 'product.created_at';
            $this->x = 'asc';
        }elseif($this->sorting == 'creatednew'){
            $this->sorting = 'product.created_at';
            $this->x = 'desc';
        }elseif($this->sorting == 'updatedatold'){
            $this->sorting = 'product.updated_at';
            $this->x = 'asc';
        }elseif($this->sorting == 'updatedat'){
            $this->sorting = 'product.updated_at';
            $this->x = 'desc';
        }elseif($this->sorting == 'lowinventory'){
            $this->sorting = 'stock';
            $this->x = 'asc';
        }elseif($this->sorting == 'highinventory'){
            $this->sorting = 'stock';
            $this->x = 'desc';
        }
        elseif($this->sorting == 'cataz'){
            $this->sorting = 'category_id';
            $this->x = 'asc';
        }
        elseif($this->sorting == 'catza'){
            $this->sorting = 'category_id';
            $this->x = 'desc';
        }
        else{
            $this->sorting = 'name';
        }
        $products = Product::search($this->search)->select([
            'product.id',
            'product.name',
            'product.SKU',
            'product.stock',
            DB::raw(value: 'SUM(CASE WHEN customer_orders.status = "Completed" then "0"
            WHEN customer_orders.status = "Rejected" then "0" WHEN customer_orders.status = "Cancelled" then "0" else ordered_products.quantity end) as committed'),
            DB::raw('(SELECT brand.name FROM brand WHERE brand.id = product.brand_id) as brand_name'),
            DB::raw('(SELECT category.name FROM category WHERE category.id = product.category_id) as category_name'),
        ])
        ->leftjoin('ordered_products', 'product.name', '=', 'ordered_products.product_name')
        ->leftjoin('customer_orders', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
        ->groupBy('product.stock','product.SKU','product.name', 'product.id', 'product.brand_id', 'product.category_id')
        ->orderBy($this->sorting, $this->x)
        ->paginate($this->perPage);
        // dd($products->toArray());
        return view('livewire.table.product-inventory-table',[
            'products' => $products,
        ]);
    }
}
