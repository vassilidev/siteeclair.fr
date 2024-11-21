<?php

namespace App\Enums;

enum WorkMethod: string
{
    case PAYMENT = 'payment';
    case VALIDATION = 'validation';
    case DESIGN = 'design';
    case DEPLOYMENT = 'deployment';
    case FEEDBACK = 'feedback';

    public function title(): string
    {
        return match ($this) {
            self::PAYMENT => 'Paiement & Rendez-vous',
            self::VALIDATION => 'Validation du Besoin & Objectifs',
            self::DESIGN => 'Conception & Développement',
            self::DEPLOYMENT => 'Mise en Ligne',
            self::FEEDBACK => 'Retours Illimités',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::PAYMENT => 'Effectuez votre paiement et choisissez immédiatement un créneau pour démarrer le projet.',
            self::VALIDATION => 'Lors du rendez-vous, nous analysons vos besoins et validons ensemble les objectifs à atteindre.',
            self::DESIGN => 'Nous concevons une maquette sur mesure, puis procédons au développement et à l’intégration une fois validée.',
            self::DEPLOYMENT => 'Après validation finale, nous livrons votre site et prenons en charge la mise en ligne, y compris le domaine, l’hébergement, les accès au code, et une notice explicative.',
            self::FEEDBACK => 'Effectuez vos retours via le back-office ou notre support premium 24/7, sans limite de temps.',
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::PAYMENT => 'fas-credit-card',
            self::VALIDATION => 'fas-calendar-check',
            self::DESIGN => 'fas-pencil-ruler',
            self::DEPLOYMENT => 'fas-check',
            self::FEEDBACK => 'fas-sync-alt',
        };
    }
}
