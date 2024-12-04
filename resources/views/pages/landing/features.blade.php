<section id="features" class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="container mx-auto px-6">
        <!-- Title -->
        <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white mb-10">
            Pourquoi Choisir
            <span class="relative inline-block text-white">
                Site Éclair ⚡
                <span class="absolute -bottom-1 left-0 w-full h-[6px] bg-accent rotate-[-2deg]"></span>
            </span> ?
        </h2>
        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach (\App\Enums\Feature::cases() as $feature)
                <div class="bg-white rounded-lg p-6 text-center shadow-lg transform transition-transform duration-300 hover:scale-105">
                    <!-- Icon -->
                    <div class="flex items-center justify-center h-16 w-16 bg-gradient-to-br from-primary to-accent text-white rounded-full mx-auto mb-4">
                        <x-dynamic-component :component="$feature->icon()" class="h-8 w-8" />
                    </div>
                    <!-- Title -->
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">
                        {{ $feature->title() }}
                    </h3>
                    <!-- Description -->
                    <p class="text-gray-600">
                        {{ $feature->description() }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
