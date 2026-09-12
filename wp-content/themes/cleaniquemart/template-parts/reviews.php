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
				<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
				<span>HUBUNGI KAMI SEKARANG</span>
			</a>
		</div>
	</div>
</section>
