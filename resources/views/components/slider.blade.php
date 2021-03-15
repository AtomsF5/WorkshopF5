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
            <div class="">
                <livewire:inscription />
            </div>
        </div>
    @endforeach

    </div>
