@extends('layout.app')

@section('content')
    <div class="py-8 px-4 mx-auto max-w-6xl text-center mt-28">
        <h2 class="text-3xl text-green-800 font-bold">{{ $kategori->nama_kategori }}</h2>

        @if ($reseps->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-8">
                @foreach($reseps as $resep)
                    <div class="block group">    
                        <a href="{{ route('makanan.detail', $resep->id) }}" class="block">
                            <div class="relative overflow-hidden rounded-lg">
                                <img src="{{ asset('storage/' . $resep->image) }}" 
                                    alt="{{ $resep->nama_resep }}"
                                    class="w-full h-40 object-cover rounded-lg brightness-75 transition-all duration-300
                                    group-hover:brightness-100 group-hover:scale-105"> 
                            </div>
                        </a>
        
                        <div class="mt-4 text-gray-900 text-start group-hover:text-green-700 transition-all duration-300 flex justify-between items-center">
                             {{-- Nama resep dengan link --}}
                            <a href="{{ route('makanan.detail', $resep->id) }}" class="text-lg font-semibold">
                                {{ $resep->nama_resep }}
                            </a>
        
                             {{-- Bookmark Icon --}}
                           
                            @php
                                $isSaved = auth()->check() && auth()->user()->saves->contains('resep_id', $resep->id);
                            @endphp
                            <button class="save-btn transition duration-300" data-resep-id="{{ $resep->id }}"
                                @guest onclick="showLoginModal()" @endguest>
                                @if ($isSaved)
                                        {{-- Sudah disimpan --}}
                                    <svg class="w-8 h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" aria-label="Tersimpan">
                                        <path d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z"/>
                                    </svg>
                                @else
                                        {{-- Belum disimpan --}}
                                    <svg class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-label="Simpan">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 21l-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21z" />
                                    </svg>
                                @endif
                            </button>
                        </div>
        
                        <p class="text-sm flex items-center gap-2">
                            {{-- Waktu  --}}
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M12 8v4l3 3M3.223 14C4.132 18.008 7.717 21 12 21c4.97 0 9-4.03 9-9 0-4.97-4.03-9-9-9-3.73 0-6.93 2.27-8.294 5.5M7 9H3V5"/>
                                </svg>
                                <span>{{ $resep->waktu }} Menit</span>
                            </span>

                            {{-- Porsi --}}
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4 mr-1 text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                                </svg>  
                                <span>{{ $resep->porsi }} Orang </span>
                            </span>
                            
        
                            {{-- Rating  --}}
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
            
            <div class="mt-6">
                {{ $reseps->links() }}
            </div>

        @else
            <p class="text-lg text-gray-600">Tidak ada resep yang ditemukan.</p>
        @endif
    </div>
@endsection
