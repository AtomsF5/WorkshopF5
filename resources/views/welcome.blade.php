@include('layout.header')

<div class="mx-auto">
    <div
        x-data="{
            showModal: false,
            showSuccess: false,
        }"
    >

    <h1 class="p-10 text-3xl font-extrabold text-center font-poppins text-vermilion-500">Talleres Individuales</br></h1>
   
        <div class="grid gap-2 p-2 containerSlider lg:grid-cols-3 sm:grid-cols-1">

            {{-- <a href="#" id="left-arrow"><img src="images/Left.png" /></a>
            <a href="#" id="right-arrow"><img src="images/Right.png" /></a> --}}
            
            @foreach ($workshops as $workshop)            

            <div class="flex flex-col justify-between card">
                <img class="picture" src="{{ asset('images/html-y-php-articulo.jpg') }}" alt= "imagen del taller">
                <h1>{{$workshop->title}}</h1>
                <p>{{$workshop->id}}</p>                

                <p><strong>Qué haremos:</strong> {{$workshop->description}}</p>
                <p><strong>Tipo de taller:</strong> {{$workshop->category}}</p>                
                <p><strong>Fecha y Hora:</strong> {{$workshop->date}}</p>
                <p><strong>Requerimientos Técnicos:</strong> {{$workshop->technical_requirement}}</p>
                <div>            
                
                <x-inscriptionModal :workshop="$workshop"/>
                
                <x-button
                    class="px-8 py-3 bg-vermilion-500 hover:bg-vermilion-600 focus:outline-none focus:ring-2 focus:ring-vermilion-600 focus:border-transparent"
                    x-on:click="showModal= true"
                    >
                    <p>{{$workshop->id}}</p>                

                </x-button>

                </div>
            </div>
            @endforeach
        </div>
   
@include('layout.footer')
