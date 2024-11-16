@extends('layouts.default')

@section('content')
    <section class="hero-section">
        <div id="particles-js"></div>
        <div class="hero-content container">
            <h1>Votre site web sur mesure, rapide comme l'éclair</h1>
            <p>Des sites performants, évolutifs et abordables, sans compromis sur la qualité.</p>
            <a href="#about" class="btn">Démarrez Maintenant</a>
        </div>
        <div class="scroll-arrow">
            <a href="#about">
                <i class="fas fa-angles-down"></i>
            </a>
        </div>
    </section>

    <!-- Section À Propos -->
    <section id="about" class="about-section">
        <h2>Site Éclair, c'est quoi ?</h2>
        <div class="about-content">
            <p>Site Éclair est une branche de notre agence de développement web spécialisée dans la création de sites
                internet rapides, performants et abordables. Notre mission est de vous offrir une solution clé en main
                tout
                en vous permettant de faire évoluer votre site selon vos besoins futurs.</p>
        </div>
    </section>

    <!-- Section Méthode -->
    <section id="method" class="method-section">
        <div class="container">
            <h2>Notre Méthode de Travail</h2>
            <div class="method-grid">
                <div class="method-line"></div>
                <div class="method-step">
                <span class="icon-circle">
                    <i class="fas fa-comments fa-xl"></i>
                </span>
                    <div>
                        <h3>1. Prise de Contact</h3>
                        <p>Nous discutons de vos besoins et objectifs pour définir le projet idéal.</p>
                    </div>
                </div>
                <div class="method-step">
                <span class="icon-circle">
                    <i class="fas fa-pencil-ruler fa-xl"></i>
                </span>
                    <div>
                        <h3>2. Conception &amp; Design</h3>
                        <p>Création d'un design sur mesure qui reflète l'identité de votre marque.</p>
                    </div>
                </div>
                <div class="method-step">
                <span class="icon-circle">
                    <i class="fas fa-code fa-xl"></i>
                </span>
                    <div>
                        <h3>3. Développement Rapide</h3>
                        <p>Développement de votre site avec une qualité exceptionnelle et un excellent score Google
                            PageSpeed Insights.</p>
                    </div>
                </div>
                <div class="method-step">
                <span class="icon-circle">
                    <i class="fas fa-sync-alt fa-xl"></i>
                </span>
                    <div>
                        <h3>4. Retours &amp; Ajustements</h3>
                        <p>Retours illimités pour ajuster le site jusqu'à entière satisfaction.</p>
                    </div>
                </div>
                <div class="method-step">
                <span class="icon-circle">
                    <i class="fas fa-rocket fa-xl"></i>
                </span>
                    <div>
                        <h3>5. Mise en Ligne</h3>
                        <p>Mise en ligne de votre site, prêt à générer des interactions en un temps record.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features-section">
        <h2>Pourquoi Choisir Site Éclair ?</h2>
        <div class="container features-grid">
            <div class="feature-item">
                <i class="fas fa-tachometer-alt fa-xl"></i>
                <h3>Performance Optimale</h3>
                <p>Des sites non basés sur WordPress pour une vitesse inégalée.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-shield-alt fa-xl"></i>
                <h3>Sécurité Renforcée</h3>
                <p>Notre solution sans WordPress assure une sécurité optimale et réduit les risques de
                    vulnérabilité.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-user-edit fa-xl"></i>
                <h3>Gestion Autonome du Contenu</h3>
                <p>Modifiez facilement vos images et textes sans intervention de notre part.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-cogs fa-xl"></i>
                <h3>Évolutivité</h3>
                <p>Intégrez de nouvelles fonctionnalités et APIs pour faire évoluer votre site.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-language fa-xl"></i>
                <h3>Site Multilingue</h3>
                <p>Attirez une audience internationale avec un site disponible en plusieurs langues.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-infinity fa-xl"></i>
                <h3>Retours Illimités</h3>
                <p>Ajustez votre site jusqu'à ce qu'il corresponde parfaitement à vos attentes.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-headset fa-xl"></i>
                <h3>Support 24/7</h3>
                <p>Une équipe réactive disponible à tout moment pour vous assister.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-tags fa-xl"></i>
                <h3>Tarification Transparente</h3>
                <p>Des prix fixes et sans surprise pour chaque projet, afin de garantir une transparence totale.</p>
            </div>
        </div>
    </section>

    <!-- Section Offres -->
    <section id="pricing" class="pricing-section">
        <h2>Nos Offres</h2>
        <p class="centered-text">Des solutions adaptées à chaque besoin et budget.</p><br>
        <div class="container pricing-grid">
            <!-- Formule Éclair -->
            <div class="pricing-card popular">
                <div class="popular-badge">Le plus populaire</div>
                <h3>Formule Éclair</h3>
                <p>Idéale pour une présence en ligne rapide et efficace.</p>
                <div class="price">490 €<span style="font-size: 0.6em;"> HT</span></div>
                <ul>
                    <li><i class="fas fa-check"></i> Site One-Page (style landing, small business)</li>
                    <li><i class="fas fa-check"></i> Design Personnalisé via Template</li>
                    <li><i class="fas fa-check"></i> Formulaire de Contact</li>
                    <li><i class="fas fa-check"></i> SEO de Base</li>
                    <li><i class="fas fa-check"></i> Maintenance Annuelle Incluse</li>
                    <li><i class="fas fa-check"></i> Hébergement Inclus (1 an)</li>
                    <li><i class="fas fa-check"></i> Transfert de Nom de Domaine (offert)</li>
                </ul>
                <div class="btn-container">
                    <a href="#contact" class="btn popular-btn">Choisir</a>
                </div>
            </div>

            <!-- Formule Foudre -->
            <div class="pricing-card">
                <h3>Formule Foudre</h3>
                <p>Pour une présence en ligne complète et puissante.</p>
                <div class="price">680 €<span style="font-size: 0.6em;"> HT</span></div>
                <ul>
                    <li><i class="fas fa-check"></i> Tout ce qui est inclus dans la Formule Éclair</li>
                    <li><i class="fas fa-check"></i> Site Multi-Pages</li>
                    <li><i class="fas fa-check"></i> SEO Avancé avec Accompagnement</li>
                    <li><i class="fas fa-check"></i> Gestion Multilingue (jusqu'à 3 langues)</li>
                    <li><i class="fas fa-check"></i> Support Premium 24/7</li>
                    <li><i class="fas fa-check"></i> Sauvegarde Automatique Mensuelle</li>
                </ul>
                <div class="btn-container">
                    <a href="#contact" class="btn">Choisir</a>
                </div>
            </div>

            <!-- Formule Tempête (Sur Devis) -->
            <div class="pricing-card">
                <div class="custom-badge">Personnalisé</div>
                <h3>Formule Tempête</h3>
                <p>Solution sur mesure pour des projets ambitieux et évolutifs.</p>
                <div class="price">Sur Devis</div>
                <ul>
                    <li><i class="fas fa-check"></i> Tout ce qui est inclus dans la Formule Foudre</li>
                    <li><i class="fas fa-check"></i> Développement d'Applications et Back Office Complet</li>
                    <li><i class="fas fa-check"></i> Intégration d'APIs Spécifiques et Modules Intelligents</li>
                    <li><i class="fas fa-check"></i> Création d'APIs Personnalisées</li>
                    <li><i class="fas fa-check"></i> Support et Maintenance Personnalisés</li>
                    <li><i class="fas fa-check"></i> Assistance Transfert et Formation</li>
                </ul>
                <div class="btn-container">
                    <a href="#contact" class="btn custom-btn">Demander un Devis</a>
                </div>
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
                    <img src="https://media.licdn.com/dms/image/v2/D4E03AQG2KPGca324zA/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1708702714017?e=1735776000&v=beta&t=Qph1JOUftoDzuulCxBWSOyyiw8LBj2SIl8jH-ggW934"
                         alt="Vassili JOFFROY - Président & Développeur Expert">
                    <h3>Vassili JOFFROY</h3>
                    <p>Développeur & Intégrateur</p>
                </div>
                <div class="team-card">
                    <img src="https://media.licdn.com/dms/image/v2/D5603AQEp7OUnr7oIxw/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1681208563507?e=1735776000&v=beta&t=AYsOB3_EnmYJslcVC7wrqY1tXkbETHD4tGK2yzfj8Is"
                         alt="Noé CHAROUSSET - Directeur Général & Chef de Projet">
                    <h3>Noé CHAROUSSET</h3>
                    <p>Chef de Projet & Relation client</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Avis -->
    <section id="testimonials" class="testimonials-section">
        <h2>Vos Témoignages</h2>
        <div class="testimonials-slider">
            <div class="testimonial active">
                <p>"Je recommande fortement Site Éclair pour son professionnalisme, sa réactivité et sa disponibilité de
                    tous les instants. Les développements sont rapides, précis et fiables, c'est le type de
                    collaboration
                    qui rassure. La grande autonomie dans la prise de décision en fait un collaborateur freelance de
                    premier
                    plan."</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <h4>- Michael, Unitead</h4>
            </div>
            <div class="testimonial">
                <p>"Site Éclair a su créer la plateforme et le site dont nous avions besoin. Ils connaissent leur métier
                    sur
                    le bout des doigts. Merci pour votre professionnalisme."</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <h4>- Diag Power</h4>
            </div>
            <div class="testimonial">
                <p>"Un beau travail réalisé permettant à l’avenir de limiter les erreurs humaines et d’abaisser la
                    charge
                    mentale de la direction de notre organisme."</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <h4>- Stephen, Organisme C3</h4>
            </div>
            <div class="testimonial">
                <p>"Comme toujours, rapide et efficace ! Ils répondent toujours présents, même pour les missions les
                    plus
                    complexes. Je ne peux que les recommander."</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <h4>- Morine</h4>
            </div>
            <div class="testimonial">
                <p>"Je recommande le travail de Site Éclair. Nous souhaitions collaborer pour le développement d'API
                    avec
                    notre site. Les échanges ont été fructueux et rapides. Site Éclair est professionnel et s'engage en
                    connaissance de cause."</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <h4>- Tanguy, Piba Location</h4>
            </div>
            <div class="testimonial">
                <p>"Excellent prestataire : rapide, efficace et investi. Je recommande vivement pour toutes leurs
                    qualités
                    et leur expertise."</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <h4>- Yannick</h4>
            </div>
            <div class="testimonial">
                <p>"Site Éclair est extrêmement doué dans ce qu’ils font, prix très attractif avec un grand
                    accompagnement,
                    très à l’écoute. Je recommande à 100% les yeux fermés."</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
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
                <div class="faq-answer">Pour la Formule Éclair, nous livrons votre site en 5 jours ouvrés. Pour la
                    Formule
                    Avancée, le délai est de 10 jours ouvrés.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Puis-je modifier mon site après la mise en ligne ?</div>
                <div class="faq-answer">Oui, vous pouvez modifier le contenu (images, textes) facilement sans notre
                    intervention. Pour des modifications structurelles, notre équipe est là pour vous assister
                    rapidement.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Le site sera-t-il optimisé pour les moteurs de recherche ?</div>
                <div class="faq-answer">Absolument, tous nos sites sont optimisés pour le SEO avec un excellent score
                    sur
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
                    nouvelles fonctionnalités, des APIs et des outils pour accompagner la croissance de votre
                    entreprise.
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
@endsection