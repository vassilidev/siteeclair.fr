<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="{{ asset('img/logo.svg') }}" as="image">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          as="style">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"
          media="print" onload="this.media='all'">

    @vite('resources/css/app.css')

    <link rel="icon" type="image/png" href="{{ asset('img/favicon-96x96.png') }}" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/favicon.svg') }}"/>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-touch-icon.png') }}"/>
    <meta name="apple-mobile-web-app-title" content="Site éclair"/>
    <link rel="manifest" href="{{ asset('img/site.webmanifest') }}"/>

    {!! SEO::generate() !!}
</head>
<body class="font-poppins text-text bg-background overflow-x-hidden">

<div id="cursor"></div>

@include('layouts.default.navbar')

<main class="pt-16">
    @yield('content')
</main>

@include('layouts.default.footer')

<script defer src="{{ asset('js/app.js') }}"></script>
</body>
</html>