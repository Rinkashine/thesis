<?php

namespace App\Http\Controllers\Backend\Page;

use Analytics;
use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use Spatie\Analytics\Period;
use App\Models\CustomerOrder;
use App\Models\CustomerOrderItems;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $pastyear = date('Y-m-d', strtotime('-1 year'));
        $currentyear = date("Y-m-d") . " 23:59:00";
        // $currentyear = "2022-10-01";
        // dd($currentyear);
        $monthlysales = CustomerOrder::join('customer_order_item', 'customer_order.id', '=', 'customer_order_item.customer_order_id')
        ->select([
            DB::raw(value: 'YEAR(customer_order.created_at) as year'),
            DB::raw(value: 'MONTHNAME(customer_order.created_at) as month_name'),
            DB::raw(value: 'MONTH(customer_order.created_at) as month'),
            DB::raw(value: 'SUM(customer_order_item.quantity*customer_order_item.price) as total'),
        ])
        ->where('customer_order.status', 'Completed')
        // ->whereYear('created_at', $currentyear)
        ->where('created_at', '<', $currentyear )
        ->where('created_at', '>', $pastyear )
        ->groupBy('month_name', 'year', 'month')
        ->orderBy('year', 'asc')
        ->orderBy('month', 'asc')
        ->get();
        // dd($monthlysales->toArray());
        $saleschartlabel = [];
        $saleschartdataset = [];

        foreach ($monthlysales as $sales) {
            $date = $sales->month_name." ".$sales->year;
            // dd($date);
            // array_push($saleschartlabel, $sales->month_name);
            array_push($saleschartlabel, $date);
            array_push($saleschartdataset, $sales->total);
        }

        $completedorders = CustomerOrder::where('status', 'Completed')->get();
        $totalsales = 0;
        foreach ($completedorders as $completeorder) {
            foreach ($completeorder->orderTransactions as $orderproduct) {
                $totalsales += $orderproduct->quantity * $orderproduct->price;
            }
        }

        $usertype = Analytics::fetchUserTypes(Period::months(1));
        $uniquevisitor = $usertype[0]['sessions'];

        $pendingorderscount = CustomerOrder::where('status', 'Pending for Approval')->get()->count();
        $completedorderscount = CustomerOrder::where('status', 'Completed')->get()->count();

        $activeproductcount = Product::all()->where('status', '=', '1')->count();
        $inactiveproductcount = Product::all()->where('status', '=', '0')->count();

        $customercount = Customer::all()->count();
        $usercount = User::all()->count();
        $criticalproducts = Product::get()->where('stock', '<=', 'stock_warning')->take(5);
        // dd($criticalproducts->toArray());

        $mostvisitedpage = Analytics::fetchMostVisitedPages(Period::years(1), 20);
        $browsers = Analytics::fetchTopBrowsers(Period::days(7), 20);

        $topSellingProducts = CustomerOrderItems::select([
            'product_name',
            DB::raw(value: 'SUM(CASE WHEN customer_order.status = "Completed" then customer_order_item.quantity else 0 end) AS quantity'),

        ])
        ->leftjoin('customer_order', function ($join) {
            $join->on('customer_order_item.customer_order_id', '=', 'customer_order.id')
            ->where('customer_order.status', 'Completed');

        })
        ->groupby('product_name')
        ->orderBy('quantity','desc')
        ->get()->take(5);
        // dd($topSellingProducts->toArray());
        $topCustomers = Customer::select([
            'customers.id',
            'customers.name',
            'customers.email',
            DB::raw(value: 'sum(CASE WHEN customer_order.status = "Completed" then customer_order_item.price * customer_order_item.quantity else 0 end) AS total_spent'),
        ])
        ->leftjoin('customer_order', 'customers.id', '=', 'customer_order.customers_id')
        ->leftjoin('customer_order_item', function ($join) {
            $join->on('customer_order_item.customer_order_id', '=', 'customer_order.id');
        })
        ->groupBy('customers.name', 'customers.id', 'customers.email')
        ->orderBy('total_spent', 'desc')
        ->get()->take(3);
        // dd($topCustomers->toArray());
        $feautredProducts = Product::where('featured', 1)->with('images')->get()->take(6);

        $ratedProducts = Product::select([
            'product.name',
            'product.id',

            DB::raw(value: 'COUNT(CASE WHEN product_review.customer_order_item_id = customer_order_item.id then product.id end) AS total'),
            DB::raw(value: 'SUM(CASE WHEN product_review.customer_order_item_id = customer_order_item.id then rate end) AS rate'),
            DB::raw(value: '(SUM(CASE WHEN product_review.customer_order_item_id = customer_order_item.id then rate end)/COUNT(CASE WHEN product_review.customer_order_item_id = customer_order_item.id then product.id end)) AS ave')
        ])
        ->leftjoin('customer_order_item', 'product.id', '=', 'customer_order_item.product_id')
        ->leftjoin('product_review',function($join){
            $join->on('product_review.customer_order_item_id', '=', 'customer_order_item.id');
        })
        ->groupBy('product.id','product.name')
        ->orderBy('ave', 'desc')
        ->get()->take(5);

        $mostvisitedpage = Analytics::fetchMostVisitedPages(Period::years(1), 5);

        // dd($mostvisitedpage->toArray());

        return view('admin.page.dashboard', [
            'browsers' => $browsers,
            'mostvisitedpage' => $mostvisitedpage,
            'usertype' => $usertype,
            'totalsales' => $totalsales,
            'activeproductcount' => $activeproductcount,
            'inactiveproductcount' => $inactiveproductcount,
            'criticalproducts' => $criticalproducts,
            'uniquevisitor' => $uniquevisitor ,
            'saleschartlabel' => $saleschartlabel,
            'saleschartdataset' => $saleschartdataset,
            'pendingorderscount' => $pendingorderscount,
            'completedorderscount' => $completedorderscount,
            'topSellingProducts' => $topSellingProducts,
            'topCustomers' => $topCustomers,
            'feautredProducts' => $feautredProducts,
            'ratedProducts' => $ratedProducts,
            'mostvisitedpage' => $mostvisitedpage

        ]);
    }
}
