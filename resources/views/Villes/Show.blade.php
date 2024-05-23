
@extends('Layout/app')
      
@section('Content')
    <section id="home">
        <img src="../Img/{{$ville->Imag}}">
    </section>

    <section id="Villes">
        <h1 class="title"> Information sur la ville {{$ville->NomVille}}</h1>
        <div class="right">
        <ul>
           <li>Capital de la mauritanie Nouakchott est une ville saharienne adossee au desert et en bordure de l'ocean atlantique.<br>
               Bien qu'elle soit une ville recente cette capital ouest-africaine peut se vanter de gigurer parmi les plus belles desinations du pays.
           </li>
           <li>Capital de la mauritanie Nouakchott est une ville saharienne adossee au desert et en bordure de l'ocean atlantique.<br>
                Bien qu'elle soit une ville recente cette capital ouest-africaine peut se vanter de gigurer parmi les plus belles desinations du pays.
           </li>
            <li>Capital de la mauritanie Nouakchott est une ville saharienne adossee au desert et en bordure de l'ocean atlantique.<br>
                Bien qu'elle soit une ville recente cette capital ouest-africaine peut se vanter de gigurer parmi les plus belles desinations du pays.
            </li>
            <li>Capital de la mauritanie Nouakchott est une ville saharienne adossee au desert et en bordure de l'ocean atlantique.<br>
                Bien qu'elle soit une ville recente cette capital ouest-africaine peut se vanter de gigurer parmi les plus belles desinations du pays.
            </li>
            <li>Capital de la mauritanie Nouakchott est une ville saharienne adossee au desert et en bordure de l'ocean atlantique.<br>
                Bien qu'elle soit une ville recente cette capital ouest-africaine peut se vanter de gigurer parmi les plus belles desinations du pays.
            </li>
        </ul>
        </div>
    </section>

    @endsection