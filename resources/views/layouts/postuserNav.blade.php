<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Student Portal') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('postuser.dashboard') }}">Dashboard </a></li>
                <li><a href="{{ route('postuser.profile.create') }}">Profile Management  </a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{ route('postuser.profile.create')}}">
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('postuser.profile.index')}}">View</a></li>
                        {{--<li><a href="{{route('PostuserProfile.update')}}">Update</a></li>--}}
                        <li><a href="#"></a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Results
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('superadmin.login')}}">LEVELS RESULT </a></li>


                    </ul>
                </li>
                <li><a href="#">Transcript </a></li>
                <li><a href="#">Course Registration </a></li>


                <!-- Authentication Links -->
                <li class="dropdown">
                @if (Route::has('postuser.login'))
                    <div class="top-right links">
                        @if (auth()->guard('postuser')->check())

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">

                            {{--{{ $name  }}--}}
                            dayooooo
                            <span class="caret"></span>
                        </a>


                        <ul class="dropdown-menu">
                            <li><a class="dropdown-toggle" data-toggle="dropdown" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{'Logout'}}</a>
                            </li>
                            <li>
                                <a href="{{ route('postuser.updatePassword') }}">{{'Change Password'}}</a>
                            </li>
                        </ul>


                @else
                    <a class="dropdown-toggle" data-toggle="dropdown"  href="{{ url('postuser.login') }}">Login</a>

                    @endif
                    </div>
                    @endif
                    </li>
                        </ul>

        </div>
    </div>
</nav>




