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
class MostVisitedPageController extends Controller
{
       //Show Most Visited Page
    public function MostVisitedPageIndex(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.mostvisitedpage');
    }
    //Export Most Visited Page Report
    public function exportMostVisitedPageExcel(Request $request){
        abort_if(Gate::denies('report_export'),403);

        $pages = Analytics::fetchMostVisitedPages(Period::months(1), 10);

        $prepared_by = Auth::guard('web')->user()->name;

        $day = Carbon::now();
        $today = $day->format('F d, Y');

        $pdf = PDF::loadView('admin.export.most-visited-page',[
            'pages' => $pages,
            'today' => $today,
            'prepared_by' => $prepared_by
        ]);

        return $pdf->download("Most Visited Page.pdf");

    }
}
