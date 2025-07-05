@extends('components.app')

@section('title', 'Produk')

@section('content')



    <section class=" px-4 flex justify-center pt-12">
        <div class="flex flex-wrap gap-3 mb-6 w-full max-w-screen-xl ">
            <button
                class="filter-btn border border-white text-white px-4 py-1.5 rounded-full hover:bg-white hover:text-black transition active"
                data-category="all">All</button>
            <button
                class="filter-btn border border-white text-black px-4 py-1.5 rounded-full hover:bg-white hover:text-black transition"
                data-category="jaket">Jaket</button>
            <button
                class="filter-btn border border-white text-black px-4 py-1.5 rounded-full hover:bg-white hover:text-black transition"
                data-category="sepatu">Sepatu</button>
            <button
                class="filter-btn border border-white text-black px-4 py-1.5 rounded-full hover:bg-white hover:text-black transition"
                data-category="baju">Baju</button>
            <button
                class="filter-btn border border-white text-white px-4 py-1.5 rounded-full hover:bg-white hover:text-black transition"
                data-category="celana">Celana</button>
            <button
                class="filter-btn border border-white text-white px-4 py-1.5 rounded-full hover:bg-white hover:text-black transition"
                data-category="topi">Topi</button>
        </div>
    </section>


    <section>
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
                        <img src="img/produk/jaket/jaket-hooligans.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                            Hooligans Jacket Tracktop Linea Lyte </h2>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl font-bold text-gray-900">Rp 165.900</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Tambah ke Keranjang
                        </button>
                    </div>
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
                        <img src="img/produk/Celana/celana-vcrl.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
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
                            Tambah ke Keranjang
                        </button>
                    </div>
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
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                           SABA Veloz Grey White - Sepatu Sneakers Casual Pria Wanita</h2>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl font-bold text-gray-900">Rp 122.500</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Tambah ke Keranjang
                        </button>
                    </div>
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
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
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
                            Tambah ke Keranjang
                        </button>
                    </div>
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
                            Tambah ke Keranjang
                        </button>
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
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">Aerostreet Hoops Low 2.0 Putih Putih Abu Tua                        </h2>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl font-bold text-gray-900">Rp 172.900</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Tambah ke Keranjang
                        </button>
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
                            Tambah ke Keranjang
                        </button>
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
                            Tambah ke Keranjang
                        </button>
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
                            Tambah ke Keranjang
                        </button>
                    </div>
                </div>

                <div data-category="topi"
                    class="product  w-full bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 overflow-hidden">
                    <div class="relative overflow-hidden group hover:scale-105 transition-transform duration-200">
                        <div
                            class="w-full flex flex-row justify-between items-center absolute -bottom-10 transition-all duration-300 group-hover:bottom-2 px-2">
                            <p
                                class="bg-black/60 backdrop-blur-sm  px-2 pb-1 rounded-full border text-gray-400 font-semibold ">
                                <span class="text-gray-100  text-[12px]">Topikece</span>
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
                        <img src="img/produk/topi/topi-kece.png" alt="Wenz Kaos distro" id="imgHover"
                            class="w-full h-full object-cover " />
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 leading-tight w-[204px] h-[67.5px]">
                           Topi Baseball Cap Pria Wanita Model Wash Denim Luntur
                        </h2>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-xl font-bold text-gray-900">Rp 52.300</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const buttons = document.querySelectorAll(".filter-btn");
        const products = document.querySelectorAll(".product");

        buttons.forEach(btn => {
            btn.addEventListener("click", () => {
                buttons.forEach(b => {
                    b.classList.remove("bg-blue-600", "text-white", "shadow-lg");
                    b.classList.add("text-gray-600", "border-gray-300", "bg-white");
                });

                btn.classList.remove("text-gray-600", "border-gray-300", "bg-white");
                btn.classList.add("bg-[#1E3A8A]", "text-white", "shadow-lg");

                const category = btn.dataset.category;

                products.forEach(product => {
                    const match = category === "all" || product.dataset.category === category;
                    product.style.display = match ? "block" : "none";
                });
            });
        });

        window.addEventListener("DOMContentLoaded", () => {
            buttons[0].click();
        });
    </script>
@endsection
