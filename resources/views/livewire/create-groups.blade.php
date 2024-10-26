<div>
    <div class="flex items-center justify-between">
        <h2 class="text-lg font-semibold text-gray-700 ">Crear Grupo</h2>
    </div>

    <div class="mt-4">
        <form wire:submit.prevent="store">
            
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" wire:model="nombre" id="name" class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-input" />
                    @error('nombre') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            </div>
            <!-- descripcion-->
            <div class="mt-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea wire:model="descripcion" id="descripcion" class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-blue form-textarea"></textarea>
                @error('descripcion') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-end mt-4">
                <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                    Crear Grupo
                </button>
            </div>

        </form>
    </div>
</div>
