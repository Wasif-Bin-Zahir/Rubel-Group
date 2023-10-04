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
                                <li><a href="javascript:void(0)">{{__('cms.faq')}}</a></li>
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
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                    @if(count($data->faqs))
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="section-title default text-center mb-0">
                                    <div class="section-top">
                                        <h1><b>{{ __('cms.faq') }}</b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div id="accordion">
                                    @foreach($data->faqs as $faqKey => $faq)
                                        <div class="card mb-4">
                                            <div class="card-header" style="cursor: pointer;" id="heading{{ $faqKey }}">
                                                <h5 class="mb-0 {{ $faqKey == 0 ? '' : 'collapsed' }}" data-toggle="collapse" data-target="#collapse{{ $faqKey }}" aria-expanded="{{ $faqKey == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $faqKey }}">
                                                    @if(app()->getLocale() == 'bn')
                                                        {!! $faq->question_bn ?? $faq->question !!}
                                                    @else
                                                        {!! $faq->question !!}
                                                    @endif
                                                </h5>
                                            </div>
                                            <div id="collapse{{ $faqKey }}" class="collapse {{ $faqKey == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $faqKey }}" data-parent="#accordion">
                                                <div class="card-body">
                                                    @if(app()->getLocale() == 'bn')
                                                        {!! $faq->answer_bn ?? $faq->answer !!}
                                                    @else
                                                        {!! $faq->answer !!}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @if($data->faqs->hasPages())
                            <div class="row">
                                <div class="col-md-12">
                                    {!! $data->faqs->links() !!}
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
            </div>
        </div>
    </section>

@stop
