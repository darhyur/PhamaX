<!Doctype>
<html lang="en">
<head>
   @include('layouts.head')
</head>

<body class="bgded overlay" style="background-image:"{{ asset('vendor/images/qoins2.png') }}">

<header>


@include('layouts.superadminNav')
</header>

@yield('content')


<footer>
    @include('layouts.superadminFooter')
</footer>


@include('layouts.bottom')

</html>

</html>