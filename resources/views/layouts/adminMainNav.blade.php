<nav class="navbar navbar-primary navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> Phamax </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>admin name</li>
                {{--<li>--}}
                    {{--<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="material-icons">dashboard</i>--}}
                        {{--<p class="hidden-lg hidden-md">Dashboard</p>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">ADMIN NAME </i>
                        <span class="notification">5</span>
                        <p class="hidden-lg hidden-md">admin name</p>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Logout</a>
                        </li>
                        <li>
                            <a href="#">Change Password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">person</i>
                        <p class="hidden-lg hidden-md">Profile</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>