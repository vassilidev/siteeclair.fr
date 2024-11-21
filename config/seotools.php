<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults' => [
            'title'        => "Site Éclair - Votre site web rapide et performant", // Titre par défaut
            'titleBefore'  => false, // Mettre defaults.title avant le titre de la page, ex: "Titre - Dashboard"
            'description'  => "Des sites web performants, évolutifs et abordables, adaptés à vos besoins.", // Description par défaut
            'separator'    => ' - ', // Séparateur entre les titres
            'keywords'     => ['création site web', 'sites rapides', 'sites performants', 'développement web', 'site sur mesure', 'solution digitale', 'SEO', 'sécurité web'],
            'canonical'    => null, // Utilise automatiquement l'URL actuelle si défini sur 'current' ou 'full'
            'robots'       => 'all', // Configure l'indexation des moteurs de recherche
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Site Éclair - Votre site web rapide et performant', // Titre OpenGraph
            'description' => "Des sites web performants, évolutifs et abordables, adaptés à vos besoins.", // Description OpenGraph
            'url'         => null, // Utilise automatiquement l'URL actuelle
            'type'        => 'website', // Type de contenu : "website" pour un site web
            'site_name'   => 'Site Éclair', // Nom du site
            'images'      => [], // Aucune image par défaut
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image', // Type de carte Twitter
            'site'        => '@siteeclair', // Compte Twitter (remplacez par votre handle)
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Site Éclair - Votre site web rapide et performant', // Titre JSON-LD
            'description' => "Des sites web performants, évolutifs et abordables, adaptés à vos besoins.", // Description JSON-LD
            'url'         => null, // Utilise automatiquement l'URL actuelle
            'type'        => 'WebPage', // Type de page pour JSON-LD
            'images'      => [], // Image par défaut
        ],
    ],
];
