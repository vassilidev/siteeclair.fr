<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Éclair - Votre site web rapide comme l'éclair</title>

    <!-- Balises Meta pour le SEO -->
    <meta name="description" content="Site Éclair propose des sites web rapides, performants, évolutifs et abordables. Obtenez votre site sur mesure en un temps record sans compromis sur la qualité.">
    <meta name="keywords" content="Site web rapide, Développement web, Site Éclair, Création de site, SEO, Performance web">
    <meta name="robots" content="index, follow">

    <!-- Balises Open Graph pour les réseaux sociaux -->
    <meta property="og:title" content="Site Éclair - Votre site web rapide comme l'éclair">
    <meta property="og:description" content="Des sites performants, évolutifs et abordables, sans compromis sur la qualité.">
    <meta property="og:image" content="{{ asset('logo.svg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Balises Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Site Éclair - Votre site web rapide comme l'éclair">
    <meta name="twitter:description" content="Des sites performants, évolutifs et abordables, sans compromis sur la qualité.">
    <meta name="twitter:image" content="{{ asset('logo.svg') }}">

    <!-- Données structurées en JSON-LD -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Site Éclair",
          "url": "https://www.site-eclair.com",
          "logo": "https://www.site-eclair.com{{ asset('logo.svg') }}",
      "sameAs": [
        "https://www.facebook.com/votrepage",
        "https://www.twitter.com/votrepage",
        "https://www.linkedin.com/company/votrepage",
        "https://www.instagram.com/votrepage"
      ],
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+33XXXXXXXXX",
        "contactType": "Service client",
        "areaServed": "FR",
        "availableLanguage": ["Français", "Anglais"]
      }]
    }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

    <!-- Polices et CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          defer crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- Navigation -->
<nav class="navbar">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="{{ asset('logo.svg') }}" alt="Logo Site Éclair">
            <span>Site Éclair</span>
        </a>
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

<!-- Section Héro -->
<section class="hero-section">
    <div class="hero-content container">
        <h1>Votre site web sur mesure, rapide comme l'éclair</h1>
        <p>Des sites performants, évolutifs et abordables, sans compromis sur la qualité.</p>
        <a href="#about" class="btn">Démarrez Maintenant</a>
    </div>
</section>

<!-- Section À Propos -->
<section id="about" class="about-section">
    <h2>Site Éclair, c'est quoi ?</h2>
    <div class="about-content">
        <p>Site Éclair est une branche de notre agence de développement web spécialisée dans la création de sites internet rapides, performants et abordables. Notre mission est de vous offrir une solution clé en main tout en vous permettant de faire évoluer votre site selon vos besoins futurs.</p>
    </div>
</section>

<!-- Section Méthode -->
<section id="method" class="method-section">
    <div class="container">
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
                    <h3>2. Conception &amp; Design</h3>
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
                    <h3>4. Retours &amp; Ajustements</h3>
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
    </div>
</section>

<!-- Section Pourquoi Nous -->
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

