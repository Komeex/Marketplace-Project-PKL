<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vintage Fashion - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    </style>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center relative overflow-hidden">
    <img src="img/hero-bg.png" alt="Background"
         class="absolute top-0 left-0 w-full h-full object-cover -z-10 brightness-[30%]">

    <button onclick="history.back()" class="absolute top-8 left-8 bg-white/10 text-white px-4 py-2 rounded-full shadow-lg hover:bg-white/20 transition-all duration-300 flex items-center space-x-2 backdrop-blur-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
        <span class="font-medium">Kembali</span>
    </button>

    <div class="w-full max-w-6xl mx-auto p-4 md:p-8">
        <div class="flex flex-col lg:flex-row w-full bg-white shadow-2xl rounded-2xl overflow-hidden min-h-[600px] lg:min-h-[716px]">
            <div class="w-full lg:w-1/2 flex flex-col justify-center p-8 lg:p-12 text-white relative rounded-l-2xl" style="background-color: #1E3A8A;">
                <div>
                    <h1 class="text-3xl lg:text-4xl font-bold mb-4 lg:mb-6">Vintage Fashion</h1>
                    <p class="text-base lg:text-lg mb-6 lg:mb-8 leading-relaxed opacity-90">
                        Marketplace fashion terpercaya dengan koleksi terlengkap untuk gaya hidup modern Anda
                    </p>

                    <div class="space-y-3 lg:space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-5 h-5 rounded-full bg-green-400 flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm lg:text-base">Produk berkualitas dari brand terpercaya</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-5 h-5 rounded-full bg-green-400 flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm lg:text-base">Harga terjangkau untuk semua kalangan</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-5 h-5 rounded-full bg-green-400 flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm lg:text-base">Pengiriman gratis ke seluruh Indonesia</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-5 h-5 rounded-full bg-green-400 flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-sm lg:text-base">Jaminan kepuasan 100% atau uang kembali</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-1 flex flex-col px-6 lg:px-12 py-6 lg:py-8 bg-white rounded-r-2xl">
                <div class="mb-6 lg:mb-8">
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-2">Selamat Datang</h2>
                    <p class="text-gray-600 text-sm lg:text-base">Bergabunglah dengan ribuan pelanggan yang sudah merasakan pengalaman belanja terbaik</p>
                </div>

                <div class="flex mb-6 lg:mb-8 border-b border-gray-200">
                    <button id="masukBtn" class="px-4 py-3 text-blue-600 font-medium border-b-2 border-blue-600 text-sm lg:text-base">
                        Masuk
                    </button>
                    <a href="/register">
                        <button id="daftarBtn" class="px-4 py-3 text-gray-600 hover:text-blue-600 transition-colors border-b-2 border-transparent text-sm lg:text-base">
                            Daftar
                        </button>
                    </a>
                </div>

                <form id="loginForm" class="flex-1 space-y-6"> 
                    <div>
                        <label for="loginEmail" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input
                            type="email"
                            id="loginEmail"
                            name="loginEmail"
                            class="w-full px-3 py-2 lg:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            placeholder="email@example.com"
                            required
                        >
                    </div>

                    <div>
                        <label for="loginPassword" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input
                            type="password"
                            id="loginPassword"
                            name="loginPassword"
                            class="w-full px-3 py-2 lg:py-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                            placeholder="Masukkan password"
                            required
                        >
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="remember"
                                name="remember"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                            >
                            <label for="remember" class="ml-2 text-sm text-gray-600">Ingat saya</label>
                        </div>
                        <a href="#" class="text-sm text-blue-600 hover:text-blue-800 underline">Lupa password?</a>
                    </div>

                    <div class="pt-4">
                        <button
                            type="submit"
                            class="w-full bg-blue-800 text-white py-3 px-4 rounded-lg font-medium hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all transform hover:scale-105"
                        >
                            Masuk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>