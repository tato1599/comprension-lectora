<div class="min-h-screen flex flex-col sm:flex-row justify-center items-center bg-white">

    <a href="/">
        <!-- Botón redondo -->
        <button
            class="z-20 absolute top-4 left-4 bg-white text-black rounded-full w-12 h-12 flex justify-center items-center">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>

        </button>
    </a>

    <!-- Contenedor de imagen con difuminado -->
    <div class="flex-auto flex justify-center items-center"
        style="background-image: url('{{ asset('images/login.jpg') }}'); background-size: auto 100%; background-repeat: no-repeat; background-position: center; height: 100vh; width: 25%; filter: blur(3px);">
    </div>

    <div class="flex-auto mt-6 px-8 py-4 overflow-hidden sm:rounded-lg">
        <div class="flex justify-center">

            <span class="text-6xl font-bold text-blue-600">Read</span>
            <span class="text-6xl font-bold text-green-600">Skills</span>

        </div>

        <div class="mt-6">
            {{ $slot }}
        </div>

    </div>
</div>
