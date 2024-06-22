@extends('Layout/app')
@section('title', 'Universités')

@section('Content')
    <section id="universities">
        <h1 class="title">Liste des Universités</h1>
        <div class="universities-list">
            @foreach($universites as $universite)
                <div class="university-card">
                <img src="../Img/{{$universite->Imag}}" alt="">
                    <h3>{{$universite->NomUniversite}}</h3>
                    <p>{{$universite->Description}}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
