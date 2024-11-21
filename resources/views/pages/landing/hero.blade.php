<section class="relative h-screen text-white flex flex-col justify-between">
    <!-- Hero Image -->
    <img
            src="{{ asset('img/banner.webp') }}"
            alt="Bannière de fond"
            class="absolute inset-0 w-full h-full object-cover"
            loading="eager"
            width="1920"
            height="1080">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/80"></div>

    <!-- Hero Content -->
    <div class="flex items-center justify-center flex-grow z-10 pb-4">
        <div class="text-center px-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
                ⚡ Un site web sur-mesure, en ligne en un éclair 🚀
            </h1>
            <p class="text-lg md:text-xl mb-8 text-gray-300">
                Obtenez un site professionnel avec domaine, hébergement et modifications illimitées inclus, livré en 5 jours.
            </p>
            <a href="#about"
               class="inline-block bg-accent hover:bg-primary text-white font-bold py-3 px-8 rounded-full transition duration-300 shadow-lg">
                Lancez votre projet dès maintenant
            </a>
        </div>
    </div>

    <!-- Badges Section -->
    <div class="flex justify-center flex-wrap gap-3 md:gap-4 z-10 mb-6 px-4">
        <div
                class="bg-white rounded-full px-3 py-1 md:px-4 md:py-2 text-gray-800 text-xs md:text-sm font-medium shadow-md transform transition duration-300 hover:-translate-y-1 flex items-center gap-2">
            💎 <span>Design Personnalisé</span>
        </div>
        <div
                class="bg-white rounded-full px-3 py-1 md:px-4 md:py-2 text-gray-800 text-xs md:text-sm font-medium shadow-md transform transition duration-300 hover:-translate-y-1 flex items-center gap-2">
            🌐 <span>Domaine & Hébergement Inclus</span>
        </div>
        <div
                class="bg-white rounded-full px-3 py-1 md:px-4 md:py-2 text-gray-800 text-xs md:text-sm font-medium shadow-md transform transition duration-300 hover:-translate-y-1 flex items-center gap-2">
            🔄 <span>Modifications Illimitées</span>
        </div>
        <div
                class="bg-white rounded-full px-3 py-1 md:px-4 md:py-2 text-gray-800 text-xs md:text-sm font-medium shadow-md transform transition duration-300 hover:-translate-y-1 flex items-center gap-2">
            ⏱️ <span>Livraison en 5 Jours</span>
        </div>
        <div
                class="bg-white rounded-full px-3 py-1 md:px-4 md:py-2 text-gray-800 text-xs md:text-sm font-medium shadow-md transform transition duration-300 hover:-translate-y-1 flex items-center gap-2">
            🛠️ <span>Support Premium 24/7</span>
        </div>
    </div>
</section>
