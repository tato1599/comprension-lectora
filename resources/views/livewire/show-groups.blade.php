<div class="p-6 bg-white rounded-lg shadow-lg" x-data="{ activeTab: 'actividades', rol: $wire.rol }">
    <!-- Pestañas -->
    <div class="flex justify-between border-b border-gray-200">
        <nav class="flex space-x-4">
            <button @click="activeTab = 'actividades'"
                :class="{ 'border-blue-600 text-blue-600': activeTab === 'actividades', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'actividades' }"
                class="px-3 py-2 font-medium text-sm border-b-2 focus:outline-none">
                Actividades
            </button>
            <button @click="activeTab = 'informacion'" x-show="rol === 'owner'"
                :class="{ 'border-blue-600 text-blue-600': activeTab === 'informacion', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'informacion' }"
                class="px-3 py-2 font-medium text-sm border-b-2 focus:outline-none">
                Información del Curso
            </button>
        </nav>
    </div>

    <!-- Contenido de las Pestañas -->
    <div class="mt-6">
        <!-- Información del Curso -->
        <div x-show="activeTab === 'informacion'">
            <div class="flex justify-between">
                <h1 class="text-2xl font-bold text-gray-900">{{ $group->nombre }}</h1>
                <div class="mt-6">
                    <a href="{{ route('crear-actividad', $group->id) }}"
                        class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">
                        Crear Actividad
                    </a>
                </div>
            </div>

            <div class="mt-4">
                <p class="mt-2 text-gray-600">Descripción: {{ $group->descripcion }}</p>
                <p class="mt-2 text-gray-600">Código de Acceso:
                    {{ $group->codigo_acceso ? $group->codigo_acceso : 'N/A' }}</p>
                <p class="mt-2 text-gray-600">Fecha de Creación: {{ $group->created_at->format('d/m/Y') }}</p>
            </div>

            <!-- Lista de usuarios en el grupo -->
            <div class="mt-6">
                <h2 class="text-xl font-semibold">Usuarios en el Grupo</h2>
                <div>
                    <livewire:grupo-usuarios-table groupId="{{ $group->id }}" />
                </div>
            </div>
        </div>

        <!-- Actividades -->
        <div x-show="activeTab === 'actividades'">
            <h2 class="text-2xl font-bold text-gray-900">Actividades</h2>
            <div class="mt-4">
                <!-- Aquí puedes agregar un componente o una lista de actividades -->
                <p>Lista de Actividades</p>
            </div>
        </div>
    </div>

    <!-- Botón para volver a la lista de grupos -->
    <div class="mt-6">
        <a href="{{ route('groups') }}" class="text-blue-600 hover:underline">
            Volver a la lista de grupos
        </a>
    </div>
</div>
