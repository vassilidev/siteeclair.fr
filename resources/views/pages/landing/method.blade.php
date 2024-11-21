<section id="method" class="py-20 bg-section-background">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-bold text-primary mb-4">⚡ Notre Méthode de Travail</h2>
        <p class="text-center mb-8">Votre site livré en 1 semaine chrono, prêt à être utilisé et modifié en toute
            autonomie.</p>
        <div class="relative max-w-2xl mx-auto">
            <div class="absolute left-8 top-0 h-full w-px bg-gradient-to-b from-primary to-accent hidden md:block"></div>
            <div class="space-y-8 md:pl-16">
                @foreach (\App\Enums\WorkMethod::cases() as $step)
                    <div class="flex items-center group">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-primary to-accent text-white rounded-full flex items-center justify-center shadow-lg transition-transform duration-300 group-hover:scale-110">
                            <x-dynamic-component :component="$step->icon()" class="h-6 w-6" />
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold text-primary group-hover:text-accent transition-colors duration-300">
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
