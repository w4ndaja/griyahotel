<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="/css/min.css?id=2" rel="stylesheet">

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
    <script>
        window.user ={
            authenticated: @json(Auth::check()),
            createPosts: @json(Auth::check() && Auth::user()->can('create posts')),
        };
        @auth
            window.authUser = @json(Auth::user());
        @else
            window.authUser = {};
        @endauth
    </script>
</head>
<body class="bg-white antialiased font-sans">
    <div id="app">
        <navigation></navigation>
        <main class="py-4">
            @yield('content')
        </main>

        <foot></foot>
    </div>
    <script src="/js/min.js?id=2"></script>
    @include('alert')
</body>
</html>
