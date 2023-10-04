<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content='pavilan'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$event_data->title}}</title>
    <link rel="icon" type="image/favicon.png" href="{{ asset('images/default/favicon.png') }}">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/theme1/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/css/owl-carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('front/theme1/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('common/plugins/magnific-popup/magnific-popup.css') }}">
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>
<body id="bg">
<div id="page" class="site boxed-layout">
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>
    @include('front.theme1.partials._header')
    @yield('content')
    @include('front.theme1.partials._footer')
</div>
<script src="{{ asset('front/theme1/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/theme1/js/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('front/theme1/js/popper.min.js') }}"></script>
<script src="{{ asset('front/theme1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/theme1/js/modernizr.min.js') }}"></script>
<script src="{{ asset('front/theme1/js/scrollup.js') }}"></script>
<script src="{{ asset('front/theme1/js/jquery-fancybox.min.js') }}"></script>
<script src="{{ asset('front/theme1/js/cubeportfolio.min.js') }}"></script>
<script src="{{ asset('front/theme1/js/slicknav.min.js') }}"></script>
<script src="{{ asset('front/theme1/js/slicknav.min.js') }}"></script>
<script src="{{ asset('front/theme1/js/owl-carousel.min.js') }}"></script>
<script src="{{ asset('front/theme1/js/easing.js') }}"></script>
<script src="{{ asset('front/theme1/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/theme1/js/active.js') }}"></script>
<script src="{{ asset('common/plugins/magnific-popup/magnific-popup.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.mg-image').magnificPopup({type: 'image'});
    });
</script>

@yield('js')
</body>
</html>
