<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 overflow-hidden shadow-sm sm:rounded-lg">

                <h1 class="text-2xl font-bold text-indigo-950 mb-5">My Orders</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="py-5 bg-red-500 text-white font-bold">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @forelse ($my_orders as $order)
                    <div class="item-product flex w-full gap-5 mb-5 justify-between items-center">
                        <div class="flex gap-5 items-center">
                            <img src="{{ Storage::url($order->product->cover) }}"
                                class="h-32 w-52 rounded-md object-cover" alt="product">
                            <div class="">
                                <h3 class="text-xl font-semibold">{{ $order->product->name }}</h3>
                                <p class="text-sm italic text-slate-500">{{ $order->product->category->name }}</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm italic text-slate-500">buy by</p>
                            <p class="text-xl font-bold text-indigo-950">{{ '@' . $order->buyer->name }}</p>
                        </div>
                        <div>
                            <p class="text-sm italic text-slate-500">Total price:</p>
                            <p class="text-xl font-bold text-indigo-950">Rp. {{ number_format($order->total_price) }}
                            </p>
                        </div>
                        <div>
                            @if ($order->is_paid)
                                <span
                                    class="py-2 px-3 rounded-full bg-green-600 text-xs text-white font-bold">PAID</span>
                            @else
                                <span
                                    class="py-2 px-3 rounded-full bg-orange-600 text-xs text-white font-bold">PENDING</span>
                            @endif
                        </div>
                        <div class="flex gap-3">
                            <a href="{{ route('admin.product_orders.show', $order) }}"
                                class="py-3 px-5 text-sm font-semibold bg-indigo-500 text-white rounded-full">Detail</a>

                        </div>
                    </div>
                @empty
                    <p>Your product buying is empty.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
