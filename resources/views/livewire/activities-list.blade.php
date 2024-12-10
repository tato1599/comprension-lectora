<div x-data="{ actividades: $wire.activities, rol: $wire.rol }">
    <h2 class="text-xl font-semibold mb-4">Lista de Actividades</h2>
    <div class="space-y-4">
        <template x-for="actividad in actividades" :key="actividad.id">
            <div class="p-4 border border-gray-200 rounded-lg shadow-sm mt-4 bg-white">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-bold" x-text="actividad.titulo"></h3>
                    <a :href="`/actividad/${actividad.id}`" class="text-blue-600 hover:underline">
                        Ver Detalles
                    </a>
                </div>
                <p class="text-gray-600 mt-2" x-text="actividad.descripcion"></p>
            </div>
        </template>
        <template x-if="actividades.length === 0">
            <p class="text-gray-600">No hay actividades disponibles.</p>
        </template>

    </div>
</div>
