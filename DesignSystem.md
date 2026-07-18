# Design System — Portofolio
## "Arcane Grid" — Pixel Wizarding Academy, Rendered Clean

**Versi Dokumen:** 1.0
**Tanggal:** 18 Juli 2026
**Disusun oleh:** Senior UI/UX Designer & Lead Frontend Engineer (AI-assisted)
**Basis Referensi:** Struktur token & penamaan mengikuti standar industri (Vercel/Stripe-style), dikombinasikan dengan bahasa visual pixel-art bertema akademi sihir.

---

### 1. Overview & Tipografi

**Overview Brand**

*Arcane Grid* adalah interpretasi modern dari dunia akademi sihir bergaya pixel — dibayangkan seolah antarmuka ini adalah "terminal seorang penyihir digital": rapi, presisi, dan bersih layaknya produk SaaS masa kini, namun tetap menyimpan jejak dunia sihir melalui detail-detail kecil yang disiplin. Alih-alih menumpuk elemen 8-bit di setiap sudut (yang akan terasa ramai dan kekanak-kanakan), sistem ini memperlakukan estetika pixel sebagai **aksen bertanda tangan** — hadir pada bingkai kartu, ikon, badge, dan indikator progres — sementara fondasi layout, spacing, dan tipografi tetap mengikuti kaidah desain modern yang lapang dan mudah dipindai mata.

Filosofi warnanya menghindari klise "parchment cream + terracotta" yang sering muncul di desain bertema fantasi/AI-generated. Sebagai gantinya, palet dibangun dari **emerald gelap (tinta pena burung hantu)**, **violet arcane (aura sihir)**, dan **emas pudar (aksen tongkat/wax seal)** di atas kanvas putih sejuk berundertone mint — kombinasi yang terasa segar, presisi, dan tetap "modern web app", bukan "buku dongeng lama". Elemen dekoratif pixel (bingkai bersudut patah/stepped-corner, ikon sprite, progress bar bersegmen) muncul secukupnya untuk menyampaikan misi produk: menunjukkan bahwa pemiliknya adalah seorang craftsman digital yang detail-oriented — teliti hingga ke piksel terkecil, namun tetap menghasilkan karya yang bersih dan profesional.

**Font Family**

| Peran | Font | Kegunaan |
|---|---|---|
| **Font 1 — Dekoratif/Editorial** | **Outfit** (geometric sans, weight 500–800) | Hero Headline, Display, Judul Section (H1–H2) — memberi kesan modern, tegas, dan lapang |
| **Font 2 — Fungsional** | **TT Commons Pro** (humanist grotesk, weight 400–700) | Sub-heading (H3–H6), Body text, UI label, Button, Form, Navigasi |
| **Font Aksen — Pixel Signature** | **"Press Start 2P"** *(via Google Fonts, digunakan sangat terbatas)* | HANYA untuk eyebrow/label kecil bernuansa pixel (contoh: badge status, angka versi, tag kategori skill) — tidak pernah dipakai untuk paragraf atau heading utama |

> Catatan implementasi: Font Aksen Pixel sengaja dibatasi pemakaiannya (maksimal 1–2 kata, huruf kapital, ukuran kecil) agar nuansa "pixel Harry Potter" terasa sebagai detail tanda tangan brand, bukan mendominasi keterbacaan halaman.

**Hierarki Tipografi**

