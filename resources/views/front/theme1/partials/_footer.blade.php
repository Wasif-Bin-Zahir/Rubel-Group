<footer class="footer" style="background-image:url('img/map.png')">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget footer-about widget">
                        <div class="logo">
                            <div class="img-logo">
                                <a class="logo" href="{{ url('/') }}">
                                    <img class="img-responsive" src="{{ $global_site->logo->file_url ?? url('images/default/logo.png') }}" alt="{{ $global_site->title }}">
                                </a>
                            </div>
                        </div>
                        <div class="footer-widget-about-description">
                            <p>{!! $global_site->description !!}</p>
                        </div>
                        <div class="social">
                            <ul class="social-icons">
                                <li>
                                    <a class="facebook" href="{{ $global_contact->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter" href="{{ $global_contact->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="{{ $global_contact->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="pinterest" href="{{ $global_contact->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="single-widget f-link widget">
                        <h3 class="widget-title">{{__('cms.company')}}</h3>
                        <ul>
                            <!-- <li><a href="{{ url('event') }}">{{ app()->getLocale() == 'bn' ? 'ইভেন্ট' : 'Event' }}</a></li> -->
                            <li><a href="{{ url('news') }}">{{ app()->getLocale() == 'bn' ? 'নিউজ' : 'News' }}</a></li>
                            <li><a href="{{ url('notice') }}">{{ app()->getLocale() == 'bn' ? 'নোটিশ' : 'Notice' }}</a></li>
                            <li><a href="{{ url('faq') }}">{{ app()->getLocale() == 'bn' ? 'সচারাচর জানতে যাওয়া' : 'FAQ' }}</a></li>
                            <li><a href="{{ url('login') }}">{{ app()->getLocale() == 'bn' ? 'লগইন' : 'Login' }}</a></li>
                        </ul>
                    </div>
                </div>
                @php
                    $articles = \Modules\Cms\Entities\Article::get()->take(2);
                @endphp
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-widget footer-news widget">
                        <h3 class="widget-title">{{__('cms.latest_articles')}}</h3>
                        @forelse($articles as $article)
                            <div class="single-f-news">
                                <div class="post-thumb">
                                    <a href="{{ url('article/' . $article->slug) }}">
                                        <img src="{{ $article->image->file_url ?? url('images/default/thumb_2.jpg') }}" alt="#">
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="post-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($article->created_at)->format('M d, Y') }}</time>
                                    </p>
                                    <h4 class="title">
                                        <a href="{{ url('article/' . $article->slug) }}">
                                            @if(app()->getLocale() == 'bn')
                                                {{ $article->title_bn ?? $article->title }}
                                            @else
                                                {{ $article->title }}
                                            @endif
                                        </a>
                                    </h4>
                                </div>
                                <br>
                            </div>
                        @empty
                            <p class="text-white">{{ app()->getLocale() == 'bn' ? 'কোনো আর্টিকেল নেই' : 'No Articles Available' }}</p>
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget footer_contact widget">
                        <h3 class="widget-title">{{__('cms.contact')}}</h3>
                        <ul class="address-widget-list">
                            <li class="footer-mobile-number"><i class="fa fa-phone"></i>{{ $global_contact->phone }}</li>
                            <li class="footer-mobile-number"><i class="fa fa-mobile"></i>{{ $global_contact->mobile }}</li>
                            <li class="footer-mobile-number"><i class="fa fa-envelope"></i>{{ $global_contact->email }}</li>
                            <li class="footer-mobile-number"><i class="fa fa-map-marker"></i>{{ $global_contact->address }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright" style="color:bisque ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-content">
                        <p>
                            {{__('cms.copyright')}}: {{date('Y')}} © <a href="{{ url('/') }}">
                                @if(app()->getLocale() == 'bn')
                                    {{ $global_site->title_bn ?? $global_site->title }}
                                @else
                                    {{ $global_site->title }}
                                @endif
                            </a>
                        </p>

                        <p>
                        Developed and maintained by <a href="https://bemantech.com" target="_blank" style="color:wheat">
                        Bemantech Ltd.
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
