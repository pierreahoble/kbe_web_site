<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/korde/korde/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2020 14:46:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Korde - Tax Service HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png')}}">

    <!-- Google font (font-family: 'Josefin Sans', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('client/style.css') }}">

    <!-- Cusom css -->
    <link rel="stylesheet" href="{{ asset('client/css/custom.css') }}">

    <!-- Modernizer js -->
    <script src="{{ asset('client/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Add your site or application content here -->


    <div class="fakeloader"></div>

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">


        @include('layouts.nav_client')




        <!-- Page Conent -->
        @yield('main')
        <!-- //Page Conent -->



        <!-- Footer Area -->
        @include('layouts.footer_client')

        <!-- //Footer Area -->

    </div>
    <!-- //Main wrapper -->
    <!-- Google Map -->
    @yield('script')
    <!-- JS Files -->
    <script src="{{ asset('client/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('client/js/popper.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('client/js/plugins.js') }}"></script>
    <script src="{{ asset('client/js/active.js') }}"></script>
    <script src="{{ asset('client/js/scripts.js') }}"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/korde/korde/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jun 2020 14:46:56 GMT -->

</html>