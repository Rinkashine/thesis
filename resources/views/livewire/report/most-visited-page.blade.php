<div>
    <div class="intro-y flex justify-between items-center mt-8">
        <div>
            <h2 class="text-lg font-medium mr-auto">
                <a href="{{ Route('report.index') }}" class="mr-2 btn">←</a>Most Visited Page Report
            </h2>
        </div>
        @can('report_export')
            <div>
                <a href="{{ Route('exportMostVisitedPageExcel',['startdate'=>$startdate,'enddate'=>$enddate]) }}" class="btn btn-primary">Export To Excel</a>
            </div>
        @endcan
    </div>
    <div class="intro-y box mt-5 ">

        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start ">
                <div class="xl:flex sm:mr-auto" >
                    <div class="sm:flex items-center sm:mr-4">
                        <label class="flex-none xl:w-auto xl:flex-initial mr-2">From:</label>
                        <input type="date" wire:model.lazy="startdate" class="form-control" max="{{ $enddate }}">
                    </div>
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">To:</label>
                        <input type="date" wire:model.lazy="enddate" class="form-control" min="{{ $startdate }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5" wire:ignore>
            <canvas id="visitedpagechart" height="80px"></canvas>
        </div>
    </div>
    <div class="intro-y box mt-5 ">
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Data
            </h2>
        </div>
        <div class="p-5">
            <div class="overflow-x-auto">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <td class="whitespace-nowrap text-center">Rank</td>
                            <td class="whitespace-nowrap text-center">Page</td>
                            <td class="whitespace-nowrap text-center">Views</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mostvisitedpage as $page)
                        <tr>
                            <td class="whitespace-nowrap text-center">{{ $loop->iteration }}</td>
                            <td class="whitespace-nowrap text-center"><a href="{{ $page['url']}}">{{ $page['pageTitle'] }}</a></td>
                            <td class="whitespace-nowrap text-center">{{ $page['pageViews'] }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td class="whitespace-nowrap text-center" colspan="3">No Data Found</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        const data = {
        labels: {{ Js::from($mostvisitedlabel) }},
            datasets: [{
                label: 'Page Views',
                data: {{ Js::from($mostvisiteddataset) }},
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        //init block
        let visitedpagechart = new Chart(
            document.getElementById('visitedpagechart'), config
        );

        window.addEventListener('render-chart',event => {
            visitedpagechart.config.data.labels = event.detail.label;
            visitedpagechart.config.data.datasets[0].data = event.detail.dataset;
            visitedpagechart.update()
        });

    </script>

    @endpush


</div>
