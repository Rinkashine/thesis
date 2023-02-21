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

use App\Models\CustomerOrder;
use Illuminate\Support\Facades\DB;



class ReportController extends Controller
{
    //report_access
    //Show Report Page
    public function index(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.report');
    }

    public function BrowserIndex(){
        abort_if(Gate::denies('report_access'),403);
        $browsers = Analytics::fetchTopBrowsers(Period::days(7),20);
        $browserchartlabel = [];
        $browserchartdataset = [];

        foreach($browsers as $browser){
            array_push($browserchartlabel, $browser['browser']);
            array_push($browserchartdataset, $browser['sessions']);
        }

        return view('admin.page.Report.reportbrowser',[
            'browsers' => $browsers,
            'browserchartlabel' => $browserchartlabel,
            'browserchartdataset' => $browserchartdataset
        ]);
    }

    public function exportbrowsertypeexcel(){
        abort_if(Gate::denies('report_access'),403);
        return Excel::download(new BrowserTypeExport,'browsertype.xlsx');
    }

    public function GrossSalesIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportgrosssales');
    }

    public function SalesOvertimeIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportsalesovertime');
    }

    public function exportsalesovertime(){
        abort_if(Gate::denies('report_access'),403);
        return Excel::download(new SalesOverTimeExport,'salesovertime.xlsx');
    }

    public function UserTypeIndex(){
        abort_if(Gate::denies('report_access'),403);
        $usertype = Analytics::fetchUserTypes(Period::days(7));
        $usertypelabel = [];
        $usertypedataset = [];
        foreach($usertype as $type){
            //dd($test);
            array_push($usertypelabel, $type['type']);
            array_push($usertypedataset, $type['sessions']);
        }
        return view('admin.page.Report.reportusertype',[
            'usertype' => $usertype,
            'usertypelabel' => $usertypelabel,
            'usertypedataset' => $usertypedataset

        ]);
    }

    public function exportusertypeexcel(){
        abort_if(Gate::denies('report_access'),403);
        return Excel::download(new UserTypeExport,'usertype.xlsx');
    }

    public function PaymentTypeIndex(){
        abort_if(Gate::denies('report_access'),403);
        $cod = CustomerOrder::where('status','Completed')
        ->where('mode_of_payment', "Cash On Delivery")
        ->get()
        ->count();

        $paypal = CustomerOrder::where('status','Completed')
        ->where('mode_of_payment', "Paid by Paypal")
        ->get()
        ->count();

        $paymenttypedataset = [];
        array_push($paymenttypedataset, $cod);
        array_push($paymenttypedataset, $paypal);

        $paymenttypelabel = ["Cash On Delivery", "Paypal"];


        return view('admin.page.Report.reportpaymentbytype',[
            'paymenttypelabel' => $paymenttypelabel,
            'paymenttypedataset' => $paymenttypedataset,
        ]);
    }

    public function ProfitByProductIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportprofitbyproduct');
    }

    public function SalesByCustomerIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportbrowser');
    }

    public function MostVisitedPageIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportmostvisitedpage');

    }


    public function salesProd(){
        abort_if(Gate::denies('report_access'),403);

        return view('admin.page.Report.reportsalesprod');
    }

    public function exportSalesProductEXCEL(Request $request){
        abort_if(Gate::denies('product_export'),403);
        return Excel::download(new SalesProductExport($request->startdate,$request->enddate),'SalesProduct.xlsx');
    }
    public function exportSalesProductCSV(Request $request){
        abort_if(Gate::denies('product_export'),403);
        return Excel::download(new SalesProductExport($request->startdate,$request->enddate),'SalesProduct.csv');
    }

    // SalesCustomer
    public function salesCustomer(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportsalescustomer');
    }


    public function exportSalesCustomerEXCEL(Request $request){
        abort_if(Gate::denies('product_export'),403);
        return Excel::download(new SalesCustomerExport($request->startdate,$request->enddate),'SalesCustomer.xlsx');
    }
    public function exportSalesCustomerCSV(Request $request){
        abort_if(Gate::denies('product_export'),403);
        return Excel::download(new SalesCustomerExport($request->startdate,$request->enddate),'SalesCustomer.csv');
    }

    public function exportSalesBrandEXCEL(Request $request){
        abort_if(Gate::denies('product_export'),403);
        return Excel::download(new SalesBrandExport($request->startdate,$request->enddate),'SalesBrand.xlsx');
    }
    public function exportSalesBrandCSV(Request $request){
        abort_if(Gate::denies('product_export'),403);
        return Excel::download(new SalesBrandExport($request->startdate,$request->enddate),'SalesBrand.csv');
    }

    public function exportSalesCategoryEXCEL(Request $request){
        abort_if(Gate::denies('product_export'),403);
        return Excel::download(new SalesCategoryExport($request->startdate,$request->enddate),'SalesCategory.xlsx');
    }
    public function exportSalesCategoryCSV(Request $request){
        abort_if(Gate::denies('product_export'),403);
        return Excel::download(new SalesCategoryExport($request->startdate,$request->enddate),'SalesCategory.csv');
    }

    public function salesBrand(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportsalesbrand');
    }

    public function salesCategory(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportsalescategory');
    }


}
