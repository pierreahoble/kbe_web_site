@extends('layouts.base')



@section('main')


<!-- Advisor Details -->
<div class="advisor-details-area bg--white section-padding--xlg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pg-advisor">
                    <div class="pg-advisor__thumb">
                        <img src="{{ asset('client/images/advisors/advisor-details/advisor-1.jpg') }}"
                            alt="Advisor Details Thumb">
                    </div>
                    <div class="pg-advisor__details">
                        <h2> Oscar ADJE </h2>
                        <h5>Pôle gestion digitale</h5>
                        <p>
                            Détenteur d’une licence en administration des finances et d’une connaissance aigue des
                            langages
                            informatiques tels que Python java,
                            Oscar Adje, de par son haut niveau de technicité contribue à la modélisation des
                            informatique des
                            différentes solutions financières
                            comptables et fiscales, permettant à l’ensemble de nos clients
                            d’appréhender l’ère du digital en toute inquiétude. Il est le consultant dont les clients de
                            MERCANTO
                            ne peuvent plus se passer.
                            C’est notre Atout N°1.
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Advisor Details -->



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


@endsection