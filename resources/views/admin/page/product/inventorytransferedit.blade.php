@extends('admin.layout.admin')
@section('content')
@section('title', 'Create Transfer')
<!-- Begin: Header -->
<div class="intro-y flex items-center mt-8">
    <div>
        <h2 class="text-lg font-medium mr-auto">
            <a href="{{ url()->previous() }}" class="mr-2 btn">←</a> T00{{ $orderinfos->id }}
            @if($orderinfos->status == "Pending")
                Pending
            @endif
         </h2>
    </div>
</div>
<!-- End: Header -->
<!-- Begin: Inventory Transfer Edit Form -->
@livewire('form.inventory-transfer-edit-form',['orderinfos' => $orderinfos])
<!-- End: Inventory Transfer Edit Form -->
@endsection

