/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}", "./public/**/*.php"],
  theme: {
    extend: {
      colors: {
        oscuro: "#212529",
        azul: "#026bac",
        amarillo: "#face1d",
        negro: "#000000",
        azuluss: "#102B42",
      },
      fontFamily: {
        blogger: "'Blogger Sans', sans",
        sora: "'Sora', sans",
      },
      backgroundImage: {
        inicio: "url('../img/background_home.png')",
        "inicio-01": "url('../img/background_home_02.webp')",
        "inicio-02": "url('../img/puyehue/background-puyehue.webp')",
        ubicacion: "url('../img/lagosinhuella/mapa-ubicacion.svg')",
      },
      screens: {
        sm: "640px",
        // => @media (min-width: 640px) { ... }
        md: "769px",
        // => @media (min-width: 769px) { ... }
        lg: "992px",
        // => @media (min-width: 992px) { ... }
        xl: "1024px",
        // => @media (min-width: 1024px) { ... }
        "2xl": "1201px",
        // => @media (min-width: 1201px) { ... }
        "3xl": "1441px",
        // => @media (min-width: 1441px) { ... }
      },
    },
  },
  plugins: [],
};
