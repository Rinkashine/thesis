<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class OrderNotesForm extends Component
{
    public $order_id;

    protected $listeners = [
        'refreshParent' => '$refresh',
    ];

    public function mount($order)
    {
        $this->order_id = $order->id;
    }

    public function selectItem($itemId, $action)
    {
        $this->selectedItem = $itemId;

        if ($action == 'StoreOrderNotes') {
            $this->emit('getOrderIdModal', $this->selectedItem);
            $this->dispatchBrowserEvent('openOrderNotesModal');
        }
        $this->action = $action;
    }

    public function render()
    {
        return view('livewire.form.order-notes-form');
    }
}
