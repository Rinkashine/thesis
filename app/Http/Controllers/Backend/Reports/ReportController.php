<?php

namespace App\Http\Controllers\Backend\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Analytics;
use Spatie\Analytics\Period;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BrowserTypeExport;
use App\Exports\UserTypeExport;
use App\Exports\SalesOverTimeExport;
use App\Exports\SalesProductExport;
use App\Exports\SalesCategoryExport;
use App\Exports\SalesCustomerExport;
use App\Exports\SalesBrandExport;
use App\Exports\MostVisitedPageExport;
use App\Exports\GenderExport;

use App\Exports\CategoryNoOrder;
use App\Exports\BrandNoOrder;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\DB;



class ReportController extends Controller
{
    //Show Report Main Page
    public function index(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.report');
    }
    //Show Browser Report Page
    public function BrowserIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportbrowser');
    }
    //Export Browser Report
    public function exportbrowsertypeexcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new BrowserTypeExport($request->startdate,$request->enddate),'browsertype.xlsx');
    }
    //Show Sales Over Time Report Page
    public function SalesOvertimeIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportsalesovertime');
    }
    //Export Sales Over Tieme
    public function exportsalesovertime(){
        abort_if(Gate::denies('report_access'),403);
        return Excel::download(new SalesOverTimeExport,'salesovertime.xlsx');
    }
    //Show User Type Report Page
    public function UserTypeIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportusertype');
    }
    //Export User Type
    public function exportusertypeexcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new UserTypeExport($request->startdate,$request->enddate),'usertype.xlsx');
    }
    //Show Payment Type Report Page
    public function PaymentTypeIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportpaymentbytype');
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
    //Show Most Visited Page
    public function MostVisitedPageIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportmostvisitedpage');
    }
    //Export Most Visited Page Report
    public function exportMostVisitedPageExcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new MostVisitedPageExport($request->startdate,$request->enddate),'MostVisitedPage.xlsx');
    }
    //Show Product Sale Page
    public function salesProd(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportsalesprod');
    }
    //Export Product Sales
    public function exportSalesProductEXCEL(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new SalesProductExport($request->startdate,$request->enddate),'SalesProduct.xlsx');
    }
    // Show Customer Sales Page
    public function salesCustomer(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportsalescustomer');
    }
    //Export Customer Sales
    public function exportSalesCustomerEXCEL(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new SalesCustomerExport($request->startdate,$request->enddate),'SalesCustomer.xlsx');
    }
    //Show Brand Sales Page
    public function salesBrand(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportsalesbrand');
    }
    //Show No of Brand Orders Page
    public function BrandOrderIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportbrandorder');
    }
    // Export Brand Sales
    public function exportSalesBrandEXCEL(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new SalesBrandExport($request->startdate,$request->enddate),'SalesBrand.xlsx');
    }
    //Export No of Brand Orders
    public function exportOrderBrandExcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new BrandNoOrder($request->startdate,$request->enddate),'OrderBrand.xlsx');
    }
    //Show Category Sales Page
    public function salesCategory(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportsalescategory');
    }
    //Show No. of Category Page
    public function CategoryOrderIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportcategoryorder');
    }
    //Export Category Sales
    public function exportSalesCategoryEXCEL(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new SalesCategoryExport($request->startdate,$request->enddate),'SalesCategory.xlsx');
    }
    //Export No of Category Orders
    public function exportOrderCategoryExcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new CategoryNoOrder($request->startdate,$request->enddate),'OrderCategory.xlsx');
    }
    public function GenderIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportgender');
    }
    public function exportGenderExcel(){
        abort_if(Gate::denies('report_export'),403);
        return Excel::download(new GenderExport,'Gender.xlsx');
    }
}
