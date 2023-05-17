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
        return view('admin.page.Report.browser');
    }
    //Export Browser Report
    public function exportbrowsertypeexcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        // $st = new Carbon($request->startdate);
        // $ed = new Carbon($request->enddate);
        // $period = Period::create($st, $ed);
        $browsers = Analytics::fetchTopBrowsers(Period::months(1), 20);

        $prepared_by = Auth::guard('web')->user()->name;

        $day = Carbon::now();
        $today = $day->format('F d, Y');

        $pdf = PDF::loadView('admin.export.browser-type',[
            'browsers' => $browsers,
            'today' => $today,
            'prepared_by' => $prepared_by
        ]);

        return $pdf->download("Browser Type.pdf");

    }
}
