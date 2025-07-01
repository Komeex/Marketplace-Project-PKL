<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .marquee {
            animation: marquee 20s linear infinite;
        }
    </style>
</head>

<body class="overflow-x-hidden bg-[#f5f5f5]">
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
                    <button
                        class="w-full lg:w-[97px] h-[29px] bg-[#af5d23] hover:bg-[#F97316] duration-300 ease-in-out rounded-[50px] font-deto font-bold">login</button>
                    <button
                        class="w-full lg:w-[97px] h-[29px] bg-[#F97316] hover:bg-[#c77134] duration-300 ease-in-out rounded-[50px] font-deto font-bold">register</button>
                </div>
            </div>
        </div>
    </nav>



    {{-- hero --}}
    <section id="hero container" class="lg:pt-4 md:pt-32 sm:pt-12 mx-[38px] sm:mx-[68px]">
        <div class="flex lg:flex-row flex-col justify-center lg:justify-between items-center w-full h-screen">
            <div class="">
                <img src="img/Logobiru.png" alt="">
                <h1
                    class="md:max-w-[800px] lg:max-w-[450px] xl:max-w-[875px] font-lato font-extrabold text-[40px] sm:text-[48px] md:text-[56px] xl:text-[64px] lg:text-[56px] leading-tight">
                    Dress Like You Mean It</h1>
                <p class="text-[#475569] font-lato lg:max-w-[302px] xl:max-w-[462px] text-[18px] sm:text-[20px]">Fashion
                    underground yang lahir dari lorong kota suara jiwa bebas yang menolak dibungkam oleh tren mainstream
                </p>
                <button
                    class="font-lato text-[12px] font-bold text-white rounded-full bg-[#F97316] w-[117px] h-[34px] mt-8 md:mb-2 mb-8 lg:mb-12 sm:mb-16">
                    Belanja Sekarang
                </button>
            </div>
            <div class="hidden lg:block relative -mx-68 ">
                <img class="absolute -left-9 -top-8 " src="img/Vectorgelap.png" alt="">
                <img class="absolute lg:-top-48 xl:-top-48 2xl:-top-36" src="img/orang.png" alt="">
                <img class="" src="img/Vectorbiru.png" alt="">
            </div>
            {{-- mobile img --}}
            <div class="lg:hidden block">
                <img class="block sm:hidden" src="img/mobileheroimg.png" alt="">
                <img class="hidden sm:block lg-mb-0 mb-0 md:mb-24" src="img/tabletimg.png" alt="">
            </div>
        </div>
    </section>

    {{-- about us --}}
    <section id="about us" class="bg-[#1E3A8A] w-screen h-[657px] mx-0 sm:px-[68px] relative overflow-hidden">
        <div class="h-full flex items-center relative">
            <div class="absolute left-0 sm:left-[px] bottom-0 z-10">
                <img class="block max-h-[657px] object-cover w-auto" src="img/aboutus.png" alt="About Us Image">
            </div>

            <div class="ml-[300px] sm:ml-[850px] max-w-[700px] text-white z-20 relative">
                <h2 class="text-3xl sm:text-[36px] font-bold mb-6 leading-tight">
                    Kami bukan sekedar marketplace. Kami adalah pergerakan
                </h2>
                <p class="text-lg leading-relaxed opacity-90">
                    Di tengah arus mode cepat yang serampan dan memboroskan, kami hadir untuk mewakili mereka yang
                    berbeda. Mereka yang berpakaian bukan untuk tampil, tapi untuk menyampaikan suara.
                </p>
                <p class="text-lg leading-relaxed opacity-90 mt-4">
                    Vintage adalah rumah bagi brand-brand streetwear independen, koleksi edgy, desain brutal, dan gaya
                    yang tidak tunduk pada tren. Kami mengkurasi produk dari para kreator lokal dan internasional yang
                    percaya bahwa pakaian adalah ekspresi sikap, bukan sekedar penutup tubuh.
                </p>
            </div>
        </div>
    </section>

    {{-- slider --}}
    <section id="corasel sliderrrrr" class="relative px-[38px] md:px-[68px] overflow-x-hidden mt-32">
        <h2 class="text-3xl sm:text-[36px] font-bold mb-6 leading-tight">
            Produk Populer
        </h2>
        <button id="scrollLeftBtn"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white border p-2 rounded-full shadow">
            &lt;
        </button>
        {{-- slider items --}}
        <div id="popularContainer" class="flex gap-4 overflow-x-hidden ">
            <div
                class="w-80  bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>


            <div
                class="w-80  bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>


            <div
                class="w-80  bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>


            <div
                class="w-80  bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>


            <div
                class="w-80  bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>


            <div
                class="w-80  bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>


            <a class="w-40 flex justify-center text-xl font-lato font-medium     text-white items-center bg-gradient-to-r from-[#1E3A8A] to-[#3258C4] rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden  shrink-0"
                href="">
                <div>
                    See More...
                </div>
            </a>

        </div>



        </div>

        <button id="scrollRightBtn"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white border p-2 rounded-full shadow">
            &gt;
        </button>

    </section>


    <section id="brand" class="w-full overflow-hidden bg-white border-y-2 px-[68px] py-6 mt-24">
        <h2 class="text-3xl sm:text-[36px] font-bold mb-6 leading-tight">
            Brand Tersedia
        </h2>
        <div class="flex gap-4 pt-">
            <span
                class="text-black border px-4 py-2 whitespace-nowrap hover:text-red-400 transform hover:scale-110 transition duration-300 ease-in-out select-text">Aerostreet</span>
            <span
                class="text-black border px-4 py-2 whitespace-nowrap hover:text-red-400 transform hover:scale-110 transition duration-300 ease-in-out select-text">RawWear</span>
            <span
                class="text-black border px-4 py-2 whitespace-nowrap hover:text-red-400 transform hover:scale-110 transition duration-300 ease-in-out select-text">XCore
                Supply</span>
            <span
                class="text-black border px-4 py-2 whitespace-nowrap hover:text-red-400 transform hover:scale-110 transition duration-300 ease-in-out select-text">StreetLab™</span>
            <span
                class="text-black border px-4 py-2 whitespace-nowrap hover:text-red-400 transform hover:scale-110 transition duration-300 ease-in-out select-text">Aerostreet</span>
            <span
                class="text-black border px-4 py-2 whitespace-nowrap hover:text-red-400 transform hover:scale-110 transition duration-300 ease-in-out select-text">RawWear</span>
            <span
                class="text-black border px-4 py-2 whitespace-nowrap hover:text-red-400 transform hover:scale-110 transition duration-300 ease-in-out select-text">XCore
                Supply</span>
            <span
                class="text-black border px-4 py-2 whitespace-nowrap hover:text-red-400 transform hover:scale-110 transition duration-300 ease-in-out select-text">StreetLab™</span>
        </div>
    </section>

    {{-- Produk sec --}}
    <section class="w-auto h-full px-[68px] mt-24">
        <h2 class="text-3xl sm:text-[36px] font-bold mb-6 leading-tight">
            Produk terbaru
        </h2>
        {{-- produk items --}}
        {{-- <div class="grid grid-cols-5 gap-4 place-content-center ml-5">
            <div
                class="w-80 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden  ">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju2.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-2xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>


            <div
                class="w-80 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden  ">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju2.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>


            <div
                class="w-80 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden  ">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju2.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div
                class="w-80 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden  ">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju2.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div
                class="w-80 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden  ">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju2.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div
                class="w-80 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden  ">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju2.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
            <div
                class="w-80 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden  ">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju2.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
            <div
                class="w-80 bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden  ">
                <div class="relative overflow-hidden">
                    <img src="img/produk/baju2.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()"
                        class="w-full h-4xl object-cover hover:scale-105 transition-transform duration-200" />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 120.000</span>
                        </div>
                        <span class="bg-red-100 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">-26%</span>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div> --}}
    </section>

    <footer class="bg-[#1E3A8A] text-white p-4 text-center flex flex-col mt-12 px-[100px]">
        <div class="flex flex-row justify-around">
            <div class="flex flex-col text-left p-4 gap-4">
                <h3 class="text-xl font-semibold">About Us</h3>
                <p class="max-w-96 ">
                    Kami hadir untuk mereka yang berpakaian bukan sekadar gaya, tapi sikap.
                    Vintage adalah wadah streetwear independen—edgy, brutal, anti-tren.
                    Kami kurasi karya kreator lokal dan global yang percaya: pakaian adalah suara.</p>
                <button class="bg-orange-400 rounded-lg h-8 w-24 font-medium">Learn More</button>
            </div>
            <div class="flex flex-col">
                <h3 class="text-xl font-semibold">Navigation</h3>
                <ul class="flex flex-col">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Product</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold">Help</h3>
                <ul>
                    <li><a href="">Help center</a></li>
                    <li><a href="">Buying</a></li>
                    <li><a href="">Trust & Safty</a></li>
                </ul>
            </div>
            <div class="flex flex-row">
                <h3 class="text-xl font-semibold">Connect</h3>
                <div>ooo</div>

            </div>

        </div>
        <div class="border-t-2 pt-7 ">
            &copy; 2025 Koming. All rights reserved.
        </div>
    </footer>


    <script>
        // Simple menu toggle
        const menuToggle = document.getElementById('menu-toggle');
        const navMenu = document.getElementById('nav-menu');

        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('hidden');
        });

        // Hide menu on window resize to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                navMenu.classList.remove('hidden');
            } else {
                navMenu.classList.add('hidden');
            }
        });

        // imghoverproduk
        function imgMasuk() {
            const img = (document.getElementById("imgHover").src = "img/produk/baju2.png");
            img.classList.add("scale-110");
            img.classList.add("");
        }

        function imgKeluar() {
            document.getElementById("imgHover").src = "img/produk/baju1.png";
            const img = document.getElementById("imgHover");
            img.classList.remove("scale-110");
        }

        // sliderjs
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById("popularContainer");

            document.getElementById("scrollLeftBtn").addEventListener("click", function() {
                container.scrollBy({
                    left: -200,
                    behavior: "smooth"
                });
            });

            document.getElementById("scrollRightBtn").addEventListener("click", function() {
                container.scrollBy({
                    left: 200,
                    behavior: "smooth"
                });
            });
        });
    </script>
</body>

</html>
