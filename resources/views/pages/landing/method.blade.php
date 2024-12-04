<section id="method" class="py-20 bg-section-background">
    <div class="container mx-auto px-4">
        <!-- Title -->
        <h2 class="text-center text-3xl md:text-4xl font-extrabold text-gray-800 mb-6">
            Notre <span class="text-accent">Processus Simplifié</span>
        </h2>
        <p class="text-center mb-10 text-lg text-gray-700">
            Un site web professionnel, livré en <strong class="text-primary-dark">5 jours</strong>, prêt à propulser votre entreprise.
        </p>
        <!-- Steps -->
        <div class="relative max-w-3xl mx-auto">
            <!-- Vertical Line -->
            <div class="absolute left-8 top-0 h-full w-px bg-gradient-to-b from-primary-dark to-accent hidden md:block"></div>
            <div class="space-y-12 md:pl-16">
                @foreach (\App\Enums\WorkMethod::cases() as $step)
                    <div class="flex items-center group">
                        <!-- Step Icon -->
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-primary-dark to-accent text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                            <x-dynamic-component :component="$step->icon()" class="h-6 w-6"/>
                        </div>
                        <!-- Step Text -->
                        <div class="ml-6">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-primary-dark transition-colors duration-300">
                                {{ $step->title() }}
                            </h3>
                            <p class="text-gray-700">
                                {{ $step->description() }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
