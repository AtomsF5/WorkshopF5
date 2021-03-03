<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
<div>
    {{-- Stop trying to control. --}}
    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6">
        <form action="">
            <div>
                <label class="form-labelmb-2" for="title">
                    Titulo
                </label>
                <input class="form-control" id="title" placeholder="Ingrese un Titulo">
            </div>
            <div>
                <label class="form-label mb-2" for="image">
                    Imagen
                </label>
                <input type="url" class="form-control" id="image" placeholder="Url Imagen">
            </div>
            <div>
                <label class="form-label mb-2" for="description">
                    Descripcion
                </label>
                <textarea class="form-control" id="description" placeholder="Ingrese una description"></textarea>
            </div>
            <div>
                <label class="form-label mb-2" for="date">
                    Fecha
                </label>
                <input type="date" class="form-control" id="date" placeholder="Ingrese un Titulo">
            </div>
            <div>
                <label class="form-label mb-2" for="status">
                    Estado
                </label>
                <select name="status" class="form-control" id="status">
                    <option>
                        Activo
                    </option>
                    <option>
                        Desactivado
                    </option>
                </select>
            </div>
        </form>
    </div>

</div>
