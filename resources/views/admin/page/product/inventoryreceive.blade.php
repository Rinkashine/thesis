@extends('admin.layout.admin')
@section('content')
@section('title', 'Receive Transfer')
<!-- Begin: Header -->
<div class="intro-y flex justify-between items-center mt-8">
    <div>
        <h2 class="text-lg font-medium mr-auto">
            Receive Items: # {{ $orderinfo->id }}
         </h2>
    </div>
<div>
<livewire:receive-transfer-form/>
@endsection

@push('scripts')

@endpush
