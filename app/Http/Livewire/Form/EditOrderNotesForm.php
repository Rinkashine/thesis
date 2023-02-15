<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class EditOrderNotesForm extends Component
{
    public $order_id;

    public function mount($order){
        $this->order_id = $order->id;
    }
    public function selectItem($itemId,$action){
          $this->selectedItem = $itemId;

        if($action == 'UpdateOrderNotesModal'){
            $this->emit('getOrderIdModal',$this->selectedItem);
            $this->dispatchBrowserEvent('openEditNotesModal');
        }
        $this->action = $action;
    }
    public function render()
    {
        return view('livewire.form.edit-order-notes-form');
    }
}
