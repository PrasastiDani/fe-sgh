@extends('shared.layout.app')

@section('content')
    <div class="container mx-auto px-12 max-w-screen-xl">
        <div class="pt-20 pb-8">
            <div class="bg-gradient-to-r from-blue-600 to-transparent rounded-lg mb-8 p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Tambah Reservasi</h2>
            </div>

            <!-- Form Content -->
            <div class="relative flex flex-col md:flex-row">
                <!-- Left column -->
                <div class="flex-1 space-y-6 md:pr-8">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="reservation-from" class="block text-sm font-medium text-gray-700 mb-2">
                                Reservatin From
                            </label>
                            <div class="relative">
                                <select id="reservation-from"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="" disabled selected>Pilih Reservation</option>
                                    <option value="wig">WIG</option>
                                    <option value="ota-traveloka">OTA Traveloka</option>
                                    <option value="ota-tiket">OTA Tiket</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Voucher Number</label>
                            <div class="relative">
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-300">

                    <!-- Form with vertical divider -->
                    <div class="relative flex flex-col md:flex-row">
                        <!-- Left column -->
                        <div class="flex-1 space-y-6 md:pr-8">
                            <div>
                                <label for="arrival_date" class="block mb-2 text-sm font-medium text-gray-900">
                                    Arrival Date
                                </label>
                                <input type="date" id="arrival_date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                            <div>
                                <label for="night" class="block mb-2 text-sm font-medium text-gray-900">Night</label>
                                <div class="flex">
                                    <button type="button"
                                        class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-l-lg w-12">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 12H4" />
                                        </svg>
                                    </button>
                                    <input type="number" id="night" min="0" value="0"
                                        class="bg-gray-50 border-y border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-center [-moz-appearance:_textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                                    <button type="button"
                                        class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-r-lg w-12">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <label for="departure_date" class="block mb-2 text-sm font-medium text-gray-900">
                                    Departure Date
                                </label>
                                <input type="date" id="departure_date"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                            <div>
                                <label for="person" class="block mb-2 text-sm font-medium text-gray-900">Person</label>
                                <div class="flex">
                                    <button type="button" data-input-id="person"
                                        class="number-decrease inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-l-lg w-12">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 12H4" />
                                        </svg>
                                    </button>
                                    <input type="number" id="person" min="1" value="0"
                                        class="bg-gray-50 border-y border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-center">
                                    <button type="button" data-input-id="person"
                                        class="number-increase inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-r-lg w-12">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Vertical Divider -->
                        <div class="hidden md:block w-px bg-gray-200 mx-4"></div>

                        <!-- Right column -->
                        <div class="flex-1 space-y-6 md:pl-8">
                            <div>
                                <label for="room_quantity" class="block mb-2 text-sm font-medium text-gray-900">Room
                                    Quantity</label>
                                <div class="flex">
                                    <button type="button" data-input-id="room_quantity"
                                        class="number-decrease inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-l-lg w-12">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 12H4" />
                                        </svg>
                                    </button>
                                    <input type="number" id="room_quantity" min="1" value="0"
                                        class="bg-gray-50 border-y border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 text-center [-moz-appearance:_textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                                    <button type="button" data-input-id="room_quantity"
                                        class="number-increase inline-flex items-center justify-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-r-lg w-12">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">
                                    Room Type
                                </label>
                                <div class="relative">
                                    <select id="room-type"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option value="" disabled selected>Pilih Room Type</option>
                                        <option value="standar">Standar</option>
                                        <option value="family">Family</option>
                                        <option value="superior">Superior</option>
                                        <option value="deluxe">Deluxe</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">
                                    Room Type
                                </label>
                                <div class="relative">
                                    <select id="room-package"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option value="" disabled selected>Pilih Room Package</option>
                                        <option value="room-only">Room Only</option>
                                        <option value="room-braekfast">Room Breakfast</option>
                                        <option value="meals">Meals</option>
                                        <option value="meeting">Meeting</option>
                                        <option value="full-board-meeting">Full Board Meeting</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="room_number" class="block mb-2 text-sm font-medium text-gray-900">Room
                                    Number</label>
                                <input type="text" id="room_number"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vertical Divider -->
                <div class="hidden md:block w-px bg-gray-300 mx-4"></div>

                <!-- Right column -->
                <div class="flex-1 space-y-6 md:pr-8 ms-6">
                    <!-- Room Rate -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Room Rate</label>
                        <div class="relative">
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                    </div>

                    <hr class="border-gray-300">

                    <!-- Guest Name & Bill Receiver -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Guest Name</label>
                            <div class="relative">
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <button class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Bill Receiver</label>
                            <div class="relative">
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <button class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-300">

                    <!-- Group Toggle & Group Name -->
                    <div>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center space-x-4">
                                <label class="block text-sm font-medium text-gray-700">Group</label>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                    </div>
                                </label>
                            </div>
                            <div class="flex-1">
                                <div class="relative">
                                    <input type="text" placeholder="Group Name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-300">

                    <!-- Check-in & Check-out -->
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Check-in</label>
                            <input type="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Check-out</label>
                            <input type="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                    </div>

                    <hr class="border-gray-300">

                    <!-- Reservation Note -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Reservation Note</label>
                        <textarea
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
