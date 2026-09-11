# Cetak Biru Arsitektur Plugin WordPress: Cleaniquemart Core (`cleaniquemart-core`)

> **Spesifikasi Teknis Fitur Fungsional, Custom Post Types, Shortcodes, dan WhatsApp Engine**  
> Standar: Modular, Standalone Plugin Architecture, WordPress Best Practices.

---

## 1. Ikhtisar Plugin

Plugin `cleaniquemart-core` bertugas memisahkan seluruh logika bisnis (*business logic*) dan struktur data dari tema. Hal ini menjamin bahwa jika tema visual berganti di masa mendatang, seluruh data mitra, cabang lokal, paket kemitraan, dan pengaturan WhatsApp tetap tersimpan aman di database WordPress.

### Lokasi Plugin:
`wp-content/plugins/cleaniquemart-core/cleaniquemart-core.php`

---

## 2. Struktur Direktori Plugin

```
cleaniquemart-core/
├── cleaniquemart-core.php             # File Utama Plugin (Bootstrap & Hooks)
├── includes/
│   ├── class-cpt-outlets.php          # Registrasi CPT Cabang Mitra (cleanique_outlet)
│   ├── class-cpt-packages.php         # Registrasi CPT Paket Kemitraan (cleanique_package)
│   ├── class-meta-boxes.php           # Custom Field Meta Boxes (Tanpa Harus Pasang ACF)
│   ├── class-shortcodes.php           # Handler Seluruh Shortcode WordPress
│   ├── class-wa-router.php            # Engine Pengarah & Penyusun Format Pesan WhatsApp
│   └── class-admin-settings.php       # Halaman Pengaturan Global di Menu WP-Admin
│
└── assets/
    ├── css/
    │   └── plugin-components.css      # Styling Khusus untuk Modal, Calculator & Locator
    └── js/
        ├── profit-calculator.js       # Logika Perhitungan Kalkulator Margin & Omzet
        ├── outlet-locator.js          # Filter & Pencarian Cabang Mitra Realtime
        └── wa-lead-generator.js       # Validasi Form & Redirection ke WhatsApp
```

---

## 3. Custom Post Types & Taksonomi

### A. CPT: Cabang Outlet Mitra (`cleanique_outlet`)
Digunakan untuk mengelola 12+ cabang mitra yang tersebar di Indonesia:
- **Slug**: `outlet`
- **Menu Icon**: `dashicons-store`
- **Supports**: `title`, `editor`, `thumbnail`, `excerpt`
- **Custom Meta Fields (`cleanique_outlet_meta`)**:
  - `_outlet_city`: Nama Kota / Kabupaten (misal: "Jakarta Timur", "Depok", "Malang").
  - `_outlet_address`: Alamat lengkap jalan, nomor, RT/RW, patokan lokasi.
  - `_outlet_postal_code`: Kode Pos (misal: "55285", "30128").
  - `_outlet_phone_wa`: Nomor WhatsApp langsung outlet mitra (jika ada).
  - `_outlet_gmaps_url`: Tautan Google Maps atau embed iframe URL.
  - `_outlet_manager`: Nama pemilik / pengelola depot mitra.
  - `_outlet_operating_hours`: Jam buka (misal: "Senin - Sabtu: 08.00 - 17.00 WIB").
  - `_outlet_featured_products`: Tag varian produk yang tersedia di outlet.

### B. Taksonomi: Wilayah Cabang (`wilayah_outlet`)
- Hierarki: Kategori (Provinsi -> Kota).
- Terms Awal:
  - *Jabodetabek*: Jakarta Timur, Depok.
  - *Jawa Tengah & DIY*: Sleman (Maguwoharjo), Temanggung, Boyolali, Karanganyar, Demak.
  - *Jawa Timur*: Malang, Situbondo.
  - *Sumatera*: Palembang, Jambi.

### C. CPT: Paket Kemitraan (`cleanique_package`)
- **Slug**: `paket-kemitraan`
- **Menu Icon**: `dashicons-awards`
- **Custom Meta Fields**:
  - `_pkg_price_normal`: Harga normal (misal: `30000000`).
  - `_pkg_price_promo`: Harga promo (misal: `27500000` atau `15000000`).
  - `_pkg_product_value`: Nilai pasokan produk (misal: `Rp 6.000.000` atau `Rp 8.000.000`).
  - `_pkg_containers_count`: Jumlah kontainer rak depot (misal: `8 Kontainer`).
  - `_pkg_badge`: Teks badge label (misal: `"Paling Populer"`, `"Paket Best Seller"`, `"Hemat"`).
  - `_pkg_features_list`: Array daftar fasilitas & peralatan (Textarea baris per baris).
  - `_pkg_wa_text_template`: Template pesan WhatsApp saat tombol di-klik.

