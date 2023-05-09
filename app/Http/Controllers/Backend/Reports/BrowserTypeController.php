<?php

namespace App\Http\Controllers\Backend\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Spatie\Analytics\Period;
use PDF;
use Analytics;
use Carbon\Carbon;

class BrowserTypeController extends Controller
{
     //Show Browser Report Page
     public function BrowserIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportbrowser');
    }
    //Export Browser Report
    public function exportbrowsertypeexcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        $st = new Carbon($request->startdate);
        $ed = new Carbon($request->enddate);
        $period = Period::create($st, $ed);
        $browsers = Analytics::fetchTopBrowsers($period, 20);

        $prepared_by = Auth::guard('web')->user()->name;

        $from = Carbon::parse($request->startdate)->format("F d, Y H:i A");
        $to = Carbon::parse($request->enddate)->format("F d, Y H:i A");

        $pdf = PDF::loadView('admin.export.browser-type',[
            'browsers' => $browsers,
            'from' => $from,
            'to' => $to,
            'prepared_by' => $prepared_by
        ]);

        return $pdf->download("Browser Type.pdf");

    }
}
