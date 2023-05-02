<div>
    <div class="intro-y box p-5">
        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
            <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                <a href="{{Route('report.index')}}" class="mr-2 btn">←</a> Quantity of Orders by Brand
            </div>
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                <div class="xl:flex sm:mr-auto mt-5" >
                    <div class="sm:flex items-center sm:mr-4">
                        <label class="flex-none xl:w-auto xl:flex-initial mr-2">Sort</label>
                        <select wire:model="sorting"  class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                            <option value="brand_name_asc">Brand Name (A-Z)</option>
                            <option value="brand_name_desc">Brand Name (Z-A)</option>
                            <option value="order_quantity_asc">Order Quantity (Low To High)</option>
                            <option value="order_quantity_desc">Order Quantity (High To Low)</option>
                        </select>
                    </div>
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">From:</label>
                        <input " class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" wire:model="from" id="from" name ="from"  type="datetime-local" max="{{ $to }}" />
                    </div>
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">To:</label>
                        <input type="datetime-local" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" id="to" name ="to" wire:model="to" min="{{ $from }}"/>
                    </div>
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Seach</label>
                        <input wire:model.lazy="search" type="search" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
                    </div>
                </div>
                @can('report_export')
                    <div class="mt-5">
                        <a href="{{Route('exportOrderBrandExcel',['sorting'=>$sorting,'startdate'=>$from,'enddate'=>$to])}}" class="btn btn-primary">
                                Export Excel
                        </a>
                    </div>
                @endcan
            </div>
            <!-- Begin: Brand Table -->
            <div class="overflow-x-auto scrollbar-hidden intro-y" >
                <div class="overflow-x-auto">
                    <table class="table table-striped mt-5 table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="whitespace-nowrap ">Brand Name</th>
                                <th class="whitespace-nowrap text-center">Total Ordered Products</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand )
                                <tr>
                                    <td class="whitespace-nowrap ">{{$brand->name}}</td>
                                    <td class="whitespace-nowrap text-center">{{number_format($brand->order_quantity)}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End: Brand Table -->
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-5">
                <nav class="w-full sm:w-auto sm:mr-auto">
                    {!! $brands->onEachSide(1)->links() !!}
                </nav>
                <div class="mx-auto text-slate-500">
                    @if($brands->count() == 0)
                        Showing 0 to 0 of 0 entries
                    @else
                        Showing {{$brands->firstItem()}} to {{$brands->lastItem()}} of {{$brands->total()}} entries
                    @endif
                </div>
                <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
        </div>
    </div>
    </div>
    <div class=" box p-5 mt-5 w-full">
        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
            <div class="flex justify-between items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                <div class="font-medium text-base">
                    Quantity Orders Chart
                </div>
            </div>
            <div class="flex justify-center">
                <div class="w-full" >
                    <canvas id="SalesOrderChart"  ></canvas>
                </div>
            </div>
        </div>
    </div>

     @push('scripts')
         <script>
            //Begin: User Type Chart+
            var label =  {{ Js::from($brandlabel) }};

            var salesorderdataset =  {{ Js::from($brandordersdataset) }};
            const ordertypedata = {
            labels: label,
            datasets: [{
                label: 'Orders',
                data: salesorderdataset,
                backgroundColor: [
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
                type: 'bar',
                data: ordertypedata,
                options: {
                    scales: {
                    y: {
                        beginAtZero: true
                        }
                    }
                },
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

            //End: User Type Chart

         </script>
     @endpush
</div>

