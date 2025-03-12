<x-layouts.layout title="Cambiar contraseña">
    <!-- Contenedor principal para centrar el formulario -->
    <div class="flex justify-center items-center min-h-screen bg-black">
        <!-- Formulario con fondo oscuro, bordes redondeados y sombra -->
        <form method="POST" action="{{ route('password.store') }}" class="w-full max-w-lg bg-gray-800 p-8 rounded-xl shadow-lg">
            @csrf

            <!-- Token de Reseteo de Contraseña -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Campo de Email -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Email')" class="text-white text-lg" />
                <x-text-input id="email" class="block mt-1 w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                              type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
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

            <!-- Botón de Resetear Contraseña -->
            <div class="flex items-center justify-end mt-6">
                <x-primary-button class="w-full bg-green-600 text-white hover:bg-green-700 transition duration-300">
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layouts.layout>
