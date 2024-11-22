<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Preload images -->
    <link rel="preload" href="{{ asset('img/logo.svg') }}" as="image">
    <link rel="preload" href="{{ asset('img/banner.webp') }}" as="image" type="image/webp">

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- Favicon and Manifest -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/icons/favicon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/icons/favicon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/icons/favicon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/icons/favicon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icons/favicon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/icons/favicon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/icons/favicon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icons/favicon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icons/favicon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/icons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/icons/favicon-192x192.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icons/favicon.ico') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/icons/favicon-114x114.png') }}">
    <meta name="msapplication-config" content="{{ asset('img/icons/browserconfig.xml') }}">
    <link rel="manifest" href="{{ asset('img/icons/manifest.json') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- SEO -->
    {!! SEO::generate() !!}
    {!! JsonLd::generate(); !!}
</head>
<body class="font-poppins text-text bg-background overflow-x-hidden">
<div id="cursor"></div>

@include('layouts.default.navbar')

<main>
    @yield('content')
</main>

@include('layouts.default.footer')

<script>
    setTimeout(function () {
        var script = document.createElement('script');
        script.src = "https://www.googletagmanager.com/gtag/js?id=G-5PKBP589HJ";
        script.async = true;
        document.head.appendChild(script);

        script.onload = function () {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'G-5PKBP589HJ', {
                'anonymize_ip': true,
                'allow_google_signals': false,
                'send_page_view': true
            });
        };
    }, 3000);
</script>

<script defer src="{{ asset('js/app.js') }}"></script>

<div id="back-to-top" class="fixed bottom-5 right-5 hidden bg-primary-dark text-white p-3 rounded-full shadow-lg cursor-pointer hover:bg-accent-dark transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
</div>
</body>
</html>