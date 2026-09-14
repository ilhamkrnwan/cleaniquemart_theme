<?php
/**
 * Template Name: Direktori Mitra Cabang
 *
 * Authentic Oxygen Theme design with enriched content, interactive search/filter,
 * high-resolution lightbox integration, and direct branch communication.
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$theme_uri = get_template_directory_uri();
$img_dir   = $theme_uri . '/assets/images/';

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
			'Layanan Antar / Delivery Order & COD Area Tapos & Sekitarnya'
		),
		'facilities' => array(
			'Akses Jalan & Parkir Mobil / Motor Mudah',
			'Pembayaran QRIS (BCA/GoPay/OVO/ShopeePay) & Tunai',
			'Dispenser Higienis Standar PKRT Kemenkes RI',
			'Konsultasi Gratis Pemilihan Varian Parfum & Sabun Usaha'
		)
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
			'Layanan Antar Express Area Pulo Gadung & Cipinang'
		),
		'facilities' => array(
			'Lokasi Strategis di Pusat Jakarta Timur',
			'Menerima Pembayaran QRIS & Transfer Bank',
			'Kran Dispenser Presisi & Higienis',
			'Konsultasi Formulasi Langsung Tim Ahli'
		)
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
			'Layanan COD Maguwoharjo, Condongcatur & Seturan'
		),
		'facilities' => array(
			'Area Parkir Luas Pinggir Jalan Raya Tajem',
			'Pembayaran Cashless QRIS Semua Bank/E-Wallet',
			'Kran Higienis Cepat Standar Lab Pabrik',
			'Tersedia Sampel Tester Aroma Gratis'
		)
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
			'Pesan Antar Wilayah Boyolali Kota & Sekitarnya'
		),
		'facilities' => array(
			'Akses Mudah Kendaraan Roda 2 dan 4',
			'Sistem Pembayaran QRIS & Tunai',
			'Display Lengkap 8 Varian Sabun Curah & Parfum',
			'Layanan Cepat & Ramah'
		)
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
			'Layanan Antar Mranggen, Pucang Gading & Semarang Timur'
		),
		'facilities' => array(
			'Parkir Nyaman & Akses Strategis',
			'Pembayaran Lengkap QRIS & Tunai',
			'Peralatan Dispenser Modern & Higienis',
			'Bebas Bawa Botol Sendiri untuk Lebih Hemat'
		)
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
			'Layanan Pesan Antar Wilayah Temanggung Kota'
		),
		'facilities' => array(
			'Akses Jalan Protokol WR Supratman',
			'Metode Pembayaran QRIS & Cash',
			'Display 8 Kontainer Sabun Siap Curah',
			'Pelayanan Cepat & Bergaransi Bersih'
		)
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
			'Layanan Antar Sekitar Kedu & Candi Mulyo'
		),
		'facilities' => array(
			'Lokasi Asri & Parkir Leluasa',
			'Pembayaran QRIS & Tunai',
			'Kran Dispenser Steril & Bersih',
			'Stok Selalu Tersedia Setiap Hari'
		)
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
			'Pesan Antar Area Karanganyar Kota & Tegalgede'
		),
		'facilities' => array(
			'Jalur Alternatif Nyaman & Parkir Luas',
			'Support QRIS Semua Bank & E-Wallet',
			'Dispenser Higienis Standar Kemenkes RI',
			'Tester Varian Parfum Lengkap di Meja Kasir'
		)
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
			'Pesan Antar Kedungkandang, Sukun, Lowokwaru & Sekitarnya'
		),
		'facilities' => array(
			'Parkir Mobil & Motor Lapang Pinggir Jalan Utama',
			'Pembayaran Cashless QRIS & Tunai',
			'Outlet Modern Full Display 8 Kran Sabun',
			'Konsultasi Usaha Laundry Kiloan Gratis'
		)
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
			'Layanan Antar Area Panarukan & Situbondo Kota'
		),
		'facilities' => array(
			'Akses Mudah Dekat Jalan Utama Pantura',
			'Pembayaran QRIS & Tunai',
			'Dispenser Higienis Bebas Debu & Kontaminasi',
			'Pelayanan Bersahabat & Ramah'
		)
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
			'Layanan Pengantaran Wilayah Kemuning, Sukarami & Sekitarnya'
		),
		'facilities' => array(
			'Lokasi Strategis di Pusat Kota Palembang',
			'Mendukung Pembayaran QRIS Semua Bank/Dompet Digital',
			'Instalasi Dispenser Curah Higienis Berizin PKRT',
			'Tester Lengkap Aroma Parfum Siap Coba'
		)
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
			'Pesan Antar Wilayah Jambi Selatan & Kota Jambi'
		),
		'facilities' => array(
			'Akses Lingkungan Nyaman & Tempat Parkir',
			'Menerima Pembayaran QRIS & Transfer Bank',
			'Peralatan Curah Higienis & Amanah Takaran',
			'Konsultasi Usaha Sabun Tanpa Bagi Hasil'
		)
	),
);
?>

<main id="main-content" class="oxygen-main-content">
	<!-- Authentic Oxygen Hero Section -->
	<section id="section-3-162" class="ct-section ct-section-with-shape-divider">
		<div class="ct-section-inner-wrap">
			<div id="div_block-4-162" class="ct-div-block">
				<div class="cm-badge-glass-hero">
					Jaringan Resmi Depot Cleanique Mart
				</div>
				<h1 id="headline-5-162" class="ct-headline atomic-primary-heading">Mitra Cleanique Mart</h1>
				<p id="text_block-16-162" class="ct-text-block atomic-subheading">
					Temukan depot isi ulang sabun curah, deterjen laundry ramah lingkungan, dan parfum pakaian berkualitas resmi di lokasi-lokasi terdekat Anda.
				</p>
			</div>

			<!-- Shape Divider: Ocean Waves -->
			<div id="-shape-divider-6-162" class="oxy-shape-divider">
				<div class="oxy_shape_divider">
					<svg viewBox="0 0 1440 320" version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
						<g id="Ocean-Waves" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<path d="M60.0736562,199.999824 C74.730684,216.560111 96.1461381,227.000176 120,227.000176 C143.853862,227.000176 165.269316,216.560111 179.926344,199.999824 L180.073656,199.999824 C194.730684,216.560111 216.146138,227.000176 240,227.000176 C263.853862,227.000176 285.269316,216.560111 299.926344,199.999824 L300.073656,199.999824 C314.730684,216.560111 336.146138,227.000176 360,227.000176 C383.853862,227.000176 405.269316,216.560111 419.926344,199.999824 L420.073656,199.999824 C434.730684,216.560111 456.146138,227.000176 480,227.000176 C503.853862,227.000176 525.269316,216.560111 539.926344,199.999824 L540.073656,199.999824 C554.730684,216.560111 576.146138,227.000176 600,227.000176 C623.853862,227.000176 645.269316,216.560111 659.926344,199.999824 L660.073656,199.999824 C674.730684,216.559935 696.146138,227 720,227 C743.853862,227 765.269316,216.559935 779.926344,199.999824 L780.073656,199.999824 C794.730684,216.560111 816.146138,227.000176 840,227.000176 C863.853862,227.000176 885.269316,216.560111 899.926344,199.999824 L900.073656,199.999824 C914.730684,216.560111 936.146138,227.000176 960,227.000176 C983.853862,227.000176 1005.26932,216.560111 1019.92634,199.999824 L1020.07366,199.999824 C1034.73068,216.560111 1056.14614,227.000176 1080,227.000176 C1103.85386,227.000176 1125.26932,216.560111 1139.92634,199.999824 L1140.07366,199.999824 C1154.73068,216.560111 1176.14614,227.000176 1200,227.000176 C1223.85386,227.000176 1245.26932,216.560111 1259.92634,199.999824 L1260.07366,199.999824 C1274.73068,216.560111 1296.14614,227.000176 1320,227.000176 C1343.85386,227.000176 1365.26932,216.560111 1379.92634,199.999824 L1380.07366,199.999824 C1394.73068,216.560111 1416.14614,227.000176 1440,227.000176 L1440,319.999824 L0,319.999824 L0,227.000176 C23.8538619,227.000176 45.269316,216.560111 59.9263438,199.999824 L60.0736562,199.999824 Z" fill="currentColor"></path>
						</g>
					</svg>
				</div>
			</div>

			<!-- Bubble decoration -->
			<img id="image-7-162" alt="" src="<?php echo esc_url( $img_dir ); ?>bubble.webp" class="ct-image" />
		</div>
	</section>



	<!-- Interactive Search & Region Filter Toolbar -->
	<section style="background:#ffffff;padding:20px 20px 30px 20px;border-bottom:1px solid #f1f5f9;">
		<div style="max-width:1160px;margin:0 auto;">
			<div style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px;">
				<!-- Region Filter Buttons -->
				<div class="cm-filter-group" style="display:flex;flex-wrap:wrap;gap:8px;">
					<button type="button" class="cm-filter-btn active" data-filter="all" style="padding:8px 18px;border-radius:999px;font-size:14px;font-weight:600;border:1.5px solid #0c00ff;background:#0c00ff;color:#ffffff;cursor:pointer;transition:all 0.2s;">
						Semua Wilayah (12)
					</button>
					<button type="button" class="cm-filter-btn" data-filter="jabodetabek" style="padding:8px 18px;border-radius:999px;font-size:14px;font-weight:600;border:1.5px solid #cbd5e1;background:#ffffff;color:#475569;cursor:pointer;transition:all 0.2s;">
						Jabodetabek (2)
					</button>
					<button type="button" class="cm-filter-btn" data-filter="jateng-diy" style="padding:8px 18px;border-radius:999px;font-size:14px;font-weight:600;border:1.5px solid #cbd5e1;background:#ffffff;color:#475569;cursor:pointer;transition:all 0.2s;">
						Jawa Tengah &amp; DIY (6)
					</button>
					<button type="button" class="cm-filter-btn" data-filter="jatim" style="padding:8px 18px;border-radius:999px;font-size:14px;font-weight:600;border:1.5px solid #cbd5e1;background:#ffffff;color:#475569;cursor:pointer;transition:all 0.2s;">
						Jawa Timur (2)
					</button>
					<button type="button" class="cm-filter-btn" data-filter="sumatera" style="padding:8px 18px;border-radius:999px;font-size:14px;font-weight:600;border:1.5px solid #cbd5e1;background:#ffffff;color:#475569;cursor:pointer;transition:all 0.2s;">
						Sumatera (2)
					</button>
				</div>

				<!-- Live Search Box -->
				<div style="position:relative;width:100%;max-width:320px;">
					<input 
						type="text" 
						id="cm-outlet-search" 
						placeholder="Cari kota atau nama cabang..." 
						style="width:100%;padding:10px 16px 10px 40px;border-radius:999px;border:1.5px solid #cbd5e1;font-size:14px;outline:none;transition:border-color 0.2s;box-sizing:border-box;"
					>
					<svg style="position:absolute;left:14px;top:50%;transform:translateY(-50%);color:#94a3b8;" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
				</div>
			</div>
		</div>
	</section>

	<!-- Authentic Oxygen Section Grid (with Enriched Outlet Cards) -->
	<section id="section-8-162" class="ct-section" style="padding-top:40px;padding-bottom:100px;">
		<div class="ct-section-inner-wrap">
			<div id="div_block-17-162" class="ct-div-block">
				<?php foreach ( $outlets as $index => $o ) : 
					$wa_msg = 'Halo ' . $o['name'] . ', saya ingin bertanya mengenai stok sabun isi ulang curah dan deterjen laundry di outlet Anda.';
					$wa_url = cleaniquemart_get_wa_url( $wa_msg );
					$gmaps_url = 'https://www.google.com/maps/search/?api=1&query=' . urlencode( $o['name'] . ' ' . $o['addr'] );
					$img_url   = $img_dir . $o['image'];
				?>
					<div 
						class="cm-outlet-item" 
						data-region="<?php echo esc_attr( $o['region'] ); ?>" 
						data-search="<?php echo esc_attr( strtolower( $o['name'] . ' ' . $o['city'] . ' ' . $o['addr'] ) ); ?>"
						style="background:#ffffff;border:1px solid #e2e8f0;border-radius:16px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.05);display:flex;flex-direction:column;justify-content:space-between;transition:transform 0.25s ease, box-shadow 0.25s ease;"
					>
						<div>
							<!-- Outlet Photo with Hover Zoom & Lightbox Trigger -->
							<div style="position:relative;overflow:hidden;height:220px;background:#0f172a;">
								<a 
									href="<?php echo esc_url( $img_url ); ?>" 
									class="zoom-img" 
									data-caption="<?php echo esc_attr( $o['name'] . ' — ' . $o['city'] ); ?>"
									style="display:block;width:100%;height:100%;position:relative;"
									title="<?php echo esc_attr( $o['name'] ); ?>"
								>
									<img 
										src="<?php echo esc_url( $img_url ); ?>" 
										alt="<?php echo esc_attr( $o['name'] ); ?>" 
										style="width:100%;height:100%;object-fit:cover;display:block;transition:transform 0.4s ease;"
										loading="lazy"
										onmouseover="this.style.transform='scale(1.06)'"
										onmouseout="this.style.transform='scale(1)'"
									/>
								</a>

								<!-- Region / Location Badge overlay -->
								<span style="position:absolute;top:12px;left:12px;background:#0c00ff;color:#ffffff;padding:4px 12px;border-radius:999px;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.5px;box-shadow:0 2px 6px rgba(0,0,0,0.2);display:inline-flex;align-items:center;gap:4px;">
									<svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
									<?php echo esc_html( $o['region_lbl'] ); ?>
								</span>
							</div>

							<!-- Card Content -->
							<div style="padding:22px 20px 18px 20px;">
								<h2 style="font-family:'Lexend',sans-serif;font-size:19px;font-weight:700;color:#0f172a;margin:0 0 10px 0;line-height:1.3;">
									<?php echo esc_html( $o['name'] ); ?>
								</h2>

								<p style="font-size:13.5px;color:#475569;line-height:1.6;margin:0;display:flex;align-items:flex-start;gap:8px;">
									<svg style="flex-shrink:0;color:#0c00ff;margin-top:2px;" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
									<span><?php echo esc_html( $o['addr'] ); ?></span>
								</p>
							</div>
						</div>

						<!-- Card Actions (Always pinned to bottom) -->
						<div style="padding:0 20px 22px 20px;">
							<a 
								href="<?php echo esc_url( home_url( '/detail-mitra/?mitra=' . $o['id'] ) ); ?>"
								class="cm-btn-detail-mitra"
								style="width:100%;display:flex;align-items:center;justify-content:center;background:#0c00ff;color:#ffffff;padding:12px 16px;border-radius:10px;font-size:14px;font-weight:700;border:none;cursor:pointer;box-shadow:0 4px 12px rgba(12,0,255,0.2);transition:all 0.2s;text-decoration:none;box-sizing:border-box;"
								onmouseover="this.style.background='#0900cc';this.style.transform='translateY(-1px)';"
								onmouseout="this.style.background='#0c00ff';this.style.transform='none';"
							>
								Lihat Detail Mitra
							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<!-- No Results Found Message (hidden by default) -->
			<div id="cm-no-results" style="display:none;text-align:center;padding:60px 20px;background:#ffffff;border:1px dashed #cbd5e1;border-radius:16px;margin-top:30px;">
				<div style="font-size:40px;margin-bottom:12px;">🔍</div>
				<h3 style="font-size:20px;font-weight:700;color:#0f172a;margin-bottom:8px;">Cabang Tidak Ditemukan</h3>
				<p style="color:#64748b;font-size:15px;max-width:500px;margin:0 auto 20px auto;">
					Kota yang Anda cari belum memiliki mitra resmi Cleanique Mart. Ini adalah kesempatan terbaik Anda untuk menjadi pelopor pertama di kota Anda!
				</p>
				<a href="<?php echo esc_url( cleaniquemart_get_wa_url('Halo cleaniquemart.com, saya ingin membuka cabang baru di kota saya.') ); ?>" target="_blank" class="ct-link-button" style="display:inline-block;background:#0c00ff;color:#ffffff;padding:12px 28px;border-radius:999px;font-weight:700;text-decoration:none;">
					Buka Cabang Baru di Kota Anda &rarr;
				</a>
			</div>
		</div>
	</section>

	<!-- Enriched Bottom Call-To-Action: Open a New Branch -->
	<section style="background:linear-gradient(135deg, #0c00ff 0%, #06007a 100%);padding:80px 20px;color:#ffffff;position:relative;overflow:hidden;">
		<div style="max-width:960px;margin:0 auto;text-align:center;position:relative;z-index:2;">
			<div style="display:inline-block;padding:6px 18px;background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.3);border-radius:999px;color:#ffffff;font-size:13px;font-weight:700;margin-bottom:20px;letter-spacing:0.5px;">
				PELUANG DISTRIBUTOR TUNGGAL KOTA
			</div>

			<h2 style="font-family:'Lexend',sans-serif;font-size:36px;font-weight:800;color:#ffffff;line-height:1.25;margin:0 0 20px 0;">
				Kota Anda Belum Memiliki Depot Cleanique Mart?
			</h2>

			<p style="font-size:18px;color:#e0e7ff;line-height:1.65;max-width:760px;margin:0 auto 35px auto;">
				Jadilah yang pertama membuka pusat isi ulang sabun curah legal Kemenkes di kecamatan Anda. Dapatkan <strong>proteksi radius eksklusif 3 km</strong>, tanpa bagi hasil royalti fee selamanya, dan pasokan langsung dari pabrik PT Indotech Berkah Abadi.
			</p>

			<div style="display:flex;justify-content:center;gap:15px;flex-wrap:wrap;margin-bottom:35px;">
				<div style="background:rgba(255,255,255,0.1);backdrop-filter:blur(4px);border:1px solid rgba(255,255,255,0.25);border-radius:10px;padding:10px 20px;font-size:14px;font-weight:600;">
					✓ 100% Laba Milik Anda (0% Royalti)
				</div>
				<div style="background:rgba(255,255,255,0.1);backdrop-filter:blur(4px);border:1px solid rgba(255,255,255,0.25);border-radius:10px;padding:10px 20px;font-size:14px;font-weight:600;">
					✓ Fasilitas Rak 8 Kontainer Siap Jual
				</div>
				<div style="background:rgba(255,255,255,0.1);backdrop-filter:blur(4px);border:1px solid rgba(255,255,255,0.25);border-radius:10px;padding:10px 20px;font-size:14px;font-weight:600;">
					✓ Didampingi Sampai Buka Toko
				</div>
			</div>

			<div style="display:flex;justify-content:center;gap:16px;flex-wrap:wrap;">
				<a 
					href="<?php echo esc_url( cleaniquemart_get_wa_url( 'Halo Admin Cleanique Mart, saya tertarik membuka cabang baru di kota/kecamatan saya. Mohon informasi kuota wilayah dan paket kemitraan.' ) ); ?>" 
					target="_blank" 
					rel="noopener noreferrer"
					style="display:inline-flex;align-items:center;gap:10px;background:#22c55e;color:#ffffff;padding:16px 36px;border-radius:999px;font-size:16px;font-weight:800;text-decoration:none;box-shadow:0 10px 25px rgba(34,197,94,0.4);transition:transform 0.2s ease, box-shadow 0.2s ease;"
					onmouseover="this.style.transform='translateY(-2px)'"
					onmouseout="this.style.transform='translateY(0)'"
				>
					<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
					Cek Kuota Wilayah Anda via WhatsApp
				</a>
			</div>
		</div>
	</section>

	<!-- Copy Feedback Toast -->
	<div id="cm-mitra-toast" class="cm-toast">Alamat cabang berhasil disalin ke clipboard!</div>
</main>

<script>
jQuery(document).ready(function($) {

	// Interactive Filter Tabs
	$('.cm-filter-btn').on('click', function() {
		$('.cm-filter-btn').removeClass('active').css({
			'background': '#ffffff',
			'color': '#475569',
			'border-color': '#cbd5e1'
		});
		$(this).addClass('active').css({
			'background': '#0c00ff',
			'color': '#ffffff',
			'border-color': '#0c00ff'
		});

		var filter = $(this).data('filter');
		var searchTerm = $('#cm-outlet-search').val().toLowerCase().trim();
		filterOutlets(filter, searchTerm);
	});

	// Live Search Input
	$('#cm-outlet-search').on('input', function() {
		var searchTerm = $(this).val().toLowerCase().trim();
		var activeFilter = $('.cm-filter-btn.active').data('filter');
		filterOutlets(activeFilter, searchTerm);
	});

	function filterOutlets(region, search) {
		var visibleCount = 0;
		$('.cm-outlet-item').each(function() {
			var itemRegion = $(this).data('region');
			var itemSearch = $(this).data('search');

			var matchRegion = (region === 'all' || itemRegion === region);
			var matchSearch = (!search || itemSearch.indexOf(search) > -1);

			if (matchRegion && matchSearch) {
				$(this).fadeIn(200);
				visibleCount++;
			} else {
				$(this).hide();
			}
		});

		if (visibleCount === 0) {
			$('#cm-no-results').fadeIn(200);
		} else {
			$('#cm-no-results').hide();
		}
	}

});
</script>

<?php
get_footer();
