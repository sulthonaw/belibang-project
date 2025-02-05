<nav class="w-full fixed top-0 bg-[#00000010] backdrop-blur-lg z-50">
    <div class="container max-w-[1130px] mx-auto flex items-center justify-between h-[74px]">
        <div class="flex items-center gap-[26px]">
            <a href="{{ route('front.index') }}" class="flex w-[154px] shrink-0 items-center">
                <img src="{{ asset('images/logos/logo.svg') }}" alt="logo">
            </a>
            <ul class="flex gap-6 items-center">
                <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                    <a href="{{ route('front.index') }}">Home</a>
                </li>
                <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300 relative">
                    <button id="menu-button" class="flex items-center gap-1 focus:text-belibang-light-grey">
                        <span>Categories</span>
                        <img src="{{ asset('images/icons/arrow-down.svg') }}" alt="icon">
                    </button>
                    <div
                        class="dropdown-menu hidden absolute top-[52px] grid grid-cols-2 p-4 gap-[10px] w-[526px] rounded-[20px] bg-[#1E1E1E] border border-[#414141] z-10">
                        <div
                            class="col-span-2 flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                            <div class="flex items-center">
                                <a href="" class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                    <img src="{{ asset('images/icons/cart.svg') }}" alt="icon">
                                </a>
                                <a href="" class="flex flex-col">
                                    <p class="font-bold text-sm text-white">All Products</p>
                                    <p class="text-xs text-belibang-grey">Everything in One Place</p>
                                </a>
                            </div>
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="{{ asset('images/icons/crown.svg') }}" alt="icon">
                            </div>
                        </div>
                        @foreach (collect($categories)->skip(1) as $category)
                            <div
                                class="flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300">
                                <div class="flex items-center">
                                    <a href="{{ route('front.category', [$category['slug']]) }}"
                                        class="w-[58px] h-[58px] flex shrink-0 flex items-center">
                                        <img src="{{ asset($category['icon']) }}" alt="icon">
                                    </a>
                                    <a href="{{ route('front.category', [$category['slug']]) }}" class="flex flex-col">
                                        <p class="font-bold text-sm text-white">{{ $category['name'] }}</p>
                                        <p class="text-xs text-belibang-grey">{{ $category['description'] }}</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </li>
                <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                    <a href="">Stories</a>
                </li>
                <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                    <a href="">Benefits</a>
                </li>
                <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                    <a href="">About</a>
                </li>
            </ul>
        </div>
        @auth
            <div class="flex gap-6 items-center">
                <a href="{{ route('admin.dashboard') }}"
                    class="p-[8px_16px] w-fit h-fit rounded-[12px] text-belibang-grey border border-belibang-dark-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-300">Go
                    To Dashboard</a>
            </div>
        @endauth
        @guest
            <div class="flex gap-6 items-center">
                <a href="{{ route('login') }}"
                    class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">Log
                    in</a>
                <a href="{{ route('register') }}"
                    class="p-[8px_16px] w-fit h-fit rounded-[12px] text-belibang-grey border border-belibang-dark-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-300">Sign
                    up</a>
            </div>
        @endguest
    </div>
</nav>

@push('after-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
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
