<div x-data="{
            showModal: false,
        }">
        <button
            class="block w-40 p-3 mx-auto mt-4 text-center transition rounded bg-vermilion-500 text-alabaster-500"
            x-on:click="showModal= true"
        >
            Crear Taller
        </button>

    <x-modal 
        trigger="showModal"
        
        >
        <form action="{{ url('/dashboard') }}" method="POST" >
            @csrf
            <div class="w-auto md:w-96 lg:w-96 ">
                <label for="title" class="my-2 form-label">
                    Título
                </label>
                <input class="form-control" name="title" id="title" placeholder="Introduzca un Título">
            </div>
            <div class="w-auto md:w-96 lg:w-96 ">
                <label for="category" class="my-2 form-label">
                    Categoría
                </label>
                <select name="category" id="category" class="form-control">
                    <option>Individual</option>
                    <option>Grupal</option>
                </select>
                {{-- <input class="form-control" name="category" id="category" placeholder="Introduzca un categoría"> --}}
            </div>
            <div>
                <label for="description" class="my-2 form-label" >
                    Descripción
                </label>
                <textarea class="form-control" name="description" id="description" placeholder="Introduzca una Descripción"></textarea>
            </div>
            <div>
                <label for="date" class="my-2 form-label">
                    Fecha
                </label>
                <input type="dateTime-local" class="form-control" name="date" id="date" placeholder="Introduzca un Titulo">
            </div>
            <div>
                <label for="technical_requirement" class="my-2 form-label">
                    Requsitos Técnicos
                </label>
                <input type="text" class="form-control" name="technical_requirement" id="technical_requirement" placeholder="Introduzca Requisitos Técnicos">
            </div>
            <div>
                <label for="image" class="my-2 form-label">
                    URL imagen
                </label>
                <input type="url" class="form-control" name="image" id="image" placeholder="Introduzca URL de la Imagen">
            </div>
            <div>
                <label for="platform_web" class="my-2 form-label">
                    URL Página
                </label>
                <input type="url" class="form-control" name="platform_web" id="url" placeholder="Introduzca URL de la Página">
            </div>

            <div class="flex justify-between">
                {{-- <button class="p-2 my-2 bg-red-500 border-red-700 rounded hover:bg-red-700 hover:text-white">Cancelar</button> --}}
                <input
                    type="submit"
                    value="Aceptar"
                    class="p-2 my-2 bg-green-500 border-green-700 rounded hover:bg-green-700 hover:text-white"

                    >
            </div>
        </form>
    </x-modal>

</div>

