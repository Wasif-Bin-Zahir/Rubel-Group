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
                                <li><a href="javascript:void(0)">{{__('cms.page')}}</a></li>
                                @if(app()->getLocale() == 'bn')
                                    <li><a href="javascript:void(0)">{{ $data->page->title_bn ?? $data->page->title }}</a></li>
                                @else
                                    <li><a href="javascript:void(0)">{{ $data->page->title }}</a></li>
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
                            <div class="blog-single-main">
                                @if(isset($data->page->image->file_url))
                                    <div class="main-image">
                                        <img src="{{ $data->page->image->file_url ?? url('images/default/thumb_3.jpg') }}" alt="#">
                                    </div>
                                @endif
                                <div class="blog-detail">
                                    {{-- <ul class="news-meta">
                                        <li><i class="fa fa-user"></i>Admin</li>
                                        <li><i class="fa fa-pencil"></i>{{ \Carbon\Carbon::parse($data->page->created_at)->format('M d, Y') }}</li>
                                    </ul> --}}
                                    <h2 class="blog-title">
                                        @if(app()->getLocale() == 'bn')
                                            {{ $data->page->title_bn ?? $data->page->title }}
                                        @else
                                            {{ $data->page->title }}
                                        @endif
                                    </h2>
                                    <p>
                                        @if(app()->getLocale() == 'bn')
                                            {!! $data->page->description_bn ?? $data->page->description !!}
                                        @else
                                            {!! $data->page->description !!}
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
