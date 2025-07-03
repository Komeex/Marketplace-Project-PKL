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

</head>

<body class="overflow-x-hidden bg-[#FFFFFF]">
    <nav class="bg-[#1E3A8A] h-auto lg:h-[124px] w-[screen] sticky fixed top-0 z-50 px-4 py-4 lg:py-0">
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
                    <li class="hover:text-[#F97316] duration-300 ease-in-out"><a href="/">Home</a></li>
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

    <div class="flex w-[832px] h-716 bg-gray-100 shadow-2xl rounded-2xl overflow-hidden justify-center pt-16">
        <!-- Left Panel - Brand Section -->
        <div class="w-[416px] h-716 bg-blue-800 flex flex-col justify-between p-12 text-white relative">
            <div>
                <h1 class="text-4xl font-bold mb-6">Vintage Fashion</h1>
                <p class="text-lg mb-8 leading-relaxed">
                    Marketplace fasion terpercaya dengan koleksi terlengkap untuk gaya hidup modern Anda
                </p>
                
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm">Koleksi terbaru dari brand ternama</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm">Kualitas premium dengan harga terjangkau</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm">Gratis ongkir ke seluruh Indonesia</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm">Garansi 100% uang kembali</span>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <button class="text-white border border-white px-6 py-2 rounded-lg hover:bg-white hover:text-blue-800 transition-all duration-300">
                    Login Sekarang!
                </button>
            </div>
        </div>

        <!-- Right Panel - Registration Form -->
        <div class="flex-1  h-716 flex flex-col px-12 py-8">
            <!-- Header -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Selamat Datang</h2>
                <p class="text-gray-600">mulai belanja baju favoritmu sekarang</p>
            </div>

            <!-- Tab Navigation -->
            <div class="flex mb-8 border-b border--200">
                <button id="masukBtn" class="px-4 py-3 text-gray-600 hover:text-blue-600 transition-colors border-b-2 border-transparent">
                    Masuk
                </button>
                <button id="daftarBtn" class="px-4 py-3 text-blue-600 font-medium border-b-2 border-blue-600">
                    Daftar
                </button>
            </div>

            <form id="registrationForm" class="flex-1 space-y-4">
                <div>
                    <label for="namaLengkap" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input 
                        type="text" 
                        id="namaLengkap" 
                        name="namaLengkap"
                        class="w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        required
                    >
                </div>

                <!-- Telepon -->
                <div>
                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Telepon</label>
                    <input 
                        type="tel" 
                        id="telepon" 
                        name="telepon"
                        class="w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        required
                    >
                </div>

                <!-- Alamat -->
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                    <input 
                        type="text" 
                        id="alamat" 
                        name="alamat"
                        class="w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        required
                    >
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        class="w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        required
                    >
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        class="w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                        required
                    >
                </div>

                <!-- Terms and Conditions -->
                <div class="flex items-start space-x-3 mt-4">
                    <input 
                        type="checkbox" 
                        id="agreement" 
                        name="agreement"
                        class="mt-1 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                        required
                    >
                    <label for="agreement" class="text-sm text-gray-600 leading-relaxed">
                        <span class="text-green-500">●</span> Saya setuju dengan 
                        <a href="#" class="text-blue-600 hover:text-blue-800">Syarat & Ketentuan dan Kebijakan Privasi</a>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button 
                        type="submit"
                        class="w-full bg-blue-800 text-white py-3 px-4 rounded-md font-medium hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors"
                    >
                        Daftar Sekarang
                    </button>
                </div>
            </form>

            <!-- Login Form (Hidden by default) -->
            <form id="loginForm" class="hidden flex-1 space-y-6">
                <!-- Email -->
                <div>
                    <label for="loginEmail" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input 
                        type="email" 
                        id="loginEmail" 
                        name="loginEmail"
                        class="w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                    >
                </div>

                <!-- Password -->
                <div>
                    <label for="loginPassword" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input 
                        type="password" 
                        id="loginPassword" 
                        name="loginPassword"
                        class="w-full px-3 py-2 bg-gray-200 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                    >
                </div>

                <!-- Remember Me & Forgot Password -->
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
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800">Lupa password?</a>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button 
                        type="submit"
                        class="w-full bg-blue-800 text-white py-3 px-4 rounded-md font-medium hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors"
                    >
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script> const masukBtn = document.getElementById('masukBtn');
        const daftarBtn = document.getElementById('daftarBtn');
        const registrationForm = document.getElementById('registrationForm');
        const loginForm = document.getElementById('loginForm');

        masukBtn.addEventListener('click', () => {
            // Switch to login tab
            masukBtn.classList.add('text-blue-600', 'border-blue-600', 'font-medium');
            masukBtn.classList.remove('text-gray-600', 'border-transparent');
            
            daftarBtn.classList.add('text-gray-600', 'border-transparent');
            daftarBtn.classList.remove('text-blue-600', 'border-blue-600', 'font-medium');
            
            registrationForm.classList.add('hidden');
            loginForm.classList.remove('hidden');
        });

        daftarBtn.addEventListener('click', () => {
            // Switch to registration tab
            daftarBtn.classList.add('text-blue-600', 'border-blue-600', 'font-medium');
            daftarBtn.classList.remove('text-gray-600', 'border-transparent');
            
            masukBtn.classList.add('text-gray-600', 'border-transparent');
            masukBtn.classList.remove('text-blue-600', 'border-blue-600', 'font-medium');
            
            loginForm.classList.add('hidden');
            registrationForm.classList.remove('hidden');
        });

        // Form submission handlers
        registrationForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(registrationForm);
            const data = Object.fromEntries(formData);
            
            // Basic validation
            if (!data.agreement) {
                alert('Harap setujui syarat dan ketentuan terlebih dahulu');
                return;
            }
            
            console.log('Registration data:', data);
            alert('Pendaftaran berhasil! (Demo)');
        });

        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(loginForm);
            const data = Object.fromEntries(formData);
            
            console.log('Login data:', data);
            alert('Login berhasil! (Demo)');
        });</script>
</body>

</html>
