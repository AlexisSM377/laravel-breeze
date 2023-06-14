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
                    <x-input-label for="street" :value="__('Calle')" />
                    <x-text-input id="street" wire:model="street" type="text" class="mt-1 block w-full"
                        :value="old('street')" />
                    <x-input-error class="mt-2" :messages="$errors->get('street')" />
                </div>

                <div>
                    <x-input-label for="no_ext" :value="__('Numero exterior')" />
                    <x-text-input id="no_ext" wire:model="no_ext" type="number" class="mt-1 block w-full"
                        :value="old('no_ext')" />
                    <x-input-error class="mt-2" :messages="$errors->get('no_ext')" />
                </div>

                <div>
                    <x-input-label for="cp" :value="__('Código Postal')" />
                    <x-text-input id="cp" wire:model="cp" type="number" class="mt-1 block w-full"
                        :value="old('cp')" />
                    <x-input-error class="mt-2" :messages="$errors->get('cp')" />
                </div>

                <div>
                    <x-input-label for="state_id" :value="__('Estado')" />
                    <x-text-input id="state_id" wire:model="state_id" type="text" class="mt-1 block w-full"
                        :value="old('state_id')" />
                    <x-input-error class="mt-2" :messages="$errors->get('state_id')" />
                </div>

                <div>
                    <x-input-label for="city_id" :value="__('Cuidad')" />
                    <x-text-input id="city_id" wire:model="city_id" type="text" class="mt-1 block w-full"
                        :value="old('city_id')" />
                    <x-input-error class="mt-2" :messages="$errors->get('city_id')" />
                </div>

                <div>
                    <x-input-label for="cologne" :value="__('Colonia')" />
                    <x-text-input id="cologne" wire:model="cologne" type="text" class="mt-1 block w-full"
                        :value="old('cologne')" />
                    <x-input-error class="mt-2" :messages="$errors->get('cologne')" />
                </div>
            </div>
        </div>
    </section>
</div>
