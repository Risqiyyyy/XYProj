<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <title>XY Project - @yield('title')</title>
            <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        @include('admin.partials.master-css')
        </head>
    <body data-sidebar="dark">
        <div id="layout-wrapper">
            @include('admin.partials.header')
            @include('admin.partials.sidebar')
            <div class="main-content">
                @yield('content')
            </div>
        </div>
        @include('admin.partials.rightsidebar')
        @include('admin.partials.master-js')
    </body>
</html>