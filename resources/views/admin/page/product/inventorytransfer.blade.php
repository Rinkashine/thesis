@extends('admin.layout.admin')
@section('content')
@section('title', 'Inventory Transfer')
<div class="intro-y flex justify-between  items-center mt-8">
    <div>
        <h2 class="text-lg font-medium mr-auto">
            Transfer
         </h2>
    </div>
    <div>
        <a href="{{ Route('transfer.create') }}" class="btn btn-primary">Create Transfer</a>
    </div>
</div>

<livewire:table.inventory-transfer-table/>

@endsection
@push('scripts')
@endpush