| Token | Font | Size (px/rem) | Weight | Line-height | Letter-spacing | Kegunaan |
|---|---|---|---|---|---|---|
| `display-xl` | Outfit | 64px / 4rem | 700 | 1.05 | -0.02em | Hero headline halaman Beranda |
| `display-lg` | Outfit | 48px / 3rem | 700 | 1.1 | -0.015em | Judul section utama (H1) |
| `display-md` | Outfit | 36px / 2.25rem | 600 | 1.15 | -0.01em | Judul card besar / H2 |
| `heading` | Outfit | 28px / 1.75rem | 600 | 1.2 | -0.005em | H3, judul sub-section |
| `subheading` | TT Commons Pro | 20px / 1.25rem | 600 | 1.3 | 0 | H4–H5, judul card, label grup |
| `body-lg` | TT Commons Pro | 18px / 1.125rem | 400 | 1.6 | 0 | Paragraf pembuka, deskripsi hero |
| `body-md` | TT Commons Pro | 16px / 1rem | 400 | 1.6 | 0 | Body text standar |
| `body-sm` | TT Commons Pro | 14px / 0.875rem | 400 | 1.5 | 0 | Deskripsi card, teks pendukung |
| `button-md` | TT Commons Pro | 15px / 0.9375rem | 600 | 1 | 0.01em | Label tombol |
| `caption` | TT Commons Pro | 13px / 0.8125rem | 500 | 1.4 | 0.01em | Metadata, timestamp, footnote |
| `pixel-label` | Press Start 2P | 10px / 0.625rem | 400 | 1.6 | 0.04em | Badge status, tag skill, eyebrow pixel |

**Prinsip Tipografi (Do's & Don'ts)**

- ✅ Gunakan `display-xl`/`display-lg` (Outfit) hanya pada satu elemen per halaman — hero headline — agar hierarkinya tetap jelas dan tidak bersaing.
- ✅ `pixel-label` selalu ditulis UPPERCASE dengan letter-spacing positif agar terbaca sebagai "badge", bukan kalimat.
- ✅ Gunakan tracking negatif (`-0.01em` hingga `-0.02em`) hanya pada ukuran display Outfit ≥28px agar terasa rapat dan tegas; jangan diterapkan pada body text.
- ❌ Jangan pernah menulis paragraf panjang menggunakan Press Start 2P — pixel font hanya untuk label ≤2 kata.
- ❌ Jangan mencampur Outfit dan TT Commons Pro dalam satu baris kalimat yang sama.
- ❌ Jangan gunakan huruf kapital penuh (uppercase) pada `body-md`/`body-lg` — cukup pada `button-md`, `pixel-label`, dan `caption` eyebrow.

---

### 2. Sistem Warna (Colors Token)

**Brand & Aksen**

| Token | Hex | Keterangan |
|---|---|---|
| `color-primary` | `#1B4D3E` | Emerald gelap — warna utama brand, dipakai pada tombol primary, link aktif, ikon utama |
| `color-primary-deep` | `#123328` | Hover/active state dari primary |
| `color-primary-soft` | `#DCEEE6` | Soft highlight background (badge, chip terpilih, hover row) |
| `color-accent-gold` | `#D4A72C` | Aksen emas — dipakai sangat terbatas: fokus ring, ikon bintang/highlight, wax-seal icon |
| `color-accent-violet` | `#4C1D95` | Violet arcane — pasangan gradient dan aksen pada elemen "magis" (loading, hover glow) |

**Surface**

| Token | Hex | Keterangan |
|---|---|---|
| `color-canvas` | `#F7F9F5` | Latar belakang utama halaman — putih sejuk dengan sedikit undertone mint |
| `color-canvas-soft` | `#EEF3ED` | Latar section alternatif (zebra section background) |
| `color-surface-card` | `#FFFFFF` | Latar kartu, modal, dropdown |
| `color-hairline` | `#D8E3DA` | Border tipis/divider antar elemen |

**Teks**

| Token | Hex | Keterangan |
|---|---|---|
| `color-ink` | `#10201A` | Teks heading, warna paling gelap |
| `color-body` | `#3A4A42` | Teks paragraf/body |
| `color-mute` | `#7C8C83` | Teks sekunder, placeholder, caption redup |
| `color-on-primary` | `#F7F9F5` | Teks/ikon di atas background primary (tombol, badge gelap) |

**Semantik & Status**

| Token | Hex | Keterangan |
|---|---|---|
| `color-success` | `#2F9E5B` | Berhasil (form terkirim, aksi sukses) |
| `color-warning` | `#E8A93D` | Peringatan/proses berjalan |
| `color-error` | `#D0483A` | Gagal/validasi error |
| `color-info` | `#3B7DD8` | Informasi netral |

