<x-layouts.layout>
        <!-- Es el tocken CSRF que envia correctamente el formulario -->

    {{--
        "nombre"=>"required|string|min:3|max:25",
            "precio"=>"required|numeric|min:0.01|max:999.99",
            "imagen"=>"string|nullable",
            "color"=>"string|nullable",
            "ingredientes"=>"required|string|min:3|max:2500",
            "alergenos"=>"boolean",
    --}}
        <form action="{{ route('tartas.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="label">Nombre</label>
                <input type="text" name="nombre" value="{{old('nombre')}}" class="input input-bordered w-full" >
                @error("nombre")
                <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="label">Precio</label>
                <input type="number" name="precio" value="{{old('precio')}}" class="input input-bordered w-full" min="0.01" step="0.01">
                @error("precio")
                <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror

            </div>
            <div class="mb-4">
                <label class="label">Imagen</label>
                <input type="text" name="imagen" value="{{old('imagen')}}" class="input input-bordered w-full">
                @error("imagen")
                <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="label">Ingredientes</label>
                <input type="text" name="ingredientes" value="{{old('ingredientes')}}" class="input input-bordered w-full">
                @error("ingredientes")
                <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="label">Alérgenos</label>
                <input type="checkbox" name="alergenos" value="1" {{ old('alergenos') ? 'checked' : '' }} class="input input-bordered">
                @error("alergenos")
                <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="label">Color</label>
                <input type="color" name="color" value="{{old('color')}}" class="input input-bordered w-full">
                @error("color")
                <div class="text-red-600 text-sm">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn bg-green-600 text-white w-full">Guardar</button>
        </form>
</x-layouts.layout>
