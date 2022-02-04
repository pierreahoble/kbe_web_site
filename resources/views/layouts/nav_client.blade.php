	<!-- Header -->
    <header id="header" class="header sticky--header">

        <!-- Header Top Area -->
        <div class="header__top bg--blue">
            <div class="container">
                <div class="header__top__inner">
                    <ul class="header__top__info">
                        <li>
                            <a href="#">
                                <i class="flaticon-old-typical-phone"></i>  +229 61 63 57 06 / 60 18 98 98</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="flaticon-black-back-closed-envelope-shape"></i> contact@mercanto.net</a>
                        </li>
                    </ul>
                    {{-- <div class="header__top__button">
                        <a class="cr-btn cr-btn--lg" href="{{ url('prendre-un-rendez-vous') }}">
                            <span>Prendre rendez-vous</span>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!--// Header Top Area -->

        <!-- Header Bottom Area -->
        <div class="header__bottom bg--white">
            <div class="container d-none d-lg-block">
                <div class="header__bottom__inner">
                    <div class="header__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('client/images/logo/logo-theme.jpg') }}" alt="header logo" style="height: 90px;">
                        </a>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="main-navigation" class="header__menu main-navigation">
                        <ul>
                            <li >
                                <a href="{{ url('/') }}" style="{{ request()->is('/')? 'color: #13aae1':'' }}">ACCUEIL</a>
                            </li>
                            <li>
                                <a href="{{ url('apropos') }}" style="{{ request()->is('apropos')? 'color: #13aae1':'' }}">A PROPOS</a>
                            </li>
                            <li class="cr-dropdown">
                                <a href="#" >NOS SERVICES</a>
                                <ul class="cr-dropdown-menu">
                                    <li>
                                        <a href="{{ url('ingenerie-financiere') }}" style="{{ request()->is('ingenerie-financiere')? 'color: #13aae1':'' }}">L'ingénierie financière</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('optimisation-fiscale') }}" style="{{ request()->is('optimisation-fiscale')? 'color: #13aae1':'' }}">L'optimisation fiscale et la gestion patrimoniale</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('gestion-digitale') }}" style="{{ request()->is('gestion-digitale')? 'color: #13aae1':'' }}">Gestion digitale</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('gestion-immobiliere') }}" style="{{ request()->is('gestion-immobiliere')? 'color: #13aae1':'' }}">Plus : Gestion immobilière et formation</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('notre-equipe') }}" style="{{ request()->is('notre-equipe')? 'color: #13aae1':'' }}">NOTRE EQUIPE</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}" style="{{ request()->is('contact')? 'color: #13aae1':'' }}">CONTACT</a>
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



    