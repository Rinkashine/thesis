@extends('customer.layout.base')
@section('content')
@section('title', 'Wishlist')
<!-- Begin: Header -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
            Welcome to Go Dental!
    </h2>
</div>
<!-- End: Header -->
<!-- Begin: Reviews Body -->
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    @include('customer.component.side-profile')
    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
        <!-- BEGIN: Display Information -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        My Wishlist
                    </h2>
                </div>
                <div class="p-5">
                    <!-- Dummy -->

                    <!-- Dummy -->
                    <livewire:table.product-wishlist/>

                </div>
            </div>
            <!-- END: Display Information -->
        </div>
    </div>
    <!-- End: Reviews Body -->
@endsection
