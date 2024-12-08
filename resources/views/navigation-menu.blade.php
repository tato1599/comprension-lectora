<div class="antialiased bg-gray-50">
    <header>
        <!-- Navbar -->
        <nav class="bg-white border-b border-gray-200 px-4 py-2.5">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/">
                        <img class="w-auto h-10" src="{{ asset('/images/ReadSkillsLogo3.svg') }}" alt="Logo">
                    </a>
                </div>

                <!-- Navigation Links -->
                <ul class="hidden lg:flex space-x-8 text-gray-700 text-lg font-medium">
                    <li>
                        <a
                            href="{{ route('dashboard') }}"
                            class="relative pb-2 hover:text-blue-500 transition duration-300 {{ request()->routeIs('dashboard') ? 'text-blue-500' : '' }}"
                        >
                            Tablero
                            @if (request()->routeIs('dashboard'))
                                <span class="absolute left-0 right-0 bottom-0 mx-auto h-0.5 w-full bg-blue-500"></span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('groups') }}"
                            class="relative pb-2 hover:text-blue-500 transition duration-300 {{ request()->routeIs('groups') ? 'text-blue-500' : '' }}"
                        >
                            Grupos
                            @if (request()->routeIs('groups'))
                                <span class="absolute left-0 right-0 bottom-0 mx-auto h-0.5 w-full bg-blue-500"></span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a
                            href="{{ route('activities') }}"
                            class="relative pb-2 hover:text-blue-500 transition duration-300 {{ request()->routeIs('activities') ? 'text-blue-500' : '' }}"
                        >
                            Actividades
                            @if (request()->routeIs('activities'))
                                <span class="absolute left-0 right-0 bottom-0 mx-auto h-0.5 w-full bg-blue-500"></span>
                            @endif
                        </a>
                    </li>
                    @role('administrador')
                        <li>
                            <a
                                href="{{ route('admin') }}"
                                class="relative pb-2 hover:text-blue-500 transition duration-300 {{ request()->routeIs('admin') ? 'text-blue-500' : '' }}"
                            >
                                Usuarios
                                @if (request()->routeIs('admin'))
                                    <span class="absolute left-0 right-0 bottom-0 mx-auto h-0.5 w-full bg-blue-500"></span>
                                @endif
                            </a>
                        </li>
                    @endrole
                </ul>

                <!-- User Menu -->
                <div class="flex items-center space-x-4 lg:order-2">
                    <!-- User Profile Dropdown -->
                    <button
                        type="button"
                        class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                        id="user-menu-button"
                        aria-expanded="false"
                        data-dropdown-toggle="dropdown"
                    >
                        <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="">
                    </button>

                    <!-- Dropdown menu -->
                    <div
                        class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow"
                        id="dropdown"
                    >
                        <ul class="py-1 text-gray-700">
                            <li>
                                <a
                                    href="{{ route('profile.show') }}"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100"
                                >
                                    {{ __('Mi perfil') }}
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a
                                        href="{{ route('logout') }}"
                                        class="block py-2 px-4 text-sm hover:bg-gray-100"
                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                    >
                                        {{ __('Cerrar sesión') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile Menu Toggle -->
                <button
                    type="button"
                    class="lg:hidden flex items-center text-gray-500 hover:text-gray-700 focus:outline-none"
                    @click="open = !open"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <div class="mt-4 lg:hidden">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('dashboard') }}" class="block text-gray-700 text-lg font-medium hover:text-blue-500">
                            Tablero
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('groups') }}" class="block text-gray-700 text-lg font-medium hover:text-blue-500">
                            Grupos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('activities') }}" class="block text-gray-700 text-lg font-medium hover:text-blue-500">
                            Actividades
                        </a>
                    </li>
                    @role('administrador')
                        <li>
                            <a href="{{ route('admin') }}" class="block text-gray-700 text-lg font-medium hover:text-blue-500">
                                Usuarios
                            </a>
                        </li>
                    @endrole
                </ul>
            </div>
        </nav>
    </header>
</div>
