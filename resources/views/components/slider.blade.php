    <div class="containerSlider">

            {{-- <a href="#" id="left-arrow"><img src="images/Left.png" /></a>
            <a href="#" id="right-arrow"><img src="images/Right.png" /></a> --}}

    @foreach ($workshops as $workshop)

        <div class="card">
            <img class= "picture" src= {{$workshop->image}} alt= "imagen del taller" style="width:100%">
            <h1>{{$workshop->title}}</h1>
            <p>{{$workshop->description}}</p>
            <p>Requerimientos Técnicos: {{$workshop->technical_requirement}}</p>
            <p>Fecha y Hora: {{$workshop->date}}</p>
            <p>Tipo de taller: {{$workshop->category}}</p>

        </div>
    @endforeach   

    </div>
