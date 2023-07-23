/** @type {import('tailwindcss').Config} */

export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],
  plugins: [
    require("@tailwindcss/typography"),
    require("@tailwindcss/container-queries"),
    require("daisyui"),
  ],
  theme: {
    extend: {
      colors: {
        mono: "#2d3441",
      },
    },
  },
  daisyui: {
    themes: false,
  },
}
