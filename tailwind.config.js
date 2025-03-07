import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            height:{
                "6v": "6vh",
                "10v": "10vh",
                "74v": "74vh",
                "84v": "84vh"
            },
            colors:{
                "header":"#141A54",
                "footer":"#141A54",
                "main":"#fcfcfc",
            }
        },
    },

    plugins: [forms, require('daisyui')],
};
