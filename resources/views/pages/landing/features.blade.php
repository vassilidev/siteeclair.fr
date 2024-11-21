<section id="features" class="py-20 bg-gradient-to-b from-primary to-accent">
    <h2 class="text-center text-2xl md:text-3xl font-bold text-white mb-8">⚡ Pourquoi Choisir Site Éclair ?</h2>
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach (\App\Enums\Feature::cases() as $feature)
            <div class="bg-white rounded-lg p-6 text-center shadow-lg transform transition duration-300 hover:-translate-y-2">
                <div class="flex items-center justify-center h-16 w-16 bg-gray-100 rounded-full mx-auto mb-4">
                    <x-dynamic-component :component="$feature->icon()" class="h-8 w-8 text-primary" />
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $feature->title() }}</h3>
                <p>{{ $feature->description() }}</p>
            </div>
        @endforeach
    </div>
</section>
