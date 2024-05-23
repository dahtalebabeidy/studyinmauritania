<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Villes</title>
    <link href="{{ asset('CSS/Style.css')}}" rel="stylesheet">
  
</head>
<body>

    <header>

        <div class="logo">
            <a href=""><span>Study in</span> mauritania</a>
        </div>
        <ul class="menu">
            <li><a href="#">Statistiques</a></li>
            <li><a href="#">Pourquoi la Mauritania</a></li>
            <li><a href="{{route('Villes.index')}}">Villes</a></li>
        </ul>
        <a href="" class="btn-login">LOGIN</a>
        <div class="responsive-menu"></div>
    </header>

  @yield('Content')

    <footer>
        <p>Choisissez votre <span>universite</span> | Commencez votre parcours academique. </p>
     </footer>
    
     <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick= function(){
            toggle_menu.classList.toggle('active');
            menu.classList.toggle('responsive');
            
        }
     </script>
     
</body>
</html>