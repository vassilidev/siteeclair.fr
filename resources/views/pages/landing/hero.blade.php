<section class="relative h-screen text-white flex flex-col">
    <!-- Hero Image -->
    <div class="absolute inset-0">
        <img
                src="{{ asset('img/banner.webp') }}"
                alt="Bannière de fond"
                class="absolute inset-0 w-full h-full object-cover blur-md"
                loading="eager">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 flex flex-col items-center justify-center flex-grow text-center px-6">
        <!-- Title -->
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
            Lancez Votre Site en
            <span class="relative inline-block">
                <span class="text-white">Un Temps Record ⚡</span>
                <div class="absolute -bottom-3 left-0 w-full h-[6px] bg-accent rotate-[-2deg] rounded-md"></div>
            </span>
        </h1>

        <!-- Description -->
        <p class="text-base sm:text-lg text-gray-300 leading-relaxed mb-10">
            Obtenez un site professionnel et entièrement personnalisé avec domaine et hébergement inclus, livré en seulement 5 jours !
        </p>

        <!-- Badges -->
        <div class="flex justify-center flex-wrap gap-4 mb-12">
            <div class="flex items-center gap-2 px-4 py-2 border border-gray-600 rounded-lg shadow-sm bg-gray-900 text-sm text-gray-300">
                <span>💎</span>
                <span>Design 100% sur Mesure</span>
            </div>
            <div class="flex items-center gap-2 px-4 py-2 border border-gray-600 rounded-lg shadow-sm bg-gray-900 text-sm text-gray-300">
                <span>🌐</span>
                <span>Hébergement et Domaine Inclus</span>
            </div>
            <div class="flex items-center gap-2 px-4 py-2 border border-gray-600 rounded-lg shadow-sm bg-gray-900 text-sm text-gray-300">
                <span>🔄</span>
                <span>Modifications Illimitées</span>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mt-6">
            <a href="#about"
               class="bg-accent hover:bg-primary text-white font-bold py-3 px-6 rounded-full shadow-lg text-base sm:text-lg transform transition-transform hover:scale-105">
                Lancez votre projet dès maintenant
            </a>
            <a href="#offers"
               class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-full shadow-lg text-base sm:text-lg transform transition-transform hover:scale-105">
                Découvrez nos formules
            </a>
        </div>
    </div>
</section>
