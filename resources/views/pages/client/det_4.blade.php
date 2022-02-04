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
                        <h2> Nadège ADJOVI</h2>
                        <h5>Pôle Finance et Fiscalité</h5>
                        <p>
                            Nadège ADJOVI est détentrice d’un Master Spécialisé Audit et Contrôle de Gestion à l’INSEEC
                            Paris
                            (Institut des Hautes Etudes Commerciales).
                            Elle cumule plus de 10 années d’expériences en tant que auditrice pour le compte de grands
                            groupes
                            français. Elle intervient sur toutes
                            les problématiques relatives aux métiers de l’audit en entreprise notamment Le Contrôle du
                            respect des
                            procédures internes et de la
                            règlementation métier, la Maitrise des risques et de la préservation des actifs la Rédaction
                            et
                            publication des rapports d'audit,
                            la Conception et mise en œuvre des plan annuel d'audit et des programmes pluriannuels,
                            l’actualisation
                            de la cartographie des risques
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