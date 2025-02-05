<section id="NewProduct" class="container max-w-[1130px] mx-auto mb-[102px] flex flex-col gap-8">
    <h2 class="font-semibold text-[32px]">New Product</h2>
    <div class="grid grid-cols-4 gap-[22px]">
        @forelse ($products as $item)
            <div class="product-card flex flex-col rounded-[18px] bg-[#181818] overflow-hidden">
                <a href="{{ route('front.details', [$item['slug']]) }}"
                    class="thumbnail w-full h-[180px] flex shrink-0 overflow-hidden relative">
                    <img src="{{ Storage::url($item['cover']) }}" class="w-full h-full object-cover" alt="thumbnail">
                    <p class="backdrop-blur bg-black/30 rounded-[4px] p-[4px_8px] absolute top-3 right-[14px] z-10">Rp
                        {{ number_format($item['price']) }}</p>
                </a>
                <div class="p-[10px_14px_12px] h-full flex flex-col justify-between gap-[14px]">
                    <div class="flex flex-col gap-1">
                        <a href="{{ route('front.details', [$item['slug']]) }}"
                            class="font-semibold line-clamp-2 hover:line-clamp-none">{{ $item['name'] }}</a>
                        <p
                            class="bg-[#2A2A2A] font-semibold text-xs text-belibang-grey rounded-[4px] p-[4px_6px] w-fit">
                            {{ $item['category']['name'] }}</p>
                    </div>
                    <div class="flex items-center gap-[6px]">
                        <div class="w-6 h-6 flex shrink-0 items-center justify-center rounded-full overflow-hidden">
                            <img src="{{ Storage::url($item['creator']['avatar']) }}" class="w-full h-full object-cover"
                                alt="logo">
                        </div>
                        <a href=""
                            class="font-semibold text-xs text-belibang-grey">{{ $item['creator']['name'] }}</a>
                    </div>
                </div>
            </div>
        @empty
            <h1 class="text-center col-span-4 py-2 px-6 bg-red-700 w-max mx-auto rounded-full">Products is empty.</h1>
        @endforelse
    </div>
</section>
