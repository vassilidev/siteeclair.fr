<?php

namespace App\Enums;

enum Faq: string
{
    case DELIVERY_TIME = 'delivery_time';
    case SITE_EDIT = 'site_edit';
    case HOSTING_DOMAIN = 'hosting_domain';
    case SUPPORT = 'support';
    case SEO = 'seo';
    case SCALABILITY = 'scalability';
    case TECH_STACK = 'tech_stack';
    case WORDPRESS = 'wordpress';
    case DIGITAL_TRANSFORMATION = 'digital_transformation';
    case PAYMENT_METHODS = 'payment_methods';
    case OWNERSHIP = 'ownership';

    public function getQuestion(): string
    {
        return match ($this) {
            self::DELIVERY_TIME => '⏱️ Quel est le délai de livraison pour mon site web ?',
            self::SITE_EDIT => '🖋️ Pourrai-je modifier mon site après sa mise en ligne ?',
            self::HOSTING_DOMAIN => '🌐 Le nom de domaine et l’hébergement sont-ils inclus ?',
            self::SUPPORT => '🎯 Offrez-vous un support après la livraison ?',
            self::SEO => '🔎 Mon site sera-t-il optimisé pour les moteurs de recherche ?',
            self::SCALABILITY => '🚀 Mon site pourra-t-il évoluer avec mon entreprise ?',
            self::TECH_STACK => '💻 Quelles technologies utilisez-vous pour développer les sites ?',
            self::WORDPRESS => '❓ Pourquoi ne pas utiliser WordPress pour vos sites ?',
            self::DIGITAL_TRANSFORMATION => '📈 Proposez-vous des solutions pour la transformation digitale ?',
            self::PAYMENT_METHODS => '💳 Quels modes de paiement acceptez-vous ?',
            self::OWNERSHIP => '🔐 Serai-je propriétaire de mon site web une fois livré ?',
        };
    }

    public function getAnswer(): string
    {
        return match ($this) {
            self::DELIVERY_TIME => 'Pour la Formule Éclair, votre site est prêt en seulement 5 jours ouvrés. Pour des projets plus complexes ou sur mesure, les délais sont établis en fonction de vos besoins spécifiques.',
            self::SITE_EDIT => 'Absolument ! Vous aurez accès à une interface intuitive vous permettant de modifier textes et images en toute autonomie. Pour des modifications plus avancées, notre équipe reste à votre disposition.',
            self::HOSTING_DOMAIN => 'Oui, le nom de domaine et l’hébergement sont inclus dans toutes nos offres pendant un an. Vous n’avez rien à gérer de votre côté, nous nous occupons de tout.',
            self::SUPPORT => 'Nous offrons un support client 24/7. De plus, vous bénéficiez de modifications illimitées pour que votre site reste toujours à jour et en phase avec vos besoins.',
            self::SEO => 'Chaque site est conçu avec les meilleures pratiques SEO. Nous optimisons les performances pour un chargement rapide et une meilleure visibilité sur les moteurs de recherche.',
            self::SCALABILITY => 'Oui, nos sites sont développés pour être évolutifs. Vous pourrez ajouter de nouvelles fonctionnalités ou pages au fur et à mesure que votre entreprise grandit.',
            self::TECH_STACK => 'Nous utilisons des technologies modernes comme Laravel, Vue.js et Tailwind CSS, garantissant performance, sécurité et pérennité de votre site.',
            self::WORDPRESS => 'Nous privilégions des technologies plus modernes et sécurisées que WordPress. Cela nous permet de vous offrir des sites plus rapides, sur mesure, et sans les vulnérabilités souvent associées à WordPress.',
            self::DIGITAL_TRANSFORMATION => 'Oui, nous accompagnons les entreprises dans leur transformation digitale, en proposant des solutions sur mesure pour optimiser vos processus et booster votre productivité.',
            self::PAYMENT_METHODS => 'Nous acceptons les paiements par carte bancaire, virement bancaire et PayPal. Des facilités de paiement peuvent également être discutées selon vos besoins.',
            self::OWNERSHIP => 'Oui, une fois le site livré, vous en êtes pleinement propriétaire. Vous aurez accès à l’ensemble du code source et pourrez en disposer librement.',
        };
    }
}
