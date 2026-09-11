# Dokumentasi Halaman: Tentang Kami (About Us & Profil Perusahaan)

> **URL Asli**: [https://cleaniquemart.com/about/](https://cleaniquemart.com/about/)  
> **Tipe Halaman**: Corporate Profile & Brand Credibility Page  
> **Template WordPress Acuan**: `page-about.php`  
> **Fokus Halaman**: Membangun Kepercayaan (Trust & Authority) Calon Mitra, Legalitas Usaha, dan Visi Ekosistem

---

## 1. Metadata & SEO Spec

| Parameter | Nilai / Konfigurasi |
| :--- | :--- |
| **Title Tag** | About Us - Cleanique Mart: Solusi Bisnis PKRT dari PT. Indotech Berkah Abadi |
| **Meta Description** | Profil PT Indotech Berkah Abadi, pelopor bisnis depot sabun curah dan kimia PKRT sejak 2011 di Yogyakarta. Bersertifikat Halal MUI dan izin edar resmi Kemenkes RI. |
| **Target Keyword** | Profil cleanique mart, PT Indotech Berkah Abadi, pabrik kimia laundry sleman yogyakarta, produsen sabun curah resmi |
| **Open Graph Title** | Tentang Cleanique Mart & PT Indotech Berkah Abadi |
| **Open Graph Desc** | Lebih dari 13 tahun berinovasi menyediakan produk kimia pembersih ramah lingkungan dan peluang kemitraan depot sabun nasional. |
| **Canonical URL** | `https://cleaniquemart.com/about/` |
| **Schema Types** | `AboutPage`, `Organization`, `Corporation` |

---

## 2. Struktur Section & Wireframe Layout

1. **Hero Header Perusahaan**:
   - H1: *"Cleanique Mart: Solusi Bisnis PKRT Terpercaya dari PT. Indotech Berkah Abadi"*.
   - Subtitle: *"Menghadirkan inovasi produk kimia pembersih rumah tangga dan laundry berkualitas tinggi, aman, dan teruji laboratorium sejak 2011."*.
2. **Statistik Kunci & Pencapaian**:
   - 13+ Tahun Pengalaman Manufaktur (Sejak 2011).
   - > 1 Juta Produk Terjual di Seluruh Indonesia.
   - 12+ Jaringan Cabang Depot Mitra Aktif.
   - 100% Produk Berizin Edar Resmi PKRT Kemenkes RI & Halal MUI.
3. **Sejarah & Latar Belakang Perusahaan**:
   - Perjalanan PT Indotech Berkah Abadi dari Yogyakarta dalam menyuplai kebutuhan B2B industri laundry hingga mengembangkan model waralaba depot sabun curah Cleanique Mart.
4. **Pilar Ekosistem Cleanique Group**:
   - **Cleanique Lab**: Divisi formulasi kimia, R&D, pengujian laboratorium dan penjamin mutu.
   - **Cleanique Mart**: Jaringan kemitraan depot ritel dan isi ulang sabun curah bagi masyarakat.
   - **Cleanique Academy**: Pusat pelatihan SOP pembuatan/pelarutan sabun, manajemen kasir, dan strategi pemasaran lokal.
   - **Depo Cleanique**: Titik hub distribusi dan rantai pasok bahan baku konsentrat ke seluruh mitra daerah.
   - **Orchid Care / Orchid Brand**: Manufaktur produk kimia laundry spesialis (parfum laundry standar IFRA, deterjen rendah busa mesin cuci).
5. **Komitmen Ramah Lingkungan (Green & Zero Waste Movement)**:
   - Dukungan terhadap gerakan Indonesia Bersih Sampah Plastik dengan mendorong konsumen membawa wadah botol bekas sendiri (*refill culture*).
6. **Galeri Dokumentasi Pabrik & Outlet**:
   - Foto suasana produksi, mesin pengemasan, dan outlet fisik mitra di Depok, Palembang, Malang, Situbondo, dan Yogyakarta.
7. **Legalitas & Sertifikasi Mutu**:
   - Sertifikat Produksi PKRT Kemenkes RI.
   - Sertifikasi Halal Majelis Ulama Indonesia (MUI).
   - Hasil Uji Laboratorium Kesehatan Daerah (Labkesda).
8. **Call To Action Penutup**:
   - Undangan kolaborasi bisnis atau konsultasi pembukaan cabang baru.

---

## 3. Salinan Teks Lengkap (Wrapped Copywriting)

### Profil Perusahaan:
```text
PT. Indotech Berkah Abadi adalah perusahaan manufaktur dan distribusi yang berbasis di Sleman, Daerah Istimewa Yogyakarta. Kami menghadirkan merek produk Cleanique Lab serta konsep kemitraan Cleanique Mart sebagai solusi bisnis Perbekalan Kesehatan Rumah Tangga (PKRT) yang inovatif, menguntungkan, dan berkelanjutan.

Sejak didirikan pada tahun 2011, fokus utama kami adalah memastikan setiap rumah tangga dan pelaku usaha (laundry, kuliner, perhotelan) mendapatkan akses ke produk kebersihan standar industri dengan harga yang sangat terjangkau melalui pemotongan rantai distribusi yang tidak efisien.
```

### Nilai Tambah Ekosistem:
```text
Cleanique Lab: Produk PKRT Berkualitas Tinggi dan Bersertifikasi Halal MUI
Cleanique Lab adalah merek produk PKRT yang menyediakan berbagai jenis produk berkualitas tinggi, aman, dan bersertifikasi Halal MUI. Produk Cleanique Lab telah memiliki izin edar resmi, sehingga terjamin keamanannya bagi konsumen dan memberikan kepastian hukum dan kepastian bisnis jangka panjang bagi para mitra Cleanique Mart.

Cleanique Mart: Mendukung Gerakan Indonesia Bersih Sampah Plastik
Melalui konsep isi ulang (refill station), Cleanique Mart tidak hanya menciptakan peluang usaha yang menguntungkan, tetapi juga secara aktif mengedukasi masyarakat untuk mengurangi timbunan botol plastik sekali pakai. Pelanggan cukup membawa botol bekas mereka sendiri untuk diisi ulang dengan deterjen atau pelembut berkualitas pabrik.
```

---

## 4. Implementasi Tema WordPress (`cleaniquemart-theme`)

- **File Template**: `page-about.php`
- **Template Parts**:
  ```php
  get_template_part('template-parts/hero-about');
  get_template_part('template-parts/company-milestones');
  get_template_part('template-parts/ecosystem-5pillars');
  get_template_part('template-parts/zero-waste-commitment');
  get_template_part('template-parts/certifications-legal');
  get_template_part('template-parts/cta-banner');
  ```
- **Integrasi Peta Lokasi**: Embed koordinat kantor pusat Jongke Tengah Sleman, Yogyakarta.
