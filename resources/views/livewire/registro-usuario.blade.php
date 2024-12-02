<div>
    @if ($step == 1)
        <div class="form-group flex gap-4">
            <!-- Rol Docente -->
            <label class="w-[32%] group cursor-pointer">
                <input type="radio" wire:model="selectedRole" value="docente" class="hidden peer">
                <div
                    class="h-48 bg-color-3 w-[95%] rounded-t-lg border border-l-gray-300 flex items-center justify-center relati">
                    <div
                        class="w-[5.5em] h-[5.5em] rounded-full bg-color-3-2 flex items-center justify-center group-hover:w-[6.5em] group-hover:h-[6.5em] group-hover:bg-color-3-2 absolute transition-all duration-300">
                        <!-- Icono de Docente -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="3.75em" height="3em" viewBox="0 0 640 512">
                            <path fill="white"
                                d="M208 352c-2.39 0-4.78.35-7.06 1.09C187.98 357.3 174.35 360 160 360s-27.98-2.7-40.95-6.91c-2.28-.74-4.66-1.09-7.05-1.09C49.94 352-.33 402.48 0 464.62C.14 490.88 21.73 512 48 512h224c26.27 0 47.86-21.12 48-47.38c.33-62.14-49.94-112.62-112-112.62m-48-32c53.02 0 96-42.98 96-96s-42.98-96-96-96s-96 42.98-96 96s42.98 96 96 96M592 0H208c-26.47 0-48 22.25-48 49.59V96c23.42 0 45.1 6.78 64 17.8V64h352v288h-64v-64H384v64h-76.24c19.1 16.69 33.12 38.73 39.69 64H592c26.47 0 48-22.25 48-49.59V49.59C640 22.25 618.47 0 592 0" />
                        </svg>
                    </div>
                </div>
                <div
                    class="h-16 w-[95%] rounded-b-lg border border-t-0 border-l-gray-300 border-b-gray-300 shadow-md -mt-px group-hover:bg-color-3-2 peer-checked:bg-color-3-2 group-hover:text-white peer-checked:text-white flex items-center justify-center">
                    <b>Docente</b>
                </div>
            </label>

            <!-- Rol Padre -->
            <label class="w-[32%] group cursor-pointer">
                <input type="radio" wire:model="selectedRole" value="padre" class="hidden peer">
                <div
                    class="h-48 bg-color-5 w-[95%] rounded-t-lg border border-l-gray-300 flex items-center justify-center relative">
                    <div
                        class="w-[5.5em] h-[5.5em] rounded-full bg-color-5-2 flex items-center justify-center group-hover:w-[6.5em] group-hover:h-[6.5em] group-hover:bg-color-5-2 absolute transition-all duration-300">
                        <!-- Icono de Padre -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="3.75em" height="3em" viewBox="0 0 24 24">
                            <path fill="white"
                                d="M7 11a4.5 4.5 0 1 1 0-9a4.5 4.5 0 0 1 0 9m10.5 4a4 4 0 1 1 0-8a4 4 0 0 1 0 8m0 1a4.5 4.5 0 0 1 4.5 4.5v.5h-9v-.5a4.5 4.5 0 0 1 4.5-4.5M7 12a5 5 0 0 1 5 5v4H2v-4a5 5 0 0 1 5-5" />
                        </svg>
                    </div>
                </div>
                <div
                    class="h-16 w-[95%] rounded-b-lg border border-t-0 border-l-gray-300 border-b-gray-300 shadow-md -mt-px group-hover:bg-color-5-2 peer-checked:bg-color-5-2 group-hover:text-white peer-checked:text-white flex items-center justify-center">
                    <b>Padre</b>
                </div>
            </label>

            <!-- Rol Estudiante -->
            <label class="w-[32%] group cursor-pointer">
                <input type="radio" wire:model="selectedRole" value="estudiante" class="hidden peer">
                <div
                    class="h-48 bg-color-1 w-[95%] rounded-t-lg border border-l-gray-300 flex items-center justify-center relative">
                    <div
                        class="w-[5.5em] h-[5.5em] rounded-full bg-color-1-2 flex items-center justify-center group-hover:w-[6.5em] group-hover:h-[6.5em] group-hover:bg-color-1-2 absolute transition-all duration-300">
                        <!-- Icono de Estudiante -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="3.75em" height="3em" viewBox="0 0 256 256">
                            <path fill="white"
                                d="m227.79 52.62l-96-32a11.85 11.85 0 0 0-7.58 0l-96 32A12 12 0 0 0 20 63.37a6 6 0 0 0 0 .63v80a12 12 0 0 0 24 0V80.65l23.71 7.9a67.92 67.92 0 0 0 18.42 85A100.36 100.36 0 0 0 46 209.44a12 12 0 1 0 20.1 13.11C80.37 200.59 103 188 128 188s47.63 12.59 61.95 34.55a12 12 0 1 0 20.1-13.11a100.36 100.36 0 0 0-40.18-35.92a67.92 67.92 0 0 0 18.42-85l39.5-13.17a12 12 0 0 0 0-22.76Zm-99.79-8L186.05 64L128 83.35L70 64ZM172 120a44 44 0 1 1-81.06-23.71l33.27 11.09a11.9 11.9 0 0 0 7.58 0l33.27-11.09A43.85 43.85 0 0 1 172 120" />
                        </svg>
                    </div>
                </div>
                <div
                    class="h-16 w-[95%] rounded-b-lg border border-t-0 border-l-gray-300 border-b-gray-300 shadow-md -mt-px group-hover:bg-color-1-2 peer-checked:bg-color-1-2 group-hover:text-white peer-checked:text-white flex items-center justify-center">
                    <b>Estudiante</b>
                </div>
            </label>
        </div>
        <button wire:click="nextStep" class="btn btn-primary">Siguiente</button>
    @elseif($step == 2)
        <button wire:click="previousStep" class="btn btn-primary">Anterior</button>
        <button wire:click="register" class="btn btn-primary">Registrarse</button>
    @endif


</div>
