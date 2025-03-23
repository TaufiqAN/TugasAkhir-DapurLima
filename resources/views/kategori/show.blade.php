@extends('layout.app')

@section('content')

<div class="max-w-3xl mx-auto mt-40 p-8 bg-white shadow-lg rounded-lg border border-gray-200">
    <div class="flex items-center space-x-4">
        <h2 class="text-3xl font-semibold text-gray-800">Detail Kategori</h2>
    </div>

    <!-- Informasi Kategori -->
    <div class="mt-6 space-y-4">
        <div class="flex bg-gray-100 p-4 rounded-lg shadow-sm">
            <span class="text-gray-500 font-medium me-4">Nama Kategori: </span>
            <span class="text-gray-900 font-semibold">{{ $kategori->nama_kategori }}</span>
        </div>

        <div class="flex  bg-gray-100 p-4 rounded-lg shadow-sm">
            <span class="text-gray-500 font-medium me-4">Tanggal Dibuat: </span>
            <span class="text-gray-900 font-semibold">{{ $kategori->created_at->format('d M Y ') }}</span>
        </div>
    </div>

    <!-- Tombol Navigasi -->
    <div class="mt-6 flex justify-between">
        <a href="{{ route('kategori.index') }}" 
           class="flex items-center px-5 py-2 bg-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-400 transition duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali
        </a>
        <a href="{{ route('kategori.edit', $kategori->id) }}" 
           class="flex items-center px-5 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300">
            <svg class="w-6 h-6 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
            </svg>
            Edit Kategori
        </a>
    </div>
</div>

@endsection