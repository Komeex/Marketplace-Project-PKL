@extends('components.app')

@section('title', 'Beranda')

@section('content')
    <div class="font-lato flex flex-col md:flex-row h-auto bg-gray-100 overflow-x-hidden lg:mt-12 ">
        <div class="w-auto md:w-64 bg-white p-6 shadow-md rounded-lg m-4 md:my-4 md:ml-[68px]">
            <h1 class="text-2xl font-medium text-gray-800 mb-6">Setting</h1>
            <ul class="flex flex-col md:space-y-4 space-y-2">
                <li><a href="#" class="text-lg text-blue-800 font-semibold hover:text-blue-900">Profile Details</a></li>
                <li><a href="#" class="text-lg text-gray-700 hover:text-blue-800">Change Password</a></li>
                <li><a href="#" class="text-lg text-gray-700 hover:text-blue-800">Transaction History</a></li>
            </ul>
        </div>

        <div class="flex-1 p-6 m-4 bg-white shadow-md rounded-lg md:mr-[68px]">
            <h2 class="text-2xl font-medium text-gray-800 mb-6">Edit Profile</h2>

            <div class="space-y-6">
                <div class="flex flex-col sm:flex-row items-center sm:space-x-6 space-y-4 sm:space-y-0">
                    <div
                        class="w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden flex-shrink-0">
                        <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex flex-col items-center sm:items-start">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Photo</label>
                        <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-4">
                            <button
                                class="bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300 w-full sm:w-auto">Choose</button>
                            <span class="text-gray-500 text-sm">JPG, JPEG or PNG, 1 MB max.</span>
                            <button class="text-gray-400 hover:text-red-500 transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="fullName" class="block text-gray-700 text-sm font-bold mb-2">Full name</label>
                    <input type="text" id="fullName" value="Jack Daniel"
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-800">
                </div>
                <div>
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="text" id="username" value="jackdaniel"
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-800">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" value="jack@email.com"
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-800">
                </div>
                <div class="flex justify-end pb-24">
                    <button
                        class="bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-6 rounded-lg focus:outline-none focus:shadow-outline transition duration-300">Update
                        Profile</button>
                </div>
            </div>
        </div>
    </div>
@endsection
