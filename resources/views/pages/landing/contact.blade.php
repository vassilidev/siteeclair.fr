<section id="contact-section" class="py-20 bg-gradient-to-b from-gray-900 to-black border-t-4 border-primary">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
        <!-- Texte de contact -->
        <div class="md:w-1/2 text-center md:text-left mb-8 md:mb-0">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-6">
                Prêt à lancer votre projet ? <span class="text-primary">🚀</span>
            </h2>
            <p class="text-lg text-gray-300 mb-6">
                Réservez un appel avec notre équipe et transformons ensemble vos idées en réalité ! <span class="text-primary">💬</span>
            </p>
            <a href="{{ route('contact') }}"
               class="bg-primary text-black font-medium py-3 px-6 rounded-lg transition duration-300 hover:bg-accent hover:text-white inline-block focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-black"
               aria-label="Réservez un appel avec notre équipe">
                Prenez rendez-vous dès maintenant
            </a>
        </div>
        <!-- Carte d'image -->
        <div class="md:w-1/2 flex justify-center">
            <div class="relative w-full max-w-sm rounded-lg overflow-hidden shadow-lg border border-gray-700 bg-gray-800 transition-transform duration-300 hover:scale-105 focus-within:scale-105">
                <img
                        src="{{ asset('img/meet.webp') }}"
                        alt="Illustration de réunion avec notre équipe"
                        class="w-full h-auto"
                        loading="lazy"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-70 pointer-events-none"></div>
            </div>
        </div>
    </div>
</section>
