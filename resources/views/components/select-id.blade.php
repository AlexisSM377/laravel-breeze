@props(['etiqueta', 'nombre', 'list', 'definition', 'value'=>'0'])

<div class="my-8">
    <label for="{{$nombre}}" class="text-lg block mb-2 font-bold">{{$etiqueta}}</label>
    <select name="{{$nombre}}" {{$attributes->merge(['class'=>'shadow-2xl rounded-lg p-2 w-full border-slate-300'])}}>
        @foreach ($list as $campo)
            <option value="{{ $campo->$definition->id }}" {{($campo->$definition->id == $value) ? 'selected' : null}} >{{ $campo->$definition->name }}</option>
        @endforeach
    </select>
</div>
