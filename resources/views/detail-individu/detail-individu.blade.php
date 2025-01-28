@extends('shared.layout.app')

@section('content')
    <div class="container mx-auto px-12 max-w-screen-xl">
        <div class="pt-20 pb-8">
            <div class="bg-gradient-to-r from-blue-600 to-transparent rounded-lg mb-8 p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Detail Informasi Tamu Individu</h2>
            </div>

            <!-- Form Content -->
            <div class="relative flex flex-col md:flex-row">
                <!-- Left column -->
                <div class="flex-1 space-y-6 md:pr-8">
                    <div>
                        <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">
                            Fullname
                        </label>
                        <input type="text" id="fullname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="birth-place" class="block text-sm font-medium text-gray-700 mb-2">
                                Birth Place
                            </label>
                            <div class="relative">
                                <input type="text" id="birth-place"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </div>
                        <div>
                            <label for="birth-date" class="block text-sm font-medium text-gray-700 mb-2">
                                Birth Date
                            </label>
                            <div class="relative">
                                <input type="date" id="birth-date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">
                                Gender
                            </label>
                            <div class="relative">
                                <select id="gender"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="" disabled selected>Pilih Gender</option>
                                    <option value="perempuan">Perempuan</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700 mb-2">
                                Country
                            </label>
                            <div class="relative">
                                <input type="text" id="country"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vertical Divider -->
                <div class="hidden md:block w-px bg-gray-300 mx-4"></div>

                <!-- Right column -->
                <div class="flex-1 space-y-6 md:pr-8">
                    <div>
                        <label for="id-number" class="block mb-2 text-sm font-medium text-gray-900">
                            ID Card Number
                        </label>
                        <input type="number" id="id-number"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="phone-number" class="block text-sm font-medium text-gray-700 mb-2">
                                Phone Number
                            </label>
                            <div class="relative">
                                <input type="number" id="phone-number"
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
