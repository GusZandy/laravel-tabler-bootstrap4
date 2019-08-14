<!DOCTYPE html>
<html lang="@yield('lang', config('app.locale', 'en'))">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en"/>
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <!-- Favico -->
    <link rel="icon" href="{{ config('tabler.favico', asset('favicon.ico')) }}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ config('tabler.shortcut', asset('favicon.ico')) }}"/>

    <title>@yield('title', config('app.name', 'Tabler'))</title>

    <!-- Generated: 2019-04-04 16:55:45 +0200 -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">

@section('styles')
    <!-- Styles -->
        {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
        <link href="{{ mix('css/tabler.css') }}" rel="stylesheet">
    @show
    @stack('head')
</head>
<body class="">
@section('content')
@show

@section('scripts')
    <!-- Scripts -->
    {{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="{{mix('js/manifest.js') }}"></script>
    <script src="{{mix('js/vendor.js') }}"></script>
    <script src="{{mix('js/tabler.js') }}"></script>
@show
@stack('body')
</body>
</html>
