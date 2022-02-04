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
                        <h2>SAMMIRA DERRES</h2>
                        <h5>Pôle Finance et Fiscalité</h5>
                        <p>
                            Samira DERRES est avocate fiscaliste, détentrice d’un Certificat d’Aptitude à la Profession
                            d’Avocat –
                            Ecole de Formation professionnelle
                            des Barreaux de la Cour d’Appel de Paris. Elle intervient sur des problématiques en matières
                            de
                            restructuration d’entreprise
                            (fusion/TUP, transfert de déficits, cession de fonds ou titres...) de gestion patrimoniale
                            et/ou de
                            transmission d’entreprise
                            (déclarations IR/ISF, donations, pacte Dutreil...), de Suivi des contentieux fiscaux
                            (assistance lors
                            de vérification de comptabilité,
                            réponse à notification, saisine de commissions, réclamation contentieuse, saisine des
                            tribunaux...)
                            et d’Analyse des opportunités fiscales et recherche de pistes d'optimisation en France et à
                            l’international.
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