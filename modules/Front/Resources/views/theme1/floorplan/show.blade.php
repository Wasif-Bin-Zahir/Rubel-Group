@extends('front.theme1.layouts.master')

@section('content')

    <div class="breadcrumbs bread-blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">{{ __('cms.home') }}</a></li>
                                <li><a href="{{ url('floor-plan') }}">{{ __('cms.floorplan') }}</a></li>
                                <li><a href="javascript:void(0)">
                                        @if (app()->getLocale() == 'bn')
                                            {{ $data->notice->title_bn ?? $data->notice->title }}
                                        @else
                                            {{ $data->notice->title }}
                                        @endif
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-area archive blog-single section-padding">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-single-main">
                                @if (isset($data->notice->image->file_url))
                                    <div class="main-image">
                                        <img src="{{ $data->notice->image->file_url ?? url('images/default/thumb_3.jpg') }}"
                                            alt="#">
                                    </div>
                                @endif
                                <div class="blog-detail">
                                    {{-- <ul class="news-meta">
                                        <li><i class="fa fa-user"></i>Admin</li>
                                        <li><i class="fa fa-pencil"></i>{{ \Carbon\Carbon::parse($data->notice->created_at)->format('M d, Y') }}</li>
                                    </ul> --}}
                                    <h2 class="blog-title">
                                        @if (app()->getLocale() == 'bn')
                                            {{ $data->notice->title_bn ?? $data->notice->title }}
                                        @else
                                            fff {{ $data->notice->title }}
                                        @endif

                                    </h2>
                                    <p>
                                        @if (app()->getLocale() == 'bn')
                                            {!! $data->notice->description_bn ?? $data->notice->description !!}
                                        @else
                                            {!! $data->notice->description !!}
                                        @endif

                                    </p>
                                </div>
                                @if (isset($data->notice->attachment->file_url))
                                    <div class="">
                                        <object data="{{ $data->notice->attachment->file_url }}" type="application/pdf"
                                            width="100%" height="500px">
                                            <embed id="frPDF" height="100%" width="100%"
                                                src="{{ $data->notice->attachment->file_url }}"></embed>
                                            <p>Unable to display PDF file. <a
                                                    href="{{ $data->notice->attachment->file_url }}">Download</a> instead.
                                            </p>
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
