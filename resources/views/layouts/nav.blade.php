<nav class="navbar navbar-info navbar-static-top container">
    {{--<div class="container">--}}
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
                {{ config('app.name', 'PhamaX') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">

                <li @yield('front_end_index')><a href="{{route('frontEnd.index')}}"> HOME</a></li>
                <li @yield('front_end_brands')><a href="{{route('frontEnd.brands')}}">BRANDS</a></li>
                <li @yield('front_end_products')><a href="{{route('frontEnd.products')}}">PRODUCTS</a></li>

                <li @yield('front_end_unit')><a href="{{route('frontEnd.unit')}}">UNIT</a></li>
                {{--<li><a href="{{route('frontEnd.authenticate')}}">AUTHENTICATE</a></li>--}}
                <li class="{{ Request::is('frontEnd.index') ? "active" : " " }} dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">PHAMAX
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">LINKS US</a></li>
                        <li><a href="#">SUPPORT</a></li>
                        <li><a href="#">OUR OUTLETS</a></li>
                    </ul>
                </li>
                <li><a href="#">ABOUT</a></li>


            </ul>
        </div>

</nav>
