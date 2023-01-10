/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js,php}"],
  theme: {
    fontFamily: {
      sans: ["Roboto", "Arial", "sans-serif"],
    },
    extend: {
      colors: {
        ytred: {
          100: "#ff0000",
        },
        ytlightgray: {
          100: "#f0f0f0",
          200: "#d9d9d9",
        },
        ytblack: {
          100: "#030303",
        },
        ytblue: {
          100: "#196bd6",
        },
        ytgray: {
          100: "#606060",
        },
      },
    },
  },
  plugins: [require("@tailwindcss/forms")],
};
