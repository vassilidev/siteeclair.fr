<footer class="bg-footer-background text-white py-8">
    <div class="container mx-auto px-4">
        <!-- Footer Top -->
        <div class="flex flex-wrap justify-between mb-6">
            <!-- Colonne 1 -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <img src="{{ asset('img/logo.svg') }}" width="32" alt="Logo Site Éclair" class="mb-2">
                <h3 class="text-xl font-semibold">Site Éclair</h3>
                <p>&copy; {{ date('Y') }} Tous droits réservés.</p>
            </div>
            <!-- Colonne 2 -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-semibold mb-2">Liens Utiles</h4>
                <ul>
                    <li><a href="#about" class="hover:text-accent">À propos</a></li>
                    <li><a href="#method" class="hover:text-accent">Méthode</a></li>
                    <li><a href="#features" class="hover:text-accent">Services</a></li>
                    <li><a href="#testimonials" class="hover:text-accent">Témoignages</a></li>
                    <li><a href="#faq" class="hover:text-accent">FAQ</a></li>
                    <li><a href="#pricing" class="hover:text-accent">Offres</a></li>
                </ul>
            </div>
            <!-- Colonne 3 -->
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-semibold mb-2">Suivez-nous</h4>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/votrepage" class="hover:text-accent"><i
                                class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="https://www.twitter.com/votrepage" class="hover:text-accent"><i
                                class="fab fa-twitter fa-lg"></i></a>
                    <a href="https://www.linkedin.com/company/votrepage" class="hover:text-accent"><i
                                class="fab fa-linkedin-in fa-lg"></i></a>
                    <a href="https://www.instagram.com/votrepage" class="hover:text-accent"><i
                                class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
            <!-- Colonne 4 -->
            <div class="w-full md:w-1/4">
                <h4 class="text-lg font-semibold mb-2">Informations légales</h4>
                <ul>
                    <li><a href="https://www.theforgeagency.com" class="hover:text-accent">Site de l'agence</a></li>
                    <li><a href="/cgu" class="hover:text-accent">Conditions générales d'utilisation</a></li>
                    <li><a href="/cgv" class="hover:text-accent">Conditions générales de vente</a></li>
                    <li><a href="/privacy-policy" class="hover:text-accent">Politique de confidentialité</a></li>
                </ul>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="text-center">
            <p>
                Réalisé avec le <i class="fas fa-heart text-pink-500"></i> par <a href="https://www.theforgeagency.com"
                                                                                  class="hover:text-accent">TFA The
                    Forge Agency</a>
            </p>
        </div>
    </div>
</footer>