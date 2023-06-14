<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Domicilio') }}
            </h2>
        </header>

        <div class="mt-6 space-y-6">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <x-input-label for="calle" :value="__('Calle')" />
                    <x-text-input id="calle" wire:model="calle" type="text" class="mt-1 block w-full"
                        :value="old('calle')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('calle')" />
                </div>

                <div>
                    <x-input-label for="numero" :value="__('Numero exterior')" />
                    <x-text-input id="numero" wire:model="numero" type="text"
                        class="mt-1 block w-full" :value="old('numero')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('numero')" />
                </div>

                <div>
                    <x-input-label for="cp" :value="__('Código Postal')" />
                    <x-text-input id="cp" wire:model="cp" type="text" class="mt-1 block w-full"
                        :value="old('cp')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('cp')" />
                </div>

                <div>
                    <x-input-label for="estado" :value="__('Estado')" />
                    <x-text-input id="estado" wire:model="estado" type="text"
                        class="mt-1 block w-full" :value="old('estado')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('estado')" />
                </div>

                <div>
                    <x-input-label for="ciudad" :value="__('Cuidad')" />
                    <x-text-input id="ciudad" wire:model="ciudad" type="text"
                        class="mt-1 block w-full" :value="old('ciudad')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('ciudad')" />
                </div>

                <div>
                    <x-input-label for="colonia" :value="__('Colonia')" />
                    <x-text-input id="colonia" wire:model="colonia" type="text"
                        class="mt-1 block w-full" :value="old('colonia')"/>
                    <x-input-error class="mt-2" :messages="$errors->get('colonia')" />
                </div>
            </div>
        </div>
    </section>
</div>