<x-layouts.layout title="Registrarse">
    <!-- Contenedor principal para centrar el formulario -->
    <div class="flex justify-center items-center min-h-screen bg-black">
        <!-- Formulario con fondo oscuro, bordes redondeados y sombra -->
        <form method="POST" action="{{ route('register') }}" class="w-full max-w-lg bg-gray-800 p-8 rounded-xl shadow-lg">
            @csrf

            <!-- Campo de Nombre -->
            <div class="mb-6">
                <x-input-label for="name" :value="__('Name')" class="text-white text-lg" />
                <x-text-input id="name" class="block mt-1 w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                              type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-600" />
            </div>

            <!-- Campo de Email -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Email')" class="text-white text-lg" />
                <x-text-input id="email" class="block mt-1 w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                              type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
            </div>

            <!-- Campo de Contraseña -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" class="text-white text-lg" />
                <x-text-input id="password" class="block mt-1 w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                              type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
            </div>

            <!-- Confirmar Contraseña -->
            <div class="mb-6">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white text-lg" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                              type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
            </div>

            <!-- Enlace para redirigir al inicio de sesión y botón de registro -->
            <div class="flex items-center justify-between mt-6">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <!-- Botón de registro -->
                <x-primary-button class="ms-4 w-full bg-green-600 text-white hover:bg-green-700 transition duration-300">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layouts.layout>
