<!doctype html>
<html class="no-js" lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="apple-touch-fullscreen" content="yes"/>

@include('PageElements.Main.CoreCSS')

<!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
</head>
<body class="sticky_header">


<div class="overflow_wrapper">

    @include('PageElements.Main.Shared.Header')

    @section('Slider')
    @show

    <div class="main">
        @section('content')
        @show

        @include('PageElements.Main.Shared.Footer')
    </div>

    @include('PageElements.Main.CoreJS')
</div>
</body>
</html>