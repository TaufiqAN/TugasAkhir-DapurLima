@extends('layout.app') {{-- Sesuaikan dengan layout utama --}}

@section('content')

<div class="max-w-5xl mx-auto bg-white p-6 rounded-lg mt-36 mb-10">
    <div class="grid md:grid-cols-2 gap-6">
        <!-- Gambar Resep -->
        <div>
            <img src="{{ asset('storage/' . $resep->image) }}" alt="{{ $resep->nama_resep }}" class="h-72 w-full object-cover rounded-lg shadow ">
        </div>

        <!-- Detail Resep -->
        <div>
            <h1 class="text-4xl font-bold text-green-700">{{ $resep->nama_resep }}</h1>
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



    {{-- Review --}}
    @auth
    <div class="w-full mx-auto mt-5">
        <div class="p-6 bg-gray-100 text-center rounded-xl">
            <h2 class="text-xl font-bold text-gray-900">Jadilah yang pertama mengulas.</h2>
            <button id="openModal" class="mt-4 px-6 py-2 text-green-600 border border-green-600 rounded-full font-medium hover:bg-green-600 hover:text-white transition-all duration-300">Menulis review</button>
        </div>
    </div>
    
    {{-- Modal Ulasan dan rating --}}
    <div id="reviewModal" class=" z-50 fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl pb-2 font-semibold text-center">Rating dan Ulasan</h2>

            <div class="flex relative overflow-hidden rounded-lg">
                <img src="{{ asset('storage/' . $resep->image) }}" 
                    alt="{{ $resep->nama_resep }}"
                    class="w-30 h-20 py-2 object-cover rounded-lg brightness-75 transition-all duration-300 
                        group-hover:brightness-100 group-hover:scale-105">
                <span class="mt-6 ms-4 font-medium text-lg text-gray-500">{{ $resep->nama_resep }}</span>
            </div>
            <form id="reviewForm" class="mt-2">
                @csrf
                <input type="hidden" name="resep_id" value="{{ $resep->id }}">
                <div class="mt-2">
                    <label class="block text-gray-600 text-base">Rating</label>
                    <div id="rating" class="flex space-x-1 cursor-pointer">
                        @for ($i = 1; $i <= 5; $i++)
                            <span class="star text-gray-300 text-6xl" data-value="{{ $i }}">★</span>
                        @endfor
                    </div>
                    <input type="hidden" name="rating" id="ratingValue" value="0">
                </div>
                <div class="mt-2">
                    <label class="block text-gray-600 py-1 text-base">Ulasan</label>
                    <textarea name="ulasan" class="border rounded p-2 w-full" rows="4" placeholder="Tulis ulasanmu..."></textarea>
                </div>
                <div class="mt-4 flex justify-end space-x-2">
                    <button type="button" id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    @else
        <p class="text-red-500">Silakan <a href="{{ route('login') }}" class="text-blue-500">login</a> untuk menambahkan ulasan.</p>
    @endauth
    
    {{-- Semua Ulasan --}}
    <div class="mt-20">
        <h2 class="text-lg font-semibold">Ulasan</h2>
        <div id="reviews">
            @foreach ($resep->reviews as $review)
                <div>
                    {{ $review->rating }}★
                    <p>{{ $review->ulasan }}</p></div>
                    <strong>{{ $review->user->name }}</strong> 
            @endforeach
        </div>
    </div>


    {{-- Resep lainnya --}}
    <div class="max-w-6xl mx-auto py-10">
        <!-- Judul Utama -->
        <h2 class="text-3xl font-bold text-gray-800 text-center font-jakarta">Coba Resep Lainnya</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">

            @foreach ($allResep as $resep)
            
            <!-- Card -->
            <div class="block group">
                <a href="{{ route('makanan.detail', $resep->id) }}" class="block">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="{{ asset('storage/' . $resep->image) }}" 
                            alt="{{ $resep->nama_resep }}"
                            class="w-full h-52 object-cover rounded-lg brightness-75 transition-all duration-300 
                                group-hover:brightness-100 group-hover:scale-105">
                    </div>
                </a>

                <div class="mt-4 flex justify-between items-start">
                    <a href="{{ route('makanan.detail', $resep->id) }}" class="text-xl font-semibold text-gray-900 group-hover:text-green-700 transition-all duration-300 min-h-[50px]">
                        {{ $resep->nama_resep }}
                    </a>
                    <!-- Bookmark -->
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

                <p class="text-sm flex items-center gap-4">
                    <!-- Waktu -->
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M12 8v4l3 3M3.223 14C4.132 18.008 7.717 21 12 21c4.97 0 9-4.03 9-9 0-4.97-4.03-9-9-9-3.73 0-6.93 2.27-8.294 5.5M7 9H3V5"/>
                        </svg>
                        <span>{{ $resep->waktu }} Menit</span>
                    </span>
                    
                    <!-- Orang -->
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 mr-1 text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                        </svg>
                        <span>{{ $resep->porsi }} Orang</span>
                    </span>

                    <!-- Rating -->
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

         <!-- Button Lihat Semua -->
        <div class="flex justify-center m-10">
            <a href="{{ route('resep.semua') }}" class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 transition-all duration-300">
                Lihat Semua
            </a>
        </div>

    </div>
</div>

@include('layout.footer')
@endsection

