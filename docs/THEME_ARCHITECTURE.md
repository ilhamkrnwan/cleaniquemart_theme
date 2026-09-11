# Cetak Biru Arsitektur Tema WordPress: Cleaniquemart Theme (`cleaniquemart-theme`)

> **Spesifikasi Teknis Desain, Hierarki Template, dan Komponen UI Modular**  
> Standar: High-Performance Vanilla CSS & JS, Mobile-First UX, SEO & A11y Ready.

---

## 1. Ikhtisar Tema

Tema `cleaniquemart-theme` dirancang untuk menggantikan konstruksi visual Oxygen Builder lama pada `cleaniquemart.com` dengan template WordPress native murni yang jauh lebih cepat (PageSpeed Score 95+), mudah di-maintain, ramah mesin pencari, dan memiliki rasio konversi tinggi (*high-converting*).

### Spesifikasi Inti:
- **Framework**: Zero runtime framework (Vanilla CSS Grid/Flexbox & Vanilla ES6+ JavaScript).
- **Font**: Google Fonts `Plus Jakarta Sans` (Display/Headings) dan `Inter` (Body text).
- **Ikonografi**: SVG Inline murni / Tabler/Lucide SVG icons tanpa dependensi FontAwesome berat.
- **Dukungan Editor**: Gutenberg Block Ready & Classic Template Parts.

---

## 2. Token Desain (Design System CSS Tokens)

Tema menggunakan variabel CSS global yang dideklarasikan pada `:root` di dalam file `assets/css/main.css`:

```css
:root {
  /* Brand Primary Colors */
  --cm-primary-900: #0B192C;     /* Deep Industrial Navy */
  --cm-primary-800: #0F2C59;     /* Core Brand Navy */
  --cm-primary-700: #1E3E62;     /* Medium Navy Accent */
  --cm-primary-600: #274D7E;
  
  /* Vibrant Accents & Fresh Chemicals */
  --cm-cyan-500: #00B4D8;        /* Fresh Cyan (Water & Refill) */
  --cm-cyan-600: #0096C7;
  --cm-cyan-100: #E0F7FA;
  --cm-emerald-500: #10B981;     /* Eco-Friendly Bio Chemical */
  --cm-emerald-600: #059669;
  --cm-emerald-100: #ECFDF5;
  --cm-amber-500: #F59E0B;       /* Gold Offer & Best Seller Badge */
  --cm-amber-600: #D97706;
  --cm-amber-100: #FEF3C7;
  
  /* WhatsApp Conversion Color */
  --cm-wa-500: #25D366;          /* Official WhatsApp Brand */
  --cm-wa-600: #128C7E;
  
  /* Neutral Palette */
  --cm-dark-900: #0F172A;        /* Slate Text Primary */
  --cm-dark-700: #334155;        /* Slate Text Secondary */
  --cm-dark-500: #64748B;        /* Muted Text */
  --cm-light-100: #FFFFFF;       /* Pure White Background */
  --cm-light-200: #F8FAFC;       /* Off-White Surface */
  --cm-light-300: #F1F5F9;       /* Card Neutral Surface */
  --cm-border: #E2E8F0;          /* Subtle Borders */
  
  /* Typography Scale */
  --cm-font-heading: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
  --cm-font-body: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  
  /* Shadows & Elevation */
  --cm-shadow-sm: 0 1px 3px rgba(15, 23, 42, 0.08);
  --cm-shadow-md: 0 4px 6px -1px rgba(15, 23, 42, 0.1), 0 2px 4px -2px rgba(15, 23, 42, 0.06);
  --cm-shadow-lg: 0 10px 25px -3px rgba(15, 23, 42, 0.12), 0 4px 6px -4px rgba(15, 23, 42, 0.08);
  --cm-shadow-xl: 0 20px 30px -5px rgba(15, 23, 42, 0.15);
  
  /* Border Radii */
  --cm-radius-sm: 6px;
  --cm-radius-md: 12px;
  --cm-radius-lg: 20px;
  --cm-radius-pill: 9999px;
  
  /* Layout Max Width */
  --cm-max-width: 1240px;
  --cm-max-width-narrow: 920px;
}
```

---

## 3. Struktur Berkas & Hierarki Template WordPress

Tema diletakkan di direktori: `wp-content/themes/cleaniquemart-theme/`

