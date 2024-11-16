<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! SEO::generate() !!}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"
          media="print" onload="this.media='all'">

    <!-- Polices et CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          defer crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('favicon-96x96.png') }}" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}"/>
    <meta name="apple-mobile-web-app-title" content="Site éclair"/>
    <link rel="manifest" href="{{ asset('site.webmanifest') }}"/>
</head>
<body>
@include('layouts.default.navbar')

<main>
    @yield('content')
</main>

@include('layouts.default.footer')

@production
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6723c2382480f5b4f596de67/1ibhqtb7o';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
@endproduction

<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
<script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>
