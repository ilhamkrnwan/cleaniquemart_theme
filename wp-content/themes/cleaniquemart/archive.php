<?php
/**
 * Archive Template (archive.php)
 *
 * Matching oxygen-168.css aesthetic for category, tag, and date archives.
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$theme_uri = get_template_directory_uri();
$img_dir   = $theme_uri . '/assets/images/';
?>

<main id="main-content" class="oxygen-main-content">
	<!-- Authentic Oxygen Hero Section -->
	<section id="section-3-168" class="ct-section ct-section-with-shape-divider">
		<div class="ct-section-inner-wrap">
			<div id="div_block-4-168" class="ct-div-block" style="text-align:center;max-width:860px;margin:0 auto;">
				<div class="cm-badge-glass-hero">
					Arsip Artikel &amp; Kategori
				</div>
				<h1 id="headline-5-168" class="ct-headline atomic-primary-heading" style="text-align:center;font-size:44px;">
					<?php the_archive_title(); ?>
				</h1>
				<?php if ( get_the_archive_description() ) : ?>
					<p id="text_block-6-168" class="ct-text-block atomic-subheading" style="text-align:center;max-width:740px;margin-left:auto;margin-right:auto;">
						<?php the_archive_description(); ?>
					</p>
				<?php endif; ?>
			</div>

			<!-- Ocean Waves Shape Divider -->
			<div id="-shape-divider-7-168" class="oxy-shape-divider">
				<div class="oxy_shape_divider">
					<svg viewBox="0 0 1440 320" version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
						<g id="Ocean-Waves" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<path d="M60.0736562,199.999824 C74.730684,216.560111 96.1461381,227.000176 120,227.000176 C143.853862,227.000176 165.269316,216.560111 179.926344,199.999824 L180.073656,199.999824 C194.730684,216.560111 216.146138,227.000176 240,227.000176 C263.853862,227.000176 285.269316,216.560111 299.926344,199.999824 L300.073656,199.999824 C314.730684,216.560111 336.146138,227.000176 360,227.000176 C383.853862,227.000176 405.269316,216.560111 419.926344,199.999824 L420.073656,199.999824 C434.730684,216.560111 456.146138,227.000176 480,227.000176 C503.853862,227.000176 525.269316,216.560111 539.926344,199.999824 L540.073656,199.999824 C554.730684,216.560111 576.146138,227.000176 600,227.000176 C623.853862,227.000176 645.269316,216.560111 659.926344,199.999824 L660.073656,199.999824 C674.730684,216.559935 696.146138,227 720,227 C743.853862,227 765.269316,216.559935 779.926344,199.999824 L780.073656,199.999824 C794.730684,216.560111 816.146138,227.000176 840,227.000176 C863.853862,227.000176 885.269316,216.560111 899.926344,199.999824 L900.073656,199.999824 C914.730684,216.560111 936.146138,227.000176 960,227.000176 C983.853862,227.000176 1005.26932,216.560111 1019.92634,199.999824 L1020.07366,199.999824 C1034.73068,216.560111 1056.14614,227.000176 1080,227.000176 C1103.85386,227.000176 1125.26932,216.560111 1139.92634,199.999824 L1140.07366,199.999824 C1154.73068,216.560111 1176.14614,227.000176 1200,227.000176 C1223.85386,227.000176 1245.26932,216.560111 1259.92634,199.999824 L1260.07366,199.999824 C1274.73068,216.560111 1296.14614,227.000176 1320,227.000176 C1343.85386,227.000176 1365.26932,216.560111 1379.92634,199.999824 L1380.07366,199.999824 C1394.73068,216.560111 1416.14614,227.000176 1440,227.000176 L1440,319.999824 L0,319.999824 L0,227.000176 C23.8538619,227.000176 45.269316,216.560111 59.9263438,199.999824 L60.0736562,199.999824 Z" fill="currentColor"></path>
						</g>
					</svg>
				</div>
			</div>

			<!-- Bubble decoration -->
			<img id="image-8-168" alt="" src="<?php echo esc_url( $img_dir ); ?>bubble.webp" class="ct-image" />
		</div>
	</section>

	<!-- Articles Grid Section -->
	<section id="section-17-168" class="ct-section" style="padding-top:40px;padding-bottom:120px;">
		<div class="ct-section-inner-wrap" style="max-width:1160px;margin:0 auto;">
			<?php if ( have_posts() ) : ?>
				<div id="_posts_grid-43-168" class="oxy-easy-posts oxy-posts-grid">
					<div class="oxy-posts" style="display:flex;flex-wrap:wrap;margin:-14px;">
						<?php while ( have_posts() ) : the_post(); 
							$thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'large' ) : $img_dir . 'omah-editt.webp';
							$date_formatted = get_the_date( 'd F Y' );
						?>
							<div class="oxy-post" style="width:33.333%;box-sizing:border-box;padding:14px;display:flex;">
								<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:16px;overflow:hidden;box-shadow:0 4px 14px rgba(0,0,0,0.05);display:flex;flex-direction:column;justify-content:space-between;width:100%;">
									<div>
										<a class="oxy-post-image" href="<?php the_permalink(); ?>" style="display:block;position:relative;overflow:hidden;height:240px;background:#0f172a;text-decoration:none;">
											<img 
												src="<?php echo esc_url( $thumb_url ); ?>" 
												alt="<?php the_title_attribute(); ?>"
												style="width:100%;height:100%;object-fit:cover;display:block;"
												loading="lazy"
											/>
											<div class="oxy-post-image-date-overlay" style="position:absolute;top:12px;right:12px;background:rgba(15,23,42,0.75);color:#ffffff;padding:4px 10px;border-radius:6px;font-size:11px;font-weight:700;">
												<?php echo esc_html( $date_formatted ); ?>
											</div>
										</a>

										<div style="padding:22px 20px 14px 20px;">
											<h2 class="oxy-post-title" style="margin:0 0 12px 0;font-size:18px;line-height:1.4;font-weight:700;">
												<a href="<?php the_permalink(); ?>" style="color:#0f172a;text-decoration:none;">
													<?php the_title(); ?>
												</a>
											</h2>
											<p style="font-size:13.5px;color:#475569;line-height:1.6;margin:0;">
												<?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?>
											</p>
										</div>
									</div>

									<div style="padding:0 20px 20px 20px;border-top:1px dashed #f1f5f9;margin-top:14px;padding-top:14px;">
										<a href="<?php the_permalink(); ?>" style="color:#0c00ff;font-size:13px;font-weight:700;text-decoration:none;">
											Baca Selengkapnya &rarr;
										</a>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>

					<div style="text-align:center;margin-top:50px;">
						<?php 
						the_posts_pagination( array(
							'prev_text'          => '&larr; Sebelumnya',
							'next_text'          => 'Selanjutnya &rarr;',
							'before_page_number' => '<span class="screen-reader-text">Halaman </span>',
						) ); 
						?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
</main>

<?php
get_footer();
