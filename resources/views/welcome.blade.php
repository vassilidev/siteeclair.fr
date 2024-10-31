<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Éclair - Votre site web rapide comme l'éclair</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha384-..." crossorigin="anonymous" />
    <style>
        /* Styles pour les étoiles */
        .stars i {
            color: #FFD700;
            margin: 0 2px;
            font-size: 1.2rem;
        }

        /* Variables de couleurs */
        :root {
            --primary-color: #FFA500; /* Orange vif */
            --accent-color: #FFD700;  /* Jaune lumineux */
            --text-color: #333;
            --background-color: #F9F9F9;
            --section-background: #FFF;
            --footer-background: #1A1A1A;
        }

        /* Reset et styles généraux */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4, h5, h6 {
            color: var(--text-color);
            font-weight: 700;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            background-color: var(--primary-color);
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        .btn:hover {
            background-color: var(--accent-color);
        }

        /* Styles pour le menu amélioré */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: var(--section-background);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 999;
            padding: 25px 0;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .menu-toggle {
            display: none;
        }

        .navbar-links {
            display: flex;
            gap: 15px;
            flex-wrap: nowrap;
        }

        .navbar-links a {
            color: var(--text-color);
            font-weight: 500;
            padding: 10px 10px;
            white-space: nowrap;
            transition: color 0.3s ease;
            font-size: 1rem;
        }

        .navbar-links a:hover {
            color: var(--primary-color);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .navbar-links a {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            .navbar-links {
                display: none;
            }

            .menu-toggle {
                display: block;
                font-size: 1.5rem;
                cursor: pointer;
                color: var(--text-color);
            }

            .navbar .container {
                justify-content: space-between;
            }
        }

        /* Styles pour afficher le menu sur mobile */
        .navbar-links.active {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 80px;
            right: 20px;
            background-color: var(--section-background);
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .navbar-links.active a {
            padding: 10px 20px;
        }

        /* Hero Section */
        .hero-section {
            background-image: url('https://placehold.co/1920x1080');
            background-size: cover;
            background-position: center;
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            width: 100%;
        }

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Sections */
        section {
            padding: 80px 0;
        }

        section h2 {
            text-align: center;
            margin-bottom: 40px;
            color: var(--primary-color);
        }

        /* Centered Text */
        .centered-text {
            text-align: center;
        }

        /* About Section */
        .about-content {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: center;
        }

        /* Method Section */
        .method-grid {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 800px;
            margin: 0 auto;
        }

        .method-step {
            display: flex;
            align-items: center;
        }

        .method-step i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-right: 20px;
        }

        .method-step h3 {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        /* Features Section */
        .features-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .feature-item {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            flex: 1 1 250px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-10px);
        }

        .feature-item i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .feature-item h3 {
            margin-bottom: 15px;
            color: var(--text-color);
        }

        /* Pricing Section */
        .pricing-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .pricing-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            flex: 1 1 300px;
            text-align: left;
            transition: transform 0.3s ease;
            position: relative;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
        }

        .pricing-card h3 {
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .pricing-card p {
            margin-bottom: 20px;
        }

        .pricing-card .price {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .pricing-card ul {
            list-style: none;
            padding-left: 0;
        }

        .pricing-card ul li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .pricing-card ul li i {
            color: var(--accent-color);
            margin-right: 10px;
        }

        .popular-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: var(--accent-color);
            color: #fff;
            padding: 5px 10px;
            border-radius: 50px;
            font-size: 0.9rem;
        }

        /* Portfolio Section */
        .portfolio-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .portfolio-item {
            flex: 1 1 300px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .portfolio-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-overlay h3 {
            color: #fff;
        }

        /* Team Section */
        .team-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .team-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            flex: 1 1 200px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
        }

        .team-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .team-card h3 {
            margin-bottom: 5px;
            color: var(--text-color);
        }

        .team-card p {
            color: var(--primary-color);
        }

        /* Testimonials Section */
        .testimonials-section {
            background-color: var(--section-background);
        }

        .testimonials-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .testimonial {
            text-align: center;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.5s ease;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }

        .testimonial.active {
            opacity: 1;
            position: relative;
        }

        .testimonial p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-color);
            margin-bottom: 20px;
        }

        .testimonial h4 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .testimonial .stars {
            color: #FFD700;
            margin-bottom: 10px;
        }

        /* FAQ Section */
        .faq-section {
            background-color: var(--section-background);
        }

        .faq-item {
            max-width: 800px;
            margin: 0 auto 10px;
            border-bottom: 1px solid #ccc;
        }

        .faq-question {
            font-weight: 600;
            padding: 15px;
            cursor: pointer;
            position: relative;
        }

        .faq-question::after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 15px;
        }

        .faq-answer {
            display: none;
            padding: 0 15px 15px;
            line-height: 1.6;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-item.active .faq-question::after {
            content: '\f077';
        }

        /* Contact Section */
        .contact-section form {
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-section input, .contact-section textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-section button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .contact-section button:hover {
            background-color: var(--accent-color);
        }

        /* Footer */
        footer {
            background-color: var(--footer-background);
            color: #fff;
            padding: 60px 0;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .footer-col {
            flex: 1 1 200px;
            margin: 10px;
        }

        .footer-col h4 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: #fff;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            color: #fff;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: var(--accent-color);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
        }

        .footer-bottom p {
            margin: 0;
            color: #fff;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .social-icons a {
            color: #fff;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--accent-color);
        }

        /* Chatbot Bubble */
        .chatbot-bubble {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: var(--primary-color);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            z-index: 1000;
        }

        .chatbot-bubble:hover {
            background-color: var(--accent-color);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-links {
                display: none;
            }

            .navbar .container {
                justify-content: space-between;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .features-grid, .pricing-grid, .team-grid, .portfolio-grid, .footer-top {
                flex-direction: column;
                align-items: center;
            }

            .footer-col {
                margin: 20px 0;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<!-- Menu amélioré -->
<nav class="navbar">
    <div class="container">
        <a href="#" class="navbar-brand">Site Éclair</a>
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
        <div class="navbar-links">
            <a href="#about">C'est Quoi ?</a>
            <a href="#features">Pourquoi Nous</a>
            <a href="#method">Notre Méthode</a>
            <a href="#pricing">Offres</a>
            <a href="#portfolio">Réalisations</a>
            <a href="#team">Équipe</a>
            <a href="#testimonials">Avis</a>
            <a href="#faq">FAQ</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content container">
        <h1>Votre site web sur mesure, rapide comme l'éclair</h1>
        <p>Des sites performants, évolutifs et abordables, sans compromis sur la qualité.</p>
        <a href="#contact" class="btn">Démarrez Maintenant</a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <h2>Site Éclair, c'est quoi ?</h2>
    <div class="about-content">
        <p>Site Éclair est une branche de notre agence de développement web spécialisée dans la création de sites internet rapides, performants et abordables. Notre mission est de vous offrir une solution clé en main tout en vous permettant de faire évoluer votre site selon vos besoins futurs.</p>
    </div>
</section>

<!-- Method Section -->
<section id="method" class="method-section">
    <h2>Notre Méthode de Travail</h2>
    <div class="method-grid">
        <div class="method-step">
            <i class="fas fa-comments"></i>
            <div>
                <h3>1. Prise de Contact</h3>
                <p>Nous discutons de vos besoins et objectifs pour définir le projet idéal.</p>
            </div>
        </div>
        <div class="method-step">
            <i class="fas fa-pencil-ruler"></i>
            <div>
                <h3>2. Conception & Design</h3>
                <p>Création d'un design sur mesure qui reflète l'identité de votre marque.</p>
            </div>
        </div>
        <div class="method-step">
            <i class="fas fa-code"></i>
            <div>
                <h3>3. Développement Rapide</h3>
                <p>Développement de votre site avec une qualité exceptionnelle et un score Google PageSpeed Insights excellent.</p>
            </div>
        </div>
        <div class="method-step">
            <i class="fas fa-sync-alt"></i>
            <div>
                <h3>4. Retours & Ajustements</h3>
                <p>Retours illimités pour ajuster le site jusqu'à entière satisfaction.</p>
            </div>
        </div>
        <div class="method-step">
            <i class="fas fa-rocket"></i>
            <div>
                <h3>5. Mise en Ligne</h3>
                <p>Mise en ligne de votre site, prêt à générer des interactions en un temps record.</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="features-section">
    <h2>Pourquoi Choisir Site Éclair ?</h2>
    <div class="container features-grid">
        <div class="feature-item">
            <i class="fas fa-tachometer-alt"></i>
            <h3>Performance Optimale</h3>
            <p>Des sites non basés sur WordPress pour une vitesse inégalée.</p>
        </div>
        <div class="feature-item">
            <i class="fas fa-infinity"></i>
            <h3>Retours Illimités</h3>
            <p>Ajustez votre site jusqu'à ce qu'il corresponde parfaitement à vos attentes.</p>
        </div>
        <div class="feature-item">
            <i class="fas fa-language"></i>
            <h3>Site Multilingue</h3>
            <p>Attirez une audience internationale avec un site disponible en plusieurs langues.</p>
        </div>
        <div class="feature-item">
            <i class="fas fa-user-edit"></i>
            <h3>Gestion Autonome du Contenu</h3>
            <p>Modifiez facilement vos images et textes sans intervention de notre part.</p>
        </div>
        <div class="feature-item">
            <i class="fas fa-headset"></i>
            <h3>Support 24/7</h3>
            <p>Une équipe réactive disponible à tout moment pour vous assister.</p>
        </div>
        <div class="feature-item">
            <i class="fas fa-cogs"></i>
            <h3>Évolutivité</h3>
            <p>Intégrez de nouvelles fonctionnalités et APIs pour faire évoluer votre site.</p>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="pricing-section">
    <h2>Nos Offres</h2>
    <p class="centered-text">Des solutions adaptées à chaque besoin et budget.</p>
    <div class="container pricing-grid">
        <div class="pricing-card">
            <h3>Formule Éclair</h3>
            <p>Idéale pour une présence en ligne rapide et efficace.</p>
            <div class="price">€590<span style="font-size: 0.6em;"> HT</span></div>
            <ul>
                <li><i class="fas fa-check"></i> Site One-Page + Page de Contact</li>
                <li><i class="fas fa-check"></i> Design Personnalisé</li>
                <li><i class="fas fa-check"></i> Hébergement & Nom de Domaine Inclus</li>
                <li><i class="fas fa-check"></i> Retours Visuels Illimités</li>
                <li><i class="fas fa-check"></i> Optimisation SEO de Base</li>
                <li><i class="fas fa-check"></i> Support Réactif 24/7</li>
            </ul>
            <a href="#contact" class="btn">Choisir</a>
        </div>
        <div class="pricing-card">
            <h3>Formule Avancée</h3>
            <p>Pour une présence en ligne plus complète.</p>
            <div class="price">€990<span style="font-size: 0.6em;"> HT</span></div>
            <ul>
                <li><i class="fas fa-check"></i> Tout ce qui est inclus dans la Formule Éclair</li>
                <li><i class="fas fa-check"></i> Site Multi-Pages (jusqu'à 5 pages)</li>
                <li><i class="fas fa-check"></i> Fonctionnalités Basiques (Galerie, Blog)</li>
                <li><i class="fas fa-check"></i> Site Multilingue</li>
                <li><i class="fas fa-check"></i> Optimisation SEO Avancée</li>
            </ul>
            <a href="#contact" class="btn">Choisir</a>
        </div>
        <div class="pricing-card">
            <div class="popular-badge">Sur Devis</div>
            <h3>Formule Sur Mesure</h3>
            <p>Pour des solutions entièrement personnalisées.</p>
            <div class="price">Sur Devis</div>
            <ul>
                <li><i class="fas fa-check"></i> Analyse Approfondie de Vos Besoins</li>
                <li><i class="fas fa-check"></i> Développement de Fonctionnalités Avancées</li>
                <li><i class="fas fa-check"></i> Intégration d'APIs et Outils Spécifiques</li>
                <li><i class="fas fa-check"></i> Maintenance & Évolution Dédiées</li>
                <li><i class="fas fa-check"></i> Stratégie Digitale Personnalisée</li>
            </ul>
            <a href="https://votre-autre-site.com" class="btn">Demander un Devis</a>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio-section">
    <h2>Nos Réalisations</h2>
    <div class="container portfolio-grid">
        <div class="portfolio-item">
            <img src="https://placehold.co/600x400?text=Projet+1" alt="Projet 1">
            <div class="portfolio-overlay">
                <h3>Site Vitrine Entreprise A</h3>
            </div>
        </div>
        <div class="portfolio-item">
            <img src="https://placehold.co/600x400?text=Projet+2" alt="Projet 2">
            <div class="portfolio-overlay">
                <h3>Portfolio Artiste B</h3>
            </div>
        </div>
        <div class="portfolio-item">
            <img src="https://placehold.co/600x400?text=Projet+3" alt="Projet 3">
            <div class="portfolio-overlay">
                <h3>Boutique en Ligne C</h3>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="team-section">
    <h2>Rencontrez Notre Équipe</h2>
    <div class="container team-grid">
        <div class="team-card">
            <img src="https://placehold.co/150x150" alt="Vassili JOFFROY">
            <h3>Vassili JOFFROY</h3>
            <p>Président & Développeur Expert</p>
        </div>
        <div class="team-card">
            <img src="https://placehold.co/150x150" alt="Noé CHAROUSSET">
            <h3>Noé CHAROUSSET</h3>
            <p>Directeur Général & Chef de Projet</p>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials-section">
    <h2>Vos Témoignages</h2>
    <div class="testimonials-slider">
        <div class="testimonial active">
            <p>"Grâce à Site Éclair, j'ai pu lancer mon site professionnel en un temps record. L'équipe a été très réactive et à l'écoute de mes besoins."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>- Marie Dupont</h4>
        </div>
        <div class="testimonial">
            <p>"Un service de qualité avec un excellent rapport qualité-prix. Je recommande vivement Site Éclair."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h4>- Paul Laurent</h4>
        </div>
        <div class="testimonial">
            <p>"Mon site est exactement comme je l'imaginais. L'équipe a su comprendre mes attentes et les réaliser parfaitement."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <h4>- Sophie Martin</h4>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="faq-section">
    <h2>Foire Aux Questions</h2>
    <div class="container">
        <div class="faq-item">
            <div class="faq-question">Quels sont les délais de livraison pour les offres ?</div>
            <div class="faq-answer">Pour la Formule Éclair, nous livrons votre site en 5 jours ouvrés. Pour la Formule Avancée, le délai est de 10 jours ouvrés.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Puis-je modifier mon site après la mise en ligne ?</div>
            <div class="faq-answer">Oui, vous pouvez modifier le contenu (images, textes) facilement sans notre intervention. Pour des modifications structurelles, notre équipe est là pour vous assister rapidement.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Le site sera-t-il optimisé pour les moteurs de recherche ?</div>
            <div class="faq-answer">Absolument, tous nos sites sont optimisés pour le SEO avec un excellent score sur Google PageSpeed Insights, prêts pour vos campagnes SEA.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Proposez-vous un support après la livraison ?</div>
            <div class="faq-answer">Oui, nous offrons un support réactif 24/7 avec des contrats de maintenance et d'évolution dédiés.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Mon site peut-il évoluer avec mon entreprise ?</div>
            <div class="faq-answer">Tout à fait, nos sites sont conçus pour être évolutifs. Vous pouvez intégrer de nouvelles fonctionnalités, des APIs et des outils pour accompagner la croissance de votre entreprise.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Quelles technologies utilisez-vous pour développer les sites ?</div>
            <div class="faq-answer">Nous utilisons des technologies modernes et performantes, et sommes experts en Laravel et Supermalter pour garantir la qualité et l'évolutivité de votre site.</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Proposez-vous des solutions pour la transformation digitale ?</div>
            <div class="faq-answer">Oui, nous vous accompagnons dans votre transformation digitale en intégrant des outils qui vous permettent de gagner du temps et d'apporter de la valeur là où vous êtes réellement professionnel.</div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <h2>Contactez-nous</h2>
    <form action="submit-form" method="post">
        <input type="text" name="name" placeholder="Votre Nom" required>
        <input type="email" name="email" placeholder="Votre Email" required>
        <input type="text" name="subject" placeholder="Sujet" required>
        <textarea name="message" placeholder="Votre Message" rows="5" required></textarea>
        <button type="submit">Envoyer le Message</button>
    </form>
</section>

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div class="footer-top">
            <div class="footer-col">
                <h4>Site Éclair</h4>
                <p>&copy; 2023 Site Éclair. Tous droits réservés.</p>
            </div>
            <div class="footer-col">
                <h4>Liens Utiles</h4>
                <ul>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#features">Services</a></li>
                    <li><a href="#pricing">Offres</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Suivez-nous</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Made by Site Éclair <i class="fas fa-bolt" style="color: yellow;"></i></p>
        </div>
    </div>
</footer>

<!-- Chatbot Bubble -->
<div class="chatbot-bubble">
    <i class="fas fa-comments"></i>
</div>

<!-- Scripts pour le carousel des témoignages et l'accordéon de la FAQ -->
<script>
    // Carousel des témoignages
    const testimonials = document.querySelectorAll('.testimonial');
    let currentTestimonial = 0;

    setInterval(() => {
        testimonials[currentTestimonial].classList.remove('active');
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        testimonials[currentTestimonial].classList.add('active');
    }, 5000);

    // Accordéon FAQ
    let faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        item.querySelector('.faq-question').addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });

    // Menu responsive
    const menuToggle = document.getElementById('mobile-menu');
    const navbarLinks = document.querySelector('.navbar-links');

    menuToggle.addEventListener('click', () => {
        navbarLinks.classList.toggle('active');
    });
</script>

</body>
</html>
