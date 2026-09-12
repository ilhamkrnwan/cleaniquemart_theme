<?php
/**
 * Template Name: Detail Mitra
 *
 * Halaman detail per cabang/mitra Cleanique Mart.
 * Diakses via URL: /detail-mitra/?mitra=<outlet-id>
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$theme_uri = get_template_directory_uri();
$img_dir   = $theme_uri . '/assets/images/';

// === Data seluruh outlet (sinkron dengan page-mitra.php) ===
$outlets = array(
	array(
		'id'         => 'tapos-depok',
		'name'       => 'Cleanique Mart Tapos Depok',
		'region'     => 'jabodetabek',
		'region_lbl' => 'Jabodetabek',
		'city'       => 'Kota Depok, Jawa Barat',
		'addr'       => 'Jl. Raya Tapos 17-A depan Perumahan Permata Cimanggis, Tapos, Kota Depok, Jawa Barat 16457',
		'landmark'   => 'Tepat di depan gerbang utama Perumahan Permata Cimanggis',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'cleanique-mart-tapos-depok.webp',
		'maps_query' => 'Cleanique+Mart+Tapos+Depok',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Depot Isi Ulang Sabun Curah (Deterjen Matic, Softener, Cuci Piring, Karbol Lantai, Pembersih Kaca)',
			'Koleksi Lengkap 30 Varian Bibit Parfum Laundry Grade A',
			'Penjualan Biang Sabun Konsentrat 5 Liter Hemat Pabrik',
			'Menerima Wadah & Jerigen Sendiri (Refill Station Ramah Lingkungan)',
			'Layanan Antar / Delivery Order & COD Area Tapos & Sekitarnya',
		),
		'facilities' => array(
			'Akses Jalan & Parkir Mobil / Motor Mudah',
			'Pembayaran QRIS (BCA/GoPay/OVO/ShopeePay) & Tunai',
			'Dispenser Higienis Standar PKRT Kemenkes RI',
			'Konsultasi Gratis Pemilihan Varian Parfum & Sabun Usaha',
		),
	),
	array(
		'id'         => 'jakarta-timur',
		'name'       => 'Cleanique Mart Jakarta Timur',
		'region'     => 'jabodetabek',
		'region_lbl' => 'Jabodetabek',
		'city'       => 'DKI Jakarta',
		'addr'       => 'Jl. Cipinang Kebembem I No. 24, RT.007/RW.7, Cipinang, Kec. Pulo Gadung, Kota Jakarta Timur, DKI Jakarta 13240',
		'landmark'   => 'Kawasan Cipinang Kebembem I, Pulo Gadung, Jakarta Timur',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'cleanique-mart-jakarta-timur-thumbnail.webp',
		'maps_query' => 'Cleanique+Mart+Jakarta+Timur',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Isi Ulang Sabun Curah Laundry Komersial & Rumah Tangga',
			'30 Varian Parfum Laundry Tahan Lama Standar Hotel',
			'Paket Biang Konsentrat Cuci Piring & Deterjen Bikin Sendiri',
			'Refill Jerigen 5L & 20L untuk Usaha Laundry Kiloan',
			'Layanan Antar Express Area Pulo Gadung & Cipinang',
		),
		'facilities' => array(
			'Lokasi Strategis di Pusat Jakarta Timur',
			'Menerima Pembayaran QRIS & Transfer Bank',
			'Kran Dispenser Presisi & Higienis',
			'Konsultasi Formulasi Langsung Tim Ahli',
		),
	),
	array(
		'id'         => 'tajem-maguwoharjo',
		'name'       => 'Cleanique Mart Maguwoharjo',
		'region'     => 'jateng-diy',
		'region_lbl' => 'Jawa Tengah & DIY',
		'city'       => 'Sleman, D.I. Yogyakarta',
		'addr'       => 'Jl. Raya Tajem No. 6 RT/RW 02/30 Maguwoharjo, Kec. Depok, Kabupaten Sleman, D.I. Yogyakarta 55281',
		'landmark'   => 'Jalan Raya Tajem KM 1.5, Dekat Kampus Unriyo Maguwoharjo',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'Mitra-Cleanique-Mart-Tajem.webp',
		'maps_query' => 'Cleanique+Mart+Tajem+Maguwoharjo',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Pusat Isi Ulang Sabun Curah Sleman & Jogja Timur',
			'Parfum Laundry 30 Varian Aroma (Waterbase & Solvent Grade A)',
			'Stok Biang Sabun 5L Siap Aduk untuk Laundry & Kos-kosan',
			'Harga Grosir untuk Pembelian Jerigen Usaha Laundry',
			'Layanan COD Maguwoharjo, Condongcatur & Seturan',
		),
		'facilities' => array(
			'Area Parkir Luas Pinggir Jalan Raya Tajem',
			'Pembayaran Cashless QRIS Semua Bank/E-Wallet',
			'Kran Higienis Cepat Standar Lab Pabrik',
			'Tersedia Sampel Tester Aroma Gratis',
		),
	),
	array(
		'id'         => 'boyolali',
		'name'       => 'Cleanique Mart Boyolali',
		'region'     => 'jateng-diy',
		'region_lbl' => 'Jawa Tengah & DIY',
		'city'       => 'Boyolali, Jawa Tengah',
		'addr'       => 'Jalan Jinten No. 10, Kel. Pulisen, Kec. Boyolali, Kabupaten Boyolali, Jawa Tengah 57316',
		'landmark'   => 'Pusat Kota Boyolali, Dekat Simpang Lima Boyolali',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'Thumbnail-Mitra-Cleanique-Mart-Boyolali.webp',
		'maps_query' => 'Cleanique+Mart+Boyolali',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Depot Sabun Curah Resmi Terbesar di Boyolali',
			'Parfum Laundry Tahan Lama 30 Varian Favorit',
			'Biang Konsentrat Hemat Biaya Operasional Laundry',
			'Pengisian Galon & Botol Satuan Bebas Pilih Varian',
			'Pesan Antar Wilayah Boyolali Kota & Sekitarnya',
		),
		'facilities' => array(
			'Akses Mudah Kendaraan Roda 2 dan 4',
			'Sistem Pembayaran QRIS & Tunai',
			'Display Lengkap 8 Varian Sabun Curah & Parfum',
			'Layanan Cepat & Ramah',
		),
	),
	array(
		'id'         => 'demak',
		'name'       => 'Cleanique Mart Demak',
		'region'     => 'jateng-diy',
		'region_lbl' => 'Jawa Tengah & DIY',
		'city'       => 'Demak, Jawa Tengah',
		'addr'       => 'Batursari, Kec. Mranggen, Kabupaten Demak, Jawa Tengah 59567',
		'landmark'   => 'Kawasan Batursari Mranggen, Perbatasan Demak - Semarang Timur',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'Mitra-Cleanique-Mart-Demak.webp',
		'maps_query' => 'Cleanique+Mart+Demak',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Depot Refill Sabun Laundry Matic & Busa Melimpah',
			'30 Aroma Parfum Pakaian Standar Hotel & Laundry Kiloan',
			'Biang Konsentrat Pembersih Lantai & Karbol Sereh',
			'Pengadaan Kebutuhan Sabun UMKM Kuliner & Laundry',
			'Layanan Antar Mranggen, Pucang Gading & Semarang Timur',
		),
		'facilities' => array(
			'Parkir Nyaman & Akses Strategis',
			'Pembayaran Lengkap QRIS & Tunai',
			'Peralatan Dispenser Modern & Higienis',
			'Bebas Bawa Botol Sendiri untuk Lebih Hemat',
		),
	),
	array(
		'id'         => 'temanggung-1',
		'name'       => 'Cleanique Mart Pacitan 1',
		'region'     => 'jateng-diy',
		'region_lbl' => 'Jawa Tengah & DIY',
		'city'       => 'Temanggung, Jawa Tengah',
		'addr'       => 'Jl. WR. Supratman No. 34, Dongkelan Utara, Jampiroso, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56212',
		'landmark'   => 'Dongkelan Utara, Jampiroso, Dekat Pusat Kota Temanggung',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'Thumbnail-Mitra-Cleanique-Mart-Temanggung-1.webp',
		'maps_query' => 'Cleanique+Mart+Temanggung+1',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Depot Sabun Curah Terlengkap Temanggung Kota',
			'30 Varian Bibit Parfum Laundry Berkualitas',
			'Konsentrat Sabun Cuci Piring Ekstrak Jeruk Nipis',
			'Refill Jerigen & Botol Satuan Bebas Royalti',
			'Layanan Pesan Antar Wilayah Temanggung Kota',
		),
		'facilities' => array(
			'Akses Jalan Protokol WR Supratman',
			'Metode Pembayaran QRIS & Cash',
			'Display 8 Kontainer Sabun Siap Curah',
			'Pelayanan Cepat & Bergaransi Bersih',
		),
	),
	array(
		'id'         => 'temanggung-2',
		'name'       => 'Cleanique Mart Pacitan 2',
		'region'     => 'jateng-diy',
		'region_lbl' => 'Jawa Tengah & DIY',
		'city'       => 'Temanggung, Jawa Tengah',
		'addr'       => 'Jl. Megatan No. 4, Dusun Nglarangan RT.02/RW.04, Candi Mulyo, Kedu, Kabupaten Temanggung, Jawa Tengah 56252',
		'landmark'   => 'Dusun Nglarangan, Kawasan Candi Mulyo Kedu',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'Thumbnail-Mitra-Cleanique-Mart-Temanggung-2.webp',
		'maps_query' => 'Cleanique+Mart+Temanggung+2',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Depot Sabun Curah Area Kedu & Parakan',
			'Pewangi Pakaian 30 Aroma Awet Berhari-hari',
			'Biang Deterjen Hemat Pengeluaran Rumah Tangga',
			'Menerima Isi Ulang Galon Air untuk Usaha',
			'Layanan Antar Sekitar Kedu & Candi Mulyo',
		),
		'facilities' => array(
			'Lokasi Asri & Parkir Leluasa',
			'Pembayaran QRIS & Tunai',
			'Kran Dispenser Steril & Bersih',
			'Stok Selalu Tersedia Setiap Hari',
		),
	),
	array(
		'id'         => 'karanganyar',
		'name'       => 'Cleanique Mart Karanganyar',
		'region'     => 'jateng-diy',
		'region_lbl' => 'Jawa Tengah & DIY',
		'city'       => 'Karanganyar, Jawa Tengah',
		'addr'       => 'Jl. Alternatif Matesih, Supan, Tegalgede, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57714',
		'landmark'   => 'Jalan Alternatif Menuju Matesih, Kawasan Supan Tegalgede',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'Thumbnail-Mitra-Cleanique-Mart-Karanganyar.webp',
		'maps_query' => 'Cleanique+Mart+Karanganyar',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Depot Isi Ulang Sabun Curah Karanganyar & Solo Raya',
			'Parfum Laundry Grade A (30 Aroma Populer)',
			'Biang Deterjen Cair, Softener & Karbol Lantai Wangi',
			'Layanan Pembelian Partai Besar untuk Usaha Laundry',
			'Pesan Antar Area Karanganyar Kota & Tegalgede',
		),
		'facilities' => array(
			'Jalur Alternatif Nyaman & Parkir Luas',
			'Support QRIS Semua Bank & E-Wallet',
			'Dispenser Higienis Standar Kemenkes RI',
			'Tester Varian Parfum Lengkap di Meja Kasir',
		),
	),
	array(
		'id'         => 'malang',
		'name'       => 'Cleanique Mart Malang',
		'region'     => 'jatim',
		'region_lbl' => 'Jawa Timur',
		'city'       => 'Kota Malang, Jawa Timur',
		'addr'       => 'Jl. Mayjen Sungkono A11, Kel. Bumiayu, Kec. Kedungkandang, Kota Malang, Jawa Timur 65135',
		'landmark'   => 'Jl. Mayjen Sungkono Dekat GOR Ken Arok & Bumiayu',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'Cleanique-Mart-Malang-Depan-Toko.webp',
		'maps_query' => 'Cleanique+Mart+Malang',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Pusat Pasokan Sabun Curah & Parfum Laundry Terbesar di Kota Malang',
			'30 Varian Aroma Parfum Pilihan Standar Pengusaha Laundry Malang',
			'Biang Konsentrat Ekonomis Ramah Mahasiswa & Kos-kosan',
			'Layanan Refill Galon & Jerigen Curah Partai',
			'Pesan Antar Kedungkandang, Sukun, Lowokwaru & Sekitarnya',
		),
		'facilities' => array(
			'Parkir Mobil & Motor Lapang Pinggir Jalan Utama',
			'Pembayaran Cashless QRIS & Tunai',
			'Outlet Modern Full Display 8 Kran Sabun',
			'Konsultasi Usaha Laundry Kiloan Gratis',
		),
	),
	array(
		'id'         => 'situbondo',
		'name'       => 'Cleanique Mart Situbondo',
		'region'     => 'jatim',
		'region_lbl' => 'Jawa Timur',
		'city'       => 'Situbondo, Jawa Timur',
		'addr'       => 'Jl. Cempaka II Gg. Nusa Indah No. 1, +/- 100 m Barat Pabrik Es, Ds. Sumberkolak, Kec. Panarukan, Situbondo 68351',
		'landmark'   => 'Kira-kira 100 meter Barat Pabrik Es Sumberkolak, Panarukan',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'Cleanique-Mart-Situbondo-1.webp',
		'maps_query' => 'Cleanique+Mart+Situbondo',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Depot Refill Sabun Curah & Pewangi Panarukan Situbondo',
			'Parfum Laundry 30 Varian Grade A Standar Hotel',
			'Biang Pembersih Lantai Karbol & Sabun Cuci Piring',
			'Pengisian Jerigen 5L - 25L Lebih Hemat',
			'Layanan Antar Area Panarukan & Situbondo Kota',
		),
		'facilities' => array(
			'Akses Mudah Dekat Jalan Utama Pantura',
			'Pembayaran QRIS & Tunai',
			'Dispenser Higienis Bebas Debu & Kontaminasi',
			'Pelayanan Bersahabat & Ramah',
		),
	),
	array(
		'id'         => 'palembang',
		'name'       => 'Cleanique Mart Palembang',
		'region'     => 'sumatera',
		'region_lbl' => 'Sumatera',
		'city'       => 'Palembang, Sumatera Selatan',
		'addr'       => 'Jl. Pipa Reja No. 31C, Pipa Jaya, Kec. Kemuning, Kota Palembang, Sumatera Selatan 30128',
		'landmark'   => 'Jalan Pipa Reja, Kawasan Pipa Jaya Kemuning',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'cleanique_mart_palembang.webp',
		'maps_query' => 'Cleanique+Mart+Palembang',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Depot Sabun Curah Pertama & Terlengkap di Kota Palembang',
			'30 Varian Parfum Laundry Aroma Mewah & Tahan Lama',
			'Biang Konsentrat Sabun Ekstrak Wangi Hemat Ongkir Pabrik',
			'Penyediaan Kebutuhan Sabun Usaha Kuliner & Hotel Melati',
			'Layanan Pengantaran Wilayah Kemuning, Sukarami & Sekitarnya',
		),
		'facilities' => array(
			'Lokasi Strategis di Pusat Kota Palembang',
			'Mendukung Pembayaran QRIS Semua Bank/Dompet Digital',
			'Instalasi Dispenser Curah Higienis Berizin PKRT',
			'Tester Lengkap Aroma Parfum Siap Coba',
		),
	),
	array(
		'id'         => 'jambi',
		'name'       => 'Cleanique Mart Jambi',
		'region'     => 'sumatera',
		'region_lbl' => 'Sumatera',
		'city'       => 'Kota Jambi, Jambi',
		'addr'       => 'Jl. Kutilang IV No. 29, RT.09, Kel. Tambak Sari, Kec. Jambi Selatan, Kota Jambi, Jambi 36131',
		'landmark'   => 'Jl. Kutilang IV, Kawasan Tambak Sari, Jambi Selatan',
		'phone'      => '087885590088',
		'hours'      => 'Senin – Minggu: 08.00 – 20.00 WIB',
		'image'      => 'Thumbnail-Mitra-Cleanique-Mart-Jambi.webp',
		'maps_query' => 'Cleanique+Mart+Jambi',
		'status'     => 'Mitra Resmi Terverifikasi',
		'services'   => array(
			'Pusat Refill Sabun Curah & Kimia Laundry Kota Jambi',
			'30 Pilihan Varian Parfum Laundry Berkualitas Pabrik',
			'Biang Sabun Konsentrat 5L Praktis Tinggal Tambah Air',
			'Layanan Pasokan Rutin untuk Pengusaha Laundry Kiloan',
			'Pesan Antar Wilayah Jambi Selatan & Kota Jambi',
		),
		'facilities' => array(
			'Akses Lingkungan Nyaman & Tempat Parkir',
			'Menerima Pembayaran QRIS & Transfer Bank',
			'Peralatan Curah Higienis & Amanah Takaran',
			'Konsultasi Usaha Sabun Tanpa Bagi Hasil',
		),
	),
);

// === Ambil outlet berdasarkan ?mitra= param ===
$mitra_id = isset( $_GET['mitra'] ) ? sanitize_key( $_GET['mitra'] ) : '';

// Cari outlet
$outlet = null;
foreach ( $outlets as $o ) {
	if ( $o['id'] === $mitra_id ) {
		$outlet = $o;
		break;
	}
}

// Jika tidak ditemukan, redirect ke halaman mitra
if ( ! $outlet ) {
	wp_redirect( home_url( '/mitra-cleanique-mart/' ) );
	exit;
}

$img_url  = $img_dir . $outlet['image'];
$wa_msg   = 'Halo ' . $outlet['name'] . ', saya ingin bertanya mengenai stok sabun isi ulang curah dan deterjen laundry di outlet Anda.';
$wa_url   = cleaniquemart_get_wa_url( $wa_msg );
$maps_url = 'https://www.google.com/maps/search/?api=1&query=' . urlencode( $outlet['name'] . ' ' . $outlet['addr'] );
$back_url = home_url( '/mitra-cleanique-mart/' );
?>

<main id="main-content" class="oxygen-main-content">

	<!-- Hero Section -->
	<section style="background:linear-gradient(135deg, #0c00ff 0%, #06007a 100%);padding:64px 20px 80px;position:relative;overflow:hidden;">
		<div style="position:absolute;inset:0;background:url('<?php echo esc_url( $img_url ); ?>') center/cover no-repeat;opacity:0.12;"></div>
		<div style="max-width:1160px;margin:0 auto;position:relative;z-index:2;">
			<!-- Breadcrumb -->
			<nav style="margin-bottom:24px;font-size:13px;color:rgba(255,255,255,0.7);display:flex;align-items:center;gap:6px;flex-wrap:wrap;">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:rgba(255,255,255,0.7);text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Beranda</a>
				<span>›</span>
				<a href="<?php echo esc_url( $back_url ); ?>" style="color:rgba(255,255,255,0.7);text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Mitra Cleanique Mart</a>
				<span>›</span>
				<span style="color:#ffffff;font-weight:600;"><?php echo esc_html( $outlet['name'] ); ?></span>
			</nav>

			<div style="display:flex;align-items:center;gap:10px;margin-bottom:16px;flex-wrap:wrap;">
				<span style="background:#0c00ff;color:#fff;padding:4px 14px;border-radius:999px;font-size:11.5px;font-weight:800;text-transform:uppercase;letter-spacing:0.8px;border:1px solid rgba(255,255,255,0.3);">
					<?php echo esc_html( $outlet['region_lbl'] ); ?>
				</span>
				<span style="background:rgba(22,163,74,0.9);color:#fff;padding:4px 14px;border-radius:999px;font-size:11.5px;font-weight:700;display:inline-flex;align-items:center;gap:5px;">
					<svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
					Mitra Resmi Terverifikasi
				</span>
				<span style="background:rgba(255,255,255,0.18);color:#fff;backdrop-filter:blur(4px);padding:4px 14px;border-radius:999px;font-size:11.5px;font-weight:600;border:1px solid rgba(255,255,255,0.25);">
					Izin PKRT Kemenkes RI
				</span>
			</div>

			<h1 style="font-family:'Lexend',sans-serif;font-size:clamp(26px,4vw,42px);font-weight:900;color:#ffffff;margin:0 0 12px 0;line-height:1.2;">
				<?php echo esc_html( $outlet['name'] ); ?>
			</h1>
			<p style="font-size:16px;color:#c7d2fe;margin:0 0 28px 0;display:flex;align-items:center;gap:8px;flex-wrap:wrap;">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
				<?php echo esc_html( $outlet['city'] ); ?>
			</p>

			<div style="display:flex;gap:12px;flex-wrap:wrap;">
				<a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer"
				   style="display:inline-flex;align-items:center;gap:8px;background:#25D366;color:#fff;padding:13px 26px;border-radius:999px;font-size:14px;font-weight:800;text-decoration:none;box-shadow:0 6px 20px rgba(37,211,102,0.4);">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
					Hubungi via WhatsApp
				</a>
				<a href="<?php echo esc_url( $maps_url ); ?>" target="_blank" rel="noopener noreferrer"
				   style="display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.15);color:#fff;padding:13px 26px;border-radius:999px;font-size:14px;font-weight:700;text-decoration:none;border:1.5px solid rgba(255,255,255,0.4);backdrop-filter:blur(4px);">
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"></polygon></svg>
					Petunjuk Arah Maps
				</a>
			</div>
		</div>
	</section>

	<!-- Main Content -->
	<section style="background:#f8fafc;padding:56px 20px 80px;">
		<div style="max-width:1160px;margin:0 auto;">

			<!-- 2-Column Layout -->
			<div class="cm-detail-mitra-grid" style="display:grid;grid-template-columns:1fr 380px;gap:32px;align-items:start;">

				<!-- Kolom Kiri: Detail Lengkap -->
				<div style="display:flex;flex-direction:column;gap:24px;">

					<!-- Foto Outlet -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:20px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.05);">
						<div style="position:relative;height:380px;overflow:hidden;background:#0f172a;">
							<img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $outlet['name'] ); ?>"
							     style="width:100%;height:100%;object-fit:cover;display:block;" loading="eager">
							<div style="position:absolute;bottom:16px;left:16px;right:16px;background:rgba(15,23,42,0.85);color:#fff;padding:12px 16px;border-radius:12px;backdrop-filter:blur(6px);">
								<div style="font-size:12px;color:#94a3b8;font-weight:600;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:4px;">Foto Gerai Resmi</div>
								<div style="font-size:15px;font-weight:700;color:#fff;"><?php echo esc_html( $outlet['name'] ); ?></div>
							</div>
						</div>
					</div>

					<!-- Alamat & Lokasi -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:20px;padding:28px;box-shadow:0 4px 20px rgba(0,0,0,0.04);">
						<h2 style="font-family:'Lexend',sans-serif;font-size:18px;font-weight:800;color:#0f172a;margin:0 0 20px 0;display:flex;align-items:center;gap:8px;padding-bottom:14px;border-bottom:1px solid #f1f5f9;">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0c00ff" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
							Lokasi &amp; Jam Operasional
						</h2>

						<div style="margin-bottom:16px;">
							<div style="font-size:12px;font-weight:700;color:#64748b;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:8px;">Alamat Lengkap</div>
							<p style="font-size:14.5px;color:#1e293b;line-height:1.7;margin:0 0 10px 0;font-weight:500;">
								<?php echo esc_html( $outlet['addr'] ); ?>
							</p>
							<?php if ( ! empty( $outlet['landmark'] ) ) : ?>
							<div style="background:#eff6ff;border:1px solid #dbeafe;border-radius:10px;padding:10px 14px;font-size:13px;color:#334155;display:flex;align-items:flex-start;gap:8px;">
								<svg style="flex-shrink:0;margin-top:1px;color:#0c00ff;" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
								<span><strong>Patokan:</strong> <?php echo esc_html( $outlet['landmark'] ); ?></span>
							</div>
							<?php endif; ?>
						</div>

						<div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
							<div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:14px 16px;">
								<div style="font-size:11.5px;font-weight:700;color:#64748b;text-transform:uppercase;margin-bottom:6px;display:flex;align-items:center;gap:5px;">
									<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
									Jam Operasional
								</div>
								<div style="font-size:13.5px;font-weight:800;color:#0f172a;"><?php echo esc_html( $outlet['hours'] ); ?></div>
							</div>
							<div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:14px 16px;">
								<div style="font-size:11.5px;font-weight:700;color:#64748b;text-transform:uppercase;margin-bottom:6px;display:flex;align-items:center;gap:5px;">
									<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.62 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.56 6.56l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
									Nomor WA
								</div>
								<div style="font-size:13.5px;font-weight:800;color:#0f172a;"><?php echo esc_html( $outlet['phone'] ); ?></div>
							</div>
						</div>

						<div style="margin-top:16px;display:flex;gap:10px;">
							<button onclick="copyAddress()" id="btn-copy-addr"
							        style="display:inline-flex;align-items:center;gap:6px;background:#ffffff;border:1.5px solid #cbd5e1;padding:9px 16px;border-radius:10px;font-size:13px;font-weight:700;color:#334155;cursor:pointer;transition:all 0.2s;"
							        onmouseover="this.style.borderColor='#0c00ff';this.style.color='#0c00ff';"
							        onmouseout="this.style.borderColor='#cbd5e1';this.style.color='#334155';">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
								Salin Alamat
							</button>
							<a href="<?php echo esc_url( $maps_url ); ?>" target="_blank" rel="noopener noreferrer"
							   style="display:inline-flex;align-items:center;gap:6px;background:#0c00ff;color:#fff;padding:9px 16px;border-radius:10px;font-size:13px;font-weight:700;text-decoration:none;transition:background 0.2s;"
							   onmouseover="this.style.background='#0900cc'" onmouseout="this.style.background='#0c00ff'">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"></polygon></svg>
								Buka Maps
							</a>
						</div>
					</div>

					<!-- Layanan & Produk -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:20px;padding:28px;box-shadow:0 4px 20px rgba(0,0,0,0.04);">
						<h2 style="font-family:'Lexend',sans-serif;font-size:18px;font-weight:800;color:#0f172a;margin:0 0 20px 0;display:flex;align-items:center;gap:8px;padding-bottom:14px;border-bottom:1px solid #f1f5f9;">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0c00ff" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
							Layanan &amp; Produk Tersedia
						</h2>
						<ul style="margin:0;padding:0;list-style:none;display:flex;flex-direction:column;gap:12px;">
							<?php foreach ( $outlet['services'] as $service ) : ?>
							<li style="display:flex;align-items:flex-start;gap:10px;font-size:14px;color:#334155;line-height:1.55;">
								<svg style="flex-shrink:0;color:#16a34a;margin-top:1px;" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
								<span><?php echo esc_html( $service ); ?></span>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<!-- Fasilitas -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:20px;padding:28px;box-shadow:0 4px 20px rgba(0,0,0,0.04);">
						<h2 style="font-family:'Lexend',sans-serif;font-size:18px;font-weight:800;color:#0f172a;margin:0 0 20px 0;display:flex;align-items:center;gap:8px;padding-bottom:14px;border-bottom:1px solid #f1f5f9;">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0c00ff" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
							Fasilitas Depot
						</h2>
						<div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
							<?php foreach ( $outlet['facilities'] as $facility ) : ?>
							<div style="display:flex;align-items:flex-start;gap:9px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:10px;padding:12px 14px;font-size:13.5px;color:#334155;line-height:1.45;">
								<svg style="flex-shrink:0;color:#0c00ff;margin-top:1px;" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
								<span><?php echo esc_html( $facility ); ?></span>
							</div>
							<?php endforeach; ?>
						</div>
					</div>

				</div><!-- Kolom Kiri -->

				<!-- Kolom Kanan: Sidebar Sticky -->
				<div class="cm-detail-mitra-sidebar" style="display:flex;flex-direction:column;gap:20px;position:-webkit-sticky;position:sticky;top:90px;align-self:flex-start;">

					<!-- CTA WhatsApp -->
					<div style="background:linear-gradient(135deg,#16a34a 0%,#15803d 100%);border-radius:20px;padding:26px;box-shadow:0 8px 24px rgba(22,163,74,0.3);color:#fff;text-align:center;">
						<div style="font-size:13px;font-weight:700;margin-bottom:8px;opacity:0.9;">Hubungi Langsung Outlet Ini</div>
						<h3 style="font-family:'Lexend',sans-serif;font-size:17px;font-weight:800;margin:0 0 14px 0;line-height:1.3;"><?php echo esc_html( $outlet['name'] ); ?></h3>
						<a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer"
						   style="display:flex;align-items:center;justify-content:center;gap:8px;background:#fff;color:#16a34a;padding:12px 20px;border-radius:999px;font-size:14px;font-weight:800;text-decoration:none;width:100%;box-sizing:border-box;box-shadow:0 4px 12px rgba(0,0,0,0.15);">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
							Chat WA Sekarang
						</a>
					</div>

					<!-- Info Singkat -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:20px;padding:24px;box-shadow:0 4px 14px rgba(0,0,0,0.04);">
						<div style="font-size:13px;font-weight:800;color:#0f172a;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:16px;">Info Singkat Outlet</div>
						<div style="display:flex;flex-direction:column;gap:12px;">
							<div style="display:flex;align-items:flex-start;gap:10px;">
								<svg style="flex-shrink:0;color:#0c00ff;margin-top:1px;" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
								<div>
									<div style="font-size:11px;color:#64748b;font-weight:700;text-transform:uppercase;">Wilayah</div>
									<div style="font-size:13.5px;color:#0f172a;font-weight:700;"><?php echo esc_html( $outlet['city'] ); ?></div>
								</div>
							</div>
							<div style="display:flex;align-items:flex-start;gap:10px;">
								<svg style="flex-shrink:0;color:#0c00ff;margin-top:1px;" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
								<div>
									<div style="font-size:11px;color:#64748b;font-weight:700;text-transform:uppercase;">Jam Buka</div>
									<div style="font-size:13.5px;color:#0f172a;font-weight:700;"><?php echo esc_html( $outlet['hours'] ); ?></div>
								</div>
							</div>
							<div style="display:flex;align-items:flex-start;gap:10px;">
								<svg style="flex-shrink:0;color:#16a34a;margin-top:1px;" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
								<div>
									<div style="font-size:11px;color:#64748b;font-weight:700;text-transform:uppercase;">Status</div>
									<div style="font-size:13.5px;color:#16a34a;font-weight:700;"><?php echo esc_html( $outlet['status'] ); ?></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quick Service Chips -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:20px;padding:24px;box-shadow:0 4px 14px rgba(0,0,0,0.04);">
						<div style="font-size:13px;font-weight:800;color:#0f172a;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:14px;">Layanan Unggulan</div>
						<div style="display:flex;flex-wrap:wrap;gap:7px;">
							<span style="background:#eff6ff;color:#0c00ff;padding:5px 12px;border-radius:999px;font-size:12px;font-weight:700;border:1px solid #dbeafe;">Isi Ulang Curah</span>
							<span style="background:#eff6ff;color:#0c00ff;padding:5px 12px;border-radius:999px;font-size:12px;font-weight:700;border:1px solid #dbeafe;">30 Varian Parfum</span>
							<span style="background:#eff6ff;color:#0c00ff;padding:5px 12px;border-radius:999px;font-size:12px;font-weight:700;border:1px solid #dbeafe;">QRIS Ready</span>
							<span style="background:#ecfdf5;color:#16a34a;padding:5px 12px;border-radius:999px;font-size:12px;font-weight:700;border:1px solid #a7f3d0;">Biang Konsentrat</span>
							<span style="background:#ecfdf5;color:#16a34a;padding:5px 12px;border-radius:999px;font-size:12px;font-weight:700;border:1px solid #a7f3d0;">PKRT Resmi</span>
						</div>
					</div>

					<!-- Tombol Kembali -->
					<a href="<?php echo esc_url( $back_url ); ?>"
					   style="display:flex;align-items:center;justify-content:center;gap:8px;background:#f8fafc;color:#475569;border:1.5px solid #e2e8f0;padding:12px 20px;border-radius:12px;font-size:13.5px;font-weight:700;text-decoration:none;text-align:center;transition:all 0.2s;"
					   onmouseover="this.style.borderColor='#0c00ff';this.style.color='#0c00ff';this.style.background='#eff6ff';"
					   onmouseout="this.style.borderColor='#e2e8f0';this.style.color='#475569';this.style.background='#f8fafc';">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg>
						Lihat Semua Mitra Lainnya
					</a>

				</div><!-- Kolom Kanan -->

			</div><!-- Grid -->
		</div>
	</section>

</main>

<!-- Toast Notification -->
<div id="cm-copy-toast" style="position:fixed;bottom:24px;left:50%;transform:translateX(-50%) translateY(20px);background:#0f172a;color:#fff;padding:12px 24px;border-radius:999px;font-size:13.5px;font-weight:700;opacity:0;transition:all 0.3s ease;z-index:9999;white-space:nowrap;pointer-events:none;">
	✓ Alamat berhasil disalin ke clipboard!
</div>

<script>
function copyAddress() {
	var addr = <?php echo wp_json_encode( $outlet['name'] . ' - ' . $outlet['addr'] ); ?>;
	if (navigator.clipboard) {
		navigator.clipboard.writeText(addr).then(function() {
			showCopyToast();
		});
	}
}
function showCopyToast() {
	var t = document.getElementById('cm-copy-toast');
	t.style.opacity = '1';
	t.style.transform = 'translateX(-50%) translateY(0)';
	setTimeout(function() {
		t.style.opacity = '0';
		t.style.transform = 'translateX(-50%) translateY(20px)';
	}, 2500);
}
</script>

<?php
get_footer();
