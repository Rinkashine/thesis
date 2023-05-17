<div>
    <!-- Title and Export Button -->
    <div class="flex items-center justify-between mt-5 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            <a href="{{ Route('report.index') }}" class="mr-2 bg-white btn">←</a>Browser Report
        </h2>
        @can('report_export')
            <a href="{{ Route('export.browser') }}" class="btn btn-primary">Export</a>
        @endcan
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Main Body Chart -->
        <div class="hidden col-span-12 sm:mt-5 xl:col-span-8 sm:block intro-y">
            <div class="w-full mt-5 box">
                <div class="p-5" >
                    <div class="flex items-center justify-center ">
                        <div class="w-1/2 h-1/2" wire:ignore>
                            <canvas id="BrowserType"  ></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END: Main Body Chart -->
        <!-- BEGIN: Table Data -->
        <div class="col-span-12 sm:mt-5 xl:col-span-4 2xl:mt-5">
            <div class="p-2 mt-5 intro-y box">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="mr-auto text-base font-medium">
                        Browser Ranking
                    </h2>
                </div>



                <div class="mt-3 sm:p-3">
                    <div class="border rounded-lg sm:text-base">
                        <table class="table text-xs table-fixed">
                            <thead class="text-white bg-primary">
                                <tr class="sm:text-base">
                                    <td class="text-center whitespace-nowrap">Rank</td>
                                    <td class="text-center whitespace-nowrap">Browser</td>
                                    <td class="text-center whitespace-nowrap">Sessions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($browsers as $browser)
                                    <tr class="sm:text-sm">
                                        <td class="text-center whitespace-nowrap">{{ $loop->iteration }}</td>
                                        <td class="text-center whitespace-nowrap">{{ $browser['browser'] }}</td>
                                        <td class="text-center whitespace-nowrap">{{ $browser['sessions']  }}</td>
                                    </tr>
                                @empty
                                    <tr class="sm:text-sm">
                                        <td class="text-center whitespace-nowrap" colspan="3">No Data Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Table Data -->
    </div>
    @push('scripts')
        <script>
            var browserchartlabel = {{ Js::from($browserchartlabel) }};
            var browserchartdataset =  {{ Js::from($browserchartdataset) }};
            let randomBackgroundColor = [];
            let usedColors = new Set();

            let dynamicColors = function() {
                let r = Math.floor(Math.random() * 255);
                let g = Math.floor(Math.random() * 255);
                let b = Math.floor(Math.random() * 255);
                let color = "rgb(" + r + "," + g + "," + b + ")";

                if (!usedColors.has(color)) {
                    usedColors.add(color);
                    return color;
                } else {
                    return dynamicColors();
                }
            };

            for (let i in browserchartlabel) {
                randomBackgroundColor.push(dynamicColors());
            }

            const data = {
                labels: browserchartlabel,
                datasets: [{
                    label: 'Most Used Browser',
                    data: browserchartdataset,
                    backgroundColor: randomBackgroundColor,
                    hoverOffset: 4
                }]
            };

            const config = {
                type: 'doughnut',
                data: data,
            };

            const BrowserChart = new Chart(
                document.getElementById('BrowserType'),
                config
            );

            window.addEventListener('render-chart',event => {
                BrowserChart.config.data.labels = event.detail.label;
                BrowserChart.config.data.datasets[0].data = event.detail.dataset;
                BrowserChart.update()
            });
        </script>
    @endpush

</div>
