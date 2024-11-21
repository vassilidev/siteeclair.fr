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
                <h4 class="text-lg font-semibold mb-2">Liens Utiles</h4>
                <ul>
                    <li><a href="{{ route('landing') }}#about" class="hover:text-accent">À propos</a></li>
                    <li><a href="{{ route('landing') }}#method" class="hover:text-accent">Méthode</a></li>
                    <li><a href="{{ route('landing') }}#features" class="hover:text-accent">Services</a></li>
                    <li><a href="{{ route('landing') }}#testimonials" class="hover:text-accent">Témoignages</a></li>
                    <li><a href="{{ route('landing') }}#faq" class="hover:text-accent">FAQ</a></li>
                    <li><a href="{{ route('landing') }}#pricing" class="hover:text-accent">Offres</a></li>
                </ul>
            </div>
            <!-- Colonne 3 -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-semibold mb-2">Suivez-nous</h4>
                <div class="flex space-x-4">
                    <a href="https://www.linkedin.com/company/votrepage" class="hover:text-accent"
                       aria-label="Linkedin">
                        <i class="fab fa-linkedin-in fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/site_eclair/" class="hover:text-accent" aria-label="Instagram">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                </div>
            </div>
            <!-- Colonne 4 -->
            <div class="w-full md:w-1/4">
                <h4 class="text-lg font-semibold mb-2">Informations légales</h4>
                <ul>
                    <li><a href="https://the-forge.agency" class="hover:text-accent">Site de l'agence</a></li>
                    <li><a href="/legal" class="hover:text-accent">CGU/CGV</a></li>
                </ul>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="text-center">
            <p>
                Réalisé avec le <i class="fas fa-heart text-pink-500"></i> par
                <a href="https://the-forge.agency/" class="hover:text-accent">TFA - The Forge Agency</a>
            </p>
        </div>
    </div>
</footer>