<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use App\Models\OrderedItems;

class ReceiveTransferForm extends Component
{
    public $transferproducts;

    public function mount($orderinfo){
        //$this->transferproducts = $orderinfo;
        $this->transferproducts = OrderedItems::where('purchase_order_id',$orderinfo->id)->get();

      //  dd($transferproducts);
    }
    public function render()
    {
        return view('livewire.form.receive-transfer-form');
    }
}
