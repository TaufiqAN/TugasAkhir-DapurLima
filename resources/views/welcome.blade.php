@include('layout.app')

    @if(session('success'))
    <div 
    x-data="{ open: true }" 
        x-show="open"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
        <div class="bg-white p-6 rounded-2xl shadow-xl max-w-sm w-full text-center border-t-4 border-green-500"> 
            <div class="flex justify-center mb-3">
                <svg class="w-12 h-12 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>              
            </div>
            <h2 class="text-xl font-bold text-gray-800">Yeay! Kamu berhasil daftar 🎉</h2>
            <p class="text-gray-600 mt-1 text-sm">
                {{ session('success') }}
            </p>
            <button 
                @click="open = false"
                class="mt-5 px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-full transition"
            >Oke, mengerti</button>
        </div>
    </div>
    @endif

    <div class="grid md:grid-cols-2 mx-auto overflow-hidden gap-8 bg-gradient-to-b from-[#E9E9E9] to-[#1E811B] h-auto md:h-[684px] w-full px-4 md:px-16 pt-20">
        <div class="flex flex-col items-start justify-center mx-auto py-12 md:py-24 mb-10 md:mb-20 w-full md:w-[78%] max-w-screen-md">
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-bold mb-6 font-jakarta text-center md:text-left">
                Selamat Datang di Resep Jajanan Kaki Lima
            </h1>
            <p class="text-base md:text-lg font-normal text-white mb-6 text-center md:text-left">
                Temukan resep jajanan yang enak dan mudah cara membuatnya.
            </p>
            <div class="w-full flex justify-center md:justify-start">
                <a href="{{ route('resep.semua') }}">
                    <button 
                        class="relative inline-flex items-center justify-center px-10 md:px-20 py-3 text-base md:text-lg font-medium text-white 
                                border border-white rounded-lg bg-transparent transition-all duration-300 ease-in-out 
                                hover:bg-white hover:text-black hover:shadow-lg">
                        LIHAT RESEP
                    </button>
                </a>
            </div>
        </div>
        
        {{-- Gambar hanya tampil di desktop --}}
        <div class="hidden md:flex justify-center items-center w-full h-full">
            <img src="{{ asset('images/mie3.png') }}" alt="Jajanan Kaki Lima" class="w-[686px] h-auto">
        </div>
    </div>
    
    
    {{-- Search --}}
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <h1 class="mb-10 md:mb-20 text-xl sm:text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl font-jakarta">
                Temukan Resep <span class="text-[#1E811B]">Pilihanmu</span>
            </h1>

            <form action="{{ route('resep.search') }}" method="GET" class="max-w-4xl mx-auto px-2">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-5 sm:pl-6 md:pl-8 pointer-events-none">
                        <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="q"class="block w-full p-4 sm:p-5 md:p-6 pl-14 sm:pl-16 md:pl-20 text-base sm:text-lg md:text-xl text-gray-900 rounded-full bg-gray-50 shadow-lg"     placeholder="Temukan resep" required />
                    <button type="submit"
                        class="text-white absolute right-1 bottom-1 bg-[#F394F7] hover:bg-[#db72df] focus:ring-blue-300 font-medium rounded-full text-sm sm:text-base md:text-xl px-6 sm:px-10 md:px-16 py-3.5 sm:py-3 md:py-5">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- Kategori --}}
    <div class="max-w-6xl mx-auto py-10 text-start px-4 sm:px-6">
        <!-- Judul Utama -->
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 font-jakarta">Kategori Resep</h2>
        <p class="text-sm text-green-700 mt-2">Pilih kategori kesukaanmu</p>

        {{-- Scroll --}}
        <div class="overflow-x-auto mt-6 hide-scrollbar">
            <div class="flex gap-4 sm:gap-6 md:gap-10 pb-4 w-max">
                @foreach ($allKategori as $kategori)
                    <a href="{{ route('resep.semua_kategori', $kategori->slug) }}"
                    class="group min-w-[160px] sm:min-w-[180px] md:min-w-[220px] bg-white rounded-lg shadow-md p-4 sm:p-5 md:p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <div class="w-[120px] sm:w-[140px] md:w-[163px] h-[120px] sm:h-[140px] md:h-[163px] rounded-full flex items-center justify-center mx-auto mb-4 transition-transform duration-300 group-hover:scale-110"
                            style="background-color: {{ $kategori->background_color }}">
                            <img src="{{ asset('storage/' . $kategori->image) }}"
                                alt="Kategori {{ $kategori->nama_kategori }}"
                                class="w-14 sm:w-16 md:w-18 h-auto mx-auto transition-opacity duration-300 group-hover:opacity-90 object-contain">
                        </div>
                        <h3 class="text-base sm:text-lg md:text-xl font-semibold text-gray-900">{{ $kategori->nama_kategori }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Resep Populer --}}
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-0 py-10">
        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 font-jakarta">Resep Populer</h2>
        <p class="text-sm text-green-700 mt-2">Resep dengan ulasan tertinggi</p>

        @if ($resepPopuler->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            @foreach ($resepPopuler as $resep)
            <div class="block group">
                <a href="{{ route('makanan.detail', $resep->id) }}" class="block">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="{{ asset('storage/' . $resep->image) }}" 
                            alt="{{ $resep->nama_resep }}"
                            class="w-full h-40 sm:h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100 group-hover:scale-105">
                    </div>
                </a>

                <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
                    <a href="{{ route('makanan.detail', $resep->id) }}" class="text-base sm:text-lg font-semibold">
                        {{ $resep->nama_resep }}
                    </a>

                    {{-- Bookmark --}}
                        @php
                            $isSaved = auth()->check() && auth()->user()->saves->contains('resep_id', $resep->id);
                        @endphp
                        <button class="save-btn" data-resep-id="{{ $resep->id }}"
                            @guest onclick="showLoginModal()"  @endguest>
                            @if ($isSaved)
                                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z"/>
                                </svg>
                            @else
                                <svg class="w-7 h-7 sm:w-8 sm:h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 21l-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21z" />
                                </svg>
                            @endif
                        </button>
                </div>

                <p class="text-sm flex items-center gap-2 mt-2">
                    {{-- Waktu --}}
                    <span class="flex items-center gap-1 text-[13px] sm:text-sm">
                        <svg class="w-4 h-4 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M12 8v4l3 3M3.223 14C4.132 18.008 7.717 21 12 21c4.97 0 9-4.03 9-9 0-4.97-4.03-9-9-9-3.73 0-6.93 2.27-8.294 5.5M7 9H3V5"/>
                        </svg>
                        <span>{{ $resep->waktu }} Menit</span>
                    </span>

                    {{-- Rating --}}
                    <span class="flex items-center gap-1 text-[13px] sm:text-sm">
                        <span class="text-yellow-500 font-semibold">
                            ★ {{ number_format($resep->total_rating, 1) }} 
                        </span>
                    </span>
                </p>
            </div>
            @endforeach
        </div>
        @endif
    </div>


    
    

    {{-- Daftar Masakan --}}
    <div class="max-w-6xl mx-auto py-10 px-4 sm:px-6 lg:px-0">
        <!-- Judul Utama -->
        <h2 class="text-3xl font-bold text-gray-800 text-start font-jakarta">Resep Terbaru</h2>
        <p class="text-sm text-green-700 mt-2">Temukan makanan kesukaanmu</p>
        
        @if ($allResep->isEmpty())
            <div class="flex flex-col items-center justify-center text-center text-gray-600 py-6">
                <svg class="w-28 h-28 mb-3 text-gray-300" ...></svg>                            
                <p class="text-lg font-semibold">Belum ada yang disimpan</p>
                <p class="text-sm text-gray-500">Segera tambahkan resep-resep lezat yang ingin Anda coba!</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                @foreach ($allResep as $resep)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden relative transition-all duration-300 hover:shadow-lg">
                        <a href="{{ route('makanan.detail', $resep->id) }}" class="block group">
                            <img src="{{ asset('storage/' . $resep->image) }}" 
                                alt="{{ $resep->nama_resep }}" 
                                class="w-full h-64 sm:h-72 md:h-80 object-cover transition-transform duration-300 group-hover:scale-105">
                        </a>
                        <div class="p-4">
                            <!-- Judul & Bookmark -->
                            <div class="flex justify-between items-start">
                                <a href="{{ route('makanan.detail', $resep->id) }}" class="text-lg sm:text-xl font-semibold text-gray-900 group-hover:text-green-700 transition-all duration-300">
                                    {{ $resep->nama_resep }}
                                </a>
    
                                @php
                                    $isSaved = auth()->check() && auth()->user()->saves->contains('resep_id', $resep->id);
                                @endphp
                                <button class="save-btn transition duration-300 ml-2" data-resep-id="{{ $resep->id }}" 
                                    @guest onclick="showLoginModal()" @endguest>
                                    @if ($isSaved)
                                        <svg class="w-7 h-7 sm:w-8 sm:h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z"/>
                                        </svg>
                                    @else
                                        <svg class="w-7 h-7 sm:w-8 sm:h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 21l-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21z" />
                                        </svg>
                                    @endif
                                </button>
                            </div>
    
                            <!-- Detail -->
                            <p class="text-gray-600 text-sm mt-2 flex flex-wrap items-center gap-2">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                                    </svg>
                                    {{ $resep->waktu }} Menit
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $resep->porsi }} Orang
                                </span>
                                <span class="text-yellow-500 font-semibold text-sm">
                                    ★ {{ number_format($resep->total_rating ?? 0, 1) }}
                                </span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    
        @if ($allResep->count())
            <div class="flex justify-center mt-10">
                <a href="{{ route('resep.semua') }}" class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 transition-all duration-300">
                    Lihat Semua
                </a>
            </div>
        @endif
    </div>
    
    

    @include('layout.footer')   




    
    
    
    