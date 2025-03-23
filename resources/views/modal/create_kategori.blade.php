{{-- @extends('layout.template') --}}

<!-- Modal -->
<div id="kategoriModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden items-center flex justify-center ">
    <div class="bg-white w-96 rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-700 mb-4">Tambah Kategori</h2>

        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <!-- Nama Kategori -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Nama Kategori</label>
                <input type="text" id="" name="nama_kategori" placeholder="Masukkan nama" 
                    class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300">
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-3">
                <button type="button" onclick="toggleModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    function toggleModal() {
        document.getElementById('kategoriModal').classList.toggle('hidden');
    }
</script>
    