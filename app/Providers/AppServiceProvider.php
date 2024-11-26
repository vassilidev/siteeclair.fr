<?php

// app/Providers/AppServiceProvider.php

namespace App\Providers;

use App\Enums\Faq;
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
                'https://www.linkedin.com/showcase/siteeclair/',
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

        // Combinaison de toutes les données JSON-LD
        $jsonLdData['@graph'] = array_merge(
            [$organization],
            [$faqPage],
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
