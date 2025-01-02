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

