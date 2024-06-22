<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Study in mauritania</title>
    <link href="{{ asset('CSS/StyleWelcome.css')}}" rel="stylesheet">

       
</head>
<body>
    
@extends('Layout/app')

    <div class="container">
        <div class="row">
            <div class="col">
           <h1>Study in mauritania</h1>
           <p>
                Bienvenue sur notre portail dédié à l'éducation et à l'étude en Mauritanie ! Ce pays offre un environnement unique pour les étudiants qui souhaitent poursuivre leurs études supérieures. Avec une richesse culturelle, une histoire fascinante et des opportunités éducatives diverses, la Mauritanie est un lieu d'apprentissage stimulant.
            </p>
            <p>
                Notre plateforme vise à fournir des informations complètes sur les universités, les programmes académiques, les possibilités de recherche et les expériences étudiantes en Mauritanie. Que vous cherchiez des données sur les taux d'inscription, des conseils pour choisir une université, ou des informations sur la vie étudiante et les ressources disponibles, vous trouverez ici un guide pour votre parcours éducatif.
            </p>
            <p>
                Explorez nos ressources pour découvrir les différentes facettes de l'éducation en Mauritanie, et utilisez nos outils pour prendre des décisions éclairées sur votre avenir académique. Nous sommes là pour vous accompagner dans cette aventure passionnante de l'apprentissage et de la découverte.
            </p>
         
            </div>
        </div>
    </div>

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