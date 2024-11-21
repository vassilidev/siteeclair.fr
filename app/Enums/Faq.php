<?php

namespace App\Enums;

enum Faq: string
{
    case DELIVERY_TIME = 'delivery_time';
    case SITE_EDIT = 'site_edit';
    case HOSTING_DOMAIN = 'hosting_domain';
    case SUPPORT = 'support';
    case SEO = 'seo';
    case EVOLUTION = 'evolution';
    case DEV_TOOLS = 'dev_tools';
    case NO_WORDPRESS = 'no_wordpress';
    case DIGITIZATION = 'digitization';

    public function getQuestion(): string
    {
        return match ($this) {
            self::DELIVERY_TIME => 'Quels sont les délais de livraison pour votre service ?',
            self::SITE_EDIT => 'Puis-je modifier mon site après sa mise en ligne ?',
            self::HOSTING_DOMAIN => 'Le site inclut-il un hébergement et un nom de domaine ?',
            self::SUPPORT => 'Proposez-vous un support après la livraison ?',
            self::SEO => 'Mon site sera-t-il optimisé pour le référencement ?',
            self::EVOLUTION => 'Votre solution est-elle évolutive ?',
            self::DEV_TOOLS => 'Quels outils utilisez-vous pour le développement des sites ?',
            self::NO_WORDPRESS => 'Pourquoi ne pas utiliser WordPress pour vos sites ?',
            self::DIGITIZATION => 'Avez-vous des solutions pour la digitalisation d\'entreprise ?',
        };
    }

    public function getAnswer(): string
    {
        return match ($this) {
            self::DELIVERY_TIME => 'Avec la Formule Éclair, votre site est livré en seulement 5 jours ouvrés. Pour des besoins plus spécifiques, nos solutions sur-mesure sont prêtes en 10 jours ouvrés.',
            self::SITE_EDIT => 'Oui, grâce à une interface intuitive, vous pouvez modifier les textes et images facilement. Pour des changements techniques ou structurels, notre équipe est disponible pour vous accompagner.',
            self::HOSTING_DOMAIN => 'Oui, nous incluons un nom de domaine dans nos offres. Vous avez également la possibilité de transférer un domaine existant lors du processus de paiement.',
            self::SUPPORT => 'Oui, notre support est disponible 24/7. Vous bénéficiez également d’ajustements illimités via le back-office ou notre service premium.',
            self::SEO => 'Oui, tous nos sites sont conçus avec des bases solides pour le SEO. Ils atteignent d\'excellents scores sur Google PageSpeed Insights et sont prêts pour des campagnes SEA.',
            self::EVOLUTION => 'Tout à fait, nos sites sont conçus pour évoluer avec votre entreprise. Vous pouvez ajouter des fonctionnalités, intégrer des outils ou des APIs pour répondre à vos besoins futurs.',
            self::DEV_TOOLS => 'Nous développons nos applications avec des frameworks puissants, robustes et maintenus par une communauté active. Cela garantit performance, évolutivité et sécurité à long terme.',
            self::NO_WORDPRESS => 'Bien que WordPress soit une solution populaire, nous privilégions des technologies modernes qui garantissent une meilleure sécurité, des performances supérieures, et une personnalisation avancée.',
            self::DIGITIZATION => 'Oui, nous proposons des services pour accompagner votre transformation digitale, incluant l\'intégration d\'outils qui optimisent vos process et maximisent votre productivité.',
        };
    }
}
