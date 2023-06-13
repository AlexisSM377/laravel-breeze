<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agregar Alumno') }}
        </h2>
    </x-slot>

    <form method="GET" wire:submit.prevent="store">
        @csrf

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
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
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
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
                                <x-text-input id="curp" wire:model="curp" type="text" class="mt-1 block w-full"
                                    :value="old('curp')" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('curp')" />
                            </div>

                            <div>
                                <x-input-label for="img" :value="__('Foto')" />
                                <x-text-input id="{{$identificador}}" wire:model="img" type="file" class="mt-1 block w-full"
                                    :value="old('curp')" required autocomplete="img" />
                                <x-input-error for="img" class="mt-2" :messages="$errors->get('img')" />
                            </div>
                            @if ($img)
                        <img class="mb-4" src="{{$img->temporaryUrl()}}">
                    @endif
                        </div>
                </section>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Domicilio') }}
                        </h2>
                    </header>

                    <!-- <form method="post" action="" class="mt-6 space-y-6">
                        @csrf
                        @method('post') -->

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <x-input-label for="calle" :value="__('Calle')" />
                                <x-text-input id="calle" wire:model="calle" type="text" class="mt-1 block w-full"
                                    :value="old('calle')" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="numero" :value="__('Numero exterior')" />
                                <x-text-input id="numero" wire:model="numero" type="text"
                                    class="mt-1 block w-full" :value="old('numero')" required autocomplete="numero" />
                                <x-input-error class="mt-2" :messages="$errors->get('numero')" />
                            </div>

                            <div>
                                <x-input-label for="cp" :value="__('CP')" />
                                <x-text-input id="cp" wire:model="cp" type="text" class="mt-1 block w-full"
                                    :value="old('cp')" required autocomplete="cp" />
                                <x-input-error class="mt-2" :messages="$errors->get('cp')" />
                            </div>

                            <div>
                                <x-input-label for="estado" :value="__('Estado')" />
                                <x-text-input id="estado" wire:model="estado" type="text"
                                    class="mt-1 block w-full" :value="old('estado')" required autocomplete="estado" />
                                <x-input-error class="mt-2" :messages="$errors->get('estado')" />
                            </div>

                            <div>
                                <x-input-label for="ciudad" :value="__('Cuidad')" />
                                <x-text-input id="ciudad" wire:model="ciudad" type="text"
                                    class="mt-1 block w-full" :value="old('ciudad')" required autocomplete="ciudad" />
                                <x-input-error class="mt-2" :messages="$errors->get('ciudad')" />
                            </div>

                            <div>
                                <x-input-label for="colonia" :value="__('Colonia')" />
                                <x-text-input id="colonia" wire:model="colonia" type="text"
                                    class="mt-1 block w-full" :value="old('colonia')" required autocomplete="colonia" />
                                <x-input-error class="mt-2" :messages="$errors->get('colonia')" />
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>Guardar</x-primary-button>
                        </div>
                    <!-- </form> -->
                </section>
            </div>
        </div>

    </form>
</div>
