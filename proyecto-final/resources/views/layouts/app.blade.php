<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('scripts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('scripts/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('scripts/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('scripts/fancybox-master/dist/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Styles -->
</head>
<body>
    @include('layouts.header')
    @yield('content')
    <script src="{{ asset('scripts/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('scripts/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('scripts/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('scripts/fancybox-master/dist/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    @yield('scripts')
</body>
</html>