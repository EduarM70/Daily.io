/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    fontFamily: {
      'dmsans' : ['"DM Sans"', 'sans-serif']
    }
  },
  plugins: [
    require('flowbite/plugin')
  ]
}

