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
            self::VASSILI => 'Expert en développement, il conçoit des sites performants et évolutifs.',
            self::NOE => 'Spécialiste de la gestion de projets et de la relation client, il garantit un accompagnement fluide.',
            self::TFA => 'L’agence derrière Site Éclair, alliant innovation et expertise pour des solutions digitales sur mesure.',
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
