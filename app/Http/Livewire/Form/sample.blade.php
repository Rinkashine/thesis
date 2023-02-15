<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\CustomerOrder;
use App\Models\OrderedProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\InventoryHistory;
use Alert;
class OrderApprovedForm extends Component
{
    public $modelId;

    protected $listeners = [
        'getModelApprovedId',
        'forceCloseModal',
        'refreshChild' => '$refresh',
    ];

    public function getModelApprovedId($modelId){
        $this->modelId = $modelId;
    }
    private function cleanVars(){
        $this->modelId = null;
    }
    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }
    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('closeApprovedModal');
    }
    public function approve(){

        $approveorder = CustomerOrder::findorfail($this->modelId);
        $committedproducts = OrderedProduct::where('customer_orders_id',$approveorder->id)->get();

        foreach($committedproducts as $committedproduct){
            $products = Product::where('name',$committedproduct->product_name)->get();

            foreach($products as $product){
                if($product->stock < $committedproduct->quantity){
                    Alert::warning('Order ', 'Warning Message');
                    return redirect()->route('orders.show',$this->modelId);
                }else{
                    $product->committed += $committedproduct->quantity;
                    $product->stock =- $committedproduct->quantity;
                    $product->update();
                    $operationvalue = '(-'.$committedproduct->quantity.')';
                    $latestvalue = $product->stock;
                    InventoryHistory::create([
                        'product_id' => $product->id,
                        'activity' => "Order Approved with Order ID of ".$approveorder->id,
                        'adjusted_by' => Auth::guard('web')->user()->name,
                        'operation_value' => $operationvalue,
                        'latest_value' => $latestvalue,
                    ]);
                }



            }
        }
        //$approveorder->status = "Processing";
        //$approveorder->update();

        //Alert::success('Order Approved Successfully','' );
        return redirect()->route('orders.show',$this->modelId);
    }

    public function render()
    {
        return view('livewire.modal.order-approved-form');
    }
}
