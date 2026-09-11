<?php
/**
 * Template Name: Single Kemitraan – Paket Starter
 *
 * Halaman detail mandiri untuk Paket Starter kemitraan Cleanique Mart.
 * Berisi: Hero, spesifikasi lengkap, simulasi ROI, perbandingan, alur bergabung, FAQ, CTA.
 *
 * @package CleaniqueMart
 */

get_header();

$theme_uri = get_template_directory_uri();
$img_dir   = $theme_uri . '/assets/images/';
$wa_starter = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya tertarik dengan *PAKET STARTER* Cleanique Mart senilai Rp 15.000.000. Mohon informasi lebih lanjut dan cek ketersediaan area saya.' );
$wa_general = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya mau bertanya tentang kemitraan Cleanique Mart.' );
?>

<style>
/* ── PAGE-LEVEL TOKENS ─────────────────────────────────────────── */
.cm-starter-page { --starter-primary: #0f172a; --starter-accent: #1e40af; --starter-green: #059669; }

/* ── HERO ──────────────────────────────────────────────────────── */
#starter-hero {
	background: radial-gradient(ellipse 120% 90% at 50% -10%, #0c00ff 0%, #060066 45%, #030033 100%);
	padding: 90px 0 0;
	position: relative;
	overflow: hidden;
}
#starter-hero .ct-section-inner-wrap { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
#starter-hero .hero-badge {
	display: inline-flex; align-items: center; justify-content: center;
	background: rgba(255,255,255,0.18); border: 1px solid rgba(255,255,255,0.35);
	color: #fff; font-size: 12px; font-weight: 700; padding: 6px 18px; border-radius: 999px;
	text-transform: uppercase; letter-spacing: .06em; margin-bottom: 24px;
	backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);
	box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}
