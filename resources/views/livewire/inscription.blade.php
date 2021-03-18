<div class="fixed top-0 flex items-center w-full bg-gray-900 bg-opacity-60">

            <div class="flex flex-col w-full h-screen overflow-hidden rounded-lg shadow bg-alabaster-300">

                <x-application-logo/>

                <form class="flex flex-col text-left">


                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="nombre">
                        Nombre*
                    </span>
                    <input class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text"   placeholder="Nombre">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="apellido">
                        Apellido*
                    </span>
                    <input class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text" placeholder="Apellido">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="fecha de nacimiento">
                        Fecha de Nacimiento*
                    </span>
                    <input type="date" class="w-full px-4 py-3 mb-3 bg-white rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" placeholder="día/mes/año">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="genero">
                        Género
                    </span>
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
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="email">
                        eMail*
                    </span>
                    <input class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" wire:model="email" placeholder="📧">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="telefono">
                        Teléfono*
                    </span>
                    <input class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="tel" id="number" placeholder="☎️">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500">
                        Ciudad*
                    </span>
                    <input class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text" placeholder="Ciudad">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="cómo nos has conocido">
                        Cómo nos has conocido?*
                    </span>
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


                <div class="text-center">
                    <x-button class="text-center bg-vermilion-500 hover:bg-vermilion-600 focus:outline-none focus:ring-2 focus:ring-vermilion-600 focus:border-transparent">
                        Inscríbeme
                    </x-button>
                </div>

            </form>


</div>




