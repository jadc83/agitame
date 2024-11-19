<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar departamento
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('departamentos.update', $departamento) }}">
                    @method('PUT')
                    @csrf
                    <div>
                        <x-input-label for="codigo" value="Código" />
                        <x-text-input id="codigo" class="block mt-1 w-full" type="codigo" name="codigo" :value="old('codigo', $departamento->codigo)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('codigo')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="denominacion" value="Denominación" />
                        <x-text-input id="denominacion" class="block mt-1 w-full" type="denominacion" name="denominacion" :value="old('denominacion', $departamento->denominacion)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('denominacion')" class="mt-2" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
