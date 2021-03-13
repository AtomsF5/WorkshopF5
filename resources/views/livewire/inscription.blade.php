<div class="w-full">
    <button  class="modal-button transition mt-4 block p-3 mx-auto text-alabaster-50 bg-vermilion-500 rounded w-40 text-center"> Inscribirme </button>
    <div class="modal delay-25 opacity-0 pointer-events-none absolute w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-black opacity-25 top-0 left-0  cursor-pointer">
        </div>
        <div class="absolute shadow-lg flex text-left items-center justify-center">

            <div class="rounded-lg shadow overflow-hidden  mx-auto p-4 bg-alabaster-300">

                <form>

                    <x-application-logo/>
                    
                    <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-vermilion-500 text-xs font-bold mb-2" for="nombre">
                            Nombre*
                        </label>
                        <input class="w-full text-vermilion-500 bg-white border border-vermilion-500 rounded py-3 px-4 mb-3 placeholder-vermilion-500" type="text"   placeholder="Nombre">
                    </div>

                    <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-vermilion-500 text-xs font-bold mb-2" for="apellido">
                            Apellido*
                        </label>
                        <input class="w-full bg-white text-vermilion-500 border border-vermilion-500 rounded py-3 px-4 mb-3 placeholder-vermilion-500" type="text" placeholder="Apellido">
                    </div>

                    <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-vermilion-500 text-xs font-bold mb-2" for="fecha de nacimiento">
                            Fecha de Nacimiento*
                        </label>
                        <input type="date" class="w-full text-vermilion-500 bg-white border-vermilion-500 rounded py-3 px-4 mb-3 placeholder-vermilion-500" placeholder="día/mes/año">
                    </div>

                    <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-vermilion-500 text-xs font-bold mb-2" for="genero">
                            Género
                        </label>
                        <div>
                            <select class="w-full bg-white border-vermilion-500 text-vermilion-500 text-xs py-3 px-4 pr-8 mb-3 rounded" id="type text-vermilion-500">
                                <option>Selecciona...</option>
                                <option>Femenino</option>
                                <option>Masculino</option>
                                <option>Otro</option>
                                <option>Prefiero no decirlo</option>
                            </select>
                        </div>
                    </div>

                    <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-vermilion-500 text-xs font-bold mb-2" for="email">
                            eMail*
                        </label>
                        <input class="w-full bg-white text-vermilion-500 border border-vermilion-500 rounded py-3 px-4 mb-3 placeholder-vermilion-500" type="text" placeholder="📧">
                    </div>

                    <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-vermilion-500 text-xs font-bold mb-2" for="telefono">
                            Teléfono*
                        </label>
                        <input class="w-full bg-white text-vermilion-500 border border-vermilion-500 rounded py-3 px-4 mb-3 placeholder-vermilion-500" type="tel" id="number" placeholder="☎️">
                    </div>

                    <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-vermilion-500 text-xs font-bold mb-2">
                            Ciudad*
                        </label>
                        <input class="w-full bg-white text-vermilion-500 border border-vermilion-500 rounded py-3 px-4 mb-3 placeholder-vermilion-500" type="text" placeholder="Ciudad">
                    </div>

                    <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-vermilion-500 text-xs font-bold mb-2" for="cómo nos has conocido">
                            Cómo nos has conocido?*
                        </label>
                        <div>
                            <select class="w-full bg-white border-vermilion-500 text-vermilion-500 text-xs py-3 px-4 pr-8 mb-3 rounded" id="type text-vermilion-500">
                                <option>Selecciona...</option>
                                <option>Entidad, fundación o programa social</option>
                                <option>Redes Sociales</option>
                                <option>Web de Factoría F5</option>
                                <option>Amig@s</option>
                                <option>Otros</option>
                            </select>
                        </div>
                    </div>

                    <div class="px-3 mb-6 md:mb-0">
                        <span class="text-vermilion-500 text-xs ">
                             * Este campo es obligatorio.
                        </span>
                    </div>

                    <button class="block mx-auto px-3 py-3 mt-5 rounded bg-vermilion-500 border-alabaster-50 text-alabaster-50">
                            Inscríbeme!
                    </button>

                    <p class="text-vermilion-500 py-3 text-xs text-center">
                        {{
                            $errors->has('form')
                            ? $errors->first('form')
                            : 'Recibiras un email de confirmación.'
                        }}

                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
