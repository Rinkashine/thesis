<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\CustomerOrder;
use App\Models\OrderedProduct;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;
class OrderTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = null;
    public $sorting = null;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';

    public $action;
    public $selectItem;
    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;
        if($action == 'changeorderstatus'){
            $this->emit('getChangeOrderStatusId',$this->selectedItem);
            $this->dispatchBrowserEvent('openChangeOrderStatusModal');
        }
        $this->action = $action;
    }
    public function render()
    {
        abort_if(Gate::denies('order_access'),403);
        if($this->sorting == null){
            $Orders = CustomerOrder::search($this->search)
            ->with('customers')
            ->orderBy('created_at','desc')
            ->paginate($this->perPage);
        }else{
            $Orders = CustomerOrder::search($this->search)
            ->where('status',$this->sorting)
            ->with('customers')
            ->orderBy('created_at','desc')
            ->paginate($this->perPage);
        }
        return view('livewire.table.order-table',[
            'Orders' => $Orders,
        ]);
    }
}
