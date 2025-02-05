<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 overflow-hidden shadow-sm sm:rounded-lg">

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

                <div class="item-product flex flex-col w-full gap-10">
                    <img src="{{ Storage::url($order->product->cover) }}" class="h-32 w-52 rounded-md object-cover"
                        alt="product">
                    <div class="">
                        <h3 class="text-xl font-semibold">{{ $order->product->name }}</h3>
                        <p class="text-sm italic text-slate-500">{{ $order->product->category->name }}</p>
                        <p class="text-sm italic text-slate-500">buy by - {{ $order->buyer->name }}</p>
                    </div>
                    <div class="flex items-center gap-x-4">
                        <p class="mb-2">Rp. {{ $order->total_price }}</p>
                        @if ($order->is_paid)
                            <span class="py-2 px-3 rounded-full bg-green-600 text-xs text-white font-bold">PAID</span>
                        @else
                            <span
                                class="py-2 px-3 rounded-full bg-orange-600 text-xs text-white font-bold">PENDING</span>
                        @endif
                    </div>
                    <img src="{{ Storage::url($order->proof) }}" class="h-32 w-52 rounded-md object-cover" alt=proof">
                    <div class="flex gap-3">
                        @if ($order->is_paid)
                            <a href={{ route('admin.product_orders.download', $order) }}
                                class="py-3 px-5 text-sm font-semibold bg-indigo-500 text-white">DOWNLOAD</a>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
