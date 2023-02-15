@extends('customer.layout.productbase')
@section('content')
@section('title', 'Product')

<!-- Begin: Show Product -->
<livewire:table.product-catalog-table/>
<!-- End: Show Product -->

@endsection
@push('scripts')
<script>
</script>
@endpush

