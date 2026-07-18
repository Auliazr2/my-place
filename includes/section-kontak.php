<section id="contact" class="bg-[linear-gradient(180deg,_#FFF2F7_0%,_#FFF9FC_100%)] py-24">
  <div class="container mx-auto max-w-7xl px-6 md:px-8 lg:px-12">
    <div class="grid gap-8 lg:grid-cols-[0.95fr_1.05fr]">
      <div>
        <p class="font-[Press_Start_2P] text-[10px] uppercase tracking-[0.24em] text-primary">Kontak</p>
        <h2 class="mt-4 font-display text-display-md text-ink">Mari berdiskusi tentang ide, kolaborasi, atau kesempatan kerja.</h2>
        <p class="mt-5 font-body text-body-lg text-body">Isi formulir berikut dan saya akan menghubungi Anda kembali secepat mungkin.</p>
      </div>
      <form action="/process/contact.php" method="post" class="rounded-lg border border-hairline bg-surface p-6 shadow-elev-2">
        <div class="mb-4">
          <label for="name" class="mb-2 block font-body text-body-sm font-semibold text-ink">Nama</label>
          <input id="name" name="name" type="text" required class="w-full rounded-sm border border-hairline px-4 py-3 font-body text-body-md text-ink focus:border-accent-gold focus:outline-none focus:ring-[3px] focus:ring-accent-gold/35" placeholder="Nama Anda">
        </div>
        <div class="mb-4">
          <label for="email" class="mb-2 block font-body text-body-sm font-semibold text-ink">Email</label>
          <input id="email" name="email" type="email" required class="w-full rounded-sm border border-hairline px-4 py-3 font-body text-body-md text-ink focus:border-accent-gold focus:outline-none focus:ring-[3px] focus:ring-accent-gold/35" placeholder="nama@email.com">
        </div>
        <div class="mb-6">
          <label for="message" class="mb-2 block font-body text-body-sm font-semibold text-ink">Pesan</label>
          <textarea id="message" name="message" required rows="5" class="w-full rounded-sm border border-hairline px-4 py-3 font-body text-body-md text-ink focus:border-accent-gold focus:outline-none focus:ring-[3px] focus:ring-accent-gold/35" placeholder="Tuliskan pesan Anda..."></textarea>
        </div>
        <button type="submit" class="inline-flex items-center justify-center rounded-pill bg-primary px-6 py-3 font-body text-button-md font-semibold text-on-primary transition hover:bg-primary-deep">Kirim Pesan</button>
      </form>
    </div>
  </div>
</section>
