<?php
/**
 * Template Part: Final Closing CTA Banner with Scannable Highlights
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$wa_url       = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*' );
$proposal_url = get_theme_mod( 'cleaniquemart_proposal_url', 'https://drive.google.com/file/d/1R-UhhK5TSumOxNIOZm3mZxmxyn-Y0PGF/view?usp=sharing' );
?>

<section class="cm-section" style="padding-bottom:6rem;">
	<div class="cm-container">
		<div class="cm-cta-card">
			<div class="cm-highlight-pill cm-pill-cyan" style="background:rgba(0,180,216,0.18);border:1px solid rgba(0,180,216,0.4);color:var(--cm-cyan-500);margin-bottom:1.5rem;">
				Kuota Terbatas Periode 2026
			</div>
			
			<h2 class="cm-cta-title">
				Siap Memulai Bisnis Depot Sabun dengan <span class="cm-highlight-emerald" style="background:rgba(16,185,129,0.2);color:#34D399;">Omzet 50+ Juta/Bulan?</span>
			</h2>
			
			<p class="cm-cta-desc">
				Jangan biarkan wilayah potensial di kota Anda diambil oleh orang lain. Dapatkan potongan diskon Paket King dan hak eksklusif titik lokasi Anda sekarang juga!
			</p>

			<!-- 3 Jaminan Sorotan Kunci -->
			<div style="display:flex;justify-content:center;gap:1rem;flex-wrap:wrap;margin-bottom:2rem;">
				<span class="cm-highlight-pill cm-pill-emerald" style="font-size:0.78rem;padding:0.35rem 0.85rem;background:rgba(16,185,129,0.15);color:#10B981;border-color:rgba(16,185,129,0.3);">
					✓ 100% Laba Milik Anda (0% Royalti)
				</span>
				<span class="cm-highlight-pill cm-pill-cyan" style="font-size:0.78rem;padding:0.35rem 0.85rem;background:rgba(0,180,216,0.15);color:var(--cm-cyan-500);border-color:rgba(0,180,216,0.3);">
					✓ Proteksi Radius Wilayah Eksklusif
				</span>
				<span class="cm-highlight-pill cm-pill-amber" style="font-size:0.78rem;padding:0.35rem 0.85rem;background:rgba(245,158,11,0.15);color:#F59E0B;border-color:rgba(245,158,11,0.3);">
					✓ Garansi Pengiriman &amp; Pelatihan Lengkap
				</span>
			</div>
			
			<div class="cm-cta-buttons">
				<a href="#cm-lead-modal" class="cm-btn cm-btn-emerald cm-btn-lg cm-trigger-modal" data-package="Paket King (Promo Rp 27.5 Juta)">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
					Booking Promo Kemitraan via WA
				</a>
				<a href="<?php echo esc_url( $proposal_url ); ?>" class="cm-btn cm-btn-dark-outline cm-btn-lg" target="_blank" rel="noopener noreferrer">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
					Pelajari Proposal Bisnis
				</a>
			</div>
		</div>
	</div>
</section>
