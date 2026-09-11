# PANDUAN & ATURAN ISI KONTEN (CONTENT.MD)
## Theme: Peluang Usaha Laundry (Cleanique & Orchid Brand Ecosystem)
**Target Domain:** `peluangusahalaundry.com`  
**Pabrik / Manufaktur:** PT Indotech Berkah Abadi / Orchid Brand (Sleman, D.I. Yogyakarta)  
**Ekosistem:** Cleanique Mart, Cleanique Lab, Orchid Brand, Cleanique Academy, Depo Cleanique  
**Versi:** 1.0 (Pedoman Resmi Produksi Konten)

---

## 1. Mengenal Isi Asli Website `peluangusahalaundry.com` (Analisis Eksisting)

Website asli [peluangusahalaundry.com](https://peluangusahalaundry.com/) yang aktif saat ini memiliki profil berikut:
1. **Latar Belakang & Pemilik:** Dikelola oleh **Siswo / PT Indotech Berkah Abadi / Orchid Brand** sejak tahun 2012.
2. **Fokus Konten Eksisting:** 
   - Penawaran grosir & peluang keagenan **Pewangi Laundry / Parfum Laundry, Deterjen, Softener, Pelicin Setrika, dan Sabun Cuci Piring**.
   - Menargetkan pencari grosir kimia laundry se-Indonesia dengan kontak utama WhatsApp `08785590088` & `085600061005`.
   - Menggunakan banner legendaris bertuliskan *"DICARI SETIAP HARI: Agen Pewangi Laundry Seluruh Indonesia"*.
   - Menyematkan video YouTube autentik proses produksi pabrik di Sleman, Yogyakarta.
3. **Kelemahan Konten Lama:**
   - Visual dan layout bergaya WordPress lama (GeneratePress + Elementor jadul) yang padat teks tanpa hierarki visual yang jelas.
   - Belum memiliki alat interaktif (seperti simulasi kalkulator cuan, filter katalog produk instan).
   - Penawaran belum dipaketkan secara rapi (belum membedakan secara tegas antara pembeli laundry pemula, reseller rumahan, maklon merek sendiri, dan master distributor wilayah).

### 🎯 Arah Transformasi Konten Baru:
> Ubah dari sekadar *"Brosur Online Jual Sabun Grosir"* menjadi **"Portal Solusi & Pusat Kemitraan Bisnis Usaha Laundry Terlengkap di Indonesia (Langsung dari Pabrik Tangan Pertama)"**.

---

## 2. Brand Identity & Voice (Nada Bahasa & Karakter Brand)

### A. Persona Brand (Siapa yang Berbicara?)
Website ini berbicara sebagai **Pabrik Produsen Tangan Pertama yang Mengayomi, Berpengalaman, dan Berbasis Sains/Teknologi**:
- **Bukan calo/reseller perantara:** Selalu tekankan bahwa stok barang berasal langsung dari lini produksi Sleman, Yogyakarta.
- **Rasional & Berbasis Fakta:** Bukan skema cepat kaya (MLM), melainkan bisnis riil kebutuhan harian (sabun habis terpakai setiap hari).
- **Edukatif & Solutif:** Membantu mitra dari nol, menyediakan SOP, bimbingan cara mencuci bersih, hingga tips menjual kembali.

### B. Tone of Voice (Gaya Bahasa)
1. **Ramah & Memberdayakan:** Gunakan sapaan *"Anda"*, *"Sahabat Mitra"*, atau *"Pengusaha Laundry"*. Hindari bahasa yang terlalu kaku akademis atau sebaliknya terlalu gaul/slang.
2. **Tegas pada Kualitas (High Confidence):** Tonjolkan parameter kualitas nyata: *Standar IFRA Global, Uji Laboratorium Labkesda DIY, Air Distilasi Murni TDS = 0 (Anti Apek), Ramah Mesin Cuci*.
3. **Transparan pada Margin:** Berikan gambaran keuntungan yang masuk akal (margin 25% – 40% untuk agen, atau penghematan biaya produksi hingga Rp 300 - Rp 500 per kg cucian bagi pemilik laundry).

---

## 3. Segmentasi Audiens & Sudut Penawaran (3 Target Persona)

Setiap halaman dan artikel wajib menyasar salah satu atau ketiga profil ini:

| Persona | Profil & Kebutuhan | Hook / Sudut Penawaran yang Menarik |
|---|---|---|
| **1. Calon Agen Pemula / IRT / Karyawan** | Modal Rp 750rb – Rp 3jt. Ingin bisnis sampingan di rumah tanpa harus bikin pabrik sendiri. | *"Modal terjangkau mulai 750 ribu, repeat order tinggi karena sabun kebutuhan pokok harian, disediakan materi promosi & bimbingan sampai laku."* |
| **2. Pengusaha Gerai Laundry Kiloan/Satuan** | Pemilik laundry yang butuh sabun/parfum wangi awet 30 hari & hemat per kg cuci. | *"Pangkas HPP cucian Anda! Beli langsung harga pabrik tangan pertama, wangi awet tidak apek berkat air TDS 0, pelanggan makin setia."* |
| **3. Master Agen & Pemilik Brand Sendiri (Maklon)** | Modal Rp 5jt – Rp 50jt+. Punya toko/kargo di luar Jawa atau ingin punya merk sabun sendiri. | *"Bisa Private Label (Maklon merek Anda sendiri) & Tersedia Biang Sabun Konsentrat 1 Kg (hemat kargo hingga 80% ke Luar Pulau Jawa)."* |

---

## 4. Aturan Konten per Bagian Halaman (`template-parts/`)

Sesuai dengan susunan tema WordPress `peluangusahalaundry`, berikut aturan isi untuk masing-masing bagian:

### 4.1 Topbar Announcement
- **Fungsi:** Menimbulkan urgensi positif atau mengumumkan subsidi pengiriman.
- **Aturan Isi:** Teks pendek (maksimal 1 kalimat).
- **Contoh Salinan:**
  - *"✨ Promo Mitra Baru: Dapatkan Subsidi Ongkir Kargo & Paket Sampel Varian Best Seller untuk Kota Anda! Hubungi Tim Pabrik Hari Ini."*

### 4.2 Hero Section (`template-parts/hero.php`)
- **Headline (H1):** Harus mengandung kata kunci utama dan menegaskan posisi pabrik tangan pertama.
  - *Formula:* [Peluang/Solusi] + [Produk/Kemitraan] + [Keunggulan Utama / Tangan Pertama].
  - *Contoh:* **"Raih Peluang Cuan Berkelanjutan Bersama Pabrik Kimia & Pewangi Usaha Laundry Tangan Pertama"**
- **Subheadline:** Menjelaskan tanpa perantara, lulus uji laboratorium, kualitas aroma tahan lama, dan siap kirim ke seluruh Nusantara.
- **Trust Strip Badges (4 Wajib Ada):**
  1. Pabrik Tangan Pertama (Sleman, D.I. Yogyakarta)
  2. Lulus Uji Balai Laboratorium Kesehatan (Labkesda DIY)
  3. Bibit Parfum Standar IFRA Global
  4. Campuran Murni Air Distilasi (TDS = 0, Anti Apek)
- **Visual:** Video YouTube autentik pabrik (bukan sekadar foto stok ilustrasi).

### 4.3 Metrics Bar (`template-parts/metrics.php`)
- **Fungsi:** Bukti skala bisnis (Social Proof kuantitatif).
- **Angka Resmi yang Ditampilkan:**
  - **5.000+** Mitra & Agen di Seluruh Indonesia
  - **34 Provinsi** Terjangkau Ekspedisi Kargo
  - **120+** Formulasi Varian Produk Tersertifikasi
  - **100%** Produksi Sendiri (Bukan Maklon ke Pihak Ketiga)

### 4.4 Problem & Solution (`template-parts/problem-solution.php`)
- **Masalah Pengusaha Laundry & Reseller:**
  1. Beli dari distributor lokal harga sudah kemahalan (margin tipis).
  2. Parfum laundry sering apek saat disimpan atau wanginya hilang dalam hitungan jam.
  3. Ongkos kirim jerigen cair ke luar pulau sangat mahal.
- **Solusi dari Pabrik Cleanique / Orchid Brand:**
  1. Harga pabrik tangan pertama dengan margin tebal.
  2. Formulasi air distilasi murni (TDS 0) + bibit standar IFRA menjamin wangi tahan lama hingga berminggu-minggu dalam kemasan plastik.
  3. Inovasi **Biang Konsentrat 1 Kg**: Dikirim dalam bentuk bibit pekat, dicampur air di kota tujuan menjadi puluhan liter sabun siap pakai (hemat kargo s.d 80%).

### 4.5 Kalkulator Simulasi Keuntungan (`template-parts/calculator.php`)
- **Aturan Logika:**
  - Slider 1: Penjualan botol/jerigen per hari (Range 5 s.d. 100 botol/hari).
  - Slider 2: Margin keuntungan rata-rata per botol (Rp 5.000 s.d. Rp 30.000).
  - Output: Hitungan laba bersih bulanan otomatis (Contoh: Jual 15 botol/hari dengan margin Rp 15.000 = **Rp 6.750.000 / bulan**).
- **CTA:** Tombol langsung diarahkan ke WhatsApp untuk konsultasi paket yang sesuai dengan target profit tersebut.

### 4.6 Katalog Produk Unggulan (`template-parts/products-catalog.php`)
- **Filter Kategori Wajib:**
  1. Semua Varian
  2. Parfum Laundry (Akasia, Sakura, Ocean Fresh, Snappy, Molto, Downy, dll.)
  3. Deterjen Cair Rendah Busa (Ramah Mesin Front Load & Top Load)
  4. Softener & Pelicin Setrika
  5. Anti Noda Spesifik (Noda Darah, Jamur/Bintik Hitam, Karat, Minyak/Lemak)
  6. Biang Konsentrat Hemat Kargo
- **Setiap Kartu Produk Wajib Memuat:**
  - Nama Produk & Ukuran (1 Liter / 5 Liter / 1 Kg Biang)
  - Badge Khusus (misal: *"Best Seller"*, *"TDS 0"*, *"Hemat Kargo"*)
  - Deskripsi singkat manfaat & daya tahan wangi
  - Tombol aksi: *"Tanya Harga Grosir via WA"*

### 4.7 Keunggulan Pabrik (`template-parts/advantages.php`)
Wajib merinci 6 pilar keunggulan teknis:
1. **Standar IFRA:** Aman untuk serat pakaian dan kulit sensitif.
2. **Air Distilasi TDS 0:** Formula murni, tidak meninggalkan kerak pada mesin cuci dan bebas apek.
3. **Legalitas & Uji Laboratorium:** Teruji Labkesda DIY & izin resmi.
4. **Fasilitas Maklon / Private Label:** Bisa menggunakan merk Anda sendiri.
5. **Dukungan Desain & Media Promosi:** Disediakan brosur, banner spanduk, dan foto produk siap posting.
6. **Ekspedisi Kargo Murah:** Didukung kerja sama kargo darat, laut, dan udara ke seluruh pulau.

### 4.8 Pilihan Paket Kemitraan (`template-parts/packages.php`)
Tampilkan 3 Tier yang jelas tujuannya:

1. **Paket Agen Curah / Maklon Merek Sendiri (Mulai Rp 750.000):**
   - Cocok untuk pemula yang ingin repacking sendiri atau menggunakan merek pribadi.
   - Tanpa royalti, tanpa bagi hasil.
2. **Paket Toko / Agen Resmi Orchid Brand (Rekomendasi Utama):**
   - Modal menengah (Rp 2jt – Rp 5jt).
   - Mendapatkan produk kemasan segel pabrik siap edar, spanduk toko, katalog fisik, dan bimbingan jualan.
3. **Paket Master Distributor / Wilayah Eksklusif:**
   - Untuk pengusaha grosir dengan hak proteksi wilayah kota/kabupaten.
   - Fasilitas kargo kontainer/truk, harga termurah, dan rujukan prospek dari kantor pusat.

### 4.9 Showcase Ekosistem (`template-parts/ecosystem.php`)
Tegaskan bahwa bisnis ini didukung grup manufaktur terintegrasi:
- **Cleanique Mart:** Sentra peluang usaha & distribusi ritel.
- **Cleanique Lab:** Laboratorium riset formula chemical kebersihan.
- **Orchid Brand:** Merek pelopor pewangi laundry sejak 2012.
- **Cleanique Academy:** Kursus pembuatan sabun & manajemen operasional laundry.
- **Depo Cleanique:** Jaringan depo isi ulang chemical se-Indonesia.

### 4.10 Testimonial & Bukti Pengiriman (`template-parts/testimonials.php`)
- **Aturan Testimoni:** 
  - Wajib menyertakan Nama, Kota Asal Mitra, dan Jenis Usaha (contoh: *Bpk. Hidayat - Pemilik Laundry Kiloan di Banjarmasin*).
  - Sertakan foto tumpukan jerigen siap kirim dengan resi kargo nyata (Dakota, Indah Logistik, Baraka, dll.).
  - Hindari testimoni palsu berbahasa generik.

### 4.11 Tanya Jawab / FAQ (`template-parts/faq.php`)
Wajib menjawab 8 kekhawatiran terbesar pengunjung:
1. *Berapa modal awal minimal untuk mulai?* (Mulai Rp 750.000).
2. *Apakah bisa dikirim ke luar Jawa dan bagaimana ongkirnya?* (Solusi biang konsentrat 1kg menghemat ongkir s.d 80%).
3. *Apakah bisa pakai merek sabun saya sendiri?* (Ya, fasilitas maklon/private label tersedia).
4. *Berapa lama aroma parfum bertahan di pakaian?* (Bisa bertahan 14 - 30 hari jika tersimpan rapi dalam kemasan plastik).
5. *Apakah aman untuk mesin cuci otomatis?* (Deterjen rendah busa, aman untuk mesin front loading & top loading).
6. *Bagaimana jika saya belum paham cara jualan atau cara pakainya?* (Disediakan video tutorial, grup konsultasi, dan panduan SOP).
7. *Apakah ada biaya royalti bulanan?* (Tidak ada. Keuntungan 100% milik mitra).
8. *Bagaimana cara memesan paket keagenan?* (Klik tombol WhatsApp resmi untuk terhubung langsung dengan tim administrasi pabrik).

### 4.12 Final CTA Banner & Footer (`template-parts/cta-banner.php`)
- **Pesan Urgensi Halus:** Kuota distributor resmi per kota dibatasi agar tidak terjadi perang harga antar mitra.
- **Alamat & Kontak Resmi:** 
  - Pabrik: Sleman, D.I. Yogyakarta
  - WhatsApp: `0878-5590-088` / `0856-0006-1005`
  - Jam Operasional: Senin – Sabtu (08.00 – 17.00 WIB)

---

## 5. Pedoman SEO & Kata Kunci (Keyword Matrix)

Agar website mendominasi halaman 1 Google untuk industri laundry dan bahan kimia kebersihan:

### A. Kata Kunci Utama (Target Volume Tinggi)
- `peluang usaha laundry`
- `paket usaha laundry kiloan`
- `distributor pewangi laundry`
- `pabrik kimia laundry`
- `supplier sabun laundry kiloan`

### B. Kata Kunci Spesifik / Long-tail (Konversi Tinggi)
- `agen parfum laundry modal kecil`
- `biang deterjen laundry 1kg hemat ongkir`
- `jasa maklon sabun laundry merek sendiri`
- `parfum laundry tahan lama standar IFRA`
- `paket deterjen laundry luar pulau jawa`

### C. Aturan Tag HTML:
- **H1:** Tepat **1 buah** di bagian Hero Section.
- **H2:** Untuk setiap judul Section utama (`Pilihan Paket`, `Katalog Produk`, `Simulasi Keuntungan`, `Keunggulan Pabrik`, `FAQ`).
- **H3:** Untuk judul kartu item, nama varian produk, atau pertanyaan FAQ.
- **Alt Text Gambar:** Wajib deskriptif (Contoh: `alt="Jerigen Pabrik Pewangi Laundry Orchid Brand Sleman Yogyakarta"`).

---

## 6. Format Pesan WhatsApp (Smart Lead Generation)

Semua tombol Call to Action (CTA) wajib mengarahkan pesan dengan format siap kirim agar tim sales mudah menindaklanjuti:

```text
Halo Admin Pabrik Peluang Usaha Laundry,
Saya ingin konsultasi mengenai paket kemitraan:

• Nama: 
• Kota / Kabupaten: 
• Minat Paket: [Agen Resmi / Maklon Merek Sendiri / Suplai Gerai Laundry]
• Catatan / Pertanyaan: 

Mohon informasi katalog harga pabrik dan promo ongkirnya. Terima kasih!
```

---

## 7. DO's and DON'Ts (Panduan Kualitas Konten)

### ✅ DO's (Wajib Diterapkan):
1. **Tekankan "Tangan Pertama dari Pabrik"** di setiap materi penawaran untuk membedakan diri dari toko perantara biasa.
2. **Tonjolkan "Biang Konsentrat Sabun 1 Kg"** sebagai solusi ongkos kirim kargo murah bagi calon mitra di luar Jawa, Sumatera, Kalimantan, Sulawesi, hingga Papua.
3. **Tampilkan foto dan video riil:** Dokumentasi drum produksi, jerigen bertumpuk di gudang Sleman, dan resi pengiriman kargo.
4. **Berikan data angka yang spesifik:** Sebutkan takaran pemakaian (misal: 20-30ml per 5kg pakaian) dan estimasi HPP per kg cuci.

### ❌ DON'Ts (Pantangan Keras):
1. **Jangan gunakan klaim berlebihan (Overpromise):** Hindari kalimat seperti *"Pasti langsung kaya tanpa kerja"* atau *"Jaminan omset 100 juta dalam 1 minggu"*.
2. **Jangan sembunyikan informasi harga awal:** Selalu berikan ancar-ancar modal minimal (misal *"Mulai Rp 750.000"*) agar prospek yang masuk adalah prospek yang terfilter dan siap modal.
3. **Jangan biarkan tautan CTA kosong:** Setiap tombol wajib berfungsi dan memiliki parameter pesan WhatsApp yang sesuai konteks section-nya.
4. **Jangan gunakan foto stok asing:** Hindari foto bule atau pabrik sintetis yang terlihat palsu; gunakan dokumentasi otentik lokal Yogyakarta/Indonesia.
