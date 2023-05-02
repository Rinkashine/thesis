<div>
    <div class="intro-y flex justify-between items-center mt-8">
        <div>
            <h2 class="text-lg font-medium mr-auto">
                <a href="{{ Route('report.CancellationOverTime') }}" class="mr-2 btn">←</a>{{$date}} Order Cancellations
            </h2>
        </div>
        @can('report_export')
            <div>
                <a href="{{ Route('report.exportMonthlyCancellation', ['month'=> $month, 'year' => $year, 'startdate'=> $from,'enddate'=> $to]) }}" class="btn btn-primary">
                    Export To Excel
                </a>
            </div>
        @endcan
    </div>
    <div class="box mt-5 intro-y">
        <div class="p-5">
            <div class="overflow-x-auto">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <td class="whitespace-nowrap text-center">Order ID</td>
                            <td class="whitespace-nowrap text-center">Customer Name</td>
                            <td class="whitespace-nowrap text-center">Cancellation Reason</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cancellations as $cancellation)
                        <tr>
                            <td class="wwhitespace-nowrap text-center"> <a href="{{ Route('orders.show',$cancellation->id) }}">{{ $cancellation->id }}</a></td>
                            <td class="whitespace-nowrap text-center">{{ $cancellation->customer_name }}</td>
                            <td class="whitespace-nowrap text-center">{{ $cancellation->reason_name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
