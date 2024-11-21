<?php

// config/seotools.php

return [
    'meta'      => [
        'defaults' => [
            'title'       => "Site Éclair | Votre Site Web Professionnel en 5 Jours",
            'titleBefore' => false,
            'description' => "Créez un site web rapide, performant et personnalisé en seulement 5 jours avec Site Éclair. Hébergement, nom de domaine et support inclus. Solutions idéales pour TPE et PME.",
            'separator'   => ' - ',
            'keywords'    => ['création site web rapide', 'site web performant', 'site web professionnel', 'hébergement inclus', 'nom de domaine inclus', 'site pour TPE', 'site pour PME', 'création site web 5 jours', 'solution clé en main', 'SEO pour petites entreprises', 'support inclus'],
            'canonical'   => null, // L'URL canonique sera automatiquement définie
            'robots'      => 'index, follow',
        ],
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => 'Site Éclair | Votre Site Web Professionnel en 5 Jours',
            'description' => "Créez un site web rapide, performant et personnalisé en seulement 5 jours avec Site Éclair. Hébergement, nom de domaine et support inclus. Solutions idéales pour TPE et PME.",
            'url'         => null, // L'URL sera automatiquement définie
            'type'        => 'website',
            'site_name'   => 'Site Éclair',
            'images'      => [],
        ],
    ],
    'twitter'   => [
        'defaults' => [
//            'card' => 'summary_large_image',
//            'site' => '@SiteEclair', // Remplacez par le nom d'utilisateur Twitter réel
        ],
    ],
    'json-ld'   => [
        'defaults' => [
            'title'       => 'Site Éclair | Votre Site Web Professionnel en 5 Jours',
            'description' => "Créez un site web rapide, performant et personnalisé en seulement 5 jours avec Site Éclair. Hébergement, nom de domaine et support inclus. Solutions idéales pour TPE et PME.",
            'url'         => null, // L'URL sera automatiquement définie
            'type'        => 'WebSite',
            'images'      => [],
        ],
    ],
];