<div>
    <div x-data="registroUsuario">
        <!-- Paso 1 -->
        <div x-show="step == 1">
            <div class="form-group flex gap-4">
                <!-- Rol Docente -->
                <label class="w-[32%] group cursor-pointer">
                    <input type="radio" x-model="selectedRole" value="docente" class="hidden peer">
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
                    <input type="radio" x-model="selectedRole" value="padre" class="hidden peer">
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
                    <input type="radio" x-model="selectedRole" value="estudiante" class="hidden peer">
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

            <!-- Botón para avanzar al siguiente paso -->
            <div class="flex justify-end mt-4">
                <button @click="nextStep" class="btn rounded-lg bg-black text-white px-4 py-2 mr-3"
                    title="siguiente">Siguiente</button>
            </div>
        </div>

        <!-- Paso 2 -->
        <div x-show="step == 2">
            <div class="flex justify-between">
                <div class="w-[48%]">
                    <x-label for="name" value="Nombre" />
                    <x-input id="name" class="block mt-1 w-full border-red-500" type="text" name="name"
                        x-model="name" autofocus autocomplete="name" />
                </div>
                <div class="w-[48%]">
                    <x-label for="lastname" value="Apellidos" />
                    <x-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" x-model="lastname"
                        autocomplete="lastname" />
                </div>
            </div>
            <div class="flex justify-between mt-4">
                <div class="w-[48%]">
                    <x-label for="dob" value="Fecha de nacimiento" />
                    <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" autocomplete="name"
                        x-model="dob" format="yyyy/mm/dd" />
                </div>
                <div class="w-[48%]">
                    <x-label for="sex" value="Sexo" />
                    <select id="sex" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" name="sex"
                        x-model="sex" autocomplete="sex">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="O">Otro</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <x-label for="email" value="E-mail" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" x-model="email"
                    autocomplete="username" />
            </div>
            <div class="flex justify-between mt-4">
                <div class="w-[48%]">
                    <x-label for="password" value="Contraseña" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                        x-model="password" autocomplete="name" format="yyyy/mm/dd" />
                </div>
                <div class="w-[48%]">
                    <x-label for="confirm_password" value="Confirmar Contraseña" />
                    <x-input id="confirm_password" class="block mt-1 w-full" type="password" name="confirm_password"
                        x-model="confirm_password" autocomplete="confirm_password" />
                </div>
            </div>
            <div class="flex justify-between mt-4">
                <button @click="prevStep" class="btn rounded-lg bg-black text-white px-4 py-2">Anterior</button>
                <button @click="register" class="btn rounded-lg bg-black text-white px-4 py-2">Registrarse</button>
            </div>
        </div>
    </div>

    @script
        <script>
            Alpine.data('registroUsuario', () => ({
                selectedRole: $wire.entangle('selectedRole'),
                name: $wire.entangle('nombre'),
                lastname: $wire.entangle('apellido'),
                dob: $wire.entangle('fechaNacimiento'),
                sex: $wire.entangle('sexo'),
                email: $wire.entangle('email'),
                password: $wire.entangle('contraseña'),
                confirm_password: $wire.entangle('confirmarContraseña'),
                step: 1,
                nextStep() {
                    if (!this.selectedRole) {
                        window.Toast.fire({
                            icon: 'error',
                            title: 'Debes seleccionar un rol para continuar'
                        });
                        return;
                    }
                    this.step = 2;
                },
                prevStep() {
                    this.step = 1;
                },
                register() {
                    to_check = ['name', 'lastname', 'dob', 'sex', 'email', 'password', 'confirm_password'];
                    fields = {
                        name: 'Nombre',
                        lastname: 'Apellidos',
                        dob: 'Fecha de nacimiento',
                        sex: 'Sexo',
                        email: 'E-mail',
                        password: 'Contraseña',
                        confirm_password: 'Confirmar Contraseña'
                    }
                    to_check.forEach((field) => {
                        if (!this[field] || this[field] == '') {
                            window.Toast.fire({
                                icon: 'error',
                                title: `El campo ${fields[field]} es requerido`
                            });
                            return;
                        }
                    });
                    regex = /^[a-zA-Z\s]*$/;
                    if (!regex.test(this.name) || !regex.test(this.lastname)) {
                        window.Toast.fire({
                            icon: 'error',
                            title: 'El nombre y los apellidos no deben contener números ni caracteres especiales'
                        });
                        return;
                    }
                    regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                    if (!regex.test(this.email)) {
                        window.Toast.fire({
                            icon: 'error',
                            title: 'El correo electrónico no es válido'
                        });
                        return;
                    }
                    if (this.password !== this.confirm_password) {
                        window.Toast.fire({
                            icon: 'error',
                            title: 'Las contraseñas no coinciden'
                        });
                        return;
                    }
                },
            }));
        </script>
    @endscript
</div>
