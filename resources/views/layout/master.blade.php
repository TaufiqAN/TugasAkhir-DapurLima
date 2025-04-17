@extends('layout.template')

{{-- Sidebar --}}
@include('admin.sidebar')

 {{-- detail --}}
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
                <h2 class="text-2xl font-bold text-white mb-4">Detail Lainnya</h2>
                <div class="grid grid-cols-4 gap-4 mb-4">
                    <div class="group flex items-center justify-between h-28 p-6 rounded-xl bg-white shadow-md transition duration-300 hover:shadow-xl hover:scale-105 hover:bg-green-50">
                        <div class="bg-[#E7FFE6] p-3 rounded-full transition duration-300 group-hover:bg-green-400 group-hover:ring-4 group-hover:ring-green-200">
                            <svg class="w-12 h-12 text-gray-800 dark:text-green-600 transition duration-300 group-hover:rotate-12 group-hover:scale-110 group-hover:text-white" 
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z" clip-rule="evenodd"/>
                            </svg>                  
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-600">Total Resep</h2>
                            <p class="text-green-700 text-end font-bold text-4xl mt-1">54</p>
                        </div>
                    </div>
                
                    <div class="group flex items-center justify-between h-28 p-6 rounded-xl bg-white shadow-md transition duration-300 hover:shadow-xl hover:scale-105 hover:bg-purple-50">
                        <div class="bg-purple-100 p-3 rounded-full transition duration-300 group-hover:bg-purple-400 group-hover:ring-4 group-hover:ring-purple-200">
                            <svg class="w-12 h-12 text-gray-800 dark:text-purple-600 transition duration-300 group-hover:rotate-12 group-hover:scale-110 group-hover:text-white" 
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                            </svg>                  
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-600">Total Pengguna</h2>
                            <p class="text-purple-700 text-end font-bold text-4xl mt-1">36</p>
                        </div>
                    </div>
        
                <div class="group flex items-center justify-between h-28 p-6 rounded-xl bg-white shadow-md transition duration-300 hover:shadow-xl hover:scale-105 hover:bg-blue-50">
                    <div class="bg-blue-100 p-3 rounded-full transition duration-300 group-hover:bg-blue-400 group-hover:ring-4 group-hover:ring-blue-200">
                        <svg class="w-12 h-12 text-gray-800 dark:text-blue-600 transition duration-300 group-hover:rotate-12 group-hover:scale-110 group-hover:text-white" 
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M7.556 8.5h8m-8 3.5H12m7.111-7H4.89a.896.896 0 0 0-.629.256.868.868 0 0 0-.26.619v9.25c0 .232.094.455.26.619A.896.896 0 0 0 4.89 16H9l3 4 3-4h4.111a.896.896 0 0 0 .629-.256.868.868 0 0 0 .26-.619v-9.25a.868.868 0 0 0-.26-.619.896.896 0 0 0-.63-.256Z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-600">Total Komentar</h2>
                        <p class="text-blue-700 text-end font-bold text-4xl mt-1">150</p>
                    </div>
                </div>        
            </div>
    
            {{-- Dashborad Resep --}}
            @yield('resep')
        
            @yield('kategori')

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded-lg bg-white h-28 ">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded-lg bg-white h-28 ">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded-lg bg-white ">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                </p>
            </div>

            {{-- Footer --}}
            <footer class="bg-white rounded-lg shadow-sm  ">
                <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="https://flowbite.com/" class="hover:underline">DapurLima.™</a>. All Rights Reserved.
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
                </div>
            </footer>
        </div>
    </div>
