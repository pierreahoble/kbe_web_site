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
                            <a href="{{ url('/') }}">ACCEUIL</a>
                        </li>
                        <li>Services</li>
                    </ul>
                    <h1>Nos Services</h1>
                    {{-- <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam
                        rem </p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Page Conent -->
<main class="page-content">

    <!-- Page Service Area -->
    <section id="pg-services-area" class="cr-section pg-services-area mt-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                    <div class="section-title text-center">
                        <h2>Nos Services</h2>
                        <p>
                            <span class="color--theme">
                                FINANCE - GESTION DIGITAL E - FISCALITE
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Styles Bottom -->
        {{-- <div class="pg-services-area__srevicelist servicelist--style2">
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
                                    <a href="#">L'ingénierie financière </a>
                                </h5>
                                <p>
                                    MERCANTO, en collaboration avec ses partenaires et institutions financières
                                    affiliées, met à la disposition de ses clients toute sa compétence en matière de :
                                </p>
                                <ul>
                                    <li>De définition de la stratégie financière;</li>
                                    <li>De pilotage de l’entreprise dans le bit de l’anticipation des imprévus;</li>
                                    <li>D'optimisation de vos investiments;</li>
                                    <li>De gestion financière, comptable et fiscale;</li>
                                    <li>D'analyse des coûts;</li>
                                    <li>De gestion budgétaire;</li>
                                    <li>D'analyse des différentes performances de l'entreprise</li>
                                    <li>De réalisation d'étude de faisabilité et de conception de business Plan;</li>
                                    <li>D'audit comptable et financier;</li>
                                    <li>D'audit d'acquisition pour la reprise d'entreprise;</li>
                                    <li>D'audit des procédures et du contrôle interne.</li>
                                </ul>

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
                                    <a href="#">L'optimisation fiscale et la gestion patrimoniale</a>
                                </h5>
                                <p>
                                    MERCANTO, en s’appuyant sur la compétence reconnue de ses consultants met à votre
                                    disposition toute son expertise en matière d'audit fiscal et de gestion patrimoniale
                                    afin de vous permettre de :
                                </p>

                                <ul>
                                    <li>De définition de la stratégie financière;</li>
                                    <li>Payer moins d'impôts: défiscalisation immobilière et produits de
                                        défiscalisation;</li>
                                    <li>Développer votre patrimoine : Placements immobiliers, placements financiers,
                                        Assurance prévoyance;</li>
                                    <li>De gestion financière, comptable et fiscale;</li>
                                    <li>Préparer séreinement votre retraite, Protéger vos proches: protection familiale;
                                    </li>
                                    <li>Transmettre son patrimoine: Prévoyance retraite, investir dans l'immobilier;
                                    </li>
                            </div>
                        </div>
                    </div>
                    <!--// Single Service -->

                </div>
            </div>
        </div> --}}
        <!--// Services Styles Bottom -->

    </section>
    <!--// Page Service Area -->



    <!-- Features Area -->
    <section id="pg-features-area" class="cr-section pg-features-area ">
        <div class="container">
            <div class="pg-features">
                <div class="row align-items-end">
                    <div class="col-xl-8 col-lg-7 order-2 order-lg-1">
                        <div class="pg-features__description">
                            <span class="pg-features__icon">
                                <img src="{{ asset('client/images/icons/service-icon-laptop.png')}}" alt="service icon"
                                    style="height: 70px;">
                            </span>
                            <div class="pg-features__content">
                                <h3>L'ingénierie financière</h3>
                                <p>
                                    MERCANTO, en collaboration avec ses partenaires et institutions financières
                                    affiliées, met à la disposition de ses clients toute sa compétence en matière de :
                                </p>

                                <ul>
                                    <li>De définition de la stratégie financière;</li>
                                    <li>De pilotage de l’entreprise dans le bit de l’anticipation des imprévus;</li>
                                    <li>D'optimisation de vos investiments;</li>
                                    <li>De gestion financière, comptable et fiscale;</li>
                                    <li>D'analyse des coûts;</li>
                                    <li>De gestion budgétaire;</li>
                                    <li>D'analyse des différentes performances de l'entreprise</li>
                                    <li>De réalisation d'étude de faisabilité et de conception de business Plan;</li>
                                    <li>D'audit comptable et financier;</li>
                                    <li>D'audit d'acquisition pour la reprise d'entreprise;</li>
                                    <li>D'audit des procédures et du contrôle interne.</li>
                                </ul>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 wow fadeInRight order-1 order-lg-2">
                        <div class="pg-features__thumb">
                            <img src="client/images/feature/feature-thumb-4.jpg" alt="feature thumb 1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Features Area -->




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
<!-- //Page Conent -->





@endsection