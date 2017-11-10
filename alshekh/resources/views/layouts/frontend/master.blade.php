<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ app()->getLocale() }}" dir="rtl"> <!--<![endif]-->
<head>

    <!-- Meta-Information -->
    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="ZYMAWY">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/uikit-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    @yield('css')

</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

@yield('toolbar')

@yield('content')



@yield('footer')


<script src="{{ asset('/js/jquery-2.1.3.js') }}"></script>
<!-- Our Website Javascripts -->
<script src="{{ asset('js/uikit-icons.min.js') }}"></script>
<script src="{{ asset('js/uikit.min.js') }}"></script>
@yield('js')
</body>
</html>