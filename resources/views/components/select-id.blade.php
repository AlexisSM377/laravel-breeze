@props(['etiqueta','titulo', 'name', 'list', 'value'=>'0'])

<div class="">
    <label for="{{$name}}" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{$titulo}}</label>
    <select name="{{$name}}" {{$attributes->merge(['class'=>'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full mt-1'])}}>
        <option value="" >{{$etiqueta}}</option>
        @foreach ($list as $campo)
            <option value="{{ $campo->id }}" {{($campo->id == $value) ? 'selected' : null}} >{{ $campo->nombre }}</option>
        @endforeach
    </select>
</div>
