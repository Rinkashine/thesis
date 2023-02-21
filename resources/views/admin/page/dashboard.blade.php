@extends('admin.layout.admin')
@section('content')
@section('title', 'Dashboard')

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="shopping-cart" class="report-box__icon text-primary"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">₱{{ number_format($totalsales,2) }}</div>
                                <div class="text-base text-slate-500 mt-1">Total Sales</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="monitor" class="report-box__icon text-warning"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $completedorderscount }}</div>
                                <div class="text-base text-slate-500 mt-1">Completed Orders</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="monitor" class="report-box__icon text-warning"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $activeproductcount }}</div>
                                <div class="text-base text-slate-500 mt-1">Active Products </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="monitor" class="report-box__icon text-warning"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $inactiveproductcount }}</div>
                                <div class="text-base text-slate-500 mt-1">Inactive Products </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- END: General Report -->

            <!-- BEGIN: Most Visited Page -->
            <div class="col-span-12 xl:col-span-8 mt-6">
                <div class=" box mt-5 w-full">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Summary of Sales
                        </h2>
                    </div>
                    <div class="p-5">
                        <canvas id="test" height="140px"></canvas>
                    </div>
                </div>
            </div>
            <!-- END: Official Store -->
            <!-- BEGIN: Weekly Best Sellers -->
            <div class="col-span-12 xl:col-span-4 mt-6">
                <div class=" box mt-5 w-full">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            User Type
                        </h2>
                    </div>
                    <div class="p-5">
                        <canvas id="UserType" height="80px"></canvas>
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
    var usertypelabel =  {{ Js::from($usertypelabel) }};
    var usertypedataset =  {{ Js::from($usertypedataset) }};
    const usertypedata = {
    labels: usertypelabel,
    datasets: [{
        label: 'User Type',
        data: usertypedataset,
        backgroundColor: [
        'rgb(30,95,78)',
        'rgb(250,209,44)',
        ],
        hoverOffset: 4
    }]
    };
    const usertypeconfig = {
        type: 'pie',
        data: usertypedata,
    };

    const UserTypeChart = new Chart(
        document.getElementById('UserType'),
        usertypeconfig
    );
    //End: User Type Chart
    //Begin: Sales Chart
    var MONTHS = [
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
        'August',
        'September',
        'October',
        'November',
        'December'
	];
    var saleschartlabel = {{ Js::from($saleschartlabel) }}
    var saleschartdataset = {{ Js::from($saleschartdataset) }}
    const labels = saleschartlabel;
    const data = {
    labels: labels,
    datasets: [{
        label: 'Sales',
        data: saleschartdataset,
        fill: false,
        borderColor: 'rgb(30,95,78)',
        tension: 0.1
    }]
    };

    const config = {
        type: 'line',
        data: data,
    };


    const Sales = new Chart(
        document.getElementById('test'),
        config
    );
    //End: Sales Chart

</script>


@endpush


