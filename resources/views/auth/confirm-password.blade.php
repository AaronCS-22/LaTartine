<x-layouts.layout title="Confirmar contraseña">
    <!-- Contenedor principal para centrar el formulario -->
    <div class="flex justify-center items-center min-h-screen bg-black">
        <!-- Formulario con fondo oscuro, bordes redondeados y sombra -->
        <form method="POST" action="{{ route('password.confirm') }}" class="w-full max-w-lg bg-gray-800 p-8 rounded-xl shadow-lg">
            @csrf

            <!-- Instrucciones -->
            <div class="mb-6 text-sm text-gray-300">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <!-- Campo de contraseña -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" class="text-white text-lg" />

                <x-text-input id="password" class="block mt-1 w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
            </div>

            <!-- Botón de confirmación -->
            <div class="flex justify-end mt-4">
                <x-primary-button class="w-full bg-green-600 text-white hover:bg-green-700 transition duration-300">
                    {{ __('Confirm') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layouts.layout>
