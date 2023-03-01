<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;

class AddToWishlist extends Component
{
    public $product;
    public $customer_id;
    public $showbutton = 0;
    public function mount($product){
        $this->product = $product;
        $this->customer_id = Auth::guard('customer')->user()->id;

    }
    public function AddToWishlist(){
        Wishlist::create([
            'customers_id' => $this->customer_id,
            'product_id' => $this->product->id,
        ]);
    }
    public function RemoveToWishlist(){
        Wishlist::where('customers_id',$this->customer_id)
        ->where('product_id',$this->product->id)->delete();
    }
    public function render()
    {
        $wishlist_checker = Wishlist::where('product_id',$this->product->id)
        ->where('customers_id',$this->customer_id)
        ->get()->count();
        return view('livewire.form.add-to-wishlist',[
            'wishlist_checker' => $wishlist_checker
        ]);
    }
}
