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
					<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
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
						<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
						Pesan Sabun Isi Ulang via WA
					</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
