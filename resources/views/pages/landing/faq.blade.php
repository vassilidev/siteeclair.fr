<section id="faq" class="py-20 bg-section-background">
    <h2 class="text-center text-2xl md:text-3xl font-bold text-primary-dark mb-4">⚡ Foire Aux Questions</h2>
    <div class="container mx-auto px-4 max-w-2xl">
        @foreach (\App\Enums\Faq::cases() as $faq)
            <div class="border-b border-gray-300 py-4">
                <button
                        class="w-full text-left font-semibold text-lg flex justify-between items-center faq-question focus:outline-none focus:ring-2 focus:ring-primary-dark"
                        aria-expanded="false"
                        aria-controls="faq-{{ $loop->index }}"
                >
                    {{ $faq->getQuestion() }}
                    @svg('fas-chevron-down', 'h-4 w-4 transform transition-transform')
                </button>
                <div
                        id="faq-{{ $loop->index }}"
                        class="mt-2 text-gray-700 faq-answer hidden transition-opacity duration-300 ease-in-out"
                >
                    {{ $faq->getAnswer() }}
                </div>
            </div>
        @endforeach
    </div>
</section>