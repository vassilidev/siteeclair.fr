<footer class="bg-gradient-to-b from-gray-900 to-black text-white py-12">
    <div class="container mx-auto px-6">
        <!-- Footer Top -->
        <div class="flex flex-wrap justify-between mb-10">
            <!-- Colonne 1 -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <img src="{{ asset('img/logo.svg') }}" width="40" height="30" alt="Logo Site Éclair" class="mb-3">
                <h3 class="text-xl font-bold">Site Éclair</h3>
                <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} Tous droits réservés.</p>
            </div>
            <!-- Colonne 2 -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-bold mb-3">Navigation</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('landing') }}#about" class="hover:text-primary">A propos</a></li>
                    <li><a href="{{ route('landing') }}#features" class="hover:text-primary">Pourquoi Nous</a></li>
                    <li><a href="{{ route('landing') }}#method" class="hover:text-primary">Processus</a></li>
                    <li><a href="{{ route('landing') }}#offers" class="hover:text-primary">Offres</a></li>
                    <li><a href="{{ route('landing') }}#faq" class="hover:text-primary">FAQ</a></li>
                </ul>
            </div>
            <!-- Colonne 3 -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-bold mb-3">Suivez-nous</h4>
                <div class="flex space-x-4">
                    <a href="https://www.linkedin.com/showcase/siteeclair/" class="hover:text-primary"
                       aria-label="LinkedIn">
                        @svg('fab-linkedin', 'h-6 w-6')
                    </a>
                    <a href="https://www.instagram.com/site_eclair/" class="hover:text-primary" aria-label="Instagram">
                        @svg('fab-instagram', 'h-6 w-6')
                    </a>
                </div>
            </div>
            <!-- Colonne 4 -->
            <div class="w-full md:w-1/4">
                <h4 class="text-lg font-bold mb-3">Informations Légales</h4>
                <ul class="space-y-2">
                    <li><a href="https://the-forge.agency" class="hover:text-primary">Site de l'Agence</a></li>
                    <li><a href="{{ route('cgs') }}" class="hover:text-primary">CGS</a></li>
                </ul>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="text-center text-sm text-gray-400">
            <p>
                Réalisé avec @svg('fas-heart', 'inline-block h-4 w-4 text-pink-500') par
                <a href="https://the-forge.agency/" class="hover:text-primary font-medium">TFA - The Forge Agency</a>
            </p>
        </div>
    </div>
</footer>
