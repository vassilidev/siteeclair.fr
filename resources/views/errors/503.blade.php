<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Indisponible</title>
    @vite('resources/css/app.css')
</head>
<body class="font-poppins bg-section-background text-gray-800 h-screen flex items-center justify-center">
<div class="text-center">
    <h1 class="text-6xl font-bold text-primary mb-4">503</h1>
    <h2 class="text-2xl md:text-3xl font-semibold text-gray-700 mb-6">Service temporairement indisponible 🚧</h2>
    <p class="text-gray-600 mb-8">
        Nous effectuons actuellement des travaux de maintenance. Revenez dans un moment ou contactez notre support.
    </p>
    <a href="{{ route('landing') }}"
       class="bg-accent hover:bg-primary text-white font-bold py-3 px-6 rounded-full transition duration-300 shadow-lg">
        Retourner à l'accueil
    </a>
</div>
</body>
</html>
