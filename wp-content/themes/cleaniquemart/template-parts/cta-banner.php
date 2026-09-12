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
					<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.304A9.96 9.96 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18a7.96 7.96 0 0 1-4.076-1.113l-.292-.174-3.038.796.812-2.965-.19-.305A7.96 7.96 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
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
