<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
        <div>

            <table id="t01">
                <tr>
                  <th>Título</th>
                  <th>Descripción</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Requisitos Técnicos</th>
                </tr>
                <tr>
                  <td>""</td>
                  <td>""</td>
                  <td>""</td>
                  <td>""</td>
                  <td>""</td>
                </tr>
              </table>

        </div>
    </div>
</x-app-layout>
