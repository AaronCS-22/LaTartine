<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Proyecto Laravel' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col">

<header class="sticky top-0 left-0 right-0 z-30">
    <input type="checkbox" id="menu-toggler" class="peer hidden">
    <label for="menu-toggler" class="absolute z-40 top-3 left-4 text-3xl text-white cursor-pointer">
        &#9778;
    </label>
    <x-layouts.header />
    <div class="hidden peer-checked:block w-full transition-all duration-300">
        <x-layouts.nav />
    </div>
</header>

<main class="bg-main flex-grow">
    {{ $slot }}
</main>

<x-layouts.footer />
</body>
</html>
