/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      
      screens: {
         'ssm': '467px',
        hero: "600px",
      },
      fontFamily: {
        lexend: ['"Lexend Exa"', "sans-serif"],
        deto: ["Deto", "sans-serif"],
        lato: ["Lato", "sans-serif"],
      },
    },
  },
  plugins: [],
};
