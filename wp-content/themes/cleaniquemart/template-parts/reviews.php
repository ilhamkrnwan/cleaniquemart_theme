<?php
/**
 * Template Part: Marketplace Reviews (Authentic Customer Feedback)
 * Matches cleaniquemart.com live site
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$wa_url = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*' );

$reviews = array(
	array( 'name' => 'Review Determart', 'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/review-determart.webp' ),
	array( 'name' => 'Review Essenz', 'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/review-essenz.webp' ),
	array( 'name' => 'Review Soft Sense', 'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/review-soft-sense.webp' ),
	array( 'name' => 'Review Pelicin Setrika', 'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/review-pelicin-setrika.webp' ),
	array( 'name' => 'Review Malabeez', 'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/review-malabeez.webp' ),
	array( 'name' => 'Review O Clean', 'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/review-oclean.webp' ),
	array( 'name' => 'Review Pel Lantai', 'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/review-pel-lantai.webp' ),
	array( 'name' => 'Review Athari', 'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/review-athari.webp' ),
	array( 'name' => 'Review Arai', 'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/review-arai.webp' ),
);
?>

<section class="cm-section cm-reviews-section" id="reviews">
	<div class="cm-container">
		<div class="cm-section-header">
			<div class="cm-eyebrow cm-eyebrow-emerald">Ulasan Marketplace</div>
			<h2 class="cm-section-title">Review Produk Terpercaya</h2>
			<p class="cm-section-subtitle">
				Berikut ini adalah beberapa review produk kami via marketplace. Terbukti digemari pelanggan karena kualitas wangi awet dan bersih maksimal.
			</p>
		</div>

		<!-- Review Gallery Grid / Slider -->
		<div class="cm-review-gallery">
			<?php foreach ( $reviews as $r ) : ?>
				<div class="cm-review-card">
					<img 
						src="<?php echo esc_url( $r['src'] ); ?>" 
						alt="<?php echo esc_attr( $r['name'] ); ?>" 
						loading="lazy"
						class="cm-review-img"
					>
					<span class="cm-review-caption"><?php echo esc_html( $r['name'] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Action CTA Button -->
		<div class="cm-section-action">
			<a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer" class="cm-btn cm-btn-emerald cm-btn-lg">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
				<span>HUBUNGI KAMI SEKARANG</span>
			</a>
		</div>
	</div>
</section>
