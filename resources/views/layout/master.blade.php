@vite(['resources/css/app.css'])

{{-- Sidebar --}}
@include('admin.sidebar')

 {{-- detail --}}
 <div class="p-4 sm:ml-64 bg-blue-50">
    <div class="p-4 ">
        <div class="p-4 mb-3  bg-white rounded-full inline-flex shadow-sm">
            <svg class="w-6 h-6 text-gray-800 dark:text-slate-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
            </svg>
        </div>
          
        <h2 class="text-2xl font-bold text-slate-700 mb-4">Detail Lainnya</h2>
        <div class="grid grid-cols-4 gap-4 mb-4">
          <div class="flex items-center justify-between h-28 p-6 rounded-xl bg-white shadow-md">
            <div class="bg-[#E7FFE6] p-3 rounded-full">
                <svg class="w-12 h-12 text-gray-800 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z" clip-rule="evenodd"/>
                  </svg>                  
            </div>
            <div>
              <h2 class="text-lg font-semibold text-gray-600">Total Resep</h2>
              <p class="text-green-700 text-end font-bold text-4xl mt-1">54</p>
            </div>
        </div>

        {{-- Animasi --}}
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


       
       <div class="flex items-center justify-center h-48 mb-4 rounded-lg bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
            edef
          </p>
       </div>


       <div class="grid grid-cols-2 gap-4 mb-4">
          <div class="flex items-center justify-center rounded-lg bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-lg bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-lg bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-lg bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div>
       <div class="flex items-center justify-center h-48 mb-4 rounded-lg bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>
       <div class="grid grid-cols-2 gap-4">
          <div class="flex items-center justify-center rounded-lg bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-lg bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-lg bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded-sm bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div>
    </div>
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
