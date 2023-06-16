<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Nuevo alumno creado
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 dark:bg-gray-800 shadow sm:rounded-lg"> {{-- Fondo del formulario --}}
                <div class="max-w-xl">
                    
                    <!-- Aqui ira siempre el formulario de la seccion que estas creando -->
                    <section>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            ¡Nuevo alumno creado!
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            A continuación se muestran los detalles del Alumno
                        </p>
                        <ul>
                            <li>Nombre: {{ $name }}</li>
                            <li>Apelido Paterno: {{ $lastname_p }}</li>
                            <li>Apellido materno: {{ $lastname_m }}</li>
                            <li>Correo Electronico: {{ $email }}</li>
                        </ul>
                        <p>¡Gracias por utilizar nuestra aplicación!</p>  
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
