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
            colors:{
                primary: '#C9A48A',
                aksen: '#523620',
                background: '#EAD0B8',
                card: '#967259'
              },
            textColor:{
                primary: '#FFFFFF',
                aksen: '#000000',
                second: '#523620'
            }
        },
    },

    plugins: [forms],
};
