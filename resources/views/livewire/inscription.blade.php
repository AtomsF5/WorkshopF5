<div class="fixed top-0 flex items-center w-full bg-gray-900 bg-opacity-60">

            <div class="flex flex-col w-full h-screen overflow-hidden rounded-lg shadow bg-alabaster-300">

                <x-application-logo/>

                <form action="{{route('enroll')}}" method="POST" class="flex flex-col text-left">
                @csrf

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="name">
                        Nombre *
                    </span>
                    <input name="name" class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text" placeholder="Nombre">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="lastname">
                        Apellido *
                    </span>
                    <input name="lastname"class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text" placeholder="Apellido">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="date_born">
                        Fecha de Nacimiento *
                    </span>
                    <input type="date" name="date_born" class="w-full px-4 py-3 mb-3 bg-white rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" placeholder="día/mes/año">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="sex">
                        Género
                    </span>
                    <div>
                        <select name="sex" class="w-full px-4 py-3 pr-8 mb-3 text-xs bg-white rounded border-vermilion-500 text-vermilion-500" id="type text-vermilion-500">
                            <option disabled selected>Selecciona...</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Otro">Otro</option>
                            <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                        </select>
                    </div>
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="email">
                        e-mail *
                    </span>
                    <input name="email" class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" wire:model="email" placeholder="📧">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="phone">
                        Teléfono *
                    </span>
                    <input name="phone" class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="tel" id="number" placeholder="☎️">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="city">
                        Ciudad *
                    </span>
                    <input name="city" class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text" placeholder="Ciudad">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="how_did_we_meet">
                        ¿Cómo nos has conocido? *
                    </span>
                    <div>
                        <select name="how_did_we_meet" class="w-full px-4 py-3 pr-8 mb-3 text-xs bg-white rounded border-vermilion-500 text-vermilion-500" id="type text-vermilion-500">
                            <option disabled selected>Selecciona...</option>
                            <option value="Entidad, fundación o programa social">Entidad, fundación o programa social</option>
                            <option value="Redes Sociales">Redes Sociales</option>
                            <option value="Web de Factoría F5">Web de Factoría F5</option>
                            <option value="Amig@s">Amig@s</option>
                            <option value="Otros">Otros</option>
                        </select>
                    </div>
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="text-xs text-vermilion-500 ">
                            * Estos campos son obligatorios.
                    </span>
                </div>


                <div class="text-center">
                    <x-button class="text-center bg-vermilion-500 hover:bg-vermilion-600 focus:outline-none focus:ring-2 focus:ring-vermilion-600 focus:border-transparent">
                        Inscríbeme
                    </x-button>
                </div>

            </form>


</div>




