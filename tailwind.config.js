import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const colors = require('tailwindcss/colors');
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        './app/Livewire/**/*Table.php',
      './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
      './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            ...colors,
            'color-1': "#41F73E", // green
            'color-1-2': '#2DAB2B',
            'color-2': "#F7BC3E", // yellow
            'color-2-2': '#EFB63C',
            'color-3': "#3F83F8", // blue
            'color-3-2': '#2B5AAB',
            'color-4': '#F73EA0', // pink
            'color-4-2': '#EF3C9B',
            'color-5': '#8691A3', // gray
            'color-5-2': '#636B79',
            'color-6': '#557D54', // avocado
            'color-6-2': '#4F744E',
        },

        plugins: [forms, typography],
        plugins: [
            require('flowbite/plugin')
        ],

    }
};
