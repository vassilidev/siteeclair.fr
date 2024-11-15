<?php
/**
 * Configuration SEOTools pour Site Éclair
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta'      => [
        'defaults'              => [
            'title'       => 'Votre site web sur mesure, rapide comme l’éclair', // Titre par défaut
            'titleBefore' => false, // Afficher le titre avant ou après les titres des pages
            'description' => 'Des sites performants, évolutifs et abordables, sans compromis sur la qualité.', // Description par défaut
            'separator'   => ' | ',
            'keywords'    => ['création site web', 'site performant', 'site abordable', 'Site Éclair'],
            'canonical'   => 'current', // Utiliser l’URL courante pour les pages
            'robots'      => 'index,follow', // Indexation autorisée
        ],
        'webmaster_tags'        => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],
        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => 'Site Éclair - Votre site web rapide comme l’éclair', // Titre OG par défaut
            'description' => 'Des sites performants, évolutifs et abordables, sans compromis sur la qualité.', // Description OG
            'url'         => null, // Utiliser l’URL courante si non défini
            'type'        => 'website',
            'site_name'   => 'Site Éclair',
            'images'      => [
                asset('img/banner.png'), // Image par défaut pour les partages
            ],
        ],
    ],
    'twitter'   => [
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@site_eclair', // Compte Twitter du site
            'title'       => 'Site Éclair - Votre site web rapide comme l’éclair',
            'description' => 'Des sites performants, évolutifs et abordables, sans compromis sur la qualité.',
            'image'       => asset('img/banner.png'),
        ],
    ],
    'json-ld'   => [
        'defaults' => [
            'title'       => 'Site Éclair - Votre site web rapide comme l’éclair', // Titre pour le JSON-LD
            'description' => 'Des sites performants, évolutifs et abordables, sans compromis sur la qualité.',
            'url'         => null, // Utiliser l’URL courante
            'type'        => 'WebPage',
            'images'      => [
                asset('img/banner.png'),
            ],
        ],
    ],
];
