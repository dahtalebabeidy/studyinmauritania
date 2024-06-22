@extends('Layout/app')
@section('title', 'Villes')
      
@section('Content')
    <section id="Villes">
        <h1 class="title"data-aos="fade-up">LES VILLES</h1>

        @foreach($villes as $ville)
        <div class="content">
            <div class="box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="../Img/{{$ville->Imag}}" alt="">
                <div class="content">
                    <div>
                    <h4>{{$ville->NomVille}}</h4>
                    <p></p>
                    <p></p>
                    <a href="{{route('Villes.show',$ville->id)}}">En savoir plus</a>
                    </div>
                </div>
            </div>
          @endforeach

        </div>

    </section>
@endsection