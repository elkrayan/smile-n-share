/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            'brand': '#D4EBEC',
            'body': '#2E4057',
            'orange': '#F7A180',
            'sky_blue': '#CCE7FF',
            'sky_blue-2': '#A1B3C2',
            'yellow': '#F7DD80',
            'yellow-2': '#D9B639',
            'purple': '#BF9EE0',
        },
        fontFamily: {
            sans: ['Poppins', 'sans-serif'],
            serif: ['Playfair Display', 'serif']
        },
        extend: {},
    },
    plugins: [],
}
