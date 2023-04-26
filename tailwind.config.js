const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                quicksand: ['Quicksand', 'sans-serif'],
            },
            colors: {
                main: {
                    100: "#d7d8da",
                    200: "#b0b2b5",
                    300: "#888b90",
                    400: "#61656b",
                    500: "#393e46",
                    600: "#2e3238",
                    700: "#22252a",
                    800: "#17191c",
                    900: "#0b0c0e"
                },
                alter: {
                    100: "#e2eae7",
                    200: "#c5d6cf",
                    300: "#a7c1b6",
                    400: "#8aad9e",
                    500: "#6d9886",
                    600: "#577a6b",
                    700: "#415b50",
                    800: "#2c3d36",
                    900: "#161e1b"
                },
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
