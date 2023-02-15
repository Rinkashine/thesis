@extends('admin.layout.admin')
@section('content')
@section('title', 'Inventory Transfer')


<!-- Begin: Inventory Transfer  -->
<livewire:table.inventory-transfer-table/>
<!-- End: Inventory Transfer  -->

@endsection

@push('scripts')
@endpush
