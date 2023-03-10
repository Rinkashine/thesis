@extends('admin.layout.admin')
@section('content')
@section('title', 'Add Supplier')

<div class="col-span-12 lg:col-span-8 2xl:col-span-9">
    <!-- BEGIN: Display Supplier  -->
    <div class="intro-y box mt-2 lg:mt-5">
        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Add Supplier Form
            </h2>
        </div>
        <livewire:form.supplier-form :supplier="null" />
    </div>
    <!-- END: Display Supplier -->
</div>
@endsection

