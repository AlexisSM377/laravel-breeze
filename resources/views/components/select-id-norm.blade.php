@props(['nombre', 'etiqueta', 'registro'=>'', 'valor'=>'', 'eleccion'=>''])

<div class="my-8">
    <label for="{{$nombre}}" class="text-lg block mb-2 font-bold">{{$etiqueta}}</label>
    <select name="{{$nombre}}" class="w-full">
        @foreach ($registro as $campo)
            <option value="{{ $campo->id }}" {{ ($eleccion==$campo->id) ? 'selected' : null }}>{{ $campo->$valor }}</option>
        @endforeach
    </select>
</div>