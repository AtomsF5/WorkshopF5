@include('layout.header')

    <div>
        <h2 class="p-10 text-3xl font-extrabold text-center font-poppins text-vermilion-500">Talleres Individuales</br></h1>

        <div class="grid gap-2 p-2 containerSlider lg:grid-cols-3 sm:grid-cols-1">


            @foreach ($individuals as $workshop)

            <div class="flex flex-col justify-between card">
                <img class="picture" src="{{ asset('images/html-y-php-articulo.jpg') }}" alt= "imagen del taller">
                <h1>{{$workshop->title}}</h1>
                <p><strong>Qué haremos:</strong> {{$workshop->description}}</p>
                <p><strong>Tipo de taller:</strong> {{$workshop->category}}</p>
                <p><strong>Fecha y Hora:</strong> {{$workshop->date}}</p>
                <p><strong>Requerimientos Técnicos:</strong> {{$workshop->technical_requirement}}</p>
                <div>
                    <x-inscriptionModal :workshop="$workshop"/>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div>
        <h2 class="p-10 text-3xl font-extrabold text-center font-poppins text-vermilion-500">Talleres Grupales</br></h1>

        <div class="grid gap-2 p-2 containerSlider lg:grid-cols-3 sm:grid-cols-1">
            @foreach ($groups as $workshop)
            <div class="flex flex-col justify-between card">
                <img class="picture" src="{{ asset('images/html-y-php-articulo.jpg') }}" alt= "imagen del taller">
                <h1>{{$workshop->title}}</h1>
                <p><strong>Qué haremos:</strong> {{$workshop->description}}</p>
                <p><strong>Tipo de taller:</strong> {{$workshop->category}}</p>
                <p><strong>Fecha y Hora:</strong> {{$workshop->date}}</p>
                <p><strong>Requerimientos Técnicos:</strong> {{$workshop->technical_requirement}}</p>
                <div>
                    <x-inscriptionModal :workshop="$workshop"/>
                </div>
            </div>
            @endforeach
        </div>
    </div>




@include('layout.footer')
