<section id="case-study" class="bg-canvas-soft py-24">
  <div class="container mx-auto max-w-7xl px-6 md:px-8 lg:px-12">
    <div class="max-w-2xl">
      <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-primary">Studi Kasus UI/UX</p>
      <h2 class="mt-4 font-display text-display-md text-ink">Proses desain yang terbuka, terarah, dan mudah dipahami.</h2>
    </div>
    <div class="mt-10 grid gap-6 lg:grid-cols-2">
      <?php foreach ($caseStudies as $study): ?>
        <article class="group relative rounded-lg border border-hairline bg-surface p-6 shadow-elev-2 transition hover:-translate-y-1 hover:shadow-elev-3">
          <div class="absolute inset-x-4 inset-y-4 border-2 border-primary/60"></div>
          <img src="<?= htmlspecialchars($study['image']) ?>" alt="Studi kasus <?= htmlspecialchars($study['title']) ?>" class="relative z-10 h-56 w-full rounded-md object-cover" loading="lazy">
          <div class="relative z-10 mt-6">
            <h3 class="font-display text-heading text-ink"><?= htmlspecialchars($study['title']) ?></h3>
            <p class="mt-3 font-body text-body-md text-body"><?= htmlspecialchars($study['summary']) ?></p>
            <div class="mt-4 space-y-2 text-body-sm text-body">
              <p><span class="font-semibold text-ink">Masalah:</span> <?= htmlspecialchars($study['problem']) ?></p>
              <p><span class="font-semibold text-ink">Proses:</span> <?= htmlspecialchars($study['process']) ?></p>
              <p><span class="font-semibold text-ink">Solusi:</span> <?= htmlspecialchars($study['solution']) ?></p>
            </div>
            <div class="mt-5 flex flex-wrap gap-2">
              <?php foreach ($study['tools'] as $tool): ?>
                <span class="rounded-pill border border-primary/20 bg-primary-soft px-3 py-1 font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-primary"><?= htmlspecialchars($tool) ?></span>
              <?php endforeach; ?>
            </div>
            <a href="<?= htmlspecialchars($study['link']) ?>" class="mt-6 inline-flex items-center text-sm font-semibold text-primary hover:text-primary-deep">Lihat detail →</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
