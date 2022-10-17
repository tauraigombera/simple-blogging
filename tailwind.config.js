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
            sans:['poppins', 'sans-serif']
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


