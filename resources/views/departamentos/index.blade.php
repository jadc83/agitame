<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-white text-center uppercase bg-blue-700 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Código
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Denominación
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Localidad
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departamentos as $departamento)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $departamento->codigo }}
                                        </th>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('departamentos.show', $departamento) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                {{ $departamento->denominacion }}
                                            </a>
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $departamento->localidad }}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6 text-right">
                        <a href="{{ route('departamentos.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Nuevo departamento
                        </a>
                    </div>

                </div>
            </div>
        </div>


    </div>
</x-app-layout>
