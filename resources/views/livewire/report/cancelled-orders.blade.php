<div>
    <!-- Title and Export Button -->
    <div class="flex items-center justify-between mt-5 intro-y">
        <h2 class="mr-auto text-lg font-medium">
            <a href="{{Route('report.index')}}" class="mr-2 bg-white btn">←</a> Cancelled Orders
        </h2>
        @can('report_export')
            <a href="{{Route('export.CancellationReason',['sorting'=>$sorting,'startdate'=>$from,'enddate'=>$to])}}" class="btn btn-primary">Export</a>
        @endcan
    </div>

    <div class="mt-5 sm:mt-10 intro-y box">
        <div class="p-2 border-slate-200/60 dark:border-darkmode-400">

            <div class="flex flex-col sm:p-3 sm:flex-row sm:items-end xl:items-start">
                <div class="mt-5 xl:flex sm:mr-auto" >
                    <div class="items-center sm:flex sm:mr-4">
                        <label class="flex-none mr-2 xl:w-auto xl:flex-initial">Sort</label>
                        <select wire:model="sorting"  class="w-full mt-2 form-select 2xl:w-full sm:mt-0 sm:w-auto">
                            <option value="customer_name_asc">Customer Name (A-Z)</option>
                            <option value="customer_name_desc">Customer Name (Z-A)</option>
                            <option value="total_spent_asc">Total Cancellations (Low To High)</option>
                            <option value="total_spent_desc">Total Cancellations (High To Low)</option>
                        </select>
                    </div>
                    <div class="items-center mt-2 sm:flex sm:mr-4 xl:mt-0">
                        <label class="flex-none w-12 mr-2 xl:w-auto xl:flex-initial">From:</label>
                        <input  class="mt-2 form-control sm:w-40 2xl:w-full sm:mt-0" wire:model="from" id="from" name ="from"  type="datetime-local" max="{{ $to }}" />
                    </div>

                    <div class="items-center mt-2 sm:flex sm:mr-4 xl:mt-0">
                        <label class="flex-none w-12 mr-2 xl:w-auto xl:flex-initial">To:</label>
                        <input type="datetime-local" class="mt-2 form-control sm:w-40 2xl:w-full sm:mt-0" id="to" name ="to" wire:model="to" min="{{ $from }}"/>
                    </div>
                    <div class="items-center mt-2 sm:flex sm:mr-4 xl:mt-0">
                        <label class="flex-none w-12 mr-2 xl:w-auto xl:flex-initial">Seach</label>
                        <input wire:model.lazy="search" type="search" class="mt-2 form-control sm:w-40 2xl:w-full sm:mt-0" placeholder="Search...">
                    </div>
                </div>
            </div>

            <!-- Begin: Brand Table Mobile -->
            <div class="block sm:hidden intro-y">
                @foreach ($customers as $customer)
                    <div class="grid grid-cols-4 mt-2 text-xs border rounded-lg">
                        <div class="col-span-1 p-2 rounded-l-lg bg-primary">
                            <div class="text-center text-white">
                                <div>Name</div>
                                <div>Email</div>
                                <div>Total</div>
                            </div>
                        </div>
                        <div class="col-span-3 p-2">
                            <div>
                                <a href="{{ Route('customer.show',$customer->id) }}"> {{$customer->name}}</a>
                                <div>{{$customer->email}}</div>
                                <div>{{$customer->total}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- End: Brand Table Mobile -->


            <!-- Begin: Brand Table -->
            <div class="hidden mt-3 sm:block intro-y sm:mt-0 sm:p-3" >
                <div class="border">
                    <table class="table text-xs table-fixed">
                        <thead class="bg-primary">
                            <tr class="text-white sm:text-base">
                                <th class="whitespace-nowrap ">Customer Name</th>
                                <th class="text-center whitespace-nowrap">Email</th>
                                <th class="text-center whitespace-nowrap">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer )
                                <tr class="sm:text-sm">
                                    <td class="whitespace-nowrap "><a href="{{ Route('customer.show',$customer->id) }}"> {{$customer->name}}</a> </td>
                                    <td class="text-center whitespace-nowrap">{{$customer->email}}</td>
                                    <td class="text-center whitespace-nowrap">{{$customer->total}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End: Brand Table -->
            <div class="flex flex-wrap items-center col-span-12 mt-5 intro-y sm:flex-row sm:flex-nowrap">
                <nav class="w-full sm:w-auto sm:mr-auto">
                    {!! $customers->onEachSide(1)->links() !!}
                </nav>
                <div class="mx-auto text-slate-500">
                    @if($customers->count() == 0)
                        Showing 0 to 0 of 0 entries
                    @else
                        Showing {{$customers->firstItem()}} to {{$customers->lastItem()}} of {{$customers->total()}} entries
                    @endif
                </div>
                <select wire:model="perPage" class="w-20 mt-3 form-select box sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
        </div>
    </div>
</div>
