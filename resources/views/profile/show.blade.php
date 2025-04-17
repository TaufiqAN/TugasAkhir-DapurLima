@extends('layout.app')

@section('content')
<div class="max-w-3xl mx-auto mt-36">
    <div class="mb-10">
        <div class="flex items-center space-x-4">
            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=random&color=fff&size=100" 
                 alt="Avatar" class="w-28 h-28 rounded-full border-4 border-blue-500 shadow-lg">
            <div>
                <p class="text-gray-500 text-sm">Halo,</p>
                <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h2>
                <p class="text-gray-500 text-sm">{{ $user->email }}</p>
                <!-- Button Container -->
                <div class="flex mt-3">
                    <a href="/logout" class="flex items-center px-3 text-sm py-1 border-2 border-gray-800 text-gray-900 font-medium rounded-xl transition duration-300 hover:bg-gray-800 hover:text-white">
                        <svg class="w-6 h-6 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                        </svg>
                        Log Out
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    {{-- List Tersimpan --}}
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-4 mt-6 mb-20 border">
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center space-x-2">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m17 21-5-4-5 4V3.889a.92.92 0 0 1 .244-.629.808.808 0 0 1 .59-.26h8.333a.81.81 0 0 1 .589.26.92.92 0 0 1 .244.63V21Z"/>
                </svg>                  
                <h2 class="text-lg font-bold text-gray-800">Tersimpan</h2>
            </div>
            <a href="{{ route('profile.profile') }}" class="text-green-600 font-semibold hover:underline">Lihat Semua</a>
        </div>

        
        @if ($savedResep->isEmpty())
        <div class="flex flex-col items-center justify-center text-center text-gray-600 py-6">
            <svg class="w-16 h-16 mb-3 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="m4 12 2.66667-1 2.66666 1L12 11l2.6667 1 2.6666-1L20 12m-1 5H5v1c0 1.1046.89543 2 2 2h10c1.1046 0 2-.8954 2-2v-1ZM5 9.00003h14v-1c0-2.20914-1.7909-4-4-4H9c-2.20914 0-4 1.79086-4 4v1ZM18.5 14h-13c-.82843 0-1.5.6716-1.5 1.5 0 .8285.67157 1.5 1.5 1.5h13c.8284 0 1.5-.6715 1.5-1.5 0-.8284-.6716-1.5-1.5-1.5Z"/>
              </svg>                            
            <p class="text-lg font-semibold">Belum ada yang disimpan</p>
            <p class="text-sm text-gray-500">Segera tambahkan resep-resep lezat yang ingin Anda coba!</p>
        </div>
        @else
        <div class="space-y-4">
            <!-- Card 1 -->
            @foreach ($savedResep as $save)
                @if ($save->resep)
                    <div class="flex items-center rounded-lg border-2 p-4">
                        <img src="{{ asset('storage/' . $save->resep->image) }}" alt="{{ $save->resep->nama_resep }}" class="w-44 h-32 object-cover rounded-lg">
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $save->resep->nama_resep }}</h3>
                            <p class="text-gray-600 text-sm mb-6">{{ \Illuminate\Support\Str::limit($save->resep->deskripsi, 120, '...') }}</p>
                            <div class="flex items-center text-gray-700 text-sm mt-2">
                                <span class="flex items-center mr-4">
                                    <svg class="w-4 h-4 mr-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                                    </svg>
                                    {{ $save->resep->waktu }} Menit
                                </span>
                                <span class="flex items-center mr-4">
                                    <svg class="w-4 h-4 mr-1 text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $save->resep->porsi }} Orang
                                </span>

                                <!-- Rating -->
                                <span class="flex items-center gap-1">
                                    @if($save->resep->total_rating)
                                        <span class="text-yellow-500 font-semibold text-sm">
                                            ★ {{ number_format($save->resep->total_rating, 1) }} 
                                        </span>
                                    @else
                                        <span class="text-yellow-500 font-semibold text-sm">
                                            ★ {{ number_format($save->resep->total_rating, 1) }} 
                                        </span>
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        @endif
    </div>
</div>


@endsection


