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

    <div class="grid md:grid-cols-2 mx-auto overflow-hidden gap-8 bg-gradient-to-b from-[#E9E9E9] to-[#1E811B] h-[684px] w-full px-4 md:px-16 pt-20">
        <div class="flex flex-col items-start justify-center mx-auto max-w-screen-xl py-24 mb-20 w-[78%]">
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-bold mb-6 font-jakarta">
                Selamat Datang di Resep Jajanan Kaki Lima
            </h1>            
            <p class="text-lg font-normal text-white mb-6">
                Temukan resep jajanan yang enak dan mudah cara membuatnya.
            </p>
            <a href="{{ route('resep.semua') }}">

                <button 
                    class="relative inline-flex items-center justify-center px-20 py-3 text-lg font-medium text-white 
                            border border-white rounded-lg bg-transparent transition-all duration-300 ease-in-out 
                            hover:bg-white hover:text-black hover:shadow-lg">
                    LIHAT RESEP
                </button>
            </a>
        </div>
        <div class="flex justify-center items-center h-[5003] w-[686px]">
            <img src="{{ asset('images/mie3.png') }}" alt="Jajanan Kaki Lima">
        </div>
    </div>
    
    {{-- Search --}}
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <h1 class="mb-20 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl font-jakarta">
                Temukan Resep <span class="text-[#1E811B]">Pilihanmu</span>
            </h1>
            
            <form action="{{ route('resep.search') }}" method="GET" class="max-w-4xl mx-auto">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-8 pointer-events-none">
                        <svg class="w-8 h-8 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="q" class="block w-full p-6 pl-20 text-xl text-gray-900 rounded-full bg-gray-50 shadow-lg" placeholder="Temukan resep" required />
                    <button type="submit" class="text-white absolute right-1 bottom-1 bg-[#F394F7] hover:bg-[#db72df] focus:ring-blue-300 font-medium rounded-full text-base md:text-xl px-8 md:px-16 py-3 md:py-5">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </section>

    {{-- Kategori --}}
    <div class="max-w-6xl mx-auto py-10 text-start">
        <!-- Judul Utama -->
        <h2 class="text-3xl font-bold text-gray-800 font-jakarta">Kategori Resep</h2>
        <p class="text-sm text-green-700 mt-2">Pilih kategori kesukaanmu</p>

        <!-- Scrollable kategori -->
        <div class="overflow-x-auto mt-6 hide-scrollbar">
            <div class="flex gap-10 pb-4 px-1 w-max">
                @foreach ($allKategori as $kategori)
                    <a href="{{ route('resep.semua_kategori', $kategori->slug) }}" class="group min-w-[220px] bg-white rounded-lg shadow-md p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                        <div class="w-[163px] h-[163px] rounded-full flex items-center justify-center mx-auto mb-4 transition-transform duration-300 group-hover:scale-110"
                            style="background-color: {{ $kategori->background_color }}">
                            <img src="{{ asset('storage/' . $kategori->image) }}" alt="Kategori {{ $kategori->nama_kategori }}" class="w-18 mx-auto transition-opacity duration-300 group-hover:opacity-90">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900">{{ $kategori->nama_kategori }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </div>


    

    {{-- Resep Populer --}}
    <div class="max-w-6xl mx-auto py-10">
        <!-- Judul Utama -->
        <h2 class="text-3xl font-bold text-gray-800 font-jakarta">Resep Populer</h2>
        <p class="text-sm text-green-700 mt-2">Resep dengan ulasan tertinggi</p>
    
        @if ($resepPopuler->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">

           <!-- Card 1 -->
           @foreach ($resepPopuler as $resep)
                <div class="block group">    
                    <a href="{{ route('makanan.detail', $resep->id) }}" class="block">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="{{ asset('storage/' . $resep->image) }}" 
                                alt="{{ $resep->nama_resep }}"
                                class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100 group-hover:scale-105"> 
                        </div>
                    </a>

                    <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
                        <!-- Nama resep dengan link -->
                        <a href="{{ route('makanan.detail', $resep->id) }}" class="text-lg font-semibold">
                            {{ $resep->nama_resep }}
                        </a>

                        <!-- Bookmark Icon -->
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

                    <p class="text-sm flex items-center gap-2">
                        <!-- Ikon Waktu -->
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M12 8v4l3 3M3.223 14C4.132 18.008 7.717 21 12 21c4.97 0 9-4.03 9-9 0-4.97-4.03-9-9-9-3.73 0-6.93 2.27-8.294 5.5M7 9H3V5"/>
                            </svg>
                            <span>{{ $resep->waktu }} Menit</span>
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
        @endif
    </div>

    
    

    {{-- Daftar Masakan --}}
    <div class="max-w-6xl mx-auto py-10">
        <!-- Judul Utama -->
        <h2 class="text-3xl font-bold text-gray-800 text-start font-jakarta">Daftar Masakan</h2>
        <p class="text-sm text-green-700 mt-2">Temukan makanan kesukaanmu</p>
        
        @if ($allResep->isEmpty())
            <div class="flex flex-col items-center justify-center text-center text-gray-600 py-6">
                <svg class="w-28 h-28 mb-3 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="m4 12 2.66667-1 2.66666 1L12 11l2.6667 1 2.6666-1L20 12m-1 5H5v1c0 1.1046.89543 2 2 2h10c1.1046 0 2-.8954 2-2v-1ZM5 9.00003h14v-1c0-2.20914-1.7909-4-4-4H9c-2.20914 0-4 1.79086-4 4v1ZM18.5 14h-13c-.82843 0-1.5.6716-1.5 1.5 0 .8285.67157 1.5 1.5 1.5h13c.8284 0 1.5-.6715 1.5-1.5 0-.8284-.6716-1.5-1.5-1.5Z"/>
                </svg>                            
                <p class="text-lg font-semibold">Belum ada yang disimpan</p>
                <p class="text-sm text-gray-500">Segera tambahkan resep-resep lezat yang ingin Anda coba!</p>
            </div>
        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
            {{-- Card 1 --}}
            @foreach ($allResep as $resep)
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative transition-all duration-300 hover:shadow-lg">
                    <a href="{{ route('makanan.detail', $resep->id) }}" class="block group">
                        <img src="{{ asset('storage/' . $resep->image) }}" 
                            alt="{{ $resep->nama_resep }}" 
                            class="w-full h-80 object-cover transition-transform duration-300 group-hover:scale-105">
                    </a>
                    
                    <div class="p-4">

                        <!-- Judul & Bookmark -->
                        <div class="flex justify-between items-center">
                            <a href="{{ route('makanan.detail', $resep->id) }}" class="text-xl font-semibold text-gray-900 group-hover:text-green-700 transition-all duration-300">
                                {{ $resep->nama_resep }}
                            </a>

                            @auth
                                @php
                                    $isSaved = auth()->user()->saves->contains('resep_id', $resep->id);
                                @endphp
                                <button class="save-btn transition duration-300" data-resep-id="{{ $resep->id }}">
                                    @if ($isSaved)
                                        <!-- Sudah disimpan -->
                                        <svg class="w-8 h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z"/>
                                        </svg>
                                    @else
                                        <!-- Belum disimpan -->
                                        <svg class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 21l-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21z" />
                                        </svg>
                                    @endif
                                </button>
                            @endauth
                        </div>
                
                        <!-- Detail -->
                        <p class="text-gray-600 text-sm my-2 flex items-center">
                            <svg class="w-4 h-4 mr-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                            </svg>  {{ $resep->waktu }} Menit &nbsp;
                            <svg class="w-4 h-4 mr-1 text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                            </svg>  {{ $resep->porsi }} Orang &nbsp;
                            
                            @if($resep->total_rating)
                                <span class="text-yellow-500 font-semibold text-sm">
                                    ★ {{ number_format($resep->total_rating, 1) }} 
                                </span>
                            @else
                                <span class="text-yellow-500 font-semibold text-sm">
                                    ★ {{ number_format($resep->total_rating, 1) }} 
                                </span>
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        @endif

        @if ($allResep->count())
            <div class="flex justify-center m-10">
                <a href="{{ route('resep.semua') }}" class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 transition-all duration-300">
                    Lihat Semua
                </a>
            </div>
        @endif
    </div>

    @include('layout.footer')   




    
    
    
    