@extends('customer.layout.base')
@section('content')
@section('title', 'Cancelled Orders')
<!-- Begin: Header -->
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
            Cancelled Orders
    </h2>
</div>
<!-- End: Header -->
<!-- Begin: Canccelation Body -->
<div class="grid grid-cols-12 gap-6">
    <!-- BEGIN: Profile Menu -->
    @include('customer.component.side-profile')
    <!-- END: Profile Menu -->
    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
        <!-- BEGIN: Display Information -->
        <div class="intro-y box lg:mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Order Cancellation
                </h2>
            </div>
            <div class="p-5">
                <div class="overflow-x-auto">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th class="whitespace-nowrap">Order Id</th>
                                <th class="whitespace-nowrap text-center">Products</th>
                                <th class="whitespace-nowrap text-center">Total</th>
                                <th class="whitespace-nowrap text-center">Status</th>
                                <th class="whitespace-nowrap text-center">Cancelled On</th>
                                <th class="whitespace-nowrap text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cancelledorders as $orders)
                                <tr>
                                    <td class="whitespace-nowrap">{{ $orders->id }}</td>
                                    <td class="whitespace-nowrap text-center">
                                        @foreach ($orders->orderTransactions as $product)
                                            {{ $product->product_name }}
                                        @endforeach
                                    </td>
                                    <td class="whitespace-nowrap text-center">
                                        ₱
                                        @php
                                            $total = 0
                                        @endphp
                                        @foreach ($orders->orderTransactions as $product)
                                            <?php $total += $product->quantity * $product->price ?>
                                        @endforeach
                                        {{number_format($total,2)}}

                                    </td>
                                    <td class="whitespace-nowrap text-center">Cancelled</td>
                                    <td class="whitespace-nowrap text-center">{{ $orders->updated_at }}</td>
                                    <td class="whitespace-nowrap text-center"><a href="{{ Route('cancellations.show',$orders) }}"><i class="fa-solid fa-eye w-4 h-4 mr-1"></i> View Details</a></td>
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
<!-- End: Canccelation Body -->
@endsection
@push('scripts')
<script>
</script>
@endpush
