@extends('layouts.default')

@section('content')
    <section class="relative bg-cover bg-center min-h-screen-with-navbar flex items-center justify-center text-white"
             style="background-image: url('{{ asset('img/banner.jpeg') }}');">
        <!-- Particles.js -->
        <div id="particles-js" class="absolute inset-0"></div>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-6">⚡ Votre site web sur-mesure, performant et rapide 🚀</h1>
            <p class="text-xl md:text-2xl mb-8">⏱️ Livré en 5 jours, avec nom de domaine, hébergement, et ajustements
                illimités inclus.</p>
            <a href="#about"
               class="inline-block bg-primary hover:bg-accent text-white font-medium py-3 px-8 rounded-full transition duration-300">Créez
                votre site maintenant</a>
        </div>
        <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 bounce2">
            <a href="#about"
               class="text-white text-2xl opacity-80 hover:opacity-100 transition duration-300">
                <i class="fas fa-angles-down"></i>
            </a>
        </div>
    </section>


    @include('pages.landing.about')
    @include('pages.landing.method')
    @include('pages.landing.features')
    @include('pages.landing.pricing')
    @include('pages.landing.team')
    @include('pages.landing.testimonials')
    @include('pages.landing.faq')
    @include('pages.landing.contact')
@endsection