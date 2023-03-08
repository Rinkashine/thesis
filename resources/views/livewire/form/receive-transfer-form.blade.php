<div>
    <form wire:submit.prevent="StoreReceiveInventoryData">
        <div class="grid grid-cols-12 gap-x-6 mt-5 pb-20">
            <div class="intro-y col-span-12">
                <div class="intro-y box p-5">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">Product</th>
                                    <th class="whitespace-nowrap">SKU</th>
                                    <th class="whitespace-nowrap">Accept</th>
                                    <th class="whitespace-nowrap"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transferproducts as $transfer)
                                    <tr>
                                        <td>{{ $transfer->product->name }}</td>
                                        <td>{{ $transfer->product->SKU }}</td>
                                        <td>
                                            <input type="number" wire:model="receive.{{ $transfer->id }}" min="0" max="{{ $transfer->quantity }}"  placeholder="Order Quantity" class="form-control">
                                        </td>

                                        <td> 0 out of {{ $transfer->quantity }}</td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex justify-end">
                    <input type="submit" class="btn btn-primary w-32 mt-5" value="Save" wire:offline.attr="disabled">
                </div>
            </div>
        </div>

    </form>
</div>
