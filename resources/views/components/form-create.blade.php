<div>
    <div class="w-auto md:w-96 lg:w-96 ">
        <label for="title" class="form-label my-2" for="title">
            Título
        </label>
        <input class="form-control"  name="title" id="title" placeholder="Ingrese un Titulo">
    </div>
    <div class="w-auto md:w-96 lg:w-96 ">
        <label for="category" class="form-label my-2" for="category">
            Categoría
        </label>
        <input class="form-control"  name="category" id="category" placeholder="Ingrese un Categoria">
    </div>
    <div>
        <label for="description" class="form-label my-2" for="description">
            Descripción
        </label>
        <textarea class="form-control"  name="description" id="description" placeholder="Ingrese una Description"></textarea>
    </div>
    <div>
        <label for="date" class="form-label my-2" for="date">

        </label>
        <input type="dateTime-local" class="form-control"  name="date" id="date" placeholder="Ingrese un fecha">
    </div>
    <div>
        <label for="image" class="form-label my-2" for="image">
            URL imagen
        </label>
        <input type="url" class="form-control"  name="image" id="image" placeholder="URL imagen">
    </div>
    <div>
        <label for="platform_web" class="form-label my-2" for="date">
            URL Página
        </label>
        <input type="url" class="form-control"  name="platform_web" id="url" placeholder="URL Pagina">
    </div>

    <div class="flex justify-between">
        <button class="bg-red-500 hover:bg-red-700 border-red-700 hover:text-white p-2 my-2 rounded">Cancelar</button>
        <input type="submit" value="Guardar" class="bg-green-500 hover:bg-green-700 border-green-700 hover:text-white p-2 my-2 rounded">
    </div>
</div>



