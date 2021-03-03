const defaultTheme = require('tailwindcss/defaultTheme');


module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        extend: {
            colors: {

                    vermilion: {
                        '50': '#fff6f2',
                        '100': '#ffede6',
                        '200': '#ffd1c0',
                        '300': '#ffb599',
                        '400': '#ff7e4d',
                        '500': '#FF4701',
                        '600': '#e64001',
                        '700': '#bf3501',
                        '800': '#992b01',
                        '900': '#7d2300',
                    },
                    alabaster: {
                        '50': '#ffffff',
                        '100': '#ffffff',
                        '200': '#fefefe',
                        '300': '#fdfdfd',
                        '400': '#fcfcfc',
                        '500': '#fafafa',
                        '600': '#e1e1e1',
                        '700': '#bcbcbc',
                        '800': '#969696',
                        '900': '#7b7b7b'
                    },
                },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
}
