module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        "orange-ec": "#FFA75A",
      },
      backgroundImage: (theme = {
        grass: "url('assets/svg/background.svg')",
      }),
    },
    fontFamily: {
      body: ["Lato", "sans-serif"],
      playFair: ["Playfair Display", "serif"],
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
