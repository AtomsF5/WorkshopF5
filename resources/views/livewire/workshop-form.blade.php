<div>
    {{-- Stop trying to control. --}}
    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6">
        <form action="">
            <div>
                <label class="form-label mb-2" for="title">
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





09:46
.form-label{
    @apply block uppercase text-gray-700 text-xs font-bold;
}
.form-control{
    @apply block w-full bg-gray-200 px-4 py-3 rounded text-gray-700   border border-gray-200;
}
.form-control:focus{
    @apply bg-white outline-none  border-gray-500;
}


</div>
