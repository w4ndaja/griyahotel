<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>@yield('title', config('app.name'))</title>

        <meta name="author" content="@irsyadadl">
        <meta name="title" content="Creative Dashboard">
        <meta name="description" content="Creative Dashboard">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="apple-mobile-web-app-title" content="Delay">
        <meta name="application-name" content="Delay">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="/css/min-back.css">
        
        @yield('style')
    </head>
    <body style="background-color: #e5eaf3">
        <main id="app">
{{--            @include('back.partials.navbar')--}}
            <div class="row">
                <div class="col-md-3">
                    @include('back.partials.sidebar')
                </div>
                <div class="col-md-9 p-4">
                    @include('components.alert')
                    @yield('content')
                </div>
            </div>
        </main>
        <script src="/js/min-back.js"></script>
        @yield('scripts')
    </body>
</html>
