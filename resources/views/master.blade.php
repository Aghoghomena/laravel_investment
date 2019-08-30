<html>
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
    <meta name="twitter:widgets:theme" content="light">
    <meta property="og:title" content="Your-Title-Here" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="Your-Image-Url" />
    <meta property="og:description" content="Your-Page-Description" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('image/theme-mountain-favicon.ico') }}">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CMontserrat:400,700%7CPlayfair+Display:400,400italic' rel='stylesheet' type='text/css'>
    <!-- Css -->
    <link rel="stylesheet" href="{{asset ('css/core.min.css') }}" />
    <link rel="stylesheet" href="{{asset ('css/skin.css') }}" />

</head>
<body class="shop">
@include("includes.mobnav")

<div class="wrapper reveal-side-navigation">
    <div class="wrapper-inner">
        @include("includes.nav")
        @yield('content')
        @include("includes.footer")
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
{{--<script src="http://maps.googleapis.com/maps/api/js?v=3"></script>--}}
<script src="{{asset ('js/main.js') }}"></script>
</body>
</html>

