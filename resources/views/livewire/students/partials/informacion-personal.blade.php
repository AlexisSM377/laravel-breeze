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
            @if ($img && !isset($estudianteactual))
                <img class="mb-4 w-80 h-50" src="{{ $img->temporaryUrl() }}">
            @endif
            @if (isset($estudianteactual))
            <img class="w-80 h-50 " src="{{asset('storage/'.$estudianteactual->img)}}" alt="Jese image">
            @endif
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" wire:model="name" type="text" class="mt-1 block w-full" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="lasnamep" :value="__('Apellido Paterno')" />
                    <x-text-input id="lasnamep" wire:model="lasnamep" type="text" class="mt-1 block w-full"
                        :value="old('lasnamep')" />
                    <x-input-error class="mt-2" :messages="$errors->get('lasnamep')" />
                </div>

                <div>
                    <x-input-label for="lasnamem" :value="__('Apellido materno')" />
                    <x-text-input id="lasnamem" wire:model="lasnamem" type="text" class="mt-1 block w-full"
                        :value="old('lasnamem')" />
                    <x-input-error class="mt-2" :messages="$errors->get('lasnamem')" />
                </div>

                <div>
                    <x-input-label for="email" :value="__('Correo Electrónico')" />
                    <x-text-input id="email" wire:model="email" type="email" class="mt-1 block w-full"
                        :value="old('email')" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <div>
                    <x-input-label for="phone" :value="__('Teléfono')" />
                    <x-text-input id="phone" wire:model="phone" type="number" class="mt-1 block w-full"
                        :value="old('phone')" />
                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />.
                </div>

                <div>
                    <x-input-label for="birthdate" :value="__('Fecha de nacimiento')" />
                    <x-text-input id="birthdate" wire:model="birthdate" type="date" class="mt-1 block w-full"
                        :value="old('birthdate')" />
                    <x-input-error class="mt-2" :messages="$errors->get('birthdate')" />
                </div>

                <div>
                    <x-input-label for="gender" :value="__('Genero')" />
                    <x-text-input id="gender" wire:model="gender" type="text" class="mt-1 block w-full"
                        :value="old('gender')" />
                    <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                </div>

                <div>
                    <x-input-label for="curp" :value="__('CURP')" />
                    <x-text-input id="curp" wire:model="curp" type="text" class="mt-1 block w-full uppercase"
                        :value="old('curp')" />
                    <x-input-error class="mt-2" :messages="$errors->get('curp')" />
                </div>

                <div>
                    <x-input-label for="img" :value="__('Foto')" />
                    <x-text-input id="img" wire:model="img" type="file" class="mt-1 block w-full"
                        :value="old('img')" />
                    <x-input-error for="img" class="mt-2" :messages="$errors->get('img')" />
                </div>

            </div>
        </div>
    </section>
</div>
