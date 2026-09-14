<?php
/**
 * Front Page Component: Testimoni & Galeri Depot
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$theme_uri = get_template_directory_uri();
?>
<section id="section-166-100" class="ct-section">
	<div class="ct-section-inner-wrap">
		<h2 id="headline-167-100" class="ct-headline atomic-secondary-heading">Testimoni&nbsp;</h2>
		<div id="text_block-168-100" class="ct-text-block atomic-subheading">Produk Cleanique Mart harganya lebih murah dari pasaran,&nbsp;<br>pelanggan suka, margin keuntungan Anda pun berpotensi besar!</div>
		<div id="div_block-1301-100" class="ct-div-block">
			
			<?php
			$testimoni_slider_images = [
				'Testimoni-1.webp',
				'Testimoni-2.webp',
				'Testimoni-3.webp',
				'Testimoni-4.webp',
				'Testimoni-5.webp',
				'Testimoni-6.webp',
				'Testimoni-7.webp',
			];
			?>
			<div id="cm-gallery-testimoni" class="cm-testimoni-grid">
				<?php foreach ( $testimoni_slider_images as $idx => $t_file ) :
					$t_url = esc_url($theme_uri . '/assets/images/' . rawurlencode($t_file));
				?>
					<a href="<?php echo $t_url; ?>" class="cm-testimoni-item cm-lightbox-trigger" data-title="Testimoni Pelanggan #<?php echo ($idx + 1); ?>" data-desc="Review & Bukti Kepuasan Konsumen Sabun Cleanique Mart" target="_blank" rel="noopener">
						<figure class="cm-testi-figure" style="position:relative;">
							<img src="<?php echo $t_url; ?>" alt="<?php echo esc_attr('Testimoni Cleanique Mart ' . ($idx + 1)); ?>" loading="lazy" class="cm-testi-img-full">
							<span class="cm-review-zoom-badge">
								<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
								Perbesar
							</span>
						</figure>
					</a>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- Testimoni Slider Carousel (Mobile View Image 3) -->
		<link rel='stylesheet' id='oxygen-unslider-css' href='<?php echo esc_url($theme_uri); ?>/assets/css/unslider.css' type='text/css' media='all'/>
		<div id="slider-1286-100" class="ct-slider ct_unique_slider_7855">
			<div class="oxygen-unslider-container">
				<ul>
					<?php foreach ( $testimoni_slider_images as $idx => $t_file ) :
						$t_url = esc_url($theme_uri . '/assets/images/' . rawurlencode($t_file));
					?>
						<li>
							<div id="slide-1287-<?php echo ($idx + 1); ?>" class="ct-slide">
								<a href="<?php echo $t_url; ?>" class="cm-testimoni-slide-link cm-lightbox-trigger" data-title="Testimoni Pelanggan #<?php echo ($idx + 1); ?>" data-desc="Review & Bukti Kepuasan Konsumen Sabun Cleanique Mart" style="display:block; position:relative; text-align:center;">
									<img id="image-1288-<?php echo ($idx + 1); ?>" alt="<?php echo esc_attr('Testimoni Cleanique Mart ' . ($idx + 1)); ?>" src="<?php echo $t_url; ?>" class="ct-image cm-testimoni-slide-img" loading="lazy" />
									<span class="cm-review-zoom-badge" style="top:12px; right:calc(50% - 150px);">
										<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
										Perbesar
									</span>
								</a>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<script class="ct-slider-script">
			jQuery(document).ready(function($) {
				if ($.fn.unslider) {
					$('#slider-1286-100.ct_unique_slider_7855 .oxygen-unslider-container:not(.unslider-horizontal,.unslider-fade)').unslider({
						autoplay: true,
						delay: 3000,
						animation: 'horizontal',
						speed: 750,
						arrows: true,
						nav: true,
						infinite: true
					});
				}
			});
		</script>
		<a id="link-1354-100" class="ct-link oxel_icon_button__container" href="https://api.whatsapp.com/send/?phone=6287885590088&amp;text=Halo+%2Acleaniquemart.com%2A+Saya+Mau+Minta+Informasi+Tentang+Mitra+Cleanique+Mart%2A&amp;type=phone_number&amp;app_absent=0" target="_self" rel="nofollow" role="button">
			<div id="fancy_icon-1355-100" class="ct-fancy-icon oxel_icon_button_icon"><svg id="svg-fancy_icon-1355-100"><use xlink:href="#FontAwesomeicon-whatsapp"></use></svg></div>
			<div id="text_block-1356-100" class="ct-text-block oxel_icon_button_text">HUBUNGI KAMI</div>
		</a>
	</div>
</section>
