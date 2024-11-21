<?php

namespace App\Enums;

enum Feature: string
{
    case PERFORMANCE = 'performance';
    case SECURITY = 'security';
    case INTUITIVE = 'intuitive';
    case SCALABILITY = 'scalability';
    case MULTILINGUAL = 'multilingual';
    case MODIFICATIONS = 'modifications';
    case DOMAIN_HOSTING = 'domain_hosting';
    case PRICING = 'pricing';

    public function icon(): string
    {
        return match ($this) {
            self::PERFORMANCE => 'fas-tachometer-alt',
            self::SECURITY => 'fas-shield-alt',
            self::INTUITIVE => 'fas-user-edit',
            self::SCALABILITY => 'fas-cogs',
            self::MULTILINGUAL => 'fas-language',
            self::MODIFICATIONS => 'fas-infinity',
            self::DOMAIN_HOSTING => 'fas-globe',
            self::PRICING => 'fas-tags',
        };
    }

    public function title(): string
    {
        return match ($this) {
            self::PERFORMANCE => 'Performance Ultra-Rapide',
            self::SECURITY => 'Sécurité Maximale',
            self::INTUITIVE => 'Gestion Intuitive',
            self::SCALABILITY => 'Évolutivité',
            self::MULTILINGUAL => 'Multilingue',
            self::MODIFICATIONS => 'Modifications Incluses',
            self::DOMAIN_HOSTING => 'Nom de Domaine et Hébergement',
            self::PRICING => 'Tarification Transparente',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::PERFORMANCE => 'Profitez d’une vitesse de chargement optimale pour une expérience utilisateur fluide et rapide.',
            self::SECURITY => 'Une structure robuste pour protéger vos données et minimiser les vulnérabilités.',
            self::INTUITIVE => 'Modifiez facilement vos contenus (textes et images) sans assistance extérieure.',
            self::SCALABILITY => 'Faites évoluer votre site avec de nouvelles fonctionnalités selon vos besoins.',
            self::MULTILINGUAL => 'Proposez votre site en plusieurs langues pour toucher un public international.',
            self::MODIFICATIONS => 'Nous ajustons votre site jusqu’à ce qu’il corresponde parfaitement à vos attentes.',
            self::DOMAIN_HOSTING => 'Tout est pris en charge, de l’achat du nom de domaine à l’hébergement sécurisé.',
            self::PRICING => 'Des prix clairs et sans frais cachés, pour une totale tranquillité d’esprit.',
        };
    }
}