*Tabel Pemetaan Khusus — "Status Proyek" (aksi utama produk portofolio: menampilkan status karya)*

| Status | Token Warna | Background Chip | Keterangan |
|---|---|---|---|
| Live / Rilis | `color-success` | `#E4F5EA` | Proyek sudah live & dapat diakses publik |
| Dalam Pengembangan | `color-warning` | `#FDF1DC` | Proyek masih progres, ditandai transparan ke pengunjung |
| Studi Kasus / Arsip | `color-info` | `#E6EEFB` | Proyek riset/case study tanpa demo langsung |

**Brand Gradient**

| Token | Definisi CSS | Kegunaan |
|---|---|---|
| `gradient-aurora` | `linear-gradient(135deg, #1B4D3E 0%, #4C1D95 100%)` | Gradient utama brand — hero background overlay, tombol CTA besar, avatar ring |
| `gradient-spark` | `radial-gradient(circle, rgba(212,167,44,0.35) 0%, rgba(212,167,44,0) 70%)` | Glow halus di belakang elemen saat hover (efek "percikan sihir") |

---

### 3. Layout, Elevasi, & Bentuk

**Sistem Spacing** (basis kelipatan 4px)

| Token | Nilai |
|---|---|
| `space-xxs` | 4px |
| `space-xs` | 8px |
| `space-sm` | 12px |
| `space-md` | 16px |
| `space-lg` | 24px |
| `space-xl` | 32px |
| `space-2xl` | 48px |
| `space-3xl` | 64px |
| `space-4xl` | 96px |
| `space-5xl` / `section` | 128px |

**Grid & Container**

| Breakpoint | Lebar Layar | Max-width Container | Kolom Grid |
|---|---|---|---|
| Mobile | < 640px | 100% (padding 16px) | 4 kolom |
| Tablet | 640–1023px | 100% (padding 32px) | 8 kolom |
| Desktop | 1024–1439px | 1280px | 12 kolom |
| Wide | ≥ 1440px | 1440px | 12 kolom |

**Elevasi & Bayangan (Elevation)**

Teknik: stacked shadow (2 lapis tipis) + inset hairline ring 1px agar tepi tetap tajam khas pixel-grid.

| Level | Contoh Kegunaan | CSS |
|---|---|---|
| `elev-0` | Flat, elemen menyatu dengan canvas | `box-shadow: none;` |
| `elev-1` | Card list item, input default | `box-shadow: 0 1px 2px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA;` |
| `elev-2` | Card standar, dropdown | `box-shadow: 0 2px 6px rgba(16,32,26,0.08), 0 1px 2px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA;` |
| `elev-3` | Card hover, navbar sticky | `box-shadow: 0 6px 16px rgba(16,32,26,0.10), 0 2px 4px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA;` |
| `elev-4` | Popover, tooltip, toast | `box-shadow: 0 12px 24px rgba(16,32,26,0.14), 0 4px 8px rgba(16,32,26,0.08), inset 0 0 0 1px #D8E3DA;` |
| `elev-5` | Modal window | `box-shadow: 0 24px 48px rgba(16,32,26,0.20), 0 8px 16px rgba(16,32,26,0.10), inset 0 0 0 1px #D8E3DA;` |

**Border Radius Scale**

| Token | Nilai | Komponen Pencocokan |
|---|---|---|
| `radius-none` | 0px | Bingkai pixel (Spell Rune Frame), badge pixel-label |
| `radius-sm` | 4px | Input field, chip kecil |
| `radius-md` | 8px | Card standar, button secondary |
| `radius-lg` | 16px | Card marketing besar, modal |
| `radius-pill` | 999px | Button primary/secondary pill, tab chip |
| `radius-full` | 50% | Avatar, icon button bulat |

> Catatan desain: `radius-none` sengaja dipertahankan pada elemen bertema pixel (bingkai kartu, badge status) sebagai kontras yang disengaja terhadap elemen lain yang lembut membulat (`radius-md`–`radius-pill`) — ketegangan visual inilah yang menjadi tanda tangan brand.

