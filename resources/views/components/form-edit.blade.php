<div class="w-5/6 pt-20 mx-auto">

        <h1 class="p-10 text-3xl font-extrabold text-center font-poppins text-vermilion-500">Formulario para editar el taller: </br> {{$workshop->title}}</h1>

        <label for="title" class="my-2 form-label" for="title">
            Título
        </label>
        <input class="form-control" value="{{$workshop->title}}" name="title" id="title" placeholder="Ingrese un Titulo">


        <label for="category" class="my-2 form-label" for="category">
            Categoría
        </label>
        <select name="category" id="category" class="form-control" value="category">
            <option>Individual</option>
            <option>Grupal</option>
        </select>


        <label for="description" class="my-2 form-label" for="description">
            Descripción
        </label>
        <textarea class="form-control"  name="description" id="description" placeholder="Ingrese una Description">{{$workshop->description}}</textarea>


        <label for="date" class="my-2 form-label" for="date">
            Fecha:
            {{$workshop->date}}
        </label>
        <input type="dateTime-local" class="form-control"  name="date" id="date" placeholder="Ingrese un fecha">


        <label for="image" class="my-2 form-label" for="image">
            URL imagen
        </label>
        <input type="url" class="form-control" value="{{$workshop->image}}"  name="image" id="image" placeholder="URL imagen">


        <label for="platform_web" class="my-2 form-label" for="date">
            URL Página
        </label>
        <input type="url" class="form-control" value="{{$workshop->platform_web}}"  name="platform_web" id="url" placeholder="URL Pagina">



        {{-- <button class="p-2 my-2 bg-red-500 border-red-700 rounded hover:bg-red-700 hover:text-white">Cancelar</button> --}}
        <input type="submit" value="Guardar" class="p-2 my-2 bg-green-500 border-green-700 rounded hover:bg-green-700 hover:text-white">

</div>






