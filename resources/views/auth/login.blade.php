<x-layouts.layout title="Iniciar sesión">
    <!-- Contenedor principal para centrar el formulario -->
    <div class="flex justify-center items-center min-h-screen bg-black">
        <!-- Formulario con fondo oscuro, bordes redondeados y sombra -->
        <form method="POST" action="{{ route('login') }}" class="w-full max-w-lg bg-gray-800 p-8 rounded-xl shadow-lg">
            @csrf

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-sm text-gray-300" :status="session('status')" />

            <!-- Campo de Email -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Email')" class="text-white text-lg" />

                <x-text-input id="email" class="block mt-1 w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                              type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
            </div>

            <!-- Campo de Contraseña -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" class="text-white text-lg" />

                <x-text-input id="password" class="block mt-1 w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                              type="password" name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
            </div>

            <!-- Recordarme -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center text-white">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Enlace para recuperar la contraseña -->
            <div class="flex items-center justify-between mt-6">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <!-- Botón de inicio de sesión -->
                <x-primary-button class="ms-3 w-full bg-green-600 text-white hover:bg-green-700 transition duration-300">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layouts.layout>
