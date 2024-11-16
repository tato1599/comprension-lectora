<div>

    @foreach ($users as $user)

        @if (auth()->user()->hasRole('docente'))
            <a href="{{ route('groups.create') }}" class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">
                Crear Grupo
            </a>
        @endif

    @endforeach



    <div class="grid w-full grid-cols-2 gap-6 mt-4 p-4">



        @foreach($groups as $group)
        <!-- Enlace para redirigir al usuario a la vista del grupo -->
        <div class="overflow-hidden bg-white rounded-lg shadow cursor-pointer">
            <a href="{{ route('groups.show', $group->id) }}">
            <div class="px-4 py-5 sm:px-6">

                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $group->nombre }}</h3>

                <p class="max-w-2xl mt-1 text-sm text-gray-500">{{ $group->descripcion }}</p>
            </div>
        </a>
            <div class="border-t border-gray-200">
                <div>
                    <div class="px-4 py-4 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6" >
                        <h5 class="text-sm font-medium text-gray-500">Código de Acceso</h5>
                        <h5 class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $group->codigo_acceso }}</h5>
                    </div>
                </div>
            </div>
        </div>

        @endforeach


    </div>

</div>
