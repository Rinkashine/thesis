<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\CancellationReason;
use App\Models\CustomerOrder;
use Alert;

class CancelOrderModal extends Component
{
    public $modelId;
    public $reason;
    public $details;
    protected $listeners = [
        'forceCloseModal',
        'getOrderDetailsId'
    ];

    public function getOrderDetailsId($model){
        $this->modelId = $model;
    }
    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }
    public function cleanVars(){
        $this->modelId = null;
    }
    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseOrderCancellationModal');
    }

    protected function rules(){
        return [
            'reason'=> 'required|max:255',
            'details' => 'max:255',
        ];
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'reason'=> 'required|max:255',
            'details' => 'max:255',
        ]) ;
    }



    public function CancelOrder(){
        $this->validate();
        $order = CustomerOrder::find($this->modelId);
        $order->status = "Cancelled";
        $order->cancellation_reason_id = $this->reason;
        $order->cancellation_details = $this->details;
        $order->update();
        Alert::success('Order was Cancelled','' );
        return redirect()->route('cancellations.show',$order->id);

    }
    public function render()
    {
        $reasons = CancellationReason::get();
        return view('livewire.modal.cancel-order-modal',[
            'reasons' => $reasons
        ]);
    }
}
