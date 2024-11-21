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
            self::FORMULE_ECLAIR => 'Idéale pour une présence en ligne rapide et efficace.',
            self::FORMULE_FOUDRE => 'Pour une présence en ligne complète et puissante.',
            self::FORMULE_TEMPETE => 'Solution sur mesure pour des projets ambitieux et évolutifs.',
        };
    }

    public function price(): string
    {
        return match ($this) {
            self::FORMULE_ECLAIR => '490 € HT',
            self::FORMULE_FOUDRE => '680 € HT',
            self::FORMULE_TEMPETE => 'Sur Devis',
        };
    }

    public function features(): array
    {
        return match ($this) {
            self::FORMULE_ECLAIR => [
                'Site One-Page (style landing, small business)',
                'Design Personnalisé via Template',
                'Formulaire de Contact',
                'SEO de Base',
                'Maintenance Annuelle Incluse',
                'Hébergement Inclus (1 an)',
                'Transfert de Nom de Domaine (offert)',
            ],
            self::FORMULE_FOUDRE => [
                'Tout ce qui est inclus dans la Formule Éclair',
                'Site Multi-Pages',
                'SEO Avancé avec Accompagnement',
                'Gestion Multilingue (jusqu\'à 3 langues)',
                'Support Premium 24/7',
                'Sauvegarde Automatique Mensuelle',
            ],
            self::FORMULE_TEMPETE => [
                'Tout ce qui est inclus dans la Formule Foudre',
                'Développement d\'Applications et Back Office Complet',
                'Intégration d\'APIs Spécifiques et Modules Intelligents',
                'Création d\'APIs Personnalisées',
                'Support et Maintenance Personnalisés',
                'Assistance Transfert et Formation',
            ],
        };
    }

    public function isPopular(): bool
    {
        return $this === self::FORMULE_ECLAIR;
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
