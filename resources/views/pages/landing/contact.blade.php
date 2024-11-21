<section id="contact-section" class="py-20 bg-background border-t-4 border-primary">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
        <!-- Texte de contact -->
        <div class="md:w-1/2 text-center md:text-left mb-6 md:mb-0">
            <h2 class="text-2xl md:text-3xl font-bold text-primary-dark mb-4">Prêt à lancer votre projet ? 🚀</h2>
            <p class="text-lg text-gray-700 mb-4">
                Réservez un appel avec notre équipe et transformons ensemble vos idées en réalité ! 💬
            </p>
            <a href="{{ route('contact') }}"
               class="bg-primary-dark text-white py-3 px-6 rounded-lg transition duration-300 hover:bg-accent-dark inline-block focus:outline-none focus:ring-2 focus:ring-primary-dark"
               aria-label="Réservez un appel avec notre équipe">
                Prenez rendez-vous dès maintenant
            </a>
        </div>
        <!-- Carte d'image -->
        <div class="md:w-1/2 flex justify-center">
            <div class="relative w-full max-w-sm rounded-lg overflow-hidden shadow-lg border border-gray-200 bg-white transition-transform duration-300 hover:scale-105 focus-within:scale-105">
                <img
                        src="{{ asset('img/meet.webp') }}"
                        alt="Illustration de réunion avec notre équipe"
                        class="w-full h-auto"
                        loading="lazy"
                >
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-100 opacity-70 pointer-events-none"></div>
            </div>
        </div>
    </div>
</section>