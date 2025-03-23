@include('layout.app')

    <div class="grid md:grid-cols-2 mx-auto overflow-hidden gap-8 bg-gradient-to-b from-[#E9E9E9] to-[#1E811B] h-[684px] w-full px-4 md:px-16 pt-20">
        <div class="flex flex-col items-start justify-center mx-auto max-w-screen-xl py-24 mb-20 w-[78%]">
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-bold mb-6 font-jakarta">
                Selamat Datang di Resep Jajanan Kaki Lima
            </h1>            
            <p class="text-lg font-normal text-white mb-6">
                Temukan resep jajanan yang enak dan mudah cara membuatnya.
            </p>
            <button 
                class="relative inline-flex items-center justify-center px-20 py-3 text-lg font-medium text-white 
                       border border-white rounded-lg bg-transparent transition-all duration-300 ease-in-out 
                       hover:bg-white hover:text-black hover:shadow-lg">
                LIHAT RESEP
            </button>
        </div>
        <div class="flex justify-center items-center h-[5003] w-[686px]">
            <img src="{{ asset('images/mie3.png') }}" alt="Jajanan Kaki Lima">
        </div>
    </div>
    
    {{-- Search --}}
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">
            <h1 class="mb-20 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl font-jakarta">Temukan Resep <span class="text-[#1E811B]"> Pilihanmu</span></h1>
            
            <form class="max-w-4xl mx-auto">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-8 pointer-events-none">
                        <svg class="w-8 h-8 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-6 ps-20 text-xl text-gray-900 rounded-full bg-gray-50 shadow-lg" placeholder="Temukan resep" required />
                    <button type="submit" class="text-white absolute end-1 bottom-1 bg-[#F394F7] hover:bg-[#db72df]  focus:ring-blue-300 font-medium rounded-full text-xl px-16 py-5">Search</button>
                </div>
            </form>

        </div>
    </section>
    
    {{-- Kategori --}}
    <div class="max-w-6xl mx-auto py-10 text-start ">
        <!-- Judul Utama -->
        <h2 class="text-3xl font-bold text-gray-800 font-jakarta">Kategori Resep</h2>
        <p class="text-sm text-green-700 mt-2">Pilih kategori kesukaanmu</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 max-w-6xl mx-auto py-10">
            <!-- Card 1 -->
            <a href="#" class="group block bg-white rounded-lg shadow-md p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                <div class="w-[163px] h-[163px] bg-[#82BBD1] rounded-full flex items-center justify-center mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
                    <img src="{{ asset('images/cream.png') }}" alt="Kategori 1" class="w-18 mx-auto mb-4 transition-opacity duration-300 group-hover:opacity-80">
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Makanan Ringan</h3>
            </a>
        
            <!-- Card 2 -->
            <a href="#" class="group block bg-white rounded-lg shadow-md p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                <div class="w-[163px] h-[163px] bg-[#C1D182] rounded-full flex items-center justify-center mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
                    <img src="{{ asset('images/french.png') }}" alt="Kategori 2" class="w-28 mx-auto mb-4 transition-opacity duration-300 group-hover:opacity-80">
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Minuman Segar</h3>
            </a>
        
            <!-- Card 3 -->
            <a href="#" class="group block bg-white rounded-lg shadow-md p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                <div class="w-[163px] h-[163px] bg-[#85D182] rounded-full flex items-center justify-center mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
                    <img src="{{ asset('images/burger.png') }}" alt="Kategori 3" class="w-28 mx-auto mb-4 transition-opacity duration-300 group-hover:opacity-80">
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Kue & Pastry</h3>
            </a>
        
            <!-- Card 4 -->
            <a href="#" class="group block bg-white rounded-lg shadow-md p-6 text-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                <div class="w-[163px] h-[163px] bg-[#D18282] rounded-full flex items-center justify-center mx-auto mb-4 transition-transform duration-300 group-hover:scale-110">
                    <img src="{{ asset('images/ramen.png') }}" alt="Kategori 4" class="w-28 mx-auto mb-4 transition-opacity duration-300 group-hover:opacity-80">
                </div>
                <h3 class="text-xl font-semibold text-gray-900">Street Food</h3>
            </a>
        </div>
    </div>
    



    {{-- Resep Populer --}}
    <div class="max-w-6xl mx-auto py-10">
        <!-- Judul Utama -->
        <h2 class="text-3xl font-bold text-gray-800 font-jakarta">Kategori Resep</h2>
        <p class="text-sm text-green-700 mt-2">Pilih kategori kesukaanmu</p>
    
        <!-- Grid Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
           <!-- Card 1 -->
        <a href="#" class="block group">
            <div class="relative overflow-hidden rounded-lg">
                <img src="{{ asset('images/food/takoyaki.jpg') }}" alt="Makanan 1"
                    class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 
                        group-hover:brightness-100 group-hover:scale-105">
                <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">
                    #1
                </span>
            </div>

            <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
                <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>

                <!-- Bookmark Icon -->
                <button class="text-gray-300 hover:text-yellow-500 transition duration-300">
                    <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                         .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                    </svg>
                      
                </button>
            </div>

            <p class="text-sm flex items-center gap-2">
                <!-- Ikon Waktu -->
                <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 8v4l3 3M3.223 14C4.132 18.008 7.717 21 12 21c4.97 0 9-4.03 9-9 0-4.97-4.03-9-9-9-3.73 0-6.93 2.27-8.294 5.5M7 9H3V5"/>
                </svg>
                <span>20 Menit</span>

                <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 
                            2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 
                            19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146
                            .633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                </svg>
                <span class="font-semibold text-yellow-400">4.8</span>
            </p>
        </a>

    
            <!-- Card 2 -->
            <a href="#" class="block group">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="{{ asset('images/food/bakso.jpg') }}" alt="Makanan 2"
                        class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300
                            group-hover:brightness-100 group-hover:scale-105"> 
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">
                            #2
                        </span>
                </div>

                <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
                    <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>
    
                    <!-- Bookmark Icon -->
                    <button class="text-gray-300 hover:text-yellow-500 transition duration-300">
                        <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                            .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                        </svg>
                    </button>
                </div>
                    <p class="text-sm flex items-center gap-2">
                        <!-- Ikon Waktu -->
                        <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                        </svg> 
                        <span>30 Menit</span>

                        <!-- Ikon Rating -->
                        <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                           width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                           <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 
                                   2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 
                                   19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146
                                   .633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                        </svg>
                        <span class="font-semibold text-yellow-400">4.7</span>
                    </p>
            </a>
    
            <!-- Card 3 -->
            <a href="#" class="block group">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="{{ asset('images/food/mochi.webp') }}" alt="Makanan 3"
                        class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300
                        group-hover:brightness-100 group-hover:scale-105"> 
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">
                            #3
                        </span>
                </div>
                <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
                    <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>
    
                    <!-- Bookmark Icon -->
                    <button class="text-gray-300 hover:text-yellow-500 transition duration-300">
                        <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                            .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                        </svg>
                    </button>
                </div>
                    <p class="text-sm flex items-center gap-2">
                        <!-- Ikon Waktu -->
                        <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                        </svg>
                        <span>40 Menit</span>

                        <!-- Ikon Rating -->
                        <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                           width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                           <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 
                                   2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 
                                   19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146
                                   .633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                        </svg>
                        <span class="font-semibold text-yellow-400">4.9</span>
                    </p>
            </a>
    
            <!-- Card 4 -->
            <a href="#" class="block group">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="{{ asset('images/food/sumedang.jpg') }}" alt="Makanan 4"
                        class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100 group-hover:scale-105"> 
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">#4</span>
                </div>

                <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
                    <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>
    
                    <!-- Bookmark Icon -->
                    <button class="text-gray-300 hover:text-yellow-500 transition duration-300">
                        <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                            .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                        </svg>
                    </button>
                </div>
                <p class="text-sm flex items-center gap-2">
                    <!-- Ikon Waktu -->
                    <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                    </svg>
                    <span>35 Menit</span>

                    <!-- Ikon Rating -->
                    <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 
                                2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 
                                19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146
                                .633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                    </svg>
                    <span class="font-semibold text-yellow-400">4.6</span>
                </p>
            </a>
        </div>
    </div>

    
    

    {{-- Daftar Masakan --}}
    <div class="max-w-6xl mx-auto py-10">
        <!-- Judul Utama -->
        <h2 class="text-3xl font-bold text-gray-800 text-start font-jakarta">Daftar Masakan</h2>
        <p class="text-sm text-green-700 mt-2">Temukan makanan kesukaanmu</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                <img src="{{ asset('images/food/mochi.webp') }}" 
                     alt="Makanan 1" 
                     class="w-full h-80 object-cover transition-transform duration-300 hover:scale-105">
                
                <div class="p-4">
                    <!-- Judul & Bookmark -->
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-900">Nasi Goreng Spesial</h3>
                        <button class="text-gray-400 hover:text-yellow-500 transition duration-300">
                            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                                .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                            </svg>
                        </button>
                    </div>
            
                    <!-- Detail -->
                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        <svg class="w-4 h-4 mr-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                        </svg> 20 Menit &nbsp;
                        <svg class="w-4 h-4 mr-1 text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                        </svg> 4 orang &nbsp;
                        <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                        </svg> <span class="font-semibold text-yellow-400 ml-1">4.8</span>
                    </p>
                </div>
            </div>


            @if(isset($allResep) && count($allResep) > 0)
            @foreach ($allResep as $resep)
                <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                    <img src="{{ asset('storage/' . $resep->image) }}" 
                         alt="{{ $resep->nama_resep }}" 
                         class="w-full h-80 object-cover transition-transform duration-300 hover:scale-105">
                    
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-900">{{ $resep->nama_resep }}</h3>
                        <p class="text-gray-600 text-sm my-2">Deskripsi: {{ $resep->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
            @else
                <p class="text-gray-500 text-center">Tidak ada resep yang tersedia.</p>
            @endif

            @foreach ($allKategori as $kategori)
                <tr>
                    <td>{{ $kategori->nama_kategori }}</td>
                </tr>
            @endforeach
        

    
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                <img src="{{ asset('images/food/sumedang.jpg') }}" alt="Makanan 2" class="w-full h-80 object-cover transition-transform duration-300 hover:scale-105">
                <div class="p-4">
                   <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-900">Tahu Sumedang</h3>
                        <button class="text-gray-400 hover:text-yellow-500 transition duration-300">
                            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                                .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                            </svg>
                        </button>
                    </div>
                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        <svg class="w-4 h-4 mr-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                          </svg> 30 Menit &nbsp;
                           <svg class="w-4 h-4 mr-1 text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                          </svg> 4 orang &nbsp;
                           <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg> <span class="font-semibold text-yellow-400 ml-1">4.7</span>
                    </p>
                </div>
            </div>
    
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                <img src="{{ asset('images/food/tahu.webp') }}" alt="Makanan 3" class="w-full h-80 object-cover transition-transform duration-300 hover:scale-105">
                <div class="p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-900">Nasi Goreng Spesial</h3>
                        <button class="text-gray-400 hover:text-yellow-500 transition duration-300">
                            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                                .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                            </svg>
                        </button>
                    </div>                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        <svg class="w-4 h-4 mr-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                          </svg> 45 Menit &nbsp;
                           <svg class="w-4 h-4 mr-1 text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                          </svg> 4 orang &nbsp;
                           <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg> <span class="font-semibold text-yellow-400 ml-1">4.9</span>
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                <img src="{{ asset('images/food/takoyaki.jpg') }}" alt="Makanan 1" class="w-full h-80 object-cover transition-transform duration-300 hover:scale-105">
                <div class="p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-900">Nasi Goreng Spesial</h3>
                        <button class="text-gray-400 hover:text-yellow-500 transition duration-300">
                            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                                .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                            </svg>
                        </button>
                    </div>                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        <svg class="w-4 h-4 mr-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                          </svg> 20 Menit &nbsp;
                           <svg class="w-4 h-4 mr-1 text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                          </svg> 4 orang &nbsp;
                           <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg> <span class="font-semibold text-yellow-400 ml-1">4.8</span>
                    </p>
                </div>
            </div>
    
            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                <img src="{{ asset('images/food/xiaomay.jpg') }}" alt="Makanan 2" class="w-full h-80 object-cover transition-transform duration-300 hover:scale-105">
                <div class="p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-900">Nasi Goreng Spesial</h3>
                        <button class="text-gray-400 hover:text-yellow-500 transition duration-300">
                            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                                .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                            </svg>
                        </button>
                    </div>                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        <svg class="w-4 h-4 mr-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                          </svg> 30 Menit &nbsp;
                           <svg class="w-4 h-4 mr-1 text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                          </svg> 4 orang &nbsp;
                           <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg> <span class="font-semibold text-yellow-400 ml-1">4.7</span>
                    </p>
                </div>
            </div>
    
            <!-- Card 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative">
                <img src="{{ asset('images/food/bakso.jpg') }}" alt="Makanan 3" class="w-full h-80 object-cover transition-transform duration-300 hover:scale-105">
                <div class="p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-900">Nasi Goreng Spesial</h3>
                        <button class="text-gray-400 hover:text-yellow-500 transition duration-300">
                            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 
                                .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                            </svg>
                        </button>
                    </div>                    <p class="text-gray-600 text-sm my-2 flex items-center gap-1">
                        <svg class="w-4 h-4 mr-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                          </svg> 45 Menit &nbsp; 
                          <svg class="w-4 h-4 mr-1 text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                          </svg> 4 orang &nbsp; 
                          <svg class="w-4 h-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg><span class="font-semibold text-yellow-400">4.9</span>
                    </p>
                </div>
            </div>
        </div>

         <!-- Button Lihat Semua -->
        <div class="flex justify-center m-10">
            <a href="" class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 transition-all duration-300">
                Lihat Semua
            </a>
        </div>

    </div>

    @include('layout.footer')   




    
    
    
    