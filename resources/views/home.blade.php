<x-layouts.layout title="Página principal">
    @guest
        Contenido sin identificación
    @endguest
    @auth
        <h1>Contenido con identificación</h1>
    @endauth
</x-layouts.layout>
