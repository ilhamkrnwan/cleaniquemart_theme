<?php
/**
 * Template Part: Sticky Mobile Bottom Dock
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$wa_url = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*' );
?>

<div class="cm-mobile-dock" id="cm-mobile-dock" aria-label="Aksi Cepat Mobile">
	<div class="cm-dock-grid">
		<a href="#packages" class="cm-btn cm-btn-outline cm-btn-sm" style="font-size:0.8rem;padding:0.6rem 0.5rem;">
			<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
			Pilihan Paket
		</a>
		<a href="#cm-lead-modal" class="cm-btn cm-btn-emerald cm-btn-sm cm-trigger-modal" style="font-size:0.85rem;padding:0.6rem 0.75rem;">
			<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
			Konsultasi via WA
		</a>
	</div>
</div>
