<?php

namespace App\Enums;

enum Feature: string
{
    case LIGHTNING_SPEED = 'lightning_speed';
    case ADVANCED_SECURITY = 'advanced_security';
    case USER_FRIENDLY = 'user_friendly';
    case UNLIMITED_GROWTH = 'unlimited_growth';
    case GLOBAL_REACH = 'global_reach';
    case UNLIMITED_REVISIONS = 'unlimited_revisions';
    case ALL_INCLUSIVE = 'all_inclusive';
    case CLEAR_PRICING = 'clear_pricing';

    public function icon(): string
    {
        return match ($this) {
            self::LIGHTNING_SPEED => 'fas-bolt',
            self::ADVANCED_SECURITY => 'fas-shield-alt',
            self::USER_FRIENDLY => 'fas-smile',
            self::UNLIMITED_GROWTH => 'fas-chart-line',
            self::GLOBAL_REACH => 'fas-globe',
            self::UNLIMITED_REVISIONS => 'fas-sync-alt',
            self::ALL_INCLUSIVE => 'fas-hand-holding-heart',
            self::CLEAR_PRICING => 'fas-tags',
        };
    }

    public function title(): string
    {
        return match ($this) {
            self::LIGHTNING_SPEED => 'Vitesse Fulgurante',
            self::ADVANCED_SECURITY => 'Sécurité Avancée',
            self::USER_FRIENDLY => 'Ultra Intuitif',
            self::UNLIMITED_GROWTH => 'Croissance Illimitée',
            self::GLOBAL_REACH => 'Portée Internationale',
            self::UNLIMITED_REVISIONS => 'Révisions Illimitées',
            self::ALL_INCLUSIVE => 'Tout Compris',
            self::CLEAR_PRICING => 'Prix Clairs',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::LIGHTNING_SPEED => 'Offrez une expérience utilisateur exceptionnelle avec un site à la vitesse de l’éclair.',
            self::ADVANCED_SECURITY => 'Protégez vos données avec les dernières technologies de sécurité.',
            self::USER_FRIENDLY => 'Prenez le contrôle facilement grâce à une interface conviviale et intuitive.',
            self::UNLIMITED_GROWTH => 'Évoluez sans limites avec un site qui grandit avec votre entreprise.',
            self::GLOBAL_REACH => 'Touchez une audience mondiale avec un site multilingue.',
            self::UNLIMITED_REVISIONS => 'Ajustez votre site autant que nécessaire, sans frais supplémentaires.',
            self::ALL_INCLUSIVE => 'Domaine, hébergement, support : tout est inclus pour votre tranquillité d’esprit.',
            self::CLEAR_PRICING => 'Bénéficiez de tarifs transparents sans coûts cachés.',
        };
    }
}
