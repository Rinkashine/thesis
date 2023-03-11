<?php

namespace App\Http\Controllers\Backend\Reports;

use App\Exports\BrandNoOrder;
use App\Exports\BrowserTypeExport;
use App\Exports\CategoryNoOrder;
use App\Exports\CustomerSpentExport;
use App\Exports\GenderExport;
use App\Exports\MostVisitedPageExport;
use App\Exports\SalesBrandExport;
use App\Exports\SalesCategoryExport;
use App\Exports\SalesOverTimeExport;
use App\Exports\SalesProductExport;
use App\Exports\UserTypeExport;

use App\Exports\CancellationOverTimeExport;
use App\Exports\CancellationReasonsExport;
use App\Exports\CancelledOrdersExport;
use App\Exports\CustomerPerMonthExport;
use App\Exports\RejectedOrdersExport;
use App\Exports\MonthlyCancellationExport;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    //Show Report Main Page
    public function index()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.report');
    }

    //Show Browser Report Page
    public function BrowserIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportbrowser');
    }

    //Export Browser Report
    public function exportbrowsertypeexcel(Request $request)
    {
        abort_if(Gate::denies('report_export'), 403);

        return Excel::download(new BrowserTypeExport($request->startdate, $request->enddate), 'browsertype.xlsx');
    }

    //Show Sales Over Time Report Page
    public function SalesOvertimeIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportsalesovertime');
    }

    //Export Sales Over Tieme
    public function exportsalesovertime()
    {
        abort_if(Gate::denies('report_access'), 403);

        return Excel::download(new SalesOverTimeExport, 'salesovertime.xlsx');
    }

    //Show User Type Report Page
    public function UserTypeIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportusertype');
    }

    //Export User Type
    public function exportusertypeexcel(Request $request)
    {
        abort_if(Gate::denies('report_export'), 403);

        return Excel::download(new UserTypeExport($request->startdate, $request->enddate), 'usertype.xlsx');
    }

    //Show Payment Type Report Page
    public function PaymentTypeIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportpaymentbytype');
    }

    //Show Cancellation Report Page
    public function CancellationIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportcancellation');
    }

    //Show Return Report Page
    public function ReturnIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportreturn');
    }

    //Show Sales By Customer Report Page
    public function SalesByCustomerIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportbrowser');
    }

    //Show Most Visited Page
    public function MostVisitedPageIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportmostvisitedpage');
    }

    //Export Most Visited Page Report
    public function exportMostVisitedPageExcel(Request $request)
    {
        abort_if(Gate::denies('report_export'), 403);

        return Excel::download(new MostVisitedPageExport($request->startdate, $request->enddate), 'MostVisitedPage.xlsx');
    }

    //Show Product Sale Page
    public function salesProd()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportsalesprod');
    }

    //Export Product Sales
    public function exportSalesProductEXCEL(Request $request)
    {
        abort_if(Gate::denies('report_export'), 403);

        return Excel::download(new SalesProductExport($request->sorting, $request->startdate, $request->enddate), 'SalesProduct.xlsx');
    }

    // Show Customer Sales Page
    public function CustomersTotalSpent()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportcustomerstotalspent');
    }

    //Export Customer Sales
    public function exportCustomerTotalSpent(Request $request)
    {
        abort_if(Gate::denies('report_export'), 403);

        return Excel::download(new CustomerSpentExport($request->sorting, $request->startdate, $request->enddate), 'CustomerTotalSpent.xlsx');
    }

    //Show Brand Sales Page
    public function salesBrand()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportsalesbrand');
    }

    //Show No of Brand Orders Page
    public function BrandOrderIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportbrandorder');
    }

    // Export Brand Sales
    public function exportSalesBrandEXCEL(Request $request)
    {
        abort_if(Gate::denies('report_export'), 403);

        return Excel::download(new SalesBrandExport($request->sorting, $request->startdate, $request->enddate), 'SalesBrand.xlsx');
    }

    //Export No of Brand Orders
    public function exportOrderBrandExcel(Request $request)
    {
        abort_if(Gate::denies('report_export'), 403);

        return Excel::download(new BrandNoOrder($request->sorting, $request->startdate, $request->enddate), 'OrderBrand.xlsx');
    }

    //Show Category Sales Page
    public function salesCategory()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportsalescategory');
    }

    //Show No. of Category Page
    public function CategoryOrderIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportcategoryorder');
    }

    //Export Category Sales
    public function exportSalesCategoryEXCEL(Request $request)
    {
        abort_if(Gate::denies('report_export'), 403);

        return Excel::download(new SalesCategoryExport($request->sorting, $request->startdate, $request->enddate), 'SalesCategory.xlsx');
    }

    //Export No of Category Orders
    public function exportOrderCategoryExcel(Request $request)
    {
        abort_if(Gate::denies('report_export'), 403);

        return Excel::download(new CategoryNoOrder($request->sorting, $request->startdate, $request->enddate), 'OrderCategory.xlsx');
    }

    public function GenderIndex()
    {
        abort_if(Gate::denies('report_access'), 403);

        return view('admin.page.Report.reportgender');
    }

    public function exportGenderExcel()
    {
        abort_if(Gate::denies('report_export'), 403);

        return Excel::download(new GenderExport, 'Gender.xlsx');
    }

    public function CancelledOrders(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportcancelledorders');
    }
    public function exportCancelledOrdersExcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new CancelledOrdersExport($request->sorting,$request->startdate,$request->enddate),'CancelledOrders.xlsx');
    }


    public function CancellationReasons(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportcancellationreasons');
    }
    public function exportCancellationReasonsExcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new CancellationReasonsExport($request->sorting,$request->startdate,$request->enddate),'CancellationReasons.xlsx');
    }


    public function RejectedOrders(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportrejectedorders');
    }
    public function exportRejectedOrdersExcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new RejectedOrdersExport($request->sorting,$request->startdate,$request->enddate),'RejectedOrders.xlsx');
    }

    public function CancellationOverTime(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportcancellationovertime');
    }

    public function MonthlyCancellation(Request $request){
        abort_if(Gate::denies('report_access'),403);
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
        // dd($month, $year);
        return view('admin.page.Report.reportmonthlycancellation',[
            'from' => $from,
            'to' => $to,
            'month' => $month,
            'year' => $year,
        ]);
    }
    public function exportCancellationOverTime(){
        abort_if(Gate::denies('report_access'),403);
        return Excel::download(new CancellationOverTimeExport,'CancellationOverTime.xlsx');
    }

    public function exportMonthlyCancellation(Request $request){
        abort_if(Gate::denies('report_access'),403);
        $month = date('F', mktime(0, 0, 0, $request->month, 10));

        return Excel::download(new MonthlyCancellationExport($request->month,$request->year,$request->startdate,$request->enddate), $month.' '.$request->year.' Cancelled Orders.xlsx');
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
        abort_if(Gate::denies('report_access'),403);

        return view('admin.page.Report.reportshowmonthlycustomer', [
            'from' => $from,
            'to' => $to,
            'month' => $month,
            'year' => $year,
            // 'month' => $request->month,
        ]);
    }

    public function customerPerMonth(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportcustomerpermonth');
    }
    public function exportCustomerPerMonthEXCEL(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new CustomerPerMonthExport,'CustomerPerMonth.xlsx');
    }





}
