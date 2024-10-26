<div class="grid w-full grid-cols-2 gap-6 mt-4">
    @foreach($groups as $group)
        <!-- Enlace para redirigir al usuario a la vista del grupo -->
        <a href="{{ route('groups.show', $group->id) }}">
            <div class="overflow-hidden bg-white rounded-lg shadow cursor-pointer">
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
