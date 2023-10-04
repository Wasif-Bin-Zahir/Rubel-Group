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
                                <li><a href="javascript:void(0)">{{__('cms.news')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            @if(count($data->newses))
                <div class="row">
                    @foreach($data->newses as $news)
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="{{ url('news/' . $news->slug) }}">
                                <div class="blog-item-4" style="cursor: pointer;">
                                    <img style="width: 100%; height: 200px;" src="{{ url('images/default/thumbnail.jpeg') }}" alt="News Image">
                                    <div class="content-box">
                                        <span class="blog-meta"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($news->created_at)->format('Y-m-d') }}</span>
                                        <span class="blog-meta"><i class="fa fa-user"></i> Admin</span>
                                        <h3 class="blog-item-title"><a href="{{ url('news/' . $news->slug) }}">{{ substr($news->title, 0, 25) }}</a></h3>
                                        <p>{!! substr($news->description, 0, 55) !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                @if($data->newses->hasPages())
                    <div class="row">
                        <div class="col-md-12">
                            {!! $data->newses->links() !!}
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
