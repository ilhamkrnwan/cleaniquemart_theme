# Rencana Kerja (Plan.md): Perbaikan Landing Page Cleanique Mart

Dokumen rencana komprehensif perbaikan tampilan dan pembaruan aset pada halaman beranda landing page (`front-page.php`) Cleanique Mart.

---

## 1. Hero Section & Global Icons Bug

### A. Masalah Ikon Tidak Muncul (Hero & Section Lainnya)
* **Temuan**:
  Ikon-ikon di template dipanggil dengan tag SVG seperti:
  ```html
  <svg class="oxygen-icon-close"><use xlink:href="#FontAwesomeicon-close"></use></svg>
  <svg class="oxygen-icon-check"><use xlink:href="#FontAwesomeicon-check"></use></svg>
  <svg class="oxygen-icon-check-circle"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg>
  ```
  Namun, deklarasi simbol SVG (`<defs><symbol id="...">`) tidak ada di halaman (`header.php` maupun `front-page.php`), sehingga ikon tidak ter-render sama sekali (kosong).
* **Solusi**:
  Sediakan blok SVG defs lengkap berisi symbol FontAwesome yang digunakan:
  - `#FontAwesomeicon-close` (untuk poin masalah hero section)
  - `#FontAwesomeicon-check` (untuk poin centang)
  - `#FontAwesomeicon-check-circle` (untuk centang bulat)
  - `#FontAwesomeicon-whatsapp` (untuk tombol WA)
  - `#FontAwesomeicon-star` (untuk rating jika ada)
  Diletakkan di bagian atas `front-page.php` atau `header.php` secara hidden (`display: none;`).

### B. Bug Horizontal Scroll
* **Temuan**:
  1. Elemen `#image-390-100` (`bubble.webp`) di hero section (`#section-3-100`) memiliki ukuran alami 1000px dan posisi absolut di sisi kanan bawah yang melebar keluar viewport layar, mendorong lebar halaman dan memunculkan scroll horizontal.
  2. Elemen `#section-3-100` belum memiliki `overflow: hidden;`.
  3. `html, body` belum memiliki proteksi `overflow-x: hidden;`.
* **Solusi**:
  1. Pasang `overflow: hidden; position: relative;` pada `#section-3-100`.
  2. Batasi `#image-390-100` dengan `max-width: 450px; right: 0; bottom: 0; pointer-events: none;`.
  3. Tambahkan `overflow-x: hidden; width: 100%;` pada `html, body`.

### C. Penyejajaran Poin Kiri dan Kanan pada Hero Section
* **Temuan**:
  - Kolom kiri berisi 5 poin masalah:
    1. *Pernah merasa bingung harus mulai dari mana?*
    2. *Tak tahu cara memasarkan produk atau layanan dengan efektif?*
    3. *Bingung dengan cara promosi yang tepat?*
    4. *Takut bisnis kamu gagal atau malah rugi?*
    5. *Takut ditipu atau justru tertipu oleh janji manis yang tak terbukti?*
  - Kolom kanan berisi 4 poin dampak:
    1. *Peluang besar terlewat begitu saja.*
    2. *Kamu terjebak dalam kehidupan finansial yang tidak berkembang.*
    3. *Mimpi besar malah terkubur dalam kondisi finansial yang terbatas.*
    4. *Dan itu membuat rasa menyesal semakin menguasai dirimu.*
  - Judul kolom kiri ("Kamu Mau Sukses dalam Bisnis, Tapi...") dan kolom kanan ("Akibatnya") memiliki tinggi yang tidak seimbang, dan item tidak dikelompokkan dalam grid yang simetris sehingga tampak acak dan tidak sejajar secara horizontal.
* **Solusi**:
  - Samakan baseline heading kedua kolom.
  - Terapkan layout flex/grid dengan baris tinggi konsisten (`align-items: flex-start`, gap teratur, baris berpasangan yang seimbang).

---

## 2. Section: "Sabun curah sangat dibutuhkan oleh pemilik usaha"

* **Kebutuhan**:
  - Menggunakan ikon SVG dari folder `assets/images/icon/` (`batch_Page 1.svg` s/d `batch_Page 12.svg`).
  - Menambahkan 3 kategori target bisnis baru:
    1. **Sekolah / Universitas** (`batch_Page 10.svg`)
    2. **Perkantoran** (`batch_Page 11.svg`)
    3. **Kopdes / SPPG** (`batch_Page 12.svg`)

