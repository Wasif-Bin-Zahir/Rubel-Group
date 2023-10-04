@extends('front.theme1.layouts.master')

@section('content')

<section class="hero-slider style1">
    <div class="home-slider" style="height: 680px;">
        @foreach ($data->sliders as $slider)
        <div class="single-slider" style="background-image:url('{{ $slider->image->file_url ?? url('images/default/slider.png') }}'); height: 680px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">

                    </div>
                </div>
            </div>


        </div>
        @endforeach
    </div>
</section>







<section class="features-area section-bg bg-white">
    <div class="container">
        <div class="row">


            <div class="col-md-8";>
                @if (!empty($data->welcomeMessage))
                <div class="col-12">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                        <div class="section-title default text-center mb-0">
                            <div class="section-top">
                                <h1><b>{{ __('cms.welcome_message') }}</b></h1>
                            </div>
                        </div>
                    </div>
                    <div class="section-title default text-center mb-0">
                        <div class="section-top text-justify">
                            {!! $data->welcomeMessage->description !!}
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-12 text-center display: flex  justify-content: center">
                    <img src="{{ asset('common/img/empty-block.png') }}" alt="Empty Block">
                </div>
                @endif
            </div>


            <div class="col-md-4">


                <div style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); max-width: 600px;">
                    <div style="margin-bottom: 30px;">
                        <h2 style="font-size: 24px; margin-bottom: 10px;">Countdown to Exhibition</h2>
                        <div style="font-size: 20px; display: flex;">
                            <div style="flex: 1; background-color: #007bff; color: white; text-align: center; padding: 10px; margin: 5px;">
                                12<span style="font-size: 14px;">Days</span></div>
                            <div style="flex: 1; background-color: #007bff; color: white; text-align: center; padding: 10px; margin: 5px;">
                                08<span style="font-size: 14px;">Hours</span></div>
                            <div style="flex: 1; background-color: #007bff; color: white; text-align: center; padding: 10px; margin: 5px;">
                                40<span style="font-size: 14px;">Mins</span></div>
                            <div style="flex: 1; background-color: #007bff; color: white; text-align: center; padding: 10px; margin: 5px;">
                                55<span style="font-size: 14px;">Secs</span></div>
                        </div>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h2 style="font-size: 24px; margin-bottom: 10px;">Registered Visitors</h2>
                        <div style="font-size: 20px; display: flex;">
                            <div style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                0</div>
                            <div style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                0</div>
                            <div style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                0</div>
                            <div style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                0</div>
                            <div style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                0</div>
                            <div style="flex: 1; background-color: #00cc66; color: white; text-align: center; padding: 10px; margin: 5px;">
                                0</div>
                        </div>
                    </div>

                    <div>
                        <h2 style="font-size: 24px; margin-bottom: 10px;">Exhibition Location</h2>
                        <iframe src="https://www.google.com/maps/d/embed?mid=1eI6iqbO3TQfnWZekhs_P18a541c&hl=en_US&ehbc=2E312F" width="300" height="200"></iframe>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>


<section class="features-area section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center mb-0">
                    <div class="section-top">
                        <h1><b>{{ __('cms.latest_event') }}</b></h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="margin-top: -15px;">
            <div class="centered-content" style="background-color: #fff; padding: 20px; text-align: center;">
                <img src="organizer-logo.png" alt="Organizer Logo" style="max-width: 100px; margin-bottom: 20px;">
                <h2 style="font-size: 24px;">AHCAB</h2>
                <p style="font-size: 16px; line-height: 1.5;">
                    Animal Health Companies Association of Bangladesh (AHCAB) is the only Apex Trade Body registered
                    with Ministry of Commerce of People's Republic of Bangladesh registration no.C540(53)/2003, since
                    2003 to conduct welfare of animal industry consist of poultry, cattle, fish, shrimp and companion
                    animal by promoting, educating and creating awareness in developing a sustained the animal industry.
                    The primary responsibility is to protect the business interest of the members as well as the
                    industry stake holders. The association is also dedicated to ensure consumer safety for the animal
                    products and welfare of the animal farmers by in large.
                </p>
            </div>
        </div>


    </div>
