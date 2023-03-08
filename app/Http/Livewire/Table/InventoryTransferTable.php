<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\PurchaseOrder;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;

class InventoryTransferTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];
    public $sorting;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];


    public function render()
    {
        abort_if(Gate::denies('inventory_transfer_access'),403);
        if($this->sorting == null){
            $purchaseorders = PurchaseOrder::search($this->search)
            ->orderby('created_at', 'desc')
            ->paginate($this->perPage);
        }else{
            $purchaseorders = PurchaseOrder::search($this->search)
            ->where('status',$this->sorting)
            ->orderby('created_at', 'desc')
            ->paginate($this->perPage);
        }

        return view('livewire.table.inventory-transfer-table',[
            'orders' => $purchaseorders
        ]);
    }
}
