<?php
/**
 * Template Part: Hero Hook Section (Masalah vs Akibat)
 * Matches cleaniquemart.com live sales funnel
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$wa_url       = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*' );
$proposal_url = get_theme_mod( 'cleaniquemart_proposal_url', 'https://drive.google.com/file/d/1R-UhhK5TSumOxNIOZm3mZxmxyn-Y0PGF/view?usp=sharing' );
?>

<section class="cm-hero-hook" id="beranda">
	<div class="cm-container">
		<!-- Subheading Eyebrow -->
		<div class="cm-hero-eyebrow-wrap">
			<div class="cm-hero-eyebrow">
				<span>Peluang Usaha Aneka Sabun dengan Potensi Omzet <strong>50+ Juta/Bulan!</strong></span>
			</div>
		</div>

		<!-- Primary H1 Headline -->
		<h1 class="cm-hero-headline">
			Peluang Usaha 2026 <span class="cm-gradient-text">Potensi Profit Besar</span>
		</h1>

		<!-- Two-Column Problem vs Consequence Box -->
		<div class="cm-hook-grid">
			<!-- Column 1: Frustrations & Doubts (Tapi...) -->
			<div class="cm-hook-card cm-hook-problem">
				<div class="cm-hook-card-header">
					<div class="cm-hook-icon-wrap cm-icon-danger">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
					</div>
					<h2 class="cm-hook-card-title">Kamu Mau Sukses dalam Bisnis, Tapi...</h2>
				</div>
				<ul class="cm-hook-list">
					<li>
						<span class="cm-list-icon cm-icon-cross">&times;</span>
						<span>Pernah merasa bingung harus mulai dari mana?</span>
					</li>
					<li>
						<span class="cm-list-icon cm-icon-cross">&times;</span>
						<span>Tak tahu cara memasarkan produk atau layanan dengan efektif?</span>
					</li>
					<li>
						<span class="cm-list-icon cm-icon-cross">&times;</span>
						<span>Bingung dengan cara promosi yang tepat?</span>
					</li>
					<li>
						<span class="cm-list-icon cm-icon-cross">&times;</span>
						<span>Takut bisnis kamu gagal atau malah rugi?</span>
					</li>
					<li>
						<span class="cm-list-icon cm-icon-cross">&times;</span>
						<span>Takut ditipu atau justru gagal total?</span>
					</li>
				</ul>
			</div>

			<!-- Column 2: The Consequence (Akibatnya...) -->
			<div class="cm-hook-card cm-hook-consequence">
				<div class="cm-hook-card-header">
					<div class="cm-hook-icon-wrap cm-icon-warning">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
					</div>
					<h2 class="cm-hook-card-title">Akibatnya...</h2>
				</div>
				<ul class="cm-hook-list">
					<li>
						<span class="cm-list-icon cm-icon-alert">&#9888;</span>
						<span>Peluang besar terlewat begitu saja.</span>
					</li>
					<li>
						<span class="cm-list-icon cm-icon-alert">&#9888;</span>
						<span>Kamu terjebak dalam kehidupan finansial yang tidak berkembang.</span>
					</li>
					<li>
						<span class="cm-list-icon cm-icon-alert">&#9888;</span>
						<span>Mimpi besar malah terkubur dalam kondisi finansial yang terbatas.</span>
					</li>
					<li>
						<span class="cm-list-icon cm-icon-alert">&#9888;</span>
						<span>Dan itu membuat rasa menyesal semakin menguasai dirimu.</span>
					</li>
				</ul>
			</div>
		</div>

		<!-- Direct Call to Actions -->
		<div class="cm-hero-actions">
			<a href="<?php echo esc_url( $wa_url ); ?>" target="_blank" rel="noopener noreferrer" class="cm-btn cm-btn-emerald cm-btn-lg">
				<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
				<span>KONSULTASI GRATIS</span>
			</a>
			<a href="<?php echo esc_url( $proposal_url ); ?>" target="_blank" rel="noopener noreferrer" class="cm-btn cm-btn-outline cm-btn-lg">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
				<span>DOWNLOAD PROPOSAL</span>
			</a>
		</div>

		<!-- Compact Trust Badges Strip -->
		<div class="cm-hero-trust-strip">
			<div class="cm-hero-trust-item">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
				<span>Pabrik Tangan Pertama Sejak 2011</span>
			</div>
			<div class="cm-hero-trust-item">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
				<span>1.000.000+ Produk Terjual</span>
			</div>
			<div class="cm-hero-trust-item">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v12M8 10h8"/></svg>
				<span>Izin PKRT Kemenkes RI Resmi</span>
			</div>
			<div class="cm-hero-trust-item">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
				<span>100% Bebas Royalti &amp; Fee Kemitraan</span>
			</div>
		</div>
	</div>
</section>

