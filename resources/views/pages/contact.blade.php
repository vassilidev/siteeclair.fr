@extends('layouts.default')

@section('content')
    <section class="py-20 bg-background border-t-4 border-primary">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-bold text-primary mb-4">
                Planifiez un Rendez-vous 🗓️
            </h2>
            <p class="text-center mb-8 text-lg text-accent">
                Utilisez le calendrier ci-dessous pour planifier une réunion avec nous ! 💬
            </p>
            <div class="max-w-md mx-auto">
                <div class="lemcal-embed-booking-calendar"
                     data-user="usr_gtmT9jzLf9KsrRwob"
                     data-meeting-type="met_Eq6T9AW49diGYm9rR">
                </div>
                <script src="https://cdn.lemcal.com/lemcal-integrations.min.js" defer></script>
            </div>
        </div>
    </section>
@endsection