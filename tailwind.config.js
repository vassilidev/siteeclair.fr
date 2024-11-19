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
                primary: '#E07B00', // Orange plus foncé pour meilleur contraste
                accent: '#9C6D1F',  // Brun plus foncé
                text: '#1A1A1A',    // Gris très foncé pour une meilleure lisibilité
                background: '#FFFFFF', // Arrière-plan blanc pur
                'section-background': '#F2F2F2', // Gris très clair
                'footer-background': '#000000', // Noir pour un contraste maximal
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
