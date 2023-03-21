<div>
    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
        <!-- BEGIN: Display Information -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Display Information
                </h2>
            </div>
            <div class="p-5">
                <div class="flex flex-col-reverse xl:flex-row flex-col">
                    <div class="flex-1 mt-6 xl:mt-0">
                        <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 2xl:col-span-6">
                                <div>
                                    <label for="update-profile-form-1" class="form-label">Customer Name:</label>
                                    <input id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" wire:model="name" disabled>
                                </div>
                                <div class="mt-3">
                                    <label for="update-profile-form-1" class="form-label">Phone Number:</label>
                                    <input id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" wire:model="phone" disabled>
                                </div>
                            </div>
                            <div class="col-span-12 2xl:col-span-6">
                                <div class="mt-3 2xl:mt-0">
                                    <label for="update-profile-form-1" class="form-label">Email</label>
                                    <input id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" wire:model="email" disabled>
                                </div>
                                <div class="mt-3">
                                    <label for="update-profile-form-1" class="form-label">Gender:</label>
                                    <input id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" wire:model="gender" disabled>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="mt-3">
                                    <label for="update-profile-form-5" class="form-label">Birthday</label>
                                    <input id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" wire:model="birthday" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                        <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                @if(!empty($photo))
                                    <img src="{{ url('storage/customer_profile_picture/'.$photo) }}" data-action="zoom"  alt="Missing Image">
                                @else
                                     <img alt="Missing Image" class="rounded-full" src="{{asset('dist/images/undraw_pic.svg')}}">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y box mt-5 ">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Order List
                </h2>
            </div>
            <div class="p-5">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                    <div class="xl:flex sm:mr-auto" >
                        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Search: </label>
                            <input type="search" wire:model.lazy="search" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto scrollbar-hidden">
                    @if($listoforders->count())
                    <table class="table table-striped mt-5 table-hover" >
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap ">Order #</th>
                                <th class="whitespace-nowrap text-center">Total Transaction</th>
                                <th class="whitespace-nowrap text-center">Status</th>
                                <th class="whitespace-nowrap text-center">Ordered Products</th>
                                <th class="whitespace-nowrap text-center">Order Date</th>
                                <th class="whitespace-nowrap text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listoforders as $order)
                                <tr>
                                    <td class="whitespace-nowrap"><a href=""></a> {{ $order->id }}</td>
                                    <td class="whitespace-nowrap text-center">
                                        ₱
                                        @php
                                            $total = 0
                                        @endphp
                                        @foreach ($order->orderTransactions as $item)
                                            <?php $total += $item->quantity * $item->price ?>
                                        @endforeach
                                        {{number_format($total,2)}}
                                    </td>
                                    <td class="whitespace-nowrap text-center">
                                        @if($order->status == "Completed")
                                        <div class="flex items-center justify-center whitespace-nowrap text-primary">{{ $order->status }}</div>
                                        @elseif($order->status == "Rejected")
                                        <div class="flex items-center justify-center whitespace-nowrap text-danger">{{ $order->status }}</div>
                                        @else
                                        <div class="flex items-center justify-center whitespace-nowrap text-pending">{{ $order->status }}</div>
                                        @endif

                                    </td>
                                    <td class="whitespace-nowrap text-center truncate">
                                        @foreach ($order->orderTransactions as $product)
                                            {{ $product->product_name }},
                                        @endforeach
                                    </td>
                                    <td class="whitespace-nowrap text-center">
                                        {{ $order->created_at->toFormattedDateString() }}
                                    </td>
                                    <td class="whitespace-nowrap text-center">
                                        <a href="{{ Route('orders.show',$order->id) }}">View Details</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <h2 class="intro-y text-lg font-medium mt-10">
                        <div class="flex justify-center items-center flex-col">
                            <img alt="Missing Image" class="object-fill  rounded-md h-48 w-96" src="{{ asset('dist/images/NoResultFound.svg') }}">
                            <div class="flex justify-center">No Results found <strong class="ml-1"> {{ $search }}</strong>  </div>
                        </div>
                    </h2>
                @endif
                <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-5">
                    <nav class="w-full sm:w-auto sm:mr-auto">
                        {!! $listoforders->onEachSide(1)->links() !!}
                    </nav>
                    <div class="mx-auto text-slate-500">
                         @if($listoforders->count() == 0)
                             Showing 0 to 0 of 0 entries
                         @else
                             Showing {{$listoforders->firstItem()}} to {{$listoforders->lastItem()}} of {{$listoforders->total()}} entries
                         @endif
                     </div>
                    <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
