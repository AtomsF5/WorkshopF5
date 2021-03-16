<div>
    <div class="w-auto md:w-96 lg:w-96 ">
        <label for="title" class="form-label my-2" for="title">
            Título
        </label>
        <input class="form-control" value="{{$workshop->title}}" name="title" id="title" placeholder="Ingrese un Titulo">
    </div>
    <div class="w-auto md:w-96 lg:w-96 ">
        <label for="category" class="form-label my-2" for="category">
            Categoría
        </label>
        <input class="form-control"  value="{{$workshop->category}}" name="category" id="category" placeholder="Ingrese un Categoria">
    </div>
    <div>
        <label for="description" class="form-label my-2" for="description">
            Descripción
        </label>
        <textarea class="form-control"  name="description" id="description" placeholder="Ingrese una Description">{{$workshop->description}}</textarea>
    </div>
    <div>
        <label for="date" class="form-label my-2" for="date">
            Fecha:
            {{$workshop->date}}
        </label>
        <input type="dateTime-local" class="form-control"  name="date" id="date" placeholder="Ingrese un fecha">
    </div>
    <div>
        <label for="image" class="form-label my-2" for="image">
            URL imagen
        </label>
        <input type="url" class="form-control" value="{{$workshop->image}}"  name="image" id="image" placeholder="URL imagen">
    </div>
    <div>
        <label for="platform_web" class="form-label my-2" for="date">
            URL Página
        </label>
        <input type="url" class="form-control" value="{{$workshop->platform_web}}"  name="platform_web" id="url" placeholder="URL Pagina">
    </div>
    {{-- <div>
        <label for="status" class="form-label my-2" for="status">
            Estado
        </label>
        <select name="status" class="form-control" name="status" id="status">
            <option>
                Activo
            </option>
            <option>
                Desactivado
            </option>
        </select>
    </div> --}}
    <div class="flex justify-between">
        <button class="bg-red-500 hover:bg-red-700 border-red-700 hover:text-white p-2 my-2 rounded">Cancelar</button>
        <input type="submit" value="Guardar" class="bg-green-500 hover:bg-green-700 border-green-700 hover:text-white p-2 my-2 rounded">
    </div>
</div>







{{-- <div class="w-full">
    <div class="flex items-center justify-center">
        <button  class="modal-button transition mt-4 block p-3 mx-auto bg-vermilion-500 text-alabaster-500 rounded w-40 text-center"> Crear Taller </button>
    </div>
    <div class="modal delay-25 opacity-0 pointer-events-none absolute w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-black opacity-25 top-0 left-0 cursor-pointer">
        </div>
        <div class="absolute shadow-lg flex items-center justify-center ">
            <div class="bg-white rounded-lg shadow overflow-hidden  mx-auto p-4">
                <form action="{{ url('/dashboard') }}" method="post">
                    @csrf
            </form>
        </div>
    </div>
</div> --}}
