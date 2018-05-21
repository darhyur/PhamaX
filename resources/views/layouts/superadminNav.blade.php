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
                {{ config('app.name', 'Portal') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">

                <li><a href="{{route('backEnd.admin.dashboard')}}">DASHBOARD</a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">PORTAL MANAGEMENT
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        {{--<li><a href="{{route('superadmin.login')}}">ADMIN MANAGEMENT</a></li>--}}
                        {{--<li><a href="{{route('admin.login')}}">STUDENT MANAGEMENT</a></li>--}}
                        {{--<li><a href="{{route('admin.login')}}">FACULTY MANAGEMENT</a></li>--}}
                        {{--<li><a href="{{route('admin.login')}}">DEPARTMENT MANAGEMENT</a></li>--}}
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">ACADEMIC CALENDER </a></li>




                {{--<!-- Authentication Links -->--}}
                {{--<li>--}}
                {{--@if (Route::has('superadmin.login'))--}}
                    {{--<div class="top-right links">--}}
                        {{--@if (auth()->guard('superadmin')->check())--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
                                    {{--{{$superadmin->$firstname }}--}}
                                    {{--<span class="caret"></span>--}}

                                {{--</a>--}}

                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                           {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}

                        {{--@else--}}
                            {{--<a href="{{ url('superadmin.login') }}">Login</a>--}}

                {{--@endif--}}
                    {{--</div>--}}
                {{--@endif--}}
                </li>
            </ul>
            </li>
        </div>
    </div>
</nav>









