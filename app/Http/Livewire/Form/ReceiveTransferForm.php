<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use App\Models\PurchaseOrderItems;
use App\Models\PurchaseOrder;
use App\Models\PurchaseOrderTimeline;

use App\Models\Product;
use App\Models\InventoryHistory;
use Illuminate\Support\Facades\Auth;
use Alert;
class ReceiveTransferForm extends Component
{
    public $transferproducts;
    public $receive = [];
    public function mount($orderinfo){
        $this->transferproducts = PurchaseOrderItems::where('purchase_order_id',$orderinfo->id)->get();
    }
    public function StoreReceiveInventoryData(){

        foreach($this->transferproducts as $Tprod){

            $product = Product::findorFail($Tprod->product->id);
            $PreviousStock = $product->stock;
            $order_items_quantity = $this->receive[$Tprod->id];
            $latestStock = $PreviousStock + $order_items_quantity;
            $product->stock = $latestStock;
            $product->update();

            $operationvalue = "(+$order_items_quantity)";

            $order = PurchaseOrder::findorFail($Tprod->purchase_order_id);
            $order->status = 'Received';
            $order->update();

            $item = PurchaseOrderItems::findorfail($Tprod->id);
            $item->accepted_quantity = $this->receive[$Tprod->id];
            $item->update();
            InventoryHistory::create([
                'product_id' => $Tprod->product_id,
                'activity' => "Transfer Receive #(T$order->id)",
                'adjusted_by' => Auth::guard('web')->user()->name,
                'operation_value' => $operationvalue,
                'latest_value' => $product->stock,
            ]);

        PurchaseOrderTimeline::create([
            'purchase_order_id' => $Tprod->purchase_order_id,
            'title' => "Received the Items"
        ]);


        }
        Alert::success('Success Title', 'Success Message');
        return redirect()->route('transfer.index');
    }
    public function render()
    {
        return view('livewire.form.receive-transfer-form');
    }
}
