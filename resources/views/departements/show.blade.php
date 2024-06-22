@extends('Layout.app')

@section('Content')
    <section id="Villes">
        <h1 class="title" data-aos="fade-up"> Information sur le departement {{$departement->NomDepartement}}</h1>
        <div class="right">
            <ul>
                @foreach(explode("\n", $departement->Description) as $paragraph)
                    <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">{{ $paragraph }}</li>
                @endforeach
            </ul>
        </div>

        <section id="programmes">
        <h2 class="title" data-aos="fade-up">Les filières de ce departement</h2>
        <div class="programmes-list">
            @foreach($departement->programmes as $programme)
                <div class="programme-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <h3 class="programme-title">{{ $programme->NomProgramme }}</h3>
                    <div class="programme-description">
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">{{ $programme->Description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        </section>
    </section>
@endsection