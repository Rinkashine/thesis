<!DOCTYPE html>
<html>
<head>
    <title>How To Generate Invoice PDF In Laravel 9 - Techsolutionstuff</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;
    }
    .w-85{
        width:85%;
    }
    .w-15{
        width:15%;
    }
    .logo img{
        width:200px;
        height:60px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
<div class="head-title">
    <h1 class="text-center m-0 p-0">Invoice</h1>
</div>
<div class="add-detail mt-10">
    <div class="w-50 float-left mt-10">
        <p class="m-0 pt-5 text-bold w-100">Order Id - <span class="gray-color">{{ $orderdetails->id }}</span></p>
        <p class="m-0 pt-5 text-bold w-100">Order Date - <span class="gray-color">{{ $orderdetails->created_at->toFormattedDateString() }}</span></p>
    </div>
    <div class="w-50 float-left logo mt-10">
        <img src="{{ public_path('dist/images/MainLogo.png') }}" alt="Logo">
    </div>
    <div style="clear: both;"></div>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Shipping Address</th>
            <th class="w-50">Customer</th>
        </tr>
        <tr>
            <td>
                <div class="box-text">
                    <p>{{ $orderdetails->received_by }},</p>
                    <p>{{ $orderdetails->house }},</p>
                    <p>{{ $orderdetails->city }}</p>
                    <p>Contact: {{ $orderdetails->phone_number }}</p>
                </div>
            </td>
            <td>
                <div class="box-text">
                    <p>{{ $orderdetails->customers->name }}</p>
                    <p>email: {{ $orderdetails->customers->email }}</p>
                    <p>Contact: {{ $orderdetails->customers->phone_number }}</p>
                </div>
            </td>
        </tr>
    </table>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Payment Method</th>
        </tr>
        <tr>
            <td>Cash On Delivery</td>
        </tr>
    </table>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">Product Name</th>
            <th class="w-50">Price</th>
            <th class="w-50">Qty</th>
            <th class="w-50">Total</th>
        </tr>
        @php
            $total = 0;
        @endphp
        @foreach($orderdetails->orderTransactions as $order)
            <?php $total += $order->quantity * $order->price ?>
            <tr>
                <td>{{ $order->product_name }}</td>
                <td>₱{{ number_format($order->price,2) }}</td>
                <td>{{ number_format($order->quantity) }}</td>
                <td>₱{{ number_format($order->price * $order->quantity ,2)}}</td>
            </tr>
        @endforeach

        <tr>
            <td colspan="7">
                <div class="total-part">
                    <div class="total-left w-85 float-left" align="right">
                        <p>Total</p>
                        <p>Shipping Fee</p>
                        <p>Total Payable</p>
                    </div>
                    <div class="total-right w-15 float-left text-bold" align="right">
                        <p>
                            <span style="font-family: DejaVu Sans;">&#x20B1;</span> {{ number_format($total,2) }}
                        </p>
                        <p><span style="font-family: DejaVu Sans;">&#x20B1;</span>100</p>
                        <p><span style="font-family: DejaVu Sans;">&#x20B1;</span>{{ number_format($total + 100,2) }}</p>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </td>
        </tr>
    </table>
</div>
</html>
