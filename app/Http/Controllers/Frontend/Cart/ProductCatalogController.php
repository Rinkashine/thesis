<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Review;
use App\Models\ProductImage;
use App\Models\CustomerCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductCatalogController extends Controller
{
    public function index(){
        $categories = Category::orderby('name')->get();
        $products = Product::where('status', 1)->orderBy('name')->with('images','category')->get()->shuffle();
        return view('customer.page.cart.product',[
            'products' => $products,
            'categories' => $categories
        ]);
    }
    public function show(Product $product){
        $reviews = Review::
            join('ordered_products', 'product_review.ordered_products_id','=', 'ordered_products.id')
            ->select(['product_name','rate','comment',
            DB::raw('(SELECT customers.name FROM customers WHERE customers.id = product_review.customer_id) as customer_name'),
            'product_review.created_at'
            ])
            ->where('product_name', $product->name)
            ->orderby('product_review.created_at','desc')
        ->paginate(5);

        $sum_rate =  Review::
        join('ordered_products', 'product_review.ordered_products_id','=', 'ordered_products.id')
        ->select('product_name','rate',)
        ->where('product_name', $product->name)
        ->get()->sum('rate');

        $count_rate =  Review::
        join('ordered_products', 'product_review.ordered_products_id','=', 'ordered_products.id')
        ->select('product_name','rate',)
        ->where('product_name', $product->name)
        ->get()->count();

        if($sum_rate != 0 || $count_rate != 0){
            $ave_rate = $sum_rate/$count_rate;
        }
        else{
            $ave_rate = 0;
        }
        $rate1 =  Review::
        join('ordered_products', 'product_review.ordered_products_id','=', 'ordered_products.id')
        ->select('product_name','rate',)
        ->where('product_name', $product->name)
        ->where('rate','1')
        ->get()->count();
        $rate2 =  Review::
        join('ordered_products', 'product_review.ordered_products_id','=', 'ordered_products.id')
        ->select('product_name','rate',)
        ->where('product_name', $product->name)
        ->where('rate','2')
        ->get()->count();
        $rate3 =  Review::
        join('ordered_products', 'product_review.ordered_products_id','=', 'ordered_products.id')
        ->select('product_name','rate',)
        ->where('product_name', $product->name)
        ->where('rate','3')
        ->get()->count();
        $rate4 =  Review::
        join('ordered_products', 'product_review.ordered_products_id','=', 'ordered_products.id')
        ->select('product_name','rate',)
        ->where('product_name', $product->name)
        ->where('rate','4')
        ->get()->count();
        $rate5 =  Review::
        join('ordered_products', 'product_review.ordered_products_id','=', 'ordered_products.id')
        ->select('product_name','rate',)
        ->where('product_name', $product->name)
        ->where('rate','5')
        ->get()->count();


        return view('customer.page.cart.productshow',[
            'product' => $product,
            'reviews' => $reviews,         'sum_rate' => $sum_rate,
            'ave_rate' => $ave_rate,
            'count_rate' => $count_rate,
            'rate1' => $rate1,
            'rate2' => $rate2,
            'rate3' => $rate3,
            'rate4' => $rate4,
            'rate5' => $rate5,
        ]);
    }

}
