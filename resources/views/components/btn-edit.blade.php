
<div class="w-full">
    <div class="flex items-center justify-center">
        <form action="{{ route('dashboard.edit', $workshop->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <button  type="submit" name="Edit" class="modal-button transition px-5 mb-2 bg-indigo-600 hover:bg-indigo-900 text-white rounded"> Editar Taller </button>
        </form>
    </div>
    <div class="modal delay-25 opacity-0 pointer-events-none absolute w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-black opacity-25 top-0 left-0 cursor-pointer">
        </div>
        <div class="absolute shadow-lg flex items-center justify-center ">
            <div class="bg-white rounded-lg shadow overflow-hidden  mx-auto p-4">
                <form action="{{ url('/dashboard') }}" method="POST">
                    @csrf
                    <div class="w-auto md:w-96 lg:w-96 ">
                        <label for="title" class="form-label my-2">
                            Titulo
                        </label>
                        <input class="form-control" name="title" id="title" value="{{$workshop->title}}" placeholder="Introduzca un Título">
                    </div>
                    <div class="w-auto md:w-96 lg:w-96 ">
                        <label for="category" class="form-label my-2">
                            Categoría
                            {{$workshop->category}}
                        </label>
                        <select name="category" id="category" class="form-control">
                            <option>Individual</option>
                            <option>Grupal</option>
                        </select>
                        {{-- <input class="form-control" name="category" id="category" placeholder="Introduzca un categoría"> --}}
                    </div>
                    <div>
                        <label for="description" class="form-label my-2" >
                            Descripcion
                        </label>
                        <textarea  class="form-control" name="description" id="description" value="{{$workshop->description}}" placeholder="Introduzca una Descripción"></textarea>
                    </div>
                    <div>
                        <label for="date" class="form-label my-2">
                            Fecha
                            {{$workshop->date}}
                        </label>
                        <input type="dateTime-local" class="form-control" name="date" id="date">
                    </div>
                    <div>
                        <label for="technical_requirement" class="form-label my-2">
                            Requsitos Técnicos
                        </label>
                        <input type="text" class="form-control" name="technical_requirement" id="technical_requirement" value="{{$workshop->technical_requirement}}" placeholder="Introduzca Requisitos Técnicos">
                    </div>
                    <div>
                        <label for="image" class="form-label my-2">
                            URL imagen
                        </label>
                        <input type="url" class="form-control" name="image" id="image" value="{{$workshop->image}}" placeholder="Introduzca URL de la Imagen">
                    </div>
                    <div>
                        <label for="platform_web" class="form-label my-2">
                            URL Pagina
                        </label>
                        <input type="url" class="form-control" name="platform_web" id="url" value="{{$workshop->platform_web}}" placeholder="Introduzca URL de la Página">
                    </div>
                    <div class="flex justify-between">
                        <button class="bg-red-500 hover:bg-red-700 border-red-700 hover:text-white p-2 my-2 rounded">Cancelar</button>
                        <input type="submit" value="Actualizar" class="bg-green-500 hover:bg-green-700 border-green-700 hover:text-white p-2 my-2 rounded">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


