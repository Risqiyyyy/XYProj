<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <title>XY Project - @yield('title')</title>
        <link rel="icon" href="home/img/xylogo.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="assets/css/style.min.css">
    </head>
    <body>
        @include('partials.header')
        @include('auth.auth')
        @include('partials.sidebar')
 
        <div>
            @yield('content')
        </div>

        @include('partials.footer')
    </body>
</html>