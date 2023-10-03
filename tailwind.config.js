/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        "berge" : "#000",
        "withe" : "#fff",
        "webbleu"  : '#0295a9',
        "webjaune":'#fdd037',
        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
      },
      screens:{
        sm:"400px",
        md:"768px",
        lg:"976",
        xl:"1440px"
      },
      width:{
        "128" : '100%'
      }
      
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require("@tailwindcss/forms") 
  ],
}