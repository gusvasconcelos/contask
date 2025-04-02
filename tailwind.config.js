/** @type {import('tailwindcss').Config} */

import forms from '@tailwindcss/forms';
import daisyui from 'daisyui';

export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {},
    },
    plugins: [daisyui, forms],
    daisyui: {
        themes: ['nord'],
    },
};
