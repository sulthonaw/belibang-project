<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Transactions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 overflow-hidden shadow-sm sm:rounded-lg">

                <h1 class="text-2xl font-bold mb-5 text-indigo-950">My Transactions</h1>

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

                @forelse ($my_transactions as $transaction)
                    <div class="item-product flex w-full gap-5 mb-5 justify-between items-center">
                        <div class="flex gap-5 items-center">
                            <img src="{{ Storage::url($transaction->product->cover) }}"
                                class="h-32 w-52 rounded-md object-cover" alt="product">
                            <div class="">
                                <h3 class="text-xl text-indigo-950 font-semibold">{{ $transaction->product->name }}</h3>
                                <p class="text-sm italic text-slate-500">{{ $transaction->product->category->name }}</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm italic text-slate-500">Total price:</p>
                            <p class="text-xl text-indigo-950 font-semibold">Rp. {{ $transaction->total_price }}</p>
                        </div>
                        <div>
                            <p class="text-sm italic mb-1 text-slate-500">Status:</p>
                            @if ($transaction->is_paid)
                                <span
                                    class="py-1 px-3 rounded-full bg-green-600 text-xs text-white font-bold">PAID</span>
                            @else
                                <span
                                    class="py-1 px-3 rounded-full bg-orange-600 text-xs text-white font-bold">PENDING</span>
                            @endif
                        </div>
                        <div class="flex gap-3">
                            <a href="{{ route('admin.product_orders.transactions.details', $transaction) }}"
                                class="py-3 px-5 rounded-full text-sm font-semibold bg-indigo-500 text-white">Detail</a>
                        </div>
                    </div>
                @empty
                    <p>Your transaction is empty.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
