<div>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16">
            <form action="#">
                <div id="create-activity-accordion-collapse" data-accordion="collapse">

                    <!-- Título de la sección -->
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-2xl font-semibold text-gray-900">Crear actividad</h2>
                    </div>

                    <div class="py-4 border-gray-200 sm:py-5">
                        <div class="grid gap-4 md:gap-6">
                            <div class="space-y-4">
                                <!-- Nombre de la actividad -->
                                <div>
                                    <label for="activity-name" class="block mb-2 text-sm font-medium text-gray-900">Nombre de la actividad</label>
                                    <input type="text" name="activity-name" id="activity-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ingrese el nombre de la actividad" required>
                                </div>

                                <!-- Descripción de la actividad -->
                                <div>
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
                                    <textarea id="description" name="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ingrese la descripción de la actividad" required></textarea>
                                </div>

                                <!-- Selector de tipo de entrada -->
                                <div>
                                    <label for="input-type" class="block mb-2 text-sm font-medium text-gray-900">Tipo de entrada</label>
                                    <select id="input-type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                                        <option value="" disabled selected>Seleccione una opción</option>
                                        <option value="file">Subir archivo</option>
                                        <option value="text">Escribir texto</option>
                                    </select>
                                </div>

                                <!-- Subir archivo -->
                                <div id="file-input-container" class="hidden">
                                    <label for="activity-file" class="block mb-2 text-sm font-medium text-gray-900">Subir archivo</label>
                                    <input id="activity-file" type="file" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none">
                                    <p class="mt-2 text-sm text-gray-500">Suba un archivo relacionado con la actividad.</p>
                                </div>

                                <!-- Escribir texto -->
                                <div id="text-input-container" class="hidden">
                                    <label for="activity-text" class="block mb-2 text-sm font-medium text-gray-900">Texto de la actividad</label>
                                    <textarea id="activity-text" name="activity-text" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Escriba el texto de la actividad aquí"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                        Guardar actividad
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputTypeSelector = document.getElementById('input-type');
        const fileInputContainer = document.getElementById('file-input-container');
        const textInputContainer = document.getElementById('text-input-container');

        inputTypeSelector.addEventListener('change', function () {
            const selectedValue = inputTypeSelector.value;

            // Mostrar u ocultar los campos según la selección
            if (selectedValue === 'file') {
                fileInputContainer.classList.remove('hidden');
                textInputContainer.classList.add('hidden');
            } else if (selectedValue === 'text') {
                textInputContainer.classList.remove('hidden');
                fileInputContainer.classList.add('hidden');
            }
        });
    });
</script>
