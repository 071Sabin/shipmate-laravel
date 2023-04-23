@extends('seller.seller_master')

@section('content')
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
            <a href="#" class="text-white font-bold text-xl">Seller Dashboard</a>
            </div>
            <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
                <div class="relative">
                <button class="bg-gray-900 text-white rounded-md py-2 px-4 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out">
                    Orders
                </button>
                </div>
                <div class="relative ml-3">
                <button class="bg-gray-900 text-white rounded-md py-2 px-4 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out">
                    Products
                </button>
                </div>
                <div class="relative ml-3">
                <button class="bg-gray-900 text-white rounded-md py-2 px-4 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out">
                    Settings
                </button>
                </div>
                <div class="relative ml-3">
                <button class="bg-gray-900 text-white rounded-md py-2 px-4 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out">
                    Logout
                </button>
                </div>
            </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button class="text-gray-500 hover:text-white focus:outline-none focus:text-white">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
    
        <div class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Orders</a>
                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Products</a>
                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Settings</a>
                <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Logout</a>
            </div>
        </div>
    </nav>
  

@endsection