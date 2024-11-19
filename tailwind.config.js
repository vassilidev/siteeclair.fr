export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#FF8C42', // Plus foncé pour un meilleur contraste
                accent: '#B5651D', // Accent plus marqué
                text: '#222222', // Texte plus sombre
                background: '#FFFFFF', // Fond blanc
                'section-background': '#F4F4F4', // Gris clair pour un contraste doux
                'footer-background': '#0D0D0D', // Noir pour le footer
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
