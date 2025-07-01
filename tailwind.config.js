/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
     animation: {
        "marquee": "loop-scroll 30s linear infinite",
      },
      keyframes: {
        "marquee": {
          from: { transform: "translateX(0)" },
          to: { transform: "translateX(-50%)" }, // cuma geser separuh
        },
      },
      screens: {
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
