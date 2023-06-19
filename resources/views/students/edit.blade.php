<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Agregar Alumno') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <form method="post" action="{{ route('students.update', $student->id) }}" class="mt-6 space-y-6"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <!-- INFORMACION PERSONAL DE ALUMNO -->
                    @include('students.partials.informacion-personal')
                    <!-- IBNFORMACION DE DOMICILIO DE ALUMNO -->
                    @include('students.partials.domicilio')
                    <div class="flex items-center gap-4">
                        <x-primary-button>Actualizar</x-primary-button>

                        @if (session('status') === 'profile-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script >
        const estadoSelect = document.querySelector('.estado');
        const municipioSelect = document.getElementById('mySelectMunicipio');
        estadoSelect.addEventListener('change', (event) =>  {
            console.log('Hola');
            let id = document.getElementById("mySelectEstado").value
            fetch('http://127.0.0.1:8000/municipios-estados/' +id)
            .then((response) => response.json())
            .then((json) => this.generarmunicipios(json));
        });
    
        function generarmunicipios(data){
            document.getElementById("mySelectMunicipio").innerHTML = "";
            data.forEach(function(element) {
                let opcion = document.createElement('option')
                opcion.value = element.id
                opcion.text = element.nombre
                municipioSelect.add(opcion)
            })
        }
    </script>
</x-app-layout>
