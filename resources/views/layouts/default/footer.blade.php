<footer class="bg-footer-background text-white py-8">
    <div class="container mx-auto px-4">
        <!-- Footer Top -->
        <div class="flex flex-wrap justify-between mb-6">
            <!-- Colonne 1 -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <img src="{{ asset('img/logo.svg') }}" width="40" height="30" alt="Logo Site Éclair" class="mb-2">
                <h3 class="text-xl font-semibold">Site Éclair</h3>
                <p>&copy; {{ date('Y') }} Tous droits réservés.</p>
            </div>
            <!-- Colonne 2 -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-semibold mb-2">Navigation</h4>
                <ul>
                    <li><a href="{{ route('landing') }}#about" class="hover:text-accent">Accueil</a></li>
                    <li><a href="{{ route('landing') }}#features" class="hover:text-accent">Pourquoi Nous</a></li>
                    <li><a href="{{ route('landing') }}#method" class="hover:text-accent">Processus</a></li>
                    <li><a href="{{ route('landing') }}#offers" class="hover:text-accent">Offres</a></li>
                    <li><a href="{{ route('landing') }}#team" class="hover:text-accent">Équipe</a></li>
                    <li><a href="{{ route('landing') }}#faq" class="hover:text-accent">FAQ</a></li>
                </ul>
            </div>
            <!-- Colonne 3 -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-semibold mb-2">Suivez-nous</h4>
                <div class="flex space-x-4">
                    <a href="https://www.linkedin.com/showcase/siteeclair/" class="hover:text-accent"
                       aria-label="LinkedIn">
                        @svg('fab-linkedin', 'h-6 w-6')
                    </a>
                    <a href="https://www.instagram.com/site_eclair/" class="hover:text-accent" aria-label="Instagram">
                        @svg('fab-instagram', 'h-6 w-6')
                    </a>
                </div>
            </div>
            <!-- Colonne 4 -->
            <div class="w-full md:w-1/4">
                <h4 class="text-lg font-semibold mb-2">Informations Légales</h4>
                <ul>
                    <li><a href="https://the-forge.agency" class="hover:text-accent">Site de l'Agence</a></li>
                    <li><a href="{{ route('cgs') }}" class="hover:text-accent">CGS</a></li>
                </ul>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="text-center">
            <p>
                Réalisé avec @svg('fas-heart', 'inline-block h-4 w-4 text-pink-500') par
                <a href="https://the-forge.agency/" class="hover:text-accent">TFA - The Forge Agency</a>
            </p>
        </div>
    </div>
</footer>