@php
    $testimonials = [
        [
            'badge' => 'TFA',
            'name' => 'Diag Power',
            'role' => 'Directeur Technique',
            'avatar' => 'https://ui-avatars.com/api/?name=Diag+Power&background=FF6F61&color=ffffff&rounded=true&size=64',
            'content' => 'Une équipe très professionnelle qui sait de quoi elle parle. Qualité au rendez-vous, merci beaucoup pour votre travail. Vassili a su créer une plateforme et un site parfaitement adaptés à nos besoins.',
        ],
        [
            'badge' => 'Site Éclair',
            'name' => 'Stephen',
            'role' => 'Organisme C3',
            'avatar' => 'https://ui-avatars.com/api/?name=Stephen+C3&background=00C9FF&color=ffffff&rounded=true&size=64',
            'content' => 'Intervention rapide et irréprochable. Les solutions proposées dépassent nos attentes. Site Éclair a amélioré notre organisation et notre productivité.',
        ],
        [
            'badge' => 'TFA',
            'name' => 'Michael',
            'role' => 'Unitead',
            'avatar' => 'https://ui-avatars.com/api/?name=Michael+Unitead&background=6A4C93&color=ffffff&rounded=true&size=64',
            'content' => 'Excellente collaboration avec Vassili. Compréhension parfaite des enjeux et objectifs. Grâce à TFA, nous avons développé une solution sur mesure et évolutive.',
        ],
        [
            'badge' => 'Site Éclair',
            'name' => 'Morine Mallet',
            'role' => 'Entrepreneure',
            'avatar' => 'https://ui-avatars.com/api/?name=Morine+Mallet&background=2ECC71&color=ffffff&rounded=true&size=64',
            'content' => 'Rapide et efficace ! Site Éclair est toujours présent, même pour des missions complexes. Je recommande pour leur professionnalisme et leur engagement.',
        ],
        [
            'badge' => 'TFA',
            'name' => 'Tanguy',
            'role' => 'Piba Location',
            'avatar' => 'https://ui-avatars.com/api/?name=Tanguy+Piba&background=F4D03F&color=ffffff&rounded=true&size=64',
            'content' => 'Je recommande vivement le travail de Vassili pour le développement d\'API. TFA a créé une solution stable et adaptée à nos besoins. Professionnalisme et rapidité au rendez-vous !',
        ],
        [
            'badge' => 'TFA',
            'name' => 'Yannick Le Vaillant',
            'role' => 'Consultant Digital',
            'avatar' => 'https://ui-avatars.com/api/?name=Yannick+LeVaillant&background=e07b00&color=ffffff&rounded=true&size=64',
            'content' => 'Excellent prestataire : rapide, efficace et investi. Grâce à TFA, nous avons intégré des solutions digitales innovantes en un temps record. Je recommande vivement pour son expertise et son engagement.',
        ],
    ];
@endphp

<section id="testimonials" class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="container mx-auto px-6">
        <!-- Title -->
        <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white mb-4">
            Ils nous font confiance
        </h2>
        <p class="text-center text-lg text-gray-300 mb-6">
            Découvrez pourquoi nos clients adorent travailler avec <span class="text-primary">Site Éclair</span> et
            <span class="text-primary">TFA</span>.
        </p>

        <!-- Proof of Trust -->
        <div class="flex flex-wrap justify-center items-center gap-4 mb-12">
            <div class="bg-gray-800 text-white py-2 px-4 rounded-full text-sm font-medium flex items-center">
                ⭐️ <span class="ml-2 font-bold mr-2">4.9/5</span> Moyenne des avis
            </div>
            <div class="bg-gray-800 text-white py-2 px-4 rounded-full text-sm font-medium flex items-center">
                @svg('fas-award', ['class' => 'w-4 h-4 mr-2']) Super Malter
            </div>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($testimonials as $testimonial)
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg relative flex flex-col">
                    <!-- Badge -->
                    <div class="absolute top-3 right-3 bg-primary text-black px-3 py-1 rounded-full text-sm font-semibold">
                        {{ $testimonial['badge'] }}
                    </div>
                    <!-- User Info -->
                    <div class="flex items-center mb-4">
                        <img
                                src="{{ $testimonial['avatar'] }}"
                                alt="Photo de {{ $testimonial['name'] }}"
                                loading="lazy"
                                class="w-12 h-12 rounded-full mr-4 border-2 border-primary"
                        >
                        <div>
                            <h3 class="text-lg font-semibold text-white">{{ $testimonial['name'] }}</h3>
                            <p class="text-sm text-gray-400">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                    <!-- Content -->
                    <p class="text-gray-300 flex-grow">
                        {{ $testimonial['content'] }}
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-12">
            <p class="text-lg text-gray-300 mb-5">
                Ceci n'est qu'un aperçu. Consultez plus d'avis sur Malt et nos autres plateformes.
            </p>
            <a href="https://www.malt.fr/profile/vassilijoffroy"
               class="bg-primary text-black font-medium py-3 px-6 rounded-full hover:bg-accent transition">
                Voir tous nos avis
            </a>
        </div>
    </div>
</section>

