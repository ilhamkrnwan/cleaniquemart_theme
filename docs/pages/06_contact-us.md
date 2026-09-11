# Dokumentasi Halaman: Kontak Kami (Contact Us & Layanan Pelanggan)

> **URL Asli**: [https://cleaniquemart.com/contact-us/](https://cleaniquemart.com/contact-us/)  
> **Tipe Halaman**: Contact & Customer Support Page  
> **Template WordPress Acuan**: `page-contact.php`  
> **Fokus Konversi**: Layanan Bantuan Calon Mitra, Pengaduan, dan Pengarahan Konsultasi Offline ke Kantor Sleman

---

## 1. Metadata & SEO Spec

| Parameter | Nilai / Konfigurasi |
| :--- | :--- |
| **Title Tag** | Hubungi Kami - Cleanique Mart \| Pusat isi ulang sabun dan kemitraan |
| **Meta Description** | Hubungi tim Cleanique Mart untuk informasi kemitraan depot sabun curah, pembelian bahan kimia laundry, atau kunjungan langsung ke kantor marketing Sleman Yogyakarta. |
| **Target Keyword** | Kontak cleanique mart, no wa cleanique mart, kantor cleanique mart sleman yogyakarta |
| **Open Graph Title** | Kontak Resmi Cleanique Mart - CS & Kantor Pusat |
| **Open Graph Desc** | Tim profesional kami siap menjawab kebutuhan bisnis depot sabun dan kimia kebersihan Anda. Hubungi kami via WhatsApp atau datang ke kantor Sleman. |
| **Canonical URL** | `https://cleaniquemart.com/contact-us/` |
| **Schema Types** | `ContactPage`, `LocalBusiness`, `PostalAddress` |

---

## 2. Struktur Section & Wireframe Layout

1. **Header Kontak**:
   - H1: *"Hubungi Kami"*.
   - Subtitle: *"Memiliki pertanyaan atau membutuhkan bantuan? Tim profesional kami siap membantu Anda dengan konsultasi kemitraan, info produk, atau bantuan teknis lainnya."*.
2. **Kartu Informasi Kontak (3 Kartu Utama)**:
   - **Kartu 1: Hotline WhatsApp & Telepon**:
     - Nomor: `087885590088`
     - Tombol: `Chat WhatsApp Sekarang`
     - Keterangan: Respon cepat pada jam kerja (08.00 - 17.00 WIB).
   - **Kartu 2: Alamat Kantor Marketing**:
     - Alamat: Jongke Tengah No. 30 RT.01/RW.23, Sendangadi, Kec. Mlati, Kab. Sleman, D.I. Yogyakarta 55285.
     - Keterangan: Buka untuk kunjungan konsultasi langsung dan survey sampel produk.
   - **Kartu 3: Email Korespondensi**:
     - Email: `info@cleaniquemart.com` (atau melalui form resmi).
3. **Interactive Contact Form**:
   - Kolom: Nama Lengkap, Nomor WhatsApp, Kota/Kabupaten Domisili, Topik Kepentingan (Kemitraan Depot, Pembelian Grosir B2B, Kemitraan Cabang Baru, Lainnya), Pesan Tambahan.
   - Tombol: *"Kirim Pesan"* (dapat mengarah langsung ke email admin atau membuka obrolan WhatsApp otomatis).
4. **Peta Interaktif Google Maps (Embed Sleman DIY)**:
   - Peta lokasi kantor pusat PT Indotech Berkah Abadi di Sleman untuk memudahkan navigasi Google Maps para calon mitra dari luar kota.
5. **Jam Operasional & Pelayanan**:
   - Senin – Jumat: 08.00 – 17.00 WIB
   - Sabtu: 08.00 – 15.00 WIB
   - Minggu & Hari Libur Nasional: Tutup (Konsultasi tetap dilayani via antrean WhatsApp).

---

## 3. Salinan Teks Lengkap (Wrapped Copywriting)

```text
Hubungi Kami Melalui Kontak Di Bawah Ini:

Kantor Marketing & Showroom Sampel:
PT Indotech Berkah Abadi
Jongke Tengah no. 30 RT.01/RW.23, Jongke Tengah, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285.

Penyedia produk kebersihan berkualitas tinggi serta ramah lingkungan dengan harga terjangkau.

Hotline / WhatsApp Resmi:
087885590088 (+62 878-8559-0088)
Format Chat Cepat:
"Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*"
```

---

## 4. Implementasi Tema WordPress (`cleaniquemart-theme`)

- **File Template**: `page-contact.php`
- **Template Parts**:
  ```php
  get_template_part('template-parts/hero-contact');
  get_template_part('template-parts/contact-cards');
  get_template_part('template-parts/contact-form');
  get_template_part('template-parts/google-maps-embed');
  ```
- **Keamanan Form**: Dilengkapi field honeypot anti-spam (`wp-armour` compatible) dan sanitasi input via WordPress `sanitize_text_field()`.

---

## 5. Integrasi Plugin (`cleaniquemart-core`)

- Endpoint penangan form AJAX: Form kontak dapat mengirimkan email notifikasi ke administrator WordPress menggunakan `wp_mail()` dan secara bersamaan memicu pop-up tombol konfirmasi WhatsApp instan.
