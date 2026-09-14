<?php
/**
 * Front Page Component: Review Produk Marketplace
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$theme_uri = get_template_directory_uri();
?>
<section id="section-915-100" class="ct-section">
	<div class="ct-section-inner-wrap">
		<h2 id="headline-916-100" class="ct-headline atomic-secondary-heading">Review Produk</h2>
		<div id="text_block-917-100" class="ct-text-block atomic-subheading">Berikut ini adalah beberapa review produk kami via marketplace</div>
		<div id="div_block-1302-100" class="ct-div-block">
			<div class="cm-review-controls-mobile">
				<span class="cm-review-slide-hint">Geser 15 Review Produk</span>
				<div class="cm-review-arrows-wrap">
					<button type="button" class="cm-review-arrow-btn cm-review-prev-btn" aria-label="Sebelumnya">&lsaquo;</button>
					<button type="button" class="cm-review-arrow-btn cm-review-next-btn" aria-label="Selanjutnya">&rsaquo;</button>
				</div>
			</div>
			<div id="cm-gallery-review" class="cm-review-grid">
				<?php
				$review_images = [
					[
						'file'    => 'review determat matic.png',
						'title'   => 'DeterMat Matic',
						'desc'    => 'Biang Deterjen Cair Mesin Cuci Laundry (Rendah Busa)',
						'rating'  => '4.9',
						'reviews' => '1rb+ Penilaian',
					],
					[
						'file'    => 'review determat busa.png',
						'title'   => 'DeterMat Extra Busa',
						'desc'    => 'Bahan Deterjen Cair Cuci Manual (Hasil Jadi 20L)',
						'rating'  => '4.8',
						'reviews' => '400 Penilaian',
					],
					[
						'file'    => 'review determat eco.png',
						'title'   => 'DeterMat Eco',
						'desc'    => 'Bahan Sabun Cuci Cair Ekonomis Ramah Lingkungan',
						'rating'  => '4.8',
						'reviews' => '5,9rb Penilaian',
					],
					[
						'file'    => 'review softsense.png',
						'title'   => 'SoftSense',
						'desc'    => 'Paket Biang Softener & Pelembut Wangi Pakaian',
						'rating'  => '4.8',
						'reviews' => '1,3rb Penilaian',
					],
					[
						'file'    => 'review softa.png',
						'title'   => 'Softa Softener Pasta',
						'desc'    => 'Biang Pelembut & Pewangi Pakaian Pasta (Hasil Jadi 5L)',
						'rating'  => '4.9',
						'reviews' => '1,4rb Penilaian',
					],
					[
						'file'    => 'review essenz.png',
						'title'   => 'Essenz Waterbase',
						'desc'    => 'Bahan Parfum Laundry Pewangi Waterbase (Hasil 8L)',
						'rating'  => '4.9',
						'reviews' => '299 Penilaian',
					],
					[
						'file'    => 'review konsentrat parfum alkoholbase.png',
						'title'   => 'Parfum Alkoholbase',
						'desc'    => 'Konsentrat Parfum Laundry Alkoholbase Awet (Hasil 10L)',
						'rating'  => '4.9',
						'reviews' => '43 Penilaian',
					],
					[
						'file'    => 'review biang karbol.png',
						'title'   => 'Biang Karbol Wangi',
						'desc'    => 'Karbol Anti Kuman Aroma Sereh Pinus Kamar Mandi (5L)',
						'rating'  => '4.9',
						'reviews' => '322 Penilaian',
					],
					[
						'file'    => 'review biang pel lantai.png',
						'title'   => 'Biang Pel Lantai',
						'desc'    => 'Pembersih Lantai 5L Antibacterial Fresh Fragrance',
						'rating'  => '4.9',
						'reviews' => '124 Penilaian',
					],
					[
						'file'    => 'review o_clean.png',
						'title'   => 'O-Clean Cuci Piring',
						'desc'    => 'Bahan Cairan Sabun Cuci Piring Refill (Hasil Jadi 10L)',
						'rating'  => '4.8',
						'reviews' => '1,2rb Penilaian',
					],
					[
						'file'    => 'review octa+.png',
						'title'   => 'Octa+ Cuci Piring',
						'desc'    => 'Biang Sabun Cuci Piring Kesat Aroma Jeruk Nipis (5L)',
						'rating'  => '4.8',
						'reviews' => '2,3rb Penilaian',
					],
					[
						'file'    => 'review detta +.png',
						'title'   => 'Detta+ Deterjen',
						'desc'    => 'Konsentrat Biang Detergent Cair Laundry Hemat (5L)',
						'rating'  => '4.8',
						'reviews' => '1,7rb Penilaian',
					],
					[
						'file'    => 'review shabil.png',
						'title'   => 'Shabil Shampo Mobil',
						'desc'    => 'Biang Sabun Cuci Mobil Snow Wash Busa Melimpah (5L)',
						'rating'  => '5.0',
						'reviews' => 'Penilaian Sempurna',
					],
					[
						'file'    => 'review athari.png',
						'title'   => 'Athari Body Wash',
						'desc'    => 'Biang Sabun Mandi Cair Lembut & Harum di Kulit (3L)',
						'rating'  => '4.8',
						'reviews' => '752 Penilaian',
					],
					[
						'file'    => 'review arai.png',
						'title'   => 'Arai Hand Soap',
						'desc'    => 'Paket Bahan Sabun Cuci Tangan Lembut Higienis (15L)',
						'rating'  => '4.9',
						'reviews' => '85 Penilaian',
					],
				];
				foreach ( $review_images as $rv ) :
					$rv_url = esc_url($theme_uri . '/assets/images/testimoni/' . rawurlencode($rv['file']));
				?>
					<a href="<?php echo $rv_url; ?>" class="cm-review-item cm-review-lightbox-trigger" data-title="<?php echo esc_attr($rv['title']); ?>" data-desc="<?php echo esc_attr($rv['desc']); ?>" target="_blank" rel="noopener">
						<figure class="cm-review-figure">
							<div class="cm-review-img-wrap">
								<img src="<?php echo $rv_url; ?>" alt="Review <?php echo esc_attr($rv['title']); ?>" loading="lazy" class="cm-review-img-full">
								<span class="cm-review-zoom-badge">
									<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
									Perbesar
								</span>
							</div>
							<figcaption class="cm-review-caption">
								<div class="cm-review-rating-row">
									<span class="cm-review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
									<span class="cm-review-rating-score">&#9733; <?php echo esc_html($rv['rating']); ?></span>
								</div>
								<h4 class="cm-review-title"><?php echo esc_html($rv['title']); ?></h4>
								<p class="cm-review-desc"><?php echo esc_html($rv['desc']); ?></p>
								<div class="cm-review-cta">
									<span>Lihat Ulasan</span>
									<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
								</div>
							</figcaption>
						</figure>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- Script for Mobile Review Slideover Navigation -->
		<script>
		document.addEventListener('DOMContentLoaded', function() {
			const prevBtn = document.querySelector('.cm-review-prev-btn');
			const nextBtn = document.querySelector('.cm-review-next-btn');
			const reviewGrid = document.getElementById('cm-gallery-review');
			if (prevBtn && nextBtn && reviewGrid) {
				prevBtn.addEventListener('click', function() {
					reviewGrid.scrollBy({ left: -270, behavior: 'smooth' });
				});
				nextBtn.addEventListener('click', function() {
					reviewGrid.scrollBy({ left: 270, behavior: 'smooth' });
				});
			}
		});
		</script>
		<div class="cm-review-btn-wrap">
			<a id="link-1348-100" class="ct-link oxel_icon_button__container" href="https://api.whatsapp.com/send/?phone=6287885590088&#038;text=Halo+%2Acleaniquemart.com%2A+Saya+Mau+Minta+Informasi+Tentang+Mitra+Cleanique+Mart%2A&#038;type=phone_number&#038;app_absent=0" target="_self" rel="nofollow" role="button">
				<div id="fancy_icon-1349-100" class="ct-fancy-icon oxel_icon_button_icon"><svg id="svg-fancy_icon-1349-100"><use xlink:href="#FontAwesomeicon-whatsapp"></use></svg></div>
				<div id="text_block-1350-100" class="ct-text-block oxel_icon_button_text">HUBUNGI KAMI</div>
			</a>
		</div>
	</div>
</section>
