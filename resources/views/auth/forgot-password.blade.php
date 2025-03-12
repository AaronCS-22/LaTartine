<x-layouts.layout title="Contraseña olvidada">
    <!-- Contenedor principal para centrar el formulario -->
    <div class="flex justify-center items-center min-h-screen bg-black">
        <!-- Formulario con fondo oscuro, bordes redondeados y sombra -->
        <form method="POST" action="{{ route('password.email') }}" class="w-full max-w-lg bg-gray-800 p-8 rounded-xl shadow-lg">
            @csrf

            <!-- Instrucciones -->
            <div class="mb-6 text-sm text-gray-300">
                {{ __('¿Olvidaste tu contraseña? No hay problema. Solo déjanos tu dirección de correo electrónico y te enviaremos un enlace para restablecer la contraseña que te permitirá elegir una nueva.') }}
            </div>

            <!-- Estado de la sesión -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Campo de Email -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Correo electrónico')" class="text-white text-lg" />

                <x-text-input id="email" class="block mt-1 w-full bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                              type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
            </div>

            <!-- Botón de enviar enlace para restablecer la contraseña -->
            <div class="flex justify-end mt-4">
                <x-primary-button class="w-full bg-green-600 text-white hover:bg-green-700 transition duration-300">
                    {{ __('Enviar enlace para restablecer la contraseña') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-layouts.layout>
