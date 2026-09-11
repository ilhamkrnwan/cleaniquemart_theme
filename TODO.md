# TODO List: Pengembangan Theme PeluangUsahaLaundry

Checklist kerja komprehensif untuk redesain [peluangusahalaundry.com](https://peluangusahalaundry.com/) menjadi template & WordPress Theme modern berkonversi tinggi, terintegrasi dengan ekosistem Cleanique Mart, Cleanique Lab, Orchid Brand, Cleanique Academy, dan Depo Cleanique.

---

## 📌 Phase 1: Riset, Konsep & Fondasi Proyek
- [x] Analisis struktur konten, kata kunci SEO, dan penawaran di `peluangusahalaundry.com`
- [x] Ekstraksi value proposition dari 5 website ekosistem (Cleanique Mart, Cleanique Lab, Orchid Brand, Academy, Depo Cleanique)
- [x] Instalasi skill agen pendukung:
  - [x] `frontend-design` (Anthropic UI design lead guidance)
  - [x] `find-skills` (Vercel Labs agent skills manager)
  - [x] `web-design-guidelines` (Vercel UX/UI best practices)
- [x] Penyusunan Product Requirements Document ([PRD.md](file:///c:/laragon/www/cleaniquemart/PRD.md))
- [x] Penyusunan Task Checklist ([TODO.md](file:///c:/laragon/www/cleaniquemart/TODO.md))
- [x] Penyusunan Panduan & Dokumentasi Penggunaan ([README.md](file:///c:/laragon/www/cleaniquemart/README.md))

---

## 🎨 Phase 2: Design System & Token CSS
- [x] Inisialisasi struktur direktori theme WordPress `wp-content/themes/peluangusahalaundry/`:
  - [x] `assets/css/`
  - [x] `assets/js/`
  - [x] `template-parts/`
- [x] Penyusunan `style.css` (header metadata tema WordPress resmi + root CSS variables)
- [x] Implementasi `assets/css/main.css`:
  - [x] Color tokens (Deep Navy, Clean Cyan, Emerald Green, Golden Amber, Neutral Slate)
  - [x] Tipografi responsif Google Fonts (`Plus Jakarta Sans` + `Inter`)
  - [x] Layout primitives (Container, Flex grid, Spacing scale, Card elevations)
  - [x] Micro-animations (Button pulse, Badge float, Hover transitions, Glassmorphism accents)
  - [x] Mobile navigation drawer & sticky bottom action bar

---

## ⚙️ Phase 3: Modul Logika Interaktif (Vanilla JS)
- [x] Implementasi `assets/js/main.js`:
  - [x] **Interactive Profit Simulator**: Kalkulator laba bersih bulanan dengan slider botol/hari & margin keuntungan real-time
  - [x] **Product Catalog Filter Tabs**: Filter instan berdasarkan kategori (Semua, Parfum, Deterjen, Softener, Pelicin, Anti Noda, Biang)
  - [x] **Interactive FAQ Accordion**: Toggle buka-tutup halus dengan indikator chevron
  - [x] **Smart WhatsApp Lead Generator Modal**: Dialog form pemesanan dengan auto-generate template WhatsApp siap kirim
  - [x] **Mobile Drawer Navigation**: Toggle menu seluler yang responsif dan ramah sentuhan
  - [x] **Smooth Scroll & Sticky Header**: Deteksi scroll untuk penyesuaian header latar belakang

---

## 🧱 Phase 4: Pembuatan Komponen Template WordPress (`template-parts/`)
- [x] `template-parts/hero.php`: Headline memukau, subheadline, dual-CTA, dan trust badges (IFRA, TDS 0, Labkesda)
- [x] `template-parts/metrics.php`: Angka statistik terverifikasi (5.000+ Agen, 34 Provinsi, 120+ Varian, Pabrik Tangan Pertama)
- [x] `template-parts/problem-solution.php`: Data konsumsi pakaian per hari & tingginya repeat-order chemical kebersihan
- [x] `template-parts/calculator.php`: Kontainer simulator keuntungan interaktif
- [x] `template-parts/products-catalog.php`: Galeri katalog produk unggulan dengan badge sertifikasi dan aroma tahan lama
- [x] `template-parts/advantages.php`: 6 keunggulan pabrik langsung (Standar IFRA, Air Distilasi H2O murni, Bebas Limbah Berbahaya, Maklon Merk Sendiri)
- [x] `template-parts/packages.php`: 3 pilihan paket kemitraan (Starter Reseller, Agen Resmi Best Seller, Master Distributor Wilayah)
- [x] `template-parts/ecosystem.php`: Showcase sinergi Cleanique Mart, Cleanique Lab, Orchid Brand, Cleanique Academy, dan Depo Cleanique
- [x] `template-parts/testimonials.php`: Kisah sukses mitra dan bukti dokumentasi pengiriman kargo ke seluruh Indonesia
- [x] `template-parts/faq.php`: 8 pertanyaan paling krusial calon agen
- [x] `template-parts/cta-banner.php`: Banner penutup dorongan tindakan cepat sebelum kuota kota penuh

---

## 🔌 Phase 5: Integrasi WordPress Core
- [x] `functions.php`:
  - [x] Theme setup (`title-tag`, `post-thumbnails`, `html5`)
  - [x] Enqueue styles (`style.css`, `assets/css/main.css`) & scripts (`assets/js/main.js`)
  - [x] WordPress Customizer settings (Nomor WhatsApp utama, link katalog PDF, teks pengumuman topbar)
  - [x] Dynamic menu registration
- [x] `header.php`: Top announcement bar, navigasi desktop, tombol WhatsApp header, menu toggle mobile
- [x] `footer.php`: Footer 4 kolom, kontak pabrik Sleman, link ekosistem, copyright, floating WhatsApp CTA, modal form, dan `wp_footer()`
- [x] `front-page.php`: Perakitan modular seluruh `template-parts/`
- [x] `index.php`: Template fallback loop artikel WordPress
- [x] `page.php` & `single.php`: Template halaman standar & artikel blog

---

## 🖥️ Phase 6: Standalone Preview & Testing
- [x] Pembuatan `preview.html` mandiri:
  - [x] Template lengkap tanpa perlu server PHP aktif untuk pengujian langsung di browser
- [x] Uji responsivitas lintas perangkat (Desktop 1920x1080, Tablet 768px, Mobile 375px)
- [x] Uji fungsi interaktif (Simulator kalkulator, Filter tab katalog, Modal WhatsApp form generator, FAQ accordion)
- [x] Validasi HTML5 & Aksesibilitas WCAG (Contrast, ARIA, Keyboard focus)
- [x] Dokumentasi akhir & Walkthrough ringkas
