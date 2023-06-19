
<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Informacion Personal') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Captura de datos de personales del alumno') }}
            </p>
        </header>
        <div class="mt-6 space-y-6">
            {{-- se muestra la prevalizacion solo cuando se esta creando un estudiante --}}
            {{-- @if ($img && !isset($estudianteactual))
                <img class="mb-4 w-80 h-50" src="{{ $img->temporaryUrl() }}">
            @endif --}}
            @if (isset($student))
            <img class="w-80 h-50 " src="{{asset('storage/'.$student->img)}}" alt="Jese image">
            @endif
            <div class="grid grid-cols-2 gap-4">

                <div>
                    <x-input-label for="nombre" :value="__('Nombre')" />
                    <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $student->name ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('nombre')" />
                </div>

                <div>
                    <x-input-label for="lasnamep" :value="__('Apellido Paterno')" />
                    <x-text-input id="lasnamep" name="lasnamep" type="text" class="mt-1 block w-full"
                        :value="old('lasnamep', $student->lastname_p ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('lasnamep')" />
                </div>

                <div>
                    <x-input-label for="lasnamem" :value="__('Apellido materno')" />
                    <x-text-input id="lasnamem" name="lasnamem" type="text" class="mt-1 block w-full"
                        :value="old('lasnamem', $student->lastname_m ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('lasnamem')" />
                </div>

                <div>
                    <x-input-label for="email" :value="__('Correo Electrónico')" />
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                        :value="old('email', $student->email ?? '') " />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <div>
                    <x-input-label for="phone" :value="__('Teléfono')" />
                    <x-text-input id="phone" name="phone" type="number" class="mt-1 block w-full"
                        :value="old('phone', $student->phone ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />.
                </div>

                <div>
                    <x-input-label for="birthdate" :value="__('Fecha de nacimiento')" />
                    <x-text-input id="birthdate" name="birthdate" type="date" class="mt-1 block w-full"
                        :value="old('birthdate', $student->birthdate ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('birthdate')" />
                </div>

                <div>
                    <x-input-label for="gender" :value="__('Genero')" />
                    <x-text-input id="gender" name="gender" type="text" class="mt-1 block w-full"
                        :value="old('gender', $student->gender ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                </div>

                <div>
                    <x-input-label for="curp" :value="__('CURP')" />
                    <x-text-input id="curp" name="curp" type="text" class="mt-1 block w-full uppercase"
                        :value="old('curp', $student->curp ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('curp')" />
                </div>

                <div>
                    <x-input-label for="img" :value="__('Foto')" />
                    <x-text-input id="img" name="img" type="file" class="mt-1 block w-full"
                        :value="old('img', $student->img ?? '')" />
                    <x-input-error for="img" class="mt-2" :messages="$errors->get('img')" />
                </div>

            </div>
        </div>
    </section>
</div>
