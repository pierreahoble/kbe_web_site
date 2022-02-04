@extends('layouts.base')



@section('main')





<!-- Breadcrumb Area -->
<div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="cr-breadcrumb">
                    <ul class="cr-breadcrumb__pagination">
                        <li><a href="{{ url('/') }}">ACCEUIL</a></li>
                        <li>EQUIPE</li>
                    </ul>
                    <h1>NOTRE EQUIPE</h1>
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



    <!-- Team Area -->
    <div id="team-area-3" class="advisor-area bg--white section-padding--xlg bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                    <div class="section-title text-center">
                        <h4>Notre equipe</h4>
                        <p>MERCANTO est constitué de consultants hautement qualifiés intervenant sur les continents
                            africain et européen.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="team-wrap">

                        <!-- Single Team -->
                        <div class="single-team active">
                            <div class="image">
                                <img src="client/images/advisors/advisor-3/advisor-1.jpg" alt="Advisor Thumb">
                            </div>
                            <div class="content">
                                <h6><a href="{{ url('detail-equipe',['id'=>1]) }}">Masmoud Dine</a></h6>
                                <h6><small>Pôle Finance et Fiscalité</small></h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--// Single Team -->

                        <!-- Single Team -->
                        <div class="single-team">
                            <div class="image">
                                <img src="client/images/advisors/advisor-3/advisor-2.jpg" alt="Advisor Thumb">
                            </div>
                            <div class="content">
                                <h6><a href="{{ url('detail-equipe',['id'=>2]) }}">SAMMIRA DERRES</a></h6>
                                <h6><small>Pôle Finance et Fiscalité</small></h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--// Single Team -->

                        <!-- Single Team -->
                        <div class="single-team">
                            <div class="image"><img src="client/images/advisors/advisor-3/advisor-3.jpg"
                                    alt="Advisor Thumb"></div>
                            <div class="content">
                                <h6><a href="{{ url('detail-equipe',['id'=>3]) }}">DJAOUDATH ALIDOU </a></h6>
                                <h6><small>Pôle finance et fiscalité</small></h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--// Single Team -->

                        <!-- Single Team -->
                        <div class="single-team">
                            <div class="image"><img src="client/images/advisors/advisor-3/advisor-4.jpg"
                                    alt="Advisor Thumb"></div>
                            <div class="content">
                                <h6><a href="{{ url('detail-equipe',['id'=>4]) }}">Nadège ADJOVI </a></h6>
                                <h6><small>Pôle finance et fiscalité</small></h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--// Single Team -->


                        <!-- Single Team -->
                        <div class="single-team">
                            <div class="image"><img src="client/images/advisors/advisor-3/advisor-4.jpg"
                                    alt="Advisor Thumb"></div>
                            <div class="content">
                                <h6><a href="{{url('detail-equipe',['id'=>5]) }}">Oscar ADJE </a></h6>
                                <h6><small>Pôle gestion digitale</small></h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--// Single Team -->


                        <!-- Single Team -->
                        <div class="single-team">
                            <div class="image"><img src="client/images/advisors/advisor-3/advisor-4.jpg"
                                    alt="Advisor Thumb"></div>
                            <div class="content">
                                <h6><a href="{{url('detail-equipe',['id'=>6]) }}">Alvinice KODJO </a></h6>
                                <h6><small>Pôle gestion digitale</small></h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--// Single Team -->



                        <!-- Single Team -->
                        <div class="single-team">
                            <div class="image"><img src="client/images/advisors/advisor-3/advisor-4.jpg"
                                    alt="Advisor Thumb"></div>
                            <div class="content">
                                <h6><a href="{{url('detail-equipe',['id'=>7]) }}">Florent AGBOBLI </a></h6>
                                <h6><small>Pôle gestion digitale</small></h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--// Single Team -->


                        <!-- Single Team -->
                        {{-- <div class="single-team">
                            <div class="image"><img src="client/images/advisors/advisor-3/advisor-4.jpg"
                                    alt="Advisor Thumb"></div>
                            <div class="content">
                                <h6><a href="{{url('detail-equipe',['id'=>8]) }}">Masmoud DINE </a></h6>
                                <h6><small>Pôle finance et fiscalité</small></h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <!--// Single Team -->



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Team Area -->

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
                            totam rem aperiam, eaque ipsa Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet, consectetur, adipisci </p>
                            <h6>Il suffit de composer
                                <a href="#">(+229) 61 63 57 06 / 60 18 98 98</a> 
                            </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Call To Action Area -->

</main><!-- //Page Conent -->


@endsection