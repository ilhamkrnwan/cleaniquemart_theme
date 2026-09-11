<?php
/**
 * Template Part: Shipping Logistics Comparison with Authentic Infographics
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$img_dir = get_template_directory_uri() . '/assets/images/';
?>

<section class="cm-section" id="shipping-efficiency">
	<div class="cm-container">
		<div class="cm-section-header">
			<div class="cm-highlight-pill cm-pill-cyan" style="margin-bottom:0.75rem;">
				Efisiensi Biaya Logistik
			</div>
			<h2 class="cm-section-title">Ongkir Menjadi Jauh Lebih Hemat Berkat <span class="cm-highlight-emerald">Sistem Pengiriman Terpusat</span></h2>
			<p class="cm-section-subtitle">
				Cairan kimia pembersih berbobot berat. Melalui sistem jaringan hub logistik dan ekspedisi kargo rekanan resmi Cleanique Mart, biaya kirim dapat ditekan drastis hingga keuntungan Anda tetap maksimal.
			</p>
		</div>

		<div style="display:grid;grid-template-columns:1fr 1fr;gap:2.5rem;max-width:960px;margin:0 auto;">
			<!-- Simulasi A (Clean Uniform Border) -->
			<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-lg);padding:1.75rem;overflow:hidden;box-shadow:var(--cm-shadow-sm);">
				<div style="border-radius:var(--cm-radius-md);overflow:hidden;margin-bottom:1.25rem;border:1px solid var(--cm-border);">
					<img 
						src="<?php echo esc_url( $img_dir . 'ONGKIR-REGULER.webp' ); ?>" 
						alt="Simulasi Ongkos Kirim Reguler"
						style="width:100%;height:auto;display:block;"
						loading="lazy"
					>
				</div>
				<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.5rem;">
					<span class="cm-highlight-pill cm-pill-red">Sistem Konvensional</span>
					<span style="font-size:0.75rem;font-weight:700;color:#DC2626;">Boros Biaya</span>
				</div>
				<h3 style="font-family:var(--cm-font-heading);font-size:1.25rem;font-weight:800;color:#DC2626;margin-bottom:0.75rem;">Simulasi A: Kirim Eceran</h3>
				<ul class="cm-check-list" style="margin-top:0.75rem;">
					<li class="cm-check-item">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="6"/></svg>
						<span>Tarif kargo eceran tanpa diskon kemitraan pabrik</span>
					</li>
					<li class="cm-check-item">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="6"/></svg>
						<span>Resiko jerigen bocor atau rusak tanpa asuransi produsen</span>
					</li>
					<li class="cm-check-item">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="6"/></svg>
						<span><strong class="cm-highlight-amber">Biaya logistik memotong 20–35%</strong> margin laba mitra</span>
					</li>
				</ul>
			</div>

			<!-- Simulasi B (Clean Uniform Border) -->
			<div style="background:var(--cm-emerald-50);border:1.5px solid var(--cm-emerald-500);border-radius:var(--cm-radius-lg);padding:1.75rem;overflow:hidden;box-shadow:var(--cm-shadow-sm);">
				<div style="border-radius:var(--cm-radius-md);overflow:hidden;margin-bottom:1.25rem;border:1px solid rgba(16,185,129,0.3);">
					<img 
						src="<?php echo esc_url( $img_dir . 'ONGKIR-CARGO.webp' ); ?>" 
						alt="Simulasi Ongkos Kirim Cargo Cleanique Mart"
						style="width:100%;height:auto;display:block;"
						loading="lazy"
					>
				</div>
				<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.5rem;">
					<span class="cm-highlight-pill cm-pill-emerald">Jaringan Mitra Cleanique</span>
					<span style="font-size:0.75rem;font-weight:700;color:var(--cm-emerald-600);">Hemat s/d 60%</span>
				</div>
				<h3 style="font-family:var(--cm-font-heading);font-size:1.25rem;font-weight:800;color:var(--cm-emerald-600);margin-bottom:0.75rem;">Simulasi B: Jaringan Terpusat</h3>
				<ul class="cm-check-list" style="margin-top:0.75rem;">
					<li class="cm-check-item">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
						<span>Pengiriman via Hub Depo terdekat / kargo rekanan kontrak khusus</span>
					</li>
					<li class="cm-check-item">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
						<span><strong class="cm-highlight-emerald">Paket include ongkir rak &amp; peralatan</strong> sampai lokasi toko</span>
					</li>
					<li class="cm-check-item">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
						<span>Pilihan format <strong class="cm-highlight-emerald">Biang Konsentrat (hemat volume kirim hingga 80%)</strong></span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
