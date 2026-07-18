/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php', './assets/js/**/*.js'],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#1B4D3E',
          deep: '#123328',
          soft: '#DCEEE6',
        },
        accent: {
          gold: '#D4A72C',
          violet: '#4C1D95',
        },
        canvas: {
          DEFAULT: '#F7F9F5',
          soft: '#EEF3ED',
        },
        surface: '#FFFFFF',
        hairline: '#D8E3DA',
        ink: '#10201A',
        body: '#3A4A42',
        mute: '#7C8C83',
        'on-primary': '#F7F9F5',
        success: '#2F9E5B',
        warning: '#E8A93D',
        error: '#D0483A',
        info: '#3B7DD8',
      },
      fontFamily: {
        display: ['Outfit', 'sans-serif'],
        body: ['TT Commons Pro', 'sans-serif'],
        pixel: ["'Press Start 2P'", 'cursive'],
      },
      boxShadow: {
        'elev-1': '0 1px 2px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA',
        'elev-2': '0 2px 6px rgba(16,32,26,0.08), 0 1px 2px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA',
        'elev-3': '0 6px 16px rgba(16,32,26,0.10), 0 2px 4px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA',
        'elev-4': '0 12px 24px rgba(16,32,26,0.14), 0 4px 8px rgba(16,32,26,0.08), inset 0 0 0 1px #D8E3DA',
        'elev-5': '0 24px 48px rgba(16,32,26,0.20), 0 8px 16px rgba(16,32,26,0.10), inset 0 0 0 1px #D8E3DA',
      },
      borderRadius: {
        sm: '4px',
        md: '8px',
        lg: '16px',
        pill: '999px',
      },
      backgroundImage: {
        'gradient-aurora': 'linear-gradient(135deg, #1B4D3E 0%, #4C1D95 100%)',
        'gradient-spark': 'radial-gradient(circle, rgba(212,167,44,0.35) 0%, rgba(212,167,44,0) 70%)',
      },
    },
  },
  plugins: [],
};
