<?php

namespace App\Http\Controllers\Frontend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerOrderItems;


class CustomerCancellationController extends Controller
{
    public function index(){
        $customer_id = Auth::guard('customer')->user()->id;
        $cancelledorders = CustomerOrder::where('customers_id',$customer_id)
        ->where('status','Cancelled')
        ->get();
        return view('customer.account.cancellations',[
            'cancelledorders' => $cancelledorders
        ]);
    }
    public function show($customerorder){
        $orderdetails = CustomerOrder::findorfail($customerorder);
        $products = CustomerOrderItems::where('customer_orders_id',$orderdetails->id)->get();


        return view('customer.account.cancellationdetail',[
            'orderdetails' => $orderdetails,
            'products' => $products

        ]);
    }
}