</section>
<section class="features-area section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center mb-0">
                    <div class="section-top">
                        <h1><b>{{ __('cms.latest_event') }}</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: -15px;">
            @if (count($data->latestEvents))
            @foreach ($data->latestEvents as $latestEvent)
            <div class="col-md-6">
                <div class="blog-latest" style="cursor: pointer;">
                    <div class="single-news" style="height: 220px">
                        <div class="news-body">
                            <a href="{{ url('event/' . $latestEvent->slug) }}">
                                <div class="news-content">
                                    <h3 class="news-title">
                                        <a href="{{ url('event/' . $latestEvent->slug) }}">{{ substr($latestEvent->title, 0, 41) }}</a>
                                    </h3>
                                    <ul class="news-meta">
                                        <li class="date"><i class="fa fa-calendar"></i>{{ $latestEvent->start_date }}</li>
                                    </ul>
                                    <div class="news-text">
                                        <p>{!! substr($latestEvent->description, 0, 208) !!}
                                            {{ strlen($latestEvent->description) > 208 ? '...' : '' }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12 m-bottom-20" style="margin-top: 30px">
                <div class="section-title default text-center mb-0">
                    <div class="section-top">
                        <div class="button">
                            <a href="{{ url('event') }}" class="bizwheel-btn theme-1 effect">{{ __('cms.view_all') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-12 text-center display: flex  justify-content: center">
                <img src="{{ asset('common/img/empty-block.png') }}" alt="Empty Block">


            </div>
            @endif
        </div>
    </div>
</section>

<section class="features-area section-bg bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="section-title default text-center mb-0">
                    <div class="section-top">
                        <h1><b>{{ __('cms.latest_news') }}</b></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if (count($data->latestNewses))
            @foreach ($data->latestNewses as $latestNews)
            <div class="col-md-4">
                <a href="{{ url('news/' . $latestNews->slug) }}">
                    <div class="blog-item-4" style="cursor: pointer;">
                        <img style="width: 100%; height: 200px;" src="{{ url('images/default/thumbnail.jpeg') }}" alt="News Image">
                        <div class="content-box">
                            <span class="blog-meta"><i class="fa fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($latestNews->created_at)->format('Y-m-d') }}</span>
                            <span class="blog-meta"><i class="fa fa-user"></i> Admin</span>
                            <h3 class="blog-item-title"><a href="{{ url('news/' . $latestNews->slug) }}">{{ substr($latestNews->title, 0, 25) }}</a>
                            </h3>
                            <p>{!! substr($latestNews->description, 0, 55) !!}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-12 m-bottom-20">
                <div class="section-title default text-center mb-0">
                    <div class="section-top">
                        <div class="button">
                            <a href="{{ url('news') }}" class="bizwheel-btn theme-1 effect">{{ __('cms.view_all') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-12 text-center display: flex  justify-content: center">
                <img src="{{ asset('common/img/empty-block.png') }}" alt="Empty Block">
            </div>
            @endif
        </div>
    </div>
</section>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center" style="background:#3c49a0;">
                    <h2 style="color: #fff">IEDAP Archives</h2>
                </div>
                <div class="card-body">
                    <div class="container mt-5">
                        <div class="card-deck text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">IEDAP 2018</h4>
                                    <p class="card-text">4th International Exhibition of Dairy, Aqua and
                                        Pet-2018 (IEDAP)' organised by Animal Health Companies of Bangladesh
                                        (AHCAB) for the 4th time in Bangladesh to promote the animal protein and
                                        companion animal for local market as well e.</p>
                                    <a href="http://iedap.com/2018/" target="_blank" class="btn btn-primary">Visit</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">IEDAP 2016</h4>
                                    <p class="card-text">3rd International Exhibition of Dairy, Aqua and
                                        Pet-2016 (IEDAP)' organised by Animal Health Companies of Bangladesh
                                        (AHCAB) for the 4th time in Bangladesh to promote the animal protein and
                                        companion animal for local market as well e.</p>
                                    <a href="http://iedap.com/2016/" target="_blank" class="btn btn-primary">Visit</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">IEDAP 2014</h4>
                                    <p class="card-text">2nd International Exhibition of Dairy, Aqua and
                                        Pet-2014 (IEDAP)' organised by Animal Health Companies of Bangladesh
                                        (AHCAB) for the 4th time in Bangladesh to promote the animal protein and
                                        companion animal for local market as well e.</p>
                                    <a href="http://iedap.com/2014/" target="_blank" class="btn btn-primary">Visit</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">IEDAP 2012</h4>
                                    <p class="card-text">1st International Exhibition of Dairy, Aqua and
                                        Pet-2012 (IEDAP)' organised by Animal Health Companies of Bangladesh
                                        (AHCAB) for the 4th time in Bangladesh to promote the animal protein and
                                        companion animal for local market as well e.</p>
                                    <a href="http://iedap.com/2012/" target="_blank" class="btn btn-primary">Visit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="demo-row">
    <div class="container" id="id-sponsors">
        <div class="text-center">
            <h2 class="mt-3" style="color:#fff;">PARTICIPATING COUNTRIES</h2>
        </div>
        <br>
        <div id="sponsor-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <br>
            <ol class="carousel-indicators">
                <li data-target="#sponsor-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#sponsor-carousel" data-slide-to="1"></li>
                <li data-target="#sponsor-carousel" data-slide-to="2"></li>
            </ol>
            < <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/nucor-logo.svg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logo-mil.png" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logo-timberline.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logo-ppg.jpg" class="img-fluid" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo1.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo2.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo3.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo4.jpg" class="img-fluid" /></div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
        </div>
    </div>
</div>
<div class="divider">

</div>
<div class="demo-row">
    <div class="container" id="id-participants">
        <div class="text-center">
            <h2 class="mt-3" style="color:#fff;">PARTICIPANTS</h2>
        </div>
        <br>
        <div id="participants-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <br>
            <ol class="carousel-indicators">
                <li data-target="#sponsor-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#sponsor-carousel" data-slide-to="1"></li>
                <li data-target="#sponsor-carousel" data-slide-to="2"></li>
            </ol>
            < <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/nucor-logo.svg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logo-mil.png" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logo-timberline.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logo-ppg.jpg" class="img-fluid" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo1.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo2.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo3.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo4.jpg" class="img-fluid" /></div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
        </div>
    </div>
</div>

<div class="divider">

</div>

<div class="demo-row">
    <div class="container" id="id-sponsors">
        <div class="text-center">
            <h2 class="mt-3" style="color:#fff;">Countries</h2>
        </div>

        <div id="country-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <br>
            <ol class="carousel-indicators">
                <li data-target="#sponsor-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#sponsor-carousel" data-slide-to="1"></li>
                <li data-target="#sponsor-carousel" data-slide-to="2"></li>
            </ol>
            < <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/nucor-logo.svg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logo-mil.png" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logo-timberline.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logo-ppg.jpg" class="img-fluid" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo1.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo2.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo3.jpg" class="img-fluid" /></div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="sponsor-feature"><img alt="" src="https://itagroup.hs.llnwd.net/o40/csg/pse-demo/channel-incentive/logos/logo4.jpg" class="img-fluid" /></div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
        </div>
    </div>
</div>

<div class="divider">

</div>

@stop
@section('js')

<script>
    $('#sponsor-carousel').carousel({
        interval: 3000,
        cycle: true
    });

    $('#participants-carousel').carousel({
        interval: 3000,
        cycle: true
    });

    $('#country-carousel').carousel({
        interval: 3000,
        cycle: true
    });
</script>
@stop
