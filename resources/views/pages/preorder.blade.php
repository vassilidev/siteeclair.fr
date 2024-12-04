@extends('layouts.default')

@section('content')
    <section class="py-12 bg-gray-900 text-white pt-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-8 text-primary">
                Confirmez Votre Commande
            </h2>
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 border border-accent max-w-5xl mx-auto flex flex-col md:flex-row gap-6">
                <div class="w-full md:w-1/3 flex justify-center items-center">
                    <div class="relative w-64 h-64 rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('img/collab.webp') }}" loading="lazy" alt="{{ $offer->getTitle() }}"
                             class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="w-full md:w-2/3 flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold mb-2 text-primary">{{ $offer->getTitle() }}</h3>
                        <p class="text-gray-300 mb-4">{{ $offer->description() }}</p>
                        <p class="text-4xl font-bold text-accent mb-4">{{ $offer->price() }}</p>
                        <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2">
                            @foreach($offer->features() as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gradient-to-b from-gray-900 to-black">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-8 text-primary">
                Finalisez Votre Précommande
            </h2>
            <form action="{{ route('preorder.store', $offer) }}" method="POST"
                  class="max-w-4xl mx-auto bg-gray-800 p-8 rounded-lg shadow-lg border border-accent">
                @csrf
                <!-- Informations Personnelles -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block text-gray-300 font-semibold mb-2">Votre Nom Complet <span
                                    class="text-red-500">*</span></label>
                        <input type="text" name="name" id="name" placeholder="Prénom Nom"
                               value="{{ old('name') }}"
                               class="w-full border border-gray-700 rounded-lg p-3 focus:ring-2 focus:ring-primary focus:outline-none @error('name') border-red-500 @enderror"
                               required>
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-gray-300 font-semibold mb-2">Adresse Email <span
                                    class="text-red-500">*</span></label>
                        <input type="email" name="email" id="email" placeholder="prenom.nom@example.com"
                               value="{{ old('email') }}"
                               class="w-full border border-gray-700 rounded-lg p-3 focus:ring-2 focus:ring-primary focus:outline-none @error('email') border-red-500 @enderror"
                               required>
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-300 font-semibold mb-2">Numéro de Téléphone <span
                                    class="text-red-500">*</span></label>
                        <input type="tel" name="phone" id="phone" placeholder="Votre numéro de téléphone"
                               value="{{ old('phone') }}"
                               class="w-full border border-gray-700 rounded-lg p-3 focus:ring-2 focus:ring-primary focus:outline-none @error('phone') border-red-500 @enderror"
                               required>
                        @error('phone')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="company" class="block text-gray-300 font-semibold mb-2">Nom de Votre
                            Entreprise</label>
                        <input type="text" name="company" id="company" placeholder="Votre entreprise (optionnel)"
                               value="{{ old('company') }}"
                               class="w-full border border-gray-700 rounded-lg p-3 focus:ring-2 focus:ring-primary focus:outline-none @error('company') border-red-500 @enderror">
                        @error('company')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Champs Professionnels (SIREN et TVA) -->
                <div id="pro-fields" class="{{ old('company') ? '' : 'hidden' }} mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="siren" class="block text-gray-300 font-semibold mb-2">Numéro SIREN</label>
                            <input type="text" name="siren" id="siren" placeholder="Votre numéro SIREN"
                                   value="{{ old('siren') }}"
                                   class="w-full border border-gray-700 rounded-lg p-3 focus:ring-2 focus:ring-primary focus:outline-none @error('siren') border-red-500 @enderror">
                            @error('siren')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="vat_number" class="block text-gray-300 font-semibold mb-2">Numéro de TVA
                                Intracommunautaire</label>
                            <input type="text" name="vat_number" id="vat_number" placeholder="Votre numéro de TVA"
                                   value="{{ old('vat_number') }}"
                                   class="w-full border border-gray-700 rounded-lg p-3 focus:ring-2 focus:ring-primary focus:outline-none @error('vat_number') border-red-500 @enderror">
                            @error('vat_number')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Questions Spécifiques -->
                @php
                    $fields = [
                        ['name' => 'goals', 'label' => 'Quels sont vos objectifs pour ce site web ?', 'placeholder' => 'Exemple : Augmenter la visibilité, générer des leads, vendre en ligne...'],
                        ['name' => 'target_audience', 'label' => 'Qui est votre audience cible ?', 'placeholder' => 'Exemple : Professionnels, particuliers, entreprises locales...'],
                        ['name' => 'preferred_style', 'label' => 'Quel style souhaitez-vous pour votre site ?', 'placeholder' => 'Exemple : Moderne, épuré, dynamique...'],
                        ['name' => 'reference_sites', 'label' => 'Avez-vous des sites de référence ?', 'placeholder' => 'Exemple : www.exemple.com, www.autreexemple.com...'],
                        ['name' => 'special_requirements', 'label' => 'Y a-t-il des besoins spécifiques à prendre en compte ?', 'placeholder' => 'Exemple : Charte graphique, fonctionnalités particulières...']
                    ];
                @endphp
                @foreach ($fields as $field)
                    <div class="mb-6">
                        <label for="{{ $field['name'] }}"
                               class="block text-gray-300 font-semibold mb-2">{{ $field['label'] }}</label>
                        <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" rows="4"
                                  placeholder="{{ $field['placeholder'] }}"
                                  class="w-full border border-gray-700 rounded-lg p-3 focus:ring-2 focus:ring-primary focus:outline-none @error($field['name']) border-red-500 @enderror">{{ old($field['name']) }}</textarea>
                        @error($field['name'])
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                @endforeach

                <!-- Bouton Soumettre -->
                <div class="text-center">
                    <button type="submit"
                            class="bg-primary hover:bg-accent text-black font-bold py-3 px-6 rounded-full transition duration-300 flex items-center justify-center gap-2">
                        <span>Procéder au Paiement</span>
                        <span class="bg-black text-primary font-semibold py-1 px-3 rounded-lg shadow">{{ $offer->price() }}</span>
                    </button>
                    <p class="mt-4 text-gray-400 text-sm">
                        En continuant, vous acceptez nos <a href="{{ route('cgs') }}"
                                                            class="text-primary hover:underline">Conditions Générales de
                            Services</a>.
                    </p>
                </div>
            </form>
        </div>
    </section>

    <section id="contact-section" class="py-20 bg-gradient-to-b from-gray-900 to-black border-t-4 border-primary">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 text-center md:text-left mb-6 md:mb-0">
                <h2 class="text-3xl font-bold text-primary mb-4">Des Questions Supplémentaires 🤔</h2>
                <p class="text-lg text-gray-300 mb-6">
                    Contactez-nous et discutons ensemble de votre projet ! 💬
                </p>
                <a href="{{ route('contact') }}"
                   class="bg-primary text-black py-3 px-6 rounded-full transition duration-300 hover:bg-accent">
                    Planifier un Appel
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="relative w-full max-w-sm rounded-lg overflow-hidden shadow-lg border border-gray-700 bg-gray-800">
                    <img src="{{ asset('img/meet.webp') }}" alt="Illustration de réunion avec notre équipe"
                         class="w-full h-auto" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50 pointer-events-none"></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const companyInput = document.getElementById('company');
            const proFields = document.getElementById('pro-fields');

            companyInput.addEventListener('input', () => {
                if (companyInput.value.trim()) {
                    proFields.classList.remove('hidden');
                } else {
                    proFields.classList.add('hidden');
                }
            });
        });
    </script>
@endsection