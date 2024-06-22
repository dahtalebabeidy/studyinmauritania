@extends('Layout/app')
      
@section('Content')

    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

    <section id="home">
        <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" src="../Img/{{$universite->Imag}}">
    </section>

    <section id="Villes">
        <h1 class="title">{{$universite->NomUniversite}}</h1>
        <div class="right">
            <ul>
                @foreach(explode("\n", $universite->Description) as $paragraph)
                    <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">{{ $paragraph }}</li>
                @endforeach
            </ul>
        </div>

        <h2 class="main-title" data-aos="fade-up">Departements</h2>
        <div class="features" id="features">
            <div class="container">
                @foreach($universite->departements as $departement)
                <div class="box1 time" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="img-holder"><img decoding="async" src="../Img/{{$departement->Image}}" alt="" /></div>
                    <h2>{{$departement->Abrev}}</h2>
                    <p>{{$departement->NomDepartement}}</p>
                    <a href="{{ route('Departements.show', $departement->id) }}">En savoir plus</a>
                </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection