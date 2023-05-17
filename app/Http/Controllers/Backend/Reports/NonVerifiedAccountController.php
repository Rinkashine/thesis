<?php

namespace App\Http\Controllers\Backend\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use PDF;
use Carbon\Carbon;
use App\Models\Customer;
class NonVerifiedAccountController extends Controller
{

    public function NonVerifiedAccount(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.nonverifiedaccount');
    }

    public function exportNonVerifiedAccount(Request $request){
        abort_if(Gate::denies('report_access'),403);
        $prepared_by = Auth::guard('web')->user()->name;
        $day = Carbon::now();
        $today = $day->format('F d, Y');
        $customers = Customer::select('name', 'email')->where('email_verified_at','=',null)->orderBy('name')->get();
        $pdf = PDF::loadView('admin.export.non-verified-account',[
            'customers' => $customers,
            'prepared_by' => $prepared_by,
            'today' => $today
        ]);

        return $pdf->download("Non Verified Accounts.pdf");
    }
}
