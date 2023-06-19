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
                    <x-text-input id="street" name="street" type="text" class="mt-1 block w-full"
                        :value="old('street', $student->home->street ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('street')" />
                </div>

                <div>
                    <x-input-label for="no_ext" :value="__('Numero exterior')" />
                    <x-text-input id="no_ext" name="no_ext" type="number" class="mt-1 block w-full"
                        :value="old('no_ext', $student->home->no_ext ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('no_ext')" />
                </div>

                <div>
                    <x-input-label for="cp" :value="__('Código Postal')" />
                    <x-text-input id="cp" name="cp" type="number" class="mt-1 block w-full"
                        :value="old('cp', $student->home->cp ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('cp')" />
                </div>
            
                <div>
                    <x-select-id etiqueta="Selecciona un Estado" class="estado" titulo="Estados"  id="mySelectEstado" name="stateId" :list="$states"  :value="old('stateId', $student->home->state_id ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('stateId')" />
                </div>

                <div>
                    <x-select-id etiqueta="Selecciona una Ciudad" titulo="Ciudades"  name="city_id" :list="$cities"  :value="old('city_id', $student->home->city_id ?? '')"  id="mySelectMunicipio"/>
                    <x-input-error class="mt-2" :messages="$errors->get('city_id')"  />
                </div>
                

                <div>
                    <x-input-label for="cologne" :value="__('Colonia')" />
                    <x-text-input id="cologne" name="cologne" type="text" class="mt-1 block w-full"
                        :value="old('cologne', $student->home->cologne ?? '')" />
                    <x-input-error class="mt-2" :messages="$errors->get('cologne')" />
                </div>
            </div>
        </div>
    </section>
</div>
