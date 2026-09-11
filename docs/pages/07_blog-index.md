# Dokumentasi Halaman: Indeks Blog & Edukasi Produk (`/blog/`)

> **URL Asli**: [https://cleaniquemart.com/blog/](https://cleaniquemart.com/blog/)  
> **Tipe Halaman**: Blog Index / Content Hub  
> **Template WordPress Acuan**: `index.php` atau `home.php` / `archive.php`  
> **Fokus Halaman**: Edukasi Formulasi Kimia, Panduan Pembuatan Sabun Mandiri, dan Traffic Organik SEO

---

## 1. Metadata & SEO Spec

| Parameter | Nilai / Konfigurasi |
| :--- | :--- |
| **Title Tag** | Blog & Artikel Edukasi Sabun - Cleanique Mart |
| **Meta Description** | Kumpulan artikel edukasi cara membuat sabun sendiri, panduan bisnis laundry, tips hemat deterjen, dan review produk formulasi Cleanique Lab. |
| **Target Keyword** | Artikel cara buat sabun, tips bisnis laundry, panduan biang deterjen, blog cleanique mart |
| **Open Graph Title** | Pusat Edukasi & Blog Kimia Kebersihan Cleanique Mart |
| **Open Graph Desc** | Temukan tips praktis menghemat biaya sabun rumah tangga dan strategi meningkatkan keuntungan usaha laundry Anda. |
| **Canonical URL** | `https://cleaniquemart.com/blog/` |
| **Schema Types** | `Blog`, `CollectionPage` |

---

## 2. Struktur Section & Wireframe Layout

1. **Hero Banner Blog**:
   - H1: *"Artikel & Panduan Edukasi Kebersihan"*.
   - Subtitle: *"Wawasan seputar cara praktis membuat sabun hemat dari biang konsentrat, tips perawatan pakaian laundry, dan peluang usaha kebersihan modern."*.
2. **Search & Filter Bar**:
   - Kolom pencarian judul artikel realtime.
   - Filter kategori (Kategori Utama: *Artikel*, *Peluang Bisnis*, *Tips Laundry*, *Formulasi Sabun*).
3. **Featured Post (Artikel Pilihan)**:
   - Menyoroti artikel unggulan (misal: formulasi biang karbol sereh atau rahasia deterjen cair terbaik).
4. **Grid Artikel Utama (3 Kolom Responsif)**:
   - Menampilkan 8 artikel produk dengan kartu visual:
     - Foto Thumbnail Produk / Ilustrasi.
     - Badge Kategori.
     - Tanggal Terbit & Estimasi Waktu Baca.
     - Judul Artikel (H3 yang dapat diklik).
     - Cuplikan Paragraf Pertama (Excerpt).
     - Tombol Tautan: *"Baca Selengkapnya &rarr;"*.
5. **Sidebar / Widget Banner Penawaran Kemitraan**:
   - Box CTA Banner: *"Ingin Menjual Produk-Produk Ini di Kota Anda? Gabung Mitra Cleanique Mart Sekarang!"*.
6. **Pagination**:
   - Navigasi halaman sebelumnya / selanjutnya untuk skalabilitas ratusan artikel di masa depan.

---

## 3. Daftar 8 Artikel yang Dipublikasikan

1. **Biang Karbol Wangi Sereh Pinus Cemara, Solusi Hemat & Efektif Jadi 5 Liter**
   - *Slug*: `biang-karbol-wangi-sereh-pinus-cemara-5-liter`
   - *Fokus*: Disinfektan pembersih lantai anti nyamuk & bakteri untuk rumah sakit dan hunian.
2. **Sabun Cuci Tangan Cair Paket Bahan Arai 1 Kg Jadi 15 Liter**
   - *Slug*: `sabun-cuci-tangan-cair-dengan-paket-bahan-arai`
   - *Fokus*: Solusi pengadaan hand soap higienis berbusa melimpah untuk resto, cafe, kantor, dan sekolah.
3. **Konsentrat Pembersih Lantai Solusi Super Hemat Untuk Lantai Bersih dan Harum**
   - *Slug*: `konsentrat-pembersih-lantai-solusi-super-hemat-untuk-lantai-bersih-dan-harum`
   - *Fokus*: Efisiensi biaya pembersih lantai harian tanpa meninggalkan residu licin.
4. **Softener Softsense: Solusi Praktis dan Ekonomis**
   - *Slug*: `softener-softsense-solusi-praktis-dan-ekonomis`
   - *Fokus*: Paket bahan softener siap larut dengan wangi mewah untuk pebisnis laundry kiloan.
5. **Konsentrat Pelicin Pakaian: Praktis, Hemat, dan Wangi**
   - *Slug*: `konsentrat-pelicin-pakaian-praktis-hemat-dan-wangi`
   - *Fokus*: Pelicin setrika anti kusut yang menjaga serat kain tetap awet dan harum tahan lama.
6. **Paket Bahan Pewangi Laundry Essenz Solusi Cerdas untuk Kebutuhan Laundry Anda**
   - *Slug*: `paket-bahan-pewangi-laundry`
   - *Fokus*: Paket bahan 800 gram jadi 8 Liter bibit pewangi waterbase berkualitas ekspor.
7. **Biang Sabun Cuci Piring Konsentrat Lebih Murah Dan Hemat (Octa+)**
   - *Slug*: `biang-sabun-cuci-piring-konsentrat`
   - *Fokus*: Solusi cuci piring kesat bebas lemak khusus warung makan, katering, dan restoran.
8. **Deterjen Cair Terbaik (Determart)**
   - *Slug*: `deterjen-cair-terbaik`
   - *Fokus*: Perbandingan deterjen cair vs bubuk dan standar kebersihan cucian modern.

---

## 4. Implementasi Tema WordPress (`cleaniquemart-theme`)

- **File Template**: `home.php` (untuk blog index) dan `archive.php` (untuk kategori).
- **Template Parts**:
  ```php
  get_template_part('template-parts/hero-blog');
  get_template_part('template-parts/post-card'); // Digunakan di dalam standard WordPress loop
  get_template_part('template-parts/pagination');
  get_template_part('template-parts/sidebar-cta-partnership');
  ```
- **Loop WordPress Standar**:
  ```php
  if ( have_posts() ) :
      echo '<div class="cm-blog-grid">';
      while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/post-card' );
      endwhile;
      echo '</div>';
      the_posts_pagination();
  endif;
  ```
