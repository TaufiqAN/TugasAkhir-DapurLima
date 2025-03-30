@extends('layout.template')

<!-- Modal -->
{{-- @auth
<div id="formUlasan" class="z-50 hidden fixed inset-0 bg-gray-900 bg-opacity-50 items-center flex justify-center ">
    <!-- Form Ulasan dan Rating -->
    <form id="reviewForm" method="POST">
        @csrf
        <input type="hidden" name="resep_id" value="{{ $resep->id }}">
        <div class="w-96 p-6 bg-white rounded-lg shadow-md mt-6">
            <h3 class="text-lg font-semibold text-gray-800">Tulis Ulasan</h3>
            <div class="flex items-center mt-3">
                <label class="text-gray-600 mr-3 ">Rating:</label>
                <div id="rating" class="flex space-x-1 cursor-pointer">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="star text-gray-400" data-value="{{ $i }}">★</span>
                    @endfor
                </div>
                <input type="hidden" name="rating" id="ratingValue" value="0">
            </div>
            <textarea name="ulasan" class="w-full p-3 mt-4 border rounded-lg" rows="4" placeholder="Tulis ulasanmu..."></textarea>
            <!-- Tombol -->
            <div class="flex justify-between space-x-3 mt-4 ">
                <button type="button" onclick="toggleModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">
                    Batal
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Update
                </button>
            </div>
        </div>
    </form>
</div>
@else
    <p class="text-red-500">Silakan <a href="{{ route('login') }}" class="text-blue-500">login</a> untuk menambahkan ulasan.</p>
@endauth


<script>
    function toggleModal() {
    let modal = document.getElementById('formUlasan');
    modal.classList.toggle('hidden');
    document.body.classList.toggle('overflow-hidden', !modal.classList.contains('hidden'));
}

</script> --}}
    