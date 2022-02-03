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
                                <img src="{{ asset('client/images/icons/service-icon-assets.png')}}"
                                    alt="service icon" style="height: 70px;">
                            </span>
                            <div class="pg-features__content">
                                <h3>Plus : Gestion immobilière et formation</h3>
                                <p>
                                    En collaboration avec son partenaire historique, le cabinet d'architecture urbanisme
                                    METROPOLIS (BURKINA-FASO, BENIN), MERCANTO intervient dans :
                                </p>
                                <ul>
                                    <li>La définition de vos projets immobiliers;</li>
                                    <li>La conception de programmes immobiliers innovants;</li>
                                    <li>L'expertise immobilière;</li>
                                    <li>L'évaluation des biens immobiliers mis en garantie;</li>
                                </ul>

                                <p>
                                    MERCANTO propose également une gamme variée de formation sur mesure pour ses clients
                                    dans ses domaines de prédilection que sont la Gestion digitale, l'Optimisation
                                    fiscale et l'Ingénierie financière ainsi que la responsabilité sociale des
                                    entreprises en Afrique et dans le monde, avec madame ZAHRA ID AHMED consultante
                                    internationale en stratégie et communication organisationnelle.
                                </p>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 wow fadeInRight order-1 order-lg-2">
                        <div class="pg-features__thumb">
                            <img src="client/images/feature/feature-thumb-3.jpg" alt="feature thumb 1">
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