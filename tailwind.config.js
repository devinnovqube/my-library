import forms from '@tailwindcss/forms';
import preset from './vendor/filament/support/tailwind.config.preset';

/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './app/Livewire/**/*.php',
        
        './resources/**/*.php',
        './resources/**/*.scss',
        './resources/**/*.js',
        './resources/**/*.vue',
        './resources/views/**/*.blade.php',

        
        './vendor/filament/**/*.blade.php',
        './vendor/jaocero/radio-deck/resources/views/**/*.blade.php',
        './vendor/outerweb/filament-image-library/resources/views/**/*.blade.php',
        './vendor/bezhansalleh/filament-exceptions/resources/views/**/*.blade.php',
        './vendor/ralphjsmit/laravel-filament-media-library/resources/**/*.blade.php',
    ],
    plugins: [
        forms,
        require('@tailwindcss/typography'),

    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
                inter: ['Inter', 'sans-serif'],
            },
            rotate: {
                '-1': '-1deg',
                '-2': '-2deg',
                '-3': '-3deg',
                '1': '1deg',
                '2': '2deg',
                '3': '3deg',
            },
            borderRadius: {
                'xl': '0.8rem',
                'xxl': '1rem',
            },
            height: {
                '1/2': '0.125rem',
                '2/3': '0.1875rem',
            },
            maxHeight: {
                '16': '16rem',
                '20': '20rem',
                '24': '24rem',
                '32': '32rem',
            },
            inset: {
                '1/2': '50%',
            },
            width: {
                '96': '24rem',
                '104': '26rem',
                '128': '32rem',
            },
            minWidth: {
                '4': '1rem'
            },
            transitionDelay: {
                '450': '450ms',
            },
            colors: {
                'primary': {
                    100: '#B0C8CC',
                    200: '#8AAEB4',
                    300: '#548992',
                    400: '#33727D',
                    500: '#004F5C',
                    600: '#004854',
                    700: '#003841',
                    800: '#002B33',
                    900: '#002127',
                },
                'secondary': {
                    100: '#F1BEC4',
                    200: '#EA7EA8',
                    300: '#E17280',
                    400: '#DB5668',
                    500: '#D22C42',
                    600: '#BF283C',
                    700: '#951F2F',
                    800: '#741824',
                    900: '#58121C',
                },
                'tertiary': {
                    100: '#FDF0F1',
                    200: '#F7BABE',
                    300: '#F39BA0',
                    400: '#F1888D',
                    500: '#ED6A71',
                    600: '#D86067',
                    700: '#A84B50',
                    800: '#823A3E',
                    900: '#642D2F',
                },
                'quaternary': {
                    100: '#EAF8F9',
                    200: '#9EDEE4',
                    300: '#72CFD7',
                    400: '#56C5D0',
                    500: '#2CB7C4',
                    600: '#28A7B2',
                    700: '#1F828B',
                    800: '#18656C',
                    900: '#124D52',
                },
                'grey': {
                    100: '#FBFBFB',
                    200: '#FBFBFB',
                    300: '#F5F6F5',
                    400: '#F2F3F2',
                    500: '#F2F1F1',
                    600: '#D0D1D0',
                    700: '#B1B2B1',
                    800: '#878787',
                    900: '#5C5D5C',
                },
                'wave': {
                    50: '#F2F8FF',
                    100: '#E6F0FF',
                    200: '#BFDAFF',
                    300: '#99C3FF',
                    400: '#4D96FF',
                    500: '#0069FF',
                    600: '#005FE6',
                    700: '#003F99',
                    800: '#002F73',
                    900: '#00204D',
                },
                'black': '#1E1E1E',
                'white': '#FFFFFF',
                'badge-bg-green': '#DEF7EC',
                'badge-text-green': '#124D52',
                'badge-text-red': '#771D1D',
                'badge-bg-red': '#FDE8E8',
             
            },
        }
    },
};