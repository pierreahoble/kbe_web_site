@extends('layouts.base')



@section('main')


<!-- Breadcrumb Area -->
<div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="cr-breadcrumb">
                    <ul class="cr-breadcrumb__pagination">
                        <li>
                            <a href="{{ url('/') }}">ACCUEIL</a>
                        </li>
                        <li>A PROPOS</li>
                    </ul>
                    <h1>A PROPOS DE NOUS </h1>
                    {{-- <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem </p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Page Conent -->
<main class="page-content">
    
    <!-- About Area -->
    <section id="about-area" class="cr-section about-area bg--white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 offset-lg-1">
                    <div class="about-area__content2 text-center">
                        <h4>NOUS SOMMES “
                            <span class="color--theme">MERCANTO</span> ”?
                        </h4>
                        <h3 class="cd-headline cx-heading slide">La vocation première du cabinet MERCANTO est d’être
                            utile pour chacun de ses clients.</h3>
                        <p>
                            Depuis 2011, MERCANTO accompagne ses clients particuliers et professionnels sur le continent
                            européen et africain sur les thématiques de la finance d’entreprise, de la gestion digitale
                            et de la fiscalité.
                        </p>
                        <p>
                            En accompagnant le client pendant les différentes phases charnières de la vie de son
                            entreprise (création, reprise, développement et transmission) nous accordons la plus haute
                            priorité à la motivation INTRINSEQUE de l’entrepreneur : la création de valeur à court et
                            moyen terme, en protégeant son patrimoine.
                        </p>
                       <p>
                        Nous sommes au service de vos ambitions.
                       </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="about-area__image2">
                        <img src="client/images/about/about-thumbnail-3.png" alt="about area image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //About Area -->




    <!-- Call To Action Area -->
    <section id="cta-area" class="cta-area section-padding--sm bg--grey--light bg--abstruct-mask">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 offset-0">
                    <div class="calltoaction text-center">
                        <h3>Aviez-vous besoin
                            <span class="color--theme"> d'aide financier?</span>
                        </h3>
                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque
                            ipsa Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                        </p>
                        <h6>Il suffit de composer
                            <a href="#">(+229) 61 63 57 06 / 60 18 98 98</a> 
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Call To Action Area -->

</main>
<!-- //Page Conent -->


@endsection