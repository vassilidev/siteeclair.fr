<section class="relative h-screen text-white flex flex-col">
    <!-- Hero Image -->
    <div class="absolute inset-0">
        <img
                src="{{ asset('img/banner.webp') }}"
                alt="Bannière de fond"
                class="absolute inset-0 w-full h-full object-cover"
                loading="eager"
                width="1920"
                height="1080"
                class="blur-md">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/70"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 flex items-center justify-center flex-grow px-6">
        <div class="text-center w-full sm:max-w-[90%]">
            <!-- Title -->
            <h1 class="text-2xl sm:text-4xl md:text-5xl font-bold mb-6 leading-tight">
                ⚡ Un site web sur-mesure, en ligne en un éclair 🚀
            </h1>
            <!-- Description -->
            <p class="text-sm text-gray-300 leading-relaxed mb-8">
                Obtenez un site professionnel avec domaine, hébergement et retours illimités, livré en 5 jours.
            </p>
            <!-- Call to Action -->
            <a href="#about"
               class="inline-block bg-accent hover:bg-primary text-white font-bold py-2 px-3 rounded-full transition duration-300 shadow-lg">
                Lancez votre projet dès maintenant
            </a>
        </div>
    </div>

    <!-- Badges Section (Hidden on Mobile) -->
    <div class="hidden md:flex justify-center flex-wrap gap-3 md:gap-4 z-10 mb-8 px-6">
        <div
                class="bg-white rounded-full px-4 py-2 text-gray-800 text-sm font-medium shadow-md transform transition duration-300 hover:-translate-y-1 flex items-center gap-2">
            💎 <span>Design Personnalisé</span>
        </div>
        <div
                class="bg-white rounded-full px-4 py-2 text-gray-800 text-sm font-medium shadow-md transform transition duration-300 hover:-translate-y-1 flex items-center gap-2">
            🌐 <span>Domaine & Hébergement Inclus</span>
        </div>
        <div
                class="bg-white rounded-full px-4 py-2 text-gray-800 text-sm font-medium shadow-md transform transition duration-300 hover:-translate-y-1 flex items-center gap-2">
            🔄 <span>Modifications Illimitées</span>
        </div>
        <div
                class="bg-white rounded-full px-4 py-2 text-gray-800 text-sm font-medium shadow-md transform transition duration-300 hover:-translate-y-1 flex items-center gap-2">
            ⏱️ <span>Livraison en 5 Jours</span>
        </div>
        <div
                class="bg-white rounded-full px-4 py-2 text-gray-800 text-sm font-medium shadow-md transform transition duration-300 hover:-translate-y-1 flex items-center gap-2">
            🛠️ <span>Support Premium 24/7</span>
        </div>
    </div>
</section>
