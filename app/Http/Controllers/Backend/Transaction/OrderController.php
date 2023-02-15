<?php

namespace App\Http\Controllers\Backend\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\CustomerOrder;
use App\Models\OrderedProduct;
use App\Models\Customer;
class OrderController extends Controller
{
    //Show Order Transaction Page
    public function index(){
        abort_if(Gate::denies('order_access'),403);
        return view('admin.page.Transaction.order');
    }
    public function show($id){

        $orderdetails = CustomerOrder::findorfail($id);
        $customerinfo = Customer::findorfail($orderdetails->customers_id);
        $products = OrderedProduct::where('customer_orders_id',$orderdetails->id)->get();
        return view('admin.page.Transaction.ordershow',[
            'orderdetails' => $orderdetails,
            'products' => $products,
            'customerinfo' => $customerinfo
        ]);

    }
}
