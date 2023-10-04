<aside class="main-sidebar sidebar-light-warning elevation-4">
    <a href="{{ url('/backend/dashboard') }}" class="brand-link navbar-purple text-center">
        <span class="text-uppercase text-bold text-white text-center">WEB PORTAL</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if (auth()->check())
                    @php
                        $user = \Modules\Ums\Entities\User::find(auth()->user()->id);
                    @endphp
                    @foreach(config('core.admin_menu') as $nav)
                            @if(empty($nav['children']))
                                <li class="nav-item">
                                    <a href="{{ $nav['url'] }}" class="nav-link">
                                        <i class="nav-icon fas {{ $nav['icon'] }}"></i>
                                        <p>
                                            {{ $nav['name'] }}
                                        </p>
                                    </a>
                                </li>
                            @else
                                <li class="nav-item has-treeview">
                                    <a href="javascript:void(0)" class="nav-link">
                                        <i class="nav-icon fas {{ $nav['icon'] }}"></i>
                                        <p>
                                            {{ $nav['name'] }}
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @foreach($nav['children'] as $subNav)
                                            <li class="nav-item">
                                                <a href="{{ $subNav['url'] }}" class="nav-link">
                                                    <i class="fas {{ $subNav['icon'] }} nav-icon"></i>
                                                    <p>{{ $subNav['name'] }}</p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                    @endforeach
                @endif
            </ul>
        </nav>
    </div>
</aside>
