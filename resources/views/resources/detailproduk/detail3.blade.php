@extends('components.app')

@section('title', 'detail')

@section('content')



    <div class="w-full h-auto mb-48 sm:px-[68px] overflow-hidden">
        <div class="flex flex-col lg:flex-row items-center justify-center gap-16 mt-12 lg:mt-36 -full">
            <div class="flex flex-row gap-2 lg:gap-4">
                <div class="flex flex-col gap-2 lg:gap-4">
                    <img class="gambar-popup cursor-pointer w-[127px] h-[127px] sm:w-[183px] sm:h-[183px] md:w-[234px] md:h-[234px] lg:w-[242px] lg:h-[242px] xl:w-[270px] xl:h-[270px] object-cover transform hover:scale-105 transition-all duration-300 ease-in-out"
                        src="img/produk/baju/baju-wenz.png" alt="">
                    <img class="gambar-popup cursor-pointer w-[127px] h-[127px] sm:w-[183px] sm:h-[183px] md:w-[234px] md:h-[234px] lg:w-[242px] lg:h-[242px] xl:w-[270px] xl:h-[270px] object-cover transform hover:scale-105 transition-all duration-300 ease-in-out"
                        src="img/produk/baju/baju-wenz1.png" alt="">
                </div>
                <div>
                    <img class="gambar-popup cursor-pointer w-[167px] h-[259px] sm:w-[234px] sm:h-[371px] md:w-[278px] md:h-[470px] lg:w-[286px] lg:h-[501px] xl:w-[350px] xl:h-[553px] object-cover transform hover:scale-105 transition-all duration-300 ease-in-out"
                        src="img/produk/baju/baju-wenz2.png" alt="">
                </div>
            </div>


            <div class="flex flex-col justify-between px-[68px] overflow-hidden">
                <div class="flex flex-col gap-2">
                    <h1
                        class="font-lato text-[20px] sm:text-[24px] lg:text-[28px] font-extrabold max-w-[501px] leading-tight">
                        Hooligans Jacket Tracktop Linea Lyte - Black</h1>
                    <div class="text-lato flex items-center space-x-2 ">
                        <span class="text-[20px] sm:text-[24px] font-medium text-gray-900">Rp 89.800</span>
                        <span class="text-sm sm:text-base text-gray-500 line-through">Rp 113.000</span>
                    </div>
                    <p class="text-sm sm:text-[17px] max-w-[431px]">
                        Nyaman seharian dengan cutting loose fit & bahan adem anti gerah. Nggak mudah melar, tetap keren
                        dipakai aktif. Cocok untuk gaya casual atau streetwear. Stok terbatas, tanya dulu sebelum order ya
                        brody!
                    </p>
                    <div class="flex flex-col gap-4 mt-2 max-w-[351px]">
                        <div class="flex items-center justify-between w-full">
                            <h4 class="text-base sm:text-[17px] font-semibold">Kategori</h4>
                            <div class="w-48 text-base sm:text-[17px] font-medium">
                                Baju
                            </div>
                        </div>

                        <div class="flex items-center justify-between w-full">
                            <h4 class="text-base sm:text-[17px] font-semibold">Ukuran</h4>
                            <div class="relative inline-block w-48">
                                <select name="size" id="size-selector"
                                    class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg shadow leading-tight focus:outline-none focus:shadow-outline text-gray-700 text-sm sm:text-base font-medium transition duration-300 ease-in-out cursor-pointer">
                                    <option value="" disabled selected class="text-gray-400">Pilih Ukuran</option>
                                    <option value="s">S</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                    <option value="xl">XXL</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 6.757 7.586 5.343 9z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                         <div class="flex items-center justify-between w-full">
                        <h4 class="text-base sm:text-[17px] font-semibold">Warna</h4>
                        <div class="relative inline-block w-48">
                            <select name="size" id="size-selector"
                                class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg shadow leading-tight focus:outline-none focus:shadow-outline text-gray-700 text-sm sm:text-base font-medium transition duration-300 ease-in-out cursor-pointer">
                                <option value="" disabled selected class="text-gray-400">Pilih Warna</option>
                                <option value="s">White</option>
                                <option value="s">Black</option>
                                </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 6.757 7.586 5.343 9z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                        <div class="flex items-center justify-between w-full">
                            <h4 class="text-base sm:text-[17px] font-semibold">Shipping</h4>
                            <div class="w-48 ">
                                <div class="text-lato flex items-center space-x-2 ">
                                    <span class="text-base sm:text-[17px] font-medium text-gray-900">Rp 23.000</span>
                                    <span class="text-sm text-gray-500 line-through">Rp 43.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4 mt-6">
                    <div
                        class="w-[180px] h-[45px] sm:w-[210px] sm:h-[50px] bg-[#006FFF] rounded-[10px] items-center justify-center flex ">
                        <button class="text-base sm:text-[18px] font-bold text-white">Tambah ke keranjang</button>
                    </div>
                    <div
                        class="w-[150px] h-[45px] sm:w-[170px] sm:h-[50px] bg-[#949494] rounded-[10px] items-center justify-center flex ">
                        <button class="text-base sm:text-[18px] font-bold text-white">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="overlaygambar"
        class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center hidden z-50 overflow-hidden">
        <div class="relative">
            <img id="tampilgambar" src="" alt="Popup" class="w-auto h-auto rounded-lg shadow-2xl" />
            <button onclick="tutupPopup()"
                class="absolute top-2 right-2 md:-top-6 md:-right-6 text-white text-2xl bg-black bg-opacity-50 rounded-full px-2 hover:bg-opacity-70 group w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8 group-hover:rotate-0 rotate-90 transition-all duration-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        document.querySelectorAll('.gambar-popup').forEach(img => {
            img.addEventListener('click', function() {
                const src = this.src;
                document.getElementById('tampilgambar').src = src;
                document.getElementById('overlaygambar').classList.remove('hidden');
            });
        });

        function tutupPopup() {
            document.getElementById('overlaygambar').classList.add('hidden');
        }
    </script>

@endsection
