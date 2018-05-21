<!Doctype>
<html lang="en">
<head>
   @include('layouts.head')
</head>
{{--<body class="bgded overlay" style="background-color:blueviolet;height:120px;">--}}
<body class="bgded overlay" style="background-image:"{{ asset('vendor/images/qoins2.png') }}">

<header>

@include('layouts.postuserNav')
</header>

@yield('content')


<footer>
    @include('layouts.superadminFooter')
</footer>


@include('layouts.bottom')

</html>

</html>