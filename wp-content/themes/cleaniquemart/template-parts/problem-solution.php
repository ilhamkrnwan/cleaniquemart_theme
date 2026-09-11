<?php
/**
 * Template Part: Problem vs Solution with Visual Highlights (Sorotan)
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';
?>

<section class="cm-section" id="peluang">
	<div class="cm-container">
		<div class="cm-section-header">
			<div class="cm-eyebrow cm-eyebrow-gold">
				<span class="cm-badge-pulse" style="background-color:var(--cm-amber-500);box-shadow:0 0 8px var(--cm-amber-500);"></span>
				Edukasi Bisnis 2026
			</div>
			<h2 class="cm-section-title">Mau Sukses Bisnis Tapi <span class="cm-highlight-text">Takut Salah Langkah?</span></h2>
			<p class="cm-section-subtitle">
				Banyak orang gagal merintis usaha karena tergiur produk musiman yang cepat redup atau terbebani franchise mahal dengan sistem bagi hasil yang mencekik.
			</p>
		</div>

		<!-- Sorotan Perbandingan Risiko vs Solusi (No 1-Sided Border) -->
		<div class="cm-problem-grid">
			<!-- Pain Box with Red Pill Badges -->
			<div class="cm-problem-card">
				<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1.25rem;">
					<span class="cm-highlight-pill cm-pill-red">Risiko Bisnis Lain</span>
					<span style="font-size:0.75rem;font-weight:700;color:#DC2626;">Hindari Jebakan Ini</span>
				</div>
				<h3 class="cm-card-title-lg" style="color:#DC2626;">Kekhawatiran Umum Berbisnis:</h3>
				<ul class="cm-check-list">
					<li class="cm-check-item">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="6"/></svg>
						<span><strong>Takut rugi &amp; tren sesaat:</strong> <mark class="cm-highlight-amber">Produk makanan/minuman viral</mark> biasanya hanya ramai 3-6 bulan lalu sepi peminat.</span>
					</li>
					<li class="cm-check-item">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="6"/></svg>
						<span><strong>Beban royalti franchise bulanan:</strong> Laba bersih habis dipotong fee pusat walaupun penjualan sedang sepi.</span>
					</li>
					<li class="cm-check-item">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="6"/></svg>
						<span><strong>Produk tanpa izin resmi:</strong> Menjual kimia curah ilegal berisiko disita aparat dan membahayakan kulit pelanggan.</span>
					</li>
					<li class="cm-check-item">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="6"/></svg>
						<span><strong>Bingung cara promosi:</strong> Tidak punya keahlian pemasaran online, marketplace, atau cara menggaet langganan laundry.</span>
					</li>
				</ul>
			</div>

			<!-- Solution Box with Emerald Pill Badges -->
			<div class="cm-solution-card">
				<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1.25rem;">
					<span class="cm-highlight-pill cm-pill-emerald">Solusi Cleanique Mart</span>
					<span style="font-size:0.75rem;font-weight:700;color:var(--cm-emerald-600);">Keuntungan Terjamin</span>
				</div>
				<h3 class="cm-card-title-lg" style="color:var(--cm-emerald-600);">Solusi Nyata Cleanique Mart:</h3>
				<ul class="cm-check-list">
					<li class="cm-check-item">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
						<span><strong>Kebutuhan primer anti-krisis:</strong> <mark class="cm-highlight-emerald">Sabun pasti habis dipakai</mark> untuk mandi, cuci baju, cuci piring, dan mengepel setiap hari.</span>
					</li>
					<li class="cm-check-item">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
						<span><strong>100% Laba milik Anda:</strong> Tanpa franchise fee, tanpa bagi hasil omzet bulanan, seluruh profit dinikmati sendiri.</span>
					</li>
					<li class="cm-check-item">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
						<span><strong>Izin resmi Kemenkes PKRT &amp; Halal MUI:</strong> Produk teruji klinis bersertifikat resmi menjamin keamanan usaha jangka panjang.</span>
					</li>
					<li class="cm-check-item">
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
						<span><strong>Dukungan pemasaran lengkap:</strong> Dibuatkan landing page khusus SEO, optimasi Google Maps, akun marketplace, dan materi cetak.</span>
					</li>
				</ul>
			</div>
		</div>

		<!-- Sorotan Utama Callout Box -->
		<div class="cm-callout-sorotan" style="margin-top:2.5rem;">
			<div style="display:flex;align-items:center;gap:0.75rem;flex-wrap:wrap;">
				<span class="cm-highlight-pill cm-pill-emerald">FAKTA PASAR</span>
				<span style="font-family:var(--cm-font-heading);font-weight:700;font-size:1.05rem;color:var(--cm-primary-900);">
					Setiap rumah tangga &amp; usaha laundry menghabiskan rata-rata 15–40 Liter sabun per bulan.
				</span>
			</div>
			<p style="font-size:0.875rem;color:var(--cm-dark-600);margin-top:0.4rem;line-height:1.5;">
				Dengan mengkonversi 20-30 pelanggan tetap di lingkungan sekitar Anda, depot sabun curah Anda sudah menghasilkan perputaran omzet yang sangat sehat dan berkesinambungan.
			</p>
		</div>

		<!-- Featured Real Banner from Website -->
		<div style="margin-top:2.5rem;text-align:center;">
			<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-xl);overflow:hidden;box-shadow:var(--cm-shadow-md);max-width:960px;margin:0 auto;">
				<img 
					src="<?php echo esc_url( $img_dir . 'Bisnis-Aneka-Sabun-Auto-Balik-Modal.webp' ); ?>" 
					alt="Cleanique Mart Bisnis Aneka Sabun Auto Balik Modal" 
					style="width:100%;height:auto;display:block;"
					loading="lazy"
				>
			</div>
		</div>
	</div>
</section>
