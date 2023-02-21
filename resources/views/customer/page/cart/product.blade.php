@extends('customer.layout.base')
@section('content')
@section('title', 'Product Catalog')

<!-- Begin: Show Product -->
<livewire:table.product-catalog-table/>
<!-- End: Show Product -->

@endsection
@push('scripts')
<script>
</script>
@endpush

