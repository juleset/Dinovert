const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.coolGray,
            red: colors.red,
            yellow: colors.amber,
            blue: colors.blue,
            pink: colors.pink,
            orange: colors.orange,
            green: colors.green,
            'pale-leaf': {
                '50': '#fcfdfc',
                '100': '#f8faf8',
                '200': '#eef3ee',
                '300': '#e4ece3',
                '400': '#d0ddce',
                '500': '#BCCFB9',
                '600': '#a9baa7',
                '700': '#8d9b8b',
                '800': '#717c6f',
                '900': '#5c655b'
            },'oxley': {
                '50': '#f8faf9',
                '100': '#f2f5f3',
                '200': '#dee6e0',
                '300': '#c9d7cd',
                '400': '#a1b9a8',
                '500': '#799B83',
                '600': '#6d8c76',
                '700': '#5b7462',
                '800': '#495d4f',
                '900': '#3b4c40'
            },'blue-bayoux': {
                '50': '#f6f7f8',
                '100': '#eceff0',
                '200': '#d1d7da',
                '300': '#b5bec3',
                '400': '#7d8e97',
                '500': '#455D6A',
                '600': '#3e545f',
                '700': '#344650',
                '800': '#293840',
                '900': '#222e34'
            }
        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