---

### 4. Spesifikasi Komponen UI Standar

**Tombol (Buttons)**

| Komponen | Ukuran | Padding | Radius | Warna Default | Hover | Active | Focus |
|---|---|---|---|---|---|---|---|
| Primary marketing pill | Height 48px | 16px 28px | `radius-pill` | `bg: color-primary`, `text: color-on-primary` | `bg: color-primary-deep` | scale 0.98 | ring 2px `color-accent-gold` offset 2px |
| Secondary pill | Height 44px | 14px 24px | `radius-pill` | `border 1.5px color-primary`, `text: color-primary`, bg transparan | `bg: color-primary-soft` | `bg: color-primary-soft` darker 5% | ring 2px `color-accent-gold` |
| Small nav button | Height 36px | 8px 16px | `radius-md` | `text: color-ink`, bg transparan | `bg: color-canvas-soft` | `bg: color-primary-soft` | ring 2px `color-accent-gold` |
| Danger button | Height 44px | 14px 24px | `radius-pill` | `bg: color-error`, `text: color-on-primary` | darken 8% | scale 0.98 | ring 2px `color-error` opacity 40% |
| Tab ghost/chip | Height 36px | 8px 16px | `radius-pill` | `text: color-mute`, bg transparan | `text: color-ink`, `bg: color-canvas-soft` | `bg: color-primary-soft`, `text: color-primary` | outline none, underline 2px |

**Kartu (Cards)**

| Komponen | Padding | Radius | Elevasi | Keterangan Khusus |
|---|---|---|---|---|
| Card marketing (hero project) | 32px | `radius-lg` | `elev-2`, hover → `elev-3` | Dibungkus Spell Rune Frame (lihat §5) |
| Card dashboard/statistik | 20px | `radius-md` | `elev-1` | Angka besar `display-md`, label `caption` |
| Card list item | 16px | `radius-md` | `elev-1`, hover → `bg: color-canvas-soft` | Layout horizontal (ikon + teks + chevron) |
| Card soft | 24px | `radius-lg` | `elev-0` (border `color-hairline` only) | Untuk konten sekunder non-interaktif |

**Form Input**

| Komponen | Spesifikasi |
|---|---|
| Input teks standar | Height 44px, padding 12px 16px, `radius-sm`, border 1px `color-hairline`, font `body-md`, placeholder `color-mute` |
| Textarea | Min-height 120px, padding 12px 16px, `radius-sm`, resize vertical only |
| Dropdown select | Sama seperti input teks + ikon chevron 16px kanan, `color-mute` |
| Focus ring | `box-shadow: 0 0 0 3px rgba(212,167,44,0.35); border-color: color-accent-gold;` — konsisten di semua field |
| Label input | `body-sm`, weight 600, `color-ink`, margin-bottom 6px |
| Pesan error | `caption`, `color-error`, disertai ikon exclamation 14px, margin-top 4px |

**Navigasi**

| Komponen | Spesifikasi |
|---|---|
| Sticky Navbar atas | Height 72px, `bg: rgba(247,249,245,0.85)` + `backdrop-blur(12px)`, border-bottom 1px `color-hairline`, elevasi `elev-1` saat discroll |
| Sidebar navigasi | Width 260px, `bg: color-surface-card`, padding 24px 16px, border-right 1px `color-hairline` *(disiapkan untuk future dashboard admin)* |
| Item menu (Hover) | `bg: color-canvas-soft`, `radius-sm`, padding 10px 12px |
| Item menu (Active) | `bg: color-primary-soft`, `text: color-primary`, border-left 3px `color-primary` |
| Footer halaman | `bg: color-ink`, `text: color-on-primary` opacity varian, padding vertikal `space-3xl` |

**Tabel Data & Modal**

