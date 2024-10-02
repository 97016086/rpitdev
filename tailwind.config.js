/** @type {import('tailwindcss').Config} */
export default {
  darkMode: ['class'],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'poppins': ['Poppins'],
    },
    extend: {},
  },
  plugins: [

  ],
}

