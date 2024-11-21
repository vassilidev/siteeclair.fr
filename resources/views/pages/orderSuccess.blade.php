@extends('layouts.default')

@section('content')
    <!-- Payment Confirmation Section -->
    <section id="method" class="py-20 bg-section-background">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-2xl md:text-3xl font-bold text-primary mb-8">🎉 Félicitations, votre commande est confirmée !</h2>
            <p class="text-center mb-12">Votre projet commence dès maintenant. Planifiez votre rendez-vous pour que nous puissions donner vie à votre site web sur mesure. 🚀</p>

            <!-- Confirmation Details -->
            <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-primary mb-12 max-w-3xl mx-auto">
                <h3 class="text-lg font-bold text-primary mb-4">✅ Confirmation de votre commande</h3>
                <p class="text-gray-700">
                    Merci pour votre confiance ! Un e-mail de confirmation a été envoyé à <span class="font-semibold text-primary">{{ $order->user->email }}</span>.
                </p>
                <p class="text-gray-700 mt-2">
                    Votre numéro de commande est : <span class="font-semibold text-accent">{{ $order->number }}</span>. Veuillez le conserver pour référence.
                </p>
            </div>

            <!-- Next Steps -->
            <div class="relative max-w-2xl mx-auto mb-20">
                <div class="absolute left-8 top-0 h-full w-px bg-gradient-to-b from-primary to-accent hidden md:block"></div>
                <div class="space-y-12 md:pl-16">
                    @foreach (\App\Enums\WorkMethod::cases() as $step)
                        <div class="flex items-center group">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-transform duration-300
                            {{ $loop->first ? 'bg-gray-300 text-gray-700 scale-110' : 'bg-gradient-to-br from-primary to-accent text-white group-hover:scale-110' }}">
                                <x-dynamic-component :component="$step->icon()" class="h-6 w-6"/>
                            </div>
                            <!-- Step Details -->
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold {{ $loop->first ? 'text-gray-700' : 'text-primary group-hover:text-accent transition-colors duration-300' }}">
                                    {{ $step->title() }}
                                </h3>
                                <p class="text-gray-700 {{ $loop->first ? 'font-semibold' : '' }}">
                                    {{ $step->description() }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Meeting Call-to-Action -->
            <div class="mt-24">
                <div class="bg-white rounded-lg shadow-lg p-8 max-w-3xl mx-auto border-t-4 border-primary">
                    <h3 class="text-2xl font-bold text-primary mb-6">📅 Réservez votre rendez-vous</h3>
                    <p class="text-gray-700 mb-6">Nous sommes impatients de vous rencontrer ! Choisissez un créneau qui vous convient pour discuter de votre projet en détail :</p>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Vos besoins et objectifs spécifiques.</li>
                        <li>Les fonctionnalités clés à intégrer.</li>
                        <li>Le planning et les prochaines étapes.</li>
                    </ul>
                    <div class="lemcal-embed-button" data-user="usr_gtmT9jzLf9KsrRwob"
                         data-meeting-type="met_Eq6T9AW49diGYm9rR"></div>
                    <script src="https://cdn.lemcal.com/lemcal-integrations.min.js" defer></script>
                </div>
            </div>
        </div>

        <!-- Script for confetti -->
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const duration = 2000;
                const end = Date.now() + duration;

                (function frame() {
                    confetti({
                        particleCount: 2,
                        angle: 60,
                        spread: 55,
                        origin: { x: 0 },
                    });
                    confetti({
                        particleCount: 2,
                        angle: 120,
                        spread: 55,
                        origin: { x: 1 },
                    });

                    if (Date.now() < end) {
                        requestAnimationFrame(frame);
                    }
                })();
            });
        </script>
    </section>
@endsection