<!-- Section Offres -->
<section id="pricing" class="pricing-section">
    <h2>Nos Offres</h2>
    <p class="centered-text">Des solutions adaptées à chaque besoin et budget.</p>
    <div class="container pricing-grid">
        <div class="pricing-card popular">
            <div class="popular-badge">Le plus populaire</div>
            <h3>Formule Éclair</h3>
            <p>Idéale pour une présence en ligne rapide et efficace.</p>
            <div class="price">590 €<span style="font-size: 0.6em;"> HT</span></div>
            <ul>
                <li><i class="fas fa-check"></i> Site One-Page + Page de Contact</li>
                <li><i class="fas fa-check"></i> Design Personnalisé</li>
                <li><i class="fas fa-check"></i> Hébergement &amp; Nom de Domaine Inclus</li>
                <li><i class="fas fa-check"></i> Retours Visuels Illimités</li>
                <li><i class="fas fa-check"></i> Optimisation SEO de Base</li>
                <li><i class="fas fa-check"></i> Support Réactif 24/7</li>
            </ul>
            <a href="#contact" class="btn popular-btn">Choisir</a>
        </div>
        <div class="pricing-card">
            <h3>Formule Avancée</h3>
            <p>Pour une présence en ligne plus complète.</p>
            <div class="price">990 €<span style="font-size: 0.6em;"> HT</span></div>
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
            <div class="custom-badge">Sur Devis</div>
            <h3>Formule Sur Mesure</h3>
            <p>Pour des solutions entièrement personnalisées.</p>
            <div class="price">Sur Devis</div>
            <ul>
                <li><i class="fas fa-check"></i> Analyse Approfondie de Vos Besoins</li>
                <li><i class="fas fa-check"></i> Développement de Fonctionnalités Avancées</li>
                <li><i class="fas fa-check"></i> Intégration d'APIs et Outils Spécifiques</li>
                <li><i class="fas fa-check"></i> Maintenance &amp; Évolution Dédiées</li>
                <li><i class="fas fa-check"></i> Stratégie Digitale Personnalisée</li>
            </ul>
            <a href="#contact" class="btn custom-btn">Demander un Devis</a>
        </div>
    </div>
</section>

<!-- Section Réalisations -->
<section id="portfolio" class="portfolio-section">
    <h2>Nos Réalisations</h2>
    <div class="container portfolio-grid">
        <div class="portfolio-item">
            <img src="https://placehold.co/600x400?text=Projet+1" alt="Site Vitrine Entreprise A">
            <div class="portfolio-overlay">
                <h3>Site Vitrine Entreprise A</h3>
            </div>
        </div>
        <div class="portfolio-item">
            <img src="https://placehold.co/600x400?text=Projet+2" alt="Portfolio Artiste B">
            <div class="portfolio-overlay">
                <h3>Portfolio Artiste B</h3>
            </div>
        </div>
        <div class="portfolio-item">
            <img src="https://placehold.co/600x400?text=Projet+3" alt="Boutique en Ligne C">
            <div class="portfolio-overlay">
                <h3>Boutique en Ligne C</h3>
            </div>
        </div>
    </div>
</section>

<!-- Section Équipe -->
<section id="team" class="team-section">
    <h2>Rencontrez Notre Équipe</h2>
    <div class="container">
        <div class="team-grid">
            <div class="team-card">
                <img src="https://media.licdn.com/dms/image/v2/D4E03AQG2KPGca324zA/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1708702714017?e=1735776000&v=beta&t=Qph1JOUftoDzuulCxBWSOyyiw8LBj2SIl8jH-ggW934" alt="Vassili JOFFROY - Président & Développeur Expert">
                <h3>Vassili JOFFROY</h3>
                <p>Président &amp; Développeur Expert</p>
            </div>
            <div class="team-card">
                <img src="https://media.licdn.com/dms/image/v2/D5603AQEp7OUnr7oIxw/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1681208563507?e=1735776000&v=beta&t=AYsOB3_EnmYJslcVC7wrqY1tXkbETHD4tGK2yzfj8Is" alt="Noé CHAROUSSET - Directeur Général & Chef de Projet">
                <h3>Noé CHAROUSSET</h3>
                <p>Directeur Général &amp; Chef de Projet</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Avis -->
