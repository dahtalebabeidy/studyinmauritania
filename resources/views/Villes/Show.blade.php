@extends('Layout/app')
      
@section('Content')

    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

    <section id="home">
        <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" src="../Img/{{$ville->Imag}}">
    </section>

    <section id="Villes">
        <h1 class="title"> Information sur la ville {{$ville->NomVille}}</h1>
        <div class="right">
            <ul>
                @foreach(explode("\n", $ville->description) as $paragraph)
                    <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">{{ $paragraph }}</li>
                @endforeach
            </ul>
            
            <h1 class="title">Les universités, Les facultés et Les instituts de {{ $ville->NomVille }}</h2>

            @foreach($ville->universites as $universite)
            <div class="container mt-5">
            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="col-12">
                <article class="blog-card">
                    <div class="blog-card__background">
                    <div class="card__background--wrapper">
                        <div class="card__background--main" style="background-image: url('../Img/{{$universite->Imag}}');">
                        <div class="card__background--layer"></div>
                        </div>
                    </div>
                    </div>
                    <div class="blog-card__head">
                    <span class="date__box">
                        <span class="date__day">11</span>
                        <span class="date__month">JAN</span>
                    </span>
                    </div>
                    <div class="blog-card__info">
                    <h4>{{$universite->NomUniversite}}</h4>
                    <p>{{$universite->Ville}}</p>
                    <a href="{{ route('Universites.show', $universite->id) }}" class="btn btn--with-icon"><i class="btn-icon fa fa-long-arrow-right"></i>En savoir plus</a>
                    </div>
                </article>
                </div>
            </div>
            </div>
            @endforeach
        </div>
    </section>

@endsection