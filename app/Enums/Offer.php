<?php

namespace App\Enums;

enum Offer: string
{
    case FORMULE_ECLAIR = 'eclair';
    case FORMULE_FOUDRE = 'foudre';
    case FORMULE_TEMPETE = 'tempete';

    public function getTitle(): string
    {
        return match ($this) {
            self::FORMULE_ECLAIR => 'Formule Éclair',
            self::FORMULE_FOUDRE => 'Formule Foudre',
            self::FORMULE_TEMPETE => 'Formule Tempête',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::FORMULE_ECLAIR => 'Idéale pour une mise en ligne rapide et efficace.',
            self::FORMULE_FOUDRE => 'Pour une présence en ligne complète et robuste.',
            self::FORMULE_TEMPETE => 'Solution sur mesure pour des projets ambitieux et complexes.',
        };
    }

    public function price(): string
    {
        return match ($this) {
            self::FORMULE_ECLAIR => '490 € HT',
            self::FORMULE_FOUDRE => '790 € HT',
            self::FORMULE_TEMPETE => 'Sur Devis',
        };
    }

    public function features(): array
    {
        return match ($this) {
            self::FORMULE_ECLAIR => [
                'Site One-Page Moderne et Responsive',
                'Design Personnalisé',
                'Formulaire de Contact',
                'Optimisation SEO de Base',
                'Hébergement Inclus (1 an)',
                'Nom de Domaine Offert (1 an)',
                'Mises à Jour et Maintenance (1 an)',
            ],
            self::FORMULE_FOUDRE => [
                'Tout ce qui est inclus dans la Formule Éclair',
                'Site Multi-Pages Professionnel',
                'Optimisation SEO Avancée',
                'Site Multilingue',
                'Intégration Réseaux Sociaux',
                'Support Prioritaire 24/7',
            ],
            self::FORMULE_TEMPETE => [
                'Tout ce qui est inclus dans la Formule Foudre',
                'Développement sur Mesure',
                'Fonctionnalités Avancées (e-commerce, CRM, etc.)',
                'Intégration d\'APIs Tierces',
                'Back Office Complet et Personnalisé',
                'Formation Personnalisée à l\'Utilisation',
                'Support et Maintenance Personnalisés',
            ],
        };
    }

    public function isPopular(): bool
    {
        return $this === self::FORMULE_FOUDRE;
    }

    public function isCustom(): bool
    {
        return $this === self::FORMULE_TEMPETE;
    }

    public function getStripePriceId(): string
    {
        return match ($this) {
            self::FORMULE_ECLAIR => config('offers.formule_eclair_price_id'),
            self::FORMULE_FOUDRE => config('offers.formule_foudre_price_id'),
            self::FORMULE_TEMPETE => '',
        };
    }
}
