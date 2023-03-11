<?php

namespace App\Http\Livewire\Table;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductCatalog extends Component
{
    public function render()
    {
        $categories = Category::orderby('name')->get();
        $products = Product::where('status', 1)->orderBy('name')->with('images')->get();

        return view('livewire.table.product-catalog', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
