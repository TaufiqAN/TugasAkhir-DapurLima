@extends('layout.app') {{-- Sesuaikan dengan layout utama --}}

@section('content')

<div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md mt-36 mb-10">
    <div class="grid md:grid-cols-2 gap-6">
        <!-- Gambar Resep -->
        <div>
            <img src="{{ asset('storage/' . $resep->image) }}" alt="{{ $resep->nama_resep }}" class="h-64 w-full object-cover rounded-lg shadow ">
        </div>

        <!-- Detail Resep -->
        <div>
            <h1 class="text-3xl font-bold text-green-700">{{ $resep->nama_resep }}</h1>
            <p class="mt-2 text-gray-700">{{ $resep->deskripsi }}</p>

            <!-- Informasi Resep -->
            <div class="mt-4 flex flex-wrap gap-2">
                <span class="bg-blue-500 text-white px-3 py-1 rounded-lg text-sm">Kategori: {{ $resep->kategori->nama_kategori ?? 'Tidak ada' }}</span>
                <span class="bg-yellow-500 text-white px-3 py-1 rounded-lg text-sm">Kesulitan: {{ $resep->kesulitan }}</span>
                <span class="bg-green-500 text-white px-3 py-1 rounded-lg text-sm">Waktu: {{ $resep->waktu }} menit</span>
                <span class="bg-purple-500 text-white px-3 py-1 rounded-lg text-sm">Porsi: {{ $resep->porsi }}</span>
            </div>
        </div>
    </div>

    <!-- Bahan & Cara Membuat -->
    <div class="mt-8 grid md:grid-cols-2 gap-6">
        <!-- Bahan -->
        <div class="bg-blue-100 p-4 rounded-lg shadow">
            <h3 class="text-lg font-bold text-blue-700">Bahan</h3>
            <ul class="mt-2 list-none space-y-3">
                @foreach(json_decode($resep->bahan) as $index => $bahann)
                    <li class="flex items-center space-x-3 text-gray-800">
                        <span class="bg-blue-500 text-white w-6 h-6 flex items-center justify-center rounded-full">{{ $index + 1 }}</span>
                        <span class="flex-1">{{ $bahann }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Cara Membuat -->
        <div class="bg-green-100 p-4 rounded-lg shadow">
            <h3 class="text-lg font-bold text-green-700">Cara Membuat</h3>
            <ul class="mt-2 list-none space-y-3">
                @foreach(json_decode($resep->cara_membuat) as $index => $cara_membuatt)
                    <li class="flex items-start space-x-3 text-gray-800">
                        <span class="bg-green-500 text-white w-6 h-6 flex items-center justify-center rounded-full">{{ $index + 1 }}</span>
                        <span class="flex-1">{{ $cara_membuatt }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Tombol Navigasi -->
    <div class="mt-6 flex justify-between">
        <a href="{{ route('resep.index') }}" 
           class="flex items-center px-5 py-2 bg-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-400 transition duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali
        </a>
        <a href="{{ route('resep.edit', $resep->id) }}" 
           class="flex items-center px-5 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">
            <svg class="w-6 h-6 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
            </svg>
            Edit Kategori
        </a>
    </div>
</div>

@endsection
