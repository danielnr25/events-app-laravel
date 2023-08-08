<nav class="bg-white shadow-md dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{route('home')}}" class="flex items-center">
            <span class="self-center mr-3 text-blue-700 text-2xl font-semibold whitespace-nowrap dark:text-white">Eventos</span>
        </a>
        <div class="flex items-center md:order-2">

            @guest
            <ul class="flex items-center gap-4 font-semibold">
                <li>
                    <a href="{{ route('login') }}" class="py-2 bg-blue-600 text-white px-3 rounded-lg hover:bg-black dark:hover:bg-blue-700 text-sm">Ingresar</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="border-2 py-1.5 px-3 border-black rounded-lg hover:bg-black text-sm hover:text-white dark:bg-gray-200 dark:hover:text-black">Registrarse</a>
                </li>
            </ul>

            @endguest
            <!-- @include('components.utils.dark-mode') -->

            @auth
            <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-100" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="inline-block h-10 w-10 rounded-full" src="{{ asset('dist/img/usuario.svg') }}" alt="user photo">
            </button>

            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }} </span>
                    <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Salir</button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth

            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-800 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>

        </div>
        <div class="relative hidden md:block md:w-96">
            @include('components.utils.search-bar')
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            @include('components.utils.navbar-links')
        </div>
    </div>
</nav>
