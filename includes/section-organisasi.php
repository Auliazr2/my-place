<section id="organization" class="bg-[linear-gradient(180deg,_#FFF9FC_0%,_#FFF2F7_100%)] py-24">
  <div class="container mx-auto max-w-7xl px-6 md:px-8 lg:px-12">
    <div class="max-w-2xl">
      <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-primary">Pengalaman Organisasi & Sosial</p>
      <h2 class="mt-4 font-display text-display-md text-ink">Jejak kontribusi yang menegaskan kemampuan bekerja sama dan mengelola komunikasi.</h2>
    </div>
    <div class="mt-10 grid gap-6 lg:grid-cols-2">
      <?php foreach ($organizations as $organization): ?>
        <article class="overflow-hidden rounded-lg border border-hairline bg-surface shadow-elev-2">
          <img src="<?= htmlspecialchars($organization['photo']) ?>" alt="Dokumentasi <?= htmlspecialchars($organization['name']) ?>" class="h-56 w-full object-cover" loading="lazy">
          <div class="p-6">
            <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-accent-violet"><?= htmlspecialchars($organization['period']) ?></p>
            <h3 class="mt-2 font-display text-heading text-ink"><?= htmlspecialchars($organization['name']) ?></h3>
            <p class="mt-1 font-body text-subheading text-primary"><?= htmlspecialchars($organization['role']) ?></p>
            <p class="mt-4 font-body text-body-md text-body"><?= htmlspecialchars($organization['description']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
