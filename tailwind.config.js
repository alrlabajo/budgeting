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
        },
    },

    plugins: [forms],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', 'sans-serif']
            }
        },
        screens: {

            //default tailwind size
            'sm': {'min': '640px', 'max': '1920px'},
            'md': {'min': '768px', 'max': '1920px'},
            'lg': {'min': '1024px', 'max': '1920px'},
            'xl': {'min': '1280px', 'max': '1920px'},
            '2xl': {'min': '1536px', 'max': '1920px'},

            // phones
            'p1': {'min':'0px', 'max': '1279px'},
            'p2': '375px',
            'p3': '390px',
            'p4': '411px',
            'p5': '414px',
            'p6': '640px',
            'p7': '768px',
            'p8': '800px',
            'p9': '1024px',


            // computers
            'small_computer': {'min': '1280px', 'max': '1920px'},
            'low-medium_computer': {'min': '1360px', 'max': '1920px'},
            'mid-medium_computer': {'min': '1440px', 'max': '1920px'},
            'high-medium_computer': {'min': '1600px', 'max': '1920px'},
            'large_computer': {'min':'1920px'},

          }
    }


};


