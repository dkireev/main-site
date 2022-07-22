module.exports = {
  content: ["../**/*.php"],
  theme: {
    extend: {
      colors: {
        accent: "#93c11f",
      },
    },
    customForms: (theme) => ({
      default: {
        input: {
          borderRadius: theme("borderRadius.lg"),
          backgroundColor: theme("colors.gray.200"),
          "&:focus": {
            backgroundColor: theme("colors.white"),
          },
        },
      },
    }),
  },
  plugins: [
    require("@tailwindcss/forms")({
      strategy: "base", // only generate global styles
      strategy: "class", // only generate classes}])],
    }),
  ],
};