<section id="testimonials" class="testimonials-section">
    <h2>Vos Témoignages</h2>
    <div class="testimonials-slider">
        <div class="testimonial active">
            <p>"Je recommande fortement Site Éclair pour son professionnalisme, sa réactivité et sa disponibilité de tous les instants. Les développements sont rapides, précis et fiables, c'est le type de collaboration qui rassure. La grande autonomie dans la prise de décision en fait un collaborateur freelance de premier plan."</p>
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h4>- Michael, Unitead</h4>
        </div>
        <div class="testimonial">
            <p>"Site Éclair a su créer la plateforme et le site dont nous avions besoin. Ils connaissent leur métier sur le bout des doigts. Merci pour votre professionnalisme."</p>
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h4>- Diag Power</h4>
        </div>
        <div class="testimonial">
            <p>"Un beau travail réalisé permettant à l’avenir de limiter les erreurs humaines et d’abaisser la charge mentale de la direction de notre organisme."</p>
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h4>- Stephen, Organisme C3</h4>
        </div>
        <div class="testimonial">
            <p>"Comme toujours, rapide et efficace ! Ils répondent toujours présents, même pour les missions les plus complexes. Je ne peux que les recommander."</p>
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h4>- Morine</h4>
        </div>
        <div class="testimonial">
            <p>"Je recommande le travail de Site Éclair. Nous souhaitions collaborer pour le développement d'API avec notre site. Les échanges ont été fructueux et rapides. Site Éclair est professionnel et s'engage en connaissance de cause."</p>
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h4>- Tanguy, Piba Location</h4>
        </div>
        <div class="testimonial">
            <p>"Excellent prestataire : rapide, efficace et investi. Je recommande vivement pour toutes leurs qualités et leur expertise."</p>
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h4>- Yannick</h4>
        </div>
        <div class="testimonial">
            <p>"Site Éclair est extrêmement doué dans ce qu’ils font, prix très attractif avec un grand accompagnement, très à l’écoute. Je recommande à 100% les yeux fermés."</p>
            <div class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <h4>- Margot</h4>
        </div>
    </div>
</section>

<!-- Section FAQ -->
<section id="faq" class="faq-section">
    <h2>Foire Aux Questions</h2>
    <div class="container">
        <div class="faq-item">
            <div class="faq-question">Quels sont les délais de livraison pour les offres ?</div>
            <div class="faq-answer">Pour la Formule Éclair, nous livrons votre site en 5 jours ouvrés. Pour la Formule
                Avancée, le délai est de 10 jours ouvrés.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Puis-je modifier mon site après la mise en ligne ?</div>
            <div class="faq-answer">Oui, vous pouvez modifier le contenu (images, textes) facilement sans notre
                intervention. Pour des modifications structurelles, notre équipe est là pour vous assister rapidement.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Le site sera-t-il optimisé pour les moteurs de recherche ?</div>
            <div class="faq-answer">Absolument, tous nos sites sont optimisés pour le SEO avec un excellent score sur
                Google PageSpeed Insights, prêts pour vos campagnes SEA.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Proposez-vous un support après la livraison ?</div>
            <div class="faq-answer">Oui, nous offrons un support réactif 24/7 avec des contrats de maintenance et
                d'évolution dédiés.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Mon site peut-il évoluer avec mon entreprise ?</div>
            <div class="faq-answer">Tout à fait, nos sites sont conçus pour être évolutifs. Vous pouvez intégrer de
                nouvelles fonctionnalités, des APIs et des outils pour accompagner la croissance de votre entreprise.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Quelles technologies utilisez-vous pour développer les sites ?</div>
            <div class="faq-answer">Nous utilisons des technologies modernes et performantes, et sommes experts en
                Laravel et Supermalter pour garantir la qualité et l'évolutivité de votre site.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Proposez-vous des solutions pour la transformation digitale ?</div>
            <div class="faq-answer">Oui, nous vous accompagnons dans votre transformation digitale en intégrant des
                outils qui vous permettent de gagner du temps et d'apporter de la valeur là où vous êtes réellement
                professionnel.
            </div>
        </div>
    </div>
</section>

<!-- Section Contact -->
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

<!-- Pied de page -->
<footer>
    <div class="footer-content">
        <div class="footer-top">
            <div class="footer-col">
                <img src="{{ asset('logo.svg') }}" width="32" alt="">
                <h3>Site Éclair</h3>
                <p>&copy; {{ date('Y') }} Site Éclair. Tous droits réservés.</p>
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
                    <a href="https://www.facebook.com/votrepage"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/votrepage"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/votrepage"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/votrepage"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Made by Site Éclair <i class="fas fa-bolt" style="color: yellow;"></i></p>
        </div>
    </div>
</footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6723c2382480f5b4f596de67/1ibhqtb7o';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- Scripts -->
<script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>
