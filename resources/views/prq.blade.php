// resources/views/pourquoi-la-mauritanie.blade.php
@extends('Layout/app')

@section('Content')

<section id="Villes">
        <h1 class="title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Pourquoi la mauritanie</h1>
        <div class="right" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <ul data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Richesse culturelle et historique : La Mauritanie possède une histoire riche et une culture unique. Étudier ici permet d'explorer des traditions millénaires et de découvrir un patrimoine exceptionnel, notamment les anciennes villes de Chinguetti, Ouadane et Tichitt, inscrites au patrimoine mondial de l'UNESCO.</li>
                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Diversité naturelle : La diversité des paysages mauritaniens est impressionnante, allant des dunes du Sahara aux côtes atlantiques. Cela offre une expérience unique de vie et d'études dans des environnements variés et fascinants.</li>
                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Système éducatif en évolution : Le système éducatif en Mauritanie est en constante amélioration avec l’ouverture de nouvelles universités et institutions spécialisées. Cela offre des opportunités d’apprentissage innovantes et adaptées aux besoins du marché.</li>
                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Langue et multiculturalisme : La Mauritanie est un pays multilingue, où l'arabe et le français sont largement parlés. Étudier ici permet de renforcer ses compétences linguistiques et de s’immerger dans une communauté multiculturelle.</li>
                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Coût de la vie abordable : Comparé à de nombreux autres pays, le coût de la vie en Mauritanie est relativement bas. Cela permet aux étudiants de vivre confortablement tout en bénéficiant d’une éducation de qualité sans se ruiner.</li>
                <li data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Opportunités de recherche et d’exploration : La Mauritanie offre de nombreuses opportunités de recherche, notamment dans les domaines de l’archéologie, des études islamiques, de l’écologie et des sciences environnementales, grâce à ses écosystèmes uniques et à son riche patrimoine historique.</li>
            </ul>

            <h2 class="comments-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Commentaires des étudiants</h2>
            <div class="comments-section" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                @foreach($comments as $comment)
                <div class="comment-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <h3 class="comment-author">{{ $comment->name }}</h3>
                    <p class="comment-text">{{ $comment->comment }}</p>
                </div>
                @endforeach
            </div>

            <h2 class="leave-comment-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Laisser un commentaire</h2>
            <form action="" method="POST" class="comment-form" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                @csrf
                <textarea name="comment" placeholder="Votre commentaire..." required></textarea>
                <button type="submit">Envoyer</button>
            </form>
    </section>
@endsection
