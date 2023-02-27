<div>
    <div class="intro-y box p-5">
        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
            <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                <a href="{{Route('report.index')}}" class="mr-2 btn">←</a> Sales by category
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
                            <option value="category_name">Category Name</option>
                            <option value="order_quantity">Total Ordered Products</option>
                        </select>
                    </div>
                </div>
                @can('report_export')
                    <div class="mt-5">
                        <a href="{{Route('exportOrderCategoryExcel',['startdate'=>$from,'enddate'=>$to])}}" class="btn btn-primary"> <i class="fa-solid fa-file-excel mr-1"></i> Export Excel </a>
                    </div>
                @endcan
            </div>
                <!-- Product Title -->
                <div class="overflow-x-auto scrollbar-hidden">
                    <div class="overflow-x-auto">
                        <table class="table table-striped mt-5 table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th class="whitespace-nowrap ">Category Name</th>
                                    <th class="whitespace-nowrap text-center">Total Ordered Products</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category )
                                    <tr>
                                        <td class="whitespace-nowrap ">{{$category->category_name}}</td>
                                        <td class="whitespace-nowrap text-center">{{ number_format($category->order_quantity)}}</td>
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
                    <canvas id="SalesOrderChart"  ></canvas>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>

        var label =  {{ Js::from($categorylabel) }};

        //Begin: Order Chart
        var salesorderdataset =  {{ Js::from($categoryordersdataset) }};
        const ordertypedata = {
        labels: label,
        datasets: [{
            label: 'Orders',
            data: salesorderdataset,
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
        const ordertypeconfig = {
            type: 'pie',
            data: ordertypedata,
        };

        const SalesOrderChart = new Chart(
            document.getElementById('SalesOrderChart'),
            ordertypeconfig
        );

        window.addEventListener('render-chart',event => {
            SalesOrderChart.config.data.labels = event.detail.label;

            SalesOrderChart.config.data.datasets[0].data = event.detail.orderdataset;

            SalesOrderChart.update();
            });

        //End: Order Chart
        </script>
    @endpush
</div>
