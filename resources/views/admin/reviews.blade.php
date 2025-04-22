@extends('layout.template')

@include('admin.sidebar')

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
                    <a href="/dashboard" class="ms-1 text-sm font-medium text-white hover:text-blue-600 md:ms-2  dark:hover:text-white">Dashboard</a>
                  </div>
                </li>
            </ol>
            
            {{-- Profile --}}
            <div class="relative">
                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-12 h-12 rounded-full cursor-pointer" src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random&color=fff&size=100"  alt="User dropdown">
                <span class="bottom-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2  rounded-full"></span>
            </div>

            <!-- Dropdown menu -->
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


            <h2 class="text-2xl font-bold text-white mb-4">Ulasan</h2>  

            {{-- Daftar Ulasan --}}
            <div class="w-full text-sm text-left rtl:text-right text-gray-500 mb-4">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-700">Daftar Ulasan</h2>
                    </div>

                    @if(session('success'))
                        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($reviews->count())
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
                        <div class="mt-6">
                            {{ $reviews->links() }}
                        </div>
                    @else
                        <div class="flex flex-col items-center justify-center text-center text-gray-600 py-6">
                            <svg class="w-16 h-16 mb-3 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="m4 12 2.66667-1 2.66666 1L12 11l2.6667 1 2.6666-1L20 12m-1 5H5v1c0 1.1046.89543 2 2 2h10c1.1046 0 2-.8954 2-2v-1ZM5 9.00003h14v-1c0-2.20914-1.7909-4-4-4H9c-2.20914 0-4 1.79086-4 4v1ZM18.5 14h-13c-.82843 0-1.5.6716-1.5 1.5 0 .8285.67157 1.5 1.5 1.5h13c.8284 0 1.5-.6715 1.5-1.5 0-.8284-.6716-1.5-1.5-1.5Z"/>
                            </svg>                            
                            <p class="text-lg font-semibold">Belum ada ulasan yang dikirim</p>
                            <p class="text-sm text-gray-500">Tunggu sampai user memberi ulasan!</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>  

</div>
