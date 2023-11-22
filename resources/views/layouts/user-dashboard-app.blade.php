<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include("layouts.inc.header-links")
</head>
<body style="background-color: rgb(245 245 249);">
    @include("layouts.inc.user-dashboard-navbar")
    <main class="py-4">
        @yield('user-dashboard-content')
    </main>
    @include("layouts.inc.bottom-navbar")
    @include("layouts.inc.made-in")
</body>
@include("layouts.inc.footer-links")
</html>
