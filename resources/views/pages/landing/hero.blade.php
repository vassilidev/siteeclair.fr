<section class="relative min-h-screen flex items-center justify-center text-white">
    <!-- Hero Image -->
    <img
            src="{{ asset('img/banner.webp') }}"
            alt="Bannière de fond"
            class="absolute inset-0 w-full h-full object-cover"
            loading="eager"
            width="1920"
            height="1080">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <!-- Hero Content -->
    <div class="relative z-10 text-center px-4">
        <h1 class="text-3xl md:text-4xl font-bold mb-6">
            ⚡ Votre site web sur-mesure, performant et rapide 🚀
        </h1>
        <p class="text-xl md:text-1xl mb-8">
            ⏱️ Livré en 5 jours, avec nom de domaine, hébergement, et ajustements illimités inclus.
        </p>
        <a href="#about"
           class="inline-block bg-accent hover:bg-primary text-white font-bold py-3 px-8 rounded-full transition duration-300">
            Créez votre site maintenant
        </a>
    </div>
</section>
