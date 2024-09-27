module.exports = {
  content: [
    './public/**/*.php', 
    './views/**/*.php', 
    './assets/**/*.js'
  ],
  theme: {
    extend: {
      container: {
        center: true,
        padding: '2rem',
        screens: {
          sm: '100%',
          md: '100%',
          lg: '1024px',
          xl: '1280px',
          '2xl': '1550px',
        },
      },
    },
  },
  plugins: [],
}
