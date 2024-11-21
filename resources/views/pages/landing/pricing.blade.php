<section id="pricing" class="py-20 bg-background">
    <h2 class="text-center text-2xl md:text-3xl font-bold text-primary mb-4">⚡ Nos Offres</h2>
    <p class="text-center mb-8">Des solutions adaptées à chaque besoin et budget.</p>
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach (\App\Enums\Offer::cases() as $offer)
            <div class="bg-white rounded-lg p-6 text-left shadow-lg relative flex flex-col @if($offer->isPopular()) border border-accent @endif">
                @if ($offer->isPopular())
                    <div class="absolute top-0 right-0 bg-accent text-white px-3 py-1 rounded-bl-lg">
                        Le plus populaire
                    </div>
                @elseif ($offer->isCustom())
                    <div class="absolute top-0 right-0 bg-black text-white px-3 py-1 rounded-bl-lg">
                        Personnalisé
                    </div>
                @endif
                <h3 class="text-xl font-semibold mb-2 text-primary">{{ $offer->getTitle() }}</h3>
                <p class="mb-4">{{ $offer->description() }}</p>
                <div class="text-3xl font-bold {{ $offer->isCustom() ? 'text-black' : 'text-primary' }} mb-4">{{ $offer->price() }}</div>
                <ul class="mb-6 space-y-2 flex-grow">
                    @foreach ($offer->features() as $feature)
                        <li><i class="fas fa-check text-primary mr-2"></i>{{ $feature }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('preorder', $offer) }}"
                   class="inline-block {{ $offer->isCustom() ? 'bg-black' : 'bg-primary' }} hover:bg-accent text-white font-medium py-2 px-4 rounded transition duration-300 mt-auto self-end">
                    {{ $offer->isCustom() ? 'Demander un Devis' : 'Choisir' }}
                </a>
            </div>
        @endforeach
    </div>
</section>