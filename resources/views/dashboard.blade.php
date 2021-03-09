<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <livewire:workshop-form />


<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hora</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($workshops as $workshop)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-gray-900">{{$workshop->title}}</div>
                                <div class="text-sm text-gray-500">{{$workshop->description}}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">Programado a las:</div>
                                <div class="text-sm text-gray-500">{{$workshop->hour}}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">Previsto para el día:</div>
                                <div class="text-sm text-gray-500">{{$workshop->date}}</div>
                            </td>
                            <td class="px-6 py-4 text-right text-sm font-medium">
                            <button type="submit" name="Edit" class="px-5 mb-2 bg-indigo-600 hover:bg-indigo-900 text-white rounded">Editar</button>
                            <form action="{{ route('dashboard.destroy', $workshop->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="Delete" class="px-5 bg-red-600 hover:bg-red-900 text-white rounded">Borrar</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</x-app-layout>



