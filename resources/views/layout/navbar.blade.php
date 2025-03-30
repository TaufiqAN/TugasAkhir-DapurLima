<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
</head>
<body>
    

    {{-- <nav class="fixed top-0 left-0 w-full z-50 border-b border-gray-200 bg-white shadow-md">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"> --}}
        <nav class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[90%] md:w-[80%] bg-white border border-gray-200 shadow-lg rounded-full px-6 py-3 z-50">
            <div class="flex flex-wrap items-center justify-between">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.png') }}" class="h-9" alt="DapurLima Logo" />
                    <span class="self-center text-2xl font-bubblegum dark:text-black">DapurLima.</span>
                </a>
                <div class="flex md:order-2 space-x-3 items-center">
                    @if(auth()->check())
                    <div class="relative">
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" class="w-12 h-12 rounded-full cursor-pointer" src="{{ asset('images/kyaa.jpg') }}" alt="User dropdown">
                        
                        <div id="userDropdown" class="hidden absolute right-0 mt-2 w-44 bg-white divide-y divide-gray-100 rounded-lg shadow-md z-50">
                            <div class="px-4 py-3 text-gray-900">
                                <div class="font-medium">{{ auth()->user()->name }}</div>
                                <div class=" text-sm truncate">{{ auth()->user()->email }}</div>
                            </div>
                            <ul class="py-2 space-y-1">
                                <li>
                                    <a href="{{ route('profile') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                                        <svg class="w-5 h-5 text-gray-600 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                          </svg> 
                                        Profile
                                    </a>
                                </li>

                                @if (auth()->user()->role === 'admin')
                                <li>
                                    <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg">
                                        <svg class="w-5 h-5 text-gray-600 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z"/>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z"/>
                                          </svg>                                          
                                        Dashboard
                                    </a>
                                </li>
                                @endif
                                <li>
                                    <a href="/logout" class="flex items-center px-4 py-2 text-red-700 hover:bg-gray-100 rounded-lg">
                                        <svg class="w-5 h-5 text-red-600 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1" />
                                        </svg>
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                    @else
                    <a href="{{ route('login') }}" class="text-center inline-flex items-center bg-[#1E811B] text-white rounded-lg px-6 py-3 hover:bg-green-600">
                        <svg class="w-6 h-6 me-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd"/>
                          </svg>                                                   
                        Masuk
                    </a>
                    @endif
                </div>
                <button data-collapse-toggle="navbar-cta" class="md:hidden p-2 w-10 h-10 text-gray-500 rounded-lg hover:bg-gray-100">
                    <svg class="w-5 h-5" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden md:flex md:order-1 w-full md:w-auto" id="navbar-cta">
                    <ul class="flex flex-col md:flex-row md:space-x-8 font-medium">
                        <li>
                            <a href="#" class="block py-2 px-3 hover:text-blue-700">Beranda</a>
                        </li>
                        <li class="relative">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center py-2 px-3 hover:text-blue-700">Kategori
                                <svg class="w-2.5 h-2.5 ml-2" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-width="2" d="M1 1l4 4 4-4"/>
                                </svg>
                            </button>
                            <div id="dropdownNavbar" class="hidden absolute bg-white shadow-md rounded-lg w-44 mt-2 z-50">
                                <ul>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-green-700 hover:rounded-t-lg hover:text-white">Dashboard</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-green-700 hover:text-white">Settings</a></li>
                                    <li><a href="#" class="block px-4 py-2 hover:bg-green-700 hover:rounded-b-lg hover:text-white">Earnings</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#" class="block py-2 px-3 hover:text-blue-700">Resep</a></li>
                        <li><a href="#" class="block py-2 px-3 hover:text-blue-700">Tentang</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
  
</body>
</html>