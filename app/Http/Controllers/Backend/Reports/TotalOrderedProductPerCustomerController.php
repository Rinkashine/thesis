<?php

namespace App\Http\Controllers\Backend\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use PDF;
use Carbon\Carbon;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class TotalOrderedProductPerCustomerController extends Controller
{
    public function OrdersByCustomer(){
        abort_if(Gate::denies('report_access'),403);
        return view('admin.page.Report.reportorderbycustomer');

    }
    public function exportOrdersByCustomer(){
        abort_if(Gate::denies('report_access'),403);

        $day = Carbon::now();
        $today = $day->format('F d, Y');
        $prepared_by = Auth::guard('web')->user()->name;

        $customers = Customer::select([
            'customers.id',
            'customers.name',
            'customers.email',
            DB::raw(value: 'sum(CASE WHEN customer_order.status = "Completed" then  customer_order_item.quantity end) AS total_quantity')
        ])
        ->leftjoin('customer_order','customers.id','=','customer_order.customers_id')
        ->leftjoin('customer_order_item',function($join){
            $join->on('customer_order_item.customer_order_id', '=', 'customer_order.id');
        })
        ->groupBy('customers.name','customers.id','customers.email')
        ->orderBy('total_quantity' ,'desc')
        ->get();

        $pdf = PDF::loadView('admin.export.total-ordered-products-per-customer',[
            'customers' => $customers,
            'today' => $today,
            'prepared_by' => $prepared_by
        ]);

        return $pdf->download("Customer Order Volume.pdf");


    }

}
