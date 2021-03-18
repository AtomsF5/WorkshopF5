@include('layout.header')

    <livewire:landing-page :workshops="$workshops"></livewire:landing-page>

    <h1 class="p-10 text-3xl font-extrabold text-center font-poppins text-vermilion-500">Talleres Individuales</br></h1>

        <div class="grid gap-2 p-2 containerSlider lg:grid-cols-3 sm:grid-cols-1">

            {{-- <a href="#" id="left-arrow"><img src="images/Left.png" /></a>
            <a href="#" id="right-arrow"><img src="images/Right.png" /></a> --}}

            @foreach ($individuals as $workshop)

            <div class="flex flex-col justify-between card">
                <img class="picture" src="{{ asset('images/html-y-php-articulo.jpg') }}" alt= "imagen del taller">
                <h1>{{$workshop->title}}</h1>
                <p>{{$workshop->id}}</p>
                <p><strong>Qué haremos:</strong> {{$workshop->description}}</p>
                <p><strong>Tipo de taller:</strong> {{$workshop->category}}</p>
                <p><strong>Fecha y Hora:</strong> {{$workshop->date}}</p>
                <p><strong>Requerimientos Técnicos:</strong> {{$workshop->technical_requirement}}</p>
                <div>

                    <x-button
                        class="px-8 py-3 bg-vermilion-500 hover:bg-vermilion-600 focus:outline-none focus:ring-2 focus:ring-vermilion-600 focus:border-transparent"
                        x-on:click="showModal= true"
                        >
                        <a href="{{'#inscribeme', $workshopId=$workshop->id}}">Inscríbeme</a>
                    </x-button>
                </div>
            </div>
            @endforeach
        </div>


    <h1 class="p-10 text-3xl font-extrabold text-center font-poppins text-vermilion-500">Talleres Grupales</br></h1>

        <div class="grid gap-2 p-2 containerSlider lg:grid-cols-3 sm:grid-cols-1">

            {{-- <a href="#" id="left-arrow"><img src="images/Left.png" /></a>
            <a href="#" id="right-arrow"><img src="images/Right.png" /></a> --}}

            @foreach ($groups as $workshop)

            <div class="flex flex-col justify-between card">
                <img class="picture" src="{{ asset('images/html-y-php-articulo.jpg') }}" alt= "imagen del taller">
                <h1>{{$workshop->title}}</h1>
                <p><strong>Qué haremos:</strong> {{$workshop->description}}</p>
                <p><strong>Tipo de taller:</strong> {{$workshop->category}}</p>
                <p><strong>Fecha y Hora:</strong> {{$workshop->date}}</p>
                <p><strong>Requerimientos Técnicos:</strong> {{$workshop->technical_requirement}}</p>
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







<!-- Modal -->

        <x-modal trigger="showModal">

        <form id="inscribeme" action="{{route('enroll', $workshopId)}}" method="POST" class="flex flex-col text-left">
                @csrf

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="name">
                        Nombre *
                    </span>
                    <input name="name" class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text" placeholder="Nombre" required>
                </div>

                <p>{{$workshop->id}}</p>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="lastname">
                        Apellido *
                    </span>
                    <input name="lastname"class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text" placeholder="Apellido" required>
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="date_born">
                        Fecha de Nacimiento *
                    </span>
                    <input type="date" name="date_born" class="w-full px-4 py-3 mb-3 bg-white rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" placeholder="día/mes/año" required>
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
                    <input name="email" class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" wire:model="email" placeholder="📧" required>
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="phone">
                        Teléfono *
                    </span>
                    <input name="phone" class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="tel" id="number" placeholder="☎️" required>
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="city">
                        Ciudad *
                    </span>
                    <input name="city" class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500" type="text" placeholder="Ciudad" required>
                </div>

                <div class="px-3 mb-6 md:mb-0">
                    <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="how_did_we_meet">
                        ¿Cómo nos has conocido? *
                    </span>
                    <div>
                        <select name="how_did_we_meet" class="w-full px-4 py-3 pr-8 mb-3 text-xs bg-white rounded border-vermilion-500 text-vermilion-500" id="type text-vermilion-500" required="required">
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


























            <!-- <form
                class="flex flex-col text-left"
                wire:submit.prevent="inscription"
            >

                <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="nombre">
                    {{
                        $errors->has('name')
                        ? $errors->first('email')
                        : 'Nombre*'
                    }}
                </span>
                <input
                    class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                    type="text"
                    name="name"
                    wire:model="name"
                    placeholder="Nombre"
                >


                <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="apellido">
                    {{
                        $errors->has('name')
                        ? $errors->first('email')
                        : 'Apellido*'
                    }}
                </span>
                <input
                    class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                    type="text"
                    name="last_name"
                    wire:model="last_name"
                    placeholder="Apellido"
                >

                <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="fecha de nacimiento">
                    {{
                        $errors->has('name')
                        ? $errors->first('email')
                        : 'Fecha de Nacimiento*'
                    }}
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
                    {{
                        $errors->has('name')
                        ? $errors->first('email')
                        : 'eMail*'
                    }}
                </span>
                <input
                    class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                    type="email"
                    name="email"
                    wire:model="email"
                    placeholder="📧 example@example.com"
                >


                <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="telefono">
                    {{
                        $errors->has('name')
                        ? $errors->first('email')
                        : 'Teléfono*'
                    }}
                </span>
                <input
                    class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                    type="tel"
                    name="phone"
                    wire:model="phone"
                    placeholder="☎️"
                >


                <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500">
                    {{
                        $errors->has('name')
                        ? $errors->first('email')
                        : 'Ciudad*'
                    }}
                </span>
                <input
                    class="w-full px-4 py-3 mb-3 bg-white border rounded text-vermilion-500 border-vermilion-500 placeholder-vermilion-500"
                    type="text"
                    name="city"
                    wire:model="city"
                    placeholder="Ciudad">


                <span class="mb-2 text-xs font-bold tracking-wide uppercase text-vermilion-500" for="cómo nos has conocido">
                    {{
                        $errors->has('name')
                        ? $errors->first('email')
                        : 'Cómo nos has conocido?*'
                    }}
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
                    {{
                        $errors->has('name')
                        ? $errors->first('email')
                        : '* Este campo es obligatorio.'
                    }}

                </span>


                <div class="mb-2 text-center">
                    <x-button class="text-center bg-vermilion-500 hover:bg-vermilion-600 focus:outline-none focus:ring-2 focus:ring-vermilion-600 focus:border-transparent">
                        Inscríbeme
                    </x-button>
                </div>
            </form>-->

        </x-modal>

        <x-modal trigger="showSuccess">

            <div class="rounded-xl bg-vermilion-500">

                    <p class="font-extrabold text-center text-white animate-pulse text-9xl">&check;</p>
                    <p class="pt-10 text-5xl font-extrabold text-center text-white">Estupendo!</p>
                    <p class="pb-3 text-2xl text-center text-white">Nos vemos en el Taller &#128521;</p>
            </div>

        </x-modal>

    </div>
</div>





@include('layout.footer')
