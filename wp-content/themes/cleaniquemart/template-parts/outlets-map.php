<?php
/**
 * Template Part: Outlets Directory Grid with Real Branch Photos
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';

$outlets = array(
	array( 
		'name'  => 'Cleanique Mart Jakarta Timur', 
		'city'  => 'DKI Jakarta', 
		'addr'  => 'Pusat Distribusi Grosir & Refill Sabun Laundry Jakarta Timur',
		'image' => 'Cleanique-Mart-Jakarta-Timur-Toko-scaled.webp',
	),
	array( 
		'name'  => 'Cleanique Mart Boyolali', 
		'city'  => 'Boyolali, Jawa Tengah', 
		'addr'  => 'Jalan Jinten No. 10, Pulisen, Boyolali',
		'image' => 'Cleanique-Mart-Boyolali-Refil-Station.webp',
	),
	array( 
		'name'  => 'Cleanique Mart Jambi', 
		'city'  => 'Jambi, Sumatera', 
		'addr'  => 'Jl. Kutilang IV No. 29, RT.09, Tambak Sari, Jambi',
		'image' => 'Cleanique-Mart-Jambi-Refill-Station.webp',
	),
	array( 
		'name'  => 'Cleanique Mart Maguwoharjo', 
		'city'  => 'Sleman, D.I. Yogyakarta', 
		'addr'  => 'Jl. Raya Tajem No. 6 RT/RW 02/30 Maguwoharjo Depok Sleman',
		'image' => 'photo6159202459784948871.jpg',
	),
	array( 
		'name'  => 'Cleanique Mart Temanggung 1', 
		'city'  => 'Temanggung, Jateng', 
		'addr'  => 'Jl. WR. Supratman No.34, Dongkelan Utara, Jampiroso',
		'image' => 'WhatsApp-Image-2022-06-06-at-11.33.29-1.jpeg',
	),
	array( 
		'name'  => 'Cleanique Mart Tapos Depok', 
		'city'  => 'Depok, Jawa Barat', 
		'addr'  => 'Jl. Raya Tapos 17-A depan Perumahan Permata Cimanggis',
		'image' => 'Cleanique-Mart-Jakarta-Timur-Dalam-Toko.webp',
	),
	array( 
		'name'  => 'Cleanique Mart Palembang', 
		'city'  => 'Palembang, Sumsel', 
		'addr'  => 'Jl. Pipa Reja No.31C, Pipa Jaya, Kec. Kemuning',
		'image' => 'Salinan-DEPO-CLEANIQUE-FULL-STD-640x640.png',
	),
	array( 
		'name'  => 'Cleanique Mart Malang', 
		'city'  => 'Malang, Jawa Timur', 
		'addr'  => 'Jl. Mayjen Sungkono A11, Kel. Bumiayu, Kedungkandang',
		'image' => 'Cleanique-Mart-Boyolali-Depan.webp',
	),
	array( 
		'name'  => 'Cleanique Mart Situbondo', 
		'city'  => 'Situbondo, Jawa Timur', 
		'addr'  => 'Jl. Cempaka II Gg. Nusa Indah No. 1 Ds. Sumberkolak',
		'image' => 'Salinan-DEPO-CLEANIQUE-FULL-STD-640x640.png',
	),
	array( 
		'name'  => 'Cleanique Mart Demak', 
		'city'  => 'Demak, Jawa Tengah', 
		'addr'  => 'Batursari, Kec. Mranggen, Demak',
		'image' => 'Cleanique-Mart-Jambi-Dalam-Toko.webp',
	),
	array( 
		'name'  => 'Cleanique Mart Temanggung 2', 
		'city'  => 'Temanggung, Jateng', 
		'addr'  => 'Jl. Megatan No. 4 Dusun Nglarangan, Candi Mulyo, Kedu',
		'image' => 'WhatsApp-Image-2022-06-06-at-11.33.29-1.jpeg',
	),
	array( 
		'name'  => 'Cleanique Mart Karanganyar', 
		'city'  => 'Karanganyar, Jateng', 
		'addr'  => 'Jl. Alternatif Matesih, Supan, Tegalgede',
		'image' => 'Salinan-DEPO-CLEANIQUE-FULL-STD-640x640.png',
	),
);
?>

<section class="cm-section cm-section-alt" id="cabang">
	<div class="cm-container">
		<div class="cm-section-header">
			<div class="cm-highlight-pill cm-pill-cyan" style="margin-bottom:0.75rem;">
				Jaringan Depot Nasional
			</div>
			<h2 class="cm-section-title">Temukan Mitra Cleanique Mart Terdekat di Kota Anda</h2>
			<p class="cm-section-subtitle">
				Bukti nyata penerimaan masyarakat terhadap konsep depot isi ulang sabun curah Cleanique Mart di berbagai kota dan provinsi.
			</p>
		</div>

		<!-- Sorotan Cakupan Cabang Mitra -->
		<div style="display:grid;grid-template-columns:repeat(3, 1fr);gap:1rem;max-width:820px;margin:0 auto 2.5rem auto;">
			<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-md);padding:1rem;text-align:center;box-shadow:var(--cm-shadow-sm);">
				<div style="font-family:var(--cm-font-heading);font-size:1.75rem;font-weight:900;color:var(--cm-cyan-600);">12+ Cabang</div>
				<div style="font-size:0.8rem;color:var(--cm-dark-500);margin-top:0.2rem;">Aktif Beroperasi &amp; Melayani</div>
			</div>
			<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-md);padding:1rem;text-align:center;box-shadow:var(--cm-shadow-sm);">
				<div style="font-family:var(--cm-font-heading);font-size:1.75rem;font-weight:900;color:var(--cm-emerald-600);">3 Pulau</div>
				<div style="font-size:0.8rem;color:var(--cm-dark-500);margin-top:0.2rem;">Jawa, Sumatera, dan Madura</div>
			</div>
			<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-md);padding:1rem;text-align:center;box-shadow:var(--cm-shadow-sm);">
				<div style="font-family:var(--cm-font-heading);font-size:1.75rem;font-weight:900;color:var(--cm-amber-500);">Tersedia</div>
				<div style="font-size:0.8rem;color:var(--cm-dark-500);margin-top:0.2rem;">Slot Kuota Wilayah Anda</div>
			</div>
		</div>

		<div class="cm-outlets-grid">
			<?php foreach ( $outlets as $o ) : 
				$wa_outlet = cleaniquemart_get_wa_url( 'Halo ' . $o['name'] . ', saya ingin bertanya seputar produk sabun isi ulang curah di outlet Anda.' );
			?>
				<div class="cm-outlet-card" style="padding:1.25rem;display:flex;flex-direction:column;justify-content:space-between;background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-lg);overflow:hidden;">
					<div>
						<!-- Outlet Photo -->
						<div style="border-radius:var(--cm-radius-md);overflow:hidden;height:160px;margin-bottom:1rem;background:#E2E8F0;">
							<img 
								src="<?php echo esc_url( $img_dir . $o['image'] ); ?>" 
								alt="<?php echo esc_attr( $o['name'] ); ?>"
								style="width:100%;height:100%;object-fit:cover;display:block;"
								loading="lazy"
							>
						</div>

						<div style="font-size:0.75rem;font-weight:700;color:var(--cm-cyan-600);text-transform:uppercase;letter-spacing:0.05em;margin-bottom:0.35rem;">
							<?php echo esc_html( $o['city'] ); ?>
						</div>
						<h3 class="cm-outlet-title" style="font-size:1.1rem;margin-bottom:0.35rem;"><?php echo esc_html( $o['name'] ); ?></h3>
						<p class="cm-outlet-address" style="font-size:0.85rem;color:var(--cm-dark-500);line-height:1.4;margin-bottom:1rem;"><?php echo esc_html( $o['addr'] ); ?></p>
					</div>
					<div>
						<a href="<?php echo esc_url( $wa_outlet ); ?>" class="cm-btn cm-btn-outline cm-btn-sm cm-btn-block" target="_blank" rel="noopener noreferrer">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
							<span>Hubungi Cabang Ini</span>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div style="text-align:center;margin-top:3rem;">
			<a href="<?php echo esc_url( home_url( '/mitra-cleanique-mart/' ) ); ?>" class="cm-btn cm-btn-cyan">
				<span>Buka Halaman Seluruh Cabang Mitra &rarr;</span>
			</a>
		</div>
	</div>
</section>
