@extends('layouts.default')

@php
    $testimonials = [
        [
            'badge' => 'TFA',
            'name' => 'Diag Power',
            'role' => 'Directeur Technique',
            'avatar' => 'https://ui-avatars.com/api/?name=Diag+Power&background=FF6F61&color=ffffff&rounded=true&size=64',
            'content' => 'Une équipe très professionnelle qui sait de quoi elle parle. Qualité au rendez-vous, merci beaucoup pour votre travail. Vassili a su créer une plateforme et un site parfaitement adaptés à nos besoins.',
        ],
        [
            'badge' => 'Site Éclair',
            'name' => 'Stephen',
            'role' => 'Organisme C3',
            'avatar' => 'https://ui-avatars.com/api/?name=Stephen+C3&background=00C9FF&color=ffffff&rounded=true&size=64',
            'content' => 'Intervention rapide et irréprochable. Les solutions proposées dépassent nos attentes. Site Éclair a amélioré notre organisation et notre productivité.',
        ],
        [
            'badge' => 'TFA',
            'name' => 'Michael',
            'role' => 'Unitead',
            'avatar' => 'https://ui-avatars.com/api/?name=Michael+Unitead&background=6A4C93&color=ffffff&rounded=true&size=64',
            'content' => 'Excellente collaboration avec Vassili. Compréhension parfaite des enjeux et objectifs. Grâce à TFA, nous avons développé une solution sur mesure et évolutive.',
        ],
        [
            'badge' => 'Site Éclair',
            'name' => 'Morine Mallet',
            'role' => 'Entrepreneure',
            'avatar' => 'https://ui-avatars.com/api/?name=Morine+Mallet&background=2ECC71&color=ffffff&rounded=true&size=64',
            'content' => 'Rapide et efficace ! Site Éclair est toujours présent, même pour des missions complexes. Je recommande pour leur professionnalisme et leur engagement.',
        ],
        [
            'badge' => 'TFA',
            'name' => 'Tanguy',
            'role' => 'Piba Location',
            'avatar' => 'https://ui-avatars.com/api/?name=Tanguy+Piba&background=F4D03F&color=ffffff&rounded=true&size=64',
            'content' => 'Je recommande vivement le travail de Vassili pour le développement d\'API. TFA a créé une solution stable et adaptée à nos besoins. Professionnalisme et rapidité au rendez-vous !',
        ],
        [
            'badge' => 'TFA',
            'name' => 'Yannick Le Vaillant',
            'role' => 'Consultant Digital',
            'avatar' => 'https://ui-avatars.com/api/?name=Yannick+LeVaillant&background=e07b00&color=ffffff&rounded=true&size=64',
            'content' => 'Excellent prestataire : rapide, efficace et investi. Grâce à TFA, nous avons intégré des solutions digitales innovantes en un temps record. Je recommande vivement pour son expertise et son engagement.',
        ],
    ];
@endphp

@section('content')
    @include('pages.landing.hero')
    @include('pages.landing.about')
    @include('pages.landing.method')
    @include('pages.landing.features')
    @include('pages.landing.pricing')
    @include('pages.landing.testimonials')
    @include('pages.landing.faq')
    @include('pages.landing.contact')
@endsection
