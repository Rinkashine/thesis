@extends('admin.layout.admin')
@section('content')
@section('title', 'Order')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        <a href="{{ url()->previous() }}" class="mr-2 btn">←</a> Transaction Details
    </h2>
</div>
<!-- BEGIN: Transaction Details -->
<div class="intro-y grid grid-cols-12 gap-5 mt-5">
    <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
        @livewire('admin.transaction.change-order-status',['order' => $orderdetails])
        <livewire:admin.transaction.change-order-status-modal/>
        <div class="box p-5 rounded-md mt-5">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">Buyer Details</div>
                <a href="{{ Route('customer.show',$customerinfo->id) }}" class="flex items-center ml-auto text-primary"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> View Details </a>
            </div>
            <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Name: <a href="{{ Route('customer.show',$customerinfo->id) }}" class="underline decoration-dotted ml-1">{{ $customerinfo->name }}</a> </div>
            <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Phone Number: {{ $customerinfo->phone_number }} </div>
            <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Email: {{ $customerinfo->email }} </div>
        </div>
        <div class="box p-5 rounded-md mt-5">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">Payment Details</div>
            </div>
            <div class="flex items-center">
                <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Payment Method:
                <div class="ml-auto">{{ $orderdetails->mode_of_payment }}</div>
            </div>
            @if($orderdetails->payment_id != null)
                <div class="flex items-center mt-3">
                    <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i> Payment ID:
                    <div class="ml-auto">{{ $orderdetails->payment_id }}</div>
                </div>
            @endif
            <div class="flex items-center mt-3">
                <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Total Price:
                <div class="ml-auto">₱
                    @php
                        $total = 0
                    @endphp
                    @foreach ($orderdetails->orderTransactions as $item)
                        <?php $total += $item->quantity * $item->price ?>
                    @endforeach
                    {{ number_format($total,2) }}
                </div>
            </div>
            <div class="flex items-center mt-3">
                <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Total Shipping Cost:
                <div class="ml-auto">₱{{ number_format($orderdetails->shippingfee,2) }}</div>
            </div>

            <div class="flex items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5 font-medium">
                <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i> Grand Total:
                <div class="ml-auto">₱{{ number_format($total+$orderdetails->shippingfee,2) }}</div>
            </div>
        </div>
        <div class="box p-5 rounded-md mt-5">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">Shipping Information</div>
            </div>
            <div class="flex items-center">
                <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i>
                Received By: {{ $orderdetails->received_by }}
            </div>
            <div class="flex items-center mt-3">
                <i class="fa-solid fa-phone text-slate-500 mr-2"></i>
                Receiver Phone Number: {{ $orderdetails->phone_number }}
            </div>
            <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Receiver Address: {{ $orderdetails->house }} </div>
            <div class="flex items-center mt-3">
                <i class="fa-regular fa-address-book text-slate-500 mr-2"></i>
                Postal Code: {{ $orderdetails->province }}~{{ $orderdetails->city }}~{{ $orderdetails->barangay }}
            </div>
            <div class="flex items-center mt-3">
                <i class="fa-regular fa-pen-to-square text-slate-500 mr-2"></i>Notes: {{ $orderdetails->notes }}
            </div>

        </div>
    </div>
    <div class="col-span-12 lg:col-span-7 2xl:col-span-9">
        <div class="box p-5 rounded-md">
            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                <div class="font-medium text-base truncate">Order Details</div>
                @if($orderdetails->order_notes  == null)
                    @livewire('admin.transaction.order-notes-form',['order' => $orderdetails])
                    <livewire:admin.transaction.order-note-modal/>
                @endif
            </div>
            <div class="overflow-auto lg:overflow-visible -mt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap !py-5">Product Name</th>
                            <th class="whitespace-nowrap text-right">Unit Price</th>
                            <th class="whitespace-nowrap text-right">Qty</th>
                            <th class="whitespace-nowrap text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td class="whitespace-nowrap ml-4">
                           {{ $product->product_name }}
                            </td>
                            <td class="text-right">₱{{ number_format($product->price,2) }}</td>
                            <td class="text-right">{{ number_format($product->quantity) }}</td>
                            <td class="text-right">₱{{ number_format($product->quantity * $product->price,2) }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- Begin: Rejected Reason -->
        @if($orderdetails->rejected_reason  != null)
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Rejected Order Reason:</div>
                </div>
                <div class="overflow-auto lg:overflow-visible -mt-3">
                    {{ $orderdetails->rejected_reason }}
                </div>
            </div>
        @endif
        <!-- End: Rejected Reason -->

        <!-- Begin: Notes -->
        @if($orderdetails->order_notes  != null)
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Notes:</div>
                    @livewire('form.edit-order-notes-form',['order' => $orderdetails])
                </div>
                <div class="overflow-auto lg:overflow-visible -mt-3">
                    {{ $orderdetails->order_notes }}
                </div>
            </div>
        @endif
        <!-- End: Notes -->

        <!-- Begin: Cancellation In-Development -->
        @if($orderdetails->cancellation_reason  != null)
            <div class="box p-5 rounded-md mt-5">
                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                    <div class="font-medium text-base truncate">Cancel Reason of Customer:</div>
                    @if($orderdetails->cancellation_reason  != null)
                    <a href="" class="flex items-center ml-auto text-primary">
                        <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Edit
                    </a>
                    @endif
                </div>
                <div class="overflow-auto lg:overflow-visible -mt-3">
                    Main Reason:{{ $orderdetails->cancellation_reason->name }}
                </div>
                <div>
                    Detailed Reason: {{ $orderdetails->cancellation_details }}
                </div>
            </div>
        @endif
        <!-- End: Cancellation -->

        @if($orderdetails->status == "Pending for Approval")
            @livewire('admin.transaction.order-approval',['order' => $orderdetails])
        @endif
        <livewire:admin.transaction.order-approved-form/>
        <livewire:admin.transaction.order-reject-form/>
    </div>
</div>

<!-- END: Transaction Details -->
@endsection
@push('scripts')
    <script>
    //SuccessAlert
    window.addEventListener('SuccessAlert',event => {
        let id = (Math.random() + 1).toString(36).substring(7);
        Toastify({
            node: $("#success-notification-content") .clone() .removeClass("hidden")[0],
            duration: 7000,
            className: `toast-${id}`,
            newWindow: false,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true, }).showToast();

            const toast = document.querySelector(`.toast-${id}`)
            toast.querySelector("#title").innerText = event.detail.title
            toast.querySelector("#message").innerText = event.detail.name
        });
    //Invalid Alert
    window.addEventListener('InvalidAlert',event => {
        let id = (Math.random() + 1).toString(36).substring(7);
        Toastify({
            node: $("#invalid-success-notification-content") .clone() .removeClass("hidden")[0],
            duration: 7000,
            newWindow: true,
            className: `toast-${id}`,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true, }).showToast();

            const toast = document.querySelector(`.toast-${id}`)
                toast.querySelector("#title").innerText = event.detail.title
                toast.querySelector("#message").innerText = event.detail.name
    });
    const ApprovedModal = tailwind.Modal.getInstance(document.querySelector("#order-approved-modal"));
    window.addEventListener('OpenApprovedModal',event => {
        ApprovedModal.show();
    });
    //Hide Form Modal
    window.addEventListener('closeApprovedModal',event => {
        ApprovedModal.hide();
    });
    //Closing Modal and Refreshing its value
    const ApprovedModalEl = document.getElementById('order-approved-modal')
    ApprovedModalEl.addEventListener('hidden.tw.modal', function(event) {
        livewire.emit('forceCloseModal');
    })
      //Delete Modal
      const RejectModal = tailwind.Modal.getOrCreateInstance(document.querySelector("#order-reject-modal"));
    //Show Delete Modal
    window.addEventListener('openRejectModal',event => {
        RejectModal.show();
    });
    //Hide Delete Modal
    window.addEventListener('closeRejectModal',event => {
        RejectModal.hide();
    });
    //Hide Modal and Refresh its value
    const DeleteModal = document.getElementById('order-reject-modal')
    DeleteModal.addEventListener('hidden.tw.modal', function(event) {
        livewire.emit('forceCloseModal');
    })
    //Open Change Order Status Modal
    const ChangeOrderStatusModal = tailwind.Modal.getInstance(document.querySelector("#change-order-status-modal"));
    window.addEventListener('openChangeOrderStatusModal',event=>{
        ChangeOrderStatusModal.show();
    });
    //Hide Change Order Status Modal
    window.addEventListener('CloseChangeOrderStatusModal',event=>{
        ChangeOrderStatusModal.hide();
    });
     //Hide Modal and Refresh its value
     const RefreshChangeOrderStatusModal = document.getElementById('change-order-status-modal')
     RefreshChangeOrderStatusModal.addEventListener('hidden.tw.modal', function(event) {
        livewire.emit('forceCloseModal');
    });
    //Show Order Notes Modal
    const OrderNotesModal = tailwind.Modal.getInstance(document.querySelector("#order-notes-modal"));
    window.addEventListener('openOrderNotesModal',event=>{
        OrderNotesModal.show();
    });
    //Hide Order Notes Modal
    window.addEventListener('closeOrderNotesModal',event=>{
        OrderNotesModal.hide();
    });
     //Hide Modal and Refresh its value
     const RefreshOrderNotesModal = document.getElementById('order-notes-modal')
     RefreshOrderNotesModal.addEventListener('hidden.tw.modal', function(event) {
        livewire.emit('forceCloseModal');
    });

    </script>
@endpush
