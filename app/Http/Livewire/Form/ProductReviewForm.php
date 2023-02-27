<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProductReviewForm extends Component
{
    public $orderDetails;
    public $comment = "";
    public $rate = 1;
    public $productId;
    public $productName;

    protected $listeners = ['selectProductToReview'];

    public function mount($orderDetails){
        $this->orderDetails = $orderDetails;
    }

     public function CreateReview(){

        $customer_id = Auth::guard('customer')->user()->id;

    //dd($this->productId);
    Review::create([
        'customer_id' => $customer_id,
        'ordered_products_id' => $this->productId,
        'comment' => $this->comment,
        'customer_orders_id' => $this->orderDetails->id,
        'rate' => $this->rate,
        ])
        ->save();

        $this->dispatchBrowserEvent('CloseReviewModal');
        Alert::success('Product has been reviewed!', 'Thank you for your feedback!');
        return redirect()->route('order.show',$this->orderDetails->id);
   }

  public function selectProductToReview($productName, $productId){
       $this->productId = $productId;
       $this->productName = $productName;



    //    dd($this->productId);
       $this->dispatchBrowserEvent('ShowReviewModal');
   }

   public function setRate($rate){
        $this->rate = $rate;
        $this->dispatchBrowserEvent('RenderRating', [
            "rate"=> $rate,
        ]);
   }
    public function render()
    {
        return view('livewire.form.product-review-form');
    }
}
