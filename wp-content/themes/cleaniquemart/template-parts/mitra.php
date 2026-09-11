<?php
/**
 * Template Part: Mitra Showcase (Kisah Sukses Mitra & Dokumentasi Gerai)
 * Matches cleaniquemart.com live site
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';
$wa_url  = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Kemitraan Cleanique Mart*' );
?>

<section class="cm-section cm-section-alt cm-mitra-section" id="mitra">
	<div class="cm-container">
		<div class="cm-section-header">
			<div class="cm-eyebrow cm-eyebrow-cyan">Kisah Sukses Mitra</div>
			<h2 class="cm-section-title">Gabung Jadi Mitra Kami dengan Berbagai Keuntungan</h2>
			<p class="cm-section-subtitle">
				Para mitra kami membuktikan sendiri bagaimana bisnis sabun curah Cleanique Mart memberikan kepastian pasokan, legalitas aman, dan repeat order yang terus mengalir.
			</p>
		</div>

		<!-- Mitra Cards Grid -->
		<div class="cm-mitra-grid">
			<!-- Mitra 1: Windu Darojat (Temanggung) -->
			<div class="cm-mitra-card">
				<div class="cm-mitra-visual">
					<img 
						src="https://cleaniquemart.com/wp-content/uploads/2025/03/temanggung.webp" 
						alt="Cleanique Mart Temanggung - Windu Darojat"
						loading="lazy"
						class="cm-mitra-img"
						onerror="this.src='<?php echo esc_url( $img_dir . 'WhatsApp-Image-2022-06-06-at-11.33.29-1.jpeg' ); ?>';"
					>
					<span class="cm-mitra-badge">Temanggung, Jawa Tengah</span>
				</div>
				<div class="cm-mitra-body">
					<p class="cm-mitra-quote">
						"Sudah 19 tahun saya berbisnis pada sektor Household. Namun ketika saya menjadi Mitra Depo Cleanique, <strong>banyak sekali dukungan yang tidak saya dapatkan di perusahaan lain</strong>. Pasokan sangat konsisten dan perizinan PKRT Kemenkes resmi membuat langganan laundry makin percaya."
					</p>
					<div class="cm-mitra-author">
						<div class="cm-mitra-avatar">WD</div>
						<div>
							<h3 class="cm-mitra-name">Windu Darojat</h3>
							<p class="cm-mitra-role">Mitra Cleanique Mart Temanggung (2 Cabang)</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Mitra 2: Johan Regan Jauw (Palembang) -->
			<div class="cm-mitra-card">
				<div class="cm-mitra-visual">
					<img 
						src="https://cleaniquemart.com/wp-content/uploads/2025/03/palembang.webp" 
						alt="Cleanique Mart Palembang - Johan Regan Jauw"
						loading="lazy"
						class="cm-mitra-img"
						onerror="this.src='<?php echo esc_url( $img_dir . 'Salinan-DEPO-CLEANIQUE-FULL-STD-640x640.png' ); ?>';"
					>
					<span class="cm-mitra-badge">Palembang, Sumatera Selatan</span>
				</div>
				<div class="cm-mitra-body">
					<p class="cm-mitra-quote">
						"Peluang bisnis sabun isi ulang curah ini luar biasa di Palembang. Kami mengembangkan jaringan distribusi chemical laundry dan pembersih rumah tangga. <strong>Permintaan sabun curah dan repeat order pelanggan sangat tinggi</strong> setiap minggunya!"
					</p>
					<div class="cm-mitra-author">
						<div class="cm-mitra-avatar" style="background:var(--cm-emerald-600);">JR</div>
						<div>
							<h3 class="cm-mitra-name">Johan Regan Jauw</h3>
							<p class="cm-mitra-role">Mitra Cleanique Mart Palembang (Kemuning)</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Photo Collage of Real Outlet Stores -->
		<div class="cm-collage-wrap" style="margin-top:2.5rem;">
			<img 
				src="https://cleaniquemart.com/wp-content/uploads/2025/03/photo-collage.webp" 
				alt="Dokumentasi Gerai Outlet Mitra Cleanique Mart di Berbagai Kota" 
				loading="lazy"
				class="cm-collage-img"
				onerror="this.src='<?php echo esc_url( $img_dir . 'Cleanique-Mart-Jakarta-Timur-Dalam-Toko.webp' ); ?>';"
			>
		</div>
	</div>
</section>
