@extends('layout.app') {{-- Sesuaikan dengan layout utama --}}

@section('content')

<div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md mt-36 mb-10">
    <form action="{{ route('resep.update', $resep->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid md:grid-cols-2 gap-6">
            <!-- Gambar Resep -->
            <div x-data="{ preview: '{{ asset('storage/' . $resep->image) }}' }">
                <label class="block text-gray-700 font-semibold">Gambar Resep</label>
                <img :src="preview" class="h-64 w-full object-cover rounded-lg shadow mt-2">
                <input type="file" name="image" class="mt-3 w-full border border-gray-300 rounded-lg p-2"
                       @change="preview = URL.createObjectURL($event.target.files[0])">
            </div>

            <!-- Detail Resep -->
            <div>
                <label class="block text-gray-700 font-semibold">Nama Resep</label>
                <input type="text" name="nama_resep" value="{{ old('nama_resep', $resep->nama_resep) }}" class="w-full border border-gray-300 rounded-lg p-2 mt-2">

                <label class="block text-gray-700 font-semibold mt-4">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border border-gray-300 rounded-lg p-2 mt-2">{{ old('deskripsi', $resep->deskripsi) }}</textarea>

                <!-- Informasi Resep -->
                <div class="mt-4 grid grid-cols-2 gap-2">
                    <div>
                        <label class="block text-gray-700 font-semibold">Kategori</label>
                        <select name="kategori_id" class="w-full border border-gray-300 rounded-lg p-2 mt-2">
                            @foreach($kategori as $kat)
                                <option value="{{ $kat->id }}" {{ $resep->kategori_id == $kat->id ? 'selected' : '' }}>
                                    {{ $kat->nama_kategori }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold">Kesulitan</label>
                        <select name="kesulitan" class="w-full border border-gray-300 rounded-lg p-2 mt-2">
                            <option value="Mudah" {{ $resep->kesulitan == 'Mudah' ? 'selected' : '' }}>Mudah</option>
                            <option value="Sedang" {{ $resep->kesulitan == 'Sedang' ? 'selected' : '' }}>Sedang</option>
                            <option value="Sulit" {{ $resep->kesulitan == 'Sulit' ? 'selected' : '' }}>Sulit</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold">Waktu (Menit)</label>
                        <input type="number" name="waktu" value="{{ old('waktu', $resep->waktu) }}" class="w-full border border-gray-300 rounded-lg p-2 mt-2">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold">Porsi</label>
                        <input type="number" name="porsi" value="{{ old('porsi', $resep->porsi) }}" class="w-full border border-gray-300 rounded-lg p-2 mt-2">
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Bahan -->
        <div class="mt-8 grid md:grid-cols-2 gap-6">
            <div class="bg-blue-100 p-4 rounded-lg shadow">
                <h3 class="text-lg font-bold text-blue-700">Bahan</h3>
                <ul class="mt-2 list-none space-y-3">
                    @foreach(json_decode($resep->bahan) as $index => $bahann)
                        <li class="flex items-center space-x-3 text-gray-800">
                            <input type="text" name="bahan[]" value="{{ $bahann }}" class="w-full p-2 border border-gray-300 rounded-lg">
                            <button type="submit" name="hapus_bahan" value="{{ $index }}" class="text-red-500 font-bold">✖</button>
                        </li>
                    @endforeach
                </ul>
                <button type="submit" name="tambah_bahan" class="mt-2 bg-green-500 text-white px-3 py-1 rounded-lg">Tambah Bahan</button>
            </div>

            <!-- Cara Membuat -->
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <h3 class="text-lg font-bold text-green-700">Cara Membuat</h3>
                <ul class="mt-2 list-none space-y-3">
                    @foreach(json_decode($resep->cara_membuat) as $index => $cara_membuatt)
                        <li class="flex items-center space-x-3 text-gray-800">
                            <input type="text" name="cara_membuat[]" value="{{ $cara_membuatt }}" class="w-full p-2 border border-gray-300 rounded-lg">
                            <button type="submit" name="hapus_cara" value="{{ $index }}" class="text-red-500 font-bold">✖</button>
                        </li>
                    @endforeach
                </ul>
                <button type="submit" name="tambah_cara" class="mt-2 bg-green-500 text-white px-3 py-1 rounded-lg">Tambah Langkah</button>
            </div>
        </div> --}}

        <!-- Bahan & Cara Membuat -->
        <div class="mt-8 grid md:grid-cols-2 gap-6">

            <!-- Bahan -->
            <div class="bg-blue-100 p-4 rounded-lg shadow">
                <h3 class="text-lg font-bold text-blue-700">Bahan</h3>
                <ul id="bahan-list" class="mt-2 list-none space-y-3">
                    @foreach(json_decode($resep->bahan) as $index => $bahann)
                        <li class="flex items-center space-x-3">
                            <input type="text" name="bahan[]" value="{{ $bahann }}" class="w-full p-2 border border-gray-300 rounded-lg">
                            <button type="button" class="text-red-500 font-bold remove-bahan">✖</button>
                        </li>
                    @endforeach
                </ul>
                <button type="button" id="tambah-bahan" class="mt-2 bg-green-500 text-white px-3 py-1 rounded-lg">Tambah Bahan</button>
            </div>

            <!-- Cara Membuat -->
            <div class="bg-green-100 p-4 rounded-lg shadow">
                <h3 class="text-lg font-bold text-green-700">Cara Membuat</h3>
                <ul id="cara-list" class="mt-2 list-none space-y-3">
                    @foreach(json_decode($resep->cara_membuat) as $index => $cara_membuatt)
                        <li class="flex items-center space-x-3">
                            <input type="text" name="cara_membuat[]" value="{{ $cara_membuatt }}" class="w-full p-2 border border-gray-300 rounded-lg">
                            <button type="button" class="text-red-500 font-bold remove-cara">✖</button>
                        </li>
                    @endforeach
                </ul>
                <button type="button" id="tambah-cara" class="mt-2 bg-green-500 text-white px-3 py-1 rounded-lg">Tambah Langkah</button>
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
            <button type="submit" 
                class="flex items-center px-6 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition duration-300 shadow-md">
                <svg class="w-6 h-6 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M11 16h2m6.707-9.293-2.414-2.414A1 1 0 0 0 16.586 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7.414a1 1 0 0 0-.293-.707ZM16 20v-6a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v6h8ZM9 4h6v3a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V4Z"/>
                </svg>  
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

@endsection