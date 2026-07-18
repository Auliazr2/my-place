<header id="home" class="min-h-screen flex items-center bg-canvas relative overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(242,183,201,0.35),_transparent_45%)]"></div>
  <div class="container mx-auto px-6 py-24 md:px-8 lg:px-12 max-w-7xl relative z-10">
    <div class="grid items-center gap-12 lg:grid-cols-[1.15fr_0.85fr]">
      <div class="max-w-2xl">
        <p class="inline-flex items-center rounded-pill border border-pink-200 bg-white/80 px-4 py-2 font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-primary shadow-elev-1">
          Arcane Grid / Portfolio
        </p>
        <h1 class="mt-6 font-display text-display-xl text-ink leading-none">
          Merancang pengalaman digital, satu piksel pada satu waktu.
        </h1>
        <p class="mt-6 font-body text-body-lg text-body max-w-xl">
          <?= htmlspecialchars($profile['bio']) ?>
        </p>
        <div class="mt-8 flex flex-wrap gap-4">
          <a href="#case-study" class="inline-flex items-center justify-center rounded-pill bg-primary px-7 py-3 text-button-md font-semibold text-on-primary transition hover:bg-primary-deep">
            Lihat Karya
          </a>
          <a href="#contact" class="inline-flex items-center justify-center rounded-pill border border-primary px-7 py-3 text-button-md font-semibold text-primary transition hover:bg-primary-soft">
            Hubungi Saya
          </a>
        </div>
      </div>
      <div class="flex justify-center lg:justify-end">
        <div class="relative">
          <div class="absolute inset-0 rounded-full bg-gradient-aurora opacity-20 blur-3xl"></div>
          <img src="<?= htmlspecialchars($profile['photo']) ?>" alt="Foto profil <?= htmlspecialchars($profile['name']) ?>" class="relative h-[360px] w-[360px] rounded-full border-[8px] border-primary/25 object-cover shadow-elev-4" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</header>
