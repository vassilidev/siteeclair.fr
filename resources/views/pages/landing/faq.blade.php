<section id="faq" class="py-20 bg-gradient-to-b from-gray-900 to-black">
    <div class="container mx-auto px-6 max-w-4xl">
        <!-- Title -->
        <h2 class="text-center text-3xl md:text-4xl font-extrabold text-white mb-8">
            Foire aux Questions
        </h2>
        <!-- FAQ Items -->
        <div class="divide-y divide-gray-700">
            @foreach (\App\Enums\Faq::cases() as $faq)
                <div class="py-6">
                    <button
                            class="w-full text-left font-semibold text-lg text-gray-300 flex justify-between items-center faq-question focus:outline-none focus:ring-2 focus:ring-primary"
                            aria-expanded="false"
                            aria-controls="faq-{{ $loop->index }}"
                    >
                        {{ $faq->getQuestion() }}
                        @svg('fas-chevron-down', 'h-4 w-4 transform transition-transform duration-300')
                    </button>
                    <div
                            id="faq-{{ $loop->index }}"
                            class="mt-4 text-gray-400 faq-answer hidden transition-all duration-300 ease-in-out"
                    >
                        {!! nl2br(e($faq->getAnswer())) !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
