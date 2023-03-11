<?php

namespace App\Http\Livewire\Table;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductWishlist extends Component
{
    public function render()
    {
        $customer_id = Auth::guard('customer')->user()->id;

        $wishlists = Wishlist::where('customers_id', $customer_id)->get();

        return view('livewire.table.product-wishlist', [
            'wishlists' => $wishlists,
        ]);
    }

    public function RemoveProduct($id)
    {
        Wishlist::findorfail($id)->delete();
    }
}
