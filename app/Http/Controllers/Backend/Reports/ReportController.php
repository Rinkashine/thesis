<?php

namespace App\Http\Controllers\Backend\Reports;

use Analytics;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Analytics\Period;
use App\Exports\BrandNoOrder;
use App\Exports\GenderExport;
use App\Models\CustomerOrder;
use App\Exports\UserTypeExport;
use App\Exports\CategoryNoOrder;
use App\Exports\SalesBrandExport;
use App\Exports\BrowserTypeExport;
use Illuminate\Support\Facades\DB;
use App\Exports\SalesProductExport;
use App\Exports\CustomerSpentExport;
use App\Exports\PaymentByTypeExport;


use App\Exports\SalesCategoryExport;
use App\Exports\SalesOverTimeExport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductRatingsExport;
use App\Exports\RejectedOrdersExport;
use App\Exports\CancelledOrdersExport;
use App\Exports\MostVisitedPageExport;
use App\Exports\OrdersByProductExport;
use App\Exports\VerifiedAccountExport;
use App\Exports\CustomerPerMonthExport;
use App\Exports\OrdersByCustomerExport;
use App\Exports\CustomerByProductExport;
use App\Exports\ProductByCustomerExport;
use App\Exports\NonVerifiedAccountExport;
use App\Exports\CancellationReasonsExport;
use App\Exports\MonthlyCancellationExport;

use App\Exports\CancellationOverTimeExport;
use App\Exports\ProductRatingsByCustomerExport;
use PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
class ReportController extends Controller
{
    //Show Report Main Page
    public function index(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.report');
    }



    //Show Cancellation Report Page
    public function CancellationIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportcancellation');
    }
    //Show Return Report Page
    public function ReturnIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportreturn');
    }
    //Show Sales By Customer Report Page
    public function SalesByCustomerIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportbrowser');
    }


    public function customerPerMonth(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportmonthlycustomer');
    }
    public function showCustomerPerMonth(Request $request){

        $month = date('m', strtotime($request->month));
        $x = 30;
        if($month == '01' || $month == '03' || $month == '05' || $month == '07' || $month == '08' ||  $month == '10' ||  $month == '12'){
            $x = 31;
        }elseif($month == '02' && ($request->year%4) == '0'){
            $x = 28;
        }elseif($month == '02' && ($request->year%4) != '0'){
            $x = 29;
        }
        $year = $request->year;
        $from = $year .'-'.$month.'-'.'01';
        $to = $year.'-'.$month.'-'.$x.' 23-59-59';
        //$to = Carbon::createFromDate($year, $month, 31);

        //$dt = Carbon::createFromDate(2015, 01);
        return view('admin.page.Report.reportshowmonthlycustomer', [
            'from' => $from,
            'to' => $to,
            'month' => $month,
            'year' => $year,
            // 'month' => $request->month,
        ]);
    }



    //Show No. of Category Page








    public function AccountVerification(){
        abort_if(Gate::denies('report_access'),403);
        // dd('this is account verification');
        return view('admin.page.Report.reportaccountverification');
    }
    public function VerifiedAccount(){
        abort_if(Gate::denies('report_access'),403);
        // dd('this is account verification');
        return view('admin.page.Report.reportverifiedaccount');
    }
    public function NonVerifiedAccount(){
        abort_if(Gate::denies('report_access'),403);
        // dd('this is account non verification');
        return view('admin.page.Report.reportnonverifiedaccount');
    }

    public function OrdersByProduct(){
        abort_if(Gate::denies('report_access'),403);
        // dd('this is top buyer');
        return view('admin.page.Report.reportorderbyproduct');
    }


    public function exportOrdersByProductExcel(Request $request){
        abort_if(Gate::denies('report_access'),403);
        // $month = date('F', mktime(0, 0, 0, $request->month, 10));

        return Excel::download(new OrdersByProductExport, 'Quantity of Orders By Product.xlsx');
    }

    public function ProductByCustomer(Request $request){
        abort_if(Gate::denies('report_access'),403);
        // dd('this is product by customer');
        // dd($request->name);
        return view('admin.page.Report.reportproductbycustomer',[
            'name' => $request->name,
            'id' => $request->id
        ]);
    }
    public function exportProductByCustomerExcel(Request $request){
        abort_if(Gate::denies('report_access'),403);
        return Excel::download(new ProductByCustomerExport($request->sorting,$request->startdate,$request->enddate, $request->product_name, $request->product_id),
        $request->product_name.' Buyers ('.$request->startdate.' - '.$request->enddate.').xlsx');
    }
    public function exportVerifiedAccountsExcel(Request $request){
        abort_if(Gate::denies('report_access'),403);
        // $month = date('F', mktime(0, 0, 0, $request->month, 10));
        return Excel::download(new VerifiedAccountExport, 'Verified Accounts.xlsx');
    }
    public function exportNonVerifiedAccountsExcel(Request $request){
        abort_if(Gate::denies('report_access'),403);
        // $month = date('F', mktime(0, 0, 0, $request->month, 10));
        // dd('qwe');
        return Excel::download(new NonVerifiedAccountExport, 'Non-Verified Accounts.xlsx');
    }
    public function OrdersByCustomer(){
        abort_if(Gate::denies('report_access'),403);
        // dd('this is top buyer');
        return view('admin.page.Report.reportorderbycustomer');

    }
    public function exportOrdersByCustomer(){
        abort_if(Gate::denies('report_access'),403);
        // dd('this is top buyer');
        return Excel::download(new OrdersByCustomerExport, 'Ordered Products By Customer.xlsx');

    }

    public function CustomerByProduct(Request $request){
        abort_if(Gate::denies('report_access'),403);
        // dd('this is product by customer');
        // dd($request->name);
        return view('admin.page.Report.reportcustomerbyproduct',[
            'name' => $request->name,
            'id' => $request->id
        ]);
    }
    public function exportCustomerByProductExcel(Request $request){
        abort_if(Gate::denies('report_access'),403);
        // $month = date('F', mktime(0, 0, 0, $request->month, 10));
        // dd($request->name);
        return Excel::download(new CustomerByProductExport($request->name, $request->id), $request->name.' Bought Products.xlsx');
    }

    public function ProductRatings(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportproductratings');
    }

    public function exportProductRatingsExcel(Request $request){
        abort_if(Gate::denies('report_access'),403);

        return Excel::download(new ProductRatingsExport($request->sorting,$request->startdate,$request->enddate),
        'Product Ratings('.$request->startdate.' - '.$request->enddate.').xlsx');
    }

    public function ProductRatingsByCustomer(Request $request){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportproductratingsbycustomer', [
            'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'from' => $request->from,
            'to' => $request->to,
        ]);
    }

    public function exportProductRatingsByCustomerExcel(Request $request){
        abort_if(Gate::denies('report_access'),403);
        return Excel::download(new ProductRatingsByCustomerExport($request->sorting,$request->startdate,$request->enddate,$request->name,$request->product_id),
        $request->name.' Ratings By Customer('.$request->startdate.' - '.$request->enddate.').xlsx');
    }

    public function exportCustomerPerMonthEXCEL (Request $request){
        abort_if(Gate::denies('report_access'),403);
        return Excel::download(new CustomerPerMonthExport,'Customer Per Month.xlsx');
    }
}
