module.exports = {
  mode: 'jit',
  content: [
    "./**/*.php",
    "./src/**/*.js",
  ],
  theme: {
    zIndex: {
      '1': 1,
      '2': 2,
      '10': 10,
    },
    listStyleType: {
      auto: 'auto',
      none: 'none',
      disc: 'disc',
      decimal: 'decimal',
      square: 'square',
    },
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1200px',
      '2xl': '1536px',
    },
    container: {
      center: true,
      padding: '15px',
    },
    extend: {
      lineHeight: {
        '12': '3rem',
        '16': '4rem',
      },
      colors: {
        'main-dark': '#262627',
        'primary': '#00b7bd',
      },
      fontSize: {
        // '20xl': '20rem'
      },
      fontFamily: {
        'heading': 'Playfair Display',
      }
    },
  },
  variants: {
    extend: {},
  },
  // plugins: [require('@tailwindcss/typography')],
}
