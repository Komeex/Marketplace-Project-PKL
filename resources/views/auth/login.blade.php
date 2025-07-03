<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="bg-[#1E3A8A] h-auto lg:h-[124px] w-screen sticky fixed top-0 z-50 px-4 py-4 lg:py-0">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-around h-full ">
            <div class="flex items-center justify-between mr-2">
                <div class="flex items-center gap-2">
                    <div
                        class="relative xl:w-[211px] md:w-[181px] w-[181px] rounded-lg flex items-center justify-center">
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
                    class="hover:text-[#F97316] duration-300 lg:hidden flex ease-in-out text-white mt-4 lg:mt-0  grow justify-end mb-4 mr-3	">
                    <svg class="w-[35px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
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
                    <li class="hover:text-[#F97316] duration-300 ease-in-out"><a href="#">Home</a></li>
                    <li class="hover:text-[#F97316] duration-300 ease-in-out"><a href="#">About</a></li>
                    <li class="hover:text-[#F97316] duration-300 ease-in-out"><a href="#">Product</a></li>
                    <li class="hover:text-[#F97316] duration-300 ease-in-out"><a href="#">Contact</a></li>
                </ul>

                <a href="#"
                    class="hover:text-[#F97316] duration-300 lg:flex hidden ease-in-out text-white mt-4 lg:mt-0">
                    <svg class="w-[35px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </a>
                <div class="flex flex-col lg:flex-row gap-2 xl:gap-4 mt-6 lg:mt-0">
                    <a href="/login">
                        <button
                            class="w-full lg:w-[97px] h-[29px] bg-[#af5d23] hover:bg-[#F97316] duration-300 ease-in-out rounded-[50px] font-deto font-bold">login</button>
                    </a>
                    <a href="/register">
                        <button
                            class="w-full lg:w-[97px] h-[29px] bg-[#F97316] hover:bg-[#c77134] duration-300 ease-in-out rounded-[50px] font-deto font-bold">register</button>
                    </a>

                </div>
            </div>
        </div>
    </nav>

    ini login
</body>
</html>