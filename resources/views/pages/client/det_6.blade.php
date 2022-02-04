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
                        <h2> Alvinice KODJO </h2>
                        <h5>Pôle gestion digitale</h5>
                        <p>
                            Alvinice KODJO est docteur en informatique (NICE SOFIA ANTIPOLIS)
                            Spécialiste en analyste de données elle intervient sur les questions relatives à la DATA SCIENCE le
                            DEVELOPPEMENT INFORMATIQUE
                            les BASES DE DONNÉES l’OPTIMISATION & STATISTIQUES Et l’ETUDE DES BESOINS & ARCHITECTURE DES
                            SOLUTIONS.
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