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
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                paginationBg: '#ffffff', // Jasne tło
                paginationText: '#333333', // Ciemny tekst
                paginationBorder: '#dddddd', // Szary obramowanie
                paginationHover: '#f3f4f6', // Jaśniejszy szary dla hover
                paginationActive: '#007bff', // Niebieski dla aktywnej strony
            }
        },
    },
    plugins: [],
};
