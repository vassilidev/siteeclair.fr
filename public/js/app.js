const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        const icon = question.querySelector('i');

        // Toggle hidden class for answer
        answer.classList.toggle('hidden');
        icon.classList.toggle('fa-chevron-down');
        icon.classList.toggle('fa-chevron-up');

        // Smooth slide toggle
        if (answer.style.maxHeight) {
            answer.style.maxHeight = null;
        } else {
            answer.style.maxHeight = answer.scrollHeight + 'px';
        }
    });
});

const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

const cursor = document.getElementById('cursor');

document.addEventListener('mousemove', e => {
    cursor.style.left = e.clientX + 'px';
    cursor.style.top = e.clientY + 'px';
});

// Mettre à jour les liens actifs en fonction de la section visible
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('#navbar-links a, #mobile-menu a');

// Fonction pour mettre à jour le lien actif
function updateActiveLink() {
    let currentSectionId = '';

    // Vérifier quelle section est visible dans la fenêtre
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100; // Ajuster pour tenir compte de la hauteur du menu
        const sectionHeight = section.offsetHeight;
        const scrollY = window.pageYOffset;

        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            currentSectionId = section.getAttribute('id');
        }
    });

    // Si aucune section n'est active, supprimer toutes les classes "actives"
    if (!currentSectionId) {
        navLinks.forEach(link => link.classList.remove('text-primary-dark', 'font-bold'));
        return;
    }

    // Mettre à jour les classes actives des liens
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href.includes(`#${currentSectionId}`)) {
            link.classList.add('text-primary-dark', 'font-bold'); // Ajouter la classe active
        } else {
            link.classList.remove('text-primary-dark', 'font-bold'); // Retirer la classe active
        }
    });
}

// Ajouter un écouteur pour le défilement
window.addEventListener('scroll', updateActiveLink);

// Gérer les clics pour un défilement fluide
navLinks.forEach(link => {
    link.addEventListener('click', event => {
        event.preventDefault();
        const targetId = link.getAttribute('href').split('#')[1];
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
            window.scrollTo({
                top: targetSection.offsetTop - 80, // Ajuster pour tenir compte du menu fixe
                behavior: 'smooth'
            });
        }
    });
});

// Initialiser les liens actifs lors du chargement de la page
document.addEventListener('DOMContentLoaded', updateActiveLink);

const backToTopButton = document.getElementById('back-to-top');

// Afficher ou masquer le bouton en fonction du défilement
window.addEventListener('scroll', () => {
    if (window.scrollY > 300) { // Affiche après 300px de défilement
        backToTopButton.classList.remove('hidden');
    } else {
        backToTopButton.classList.add('hidden');
    }
});

// Gérer le clic pour remonter en haut
backToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});