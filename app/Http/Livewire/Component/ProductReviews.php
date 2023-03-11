<?php

namespace App\Http\Livewire\Component;

use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ProductReviews extends Component
{
    public $product_name;

    public function mount($product)
    {
        $this->product_name = $product->name;
    }

    public function render()
    {
        $reviews = Review::join('ordered_products', 'product_review.ordered_products_id', '=', 'ordered_products.id')
        ->select(['product_name', 'rate', 'comment',
            DB::raw('(SELECT customers.name FROM customers WHERE customers.id = product_review.customer_id) as customer_name'),
            'product_review.created_at',
        ])
        ->where('product_name', $this->product_name)
        ->orderby('product_review.created_at', 'desc')
        ->paginate(5);

        return view('livewire.component.product-reviews', [
            'reviews' => $reviews,
        ]);
    }
}
