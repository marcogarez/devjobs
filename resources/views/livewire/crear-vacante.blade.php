<form action="" class="md:w-1/2 space-y-5" enctype="multipart/form-data">
    <div class="mt-4">
        <x-label for="titulo" :value="__('Título')" />

        <x-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" value="{{ old('titulo') }}"
            placeholder="Título de la vacante" />
    </div>
    <div class="mt-4">
        <x-label for="salario" :value="__('Salario mensual')" />

        <select name="salario" id="salario"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
        </select>
    </div>
    <div class="mt-4">
        <x-label for="categoria" :value="__('Categoría')" />

        <select name="categoria" id="categoria"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
        </select>
    </div>
    <div class="mt-4">
        <x-label for="empresa" :value="__('Empresa')" />

        <x-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" value="{{ old('empresa') }}"
            placeholder="Ej. Netflix, Uber, Shopify" />
    </div>
    <div class="mt-4">
        <x-label for="ultimo_dia" :value="__('Último día para postularse')" />

        <x-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" value="{{ old('ultimo_dia') }}" />
    </div>
    <div class="mt-4">
        <x-label for="descripcion" :value="__('Descripción del puesto')" />

        <textarea id="descripcion" placeholder="Descripción general del puesto, experiencia, etc." class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-24" name="descripcion">{{ old('descripcion') }}</textarea>
    </div>
    <div class="mt-4">
        <x-label for="imagen" :value="__('Imagen')" />

        <x-input id="imagen" class="block mt-1 w-full" type="file" name="imagen" />
    </div>

    <x-button>
        Crear vacante
    </x-button>
</form>
