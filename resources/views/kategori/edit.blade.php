
@extends('layout.app')

@section('content')
<div class="max-w-2xl mx-auto mt-40">
    <div class="bg-white shadow-lg rounded-lg p-8 border border-gray-200">
        
        <!-- Header -->
        <div class="flex items-center space-x-3 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Edit Kategori</h2>
        </div>

        <!-- Form -->
        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Kategori -->
            <div class="mb-4" x-data="{ preview: '{{ asset('storage/' . $kategori->image) }}' }">
                <label class="block text-gray-700 font-medium">Gambar Resep</label>
                <img :src="preview" class="w-32 h-32 object-cover rounded shadow mt-2">
                <input type="file" name="image" class="mt-3 w-full border border-gray-300 rounded-lg p-2"
                       @change="preview = URL.createObjectURL($event.target.files[0])">
                @error('image')
                   <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nama Kategori</label>
                <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm">
                @error('nama_kategori')
                   <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Background</label>
                <input type="color" name="background_color" value="{{ $kategori->background_color }}" class="w-16 h-10 mt-2 border rounded-lg">
            </div>


            <!-- Tombol Aksi -->
            <div class="flex justify-end space-x-4 mt-6">
                <a href="{{ route('kategori.index') }}" 
                   class="flex items-center px-5 py-2 bg-gray-300 text-gray-700 font-medium rounded-lg hover:bg-gray-400 transition duration-300 shadow-md">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Kembali
                </a>
                <button type="submit" 
                    class="flex items-center px-6 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300 shadow-md">
                    <svg class="w-6 h-6 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M11 16h2m6.707-9.293-2.414-2.414A1 1 0 0 0 16.586 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7.414a1 1 0 0 0-.293-.707ZM16 20v-6a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v6h8ZM9 4h6v3a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V4Z"/>
                    </svg>  
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

