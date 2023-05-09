<div class="intro-y box p-5">
    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
            <a href="{{Route('report.ProductRatings')}}" class="mr-2 btn">←</a> {{$product_name}} Ratings Report
        </div>
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <div class="xl:flex sm:mr-auto mt-5" >
                <div class="sm:flex items-center sm:mr-4">
                    <label class="flex-none xl:w-auto xl:flex-initial mr-2">Sort</label>
                    <select wire:model="sorting"  class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                        <option value="customer_name_asc">Customer Name (A-Z)</option>
                        <option value="customer_name_desc">Customer Name (Z-A)</option>
                        <option value="recent">Most Recent</option>
                        <option value="total_rating_asc">Rating(Low To High)</option>
                        <option value="total_rating_desc">Rating (High To Low)</option>
                    </select>
                </div>
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">From:</label>
                    <input class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" wire:model="from" id="from" name ="from"  type="datetime-local" max="{{ $to }}" />
                </div>
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">To:</label>
                    <input type="datetime-local" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" id="to" name ="to" wire:model="to" min="{{ $from }}"/>
                </div>
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Seach</label>
                    <input wire:model.lazy="search" type="search" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search customer name...">
                </div>
            </div>
            @can('report_export')
                <div class="mt-5">
                    <a href="{{Route('report.exportProductRatingsByCustomerExcel', ['sorting'=>$sorting,'startdate'=>$from,'enddate'=>$to, 'name' => $product_name, 'product_id' => $product_id])}}" class="btn btn-primary">
                        Excel
                    </a>
                </div>
            @endcan
        </div>

            <!-- Begin: rates Table -->
            <div class="overflow-x-auto scrollbar-hidden">
                <div class="overflow-x-auto">
                    <table class="table table-striped mt-5 table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="whitespace-nowrap text-center">Order ID</th>
                                <th class="whitespace-nowrap text-center">Customer name</th>
                                <th class="whitespace-nowrap text-center">Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rating as $rate )
                                <tr>
                                    <td class="whitespace-nowrap text-center"><a href="{{ Route('orders.show',$rate->customer_order_id) }}">#{{ ($rate->customer_order_id)}}</a></td>
                                    <td class="whitespace-nowrap text-center"><a href="{{ Route('customer.show',$rate->customer_id) }}">{{ $rate->name}}</a></td>
                                    <td class="whitespace-nowrap text-center">{{ $rate->rate}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End: rates Table -->
            <!-- Begin: rates Pagination -->
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-5">
                <nav class="w-full sm:w-auto sm:mr-auto">
                    {!! $rating->onEachSide(1)->links() !!}
                </nav>
                <div class="mx-auto text-slate-500">
                    @if($rating->count() == 0)
                        Showing 0 to 0 of 0 entries
                    @else
                        Showing {{$rating->firstItem()}} to {{$rating->lastItem()}} of {{$rating->total()}} entries
                    @endif
                </div>
                <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
            <!-- End: rates Pagination -->
        </div>
    </div>
</div>
