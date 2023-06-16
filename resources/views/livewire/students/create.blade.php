<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agregar Alumno') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- INFORMACION PERSONAL DE ALUMNO -->
            @include('livewire.students.partials.informacion-personal')
            <!-- IBNFORMACION DE DOMICILIO DE ALUMNO -->
            @include('livewire.students.partials.domicilio')
            
            <div class="mt-6 text-right" >
                <x-primary-button wire:click.prevent="store()">Guardar</x-primary-button>
            </div>
        </div>
    </div>
</div>
