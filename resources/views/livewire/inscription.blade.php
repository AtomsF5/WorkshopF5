<div>

    <x-button class="px-8 py-3 bg-vermilion-500 hover:bg-vermilion-600 focus:outline-none focus:ring-2 focus:ring-vermilion-600 focus:border-transparent">
        Inscríbeme
    </x-button>

            <div class="flex flex-col w-full h-screen overflow-hidden rounded-lg shadow bg-alabaster-300">

                <x-application-logo/>

                <form class="flex flex-col">


                <div class="px-3 mb-6 md:mb-0">
                    <label class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="nombre">
                        Nombre*
                    </label>
                    <input class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text"   placeholder="Nombre">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <label class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="apellido">
                        Apellido*
                    </label>
                    <input class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text" placeholder="Apellido">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <label class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="fecha de nacimiento">
                        Fecha de Nacimiento*
                    </label>
                    <input type="date" class="w-full px-4 py-3 mb-3 bg-white rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" placeholder="día/mes/año">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <label class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="genero">
                        Género
                    </label>
                    <div>
                        <select class="w-full px-4 py-3 pr-8 mb-3 text-xs bg-white rounded border-vermilion-500 text-vermilion-500" id="type text-vermilion-500">
                            <option>Selecciona...</option>
                            <option>Femenino</option>
                            <option>Masculino</option>
                            <option>Otro</option>
                            <option>Prefiero no decirlo</option>
                        </select>
                    </div>
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <label class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="email">
                        eMail*
                    </label>
                    <input class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" wire:model="email" placeholder="📧">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <label class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="telefono">
                        Teléfono*
                    </label>
                    <input class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="tel" id="number" placeholder="☎️">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <label class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500">
                        Ciudad*
                    </label>
                    <input class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text" placeholder="Ciudad">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <label class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="cómo nos has conocido">
                        Cómo nos has conocido?*
                    </label>
                    <div>
                        <select class="w-full px-4 py-3 pr-8 mb-3 text-xs bg-white rounded border-vermilion-500 text-vermilion-500" id="type text-vermilion-500">
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
                    <span class="text-xs text-vermilion-500 ">
                            * Este campo es obligatorio.
                    </span>
                </div>

                <button class="block px-3 py-3 mx-auto mt-5 rounded bg-vermilion-500 border-alabaster-50 text-alabaster-50">
                        Inscríbeme!
                </button>

            </form>


                <p class="py-3 text-xs text-center text-vermilion-500">
                    {{
                        $errors->has('form')
                        ? $errors->first('form')
                        : 'Recibiras un email de confirmación.'
                    }}

                </p>

        </div>




