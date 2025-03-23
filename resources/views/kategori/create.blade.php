{{-- @extends('layout.app')

@section('content')
<div class="max-w-2xl mx-auto mt-40">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-bold text-gray-700 mb-4">Tambah Kategori</h2>

        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <!-- Nama Kategori -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Nama Kategori</label>
                <input type="text" id="name" name="nama_kategori" required 
                    class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-end space-x-3">
                <a href="{{ route('kategori.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection --}}
