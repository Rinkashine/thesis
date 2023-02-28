@extends('customer.layout.base')
@section('title')
    {{ $product->name }}
@endsection

@section('content')
@livewire('show.product-show',['product' => $product])
@endsection
@push('scripts')

@endpush

