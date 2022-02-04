@extends('layouts.base')


@section('main')


<!-- Top Banner -->
<div class="banner-area">
    <div class="banner banner-slider-active banner--animated-content">

        <!-- Single Banner -->
        <div class="banner__single bg-image--1" data-black-overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="banner__single__content">
                            <h1>INQUIET POUR
                                <span class="color--theme">VOS FINANCES?</span> NOUS SOMMES EXPERTS
                                EN
                                <span class="color--theme">FINANCES</span>
                            </h1>
                            <a href="{{ url('contact') }}" class="cr-btn">
                                <span>Contacté Nous Maintenant</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Single Banner -->

        <!-- Single Banner -->
        <div class="banner__single bg-image--2" data-black-overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12 offset-0">
                        <div class="banner__single__content text-center">
                            <h1>FAITES
                                <span class="color--theme">CONFIANCE</span> A NOTRE EXPERTISE
                                {{-- <span class="color--theme">TAX</span> SOLUTIONS --}}
                            </h1>
                            <a href="{{ url('contact') }}" class="cr-btn">
                                <span>Contacté Nous Maintenant</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Single Banner -->

        <!-- Single Banner -->
        <div class="banner__single bg-image--3" data-black-overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="banner__single__content">
                            <h1>NOUS REPONDONS
                                <span class="color--theme"> PARFAITEMENT</span> A VOTRE PROBLEME
                                {{-- <span class="color--theme">TAX</span> --}}
                            </h1>
                            <a href="{{ url('contact') }}" class="cr-btn">
                                <span>Contacté Nous Maintenant</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Single Banner -->

    </div>
</div>
<!-- //Top Banner -->

