<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between mb-5">
                    <h1 class="text-2xl font-bold text-indigo-950">My Products</h1>
                    <a href="{{ route('admin.products.create') }}"
                        class="py-3 px-5 text-sm bg-indigo-950 text-white rounded-full">Add New Product</a>
                </div>

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

                @forelse ($products as $product)
                    <div class="item-product flex w-full gap-5 mb-5 justify-between items-center">
                        <div class="flex items-center gap-5">
                            <img src="{{ Storage::url($product->cover) }}" class="h-32 w-52 rounded-md object-cover"
                                alt="product">
                            <div class="">
                                <h3 class="text-xl font-semibold text-indigo-950">{{ $product->name }}</h3>
                                <p class="text-sm italic text-slate-500">{{ $product->category->name }}</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm italic text-slate-500">Total price:</p>
                            <p class="text-xl font-semibold text-indigo-950">Rp. {{ $product->price }}</p>
                        </div>
                        <div class="flex gap-3">
                            <a href="{{ route('admin.products.edit', $product) }}"
                                class="py-3 px-5 text-sm font-semibold bg-indigo-500 text-white rounded-full">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" href="#"
                                    class="py-3 px-5 text-sm font-semibold bg-red-500 text-white rounded-full">Delete</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p>Your product is empty.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
