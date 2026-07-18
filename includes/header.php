<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($profile['name']) ?> — Portfolio</title>
<meta name="description" content="Portofolio personal UI/UX Designer & Web Developer dengan karya desain dan web development.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;800&family=Press+Start+2P&display=swap" rel="stylesheet">
<script>
  tailwind = {
    config: {
      theme: {
        extend: {
          colors: {
            primary: { DEFAULT: '#E45A9C', deep: '#C23B78', soft: '#FDE8F1' },
            accent: { gold: '#F2B7C9', violet: '#C77BC2' },
            canvas: { DEFAULT: '#FFF9FC', soft: '#FFF2F7' },
            surface: '#FFFFFF',
            hairline: '#F2D5E4',
            ink: '#4A2238',
            body: '#7A4D61',
            mute: '#A66B83',
            'on-primary': '#FFFFFF',
            success: '#E78DBE',
            warning: '#F7C6D8',
            error: '#D95E88',
            info: '#B47ACB',
          },
          fontFamily: {
            display: ['Outfit', 'sans-serif'],
            body: ['TT Commons Pro', 'sans-serif'],
            pixel: ["'Press Start 2P'", 'cursive'],
          },
          fontSize: {
            'display-xl': ['4rem', { lineHeight: '1.05', letterSpacing: '-0.02em', fontWeight: '700' }],
            'display-lg': ['3rem', { lineHeight: '1.1', letterSpacing: '-0.015em', fontWeight: '700' }],
            'display-md': ['2.25rem', { lineHeight: '1.15', letterSpacing: '-0.01em', fontWeight: '600' }],
            heading: ['1.75rem', { lineHeight: '1.2', letterSpacing: '-0.005em', fontWeight: '600' }],
            subheading: ['1.25rem', { lineHeight: '1.3', fontWeight: '600' }],
            'body-lg': ['1.125rem', { lineHeight: '1.6', fontWeight: '400' }],
            'body-md': ['1rem', { lineHeight: '1.6', fontWeight: '400' }],
            'body-sm': ['0.875rem', { lineHeight: '1.5', fontWeight: '400' }],
            'button-md': ['0.9375rem', { lineHeight: '1', letterSpacing: '0.01em', fontWeight: '600' }],
            caption: ['0.8125rem', { lineHeight: '1.4', letterSpacing: '0.01em', fontWeight: '500' }],
            'pixel-label': ['0.625rem', { lineHeight: '1.6', letterSpacing: '0.04em', fontWeight: '400' }],
          },
          boxShadow: {
            'elev-1': '0 1px 2px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA',
            'elev-2': '0 2px 6px rgba(16,32,26,0.08), 0 1px 2px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA',
            'elev-3': '0 6px 16px rgba(16,32,26,0.10), 0 2px 4px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA',
            'elev-4': '0 12px 24px rgba(16,32,26,0.14), 0 4px 8px rgba(16,32,26,0.08), inset 0 0 0 1px #D8E3DA',
            'elev-5': '0 24px 48px rgba(16,32,26,0.20), 0 8px 16px rgba(16,32,26,0.10), inset 0 0 0 1px #D8E3DA',
          },
          borderRadius: { sm: '4px', md: '8px', lg: '16px', pill: '999px' },
          backgroundImage: {
            'gradient-aurora': 'linear-gradient(135deg, #E45A9C 0%, #C77BC2 100%)',
            'gradient-spark': 'radial-gradient(circle, rgba(242,183,201,0.45) 0%, rgba(242,183,201,0) 70%)',
          },
        },
      },
    },
  };
</script>
<script src="https://cdn.tailwindcss.com"></script>
<script defer src="/assets/js/main.js"></script>
