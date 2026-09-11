<?php
/**
 * Single Outlet Template (Local SEO Landing Page)
 *
 * @package CleaniqueMart
 */

get_header();

$city_name = get_post_meta( get_the_ID(), '_outlet_city', true );
if ( empty( $city_name ) ) {
	$city_name = get_the_title();
}

$address   = get_post_meta( get_the_ID(), '_outlet_address', true );
$phone     = get_post_meta( get_the_ID(), '_outlet_phone_wa', true );
if ( empty( $phone ) ) {
	$phone = get_theme_mod( 'cleaniquemart_wa_phone', '087885590088' );
}

$wa_branch_url = cleaniquemart_get_wa_url( 'Halo ' . get_the_title() . ', saya ingin memesan sabun isi ulang curah / parfum laundry di outlet Anda.', $phone );

$fragrances = array(
	'Apple Green', 'Aqua Fresh', 'Baby Orchid', 'Bond', 'Bougenville', 
	'Bubble Gum', 'Bvlgary Extreme', 'Dunhill Blue', 'Exotic Green', 'Green Tea', 
	'J-Lo Luxury', 'Lavender', 'Melon', 'Molto Blue', 'Ocean Fresh', 
	'Orchid Floral', 'Orchid Smooth', 'Orchid Mystique', 'Orchid Passion', 'Orchid Love', 
	'Polo', 'Phylux', 'Phoenix', 'Sakura', 'Snappy', 
	'Strawberry', 'Vanilla', 'Violet', 'Lily', 'Kopi'
);
?>

<main id="main-content" class="cm-main-content">
	<section class="cm-hero" style="padding-bottom:3.5rem;">
		<div class="cm-container cm-container-narrow" style="text-align:center;">
			<div class="cm-badge-glass-hero cm-badge-glass-hero-dark" style="margin-bottom:18px;">Cabang Resmi Cleanique Mart</div>
			<h1 class="cm-hero-title"><?php the_title(); ?></h1>
			<p class="cm-hero-lead">
				Hanya Disini pusat isi ulang sabun di <?php echo esc_html( $city_name ); ?> paling lengkap !!! Kualitas pabrik langsung berizin edar resmi Kemenkes RI.
			</p>
			<div class="cm-hero-cta-group" style="justify-content:center;">
				<a href="<?php echo esc_url( $wa_branch_url ); ?>" class="cm-btn cm-btn-emerald cm-btn-lg" target="_blank" rel="noopener noreferrer">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
					Hubungi WhatsApp <?php echo esc_html( $city_name ); ?>
				</a>
			</div>
		</div>
	</section>

	<section class="cm-section">
		<div class="cm-container cm-container-narrow">
			<div style="font-size:1.05rem;line-height:1.8;color:var(--cm-dark-800);display:flex;flex-direction:column;gap:2rem;">
				<!-- Section 1 -->
				<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-lg);padding:2rem;">
					<h2 style="font-family:var(--cm-font-heading);font-size:1.5rem;font-weight:800;color:var(--cm-primary-900);margin-bottom:0.75rem;">
						Pusat Isi Ulang Sabun <?php echo esc_html( $city_name ); ?>
					</h2>
					<p>
						Tempatnya jualan sabun di <?php echo esc_html( $city_name ); ?>, <strong><?php the_title(); ?></strong> menyediakan sabun untuk kebutuhan usaha laundry komersial dan pemakaian rumah tangga sehari-hari. Sedia deterjen matic, deterjen extra busa, softener pelembut, sabun cuci piring konsentrat, sabun pel lantai, serta paket bahan konsentrat hemat.
					</p>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php if ( get_the_content() ) : ?>
							<div style="margin-top:1rem;padding-top:1rem;border-top:1px dashed var(--cm-border);">
								<?php the_content(); ?>
							</div>
						<?php endif; ?>
					<?php endwhile; endif; ?>
				</div>

				<!-- Section 2: 30 Fragrances -->
				<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-lg);padding:2rem;">
					<h2 style="font-family:var(--cm-font-heading);font-size:1.5rem;font-weight:800;color:var(--cm-primary-900);margin-bottom:0.75rem;">
						Parfum Laundry <?php echo esc_html( $city_name ); ?> (30 Varian Aroma)
					</h2>
					<p style="margin-bottom:1rem;">
						Tempatnya jualan parfum laundry di <?php echo esc_html( $city_name ); ?>. Menyediakan bibit pewangi pakaian waterbase &amp; solvent grade A standar hotel:
					</p>
					<div style="display:flex;flex-wrap:wrap;gap:0.5rem;">
						<?php foreach ( $fragrances as $f ) : ?>
							<span style="background:var(--cm-cyan-100);color:var(--cm-primary-800);font-size:0.8125rem;font-weight:700;padding:0.35rem 0.75rem;border-radius:var(--cm-radius-pill);">
								<?php echo esc_html( $f ); ?>
							</span>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Section 3: Dishwashing & Floor Cleaner -->
				<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-lg);padding:2rem;">
					<h2 style="font-family:var(--cm-font-heading);font-size:1.5rem;font-weight:800;color:var(--cm-primary-900);margin-bottom:0.75rem;">
						Sabun Cuci Piring &amp; Karbol Lantai <?php echo esc_html( $city_name ); ?>
					</h2>
					<p>
						Menghadirkan sabun cuci piring berkualitas tinggi di <?php echo esc_html( $city_name ); ?> untuk kebutuhan rumah tangga hingga usaha kuliner, warung makan, dan restoran. Formula konsentratnya efektif mengangkat lemak membandel, hemat pemakaian, dan aman untuk peralatan makan.
					</p>
				</div>

				<!-- Location & Contact Info -->
				<div style="background:var(--cm-light-200);border:1px solid var(--cm-border);border-radius:var(--cm-radius-lg);padding:2rem;text-align:center;">
					<h3 style="font-family:var(--cm-font-heading);font-size:1.25rem;font-weight:800;margin-bottom:0.5rem;">
						Kunjungi Alamat Outlet Kami di <?php echo esc_html( $city_name ); ?>
					</h3>
					<?php if ( $address ) : ?>
						<p style="color:var(--cm-dark-700);margin-bottom:1.5rem;"><?php echo esc_html( $address ); ?></p>
					<?php endif; ?>
					<a href="<?php echo esc_url( $wa_branch_url ); ?>" class="cm-btn cm-btn-emerald" target="_blank" rel="noopener noreferrer">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
						Pesan Sabun Isi Ulang via WA
					</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
