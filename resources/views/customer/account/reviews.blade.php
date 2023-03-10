@extends('customer.layout.base')
@section('content')
@section('title', 'Order Reviews')
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
                        Order Reviews
                    </h2>
                </div>
                <div class="p-5">
                    <!-- Dummy -->

                    <!-- Dummy -->
                    <div class="overflow-x-auto">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th class="whitespace-nowrap">Order ID:</th>
                                    <th class="whitespace-nowrap text-center">Product Name</th>
                                    <th class="whitespace-nowrap text-center">Rate</th>
                                    <th class="whitespace-nowrap text-center">Comment</th>
                                    <th class="whitespace-nowrap text-center">Posted At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review)
                                <tr>
                                    <td class="whitespace-nowrap">{{ $review->customer_order_id }}</td>
                                    <td  class="whitespace-nowrap text-center">
                                        {{ $review->reviewTransactions->product_name }}
                                    </td>
                                    <td  class="whitespace-nowrap text-center">
                                        @for($x=0; $x<$review->rate; $x++)
                                            <i class="fa fa-star"> </i>
                                        @endfor
                                    </td  class="whitespace-nowrap text-center">
                                    <td class="whitespace-nowrap text-center">{{ $review->comment }}</td>
                                    <td class="whitespace-nowrap text-center">{{ $review->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
        </div>
    </div>
    <!-- End: Reviews Body -->
@endsection
@push('scripts')
<script>
</script>
@endpush
