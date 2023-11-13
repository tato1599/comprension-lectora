

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <!-- Form to enter class code -->
    <div>
        <form class="space-y-8" action="/prueba" method="GET">
            @csrf
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                    <!-- Icon -->
                </svg>
                <h2 class="ml-3 text-xl font-semibold text-gray-900">
                    Ingresa el código de tu clase
                </h2>
            </div>
            <div>
                <label for="class_code" class="block text-sm font-medium text-gray-700">Codigo de clase</label>
                <input type="text" name="class_code" id="class_code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div class="mt-4" >
            <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Ingresar
            </button>
        </form>
    </div>
    
    <!-- Other sections -->
    <!-- ... (remaining content remains unchanged) ... -->
</div>
