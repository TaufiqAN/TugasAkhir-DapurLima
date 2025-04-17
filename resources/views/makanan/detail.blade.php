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
            
            {{-- Total Rating --}}
            @if($resep->total_rating)
                <div class="flex items-center gap-1 my-1">
                    <span class="text-yellow-500 font-semibold text-xl">
                        ★ {{ number_format($resep->total_rating, 1) }} 
                    </span>
                    <span class="text-sm text-gray-500"> ({{ $resep->reviews->count() }} Ulasan)</span>
                </div>
            @else
                <div class="flex items-center gap-1 my-1">
                    <span class="text-yellow-500 font-semibold text-xl">
                        ★ {{ number_format($resep->total_rating, 1) }} 
                    </span>
                    <span class="text-sm text-gray-500"> ({{ $resep->reviews->count() }} Ulasan)</span>
                </div>
            @endif

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
    
    <div class="p-4 bg-white border border-gray-200 rounded-xl mt-4">
        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Ulasan 
                <span class="font-normal text-gray-400">{{ $resep->reviews->count() }}</span>
            </h2>
        </div>

        @if ($resep->reviews->isEmpty())
        <div class="flex flex-col items-center justify-center text-center text-gray-600 py-6">
            <svg class="w-16 h-16 mb-3 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11.5c.07 0 .14-.007.207-.021.095.014.193.021.293.021h2a2 2 0 0 0 2-2V7a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7Zm1 3V8h1v1H8Z" clip-rule="evenodd"/>
              </svg>              
            <p class="text-lg font-semibold">Belum ada ulasan</p>
            <p class="text-sm text-gray-500">Jadilah yang pertama memberikan ulasan pada resep ini!</p>
        </div>
        @else
        @foreach ($resep->reviews as $review)
        <ul class="pt-4 mt-4 space-y-2 font-medium border-t dark:border-gray-600">

            {{-- Ulasan --}}
            <p class="font-semibold text-lg text-gray-800">{{ $review->user->name }}</p>
            <div class="flex items-center text-yellow-400">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $review->rating)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.974a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.974c.3.921-.755 1.688-1.54 1.118l-3.38-2.455a1 1 0 00-1.175 0l-3.38 2.455c-.784.57-1.838-.197-1.539-1.118l1.287-3.974a1 1 0 00-.364-1.118L2.045 9.4c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.287-3.974z" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.974a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.974c.3.921-.755 1.688-1.54 1.118l-3.38-2.455a1 1 0 00-1.175 0l-3.38 2.455c-.784.57-1.838-.197-1.539-1.118l1.287-3.974a1 1 0 00-.364-1.118L2.045 9.4c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.287-3.974z" />
                        </svg>
                    @endif
                @endfor
            </div>
            <p class="text-gray-700">{{ $review->ulasan }}</p>
            <p><span class="text-xs text-gray-500">{{ $review->created_at->diffForHumans() }}</span></p>

            {{-- Like --}}
            <div class="review" data-review-id="{{ $review->id }}">
                <button onclick="toggleLike(this)" class="flex items-center space-x-2 transition">
                    <span class="like-icon">
                        <svg class="w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 11c.889-.086 1.416-.543 2.156-1.057a22.323 22.323 0 0 0 3.958-5.084 1.6 1.6 0 0 1 .582-.628 1.549 1.549 0 0 1 1.466-.087c.205.095.388.233.537.406a1.64 1.64 0 0 1 .384 1.279l-1.388 4.114M7 11H4v6.5A1.5 1.5 0 0 0 5.5 19v0A1.5 1.5 0 0 0 7 17.5V11Zm6.5-1h4.915c.286 0 .372.014.626.15.254.135.472.332.637.572a1.874 1.874 0 0 1 .215 1.673l-2.098 6.4C17.538 19.52 17.368 20 16.12 20c-2.303 0-4.79-.943-6.67-1.475"/>
                        </svg>
                    </span>
                    <span class="like-count text-sm">{{ $review->likes_count ?? 0 }}</span>
                </button>
            </div>
            

            

            <button onclick="toggleReplyForm({{ $review->id }})" class="mt-2 text-sm text-blue-600 hover:underline">Balas</button>

            <div id="reply-form-{{ $review->id }}" class="hidden mt-2">
                <textarea id="reply-content-{{ $review->id }}" class="w-full border border-gray-300 rounded-lg p-2 text-sm"></textarea>
                <button onclick="submitReply({{ $review->id }})" class="mt-2 inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">Kirim</button>
                <span id="loading-{{ $review->id }}" class="hidden text-sm text-gray-500 ml-2">Mengirim...</span>
            </div>

            {{-- Balasan --}}
            <div id="reply-container-{{ $review->id }}" class="mt-2 space-y-2">
                @foreach ($review->replies as $reply)
                    <div class="border-l-4 border-gray-700 pl-4 mt-2">
                        <p class="font-semibold text-lg text-gray-800">{{ $reply->user->name }}</p>
                        <p class="text-gray-700">{{ $reply->content }}</p>
                        <p><span class="text-xs text-gray-500">{{ $reply->created_at->diffForHumans() }}</span></p>
                    </div>
                @endforeach
            </div>
        @endforeach
        @endif
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
                        @if($resep->total_rating)
                            <span class="text-yellow-500 font-semibold text-sm">
                                ★ {{ number_format($resep->total_rating, 1) }} 
                            </span>
                        @else
                            <span class="text-yellow-500 font-semibold text-sm">
                                ★ {{ number_format($resep->total_rating, 1) }} 
                            </span>
                        @endif
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

