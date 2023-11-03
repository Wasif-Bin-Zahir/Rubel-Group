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
                                <li><a href="javascript:void(0)">{{__('cms.committee')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="portfolio">
        <div class="container">
            @if(count($data->committeeMembers))
                <div class="row" style="margin-top: 50px !important;">
                    <div class="col-12">
                        <div class="portfolio-menu">
                            <ul id="portfolio-nav" class="portfolio-nav tr-list list-inline cbp-l-filters-work" style="display: flex;">
                              
                                @foreach($data->committeeCategories as $committeeCategory)
                                    <li class="cbp-filter-item {{ request()->get('category') == $committeeCategory->id ? 'active' : '' }}" style="margin-right:10px; border: 1px solid #ccc; padding: 3px;">
                                        <a href="{{ url('members?category=' . $committeeCategory->id) }}" style="{{ request()->get('category') == $committeeCategory->id ? 'color: red;' : 'color: #000' }}">
                                            @if(app()->getLocale() == 'bn')
                                                {{ $committeeCategory->title_bn ?? $committeeCategory->title }}
                                            @else
                                                {{ $committeeCategory->title }}
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section-title">
                <span>Meet The Team</span>
                <h2>Our Members</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacus, dignissim phareta lorem. Sed ut
                    lacus aliquet, volutpat sem pellentesque, egestas nisl.</p> -->
            </div>
            <div class="row">
                @foreach($data->committeeMembers as $committeeMember)
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="single-team-card">
                            <div class="team-img">
                                <img src="{{ $committeeMember->avatar->file_url ?? url('images/default/avatar.jpg') }}" alt="Image">
                                <div class="social-content">
                                    <ul>
                                        <li>
                                            <a href="{{ $committeeMember->facebook!=''?$committeeMember->facebook:'#' }}" target="_blank"><i
                                                    class="ri-facebook-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ $committeeMember->twitter!=''?$committeeMember->twitter:'#' }}" target="_blank"><i
                                                    class="ri-twitter-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ $committeeMember->linkedin!=''?$committeeMember->linkedin:'#' }}" target="_blank"><i
                                                    class="ri-linkedin-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="mailto:{{ $committeeMember->email!=''?$committeeMember->email:'#' }}" target="_blank"><i
                                                    class="ri-mail-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>@if(app()->getLocale() == 'bn')
                                                {{ $committeeMember->name_bn ?? $committeeMember->name }}
                                            @else
                                                {{ $committeeMember->name }}
                                            @endif</h3>
                                <span> @if(app()->getLocale() == 'bn')
                                                {{ $committeeMember->designation_bn ?? $committeeMember->designation }}
                                            @else
                                                {{ $committeeMember->designation }}
                                            @endif</span>
                            </div>
                        </div>
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
