<section id="about" class="bg-[linear-gradient(180deg,_#FFF2F7_0%,_#FFF9FC_100%)] py-24">
  <div class="container mx-auto max-w-7xl px-6 md:px-8 lg:px-12">
    <div class="grid items-center gap-10 lg:grid-cols-[0.9fr_1.1fr]">
      <div class="overflow-hidden rounded-lg border border-hairline bg-surface p-4 shadow-elev-2">
        <img src="<?= htmlspecialchars($profile['photo']) ?>" alt="Foto <?= htmlspecialchars($profile['name']) ?>" class="h-[360px] w-full rounded-md object-cover" loading="lazy">
      </div>
      <div>
        <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-primary">Tentang Saya</p>
        <h2 class="mt-4 font-display text-display-md text-ink">Membangun produk yang terasa rapi, jelas, dan punya karakter.</h2>
        <p class="mt-5 font-body text-body-lg text-body">
          Saya adalah <?= htmlspecialchars($profile['headline']) ?> yang fokus pada kualitas pengalaman pengguna dan implementasi yang tetap ringan. Saya menyukai proses yang terstruktur: riset, desain, pengujian, lalu eksekusi yang presisi.
        </p>
        <div class="mt-8 grid gap-4 sm:grid-cols-2">
          <div class="rounded-lg border border-hairline bg-surface p-5 shadow-elev-1">
            <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-accent-gold">Focus</p>
            <p class="mt-3 font-body text-body-md text-body">UI/UX systems, clean interfaces, and scalable frontend implementation.</p>
          </div>
          <div class="rounded-lg border border-hairline bg-surface p-5 shadow-elev-1">
            <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-accent-violet">Base</p>
            <p class="mt-3 font-body text-body-md text-body">Berdomisili di <?= htmlspecialchars($profile['location']) ?> dan terbuka untuk proyek kolaboratif.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
