@extends('front.theme1.layouts.master')

@section('content')
    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">{{__('cms.home')}}</a></li>
                                <li><a href="javascript:void(0)">{{__('cms.registration')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-us section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content row" style="text-align: left; margin-bottom: 10px;">
                      <div class="col-md-12" style="text-align:center">
                          <h4>Congratulations!</h4>
                          <h4>Your registration was successful. Welcome to 5th ahcab expo 2023</h4>
                      </div>
                   <div class="col-md-12" style="text-align:center">
                        {!! QrCode::size(100)->generate($text); !!}
                   </div>
                   <div class="col-md-12" style="text-align:center">
                       Show the qr code below to the booth for joining exhibition
                   </div>
                </div>
               
            </div>
        </div>
    </section>

@stop


