<section id="links" class="py-24">
  <div class="container mx-auto max-w-7xl px-6 md:px-8 lg:px-12">
    <div class="rounded-2xl border border-hairline bg-surface p-8 shadow-elev-3">
      <div class="max-w-2xl">
        <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-primary">Tautan Portofolio Eksternal</p>
        <h2 class="mt-4 font-display text-display-md text-ink">Akses karya dan jejak profesional saya dari satu tempat.</h2>
      </div>
      <div class="mt-8 flex flex-wrap gap-4">
        <?php foreach ($externalLinks as $link): ?>
          <a href="<?= htmlspecialchars($link['url']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 rounded-pill border border-pink-200 bg-white px-5 py-3 font-body text-body-md text-ink transition hover:bg-primary-soft hover:-translate-y-0.5">
            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-gradient-aurora text-sm font-semibold text-on-primary"><?= htmlspecialchars($link['icon']) ?></span>
            <?= htmlspecialchars($link['platform']) ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
