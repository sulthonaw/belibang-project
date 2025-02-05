<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

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
                <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                    @csrf

                    <h1 class="text-3xl font-bold text-indigo-950">Add New Product</h1>

                    <!-- Avatar -->
                    <div class="mt-4">
                        <x-input-label for="cover" :value="__('Cover')" />
                        <x-text-input id="cover" class="block mt-1 w-full" type="file" accept="image/*"
                            name="cover" required />
                        <x-input-error :messages="$errors->get('cover')" class="mt-2" />
                    </div>

                    <!-- Path File -->
                    <div class="mt-4">
                        <x-input-label for="path_file" :value="__('Path File')" />
                        <x-text-input id="path_file" class="block mt-1 w-full" type="file" name="path_file"
                            accept=".zip,.rar" required />
                        <x-input-error :messages="$errors->get('path_file')" class="mt-2" />
                    </div>

                    <!-- Name -->
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Price -->
                    <div class="mt-4">
                        <x-input-label for="price" :value="__('Price')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="number" name="price"
                            :value="old('price')" required />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                    <!-- Category -->
                    <div class="mt-4">
                        <x-input-label for="category" :value="__('Category')" />
                        <select name="category_id" id="category"
                            class="border-gray-300 focus:border-indigo-500 mt-1 w-full focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">Select Category</option>
                            $@forelse ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @empty
                            @endforelse
                        </select>
                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>


                    <!-- About -->
                    <div class="mt-4">
                        <x-input-label for="about" :value="__('About')" />
                        <textarea name="about" id="about"
                            class="border-gray-300 focus:border-indigo-500 mt-1 w-full focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                        <x-input-error :messages="$errors->get('about')" class="mt-2" />
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Add Product') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