| Komponen | Spesifikasi |
|---|---|
| Header tabel | `bg: color-canvas-soft`, `caption` uppercase, padding 12px 16px, border-bottom 2px `color-hairline` |
| Cell padding | 14px 16px, `body-sm` |
| Hover row | `bg: color-canvas-soft` transisi 120ms |
| Modal window | Max-width 560px, `radius-lg`, `elev-5`, padding 32px, overlay `bg: rgba(16,32,26,0.55)` + backdrop-blur 4px; dibingkai tipis Spell Rune corner accent di 2 sudut (kiri-atas & kanan-bawah) sebagai identitas brand |

---

### 5. Komponen Khusus & Unik Produk

**1. Spell Rune Card Frame** *(bingkai kartu bersudut pixel)*

Bingkai dekoratif berbentuk "L" bersudut patah (stepped/pixel corner, 8px step) di keempat sudut card — terinspirasi dari kotak dialog game RPG piksel. Digunakan membungkus **Card Studi Kasus UI/UX** dan **Card Proyek Web Development** untuk memberi kesan "karya ini sedang dipamerkan di etalase khusus".
- Warna garis: `color-primary` (default), berubah `color-accent-gold` saat hover.
- Ketebalan garis: 2px, `radius-none` (tegas, tidak membulat).
- Ukuran sudut: 20px × 20px, offset 8px dari tepi card.
- Tidak menutupi konten gambar/screenshot di dalamnya — murni elemen dekoratif di lapisan atas (pseudo-element `::before`/`::after`).

**2. Skill Rune Chip** *(badge keterampilan bergaya item inventaris)*

Chip kecil untuk menampilkan tiap tools/skill (Laravel, Figma, SPSS, dll.) — meniru tampilan "item inventaris" pada game piksel: ikon 20×20px di kiri + label `pixel-label` di kanan, dibungkus kotak `radius-sm` dengan border 1.5px.
- Kategori warna border: Design → `color-accent-violet`; Development → `color-primary`; Data/Analisis → `color-info`.
- Hover: elevasi naik ke `elev-1` + sedikit translate-y(-2px), transisi 150ms ease-out.

**3. Mana Bar Skill Meter** *(indikator level keahlian bergaya health/mana bar)*

Progress bar bersegmen (5–8 segmen kotak kecil bercelah 2px, bukan bar solid) untuk merepresentasikan level penguasaan skill secara visual tanpa terkesan generik "progress bar SaaS".
- Segmen terisi: `gradient-aurora`; segmen kosong: `color-canvas-soft` dengan border `color-hairline`.
- Tinggi segmen 8px, radius `radius-none`, celah antar segmen 2px.
- Digunakan sebagai alternatif visual pada section Keterampilan Teknis (opsional, berdampingan dengan Skill Rune Chip).

**4. Owl Post Toast** *(notifikasi konfirmasi formulir kontak)*

Toast notifikasi yang muncul dari sudut kanan-bawah layar setelah formulir kontak berhasil/gagal terkirim — didesain seperti "gulungan surat" tiba, dengan ikon wax-seal pixel (lingkaran kecil `color-accent-gold`) di kiri toast.
- Container: `bg: color-surface-card`, `radius-md`, `elev-4`, padding 16px 20px, lebar max 360px.
- Border-left 4px sesuai status (`color-success`/`color-error`).
- Animasi masuk: slide-up + fade 240ms ease-out; auto-dismiss 4 detik dengan progress underline tipis 2px yang mengecil (memakai `gradient-aurora`).

---

### 6. Implementasi Tailwind CSS

**Konfigurasi `tailwind.config.js`**

