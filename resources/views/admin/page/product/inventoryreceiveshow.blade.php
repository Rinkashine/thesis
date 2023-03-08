@extends('admin.layout.admin')
@section('content')
@section('title', 'Show Transfer')
<!-- Begin: Header -->
<div class="intro-y flex justify-between items-center mt-8">
    <div>
        <h2 class="text-lg font-medium mr-auto">
            <a href="{{ Route('transfer.index') }}" class="mr-2 btn">←</a> {{ $orderinfo->id }}
            <span class=" btn-rounded btn-success-soft w-full text-sm mr-1 mb-2 p-1">
                {{ $orderinfo->status }}
            </span>
         </h2>
    </div>
</div>

<div class="grid grid-cols-12 gap-x-6 mt-5 pb-20">
    <div class="intro-y col-span-12">
        <!-- Begin: Supplier Information -->
        <div class="intro-y box p-5">
            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                <div class="flex justify-between items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                    <div class="font-medium text-base">
                        Supplier
                    </div>
                    <div class="dropdown">
                        <button type="button" class="dropdown-toggle underline text-blue-400" aria-expanded="false" data-tw-toggle="dropdown">
                            View Supplier Info
                        </button>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <div class="dropdown-header">Address</div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    {{ $orderinfo->suppliers->address }}
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <div class="dropdown-header">Contact</div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>{{ $orderinfo->suppliers->contact_name }}</li>
                                <li>{{ $orderinfo->suppliers->email }}</li>
                                <li>{{ $orderinfo->suppliers->contact_number }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Supplier Origin -->
                <div class="mt-5 form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                    <div class="form-label xl:w-64 xl:!mr-10">
                        <div class="text-left">
                            <div class="flex items-center">
                                <div class="font-medium">Supplier Origin</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mt-3 xl:mt-0 flex-1">
                        <input type="text" disabled class="form-control w-full" value="{{ $orderinfo->suppliers->name }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Supplier Information -->
        <!-- BEGIN: Ordered Products -->
        <div class="intro-y box p-5 mt-5">
            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                <div class="flex justify-between items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                    <div class="font-medium text-base">
                        Ordered products
                    </div>
                </div>
                <div class="mt-5">
                    <div class="overflow-x-auto mt-5">
                        <table class="table table-bordered table-hover">
                            <thead class="">
                                <tr>
                                    <th class="whitespace-nowrap">Product Name</th>
                                    <th  class="whitespace-nowrap text-center">SKU</th>
                                    <th class="whitespace-nowrap text-center">Received</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orderinfo->ordered_items as $item)
                                    <tr>
                                        <td  class="whitespace-nowrap ">{{ $item->product->name }}</td>
                                        <td  class="whitespace-nowrap text-center">{{ $item->product->SKU }}</td>
                                        <td  class="whitespace-nowrap text-center">{{ $item->accepted_quantity }} of {{ $item->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Ordered Products -->
        <!-- Begin: Shipment and Additional Details -->
        <div class="flex intro-y justify-between flex-col  md:flex-col lg:flex-row  2xl:flex-row  sm:flex-col gap-5 ">
            <div class=" box p-5 mt-5 w-full">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="flex justify-between items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <div class="font-medium text-base">
                            Shipping Details
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-5">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Estimated Arrival:</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <input type="date" class="form-control" data-single-mode="true" disabled  value="{{ $orderinfo->shipping_date }}">
                            </div>
                        </div>
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-5">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Tracking Number:</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <div class="relative w-full mx-auto">
                                    <input type="text" wire:model="tracking" class="form-control" disabled value="{{ $orderinfo->tracking }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" box p-5 mt-5 w-full">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="flex justify-between items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <div class="font-medium text-base">
                            Remarks
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <textarea class="form-control" rows="5" disabled>{!! $orderinfo->remarks !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- End: Shipment and Additional Details -->
    </div>
</div>
@endsection

