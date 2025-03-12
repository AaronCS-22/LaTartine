<x-layouts.layout title="Verificar correo">
    <!-- Contenedor centrado para el formulario -->
    <div class="flex justify-center items-center min-h-screen bg-black">
        <!-- Formulario con fondo oscuro, bordes redondeados y sombra -->
        <div class="w-full max-w-lg bg-gray-800 p-8 rounded-xl shadow-lg">
            <div class="mb-4 text-sm text-gray-300">
                {{ __('¡Gracias por registrarte! Antes de comenzar, ¿podrías verificar tu dirección de correo electrónico haciendo clic en el enlace que te acabamos de enviar? Si no has recibido el correo, con gusto te enviaremos otro.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionaste durante el registro.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <!-- Botón para re-enviar el correo de verificación -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div>
                        <x-primary-button class="w-full bg-green-600 text-white hover:bg-green-700 transition duration-300">
                            {{ __('Reenviar correo de verificación') }}
                        </x-primary-button>
                    </div>
                </form>

                <!-- Formulario para cerrar sesión -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Cerrar sesión') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout>
