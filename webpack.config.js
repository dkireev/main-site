const path = require("path");

module.exports = {
  mode: "production",
  entry: "./wp-content/themes/nord_theme/assets/src/app.js",
  output: {
    filename: "main.js",
    path: path.resolve(__dirname, "./wp-content/themes/nord_theme/assets/dist"),
  },
  module: {
    rules: [
      {
        test: /\.(css)$/,
        use: ["css-loader"],
      },
    ],
  },
};
