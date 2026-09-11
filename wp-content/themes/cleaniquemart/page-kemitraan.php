<?php
/**
 * Template Name: Halaman Kemitraan Master
 *
 * @package CleaniqueMart
 */

get_header();
?>

<main id="main-content" class="cm-main-content">
	<!-- Dedicated Partnership Hero with Scannable Highlights -->
	<section class="cm-hero" style="padding-bottom:3.5rem;">
		<div class="cm-container" style="text-align:center;max-width:860px;margin:0 auto;">
			<div class="cm-badge-glass-hero cm-badge-glass-hero-dark" style="margin-bottom:1.25rem;">
				Kuota Terbatas Periode 2026 - Proteksi Radius Wilayah
			</div>
			<h1 class="cm-hero-title" style="font-size:3rem;margin-bottom:1.25rem;">
				Produk <span class="cm-gradient-text">PASTI Dibutuhkan Semua Orang</span> Potensi Omzet 50+ Juta/Bulan
			</h1>
			<p class="cm-hero-lead" style="margin-left:auto;margin-right:auto;">
				Dapatkan peluang usaha depot isi ulang sabun curah dan kimia laundry dengan <span class="cm-highlight-emerald">legalitas resmi Kemenkes RI</span>, <span class="cm-highlight-text">100% tanpa bagi hasil royalti</span>, dan bimbingan sampai buka depot.
			</p>
			
			<div class="cm-hero-cta-group" style="justify-content:center;margin-bottom:2.5rem;">
				<a href="#paket" class="cm-btn cm-btn-emerald cm-btn-lg">
					Pilih Paket Kemitraan &darr;
				</a>
				<a href="#cm-lead-modal" class="cm-btn cm-btn-outline cm-btn-lg cm-trigger-modal" data-package="Paket King (Promo Rp 27.5 Juta)">
					Konsultasi Wilayah via WA
				</a>
			</div>

			<!-- 3 Bento Stat Highlights -->
			<div style="display:grid;grid-template-columns:repeat(3, 1fr);gap:1rem;text-align:left;">
				<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-md);padding:1rem 1.25rem;box-shadow:var(--cm-shadow-sm);">
					<span class="cm-highlight-pill cm-pill-emerald" style="font-size:0.7rem;padding:0.2rem 0.5rem;margin-bottom:0.35rem;">Omzet</span>
					<div style="font-family:var(--cm-font-heading);font-size:1.5rem;font-weight:900;color:var(--cm-primary-900);">50 Jt+</div>
					<div style="font-size:0.75rem;color:var(--cm-dark-500);margin-top:0.2rem;">Potensi per bulan</div>
				</div>
				<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-md);padding:1rem 1.25rem;box-shadow:var(--cm-shadow-sm);">
					<span class="cm-highlight-pill cm-pill-cyan" style="font-size:0.7rem;padding:0.2rem 0.5rem;margin-bottom:0.35rem;">Royalti</span>
					<div style="font-family:var(--cm-font-heading);font-size:1.5rem;font-weight:900;color:var(--cm-primary-900);">0% Fee</div>
					<div style="font-size:0.75rem;color:var(--cm-dark-500);margin-top:0.2rem;">Laba 100% milik Anda</div>
				</div>
				<div style="background:#FFFFFF;border:1px solid var(--cm-border);border-radius:var(--cm-radius-md);padding:1rem 1.25rem;box-shadow:var(--cm-shadow-sm);">
					<span class="cm-highlight-pill cm-pill-amber" style="font-size:0.7rem;padding:0.2rem 0.5rem;margin-bottom:0.35rem;">Pabrik</span>
					<div style="font-family:var(--cm-font-heading);font-size:1.5rem;font-weight:900;color:var(--cm-primary-900);">13+ Thn</div>
					<div style="font-size:0.75rem;color:var(--cm-dark-500);margin-top:0.2rem;">Izin PKRT Kemenkes</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	// ── Package Navigator Cards ─────────────────────────────────────
	$wa_starter  = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya tertarik dengan *PAKET STARTER* Cleanique Mart senilai Rp 15.000.000. Mohon informasi dan cek ketersediaan area saya.' );
	$wa_king     = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya tertarik dengan *PROMO PAKET KING* Cleanique Mart senilai Rp 27.500.000. Mohon informasi dan cek ketersediaan area saya.' );
	$starter_url = home_url( '/kemitraan-cleanique-mart/paket-starter/' );
	$king_url    = home_url( '/kemitraan-cleanique-mart/paket-king/' );
	?>

	<!-- Package Navigation Cards -->
	<section style="padding:60px 0 20px;background:#f8fafc;">
		<div class="cm-container">
			<div class="cm-section-header" style="margin-bottom:2rem;">
				<div class="cm-eyebrow cm-eyebrow-amber">Pilih Paket Terbaik Anda</div>
				<h2 class="cm-section-title">2 Paket Kemitraan Siap Jalan</h2>
				<p class="cm-section-subtitle">Pilih sesuai budget dan target Anda. Keduanya 100% bebas royalti, legalitas PKRT, dan bimbingan penuh.</p>
			</div>

			<div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-bottom:0;">

				<!-- Paket Starter -->
				<div style="background:#ffffff;border:2px solid #dbeafe;border-radius:24px;padding:36px 32px;box-shadow:0 8px 30px rgba(30,64,175,.08);position:relative;overflow:hidden;">
					<div style="position:absolute;top:0;right:0;width:120px;height:120px;background:linear-gradient(135deg,#dbeafe,transparent);border-radius:0 24px 0 60px;"></div>
					<div style="position:relative;">
						<div style="display:inline-block;background:#dbeafe;color:#1e40af;font-size:11px;font-weight:800;padding:5px 12px;border-radius:999px;text-transform:uppercase;letter-spacing:.06em;margin-bottom:16px;">Tipe Pemula / Rumahan</div>
						<h3 style="font-family:'Lexend',sans-serif;font-size:26px;font-weight:900;color:#0f172a;margin:0 0 8px;">PAKET STARTER</h3>
						<div style="font-family:'Lexend',sans-serif;font-size:36px;font-weight:900;color:#1e40af;margin-bottom:4px;">Rp 15 Juta,-</div>
						<div style="font-size:13px;color:#64748b;margin-bottom:24px;">Investasi satu kali · 0% royalti selamanya</div>

						<div style="display:flex;flex-direction:column;gap:10px;margin-bottom:28px;">
							<?php
							$starter_highlights = [
								['🗄', 'Rak depot 8 kontainer'],
								['📦', 'Produk awal Rp 6.000.000'],
								['🎨', 'Desain 3D + media promo cetak'],
								['🌐', 'Landing page + Google Maps'],
								['🎓', 'Training sampai siap buka'],
								['🚚', 'Biaya kirim included'],
							];
							foreach ( $starter_highlights as $sh ) : ?>
								<div style="display:flex;align-items:center;gap:10px;font-size:14px;color:#334155;">
									<span style="font-size:16px;"><?php echo $sh[0]; ?></span>
									<span><?php echo esc_html( $sh[1] ); ?></span>
								</div>
							<?php endforeach; ?>
						</div>

						<a href="<?php echo esc_url( $starter_url ); ?>" style="display:flex;align-items:center;justify-content:center;gap:8px;background:#1e40af;color:#fff;padding:14px 20px;border-radius:999px;font-family:'Lexend',sans-serif;font-size:14px;font-weight:700;text-decoration:none;transition:background .2s;margin-bottom:10px;">
							Lihat Detail Paket Starter →
						</a>
						<a href="<?php echo esc_url( $wa_starter ); ?>" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;justify-content:center;gap:8px;background:#f0fdf4;border:1.5px solid #22c55e;color:#15803d;padding:12px 20px;border-radius:999px;font-family:'Lexend',sans-serif;font-size:14px;font-weight:700;text-decoration:none;">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
							Tanya via WA Dulu
						</a>
					</div>
				</div>

				<!-- Paket King -->
				<div style="background:linear-gradient(145deg,#064e3b,#022c22);border:2px solid rgba(251,191,36,.4);border-radius:24px;padding:36px 32px;box-shadow:0 8px 30px rgba(6,95,70,.25);position:relative;overflow:hidden;">
					<div style="position:absolute;top:-10px;right:-10px;width:80px;height:80px;background:radial-gradient(circle,rgba(251,191,36,.2),transparent);border-radius:50%;"></div>
					<div style="position:relative;">
						<!-- Best Seller Ribbon -->
						<div style="display:flex;align-items:center;gap:8px;margin-bottom:14px;flex-wrap:wrap;">
							<div style="display:inline-block;background:linear-gradient(135deg,#d97706,#fbbf24);color:#78350f;font-size:11px;font-weight:800;padding:5px 12px;border-radius:999px;text-transform:uppercase;letter-spacing:.06em;">👑 Best Seller – 10 Orang Pertama</div>
							<div style="display:inline-block;background:#059669;color:#fff;font-size:11px;font-weight:700;padding:4px 10px;border-radius:999px;">Hemat Rp 2,5 Juta</div>
						</div>
						<h3 style="font-family:'Lexend',sans-serif;font-size:26px;font-weight:900;color:#fff;margin:0 0 4px;">PAKET KING</h3>
						<div style="font-size:15px;color:rgba(255,255,255,.45);text-decoration:line-through;margin-bottom:4px;">Rp 30.000.000,-</div>
						<div style="font-family:'Lexend',sans-serif;font-size:36px;font-weight:900;color:#fbbf24;margin-bottom:4px;">Rp 27,5 Juta,-</div>
						<div style="font-size:13px;color:rgba(255,255,255,.55);margin-bottom:24px;">Terlengkap · 15 Fasilitas · 0% royalti</div>

						<div style="display:flex;flex-direction:column;gap:10px;margin-bottom:28px;">
							<?php
							$king_highlights = [
								['🗄', 'Rak depot 8 kontainer eksklusif'],
								['📦', 'Produk awal Rp 8.000.000 (lebih banyak)'],
								['🌊', 'Filter UV sterilisasi higienis'],
								['🛒', 'Set-up Marketplace Shopee & Tokopedia'],
								['📱', 'Set-up & optimasi media sosial'],
								['📦', 'Peralatan packing lengkap'],
							];
							foreach ( $king_highlights as $kh ) : ?>
								<div style="display:flex;align-items:center;gap:10px;font-size:14px;color:rgba(255,255,255,.88);">
									<span style="font-size:16px;"><?php echo $kh[0]; ?></span>
									<span><?php echo esc_html( $kh[1] ); ?></span>
									<span style="margin-left:auto;font-size:10px;background:rgba(251,191,36,.15);color:#fbbf24;padding:2px 7px;border-radius:4px;font-weight:700;white-space:nowrap;">+King</span>
								</div>
							<?php endforeach; ?>
						</div>

						<a href="<?php echo esc_url( $king_url ); ?>" style="display:flex;align-items:center;justify-content:center;gap:8px;background:linear-gradient(135deg,#d97706,#fbbf24);color:#78350f;padding:14px 20px;border-radius:999px;font-family:'Lexend',sans-serif;font-size:14px;font-weight:800;text-decoration:none;margin-bottom:10px;box-shadow:0 4px 16px rgba(217,119,6,.35);">
							👑 Lihat Detail Paket King →
						</a>
						<a href="<?php echo esc_url( $wa_king ); ?>" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;justify-content:center;gap:8px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.25);color:#fff;padding:12px 20px;border-radius:999px;font-family:'Lexend',sans-serif;font-size:14px;font-weight:700;text-decoration:none;">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
							Order Promo via WA
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<?php
	// Include Metrics
	get_template_part( 'template-parts/metrics' );

	// Include 12 Advantages
	get_template_part( 'template-parts/advantages' );

	// Include Packages Pricing Table
	get_template_part( 'template-parts/packages' );

	// Include Shipping Comparison
	get_template_part( 'template-parts/shipping' );

	// Include Outlets Network
	get_template_part( 'template-parts/outlets-map' );

	// Include Testimonials
	get_template_part( 'template-parts/testimonials' );

	// Include FAQ
	get_template_part( 'template-parts/faq' );

	// Include CTA
	get_template_part( 'template-parts/cta-banner' );
	?>
</main>

<?php
get_footer();
