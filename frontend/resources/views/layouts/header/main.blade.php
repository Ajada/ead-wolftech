<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>X Solution EAD - {{-- $title --}}</title>
    <script src="https://kit.fontawesome.com/bc4fa83e4c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu-mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modules/class.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modules/questions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modules/assessment.css') }}">
    <link rel="stylesheet" href="{{ asset('css/graphic/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('__favicon.ico') }}" type="image/x-icon">
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