```
cleaniquemart-theme/
├── style.css                      # Deklarasi Metadata Tema WordPress
├── index.php                      # Fallback Index
├── functions.php                  # Enqueue Scripts, Supports, Nav Menus, Helpers
├── header.php                     # Global Topbar, Header Navbar, Mobile Drawer
├── footer.php                     # Global 4-Kolom Footer, Ekosistem, WA Floating Button
│
├── front-page.php                 # Template Khusus Halaman Utama (Beranda)
├── page-kemitraan.php             # Template Khusus Master Landing Page Kemitraan
├── page-mitra.php                 # Template Khusus Halaman Direktori Jaringan Mitra
├── page-promo-bundling.php        # Template Khusus Promo Ritel Biang Sabun 5L
├── page-about.php                 # Template Khusus Profil Tentang Perusahaan
├── page-contact.php               # Template Khusus Hubungi Kami & Peta Sleman
├── single-cleanique_outlet.php    # Template Khusus Single Cabang Outlet Mitra (Local SEO)
│
├── single.php                     # Template Halaman Artikel Single Blog
├── archive.php                    # Template Indeks Arsip Kategori Artikel
├── page.php                       # Template Halaman Statis Standar
├── 404.php                        # Template Error 404 Interaktif
│
├── template-parts/                # Komponen UI Modular
│   ├── hero-home.php              # Hero Beranda (H1, Subhead, Value Badges, CTA)
│   ├── hero-kemitraan.php         # Hero Penawaran Kemitraan (Countdown Promo, Video CTA)
│   ├── metrics-bar.php            # Counter Statistik (13+ Thn, 1jt+ Produk, Cabang Se-Indonesia)
│   ├── packages-table.php         # Tabel Pricing Paket Starter (15jt) & Paket King (27.5jt)
│   ├── variants-grid.php          # Galeri 8 Varian Kimia Curah 25L (Deterjen, Softener, Karbol)
│   ├── profit-simulator.php       # Kalkulator Interaktif Simulasi Margin & Omzet
│   ├── shipping-comparison.php    # Simulasi Pengiriman Terpusat vs Depo Terdekat (Hemat Ongkir)
│   ├── outlet-directory.php       # Grid Kartu Cabang Mitra dengan Filter Kota
│   ├── reviews-lightbox.php       # Galeri Review Marketplace (Shopee/Tokopedia 4.9/5)
│   ├── testimonials-video.php     # Showcase Video & Testimoni Mitra Sukses
│   ├── faq-accordion.php          # Accordion Tanya Jawab Legalitas, Modal, Pengiriman
│   ├── cta-banner.php             # Banner CTA Penutup dengan Tombol Booking WhatsApp
│   ├── mobile-dock.php            # Bottom Dock Bar Melayang untuk Smartphone
│   └── wa-lead-modal.php          # Modal Form Pendaftaran Mitra ke WhatsApp
│
└── assets/
    ├── css/
    │   └── main.css               # Seluruh Styling Komponen & Responsivitas
    ├── js/
    │   └── main.js                # Interaktivitas (Filter, Slider, Modal, WA Formatter)
    └── images/                    # Aset Logo, Mockup Depot, Icon Kemasan
```

---

## 4. Rincian Komponen Utama UI/UX

### A. Header & Navigasi Responsif (`header.php`)
- **Top Bar**: Pengumuman promo kemitraan berjalan, jam operasional, dan shortcut WhatsApp hotline `087885590088`.
- **Main Navbar**:
  - Logo Cleanique Mart dengan tagline "Pusat Isi Ulang Sabun & Peluang Usaha".
  - Navigasi: *Beranda*, *Tentang Kami*, *Kemitraan*, *Mitra Kami*, *Promo Bundling*, *Artikel*, *Hubungi Kami*.
  - CTA Button: `"Konsultasi Gratis"` (warna emerald dengan ikon WhatsApp).
- **Mobile Drawer**: Menu slide-out halus dengan tombol kontak langsung.

### B. Komponen Simulator Profit Interaktif (`template-parts/profit-simulator.php`)
- Slider 1: Penjualan jerigen per hari (1 – 30 jerigen @ 25 Liter).
- Slider 2: Margin keuntungan rata-rata per liter (Rp 3.000 – Rp 8.000).
- Output Dinamis:
  - Estimasi Omzet Bulanan (Rp 25.000.000 – Rp 75.000.000+).
  - Estimasi Laba Bersih Bulanan (Rp 8.000.000 – Rp 28.000.000+).
  - Tombol: `"Klaim Potensi Omzet Ini via WhatsApp"`.

### C. Komponen Paket Kemitraan (`template-parts/packages-table.php`)
Menampilkan 2 paket kemitraan unggulan:
1. **Paket Starter (Rp 15.000.000)**:
   - Rak depot 8 kontainer display eksklusif.
   - Pasokan produk awal senilai Rp 6.000.000.
   - Desain interior 3D & lisensi brand Cleanique Mart.
   - Peralatan produksi, packing, filter UV higienis.
   - Include ongkos kirim.
   - Setup Google Maps, Sosmed & materi promosi cetak.
2. **Paket King (Promo Rp 27.500.000 - Normal Rp 30.000.000) [BEST SELLER]**:
   - Seluruh fasilitas Paket Starter.
   - Pasokan produk awal lebih besar senilai Rp 8.000.000.
   - Landing page khusus SEO-friendly untuk outlet mitra.
   - Pendampingan bisnis intensif 1-on-1.

### D. Komponen Jaringan Outlet Mitra (`template-parts/outlet-directory.php`)
- Filter lokasi instan: *Semua*, *Jabodetabek*, *Jawa Tengah & DIY*, *Jawa Timur*, *Sumatera*.
- Kartu outlet menampilkan: Nama Mitra, Alamat Lengkap, Link Google Maps, dan tombol WhatsApp cabang.

### E. Sticky Mobile Bottom Dock (`template-parts/mobile-dock.php`)
Bar khusus di bagian bawah layar smartphone (z-index tinggi):
- Tombol 1: **Telepon / CS** (Hotline).
- Tombol 2: **Pilih Paket** (Scroll halus ke section paket).
- Tombol 3: **WhatsApp Chat** (Tombol utama dengan animasi pulse halus).

---

## 5. Optimalisasi SEO & Schema Markup

Tema secara otomatis menyisipkan JSON-LD Structured Data:
1. **Organization**: PT Indotech Berkah Abadi, Cleanique Mart, logo, media sosial resmi.
2. **LocalBusiness**: Untuk setiap halaman cabang outlet lokal (nama, alamat jalan, kota, koordinat, telepon).
3. **Product**: Untuk halaman promo bundling biang sabun dan paket kemitraan.
4. **FAQPage**: Untuk seluruh halaman yang memiliki section tanya-jawab agar berpeluang tampil di Google Rich Results.
