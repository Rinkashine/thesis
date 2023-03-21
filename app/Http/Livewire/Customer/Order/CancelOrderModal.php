<?php

namespace App\Http\Livewire\Customer\Order;

use Alert;
use App\Models\CancellationReason;
use App\Models\CustomerOrder;
use App\Models\InventoryHistory;
use App\Models\Product;
use Livewire\Component;

class CancelOrderModal extends Component
{
    public $modelId;

    public $reason;

    public $details;

    protected $listeners = [
        'forceCloseModal',
        'getOrderDetailsId',
    ];

    public function getOrderDetailsId($model)
    {
        $this->modelId = $model;
    }

    public function forceCloseModal()
    {
        $this->cleanVars();
        $this->resetErrorBag();
    }

    public function cleanVars()
    {
        $this->modelId = null;
    }

    public function closeModal()
    {
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseOrderCancellationModal');
    }

    protected function rules()
    {
        return [
            'reason' => 'required|max:255',
            'details' => 'max:255',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'reason' => 'required|max:255',
            'details' => 'max:255',
        ]);
    }

    public function CancelOrder()
    {
        $this->validate();
        $order = CustomerOrder::findorfail($this->modelId);
        foreach ($order->orderTransactions as $item) {
            $products = Product::where('id', $item->product_id)->get();
            foreach ($products as $product) {
                $product->stock = $product->stock + $item->quantity;
                $product->update();
                $operationvalue = '(+'.$item->quantity.')';
                $latestvalue = $product->stock;

                InventoryHistory::create([
                    'product_id' => $product->id,
                    'activity' => 'Cancellation of Order with Order ID of '.$this->modelId,
                    'operation_value' => $operationvalue,
                    'latest_value' => $latestvalue,
                ]);
            }
        }
        $order->status = 'Cancelled';
        $order->cancellation_reason_id = $this->reason;
        $order->cancellation_details = $this->details;
        $order->update();
        Alert::success('Order was Cancelled', '');

        return redirect()->route('cancellations.show', $order->id);
    }

    public function render()
    {
        $reasons = CancellationReason::get();

        return view('livewire.customer.order.cancel-order-modal', [
            'reasons' => $reasons,
        ]);
    }
}