---

## 4. Daftar Shortcodes & Contoh Penggunaan

Plugin menyediakan shortcode siap pakai yang dapat disisipkan pada Gutenberg Block, Elementor, atau langsung dalam file template PHP:

### 1. `[cleanique_packages]`
Menampilkan tabel perbandingan paket kemitraan (Paket Starter Rp 15 Juta vs Paket King Rp 27.5 Juta) lengkap dengan tombol order WhatsApp.
- **Atribut**: `layout="grid|cards"`, `highlight="king"`.

### 2. `[cleanique_outlet_locator]`
Menampilkan direktori cabang mitra se-Indonesia lengkap dengan filter berdasarkan provinsi/kota dan pencarian nama.
- **Atribut**: `show_map="yes|no"`, `limit="20"`.

### 3. `[cleanique_calculator]`
Menampilkan simulator interaktif kalkulator potensi omzet dan keuntungan bulanan penjualan sabun curah Cleanique Mart.
- **Atribut**: `preset="default|reseller|depot"`.

### 4. `[cleanique_wa_lead_modal]`
Menyisipkan tombol pemantik modal formulir WhatsApp yang menanyakan: Nama, Kota Domisili, Pilihan Paket, dan Kebutuhan (Depot Baru / Isi Ulang Laundry).

### 5. `[cleanique_products_grid]`
Menampilkan grid katalog varian produk jerigen 25L (Hand Wash, Deterjen Busa, Deterjen Matic, Parfum Waterbase, Softener, Pelicin Setrika, Sabun Cuci Piring, Pel Lantai).

---

## 5. WhatsApp Routing & Message Engine

Plugin mengotomatisasi penyusunan URL WhatsApp API (`https://api.whatsapp.com/send/` atau `https://wa.me/`):

### Skema Penyusunan URL:
```php
function cleanique_get_wa_url( $phone, $message ) {
    $clean_phone = preg_replace( '/[^0-9]/', '', $phone );
    if ( substr( $clean_phone, 0, 1 ) === '0' ) {
        $clean_phone = '62' . substr( $clean_phone, 1 );
    }
    return 'https://api.whatsapp.com/send/?phone=' . $clean_phone . '&text=' . rawurlencode( $message ) . '&type=phone_number&app_absent=0';
}
```

### Format Pesan Standar Berdasarkan Aksi Pengunjung:
1. **Formulir Konsultasi Umum / Hero**:
   ```
   Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*
   ```
2. **Order Paket Starter**:
   ```
   Halo *cleaniquemart.com* Saya Mohon Informasi untuk Promo Paket Starter *Cleanique Mart *
   ```
3. **Order Paket King**:
   ```
   Halo *cleaniquemart.com* Saya Mohon Informasi untuk Promo Paket King *Cleanique Mart  *
   ```
4. **Hasil Simulasi Kalkulator**:
   ```
   Halo Admin Cleanique Mart, saya melakukan simulasi keuntungan di website dengan estimasi penjualan [X] jerigen/hari. Mohon konsultasi ketersediaan wilayah saya di [Kota].
   ```
5. **Kontak Cabang Lokal**:
   ```
   Halo Cleanique Mart [Nama Cabang], saya ingin menanyakan ketersediaan produk isi ulang sabun curah / parfum laundry.
   ```

---

## 6. Halaman Pengaturan Admin (`WP-Admin -> Cleanique Mart`)

Menyediakan antarmuka terpusat bagi pemilik situs untuk mengubah parameter tanpa menyentuh kode program:
- **Nomor WhatsApp Pusat**: Default `087885590088` (format otomatis dikonversi ke `6287885590088`).
- **Tautan Download Proposal**: Default Google Drive link proposal kemitraan.
- **Alamat Kantor Pusat**: Default Sleman, D.I. Yogyakarta.
- **Tautan Media Sosial**: Facebook, Instagram, YouTube, TikTok.
- **Google Analytics / Meta Pixel ID**: Kolom input untuk memasukkan tracking ID konversi WhatsApp lead.
