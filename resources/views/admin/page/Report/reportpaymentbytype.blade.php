@extends('admin.layout.admin')
@section('content')
@section('title', 'Payment By Type')
<div class="intro-y flex justify-between items-center mt-8">
    <div>
        <h2 class="text-lg font-medium mr-auto">
            <a href="{{ Route('report.index') }}" class="mr-2 btn">←</a>Payment By Type
        </h2>
    </div>
    <div>
        <a href="" class="btn btn-primary">Export To Excel</a>
    </div>

</div>
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Most Visited Page -->
            <div class="col-span-12 xl:col-span-8 mt-6">
                <div class=" box mt-5 w-full">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Mode Of Payment Chart
                        </h2>
                    </div>
                    <div class="p-5" >
                        <div class="flex justify-center items-center ">
                            <div class="w-1/2 h-1/2">
                                <canvas id="PaymentType"  ></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Official Store -->
            <!-- BEGIN: Weekly Best Sellers -->
            <div class="col-span-12 xl:col-span-4 2xl:mt-5">
                <div class="intro-y box  mt-12 sm:mt-5">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Values
                        </h2>
                    </div>
                    <div>
                        <table class="table mt-2 p-5">
                            <thead>
                                <th>Mode of Payment</th>
                                <th>Value</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cash On Delivery</td>
                                    <td>{{ $paymenttypedataset[0] }}</td>
                                </tr>
                                <tr>
                                    <td>Paypal</td>
                                    <td>{{ $paymenttypedataset[1] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END: Weekly Best Sellers -->
        </div>
    </div>
</div>


@endsection
@push('scripts')
<script>
    //Begin: User Type Chart
    var paymenttypelabel =  {{ Js::from($paymenttypelabel) }};
    var paymenttypedataset =  {{ Js::from($paymenttypedataset) }};
    const paymenttypedata = {
    labels: paymenttypelabel,
    datasets: [{
        label: 'User Type',
        data: paymenttypedataset,
        backgroundColor: [
        'rgb(30,95,78)',
        'rgb(250,209,44)',
        ],
        hoverOffset: 4
    }]
    };
    const paymenttypeconfig = {
        type: 'pie',
        data: paymenttypedata,
    };

    const PaymentTypeChart = new Chart(
        document.getElementById('PaymentType'),
        paymenttypeconfig
    );
    //End: User Type Chart
    </script>


@endpush


