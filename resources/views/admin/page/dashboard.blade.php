@extends('admin.layout.admin')
@section('content')
@section('title', 'Dashboard')

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="shopping-cart" class="report-box__icon text-primary"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                                <div class="text-base text-slate-500 mt-1">Item Sales</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="monitor" class="report-box__icon text-warning"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $productcount }}</div>
                                <div class="text-base text-slate-500 mt-1">Total Products</div>
                            </div>
                        </div>
                    </div>
                    @foreach ($usertype as $usertype)
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="user" class="report-box__icon text-success"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $usertype['sessions'] }}</div>
                                <div class="text-base text-slate-500 mt-1">{{ $usertype['type'] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- END: General Report -->

            <!-- BEGIN: Most Visited Page -->
            <div class="col-span-12 xl:col-span-8 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Most Visited Page
                    </h2>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5">
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">Page Title</th>
                                    <th class="whitespace-nowrap">Views</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mostvisitedpage as $product)
                                <tr class="intro-x">
                                    <td class="w-full">
                                        <a href="http://127.0.0.1:8000{{ $product['url'] }}" class="underline text-primary">{{$product['pageTitle']}}</a>
                                    </td>
                                    <td>
                                        {{ $product['pageViews'] }}
                                    </td>
                                </tr>
                                @empty
                                <tr class="intro-x">
                                    <td colspan="2">No Data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- END: Official Store -->
            <!-- BEGIN: Weekly Best Sellers -->
            <div class="col-span-12 xl:col-span-4 mt-6">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Weekly Top Browser
                    </h2>
                </div>
                <div class="mt-5">
                    @forelse ($browsers as $browser)
                    <div class="intro-y">
                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">{{ $browser['browser'] }}</div>

                            </div>
                            <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">{{ $browser['sessions'] }}</div>
                        </div>
                    </div>
                    @empty
                    <div class="intro-y">
                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">No Data</div>
                            </div>
                        </div>
                    </div>
                    @endforelse
               </div>
            </div>
            <!-- END: Weekly Best Sellers -->

        </div>
    </div>

</div>

@endsection



