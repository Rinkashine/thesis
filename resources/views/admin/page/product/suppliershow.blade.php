@extends('admin.layout.admin')
@section('content')
@section('title', 'Supplier')
<!-- BEGIN: Display Supplier Information -->
<div class="intro-y box mt-2 lg:mt-5">
    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto">
            <a href="{{ url()->previous() }}" class="mr-2 btn">←</a> Supplier Information
        </h2>
    </div>
    <div class="p-5">
        <div class="grid grid-cols-12 gap-x-5">
            <div class="col-span-12 xl:col-span-6">
                <div>
                    <label for="name" class="form-label">Supplier Name</label>
                    <input type="text" placeholder="Please Enter Supplier Name" class="form-control" value="{{ $supplier->name }}" disabled  >
                </div>
                <div class="mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="text" placeholder="Please Enter Supplier Email Address" class="form-control" value="{{ $supplier->email }}" disabled  >
                </div>
            </div>
            <div class="col-span-12 xl:col-span-6">
                <div class="mt-3 xl:mt-0">
                    <label for="contact" class="form-label">Contact Name</label>
                    <input type="text" placeholder="Please Enter Supplier Contact Number" class="form-control" value="{{ $supplier->contact_name }}" disabled>
                </div>
                <div class="mt-3">
                    <label for="address" class="form-label">Contact Number</label>
                    <input type="text" placeholder="Please Enter Supplier Address" class="form-control" value="{{ $supplier->contact_number }}" disabled>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-6">
                <div class="mt-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" placeholder="Please Enter Supplier Address" class="form-control" value="{{ $supplier->address }}" disabled>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Display Supplier Information -->
@endsection
