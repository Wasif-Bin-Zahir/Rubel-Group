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
                                <li><a href="{{ url('article') }}">{{__('cms.articles')}}</a></li>
                                @if(app()->getLocale() == 'bn')
                                    <li><a href="javascript:void(0)">{{ $data->article->title_bn ?? $data->article->title }}</a></li>
                                @else
                                    <li><a href="javascript:void(0)">{{ $data->article->title }}</a></li>
                                @endif
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
                            <div class="blog-single-main row">
                                @if(isset($data->article->image->file_url))
                                    <div class="main-image col-md-12">
                                        <img src="{{ $data->article->image->file_url ?? url('images/default/thumb_3.jpg') }}" alt="#">
                                    </div>
                                @endif
                                <div class="blog-detail col-md-12">
                                    {{-- <ul class="news-meta">
                                        <li><i class="fa fa-user"></i>Admin</li>
                                        <li><i class="fa fa-pencil"></i>{{ \Carbon\Carbon::parse($data->article->created_at)->format('M d, Y') }}</li>
                                    </ul> --}}
                                    <h2 class="blog-title">
                                        @if(app()->getLocale() == 'bn')
                                            {{ $data->article->title_bn ?? $data->article->title }}
                                        @else
                                            {{ $data->article->title }}
                                        @endif
                                    </h2>
                                    <p>
                                        @if(app()->getLocale() == 'bn')
                                            {!! $data->article->description_bn ?? $data->article->description !!}
                                        @else
                                            {!! $data->article->description !!}
                                        @endif

                                    </p>
                                </div>
                                @if(isset($data->article->attachment->file_url))
                                    <div class="col-md-12">
                                        <object data="{{$data->article->attachment->file_url}}" type="application/pdf" width="100%" height="500px">
                                            <embed id="frPDF" height="100%" width="100%" src="{{$data->article->attachment->file_url}}"></embed>
                                        <p>Unable to display PDF file. <a href="{{$data->article->attachment->file_url}}">Download</a> instead.</p>
                                        </object>
                                        
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
