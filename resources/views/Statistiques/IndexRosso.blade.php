<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rosso</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <link href="{{ asset('CSS/StyleStatistique.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  </head>
  <body>

@extends('Layout/app')

<section id="grph" data-aos="fade-up">
    <a href="{{ route('Statistiques.indexNktt') }}" class="btn btn-dark btn-lg btn-block">Nouakchott</a>
    <a href="{{ route('Statistiques.indexNdb') }}" class="btn btn-dark btn-lg btn-block">Nouadhibou</a>
    <a href="{{ route('Statistiques.indexZrt') }}" class="btn btn-dark btn-lg btn-block">Zouerate</a>
    <a href="{{ route('Statistiques.indexLayoune') }}" class="btn btn-dark btn-lg btn-block">Layoune</a>
    <a href="{{ route('Statistiques.indexAleg') }}" class="btn btn-dark btn-lg btn-block">Aleg</a>
    <a href="{{ route('Statistiques.indexRosso') }}" class="btn btn-dark btn-lg btn-block">Rosso</a>
</section>
  
      @foreach($data['universities'] as $university => $students)
      
      <h1 class="title" data-aos="fade-up">{{ $university }}</h1>
      <div data-aos="fade-up">
           <canvas id="{{ $university}}" class="myChart"></canvas>
      </div>
    
    <script>
    
      const {!! $university !!} = document.getElementById('{{ $university }}');
    
      new Chart({!! $university !!} , {
        type: 'bar',
        data: {
          labels: {!! json_encode($data['Annee']) !!},
          datasets: [{
            label: "# Nombre D'inscriptions",
            data: {!!  json_encode($students) !!},
            borderWidth: 1,
          
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });


      
      </script>
    
      @endforeach

      <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick= function(){
            toggle_menu.classList.toggle('active');
            menu.classList.toggle('responsive');
        }
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>