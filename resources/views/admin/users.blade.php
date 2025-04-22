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

            {{-- Animasi --}}
            <h2 class="text-2xl font-bold text-white mb-4">User</h2>
                
            {{-- Kategori --}}
            <div class="w-full text-sm text-left rtl:text-right text-gray-500 mb-4">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold text-gray-700">Daftar Pengguna</h2>
                    </div>

                    @if(session('success'))
                        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto rounded-lg shadow-md">
                        <table class="w-full border-collapse text-sm text-left text-gray-600">
                            <thead class="bg-green-700 text-white uppercase">
                                <tr>
                                    <th class=" px-4 py-2 text-left w-16">No</th>
                                    <th class=" px-4 py-2 text-left">Nama</th>
                                    <th class=" px-4 py-2 text-left">Email</th>
                                    <th class=" px-4 py-2 text-left">Tanggal Bergabung</th>
                                    <th class=" px-4 py-2 text-center w-32">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($users as $index => $user)
                                    <tr class="hover:bg-gray-100 transition duration-200">
                                        <td class=" px-4 py-2 text-gray-800 font-medium">
                                            {{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}
                                        </td>
                                        <td class=" px-4 py-2 text-gray-800 font-medium">
                                            {{ $user->name }}
                                        </td>
                                        <td class=" px-4 py-2">
                                            {{ $user->email }}
                                        </td>
                                        <td class=" px-4 py-2">
                                            {{ $user->created_at->format('d M Y') }}
                
                                        <td class=" px-4 py-2 text-center">
                                            <div class="flex justify-center space-x-3">
                                                <a href="{{ route('profile', $user->id) }}" class="text-yellow-400 hover:text-yellow-700 ">
                                                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
                                                    </svg>
                                                </a>
                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus resep ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500 hover:text-red-800">
                                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                        </svg>                                          
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

</div>