```javascript
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./assets/js/**/*.js"],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: "#1B4D3E",
          deep: "#123328",
          soft: "#DCEEE6",
        },
        accent: {
          gold: "#D4A72C",
          violet: "#4C1D95",
        },
        canvas: {
          DEFAULT: "#F7F9F5",
          soft: "#EEF3ED",
        },
        surface: "#FFFFFF",
        hairline: "#D8E3DA",
        ink: "#10201A",
        body: "#3A4A42",
        mute: "#7C8C83",
        "on-primary": "#F7F9F5",
        success: "#2F9E5B",
        warning: "#E8A93D",
        error: "#D0483A",
        info: "#3B7DD8",
      },
      fontFamily: {
        display: ["Outfit", "sans-serif"],
        body: ["TT Commons Pro", "sans-serif"],
        pixel: ["'Press Start 2P'", "cursive"],
      },
      fontSize: {
        "display-xl": ["4rem", { lineHeight: "1.05", letterSpacing: "-0.02em", fontWeight: "700" }],
        "display-lg": ["3rem", { lineHeight: "1.1", letterSpacing: "-0.015em", fontWeight: "700" }],
        "display-md": ["2.25rem", { lineHeight: "1.15", letterSpacing: "-0.01em", fontWeight: "600" }],
        heading: ["1.75rem", { lineHeight: "1.2", letterSpacing: "-0.005em", fontWeight: "600" }],
        subheading: ["1.25rem", { lineHeight: "1.3", fontWeight: "600" }],
        "body-lg": ["1.125rem", { lineHeight: "1.6", fontWeight: "400" }],
        "body-md": ["1rem", { lineHeight: "1.6", fontWeight: "400" }],
        "body-sm": ["0.875rem", { lineHeight: "1.5", fontWeight: "400" }],
        "button-md": ["0.9375rem", { lineHeight: "1", letterSpacing: "0.01em", fontWeight: "600" }],
        caption: ["0.8125rem", { lineHeight: "1.4", letterSpacing: "0.01em", fontWeight: "500" }],
        "pixel-label": ["0.625rem", { lineHeight: "1.6", letterSpacing: "0.04em", fontWeight: "400" }],
      },
      boxShadow: {
        "elev-1": "0 1px 2px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA",
        "elev-2": "0 2px 6px rgba(16,32,26,0.08), 0 1px 2px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA",
        "elev-3": "0 6px 16px rgba(16,32,26,0.10), 0 2px 4px rgba(16,32,26,0.06), inset 0 0 0 1px #D8E3DA",
        "elev-4": "0 12px 24px rgba(16,32,26,0.14), 0 4px 8px rgba(16,32,26,0.08), inset 0 0 0 1px #D8E3DA",
        "elev-5": "0 24px 48px rgba(16,32,26,0.20), 0 8px 16px rgba(16,32,26,0.10), inset 0 0 0 1px #D8E3DA",
      },
      borderRadius: {
        sm: "4px",
        md: "8px",
        lg: "16px",
        pill: "999px",
      },
      backgroundImage: {
        "gradient-aurora": "linear-gradient(135deg, #1B4D3E 0%, #4C1D95 100%)",
        "gradient-spark": "radial-gradient(circle, rgba(212,167,44,0.35) 0%, rgba(212,167,44,0) 70%)",
      },
      spacing: {
        xxs: "4px",
        xs: "8px",
        sm: "12px",
        md: "16px",
        lg: "24px",
        xl: "32px",
        "2xl": "48px",
        "3xl": "64px",
        "4xl": "96px",
        "5xl": "128px",
      },
    },
  },
  plugins: [],
};
```

**Penggunaan Kelas Tailwind (Utility Classes)**

*Button Primary*
```html
<button class="inline-flex items-center justify-center h-12 px-7 rounded-pill bg-primary text-on-primary font-body text-button-md
               hover:bg-primary-deep active:scale-[0.98] transition-all duration-150
               focus:outline-none focus:ring-2 focus:ring-accent-gold focus:ring-offset-2">
  Hubungi Saya
</button>
```

*Badge Status (Skill Rune Chip)*
```html
<span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-sm border-[1.5px] border-primary
             bg-canvas font-pixel text-pixel-label text-ink uppercase
             hover:shadow-elev-1 hover:-translate-y-0.5 transition-all duration-150">
  <img src="/assets/images/skills-icons/laravel.svg" class="w-5 h-5" alt="Laravel">
  LARAVEL
</span>
```

