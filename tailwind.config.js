/** @type {import('tailwindcss').Config} */

function withOpacityValue(variable) {
  return ({ opacityValue }) => {
    if (opacityValue === undefined) {
      return `hsl(var(${variable}))`
    }
    return `hsl(var(${variable}) / ${opacityValue})`
  }
}

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
        primary: withOpacityValue('--primary'),
        mono: "#2d3441",
      },
      fontFamily: {
        montserrat: ["Montserrat", "system-ui", "Arial"]
      }
    },
  },
  daisyui: {
    themes: [
      {
        dark: {
          ...require('daisyui/src/theming/themes')['[data-theme=dark]'],
          'primary': 'hsl(0 100% 40%)',
          '--primary': '0 100% 40%',
        },
      },
    ],
  },
}
