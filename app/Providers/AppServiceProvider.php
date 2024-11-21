<?php

namespace App\Providers;

use App\Enums\Faq;
use App\Enums\Offer;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        Cashier::calculateTaxes();

        SEOTools::addImages(asset('img/preview.png'));

        // Breadcrumb JSON-LD
        SEOTools::jsonLd()->addValues([
            '@context'        => 'https://schema.org',
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
                    'name'     => 'À propos',
                    'item'     => config('app.url') . '#about',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 3,
                    'name'     => 'Méthode',
                    'item'     => config('app.url') . '#method',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 4,
                    'name'     => 'Services',
                    'item'     => config('app.url') . '#features',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 5,
                    'name'     => 'Témoignages',
                    'item'     => config('app.url') . '#testimonials',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 6,
                    'name'     => 'FAQ',
                    'item'     => config('app.url') . '#faq',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 7,
                    'name'     => 'Offres',
                    'item'     => config('app.url') . '#pricing',
                ],
            ],
        ]);

        // FAQ JSON-LD
        $faqItems = Faq::cases();
        $faqSchema = [
            '@context'   => 'https://schema.org',
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
            }, $faqItems),
        ];

        SEOTools::jsonLd()->addValues($faqSchema);

        $offers = Offer::cases();
        $jsonLdProducts = array_map(function (Offer $offer) {
            return [
                '@type'       => 'Product',
                'name'        => $offer->getTitle(),
                'description' => $offer->description(),
                'offers'      => [
                    '@type'         => 'Offer',
                    'priceCurrency' => 'EUR',
                    'price'         => $offer->price() !== 'Sur Devis' ? filter_var($offer->price(), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) : null,
                    'availability'  => 'https://schema.org/InStock',
                    'url'           => config('app.url') . '/preorder/' . $offer->value,
                ],
                'brand'       => [
                    '@type' => 'Brand',
                    'name'  => 'Site Éclair',
                ],
            ];
        }, $offers);

        SEOTools::jsonLd()->addValues([
            '@context'        => 'https://schema.org',
            '@type'           => 'ItemList',
            'itemListElement' => $jsonLdProducts,
        ]);
    }
}

