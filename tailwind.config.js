const defaultTheme = require('tailwindcss/defaultTheme');

// /** @type {import('tailwindcss').Config} */
// module.exports = {
//     content: [
//         './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
//         './storage/framework/views/*.php',
//         './resources/views/**/*.blade.php',
//     ],
//
//     theme: {
//         extend: {
//             fontFamily: {
//                 sans: ['Nunito', ...defaultTheme.fontFamily.sans],
//             },
//         },
//     },
//
//     plugins: [require('@tailwindcss/forms')],
// };

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
        },
        fontFamily:{
            sans:['poppins', 'sans-serif'],
        },
        extend: {
            colors:{
                darkBlue: '#0C2853',
                orange: '#FF4820',
                lightOrange: '#FF7051',
                lightGray: '#595B5F',
                middleLightGray: '#f2f2f2',
                veryLightGray: '#E7E7E7',
            }
        },
    },
    plugins: [],
}

