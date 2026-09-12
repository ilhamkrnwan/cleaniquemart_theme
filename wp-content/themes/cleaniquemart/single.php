<?php
/**
 * Single Post Template (single.php)
 *
 * Authentic Oxygen Theme layout (matching oxygen-178.css) with enriched
 * typography, reading time, sticky sidebar, related articles, social sharing, and direct WhatsApp inquiry.
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$theme_uri = get_template_directory_uri();
$img_dir   = $theme_uri . '/assets/images/';

while ( have_posts() ) : the_post();
	$post_id        = get_the_ID();
	$post_title     = get_the_title();
	$post_date      = get_the_date( 'd F Y' );
	$post_permalink = get_permalink();
	$thumb_url      = has_post_thumbnail() ? get_the_post_thumbnail_url( $post_id, 'full' ) : $img_dir . 'omah-editt.webp';
	
	// Reading time estimate
	$word_count   = str_word_count( strip_tags( get_the_content() ) );
	$reading_time = ceil( max( 1, $word_count / 200 ) ) . ' Menit Baca';

	// WhatsApp Inquiry Link
	$wa_inquiry_msg = 'Halo CS Cleanique Mart, saya membaca artikel "' . $post_title . '" di cleaniquemart.com dan ingin bertanya seputar produk/konsentrat ini.';
	$wa_inquiry_url = cleaniquemart_get_wa_url( $wa_inquiry_msg );
?>

<main id="main-content" class="oxygen-main-content">
	<!-- Authentic Oxygen Hero Section -->
	<section id="section-3-178" class="ct-section ct-section-with-shape-divider">
		<div class="ct-section-inner-wrap">
			<div id="div_block-4-178" class="ct-div-block" style="text-align:center;max-width:960px;margin:0 auto;">
				
				<!-- Breadcrumbs -->
				<div style="display:flex;align-items:center;justify-content:center;gap:8px;font-size:13px;color:rgba(255,255,255,0.8);margin-bottom:16px;flex-wrap:wrap;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:#ffffff;text-decoration:none;">Beranda</a>
					<span>/</span>
					<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" style="color:#ffffff;text-decoration:none;">Artikel</a>
					<span>/</span>
					<span style="color:rgba(255,255,255,0.65);"><?php echo esc_html( wp_trim_words( $post_title, 5 ) ); ?></span>
				</div>

				<div class="cm-badge-glass-hero" style="margin-bottom:14px;">
					Pusat Edukasi Cleanique Lab
				</div>

				<h1 id="headline-5-178" class="ct-headline atomic-primary-heading" style="margin:0 auto 20px auto;font-size:42px;line-height:1.25;max-width:900px;">
					<span id="span-9-178" class="ct-span"><?php echo esc_html( $post_title ); ?></span>
				</h1>

				<!-- Meta details -->
				<div style="display:flex;align-items:center;justify-content:center;gap:18px;font-size:13.5px;color:rgba(255,255,255,0.9);flex-wrap:wrap;">
					<div style="display:flex;align-items:center;gap:6px;">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
						<span>Oleh <strong>Tim Formulasi Cleanique Lab</strong></span>
					</div>
					<span>&bull;</span>
					<div style="display:flex;align-items:center;gap:6px;">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
						<span><?php echo esc_html( $post_date ); ?></span>
					</div>
					<span>&bull;</span>
					<div style="display:flex;align-items:center;gap:6px;">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
						<span><?php echo esc_html( $reading_time ); ?></span>
					</div>
				</div>
			</div>

			<!-- Ocean Waves Shape Divider -->
			<div id="-shape-divider-7-178" class="oxy-shape-divider">
				<div class="oxy_shape_divider">
					<svg viewBox="0 0 1440 320" version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
						<g id="Ocean-Waves" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<path d="M60.0736562,199.999824 C74.730684,216.560111 96.1461381,227.000176 120,227.000176 C143.853862,227.000176 165.269316,216.560111 179.926344,199.999824 L180.073656,199.999824 C194.730684,216.560111 216.146138,227.000176 240,227.000176 C263.853862,227.000176 285.269316,216.560111 299.926344,199.999824 L300.073656,199.999824 C314.730684,216.560111 336.146138,227.000176 360,227.000176 C383.853862,227.000176 405.269316,216.560111 419.926344,199.999824 L420.073656,199.999824 C434.730684,216.560111 456.146138,227.000176 480,227.000176 C503.853862,227.000176 525.269316,216.560111 539.926344,199.999824 L540.073656,199.999824 C554.730684,216.560111 576.146138,227.000176 600,227.000176 C623.853862,227.000176 645.269316,216.560111 659.926344,199.999824 L660.073656,199.999824 C674.730684,216.559935 696.146138,227 720,227 C743.853862,227 765.269316,216.559935 779.926344,199.999824 L780.073656,199.999824 C794.730684,216.560111 816.146138,227.000176 840,227.000176 C863.853862,227.000176 885.269316,216.560111 899.926344,199.999824 L900.073656,199.999824 C914.730684,216.560111 936.146138,227.000176 960,227.000176 C983.853862,227.000176 1005.26932,216.560111 1019.92634,199.999824 L1020.07366,199.999824 C1034.73068,216.560111 1056.14614,227.000176 1080,227.000176 C1103.85386,227.000176 1125.26932,216.560111 1139.92634,199.999824 L1140.07366,199.999824 C1154.73068,216.560111 1176.14614,227.000176 1200,227.000176 C1223.85386,227.000176 1245.26932,216.560111 1259.92634,199.999824 L1260.07366,199.999824 C1274.73068,216.560111 1296.14614,227.000176 1320,227.000176 C1343.85386,227.000176 1365.26932,216.560111 1379.92634,199.999824 L1380.07366,199.999824 C1394.73068,216.560111 1416.14614,227.000176 1440,227.000176 L1440,319.999824 L0,319.999824 L0,227.000176 C23.8538619,227.000176 45.269316,216.560111 59.9263438,199.999824 L60.0736562,199.999824 Z" fill="currentColor"></path>
						</g>
					</svg>
				</div>
			</div>

			<!-- Bubble decoration -->
			<img id="image-8-178" alt="" src="<?php echo esc_url( $img_dir ); ?>bubble.webp" class="ct-image" />
		</div>
	</section>

	<!-- Main Article Content & Sidebar Section -->
	<section id="section-12-178" class="ct-section" style="padding-top:50px;padding-bottom:120px;">
		<div class="ct-section-inner-wrap" style="max-width:1160px;margin:0 auto;">
			
			<!-- Featured Image with Lightbox Trigger (Full Width, Large & High Impact) -->
			<?php if ( has_post_thumbnail() ) : ?>
				<div style="position:relative;border-radius:18px;overflow:hidden;margin-bottom:45px;box-shadow:0 10px 30px rgba(0,0,0,0.08);background:#ffffff;border:1px solid #e2e8f0;width:100%;">
					<a 
						href="<?php echo esc_url( $thumb_url ); ?>" 
						class="zoom-img" 
						data-caption="<?php echo esc_attr( $post_title ); ?>"
						style="display:block;width:100%;position:relative;"
						title="Klik untuk memperbesar gambar"
					>
						<img 
							id="image-38-178" 
							src="<?php echo esc_url( $thumb_url ); ?>" 
							alt="<?php echo esc_attr( $post_title ); ?>" 
							class="ct-image"
							style="width:100%;height:auto;display:block;transition:transform 0.4s ease;"
							onmouseover="this.style.transform='scale(1.01)'"
							onmouseout="this.style.transform='scale(1)'"
						/>
						<span style="position:absolute;bottom:16px;right:16px;background:rgba(15,23,42,0.75);color:#ffffff;padding:6px 14px;border-radius:8px;font-size:12px;font-weight:600;display:flex;align-items:center;gap:6px;backdrop-filter:blur(4px);pointer-events:none;">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
							Klik untuk Perbesar
						</span>
					</a>
				</div>
			<?php endif; ?>

			<!-- 2 Columns: Main Body + Sidebar -->
			<div id="new_columns-40-178" class="ct-new-columns" style="display:flex;gap:40px;align-items:flex-start;">
				
				<!-- Left Column: Main Body (70%) -->
				<div id="div_block-41-178" class="ct-div-block" style="flex:1;min-width:0;">
					<div id="text_block-48-178" class="ct-text-block" style="max-width:100%;">
						<span id="span-49-178" class="ct-span oxy-stock-content-styles" style="font-size:16.5px;line-height:1.9;color:#334155;display:block;">
							<?php the_content(); ?>
						</span>
					</div>

					<!-- Direct Product Inquiry / WhatsApp Box -->
					<div style="background:linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);border:1.5px solid #22c55e;border-radius:16px;padding:30px;margin-top:50px;box-shadow:0 6px 20px rgba(34,197,94,0.12);">
						<div style="display:flex;align-items:flex-start;gap:18px;flex-wrap:wrap;">
							<div style="width:52px;height:52px;border-radius:14px;background:#22c55e;color:#ffffff;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
								<svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
							</div>
							<div style="flex:1;min-width:260px;">
								<span style="font-size:11px;font-weight:700;color:#15803d;background:#bbf7d0;padding:2px 8px;border-radius:4px;text-transform:uppercase;">
									KONSULTASI FORMULA &amp; HARGA GROSIR
								</span>
								<h3 style="font-family:'Lexend',sans-serif;font-size:20px;font-weight:800;color:#14532d;margin:8px 0 6px 0;">
									Tertarik Mencoba Formula atau Memesan Produk Ini?
								</h3>
								<p style="font-size:14px;color:#166534;line-height:1.6;margin:0 0 18px 0;">
									Dapatkan harga pasokan grosir langsung dari pabrik PT Indotech Berkah Abadi atau buka cabang depot isi ulang resmi di kota Anda!
								</p>
								<a 
									href="<?php echo esc_url( $wa_inquiry_url ); ?>" 
									target="_blank" 
									rel="noopener noreferrer"
									style="display:inline-flex;align-items:center;gap:8px;background:#15803d;color:#ffffff;padding:12px 26px;border-radius:999px;font-size:14px;font-weight:700;text-decoration:none;transition:background 0.2s;"
									onmouseover="this.style.background='#14532d'"
									onmouseout="this.style.background='#15803d'"
								>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
									Tanya Produk via WhatsApp CS Resmi &rarr;
								</a>
							</div>
						</div>
					</div>

					<!-- Social Share Buttons -->
					<div style="display:flex;align-items:center;justify-content:space-between;padding:24px 0 0 0;margin-top:35px;border-top:1px solid #e2e8f0;flex-wrap:wrap;gap:14px;">
						<div style="font-size:14px;font-weight:700;color:#475569;">
							Bagikan Artikel Ini:
						</div>
						<div style="display:flex;align-items:center;gap:10px;">
							<!-- WA Share -->
							<a 
								href="https://api.whatsapp.com/send?text=<?php echo rawurlencode( $post_title . ' ' . $post_permalink ); ?>" 
								target="_blank" 
								rel="noopener noreferrer"
								style="display:inline-flex;align-items:center;gap:6px;background:#25D366;color:#ffffff;padding:8px 16px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;"
							>
								<svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
								WhatsApp
							</a>
							<!-- Facebook Share -->
							<a 
								href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode( $post_permalink ); ?>" 
								target="_blank" 
								rel="noopener noreferrer"
								style="display:inline-flex;align-items:center;gap:6px;background:#1877F2;color:#ffffff;padding:8px 16px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;"
							>
								Facebook
							</a>
							<!-- Twitter/X Share -->
							<a 
								href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode( $post_title ); ?>&url=<?php echo rawurlencode( $post_permalink ); ?>" 
								target="_blank" 
								rel="noopener noreferrer"
								style="display:inline-flex;align-items:center;gap:6px;background:#0f172a;color:#ffffff;padding:8px 16px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;"
							>
								Twitter / X
							</a>
						</div>
					</div>

				</div> <!-- End Left Column (div_block-41-178) -->

				<!-- Right Column: Sticky Sidebar (30%) -->
				<div id="div_block-56-178" class="ct-div-block" style="width:340px;flex-shrink:0;position:-webkit-sticky;position:sticky;top:90px;align-self:flex-start;">
					
					<!-- Partnership Promo Card -->
					<div style="background:linear-gradient(135deg, #0c00ff 0%, #06007a 100%);color:#ffffff;border-radius:16px;padding:26px;margin-bottom:24px;box-shadow:0 8px 24px rgba(12,0,255,0.2);">
						<span style="display:inline-block;padding:4px 12px;background:rgba(255,255,255,0.2);border-radius:6px;font-size:11px;font-weight:700;margin-bottom:12px;">
							PELUANG USAHA 2026
						</span>
						<h3 style="font-family:'Lexend',sans-serif;font-size:19px;font-weight:800;color:#ffffff;line-height:1.3;margin:0 0 10px 0;">
							Miliki Depot Sabun Curah di Kota Anda!
						</h3>
						<p style="font-size:13px;color:#e0e7ff;line-height:1.5;margin:0 0 18px 0;">
							Paket King siap jualan langsung: 8 kontainer display, legalitas PKRT, dan radius proteksi eksklusif 3 km.
						</p>
						<a 
							href="<?php echo esc_url( home_url( '/mitra-cleanique-mart/' ) ); ?>" 
							style="display:block;text-align:center;background:#22c55e;color:#ffffff;padding:12px;border-radius:999px;font-size:13px;font-weight:700;text-decoration:none;transition:background 0.2s;"
							onmouseover="this.style.background='#1eb857'"
							onmouseout="this.style.background='#22c55e'"
						>
							Lihat Jaringan Mitra &rarr;
						</a>
					</div>

					<!-- Related Posts / Recent Articles List in Sidebar -->
					<div style="background:#ffffff;border:1px solid #e2e8f0;border-radius:16px;padding:22px;margin-bottom:24px;box-shadow:0 4px 14px rgba(0,0,0,0.04);">
						<h3 id="headline-57-178" class="ct-headline" style="font-family:'Lexend',sans-serif;font-size:17px;font-weight:800;color:#0f172a;margin:0 0 16px 0;padding-bottom:10px;border-bottom:1px solid #f1f5f9;">
							Artikel Terpopuler
						</h3>

						<div id="_dynamic_list-58-178" class="oxy-dynamic-list" style="display:flex;flex-direction:column;gap:14px;">
							<?php
							$related_query = new WP_Query( array(
								'post_type'      => 'post',
								'posts_per_page' => 4,
								'post__not_in'   => array( $post_id ),
								'orderby'        => 'rand',
							) );

							if ( $related_query->have_posts() ) :
								while ( $related_query->have_posts() ) : $related_query->the_post();
									$rel_thumb = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'medium' ) : $img_dir . 'omah-editt.webp';
							?>
								<div style="display:flex;gap:12px;align-items:center;">
									<a href="<?php the_permalink(); ?>" style="width:68px;height:68px;border-radius:10px;overflow:hidden;flex-shrink:0;background:#0f172a;display:block;">
										<img 
											src="<?php echo esc_url( $rel_thumb ); ?>" 
											alt="<?php the_title_attribute(); ?>"
											style="width:100%;height:100%;object-fit:cover;display:block;"
											loading="lazy"
										/>
									</a>
									<div>
										<span style="font-size:11px;color:#64748b;"><?php echo esc_html( get_the_date( 'd M Y' ) ); ?></span>
										<h4 style="font-size:13px;font-weight:700;line-height:1.35;margin:3px 0 0 0;">
											<a href="<?php the_permalink(); ?>" style="color:#0f172a;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#0c00ff'" onmouseout="this.style.color='#0f172a'">
												<?php echo esc_html( wp_trim_words( get_the_title(), 7 ) ); ?>
											</a>
										</h4>
									</div>
								</div>
							<?php
								endwhile;
								wp_reset_postdata();
							endif;
							?>
						</div>
					</div>

					<!-- Direct CS WhatsApp Support Card -->
					<div style="background:#f8fafc;border:1px dashed #cbd5e1;border-radius:16px;padding:20px;text-align:center;">
						<div style="font-size:12px;font-weight:700;color:#64748b;text-transform:uppercase;margin-bottom:6px;">Konsultasi Formula Sabun?</div>
						<div style="font-size:14px;font-weight:700;color:#0f172a;margin-bottom:10px;">Tim CS Lab Siap Membantu Anda</div>
						<a 
							href="<?php echo esc_url( cleaniquemart_get_wa_url( 'Halo CS Cleanique Mart, saya membaca blog dan butuh konsultasi produk.' ) ); ?>" 
							target="_blank" 
							rel="noopener noreferrer"
							style="display:inline-flex;align-items:center;gap:6px;background:#22c55e;color:#ffffff;padding:9px 18px;border-radius:999px;font-size:12.5px;font-weight:700;text-decoration:none;box-shadow:0 3px 10px rgba(34,197,94,0.25);"
						>
							<svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
							Chat CS WhatsApp
						</a>
					</div>

				</div> <!-- End Right Column (div_block-56-178) -->

			</div> <!-- END 2-Columns Layout (new_columns-40-178) -->

			<!-- ==========================================================
			     BAGIAN BAWAH FULL-WIDTH & CENTER (TANPA KOLOM KANAN-KIRI)
			     ========================================================== -->

			<!-- 1. Previous & Next Navigation Cards (Full Width 2-Column Grid across 1160px) -->
			<div class="cm-post-nav-grid" style="margin-bottom:60px;">
				<?php
				$prev_post = get_previous_post();
				$next_post = get_next_post();
				?>
				<div>
					<?php if ( ! empty( $prev_post ) ) : 
						$prev_thumb = has_post_thumbnail( $prev_post->ID ) ? get_the_post_thumbnail_url( $prev_post->ID, 'thumbnail' ) : $img_dir . 'omah-editt.webp';
					?>
						<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="cm-post-nav-card">
							<div style="width:60px;height:60px;border-radius:10px;overflow:hidden;flex-shrink:0;background:#0f172a;">
								<img src="<?php echo esc_url( $prev_thumb ); ?>" alt="" style="width:100%;height:100%;object-fit:cover;">
							</div>
							<div style="overflow:hidden;">
								<div style="font-size:11px;font-weight:700;color:#0c00ff;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:4px;display:flex;align-items:center;gap:4px;">
									&larr; Artikel Sebelumnya
								</div>
								<div style="font-size:14px;font-weight:700;color:#0f172a;line-height:1.35;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
									<?php echo esc_html( $prev_post->post_title ); ?>
								</div>
							</div>
						</a>
					<?php endif; ?>
				</div>

				<div>
					<?php if ( ! empty( $next_post ) ) : 
						$next_thumb = has_post_thumbnail( $next_post->ID ) ? get_the_post_thumbnail_url( $next_post->ID, 'thumbnail' ) : $img_dir . 'omah-editt.webp';
					?>
						<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="cm-post-nav-card" style="justify-content:flex-end;text-align:right;">
							<div style="overflow:hidden;">
								<div style="font-size:11px;font-weight:700;color:#0c00ff;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:4px;display:flex;align-items:center;justify-content:flex-end;gap:4px;">
									Artikel Selanjutnya &rarr;
								</div>
								<div style="font-size:14px;font-weight:700;color:#0f172a;line-height:1.35;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
									<?php echo esc_html( $next_post->post_title ); ?>
								</div>
							</div>
							<div style="width:60px;height:60px;border-radius:10px;overflow:hidden;flex-shrink:0;background:#0f172a;">
								<img src="<?php echo esc_url( $next_thumb ); ?>" alt="" style="width:100%;height:100%;object-fit:cover;">
							</div>
						</a>
					<?php endif; ?>
				</div>
			</div>

			<!-- 2. Dedicated Related Articles (Full Width 3-Columns Grid across 1160px) -->
			<div class="cm-related-posts-wrap" style="margin-bottom:70px;background:#ffffff;border:1px solid #e2e8f0;border-radius:20px;padding:36px;box-shadow:0 4px 20px rgba(0,0,0,0.04);">
				<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;flex-wrap:wrap;gap:12px;border-bottom:1px solid #f1f5f9;padding-bottom:16px;">
					<div>
						<span style="font-size:11.5px;font-weight:800;color:#0c00ff;text-transform:uppercase;letter-spacing:1px;background:#eff6ff;padding:4px 12px;border-radius:999px;border:1px solid #dbeafe;">
							REKOMENDASI BACAAN
						</span>
						<h3 style="font-family:'Lexend',sans-serif;font-size:24px;font-weight:800;color:#0f172a;margin:8px 0 0 0;">
							Artikel Terkait Lainnya
						</h3>
					</div>
					<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" style="font-size:14px;font-weight:700;color:#0c00ff;text-decoration:none;display:inline-flex;align-items:center;gap:6px;">
						Lihat Semua Artikel &rarr;
					</a>
				</div>

				<div class="cm-related-grid" style="display:grid;grid-template-columns:repeat(3, 1fr);gap:24px;">
					<?php
					$related_query_bottom = new WP_Query( array(
						'post_type'      => 'post',
						'posts_per_page' => 3,
						'post__not_in'   => array( $post_id ),
						'orderby'        => 'rand',
					) );

					if ( $related_query_bottom->have_posts() ) :
						while ( $related_query_bottom->have_posts() ) : $related_query_bottom->the_post();
							$rel_thumb_bottom = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'medium' ) : $img_dir . 'omah-editt.webp';
							$rel_reading_time = ceil( max( 1, str_word_count( strip_tags( get_the_content() ) ) / 200 ) ) . ' Menit Baca';
					?>
						<a href="<?php the_permalink(); ?>" class="cm-related-card" style="display:flex;flex-direction:column;background:#ffffff;border:1px solid #e2e8f0;border-radius:14px;overflow:hidden;text-decoration:none;box-shadow:0 4px 12px rgba(0,0,0,0.04);transition:transform 0.2s ease, box-shadow 0.2s ease;" onmouseover="this.style.transform='translateY(-3px)';this.style.boxShadow='0 10px 24px rgba(0,0,0,0.08)';" onmouseout="this.style.transform='none';this.style.boxShadow='0 4px 12px rgba(0,0,0,0.04)';">
							<div style="position:relative;height:180px;overflow:hidden;background:#0f172a;">
								<img src="<?php echo esc_url( $rel_thumb_bottom ); ?>" alt="<?php the_title_attribute(); ?>" style="width:100%;height:100%;object-fit:cover;" loading="lazy">
								<span style="position:absolute;bottom:10px;left:10px;background:rgba(15,23,42,0.8);color:#ffffff;padding:3px 10px;border-radius:6px;font-size:11px;font-weight:600;backdrop-filter:blur(3px);">
									<?php echo esc_html( $rel_reading_time ); ?>
								</span>
							</div>
							<div style="padding:18px;display:flex;flex-direction:column;justify-content:space-between;flex:1;">
								<div>
									<span style="font-size:11.5px;color:#64748b;font-weight:600;display:block;margin-bottom:6px;">
										<?php echo esc_html( get_the_date( 'd M Y' ) ); ?>
									</span>
									<h4 style="font-family:'Lexend',sans-serif;font-size:15px;font-weight:700;color:#0f172a;line-height:1.45;margin:0 0 10px 0;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
										<?php the_title(); ?>
									</h4>
								</div>
								<span style="font-size:13px;font-weight:700;color:#0c00ff;margin-top:10px;display:inline-flex;align-items:center;gap:4px;">
									Baca Panduan &rarr;
								</span>
							</div>
						</a>
					<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>

			<!-- 3. WordPress Comments Section (2-Column: Kiri = Daftar Komentar | Kanan = Form) -->
			<div class="cm-comments-container">
				<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div>

		</div>
	</section>
</main>

<?php
endwhile;

get_footer();
