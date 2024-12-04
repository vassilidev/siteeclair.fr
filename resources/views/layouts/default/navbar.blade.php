<nav class="fixed w-full bg-section-background shadow-md z-50">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a href="{{ route('landing') }}" class="flex items-center text-gray-800 font-bold text-xl">
            <img src="{{ asset('img/logo.svg') }}" width="40" height="30" alt="Logo Site Éclair" class="h-10 mr-2">
            <span>Site Éclair</span>
        </a>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-800 focus:outline-none" aria-label="Menu">
                @svg('fas-bars', 'h-6 w-6')
            </button>
        </div>
        <div id="navbar-links" class="hidden md:flex space-x-6 items-center">
            <a href="{{ route('landing') }}#about" class="text-gray-800 hover:text-primary-dark">Accueil</a>
            <a href="{{ route('landing') }}#method" class="text-gray-800 hover:text-primary-dark">Processus</a>
            <a href="{{ route('landing') }}#features" class="text-gray-800 hover:text-primary-dark">Pourquoi Nous</a>
            <a href="{{ route('landing') }}#team" class="text-gray-800 hover:text-primary-dark">Équipe</a>
            <a href="{{ route('landing') }}#faq" class="text-gray-800 hover:text-primary-dark">FAQ</a>
            <a href="{{ route('landing') }}#offers"
               class="bg-primary-dark hover:bg-accent-dark text-white font-bold py-2 px-4 rounded transition duration-300">Offres</a>
        </div>
    </div>
    <div id="mobile-menu" class="md:hidden hidden bg-section-background">
        <a href="{{ route('landing') }}#about" class="block py-2 px-4 text-gray-800 hover:bg-gray-200">Accueil</a>
        <a href="{{ route('landing') }}#method" class="block py-2 px-4 text-gray-800 hover:bg-gray-200">Processus</a>
        <a href="{{ route('landing') }}#features" class="block py-2 px-4 text-gray-800 hover:bg-gray-200">Pourquoi
            Nous</a>
        <a href="{{ route('landing') }}#team" class="block py-2 px-4 text-gray-800 hover:bg-gray-200">Équipe</a>
        <a href="{{ route('landing') }}#faq" class="block py-2 px-4 text-gray-800 hover:bg-gray-200">FAQ</a>
        <a href="{{ route('landing') }}#offers"
           class="block py-2 px-4 text-white bg-primary-dark hover:bg-accent-dark font-bold">Offres</a>
    </div>
</nav>
