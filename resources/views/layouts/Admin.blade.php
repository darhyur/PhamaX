<!Doctype>
<html lang="en">
<head>
   @include('layouts.head')
</head>
{{--<body class="bgded overlay" style="background-color:blueviolet;height:120px;">--}}
<body class="bgded overlay" style="background-image:"{{ asset('vendor/images/qoins2.png') }}">

<header>

@include('layouts.adminNav')
</header>

@yield('content')


<footer>
    @include('layouts.footer')
</footer>


@include('layouts.bottom')

</html>

</html>