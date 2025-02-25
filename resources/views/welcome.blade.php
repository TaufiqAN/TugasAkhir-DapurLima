@include('layout.app')

    <div class="grid md:grid-cols-2 overflow-hidden gap-8 bg-gradient-to-b from-[#E9E9E9] to-[#1E811B] h-[614px] w-full px-4 md:px-16">
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
    




    {{-- <div class="max-w-6xl mx-auto py-10">
        <!-- Judul Utama -->
        <h2 class="text-3xl font-bold text-gray-800 font-jakarta">Kategori Resep</h2>
        <p class="text-sm text-green-700 mt-2">Pilih kategori kesukaanmu</p>
    
        <!-- Grid Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
            <!-- Card 1 -->
            <a href="#" class="block group">
                <div class="relative">
                    <img src="{{ asset('images/food/mochi.webp') }}" alt="Makanan 1" class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100">
                    <div class="absolute bottom-0 w-full bg-black bg-opacity-60 text-white p-3 text-center rounded-b-lg">
                        <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>
                        <p class="text-sm">⏳ 20 Menit &nbsp; ⭐ 4.8</p>
                    </div>
                </div>
            </a>
    
            <!-- Card 2 -->
            <a href="#" class="block group">
                <div class="relative">
                    <img src="{{ asset('images/food/mochi.webp') }}" alt="Makanan 2" class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100">
                    <div class="absolute bottom-0 w-full bg-black bg-opacity-60 text-white p-3 text-center rounded-b-lg">
                        <h3 class="text-lg font-semibold">Mie Ayam</h3>
                        <p class="text-sm">⏳ 30 Menit &nbsp; ⭐ 4.7</p>
                    </div>
                </div>
            </a>
    
            <!-- Card 3 -->
            <a href="#" class="block group">
                <div class="relative">
                    <img src="{{ asset('images/food/mochi.webp') }}" alt="Makanan 3" class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100">
                    <div class="absolute bottom-0 w-full bg-black bg-opacity-60 text-white p-3 text-center rounded-b-lg">
                        <h3 class="text-lg font-semibold">Sate Ayam</h3>
                        <p class="text-sm">⏳ 45 Menit &nbsp; ⭐ 4.9</p>
                    </div>
                </div>
            </a>
    
            <!-- Card 4 -->
            <a href="#" class="block group">
                <div class="relative">
                    <img src="{{ asset('images/food/mochi.webp') }}" alt="Makanan 4" class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100">
                    <div class="absolute bottom-0 w-full bg-black bg-opacity-60 text-white p-3 text-center rounded-b-lg">
                        <h3 class="text-lg font-semibold">Martabak Manis</h3>
                        <p class="text-sm">⏳ 35 Menit &nbsp; ⭐ 4.6</p>
                    </div>
                </div>
            </a>
        </div>
    </div> --}}
    




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
                        class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100 group-hover:scale-105">
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">#1</span>
                </div>
                <div class="mt-4 text-gray-900 text-start group-hover:text-blue-600 transition-all duration-300">
                    <h3 class="text-lg font-semibold">Nasi Goreng Spesial</h3>
                    <p class="text-sm">⏳ 20 Menit &nbsp; ⭐ 4.8</p>
                </div>
            </a>
    
            <!-- Card 2 -->
            <a href="#" class="block group">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="{{ asset('images/food/bakso.jpg') }}" alt="Makanan 2"
                        class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100 group-hover:scale-105"> 
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">#2</span>
                </div>
                <div class="mt-4 text-gray-900 text-start group-hover:text-blue-600 transition-all duration-300">
                    <h3 class="text-lg font-semibold">Mie Ayam</h3>
                    <p class="text-sm">⏳ 30 Menit &nbsp; ⭐ 4.7</p>
                </div>
            </a>
    
            <!-- Card 3 -->
            <a href="#" class="block group">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="{{ asset('images/food/mochi.webp') }}" alt="Makanan 3"
                        class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100 group-hover:scale-105"> 
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">#3</span>
                </div>
                <div class="mt-4 text-gray-900 text-start group-hover:text-blue-600 transition-all duration-300">
                    <h3 class="text-lg font-semibold">Sate Ayam</h3>
                    <p class="text-sm">⏳ 45 Menit &nbsp; ⭐ 4.9</p>
                </div>
            </a>
    
            <!-- Card 4 -->
            <a href="#" class="block group">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="{{ asset('images/food/sumedang.jpg') }}" alt="Makanan 4"
                        class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300 group-hover:brightness-100 group-hover:scale-105"> 
                        <span class="absolute top-2 right-2 bg-red-600 text-white text-sm font-bold px-3 py-1 rounded-full">#4</span>
                </div>
                <div class="mt-4 text-gray-900 text-start group-hover:text-blue-600 transition-all duration-300">
                    <h3 class="text-lg font-semibold">Martabak Manis</h3>
                    <p class="text-sm">⏳ 35 Menit &nbsp; ⭐ 4.6</p>
                </div>
            </a>
        </div>
    </div>

    
    

    {{-- Daftar Masakan --}}
    <div class="max-w-6xl mx-auto py-10">
        <!-- Judul Utama -->
        <h2 class="text-3xl font-bold text-gray-800 text-start font-jakarta">Daftar Masakan</h2>
        <p class="text-sm text-green-700 mt-2">Temukan makanan kesukaanmu</p>
    
        <!-- Grid Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('images/food/mochi.webp') }}" alt="Makanan 1" class="w-full h-80 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-900">Nasi Goreng Spesial</h3>
                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        ⏳ 20 Menit &nbsp; 👦 4 orang &nbsp; ⭐ <span class="font-semibold text-yellow-400 ml-1">4.8</span>
                    </p>
                </div>
            </div>
    
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('images/food/sumedang.jpg') }}" alt="Makanan 2" class="w-full h-80 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-900">Mie Ayam</h3>
                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        ⏳ 30 Menit &nbsp; 👦 4 orang &nbsp; ⭐ <span class="font-semibold text-yellow-400 ml-1">4.7</span>
                    </p>
                </div>
            </div>
    
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('images/food/tahu.webp') }}" alt="Makanan 3" class="w-full h-80 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-900">Sate Ayam</h3>
                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        ⏳ 45 Menit &nbsp; 👦 4 orang &nbsp; ⭐ <span class="font-semibold text-yellow-400 ml-1">4.9</span>
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('images/food/takoyaki.jpg') }}" alt="Makanan 1" class="w-full h-80 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-900">Nasi Goreng Spesial</h3>
                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        ⏳ 20 Menit &nbsp; 👦 4 orang &nbsp; ⭐ <span class="font-semibold text-yellow-400 ml-1">4.8</span>
                    </p>
                </div>
            </div>
    
            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('images/food/xiaomay.jpg') }}" alt="Makanan 2" class="w-full h-80 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-900">Mie Ayam</h3>
                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        ⏳ 30 Menit &nbsp; 👦 4 orang &nbsp; ⭐ <span class="font-semibold text-yellow-400 ml-1">4.7</span>
                    </p>
                </div>
            </div>
    
            <!-- Card 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('images/food/bakso.jpg') }}" alt="Makanan 3" class="w-full h-80 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-900">Sate Ayam</h3>
                    <p class="text-gray-600 text-sm my-2 flex items-center">
                        ⏳ 45 Menit &nbsp; 👦 4 orang &nbsp; ⭐ <span class="font-semibold text-yellow-400 ml-1">4.9</span>
                    </p>
                </div>
            </div>
        </div>

         <!-- Button Lihat Semua -->
        <div class="flex justify-center m-10">
            <a href="#" class="px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-lg hover:bg-green-700 transition-all duration-300">
                Lihat Semua
            </a>
        </div>

    </div>

    @include('layout.footer')




    
    
    
    