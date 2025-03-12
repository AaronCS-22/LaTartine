<x-layouts.layout>
    <!-- Contenedor principal para centrar el formulario en el main -->
    <div class="flex justify-center items-center min-h-screen bg-black">
        <!-- El token CSRF que envía correctamente el formulario -->
        <form action="{{ route('tartas.store') }}" method="POST" class="w-full max-w-lg bg-gray-800 p-8 rounded-xl shadow-lg">
            @csrf

            <div class="mb-6">
                <label class="label text-white text-lg">Nombre</label>
                <input type="text" name="nombre" value="{{old('nombre')}}" class="input input-bordered w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" >
                @error("nombre")
                <div class="text-red-600 text-sm mt-1">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="label text-white text-lg">Precio</label>
                <input type="number" name="precio" value="{{old('precio')}}" class="input input-bordered w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" min="0.01" step="0.01">
                @error("precio")
                <div class="text-red-600 text-sm mt-1">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="label text-white text-lg">Imagen</label>
                <input type="text" name="imagen" value="{{old('imagen')}}" class="input input-bordered w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error("imagen")
                <div class="text-red-600 text-sm mt-1">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="label text-white text-lg">Ingredientes</label>
                <input type="text" name="ingredientes" value="{{old('ingredientes')}}" class="input input-bordered w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error("ingredientes")
                <div class="text-red-600 text-sm mt-1">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-6 flex items-center">
                <label class="label text-white text-lg mr-4">Alérgenos</label>
                <input type="checkbox" name="alergenos" value="1" {{ old('alergenos') ? 'checked' : '' }} class="checkbox checkbox-primary">
                @error("alergenos")
                <div class="text-red-600 text-sm mt-1">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="label text-white text-lg">Color</label>
                <input type="color" name="color" value="{{old('color')}}" class="input input-bordered w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error("color")
                <div class="text-red-600 text-sm mt-1">{{$message}}</div>
                @enderror
            </div>

            <!-- Botón de guardar -->
            <button type="submit" class="btn bg-green-600 text-white w-full hover:bg-green-700 transition duration-300">Guardar</button>
        </form>
    </div>
</x-layouts.layout>
