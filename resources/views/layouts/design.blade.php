<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/custom/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script type="text/javascript" src="{{asset('js/custom/bootstrap.min.js')}}"></script>
        <title>Enrollment System</title>
    </head>
    <body>
        @include('inc.navbar');
        <div class="container big-banner">
            @yield('content')
        </div>
        
    </body>
</html>