<div>
    <div class="bg-white rounded-lg shadow-xl" x-data="createGroup">

        <div class="flex items-center justify-center mt-4">
            <h1 class="text-2xl font-bold text-gray-700">Crear Nuevo Grupo</h1>
        </div>
        <div class="grid grid-cols-1 lg:p-4">

            <div class="sm:col-span-2">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <x-input type="text" x-model="nombre" id="nombre" class="w-full mt-1 text-sm" />
            </div>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:gap-2 lg:p-4">

            <div class=" sm:col-span-2">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea x-model="descripcion" id="descripcion"
                    class="block w-full mt-1 text-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm border py-1"></textarea>
            </div>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:gap-2 lg:p-4">
            <div class="mt-4 sm:col-span-2">
                <label for="codigo_acceso" class="block text-sm font-medium text-gray-700">Código de Acceso
                    (Opcional)</label>
                <x-input type="text" x-model="codigo_acceso" id="codigo_acceso"
                    class="block w-full mt-1 text-sm form-input border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm border py-1" />
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <button type="button" @click="crearGrupo"
                class="px-4 py-2 mb-4 w-full m-4 text-white bg-color-3 rounded-md hover:bg-color-3-2">
                <template x-if="creando">
                    <center>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path stroke-dasharray="16" stroke-dashoffset="16" d="M12 3c4.97 0 9 4.03 9 9">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s"
                                        values="16;0" />
                                    <animateTransform attributeName="transform" dur="1.5s" repeatCount="indefinite"
                                        type="rotate" values="0 12 12;360 12 12" />
                                </path>
                                <path stroke-dasharray="64" stroke-dashoffset="64" stroke-opacity="0.3"
                                    d="M12 3c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9c0 -4.97 4.03 -9 9 -9Z">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="1.2s"
                                        values="64;0" />
                                </path>
                            </g>
                        </svg>
                    </center>
                </template>
                <template x-if="!creando">
                    <p>Crear Grupo</p>
                </template>
            </button>
        </div>
    </div>

    @script
        <script>
            Alpine.data('createGroup', () => ({
                creando: false,
                nombre: $wire.entangle('nombre'),
                descripcion: $wire.entangle('descripcion'),
                codigo_acceso: $wire.entangle('codigo_acceso'),
                async crearGrupo() {
                    if (this.creando) return;
                    this.creando = true;
                    if (!this.nombre) {
                        Toast.fire({
                            icon: 'error',
                            title: 'El nombre es requerido'
                        });
                        this.creando = false;
                        return;
                    }
                    if (!this.descripcion) {
                        Toast.fire({
                            icon: 'error',
                            title: 'La descripción es requerida'
                        });
                        this.creando = false;
                        return;
                    }
                    await $wire.crearGrupo();
                    this.creando = false;
                }
            }));
        </script>
    @endscript
</div>
