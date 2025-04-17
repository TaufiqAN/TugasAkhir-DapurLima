
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
      </svg>      
 </button>
 
 <aside id="logo-sidebar" class=" fixed bottom-4 overflow-y-auto transition-all duration-300 z-40 w-72 h-screen -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-white">
       <a href="{{ route('home') }}" class="flex items-center justify-start ps-2.5 mb-5">
          <img src="{{ asset('images/logo.png') }}" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
          <span class="self-center text-3xl font-bubblegum whitespace-nowrap py-6 text-gray-700">DapurLima.</span>
       </a>
         <ul class="space-y-2 font-medium">
             <li>
               <a href="/dashboard" class=" flex items-center p-2 text-gray-600 rounded-lg hover:text-gray-100 dark:hover:bg-green-700 group {{ request()->routeIs('dashboard') ? 'bg-green-700 text-white' : '' }}">
                  <svg class="w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                     <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                     <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                  </svg>
                  <span class="ms-3">Dashboard</span>
               </a>
            </li>
         
          <li>
             <a href="/kategori" class="flex items-center p-2 text-gray-900 rounded-lg hover:text-gray-100 dark:hover:bg-green-700 group {{ request()->routeIs('kategori.*') ? 'bg-green-700 text-white' : '' }}">
                <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M5 5a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2H5Zm9 2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H14Zm3 0a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17ZM3 17v-3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm11-2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H14Zm3 0a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" clip-rule="evenodd"/>
                </svg>                
                <span class="flex-1 ms-3 whitespace-nowrap">Kategori</span>
             </a>
          </li>
          <li>
             <a href="/resep" class="flex items-center p-2 text-gray-900 rounded-lg hover:text-gray-100 dark:hover:bg-green-700 group {{ request()->routeIs('resep.*') ? 'bg-green-700 text-white' : '' }}">
                <svg class="shrink-0 w-5 h-5 transition duration-75 group-hover:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                   <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Resep</span>
             </a>
          </li>
         </ul>

         <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
            <li>
               <a href="/logout" class="flex items-center p-2 text-gray-900 rounded-lg hover:text-gray-100 dark:hover:bg-red-700 group">
                  <svg class="shrink-0 w-5 h-5 text-gray-600 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
               </a>
            </li>
         </ul>

       {{-- Notif --}}
       <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-opacity-90 bg-blue-50 dark:bg-purple-900" role="alert">
         <div class="flex items-center mb-3">
            <span class="bg-orange-100 text-orange-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded-sm dark:bg-orange-200 dark:text-orange-900">Beta</span>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 inline-flex justify-center items-center w-6 h-6 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800" data-dismiss-target="#dropdown-cta" aria-label="Close">
               <span class="sr-only">Close</span>
               <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
               </svg>
            </button>
         </div>
         <p class="mb-3 text-sm text-blue-800 dark:text-white">
            Perhatian!! Harap waspada website ini dibuat menggunakan Akal Imitasi (AI) jadi perhatikan keselamatan data anda. 😈👺👹
         </p>
         <a class="text-sm text-blue-800 underline font-medium hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300" href="#">Info lebih lanjut</a>
      </div>
      
    </div>
 </aside>
 