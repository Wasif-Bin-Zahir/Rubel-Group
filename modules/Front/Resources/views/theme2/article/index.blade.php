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
                                <li><a href="javascript:void(0)">{{__('cms.articles')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-area section-bg bg-white">
        <div class="container">
            @if(count($data->articles))
                <div class="row">
                    @foreach($data->articles as $article)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="blog-item-4">
                                <img style="width: 100%; height: 200px;" src="{{ url('images/default/thumbnail.jpeg') }}" alt="Article Image">
                                <div class="content-box">
                                    <span class="blog-meta"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($article->created_at)->format('Y-m-d') }}</span>
                                    <span class="blog-meta"><i class="fa fa-user"></i> Admin</span>
                                    <h3 class="blog-item-title">
                                        <a href="{{ url('article/' . $article->slug) }}">
                                            @if(app()->getLocale() == 'bn')
                                                {{ substr($article->title_bn, 0, 25) ?? substr($article->title, 0, 25) }}
                                            @else
                                                {{ substr($article->title, 0, 25) }}
                                            @endif
                                        </a>
                                    </h3>
                                    <p>
                                        @if(app()->getLocale() == 'bn')
                                            {{ substr(strip_tags($article->description_bn), 0, 25) ?? substr(strip_tags($article->description), 0, 25) }}
                                        @else
                                            {{ substr(strip_tags($article->description), 0, 25) }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if($data->articles->hasPages())
                    <div class="row">
                        <div class="col-md-12">
                            {!! $data->articles->links() !!}
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
