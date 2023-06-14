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
            <div wire:loading wire:target="image"
                class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                role="alert">
                <strong class="font-bold">Imagen cargando!</strong>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" wire:model="name" type="text" class="mt-1 block w-full"
                        :value="old('name')" required autofocus autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="apellidop" :value="__('Apellido Paterno')" />
                    <x-text-input id="apellidop" wire:model="apellidop" type="text"
                        class="mt-1 block w-full" :value="old('apellidop')" required autocomplete="apellidop" />
                    <x-input-error class="mt-2" :messages="$errors->get('apellidop')" />
                </div>

                <div>
                    <x-input-label for="apellidom" :value="__('Apellido materno')" />
                    <x-text-input id="apellidom" wire:model="apellidom" type="text"
                        class="mt-1 block w-full" :value="old('apellidom')" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('apellidom')" />
                </div>

                <div>
                    <x-input-label for="email" :value="__('Correo Electrónico')" />
                    <x-text-input id="email" wire:model="email" type="email" class="mt-1 block w-full"
                        :value="old('email')" required autocomplete="email" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <div>
                    <x-input-label for="phone" :value="__('Teléfono')" />
                    <x-text-input id="phone" wire:model="phone" type="text" class="mt-1 block w-full"
                        :value="old('phone')" required autocomplete="phone" />
                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                </div>

                <div>
                    <x-input-label for="nacimiento" :value="__('Fecha de nacimiento')" />
                    <x-text-input id="nacimiento" wire:model="nacimiento" type="date"
                        class="mt-1 block w-full" :value="old('nacimiento')" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('nacimiento')" />
                </div>

                <div>
                    <x-input-label for="genero" :value="__('Genero')" />
                    <x-text-input id="genero" wire:model="genero" type="text"
                        class="mt-1 block w-full" :value="old('genero')" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('genero')" />
                </div>

                <div>
                    <x-input-label for="curp" :value="__('CURP')" />
                    <x-text-input id="curp" wire:model="curp" type="text" class="mt-1 block w-full uppercase"
                        :value="old('curp')" required autocomplete="curp" />
                    <x-input-error class="mt-2" :messages="$errors->get('curp')" />
                </div>

                <div>
                    <x-input-label for="img" :value="__('Foto')" />
                    <x-text-input id="img" wire:model="img" type="file" class="mt-1 block w-full"
                        :value="old('img')" required autocomplete="img" />
                    <x-input-error for="img" class="mt-2" :messages="$errors->get('img')" />
                </div>
                @if ($img)
                    <img class="mb-4" src="{{$img->temporaryUrl()}}">
                @endif
            </div>
        </div>
    </section>
</div>