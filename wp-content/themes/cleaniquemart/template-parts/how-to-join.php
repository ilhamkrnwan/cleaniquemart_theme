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
						<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
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
						<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
						<span>CUSTOMER SERVICE (WA: <?php echo esc_html( $wa_phone ); ?>)</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
