<?php
/**
 * Template Part: Ecosystem (Market Segments + 7 Reasons + 8 25L Products)
 * Matches cleaniquemart.com live site
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';

// 9 Market Segments
$segments = array(
	array( 'name' => 'Laundry Kiloan/Satuan', 'icon' => 'shirt' ),
	array( 'name' => 'Rumah Makan / Restoran', 'icon' => 'utensils' ),
	array( 'name' => 'Rumah Tangga', 'icon' => 'home' ),
	array( 'name' => 'Industri & Gedung', 'icon' => 'building' ),
	array( 'name' => 'Hotel & Penginapan', 'icon' => 'hotel' ),
	array( 'name' => 'Salon & Barbershop', 'icon' => 'scissors' ),
	array( 'name' => 'Klinik & Rumah Sakit', 'icon' => 'heart-pulse' ),
	array( 'name' => 'Cuci Mobil & Motor', 'icon' => 'car' ),
	array( 'name' => 'Tempat Ibadah & Pesantren', 'icon' => 'moon' ),
);

// 7 Key Reasons
$reasons = array(
	array(
		'title' => 'Konsumsi Berulang (High Repeat Order)',
		'desc'  => 'Produk seperti deterjen, pelembut, dan sabun selalu habis terpakai dan dicari konsumen secara berkala.',
		'icon'  => 'refresh',
	),
	array(
		'title' => 'Terjual Lebih dari 1 Juta Produk',
		'desc'  => 'Inovasi formulasi chemical kebersihan kami telah terbukti di pasar nasional sejak tahun 2011.',
		'icon'  => 'star',
	),
	array(
		'title' => 'Harga Tangan Pertama Sangat Kompetitif',
		'desc'  => 'Langsung dari pabrik PT Indotech Berkah Abadi sehingga mitra tidak kesulitan menjual dan menikmati margin tebal.',
		'icon'  => 'tags',
	),
	array(
		'title' => 'Formula Ramah Lingkungan (Eco-Friendly)',
		'desc'  => 'Limbah cair mudah terurai (biodegradable), lulus uji laboratorium kesehatan, aman untuk mesin dan septictank.',
		'icon'  => 'recycle',
	),
	array(
		'title' => 'Pelatihan & Pendampingan Produk',
		'desc'  => 'Kami memastikan Anda paham SOP pencampuran, pengisian higienis, hingga teknik edukasi pelanggan.',
		'icon'  => 'award',
	),
	array(
		'title' => 'Pengurusan Legalitas & Izin Edar',
		'desc'  => 'Legalitas resmi terdaftar Kemenkes RI (PKRT) dan bersertifikasi halal, membuat bisnis Anda aman dan berkelas.',
		'icon'  => 'file-check',
	),
	array(
		'title' => 'Dukungan Marketing AI & Strategi Lokal',
		'desc'  => 'Materi promosi digital berbasis AI untuk sosmed serta panduan promosi offline untuk menjangkau pasar sekitar.',
		'icon'  => 'cpu',
	),
);

// 8 25L Jug Products
$products = array(
	array(
		'name' => 'Hand Wash 25 L',
		'src'  => 'https://cleaniquemart.com/wp-content/uploads/2025/06/Hand-Washing-25L.webp',
		'desc' => 'Sabun cuci tangan lembut dengan antibakterial & wangi buah segar',
	),
	array(
		'name' => 'Deterjen Busa 25 L',
		'src'  => 'https://cleaniquemart.com/wp-content/uploads/2025/06/Deterjen-Busa-25L.webp',
		'desc' => 'Deterjen cuci manual & mesin dua tabung dengan daya angkat noda kuat',
	),
	array(
		'name' => 'Deterjen Matic 25 L',
		'src'  => 'https://cleaniquemart.com/wp-content/uploads/2025/06/Deterjen-Matic-25L.webp',
		'desc' => 'Deterjen rendah busa khusus mesin cuci front-load & top-load hemat air',
	),
	array(
		'name' => 'Parfum Waterbase 25 L',
		'src'  => 'https://cleaniquemart.com/wp-content/uploads/2025/06/Parfum-Waterbase-25L.webp',
		'desc' => 'Parfum laundry berbahan dasar air murni distilasi TDS 0, wangi tahan lama',
	),
	array(
		'name' => 'Softener Premium 25 L',
		'src'  => 'https://cleaniquemart.com/wp-content/uploads/2025/06/Softener-25L.webp',
		'desc' => 'Pelembut pakaian yang melembutkan serat kain & anti kusut',
	),
	array(
		'name' => 'Pelicin Setrika 25 L',
		'src'  => 'https://cleaniquemart.com/wp-content/uploads/2025/06/Pelicin-Setrika-25L.webp',
		'desc' => 'Cairan pelicin setrika membuat pakaian cepat rapi tanpa noda putih',
	),
	array(
		'name' => 'Sabun Cuci Piring 25 L',
		'src'  => 'https://cleaniquemart.com/wp-content/uploads/2025/06/Dish-Washing-25L.webp',
		'desc' => 'Formula jeruk nipis ampuh melarutkan lemak membandel seketika',
	),
	array(
		'name' => 'Karbol / Pel Lantai 25 L',
		'src'  => 'https://cleaniquemart.com/wp-content/uploads/2025/06/Pel-Lantai-25L.webp',
		'desc' => 'Pembersih lantai wangi segar, cepat kering & membunuh kuman',
	),
);
?>

<section class="cm-section cm-ecosystem-section" id="produk">
	<div class="cm-container">
		<!-- Sub-Section 1: 9 Market Segments -->
		<div class="cm-ecosystem-block">
			<div class="cm-section-header">
				<div class="cm-eyebrow cm-eyebrow-cyan">Pangsa Pasar Sangat Luas</div>
				<h2 class="cm-section-title">Sabun Curah Sangat Dibutuhkan oleh Pemilik Usaha:</h2>
				<p class="cm-section-subtitle">
					Setiap hari, 9 sektor usaha dan institusi ini selalu membeli dan menghabiskan sabun dalam jumlah puluhan hingga ratusan liter:
				</p>
			</div>

			<div class="cm-segments-grid">
				<?php foreach ( $segments as $seg ) : ?>
					<div class="cm-segment-chip">
						<span class="cm-segment-dot"></span>
						<span class="cm-segment-name"><?php echo esc_html( $seg['name'] ); ?></span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- Sub-Section 2: 7 Reasons Why Cleanique Mart -->
		<div class="cm-ecosystem-block" id="keunggulan" style="margin-top:4rem;">
			<div class="cm-section-header">
				<div class="cm-eyebrow cm-eyebrow-emerald">Keunggulan Bersama Kami</div>
				<h2 class="cm-section-title">Kenapa Bisnis Sabun Bersama Cleanique Mart?</h2>
				<p class="cm-section-subtitle">
					Kami memberikan ekosistem lengkap dari pabrik ke toko Anda agar usaha langsung berjalan dan minim risiko.
				</p>
			</div>

			<div class="cm-reasons-grid">
				<?php foreach ( $reasons as $idx => $r ) : ?>
					<div class="cm-reason-card">
						<div class="cm-reason-num">0<?php echo esc_html( $idx + 1 ); ?></div>
						<div class="cm-reason-body">
							<h3 class="cm-reason-title"><?php echo esc_html( $r['title'] ); ?></h3>
							<p class="cm-reason-desc"><?php echo esc_html( $r['desc'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- Sub-Section 3: 8 25L Jug Products Grid -->
		<div class="cm-ecosystem-block" style="margin-top:4.5rem;">
			<div class="cm-section-header">
				<div class="cm-eyebrow cm-eyebrow-amber">Katalog Varian Curah</div>
				<h2 class="cm-section-title">Varian Produk Ukuran Lengkap (Jerigen 25 Liter)</h2>
				<p class="cm-section-subtitle">
					Stok jerigen 25L siap isi ulang untuk melayani konsumen eceran maupun pasokan grosir ke para pelaku usaha lokal.
				</p>
			</div>

			<div class="cm-products-jug-grid">
				<?php foreach ( $products as $p ) : ?>
					<div class="cm-jug-card">
						<div class="cm-jug-visual">
							<img 
								src="<?php echo esc_url( $p['src'] ); ?>" 
								alt="<?php echo esc_attr( $p['name'] ); ?>" 
								loading="lazy"
								class="cm-jug-img"
							>
							<span class="cm-jug-badge">Isi 25 Liter</span>
						</div>
						<div class="cm-jug-body">
							<h3 class="cm-jug-name"><?php echo esc_html( $p['name'] ); ?></h3>
							<p class="cm-jug-desc"><?php echo esc_html( $p['desc'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
