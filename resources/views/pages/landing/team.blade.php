<section id="team" class="py-20 bg-section-background">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-2xl md:text-3xl font-bold text-primary mb-4">⚡ Découvrez l'équipe</h2>
        <p class="text-center mb-8">
            <strong>TFA - The Forge Agency</strong>, spécialiste de la transformation digitale et des solutions
            complexes, réalise les sites de Site Éclair avec passion et expertise.
        </p>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach (\App\Enums\Team::cases() as $member)
                <div class="bg-white rounded-lg p-6 text-center shadow-lg w-80 transform transition duration-300 hover:scale-105">
                    <img src="{{ $member->image() }}" alt="{{ $member->altText() }}" loading="lazy"
                         class="w-32 h-32 mx-auto rounded-full mb-4 object-cover border-4 border-primary">
                    <h3 class="text-xl font-semibold mb-2">{{ $member->name() }}</h3>
                    <p>{{ $member->description() }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
