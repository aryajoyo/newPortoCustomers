// tailwind.config.js
const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      keyframes: {
        'slide-left': {
          from: { transform: 'translateX(0)' },
          to: { transform: 'translateX(-100%)' },
        },
        'fade-in': {
          from: { opacity: 0 },
          to: { opacity: 1 },
        },
      },
      animation: {
        'slide-left-infinite': 'slide-left 15s linear infinite',
        'fade-in': 'fade-in 2s ease-in-out forwards',
      },
    },
  },
  plugins: [],
};
