@extends('components.app')

@section('title', 'Beranda')

@section('content')

    {{-- hero --}}
    <section id="hero container" class="relative lg:pt-4 md:pt- sm:pt-12 px-[38px] sm:px-[68px] flex ">
        <img src="img/hero-bg.png" alt="Background"
            class="absolute top-0 left-0 w-full h-full object-cover -z-10 brightness-50">
        <div id class="flex lg:flex-row flex-col justify-center lg:justify-between items-center w-full h-screen">
            <div>
                <img src="img/Logo.png" alt="">
                <h1
                    class=" tracking-wide text-gray-100 md:max-w-[800px] lg:max-w-[450px] xl:max-w-[875px] font-lato font-extrabold text-[40px] sm:text-[48px] md:text-[56px] xl:text-[64px] lg:text-[56px] leading-tight">
                    Dress Like You Mean It</h1>
                <p class="text-gray-300 font-lato lg:max-w-[302px] xl:max-w-[462px] text-[18px] sm:text-[20px]">
                    Fashion underground yang lahir dari lorong kota suara jiwa bebas yang menolak dibungkam oleh tren
                    mainstream
                </p>
                <div class="btn">
                        <a href="/produk" class="btn-produk">
                            <div class="dot"></div>
                            <p>Ayo Belanja Sekarang</p>
                        </a>
                    </div>
            </div>
        </div>
        <div
            class="sm:block hidden absolute maxw-[520px] sm:w-[640px] md:w-[678px] lg:w-[924px] xl:w-[1200px] lg:h-72 md:h-96 lg:-bottom-36 -bottom-52 left-1/2 transform -translate-x-1/2 bg-[#1E3A8A] text-white px-4 py-2 rounded-xl overflow-x-hidden">
            <div class="font-lato flex flex-col lg:flex-row lg:items-center items-start justify-between mt-4 ml-12">
                <div class="flex lg:flex-col items-center lg:max-w-[290px] text-center gap-2">
                    <img src="img/truck.png " class="w-[119px]" alt="">
                    <div class="flex flex-col lg:text-center text-left">
                        <h4 class="text-[16px] font-extrabold">Pengiriman Cepat & Real-Time Tracking</h4>
                        <p class="font-light">Pengiriman cepat ke seluruh Indonesia dengan pelacakan real-time.</p>
                    </div>
                </div>
                <div class="flex lg:flex-col items-center lg:max-w-[290px] text-center gap-2">
                    <img src="img/sheild.png " class="w-[119px]" alt="">
                    <div class="flex flex-col lg:text-center text-left">
                        <h4 class="text-[16px] font-extrabold">Garansi 100% & Penukaran Barang</h4>
                        <p class="font-light">Barang salah? Ukuran tidak pas? Kami jamin 100% penggantian atau refund.</p>
                    </div>
                </div>
                <div class="flex lg:flex-col items-center lg: text-center gap-2 mr-12 lg:max-w-[290px]">
                    <img src="img/gift.png " class="w-[119px]" alt="">
                    <div class="flex flex-col lg:text-center text-left">
                        <h4 class="text-[16px] font-extrabold"> Promo, Flash Sale & Diskon Menarik</h4>
                        <p class="font-light">Diskon spesial setiap minggu, voucher pengguna baru, </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- mobile --}}
    <div
        class="sm:hidden block  maxw-[520px] mt-24 bg-[#1E3A8A] text-white px-4 py-2 rounded-xl overflow-x-hidden mr-2 ml-2">
        <div class="font-lato flex flex-col  items-center justify-between mt-4">
            <div class="flex flex-col items-center text-center gap-2">
                <img src="img/truck.png " class="w-[119px]" alt="">
                <div class="flex flex-col text-center">
                    <h4 class="text-[16px]  font-extrabold">Pengiriman Cepat & Real-Time Tracking</h4>
                    <p class="font-light">Pengiriman cepat ke seluruh Indonesia dengan pelacakan real-time.</p>
                </div>
            </div>
            <div class="flex flex-col items-center text-center gap-2">
                <img src="img/sheild.png " class="w-[119px]" alt="">
                <div class="flex flex-col text-center">
                    <h4 class="text-[16px]  font-extrabold">Garansi 100% & Penukaran Barang</h4>
                    <p class="font-light">Barang salah? Ukuran tidak pas? Kami jamin 100% penggantian atau refund.</p>
                </div>
            </div>
            <div class="flex flex-col items-center text-center gap-2 mb-24">
                <img src="img/gift.png " class="w-[119px]" alt="">
                <div class="flex flex-col text-center">
                    <h4 class="text-[16px]  font-extrabold"> Promo, Flash Sale & Diskon Menarik</h4>
                    <p class="font-light">Diskon spesial setiap minggu, voucher pengguna baru, </p>
                </div>
            </div>

        </div>
    </div>
    {{-- slider --}}


    <div id="carousel"></div>
    <section class="relative px-[38px] md:px-[68px] overflow-x-hidden mt-24 sm:mt-56 lg:mt-48">
        <h2 class="text-3xl sm:text-[36px] font-bold mb-6 leading-tight">
            Produk Populer
        </h2>
        <button id="scrollLeftBtn"
            class="absolute left-3 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-black/70 hover:bg-black/90 rounded-lg text-white transition-all duration-300 flex items-center justify-center hover:-translate-x-1 z-10">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        {{-- slider items --}}
        <div id="popularContainer" class="flex gap-4 overflow-x-hidden ">
            <div
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4 z-10">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Wenz Kaos</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>love [#fff1489]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
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
                    <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="product-img"
                        data-img1="img/produk/baju1.png" data-img2="img/produk/baju2.png"
                        class="w-full h-full object-cover" />
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
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Lihat Detail Produk </button>
                </div>
            </div>



            <div
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4 z-10">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Sneakers</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
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
                    <img src="img/produk/aerostreet-sepatu.png" alt="Wenz Kaos distro" id="product-img"
                        data-img1="img/produk/aerostreet-sepatu.png" data-img2="img/produk/aerostreet-sepatuc.png"
                        class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Aerostreet Brooklyn Putih Putih Abu Muda
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 137.900</span>
                            <span class="text-sm text-gray-500 line-through">Rp 379.800</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Lihat Detail Produk </button>
                </div>
            </div>

            <div
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4 z-10">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Livehaf </span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
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
                    <img src="img/produk/Livehaf-jaket.png" data-img1="img/produk/Livehaf-jaket.png"
                        data-img2="img/produk/Livehaf-jaket_.png" alt="Wenz Kaos distro" id="product-img"
                        class="w-full h-[392px] object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Trucker Canvas Jacket Milo
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 199.900</span>
                            <span class="text-sm text-gray-500 line-through">Rp 249.900</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Lihat Detail Produk </button>
                </div>
            </div>


            <div
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4 z-10">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Jaket</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
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
                    <img src="img/produk/aerostreet-jaket.png" data-img1="img/produk/aerostreet-jaket.png"
                        data-img2="img/produk/aerostreet-jaket_.png" alt="Wenz Kaos distro" id="product-img"
                        class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Aerostreet Hoodie Alexander Hitam Sweater Jumper CAAAA </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 152.900</span>
                            <span class="text-sm text-gray-500 line-through">Rp 319.800</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Lihat Detail Produk </button>
                </div>
            </div>


            <div
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4 z-10">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Celana</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
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
                    <img src="img/produk/erigo-celana.png" data-img1="img/produk/erigo-celana.png"
                        data-img2="img/produk/erigo-celana_.png" alt="Wenz Kaos distro" id="product-img"
                        class="w-full h-[392px] object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Erigo Chino Pants Sirius Black</h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 158.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 434.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Lihat Detail Produk </button>
                </div>
            </div>


            <div
                class="w-80 h-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden shrink-0">
                <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                    <div
                        class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-4 z-10">
                        <p class="bg-black/60 backdrop-blur-sm py-1 rounded-full border text-gray-400 font-semibold ">
                            <span class="text-gray-100 px-4">Sneakers</span>
                        </p>
                        <div
                            class="bg-black/60 backdrop-blur-sm p-2 rounded-full  text-gray-200 hover:bg-red-500 transition-all duration-200 in-out">
                            <svg class="w-6" viewBox="0 -2.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
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
                    <img src="img/produk/aerostreet-sepatu1.png" data-img1="img/produk/aerostreet-sepatu1.png"
                        data-img2="img/produk/aerostreet-sepatu1_.png" alt="Wenz Kaos distro" id="product-img"
                        class="w-full h-full object-cover " />
                </div>
                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight">
                        Aerostreet Hoops Low 2.0 Putih Abu
                    </h2>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="text-xl font-bold text-gray-900">Rp 139.000</span>
                            <span class="text-sm text-gray-500 line-through">Rp 358.000</span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Lihat Detail Produk </button>
                </div>
            </div>



            <a class="w-40 flex justify-center text-xl font-lato font-medium     text-white items-center bg-gradient-to-r from-[#1E3A8A] to-[#3258C4] rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden  shrink-0"
                href="/produk">
                <div>
                    See More...
                </div>
            </a>
        </div>
        </div>
        <button id="scrollRightBtn"
            class="absolute right-3 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-black/70 hover:bg-black/90 rounded-lg text-white transition-all duration-300 flex items-center justify-center hover:translate-x-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </section>


    <section id="brand" class="w-full overflow-hidden bg-white border-y-2 px-[68px] py-6 mt-24">
        <h2 class="text-3xl sm:text-[36px] font-bold mb-6 leading-tight">
            Brand Tersedia
        </h2>
        <div class="flex flex-wrap gap-4 ">
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
    <section class=" px-4 mt-24 px-[38px] md:px-[68px]">
        <h2 class="text-3xl sm:text-[36px] font-bold mb-6 leading-tight">
            Produk terbaru
        </h2>
        <div class="flex justify-center">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 w-full max-w-screen-xl">
                <div data-category="jaket"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                    <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                        <div
                            class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                            <p
                                class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                                <span class="text-gray-100  text-[12px]">HOOLIGANS</span>
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
                        <img src="img/produk/jaket/jaket-hooligans.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <a href="/detail">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                                Hooligans Jacket Tracktop Linea Lyte </h2>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <span class="text-xl font-bold text-gray-900">Rp 203.800</span>
                                </div>
                            </div>
                            <button
                                class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Lihat Detail Produk
                            </button>
                        </div>
                    </a>
                </div>



                <div data-category="celana"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                    <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                        <div
                            class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                            <p
                                class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                                <span class="text-gray-100  text-[12px]">VCRL</span>
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
                        <img src="img/produk/Celana/celana-vcrl.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <a href="/detail1">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                                Celana Jeans Panjang Pria Korean Stlye Straight Loose Pants Pria
                            </h2>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <span class="text-xl font-bold text-gray-900">Rp137.500</span>
                                </div>
                            </div>
                            <button
                                class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Lihat Detail Produk
                            </button>
                        </div>
                    </a>
                </div>

                <div data-category="sepatu"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                    <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                        <div
                            class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                            <p
                                class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                                <span class="text-gray-100  text-[12px]">SABA</span>
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
                        <img src="img/produk/Spatu/saba-spatu.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <a href="/detail2">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                                SABA Veloz Grey White - Sepatu Sneakers Casual Pria Wanita</h2>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <span class="text-xl font-bold text-gray-900">Rp122.500</span>
                                </div>
                            </div>
                            <button
                                class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Lihat Detail Produk
                            </button>
                        </div>
                    </a>
                </div>

                <div data-category="baju"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
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
                        <img src="img/produk/baju1.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <a href="/detail3">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                                Wenz Kaos distro pria Falling Mentally Oversize
                            </h2>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <span class="text-xl font-bold text-gray-900">Rp89.000</span>
                                </div>
                            </div>
                            <button
                                class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Lihat Detail Produk
                            </button>
                        </div>
                    </a>
                </div>

                <div data-category="topi"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                    <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                        <div
                            class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                            <p
                                class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                                <span class="text-gray-100  text-[12px]">NEXTSTOPID</span>
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
                        <img src="img/produk/topi/topi-nextstopid.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <a href="/detail4">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                                Topi Baseball Cap Pria Wanita Model Wash Denim Luntur
                            </h2>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <span class="text-xl font-bold text-gray-900">Rp 52.054</span>
                                </div>
                            </div>
                            <button
                                class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Lihat Detail Produk
                            </button>
                        </div>
                    </a>
                </div>
                <div data-category="baju"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                    <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                        <div
                            class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                            <p
                                class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                                <span class="text-gray-100  text-[12px]">RENELLE</span>
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
                        <img src="img/produk/baju/baju-renelle.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                            RENELLE Baju Oversize Pria Distro Keren Kece | Kaos Katun Combed
                        </h2>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl font-bold text-gray-900">Rp 49.500</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Lihat Detail Produk </button>
                    </div>
                </div>

                <div data-category="sepatu"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                    <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                        <div
                            class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                            <p
                                class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                                <span class="text-gray-100  text-[12px]">Aerostreet</span>
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
                        <img src="img/produk/Spatu/aero-spatu.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">Aerostreet
                            Hoops Low 2.0 Putih Putih Abu Tua </h2>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl font-bold text-gray-900">Rp 172.900</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Lihat Detail Produk </button>
                    </div>
                </div>

                <div data-category="jaket"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                    <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                        <div
                            class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                            <p
                                class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                                <span class="text-gray-100  text-[12px]">Aerostreet</span>
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
                        <img src="img/produk/jaket/jaket-aero.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                            Aerostreet Hoodie Good Energy Cream Sweater Jumper
                        </h2>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl font-bold text-gray-900">Rp 152.900</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Lihat Detail Produk </button>
                    </div>
                </div>

                <div data-category="celana"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                    <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                        <div
                            class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                            <p
                                class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                                <span class="text-gray-100  text-[12px]">SYMPLE.CO</span>
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
                        <img src="img/produk/Celana/celana-symple.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                            Celana Cargo Panjang Pria Many Pockets
                        </h2>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl font-bold text-gray-900">Rp 136.500</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Lihat Detail Produk </button>
                    </div>
                </div>

                <div data-category="baju"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                    <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                        <div
                            class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                            <p
                                class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                                <span class="text-gray-100  text-[12px]">Fortklass</span>
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
                        <img src="img/produk/baju/baju-fortklass.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                            FortKlass Kaos Oversize SPORTY 89 T-Shirt Cowok
                        </h2>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl font-bold text-gray-900">Rp 73.000</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Lihat Detail Produk </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="flex items-center justify-center pt-12 overflow-x-hidden">
        <a href="/produk"
            class="font-lato text-md md:text-lg lg:text-lg font-medium px-16 sm:px-24 md:px-48 lg:px-72 p-1 border-2 transform hover:scale-105 hover:text-[#ffffff] hover:bg-[#1E3A8A] ease-in-out duration-300">Lihat
            Lebih Banyak</a>
    </div>

    <script>
        // imghoverproduk
        document.querySelectorAll('#product-img').forEach((img) => {
            img.addEventListener('mouseenter', () => {
                img.src = img.getAttribute('data-img2');
                img.classList.add('scale-110');
            });
            img.addEventListener('mouseleave', () => {
                img.src = img.getAttribute('data-img1');
                img.classList.remove('scale-110');
            });
        });


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

@endsection
