@php
    $testimonials = [
        [
            'badge' => 'TFA',
            'name' => 'Diag Power',
            'role' => 'Directeur Technique',
            'avatar' => 'https://ui-avatars.com/api/?name=Diag+Power&background=BD93F9&color=282A36&rounded=true&size=64',
            'content' => 'Une équipe très professionnelle qui sait de quoi elle parle. Qualité au rendez-vous, merci beaucoup pour votre travail. Vassili a su créer une plateforme et un site parfaitement adaptés à nos besoins.',
        ],
        [
            'badge' => 'Site Éclair',
            'name' => 'Stephen',
            'role' => 'Organisme C3',
            'avatar' => 'https://ui-avatars.com/api/?name=Stephen+C3&background=50FA7B&color=282A36&rounded=true&size=64',
            'content' => 'Intervention rapide et irréprochable. Les solutions proposées dépassent nos attentes. Site Éclair a amélioré notre organisation et notre productivité.',
        ],
        [
            'badge' => 'TFA',
            'name' => 'Michael',
            'role' => 'Unitead',
            'avatar' => 'https://ui-avatars.com/api/?name=Michael+Unitead&background=FF79C6&color=282A36&rounded=true&size=64',
            'content' => 'Excellente collaboration avec Vassili. Compréhension parfaite des enjeux et objectifs. Grâce à TFA, nous avons développé une solution sur mesure et évolutive.',
        ],
        [
            'badge' => 'Site Éclair',
            'name' => 'Morine Mallet',
            'role' => 'Entrepreneure',
            'avatar' => 'https://ui-avatars.com/api/?name=Morine+Mallet&background=8BE9FD&color=282A36&rounded=true&size=64',
            'content' => 'Rapide et efficace ! Site Éclair est toujours présent, même pour des missions complexes. Je recommande pour leur professionnalisme et leur engagement.',
        ],
        [
            'badge' => 'TFA',
            'name' => 'Tanguy',
            'role' => 'Piba Location',
            'avatar' => 'https://ui-avatars.com/api/?name=Tanguy+Piba&background=FFB86C&color=282A36&rounded=true&size=64',
            'content' => 'Je recommande vivement le travail de Vassili pour le développement d\'API. TFA a créé une solution stable et adaptée à nos besoins. Professionnalisme et rapidité au rendez-vous !',
        ],
        [
            'badge' => 'TFA',
            'name' => 'Yannick Le Vaillant',
            'role' => 'Consultant Digital',
            'avatar' => 'https://ui-avatars.com/api/?name=Yannick+LeVaillant&background=FF5555&color=F8F8F2&rounded=true&size=64',
            'content' => 'Excellent prestataire : rapide, efficace et investi. Grâce à TFA, nous avons intégré des solutions digitales innovantes en un temps record. Je recommande vivement pour son expertise et son engagement.',
        ],
    ];
@endphp

<section id="testimonials" class="py-20 bg-section-background">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-bold text-primary-dark mb-4">⚡ Ils nous font confiance</h2>
        <p class="text-center mb-8 text-gray-700">
            Découvrez comment Site Éclair et TFA transforment vos idées en solutions performantes.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($testimonials as $testimonial)
                <div
                        class="bg-white rounded-lg p-6 shadow-lg relative focus:outline-none focus:ring-4 focus:ring-primary-dark"
                        tabindex="0"
                        aria-label="Témoignage de {{ $testimonial['name'] }}"
                >
                    <div class="absolute top-2 right-2 bg-primary-dark text-white px-3 py-1 rounded-full text-sm">
                        {{ $testimonial['badge'] }}
                    </div>
                    <div class="flex items-center mb-4">
                        <img
                                src="{{ $testimonial['avatar'] }}"
                                alt="Photo de {{ $testimonial['name'] }}"
                                loading="lazy"
                                class="w-12 h-12 rounded-full mr-4 border-2 border-primary-dark"
                        >
                        <div>
                            <h3 class="text-lg font-semibold text-primary-dark">{{ $testimonial['name'] }}</h3>
                            <p class="text-sm text-gray-700">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                    <p class="text-gray-800">{{ $testimonial['content'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>