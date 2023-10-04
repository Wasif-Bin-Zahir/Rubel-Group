@extends('front.theme1.layouts.master')

@section('content')

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('event') }}">Events</a></li>
                                <li><a href="javascript:void(0)">
                                    @if(app()->getLocale() == 'bn')
                                       {{ $data->event->title_bn ?? $data->event->title_bn }}
                                    @else
                                       {{ $data->event->title }}
                                    @endif
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-area archive blog-single section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-single-main">
                                @if(isset($data->event->image->file_url))
                                    <div class="main-image">
                                        <img src="{{ $data->event->image->file_url ?? url('images/default/thumb_3.jpg') }}" alt="#">
                                    </div>
                                @endif
                                <div class="blog-detail">
                                    {{-- <ul class="news-meta">
                                        <li><i class="fa fa-user"></i>Admin</li>
                                        <li><i class="fa fa-pencil"></i>{{ \Carbon\Carbon::parse($data->event->created_at)->format('M d, Y') }}</li>
                                    </ul> --}}
                                    <h2 class="blog-title">
                                        @if(app()->getLocale() == 'bn')
                                          {{ $data->event->title_bn ?? $data->event->title }}
                                        @else
                                            {{ $data->event->title }}
                                        @endif
                                    </h2>
                                    <p>
                                        @if(app()->getLocale() == 'bn')
                                           {!! $data->event->description_bn ??  $data->event->description!!}
                                        @else
                                            {!! $data->event->description !!}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
