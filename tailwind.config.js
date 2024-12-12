import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        container: {
            center: true,
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                playfair: ['Playfair Display', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                "dark-base": "#020617",
                "very-light-base": "#f9f9f9",
                "light-base": "#f1f5f9",
                "blue-base": "#1d4ed8",
                "green-base": "#22c525",
            },
            backgroundImage: {
                'about-us-hero-section': "url('../../public/images/backgrounds/bakti-sosial-background.jpg')",
            }
        },
    },
    plugins: [],
};
