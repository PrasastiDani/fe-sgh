@extends('shared.layout.app')

@section('content')
    <div class="container mx-auto px-12 max-w-screen-xl">
        <div class="pt-20 pb-8">
            <div class="bg-gradient-to-r from-blue-600 to-transparent rounded-lg mb-8 p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Detail Informasi Tamu Group</h2>
            </div>

            <!-- Form Content -->
            <div class="relative flex flex-col md:flex-row">
                <!-- Left column -->
                <div class="flex-1 space-y-6 md:pr-8">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="company-title" class="block text-sm font-medium text-gray-700 mb-2">
                                Company Title
                            </label>
                            <div class="relative">
                                <input type="text" id="company-title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </div>
                        <div>
                            <label for="company-name" class="block text-sm font-medium text-gray-700 mb-2">Company
                                Name</label>
                            <div class="relative">
                                <input type="text" id="company-name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-300">

                    <div>
                        <label for="phone-number" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number
                        </label>
                        <div class="relative">
                            <input type="text" id="phone-number"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email
                        </label>
                        <div class="relative">
                            <input type="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                    </div>
                </div>

                <!-- Vertical Divider -->
                <div class="hidden md:block w-px bg-gray-300 mx-4"></div>

                <!-- Right column -->
                <div class="flex-1 space-y-6 md:pr-8 ms-6">
                    <div>
                        <label for="country" class="block mb-2 text-sm font-medium text-gray-900">
                            Country
                        </label>
                        <input type="text" id="country"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div>
                        <label for="booking-source" class="block mb-2 text-sm font-medium text-gray-900">
                            Booking Source
                        </label>
                        <input type="text" id="booking-source"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">
                            Adress
                        </label>
                        <input type="text" id="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