<main class="page-content">

    <!-- About Area -->
    <section id="about-area" class="cr-section about-area bg--white">
        <div class="container">
            <div class="about-area__inside">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-area__image">
                            <img class="wow slideInLeft" data-wow-delay="0"
                                src="{{ asset('client/images/about/about-thumbnail.png')}}" alt="about area thumb">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-area__content">
                            <h4>
                                <span class="color--theme text-center">Qui sommes nous ?</span>
                            </h4>
                            <h5 class="cd-headline cx-heading slide"> La vocation première du cabinet
                                MERCANTO est d’être utile pour chacun de ses clients.</h5>
                            <p>
                                Depuis 2011, MERCANTO accompagne ses clients particuliers et professionnels sur le
                                continent européen et africain sur les thématiques de la finance d’entreprise, de la
                                gestion digitale et de la fiscalité.
                            </p>
                            <p>
                                En accompagnant le client pendant les différentes phases charnières de la vie de son
                                entreprise (création, reprise, développement et transmission) nous accordons la plus
                                haute priorité à la motivation INTRINSEQUE de l’entrepreneur : la création de valeur à
                                court et moyen terme, en protégeant son patrimoine.
                            </p>
                            <p>
                                Nous sommes au service de vos ambitions.
                            </p>
                            <p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <img src="{{ asset('client/images/icons/service-icon-email.png')}}"
                                            alt="service icon" style="height: 40px;">
                                        <strong style="font-size: 50"> contact@mercanto.net </strong>
                                        <span>Notre équipe est à votre disposition 7j/7</span>
                                    </div>
                                    <div class="col-md-12">
                                        <img src="{{ asset('client/images/icons/service-icon-telephone-call.png') }}"
                                            alt="" style="height: 40px;">
                                        <strong>BENIN : </strong> <span>+229 61 63 57 06/60 18 98 98</span>
                                        <strong>FRANCE : </strong> <span>+33 6 48 51 23 01</span>
                                        <strong></strong>
                                    </div>
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //About Area -->










    <!-- Page Service Area -->
    <section id="pg-services-area" class="cr-section pg-services-area">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                    <div class="section-title text-center">
                        <h2>Nos Domaine d'intervention</h2>
                        <p>
                            <span class="color--theme">
                                FINANCE - GESTION DIGITALE - FISCALITE
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Styles Bottom -->
        <div class="pg-services-area__srevicelist servicelist--style2">
            <div class="container">
                <div class="row">

                    <!-- Single Service -->
                    <div class="col-lg-6 col-md-6 wow flipInX">
                        <div class="service">
                            <div class="service__icon">
                                <img src="{{ asset('client/images/icons/service-icon-laptop.png')}}" alt="service icon"
                                    style="height: 35px;">
                            </div>
                            <div class="service__content">
                                <h5>
                                    <a href="{{ url('ingenerie-financiere') }}">L'ingénierie financière </a>
                                </h5>
                                <p>
                                    MERCANTO, en collaboration avec ses partenaires et institutions financières
                                    affiliées, met à la disposition de ses clients toute ...
                                </p>
                                <a href="{{ url('ingenerie-financiere') }}" class="cr-readmore">
                                    <span>Lire la suite</span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <!--// Single Service -->

                    <!-- Single Service -->
                    <div class="col-lg-6 col-md-6 wow flipInX">
                        <div class="service">
                            <div class="service__icon">
                                <img src="{{ asset('client/images/icons/service-icon-money-bag.png')}}"
                                    alt="service icon" style="height: 35px;">
                            </div>
                            <div class="service__content">
                                <h5>
                                    <a href="{{ url('optimisation-fiscale') }}">L'optimisation fiscale et la gestion
                                        patrimoniale</a>
                                </h5>
                                <p>
                                    MERCANTO, en s’appuyant sur la compétence reconnue de ses consultants met à votre
                                    disposition toute son expertise en matière d'audit fiscal et de gestion patrimoniale
                                    ...
                                </p>
                                <a href="{{ url('optimisation-fiscale') }}" class="cr-readmore">
                                    <span>Lire la suite</span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <!--// Single Service -->


                    <!-- Single Service -->
                    <div class="col-lg-6 col-md-6 wow flipInX">
                        <div class="service">
                            <div class="service__icon">
                                <img src="{{ asset('client/images/icons/service-icon-digital.png')}}" alt="service icon"
                                    style="height: 35px;">
                            </div>
                            <div class="service__content">
                                <h5>
                                    <a href="{{ url('gestion-digitale') }}"> Gestion digitale</a>
                                </h5>
                                <p>
                                    Le Digital est le cœur de métier de MERCANTO et le dénominateur commun à tous les
                                    autres domaines ...
                                </p>
                                <a href="{{ url('gestion-digitale') }}" class="cr-readmore">
                                    <span>Lire la suite</span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <!--// Single Service -->




                    <!-- Single Service -->
                    <div class="col-lg-6 col-md-6 wow flipInX">
                        <div class="service">
                            <div class="service__icon">
                                <img src="{{ asset('client/images/icons/service-icon-assets.png')}}" alt="service icon"
                                    style="height: 35px;">
                            </div>
                            <div class="service__content">
                                <h5>
                                    <a href="{{ url('gestion-immobiliere') }}"> Plus : Gestion immobilière et formation
                                    </a>
                                </h5>
                                <p>
                                    En collaboration avec son partenaire historique, le cabinet d'architecture urbanisme
                                    METROPOLIS ...
                                </p>
                                <a href="{{ url('gestion-immobiliere') }}" class="cr-readmore">
                                    <span>Lire la suite</span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <!--// Single Service -->

                </div>
            </div>
        </div>
        <!--// Services Styles Bottom -->

    </section>
    <!--// Page Service Area -->




    <section id="pg-services-area" class="cr-section pg-services-area mt-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                    <div class="section-title text-center">
                        <h2>Nos Partenaires et Références</h2>
                    </div>
                </div>
            </div>
        </div>                    
    </section>

    <!-- About Area -->
    <section id="about-area" class="cr-section about-area bg--white mt-5">
        <div class="container">
            <div class="row align-items-center" style="background-color: #182a52;">
                <div class="col-lg-10 offset-lg-1">
                    <div class="about-area__content3 text-center">
                        {{-- <h2>NOS
                            <span class="color--theme">PARTENAIRES</span>
                        </h2> --}}
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="row align-items-center" style="margin-bottom: 100px">
                        <div class="col-lg-4">
                            <img src="client/images/partenaires/1.jpg" alt="about area image"
                                style="border-radius: 10px;">
                        </div>
                        <div class="col-lg-4">
                            <img src="client/images/partenaires/2.jpg" alt="about area image"
                                style="border-radius: 10px; ">
                        </div>
                        <div class="col-lg-4">
                            <img src="client/images/partenaires/3.jpg" alt="about area image"
                                style="border-radius: 10px;">
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="row align-items-center" style="margin-bottom: 100px">
                        <div class="col-lg-4">
                            <img src="client/images/partenaires/5.jpg" alt="about area image"
                                style="border-radius: 10px;">
                        </div>
                        <div class="col-lg-4">
                            <img src="client/images/partenaires/4.jpg" alt="about area image"
                                style="border-radius: 10px; ">
                        </div>
                        {{-- <div class="col-lg-4">
                            <img src="client/images/partenaires/3.jpg" alt="about area image"
                                style="border-radius: 10px;">
                        </div> --}}
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
                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque
                            ipsa Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci </p>
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

@endsection