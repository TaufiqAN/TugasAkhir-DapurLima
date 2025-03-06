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
                    <a href="#" class="flex items-center px-3 text-sm py-1 border-2 border-gray-800 text-gray-900 font-medium rounded-xl transition duration-300 hover:bg-gray-800 hover:text-white">
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
            <a href="#" class="text-green-600 font-semibold hover:underline">Lihat Semua</a>
        </div>
    
        <div class="space-y-4">
            <!-- Card 1 -->
            <div class="flex items-center rounded-lg border-2 p-4">
                <img src="https://www.enakeco.com/wp-content/uploads/2023/02/Siomay-Bandung-Khas-Enak-Eco-optimized.jpg" alt="Xiaomay Batak" class="w-44 h-32 object-cover rounded-lg">
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-800">Xiaomay Batak</h3>
                    <p class="text-gray-600 text-sm">Panduan cara membuat siomay yang enak dan gurih dengan resep yang murah dan mudah dibuat.</p>
                    <div class="flex items-center text-gray-700 text-sm mt-2">
                        <span class="flex items-center mr-4">
                            <svg class="w-4 h-4 me-1 text-green-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                            </svg>

                            10 Menit
                        </span>
                        <span class="flex items-center mr-4">
                            <svg class="w-4 h-4 text-green-600 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-2.67 0-5.06-1.33-6.47-3.36C6.99 14.1 9.25 13 12 13s5.01 1.1 6.47 2.64C17.06 18.67 14.67 20 12 20z"></path>
                            </svg>
                            3 Orang
                        </span>
                        <span class="flex items-center text-yellow-500">
                            ⭐ 4.5
                        </span>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="flex items-center rounded-lg border-2 p-4">
                <img src="https://asset.kompas.com/crops/mgNs2uNygJcH--dQo_NAEFl56pY=/65x0:907x561/1200x800/data/photo/2020/11/02/5f9f812b3e9fa.jpg" alt="Xiaomay Batak" class="w-44 h-32 object-cover rounded-lg">
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-800">Xiaomay Batak</h3>
                    <p class="text-gray-600 text-sm">Panduan cara membuat siomay yang enak dan gurih dengan resep yang murah dan mudah dibuat.</p>
                    <div class="flex items-center text-gray-700 text-sm mt-2">
                        <span class="flex items-center mr-4">
                            <svg class="w-4 h-4 me-1 text-green-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3M3.22302 14C4.13247 18.008 7.71683 21 12 21c4.9706 0 9-4.0294 9-9 0-4.97056-4.0294-9-9-9-3.72916 0-6.92858 2.26806-8.29409 5.5M7 9H3V5"/>
                            </svg>

                            10 Menit
                        </span>
                        <span class="flex items-center mr-4">
                            <svg class="w-4 h-4 text-green-600 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-2.67 0-5.06-1.33-6.47-3.36C6.99 14.1 9.25 13 12 13s5.01 1.1 6.47 2.64C17.06 18.67 14.67 20 12 20z"></path>
                            </svg>
                            3 Orang
                        </span>
                        <span class="flex items-center text-yellow-500">
                            ⭐ 4.5
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


