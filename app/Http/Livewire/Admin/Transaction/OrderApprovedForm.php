<?php

namespace App\Http\Livewire\Admin\Transaction;

use Alert;
use App\Models\CustomerOrder;
use Livewire\Component;

class OrderApprovedForm extends Component
{
    public $modelId;

    protected $listeners = [
        'getModelApprovedId',
        'forceCloseModal',
        'refreshChild' => '$refresh',
    ];

    public function getModelApprovedId($modelId)
    {
        $this->modelId = $modelId;
    }

    private function cleanVars()
    {
        $this->modelId = null;
    }

    public function forceCloseModal()
    {
        $this->cleanVars();
        $this->resetErrorBag();
    }

    public function closeModal()
    {
        $this->cleanVars();
        $this->dispatchBrowserEvent('closeApprovedModal');
    }

    public function approve()
    {
        $approveorder = CustomerOrder::findorfail($this->modelId);
        $approveorder->status = 'Processing';
        $approveorder->update();
        Alert::success('Order Approved Successfully', '');

        return redirect()->route('orders.show', $this->modelId);
    }

    public function render()
    {
        return view('livewire.admin.transaction.order-approved-form');
    }
}
