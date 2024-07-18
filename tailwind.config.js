import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary-900':'#322000',
                'primary-800':'#664200',
                'primary-700':'#996300',
                'primary-600':'#cc8400',
                'primary-500': "#FFA500",
                'primary-400':'#ffb733',
                'primary-300':'#ffc966',
                'primary-200':'#ffdb99',
                'primary-100':'#ffedcc',
                'primary-50':'#fff6e5'
            },
        },
    },

    plugins: [forms, typography],
};
