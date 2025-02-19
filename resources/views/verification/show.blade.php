@vite(['resources/css/app.css'])
<section class="bg-gray-500  flex items-center h-screen  justify-center">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 gap-8 lg:gap-16">
            <div class="w-[500px] p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
                @if (session('failed'))
                    <div class="bg-red-600 rounded-lg  px-5 py-3 text-sm text-center text-white">{{ session('failed') }}</div>
                @endif
                <h2 class="text-2xl text-center font-bold text-gray-900 dark:text-white">
                    Verification
                </h2>
                <form class="mt-8 space-y-6" action="/verify/{{ $unique_id }}" method="POST">
                    @method('PUT')
                    @csrf
                    {{-- OTP --}}
                    <div>
                        <input type="number" name="otp" id="otp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter OTP" required />
                    </div>
                    {{-- Button  --}}
                    <button type="submit" class="min-w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">Submit</button>
                    <div class="text-sm font-medium text-gray-900 dark:text-white">
                        <a href="#!" class="text-blue-600 hover:underline dark:text-blue-500">Resend OTP</a>
                    </div>
                </form>
            </div>
    </div>
</section>  
 
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const inputs = document.querySelectorAll(".otp-input");

        inputs.forEach((input, index) => {
            input.addEventListener("input", (e) => {
                if (e.target.value.length === 1) {
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                }
            });

            input.addEventListener("keydown", (e) => {
                if (e.key === "Backspace" && !input.value && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
    });
</script>
