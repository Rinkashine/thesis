<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\CustomerOrder;
use App\Models\OrderedProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\InventoryHistory;
use Alert;
class OrderRejectForm extends Component
{
    public $modelId;
    public $remarks;

    protected $listeners = [
        'getModelRejectId',
        'refreshChild' => '$refresh',
        'forceCloseModal',
    ];

    protected function rules(){
        return [
            'remarks'=> 'required',
        ];
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'remarks' => 'required',
        ]);
    }


    protected $validationAttributes = [
        'remarks' => 'Cancellation Reason'
    ];

    public function getModelRejectId($modelId){
        $this->modelId = $modelId;
    }

    private function cleanVars(){
        $this->modelId = null;
        $this->remarks = null;
    }

    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('closeRejectModal');
    }

    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }

    public function StoreRejectData(){
        $this->validate();
        $rejectorder = CustomerOrder::findorfail($this->modelId);
        $orderedproducts = OrderedProduct::where('customer_orders_id',$rejectorder->id)->get();
        foreach($orderedproducts as $orderedproduct){
            $products = Product::where('name',$orderedproduct->product_name)->get();

            foreach($products as $product){
                $product->stock = $product->stock + $orderedproduct->quantity;
                $product->update();
                $operationvalue = '(+'.$orderedproduct->quantity.')';
                $latestvalue = $product->stock;

                InventoryHistory::create([
                    'product_id' => $product->id,
                    'activity' => "Rejected Customer Order with Order ID of ".$rejectorder->id,
                    'adjusted_by' => Auth::guard('web')->user()->name,
                    'operation_value' => $operationvalue,
                    'latest_value' => $latestvalue,
                ]);
            }
        }

        $rejectorder->rejected_reason = $this->remarks;
        $rejectorder->status = "Rejected";
        $rejectorder->update();
        Alert::success('Order Rejected Success','' );
        return redirect()->route('orders.show',$this->modelId);


    }

    public function render()
    {
        return view('livewire.modal.order-reject-form');
    }
}
