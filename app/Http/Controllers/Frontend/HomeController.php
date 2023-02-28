<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Home;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $banners = Home::where('status','=','Active')->get();
        $categories = Category::get();
        $brands = Brand::get();
        $products = Product::where('status', 1)->with('images')->get()->shuffle()->take(10);


        $top_selling = Product::join('ordered_products', 'product.name', '=', 'ordered_products.product_name')
        ->select(
            [
                'product.id',
                'product.name',
                'product.sprice',
                DB::raw(value: 'SUM(ordered_products.quantity) as quantity'),
                DB::raw(value: 'product.sprice*(SUM(ordered_products.quantity)) as sales'),
                DB::raw('(SELECT brand.name FROM brand WHERE product.brand_id = brand.id) as brand_name'),
            ])
            ->groupBy('product.id', 'product.name', 'product.sprice', 'product.brand_id')
            ->orderBy('sales','desc')
            ->get()
            ->take(10);

        $top_trending = Product::join('ordered_products', 'product.name', '=', 'ordered_products.product_name')
        ->select(
            [
                'product.id',
                'product.name',
                'product.sprice',
                DB::raw(value: 'SUM(ordered_products.quantity) as quantity'),
                DB::raw(value: 'product.sprice*(SUM(ordered_products.quantity)) as sales'),
                DB::raw('(SELECT brand.name FROM brand WHERE product.brand_id = brand.id) as brand_name'),
            ])
            ->groupBy('product.id', 'product.name', 'product.sprice', 'product.brand_id')
            ->orderBy('quantity','desc')
            ->get()
            ->take(10);
        // dd($top_selling->toArray(), $top_trending->toArray());
        return view('customer.page.main.home',[
        'banners' => $banners,
        'categories' => $categories,
        'brands' => $brands,
        'products' => $products,
        'top_selling' => $top_selling,
        'top_trending' => $top_trending

        ]);
    }
}
