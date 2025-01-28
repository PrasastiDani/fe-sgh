@extends('shared.layout.app')

@section('content')
    <div class="container mx-auto px-12 max-w-screen-xl">
        <div class="pt-20 pb-8">
            <div class="bg-gradient-to-r from-blue-600 to-transparent rounded-lg mb-8 p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Dashboard</h2>
                <p class="text-white">Rekap Aktivitas Front Office</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $data = [
                        ['title' => 'Expected Arrival Guest', 'value' => 12],
                        ['title' => 'Expected Departure Guest', 'value' => 4],
                        ['title' => 'In House Guest', 'value' => 4],
                        ['title' => 'Room Available', 'value' => 20],
                        ['title' => 'Room Sold', 'value' => 4],
                        ['title' => 'Occupancy', 'value' => '50%']
                    ];
                @endphp

                @foreach ($data as $item)
                    <div class="flex flex-col justify-center items-center bg-white rounded-lg shadow-md border-l-4 border-black p-4 h-[135px] transition-shadow duration-200 hover:shadow-xl">
                        <p class="text-black text-base font-semibold">{{ $item['title'] }}</p>
                        <h3 class="text-black text-[40px] font-bold">{{ $item['value'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
