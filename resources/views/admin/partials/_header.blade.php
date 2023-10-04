<nav class="main-header navbar navbar-expand navbar-dark navbar-purple">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ url('/') }}" target="_blank">
                <i class="fa fa-globe-asia"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user-circle" style="font-size: 25px; margin-top: -3px;"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="min-width: 200px;">
                <div class="dropdown-header text-left d-inline-block">
                    <div style="margin-top: 5px !important;">
                        @php
                            $user = \Modules\Ums\Entities\User::find(auth()->user()->id);
                        @endphp
                        <img class="img-circle" style="height: 36px; width: 36px; float: left;"
                             src="{{ isset($user->avatar->file_url) ? $user->avatar->file_url : 'https://via.placeholder.com/128x128.jpg?text=' . $user->username}}" alt="{{ $user->username }}">
                        <span style="float: left; padding: 6px 10px; font-size: 16px; font-weight: bold;">{{ $user->personalInfo->first_name }} {{ $user->personalInfo->last_name }}</span>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <a href="/backend/profile/personal-info" class="dropdown-item">
                    Update Profile Info
                </a>
                <div class="dropdown-divider"></div>
                <a href="/backend/profile/account-info" class="dropdown-item">
                    Update Account Info
                </a>
                <div class="dropdown-divider"></div>
                <a href="/backend/profile/password-change" class="dropdown-item">
                    Password Change
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item dropdown-footer" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off mr-2"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
