<?php
/**
 * Template Part: Testimonial Gallery (Real Social Proof)
 * Matches cleaniquemart.com live site
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$wa_url = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*' );

// 7 Authentic Testimonial Screenshots from cleaniquemart.com
$testimonials = array(
	array(
		'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/Testimoni-1.webp',
		'alt' => 'Testimoni Pelanggan Sabun Cleanique Mart 1',
	),
	array(
		'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/Testimoni-2.webp',
		'alt' => 'Testimoni Pelanggan Sabun Cleanique Mart 2',
	),
	array(
		'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/Testimoni-3.webp',
		'alt' => 'Testimoni Pelanggan Sabun Cleanique Mart 3',
	),
	array(
		'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/Testimoni-4.webp',
		'alt' => 'Testimoni Pelanggan Sabun Cleanique Mart 4',
	),
	array(
		'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/Testimoni-5.webp',
		'alt' => 'Testimoni Pelanggan Sabun Cleanique Mart 5',
	),
	array(
		'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/Testimoni-6.webp',
		'alt' => 'Testimoni Pelanggan Sabun Cleanique Mart 6',
	),
	array(
		'src' => 'https://cleaniquemart.com/wp-content/uploads/2025/02/Testimoni-7.webp',
		'alt' => 'Testimoni Pelanggan Sabun Cleanique Mart 7',
	),
);
?>

<section class="cm-section cm-section-alt cm-testimonials-section" id="testimoni">
	<div class="cm-container">
		<div class="cm-section-header">
			<div class="cm-eyebrow cm-eyebrow-cyan">Bukti Nyata Kepuasan</div>
			<h2 class="cm-section-title">Testimoni Pelanggan</h2>
			<p class="cm-section-subtitle">
				Produk Cleanique Mart harganya lebih murah dari pasaran, pelanggan suka, margin keuntungan Anda pun berpotensi besar!
			</p>
		</div>

		<!-- Testimonials Carousel / Scrollable Grid -->
		<div class="cm-testi-gallery">
			<?php foreach ( $testimonials as $idx => $t ) : ?>
				<div class="cm-testi-card">
					<img 
						src="<?php echo esc_url( $t['src'] ); ?>" 
						alt="<?php echo esc_attr( $t['alt'] ); ?>" 
						loading="lazy"
						class="cm-testi-img"
					>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Action CTA -->
		<div class="cm-section-action">
			<a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer" class="cm-btn cm-btn-emerald cm-btn-lg">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
				<span>HUBUNGI KAMI VIA WHATSAPP</span>
			</a>
		</div>
	</div>
</section>
