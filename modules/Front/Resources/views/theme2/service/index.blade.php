@extends('front.theme2.layouts.master')

@section('content')

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">{{__('cms.home')}}</a></li>
                                <li><a href="javascript:void(0)">Sister concern</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            <div class="row">
                @foreach($data->services as $service)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-feature">
                            <div class="icon-head"><i class="fa fa-podcast"></i></div>
                            <h4><a href="{{ url('sister-concern/' . $service->slug) }}" style="height: 55px;">
                                    @if(app()->getLocale() == 'bn')
                                        {!! substr($service->title_bn??$service->title, 0, 30) !!}
                                    @else
                                        {!! substr($service->title, 0, 30) !!}
                                    @endif
                                </a></h4>
                            <p style="height: 120px;">
                                @if(app()->getLocale() == 'bn')
                                    {!! substr(strip_tags($service->description_bn??$service->description), 0, 80) !!}
                                @else
                                    {!! substr(strip_tags($service->description), 0, 80) !!}
                                @endif
                            </p>
                            <div class="button">
                                <a href="{{ url('sister-concern/' . $service->slug) }}" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>{{__('cms.learn_more')}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if($data->services->hasPages())
                <div class="row">
                    <div class="col-md-12">
                        {!! $data->services->links() !!}
                    </div>
                </div>
            @endif
        </div>
    </section>

@stop
