<?php
/**
 * Template Part: 12 Advantages with Visual Bento Highlights (Sorotan)
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';

$feature_cards = array(
	array(
		'title' => 'Pasar Luas & Terus Tumbuh',
		'image' => 'Pasar-Luas-dan-Terus-Tumbuh.webp',
		'tag'   => 'Kebutuhan Abadi',
	),
	array(
		'title' => 'Akses Produk Eksklusif Berkualitas',
		'image' => 'Akses-ke-Produk-Eksklusif-Berkualitas-Tinggi.webp',
		'tag'   => 'Mutu Teruji IFRA',
	),
	array(
		'title' => 'Konsumsi Berulang & Repeat Order Tinggi',
		'image' => 'Konsumsi-Berulang-Repeat-Order-Tinggi.webp',
		'tag'   => 'Repeat Order 85%',
	),
	array(
		'title' => 'Bisa Jadi Waralaba Lokal',
		'image' => 'Bisa-Dikembangkan-Menjadi-Bisnis-Keluarga-atau-Waralaba-Lokal.webp',
		'tag'   => 'Skalabilitas Tinggi',
	),
	array(
		'title' => 'Komunitas & Networking Nasional',
		'image' => 'Komunitas-Networking-Seluruh-Indonesia.webp',
		'tag'   => 'Jaringan 12+ Kota',
	),
);

$advantages = array(
	array( 'num' => '01', 'title' => 'Potensi Pasar Sangat Besar', 'desc' => 'Kebutuhan sabun tidak pernah berhenti, baik musim hujan maupun panas.' ),
	array( 'num' => '02', 'title' => '100% Bebas Royalti Fee', 'desc' => 'Seluruh laba bersih penjualan depot menjadi hak milik mitra seutuhnya tanpa potongan.' ),
	array( 'num' => '03', 'title' => 'Dukungan Penuh Profesional', 'desc' => 'Didampingi dari nol mulai dari persiapan lokasi, desain 3D, hingga siap grand opening.' ),
	array( 'num' => '04', 'title' => 'Produk Kebutuhan Pokok', 'desc' => 'Deterjen, softener, dan sabun cuci piring selalu dibeli berulang kali oleh warga.' ),
	array( 'num' => '05', 'title' => 'Legalitas Lengkap & Terjamin', 'desc' => 'Izin edar resmi Kemenkes RI (PKRT), uji lab bersertifikat, dan Halal MUI terverifikasi.' ),
	array( 'num' => '06', 'title' => 'Terjual > 1 Juta Produk', 'desc' => 'Inovasi formula teruji dan dipercaya konsumen Indonesia sejak tahun 2011.' ),
	array( 'num' => '07', 'title' => 'Harga Pabrik Langsung', 'desc' => 'HPP sangat kompetitif sehingga mitra leluasa menetapkan margin keuntungan tebal.' ),
	array( 'num' => '08', 'title' => 'Konsep Ramah Lingkungan', 'desc' => 'Mendukung gerakan Indonesia Bebas Sampah Plastik melalui sistem isi ulang (refill).' ),
	array( 'num' => '09', 'title' => 'Pelatihan SOP Produk & Kasir', 'desc' => 'Panduan pengisian cairan higienis, manajemen stok, dan standar operasional toko.' ),
	array( 'num' => '10', 'title' => 'Repeat Order Sangat Cepat', 'desc' => 'Konsumen yang sudah merasakan wangi mewah dan busa sabun akan rutin berlangganan.' ),
	array( 'num' => '11', 'title' => 'Bantuan Setup Digital & Peta', 'desc' => 'Dibuatkan landing page SEO-friendly, listing Google Maps terverifikasi, dan marketplace.' ),
	array( 'num' => '12', 'title' => 'Sistem Logistik Hemat Ongkir', 'desc' => 'Pengiriman terpusat dari pabrik dan jaringan hub depo menghemat ongkos kirim cairan.' ),
);
?>

<section class="cm-section" id="keunggulan">
	<div class="cm-container">
		<div class="cm-section-header">
			<div class="cm-eyebrow cm-eyebrow-emerald">
				<span class="cm-badge-pulse" style="background:var(--cm-emerald-500);box-shadow:0 0 8px var(--cm-emerald-500);"></span>
				Keunggulan Bersaing
			</div>
			<h2 class="cm-section-title">Mengapa Kemitraan Cleanique Mart <span class="cm-highlight-emerald">Pasti Menghasilkan?</span></h2>
			<p class="cm-section-subtitle">
				Kami tidak hanya menjual produk kimia, tetapi memberikan ekosistem bisnis lengkap siap jalan yang terbukti mencetak wirausahawan sukses di berbagai daerah.
			</p>
		</div>

		<!-- 3 Sorotan Pilar Utama (Bento Stat Highlight Grid) -->
		<div style="display:grid;grid-template-columns:repeat(3, 1fr);gap:1.5rem;margin-bottom:3rem;">
			<div class="cm-stat-highlight-card">
				<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.75rem;">
					<span class="cm-highlight-pill cm-pill-emerald">Pilar Profit</span>
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
				</div>
				<div class="cm-stat-highlight-number" style="color:var(--cm-emerald-600);">100%</div>
				<div class="cm-stat-highlight-label">Laba Milik Anda Utuh</div>
				<div class="cm-stat-highlight-desc">Nol royalti bulanan. Berapapun omzet yang didapat dari toko depot sabun Anda, seluruhnya menjadi profit bersih Anda.</div>
			</div>

			<div class="cm-stat-highlight-card">
				<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.75rem;">
					<span class="cm-highlight-pill cm-pill-cyan">Pilar Legalitas</span>
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#00B4D8" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
				</div>
				<div class="cm-stat-highlight-number" style="color:var(--cm-primary-800);">PKRT</div>
				<div class="cm-stat-highlight-label">Izin Kemenkes RI &amp; Halal</div>
				<div class="cm-stat-highlight-desc">Seluruh formula diproduksi sesuai standar sertifikasi produksi perbekalan kesehatan rumah tangga Kemenkes dan Halal MUI.</div>
			</div>

			<div class="cm-stat-highlight-card">
				<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.75rem;">
					<span class="cm-highlight-pill cm-pill-amber">Pilar Fasilitas</span>
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#D97706" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
				</div>
				<div class="cm-stat-highlight-number" style="color:#D97706;">15 Fasilitas</div>
				<div class="cm-stat-highlight-label">All-In-One Langsung Buka</div>
				<div class="cm-stat-highlight-desc">Mulai dari rak display 8 kontainer, alat sterilisasi UV, media promosi cetak, hingga akun marketplace sudah siap pakai.</div>
			</div>
		</div>

		<!-- 5 Authentic Infographic Cards from Cleanique Mart -->
		<div style="margin-bottom:3.5rem;">
			<div style="font-size:0.875rem;font-weight:700;color:var(--cm-dark-500);text-transform:uppercase;letter-spacing:0.05em;margin-bottom:1rem;text-align:center;">
				Sorotan Ekosistem Resmi cleaniquemart.com
			</div>
			<div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(200px, 1fr));gap:1.25rem;">
				<?php foreach ( $feature_cards as $fc ) : ?>
					<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-md);overflow:hidden;box-shadow:var(--cm-shadow-sm);transition:all 0.25s ease;">
						<img 
							src="<?php echo esc_url( $img_dir . $fc['image'] ); ?>" 
							alt="<?php echo esc_attr( $fc['title'] ); ?>"
							style="width:100%;height:auto;display:block;"
							loading="lazy"
						>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- 12 Structured Advantage Points with Step Badges -->
		<div style="display:grid;grid-template-columns:repeat(3, 1fr);gap:1.75rem;">
			<?php foreach ( $advantages as $adv ) : ?>
				<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-lg);padding:1.75rem;transition:all 0.2s ease;">
					<div class="cm-step-num"><?php echo esc_html( $adv['num'] ); ?></div>
					<h3 style="font-family:var(--cm-font-heading);font-size:1.1rem;font-weight:800;color:var(--cm-dark-900);margin-bottom:0.4rem;">
						<?php echo esc_html( $adv['title'] ); ?>
					</h3>
					<p style="font-size:0.85rem;color:var(--cm-dark-500);line-height:1.5;">
						<?php echo esc_html( $adv['desc'] ); ?>
					</p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
