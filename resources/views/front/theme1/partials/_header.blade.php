<header class="header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 hide-res">
                    <div class="top-contact">
                        <div class="single-contact"><i class="fa fa-phone"></i>{{__('cms.phone')}}: {{ $global_contact->phone }}</div>
                        <div class="single-contact"><i class="fa fa-envelope-open"></i>{{__('cms.email')}}: {{ $global_contact->email }}</div>
                        @if($global_contact->working_hours)
                            <div class="single-contact"><i class="fa fa-clock-o"></i>Event TIme: {{ $global_contact->working_hours }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 topbar-right-holder">
                    <div class="topbar-right">
                        <ul class="social-icons">
                            <li><a href="{{ $global_contact->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $global_contact->twitter }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $global_contact->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ $global_contact->youtube }}"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                        <div class="single-contact" style="margin-top: 0; margin-right: 20px;">
                            <i class="fa fa-user"></i>
                            @if(auth()->check())
                                <a href="{{ url('/backend/dashboard') }}">Dashboard</a>
                            @else
                                <a href="{{ url('/login') }}">Login</a>
                            @endif
                        </div>
                        <div class="single-contact" style="margin-top: 0;">
                            <i class="fa fa-globe"></i>
                            @if(app()->getLocale() == 'en')
                                <a style="font-weight: bold; text-decoration: underline;" href="{{ url(request()->path() . '?lang=en') }}">EN</a>
                            @else
                                <a href="{{ url(request()->path() . '?lang=en') }}">EN</a>
                            @endif
                            |
                            @if(app()->getLocale() == 'bn')
                                <a style="font-weight: bold; text-decoration: underline;" href="{{ url(request()->path() . '?lang=bn') }}">BN</a>
                            @else
                                <a href="{{ url(request()->path() . '?lang=bn') }}">BN</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="middle-inner">
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-12">
                                <div class="logo">
                                    <div class="img-logo">
                                        <a href="{{ url('/') }}">
                                            <img src="{{ $global_site->logo->file_url ?? url('images/default/logo.png') }}" alt="{{ $global_site->title }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-nav"></div>
                            <div class="col-lg-10 col-md-9 col-12">
                                <div class="menu-area">
                                    <nav class="navbar navbar-expand-lg">
                                        <div class="navbar-collapse">
                                            <div class="nav-inner" style="margin-top: 7px;">
                                                <div class="menu-home-menu-container">
                                                    <ul id="nav" class="nav main-menu menu navbar-nav">
                                                        @foreach($global_menu as $g_key => $g_menu)
                                                            @if(count($g_menu->children))
                                                                <li class="icon-active">
                                                                    <a href="#">
                                                                        @if(app()->getLocale() == 'bn')
                                                                            {{ $g_menu->title_bn }}
                                                                        @else
                                                                            {{ $g_menu->title }}
                                                                        @endif
                                                                    </a>
                                                                    <ul class="sub-menu">
                                                                        @foreach($g_menu->children as $g_child_key => $g_child_menu)
                                                                            <li>
                                                                                <a href="{{ $g_child_menu->link }}">
                                                                                    @if(app()->getLocale() == 'bn')
                                                                                        {{ $g_child_menu->title_bn }}
                                                                                    @else
                                                                                        {{ $g_child_menu->title }}
                                                                                    @endif
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <a href="{{ $g_menu->link }}">
                                                                        @if(app()->getLocale() == 'bn')
                                                                            {{ $g_menu->title_bn }}
                                                                        @else
                                                                            {{ $g_menu->title }}
                                                                        @endif
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</header>
