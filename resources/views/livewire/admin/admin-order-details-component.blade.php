{{-- @dump($order->orderItems); --}}
<div class="p-3">
    <div class="">
        <h1>
            Order Details
        </h1>

        <div class="flex">
            <a href="{{ route('admin.orders') }}" class="px-4 py-2 bg-green-400 rounded">All Orders</a>
        </div>
    </div>

    <div class="my-3">
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="p-2 whitespace-nowrap">Order Id</th>
                    <th class="p-2 whitespace-nowrap">Created At</th>
                    <th class="p-2 whitespace-nowrap">Status</th>
                @if($order->status == 'delivered')
                    <th>Delivery Date</th>
                @elseif( $order->status == 'canceled')
                    <th>Cancellation Date</th>
                @endif

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->status }}</td>
                @if($order->status == 'delivered')
                    <td>{{ $order->delivered_date }}</td>
                @elseif( $order->status == 'canceled')
                    <td>{{ $order->canceled_date }}</td>
                @endif
                </tr>
            </tbody>
        </table>
    </div>
    <div class="flex flex-col">
        <h1>
            Ordered Items
        </h1>
        {{-- <div class="flex">
            <a href="{{ route('admin.orders') }}" class="px-4 py-2 bg-green-400 rounded">All Orders</a>
        </div> --}}

        <div class="flex flex-col divide-y divide-gray-100">
            <h1 class="text-lg">Products Name</h1>
            @foreach ($order->orderItems as $orderItem)
            <div class="flex items-center justify-around">
                <img src="{{ asset('assets/images/products') }}/{{ $orderItem->product->image }}" alt="{{ $orderItem->product->name }}" class="object-contain checkoutproduct__image" style="width: 100px; height: 100px;" />
                <div class="font-medium text-gray-800">{{ $orderItem->product->name }}</div>
                        <div class="font-medium text-gray-800">{{ $orderItem->price }}</div>
                <div class="font-medium text-gray-800">x</div>
                <div class="font-medium text-gray-800">{{ $orderItem->quantity }}</div>
                <div class="font-medium text-gray-800">$ {{ $orderItem->price * $orderItem->quantity }}</div>
            </div>

            <h1 class="text-lg">Order Summary</h1>
            <div class="">
                <div class="font-medium text-gray-800">Subtotal: ${{ $order->subtotal }}</div>
                <div class="font-medium text-gray-800">Tax: {{ $order->tax }}</div>
                <div class="font-medium text-gray-800">Total: ${{  $order->total  }}</div>
            </div>
            @endforeach
    </div>

    <div class="my-6">
        <h1>
            Billing Details
        </h1>

        <div class="overflow-x-auto">
            <table class="w-full mb-4 table-auto">
                <thead class="text-xs font-semibold text-gray-400 uppercase bg-gray-50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Firstname</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Lastname</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Mobile</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Email</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Line 1</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Line 2</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">City</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Province</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Zip Code</div>
                        </th>
                    </tr>
                </thead>

                <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->firstname }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->lastname }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->mobile }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->email }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->line1 }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->line2 }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->city }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->province }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->zipcode }}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div>
        <h1>
            Transaction
        </h1>

                <div class="overflow-x-auto">
            <table class="w-full mb-4 table-auto">
                <thead class="text-xs font-semibold text-gray-400 uppercase bg-gray-50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Mode</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Status</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Created At</div>
                        </th>
                    </tr>
                </thead>

                <tbody class="text-sm divide-y divide-gray-100">
                    <tr>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->transaction->mode }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->transaction->status }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-center">{{ $order->transaction->created_at }}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>

