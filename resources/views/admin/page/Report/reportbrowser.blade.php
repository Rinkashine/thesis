@extends('admin.layout.admin')
@section('content')
@section('title', 'Browser Report')
<div class="intro-y flex justify-between items-center mt-8">
    <div>
        <h2 class="text-lg font-medium mr-auto">
            <a href="{{ Route('report.index') }}" class="mr-2 btn">←</a>Browser Report
        </h2>
    </div>
    <div>
        <a href="{{ Route('exportbrowsertypeexcel') }}" class="btn btn-primary">Export To Excel</a>
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
                            Most Used Browser
                        </h2>
                    </div>
                    <div class="p-5" >
                        <div class="flex justify-center items-center ">
                            <div class="w-1/2 h-1/2">
                                <canvas id="UserType"  ></canvas>
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
                            Browser Ranking
                        </h2>
                    </div>
                    <div class="grid grid-cols-3 gap-4 p-5">
                        <div class="...">Rank</div>
                        <div class="text-center">Browser</div>
                        <div class="ml-auto">Session</div>
                        @foreach ($browsers as $browser)
                            <div class="ml-2">{{ $loop->iteration }}</div>
                            <div class="text-center">{{ $browser['browser'] }}</div>
                            <div class="ml-auto mr-5">{{ $browser['sessions'] }}</div>
                        @endforeach
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
    var browserchartlabel = {{ Js::from($browserchartlabel) }};
    var browserchartdataset =  {{ Js::from($browserchartdataset) }};
    const data = {
    labels: browserchartlabel,
    datasets: [{
        label: 'Most Used Browser',
        data: browserchartdataset,
        backgroundColor: [
        'rgb(30,95,78)',
        'rgb(250,209,44)',
        'rgb(246,168,35)'
    ],
    hoverOffset: 4
  }]
};
    const config = {
    type: 'doughnut',
    data: data,
    };
    const UserTypeChart = new Chart(
            document.getElementById('UserType'),
            config
        );
</script>

@endpush


