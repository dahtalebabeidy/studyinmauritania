<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('CSS/Style.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  
</head>
<body>

    <header>

        <div class="logo">
            <a href="{{ url('/') }}"><span>Study in</span> mauritania</a>
        </div>
        <ul class="menu">
            <li><a href="{{route('prq')}}">Pourquoi la Mauritania</a></li>
            <li><a href="{{route('Statistiques.indexNktt')}}">Statistiques</a></li>
            <li><a href="{{route('Villes.index')}}">Les Villes</a></li>
        </ul>
        <a href="" class="btn-login">LOGIN</a>
        <div class="responsive-menu"></div>
    </header>

  @yield('Content')

  @yield('footer')
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

     <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick= function(){
            toggle_menu.classList.toggle('active');
            menu.classList.toggle('responsive');
            
        }

        document.addEventListener('DOMContentLoaded', function () {
            var programmeTitles = document.querySelectorAll('.programme-title');

            programmeTitles.forEach(function (title) {
                title.addEventListener('click', function () {
                    var description = this.nextElementSibling;

                    if (description.style.maxHeight) {
                        description.style.maxHeight = null;
                    } else {
                        description.style.maxHeight = description.scrollHeight + "px";
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });

     </script>
     
</body>
</html>