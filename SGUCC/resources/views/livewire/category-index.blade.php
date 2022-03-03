<div class="container py-2">

    <div class="mb-6 bg-white rounded-lg shadow-lg">
        <div class="flex items-center justify-between px-6 py-2">
            <h1 class="font-bold text-gray-700 uppercase">{{$category->name}}</h1>

            <div class="grid grid-cols-2 text-gray-500 border border-gray-200 divide-x divide-gray-200">
                <i class="fas fa-border-all p-3 cursor-pointer {{ $view == 'grid' ? 'text-yellow-600' : ''}}"
                    wire:click="$set('view', 'grid')"></i>
                <i class="fas fa-th-list p-3 cursor-pointer {{ $view == 'list' ? 'text-yellow-600' : ''}}"
                    wire:click="$set('view', 'list')"></i>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
        <aside >
            <h1 class="mb-2 text-xl font-semibold text-center">Formularios</h2>
            <ul class="divide-y divide-gray-200">


            </ul>
            <x-jet-button class="mt-4" wire:click="limpiar">
                Eliminar Filtro
            </x-jet-button>
        </aside>
        <div class="md:col-span-2 lg:col-span-4">
            @if($view=='grid')

            <ul class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">


            </ul>
            @else
            <ul>

            </ul>
            @endif
            <div class="mt-4">

            </div>
        </div>

    </div>

</div>


