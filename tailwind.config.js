export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./app/Livewire/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        laravel: {
          bg: '#0f0f11',
          card: '#18181b',
          red: '#FF2D20',
        }
      }
    },
  },
  plugins: [],
}
