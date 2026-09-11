# cleaniquemart_theme

> **Tema Resmi Cleanique Mart — Platform & Ekosistem Kemitraan Depot Isi Ulang Sabun Curah & Deterjen Laundry Resmi Kemenkes RI**  
> Ditenagai oleh sinergi manufaktur kimia kebersihan terpadu: **Cleanique Mart**, **Cleanique Lab**, **Orchid Brand**, **Cleanique Academy**, dan **Depo Cleanique**.

---

## 🌟 Tentang Proyek

**Cleanique Mart Theme** adalah tema WordPress kustom berkinerja tinggi (*high-performance custom theme*) yang dikembangkan khusus untuk menghadirkan pengalaman visual premium, modern, dan konversi tinggi (*high-converting landing & catalog*).

Tema ini mereplikasi dan menyempurnakan struktur autentik Cleanique Mart dengan sistem desain modern:
- **Hero Badge Glassmorphism Bersih**: Seluruh hero section menggunakan badge kaca (*glass badge*) transparan yang elegan tanpa icon atau emoji berlebih.
- **Direktori Mitra Lengkap**: Halaman cabang mitra dilengkapi modal popup detail komprehensif (foto outlet, alamat lengkap, patokan/landmark, jam buka, tombol salin alamat dengan toast feedback, checklist 5 layanan, 4 fasilitas, WhatsApp dinamis, dan navigasi Google Maps).
- **Pusat Edukasi & Artikel (Blog)**: Dilengkapi bagian **Sorotan Utama Lab (Blog Spotlight)** untuk artikel unggulan serta penomoran halaman aktif (*numbered pagination*).
- **Single Post Terintegrasi**: Memuat kartu navigasi artikel sebelumnya & selanjutnya (*Next/Prev Cards*), rekomendasi artikel terkait 3-kolom, serta formulir komentar native WordPress yang modern dan aman.

---

## 📂 Struktur Tema & File Proyek

```
cleaniquemart/
├── .gitignore                   # Aturan pengabaian WordPress core & file sensitif
├── README.md                    # Dokumentasi utama proyek
├── PRD.md                       # Product Requirements Document
├── CONTENT.md                   # Panduan konten & copywriting
├── TODO.md                      # Log histori pengembangan fitur
├── docs/                        # Dokumentasi arsitektur per halaman
│   └── pages/                   # Spesifikasi teknis halaman
│
└── wp-content/
    └── themes/
        ├── cleaniquemart/       # Tema Aktif Cleanique Mart
        │   ├── style.css        # Deklarasi tema WordPress
        │   ├── functions.php    # Konfigurasi tema, enqueue script & filter pagination
        │   ├── header.php       # Header, navigasi, font Lexend & asset loader
        │   ├── footer.php       # 4-kolom footer ekosistem & script universal
        │   ├── front-page.php   # Beranda utama Cleanique Mart
        │   ├── page-mitra.php   # Halaman direktori cabang & modal detail mitra
        │   ├── page-about.php   # Halaman profil perusahaan & visi misi
        │   ├── page-contact.php # Halaman kontak & peta lokasi
        │   ├── page-kemitraan.php # Halaman paket kemitraan
        │   ├── page-kemitraan-paket-starter.php # Landing paket Starter
        │   ├── page-kemitraan-paket-king.php    # Landing paket King
        │   ├── page-promo-bundling.php          # Landing promo bundling hemat
        │   ├── home.php         # Halaman artikel blog, sorotan lab & pagination
        │   ├── single.php       # Detail artikel, post nav & related posts
        │   ├── comments.php     # Template diskusi & kolom komentar
        │   ├── archive.php      # Arsip kategori & topik artikel
        │   ├── page.php         # Template halaman standar
        │   ├── index.php        # Fallback template
        │   │
        │   ├── assets/
        │   │   ├── css/
        │   │   │   ├── main.css            # Sistem token desain, glass & komponen kustom
        │   │   │   ├── oxygen.css          # Framework styling visual tema
        │   │   │   └── ctc-whatsapp.css    # Integrasi tombol WhatsApp melayang
        │   │   ├── js/
        │   │   │   └── main.js             # Interaktivitas UI & filter
        │   │   └── images/                 # Aset gambar gerai mitra, produk & logo
        │   │
        │   └── template-parts/  # Modul komponen reusable (hero, FAQ, keunggulan, dll.)
        │
        └── peluangusahalaundry/ # Template kemitraan laundry pendukung
```

---

## 🎨 Fitur Utama & Peningkatan Desain

1. **Hero Badge Glassmorphism Universal**
   - Menggunakan CSS `.cm-badge-glass-hero` murni tanpa icon/emoji.
   - Efek blur latar belakang (`backdrop-filter: blur(12px)`), border tipis semi-transparan, font semi-bold proporsional, dan badge rounded-pill.

2. **Direktori Mitra Interaktif & Modal Detail**
   - 12 cabang mitra resmi di berbagai kota (Jakarta, Tangerang, Bogor, Demak, Temanggung, Karanganyar, Malang, Kediri, Jember, Banyuwangi, Jambi).
   - Modal detail `#cm-mitra-detail-modal` dengan tombol **Salin Alamat Lengkap** (dilengkapi toast notification), jam operasional, produk/layanan, fasilitas, serta deep-linking URL hash (`#mitra-{id}`).

3. **Blog Spotlight & Numbered Pagination**
   - Menampilkan artikel sorotan utama di halaman pertama `/blog/`.
   - Navigasi halaman bernomor aktif (`1`, `2`, `← Sebelumnya`, `Selanjutnya →`) dengan limit 6 postingan per halaman.

4. **Single Post Lengkap & Ramah Pembaca**
   - Estimasi waktu baca (*reading time*) dan metadata terverifikasi Cleanique Lab.
   - Navigasi 2 kartu interaktif artikel sebelumnya & selanjutnya.
   - Rekomendasi 3 kolom artikel terkait dalam kategori relevan.
   - Kolom komentar native WordPress (`comments.php`) yang rapi dan aman.

---

## 🚀 Panduan Instalasi Lokal

1. **Clone Repositori**:
   ```bash
   git clone https://github.com/ilhamkrnwan/cleaniquemart_theme.git
   ```
2. Salin folder tema ke direktori WordPress Anda di `wp-content/themes/cleaniquemart`.
3. Buka **WP Admin > Appearance > Themes**, lalu aktifkan **Cleanique Mart**.
4. Buka **Settings > Permalinks**, pilih opsi **Post name (%postname%)**, lalu simpan.

---

## 📞 Kontak & Lisensi

- **Perusahaan**: PT Indotech Berkah Abadi / Cleanique Mart Group
- **Kantor Pusat**: Sleman, D.I. Yogyakarta, Indonesia
- **Layanan WhatsApp**: [0878-8559-0088](https://api.whatsapp.com/send/?phone=6287885590088)
- **Website**: [cleaniquemart.com](https://cleaniquemart.com)
