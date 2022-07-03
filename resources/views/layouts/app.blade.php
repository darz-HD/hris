<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravels') }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/template/assets/images/favicon.png') }}">
    @stack('css')
</head>

<body>
    <div id="app">
        <header>
            @include('layouts.header')
        </header>

        @yield('content')

        <footer>
            @include('layouts.footer')
        </footer>
    </div>
    @stack('js')
</body>

</html>
