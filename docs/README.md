# Dokumentasi & Cetak Biru Arsitektur Cleanique Mart (cleaniquemart.com)

> **Dokumentasi Hasil Fetching & Blueprint Pengembangan Cleaniquemart WordPress Theme & Plugin**  
> Sumber Asli: [cleaniquemart.com](https://cleaniquemart.com) | Entitas: **PT Indotech Berkah Abadi**  
> Kontak Resmi: `087885590088` | Lokasi: Sleman, D.I. Yogyakarta

---

## 📌 Daftar Isi Dokumen

1. [Ringkasan Ekosistem & Profil Bisnis](#ringkasan-ekosistem--profil-bisnis)
2. [Peta Situs Lengkap (Sitemap)](#peta-situs-lengkap-sitemap)
3. [Struktur Direktori Dokumentasi](#struktur-direktori-dokumentasi)
4. [Arsitektur Tema & Plugin WordPress](#arsitektur-tema--plugin-wordpress)
5. [Strategi Konversi & Lead Generation](#strategi-konversi--lead-generation)
6. [Indeks Navigasi File Dokumentasi](#indeks-navigasi-file-dokumentasi)

---

## 🏢 Ringkasan Ekosistem & Profil Bisnis

Cleanique Mart adalah jaringan kemitraan ritel dan depot isi ulang sabun curah, kimia laundry, dan pembersih rumah tangga berkualitas tinggi di bawah naungan **PT Indotech Berkah Abadi** (berpengalaman lebih dari 13 tahun sejak 2011 di industri PKRT).

### 5 Pilar Ekosistem Sinergi:
1. **Cleanique Mart** (`cleaniquemart.com`): Jaringan kemitraan depot isi ulang sabun curah, chemical laundry, dan perbekalan kebersihan rumah tangga & B2B.
2. **Cleanique Lab** (`cleaniquelab.com`): Pusat formulasi, riset, pengujian laboratorium, dan sertifikasi Halal MUI serta izin edar Kemenkes RI (PKRT).
3. **Cleanique Academy** (`cleaniqueacademy.com`): Pusat edukasi, pelatihan formulasi sabun, SOP operasional depot, dan strategi pemasaran digital bagi para mitra.
4. **Depo Cleanique** (`depocleanique.co.id`): Waralaba dan titik distribusi logistik bahan baku serta produk siap pakai ke seluruh Indonesia.
5. **Orchid Care / Orchid Brand** (`orchidbrand.id`): Merek manufaktur langsung kimia laundry premium berbasis standar IFRA dan sertifikasi mutu terpercaya.

### Target Audiens & Persona:
- **Calon Mitra Depot (B2B/Franchise)**: Calon pengusaha pemula, ibu rumah tangga, pengusaha laundry, toko kelontong, dan pebisnis lokal yang ingin memiliki usaha depot sabun curah mandiri tanpa royalti dengan modal mulai Rp 15 Juta.
- **Pengusaha Usaha Jasa (B2B Commercial)**: Pemilik laundry kiloan/satuan, hotel, restoran, katering, rumah sakit, dan perkantoran yang membutuhkan pasokan kimia pembersih rutin dalam jerigen 25 Liter dengan harga pabrik langsung.
- **Konsumen Rumah Tangga (B2C Retail)**: Keluarga yang ingin menghemat biaya belanja sabun bulanan hingga 60% melalui produk biang konsentrat dan isi ulang (*refill*) ramah lingkungan (*zero waste*).

---

## 🗺️ Peta Situs Lengkap (Sitemap)

Berdasarkan hasil penelusuran REST API dan live HTML dari `cleaniquemart.com`:

```
cleaniquemart.com
├── Beranda (Home) [/]
├── Kemitraan Cleanique Mart [/kemitraan-cleanique-mart/]
├── Mitra Cleanique Mart [/mitra-cleanique-mart/]
├── Promo Bundling Sabun [/promo-bundling-kebersihan-rumah/]
├── Tentang Kami [/about/]
├── Kontak Kami [/contact-us/]
├── Artikel & Blog [/blog/]
├── Kebijakan Privasi [/privacy-policy/]
│
├── Programmatic SEO Landing Pages (Target Pencarian 2026)
│   ├── Ide Bisnis Yang Menguntungkan 2026 [/ide-bisnis-yang-menguntungkan-2026/]
│   ├── Usaha Sampingan Yang Menjanjikan 2026 [/usaha-sampingan-yang-menjanjikan-2026/]
│   ├── Peluang Bisnis Yang Menjanjikan 2026 [/peluang-bisnis-yang-menjanjikan-2026/]
│   └── Ide Usaha Yang Menjanjikan 2026 [/ide-usaha-yang-menjanjikan-2026/]
│
├── Cabang & Outlet Lokal (Local SEO Directory)
│   ├── Cleanique Mart Jakarta Timur [/cleanique-mart-jakarta-timur/]
│   ├── Cleanique Mart Tapos Depok [/cleanique-mart-depok/]
│   ├── Cleanique Mart Tajem Maguwoharjo [/cleanique-mart-tajem-maguwoharjo/]
│   ├── Cleanique Mart Malang [/cleanique-mart-malang/]
│   ├── Cleanique Mart Palembang [/cleanique-mart-palembang/]
│   ├── Cleanique Mart Jambi [/cleanique-mart-jambi/]
│   ├── Cleanique Mart Boyolali [/cleanique-mart-boyolali/]
│   ├── Cleanique Mart Karanganyar [/cleanique-mart-karanganyar-2/]
│   ├── Cleanique Mart Demak [/cleanique-mart-demak-2/]
│   ├── Cleanique Mart Situbondo [/cleanique-mart-situbondo-3/]
│   ├── Cleanique Mart Temanggung 1 [/cleanique-mart-temanggung-1/]
│   └── Cleanique Mart Temanggung 2 [/cleanique-mart-temanggung-2/]
│
└── Artikel Edukasi Formulasi & Katalog Produk
    ├── Biang Karbol Wangi Sereh Pinus Cemara 5 Liter
    ├── Sabun Cuci Tangan Cair Paket Bahan Arai 15 Liter
    ├── Konsentrat Pembersih Lantai
    ├── Softener Softsense
    ├── Konsentrat Pelicin Pakaian
    ├── Paket Bahan Pewangi Laundry Essenz
    ├── Biang Sabun Cuci Piring Konsentrat
    └── Deterjen Cair Terbaik
```

---

## 📂 Struktur Direktori Dokumentasi

Semua berkas dokumentasi halaman tersusun rapi di dalam direktori `docs/`:

```
docs/
├── README.md                                    <- File ini (Master Hub & Sitemap)
├── THEME_ARCHITECTURE.md                        <- Arsitektur Cleaniquemart WordPress Theme
├── PLUGIN_ARCHITECTURE.md                       <- Arsitektur Cleaniquemart Core Plugin
│
├── pages/                                       <- Halaman Utama (Core Pages)
│   ├── 01_home.md                               <- Beranda / Homepage
│   ├── 02_kemitraan-cleanique-mart.md           <- Master Sales Page Kemitraan (Paket Starter & King)
│   ├── 03_mitra-cleanique-mart.md               <- Direktori Mitra & Jaringan Depot Nasional
│   ├── 04_promo-bundling-kebersihan-rumah.md    <- Promo Bundling Ritel Biang Sabun 5L
│   ├── 05_about.md                              <- Profil PT Indotech Berkah Abadi
│   ├── 06_contact-us.md                         <- Informasi Kontak, Peta & Hotline
│   ├── 07_blog-index.md                         <- Indeks Blog & Artikel
│   └── 08_privacy-policy.md                     <- Kebijakan Privasi
│
├── seo-landing/                                 <- Halaman Programmatic SEO 2026
│   ├── ide-bisnis-yang-menguntungkan-2026.md
│   ├── usaha-sampingan-yang-menjanjikan-2026.md
│   ├── peluang-bisnis-yang-menjanjikan-2026.md
│   └── ide-usaha-yang-menjanjikan-2026.md
│
├── outlets/                                     <- Halaman Cabang & Toko Mitra
│   ├── cleanique-mart-jakarta-timur.md
│   ├── cleanique-mart-depok.md
│   ├── cleanique-mart-tajem-maguwoharjo.md
│   ├── cleanique-mart-malang.md
│   ├── cleanique-mart-palembang.md
│   ├── cleanique-mart-jambi.md
│   ├── cleanique-mart-boyolali.md
│   ├── cleanique-mart-karanganyar.md
│   ├── cleanique-mart-demak.md
│   ├── cleanique-mart-situbondo.md
│   └── cleanique-mart-temanggung.md
│
├── articles/                                    <- Artikel Produk & Kimia Pembersih
│   ├── biang-karbol-wangi-sereh-pinus-cemara.md
│   ├── sabun-cuci-tangan-cair-arai.md
│   ├── konsentrat-pembersih-lantai.md
│   ├── softener-softsense.md
│   ├── konsentrat-pelicin-pakaian.md
│   ├── paket-bahan-pewangi-laundry-essenz.md
│   ├── biang-sabun-cuci-piring-konsentrat.md
│   └── deterjen-cair-terbaik.md
│
└── raw-data/                                    <- Arsip Data Mentah JSON
    ├── pages.json                               <- Data 24 Pages dari REST API WP
    ├── posts.json                               <- Data 8 Posts dari REST API WP
    ├── categories.json                          <- Kategori Taksonomi
    ├── types.json                               <- Tipe Post WP
    └── site_info.json                           <- Informasi Situs & Namespace
```

---

## 🎨 Arsitektur Tema & Plugin WordPress

Untuk mereproduksi dan meningkatkan fungsionalitas `cleaniquemart.com` ke dalam ekosistem WordPress mandiri berkinerja tinggi:

1. **Cleaniquemart Theme (`cleaniquemart-theme`)**:
   - Berbasis arsitektur **Pure CSS & Vanilla JS Modern** (PageSpeed 95+, 0 dependensi jQuery/Elementor).
   - Menangani seluruh presentasi visual, hierarki layout, typography responsive (`Plus Jakarta Sans` & `Inter`), skema warna pabrik (*Deep Navy*, *Clean Cyan*, *Emerald*, *Gold*), micro-interaction, dan sticky mobile CTA.
   - Baca panduan lengkap: [THEME_ARCHITECTURE.md](file:///c:/laragon/www/cleaniquemart/docs/THEME_ARCHITECTURE.md)

2. **Cleaniquemart Core Plugin (`cleaniquemart-core`)**:
   - Menangani fungsionalitas dinamis di luar presentasi visual.
   - **Custom Post Type (CPT)**: `cleanique_outlet` (daftar cabang mitra se-Indonesia), `cleanique_package` (paket kemitraan).
   - **Shortcodes & Dynamic Blocks**: `[cleanique_packages]`, `[cleanique_outlet_locator]`, `[cleanique_calculator]`, `[cleanique_wa_modal]`.
   - **WhatsApp Routing Engine**: Menghasilkan pesan WhatsApp dinamis yang tertarget langsung ke CS (`087885590088`).
   - Baca panduan lengkap: [PLUGIN_ARCHITECTURE.md](file:///c:/laragon/www/cleaniquemart/docs/PLUGIN_ARCHITECTURE.md)

---

## 💬 Strategi Konversi & Lead Generation

Seluruh halaman didesain dengan tujuan utama mengalirkan calon mitra dan pembeli ke WhatsApp resmi:
- **WhatsApp Hotline**: `+6287885590088` (atau `087885590088`)
- **Download Proposal URL**: Google Drive Proposal Kemitraan Cleanique Mart
- **Pesan Otomatis Terstandarisasi**:
  - *Mitra Umum*: `"Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*"`
  - *Paket Starter*: `"Halo *cleaniquemart.com* Saya Mohon Informasi untuk Promo Paket Starter *Cleanique Mart *"`
  - *Paket King*: `"Halo *cleaniquemart.com* Saya Mohon Informasi untuk Promo Paket King *Cleanique Mart *"`
  - *Cabang Lokal*: `"Halo Cleanique Mart [Kota], saya ingin pesan isi ulang sabun..."`

---

## 🔗 Indeks Tautan Halaman

- **Halaman Inti**:
  - [01. Beranda (Home)](file:///c:/laragon/www/cleaniquemart/docs/pages/01_home.md)
  - [02. Kemitraan Master](file:///c:/laragon/www/cleaniquemart/docs/pages/02_kemitraan-cleanique-mart.md)
  - [03. Direktori Mitra](file:///c:/laragon/www/cleaniquemart/docs/pages/03_mitra-cleanique-mart.md)
  - [04. Promo Bundling 5L](file:///c:/laragon/www/cleaniquemart/docs/pages/04_promo-bundling-kebersihan-rumah.md)
  - [05. Tentang Kami](file:///c:/laragon/www/cleaniquemart/docs/pages/05_about.md)
  - [06. Kontak Kami](file:///c:/laragon/www/cleaniquemart/docs/pages/06_contact-us.md)
  - [07. Indeks Blog](file:///c:/laragon/www/cleaniquemart/docs/pages/07_blog-index.md)
  - [08. Kebijakan Privasi](file:///c:/laragon/www/cleaniquemart/docs/pages/08_privacy-policy.md)

- **Arsitektur Teknis**:
  - [Theme Architecture](file:///c:/laragon/www/cleaniquemart/docs/THEME_ARCHITECTURE.md)
  - [Plugin Architecture](file:///c:/laragon/www/cleaniquemart/docs/PLUGIN_ARCHITECTURE.md)
