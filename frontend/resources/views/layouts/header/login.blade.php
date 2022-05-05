<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>X Solution EAD - Login</title>
    <link rel="shortcut icon" href="{{ asset('__favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

    @yield('content')
    
    <div class="loading">
        <div class="loading-bg"></div>
        <img src="{{ asset('images/loading_1.gif') }}" alt="loading.png">
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    
</body>
</html>