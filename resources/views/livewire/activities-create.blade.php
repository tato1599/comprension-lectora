<div>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16">
            <form wire:submit.prevent="store">
                <!-- Nombre de la actividad -->
                <div>
                    <label for="activity-name" class="block mb-2 text-sm font-medium text-gray-900">Nombre de la actividad</label>
                    <input type="text" id="activity-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ingrese el nombre de la actividad">
                </div>

                <!-- Texto de la actividad -->
                <div class="mt-4">
                    <label for="activity-text" class="block mb-2 text-sm font-medium text-gray-900">Texto de la actividad</label>
                    <textarea id="activity-text" wire:model="activityText" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Escriba el texto de la actividad aquí"></textarea>
                </div>

                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 text-sm font-medium text-center text-white bg-color-3 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                    Generar preguntas
                </button>
            </form>

            @if ($questions)
            <div class="mt-6">
                <h3 class="text-lg font-semibold">Preguntas generadas:</h3>
                <ul class="list-disc list-inside">
                    @foreach ($questions as $question)
                    <div class="flex flex-col-2">
                    <li>{{ $question }}</li>
                         <a>
                            <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                            </svg>
                        </a>
                    </div>


                    @endforeach
                </ul>
            </div>
            @endif


            <!-- Mostrar mensajes de error -->
            @if (session('error'))
                <div class="mt-4 text-red-500">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </section>
</div>
