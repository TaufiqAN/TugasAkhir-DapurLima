@extends('layout.template')

{{-- Modal  --}}
<div class="fixed inset-0 bg-gray-50 items-center flex justify-center ">
    <div class="bg-white max-w-4xl rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-gray-700 mb-4">Tambah Kategori</h2>

        <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Nama Kategori -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Nama Kategori</label>
                <input type="text" id="" name="nama_kategori" placeholder="Masukkan nama" 
                    class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
                @error('nama_kategori')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Background Warna</label>
                <input type="color" id="" name="background_color"
                    class="w-16 h-10 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Nama Gambar</label>
                <input type="file" id="" name="image" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-3">
                <button type="submit" class="px-4 py-2 w-full bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Buat
                </button>
            </div>
        </form>
    </div>
</div>
