<?php
/**
 * Blog Index Template (home.php)
 *
 * Authentic Oxygen Theme layout (matching oxygen-168.css) with enriched
 * interactive category filter, search, featured post hero banner, reading time, and clean cards.
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
					Pusat Edukasi &amp; Formulasi Cleanique Lab
				</div>
				<h1 id="headline-5-168" class="ct-headline atomic-primary-heading" style="text-align:center;">Artikel &amp; Edukasi</h1>
				<p id="text_block-6-168" class="ct-text-block atomic-subheading" style="text-align:center;max-width:740px;margin-left:auto;margin-right:auto;">
					Panduan praktis hemat membuat sabun sendiri, tips efisiensi operasional laundry kiloan, dan wawasan bisnis depot isi ulang PKRT resmi.
				</p>
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

	<!-- Search & Filter Section -->
	<section style="background:#ffffff;padding:24px 20px;border-bottom:1px solid #f1f5f9;">
		<div style="max-width:1160px;margin:0 auto;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px;">
			<div style="display:flex;align-items:center;gap:10px;flex-wrap:wrap;">
				<span style="font-size:13px;font-weight:700;color:#64748b;text-transform:uppercase;">Topik Populer:</span>
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" style="padding:6px 14px;border-radius:999px;font-size:13px;font-weight:600;background:#0c00ff;color:#ffffff;text-decoration:none;">Semua Artikel</a>
				<span style="padding:6px 14px;border-radius:999px;font-size:13px;font-weight:600;background:#f1f5f9;color:#475569;">Biang &amp; Konsentrat</span>
				<span style="padding:6px 14px;border-radius:999px;font-size:13px;font-weight:600;background:#f1f5f9;color:#475569;">Deterjen Laundry</span>
				<span style="padding:6px 14px;border-radius:999px;font-size:13px;font-weight:600;background:#f1f5f9;color:#475569;">Pembersih Lantai</span>
			</div>

			<!-- Live Search -->
			<div style="position:relative;width:100%;max-width:320px;">
				<input 
					type="text" 
					id="cm-blog-search" 
					placeholder="Cari artikel formulir atau produk..." 
					style="width:100%;padding:10px 16px 10px 38px;border-radius:999px;border:1.5px solid #cbd5e1;font-size:14px;outline:none;box-sizing:border-box;"
				>
				<svg style="position:absolute;left:14px;top:50%;transform:translateY(-50%);color:#94a3b8;" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
			</div>
		</div>
	</section>

	<!-- Main Articles Grid Section -->
	<section id="section-17-168" class="ct-section" style="padding-top:40px;padding-bottom:120px;">
		<div class="ct-section-inner-wrap" style="max-width:1160px;margin:0 auto;">
			<?php
			$paged = 1;
			if ( get_query_var( 'paged' ) ) {
				$paged = absint( get_query_var( 'paged' ) );
			} elseif ( get_query_var( 'page' ) ) {
				$paged = absint( get_query_var( 'page' ) );
			}

			// Main blog query with 6 posts per page for pagination
			$blog_query = new WP_Query( array(
				'post_type'           => 'post',
				'post_status'         => 'publish',
				'posts_per_page'      => 6,
				'paged'               => $paged,
				'ignore_sticky_posts' => 1,
			) );
			
			// If on first page, show the Spotlight Post
			if ( $paged <= 1 ) :
				$spotlight_query = new WP_Query( array(
					'post_type'           => 'post',
					'post_status'         => 'publish',
					'posts_per_page'      => 1,
					'ignore_sticky_posts' => 1,
				) );

				if ( $spotlight_query->have_posts() ) :
					while ( $spotlight_query->have_posts() ) : $spotlight_query->the_post();
						$spot_thumb = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : $img_dir . 'omah-editt.webp';
						$spot_date = get_the_date( 'd F Y' );
						$spot_words = str_word_count( strip_tags( get_the_content() ) );
						$spot_reading_time = ceil( max( 1, $spot_words / 200 ) ) . ' Menit Baca';
			?>
				<!-- Sorotan Blog (Spotlight Utama) -->
				<div class="cm-blog-spotlight">
					<div style="display:flex;align-items:center;gap:8px;margin-bottom:18px;">
						<span style="font-size:12px;font-weight:800;color:#0c00ff;text-transform:uppercase;letter-spacing:1px;background:#eff6ff;padding:4px 14px;border-radius:999px;border:1px solid #dbeafe;">
							SOROTAN UTAMA LAB
						</span>
						<span style="font-size:13px;color:#64748b;font-weight:600;">Artikel &amp; Panduan Pilihan Redaksi</span>
					</div>

					<div class="cm-spotlight-card">
						<a href="<?php the_permalink(); ?>" class="cm-spotlight-media" style="display:block;text-decoration:none;">
							<img src="<?php echo esc_url( $spot_thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" />
							<div style="position:absolute;top:16px;left:16px;background:#0c00ff;color:#ffffff;padding:5px 14px;border-radius:999px;font-size:11.5px;font-weight:700;letter-spacing:0.5px;box-shadow:0 4px 10px rgba(0,0,0,0.2);">
								Cleanique Lab Insight
							</div>
							<div style="position:absolute;bottom:16px;left:16px;background:rgba(15,23,42,0.8);color:#ffffff;padding:5px 12px;border-radius:8px;font-size:12px;font-weight:600;backdrop-filter:blur(4px);">
								<?php echo esc_html( $spot_date ); ?> &bull; <?php echo esc_html( $spot_reading_time ); ?>
							</div>
						</a>

						<div class="cm-spotlight-content">
							<div>
								<div style="display:flex;align-items:center;gap:6px;color:#64748b;font-size:13px;margin-bottom:12px;">
									<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
									<span>Estimasi: <strong><?php echo esc_html( $spot_reading_time ); ?></strong></span>
									<span>&bull;</span>
									<span>Oleh <strong>Tim Ahli Cleanique</strong></span>
								</div>

								<h2 style="font-family:'Lexend',sans-serif;font-size:clamp(20px, 2.5vw, 26px);font-weight:800;line-height:1.3;margin:0 0 14px 0;">
									<a href="<?php the_permalink(); ?>" style="color:#0f172a;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#0c00ff'" onmouseout="this.style.color='#0f172a'">
										<?php the_title(); ?>
									</a>
								</h2>

								<p style="font-size:14.5px;color:#475569;line-height:1.7;margin:0 0 20px 0;">
									<?php echo esc_html( wp_trim_words( get_the_excerpt(), 30 ) ); ?>
								</p>
							</div>

							<div style="display:flex;align-items:center;justify-content:space-between;padding-top:16px;border-top:1px solid #f1f5f9;flex-wrap:wrap;gap:12px;">
								<a 
									href="<?php the_permalink(); ?>" 
									style="display:inline-flex;align-items:center;gap:8px;background:#0c00ff;color:#ffffff;padding:11px 24px;border-radius:999px;font-size:13.5px;font-weight:700;text-decoration:none;box-shadow:0 4px 12px rgba(12,0,255,0.25);transition:all 0.2s;"
									onmouseover="this.style.background='#0900cc';this.style.transform='translateY(-1px)';"
									onmouseout="this.style.background='#0c00ff';this.style.transform='none';"
								>
									Baca Panduan Lengkap &rarr;
								</a>

								<span style="font-size:12.5px;color:#94a3b8;font-weight:500;">
									Terverifikasi Lab Resmi
								</span>
							</div>
						</div>
					</div>
				</div>

				<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;border-bottom:1px solid #e2e8f0;padding-bottom:12px;">
					<h3 style="font-family:'Lexend',sans-serif;font-size:20px;font-weight:800;color:#0f172a;margin:0;">
						Semua Artikel &amp; Panduan Usaha
					</h3>
					<span style="font-size:13px;color:#64748b;font-weight:600;">
						Total <?php echo esc_html( $blog_query->found_posts ); ?> Artikel Terbit
					</span>
				</div>
			<?php
					endwhile;
					wp_reset_postdata();
				endif;
			endif;
			?>

			<?php if ( $blog_query->have_posts() ) : ?>
				<div id="_posts_grid-43-168" class="oxy-easy-posts oxy-posts-grid">
					<div class="oxy-posts" style="display:flex;flex-wrap:wrap;margin:-14px;">
						<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); 
							$thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'large' ) : $img_dir . 'omah-editt.webp';
							$date_formatted = get_the_date( 'd F Y' );
							$word_count = str_word_count( strip_tags( get_the_content() ) );
							$reading_time = ceil( max( 1, $word_count / 200 ) ) . ' Menit Baca';
						?>
							<div 
								class="oxy-post cm-blog-card" 
								data-search="<?php echo esc_attr( strtolower( get_the_title() . ' ' . get_the_excerpt() ) ); ?>"
								style="width:33.333%;box-sizing:border-box;padding:14px;display:flex;"
							>
								<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:16px;overflow:hidden;box-shadow:0 4px 14px rgba(0,0,0,0.05);display:flex;flex-direction:column;justify-content:space-between;width:100%;transition:transform 0.25s ease, box-shadow 0.25s ease;">
									<div>
										<!-- Post Image with Date Overlay -->
										<a class="oxy-post-image" href="<?php the_permalink(); ?>" style="display:block;position:relative;overflow:hidden;height:240px;background:#0f172a;text-decoration:none;">
											<img 
												src="<?php echo esc_url( $thumb_url ); ?>" 
												alt="<?php the_title_attribute(); ?>"
												style="width:100%;height:100%;object-fit:cover;display:block;transition:transform 0.4s ease;"
												loading="lazy"
												onmouseover="this.style.transform='scale(1.06)'"
												onmouseout="this.style.transform='scale(1)'"
											/>
											<div class="oxy-post-image-date-overlay" style="position:absolute;top:12px;right:12px;background:rgba(15,23,42,0.75);color:#ffffff;padding:4px 10px;border-radius:6px;font-size:11px;font-weight:700;backdrop-filter:blur(4px);">
												<?php echo esc_html( $date_formatted ); ?>
											</div>
											<span style="position:absolute;bottom:12px;left:12px;background:#0c00ff;color:#ffffff;padding:3px 10px;border-radius:999px;font-size:11px;font-weight:700;letter-spacing:0.5px;box-shadow:0 2px 6px rgba(0,0,0,0.2);">
												Cleanique Lab
											</span>
										</a>

										<!-- Post Content -->
										<div style="padding:22px 20px 14px 20px;">
											<div style="display:flex;align-items:center;gap:6px;color:#64748b;font-size:12px;margin-bottom:10px;">
												<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
												<span><?php echo esc_html( $reading_time ); ?></span>
											</div>

											<h2 class="oxy-post-title" style="margin:0 0 12px 0;font-size:18px;line-height:1.4;font-weight:700;">
												<a href="<?php the_permalink(); ?>" style="color:#0f172a;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#0c00ff'" onmouseout="this.style.color='#0f172a'">
													<?php the_title(); ?>
												</a>
											</h2>

											<p style="font-size:13.5px;color:#475569;line-height:1.6;margin:0;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
												<?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?>
											</p>
										</div>
									</div>

									<!-- Card Footer -->
									<div style="padding:0 20px 20px 20px;border-top:1px dashed #f1f5f9;margin-top:14px;padding-top:14px;">
										<a 
											href="<?php the_permalink(); ?>" 
											style="display:inline-flex;align-items:center;gap:6px;color:#0c00ff;font-size:13px;font-weight:700;text-decoration:none;transition:gap 0.2s;"
											onmouseover="this.style.gap='10px'"
											onmouseout="this.style.gap='6px'"
										>
											Baca Panduan Lengkap &rarr;
										</a>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>

					<!-- Numbered Pagination -->
					<?php if ( $blog_query->max_num_pages > 1 ) : ?>
						<div style="text-align:center;margin-top:50px;">
							<nav class="navigation pagination cm-blog-pagination" aria-label="Navigasi Halaman Artikel">
								<div class="nav-links">
									<?php 
									$big = 999999999;
									echo paginate_links( array(
										'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format'    => '?paged=%#%',
										'current'   => max( 1, $paged ),
										'total'     => $blog_query->max_num_pages,
										'prev_text' => '&larr; Sebelumnya',
										'next_text' => 'Selanjutnya &rarr;',
										'type'      => 'plain',
									) ); 
									?>
								</div>
							</nav>
						</div>
					<?php endif; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<div style="text-align:center;padding:80px 20px;background:#ffffff;border:1px dashed #cbd5e1;border-radius:16px;">
					<div style="font-size:48px;margin-bottom:12px;">📝</div>
					<h3 style="font-size:20px;font-weight:700;color:#0f172a;margin-bottom:8px;">Belum Ada Artikel</h3>
					<p style="color:#64748b;font-size:15px;">Artikel terbaru sedang disiapkan oleh Tim Formulasi Cleanique Lab.</p>
			<?php endif; ?>
		</div>
	</section>

	<!-- Call to Action Section -->
	<section style="background:linear-gradient(135deg, #0c00ff 0%, #06007a 100%);padding:70px 20px;color:#ffffff;text-align:center;">
		<div style="max-width:820px;margin:0 auto;">
			<span style="display:inline-block;padding:5px 16px;background:rgba(255,255,255,0.15);border:1px solid rgba(255,255,255,0.3);border-radius:999px;font-size:12px;font-weight:700;margin-bottom:16px;">
				KONSULTASI GRATIS FORMULASI &amp; PRODUK
			</span>
			<h2 style="font-family:'Lexend',sans-serif;font-size:32px;font-weight:800;color:#ffffff;margin:0 0 16px 0;line-height:1.3;">
				Ingin Mencoba Sampel Produk atau Konsultasi Usaha Sabun?
			</h2>
			<p style="font-size:16px;color:#e0e7ff;line-height:1.6;margin:0 0 28px 0;">
				Tim representatif pabrik PT Indotech Berkah Abadi siap membantu Anda mendapatkan pasokan sabun konsentrat berkualitas dan bimbingan paket usaha depot.
			</p>
			<a 
				href="<?php echo esc_url( cleaniquemart_get_wa_url( 'Halo Cleanique Mart, saya membaca blog dan ingin berkonsultasi mengenai pemesanan sabun dan paket usaha.' ) ); ?>" 
				target="_blank" 
				rel="noopener noreferrer"
				style="display:inline-flex;align-items:center;gap:8px;background:#22c55e;color:#ffffff;padding:14px 32px;border-radius:999px;font-size:15px;font-weight:800;text-decoration:none;box-shadow:0 8px 20px rgba(34,197,94,0.4);"
			>
				<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
				Hubungi Tim CS via WhatsApp
			</a>
		</div>
	</section>
</main>

<script>
jQuery(document).ready(function($) {
	$('#cm-blog-search').on('input', function() {
		var q = $(this).val().toLowerCase().trim();
		$('.cm-blog-card').each(function() {
			var searchStr = $(this).data('search');
			if (!q || searchStr.indexOf(q) > -1) {
				$(this).fadeIn(200);
			} else {
				$(this).hide();
			}
		});
	});
});
</script>

<?php
get_footer();
