<section id="pricing" class="py-20 bg-background">
    <h2 class="text-center text-2xl md:text-3xl font-bold text-primary-dark mb-4">⚡ Nos Offres</h2>
    <p class="text-center mb-8 text-gray-800">Des solutions adaptées à chaque besoin et budget.</p>
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach (\App\Enums\Offer::cases() as $offer)
            <div class="bg-white rounded-lg p-6 text-left shadow-lg relative flex flex-col @if($offer->isPopular()) border-2 border-accent-dark @endif">
                @if ($offer->isPopular())
                    <div class="absolute top-0 right-0 bg-accent-dark text-white px-3 py-1 rounded-bl-lg">
                        Le plus populaire
                    </div>
                @elseif ($offer->isCustom())
                    <div class="absolute top-0 right-0 bg-gray-900 text-white px-3 py-1 rounded-bl-lg">
                        Personnalisé
                    </div>
                @endif
                <h3 class="text-xl font-semibold mb-2 text-primary-dark">{{ $offer->getTitle() }}</h3>
                <p class="mb-4 text-gray-700">{{ $offer->description() }}</p>
                <div class="text-3xl font-bold {{ $offer->isCustom() ? 'text-gray-900' : 'text-primary-dark' }} mb-4">
                    {{ $offer->price() }}
                </div>
                <ul class="mb-6 space-y-2 flex-grow">
                    @foreach ($offer->features() as $feature)
                        <li class="text-gray-700">
                            @svg('fas-check', 'inline-block h-4 w-4 text-primary-dark mr-2')
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('preorder', $offer) }}"
                   class="inline-block {{ $offer->isCustom() ? 'bg-gray-900' : 'bg-primary-dark' }} hover:bg-accent-dark text-white font-medium py-2 px-4 rounded transition duration-300 mt-auto self-end">
                    {{ $offer->isCustom() ? 'Demander un Devis' : 'Choisir' }}
                </a>
            </div>
        @endforeach
    </div>
</section>
