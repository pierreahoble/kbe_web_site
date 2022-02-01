	<!-- Header -->
    <header id="header" class="header sticky--header">

        <!-- Header Top Area -->
        {{-- <div class="header__top bg--blue">
            <div class="container">
                <div class="header__top__inner">
                    <ul class="header__top__info">
                        <li>
                            <a href="#">
                                <i class="flaticon-old-typical-phone"></i> 01354 568 787</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="flaticon-black-back-closed-envelope-shape"></i> info@taxco.com</a>
                        </li>
                    </ul>
                    <div class="header__top__button">
                        <a class="cr-btn cr-btn--lg" href="appointment.html">
                            <span>Make an appointment</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--// Header Top Area -->

        <!-- Header Bottom Area -->
        <div class="header__bottom bg--white">
            <div class="container d-none d-lg-block">
                <div class="header__bottom__inner">
                    <div class="header__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('client/images/logo/logo-theme.png') }}" alt="header logo">
                        </a>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="main-navigation" class="header__menu main-navigation">
                        <ul>
                            <li >
                                <a href="{{ url('/') }}">ACCUEIL</a>
                            </li>
                            <li>
                                <a href="{{ url('apropos') }}">A PROPOS</a>
                            </li>
                            <li>
                                <a href="{{ url('nos-services') }}">NOS SERVICES</a>
                            </li>
                            <li>
                                <a href="{{ url('notre-equipe') }}">NOTRE EQUIPE</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}">CONTACT</a>
                            </li>
                        </ul>
                    </nav>
                    <!--// Main Navigation -->

                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="container d-block d-lg-none">
                <div class="mobile-menu clearfix d-md-block d-lg-none">
                    <a class="mobile-logo" href="{{ url('/') }}">
                        <img src="{{ asset('client/images/logo/logo-theme.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <!-- //Mobile Menu -->

        </div>
        <!--// Header Bottom Area -->

    </header>
    <!-- //Header -->



    