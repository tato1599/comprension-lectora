<div>
    <!-- Pantalla de carga -->
    <div wire:loading.delay
        class="fixed inset-0 bg-gray-500 bg-opacity-50  items-center h-full w-full flex justify-center content-center z-50">

            <section class="flex flex-col items-center">
                <img src="{{ asset('images/robot.webp') }}" class="w-50 h-50" alt="Cargando...">
                <span class="text-white text-lg">Procesando, Inteligencia Artificial en acción...</span>
            </section>

    </div>


    <!-- Contenido principal -->
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16">
            <form wire:submit.prevent="generateQuestions">
                <!-- Nombre de la actividad -->
                <div>
                    <label for="activity-name" class="block mb-2 text-sm font-medium text-gray-900">Nombre de la
                        actividad</label>
                    <input type="text" id="activity-name" wire:model="activity"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="Ingrese el nombre de la actividad">
                </div>

                <!-- Texto de la actividad -->
                <div class="mt-4">
                    <label for="activity-text" class="block mb-2 text-sm font-medium text-gray-900">Texto de la
                        actividad</label>
                    <textarea id="activity-text" wire:model="activityText" rows="6"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        placeholder="Escriba el texto de la actividad aquí"></textarea>
                </div>

                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 text-sm font-medium text-center text-white bg-color-3 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                    Generar preguntas
                </button>
            </form>

            <!-- Mostrar preguntas generadas -->
            @if ($questions)
                <div class="mt-6">
                    <h3 class="text-lg font-semibold">Preguntas generadas:</h3>
                    <ul class="list-disc list-inside">
                        @foreach ($questions as $question)
                            <li>{{ $question }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Botón para guardar la actividad -->
            @if ($questions)
                <div class="mt-6">
                    <button wire:click="saveActivity"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-green-600 rounded-lg focus:ring-4 focus:ring-green-200 hover:bg-green-800">
                        Guardar actividad
                    </button>
                </div>
            @endif

            <!-- Mostrar mensajes -->
            @if (session('success'))
                <div class="mt-4 text-green-500">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mt-4 text-red-500">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </section>
</div>
