<div>
    <div class="intro-y box p-5">
        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
            <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                <a href="{{Route('report.index')}}" class="mr-2 btn">←</a> Sales by brand
            </div>
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                <div class="xl:flex sm:mr-auto mt-5" >
                    <div class="sm:flex items-center sm:mr-4">
                        <label for="date" class="flex-none xl:w-auto xl:flex-initial mr-2">Date from</label>
                        <div class="col-sm-3">
                            <input class="form-control input-sm w-32 " wire:model="from" id="from" name ="from"  type="date" />
                        </div>
                        <label for="date" class="flex-none xl:w-auto xl:flex-initial mr-2 ml-3">Date to</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control input-sm w-32 " id="to" name ="to" wire:model="to"/>
                        </div>
                    </div>
                    <div class="sm:flex items-center sm:mr-4">
                        <label class="flex-none xl:w-auto xl:flex-initial mr-2">Sort</label>
                        <select wire:model="sorting"  class="form-select w-32 mt-2 sm:mt-0 sm:w-auto">
                            <option value="brand_name">Brand Name</option>
                            <option value="total_sales">Total Sales</option>
                        </select>
                    </div>
                </div>
                @can('report_export')
                    <div class="mt-5">
                        <a href="{{Route('exportSalesBrandEXCEL',['startdate'=>$from,'enddate'=>$to])}}" class="btn btn-primary"> <i class="fa-solid fa-file-excel mr-1"></i> Export Excel </a>
                    </div>
                @endcan
            </div>
                <!-- Product Title -->
                <div class="overflow-x-auto scrollbar-hidden intro-y" >
                    <div class="overflow-x-auto">
                        <table class="table table-striped mt-5 table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th class="whitespace-nowrap ">Brand Name</th>
                                    <th class="whitespace-nowrap text-center">Total Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand )
                                    <tr>
                                        <td class="whitespace-nowrap ">{{$brand->brand_name}}</td>
                                        <td class="whitespace-nowrap text-center">₱{{number_format($brand->total_sales)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class=" box p-5 mt-5 w-full">
        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
            <div class="flex justify-between items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                <div class="font-medium text-base">
                    Orders
                </div>
            </div>
            <div class="flex justify-center">
                <div class="mt-5 w-1/3" >
                    <canvas id="SalesTypeChart"  ></canvas>
                </div>
            </div>
        </div>
    </div>

     @push('scripts')
         <script>

            //Begin: User Type Chart
            var label =  {{ Js::from($brandlabel) }};
            var salesbranddataset =  {{ Js::from($brandsalesdataset) }};
            const salestypedate = {
            labels: label,
            datasets: [{
                label: 'Sales',
                data: salesbranddataset,
                backgroundColor: [
                'rgb(30,95,78)',
                'rgb(250,209,44)',
                'rgba(255, 99, 132)',
                'rgba(255, 159, 64)',
                'rgba(255, 205, 86)',
                'rgba(75, 192, 192)',
                'rgba(54, 162, 235)',
                'rgba(153, 102, 255)',
                'rgba(201, 203, 207)'
                ],
                hoverOffset: 4
            }]
            };
            const salestypeconfig = {
                type: 'pie',
                data: salestypedate,
            };

            const SalesTypeChart = new Chart(
                document.getElementById('SalesTypeChart'),
                salestypeconfig
            );


            //End: User Type Chart


            window.addEventListener('render-chart',event => {
                SalesTypeChart.config.data.labels = event.detail.label;

                SalesTypeChart.config.data.datasets[0].data = event.detail.salesdataset;

                SalesTypeChart.update();
                });

            //End: User Type Chart

         </script>
     @endpush
</div>

