<?php

namespace App\Http\Controllers\Backend\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountVerificationController extends Controller
{
    public function AccountVerification(){
        abort_if(Gate::denies('report_access'),403);
        // dd('this is account verification');
        return view('admin.page.Report.reportaccountverification');
    }
}
