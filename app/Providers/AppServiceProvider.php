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
                'https://www.linkedin.com/company/tfa-the-forge-agency',
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
                    'item'     => config('app.url') . '#about',
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
                    'name'           => $this->removeEmoji($faq->getQuestion()),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => $this->removeEmoji($faq->getAnswer()),
                    ],
                ];
            }, Faq::cases()),
        ];

        $offersData = array_map(function (Offer $offer) {
            $price = ($offer->price() !== 'Sur Devis')
                ? filter_var($offer->price(), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)
                : '0.00';

            // Délais de livraison spécifiques à chaque offre
            $deliveryTime = match ($offer) {
                Offer::FORMULE_ECLAIR => [
                    '@type'        => 'ShippingDeliveryTime',
                    'handlingTime' => [
                        '@type'    => 'QuantitativeValue',
                        'minValue' => 0,
                        'maxValue' => 1,
                        'unitCode' => 'd', // Temps de traitement
                    ],
                    'transitTime'  => [
                        '@type'    => 'QuantitativeValue',
                        'minValue' => 5,
                        'maxValue' => 5,
                        'unitCode' => 'd', // Temps de livraison
                    ],
                ],
                Offer::FORMULE_FOUDRE => [
                    '@type'        => 'ShippingDeliveryTime',
                    'handlingTime' => [
                        '@type'    => 'QuantitativeValue',
                        'minValue' => 0,
                        'maxValue' => 1,
                        'unitCode' => 'd', // Temps de traitement
                    ],
                    'transitTime'  => [
                        '@type'    => 'QuantitativeValue',
                        'minValue' => 7,
                        'maxValue' => 15,
                        'unitCode' => 'd', // Temps de livraison
                    ],
                ],
                Offer::FORMULE_TEMPETE => [
                    '@type'        => 'ShippingDeliveryTime',
                    'handlingTime' => [
                        '@type'    => 'QuantitativeValue',
                        'minValue' => 0,
                        'maxValue' => 1,
                        'unitCode' => 'd', // Temps de traitement
                    ],
                    'transitTime'  => [
                        '@type'    => 'QuantitativeValue',
                        'minValue' => 15,
                        'maxValue' => 30,
                        'unitCode' => 'd', // Temps de livraison
                    ],
                ],
            };

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
                    'reviewCount' => '96',
                ],
                'offers'          => [
                    '@type'                   => 'Offer',
                    'priceCurrency'           => 'EUR',
                    'price'                   => $price,
                    'availability'            => 'https://schema.org/InStock',
                    'url'                     => config('app.url') . '/preorder/' . $offer->value,
                    'priceValidUntil'         => now()->addYear()->format('Y-m-d'),
                    'hasMerchantReturnPolicy' => [
                        '@type'                => 'MerchantReturnPolicy',
                        'applicableCountry'    => 'FR', // Pays d'application de la politique de retour
                        'returnPolicyCategory' => 'https://schema.org/ExchangeOnly', // Politique valide pour les produits numériques
                    ],
                    'shippingDetails'         => [
                        '@type'               => 'OfferShippingDetails',
                        'shippingDestination' => [
                            '@type'          => 'DefinedRegion',
                            'addressCountry' => 'FR', // Pays où le produit est disponible
                        ],
                        'deliveryMethod'      => 'https://schema.org/DownloadAction', // Livraison numérique
                        'shippingRate'        => [
                            '@type'    => 'MonetaryAmount',
                            'value'    => '0.00', // Gratuit
                            'currency' => 'EUR',
                        ],
                        'deliveryTime'        => $deliveryTime, // Délais spécifiques à l'offre
                    ],
                ],
            ];

            return $productData;
        }, Offer::cases());

        // Combinaison de toutes les données JSON-LD
        $jsonLdData['@graph'] = array_merge(
            [$organization],
            [$website],
            [$breadcrumbList],
            [$faqPage],
            $offersData,
        );

        SEOTools::jsonLd()->addValues($jsonLdData);
    }

    private function removeEmoji(string $string): string
    {
        $string = str_replace("?", "{%}", $string);
        $string = mb_convert_encoding($string, "ISO-8859-1", "UTF-8");
        $string = mb_convert_encoding($string, "UTF-8", "ISO-8859-1");
        $string = preg_replace('/(\s?\?\s?)/', ' ', $string);
        $string = str_replace("{%}", "?", $string);

        return trim($string);
    }
}
