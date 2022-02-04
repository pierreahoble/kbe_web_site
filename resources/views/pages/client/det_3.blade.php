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
                        <h2>DJAOUDATH ALIDOU</h2>
                        <h5>Pôle Finance et Fiscalité</h5>
                        <p>
                            Djaoudath ALIDOU a plus de dix années d'expérience dans l'enseignement supérieur. Elle
                            détient un
                            Doctorat
                            en Sciences de Gestion option Finance de l’Université de DIJON. Elle est actuellement Maître
                            Assistant
                            des Universités du
                            CAMES et enseigne à l'Institut Universitaire de Technologie de Parakou (Université de
                            Parakou).
                            Ses recherches portent sur la politique de financement et de gouvernance aussi bien au
                            niveau des
                            entreprises que du secteur public
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