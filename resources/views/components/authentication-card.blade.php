<div class="flex flex-col items-center justify-center bg-white sm:min-h-screen sm:flex-row">
    <!-- Botón redondo -->
    <a href="/" class="absolute top-4 left-4 z-20">
        <button
            class="flex items-center justify-center w-12 h-12 text-black bg-white rounded-full shadow-lg hover:bg-gray-100 transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </button>
    </a>

    <!-- Contenedor de imagen con difuminado -->
    <div class="relative flex items-center justify-center h-screen w-full">
        <!-- Imagen de fondo con blur -->
        <div class="absolute inset-0 w-full h-full bg-cover bg-center"
            style="background-image: url('{{ asset('images/login.jpg') }}'); background-size: cover; filter: blur(5px);">
        </div>

        <!-- Contenido principal -->
        <div
            class="relative bg-white w-11/12 sm:w-3/4 lg:w-1/2 rounded-lg shadow-lg p-6 sm:p-8 flex flex-col items-center justify-center">
            <div class="flex justify-center space-x-2">
                <span class="text-4xl sm:text-5xl lg:text-6xl font-bold text-color-3">Read</span>
                <span class="text-4xl sm:text-5xl lg:text-6xl font-bold text-color-1">Skills</span>
            </div>

            <div class="mt-6 w-full">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
