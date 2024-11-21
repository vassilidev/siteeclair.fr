// tailwind.config.js
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#E07B00', // Couleur originale
                'primary-dark': '#B05E00', // Variation plus foncée
                accent: '#9C6D1F',  // Couleur originale
                'accent-dark': '#6B4A16', // Variation plus foncée
                text: '#1A1A1A',    // Texte principal
                'text-gray': '#4A4A4A', // Gris foncé pour le corps
                'background': '#FFFFFF', // Fond blanc
                'gray-100': '#F7F7F7', // Gris très clair pour les cartes populaires
                'gray-900': '#1A1A1A', // Noir pour les boutons personnalisés
                'section-background': '#F2F2F2', // Gris très clair
                'footer-background': '#000000', // Noir pour un con
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
