@extends('Layout/app')
      
@section('Content')
    <section id="Villes">
        <h1 class="title">LES VILLES</h1>

        @foreach($villes as $ville)
        <div class="content">
            <div class="box">
                <img src="../Img/{{$ville->Imag}}" alt="">
                <div class="content">
                    <div>
                    <h4>{{$ville->NomVille}}</h4>
                    <p></p>
                    <p></p>
                    <a href="{{route('Villes.show',$ville->id)}}">Lire Plus</a>
                    </div>
                </div>
            </div>
          @endforeach

        </div>

    </section>
     @endsection