#starter-hero h1 {
	font-family: 'Lexend', sans-serif; font-size: clamp(32px, 5vw, 56px);
	font-weight: 900; color: #fff; line-height: 1.15; margin: 0 0 20px;
}
#starter-hero h1 span { color: #6ee7b7; }
#starter-hero .hero-lead { font-size: 18px; color: rgba(255,255,255,.82); line-height: 1.7; max-width: 680px; margin: 0 0 36px; }
#starter-hero .hero-price-display {
	background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.2);
	border-radius: 20px; padding: 28px 32px; display: inline-block; margin-bottom: 36px;
}
#starter-hero .hero-price-label { font-size: 12px; font-weight: 700; color: #6ee7b7; text-transform: uppercase; letter-spacing: .08em; margin-bottom: 6px; }
#starter-hero .hero-price-main { font-family: 'Lexend', sans-serif; font-size: clamp(36px, 5vw, 52px); font-weight: 900; color: #fff; line-height: 1; }
#starter-hero .hero-price-sub { font-size: 13px; color: rgba(255,255,255,.65); margin-top: 6px; }
.hero-cta-row { display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 60px; }
.btn-starter-primary {
	display: inline-flex; align-items: center; gap: 10px;
	background: #059669; color: #fff; padding: 16px 32px; border-radius: 999px;
	font-family: 'Lexend', sans-serif; font-size: 16px; font-weight: 700;
	text-decoration: none; transition: all .25s ease; box-shadow: 0 6px 24px rgba(5,150,105,.35);
}
.btn-starter-primary:hover { background: #047857; transform: translateY(-2px); box-shadow: 0 10px 30px rgba(5,150,105,.45); }
.btn-starter-secondary {
	display: inline-flex; align-items: center; gap: 8px;
	background: rgba(255,255,255,.12); color: #fff; padding: 16px 28px; border-radius: 999px;
	font-family: 'Lexend', sans-serif; font-size: 15px; font-weight: 600;
	text-decoration: none; border: 1px solid rgba(255,255,255,.3); transition: all .25s;
}
.btn-starter-secondary:hover { background: rgba(255,255,255,.2); }

/* Stat bar */
.hero-stats-bar {
	display: grid; grid-template-columns: repeat(4, 1fr);
	background: rgba(255,255,255,.06); border-top: 1px solid rgba(255,255,255,.12);
	margin-top: 0; border-radius: 0 0 0 0;
}
.hero-stat-item { padding: 22px 20px; text-align: center; border-right: 1px solid rgba(255,255,255,.1); }
.hero-stat-item:last-child { border-right: none; }
.hero-stat-num { font-family: 'Lexend', sans-serif; font-size: 26px; font-weight: 900; color: #6ee7b7; }
.hero-stat-label { font-size: 11px; color: rgba(255,255,255,.6); margin-top: 4px; text-transform: uppercase; letter-spacing: .04em; }

/* Wave */
.starter-wave { display: block; width: 100%; height: 60px; color: #f8fafc; margin-bottom: -2px; }

/* ── SECTIONS ──────────────────────────────────────────────────── */
.cm-sk-section { padding: 80px 0; }
.cm-sk-section.bg-white { background: #fff; }
.cm-sk-section.bg-slate { background: #f8fafc; }
.cm-sk-section.bg-dark { background: #0f172a; }
.cm-sk-container { max-width: 1160px; margin: 0 auto; padding: 0 24px; }

/* Section header */
.cm-sk-eyebrow {
	display: inline-block; padding: 5px 14px; border-radius: 999px;
	font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .07em;
	margin-bottom: 16px;
}
.ey-blue { background: #dbeafe; color: #1e40af; }
.ey-green { background: #d1fae5; color: #065f46; }
.ey-amber { background: #fef3c7; color: #92400e; }
.cm-sk-title { font-family: 'Lexend', sans-serif; font-size: clamp(26px, 3.5vw, 38px); font-weight: 800; color: #0f172a; line-height: 1.25; margin: 0 0 12px; }
.cm-sk-title.light { color: #fff; }
.cm-sk-sub { font-size: 16px; color: #475569; line-height: 1.75; max-width: 620px; }
.cm-sk-sub.light { color: rgba(255,255,255,.75); }

/* ── PACKAGE DETAIL GRID ───────────────────────────────────────── */
.pkg-detail-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 50px; }
.pkg-detail-left {}
.pkg-feature-group { margin-bottom: 32px; }
.pkg-feature-group-title {
	font-family: 'Lexend', sans-serif; font-size: 13px; font-weight: 700;
	color: #64748b; text-transform: uppercase; letter-spacing: .07em;
	border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; margin-bottom: 16px;
}
.pkg-feat-item {
	display: flex; gap: 12px; align-items: flex-start; padding: 10px 0;
	border-bottom: 1px solid #f1f5f9;
}
.pkg-feat-item:last-child { border-bottom: none; }
.pkg-feat-icon {
	width: 28px; height: 28px; border-radius: 8px; display: flex; align-items: center;
	justify-content: center; flex-shrink: 0; font-size: 13px; font-weight: 700;
}
.icon-green { background: #d1fae5; color: #059669; }
.icon-blue { background: #dbeafe; color: #1e40af; }
.icon-amber { background: #fef3c7; color: #d97706; }
.pkg-feat-text { flex: 1; }
.pkg-feat-name { font-family: 'Lexend', sans-serif; font-size: 14.5px; font-weight: 700; color: #0f172a; margin-bottom: 2px; }
.pkg-feat-desc { font-size: 12.5px; color: #64748b; line-height: 1.5; }
.pkg-feat-value { font-family: 'Lexend', sans-serif; font-size: 13px; font-weight: 800; color: #1e40af; white-space: nowrap; }

/* Sticky CTA card */
.pkg-cta-card {
	background: linear-gradient(145deg, #0c00ff 0%, #06007a 100%);
	border-radius: 24px; padding: 36px 30px;
	position: sticky; top: 100px;
	box-shadow: 0 16px 50px rgba(12,0,255,.3);
}
.pkg-cta-badge { display: inline-block; background: rgba(255,255,255,.15); color: #fff; font-size: 11px; font-weight: 700; padding: 4px 12px; border-radius: 999px; text-transform: uppercase; margin-bottom: 18px; }
.pkg-cta-name { font-family: 'Lexend', sans-serif; font-size: 20px; font-weight: 900; color: #fff; margin-bottom: 6px; }
.pkg-cta-price { font-family: 'Lexend', sans-serif; font-size: 36px; font-weight: 900; color: #6ee7b7; margin-bottom: 4px; }
.pkg-cta-note { font-size: 12px; color: rgba(255,255,255,.65); margin-bottom: 24px; }
.pkg-cta-divider { border: none; border-top: 1px solid rgba(255,255,255,.15); margin: 20px 0; }
.pkg-cta-feature-row { display: flex; align-items: center; gap: 10px; padding: 8px 0; }
.pkg-cta-check { color: #6ee7b7; font-size: 16px; font-weight: 900; }
.pkg-cta-feat-text { font-size: 13.5px; color: rgba(255,255,255,.9); }
.pkg-cta-btn {
	display: flex; align-items: center; justify-content: center; gap: 10px;
	background: #059669; color: #fff; padding: 15px; border-radius: 999px;
	font-family: 'Lexend', sans-serif; font-size: 15px; font-weight: 700;
	text-decoration: none; transition: all .25s; margin-top: 24px;
	box-shadow: 0 6px 20px rgba(5,150,105,.4);
}
.pkg-cta-btn:hover { background: #047857; }
.pkg-cta-btn-outline {
	display: flex; align-items: center; justify-content: center; gap: 8px;
	background: transparent; color: #fff; padding: 12px; border-radius: 999px;
	font-family: 'Lexend', sans-serif; font-size: 14px; font-weight: 600;
	text-decoration: none; border: 1px solid rgba(255,255,255,.4); margin-top: 12px;
	transition: all .25s;
}
.pkg-cta-btn-outline:hover { background: rgba(255,255,255,.1); }
.pkg-cta-guarantee { display: flex; align-items: center; gap: 8px; margin-top: 18px; font-size: 11.5px; color: rgba(255,255,255,.6); }

/* ── ROI SIMULATOR ─────────────────────────────────────────────── */
.roi-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 28px; margin-top: 48px; }
.roi-input-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 32px; box-shadow: 0 4px 20px rgba(0,0,0,.05); }
.roi-result-card { background: linear-gradient(145deg, #0c00ff 0%, #050080 100%); border-radius: 20px; padding: 32px; box-shadow: 0 8px 30px rgba(12,0,255,.25); }
.roi-label { font-size: 13px; font-weight: 700; color: #475569; margin-bottom: 8px; display: block; }
.roi-input {
	width: 100%; border: 1.5px solid #e2e8f0; border-radius: 10px;
	padding: 12px 14px; font-size: 15px; color: #0f172a; outline: none;
	transition: border-color .2s; box-sizing: border-box;
}
.roi-input:focus { border-color: #1e40af; }
.roi-range { width: 100%; margin: 8px 0 0; accent-color: #1e40af; }
.roi-result-label { font-size: 12px; font-weight: 700; color: rgba(255,255,255,.6); text-transform: uppercase; letter-spacing: .06em; margin-bottom: 6px; }
.roi-result-value { font-family: 'Lexend', sans-serif; font-size: 30px; font-weight: 900; color: #6ee7b7; }
.roi-result-sub { font-size: 12px; color: rgba(255,255,255,.55); margin-bottom: 20px; }

/* ── HOW TO JOIN ───────────────────────────────────────────────── */
.join-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-top: 50px; }
.join-step-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 28px 22px; text-align: center; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,.04); }
.join-step-num {
	width: 48px; height: 48px; border-radius: 14px;
	background: linear-gradient(135deg, #0c00ff, #3b55ff);
	color: #fff; display: flex; align-items: center; justify-content: center;
	font-family: 'Lexend', sans-serif; font-size: 20px; font-weight: 900;
	margin: 0 auto 18px;
}
.join-step-icon { font-size: 28px; margin-bottom: 12px; }
.join-step-title { font-family: 'Lexend', sans-serif; font-size: 15px; font-weight: 800; color: #0f172a; margin-bottom: 8px; }
.join-step-desc { font-size: 13px; color: #64748b; line-height: 1.6; }
.join-step-connector {
	position: absolute; right: -10px; top: 50%; transform: translateY(-50%);
	color: #cbd5e1; font-size: 20px; font-weight: 900; z-index: 2;
}
.join-step-card:last-child .join-step-connector { display: none; }

/* ── COMPARISON ────────────────────────────────────────────────── */
.compare-table { width: 100%; border-collapse: collapse; margin-top: 48px; background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,.06); }
.compare-table th, .compare-table td { padding: 14px 20px; font-size: 14px; text-align: left; border-bottom: 1px solid #f1f5f9; }
.compare-table th { background: #0f172a; color: #fff; font-family: 'Lexend', sans-serif; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; }
.compare-table th.col-starter { background: #1e40af; }
.compare-table th.col-king { background: #059669; }
.compare-table td.col-feature { color: #475569; font-weight: 600; }
.compare-table td.col-starter, .compare-table td.col-king { text-align: center; }
.compare-tick { color: #059669; font-size: 18px; font-weight: 900; }
.compare-cross { color: #94a3b8; font-size: 16px; }
.compare-val { font-family: 'Lexend', sans-serif; font-weight: 700; color: #0f172a; }
.compare-table tr:hover td { background: #f8fafc; }

/* ── BOTTOM CTA ────────────────────────────────────────────────── */
#starter-bottom-cta {
	background: linear-gradient(135deg, #0c00ff 0%, #030066 100%);
	padding: 80px 0; text-align: center;
}
.bottom-cta-title { font-family: 'Lexend', sans-serif; font-size: clamp(26px, 4vw, 42px); font-weight: 900; color: #fff; margin-bottom: 14px; }
.bottom-cta-sub { font-size: 17px; color: rgba(255,255,255,.8); margin-bottom: 36px; }

/* ── BREADCRUMB ────────────────────────────────────────────────── */
.sk-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 12.5px; color: rgba(255,255,255,.7); margin-bottom: 22px; flex-wrap: wrap; }
.sk-breadcrumb a { color: rgba(255,255,255,.85); text-decoration: none; }
.sk-breadcrumb a:hover { color: #fff; }
.sk-breadcrumb span { color: rgba(255,255,255,.4); }

/* ── RESPONSIVE ────────────────────────────────────────────────── */
@media (max-width: 900px) {
	.pkg-detail-grid { grid-template-columns: 1fr; }
	.pkg-cta-card { position: static; }
	.roi-grid { grid-template-columns: 1fr; }
	.join-steps { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 600px) {
	.hero-stats-bar { grid-template-columns: 1fr 1fr; }
	.hero-cta-row { flex-direction: column; }
	.btn-starter-primary, .btn-starter-secondary { justify-content: center; }
	.join-steps { grid-template-columns: 1fr; }
}
</style>

<main id="main-content" class="cm-main-content cm-starter-page">

	<!-- ═══════════════════════════════════════════════════ HERO -->
	<section id="starter-hero">
		<div class="ct-section-inner-wrap">

			<!-- Breadcrumb -->
			<div class="sk-breadcrumb">
				<a href="<?php echo esc_url( home_url('/') ); ?>">Beranda</a>
				<span>/</span>
				<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/') ); ?>">Kemitraan</a>
				<span>/</span>
				<span>Paket Starter</span>
			</div>

			<div class="hero-badge">
				Tipe Pemula / Depot Rumahan – Modal Terjangkau
			</div>

			<h1>Paket Starter<br><span>Rp 15.000.000,-</span><br>Mulai Depot Sabun Anda Hari Ini</h1>

			<p class="hero-lead">
				Paket kemitraan depot isi ulang sabun curah yang paling terjangkau. Cocok untuk pemula, wiraswasta rumahan, atau pelengkap usaha laundry & toko kelontong. Modal sekali seumur hidup, 100% laba milik Anda.
			</p>

			<div class="hero-price-display">
				<div class="hero-price-label">Harga Investasi Paket Starter</div>
				<div class="hero-price-main">Rp 15.000.000,-</div>
				<div class="hero-price-sub">Investasi satu kali · Tanpa royalti · Tanpa bagi hasil</div>
			</div>

			<div class="hero-cta-row">
				<a href="<?php echo esc_url( $wa_starter ); ?>" target="_blank" rel="noopener noreferrer" class="btn-starter-primary">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
					ORDER PAKET STARTER – Cek Area Anda
				</a>
				<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/') ); ?>" class="btn-starter-secondary">
					← Bandingkan Semua Paket
				</a>
			</div>
		</div>

		<!-- Stats Bar -->
		<div class="hero-stats-bar">
			<div class="hero-stat-item">
				<div class="hero-stat-num">8</div>
				<div class="hero-stat-label">Kontainer Produk</div>
			</div>
			<div class="hero-stat-item">
				<div class="hero-stat-num">Rp 6 Jt</div>
				<div class="hero-stat-label">Produk Awal Included</div>
			</div>
			<div class="hero-stat-item">
				<div class="hero-stat-num">2-4 Bln</div>
				<div class="hero-stat-label">Estimasi BEP</div>
			</div>
			<div class="hero-stat-item">
				<div class="hero-stat-num">0%</div>
				<div class="hero-stat-label">Royalti Fee</div>
			</div>
		</div>

		<!-- Wave Divider -->
		<svg class="starter-wave" viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0,40 C360,80 1080,0 1440,40 L1440,60 L0,60 Z" fill="#f8fafc"/>
		</svg>
	</section>

	<!-- ═══════════════════════════════════════════════════ DETAIL -->
	<section class="cm-sk-section bg-slate">
		<div class="cm-sk-container">
			<div class="cm-sk-eyebrow ey-blue">Spesifikasi Lengkap</div>
			<h2 class="cm-sk-title">Apa Saja yang Anda Dapatkan di Paket Starter?</h2>
			<p class="cm-sk-sub">Seluruh fasilitas berikut sudah termasuk dalam investasi Rp 15.000.000,- dan dikirimkan langsung ke alamat Anda.</p>

			<div class="pkg-detail-grid">
				<!-- Features List -->
				<div class="pkg-detail-left">

					<div class="pkg-feature-group">
						<div class="pkg-feature-group-title">🏪 Peralatan & Display Depot</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-blue">🗄</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Rak Depot 8 Kontainer Eksklusif</div>
								<div class="pkg-feat-desc">Rak besi powder-coat berdesain premium + 8 kontainer besar untuk 8 varian produk unggulan.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-green">📦</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Stok Produk Awal Rp 6.000.000</div>
								<div class="pkg-feat-desc">Deterjen curah, softener, sabun cuci piring, dan produk laundry kimia senilai Rp 6.000.000 siap jual hari-H.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-blue">⚙️</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Peralatan Produksi Standar</div>
								<div class="pkg-feat-desc">Pompa pengisian otomatis, jerigen, timbangan digital, dan kelengkapan operasional depot.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>
					</div>

					<div class="pkg-feature-group">
						<div class="pkg-feature-group-title">🎨 Branding & Desain</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-blue">🏷</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Lisensi Brand Cleanique Mart</div>
								<div class="pkg-feat-desc">Hak resmi menggunakan nama, logo, dan identitas brand Cleanique Mart di wilayah depot Anda.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-blue">🖥</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Desain 3D Interior Outlet</div>
								<div class="pkg-feat-desc">Render visualisasi 3D profesional agar tampilan depot terlihat menarik dan memikat calon pelanggan.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-blue">📢</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Media Promo Cetak (Brosur + Banner + Spanduk)</div>
								<div class="pkg-feat-desc">Desain dan cetak brosur, x-banner, dan spanduk promosi yang terpasang langsung di lokasi depot Anda.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-blue">📌</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Instalasi Media Promo di Lokasi</div>
								<div class="pkg-feat-desc">Tim kami langsung datang memasang seluruh media promo cetak di depot Anda saat grand opening.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>
					</div>

					<div class="pkg-feature-group">
						<div class="pkg-feature-group-title">🌐 Digital & Pengiriman</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-green">🌍</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Landing Page SEO-Friendly</div>
								<div class="pkg-feat-desc">Halaman web khusus depot cabang Anda yang terindeks Google, siap mendatangkan pembeli dari pencarian lokal.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-green">📍</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Listing & Optimasi Google Maps</div>
								<div class="pkg-feat-desc">Bisnis terdaftar resmi di Google Maps agar mudah ditemukan warga sekitar yang mencari produk kebersihan rumah.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-blue">🚚</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Biaya Pengiriman ke Lokasi Anda</div>
								<div class="pkg-feat-desc">Ongkos kirim seluruh peralatan dan produk awal sudah termasuk dalam harga paket ke seluruh Indonesia.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>
					</div>

					<div class="pkg-feature-group">
						<div class="pkg-feature-group-title">📚 Training & Support</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-amber">🎓</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Training Chemical & Manajemen Bisnis</div>
								<div class="pkg-feat-desc">Pelatihan intensif cara penanganan cairan kimia yang aman, pengisian produk higienis, dan manajemen kas/stok.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>

						<div class="pkg-feat-item">
							<div class="pkg-feat-icon icon-amber">💬</div>
							<div class="pkg-feat-text">
								<div class="pkg-feat-name">Pendampingan Sampai Grand Opening</div>
								<div class="pkg-feat-desc">Didampingi CS khusus kemitraan mulai dari survei lokasi, setup, hingga hari buka depot pertama kali.</div>
							</div>
							<div class="pkg-feat-value">✓ Included</div>
						</div>
					</div>

					<!-- Not included (upgrade to King) -->
					<div style="background:#fff5f5;border:1.5px dashed #fca5a5;border-radius:16px;padding:20px 24px;margin-top:8px;">
						<div style="font-size:12px;font-weight:700;color:#991b1b;text-transform:uppercase;margin-bottom:14px;">Tidak Termasuk di Paket Starter (Upgrade ke Paket King)</div>
						<?php
						$not_included = [
							'Peralatan Packing Lengkap',
							'Set-Up Toko Marketplace (Shopee & Tokopedia)',
							'Set-Up & Optimasi Akun Media Sosial',
							'Sistem Filter UV Sterilisasi Air Isi Ulang',
						];
						foreach ( $not_included as $item ) : ?>
							<div style="display:flex;align-items:center;gap:10px;padding:7px 0;border-bottom:1px solid #fee2e2;">
								<span style="color:#f87171;font-size:16px;">✗</span>
								<span style="font-size:13.5px;color:#7f1d1d;"><?php echo esc_html( $item ); ?></span>
							</div>
						<?php endforeach; ?>
						<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/paket-king/') ); ?>" style="display:inline-flex;align-items:center;gap:6px;margin-top:14px;background:#0f172a;color:#6ee7b7;padding:10px 20px;border-radius:999px;font-size:13px;font-weight:700;text-decoration:none;">
							Upgrade ke Paket King →
						</a>
					</div>
				</div>

				<!-- Sticky CTA Card -->
				<div>
					<div class="pkg-cta-card">
						<div class="pkg-cta-badge">Paket Starter</div>
						<div class="pkg-cta-name">Investasi Depot Sabun Curah</div>
						<div class="pkg-cta-price">Rp 15.000.000,-</div>
						<div class="pkg-cta-note">Satu kali · Tanpa royalti · Tanpa bagi hasil selamanya</div>

						<hr class="pkg-cta-divider">

						<?php
						$cta_features = [
							'Rak depot 8 kontainer eksklusif',
							'Stok awal produk Rp 6.000.000',
							'Desain 3D + media promo cetak',
							'Lisensi brand resmi',
							'Landing page + Google Maps',
							'Training sampai siap buka',
							'Pengiriman ke seluruh Indonesia',
						];
						foreach ( $cta_features as $cf ) : ?>
							<div class="pkg-cta-feature-row">
								<span class="pkg-cta-check">✓</span>
								<span class="pkg-cta-feat-text"><?php echo esc_html( $cf ); ?></span>
							</div>
						<?php endforeach; ?>

						<a href="<?php echo esc_url( $wa_starter ); ?>" target="_blank" rel="noopener noreferrer" class="pkg-cta-btn">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
							ORDER PAKET STARTER SEKARANG
						</a>
						<a href="<?php echo esc_url( $wa_general ); ?>" target="_blank" rel="noopener noreferrer" class="pkg-cta-btn-outline">
							Konsultasi Gratis Dulu →
						</a>

						<div class="pkg-cta-guarantee">
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
							Tersertifikasi PKRT Kemenkes RI & Halal MUI
						</div>

						<hr class="pkg-cta-divider">
						<div style="text-align:center;font-size:12px;color:rgba(255,255,255,.5);">Atau lihat pilihan lebih lengkap:</div>
						<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/paket-king/') ); ?>" style="display:flex;align-items:center;justify-content:center;gap:6px;margin-top:10px;background:rgba(110,231,183,.1);color:#6ee7b7;padding:11px;border-radius:12px;font-size:13px;font-weight:700;text-decoration:none;border:1px solid rgba(110,231,183,.3);">
							👑 Lihat Paket King – Rp 27.500.000
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════════════ ROI SIMULATOR -->
	<section class="cm-sk-section bg-white">
		<div class="cm-sk-container">
			<div class="cm-sk-eyebrow ey-green">Simulasi Keuntungan</div>
			<h2 class="cm-sk-title">Kalkulator ROI Paket Starter</h2>
			<p class="cm-sk-sub">Estimasikan penghasilan bulanan dan estimasi balik modal berdasarkan target penjualan harian Anda.</p>

			<div class="roi-grid">
				<div class="roi-input-card">
					<div style="margin-bottom:22px;">
						<label class="roi-label" for="roi-daily-liters">Target Liter Terjual per Hari</label>
						<input type="range" id="roi-daily-liters" class="roi-range" min="5" max="80" value="25" oninput="updateROI()">
						<div style="display:flex;justify-content:space-between;font-size:12px;color:#94a3b8;margin-top:4px;">
							<span>5 liter</span>
							<span id="roi-daily-display" style="font-weight:700;color:#1e40af;">25 liter</span>
							<span>80 liter</span>
						</div>
					</div>
					<div style="margin-bottom:22px;">
						<label class="roi-label" for="roi-price-per-liter">Harga Jual per Liter (Rp)</label>
						<input type="number" id="roi-price-per-liter" class="roi-input" value="15000" min="8000" max="25000" step="500" oninput="updateROI()">
					</div>
					<div style="margin-bottom:22px;">
						<label class="roi-label" for="roi-margin">Margin Keuntungan (%)</label>
						<input type="range" id="roi-margin" class="roi-range" min="20" max="60" value="35" oninput="updateROI()">
						<div style="display:flex;justify-content:space-between;font-size:12px;color:#94a3b8;margin-top:4px;">
							<span>20%</span>
							<span id="roi-margin-display" style="font-weight:700;color:#1e40af;">35%</span>
							<span>60%</span>
						</div>
					</div>
					<div style="background:#f8fafc;border-radius:12px;padding:16px;font-size:13px;color:#475569;line-height:1.6;">
						💡 <strong>Tips:</strong> Margin 30-40% sudah sangat kompetitif vs produk kemasan pabrik yang dijual toko sebelah. Dengan isi ulang, konsumen hemat 40-60%.
					</div>
				</div>

				<div class="roi-result-card">
					<div style="margin-bottom:20px;">
						<div class="roi-result-label">Omzet Harian</div>
						<div class="roi-result-value" id="roi-daily-revenue">Rp 375.000</div>
						<div class="roi-result-sub">dari penjualan 25 liter/hari</div>
					</div>
					<div style="border-top:1px solid rgba(255,255,255,.15);padding-top:20px;margin-bottom:20px;">
						<div class="roi-result-label">Laba Bersih per Bulan</div>
						<div class="roi-result-value" id="roi-monthly-profit" style="font-size:36px;">Rp 3.937.500</div>
						<div class="roi-result-sub">laba bersih setelah HPP produk</div>
					</div>
					<div style="border-top:1px solid rgba(255,255,255,.15);padding-top:20px;margin-bottom:20px;">
						<div class="roi-result-label">Estimasi Break-Even Point</div>
						<div class="roi-result-value" id="roi-bep" style="font-size:28px; color:#fbbf24;">± 4 Bulan</div>
						<div class="roi-result-sub">modal kembali penuh</div>
					</div>
					<div style="border-top:1px solid rgba(255,255,255,.15);padding-top:18px;">
						<div class="roi-result-label">Laba 1 Tahun (Proyeksi)</div>
						<div class="roi-result-value" id="roi-yearly" style="color:#a7f3d0;">Rp 47.250.000</div>
						<div class="roi-result-sub">setelah modal kembali</div>
					</div>
				</div>
			</div>

			<div style="text-align:center;margin-top:16px;font-size:12.5px;color:#94a3b8;">
				* Simulasi bersifat ilustratif berdasarkan rata-rata performa mitra aktif Cleanique Mart. Hasil aktual dapat berbeda tergantung lokasi, volume penjualan, dan kondisi pasar setempat.
			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════════════ HOW TO JOIN -->
	<section class="cm-sk-section bg-slate">
		<div class="cm-sk-container">
			<div class="cm-sk-eyebrow ey-blue">Alur Bergabung</div>
			<h2 class="cm-sk-title">4 Langkah Mudah Buka Depot Starter</h2>
			<p class="cm-sk-sub">Dari konsultasi hingga siap buka depot dalam waktu 2-3 minggu kerja.</p>

			<div class="join-steps">
				<div class="join-step-card">
					<div class="join-step-num">1</div>
					<div class="join-step-icon">💬</div>
					<div class="join-step-title">Konsultasi Wilayah</div>
					<div class="join-step-desc">Hubungi CS kami via WhatsApp. Kami cek ketersediaan area proteksi eksklusif di kota Anda.</div>
					<div class="join-step-connector">›</div>
				</div>
				<div class="join-step-card">
					<div class="join-step-num">2</div>
					<div class="join-step-icon">📝</div>
					<div class="join-step-title">Tanda Tangan MoU & DP</div>
					<div class="join-step-desc">Tanda tangan perjanjian kemitraan resmi dan pembayaran DP 50% untuk proses produksi paket.</div>
					<div class="join-step-connector">›</div>
				</div>
				<div class="join-step-card">
					<div class="join-step-num">3</div>
					<div class="join-step-icon">🚚</div>
					<div class="join-step-title">Pengiriman & Instalasi</div>
					<div class="join-step-desc">Seluruh rak, produk, peralatan, dan media promo dikirim dan dipasang oleh tim Cleanique Mart.</div>
					<div class="join-step-connector">›</div>
				</div>
				<div class="join-step-card">
					<div class="join-step-num">4</div>
					<div class="join-step-icon">🎉</div>
					<div class="join-step-title">Training & Grand Opening</div>
					<div class="join-step-desc">Training intensif produk + kasir, kemudian depot resmi dibuka. Anda siap mulai menghasilkan!</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════════════ COMPARISON TABLE -->
	<section class="cm-sk-section bg-white">
		<div class="cm-sk-container">
			<div class="cm-sk-eyebrow ey-amber">Perbandingan Paket</div>
			<h2 class="cm-sk-title">Starter vs King – Pilih yang Tepat untuk Anda</h2>
			<p class="cm-sk-sub">Paket Starter adalah pilihan terbaik untuk memulai. Upgrade ke King kapan saja untuk fasilitas yang lebih lengkap.</p>

			<table class="compare-table">
				<thead>
					<tr>
						<th>Fasilitas</th>
						<th class="col-starter" style="text-align:center;">STARTER<br><span style="font-size:11px;font-weight:400;opacity:.8;">Rp 15.000.000</span></th>
						<th class="col-king" style="text-align:center;">👑 KING<br><span style="font-size:11px;font-weight:400;opacity:.8;">Rp 27.500.000</span></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$compare_rows = [
						['Rak Depot 8 Kontainer', '✓', '✓ Eksklusif'],
						['Stok Produk Awal', 'Rp 6.000.000', 'Rp 8.000.000'],
						['Desain 3D Interior', '✓', '✓'],
						['Lisensi Brand Cleanique Mart', '✓', '✓'],
						['Peralatan Produksi', '✓ Standar', '✓ Lengkap'],
						['Peralatan Packing', '✗', '✓ Lengkap'],
						['Media Promo Cetak', '✓', '✓ Lebih Lengkap'],
						['Instalasi di Lokasi', '✓', '✓'],
						['Training Chemical & Bisnis', '✓', '✓'],
						['Landing Page SEO', '✓', '✓ Premium'],
						['Google Maps Listing', '✓', '✓'],
						['Set-Up Marketplace (Shopee/Tokopedia)', '✗', '✓'],
						['Set-Up & Optimasi Sosial Media', '✗', '✓'],
						['Sistem Filter UV Sterilisasi', '✗', '✓'],
						['Biaya Kirim ke Lokasi', '✓', '✓'],
						['Estimasi BEP', '2-4 Bulan', '2-4 Bulan'],
						['Royalti / Bagi Hasil', '0%', '0%'],
					];
					foreach ( $compare_rows as $row ) : ?>
						<tr>
							<td class="col-feature"><?php echo esc_html( $row[0] ); ?></td>
							<td class="col-starter" style="text-align:center;">
								<?php if ( $row[1] === '✓' || strpos($row[1],'✓') !== false ) : ?>
									<span class="compare-tick"><?php echo esc_html( $row[1] ); ?></span>
								<?php elseif ( $row[1] === '✗' ) : ?>
									<span class="compare-cross">✗</span>
								<?php else : ?>
									<span class="compare-val"><?php echo esc_html( $row[1] ); ?></span>
								<?php endif; ?>
							</td>
							<td class="col-king" style="text-align:center;">
								<?php if ( $row[2] === '✓' || strpos($row[2],'✓') !== false ) : ?>
									<span class="compare-tick" style="color:#059669;"><?php echo esc_html( $row[2] ); ?></span>
								<?php elseif ( $row[2] === '✗' ) : ?>
									<span class="compare-cross">✗</span>
								<?php else : ?>
									<span class="compare-val"><?php echo esc_html( $row[2] ); ?></span>
								<?php endif; ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<div style="display:flex;gap:14px;justify-content:center;margin-top:36px;flex-wrap:wrap;">
				<a href="<?php echo esc_url( $wa_starter ); ?>" target="_blank" rel="noopener noreferrer" class="btn-starter-primary" style="background:#1e40af;">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
					Pilih Paket Starter – Rp 15 Juta
				</a>
				<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/paket-king/') ); ?>" class="btn-starter-primary" style="background:#059669;">
					👑 Lihat Paket King – Rp 27,5 Juta
				</a>
			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════════════ BOTTOM CTA -->
	<section id="starter-bottom-cta">
		<div class="cm-sk-container">
			<div style="display:inline-block;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);color:#fff;font-size:11px;font-weight:700;padding:6px 14px;border-radius:999px;text-transform:uppercase;letter-spacing:.06em;margin-bottom:20px;">
				🔥 Slot Terbatas Per Wilayah
			</div>
			<div class="bottom-cta-title">Siap Buka Depot Sabun Curah Anda?</div>
			<p class="bottom-cta-sub">Bergabung dengan 12+ mitra aktif Cleanique Mart di seluruh Indonesia.<br>Investasi Rp 15 Juta, proteksi wilayah eksklusif, laba 100% milik Anda.</p>

			<div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
				<a href="<?php echo esc_url( $wa_starter ); ?>" target="_blank" rel="noopener noreferrer" class="btn-starter-primary" style="font-size:17px;padding:18px 36px;">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
					ORDER PAKET STARTER SEKARANG
				</a>
				<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/') ); ?>" class="btn-starter-secondary" style="font-size:15px;padding:18px 28px;">
					← Kembali ke Halaman Kemitraan
				</a>
			</div>
		</div>
	</section>

</main>

<script>
function updateROI() {
	const liters   = parseInt(document.getElementById('roi-daily-liters').value);
	const price    = parseInt(document.getElementById('roi-price-per-liter').value) || 15000;
	const marginPc = parseInt(document.getElementById('roi-margin').value);

	document.getElementById('roi-daily-display').textContent   = liters + ' liter';
	document.getElementById('roi-margin-display').textContent  = marginPc + '%';

	const dailyRevenue   = liters * price;
	const dailyProfit    = dailyRevenue * (marginPc / 100);
	const monthlyProfit  = dailyProfit * 30;
	const bepMonths      = Math.ceil(15000000 / monthlyProfit);
	const yearlyProfit   = monthlyProfit * (12 - Math.min(bepMonths, 12));

	const fmt = n => 'Rp ' + Math.round(n).toLocaleString('id-ID');

	document.getElementById('roi-daily-revenue').textContent   = fmt(dailyRevenue);
	document.getElementById('roi-monthly-profit').textContent  = fmt(monthlyProfit);
	document.getElementById('roi-bep').textContent             = '± ' + bepMonths + ' Bulan';
	document.getElementById('roi-yearly').textContent          = fmt(yearlyProfit > 0 ? yearlyProfit : monthlyProfit * 12);
}
updateROI();
</script>

<?php get_footer(); ?>
