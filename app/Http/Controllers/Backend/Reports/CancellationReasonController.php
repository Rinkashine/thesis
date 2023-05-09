<?php

namespace App\Http\Controllers\Backend\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\CancellationReason;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use PDF;
class CancellationReasonController extends Controller
{
    public function CancellationReasons(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportcancellationreasons');
    }

    public function exportCancellationReasonsExcel(Request $request){
        abort_if(Gate::denies('report_export'),403);
        $start = $request->startdate;
        $end = $request->enddate;
        $prepared_by = Auth::guard('web')->user()->name;
        $day = Carbon::now();
        $today = $day->format('F d, Y');
        $reasons = CancellationReason::select([
            'name',
            'cancellation_reason.id',
            DB::raw(value: 'COUNT(CASE WHEN customer_order.status = "Cancelled" then customer_order.cancellation_reason_id end) as total'),
        ])
        ->leftjoin('customer_order',function($join) use ($start,$end){
            $join->on('cancellation_reason.id', '=', 'customer_order.cancellation_reason_id')
            ->where('customer_order.created_at', '>=', $start)
            ->where('customer_order.created_at','<=',$end);
        })

        ->groupBy('name','cancellation_reason.id')
        ->orderBy('cancellation_reason.id')
        ->get();

        $from = Carbon::parse($start)->format("F d, Y H:i A");
        $to = Carbon::parse($end)->format("F d, Y H:i A");

        $pdf = PDF::loadView('admin.export.cancellation-reasons',[
            'reasons' => $reasons,
            'prepared_by' => $prepared_by,
            'from' => $from,
            'to' => $to,
        ]);

        return $pdf->download("Reasons For Cancellation.pdf");
    }
}
