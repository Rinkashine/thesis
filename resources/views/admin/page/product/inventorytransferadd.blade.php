@extends('admin.layout.admin')
@section('content')
@section('title', 'Create Transfer')
<div class="intro-y flex items-center mt-8">
    <div>
        <h2 class="text-lg font-medium mr-auto">
            <a href="{{ url()->previous() }}" class="mr-2 btn">←</a> Create Inventory Transfer
         </h2>
    </div>
</div>
<livewire:form.inventory-transfer-form/>

@endsection
@push('scripts')
<script>
        const onInput = (element,id, index)=>{
            console.log(element.value)
            console.log(id)
            console.log(index)
            livewire.emit('Prod',element.value,id,index);
        }
</script>
@endpush
