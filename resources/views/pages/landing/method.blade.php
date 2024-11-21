<section id="method" class="py-20 bg-section-background">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-bold text-primary-dark mb-4">
            ⚡ Notre Processus Simplifié
        </h2>
        <p class="text-center mb-8 text-gray-800">
            Un site web professionnel, livré en 5 jours, prêt à propulser votre entreprise.
        </p>
        <div class="relative max-w-2xl mx-auto">
            <div class="absolute left-8 top-0 h-full w-px bg-gradient-to-b from-primary-dark to-accent-dark hidden md:block"></div>
            <div class="space-y-8 md:pl-16">
                @foreach (\App\Enums\WorkMethod::cases() as $step)
                    <div class="flex items-center group">
                        <!-- Icône étape -->
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-primary-dark to-accent-dark text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                            <x-dynamic-component :component="$step->icon()" class="h-6 w-6"/>
                        </div>
                        <!-- Texte étape -->
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold text-dark group-hover:text-accent-dark transition-colors duration-300">
                                {{ $step->title() }}
                            </h3>
                            <p class="text-gray-800">
                                {{ $step->description() }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
