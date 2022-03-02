const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                themeblack: '#313131',
                themegray: {
                    50: '#F8F8F8',
                    100: '#efefef'
                },
                themegreen: {
                    50:'#deefb7', // tea-green
                    100: '#98dfaf',
                    200: '#5fb49c'
                },
                themeblue: '#414288',
                themepurple: '#682d63',
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
