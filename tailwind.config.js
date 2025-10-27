/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            'brand-orange': '#ED6D31',
            'brand-blue': '#1E2748',
        },
        fontFamily: {
            'poppins': ['Poppins', 'sans-serif'],
            'rubik': ['Rubik', 'sans-serif'],
            'title': ['Poppins', 'sans-serif'],
        }
    },
  },
  plugins: [],
}
