
<div class="w-full">
    <div class="flex items-center justify-center">
        <button  class="modal-button transition mt-4 block p-3 mx-auto bg-vermilion-500 text-alabaster-500 rounded w-40 text-center"> Crear Taller </button>
    </div>
    <div class="modal delay-25 opacity-0 pointer-events-none absolute w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-black opacity-25 top-0 left-0 cursor-pointer">
        </div>
        <div class="absolute shadow-lg flex items-center justify-center ">
            <div class="bg-white rounded-lg shadow overflow-hidden  mx-auto p-4">
                <div class="w-auto md:w-96 lg:w-96 ">
                    <label class="form-label my-2" for="title">
                        Titulo
                    </label>
                    <input class="form-control" id="title" placeholder="Ingrese un Titulo">
                </div>
                <div>
                    <label class="form-label my-2" for="image">
                        Imagen
                    </label>
                    <input type="url" class="form-control" id="image" placeholder="Url Imagen">
                </div>
                <div>
                    <label class="form-label my-2" for="description">
                        Descripcion
                    </label>
                    <textarea class="form-control" id="description" placeholder="Ingrese una description"></textarea>
                </div>
                <div>
                    <label class="form-label my-2" for="date">
                        Fecha
                    </label>
                    <input type="date" class="form-control" id="date" placeholder="Ingrese un Titulo">
                </div>
                <div>
                    <label class="form-label my-2" for="status">
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
                <div class="flex justify-between">
                    <button class="bg-red-500 hover:bg-red-700 border-red-700 hover:text-white p-2 my-2 rounded">Cancelar</button>
                    <button class="bg-green-500 hover:bg-green-700 border-green-700 hover:text-white p-2 my-2 rounded">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</div>

