@vite(['resources/css/app.css'])
<section class="bg-gray-500  flex items-center h-screen  justify-center">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 gap-8 lg:gap-16">
            <div class="w-[500px] p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
                @if (session('failed'))
                    <div class="bg-red-600 rounded-lg  px-5 py-3 text-sm text-center text-white">{{ session('failed') }}</div>
                @endif
                <h2 class="text-2xl font-bold text-center text-gray-900 dark:text-white">
                    Verification
                </h2>
                <div class="text-md text-center font-normal text-gray-900 dark:text-white">
                    Please verify your Account!
                </div>

                {{-- Button  --}}
                <form action="/verify" method="post">
                    @csrf
                    <input type="hidden" value="register" name="type">
                    <button type="submit" class="min-w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">Kirim OTP ke Email</button>
                </form>
            </div>
    </div>
</section>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
