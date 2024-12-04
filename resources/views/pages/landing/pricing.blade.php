<section id="offers" class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="container mx-auto px-6">
        <!-- Title -->
        <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white mb-6">
            Trouvez l'Offre Parfaite pour Votre Succès ⚡
        </h2>
        <p class="text-center mb-10 text-lg text-gray-300">
            Découvrez nos solutions adaptées à chaque besoin et budget.
        </p>
        <!-- Offers Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach (\App\Enums\Offer::cases() as $offer)
                <div class="bg-gray-800 rounded-lg p-6 text-left shadow-lg relative flex flex-col @if($offer->isPopular()) border-2 border-primary @endif">
                    <!-- Popular / Custom Badge -->
                    @if ($offer->isPopular())
                        <div class="absolute top-0 right-0 bg-primary text-white px-3 py-1 rounded-bl-lg text-sm font-semibold">
                            Le plus populaire
                        </div>
                    @elseif ($offer->isCustom())
                        <div class="absolute top-0 right-0 bg-gray-700 text-white px-3 py-1 rounded-bl-lg text-sm font-semibold">
                            Personnalisé
                        </div>
                    @endif
                    <!-- Title -->
                    <h3 class="text-xl font-semibold mb-3 text-white">
                        {{ $offer->getTitle() }}
                    </h3>
                    <!-- Description -->
                    <p class="mb-4 text-gray-300">
                        {{ $offer->description() }}
                    </p>
                    <!-- Price -->
                    <div class="text-3xl font-bold {{ $offer->isCustom() ? 'text-gray-300' : 'text-primary' }} mb-4">
                        {{ $offer->price() }}
                    </div>
                    <!-- Features -->
                    <ul class="mb-6 space-y-2">
                        @foreach ($offer->features() as $feature)
                            <li class="text-gray-300 flex items-center">
                                @svg('fas-check', 'inline-block h-5 w-5 text-primary mr-3')
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>
                    <!-- CTA Button -->
                    <a href="{{ route('preorder', $offer) }}"
                       class="inline-block {{ $offer->isCustom() ? 'bg-gray-700' : 'bg-primary' }} hover:bg-accent text-white font-medium py-2 px-4 rounded-full transition duration-300 mt-auto self-end">
                        {{ $offer->isCustom() ? 'Demander un Devis' : 'Choisir' }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
