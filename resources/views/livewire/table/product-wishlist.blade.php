<div>
    <div class="overflow-x-auto">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th class="whitespace-nowrap">Product</th>
                    <th class="whitespace-nowrap text-center">Added At</th>
                    <th class="whitespace-nowrap text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($wishlists as $wishlist)
                    <tr>
                        <td class="whitespace-nowrap"><a href="{{ Route('productshow', $wishlist->product_id)  }}">{{ $wishlist->product->name }}</a></td>
                        <td class="whitespace-nowrap text-center">{{ $wishlist->created_at }}</td>
                        <td class="whitespace-nowrap text-center">
                            <button type="submit" wire:click="RemoveProduct({{$wishlist->id}})">Remove</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="whitespace-nowrap text-center">No Wishlist Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
