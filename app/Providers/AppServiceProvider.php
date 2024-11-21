<?php

// app/Providers/AppServiceProvider.php

namespace App\Providers;

use App\Enums\Faq;
use App\Enums\Offer;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        Cashier::calculateTaxes();

        // Définition de l'image par défaut pour OpenGraph et Twitter
        SEOTools::addImages([asset('img/preview.png')]);

        // Construction du JSON-LD
        $jsonLdData = [
            '@context' => 'https://schema.org',
            '@graph'   => [],
        ];

        // Organisation
        $organization = [
            '@type'        => 'Organization',
            'name'         => 'Site Éclair',
            'url'          => config('app.url'),
            'logo'         => asset('img/logo.svg'),
            'sameAs'       => [
                'https://www.linkedin.com/company/theforgeagency',
                'https://www.instagram.com/site_eclair/',
            ],
            'contactPoint' => [
                '@type'             => 'ContactPoint',
                'telephone'         => '+33760487334', // Remplacez par votre numéro de téléphone
                'contactType'       => 'customer service',
                'areaServed'        => 'FR',
                'availableLanguage' => ['French'],
                'email'             => 'hello@siteeclair.fr',
            ],
            'address'      => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => '1 rue de Stockholm', // Remplacez par votre adresse
                'addressLocality' => 'Paris', // Remplacez par votre ville
                'postalCode'      => '75008', // Remplacez par votre code postal
                'addressCountry'  => 'FR',
            ],
        ];

        // Site web
        $website = [
            '@type'           => 'WebSite',
            'name'            => 'Site Éclair',
            'url'             => config('app.url'),
            'potentialAction' => [
                '@type'       => 'SearchAction',
                'target'      => config('app.url') . '/search?q={search_term_string}',
                'query-input' => 'required name=search_term_string',
            ],
        ];

        // Fil d'Ariane
        $breadcrumbList = [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type'    => 'ListItem',
                    'position' => 1,
                    'name'     => 'Accueil',
                    'item'     => config('app.url'),
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => 'Pourquoi Nous',
                    'item'     => config('app.url') . '#features',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 3,
                    'name'     => 'Processus',
                    'item'     => config('app.url') . '#method',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 4,
                    'name'     => 'Offres',
                    'item'     => config('app.url') . '#pricing',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 5,
                    'name'     => 'Équipe',
                    'item'     => config('app.url') . '#team',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 6,
                    'name'     => 'FAQ',
                    'item'     => config('app.url') . '#faq',
                ],
            ],
        ];

        // Page FAQ
        $faqPage = [
            '@type'      => 'FAQPage',
            'mainEntity' => array_map(function (Faq $faq) {
                return [
                    '@type'          => 'Question',
                    'name'           => $faq->getQuestion(),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => $faq->getAnswer(),
                    ],
                ];
            }, Faq::cases()),
        ];

        // Offres (Produits)
        $offersData = array_map(function (Offer $offer) {
            $productData = [
                '@type'           => 'Product',
                'name'            => $offer->getTitle(),
                'description'     => $offer->description(),
                'image'           => asset("img/{$offer->value}.webp"),
                'brand'           => [
                    '@type' => 'Brand',
                    'name'  => 'Site Éclair',
                ],
                'aggregateRating' => [
                    '@type'       => 'AggregateRating',
                    'ratingValue' => '4.9',
                    'reviewCount' => '124',
                ],
            ];

            if ($offer->price() !== 'Sur Devis') {
                $price = filter_var($offer->price(), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

                $productData['offers'] = [
                    '@type'           => 'Offer',
                    'priceCurrency'   => 'EUR',
                    'price'           => $price,
                    'availability'    => 'https://schema.org/InStock',
                    'url'             => config('app.url') . '/preorder/' . $offer->value,
                    'priceValidUntil' => now()->addYear()->format('Y-m-d'),
                ];
            } else {
                $productData['offers'] = [
                    '@type'         => 'Offer',
                    'priceCurrency' => 'EUR',
                    'price'         => '0.00',
                    'availability'  => 'https://schema.org/InStock',
                    'url'           => config('app.url') . '/preorder/' . $offer->value,
                ];
            }

            return $productData;
        }, Offer::cases());

        // Témoignages (Avis)
        $testimonials = [
            [
                'name'    => 'Diag Power',
                'content' => 'Une équipe très professionnelle qui sait de quoi elle parle. Qualité au rendez-vous, merci beaucoup pour votre travail. Vassili a su créer une plateforme et un site parfaitement adaptés à nos besoins.',
            ],
            // Ajoutez d'autres témoignages ici
        ];

        // Témoignages (Avis)
        $testimonials = [
            [
                'name'    => 'Diag Power',
                'content' => 'Une équipe très professionnelle qui sait de quoi elle parle. Qualité au rendez-vous, merci beaucoup pour votre travail. Vassili a su créer une plateforme et un site parfaitement adaptés à nos besoins.',
                'date'    => '2023-01-15',
            ],
            [
                'name'    => 'Stephen',
                'content' => 'Intervention rapide et irréprochable. Les solutions proposées dépassent nos attentes. Site Éclair a amélioré notre organisation et notre productivité.',
                'date'    => '2023-02-10',
            ],
            [
                'name'    => 'Michael',
                'content' => 'Excellente collaboration avec Vassili. Compréhension parfaite des enjeux et objectifs. Grâce à TFA, nous avons développé une solution sur mesure et évolutive.',
                'date'    => '2023-03-05',
            ],
            [
                'name'    => 'Morine Mallet',
                'content' => 'Rapide et efficace ! Site Éclair est toujours présent, même pour des missions complexes. Je recommande pour leur professionnalisme et leur engagement.',
                'date'    => '2023-04-20',
            ],
            [
                'name'    => 'Tanguy',
                'content' => 'Je recommande vivement le travail de Vassili pour le développement d\'API. TFA a créé une solution stable et adaptée à nos besoins. Professionnalisme et rapidité au rendez-vous !',
                'date'    => '2023-05-18',
            ],
            [
                'name'    => 'Yannick Le Vaillant',
                'content' => 'Excellent prestataire : rapide, efficace et investi. Grâce à TFA, nous avons intégré des solutions digitales innovantes en un temps record. Je recommande vivement pour son expertise et son engagement.',
                'date'    => '2023-06-12',
            ],
        ];

        $reviewData = array_map(function ($testimonial) {
            return [
                '@type'         => 'Review',
                'reviewRating'  => [
                    '@type'       => 'Rating',
                    'ratingValue' => '5',
                    'bestRating'  => '5',
                ],
                'author'        => [
                    '@type' => 'Person',
                    'name'  => $testimonial['name'],
                ],
                'reviewBody'    => $testimonial['content'],
                'datePublished' => $testimonial['date'],
            ];
        }, $testimonials);

        // Combinaison de toutes les données JSON-LD
        $jsonLdData['@graph'] = array_merge(
            [$organization],
            [$website],
            [$breadcrumbList],
            [$faqPage],
            $offersData,
            $reviewData
        );

        // Ajout du JSON-LD à SEOTools
        SEOTools::jsonLd()->addValues($jsonLdData);
    }
}
