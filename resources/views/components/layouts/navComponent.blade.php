<a href="{{ route(($ruta ?? 'home')) }} "
   class="flex text-black items-center justify-center p-2 lg:p-4 w-full flex-grow" style="background:{{ $color ?? '#FFFFFF' }}">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">

        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $svg ?? '' }}"/>
    </svg>
    <span class="ml-2">{{ $titulo ?? 'Home' }}</span>
</a>
