<title>
    @yield('title')
</title>
<!--meta info-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="author" content="KingD">
<meta name="keywords" content="portal school stuedents  ">
<meta name="description" content="">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/fav.ico')}}">
<!--web fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
<!--libs css-->
{{--<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}">--}}

<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/plugins/owl-carousel/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/plugins/owl-carousel/owl.transitions.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/plugins/jackbox/css/jackbox.min.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('vendor/plugins/rs-plugin/css/settings.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/plugins/colorpicker/colorpicker.css')}}">
<!--theme css-->

<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/bootstrap/css/material-dashboard.css?v=1.2.0')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/bootstrap/css/demo.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/bootstrap/css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/bootstrap/css/dataTables.jqueryui.min.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/bootstrap/css/theme-animate.css')}}">
<link rel="stylesheet" type="text/css" media="all" href="{{ asset('vendor/bootstrap/css/style.css')}}">
<!--head libs-->
<script src="{{ asset('vendor/bootstrap/js/jquery-2.1.0.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/plugins/jquery.queryloader2.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/modernizr.js') }}"></script>
<script>
    $('html').addClass('d_none');
    $(document).ready(function(){
        $('html').show();
        $("body").queryLoader2({
            backgroundColor: '#fff',
            barColor : '#35eef6',
            barHeight: 4,
            percentage:true,
            deepSearch:true,
            minimumTime:1000
        });

        $(".nav .dropdown"). mouseenter(
            function() {
                $('.nav .dropdown', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.nav .dropdown', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
            });
        $().dataTable(
        )
    });
</script>