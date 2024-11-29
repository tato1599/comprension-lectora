<div>


    <div class=" bg-white rounded-lg shadow-xl">

        <div class="flex items-center justify-center mt-4">
            <h1 class="text-2xl font-bold text-gray-700">Crear Nuevo Grupo</h1>
        </div>

        <form wire:submit.prevent="store">

            <div class="grid grid-cols-1 lg:p-4">

                <div class="sm:col-span-2">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" wire:model="nombre" id="nombre" class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input rounded-md" />
                    @error('nombre') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:gap-2 lg:p-4">

                <div class=" sm:col-span-2">
                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea wire:model="descripcion" id="descripcion" class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-blue rounded-md"></textarea>
                    @error('descripcion') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:gap-2 lg:p-4">
                <div class="mt-4 sm:col-span-2">
                    <label for="codigo_acceso" class="block text-sm font-medium text-gray-700">Código de Acceso</label>
                    <input type="text" wire:model="codigo_acceso" id="codigo_acceso" class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input rounded-md" />
                    @error('codigo_acceso') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex items-center justify-center mt-4">
                <button type="submit" class="px-4 py-2 mb-4 w-full m-4 text-white bg-blue-600 rounded-md hover:bg-blue-700">Crear Grupo</button>
            </div>

        </form>
    </div>
</div>
