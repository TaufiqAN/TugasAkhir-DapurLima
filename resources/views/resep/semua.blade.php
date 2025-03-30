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
        @foreach ($allResep as $resep)
        
            <div class="block group">
                <!-- Gambar dengan link -->
                <a href="{{ route('makanan.detail', $resep->id) }}" class="block">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="{{ asset('storage/' . $resep->image) }}" 
                            alt="{{ $resep->nama_resep }}"
                            class="w-full h-52 object-cover rounded-lg brightness-75 transition-all duration-300 
                                group-hover:brightness-100 group-hover:scale-105">
                    </div>
                </a>

                <div class="mt-4 flex justify-between items-start">
                    <!-- Nama resep dengan link -->
                    <a href="{{ route('makanan.detail', $resep->id) }}" class="text-xl font-semibold text-gray-900 group-hover:text-green-700 transition-all duration-300 min-h-[50px]">
                        {{ $resep->nama_resep }}
                    </a>

                    <!-- Bookmark Icon -->
                    @auth
                        @php
                            $isSaved = auth()->user()->saves->contains('resep_id', $resep->id);
                        @endphp
                        <button class="save-btn transition duration-300" data-resep-id="{{ $resep->id }}">
                            @if ($isSaved)
                                <!-- Sudah disimpan -->
                                <svg class="w-8 h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" aria-label="Tersimpan">
                                    <path d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z"/>
                                </svg>
                            @else
                                <!-- Belum disimpan -->
                                <svg class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-label="Simpan">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 21l-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21z" />
                                </svg>
                            @endif
                        </button>
                    @endauth
                </div>

                <p class="text-sm flex items-center gap-4 mt-2">
                    <!-- Ikon Waktu -->
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M12 8v4l3 3M3.223 14C4.132 18.008 7.717 21 12 21c4.97 0 9-4.03 9-9 0-4.97-4.03-9-9-9-3.73 0-6.93 2.27-8.294 5.5M7 9H3V5"/>
                        </svg>
                        <span>{{ $resep->waktu }} Menit</span>
                    </span>

                    <!-- Ikon Rating -->
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 
                                    2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 
                                    19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146
                                    .633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                        </svg>
                        <span class="font-semibold text-yellow-400">4.8</span>
                    </span>
                </p>
            </div>
        @endforeach
    </div>
</div>
@include('layout.footer')
@endsection
