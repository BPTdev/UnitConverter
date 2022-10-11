/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./src/css/*.{html,js}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('flowbite/plugin')
  ],
}
