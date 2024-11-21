<?php

namespace App\Enums;

enum Team: string
{
    case VASSILI = 'vassili';
    case NOE = 'noe';
    case TFA = 'tfa';

    public function name(): string
    {
        return match ($this) {
            self::VASSILI => 'Vassili JOFFROY',
            self::NOE => 'Noé CHAROUSSET',
            self::TFA => 'TFA - The Forge Agency',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::VASSILI => 'Développeur senior avec plus de 6 ans d’expérience, il réalise des sites web performants et innovants.',
            self::NOE => 'Chargé de projet dédié, il assure une communication fluide et un suivi personnalisé de votre projet.',
            self::TFA => 'L’agence créative derrière Site Éclair, combinant innovation et expertise pour des solutions digitales sur mesure.',
        };
    }

    public function image(): string
    {
        return match ($this) {
            self::VASSILI => asset('img/team/vassili.webp'),
            self::NOE => asset('img/team/noe.webp'),
            self::TFA => asset('img/team/tfa.webp'),
        };
    }

    public function altText(): string
    {
        return match ($this) {
            self::VASSILI => 'Vassili JOFFROY',
            self::NOE => 'Noé CHAROUSSET',
            self::TFA => 'TFA - The Forge Agency',
        };
    }
}