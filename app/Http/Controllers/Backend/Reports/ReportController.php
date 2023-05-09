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












}
