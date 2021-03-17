@include('layout.header')
    <div>
        @if (Route::has('login'))
        <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <livewire:workshop-form />

<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Título</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Categoría</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Fecha</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Requisitos Técnicos</th>
                            <!-- <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Link Taller</th> -->
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Estado del taller</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Personas Inscritas</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($workshops as $workshop)
                        <tr>
                        <td class="px-6 py-4">
                                <div class="text-sm font-medium text-gray-900">{{$workshop->title}}</div>
                                <div class="text-sm text-gray-500">{{$workshop->description}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">{{$workshop->category}}</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">Programado a las:</div>
                                <div class="text-sm text-gray-500">{{$workshop->date}}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{$workshop->technical_requirement}}</div>
                            </td>
                            <!-- <td class="px-6 py-4">
                                <div class="text-sm text-gray-500">{{$workshop->platform_web}}</div>
                            </td> -->
                            <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Aforo de:</div>
                                <div class="text-sm text-gray-500">Inscritos:</div>
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-right">
                                <a href="{{ url('/dashboard/'.$workshop->id.'/edit')}}" name="Edit" class="px-5 mb-2 text-white bg-indigo-600 rounded hover:bg-indigo-900">Editar</a>

                                <form action="{{ route('dashboard.destroy', $workshop->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Borrar" class="px-5 text-white bg-red-600 rounded hover:bg-red-900">
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
@include('layout.footer')
