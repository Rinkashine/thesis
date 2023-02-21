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
                        <option value="order_total">Total Orders</option>
                        <option value="order_quantity">Total Ordered Products</option>
                        <option value="total_sales">Total Sales</option>
                    </select>
                </div>
            </div>
            @can('product_export')
                <div class="flex mt-5 sm:mt-0">
                    <div class="dropdown w-1/2 sm:w-auto">
                        <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown"> <i class="fa-regular fa-newspaper w-4 h-4 mr-2"></i> Export <i class="fa-solid fa-chevron-down w-4 h-4 ml-auto sm:ml-2"></i> </button>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="{{Route('exportSalesBrandEXCEL',['startdate'=>$from,'enddate'=>$to])}}" class="dropdown-item"> <i class="fa-solid fa-file-excel mr-1"></i> Export Excel </a>
                                </li>
                                <li>
                                    <a  href="{{Route('exportSalesBrandCSV',['startdate'=>$from,'enddate'=>$to])}}" class="dropdown-item"> <i class="fa-solid fa-file-csv mr-1"></i>  Export CSV </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endcan
        </div>
            <!-- Product Title -->
            <div class="overflow-x-auto scrollbar-hidden">
                <div class="overflow-x-auto">
                    <table class="table table-striped mt-5 table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="whitespace-nowrap ">Brand Name</th>
                                <th class="whitespace-nowrap text-center">Total Orders</th>
                                <th class="whitespace-nowrap text-center">Total Ordered Products</th>
                                <th class="whitespace-nowrap text-center">Total Sales</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $brand )
                                <tr>
                                    <td class="whitespace-nowrap ">{{$brand->brand_name}}</td>
                                    <td class="whitespace-nowrap text-center">{{$brand->order_total}}</td>
                                    <td class="whitespace-nowrap text-center">{{$brand->order_quantity}}</td>
                                    <td class="whitespace-nowrap text-center">{{$brand->total_sales}}</td>
                                </tr>
                            @endforeach
                            {{-- @foreach ($nonbuyer as $brand )
                                <tr>
                                    <td class="whitespace-nowrap ">{{$brand->name}}</td>
                                    <td class="whitespace-nowrap text-center">{{$brand->email}}</td>
                                    <td class="whitespace-nowrap text-center">0</td>
                                    <td class="whitespace-nowrap text-center">0</td>
                                    <td class="whitespace-nowrap text-center">0</td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
