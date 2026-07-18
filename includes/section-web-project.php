<section id="web-project" class="py-24 bg-[linear-gradient(180deg,_#FFF2F7_0%,_#FFF9FC_100%)]">
  <div class="container mx-auto max-w-7xl px-6 md:px-8 lg:px-12">
    <div class="max-w-2xl">
      <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-primary">Proyek Web Development</p>
      <h2 class="mt-4 font-display text-display-md text-ink">Website yang dibangun dengan fokus performa, struktur, dan kejelasan.</h2>
    </div>
    <div class="mt-10 grid gap-6 lg:grid-cols-2">
      <?php foreach ($webProjects as $project): ?>
        <article class="group rounded-lg border border-hairline bg-surface p-6 shadow-elev-2 transition hover:-translate-y-1 hover:shadow-elev-3">
          <img src="<?= htmlspecialchars($project['screenshot']) ?>" alt="Tangkapan layar <?= htmlspecialchars($project['title']) ?>" class="h-56 w-full rounded-md object-cover" loading="lazy">
          <div class="mt-6">
            <div class="flex items-center justify-between gap-3">
              <h3 class="font-display text-heading text-ink"><?= htmlspecialchars($project['title']) ?></h3>
              <span class="rounded-pill border border-accent-gold/30 bg-accent-gold/10 px-3 py-1 font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-accent-gold"><?= htmlspecialchars($project['status']) ?></span>
            </div>
            <p class="mt-3 font-body text-body-md text-body"><?= htmlspecialchars($project['description']) ?></p>
            <div class="mt-4 flex flex-wrap gap-2">
              <?php foreach ($project['tech_stack'] as $tech): ?>
                <span class="rounded-sm border border-hairline bg-canvas-soft px-3 py-1 font-body text-body-sm text-ink"><?= htmlspecialchars($tech) ?></span>
              <?php endforeach; ?>
            </div>
            <div class="mt-6 flex gap-3">
              <a href="<?= htmlspecialchars($project['demo_url']) ?>" class="inline-flex items-center rounded-pill bg-primary px-5 py-2 text-sm font-semibold text-on-primary hover:bg-primary-deep">Demo</a>
              <a href="<?= htmlspecialchars($project['github_url']) ?>" class="inline-flex items-center rounded-pill border border-primary px-5 py-2 text-sm font-semibold text-primary hover:bg-primary-soft">GitHub</a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
