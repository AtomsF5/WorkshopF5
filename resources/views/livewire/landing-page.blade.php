<div>
    <div
        class="container"
        x-data="{
            showModal: false,
        }"
    >

        <div class="grid gap-2 p-2 containerSlider lg:grid-cols-3 sm:grid-cols-1">

            {{-- <a href="#" id="left-arrow"><img src="images/Left.png" /></a>
            <a href="#" id="right-arrow"><img src="images/Right.png" /></a> --}}

            @foreach ($workshops as $workshop)

            <div class="flex flex-col justify-between card">
                <img class="picture" src="{{ asset('images/html-y-php-articulo.jpg') }}" alt= "imagen del taller">
                <h1>{{$workshop->title}}</h1>
                <p>{{$workshop->description}}</p>
                <p>Requerimientos Técnicos: {{$workshop->technical_requirement}}</p>
                <p>Fecha y Hora: {{$workshop->date}}</p>
                <p>Tipo de taller: {{$workshop->category}}</p>
                <div>
                    <x-button
                        class="px-8 py-3 bg-vermilion-500 hover:bg-vermilion-600 focus:outline-none focus:ring-2 focus:ring-vermilion-600 focus:border-transparent"
                        x-on:click="showModal= true"
                        >
                        Inscríbeme
                    </x-button>
                </div>
            </div>
            @endforeach
        </div>

        <div
            class="fixed top-0 flex items-center w-full h-full bg-gray-900 bg-opacity-60"
            x-show="showModal"
            x-on:click.self="showModal = false"
            x-on:keydown.escape.window=" showModal = false"
        >

                <div class="p-8 m-auto overflow-y-auto rounded-lg shadow h-4/5 bg-alabaster-300 ">

                    <x-application-logo/>

                    <form
                        class="flex flex-col text-left"
                        wire:submit.prevent="inscription"
                    >

                        <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="nombre">
                            Nombre*
                        </span>
                        <input
                            class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                            type="text"
                            name="name"
                            wire:model="name"
                            placeholder="Nombre"
                        >


                        <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="apellido">
                            Apellido*
                        </span>
                        <input
                            class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                            type="text"
                            name="last_name"
                            wire:model="last_name"
                            placeholder="Apellido"
                        >

                        <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="fecha de nacimiento">
                            Fecha de Nacimiento*
                        </span>
                        <input
                            class="w-full px-4 py-3 mb-3 bg-white rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                            type="date"
                            name="date_born"
                            wire:model="date_born"
                        >


                        <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="genero">
                            Género
                        </span>
                        <select
                            class="px-4 py-3 mb-3 text-sm bg-white rounded border-vermilion-500 text-vermilion-500"
                            name="gender"
                            wire:model="gender"
                        >
                            <option disabled selected>Selecciona...</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Otro">Otro</option>
                            <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                        </select>


                        <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="email">
                            eMail*
                        </span>
                        <input
                            class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                            type="email"
                            name="email"
                            wire:model="email"
                            placeholder="📧 example@example.com"
                        >


                        <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="telefono">
                            Teléfono*
                        </span>
                        <input
                            class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                            type="tel"
                            name="phone"
                            wire:model="phone"
                            placeholder="☎️"
                        >


                        <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500">
                            Ciudad*
                        </span>
                        <input
                            class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                            type="text"
                            name="city"
                            wire:model="city"
                            placeholder="Ciudad">


                        <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="cómo nos has conocido">
                            Cómo nos has conocido?*
                        </span>
                        <select
                            class="w-full px-4 py-3 pr-8 mb-3 text-sm bg-white rounded border-vermilion-500 text-vermilion-500"
                            name="how_did_you_get_to_know_us"
                            wire:model="how_did_you_get_to_know_us"
                        >
                            <option disabled selected>Selecciona...</option>
                            <option value="Entidad, fundación o programa social">Entidad, fundación o programa social</option>
                            <option value="Redes Sociales">Redes Sociales</option>
                            <option value="Web de Factoría F5">Web de Factoría F5</option>
                            <option value="Amig@s">Amig@s</option>
                            <option value="Otros">Otros</option>
                        </select>

                        <span class="pb-3 text-xs text-vermilion-500">
                                * Este campo es obligatorio.
                        </span>


                        <div class="text-center">
                            <x-button class="text-center bg-vermilion-500 hover:bg-vermilion-600 focus:outline-none focus:ring-2 focus:ring-vermilion-600 focus:border-transparent">
                                Inscríbeme
                            </x-button>
                        </div>


                    </form>
                </div>
        </div>
    </div>
</div>
