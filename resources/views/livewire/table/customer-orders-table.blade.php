<div class="overflow-x-auto">
    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th class="whitespace-nowrap">Order ID</th>
                <th class="whitespace-nowrap text-center">Products</th>
                <th class="whitespace-nowrap text-center">Total</th>
                <th class="whitespace-nowrap text-center">Status</th>
                <th class="whitespace-nowrap text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Orders as $order)
                <tr>
                    <td class="whitespace-nowrap">#{{ $order->id }}</td>
                    <td class="whitespace-nowrap text-center truncate">
                        @foreach ($order->orderTransactions as $product)
                            {{ $product->product_name }}
                        @endforeach
                    </td>
                    <td class="whitespace-nowrap text-center">
                        ₱
                        @php
                            $total = 0
                        @endphp
                        @foreach ($order->orderTransactions as $product)
                            <?php $total += $product->quantity * $product->price ?>
                        @endforeach
                        {{number_format($total,2)}}
                    </td>
                    <td class="whitespace-nowrap text-center">
                        @if ($order->status == "Completed")
                            <div class="text-success">{{ $order->status }} </div>
                        @elseif($order->status == "Cancelled" || $order->status == "Rejected")
                            <div class="text-danger">{{ $order->status }}</div>
                        @else
                            <div class="text-pending">{{ $order->status }}</div>
                        @endif
                    </td>
                    <td class="whitespace-nowrap text-center"> <a href="{{ Route('order.show',$order->id ) }}"> <i class="fa-solid fa-eye w-4 h-4 mr-1"></i> Show Details</td></a>
                </tr>
            @empty
            <tr>
                <td colspan="5" class="font-medium">No Orders Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>


    <div class="intro-y mt-5 col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <nav class="w-full sm:w-auto sm:mr-auto">
            {!! $Orders->onEachSide(1)->links() !!}
        </nav>
        <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
</div>
