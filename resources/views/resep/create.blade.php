@extends('layout.template')

{{-- Sidebar --}}
@include('admin.sidebar')

@section('resep')
{{-- Background --}}
 <div class="fixed top-0 left-0 w-full h-full bg-gray-100 z-[-1]">
    <div class="w-full h-2/5 bg-[#2EAF2A]"></div>
</div>

<div class="ps-4 sm:ml-64">
    <div class="p-4 mx-6">
        <div class="flex items-center justify-between rounded-lg ">

            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse mb-4">
                <li class="inline-flex items-center">
                  <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-white hover:text-blue-600 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    Home
                  </a>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-white mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a href="#" class="ms-1 text-sm font-medium text-white hover:text-blue-600 md:ms-2  dark:hover:text-white">Dashboard</a>
                  </div>
                </li>
            </ol>
            
            {{-- Profile --}}
            <div class="relative">
                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-12 h-12 rounded-full cursor-pointer" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random&color=fff&size=100" alt="User dropdown">
                <span class="bottom-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2  rounded-full"></span>
            </div>

             {{-- Dropdown menu --}}
            <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                <div class="px-4 py-3 text-sm text-gray-900">
                    <div class="font-medium">{{ auth()->user()->name }}</div>
                    <div class="text-sm truncate">{{ auth()->user()->email }}</div>
                </div>
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="avatarButton">
                        <li>
                            <a href="{{ route('profile') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                                <svg class="w-5 h-5 text-gray-600 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                  </svg> 
                                Profile
                            </a>
                        </li>
                    </ul>
                    <div class="py-1">
                        <a href="/logout" class="flex items-center px-4 py-2 text-red-700 hover:bg-gray-100 rounded-lg">
                            <svg class="w-5 h-5 text-red-600 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1" />
                            </svg>
                            Sign out
                        </a>
                    </div>
                </div>
            </div>

            {{-- Animasi --}}
            <h2 class="text-2xl font-bold text-white mb-4">Buat Resep</h2>

            <div class="w-full text-sm text-left rtl:text-right text-gray-500 mb-4  ">
                <div class="bg-white shadow-md rounded-lg py-10 px-20">
                    <h2 class="text-3xl font-bold text-gray-700 mb-8">Tambah Resep</h2>

                    <form action="{{ route('resep.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Upload Gambar --}}
                        <div class="grid grid-cols-2 gap-4">

                            <div x-data="{ imagePreview: null }" class="mb-6">
                                <label class="block text-gray-800 font-semibold mb-2">Gambar Resep</label>
                                
                                <div class="relative border-2 h-48 border-dashed border-gray-300 rounded-xl p-6 flex flex-col items-center justify-center text-center cursor-pointer hover:border-blue-400 transition"
                                    @click="$refs.image.click()">
                                    <!-- Icon -->
                                    <svg class="w-12 h-12 text-gray-400 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h4l2-3h6l2 3h4v13H3V7z" />
                                        <circle cx="12" cy="13" r="4" />
                                    </svg>

                                    <p class="text-gray-500">Klik untuk unggah gambar resep</p>

                                    <!-- Preview -->
                                    <template x-if="imagePreview">
                                        <img :src="imagePreview" class="absolute inset-0 w-full h-full object-cover rounded-xl opacity-90" />
                                    </template>

                                    <!-- Input file tersembunyi -->
                                    <input 
                                        type="file" name="image" id="image" required 
                                        class="hidden" x-ref="image"
                                        @change="const file = $event.target.files[0]; if(file) { imagePreview = URL.createObjectURL(file); }"
                                    />
                                </div>
                            </div>

                            <div>
                                {{-- Judul Resep --}}
                               <div class="mb-4">
                                   <label for="title" class="block text-gray-700 font-bold">Judul Resep</label>
                                   <input type="text" name="nama_resep" id="title" placeholder="Masukkan nama resep" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300">
                               </div>
                           
                                {{-- Deskripsi --}}
                               <div class="mb-4">
                                   <label for="deskripsi" class="block text-gray-700 font-bold">Deskripsi</label>
                                   <textarea name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi" required class="w-full h-28 mt-2 p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-300"></textarea>
                               </div>
                            </div>
                        </div>

                    
                         {{-- Waktu & Porsi --}}
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <label for="time" class="block text-gray-700 font-bold">Waktu Memasak (Menit)</label>
                                <input type="number" name="waktu" id="time" placeholder="Masukkan waktu" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg">
                            </div>
                            <div class="mb-4">
                                <label for="porsi" class="block text-gray-700 font-bold">Porsi</label>
                                <input type="number" name="porsi" id="porsi" placeholder="Masukkan porsi" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg">
                            </div>
                        </div>
                    
                         {{-- Kategori --}}
                        <div class="mb-4">
                            <label for="kesulitan" class="block text-gray-700 font-bold">Kategori</label>
                            <select name="kategori_id" id="" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg">
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                         {{-- Tingkat Kesulitan --}}
                        <div class="mb-4">
                            <label for="kesulitan" class="block text-gray-700 font-bold">Tingkat Kesulitan</label>
                            <select name="kesulitan" id="kesulitan" required class="w-full mt-2 p-2 border border-gray-300 rounded-lg">
                                <option value="Mudah">Mudah</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Sulit">Sulit</option>
                            </select>
                        </div>
                    
                         {{-- Bahan --}}
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold">Bahan</label>
                            <div x-data="{ bahan: [''] }">
                            <template x-for="(bahann, index) in bahan" :key="index">
                                    <div class="flex space-x-2 mt-2">
                                        <input type="text" :name="'bahan[]'" x-model="bahan[index]"
                                            class="w-full p-2 border border-gray-300 rounded-lg"
                                            placeholder="Masukkan bahan"
                                            required>
                                        <button type="button" class="text-red-500 font-bold" @click="bahan.splice(index, 1)" x-show="bahan.length > 1">✖</button>
                                    </div>
                                </template>
                                <button type="button" class="mt-2 bg-blue-500 text-white px-3 py-1 rounded-lg" @click="bahan.push('')">Tambah Bahan</button>
                            </div>
                        </div>

                         {{-- Cara Membuat --}}
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold">Cara Membuat</label>
                            <div x-data="{ cara_membuat: [''] }">
                                <template x-for="(cara_membuatt, index) in cara_membuat" :key="index">
                                    <div class="flex space-x-2 mt-2">
                                        <input type="text" :name="'cara_membuat[]'" x-model="cara_membuat[index]"
                                            class="w-full p-2 border border-gray-300 rounded-lg"
                                            placeholder="Masukkan langkah"
                                            required>
                                        <button type="button" class="text-red-500 font-bold" @click="cara_membuat.splice(index, 1)" x-show="cara_membuat.length > 1">✖</button>
                                    </div>
                                </template>
                                <button type="button" class="mt-2 bg-green-500 text-white px-3 py-1 rounded-lg" @click="cara_membuat.push('')">Tambah Langkah</button>
                            </div>
                        </div>
                        <button type="submit" class="min-w-full bg-blue-600 text-white px-4 py-3 rounded-lg">Simpan Resep</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection

