<div class="bg-gray-100 p-5 mt-10 flex justify-center flex-col items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

    <form action="" class="w-96 mt-5">
        <div class="mb-4">
            <x-label for="cv" :value="__('Curriculum u hoja de vida (PDF)')" />
            <x-input id="cv" type="file" accept=".pdf" class="block mt-1 w-full" />
        </div>

        <x-button class="my-5">
            {{__('Postularme')}}
        </x-button>
    </form>
</div>
