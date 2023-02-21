<html>

<head>
    <title>App Name - @yield('title')</title>
    @if (env('APP_ENV') == 'local')
        <!-- //npm run dev -->
        @vite('resources/js/app.js')
    @else
        <link rel="stylesheet" type="text/css" href="<?php echo env('ASSET_URL'); ?>app.css" />
        <script src="{{ env('ASSET_URL') }}app.js"></script>
    @endif
</head>

<body>
    @yield('sidebar')

    @include ('test.menu')
    
    <div class="container">
        @yield('content')
    </div>

    <span class="footer">
        @yield('footer')
    </span>

    @hasSection('navigation')
        <div class="pull-right">
            @yield('navigation')
        </div>
        <div class="clearfix"></div>
    @endif


</body>

</html>
