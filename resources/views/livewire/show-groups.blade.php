<div class="p-6 bg-white rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold text-gray-900">Detalles del Grupo</h1>

    <div class="mt-4">
        <h2 class="text-xl font-semibold">Nombre del Grupo: {{ $group->nombre }}</h2>
        <p class="mt-2 text-gray-600">Descripción: {{ $group->descripcion }}</p>
        <p class="mt-2 text-gray-600">Código de Acceso: {{ $group->codigo_acceso }}</p>
        <p class="mt-2 text-gray-600">Fecha de Creación: {{ $group->created_at->format('d/m/Y') }}</p>
    </div>

    {{-- lista de usuarios en el grupo --}}
    <div class="mt-6">
        <h2 class="text-xl font-semibold">Usuarios en el Grupo</h2>
        <ul class="mt-2 text-gray-600">
            @foreach ($usersInGroup as $user)
                <li>{{ $user->name }} - {{ $user->email }}</li>
            @endforeach
        </ul>
    </div>


    <div class="mt-6">
        <a href="{{ route('groups') }}" class="text-blue-600 hover:underline">
            Volver a la lista de grupos
        </a>
    </div>

    {{-- boton para crear actividad --}}
    <div class="mt-6">
        {{-- <a href="{{ route('activities-create', $group->id) }}" class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">
            Crear Actividad
        </a> --}}
    </div>
</div>
