<div>
    <form wire:submit.prevent="StoreReceiveInventoryData">
        <div class="grid grid-cols-12 gap-x-6 mt-5 pb-20">
            <div class="intro-y col-span-12">
                <div class="intro-y box p-5">
                    <div class="overflow-x-auto">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th class="whitespace-nowrap">Product</th>
                                    <th class="whitespace-nowrap text-center">SKU</th>
                                    <th class="whitespace-nowrap">Accept</th>
                                    <th class="whitespace-nowrap text-center">Expected Product To Received</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transferproducts as $transfer)
                                    <tr>
                                        <td class="whitespace-nowrap">{{ $transfer->product->name }}</td>
                                        <td class="whitespace-nowrap text-center">{{ $transfer->product->SKU }}</td>
                                        <td class="whitespace-nowrap">
                                            <input type="number" wire:model="receive.{{ $transfer->id }}" min="0" max="{{ $transfer->quantity }}"  placeholder="Order Quantity" class="form-control">
                                        </td>
                                        <td class="whitespace-nowrap text-center">{{ $transfer->quantity }} pcs</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex justify-end">
                    <a href="{{ Route('transfer.edit',$model_id ) }}" class="btn btn-elevated-secondary w-32 mr-5 mt-5 gap-5">Cancel</a>
                    <input type="submit" class="btn btn-primary w-32 mt-5" value="Save" wire:offline.attr="disabled">
                </div>
            </div>
        </div>

    </form>
</div>
