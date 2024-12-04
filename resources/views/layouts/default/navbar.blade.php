<nav class="fixed w-full bg-black/80 backdrop-blur-md shadow-md z-50">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <!-- Brand Name -->
        <a href="{{ route('landing') }}" class="text-white font-bold text-xl tracking-wide">
            Site Éclair ⚡
        </a>
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white focus:outline-none" aria-label="Menu">
                @svg('fas-bars', 'h-6 w-6')
            </button>
        </div>
        <!-- Desktop Links -->
        <div id="navbar-links" class="hidden md:flex space-x-6 items-center">
            <a href="{{ route('landing') }}#about" class="text-white hover:text-accent transition duration-300">A
                propos</a>
            <a href="{{ route('landing') }}#method" class="text-white hover:text-accent transition duration-300">Processus</a>
            <a href="{{ route('landing') }}#features" class="text-white hover:text-accent transition duration-300">Pourquoi
                Nous</a>
            <a href="{{ route('landing') }}#team"
               class="text-white hover:text-accent transition duration-300">Équipe</a>
            <a href="{{ route('landing') }}#faq" class="text-white hover:text-accent transition duration-300">FAQ</a>
            <a href="{{ route('landing') }}#offers"
               class="bg-accent hover:bg-primary text-white font-bold py-2 px-4 rounded-full transition duration-300">
                Offres
            </a>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-black/90 text-white">
        <a href="{{ route('landing') }}#about" class="block py-3 px-4 hover:bg-gray-800 transition duration-300">A
            propos</a>
        <a href="{{ route('landing') }}#method" class="block py-3 px-4 hover:bg-gray-800 transition duration-300">Processus</a>
        <a href="{{ route('landing') }}#features" class="block py-3 px-4 hover:bg-gray-800 transition duration-300">Pourquoi
            Nous</a>
        <a href="{{ route('landing') }}#team"
           class="block py-3 px-4 hover:bg-gray-800 transition duration-300">Équipe</a>
        <a href="{{ route('landing') }}#faq" class="block py-3 px-4 hover:bg-gray-800 transition duration-300">FAQ</a>
        <a href="{{ route('landing') }}#offers"
           class="block py-3 px-4 bg-accent hover:bg-primary text-white font-bold transition duration-300">Offres</a>
    </div>
</nav>
