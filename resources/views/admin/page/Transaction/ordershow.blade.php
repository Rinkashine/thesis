@extends('admin.layout.admin')
@section('content')
@section('title', 'Order')
<!-- Begin: Intro Header -->
<div class="intro-y flex justify-between items-center mt-8">
    <div>
        <h2 class="text-lg font-medium mr-auto">
            <a href="{{ url()->previous() }}" class="mr-2 btn">←</a> Transaction Details
        </h2>
    </div>
    <div>
        <button class="btn btn-primary" value="">Print Waybill</button>
    </div>
</div>
<!-- End: Intro Header -->
<!-- BEGIN: Transaction Details -->
@livewire('admin.transaction.order-details',['orderdetails' => $orderdetails])
<!-- END: Transaction Details -->

@endsection
@push('scripts')
    <script>
    //SuccessAlert

    //Hide Modal and Refresh its value

    </script>
@endpush
