<section class="relative min-h-[80vh] text-white flex flex-col">
    <!-- Hero Image -->
    <div class="absolute inset-0">
        <img
                src="{{ asset('img/banner.webp') }}"
                alt="Bannière de fond"
                class="absolute inset-0 w-full h-full object-cover blur-sm"
                loading="eager">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/80"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 flex flex-col items-center justify-center flex-grow text-center px-6 max-w-[960px] mx-auto">
        <!-- Title -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4 sm:mb-6 leading-tight">
            Lancez Votre Site en
            <span class="relative inline-block">
                <span class="text-white">Un Temps Record ⚡</span>
                <div class="absolute -bottom-1 left-0 w-full h-[4px] bg-accent rotate-[-2deg] rounded-md"></div>
            </span>
        </h1>

        <!-- Description -->
        <p class="text-sm sm:text-base md:text-lg text-gray-300 leading-relaxed mb-4 sm:mb-6">
            Obtenez un site professionnel et entièrement personnalisé avec domaine et hébergement inclus, livré en seulement 5 jours !
        </p>

        <!-- Call to Action -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mt-6">
            <a href="#about"
               class="bg-accent hover:bg-primary text-white font-bold py-3 px-6 rounded-full shadow-lg text-sm sm:text-lg transition-all hover:scale-105">
                Lancez votre projet dès maintenant
            </a>
            <a href="#offers"
               class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-full shadow-lg text-sm sm:text-lg transition-all hover:scale-105">
                Découvrez nos formules
            </a>
        </div>
    </div>
</section>
