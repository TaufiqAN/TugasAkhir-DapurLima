@extends('layout.master')

@section('admin')   
<div class=" min-h-screen">

    {{-- Ringkasan Statistik --}}
    <h2 class="text-2xl font-bold text-white mb-4">Dashboard admin</h2>
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-4">
        {{-- Total Resep --}}
        <a href="{{ route('resep.index') }}"" class="block group">
            <div class="flex items-center justify-between h-28 p-6 rounded-xl bg-white shadow-md transition duration-300 hover:shadow-xl hover:scale-105 hover:bg-green-50">
                <div class="bg-[#E7FFE6] p-3 rounded-full transition duration-300 group-hover:bg-green-400 group-hover:ring-4 group-hover:ring-green-200">
                    <svg class="w-12 h-12 text-gray-800 dark:text-green-600 transition duration-300 group-hover:rotate-12 group-hover:scale-110 group-hover:text-white" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z" clip-rule="evenodd"/>
                    </svg>                   
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-600">Total Resep</h2>
                    <p class="text-green-700 text-end font-bold text-4xl mt-1">{{ $jumlahResep }}</p>
                </div>
            </div>
        </a>

        {{-- Total Kategori --}}
        <a href="{{ route('kategori.index') }}" class="block group">
            <div class="flex items-center justify-between h-28 p-6 rounded-xl bg-white shadow-md transition duration-300 hover:shadow-xl hover:scale-105 hover:bg-orange-50">
                <div class="bg-orange-100 p-3 rounded-full transition duration-300 group-hover:bg-orange-300 group-hover:ring-4 group-hover:ring-orange-200">
                    <svg class="w-12 h-12 text-gray-800 dark:text-orange-600 transition duration-300 group-hover:rotate-12 group-hover:scale-110 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M5 5a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2H5Zm9 2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H14Zm3 0a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17ZM3 17v-3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm11-2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H14Zm3 0a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" clip-rule="evenodd"/>
                    </svg> 
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-600">Total Kategori</h2>
                    <p class="text-orange-700 text-end font-bold text-4xl mt-1">{{ $jumlahKategori }}</p>
                </div>
            </div>
        </a>
    
        {{-- Total Pengguna --}}
        <a href="{{ route('admin.users') }}" class="block group">
            <div class="flex items-center justify-between h-28 p-6 rounded-xl bg-white shadow-md transition duration-300 hover:shadow-xl hover:scale-105 hover:bg-purple-50">
                <div class="bg-purple-100 p-3 rounded-full transition duration-300 group-hover:bg-purple-400 group-hover:ring-4 group-hover:ring-purple-200">
                    <svg class="w-12 h-12 text-gray-800 dark:text-purple-600 transition duration-300 group-hover:rotate-12 group-hover:scale-110 group-hover:text-white" 
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                    </svg> 
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-600">Total Pengguna</h2>
                    <p class="text-purple-700 text-end font-bold text-4xl mt-1">{{ $jumlahUser }}</p>
                </div>
            </div>
        </a>
    
        {{-- Total Komentar --}}
        <a href="{{ route('admin.reviews') }}" class="block group">
            <div class="flex items-center justify-between h-28 p-6 rounded-xl bg-white shadow-md transition duration-300 hover:shadow-xl hover:scale-105 hover:bg-blue-50">
                <div class="bg-blue-100 p-3 rounded-full transition duration-300 group-hover:bg-blue-400 group-hover:ring-4 group-hover:ring-blue-200">
                        <svg class="w-12 h-12 text-gray-800 dark:text-blue-600 transition duration-300 group-hover:rotate-12 group-hover:scale-110 group-hover:text-white" 
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M7.556 8.5h8m-8 3.5H12m7.111-7H4.89a.896.896 0 0 0-.629.256.868.868 0 0 0-.26.619v9.25c0 .232.094.455.26.619A.896.896 0 0 0 4.89 16H9l3 4 3-4h4.111a.896.896 0 0 0 .629-.256.868.868 0 0 0 .26-.619v-9.25a.868.868 0 0 0-.26-.619.896.896 0 0 0-.63-.256Z"/>
                        </svg>
                    </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-600">Total Komentar</h2>
                    <p class="text-blue-700 text-end font-bold text-4xl mt-1">{{ $jumlahUlasan }}</p>
                </div>
            </div>
        </a>
    </section>
    

    {{-- Resep Terbaru --}}
    <div class="w-full text-sm text-left rtl:text-right text-gray-500 mb-4">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-700 mb-6">Resep Terbaru</h2>

            <div class="overflow-x-auto rounded-lg shadow-md">

                <table class="w-full border-collapse text-sm text-gray-600">
                    <thead class="bg-green-700 text-white uppercase">
                        <tr>
                            <th class="px-4 py-3 text-left">Nama Resep</th>
                            <th class="px-4 py-3">Kategori</th>
                            <th class="px-4 py-3 text-right">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($resepTerbaru as $resep)
                            <tr class="hover:bg-gray-100 transition duration-200">
                                <td class="px-4 py-3 text-gray-700 font-medium">{{ $resep->nama_resep }}</td>
                                <td class="px-4 py-3 text-gray-900 text-center font-medium">{{ $resep->kategori->nama_kategori }}</td>
                                
                                <td class="px-4 py-3 text-right font-semibold text-green-700">{{ $resep->created_at->format('d M Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- Ulasan Terbaru --}}
    <div class="my-6 bg-white rounded-xl shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-800">Ulasan Terbaru</h2>
            <a href="{{ route('admin.reviews') }}" class="text-base text-green-600 font-semibold hover:underline">Lihat semua</a>
        </div>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        {{-- Ulasan --}}
        <div class="overflow-x-auto rounded-lg shadow-md">
            <table class="w-full border-collapse text-sm text-left text-gray-600">
                <thead class="bg-green-700 text-white uppercase">
                    <tr>
                        <th class="py-3 px-6 text-left font-semibold">Pengguna</th>
                        <th class="py-3 px-6 text-left font-semibold">Resep</th>
                        <th class="py-3 px-6 text-left font-semibold">Rating</th>
                        <th class="py-3 px-6 text-left font-semibold">Ulasan</th>
                        <th class="py-3 px-6 text-left font-semibold">Tanggal</th>
                        <th class="py-3 px-6 text-center font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($reviews as $review)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4 px-6 flex items-center gap-4">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($review->user->name) }}&background=random&color=fff&size=64"
                                    alt="{{ $review->user->name }}" class="w-12 h-12 rounded-full shadow">
                                <span>{{ $review->user->name }}</span>
                            </td>
                            <td class="py-4 px-6">{{ $review->resep->nama_resep }}</td>
                            <td class="py-4 px-6">
                                <div class="flex items-center">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $review->rating)
                                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.188c.969 0 1.371 1.24.588 1.81l-3.39 2.46a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.39-2.46a1 1 0 00-1.176 0l-3.39 2.46c-.784.57-1.838-.196-1.54-1.118l1.286-3.966a1 1 0 00-.364-1.118l-3.39-2.46c-.783-.57-.38-1.81.588-1.81h4.188a1 1 0 00.95-.69l1.286-3.967z" />
                                            </svg>
                                        @else
                                            <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.188c.969 0 1.371 1.24.588 1.81l-3.39 2.46a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.39-2.46a1 1 0 00-1.176 0l-3.39 2.46c-.784.57-1.838-.196-1.54-1.118l1.286-3.966a1 1 0 00-.364-1.118l-3.39-2.46c-.783-.57-.38-1.81.588-1.81h4.188a1 1 0 00.95-.69l1.286-3.967z" />
                                            </svg>
                                        @endif
                                    @endfor
                                </div>
                            </td>
                            <td class="py-4 px-6 text-gray-700 italic">"{{ $review->ulasan }}"</td>
                            <td class="py-4 px-6 text-xs text-gray-400">{{ $review->created_at->diffForHumans() }}</td>
                            <td class="py-4 px-6 text-center">
                                <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" 
                                    onsubmit="return confirm('Yakin ingin menghapus ulasan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Hapus ulasan" class="text-red-500 hover:text-red-600 p-1.5 rounded-l hover:bg-red-200 transition">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection