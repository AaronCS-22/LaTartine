<x-layouts.layout title="Nuestras tartas">
    <div class="pagina-principal-imagen">
        <div class="pagina-principal-imagen-texto">Nuestras tartas</div>
        <div class="scroll-icon">&#94;</div>
    </div>

    <div class="p-16">
        @if (session()->has("status"))
            <div role="alert" class="alert w-full alert-success mb-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 shrink-0 stroke-current"
                    fill="none"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{session()->get("status")}}</span>
            </div>
        @endif
    @auth
        <a class="w-full text-[16px] text-center mb-6 btn btn-warning" href="{{route("tartas.create")}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Añadir tarta
        </a>
    @endauth
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-16">
        @foreach($tartas as $tarta)
            <x-templates.tarjeta
                tipoTarjeta="tartas"
                id="{{$tarta->id}}"
                titulo="{{$tarta->nombre}}"
                color="{{$tarta->color}}"
                imagen="{{$tarta->imagen}}"
                descripcion="<b>Ingredientes:</b> {{$tarta->ingredientes}}<br><b>Precio:</b> {{ str_replace('.', '\'', $tarta->precio) }}&euro;<br><b>Alérgenos:</b> {{$tarta->alergenos}}"
            />
        @endforeach
    </div>
    </div>
</x-layouts.layout>
