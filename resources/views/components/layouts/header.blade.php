{{-- ORDENADORES --}}
<header class="sticky top-0 w-full bg-header h-16 hidden lg:flex items-center justify-between px-4">
    <div class="flex items-center flex-grow pl-2">
    </div>
    <div class="flex items-center flex-grow justify-center">
        <img src="{{ asset('images/laTartineLogo.svg') }}" alt="Logo" class="h-12">
    </div>
    <div class="flex items-center justify-end flex-grow h-full">
        @guest
            <div tabindex="0" role="button" class="dropdown dropdown-end">
                <div class="flex flex-row mr-5">
                    <div class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="pe baq bg-gray-300 text-gray-400">
                                <path
                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <span class="content-center ml-5 text-white">Entrar</span>
                </div>
                <ul tabindex="0"
                    class="relative menu menu-sm dropdown-content bg-base-100 rounded-box mt-3 w-52 p-2 shadow z-40">
                    <li onclick="this.querySelector('form').submit()">
                        <form action="{{route('login')}}">
                            <button type="submit" class="w-full text-left text-gray-800 py-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9"/>
                                </svg>
                                Iniciar sesión
                            </button>
                        </form>
                    </li>
                    <li onclick="this.querySelector('form').submit()">
                        <form action="{{route('register')}}">
                            <button type="submit" class="w-full text-left text-gray-800 py-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                Registrarse
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endguest
        @auth
            <div tabindex="0" role="button" class="dropdown dropdown-end">
                <div class="flex flex-row mr-5">
                    <div class="btn btn-ghost btn-circle avatar ring ring-offset-1">
                        <div class="w-14 rounded-full">
                            <img
                                alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"/>
                        </div>
                    </div>
                    <span class="content-center ml-5 text-white">{{auth()->user()->name}}</span>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li onclick="this.querySelector('form').submit()">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="justify-between text-gray-800 py-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15"/>
                                </svg>
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth
    </div>
</header>


{{-- MÓVILES --}}
<header class="sticky top-0 w-full bg-header h-16 flex lg:hidden items-center justify-between px-4">
    <div class="flex items-end pl-12">
        <img src="{{ asset('images/laTartineLogo.svg') }}" alt="Logo" class="h-8">
    </div>
    <div class="flex items-center justify-center h-full pr-1">
        @guest
            <div tabindex="0" role="button" class="dropdown dropdown-end">
                <div class="flex flex-row mr-5">
                    <div class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="pe baq bg-gray-300 text-gray-400">
                                <path
                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <ul tabindex="0"
                    class="relative menu menu-sm dropdown-content bg-base-100 rounded-box mt-3 w-52 p-2 shadow z-40">
                    <li onclick="this.querySelector('form').submit()">
                        <form action="{{route('login')}}">
                            <button type="submit" class="w-full text-left text-gray-800 py-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9"/>
                                </svg>
                                Iniciar sesión
                            </button>
                        </form>
                    </li>
                    <li onclick="this.querySelector('form').submit()">
                        <form action="{{route('register')}}">
                            <button type="submit" class="w-full text-left text-gray-800 py-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                Registrarse
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endguest
        @auth
            <div tabindex="0" role="button" class="dropdown dropdown-end">
                <div class="flex flex-row mr-5">
                    <div class="btn btn-ghost btn-circle avatar ring ring-offset-1">
                        <div class="w-14 rounded-full">
                            <img
                                alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"/>
                        </div>
                    </div>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li onclick="this.querySelector('form').submit()">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="justify-between text-gray-800 py-2 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="h-6 w-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15"/>
                                </svg>
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth
    </div>
</header>
