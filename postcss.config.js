export default {
    plugins: {
        'postcss-import': {},  // Gère les @import dans le CSS
        'autoprefixer': {},   // Ajoute les préfixes navigateur pour la compatibilité
        'cssnano': {          // Minifie le CSS pour la production
            preset: 'default',
        },
        'postcss-merge-rules': {}, // Fusionne les règles redondantes
    },
};