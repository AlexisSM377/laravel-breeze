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
            <div class="mt-6 text-right">
                <div class="text-gray-300 my-3" x-data="{ shown: false, timeout: null }" x-init="@this.on('actualizado', () => { clearTimeout(timeout);
                    shown = true;
                    timeout = setTimeout(() => { shown = false }, 2000); })" x-show.transition.out.opacity.duration.1500ms="shown"
                    x-transition:leave.opacity.duration.1500ms style="display: none;"
                    >
                    Actualizado Correctamente
                </div>
                <x-primary-button wire:click.prevent="update()">Actualizar</x-primary-button>
            </div>
        </div>
    </div>
</div>
