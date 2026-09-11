<?php
/**
 * Template Part: How to Join (4 Steps) + Final WhatsApp Closing Banner
 * Matches cleaniquemart.com live site
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$img_dir  = get_template_directory_uri() . '/assets/images/';
$wa_url   = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*' );
$wa_phone = get_theme_mod( 'cleaniquemart_wa_phone', '087885590088' );
?>

<section class="cm-section cm-how-to-join-section" id="cara-bergabung">
	<div class="cm-container">
		<!-- Step Guide Block -->
		<div class="cm-join-grid">
			<div class="cm-join-content">
				<div class="cm-eyebrow cm-eyebrow-cyan">Langkah Mudah</div>
				<h2 class="cm-section-title">Cara Bergabung</h2>
				<p class="cm-section-subtitle" style="text-align:left;margin-bottom:2rem;">
					Proses kemitraan cepat, transparan, dan dibimbing langsung oleh tim manajemen pusat Cleanique Mart:
				</p>

				<div class="cm-steps-list">
					<div class="cm-step-item">
						<div class="cm-step-num">1</div>
						<div class="cm-step-text">
							<h3 class="cm-step-title">Isi Formulir Pendaftaran</h3>
							<p class="cm-step-desc">Hubungi tim kami via WhatsApp untuk verifikasi ketersediaan kuota wilayah Anda.</p>
						</div>
					</div>

					<div class="cm-step-item">
						<div class="cm-step-num">2</div>
						<div class="cm-step-text">
							<h3 class="cm-step-title">Pilih Paket Sesuai Keinginan</h3>
							<p class="cm-step-desc">Pilih antara Paket Starter (15 Jt) atau Paket King Promo (27.5 Jt) sesuai kapasitas toko.</p>
						</div>
					</div>

					<div class="cm-step-item">
						<div class="cm-step-num">3</div>
						<div class="cm-step-text">
							<h3 class="cm-step-title">Jadwalkan Presentasi &amp; Survey Lokasi</h3>
							<p class="cm-step-desc">Tim kami mendiskusikan rancangan 3D interior, tata letak rak depot, dan potensi pasar sekitar.</p>
						</div>
					</div>

					<div class="cm-step-item">
						<div class="cm-step-num">4</div>
						<div class="cm-step-text">
							<h3 class="cm-step-title">DP Tanda Jadi Minimal 50% di Muka</h3>
							<p class="cm-step-desc">Peralatan dirakit, produk dikemas dan langsung dikirim ke lokasi outlet Anda.</p>
						</div>
					</div>
				</div>

				<div style="margin-top:2rem;">
					<a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer" class="cm-btn cm-btn-emerald cm-btn-lg">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
						<span>HUBUNGI KAMI SEKARANG</span>
					</a>
				</div>
			</div>

			<div class="cm-join-visual">
				<img 
					src="https://cleaniquemart.com/wp-content/uploads/2025/03/hero-section.webp" 
					alt="Cleanique Mart Outlet Siap Buka" 
					loading="lazy"
					class="cm-join-img"
					onerror="this.src='<?php echo esc_url( $img_dir . 'Salinan-DEPO-CLEANIQUE-FULL-STD-640x640.png' ); ?>';"
				>
			</div>
		</div>

		<!-- Final Conversion Banner -->
		<div class="cm-final-closing-banner">
			<div class="cm-closing-inner">
				<h2 class="cm-closing-title">Tertarik untuk Buka Usaha Bisnis dengan Cleanique Mart di Area Anda?</h2>
				<p class="cm-closing-subtitle">
					Amankan wilayah eksklusif Anda sebelum diambil mitra lain di kota Anda. Hubungi kami sekarang juga:
				</p>
				<div class="cm-closing-action">
					<a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer" class="cm-btn cm-btn-emerald cm-btn-xl">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
						<span>CUSTOMER SERVICE (WA: <?php echo esc_html( $wa_phone ); ?>)</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
