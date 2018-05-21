
<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">

        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        {{--<a href="http://www.creative-tim.com" class="simple-text">--}}
            {{--Creative Tim--}}
        {{--</a>--}}
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="{{ route('backEnd.admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li @yield('back_end_brand')>
                <a href="{{ route('backEnd.admin.brand.index') }}">
                    <i class="material-icons">person</i>
                    <p>Brands</p>
                </a>
            </li>
            <li @yield('back_end_product')>
                <a href="{{ route('backEnd.admin.product.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Products</p>
                </a>
            </li>
            <li @yield('back_end_unit')>
                <a href="{{ route('backEnd.admin.unit.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Units</p>
                </a>
            </li>
            <li>
                <a href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>System Policy</p>
                </a>
            </li>
            <li>
                <a href="./maps.html">
                    <i class="material-icons">location_on</i>
                    <p>Usage Policy</p>
                </a>
            </li>
            <li>
                <a href="./notifications.html">
                    <i class="material-icons text-gray">notifications</i>
                    <p>News</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>


{{--<nav class="navbar navbar-transparent navbar-absolute">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle" data-toggle="collapse">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="#"> Material Dashboard </a>--}}
        {{--</div>--}}
        {{--<div class="collapse navbar-collapse">--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li>--}}
                    {{--<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="material-icons">dashboard</i>--}}
                        {{--<p class="hidden-lg hidden-md">Dashboard</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="material-icons">notifications</i>--}}
                        {{--<span class="notification">5</span>--}}
                        {{--<p class="hidden-lg hidden-md">Notifications</p>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li>--}}
                            {{--<a href="#">Mike John responded to your email</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">You have 5 new tasks</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">You're now friend with Andrew</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Another Notification</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">Another One</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="material-icons">person</i>--}}
                        {{--<p class="hidden-lg hidden-md">Profile</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--@if (Route::has('admin.login'))--}}
                    {{--<div class="top-right links">--}}
                        {{--@if (auth()->guard('admin')->check())--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
                                    {{--adminnnnnn--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
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
                            {{--<a href="{{ url('admin.login') }}">Login</a>--}}

                        {{--@endif--}}
                    {{--</div>--}}
                {{--@endif--}}

            {{--</ul>--}}
            {{--<form class="navbar-form navbar-right" role="search">--}}
                {{--<div class="form-group  is-empty">--}}
                    {{--<input type="text" class="form-control" placeholder="Search">--}}
                    {{--<span class="material-input"></span>--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-white btn-round btn-just-icon">--}}
                    {{--<i class="material-icons">search</i>--}}
                    {{--<div class="ripple-container"></div>--}}
                {{--</button>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

{{--sample nav--}}
{{--<nav class="navbar navbar-default navbar-static-top">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}

            {{--<!-- Collapsed Hamburger -->--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">--}}
                {{--<span class="sr-only">Toggle Navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}

            {{--<!-- Branding Image -->--}}
            {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                {{--{{ config('app.name', 'Laravel') }}--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
            {{--<!-- Left Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--&nbsp;--}}
            {{--</ul>--}}

            {{--<!-- Right Side Of Navbar -->--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}

                {{--<li class="active"><a href="#"> ADMIN MANAGEMENT </a></li>--}}
                {{--<li><a href="#">FACULTY MANAGEMENT </a></li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">STUDENTS--}}
                        {{--<span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">UNDERGRADUATE </a></li>--}}
                        {{--<li><a href="#">POSTGRADUATE</a></li>--}}
                        {{--<li><a href="#"></a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="dropdown">--}}
                    {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">STAFF MANAGEMENT--}}
                        {{--<span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}

                        {{--<li><a href="#">NONE TEACHING STAFF</a></li>--}}
                        {{--<li><a href="#"></a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="#">NEWS</a></li>--}}
                {{--<li><a href="#">ACADEMIC CALENDER </a></li>--}}

                {{--<!-- Authentication Links -->--}}
                {{--@if (Route::has('admin.login'))--}}
                    {{--<div class="top-right links">--}}
                        {{--@if (auth()->guard('admin')->check())--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
                                  {{--adminnnnnn--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
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
                            {{--<a href="{{ url('admin.login') }}">Login</a>--}}

                        {{--@endif--}}
                    {{--</div>--}}
                {{--@endif--}}

            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}




