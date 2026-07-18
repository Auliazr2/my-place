<section id="skills" class="py-24 bg-[linear-gradient(180deg,_#FFF9FC_0%,_#FFF2F7_100%)]">
  <div class="container mx-auto max-w-7xl px-6 md:px-8 lg:px-12">
    <div class="max-w-2xl">
      <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-primary">Keterampilan Teknis</p>
      <h2 class="mt-4 font-display text-display-md text-ink">Kombinasi desain, pengembangan, dan analisis yang konsisten.</h2>
    </div>
    <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach ($skills as $skill): ?>
        <article class="rounded-lg border border-hairline bg-surface p-6 shadow-elev-1 transition hover:-translate-y-1 hover:shadow-elev-2">
          <div class="flex items-center gap-3">
            <img src="<?= htmlspecialchars($skill['icon']) ?>" alt="Ikon <?= htmlspecialchars($skill['name']) ?>" class="h-8 w-8" loading="lazy">
            <div>
              <p class="font-display text-subheading text-ink"><?= htmlspecialchars($skill['name']) ?></p>
              <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-mute"><?= htmlspecialchars($skill['category']) ?></p>
            </div>
          </div>
          <div class="mt-6 h-2 overflow-hidden rounded-none bg-canvas-soft">
            <div class="h-full rounded-none bg-gradient-aurora" style="width: <?= (int) $skill['level'] ?>%"></div>
          </div>
          <p class="mt-3 font-body text-body-sm text-body">Level penguasaan sekitar <?= (int) $skill['level'] ?>%.</p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
