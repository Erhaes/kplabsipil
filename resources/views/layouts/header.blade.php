<nav class="bg-gray-900 border-gray-700 fixed w-full z-50 top-0 start-0 shadow-md transition-all duration-300">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-2 md:space-x-3">
            <img src="{{ asset('images/logo_unsoed.png') }}" class="h-8 md:h-12" alt="Lab Logo">
            <div class="flex flex-col">
                <span class="text-base md:text-2xl font-semibold whitespace-nowrap text-white">Laboratorium Teknik Sipil</span>
                <span class="text-xs md:text-sm whitespace-nowrap text-gray-300">Universitas Jenderal Soedirman</span>
            </div>
        </a>
        
        <button type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-400 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600" data-collapse-toggle="navbar-default">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>

        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 bg-gray-800 md:bg-transparent border border-gray-700">
                <li>
                    <a href="/" class="block py-2 px-3 rounded hover:text-white hover:bg-gray-700 md:border-0 md:p-0
                     md:hover:text-blue-500 md:hover:bg-transparent 
                    @if(Route::currentRouteName() == "home")
                        text-blue-500
                    @else
                        text-white
                    @endif">Home</a>
                </li>
                <li>
                    <a href="/profil" class="block py-2 px-3 rounded hover:text-white hover:bg-gray-700 md:border-0 md:p-0
                     md:hover:text-blue-500 md:hover:bg-transparent 
                    @if(Route::currentRouteName() == "profil")
                        text-blue-500
                    @else
                        text-white
                    @endif">Profil</a>
                </li>
                <li>
                    <a href="/facilitas" class="block py-2 px-3 rounded hover:text-white hover:bg-gray-700 md:border-0 md:p-0
                    md:hover:text-blue-500 md:hover:bg-transparent 
                   @if(Route::currentRouteName() == "facilitas")
                       text-blue-500
                   @else
                       text-white
                   @endif">Fasilitas</a>
                </li>
                <li>
                    <a href="/research" class="block py-2 px-3 rounded hover:text-white hover:bg-gray-700 md:border-0 md:p-0
                    md:hover:text-blue-500 md:hover:bg-transparent 
                   @if(Route::currentRouteName() == "research")
                       text-blue-500
                   @else
                       text-white
                   @endif">Penelitian</a>
                </li>
                <li>
                    <a href="/service" class="block py-2 px-3 rounded hover:text-white hover:bg-gray-700 md:border-0 md:p-0
                    md:hover:text-blue-500 md:hover:bg-transparent 
                   @if(Route::currentRouteName() == "service")
                       text-blue-500
                   @else
                       text-white
                   @endif">Uji Lab</a>
                </li>
                <li>
                    <a href="/berita" class="block py-2 px-3 rounded hover:text-white hover:bg-gray-700 md:border-0 md:p-0
                    md:hover:text-blue-500 md:hover:bg-transparent 
                   @if(Route::currentRouteName() == "berita")
                       text-blue-500
                   @else
                       text-white
                   @endif">Berita</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
