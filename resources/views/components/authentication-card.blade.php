<div class="flex flex-col items-center justify-center bg-white sm:min-h-screen sm:flex-row">

    <a href="/">
        <!-- Botón redondo -->
        <button
            class="absolute z-20 flex items-center justify-center w-12 h-12 text-black bg-white rounded-full top-4 left-4">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>

        </button>
    </a>

    <!-- Contenedor de imagen con difuminado -->
    <div class="hidden sm:flex-auto sm:flex sm:justify-center sm:items-center"
        style="background-image: url('{{ asset('images/login.jpg') }}'); background-size: auto 100%; background-repeat: no-repeat; background-position: center; height: 100vh; width: 10%; filter: blur(3px);">
    </div>

    <div class="flex-auto px-8 mt-6 overflow-hidden sm:py-4 sm:rounded-lg">
        <div class="flex justify-center">

            <span class="text-6xl font-bold text-blue-600">Read</span>
            <span class="text-6xl font-bold text-green-600">Skills</span>

        </div>

        <div class="mt-6">
            {{ $slot }}
        </div>

    </div>
</div>
