<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <title>X Solution EAD</title>
    <script src="https://kit.fontawesome.com/bc4fa83e4c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu-mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modules/class.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modules/questions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modules/assessment.css') }}">
    <link rel="stylesheet" href="{{ asset('css/graphic/style.css') }}">
    {{-- <link rel="shortcut icon" href="{{ asset('__favicon.ico') }}" type="image/x-icon"> --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon//favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}}" color="#e90000">
    <meta name="apple-mobile-web-app-title" content="Xsolution EAD">
    <meta name="application-name" content="Xsolution EAD">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    @include('_partials.menu')
    
    @yield('header')
    
    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/movie.js') }}"></script>
    <script src="{{ asset('js/questions/questions.js') }}"></script>
    <script src="{{ asset('js/questions/assessment.js') }}"></script>

    @include('_partials.footer')

</body>
</html>