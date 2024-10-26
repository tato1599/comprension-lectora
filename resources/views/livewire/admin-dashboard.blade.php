<div  x-data="{ open: false }" class="overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 rtl:text-right">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">Nombre</th>
                <th scope="col" class="px-6 py-3">Correo electrónico</th>
                <th scope="col" class="px-6 py-3">Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @if ($user->id !== auth()->id()) <!-- Excluir el usuario actual -->
                    <tr class="border-b odd:bg-white even:bg-gray-50">
                        <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $user->name }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td class="relative px-6 py-4">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                    <button  class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                        @if ($user->hasRole('docente'))
                                            Docente
                                        @elseif ($user->hasRole('alumno'))
                                            Alumno
                                        @else
                                            -
                                        @endif
                                        
                                        <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    </span>
                                </x-slot>

                                <x-slot name="content">
                                    <div class="fixed left-auto right-auto w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
                                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                            <x-dropdown-link  wire:click="assignRole({{ $user->id }}, 'docente')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Docente</x-dropdown-link>
                                            <x-dropdown-link  wire:click="assignRole({{ $user->id }}, 'alumno')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Alumno</x-dropdown-link>
                                        </div>
                                    </div>
                                </x-slot>
                            </x-dropdown>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
