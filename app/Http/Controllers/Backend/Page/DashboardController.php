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
use Illuminate\Support\Facades\DB;



class DashboardController extends Controller
{
   public function index(){
         $currentyear = date("Y");

         $monthlysales = CustomerOrder::join('ordered_products', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
         ->select([
             DB::raw(value: 'YEAR(customer_orders.created_at) as year'),
             DB::raw(value: 'MONTHNAME(customer_orders.created_at) as month_name'),
             DB::raw(value: 'MONTH(customer_orders.created_at) as month'),
             DB::raw(value: 'SUM(ordered_products.quantity*ordered_products.price) as total'),
         ])
         ->where('customer_orders.status','Completed')
         ->whereYear('created_at', $currentyear)
         ->groupBy('month_name', 'year','month')
         ->orderBy('year','asc')
         ->orderBy('month','asc')
         ->get();

         $saleschartlabel = [];
         $saleschartdataset = [];

         foreach($monthlysales as $sales){
            array_push($saleschartlabel, $sales->month_name);
            array_push($saleschartdataset,$sales->total);
         }


        $completedorders = CustomerOrder::where('status','Completed')->get();
        $totalsales = 0;
        foreach($completedorders as $completeorder){
            foreach($completeorder->orderTransactions as $orderproduct){
                $totalsales += $orderproduct->quantity * $orderproduct->price;
            }
        }
        $usertype = Analytics::fetchUserTypes(Period::days(7));

        $usertypelabel = [];
        $usertypedataset = [];
        //dd($usertype);
        foreach($usertype as $test){
            //dd($test);
            array_push($usertypelabel, $test['type']);
            array_push($usertypedataset, $test['sessions']);
        }

        $pendingorderscount = CustomerOrder::where('status', "Pending for Approval")->get()->count();
        $completedorderscount = CustomerOrder::where('status','Completed')->get()->count();

        $activeproductcount = Product::all()->where('status','=','1')->count();
        $inactiveproductcount = Product::all()->where('status','=','0')->count();

        $customercount = Customer::all()->count();
        $usercount = User::all()->count();
        $criticalproducts = Product::get()->where('stock','<=','stock_warning')->take(5);

        $mostvisitedpage = Analytics::fetchMostVisitedPages(Period::years(1),20);
        $browsers = Analytics::fetchTopBrowsers(Period::days(7),20);

        return view('admin.page.dashboard',[
            'browsers' => $browsers,
            'mostvisitedpage' => $mostvisitedpage,
            'usertype' => $usertype,
            'totalsales' => $totalsales,

            'activeproductcount' => $activeproductcount,
            'inactiveproductcount' => $inactiveproductcount,
            'criticalproducts' => $criticalproducts,

            'usertypelabel' => $usertypelabel,
            'usertypedataset' => $usertypedataset,
            'saleschartlabel' => $saleschartlabel,
            'saleschartdataset' => $saleschartdataset,
            'pendingorderscount' => $pendingorderscount,
            'completedorderscount' => $completedorderscount

        ]);
    }

}
