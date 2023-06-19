<x-app-layout>
    <div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Lista de Alumnos
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Informacion personal de alumnos
                    </p>
                </caption>
                <a href="{{ route('students.create') }}" class="pointer-events-auto rounded-md bg-blue-600 py-2 px-3 font-semibold leading-5 text-white hover:bg-blue-500">Registrar Alumno</a>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Foto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Apellido Paterno
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Apellido Materno
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Correo Electronico
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($students as $student)
                    <tr class="bg-white dark:bg-gray-800">
                        
                            <td class="px-6 py-4">
                                <img class="w-10 h-10 rounded-full" src="{{asset('storage/'.$student->img)}}" alt="Jese image">
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $student->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $student->lastname_p }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $student->lastname_m }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $student->email }}
                            </td>
                       
                        <x-td>
                            <a href="{{route('students.edit', $student->id)}}" class="text-sm font-medium text-gray-900 cursor-pointer" title="editar">
                                ✍️
                            </a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="post" class="inline">
                                @csrf
                                @method('delete')
                                <div class="mt-2">
                                    <button type="submit">✖️</button>
                                </div>
                            </form>
                        </x-td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
