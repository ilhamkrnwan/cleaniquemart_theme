<?php
/**
 * Template Part: Market Segments (10 Pangsa Pasar) with Visual Highlights (Sorotan)
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';

$segments = array(
	array( 'name' => 'Usaha Laundry', 'desc' => 'Deterjen matic, softener & parfum', 'tag' => 'Pangsa Terbesar 45%', 'pill' => 'cm-pill-emerald' ),
	array( 'name' => 'Rumah Makan & Resto', 'desc' => 'Sabun cuci piring kesat peluruh lemak', 'tag' => 'Repeat Order Tinggi', 'pill' => 'cm-pill-cyan' ),
	array( 'name' => 'Keluarga & Rumah Tangga', 'desc' => 'Isi ulang hemat sabun harian terdekat', 'tag' => 'Pelanggan Rutin', 'pill' => 'cm-pill-amber' ),
	array( 'name' => 'Industri & Pabrik', 'desc' => 'Pembersih lantai & degreaser mesin', 'tag' => 'Volume Besar', 'pill' => 'cm-pill-cyan' ),
	array( 'name' => 'Gedung & Perkantoran', 'desc' => 'Hand wash higienis & karbol wangi', 'tag' => 'Kontrak Pasokan', 'pill' => 'cm-pill-emerald' ),
	array( 'name' => 'Hotel & Penginapan', 'desc' => 'Chemical linen wangi & sanitasi kamar', 'tag' => 'Standar Mutu', 'pill' => 'cm-pill-cyan' ),
	array( 'name' => 'Salon & Barbershop', 'desc' => 'Pewangi handuk lembut & pembersih', 'tag' => 'Wangi Mewah', 'pill' => 'cm-pill-amber' ),
	array( 'name' => 'Klinik & Rumah Sakit', 'desc' => 'Disinfektan & sabun cuci anti kuman', 'tag' => 'Higienis PKRT', 'pill' => 'cm-pill-emerald' ),
	array( 'name' => 'Cuci Mobil & Motor', 'desc' => 'Shampoo salju busa tebal & pengkilap', 'tag' => 'Busa Melimpah', 'pill' => 'cm-pill-cyan' ),
	array( 'name' => 'Tempat Ibadah', 'desc' => 'Pembersih karpet & lantai wangi suci', 'tag' => 'Halal MUI', 'pill' => 'cm-pill-emerald' ),
);
?>

<section class="cm-section cm-section-alt" id="market-segments">
	<div class="cm-container">
		<div class="cm-section-header">
			<div class="cm-eyebrow cm-eyebrow-cyan">
				<span class="cm-badge-pulse"></span>
				Potensi Pasar Tanpa Batas
			</div>
			<h2 class="cm-section-title">Sabun Curah Dibutuhkan Oleh <span class="cm-highlight-text">10 Segmen Usaha</span> Setiap Hari</h2>
			<p class="cm-section-subtitle">
				Anda tidak perlu bingung mencari pembeli. Di radius 3–5 km dari depot Anda, terdapat puluhan calon pelanggan loyal yang membutuhkan pasokan kimia pembersih secara berkala.
			</p>
		</div>

		<!-- Sorotan Infografis Banner -->
		<div style="margin-bottom:2.5rem;text-align:center;">
			<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-xl);overflow:hidden;box-shadow:var(--cm-shadow-sm);max-width:960px;margin:0 auto;">
				<img 
					src="<?php echo esc_url( $img_dir . 'Jualan-Sabun-Curah-Potensi-Profit-Besar.webp' ); ?>" 
					alt="Jualan Sabun Curah Potensi Profit Besar Cleanique Mart"
					style="width:100%;height:auto;display:block;"
					loading="lazy"
				>
			</div>
		</div>

		<!-- 10 Segments Grid with Sorotan Badges -->
		<div class="cm-segments-grid">
			<?php foreach ( $segments as $seg ) : ?>
				<div class="cm-segment-card" style="padding:1.5rem;display:flex;flex-direction:column;justify-content:space-between;background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-lg);transition:all 0.25s ease;">
					<div>
						<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.75rem;">
							<div class="cm-segment-icon" style="margin-bottom:0;">
								<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
									<circle cx="12" cy="7" r="4"/>
								</svg>
							</div>
							<span class="cm-highlight-pill <?php echo esc_attr( $seg['pill'] ); ?>"><?php echo esc_html( $seg['tag'] ); ?></span>
						</div>
						<h3 class="cm-segment-title" style="font-size:1.1rem;margin-bottom:0.35rem;"><?php echo esc_html( $seg['name'] ); ?></h3>
						<p style="font-size:0.85rem;color:var(--cm-dark-500);line-height:1.4;"><?php echo esc_html( $seg['desc'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
