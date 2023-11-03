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
                                <li><a href="javascript:void(0)">{{__('cms.event')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            @if(count($data->events))
                <div class="row" style="padding-bottom: 40px;">
                    @foreach($data->events as $event)
                        <div class="col-md-6">
                            <div class="blog-latest">
                                <div class="single-news" style="height: 220px">
                                    <div class="news-body">
                                        <div class="news-content">
                                            <h3 class="news-title">
                                                <a href="{{ url('event/' . $event->slug) }}">{{ substr($event->title, 0, 41) }}</a>
                                            </h3>
                                            {{-- <ul class="news-meta">
                                                <li class="date"><i class="fa fa-calendar"></i>{{ $event->start_date }}</li>
                                            </ul> --}}
                                            <div class="news-text">
                                                <p>{!! substr($event->description, 0, 208) !!} {{ strlen($event->description) > 208 ? '...' : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($data->events->hasPages())
                    <div class="row">
                        <div class="col-md-12">
                            {!! $data->events->links() !!}
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
