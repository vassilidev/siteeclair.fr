<section id="features" class="py-20 bg-gradient-to-b from-primary to-accent">
    <h2 class="text-center text-2xl md:text-3xl font-bold text-white mb-8">⚡ Pourquoi Choisir Site Éclair ?</h2>
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach (\App\Enums\Feature::cases() as $feature)
            <div class="bg-white rounded-lg p-6 text-center shadow-lg transform transition duration-300 hover:-translate-y-2">
                <i class="fas {{ $feature->icon() }} fa-2x text-primary mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">{{ $feature->title() }}</h3>
                <p>{{ $feature->description() }}</p>
            </div>
        @endforeach
    </div>
</section>