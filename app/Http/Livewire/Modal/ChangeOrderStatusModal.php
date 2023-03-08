<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\CustomerOrder;
use App\Models\CustomerOrderItems;

class ChangeOrderStatusModal extends Component
{
    public $modelId;
    public $status;

    protected $listeners = [
        'forceCloseModal',
        'getChangeOrderStatusId'
    ];

    public function updated($fields){
        $this->validateOnly($fields,[
            'status' => 'required|max:255',
        ]);
    }
    protected function rules(){
        return [
            'status' => 'required',
        ];
    }

    public function getChangeOrderStatusId($modelId){
        $this->modelId = $modelId;
        $customer = CustomerOrder::find($this->modelId);
        $this->status = $customer->status;
    }


    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }
    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseChangeOrderStatusModal');
    }
    public function cleanVars(){
        $this->modelId = null;
    }
    public function ChangeOrderStatus(){
        $this->validate();
        $customer = CustomerOrder::find($this->modelId);
        $customer->status = $this->status;
        $customer->update();



        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseChangeOrderStatusModal');
        $this->emit('refreshParent');

        $this->resetErrorBag();
    }
    public function render()
    {
        return view('livewire.modal.change-order-status-modal');
    }
}
