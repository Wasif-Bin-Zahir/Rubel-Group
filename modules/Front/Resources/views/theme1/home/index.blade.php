@extends('front.theme1.layouts.master')

@section('content')




    <div>



        {{-- <div class="slides" style="position:relative;">
            <button class="slider-btn prev-btn">&#8249;</button>
            @foreach ($data->sliders as $slider)
                <div class="slide" style="align-items: center">
                    <img src="{{ $slider->image->file_url ?? url('images/default/slider.png') }}" alt="Slider Image">
                    <div class="caption">
                        <h4 style="color: #f8f9fa;">
                            @if (app()->getLocale() == 'bn')
                                {{ $slider->title_bn ?? $slider->title }}
                            @else
                                {{ $slider->title }}
                            @endif
                        </h4>
                    </div>
                </div>
            @endforeach
            <button class="slider-btn next-btn">&#8250;</button>
        </div> --}}

        <div class="slides" style="position: relative;     margin-bottom: 2%;">
            <button class="slider-btn prev-btn">&#8249;</button>



            @foreach ($data->sliders as $slider)
                <div class="slide">
                    <img src="{{ $slider->image->file_url ?? url('images/default/slider.png') }}" alt="Slider Image">
                    <div class="caption">
                        <h4 style="color: #f8f9fa;" id="tit">
                            {{ $slider->title_bn ?? $slider->title }}
                        </h4>
                    </div>
                </div>
            @endforeach

            <button class="slider-btn next-btn">&#8250;</button>
        </div>

        <style>
          
            .slides .slide img{
                display: block;
                margin-left: auto;
                margin-right: auto;
                height:600px;
            }

            /* Style the caption */
            .caption {
                position: absolute;
                bottom: 0;
                left: 0;
                padding: 5px;
                background: rgba(0, 0, 0, 0.7);
                color: #fff;
                text-align: center;
                width: 50%;
                margin-left: 25%;
                margin-bottom: 1%px;
                border-radius: 5px;
            }

            .caption h4 {
                margin: 0;

            }

            @media (max-width: 768px) {
                .caption {
                    width: 100%;
                    margin-left: 0%;
                    padding: 2px;


                }

                .caption h4 {
                    margin: 0;
                    font-size: 10px;
                }

                .slides .slide img {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    height: 215px;
                }



            }



            /* Adjust the slider's height to accommodate the caption */
            .slider-container {
                height: 520px;
                /* Adjust as needed to make space for the caption */
            }



            .hero-slider {
                position: relative;
                overflow: hidden;
            }

            .slider-btn {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background: rgba(255, 255, 255, 0.7);
                color: #333;
                font-size: 24px;
                padding: 10px;
                border: none;
                cursor: pointer;
            }

            .prev-btn {
                left: 10px;
            }

            .next-btn {
                right: 10px;
            }

            .circle-divider {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 50px;
                /* Set the height of the transparent circle divider */
                background-image: radial-gradient(circle at center, transparent 0%, transparent 80%, rgba(255, 255, 255, 0.7) 100%);
            }
        </style>
        <!-- Include jQuery library -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- JavaScript for slider -->
        <script>
            $(document).ready(function() {
                var slideIndex = 0;
                var slideCount = $('.slide').length;
                var slideInterval; // Variable to hold the interval for automatic scrolling

                // Function to show the current slide
                function showSlide(index) {
                    $('.slide').hide();
                    $('.slide').eq(index).show();
                }

                // Initial slide display
                showSlide(slideIndex);

                // Function to move to the next slide
                function nextSlide() {
                    slideIndex++;
                    if (slideIndex >= slideCount) {
                        slideIndex = 0;
                    }
                    showSlide(slideIndex);
                }

                // Function to move to the previous slide
                function prevSlide() {
                    slideIndex--;
                    if (slideIndex < 0) {
                        slideIndex = slideCount - 1;
                    }
                    showSlide(slideIndex);
                }

                // Automatic slide change interval (every 4 seconds)
                slideInterval = setInterval(nextSlide, 4000);

                // Next button click event
                $('.next-btn').click(function() {
                    clearInterval(slideInterval); // Clear the automatic interval
                    nextSlide();
                    slideInterval = setInterval(nextSlide, 4000); // Reset the interval
                });

                // Previous button click event
                $('.prev-btn').click(function() {
                    clearInterval(slideInterval); // Clear the automatic interval
                    prevSlide();
                    slideInterval = setInterval(nextSlide, 4000); // Reset the interval
                });
            });
        </script>


    </div>
















    {{-- blinking section --}}

    <div>

        <style>
            /* Base styles for the container */
            .containerr {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                /* height: 40vh; */
                margin: 0;
                background-color: white;
            }

            /* Styles for the content inside the container */
            .contentt {
                text-align: center;
                width: 90%;
                /* Adjusted for mobile view */
                margin: 20px;
                /* Adjusted for mobile view */
                padding: 10px;
                border-radius: 10px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            }

            /* Responsive styles */
            @media (min-width: 768px) {

                /* Adjust container and content width for larger screens */
                .containerr {
                    height: 40vh;
                }

                .contentt {
                    width: 70%;
                    margin: 100px;
                }
            }

            /* Rest of your existing styles */
            .h1 {
                color: black;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            .h2 {
                font-size: 25px;
                color: yellow;
                /* Fix the typo here */
            }


            .liquid {
                position: relative;
                background: linear-gradient(45deg, #113B6C, #77bbff, #e74c3c, #ffaa77);
                background-size: 400% 400%;
                animation: liquidAnimation 5s infinite;
            }

            @keyframes liquidAnimation {

                0%,
                100% {
                    background-position: 0% 0%;
                }

                25% {
                    background-position: 100% 0%;
                }

                50% {
                    background-position: 100% 100%;
                }

                75% {
                    background-position: 0% 100%;
                }
            }

            /* Rest of your existing styles */
        </style>

        <div class="containerr">
            <div class="contentt liquid">
                <h2 class="h1">Welcome to our event!</h2>
                <p class="h2">Join us by registering now.</p>
                <br>
                <button
                    style="background-color: wheat; color:#113B6C; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;"
                    onmouseover="this.style.backgroundColor = '#27ae60'"
                    onmouseout="this.style.backgroundColor = '#2ecc71'">
                    <a href="https://expo.ahcab.net/registration" target="_blank">Register</a>
                </button>
            </div>
        </div>

    </div>


    {{-- blinking section end --}}








    <section class="features-area section-bg bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
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

                    @if (!empty($data->aboutorganiser))
                        <div class="col-12">
                            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                                <div class="section-title default text-center mb-0">
                                    <div class="section-top">
                                        <h1><b>{{ __('cms.about_organiser') }}</b></h1>
                                    </div>
                                </div>
                            </div>
                            <div class="section-title default text-center mb-0">
                                <div class="section-top text-justify">
                                    {!! $data->aboutorganiser->description !!}
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





                    <div
                        style="background: linear-gradient(45deg, #3498db, #e74c3c); padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); max-width: 600px;">


                        {{-- count down starts --}}



                        <div style="margin-bottom: 5px;">
                            <h2
                                style="color:white;font-size: 24px; margin-bottom: 2px;text-align: center;animation: blink 1s infinite alternate;">
                                Exhibition
                                Countdown</h2>


                        </div>

                        <div style="font-size: 20px; display: flex;">
                            <div id="days"
                                style="border-radius:10px;flex: 1; background-color: #113B6C; color: white; text-align: center; padding: 10px; margin: 2px;">
                                0<span style="font-size: 14px;">Days</span>
                            </div>
                            <div id="hours"
                                style="border-radius:10px;flex: 1; background-color: #113B6C; color: white; text-align: center; padding: 10px; margin: 2px;">
                                0<span style="font-size: 14px;">Hours</span></div>
                            <div id="minutes"
                                style="border-radius:10px;flex: 1; background-color: #113B6C; color: white; text-align: center; padding: 10px; margin: 2px;">
                                0<span style="font-size: 14px;">Mins</span></div>
                            <div id="seconds"
                                style="border-radius:10px;flex: 1; background-color: #113B6C; color: white; text-align: center; padding: 10px; margin: 2px;">
                                0<span style="font-size: 14px;">Secs</span></div>
                        </div>
                        <br>








                        {{-- count down end --}}
                        <div style="margin-bottom: 20px;">
                            <h2 style="color:white;font-size: 24px; margin-bottom: 10px;text-align: center">Exhibition Site Visitors
                            </h2>
                            <div style="font-size: 20px; display: flex;">
                                <div
                                    style="border-radius:10px;flex: 1; background-color: wheat; color: #113B6C; text-align: center; padding: 10px; margin: 5px;">
                                  <p id="visitorCount">{{$global_site->visitor}}</p>
                                </div>
                            </div>
                            
                        </div>
                        <!-- <div style="margin-bottom: 30px;">
                                                                                            <h2 style="color:white;font-size: 24px; margin-bottom: 10px;text-align: center">Registered
                                                                                                Visitors</h2>
                                                                                            <div style="font-size: 20px; display: flex;">
                                                                                                <div
                                                                                                    style="border-radius:10px;flex: 1; background-color: #113B6C; color: white; text-align: center; padding: 10px; margin: 5px;">
                                                                                                    0</div>
                                                                                                <div
                                                                                                    style="border-radius:10px;flex: 1; background-color: #113B6C; color: white; text-align: center; padding: 10px; margin: 5px;">
                                                                                                    0</div>
                                                                                                <div
                                                                                                    style="border-radius:10px;flex: 1; background-color: #113B6C; color: white; text-align: center; padding: 10px; margin: 5px;">
                                                                                                    0</div>
                                                                                                <div
                                                                                                    style="border-radius:10px;flex: 1; background-color: #113B6C; color: white; text-align: center; padding: 10px; margin: 5px;">
                                                                                                    0</div>
                                                                                                <div
                                                                                                    style="border-radius:10px;flex: 1; background-color: #113B6C; color: white; text-align: center; padding: 10px; margin: 5px;">
                                                                                                    0</div>
                                                                                                <div
                                                                                                    style="border-radius:10px;flex: 1; background-color: #113B6C; color: white; text-align: center; padding: 10px; margin: 5px;">
                                                                                                    0</div>
                                                                                            </div>
                                                                                        </div> -->

                        <div>
                            <h2 style="color:white;font-size: 24px; margin-bottom: 10px;text-align: center">Exhibition
                                Location</h2>
                            <p style="text-align: center;color:wheat">International Convention City Bashundhara, Dhaka,
                                Bangladesh</p>
                            <iframe
                                src="https://www.google.com/maps/d/embed?mid=1eI6iqbO3TQfnWZekhs_P18a541c&hl=en_US&ehbc=2E312F"
                                width="300" height="200"></iframe>
                        </div>
                        <br>

                        <div style="margin-bottom: 20px;">
                            <h2 style="color:white;font-size: 24px; margin-bottom: 10px;text-align: center">Exhibitors
                            </h2>
                            <div style="font-size: 20px; display: flex;">
                                <div
                                    style="border-radius:10px;flex: 1; background-color: wheat; color: #113B6C; text-align: center; padding: 10px; margin: 5px;">
                                    {{ $global_contact->exhibitors }}
                                </div>
                            </div>
                        </div>



                        <div style="margin-bottom: 20px;">
                            <h2 style="color:white;font-size: 24px; margin-bottom: 10px;text-align: center">Countries</h2>
                            <div style="font-size: 20px; display: flex;">
                                <div
                                    style="flex: 1; background-color: wheat; color: #113B6C; text-align: center; padding: 10px; margin: 5px;border-radius:10px">
                                    {{ $global_contact->countries }}
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <h2 style="color:white;font-size: 24px; margin-bottom: 10px;text-align: center">Important link
                            </h2>
                            <ul>
                                <li style="text-align: center;color:wheat;animation: blink 1s infinite alternate;"><a
                                        href="http://ahcab.net/" target="_blank">AHCAB Website</a></li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>


    {{-- <section class="features-area section-bg" style="background: #4954a0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title default text-center mb-0">
                        <div class="section-top">
                            <h1 style="color: #fff;"><b>{{ __('cms.exhibitors_list') }}</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -15px;">
                @if (count($data->participants))
                    @foreach ($data->participants as $part)
                        <div class="col-md-3">
                            <div class="blog-latest" style="cursor: pointer;">
                                <div class="single-news">
                                    <div class="news-body">
                                        <a href="{{ url('exhibitors-list/' . $part->slug) }}">
                                            @if (isset($part->image->file_url))
                                                <img style="width: 100%; height:150px"
                                                    src="{{ $part->image->file_url ?? url('images/default/thumb_3.jpg') }}"
                                                    alt="#">
                                            @else
                                                <div class="blank_image">{{ substr($part->title, 0, 1) }}</div>
                                                <!-- <img style="width: 100%; height: 100px;" src="{{ url('images/default/thumbnail.jpeg') }}" alt="Notice Image"> -->
                                            @endif
                                            <div class="news-content">

                                                <h3 class="news-title">
                                                    <a
                                                        href="{{ url('exhibitors-list/' . $part->slug) }}">{{ substr($part->title, 0, 41) }}</a>
                                                </h3>
                                                <!-- <ul class="news-meta">
                                                                                                                                                                                    <li class="date"><i class="fa fa-calendar"></i>{{ $part->start_date }}</li>
                                                                                                                                                                                </ul>
                                                                                                                                                                                <div class="news-text">
                                                                                                                                                                                    <p>{!! substr($part->description, 0, 208) !!} {{ strlen($part->description) > 208 ? '...' : '' }}</p>
                                                                                                                                                                                </div> -->
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
                                    <a href="{{ url('exhibitors-list') }}"
                                        class="bizwheel-btn theme-1 effect">{{ __('cms.view_all') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('common/img/empty-block.png') }}" alt="Empty Block">
                    </div>
                @endif
            </div>
        </div>
    </section> --}}




    <section class="features-area section-bg" style="background:#113B6C">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title default text-center mb-0">
                        <div class="section-top">
                            <h1 style="color: #fff;"><b>{{ __('cms.participating_countries') }}</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center"> <!-- Center the flags in mobile view -->
                @if (count($data->countries))
                    @foreach ($data->countries as $coun)
                        <div class="col-md-2 col-sm-3 col-6">
                            <!-- Adjust the number of columns per row for responsiveness -->
                            <div class="blog-latest" style="cursor: pointer;">
                                <div class="single-news"
                                    style="width: 100%;
                                height: 100px;">
                                    <div>
                                        <a href="{{ url('participating-countries/' . $coun->slug) }}">
                                            @if (isset($coun->image->file_url))
                                                <img style="width: 100%; height:100px;"
                                                    src="{{ $coun->image->file_url ?? url('images/default/thumb_3.jpg') }}"
                                                    alt="#">
                                            @else
                                                <div class="blank_image">{{ substr($part->title, 0, 1) }}</div>
                                            @endif
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
                                    <a href="{{ url('participating-countries') }}"
                                        class="bizwheel-btn theme-1 effect liquid">{{ __('cms.view_all') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-12 text-center">
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
                            <h1><b>{{ __('cms.archives') }}</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3 rounded">
                    <a href="/2018" target="_blank">
                        <div class="blog-item-4" style="cursor: pointer;background:#113B6C !important;">
                            <img class="rounded" style="width: 100%; height: 200px;"
                                src="{{ url('images/default/logo.png') }}" alt="News Image">
                            <div class="content-box">
                                <!-- <span class="blog-meta"><i class="fa fa-calendar"></i> </span>
                                                                                                                                                                                                                                                                                                                                                                                                                                        <span class="blog-meta"><i class="fa fa-user"></i> Admin</span> -->
                                <h3 style="text-align: center;" class="blog-item-title"><a target="_blank"
                                        href="/2018" style="color: wheat">IEDAP
                                        2018</a></h3>
                                <p style="color: white;text-align: justify;">
                                    The 4th International Exhibition of Dairy, Aqua and Pet-2018 (IEDAP)' organised by
                                    Animal
                                    Health Companies of Bangladesh (AHCAB)
                                </p>
                                <br>
                                <div class="button rounded" style="text-align: center;">
                                    <a href="/2018" target="_blank"
                                        class="bizwheel-btn theme-1 effect liquid">Visit</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="/2016" target="_blank">
                        <div class="blog-item-4" style="cursor: pointer;background:#113B6C !important;">
                            <img class="rounded" style="width: 100%; height: 200px;"
                                src="{{ url('images/default/logo.png') }}" alt="News Image">
                            <div class="content-box">
                                <!-- <span class="blog-meta"><i class="fa fa-calendar"></i> </span>
                                                                                                                                                                                                                                                                                                                                                                                                                                        <span class="blog-meta"><i class="fa fa-user"></i> Admin</span> -->
                                <h3 style="text-align: center;" class="blog-item-title"><a target="_blank"
                                        href="/2016" style="color: wheat">IEDAP
                                        2016</a></h3>
                                <p style="color: white;text-align: justify;">
                                    THE 3rd International Exhibition of Dairy, Aqua and
                                    Pet-2016 (IEDAP)' organised by Animal Health Companies of Bangladesh
                                </p>
                                <br>
                                <div class="button" style="text-align: center;">
                                    <a href="/2016" target="_blank"
                                        class="bizwheel-btn theme-1 effect liquid">Visit</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="/2014" target="_blank">
                        <div class="blog-item-4" style="cursor: pointer;background:#113B6C !important;">
                            <img class="rounded" style="width: 100%; height: 200px;"
                                src="{{ url('images/default/logo.png') }}" alt="News Image">
                            <div class="content-box">
                                <!-- <span class="blog-meta"><i class="fa fa-calendar"></i> </span>
                                                                                                                                                                                                                                                                                                                                                                                                                                        <span class="blog-meta"><i class="fa fa-user"></i> Admin</span> -->
                                <h3 style="text-align: center;"class="blog-item-title"><a target="_blank" href="/2014"
                                        style="color: wheat">IEDAP
                                        2014</a></h3>
                                <p style="color: white;text-align: justify;">
                                    The 2nd International Exhibition of Dairy, Aqua and
                                    Pet-2014 (IEDAP)' organised by Animal Health Companies of Bangladesh
                                </p>
                                <br>
                                <div class="button" style="text-align: center;">
                                    <a href="/2014" target="_blank"
                                        class="bizwheel-btn theme-1 effect liquid">Visit</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="/2012" target="_blank">
                        <div class="blog-item-4" style="cursor: pointer;background:#113B6C !important;">
                            <img style="width: 100%; height: 200px;" src="{{ url('images/default/logo.png') }}"
                                alt="News Image">
                            <div class="content-box">
                                <!-- <span class="blog-meta"><i class="fa fa-calendar"></i> </span> -->
                                <!-- <span class="blog-meta"><i class="fa fa-user"></i> Admin</span> -->
                                <h3 style="text-align: center;" class="blog-item-title"><a target="_blank"
                                        href="/2012" style="color: wheat">IEDAP
                                        2012</a></h3>
                                <p style="color: white;text-align: justify;">
                                    The 1st International Exhibition of Dairy, Aqua and
                                    Pet-2012 (IEDAP)' organised by Animal Health Companies of Bangladesh</p>
                                <br>
                                <div class="button" style="text-align: center;">
                                    <a href="/2012" target="_blank"
                                        class="bizwheel-btn theme-1 effect liquid">Visit</a>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="features-area section-bg" style="background-color: #176B87; margin-bottom:30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title default text-center mb-0">
                        <div class="section-top">
                            <h1 style="color:#fff"><b>{{ __('cms.sponsors') }}</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -15px;">
                @if (count($data->sponsors))
                    @foreach ($data->sponsors as $spon)
                        <div class="col-md-2 col-sm-3">
                            <div class="blog-latest" style="cursor: pointer;">
                                <div class="single-news" style="width: 100%;">
                                    <div class="news-body">
                                        <a href="{{ url('sponsors/' . $spon->slug) }}">
                                            @if (isset($spon->image->file_url))
                                                <div>
                                                    <img style="width: 100%;border-radius:5px"
                                                        src="{{ $spon->image->file_url ?? url('images/default/thumb_3.jpg') }}"
                                                        alt="#">
                                                </div>
                                            @else
                                                <div class="blank_image">{{ substr($spon->title, 0, 1) }}</div>
                                                <img style="width: 100%; height: 100px;"
                                                    src="{{ url('images/default/thumbnail.jpeg') }}" alt="Notice Image">
                                            @endif
                                            {{-- <div class="news-content">
                                                <!-- <h3 class="news-title">
                                                         <a href="{{ url('sponsors/' . $spon->slug) }}">{{ substr($spon->title, 0, 41) }}</a>
                                                         </h3>


                                                  <p>{!! substr($spon->description, 0, 208) !!} {{ strlen($spon->description) > 208 ? '...' : '' }}</p>
                                                 </div> -->
                                            </div> --}}
                                        </a>
                                    </div>
                                </div>
                                <p class="blog-item-title"
                                    style="border-radius:10px;background-color:white; color: #113B6C !important; text-align:center;font-size:16px;font-weight:bold;margin-top:5px;">
                                    {{ substr($spon->title, 0, 25) }}</p>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-12 m-bottom-20" style="margin-top: 30px">
                        <div class="section-title default text-center mb-0">
                            <div class="section-top">
                                <div class="button">
                                    <a href="{{ url('sponsors') }}"
                                        class="bizwheel-btn theme-1 effect liquid">{{ __('cms.view_all') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('common/img/empty-block.png') }}" alt="Empty Block">
                    </div>
                @endif
            </div>
        </div>
    </section>




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

    <script src="{{ asset('/front/theme1/js/countdown.js') }}"></script>

@stop
