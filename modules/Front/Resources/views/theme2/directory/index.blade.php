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
                                <li><a href="javascript:void(0)">Directory</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="portfolio">
        <div class="container">
            @if(count($users))
                <div class="row" style="margin-bottom: 100px !important; margin-top: 100px !important;">
                    @foreach($users as $user)
                        <div class="col-md-3">
                            <a href="{{ url('/directory/' . $user->username) }}">
                                <section>
                                    <div class="single-team active mb-4">
                                        <div class="team-head">
                                            <img style="height: 270px; width: 100%;" src="{{ $users->avatar->file_url ?? url('images/default/avatar.jpg') }}" alt="#">
                                            <ul class="team-social">
                                                <li><a href="{{ $user->personalInfo->facebook_link ?? '' }}"><i class="fa fa-facebook-official"></i></a></li>
                                                <li><a href="{{ $user->personalInfo->twitter_link ?? '' }}"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="{{ $user->personalInfo->linkedin_link ?? '' }}"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="t-content">
                                            <div class="content-inner">
                                                <h5 class="name">
                                                    {{ $user->personalInfo->first_name }} {{ $user->personalInfo->last_name }}
                                                </h5>
                                                <span class="designation">
                                                     {{ $user->personalInfo->designation }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </a>
                        </div>
                    @endforeach
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
