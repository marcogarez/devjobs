<form action="" class="md:w-1/2 space-y-5" enctype="multipart/form-data" wire:submit.prevent="crearVacante">
    <div class="mt-4">
        <x-label for="titulo" :value="__('Título')" />

        <x-input id="titulo" wire:model="titulo" class="block mt-1 w-full" type="text" value="{{ old('titulo') }}"
            placeholder="Título de la vacante" />
        @error('titulo')
            {{$message}}
        @enderror
    </div>
    <div class="mt-4">
        <x-label for="salario" :value="__('Salario mensual')" />

        <select id="salario" wire:model="salario"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option>-- Selecciona --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-4">
        <x-label for="categoria" :value="__('Categoría')" />

        <select id="categoria" wire:model="categoria"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option>-- Selecciona --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-4">
        <x-label for="empresa" :value="__('Empresa')" />

        <x-input id="empresa" wire:model="empresa" class="block mt-1 w-full" type="text" value="{{ old('empresa') }}"
            placeholder="Ej. Netflix, Uber, Shopify" />
    </div>
    <div class="mt-4">
        <x-label for="ultimo_dia" :value="__('Último día para postularse')" />

        <x-input id="ultimo_dia" wire:model="ultimo_dia" class="block mt-1 w-full" type="date" value="{{ old('ultimo_dia') }}" />
    </div>
    <div class="mt-4">
        <x-label for="descripcion" :value="__('Descripción del puesto')" />

        <textarea id="descripcion" wire:model="descripcion" placeholder="Descripción general del puesto, experiencia, etc." class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-24">{{ old('descripcion') }}</textarea>
    </div>
    <div class="mt-4">
        <x-label for="imagen" :value="__('Imagen')" />

        <x-input id="imagen" wire:model="imagen" class="block mt-1 w-full" type="file" />
    </div>

    <x-button>
        Crear vacante
    </x-button>
</form>
