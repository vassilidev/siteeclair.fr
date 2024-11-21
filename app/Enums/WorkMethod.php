<?php

namespace App\Enums;

enum WorkMethod: string
{
    case INITIATE = 'initiate';
    case CONSULT = 'consult';
    case CREATE = 'create';
    case LAUNCH = 'launch';
    case SUPPORT = 'support';

    public function title(): string
    {
        return match ($this) {
            self::INITIATE => '1. Lancez Votre Projet',
            self::CONSULT => '2. Consultation Personnalisée',
            self::CREATE => '3. Création & Développement',
            self::LAUNCH => '4. Mise en Ligne Express',
            self::SUPPORT => '5. Suivi & Optimisation',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::INITIATE => 'Confirmez votre commande et réservez un créneau pour démarrer votre projet sans attendre.',
            self::CONSULT => 'Lors de notre entretien, nous définissons ensemble vos besoins et vos objectifs spécifiques.',
            self::CREATE => 'Nous concevons un design unique et développons votre site après votre validation.',
            self::LAUNCH => 'Nous mettons en ligne votre site avec domaine et hébergement inclus, prêt à impressionner vos clients.',
            self::SUPPORT => 'Bénéficiez de modifications illimitées et d’un support dédié pour faire évoluer votre site en continu.',
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::INITIATE => 'fas-rocket',
            self::CONSULT => 'fas-comments',
            self::CREATE => 'fas-laptop-code',
            self::LAUNCH => 'fas-cloud-upload-alt',
            self::SUPPORT => 'fas-life-ring',
        };
    }
}
