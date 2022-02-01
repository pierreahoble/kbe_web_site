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
                            <h1>INQUIET
                                <span class="color--theme">ABOUT A PROPOS DE VOTRE SITE WEB?</span> NOUS SOMMES EXPERTS EN
                                <span class="color--theme">CONCEPTION DE SITE WEB</span>
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
                            <h1>WORRIED
                                <span class="color--theme">ABOUT TAX?</span> WE ARE EXPERT IN
                                <span class="color--theme">TAX</span> SOLUTIONS
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
                            <h1>WORRIED
                                <span class="color--theme">ABOUT TAX?</span> WE ARE EXPERT IN
                                <span class="color--theme">TAX</span> SOLUTIONS
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
                            <h4>WE ARE “
                                <span class="color--theme">KBE TECHNOLOGIES</span>”
                            </h4>
                            <h3 class="cd-headline cx-heading slide">PROVIDE BEST TAX SOLUTION FOR YOUR
                                <span class="color--theme cd-words-wrapper cd-words-wrapper-2">
                                    <b class="is-visible">Business</b>
                                    <b>Performance</b>
                                    <b>Success</b>
                                </span>
                                TO GROWUP
                            </h3>
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque
                                ipsa quae </p>
                            <p>Parchitect beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit aspernatur aut odit aut
                                fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                nesciunt. Neque porro quisquam est,
                                qui dolorem</p>
                            <a href="about-us.html" class="cr-btn">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //About Area -->

    <!-- Features Area -->
    <section id="features-area" class="cr-section features-area">
        <div class="row no-gutters">

            <!-- Single Feature -->
            <div class="col-lg-4">
                <div class="feature">
                    <div class="feature__icon">
                        <span>
                            <i class="flaticon-shield"></i>
                        </span>
                        <span>
                            <i class="flaticon-shield"></i>
                        </span>
                    </div>
                    <div class="feature__content">
                        <h4 class="wow fadeInUp">
                            <a href="features.html">ENSURE SECURITY</a>
                        </h4>
                        <p class="wow fadeInUp" data-wow-delay="0.15s">Perspiciatis unde omnis ist natus error
                            sit voluptatem accusantium loremque tium totam rem aperiam eaque </p>
                    </div>
                </div>
            </div>
            <!--// Single Feature -->

            <!-- Single Feature -->
            <div class="col-lg-4">
                <div class="feature active">
                    <div class="feature__icon">
                        <span>
                            <i class="flaticon-team"></i>
                        </span>
                        <span>
                            <i class="flaticon-team"></i>
                        </span>
                    </div>
                    <div class="feature__content">
                        <h4 class="wow fadeInUp">
                            <a href="features.html">EXPERT TEAM</a>
                        </h4>
                        <p class="wow fadeInUp" data-wow-delay="0.15s">Perspiciatis unde omnis ist natus error
                            sit voluptatem accusantium loremque tium totam rem aperiam eaque </p>
                    </div>
                </div>
            </div>
            <!--// Single Feature -->

            <!-- Single Feature -->
            <div class="col-lg-4">
                <div class="feature">
                    <div class="feature__icon">
                        <span>
                            <i class="flaticon-24-hours"></i>
                        </span>
                        <span>
                            <i class="flaticon-24-hours"></i>
                        </span>
                    </div>
                    <div class="feature__content">
                        <h4 class="wow fadeInUp">
                            <a href="features.html">24/7 SUPPORT</a>
                        </h4>
                        <p class="wow fadeInUp" data-wow-delay="0.15s">Perspiciatis unde omnis ist natus error
                            sit voluptatem accusantium loremque tium totam rem aperiam eaque </p>
                    </div>
                </div>
            </div>
            <!--// Single Feature -->

        </div>
    </section>
    <!--// Features Area -->

    <!-- Service Area -->
    <section id="service-area" class="service-area section-padding--xlg bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h4>NOS SERVICES</h4>
                        <h2>FOURNIR LES MEILLEURS
                            <span class="color--theme">SERVICES</span>
                        </h2>
                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque
                            ipsa quae</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="service-area__services">
                        <div class="row">

                            <!-- Single Service -->
                            <div class="col-lg-6 col-md-6 wow flipInX">
                                <div class="service">
                                    <div class="service__icon">
                                        <img src="{{ asset('client/images/icons/service-icon-mobile-app.png')}}"
                                            alt="service icon" style="height: 35px;">
                                    </div>
                                    <div class="service__content">
                                        <h5>
                                            <a href="single-service.html">CONCEPTION D'UNE APPLICATION  WEB</a>
                                        </h5>
                                        <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium
                                            loremque tium totam rem per </p>
                                    </div>
                                </div>
                            </div>
                            <!--// Single Service -->

                            <!-- Single Service -->
                            <div class="col-lg-6 col-md-6 wow flipInX">
                                <div class="service">
                                    <div class="service__icon">
                                        <img src="{{ asset('client/images/icons/service-icon-app-development.png')}}"
                                            alt="service icon" style="height: 35px;">
                                    </div>
                                    <div class="service__content">
                                        <h5>
                                            <a href="single-service.html">CONCEPTION D'APPLICATION MOBILE</a>
                                        </h5>
                                        <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium
                                            loremque tium totam rem per </p>
                                    </div>
                                </div>
                            </div>
                            <!--// Single Service -->

                            <!-- Single Service -->
                            <div class="col-lg-6 col-md-6 wow flipInX">
                                <div class="service">
                                    <div class="service__icon">
                                        <img src="{{ asset('client/images/icons/service-icon-flyer.png')}}"
                                            alt="service icon" style="height: 40px;">
                                    </div>
                                    <div class="service__content">
                                        <h5>
                                            <a href="single-service.html">CONCEPTION DE VOS CREAS</a>
                                        </h5>
                                        <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium
                                            loremque tium totam rem per </p>
                                    </div>
                                </div>
                            </div>
                            <!--// Single Service -->

                            <!-- Single Service -->
                            <div class="col-lg-6 col-md-6 wow flipInX">
                                <div class="service">
                                    <div class="service__icon">
                                        <img src="{{ asset('client/images/icons/service-icon-maintenance.png')}}"
                                            alt="service icon" style="height: 35px;">
                                    </div>
                                    <div class="service__content">
                                        <h5>
                                            <a href="single-service.html">MAINTENANCE INFORMATIQUE</a>
                                        </h5>
                                        <p>Perspiciatis unde omnis ist natus error sit voluptatem accusantium
                                            loremque tium totam rem per </p>
                                    </div>
                                </div>
                            </div>
                            <!--// Single Service -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-area__bars text-center">
                        <div class="cr-bars justify-content-lg-end justify-content-center">
                            <div class="cr-bar" data-bar-percent="25" data-bar-title="2013"></div>
                            <div class="cr-bar" data-bar-percent="45" data-bar-title="2014"></div>
                            <div class="cr-bar" data-bar-percent="37" data-bar-title="2015"></div>
                            <div class="cr-bar" data-bar-percent="69" data-bar-title="2016"></div>
                            <div class="cr-bar" data-bar-percent="88" data-bar-title="2017"></div>
                        </div>
                        <span class="cr-bars__name">Our progress</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Service Area -->

 

    <!-- Team Area -->
    <section id="team-area" class="advisor-area bg--white section-padding--xlg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                    <div class="section-title text-center">
                        <h4>NOTRE EQUIPE</h4>
                        <h2>RENCONTREZ NOTRE 
                            <span class="color--theme">CONSEILLER</span>
                        </h2>
                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque
                            ipsa quae</p>
                    </div>
                </div>
            </div>
            <div class="row advisors">

                <!-- Single Advisor -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <figure class="advisor">
                        <div class="advisor__image">
                            <img src="{{ asset('client/images/advisors/advisor-1.jpg')}}" alt="team member">
                        </div>
                        <figcaption class="advisor__content">
                            <h6>
                                <a href="advisor-details.html">SIMON DE ANDERSON</a>
                            </h6>
                            <p>Senior Advisor</p>
                        </figcaption>
                    </figure>
                </div>
                <!--// Single Advisor -->

                <!-- Single Advisor -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <figure class="advisor">
                        <div class="advisor__image">
                            <img src="{{ asset('client/images/advisors/advisor-2.jpg')}}" alt="team member">
                        </div>
                        <figcaption class="advisor__content">
                            <h6>
                                <a href="advisor-details.html">JUlia ANDERSON</a>
                            </h6>
                            <p>Senior Advisor</p>
                        </figcaption>
                    </figure>
                </div>
                <!--// Single Advisor -->

                <!-- Single Advisor -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <figure class="advisor">
                        <div class="advisor__image">
                            <img src="{{ asset('client/images/advisors/advisor-3.jpg')}}" alt="team member">
                        </div>
                        <figcaption class="advisor__content">
                            <h6>
                                <a href="advisor-details.html">David Miller</a>
                            </h6>
                            <p>Tax Advisor</p>
                        </figcaption>
                    </figure>
                </div>
                <!--// Single Advisor -->

                <!-- Single Advisor -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <figure class="advisor">
                        <div class="advisor__image">
                            <img src="{{ asset('client/images/advisors/advisor-4.jpg')}}" alt="team member">
                        </div>
                        <figcaption class="advisor__content">
                            <h6>
                                <a href="advisor-details.html">Martin Smith</a>
                            </h6>
                            <p>Tax Advisor</p>
                        </figcaption>
                    </figure>
                </div>
                <!--// Single Advisor -->

            </div>
        </div>
    </section>
    <!--// Team Area -->

    <!-- Funfact Area -->
    <div id="funfact-area" class="funfact-area bg--white">
        <div class="funfacts">
            <div class="row no-gutters">

                <!--  Single Funfact -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="funfact text-center">
                        <h1>
                            <span class="counter">349</span>
                        </h1>
                        <h5>CLIENTS DE CONFIANCE</h5>
                    </div>
                </div>
                <!--//  Single Funfact -->

                <!--  Single Funfact -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="funfact text-center">
                        <h1>
                            <span class="counter">109</span>
                        </h1>
                        <h5>Gagner des récompenses</h5>
                    </div>
                </div>
                <!--//  Single Funfact -->

                <!--  Single Funfact -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="funfact text-center">
                        <h1>
                            <span class="counter">459</span>
                        </h1>
                        <h5>Projet terminé</h5>
                    </div>
                </div>
                <!--//  Single Funfact -->

                <!--  Single Funfact -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="funfact text-center">
                        <h1>
                            <span class="counter">19</span>
                        </h1>
                        <h5>Conseiller expert</h5>
                    </div>
                </div>
                <!--//  Single Funfact -->

            </div>
        </div>
    </div>
    <!--// Funfact Area -->

    <!-- Testimonial Area -->
    <div id="testimonial-area" class="testimonial-area section-padding--xlg bg--grey">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                    <div class="testimonial text-center">

                        <!-- Testimonial Content -->
                        <div class="testimonial__content testimonial-content-slider-active">

                            <!-- Testimonial Content Single -->
                            <div class="testimonial__content__single">
                                <p>Parchitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                    sequi nesciunt. Neque porro quisquam
                                    quia consequuntur magni dolores eos qui ratione voluptatem </p>
                            </div>
                            <!--// Testimonial Content Single -->

                            <!-- Testimonial Content Single -->
                            <div class="testimonial__content__single">
                                <p>Parchitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                    sequi nesciunt. Neque porro quisquam
                                    quia consequuntur magni dolores eos qui ratione voluptatem </p>
                            </div>
                            <!--// Testimonial Content Single -->

                            <!-- Testimonial Content Single -->
                            <div class="testimonial__content__single">
                                <p>Parchitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                    sequi nesciunt. Neque porro quisquam
                                    quia consequuntur magni dolores eos qui ratione voluptatem </p>
                            </div>
                            <!--// Testimonial Content Single -->

                            <!-- Testimonial Content Single -->
                            <div class="testimonial__content__single">
                                <p>Parchitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                    sequi nesciunt. Neque porro quisquam
                                    quia consequuntur magni dolores eos qui ratione voluptatem </p>
                            </div>
                            <!--// Testimonial Content Single -->

                            <!-- Testimonial Content Single -->
                            <div class="testimonial__content__single">
                                <p>Parchitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                    sequi nesciunt. Neque porro quisquam
                                    quia consequuntur magni dolores eos qui ratione voluptatem </p>
                            </div>
                            <!--// Testimonial Content Single -->

                            <!-- Testimonial Content Single -->
                            <div class="testimonial__content__single">
                                <p>Parchitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                    quia voluptas sit aspernatur aut odit
                                    aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                    sequi nesciunt. Neque porro quisquam
                                    quia consequuntur magni dolores eos qui ratione voluptatem </p>
                            </div>
                            <!--// Testimonial Content Single -->

                        </div>
                        <!--// Testimonial Content -->

                        <!-- Testimonial Author -->
                        <div class="testimonial__author testimonial-author-slider-active">

                            <!-- Single Author -->
                            <div class="testimonial__author__single">
                                <div class="testimonial__author__image">
                                    <img src="{{ asset('client/images/testimonial/testimonial-author-1.png')}}"
                                        alt="testimonial author">
                                </div>
                                <div class="testimonial__author__description">
                                    <h6>DAVID MILLER</h6>
                                    <span>President</span>
                                </div>
                            </div>
                            <!--// Single Author -->

                            <!-- Single Author -->
                            <div class="testimonial__author__single">
                                <div class="testimonial__author__image">
                                    <img src="{{ asset('client/images/testimonial/testimonial-author-2.png')}}"
                                        alt="testimonial author">
                                </div>
                                <div class="testimonial__author__description">
                                    <h6>RAISA MARIYA</h6>
                                    <span>CEO</span>
                                </div>
                            </div>
                            <!--// Single Author -->

                            <!-- Single Author -->
                            <div class="testimonial__author__single">
                                <div class="testimonial__author__image">
                                    <img src="{{ asset('client/images/testimonial/testimonial-author-3.png')}}"
                                        alt="testimonial author">
                                </div>
                                <div class="testimonial__author__description">
                                    <h6>SHON SMITH</h6>
                                    <span>Executive</span>
                                </div>
                            </div>
                            <!--// Single Author -->

                            <!-- Single Author -->
                            <div class="testimonial__author__single">
                                <div class="testimonial__author__image">
                                    <img src="{{ asset('client/images/testimonial/testimonial-author-1.png')}}"
                                        alt="testimonial author">
                                </div>
                                <div class="testimonial__author__description">
                                    <h6>DAVID MILLER</h6>
                                    <span>President</span>
                                </div>
                            </div>
                            <!--// Single Author -->

                            <!-- Single Author -->
                            <div class="testimonial__author__single">
                                <div class="testimonial__author__image">
                                    <img src="{{ asset('client/images/testimonial/testimonial-author-2.png')}}"
                                        alt="testimonial author">
                                </div>
                                <div class="testimonial__author__description">
                                    <h6>RAISA MARIYA</h6>
                                    <span>CEO</span>
                                </div>
                            </div>
                            <!--// Single Author -->

                            <!-- Single Author -->
                            <div class="testimonial__author__single">
                                <div class="testimonial__author__image">
                                    <img src="{{ asset('client/images/testimonial/testimonial-author-3.png')}}"
                                        alt="testimonial author">
                                </div>
                                <div class="testimonial__author__description">
                                    <h6>SHON SMITH</h6>
                                    <span>Executive</span>
                                </div>
                            </div>
                            <!--// Single Author -->

                        </div>
                        <!--// Testimonial Author -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Testimonial Area -->

 

    <!-- Call To Action Area -->
    <section id="cta-area" class="cta-area section-padding--sm bg--grey--light bg--abstruct-mask">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 offset-0">
                    <div class="calltoaction text-center">
                        <h3>NEED ANY HELP AT
                            <span class="color--theme"> YOUR TAX SOLUTION?</span>
                        </h3>
                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque
                            ipsa Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci </p>
                        <h6>JUST DAIL
                            <a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Call To Action Area -->

</main>

@endsection