<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 overflow-hidden shadow-sm sm:rounded-lg">

                <h1 class="text-2xl font-bold mb-5 text-indigo-950">Overview</h1>

                <div class="flex justify-between">
                    <div>
                        <p class="text-sm italic text-slate-500">Total Product:</p>
                        <p class="text-xl text-indigo-950 font-semibold">{{ count($my_products) }}</p>
                    </div>
                    <div>
                        <p class="text-sm italic text-slate-500">Total Orders:</p>
                        <p class="text-xl text-indigo-950 font-semibold">{{ count($my_orders) }}</p>
                    </div>
                    <div>
                        <p class="text-sm italic text-slate-500">Total Revenue:</p>
                        <p class="text-xl text-indigo-950 font-semibold">Rp. {{ number_format($my_revenue) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
