<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\CustomerOrder;
use App\Models\OrderedProduct;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Home;
use Analytics;
use Spatie\Analytics\Period;
class DashboardController extends Controller
{
   public function index(){


        $completedorders = CustomerOrder::where('status','Completed')->get();
        $totalsales = 0;
        foreach($completedorders as $completeorder){
            foreach($completeorder->orderTransactions as $orderproduct){
                $totalsales += $orderproduct->quantity * $orderproduct->price;
            }
        }


        $brandcount = Brand::all()->count();
        $categorycount = Category::all()->count();
        $suppliercount = Supplier::all()->count();
        $productcount  = Product::all()->count();
        $homecount = Home::all()->count();
        $activeproductcount = Product::all()->where('status','=','1')->count();
        $inactiveproductcount = Product::all()->where('status','=','0')->count();
        $customercount = Customer::all()->count();
        $usercount = User::all()->count();
        $criticalproducts = Product::get()->where('stock','<=','stock_warning')->take(5);

        $mostvisitedpage = Analytics::fetchMostVisitedPages(Period::years(1),20);
        $browsers = Analytics::fetchTopBrowsers(Period::days(7),20);
        $usertype = Analytics::fetchUserTypes(Period::months(1));

        return view('admin.page.dashboard',[
            'browsers' => $browsers,
            'mostvisitedpage' => $mostvisitedpage,
            'usertype' => $usertype,
            'totalsales' => $totalsales,
            'brandcount' => $brandcount,
            'categorycount' => $categorycount,
            'suppliercount' => $suppliercount,
            'productcount' => $productcount,
            'activeproductcount' => $activeproductcount,
            'inactiveproductcount' => $inactiveproductcount,
            'customercount' => $customercount,
            'usercount' => $usercount,
            'homecount' => $homecount,
            'criticalproducts' => $criticalproducts,
        ]);
    }

}
