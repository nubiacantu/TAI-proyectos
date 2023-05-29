/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*/*.blade.php",
  "./resources/**/*/*.js"],
  theme: {
    extend: {
      colors: {
        primary: '#fe3',
        secondary: '#cc715c',
      },
    },
  },
  plugins: [],
}

