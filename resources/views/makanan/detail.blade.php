@extends('layout.app')

@section('content')

{{-- Resep Populer --}}
<div class="max-w-6xl mx-auto py-24">
    <!-- Judul Utama -->
    <div class="my-10">
        <h2 class="text-3xl font-bold text-center text-gray-800 font-jakarta">Kategori Resep</h2>
        <p class="text-sm text-center text-green-700 mt-2">Pilih kategori kesukaanmu</p>
    </div>

    <!-- Grid Card -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
       <!-- Card 1 -->
    <a href="#" class="block group">
        <div class="relative overflow-hidden rounded-lg">
            <img src="{{ asset('images/food/takoyaki.jpg') }}" alt="Makanan 1"
                class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 
                    group-hover:brightness-100 group-hover:scale-105">
            <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">
                #1
            </span>
        </div>

        <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
            <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>

            <!-- Bookmark Icon -->
            <button class="text-gray-300 hover:text-yellow-500 transition duration-300">
                <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                     stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                     .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                </svg>
                  
            </button>
        </div>

        <p class="text-sm flex items-center gap-2">
            <!-- Ikon Waktu -->
            <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M12 8v4l3 3M3.223 14C4.132 18.008 7.717 21 12 21c4.97 0 9-4.03 9-9 0-4.97-4.03-9-9-9-3.73 0-6.93 2.27-8.294 5.5M7 9H3V5"/>
            </svg>
            <span>20 Menit</span>

            <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 
                        2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 
                        19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146
                        .633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
            </svg>
            <span class="font-semibold text-yellow-400">4.8</span>
        </p>
    </a>


        <!-- Card 2 -->
        <a href="#" class="block group">
            <div class="relative overflow-hidden rounded-lg">
                <img src="{{ asset('images/food/bakso.jpg') }}" alt="Makanan 2"
                    class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300
                        group-hover:brightness-100 group-hover:scale-105"> 
                    <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">
                        #2
                    </span>
            </div>

            <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
                <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>

                <!-- Bookmark Icon -->
                <button class="text-gray-300 hover:text-yellow-500 transition duration-300">
                    <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                        .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                    </svg>
                </button>
            </div>
                <p class="text-sm flex items-center gap-2">
                    <!-- Ikon Waktu -->
                    <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                    </svg> 
                    <span>30 Menit</span>

                    <!-- Ikon Rating -->
                    <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                       width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                       <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 
                               2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 
                               19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146
                               .633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                    </svg>
                    <span class="font-semibold text-yellow-400">4.7</span>
                </p>
        </a>

        <!-- Card 3 -->
        <a href="#" class="block group">
            <div class="relative overflow-hidden rounded-lg">
                <img src="{{ asset('images/food/mochi.webp') }}" alt="Makanan 3"
                    class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300
                    group-hover:brightness-100 group-hover:scale-105"> 
                    <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">
                        #3
                    </span>
            </div>
            <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
                <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>

                <!-- Bookmark Icon -->
                <button class="text-gray-300 hover:text-yellow-500 transition duration-300">
                    <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                        .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                    </svg>
                </button>
            </div>
                <p class="text-sm flex items-center gap-2">
                    <!-- Ikon Waktu -->
                    <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                    </svg>
                    <span>40 Menit</span>

                    <!-- Ikon Rating -->
                    <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                       width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                       <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 
                               2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 
                               19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146
                               .633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                    </svg>
                    <span class="font-semibold text-yellow-400">4.9</span>
                </p>
        </a>

        <!-- Card 4 -->
        <a href="#" class="block group">
            <div class="relative overflow-hidden rounded-lg">
                <img src="{{ asset('images/food/sumedang.jpg') }}" alt="Makanan 4"
                    class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100 group-hover:scale-105"> 
                    <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">#4</span>
            </div>

            <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
                <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>

                <!-- Bookmark Icon -->
                <button class="text-gray-300 hover:text-yellow-500 transition duration-300">
                    <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                        .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                    </svg>
                </button>
            </div>
            <p class="text-sm flex items-center gap-2">
                <!-- Ikon Waktu -->
                <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                </svg>
                <span>35 Menit</span>

                <!-- Ikon Rating -->
                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 
                            2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 
                            19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146
                            .633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                </svg>
                <span class="font-semibold text-yellow-400">4.6</span>
            </p>
        </a>
    </div>
</div>
@include('layout.footer')
@endsection
