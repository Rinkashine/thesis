<?php

namespace App\Http\Controllers\Backend\Page;

use Analytics;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerOrder;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Analytics\Period;

class DashboardController extends Controller
{
    public function index()
    {
        $currentyear = date('Y');

        $monthlysales = CustomerOrder::join('customer_order_item', 'customer_order.id', '=', 'customer_order_item.customer_order_id')
        ->select([
            DB::raw(value: 'YEAR(customer_order.created_at) as year'),
            DB::raw(value: 'MONTHNAME(customer_order.created_at) as month_name'),
            DB::raw(value: 'MONTH(customer_order.created_at) as month'),
            DB::raw(value: 'SUM(customer_order_item.quantity*customer_order_item.price) as total'),
        ])
        ->where('customer_order.status', 'Completed')
        ->whereYear('created_at', $currentyear)
        ->groupBy('month_name', 'year', 'month')
        ->orderBy('year', 'asc')
        ->orderBy('month', 'asc')
        ->get();

        $saleschartlabel = [];
        $saleschartdataset = [];

        foreach ($monthlysales as $sales) {
            array_push($saleschartlabel, $sales->month_name);
            array_push($saleschartdataset, $sales->total);
        }

        $completedorders = CustomerOrder::where('status', 'Completed')->get();
        $totalsales = 0;
        foreach ($completedorders as $completeorder) {
            foreach ($completeorder->orderTransactions as $orderproduct) {
                $totalsales += $orderproduct->quantity * $orderproduct->price;
            }
        }
        $usertype = Analytics::fetchUserTypes(Period::days(7));

        $usertypelabel = [];
        $usertypedataset = [];
        //dd($usertype);
        foreach ($usertype as $test) {
            //dd($test);
            array_push($usertypelabel, $test['type']);
            array_push($usertypedataset, $test['sessions']);
        }

        $pendingorderscount = CustomerOrder::where('status', 'Pending for Approval')->get()->count();
        $completedorderscount = CustomerOrder::where('status', 'Completed')->get()->count();

        $activeproductcount = Product::all()->where('status', '=', '1')->count();
        $inactiveproductcount = Product::all()->where('status', '=', '0')->count();

        $customercount = Customer::all()->count();
        $usercount = User::all()->count();
        $criticalproducts = Product::get()->where('stock', '<=', 'stock_warning')->take(5);

        $mostvisitedpage = Analytics::fetchMostVisitedPages(Period::years(1), 20);
        $browsers = Analytics::fetchTopBrowsers(Period::days(7), 20);

        return view('admin.page.dashboard', [
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
            'completedorderscount' => $completedorderscount,

        ]);
    }
}