* **Daftar Lengkap 12 Kategori & Pemetaan File**:
  1. **Laundry & Cuci Kiloan** &rarr; `assets/images/icon/batch_Page 1.svg`
  2. **Rumah Makan & Restoran** &rarr; `assets/images/icon/batch_Page 2.svg`
  3. **Rumah Tangga / Reseller** &rarr; `assets/images/icon/batch_Page 3.svg`
  4. **Industri & Gedung** &rarr; `assets/images/icon/batch_Page 4.svg`
  5. **Hotel & Penginapan** &rarr; `assets/images/icon/batch_Page 5.svg`
  6. **Salon & Barbershop** &rarr; `assets/images/icon/batch_Page 6.svg`
  7. **Klinik & Rumah Sakit** &rarr; `assets/images/icon/batch_Page 7.svg`
  8. **Cuci Mobil & Motor** &rarr; `assets/images/icon/batch_Page 8.svg`
  9. **Tempat Ibadah** &rarr; `assets/images/icon/batch_Page 9.svg`
  10. **Sekolah / Universitas** *(Baru)* &rarr; `assets/images/icon/batch_Page 10.svg`
  11. **Perkantoran** *(Baru)* &rarr; `assets/images/icon/batch_Page 11.svg`
  12. **Kopdes / SPPG** *(Baru)* &rarr; `assets/images/icon/batch_Page 12.svg`

* **Layout**:
  Grid 4 kolom (Desktop), 3 kolom (Tablet), 2 kolom (Mobile). Desain kartu berlatar belakang bersih dengan efek hover modern.

---

## 3. Section: "Kenapa bisnis sabun bersama cleaniquemart"

* **Kebutuhan**:
  Mengganti ikon/teks lama menjadi kartu infografis bergambar menggunakan 6 gambar yang ada di `assets/images/features/`.
* **6 Gambar Fitur**:
  1. `assets/images/features/Konsumsi Berulang.png`
  2. `assets/images/features/Terjual Lebih dari 1 Juta Produk.png`
  3. `assets/images/features/Harga Kompetitif.png`
  4. `assets/images/features/Ramah Lingkungan.png`
  5. `assets/images/features/Pelatihan Produk_ Kami.png`
  6. `assets/images/features/Pengurusan Izin Usaha.png`
* **Layout**:
  Grid 3 kolom x 2 baris (Desktop) dan 1 atau 2 kolom (Mobile), gambar tampil penuh dan tajam dengan border-radius modern.

---

## 4. Section: Testimoni

* **Kebutuhan**:
  Mengganti gambar testimoni lama (`Testimoni-1.webp` s/d `Testimoni-7.webp`) dengan 15 file gambar review asli dari `assets/images/testimoni/`.
* **15 File Review**:
  1. `review arai.png`
  2. `review athari.png`
  3. `review biang karbol.png`
  4. `review biang pel lantai.png`
  5. `review determat busa.png`
  6. `review determat eco.png`
  7. `review determat matic.png`
  8. `review detta +.png`
  9. `review essenz.png`
  10. `review konsentrat parfum alkoholbase.png`
  11. `review o_clean.png`
  12. `review octa+.png`
  13. `review shabil.png`
  14. `review softa.png`
  15. `review softsense.png`
* **Implementasi**:
  Memasukkan ke dalam slider carousel dengan navigasi panah & dots sehingga pengunjung dapat menggeser seluruh 15 review dengan mulus.

---

## 5. Section: Varian Produk (Hand Wash 25 L)

* **Kebutuhan**:
  Pada kartu produk **Hand Wash 25 L**, ubah sumber gambar menjadi:
  `assets/images/Hand Washing 25L new.png`
  (`<?php echo get_template_directory_uri(); ?>/assets/images/Hand Washing 25L new.png`).

---

## 6. Berkas yang Terlibat
* `wp-content/themes/cleaniquemart/front-page.php` (struktur konten, grid, svg defs, path gambar)
* `wp-content/themes/cleaniquemart/assets/css/oxygen-100.css` (styling penyejajaran, overflow-x fix, tata letak grid)
