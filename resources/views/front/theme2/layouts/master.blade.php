<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap Css-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/bootstrap.min.css')}}">
    <!--Meanmenu Css-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/meanmenu.css')}}">
    <!--Owl carousel-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/owl.carousel.min.css')}}">
    <!--Owl Theme-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/owl.theme.default.min.css')}}">
    <!--Magnific-popup-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/magnific-popup.css')}}">
    <!--Flaticon-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/flaticon.css')}}">
    <!--Remixicon-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/remixicon.css')}}">
    <!--Odometer-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/odometer.min.css')}}">
    <!--Aos css-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/aos.css')}}">
    <!--Style css-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/style.css')}}">
    <!--Dark css-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/dark.css')}}">
    <!--Responsive css-->
    <link rel="stylesheet" href="{{ asset('front/theme2/assets/css/responsive.css')}}">
    <title>Irise - Staffing & Consulting Agency HTML Template</title>
    <link rel="icon" type="image/png" href="{{ asset('front/theme2/assets/images/favicon.png')}}">

    @yield('css')
</head>
<body id="bg">
<div id="page">

    <div class="preloader clock text-center">
        <div class="organiaLoader">
            <div class="loaderO">
                <span>I</span>
                <span>R</span>
                <span>I</span>
                <span>S</span>
                <span>E</span>
            </div>
        </div>
    </div>
    
    @include('front.theme2.partials._header')
    @yield('content')
    @include('front.theme2.partials._footer')
</div>
 <!-- Jquery js -->
 <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('front/theme2/assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap bundle js -->
<script src="{{ asset('front/theme2/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Meanmenu js -->
<script src="{{ asset('front/theme2/assets/js/jquery.meanmenu.js')}}"></script>
<!-- Owl Carosel js -->
<script src="{{ asset('front/theme2/assets/js/owl.carousel.min.js')}}"></script>
<!-- Magnific popup js -->
<script src="{{ asset('front/theme2/assets/js/jquery.magnific-popup.js')}}"></script>
<!-- Aos js -->
<script src="{{ asset('front/theme2/assets/js/aos.js')}}"></script>
<!-- Mixitup js -->
<script src="{{ asset('front/theme2/assets/js/mixitup.min.js')}}"></script>
<!-- Odometer js -->
<script src="{{ asset('front/theme2/assets/js/odometer.min.js')}}"></script>
<!-- Appear js -->
<script src="{{ asset('front/theme2/assets/js/appear.min.js')}}"></script>
<!-- Form Validator js -->
<script src="{{ asset('front/theme2/assets/js/form-validator.min.js')}}"></script>
<!-- Contact Form Script js -->
<script src="{{ asset('front/theme2/assets/js/contact-form-script.js')}}"></script>
<!-- Ajaxchimp js -->
<script src="{{ asset('front/theme2/assets/js/ajaxchimp.min.js')}}"></script>
<!--Custom js-->
<script src="{{ asset('front/theme2/assets/js/custom.js')}}"></script>

@yield('js')
</body>
</html>
