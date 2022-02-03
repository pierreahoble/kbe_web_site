@extends('layouts.base')




@section('main')

<!-- Breadcrumb Area -->
<div id="cr-breadcrumb-area" class="cr-breadcrumb-area section-padding--md">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="cr-breadcrumb">
                    <ul class="cr-breadcrumb__pagination">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li>Contact</li>
                    </ul>
                    <h1>Nous Contacté</h1>
                    {{-- <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                        rem </p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Page Conent -->
<main class="page-content">

    <!-- Pg Contact -->
    <div class="pg-contact bg--white">

        <!-- Contact Form -->
        <div class="pg-contact-form-area bg--white section-padding--xlg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="pg-appintment">
                            <div class="pg-appintment__title">
                                <h2>ENVOYER UN MESSAGE</h2>
                            </div>
                            <div class="pg-appintment__box">
                                <form id="contact-forms" action="#" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-input">
                                                <input type="text" name="name" id="name" placeholder="Nom" required >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-input">
                                                <input type="email" name="email" id="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-input">
                                                <input type="text" name="subject" id="subject" placeholder="Sujet" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-input">
                                                <input type="text" name="phone" id="phone" placeholder="Téléphone" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-input">
                                                <textarea name="message" cols="30" rows="5"
                                                    placeholder="Messages"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-input button text-left">
                                                <button type="submit" class="cr-btn"><span>Envoyer</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-message"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 d-none d-lg-block">
                        <div class="pg-contact-img ml-xl-5 ml-0">
                            <img src="client/images/others/contact-image.jpg" alt="contact image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Contact Form -->

        <div class="google-map-wrapper">
            <div id="google-map" class="google-map"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9">
                        <div class="pg-contact__content">
                            <h1>DITES-NOUS BONJOUR</h1>
                            <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem </p>
                            <div class="pg-contact__blocks">
                                <div class="single-block address">
                                    <h6>adresse</h6>
                                    <p>256 Notrh Tower, Western City Mid Town, Las Vagas, USA</p>
                                </div>
                                <div class="single-block phone">
                                    <h6>Téléphone</h6>
                                    <p><a href="#">+008 12568 987 789</a></p>
                                    <p><a href="#">+008 35687 567 458</a></p>
                                </div>
                                <div class="single-block web">
                                    <h6>Site Web</h6>
                                    <p><a href="#">kbe-technologies.com</a></p>
                                    <p><a href="#">www@taxco.com</a></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="pg-contact__newsletter">
                                        <h5>ABONNEZ-VOUS AUSSI À NOTRE NEWSLETTER POUR ÊTRE UPTODAE</h5>
                                        <form
                                            action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                            method="post" target="_blank">
                                            <input type="email" name="EMAIL" class="email" id="mce-EMAIL"
                                                placeholder="Votre e-mail ici" required>
                                            <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--// Pg Contact -->

    <!-- Call To Action Area -->
    <section id="cta-area" class="cta-area section-padding--sm bg--grey--light bg--abstruct-mask">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 offset-0">
                    <div class="calltoaction text-center">
                        <h3>NEED ANY HELP AT<span class="color--theme"> YOUR TAX SOLUTION?</span></h3>
                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                            amet, consectetur, adipisci </p>
                        <h6>JUST DAIL <a href="callto://+00812548359874">+008 12548 359 874</a> (TOLL FREE)</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// Call To Action Area -->

</main><!-- //Page Conent -->



@section('script')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0"></script>
<script>
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 12,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(6.2063824, 1.1432229), // Lome

            // How you would like to style the map. 
            // This is where you would paste any style found on

            styles:[
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e9e9e9"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dedede"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('google-map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(6.2063824, 1.1432229),
            map: map,
            title:'KBE TECHNOLOGIES',
            icon:"client/images/icons/marker.png",
            animation:google.maps.Animation.BOUNCE
        });
    }
</script>

@endsection


@endsection