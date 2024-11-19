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
                primary: '#FFB86C',
                accent: '#ce9456',
                text: '#333333',
                background: '#F9F9F9',
                'section-background': '#FFFFFF',
                'footer-background': '#1A1A1A',
            },
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
