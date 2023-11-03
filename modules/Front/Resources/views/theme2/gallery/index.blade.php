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
                                <li><a href="javascript:void(0)">{{__('cms.gallary')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            @if(count($data->galleryPhotos))
                <div class="row">
                    @foreach($data->galleryPhotos as $galleryPhoto)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-service">
                                <div class="service-head">
                                    <a class="mg-image" href="{{ $galleryPhoto->image->file_url ?? url('images/default/thumb_1.jpg') }}">
                                        <img style="width: 100%; height: 275px;" src="{{ $galleryPhoto->image->file_url ?? url('images/default/thumb_1.jpg') }}" alt="{{ $galleryPhoto->title }}">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <h4 style="font-weight: 500; font-size: 16px;">
                                        @if(app()->getLocale() == 'bn')
                                            {{ substr($galleryPhoto->title_bn ?? $galleryPhoto->title , 0, 35) }}
                                        @else
                                            {{ substr($galleryPhoto->title, 0, 35) }}
                                        @endif

                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($data->galleryPhotos->hasPages())
                    <div class="row">
                        <div class="col-md-12">
                            {!! $data->galleryPhotos->links() !!}
                        </div>
                    </div>
                @endif
            @else
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('common/img/empty-page.jpg') }}" alt="Empty state">
                    </div>
                </div>
            @endif
        </div>
    </section>

@stop
