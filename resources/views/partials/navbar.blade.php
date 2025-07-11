<div class="lg:flex lg:justify-between bg-[#1E3A8A]/95 text-gray-100  px-4 hidden ">
    <div class="flex gap-4 items-center">
        <div class="flex gap-1">
            <svg class="w-4 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
            </svg>
            <p>Gratis ongkos kirim minimal beli 2 item</p>
        </div>
        <div class="flex gap-1">
            <svg class="w-4 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
            </svg>
            <p>Dipesan sebelum pukul 4 sore </p>
        </div>
        <div class="flex gap-1">
            <svg class="w-4 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
            </svg>
            <p>dikirim pada hari yang sama
                30 hari untuk berubah pikiran
            </p>
        </div>

    </div>
    <div>
        <div>
            <button type="button"
                class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 transition-colors duration-200"
                id="menu-button" aria-expanded="false" aria-haspopup="true">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>

                <svg class="-mr-1 size-5 text-gray-400 transition-transform duration-200" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true" data-slot="icon" id="chevron-icon">
                    <path fill-rule="evenodd"
                        d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <div class="absolute right-0 z-[9999] mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-hidden hidden"
            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="dropdown-menu">
            <div class="py-1" role="none">
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150"
                    role="menuitem" tabindex="-1" id="menu-item-0">English</a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition-colors duration-150"
                    role="menuitem" tabindex="-1" id="menu-item-1">Indonesia</a>
            </div>
        </div>
    </div>
</div>
<nav class="bg-[#1E3A8A]/85 backdrop-blur-md h-auto lg:h-[90px] w-screen sticky  top-0 z-50 px-4 py-4 lg:py-0">
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-around h-full ">
        <div class="flex items-center justify-between mr-2">
            <div class="flex items-center gap-2">
                <div class="relative xl:w-[211px] md:w-[181px] w-[181px] rounded-lg flex items-center justify-center">
                    <img src="img/Logo.png" alt="">
                </div>

                <div class="hidden lg:flex items-center gap-1 relative">
                    <svg class="w-8 absolute z-10 left-3 top-1/2 transform -translate-y-1/2"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    <input type="text"
                        class="pl-12 bg-white md-[120px]  xl:w-[358px] h-[42px] rounded-[50px] px-4 py-2 outline-none"
                        placeholder="pencarian">
                </div>

            </div>

            <a href="#"
                class="relative hover:text-[#F97316] duration-300 lg:hidden flex ease-in-out text-white mt-4 lg:mt-0  grow justify-end mb-4 mr-3	">
                <svg class="w-[35px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                <div
                    class="w-6 h-4 rounded-full bg-red-600 absolute -right-3 -top-1 items-center flex justify-center font-lato font-semibold text-[12px]">
                    37</div>
            </a>
            
                 
            {{-- Button mobile --}}
            <button id="menu-toggle" class="lg:hidden text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

        </div>

        <div class="lg:hidden  relative">
            <svg class="w-6 absolute z-10 left-3 top-1/2 transform -translate-y-1/2"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <input type="text" class="pl-10 bg-white w-full h-[42px] rounded-[50px] px-4 py-2 outline-none"
                placeholder="pencarian">
        </div>

        <div id="nav-menu"
            class="hidden lg:flex lg:pt-0 pt-4 lg:gap-2 xl:gap-4 text-white items-center mt-4 lg:mt-0">
            <ul class="flex flex-col lg:flex-row md:gap-1 gap-1 lg:gap-2 xl:gap-4 text-[16px] font-lexend">
                <li class="hover:text-[#F97316] duration-300 ease-in-out"><a href="/#">Home</a></li>
                <li class="hover:text-[#F97316] duration-300 ease-in-out"><a href="/#carousel">Populer</a></li>
                <li class="hover:text-[#F97316] duration-300 ease-in-out"><a href="/produk">Produk</a></li>
                <li class="hover:text-[#F97316] duration-300 ease-in-out"><a href="/#contact">Kontak</a></li>
            </ul>

            <div class="relative hidden lg:flex">
                <a href="#"
                    class="hover:text-[#F97316] duration-300 lg:flex hidden ease-in-out text-white mt-4 lg:mt-0 ">
                    <svg class="w-[35px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </a>
                <div
                    class="w-6 h-4 rounded-full bg-red-600 absolute -right-3 -top-1 items-center flex justify-center font-lato font-semibold text-[12px]">
                    37</div>
            </div>


            <div class="flex flex-col lg:items-center lg:flex-row gap-2 xl:gap-2 mt-6 lg:mt-0">
                <a href="/login">
                    <button
                        class="w-full lg:w-[97px] h-[29px] bg-[#F97316] hover:bg-transparent hover:border hover:border-[#F97316] duration-300 ease-in-out rounded-[50px] font-deto font-bold text-white hover:text-[#F97316]">
                        login
                    </button>
                </a>
                <a class="hidden lg:flex" href="/profile">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="size-14 hover:border-[#F97316] duration-300 ease-in-out rounded-[50px] font-deto font-bold text-white hover:text-[#F97316]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                </a>

            </div>
        </div>
    </div>
</nav>
