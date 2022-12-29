/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        ],
    theme: {
        container: {
            center: true,
            screens: {
                xl: '1170px'

            },
        },
        fontFamily:{
                'sans': ['Inter'],
                'serif': ['Inter'],
                'mono': ['Inter'],
                'display': ['Inter'],
                'body': ['Inter'],
        },
        extend: {
          colors: {
            myBlue: '#217BF4',
          }
        }
      },
    plugins: [],
}