*Card Utama (Spell Rune Card Frame)*
```html
<article class="relative p-8 rounded-lg bg-surface shadow-elev-2 hover:shadow-elev-3 transition-shadow duration-200
                 before:content-[''] before:absolute before:-top-1 before:-left-1 before:w-5 before:h-5
                 before:border-t-2 before:border-l-2 before:border-primary
                 after:content-[''] after:absolute after:-bottom-1 after:-right-1 after:w-5 after:h-5
                 after:border-b-2 after:border-r-2 after:border-primary">
  <img src="/assets/images/case-studies/project-01.jpg" alt="Studi kasus redesain aplikasi" class="rounded-md mb-4 w-full">
  <h3 class="font-display text-heading text-ink mb-2">Redesain Aplikasi Kampus</h3>
  <p class="font-body text-body-sm text-body">Studi kasus proses riset hingga high-fidelity mockup.</p>
</article>
```

*Input Form*
```html
<div class="mb-4">
  <label class="block font-body text-body-sm font-semibold text-ink mb-1.5">Email</label>
  <input type="email" placeholder="nama@email.com"
         class="w-full h-11 px-4 rounded-sm border border-hairline font-body text-body-md text-ink
                placeholder:text-mute focus:outline-none focus:border-accent-gold
                focus:ring-[3px] focus:ring-accent-gold/35 transition-all duration-150">
</div>
```

*Hero Headline*
```html
<h1 class="font-display text-display-xl text-ink max-w-3xl">
  Merancang pengalaman digital,<br>satu piksel pada satu waktu.
</h1>
<p class="font-body text-body-lg text-body mt-4 max-w-xl">
  UI/UX Designer & Web Developer — membangun produk yang rapi, fungsional, dan berkarakter.
</p>
```

---

### 7. Do's and Don'ts (Aturan Mutlak)

**Do's**

1. ✅ Gunakan Spell Rune Frame (§5.1) **hanya** pada card project/studi kasus — jangan diterapkan ke semua elemen agar tetap terasa istimewa.
2. ✅ Pertahankan `radius-none` konsisten pada seluruh elemen bertema pixel (frame, badge, mana bar) sebagai kontras yang disengaja terhadap elemen lain yang membulat.
3. ✅ Selalu sertakan focus ring emas (`color-accent-gold`) pada semua elemen interaktif untuk aksesibilitas keyboard navigation.
4. ✅ Gunakan gradient (`gradient-aurora`/`gradient-spark`) secara terbatas — maksimal 1–2 titik fokus per halaman (misal hero background & 1 tombol CTA).
5. ✅ Jaga rasio 90:10 antara elemen "bersih/modern" dan elemen "pixel/dekoratif" — pixel adalah bumbu, bukan hidangan utama.
6. ✅ Uji kontras warna teks-di-atas-primary (`color-on-primary` di atas `color-primary`) memenuhi rasio WCAG AA minimal 4.5:1.

**Don'ts**

1. ❌ Jangan gunakan font pixel (`Press Start 2P`) untuk body text atau heading utama — merusak keterbacaan dan kesan "modern, bersih".
2. ❌ Jangan menambahkan efek 8-bit tambahan (scanline, noise texture, dithering) di luar yang sudah didefinisikan — akan membuat desain terasa berlebihan/AI slop.
3. ❌ Jangan mencampur `radius-pill` dan `radius-none` pada elemen yang sama tanpa alasan fungsional yang jelas.
4. ❌ Jangan gunakan warna terracotta/cream generik (`#D97757`, `#F4F1EA`) — di luar palet resmi brand ini.
5. ❌ Jangan animasikan lebih dari satu elemen signature (Mana Bar / Owl Post Toast / Spell Rune Frame) secara bersamaan dalam satu viewport — hindari halaman terasa "ribut".
6. ❌ Jangan mengubah warna `color-primary` menjadi warna House Harry Potter secara literal (merah Gryffindor, kuning Hufflepuff, dll.) — brand ini terinspirasi nuansa akademi sihir secara umum, bukan replikasi IP berlisensi.
