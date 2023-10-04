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
                                <li><a href="javascript:void(0)">{{ __('cms.committee') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="portfolio">
        <div class="container">
            @if (count($data->committeeMembers))
               <div class=row col-md-12">
                    <div class="col-md-3" style="margin-top: 50px !important;">
                    <ul class="list-group team_category_list">
                          
                           <li class="ist-group-item {{ !request()->has('category') ? 'active' : '' }}" st>
                                <a href="{{ url('committee') }}">
                                    @if (app()->getLocale() == 'bn')
                                        সব
                                    @else
                                        All
                                    @endif
                                </a>
                            </li>
                            @foreach ($data->committeeCategories as $committeeCategory)
                                <li
                                    class="ist-group-item {{ request()->get('category') == $committeeCategory->id ? 'active' : '' }}">
                                    <a href="{{ url('committee?category=' . $committeeCategory->id) }}">
                                        @if (app()->getLocale() == 'bn')
                                            {{ $committeeCategory->title_bn ?? $committeeCategory->title }}
                                        @else
                                            {{ $committeeCategory->title }}
                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                       
                    </div>
                    <div class="row col-md-9" style="margin-bottom: 100px !important;margin-top: 50px !important; ">
                        @foreach ($data->committeeMembers as $committeeMember)
                            <div class="col-md-3 col-sm-4">
                                <div class="single-team active mb-4">
                                    <div class="team-head">
                                        <div class="team-head-image"
                                            style="background-size: cover !important; background: url('{{ $committeeMember->avatar->file_url ?? url('images/default/avatar.jpg') }}');">
                                        </div>
                                        <ul class="team-social">
                                            <li><a href="{{ $committeeMember->facebook }}"><i
                                                        class="fa fa-facebook-official"></i></a></li>
                                            <li><a href="{{ $committeeMember->twitter }}"><i
                                                        class="fa fa-twitter-square"></i></a></li>
                                            <li><a href="{{ $committeeMember->linkedin }}"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li><a href="mailto:{{ $committeeMember->email }}"><i
                                                        class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="t-content">
                                        <div class="content-inner">
                                            <h5 class="name">
                                                @if (app()->getLocale() == 'bn')
                                                    {{ $committeeMember->name_bn ?? $committeeMember->name }}
                                                @else
                                                    {{ $committeeMember->name }}
                                                @endif
    
                                            </h5>
                                            <span class="designation">
                                                @if(app()->getLocale() == 'bn')
                                                    {{ $committeeMember->designation_bn ?? $committeeMember->designation }} ({{$committeeMember->company_bn ?? $committeeMember->company_bn}})
                                                @else
                                                    {{ $committeeMember->designation }} 
                                                @endif
                                                
                                                <!--({{$committeeMember->company ?? $committeeMember->company}})-->
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
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
