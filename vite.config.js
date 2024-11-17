import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'], // Fichiers CSS/JS d'entrée
            refresh: true, // Rechargement automatique pendant le développement
        }),
    ],
});
