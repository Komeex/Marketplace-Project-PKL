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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

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

    <div class="md:flex   md:justify-between bg-white text-gray-500 border-b-2 px-4 hidden ">
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
                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                id="dropdown-menu">
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
    <nav class="bg-[#1E3A8A]/85 backdrop-blur-sm h-auto lg:h-[90px] w-screen sticky fixed top-0 z-50 px-4 py-4 lg:py-0">
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



    {{-- hero --}}
    <section id="hero container" class="relative lg:pt-4 md:pt- sm:pt-12 px-[38px] sm:px-[68px] flex ">
        <img src="img/hero-bg.png" alt="Background"
            class="absolute top-0 left-0 w-full h-full object-cover -z-10 brightness-50">
        <div class="flex lg:flex-row flex-col justify-center lg:justify-between items-center w-full h-screen">
            <div>
                <img src="img/Logo.png" alt="">
                <h1
                    class=" tracking-wide text-gray-100 md:max-w-[800px] lg:max-w-[450px] xl:max-w-[875px] font-lato font-extrabold text-[40px] sm:text-[48px] md:text-[56px] xl:text-[64px] lg:text-[56px] leading-tight">
                    Dress Like You Mean It</h1>
                <p
                    class="text-gray-300 text-[#475569] font-lato lg:max-w-[302px] xl:max-w-[462px] text-[18px] sm:text-[20px]">
                    Fashion underground yang lahir dari lorong kota suara jiwa bebas yang menolak dibungkam oleh tren
                    mainstream
                </p>
                <button
                    class="font-lato text-[16px] font-bold text-white rounded-full bg-[#F97316] w-[137px] h-[36px] mt-8 md:mb-2 mb-8 lg:m\ sm:mb-16 trantition-all duration-100 transform hover:scale-110 ease-in-out">
                    Belanja Sekarang
                </button>
            </div>
        </div>
        <div
            class="absolute w-[320px] sm:w-[640px] md:w-[678px] lg:w-[924px] xl:w-[1200px] h-72 -bottom-36 left-1/2 transform -translate-x-1/2 bg-[#1E3A8A] text-white px-4 py-2 rounded-xl">
            <div class="font-lato flex items-center justify-between mt-4">
                <div class="flex flex-col items-center max-w-[290px] text-center gap-2 ml-12">
                    <img src="img/truck.png " class="w-[119px]" alt="">
                    <h4 class="text-[16px] font-extrabold">Pengiriman Cepat & Real-Time Tracking</h4>
                    <p class="font-light">Pengiriman cepat ke seluruh Indonesia dengan pelacakan real-time.</p>
                </div>
                <div class="flex flex-col items-center max-w-[290px] text-center gap-2">
                    <img src="img/sheild.png " class="w-[119px]" alt="">
                    <h4 class="text-[16px] font-extrabold">Garansi 100% & Penukaran Barang</h4>
                    <p class="font-light">Barang salah? Ukuran tidak pas? Kami jamin 100% penggantian atau refund.</p>
                </div>
                <div class="flex flex-col items-center max-w-[290px] text-center gap-2 mr-12">
                    <img src="img/gift.png " class="w-[119px]" alt="">
                    <h4 class="text-[16px] font-extrabold"> Promo, Flash Sale & Diskon Menarik</h4>
                    <p class="font-light">Diskon spesial setiap minggu, voucher pengguna baru, </p>
                </div>

            </div>
        </div>
    </section>



    {{-- slider --}}
    <section id="corasel sliderrrrr" class="relative px-[38px] md:px-[68px] overflow-x-hidden mt-48">
        <h2 class="text-3xl sm:text-[36px] font-bold mb-6 leading-tight">
            Produk Populer
        </h2>
        <button id="scrollLeftBtn"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white border p-2 rounded-full shadow ">
            &lt;
        </button>
        {{-- slider items --}}
        <div id="popularContainer" class="flex gap-4 overflow-x-hidden ">
            <div
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
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
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
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
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
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
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
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
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
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
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
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

    {{-- product sec --}}
    <section class="flex justify-center px-4 mt-24">
        <div id="popularContainer"
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 w-full max-w-screen-xl">
            <div class="w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                        <p
                            class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100  text-[12px]">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-1 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>



            <div class="w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                        <p
                            class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100  text-[12px]">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-1 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                        <p
                            class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100  text-[12px]">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-1 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                        <p
                            class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100  text-[12px]">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-1 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                        <p
                            class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100  text-[12px]">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-1 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                        <p
                            class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100  text-[12px]">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-1 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                        <p
                            class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100  text-[12px]">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-1 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                        <p
                            class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100  text-[12px]">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-1 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                        <p
                            class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100  text-[12px]">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-1 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                        <p
                            class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100  text-[12px]">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-1 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -362.000000)"
                                            fill="#fff">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M55.5929644,215.348992 C55.0175653,215.814817 54.2783665,216.071721 53.5108177,216.071721 C52.7443189,216.071721 52.0030201,215.815817 51.4045211,215.334997 C47.6308271,212.307129 45.2284309,210.70073 45.1034811,207.405962 C44.9722313,203.919267 48.9832249,202.644743 51.442321,205.509672 C51.9400202,206.088455 52.687619,206.420331 53.4940177,206.420331 C54.3077664,206.420331 55.0606152,206.084457 55.5593644,205.498676 C57.9649106,202.67973 62.083004,203.880281 61.8950543,207.507924 C61.7270546,210.734717 59.2322586,212.401094 55.5929644,215.348992 M53.9066671,204.31012 C53.8037672,204.431075 53.6483675,204.492052 53.4940177,204.492052 C53.342818,204.492052 53.1926682,204.433074 53.0918684,204.316118 C49.3717243,199.982739 42.8029348,202.140932 43.0045345,207.472937 C43.1651842,211.71635 46.3235792,213.819564 50.0426732,216.803448 C51.0370217,217.601149 52.2739197,218 53.5108177,218 C54.7508657,218 55.9898637,217.59915 56.9821122,216.795451
                            C60.6602563,213.815565 63.7787513,211.726346 63.991901,207.59889 C64.2754005,202.147929 57.6173611,199.958748 53.9066671,204.31012"
                                                    id="love-[#fff1489]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover" onmouseover="imgMasuk()"
                        onmouseleave="imgKeluar()" class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Wenz Kaos distro pria Falling Mentally Oversize
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 89.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </section>






    
    <footer class="bg-[#1E3A8A] py-12 mt-24">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 text-gray-100">
                <!-- Social Media -->
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col text-left p-4 gap-4">
                        <img class="w-[11.5rem] md:mb-0 md-4" src="img/Logo.png" alt="Logo">
                        <p class="max-w-96 ">
                            Kami hadir untuk mereka yang berpakaian bukan sekadar gaya, tapi sikap.
                            Vintage adalah wadah streetwear independen—edgy,</p>
                        <div class="flex text-left gap-8 md:gap-4 mt-4">
                        <a href="https://www.facebook.com/ElizabethInternational/"
                            class="text-white hover:text-gray-200 transition-colors duration-300">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="https://www.instagram.com/elizabeth_international/"
                            class="text-white hover:text-gray-200 transition-colors duration-300">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="https://www.youtube.com/@EzzyTV"
                            class="text-white hover:text-gray-200 transition-colors duration-300">
                            <i class="fab fa-youtube fa-2x"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <!-- Address & Contact -->
                <div id="contact"
                    class="text-white flex flex-col items-center md:items-start text-left md:ml-12 p-4">
                    <h3 class="text-xl font-bold mb-6 ">Discover</h3>
                       <ul class="space-y-3">
                        <li><a href="#"class="group hover:text-gray-200 transition-colors duration-300 flex items-center gap-2"><i class="fas fa-chevron-right group-hover:rotate-0 -rotate-180 text-sm duration-300"></i>
                            How its works</a></li>
                        <li><a href="#about"class="group hover:text-gray-200 transition-colors duration-300 flex items-center gap-2"><i class="fas fa-chevron-right group-hover:rotate-0 -rotate-180 text-sm duration-300"></i>
                            Help center</a></li>
                        <li><a href="#competition"class="group hover:text-gray-200 transition-colors duration-300 flex items-center gap-2"><i class="fas fa-chevron-right group-hover:rotate-0 -rotate-180 text-sm duration-300"></i>
                            Infoboard</a></li>
                        <li><a href="#contact"class="group hover:text-gray-200 transition-colors duration-300 flex items-center gap-2"><i class="fas fa-chevron-right group-hover:rotate-0 -rotate-180 text-sm duration-300"></i>
                            Mobile apps</a></li>
                    </ul>
                </div>

                <!-- Explore -->
                <div class="text-white flex flex-col items-center md:items-start md:ml-12 p-4">
                    <h3 class="text-xl font-bold mb-6">Navigation</h3>
                    <ul class="space-y-3">
                        <li><a href="#"class="group hover:text-gray-200 transition-colors duration-300 flex items-center gap-2"><i class="fas fa-chevron-right group-hover:rotate-0 -rotate-180 text-sm duration-300"></i>
                            Home</a></li>
                        <li><a href="#about"class="group hover:text-gray-200 transition-colors duration-300 flex items-center gap-2"><i class="fas fa-chevron-right group-hover:rotate-0 -rotate-180 text-sm duration-300"></i>
                            About</a></li>
                        <li><a href="#competition"class="group hover:text-gray-200 transition-colors duration-300 flex items-center gap-2"><i class="fas fa-chevron-right group-hover:rotate-0 -rotate-180 text-sm duration-300"></i>
                            Product</a></li>
                        <li><a href="#contact"class="group hover:text-gray-200 transition-colors duration-300 flex items-center gap-2"><i class="fas fa-chevron-right group-hover:rotate-0 -rotate-180 text-sm duration-300"></i>
                            Contact</a></li>
                    </ul>
                </div>

                <div class="text-white flex flex-col items-center md:items-start  p-4">
                    <h3 class="text-xl font-bold mb-6">Community</h3>
                    <ul class="space-y-3">
                        <li><a href="#"class="group hover:text-gray-200 transition-colors duration-300 flex items-center gap-2"><i class="fas fa-chevron-right group-hover:rotate-0 -rotate-180 text-sm duration-300"></i>
                            Forum</a></li>
                    </ul>
                </div>

            
               
            </div>

            <!-- Copyright Section -->
            <div class="mt-12 pt-8 border-t border-white/20">
                <p class="text-center text-white">&copy; 2025 Koming. All rights reserved.</p>
            </div>
        </div>
    </footer>


    {{-- <footer class="bg-[#1E3A8A] text-white p-4 text-center flex flex-col mt-12 px-[68px]">
        <div class="flex flex-row justify-between">
           
            <div class="flex flex-col text-start p-4 gap-4">
                <h3 class="text-xl font-semibold">Navigation</h3>
                <ul class="flex flex-col">
                   
                </ul>
            </div>
            <div class="flex flex-col p-4 gap-4 text-start">
                <h3 class="text-xl font-semibold">Discover</h3>
                <ul>
                    <li><a href="">How it works</a></li>
                    <li><a href="">Help center</a></li>
                    <li><a href="">Infoboard</a></li>
                    <li><a href="">Mobile apps</a></li>
                </ul>
            </div>
            <div class="flex flex-col p-4 gap-4 text-start">
                <h3 class="text-xl font-semibold">Help</h3>
                <ul>
                    <li><a href="">Help center</a></li>
                    <li><a href="">Buying</a></li>
                    <li><a href="">Trust & Safty</a></li>
                </ul>
            </div>
            <div class="flex flex-col justify-around p-4 gap-4 text-start">
                <h3 class="text-xl font-semibold">Connect</h3>
                <div class="flex flex-col justify-between">
                    <div>
                        ooo

                    </div>
                    <button class="bg-orange-400 rounded-lg h-8 w-24 font-medium">Belanja </button>

                </div>
            </div>

        </div>
        <div class="border-t pt-7 ">
        </div>
    </footer> --}}


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
            img.classList.add("group");
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


        const button = document.getElementById('menu-button');
        const menu = document.getElementById('dropdown-menu');

        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!button.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
