<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Home;
class HomeController extends Controller
{
    public function index(){
        $banners = Home::where('status','=','Active')->get();
        $categories = Category::get();
        $brands = Brand::get();
        $products = Product::where('status', 1)->with('images')->get()->shuffle()->take(10);
        return view('customer.page.main.home',[
        'banners' => $banners,
        'categories' => $categories,
        'brands' => $brands,
        'products' => $products,

        ]);
    }
}
