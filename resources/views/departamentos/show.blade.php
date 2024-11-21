<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver departamento
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Código
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $departamento->codigo }}
                            </dd>
                        </div>
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Denominación
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $departamento->denominacion }}
                            </dd>
                        </div>
                        <div class="flex flex-col pt-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Localidad
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $departamento->localidad }}
                            </dd>
                        </div>
                    </dl>
                </div>
                <div class="flex w-11/12 justify-end my-4 mx-8">
                    <a href="{{ route('departamentos.edit', $departamento) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        <form method="POST" action="{{ route('departamentos.destroy', $departamento) }}">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('departamentos.destroy', $departamento) }}"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3"
                                onclick="event.preventDefault(); if (confirm('¿Está seguro?')) this.closest('form').submit();">
                                Eliminar
                            </a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
