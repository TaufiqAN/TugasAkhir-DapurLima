@extends('layout.template')

<section class="bg-gray-100 flex items-center min-h-screen justify-center px-4">
    <div class="py-8 px-4 mx-auto max-w-screen-xl w-full sm:w-[500px] lg:py-16 gap-8 lg:gap-16">
        <div class="w-full p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl">
            @if (session('failed'))
                <div class="bg-red-600 rounded-lg px-5 py-3 text-sm text-center text-white">{{ session('failed') }}</div>
            @endif

            <a href="{{ route('home') }}" class="flex justify-center items-center ps-2.5 mb-5">
                <img src="{{ asset('images/logo.png') }}" class="h-6 me-3 sm:h-7" alt="Logo" />
                <span class="self-center text-3xl font-bubblegum whitespace-nowrap">DapurLima.</span>
            </a>

            <h2 class="text-2xl font-bold text-gray-900">Login</h2>

            <form class="mt-8 space-y-6" action="/login" method="POST">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="name@gmail.com" />
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="relative">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <div class="relative">
                        <input type="password" name="password" id="password"
                            placeholder="Masukan Password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                        <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-3 flex items-center">
                            <svg id="eyeIcon" class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.25 12s3.75-7.5 9.75-7.5S21.75 12 21.75 12s-3.75 7.5-9.75 7.5S2.25 12 2.25 12z" />
                            </svg>
                        </button>
                    </div>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                            class="w-4 h-4 border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
                    </div>
                    <div class="ms-3 text-sm">
                        <label for="remember" class="font-medium text-gray-500">Remember this device</label>
                    </div>
                </div>

                <!-- Button Login -->
                <button type="submit"
                    class="w-full px-5 rounded-lg py-3 text-base font-medium text-center text-white bg-green-600 hover:bg-green-700">
                    Login
                </button>

                <!-- Google -->
                <div>
                    <a href="/auth-google-redirect">
                        <button type="button"
                            class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-gray-600 hover:text-white bg-white rounded-lg hover:bg-gray-800 border border-black transition-all duration-300 ease-in-out hover:shadow-lg">
                            <svg class="w-6 h-6 me-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.037 21.998a10.313 10.313 0 0 1-7.168-3.049 9.888 9.888 0 0 1-2.868-7.118 9.947 9.947 0 0 1 3.064-6.949A10.37 10.37 0 0 1 12.212 2h.176a9.935 9.935 0 0 1 6.614 2.564L16.457 6.88a6.187 6.187 0 0 0-4.131-1.566 6.9 6.9 0 0 0-4.794 1.913 6.618 6.618 0 0 0-2.045 4.657 6.608 6.608 0 0 0 1.882 4.723 6.891 6.891 0 0 0 4.725 2.07h.143c1.41.072 2.8-.354 3.917-1.2a5.77 5.77 0 0 0 2.172-3.41l.043-.117H12.22v-3.41h9.678c.075.617.109 1.238.1 1.859-.099 5.741-4.017 9.6-9.746 9.6l-.215-.002Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Sign in with Google
                        </button>
                    </a>
                </div>

                <div class="text-sm font-medium text-gray-900 text-center">
                    Atau belum memiliki akun? 
                    <a href="/register" class="text-blue-600 hover:underline">Buat akun</a>
                </div>
            </form>
        </div>
    </div>
</section>
