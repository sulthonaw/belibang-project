@extends('front.layouts.app')
@section('title', 'Belibang Digital Marketplace')

@section('content')
    <x-navbar :categories="$categories" />

    <header class="w-full pt-[74px] pb-[103px] relative z-0">
        <div class="container max-w-[1130px] mx-auto flex flex-col items-center justify-center z-10">
            <div class="flex flex-col gap-4 mt-7 z-10">
                <p class="bg-[#2A2A2A] font-semibold text-belibang-grey rounded-[4px] p-[8px_16px] w-fit">
                    {{ $product['category']['name'] }}</p>
                <h1 class="font-semibold text-[55px]">{{ $product['name'] }}
                </h1>
            </div>
        </div>
        <div class="background-image w-full h-full absolute top-0 overflow-hidden z-0">
            <img src="{{ Storage::url($product['cover']) }}" class="w-full h-full object-cover" alt="hero image">
        </div>
        <div class="w-full h-1/3 absolute bottom-0 bg-gradient-to-b from-belibang-black/0 to-belibang-black z-0"></div>
        <div class="w-full h-full absolute top-0 bg-belibang-black/95 z-0"></div>
    </header>

    <section id="DetailsContent" class="container max-w-[1130px] mx-auto mb-[32px] relative -top-[70px]">
        <div class="flex flex-col gap-8">
            <div class="w-[1130px] h-[700px] flex shrink-0 rounded-[20px] overflow-hidden">
                <img src="{{ Storage::url($product['cover']) }}" class="w-full h-full object-cover" alt="hero image">
            </div>
            <div class="flex gap-8 relative -mt-[93px]">
                <div class="flex flex-col p-[30px] gap-5 bg-[#181818] rounded-[20px] w-[700px] shrink-0 mt-[90px] h-fit">
                    <div class="flex flex-col gap-4">
                        <p class="font-semibold text-xl">Overview</p>
                        <p class="text-belibang-grey leading-[30px]">{{ $product['about'] }}</p>
                        <div class="flex items-center gap-[10px] mt-1">
                            <a href=""
                                class="w-9 h-9 justify-center items-center rounded-full flex shrink-0 overflow-hidden border-[0.69px] border-[#414141]">
                                <img src="{{ asset('/images/logos/Python.svg') }}" class='p-[5px]' alt="logo">
                            </a>
                            <a href=""
                                class="w-9 h-9 justify-center items-center rounded-full flex shrink-0 overflow-hidden border-[0.69px] border-[#414141]">
                                <img src="{{ asset('/images/logos/figma-logo.svg') }}" class='p-[5px]' alt="logo">
                            </a>
                            <a href=""
                                class="w-9 h-9 justify-center items-center rounded-full flex shrink-0 overflow-hidden border-[0.69px] border-[#414141]">
                                <img src="{{ asset('/images/logos/blender.svg') }}" class='p-[5px]' alt="logo">
                            </a>
                            <a href=""
                                class="w-9 h-9 justify-center items-center rounded-full flex shrink-0 overflow-hidden border-[0.69px] border-[#414141]">
                                <img src="{{ asset('/images/logos/Excel.svg') }}" class='p-[5px]' alt="logo">
                            </a>
                            <a href=""
                                class="w-9 h-9 justify-center items-center rounded-full flex shrink-0 overflow-hidden border-[0.69px] border-[#414141]">
                                <img src="{{ asset('/images/logos/Laravel.svg') }}" class='p-[5px]' alt="logo">
                            </a>
                            <a href=""
                                class="w-9 h-9 justify-center items-center rounded-full flex shrink-0 overflow-hidden border-[0.69px] border-[#414141]">
                                <img src="{{ asset('/images/logos/Kotlin.svg') }}" class='p-[5px]' alt="logo">
                            </a>
                            <a href=""
                                class="w-9 h-9 justify-center items-center rounded-full flex shrink-0 overflow-hidden border-[0.69px] border-[#414141]">
                                <img src="{{ asset('/images/logos/flutter.svg') }}" class='p-[5px]' alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-row flex-wrap gap-4 items-center">
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">bank</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">finance</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">mobile</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">money</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">personal</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">scan</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">template</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">transfer</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">ui
                            kit</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">UX</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">wallet</a>
                        <a href=""
                            class="tags p-[4px_8px] border border-[#414141] rounded-[4px] h-fit w-fit text-xs text-belibang-light-grey hover:bg-[#2A2A2A] transition-all duration-300">wallet</a>
                    </div>
                </div>
                <div class="flex flex-col w-[366px] gap-[30px] flex-nowrap overflow-y-visible">
                    <div class="p-[2px] bg-img-purple-to-orange rounded-[20px] flex w-full h-fit">
                        <div class="w-full p-[28px] bg-[#181818] rounded-[20px] flex flex-col gap-[26px]">
                            <div class="flex flex-col gap-3">
                                <p
                                    class="font-semibold text-4xl bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Rp {{ number_format($product['price']) }}</p>
                                <div class="flex flex-col gap-[10px]">
                                    <div class="flex items-center gap-[10px]">
                                        <div class="w-4 h-4 flex shrink-0">
                                            <img src="{{ asset('/images/icons/check.svg') }}" alt="icon">
                                        </div>
                                        <p class="text-belibang-grey">100% Original Content</p>
                                    </div>
                                    <div class="flex items-center gap-[10px]">
                                        <div class="w-4 h-4 flex shrink-0">
                                            <img src="{{ asset('/images/icons/check.svg') }}" alt="icon">
                                        </div>
                                        <p class="text-belibang-grey">Lifetime Support</p>
                                    </div>
                                    <div class="flex items-center gap-[10px]">
                                        <div class="w-4 h-4 flex shrink-0">
                                            <img src="{{ asset('/images/icons/check.svg') }}" alt="icon">
                                        </div>
                                        <p class="text-belibang-grey">High-Performance Code</p>
                                    </div>
                                    <div class="flex items-center gap-[10px]">
                                        <div class="w-4 h-4 flex shrink-0">
                                            <img src="{{ asset('/images/icons/check.svg') }}" alt="icon">
                                        </div>
                                        <p class="text-belibang-grey">Customizable Themes</p>
                                    </div>
                                    <div class="flex items-center gap-[10px]">
                                        <div class="w-4 h-4 flex shrink-0">
                                            <img src="{{ asset('/images/icons/check.svg') }}" alt="icon">
                                        </div>
                                        <p class="text-belibang-grey">Responsive Design</p>
                                    </div>
                                    <div class="flex items-center gap-[10px]">
                                        <div class="w-4 h-4 flex shrink-0">
                                            <img src="{{ asset('/images/icons/check.svg') }}" alt="icon">
                                        </div>
                                        <p class="text-belibang-grey">Comprehensive Documentation</p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('checkout.index', [$product['slug']]) }}"
                                class="bg-[#2D68F8] text-center font-semibold p-[12px_20px] rounded-full hover:bg-[#083297] active:bg-[#062162] transition-all duration-300">Checkout</a>
                        </div>
                    </div>
                    <div class="w-full p-[30px] bg-[#181818] rounded-[20px] flex flex-col gap-4 h-fit">
                        <div class="flex justify-between items-center">
                            <div class="flex gap-3 items-center">
                                <div class="w-12 h-12 rounded-full overflow-hidden flex shrink-0">
                                    <img src="{{ Storage::url($product['creator']['avatar']) }}" alt="icon">
                                </div>
                                <div class="flex flex-col gap-[2px]">
                                    <p class="font-semibold">{{ $product['creator']['name'] }}</p>
                                    <p class="text-[#595959] text-sm leading-[18px]">
                                        <span class="font-semibold mr-1">183,409</span>
                                        Product
                                    </p>
                                </div>
                            </div>
                            <a href="">
                                <img src="{{ asset('/images/icons/arrow-right.svg') }}" alt="icon">
                            </a>
                        </div>
                        <p class="text-sm leading-[24px] text-belibang-grey">A young UI/UX Designer from Indonesia.
                            Specialized in mobile apps designs & loves creating UI Kit 🇮🇩</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <x-new-product :products="$products" />

    <x-testimonials />
@endsection

@push('after-script')
    <script>
        $('.testi-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            pageDots: false,
            prevNextButtons: false,
        });

        // previous
        $('.btn-prev').on('click', function() {
            $('.testi-carousel').flickity('previous', true);
        });

        // next
        $('.btn-next').on('click', function() {
            $('.testi-carousel').flickity('next', true);
        });
    </script>

    <script>
        const searchInput = document.getElementById('searchInput');
        const resetButton = document.getElementById('resetButton');

        searchInput.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                resetButton.classList.remove('hidden');
            } else {
                resetButton.classList.add('hidden');
            }
        });

        resetButton.addEventListener('click', function() {
            resetButton.classList.add('hidden');
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const dropdownMenu = document.querySelector('.dropdown-menu');

            menuButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });

            // Close the dropdown menu when clicking outside of it
            document.addEventListener('click', function(event) {
                const isClickInside = menuButton.contains(event.target) || dropdownMenu.contains(event
                    .target);
                if (!isClickInside) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
@endpush
