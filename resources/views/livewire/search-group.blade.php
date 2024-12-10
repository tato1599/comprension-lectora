<div class="grid grid-cols-1 gap-6 p-6 bg-gray-200 bg-opacity-25 md:grid-cols-1 lg:gap-8 lg:p-8">
    <div x-data="buscarGrupo">
        <div class="flex items-center justify-between">
            <div class="md:w-[85%] sm:w-[75%]">
                <label for="buscar" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Buscar curso</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="buscar" x-model="terminoBusqueda" @keydown.enter="buscarGrupos"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:border-color-3"
                        placeholder="Buscar curso" />
                    <button type="button" x-on:click="buscarGrupos"
                        class="text-white absolute end-2.5 bottom-2.5 bg-color-3 hover:bg-color-3-2 focus:outline-none font-medium rounded-lg text-sm px-4 py-2"
                        :class="{ 'cursor-not-allowed': buscando }">
                        <template x-if="buscando">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path stroke-dasharray="16" stroke-dashoffset="16" d="M12 3c4.97 0 9 4.03 9 9">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s"
                                            values="16;0" />
                                        <animateTransform attributeName="transform" dur="1.5s"
                                            repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12" />
                                    </path>
                                    <path stroke-dasharray="64" stroke-dashoffset="64" stroke-opacity="0.3"
                                        d="M12 3c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 -9c0 -4.97 4.03 -9 9 -9Z">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="1.2s"
                                            values="64;0" />
                                    </path>
                                </g>
                            </svg>
                        </template>
                        <template x-if="!buscando">
                            <p>Buscar</p>
                        </template>
                    </button>
                </div>
            </div>
            @if (auth()->user()->hasRole('docente'))
                <a class="btn px-4 py-3 text-white bg-color-5 rounded-md hover:bg-color-5-2 md:w-[13%] sm:w-[20%] text-sm text-center"
                    href="{{ route('groups.create') }}">Crear Grupo</a>
            @endif
        </div>
        <div class="grid gap-4 mt-10 grid-cols-2">
            <template x-for="grupo in grupos" :key="grupo.id">

                <div class="overflow-hidden bg-white rounded-lg shadow">
                    <div class="px-4 py-5 sm:px-6">

                        <h3 class="text-lg font-medium leading-6 text-gray-900" x-text="grupo.nombre"></h3>

                        <p class="max-w-2xl mt-1 text-sm text-gray-500" x-text="grupo.descripcion"></p>
                    </div>
                    <div class="border-t border-gray-200">
                        <div class="px-4 py-2 bg-gray-50 sm:grid sm:grid-cols-2 sm:gap-4 sm:px-6">
                            <!-- Alineación vertical del texto -->
                            <div class="flex items-center">
                                <h5 class="text-sm font-medium text-gray-500">
                                    Código Corto: <span x-text="grupo.codigo_corto"></span>
                                </h5>
                            </div>
                            <div class="flex justify-end items-center">
                                <button type="button" @click="unirseGrupo(grupo.id, grupo.codigo_acceso)"
                                    x-show="!grupo.rol"
                                    class="px-4 py-1 bg-color-1 text-white rounded-md hover:bg-color-1-2 max-w-32"
                                    :class="{ 'opacity-50 cursor-not-allowed': uniendose }" :disabled="uniendose">
                                    <template x-if="uniendose && grupoUnidoId === grupo.id">
                                        <span class="flex items-center space-x-2">
                                            <span>Uniéndose</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" class="inline">
                                                <circle cx="4" cy="12" r="3" fill="currentColor">
                                                    <animate id="svgSpinners3DotsBounce0" attributeName="cy"
                                                        begin="0;svgSpinners3DotsBounce1.end+0.25s" calcMode="spline"
                                                        dur="0.6s" keySplines=".33,.66,.66,1;.33,0,.66,.33"
                                                        values="12;6;12" />
                                                </circle>
                                                <circle cx="12" cy="12" r="3" fill="currentColor">
                                                    <animate attributeName="cy"
                                                        begin="svgSpinners3DotsBounce0.begin+0.1s" calcMode="spline"
                                                        dur="0.6s" keySplines=".33,.66,.66,1;.33,0,.66,.33"
                                                        values="12;6;12" />
                                                </circle>
                                                <circle cx="20" cy="12" r="3" fill="currentColor">
                                                    <animate id="svgSpinners3DotsBounce1" attributeName="cy"
                                                        begin="svgSpinners3DotsBounce0.begin+0.2s" calcMode="spline"
                                                        dur="0.6s" keySplines=".33,.66,.66,1;.33,0,.66,.33"
                                                        values="12;6;12" />
                                                </circle>
                                            </svg>
                                        </span>
                                    </template>

                                    <template x-if="!uniendose || grupoUnidoId !== grupo.id">
                                        <span>Unirse</span>
                                    </template>
                                </button>

                                <a x-show="grupo.rol" :href=`/grupos/${grupo.id}`
                                    class="btn px-4 py-1 bg-color-2 text-white rounded-md hover:bg-color-2-2 max-w-32 text-center">
                                    Ver
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </template>
        </div>
        <template x-if="!grupos.length">
            <div class="flex items-center justify-center">
                <div class="text-center">
                    <img src="{{ asset('images/notfound.png') }}" class="w-64 h-64 mx-auto" alt="No hay datos">
                    <h1 class="text-2xl font-bold text-gray-700">
                        No hay grupos registrados
                    </h1>
                </div>
            </div>
        </template>
    </div>
    @script
        <script>
            Alpine.data('buscarGrupo', () => ({
                buscando: false,
                terminoBusqueda: $wire.entangle('terminoBusqueda'),
                grupos: $wire.entangle('grupos'),
                uniendose: false, // Para deshabilitar el botón mientras se une
                grupoUnidoId: null,
                async buscarGrupos() {
                    if (this.buscando || !this.terminoBusqueda) return;
                    this.buscando = true;
                    await $wire.buscarGrupos();
                    this.buscando = false;
                },
                async unirseGrupo(idGrupo, codigo_acceso) {
                    if (this.uniendose) return;
                    this.uniendose = true;
                    this.grupoUnidoId = idGrupo;

                    if (codigo_acceso) {
                        const codigo = await Swal.fire({
                            title: 'Código de acceso',
                            input: 'text',
                            inputLabel: 'Ingresa el código de acceso',
                            inputPlaceholder: 'Código de acceso',
                            showCancelButton: true,
                            confirmButtonText: 'Unirse',
                            cancelButtonText: 'Cancelar',
                            inputValidator: (value) => {
                                if (!value) {
                                    return 'Debes ingresar el código de acceso'
                                }
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                return result.value;
                            }
                            this.uniendose = false;
                            this.grupoUnidoId = null;
                        });
                        if (!codigo) return;
                    }
                    await $wire.unirseGrupo({
                        idGrupo: idGrupo,
                        codigo_acceso: codigo_acceso
                    });
                    this.uniendose = false;
                },
            }));
        </script>
    @endscript
</div>
