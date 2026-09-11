# Product Requirements Document (PRD)
## Redesain & Pengembangan Theme Peluang Usaha Laundry
**Nama Proyek:** Theme PeluangUsahaLaundry (Cleanique & Orchid Brand Ecosystem)  
**Versi:** 1.0.0  
**Status:** In Execution  
**Target Rilis:** 2026  
**Author:** Antigravity AI Engineering & Design Team  

---

## 1. Executive Summary & Problem Statement

### 1.1 Latar Belakang
Website [peluangusahalaundry.com](https://peluangusahalaundry.com/) adalah kanal akuisisi kemitraan utama bagi **PT Indotech Berkah Abadi / Orchid Brand / Cleanique Group** untuk menjaring calon agen, distributor, dan pemilik usaha laundry di seluruh Indonesia.

Website versi terdahulu dibangun menggunakan WordPress dengan GeneratePress dan Elementor versi lama. Struktur visualnya sudah usang (outdated), layout monoton, copy text sangat padat tanpa visual hierarchy yang memadai, dan belum memiliki fitur interaktif untuk meyakinkan calon mitra secara instan.

### 1.2 Ekosistem Terintegrasi
Redesain ini memposisikan **Peluang Usaha Laundry** sebagai gerbang utama kemitraan bisnis chemical kebersihan yang bersinergi langsung dengan 5 unit bisnis ekosistem:
1. **Orchid Brand (`orchidbrand.id`)**: Pabrik & supplier sabun tangan pertama di Sleman, Yogyakarta. Standar IFRA, uji limbah Labkesda DIY, air distilasi TDS 0.
2. **Cleanique Lab (`cleaniquelab.com`)**: Pusat riset & formulasi chemical laundry, industri, medis, dan rumah tangga.
3. **Cleanique Mart (`cleaniquemart.com`)**: Sentra distribusi peluang usaha dengan potensi omset 50+ juta/bulan.
4. **Cleanique Academy (`cleaniqueacademy.com`)**: Lembaga edukasi & kursus formulasi sabun serta manajemen laundry.
5. **Depo Cleanique (`depocleanique.co.id`)**: Jaringan depo isi ulang chemical dan perlengkapan laundry se-Indonesia.

---

## 2. Target Pengguna (User Personas)

### Persona 1: Calon Agen Pemula / Ibu Rumah Tangga / Karyawan (Starter Mitra)
- **Karakteristik:** Memiliki modal terbatas (Rp 500rb – Rp 3jt), ingin penghasilan sampingan minim risiko.
- **Kebutuhan:** Kepastian produk mudah dijual, margin keuntungan jelas, dukungan materi promosi online, tidak perlu bikin pabrik sendiri.
- **Pain Point:** Takut barang tidak laku, bingung cara jualan, takut kualitas produk buruk/komplain pelanggan.

### Persona 2: Pemilik Usaha Laundry Kiloan / Satuan (B2B User & Agen Toko)
- **Karakteristik:** Sudah memiliki outlet laundry, membutuhkan pasokan deterjen dan parfum berkualitas tinggi dengan harga tangan pertama pabrik.
- **Kebutuhan:** Aroma wangi konsisten tahan lama (>14-30 hari), tidak meninggalkan noda di baju, ramah mesin cuci, hemat pemakaian per kilo pakaian.
- **Pain Point:** Harga distributor perantara terlalu mahal, wangi cepat hilang, cucian apek karena air campuran mineral tinggi.

### Persona 3: Distributor Grosir / Master Agen Wilayah (Enterprise Partner)
- **Karakteristik:** Memiliki modal Rp 10jt – 50jt+, punya armada atau jaringan toko offline, ingin hak eksklusivitas wilayah.
- **Kebutuhan:** Perlindungan area pasar, pasokan kapasitas kargo tonase rutin, opsi maklon (private label merk sendiri), legalitas lengkap (Labkes, Kemenkes, IFRA).

---

## 3. Sasaran & Metrik Keberhasilan (Goals & KPIs)

| Metrik | Baseline Lama | Target Desain Baru |
|---|---|---|
| **Conversion Rate (Click to WA)** | ~1.5% - 2% | **≥ 5.5%** |
| **Average Time on Page** | < 45 detik | **> 2 menit 30 detik** |
| **Mobile Page Speed Score** | ~52 (Elementor heavy) | **≥ 92 (Lightweight Vanilla)** |
| **Interactive Engagement** | 0% (hanya teks statis) | **> 35% berinteraksi dengan Simulator Profit & Filter Katalog** |
| **Brand Perception** | Toko agen biasa | **Pabrik Manufaktur Tangan Pertama Terpercaya & Modern** |

---

## 4. Informasi Arsitektur & Struktur Halaman

Halaman utama (`front-page.php` / `preview.html`) dirancang dengan alur psikologi penjualan berkonversi tinggi (*AIDA: Attention, Interest, Desire, Action*):

```
┌─────────────────────────────────────────────────────────────┐
│ 1. TOP ANNOUNCEMENT BAR (Promo Ongkir & Kuota Agen Kota)     │
├─────────────────────────────────────────────────────────────┤
│ 2. STICKY NAVBAR (Brand, Navigasi Cepat, Tombol WhatsApp)    │
├─────────────────────────────────────────────────────────────┤
│ 3. HERO SECTION                                             │
│    - Headline Kuat: Peluang Emas Distributor Tangan Pertama │
│    - Subheadline & Value Proposition                        │
│    - Dual CTA: "Daftar Agen Sekarang" & "Simulasi Profit"   │
│    - Key Trust Badges: IFRA, Labkesda, TDS 0, Pabrik Sendiri│
├─────────────────────────────────────────────────────────────┤
│ 4. TRUST & SOCIAL PROOF METRICS                             │
│    - 5.000+ Agen | 34 Provinsi | 120+ Varian | 100% Pabrik   │
├─────────────────────────────────────────────────────────────┤
│ 5. MARKET OPPORTUNITY & PROBLEM/SOLUTION                    │
│    - Fakta kebutuhan pakaian harian & ledakan bisnis laundry│
│    - Mengapa sabun & deterjen memiliki repeat-order tertinggi│
├─────────────────────────────────────────────────────────────┤
│ 6. INTERACTIVE PROFIT SIMULATOR (Fitur Unggulan)            │
│    - Slider: Estimasi Outlet Laundry / Botol Terjual per Hari│
│    - Slider: Margin Keuntungan per Botol/Liter              │
│    - Kalkulasi Real-time: Estimasi Profit Bersih per Bulan  │
│    - CTA Langsung: "Amankan Potensi Cuan Rp XX Juta Ini"     │
├─────────────────────────────────────────────────────────────┤
│ 7. KATALOG PRODUK UNGGULAN (Tabbed Categories)              │
│    - Tab: Semua | Parfum Laundry | Deterjen | Softener |     │
│           Pelicin Setrika | Anti Noda | Biang Konsentrat    │
│    - Product Card: Foto, Nama, Keunggulan, Badge Tahan Lama │
├─────────────────────────────────────────────────────────────┤
│ 8. KEUNGGULAN PRODUSEN TANGAN PERTAMA (Why Us)              │
│    - Standar IFRA Global                                    │
│    - Formulasi Air Distilasi Murni (TDS 0)                  │
│    - Teruji Balai Laboratorium Kesehatan DIY                │
│    - Dukungan Branding & Bisa Maklon / Private Label Sendiri│
├─────────────────────────────────────────────────────────────┤
│ 9. PILIHAN PAKET KEMITRAAN (Tiering Pricing Table)          │
│    - Paket Starter Reseller (Pemula)                        │
│    - Paket Agen Resmi (Best Seller)                         │
│    - Paket Master Agen / Distributor Wilayah (Eksklusif)    │
├─────────────────────────────────────────────────────────────┤
│ 10. SHOWCASE EKOSISTEM INDOTECH & CLEANIQUE GROUP           │
│     - Cleanique Mart, Cleanique Lab, Orchid Brand, Academy, │
│       Depo Cleanique                                        │
├─────────────────────────────────────────────────────────────┤
│ 11. TESTIMONI MITRA & DOKUMENTASI PENGIRIMAN                │
│     - Testimoni agen sukses daerah & foto kargo pengiriman  │
├─────────────────────────────────────────────────────────────┤
│ 12. INTERACTIVE ACCORDION FAQ                               │
│     - Pertanyaan modal, cara jual, pengiriman luar pulau,   │
│       garansi produk, private label                         │
├─────────────────────────────────────────────────────────────┤
│ 13. FINAL HIGH-CONVERTING CTA BANNER                        │
│     - Ambil kuota kota Anda sebelum diambil kompetitor      │
├─────────────────────────────────────────────────────────────┤
│ 14. FOOTER RESMI + LEGALITAS + CONTACT INFO                 │
│     - Alamat Pabrik Sleman Yogyakarta, WA CS, Jam Kerja    │
├─────────────────────────────────────────────────────────────┤
│ 15. FLOATING MOBILE BAR & SMART WHATSAPP MODAL              │
│     - Quick trigger konsultasi dengan format pesan rapi     │
└─────────────────────────────────────────────────────────────┘
```

---

## 5. Design System Specifications

### 5.1 Color Tokens
- **Brand Primary (Deep Industrial Navy):** `#0F2137` / `#162A45` &mdash; Melambangkan otoritas pabrik manufaktur dan kepercayaan B2B.
- **Brand Accent (Clean Fresh Cyan / Emerald):** `#0D9488` / `#059669` &mdash; Mewakili kebersihan, kesegaran laundry, serta formula *green cleaning*.
- **Energetic Highlight (Amber / Golden Honey):** `#F59E0B` / `#D97706` &mdash; Digunakan untuk badge "Paling Diminati", margin profit, dan penawaran waktu terbatas.
- **Neutral Dark:** `#1E293B` &mdash; Warna teks judul dan konten utama (high contrast, crisp readability).
- **Neutral Muted:** `#64748B` &mdash; Warna sub-label dan deskripsi sekunder.
- **Surface Background:** `#F8FAFC` &mdash; Latar belakang sejuk, bersih, dan higienis.
- **Pure White:** `#FFFFFF` &mdash; Permukaan kartu produk dan kontainer utama.
- **Borders & Dividers:** `#E2E8F0` &mdash; Garis batas halus yang elegan.

### 5.2 Typography
- **Heading Family:** `'Plus Jakarta Sans', system-ui, -apple-system, sans-serif`  
  - Berat: 600 (Semi-bold), 700 (Bold), 800 (Extra-bold)
  - Letter spacing: `-0.02em` untuk headline besar agar modern dan padat.
- **Body Family:** `'Inter', system-ui, -apple-system, sans-serif`  
  - Berat: 400 (Regular), 500 (Medium), 600 (Semi-bold)
  - Line-height: `1.65` untuk kenyamanan membaca di perangkat mobile.

### 5.3 Micro-interactions & Visual Philosophy
- Menerapkan prinsip skill `frontend-design`:
  - Menghindari animasi berlebihan yang mengganggu; menggunakan transisi halus `200ms - 300ms ease`.
  - Tombol aksi memiliki elevasi bayangan halus dengan efek hover lembut.
  - Kartu paket kemitraan memiliki highlight visual yang jelas untuk tier *Best Seller*.
  - Desain tidak menggunakan template kit generik; seluruh elemen dibuat spesifik untuk industri sabun & chemical laundry Indonesia.

---

## 6. Functional Specifications

### 6.1 Smart WhatsApp Lead Generator
- **Fitur:** Tombol CTA di seluruh halaman membuka modal interaktif atau langsung mengarahkan ke WhatsApp dengan pesan pra-format:
  ```
  Halo Admin Peluang Usaha Laundry (Orchid Brand / Cleanique Group),
  Saya tertarik bergabung menjadi mitra.
  Nama: [Input Nama]
  Kota: [Input Kota]
  Pilihan Paket: [Starter / Agen / Distributor]
  Mohon informasi syarat dan promo ongkirnya. Terima kasih!
  ```
- **Fallback URL:** `https://api.whatsapp.com/send/?phone=6287885590088&text=...`

### 6.2 Interactive Profit Simulator
- **Input 1:** Jumlah botol / jerigen terjual per hari (Range: 5 – 200).
- **Input 2:** Rata-rata margin keuntungan bersih per item (Rp 5.000 – Rp 35.000).
- **Formula Real-time:** `(Botol_per_Hari * Margin_per_Botol) * 30 Hari = Estimasi Laba Bulanan`.
- **Output:** Angka animasi dinamis dengan format Rupiah Indonesia (contoh: `Rp 18.000.000,- / bulan`).

### 6.3 Product Catalog Tabs
- Filter instan berbasis JavaScript tanpa reload halaman.
- Kategori:
  1. Semua Varian
  2. Parfum Laundry (Akasia, Sakura, Ocean Fresh, Snappy, Molto Blue, dll.)
  3. Deterjen Cair & Determat Eco
  4. Softener Pelicin (SoftSense)
  5. Anti Noda Spesifik (Darah, Jamur, Karat, Minyak)
  6. Biang Konsentrat Hemat

---

## 7. Technical Requirements

1. **WordPress Theme Standards:**
   - Valid standard theme headers di `style.css`.
   - `functions.php` menggunakan hook resmi WordPress (`after_setup_theme`, `wp_enqueue_scripts`, `customize_register`).
   - Clean modular PHP templates di `template-parts/`.
2. **Performance & Lightweight Footprint:**
   - 100% Vanilla CSS & Modular Vanilla JavaScript.
   - Tanpa dependensi berat seperti jQuery, Bootstrap, atau Elementor builder runtime.
   - Ukuran total aset CSS + JS < 60KB (gzipped < 15KB).
3. **SEO & Schema Markup:**
   - Semantic HTML5 (`<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<aside>`, `<footer>`).
   - Schema `Organization`, `Product`, dan `FAQPage` JSON-LD terintegrasi.
   - OpenGraph meta tags lengkap untuk sharing WhatsApp, Facebook, dan Twitter.
4. **Cross-device Responsiveness:**
   - Mobile-First layout (breakpoint 640px, 768px, 1024px, 1280px).
   - Fixed Bottom Bar khusus tampilan layar smartphone agar tombol WhatsApp selalu dalam jangkauan jempol pengunjung.

---

## 8. Milestone & Execution Roadmap

- [x] **Milestone 1:** Riset & Analisis Data Website Existing dan 5 Website Referensi.
- [x] **Milestone 2:** Instalasi Skill Frontend Design & Guidelines.
- [ ] **Milestone 3:** Pembuatan PRD.md, README.md, dan TODO.md.
- [ ] **Milestone 4:** Pembangunan Arsitektur Theme & Token CSS (`style.css`, `assets/css/main.css`).
- [ ] **Milestone 5:** Pengembangan Modul Interaktif JavaScript (`assets/js/main.js`).
- [ ] **Milestone 6:** Pembuatan Komponen Template PHP (`template-parts/*`, `front-page.php`, `header.php`, `footer.php`).
- [ ] **Milestone 7:** Pembuatan Standalone Preview HTML (`preview.html`) untuk review instan.
- [ ] **Milestone 8:** Pengujian Fungsional, Aksesibilitas, dan Verifikasi Visual.
