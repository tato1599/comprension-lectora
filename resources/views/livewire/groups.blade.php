<div>
    <!-- Vista con un botón superior para crear grupos, además de una vista de todos los grupos -->
    <div class="gap-6 p-6 bg-gray-200 bg-opacity-25 md:grid-cols-2 lg:gap-8 lg:p-8">
      
        <div>
            
            <!-- Botón para crear un nuevo grupo -->
            <div class="flex mt-4">
                <a href="{{ route('groups.create') }}" class="flex items-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Crear Grupo
                </a>
            </div>            

            <div class="grid w-full grid-cols-2 gap-6 mt-4">
                @foreach($groups as $group)
                <a href="{{ route('groups.show', $group) }}">
                <div class="overflow-hidden bg-white rounded-lg shadow ">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $group->nombre }}</h3>
                        <p class="max-w-2xl mt-1 text-sm text-gray-500">{{ $group->descripcion }}</p>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="px-4 py-4 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Código de Acceso</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $group->codigo_acceso }}</dd>
                            </div>
                        </dl>
                    </div>
                    
                </div>
                </a>
                @endforeach
            </div>
            
        </div>

        <!-- Otras secciones -->
        <!-- ... (el resto del contenido permanece sin cambios) ... -->

    </div>
</div>
