<?php
/**
 * Template Name: Single Kemitraan – Paket King
 *
 * Halaman detail mandiri untuk Paket King (Best Seller) kemitraan Cleanique Mart.
 * Berisi: Hero premium, spesifikasi lengkap 15 fasilitas, ROI simulator, perbandingan, alur, CTA.
 *
 * @package CleaniqueMart
 */

get_header();

$theme_uri = get_template_directory_uri();
$img_dir   = $theme_uri . '/assets/images/';
$wa_king    = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya tertarik dengan *PROMO PAKET KING* Cleanique Mart senilai Rp 27.500.000 (Hemat Rp 2.5 Juta). Mohon informasi dan cek ketersediaan area.' );
$wa_general = cleaniquemart_get_wa_url( 'Halo *cleaniquemart.com* Saya mau bertanya tentang kemitraan Cleanique Mart.' );
?>

<style>
/* ── PAGE TOKENS ───────────────────────────────────────────────── */
.cm-king-page {}

/* ── HERO (Gold / Premium) ─────────────────────────────────────── */
#king-hero {
	background: radial-gradient(ellipse 130% 90% at 50% -15%, #065f46 0%, #064e3b 40%, #022c22 100%);
	padding: 90px 0 0;
	position: relative;
	overflow: hidden;
}
#king-hero::before {
	content: '';
	position: absolute; inset: 0;
	background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
#king-hero .ct-section-inner-wrap { max-width: 1200px; margin: 0 auto; padding: 0 24px; position: relative; }

/* Ribbon badge */
.king-ribbon-badge {
	display: inline-flex; align-items: center; justify-content: center;
	background: rgba(255, 255, 255, 0.18); border: 1px solid rgba(255, 255, 255, 0.35);
	color: #ffffff; font-size: 12px; font-weight: 800; padding: 7px 20px;
	border-radius: 999px; text-transform: uppercase; letter-spacing: .07em; margin-bottom: 22px;
	backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);
	box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
}
.king-hero-badge {
	display: inline-flex; align-items: center; justify-content: center;
	background: rgba(255,255,255,.15); border: 1px solid rgba(255,255,255,.3);
	color: #6ee7b7; font-size: 11px; font-weight: 700; padding: 6px 15px;
	border-radius: 999px; text-transform: uppercase; letter-spacing: .06em; margin-left: 10px;
	backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);
}
#king-hero h1 {
	font-family: 'Lexend', sans-serif; font-size: clamp(34px, 5.5vw, 60px);
	font-weight: 900; color: #fff; line-height: 1.12; margin: 0 0 18px;
}
#king-hero h1 .gold-text { color: #fbbf24; }
#king-hero h1 .green-text { color: #6ee7b7; }
#king-hero .hero-lead { font-size: 18px; color: rgba(255,255,255,.82); line-height: 1.75; max-width: 680px; margin: 0 0 32px; }

/* Price Display */
.king-price-display {
	background: rgba(255,255,255,.07); border: 1px solid rgba(251,191,36,.3);
	border-radius: 20px; padding: 28px 36px; display: inline-block; margin-bottom: 36px;
}
.king-price-strike { font-size: 18px; color: rgba(255,255,255,.45); text-decoration: line-through; margin-bottom: 4px; }
.king-price-main { font-family: 'Lexend', sans-serif; font-size: clamp(38px, 5vw, 56px); font-weight: 900; color: #fbbf24; line-height: 1; }
.king-price-save { display: inline-block; background: #d97706; color: #fff; font-size: 12px; font-weight: 800; padding: 4px 12px; border-radius: 999px; margin: 8px 0 4px; }
.king-price-sub { font-size: 12.5px; color: rgba(255,255,255,.6); }

.hero-cta-row { display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 60px; }
.btn-king-primary {
	display: inline-flex; align-items: center; gap: 10px;
	background: linear-gradient(135deg, #d97706, #fbbf24);
	color: #78350f; padding: 16px 34px; border-radius: 999px;
	font-family: 'Lexend', sans-serif; font-size: 15px; font-weight: 800;
	text-decoration: none; transition: all .25s; box-shadow: 0 6px 24px rgba(217,119,6,.4);
}
.btn-king-primary:hover { transform: translateY(-2px); box-shadow: 0 10px 32px rgba(217,119,6,.5); }
.btn-king-secondary {
	display: inline-flex; align-items: center; gap: 8px;
	background: rgba(255,255,255,.1); color: #fff; padding: 16px 28px; border-radius: 999px;
	font-family: 'Lexend', sans-serif; font-size: 14px; font-weight: 600;
	text-decoration: none; border: 1px solid rgba(255,255,255,.3); transition: all .25s;
}
.btn-king-secondary:hover { background: rgba(255,255,255,.18); }

/* Hero stats */
.king-stats-bar {
	display: grid; grid-template-columns: repeat(5, 1fr);
	background: rgba(255,255,255,.05); border-top: 1px solid rgba(255,255,255,.1);
}
.king-stat-item { padding: 20px 16px; text-align: center; border-right: 1px solid rgba(255,255,255,.08); }
.king-stat-item:last-child { border-right: none; }
.king-stat-num { font-family: 'Lexend', sans-serif; font-size: 22px; font-weight: 900; color: #fbbf24; }
.king-stat-label { font-size: 10.5px; color: rgba(255,255,255,.55); margin-top: 4px; text-transform: uppercase; letter-spacing: .04em; }

/* Wave */
.king-wave { display: block; width: 100%; height: 60px; color: #f8fafc; margin-bottom: -2px; }

/* ── BASE STRUCTURE ────────────────────────────────────────────── */
.cm-kk-section { padding: 80px 0; }
.cm-kk-section.bg-white { background: #fff; }
.cm-kk-section.bg-slate { background: #f8fafc; }
.cm-kk-section.bg-green-dark { background: linear-gradient(145deg, #064e3b, #065f46); }
.cm-kk-container { max-width: 1160px; margin: 0 auto; padding: 0 24px; }
.cm-kk-eyebrow { display: inline-block; padding: 5px 14px; border-radius: 999px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .07em; margin-bottom: 16px; }
.ey-gold { background: #fef3c7; color: #92400e; }
.ey-green { background: #d1fae5; color: #065f46; }
.ey-blue { background: #dbeafe; color: #1e40af; }
.cm-kk-title { font-family: 'Lexend', sans-serif; font-size: clamp(26px, 3.5vw, 38px); font-weight: 800; color: #0f172a; line-height: 1.25; margin: 0 0 12px; }
.cm-kk-title.light { color: #fff; }
.cm-kk-sub { font-size: 16px; color: #475569; line-height: 1.75; max-width: 640px; }
.cm-kk-sub.light { color: rgba(255,255,255,.75); }

/* ── FEATURES GRID ─────────────────────────────────────────────── */
.king-detail-grid { display: grid; grid-template-columns: 1fr 360px; gap: 40px; margin-top: 50px; }

/* Feature cards */
.king-feat-categories { display: flex; flex-direction: column; gap: 28px; }
.king-feat-group { background: #fff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 28px; box-shadow: 0 4px 18px rgba(0,0,0,.04); }
.king-feat-group-header { display: flex; align-items: center; gap: 10px; margin-bottom: 20px; padding-bottom: 14px; border-bottom: 2px solid #f1f5f9; }
.king-feat-group-icon { font-size: 22px; }
.king-feat-group-title { font-family: 'Lexend', sans-serif; font-size: 16px; font-weight: 800; color: #0f172a; }
.king-feat-group-count { margin-left: auto; font-size: 12px; font-weight: 700; color: #059669; background: #d1fae5; padding: 3px 10px; border-radius: 999px; }

.king-feat-item { display: flex; gap: 14px; align-items: flex-start; padding: 12px 0; border-bottom: 1px solid #f8fafc; }
.king-feat-item:last-child { border-bottom: none; padding-bottom: 0; }
.king-feat-icon-wrap {
	width: 32px; height: 32px; border-radius: 10px; display: flex; align-items: center;
	justify-content: center; flex-shrink: 0; font-size: 14px;
}
.kfi-gold { background: #fef3c7; color: #d97706; }
.kfi-green { background: #d1fae5; color: #059669; }
.kfi-blue { background: #dbeafe; color: #1e40af; }
.king-feat-info { flex: 1; }
.king-feat-title { font-family: 'Lexend', sans-serif; font-size: 14.5px; font-weight: 700; color: #0f172a; margin-bottom: 3px; }
.king-feat-desc { font-size: 12.5px; color: #64748b; line-height: 1.55; }
.king-feat-badge { font-size: 11px; font-weight: 800; padding: 3px 10px; border-radius: 999px; white-space: nowrap; flex-shrink: 0; }
.badge-gold { background: #fef3c7; color: #92400e; }
.badge-excl { background: #d1fae5; color: #065f46; }

/* EXTRA (only King) highlight */
.king-feat-item.is-exclusive .king-feat-title::after {
	content: ' 👑';
}
.king-feat-item.is-exclusive {
	background: linear-gradient(135deg, #fefce8, #fffbeb);
	margin: 0 -12px;
	padding: 12px;
	border-radius: 12px;
	border-bottom: none !important;
}

/* Sticky CTA card */
.king-cta-card {
	background: linear-gradient(160deg, #065f46 0%, #022c22 100%);
	border: 2px solid rgba(251,191,36,.3);
	border-radius: 24px; padding: 36px 28px;
	position: sticky; top: 100px;
	box-shadow: 0 16px 50px rgba(6,95,70,.35);
}
.king-cta-ribbon {
	display: block; text-align: center; background: linear-gradient(135deg,#d97706,#fbbf24);
	color: #78350f; font-size: 11px; font-weight: 800; padding: 8px;
	border-radius: 10px; text-transform: uppercase; letter-spacing: .07em; margin-bottom: 22px;
}
.king-cta-pkg { font-size: 12px; color: rgba(255,255,255,.55); text-transform: uppercase; letter-spacing: .06em; margin-bottom: 6px; }
.king-cta-name { font-family: 'Lexend', sans-serif; font-size: 20px; font-weight: 900; color: #fff; margin-bottom: 2px; }
.king-cta-strike { font-size: 15px; color: rgba(255,255,255,.4); text-decoration: line-through; margin-bottom: 4px; }
.king-cta-price { font-family: 'Lexend', sans-serif; font-size: 36px; font-weight: 900; color: #fbbf24; }
.king-cta-savings { display: inline-block; background: #059669; color: #fff; font-size: 11px; font-weight: 700; padding: 3px 10px; border-radius: 999px; margin: 8px 0 4px; }
.king-cta-note { font-size: 12px; color: rgba(255,255,255,.55); margin-bottom: 22px; }
.king-cta-divider { border: none; border-top: 1px solid rgba(255,255,255,.12); margin: 18px 0; }
.king-cta-feat-row { display: flex; align-items: center; gap: 10px; padding: 7px 0; }
.king-cta-check { color: #fbbf24; font-size: 15px; font-weight: 900; }
.king-cta-feat-text { font-size: 13px; color: rgba(255,255,255,.85); }
.king-cta-btn {
	display: flex; align-items: center; justify-content: center; gap: 10px;
	background: linear-gradient(135deg, #d97706, #fbbf24);
	color: #78350f; padding: 15px; border-radius: 999px;
	font-family: 'Lexend', sans-serif; font-size: 15px; font-weight: 800;
	text-decoration: none; margin-top: 22px;
	box-shadow: 0 6px 20px rgba(217,119,6,.4); transition: all .25s;
}
.king-cta-btn:hover { transform: translateY(-2px); box-shadow: 0 10px 30px rgba(217,119,6,.5); }
.king-cta-secondary {
	display: flex; align-items: center; justify-content: center; gap: 8px;
	background: transparent; color: #fff; padding: 12px; border-radius: 999px;
	font-family: 'Lexend', sans-serif; font-size: 13.5px; font-weight: 600;
	text-decoration: none; border: 1px solid rgba(255,255,255,.3); margin-top: 10px;
	transition: all .25s;
}
.king-cta-secondary:hover { background: rgba(255,255,255,.08); }
.king-cta-guarantee { display: flex; align-items: center; gap: 8px; margin-top: 16px; font-size: 11px; color: rgba(255,255,255,.5); }

/* ── ROI SIMULATOR ─────────────────────────────────────────────── */
.roi-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 28px; margin-top: 48px; }
.roi-input-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 32px; box-shadow: 0 4px 20px rgba(0,0,0,.05); }
.roi-result-card { background: linear-gradient(145deg, #065f46, #022c22); border-radius: 20px; padding: 32px; box-shadow: 0 8px 30px rgba(6,95,70,.3); border: 1px solid rgba(251,191,36,.2); }
.roi-label { font-size: 13px; font-weight: 700; color: #475569; margin-bottom: 8px; display: block; }
.roi-input { width: 100%; border: 1.5px solid #e2e8f0; border-radius: 10px; padding: 12px 14px; font-size: 15px; color: #0f172a; outline: none; transition: border-color .2s; box-sizing: border-box; }
.roi-input:focus { border-color: #059669; }
.roi-range { width: 100%; margin: 8px 0 0; accent-color: #059669; }
.roi-result-label { font-size: 11px; font-weight: 700; color: rgba(255,255,255,.55); text-transform: uppercase; letter-spacing: .06em; margin-bottom: 6px; }
.roi-result-value { font-family: 'Lexend', sans-serif; font-size: 30px; font-weight: 900; color: #6ee7b7; }
.roi-result-sub { font-size: 12px; color: rgba(255,255,255,.45); margin-bottom: 18px; }

/* ── JOIN STEPS ────────────────────────────────────────────────── */
.join-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-top: 48px; }
.join-step-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 28px 22px; text-align: center; position: relative; box-shadow: 0 4px 16px rgba(0,0,0,.04); }
.join-step-num { width: 48px; height: 48px; border-radius: 14px; background: linear-gradient(135deg, #d97706, #fbbf24); color: #78350f; display: flex; align-items: center; justify-content: center; font-family: 'Lexend', sans-serif; font-size: 20px; font-weight: 900; margin: 0 auto 18px; }
.join-step-icon { font-size: 28px; margin-bottom: 12px; }
.join-step-title { font-family: 'Lexend', sans-serif; font-size: 15px; font-weight: 800; color: #0f172a; margin-bottom: 8px; }
.join-step-desc { font-size: 13px; color: #64748b; line-height: 1.6; }

/* ── SOCIAL PROOF STRIP ────────────────────────────────────────── */
.social-proof-strip { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 48px; }
.sp-card { background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.12); border-radius: 16px; padding: 24px; }
.sp-quote { font-size: 14.5px; color: rgba(255,255,255,.85); line-height: 1.7; margin-bottom: 16px; font-style: italic; }
.sp-author { display: flex; align-items: center; gap: 12px; }
.sp-avatar { width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #d97706, #fbbf24); display: flex; align-items: center; justify-content: center; font-family: 'Lexend', sans-serif; font-size: 16px; font-weight: 900; color: #78350f; }
.sp-name { font-family: 'Lexend', sans-serif; font-size: 13.5px; font-weight: 700; color: #fff; }
.sp-city { font-size: 11.5px; color: rgba(255,255,255,.5); }
.sp-stars { color: #fbbf24; font-size: 13px; margin-bottom: 2px; }

/* ── BOTTOM CTA ────────────────────────────────────────────────── */
#king-bottom-cta {
	background: linear-gradient(135deg, #022c22 0%, #065f46 50%, #d97706 200%);
	padding: 90px 0;
	text-align: center;
	position: relative;
	overflow: hidden;
}
#king-bottom-cta::before {
	content: '👑'; font-size: 200px; position: absolute;
	right: -40px; top: -40px; opacity: .05;
}
.king-bottom-title { font-family: 'Lexend', sans-serif; font-size: clamp(26px, 4.5vw, 48px); font-weight: 900; color: #fff; margin-bottom: 14px; }
.king-bottom-sub { font-size: 17px; color: rgba(255,255,255,.75); margin-bottom: 16px; }
.king-bottom-savings { display: inline-block; background: linear-gradient(135deg, #d97706, #fbbf24); color: #78350f; font-size: 14px; font-weight: 800; padding: 8px 20px; border-radius: 999px; margin-bottom: 36px; }

/* ── COMPARE TABLE ─────────────────────────────────────────────── */
.compare-table { width: 100%; border-collapse: collapse; margin-top: 48px; background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,.06); }
.compare-table th, .compare-table td { padding: 13px 18px; font-size: 13.5px; text-align: left; border-bottom: 1px solid #f1f5f9; }
.compare-table th { background: #0f172a; color: #fff; font-family: 'Lexend', sans-serif; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; }
.compare-table th.col-starter { background: #1e40af; }
.compare-table th.col-king { background: linear-gradient(135deg, #065f46, #059669); }
.compare-table td.col-feature { color: #475569; font-weight: 600; }
.compare-tick { color: #059669; font-size: 17px; font-weight: 900; }
.compare-tick.gold { color: #d97706; }
.compare-cross { color: #94a3b8; }
.compare-val { font-family: 'Lexend', sans-serif; font-weight: 700; color: #0f172a; }
.compare-table tr:hover td { background: #f8fafc; }
.king-row td { background: #fefce8 !important; }

/* ── BREADCRUMB ────────────────────────────────────────────────── */
.sk-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 12.5px; color: rgba(255,255,255,.65); margin-bottom: 22px; flex-wrap: wrap; }
.sk-breadcrumb a { color: rgba(255,255,255,.8); text-decoration: none; }
.sk-breadcrumb span { color: rgba(255,255,255,.35); }

/* ── RESPONSIVE ────────────────────────────────────────────────── */
@media (max-width: 1024px) {
	.king-detail-grid { grid-template-columns: 1fr; }
	.king-cta-card { position: static; }
}
@media (max-width: 768px) {
	.king-stats-bar { grid-template-columns: repeat(3, 1fr); }
	.roi-grid { grid-template-columns: 1fr; }
	.join-steps { grid-template-columns: 1fr 1fr; }
	.social-proof-strip { grid-template-columns: 1fr; }
}
@media (max-width: 500px) {
	.king-stats-bar { grid-template-columns: 1fr 1fr; }
	.join-steps { grid-template-columns: 1fr; }
	.hero-cta-row { flex-direction: column; }
	.btn-king-primary, .btn-king-secondary { justify-content: center; }
}
</style>

<main id="main-content" class="cm-main-content cm-king-page">

	<!-- ═══════════════════════════════════════════════════ HERO -->
	<section id="king-hero">
		<div class="ct-section-inner-wrap">

			<!-- Breadcrumb -->
			<div class="sk-breadcrumb">
				<a href="<?php echo esc_url( home_url('/') ); ?>">Beranda</a>
				<span>/</span>
				<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/') ); ?>">Kemitraan</a>
				<span>/</span>
				<span>Paket King</span>
			</div>

			<!-- Ribbon & Badge -->
			<div style="margin-bottom:22px;">
				<span class="king-ribbon-badge">
					HANYA UNTUK 10 ORANG PERTAMA – PALING LENGKAP · BEST SELLER
				</span>
				<span class="king-hero-badge">Hemat Rp 2.500.000</span>
			</div>

			<h1>Paket <span class="gold-text">KING</span><br><span class="green-text">Rp 27.500.000,-</span><br>Fasilitas Terlengkap, Siap Buka Langsung</h1>

			<p class="hero-lead">
				Paket kemitraan paling lengkap dengan 15+ fasilitas eksklusif. Termasuk filter UV higienis, marketplace setup, optimasi sosmed, dan packing profesional. Paling hemat karena semua sudah ada – tidak perlu beli sendiri.
			</p>

			<div class="king-price-display">
				<div class="king-price-strike">Rp 30.000.000,-</div>
				<div class="king-price-main">Rp 27.500.000,-</div>
				<div class="king-price-save">🔥 Hemat Rp 2.500.000</div>
				<div class="king-price-sub">Investasi satu kali · Tanpa royalti · 100% laba milik Anda</div>
			</div>

			<div class="hero-cta-row">
				<a href="<?php echo esc_url( $wa_king ); ?>" target="_blank" rel="noopener noreferrer" class="btn-king-primary">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
					ORDER PROMO PAKET KING SEKARANG
				</a>
				<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/') ); ?>" class="btn-king-secondary">
					← Bandingkan Semua Paket
				</a>
			</div>
		</div>

		<!-- Stats Bar -->
		<div class="king-stats-bar">
			<div class="king-stat-item">
				<div class="king-stat-num">8</div>
				<div class="king-stat-label">Kontainer Eksklusif</div>
			</div>
			<div class="king-stat-item">
				<div class="king-stat-num">Rp 8 Jt</div>
				<div class="king-stat-label">Stok Awal Lebih Banyak</div>
			</div>
			<div class="king-stat-item">
				<div class="king-stat-num">15+</div>
				<div class="king-stat-label">Fasilitas Lengkap</div>
			</div>
			<div class="king-stat-item">
				<div class="king-stat-num">2-4 Bln</div>
				<div class="king-stat-label">Estimasi BEP</div>
			</div>
			<div class="king-stat-item">
				<div class="king-stat-num">0%</div>
				<div class="king-stat-label">Royalti Fee</div>
			</div>
		</div>

		<!-- Wave -->
		<svg class="king-wave" viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0,40 C360,80 1080,0 1440,40 L1440,60 L0,60 Z" fill="#f8fafc"/>
		</svg>
	</section>

	<!-- ═══════════════════════════════════════════════════ DETAIL -->
	<section class="cm-kk-section bg-slate">
		<div class="cm-kk-container">
			<div class="cm-kk-eyebrow ey-gold">Spesifikasi Lengkap – 15 Fasilitas</div>
			<h2 class="cm-kk-title">Semua yang Anda Dapatkan di Paket King 👑</h2>
			<p class="cm-kk-sub">Investasi Rp 27.500.000 sudah mencakup semua fasilitas yang dibutuhkan depot sabun curah profesional – dari offline hingga digital marketing.</p>

			<div class="king-detail-grid">
				<div class="king-feat-categories">

					<!-- Group: Peralatan Depot -->
					<div class="king-feat-group">
						<div class="king-feat-group-header">
							<div class="king-feat-group-icon">🏪</div>
							<div class="king-feat-group-title">Peralatan & Display Depot</div>
							<div class="king-feat-group-count">4 Fasilitas</div>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-gold">🗄</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Rak Depot 8 Kontainer Eksklusif</div>
								<div class="king-feat-desc">Rak besi premium finishing powder-coat + 8 kontainer besar display 8 varian produk unggulan Cleanique Mart.</div>
							</div>
							<span class="king-feat-badge badge-gold">✓ Eksklusif</span>
						</div>

						<div class="king-feat-item is-exclusive">
							<div class="king-feat-icon-wrap kfi-gold">🧴</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Stok Produk Awal Rp 8.000.000</div>
								<div class="king-feat-desc">Lebih banyak dari Starter (Rp 6 Jt). Produk deterjen, softener, sabun cuci piring, dan kimia laundry senilai Rp 8 Juta siap jual hari-H.</div>
							</div>
							<span class="king-feat-badge badge-gold">King Only</span>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-green">⚙️</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Peralatan Produksi Lengkap</div>
								<div class="king-feat-desc">Pompa pengisian otomatis, jerigen, timbangan digital, tangki stok, dan semua alat operasional depot lengkap.</div>
							</div>
							<span class="king-feat-badge badge-excl">✓ Lengkap</span>
						</div>

						<div class="king-feat-item is-exclusive">
							<div class="king-feat-icon-wrap kfi-gold">🌊</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Sistem Filter UV Sterilisasi Air</div>
								<div class="king-feat-desc">Teknologi sterilisasi UV higienis untuk produk isi ulang air minum. Nilai tambah premium yang menjadikan depot Anda lebih terpercaya di mata konsumen.</div>
							</div>
							<span class="king-feat-badge badge-gold">King Only 👑</span>
						</div>
					</div>

					<!-- Group: Packing & Logistik -->
					<div class="king-feat-group">
						<div class="king-feat-group-header">
							<div class="king-feat-group-icon">📦</div>
							<div class="king-feat-group-title">Packing & Logistik</div>
							<div class="king-feat-group-count">2 Fasilitas</div>
						</div>

						<div class="king-feat-item is-exclusive">
							<div class="king-feat-icon-wrap kfi-gold">📦</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Peralatan Packing Lengkap</div>
								<div class="king-feat-desc">Shrink wrap, segel, label produk, dan seluruh peralatan packing profesional agar produk terlihat rapi dan branded.</div>
							</div>
							<span class="king-feat-badge badge-gold">King Only 👑</span>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-blue">🚚</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Biaya Kirim ke Lokasi Anda</div>
								<div class="king-feat-desc">Ongkos kirim seluruh peralatan, produk, dan media promo ke alamat depot Anda sudah termasuk dalam harga paket.</div>
							</div>
							<span class="king-feat-badge badge-excl">✓ Included</span>
						</div>
					</div>

					<!-- Group: Branding & Design -->
					<div class="king-feat-group">
						<div class="king-feat-group-header">
							<div class="king-feat-group-icon">🎨</div>
							<div class="king-feat-group-title">Branding & Desain</div>
							<div class="king-feat-group-count">4 Fasilitas</div>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-blue">🏷</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Lisensi Brand Cleanique Mart</div>
								<div class="king-feat-desc">Hak resmi menggunakan nama, logo, dan seluruh identitas visual brand Cleanique Mart di wilayah depot Anda.</div>
							</div>
							<span class="king-feat-badge badge-excl">✓ Resmi</span>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-blue">🖥</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Desain 3D Interior Outlet</div>
								<div class="king-feat-desc">Visualisasi 3D profesional depot Anda untuk menarik pelanggan dan sebagai panduan instalasi rak display.</div>
							</div>
							<span class="king-feat-badge badge-excl">✓ Included</span>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-blue">📢</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Media Promo Cetak Lengkap</div>
								<div class="king-feat-desc">Desain dan cetak brosur, x-banner, spanduk, dan seluruh materi promosi offline siap pasang di lokasi.</div>
							</div>
							<span class="king-feat-badge badge-excl">✓ Lebih Lengkap</span>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-blue">📌</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Instalasi Media Promo di Lokasi</div>
								<div class="king-feat-desc">Tim Cleanique Mart langsung datang memasang seluruh media promosi cetak saat hari grand opening depot Anda.</div>
							</div>
							<span class="king-feat-badge badge-excl">✓ Included</span>
						</div>
					</div>

					<!-- Group: Digital Marketing -->
					<div class="king-feat-group">
						<div class="king-feat-group-header">
							<div class="king-feat-group-icon">🌐</div>
							<div class="king-feat-group-title">Digital & Marketing Online</div>
							<div class="king-feat-group-count">4 Fasilitas</div>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-green">🌍</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Landing Page SEO-Friendly Khusus Cabang</div>
								<div class="king-feat-desc">Halaman web premium khusus depot Anda – terindeks Google – agar konsumen lokal mudah menemukan toko Anda saat searching.</div>
							</div>
							<span class="king-feat-badge badge-excl">✓ Premium</span>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-green">📍</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Listing & Optimasi Google Maps Bisnis</div>
								<div class="king-feat-desc">Verifikasi dan optimasi Google Business Profile agar toko Anda muncul di pencarian lokal "sabun curah terdekat" dengan rating tinggi.</div>
							</div>
							<span class="king-feat-badge badge-excl">✓ Included</span>
						</div>

						<div class="king-feat-item is-exclusive">
							<div class="king-feat-icon-wrap kfi-gold">🛒</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Set-Up Toko Marketplace (Shopee & Tokopedia)</div>
								<div class="king-feat-desc">Pembuatan dan optimasi toko online resmi di Shopee dan Tokopedia lengkap dengan foto produk dan copywriting untuk menjangkau konsumen digital.</div>
							</div>
							<span class="king-feat-badge badge-gold">King Only 👑</span>
						</div>

						<div class="king-feat-item is-exclusive">
							<div class="king-feat-icon-wrap kfi-gold">📱</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Set-Up & Optimasi Akun Media Sosial</div>
								<div class="king-feat-desc">Pembuatan/optimasi Instagram & Facebook bisnis depot Anda: foto profil, bio, highlight, dan 10 konten pembuka siap posting.</div>
							</div>
							<span class="king-feat-badge badge-gold">King Only 👑</span>
						</div>
					</div>

					<!-- Group: Training & Support -->
					<div class="king-feat-group">
						<div class="king-feat-group-header">
							<div class="king-feat-group-icon">📚</div>
							<div class="king-feat-group-title">Training & Support</div>
							<div class="king-feat-group-count">2 Fasilitas</div>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-gold">🎓</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Training Chemical & Manajemen Bisnis</div>
								<div class="king-feat-desc">Pelatihan intensif SOP penanganan cairan, pengisian higienis via filter UV, manajemen stok, penetapan harga, dan teknik pemasaran lokal.</div>
							</div>
							<span class="king-feat-badge badge-excl">✓ Included</span>
						</div>

						<div class="king-feat-item">
							<div class="king-feat-icon-wrap kfi-gold">💬</div>
							<div class="king-feat-info">
								<div class="king-feat-title">Pendampingan Prioritas Sampai Grand Opening</div>
								<div class="king-feat-desc">CS khusus kemitraan mendampingi Anda dari survei lokasi, persiapan, instalasi, hingga hari pertama depot buka dengan layanan prioritas King.</div>
							</div>
							<span class="king-feat-badge badge-gold">King Priority</span>
						</div>
					</div>

				</div><!-- /.king-feat-categories -->

				<!-- Sticky CTA Card -->
				<div>
					<div class="king-cta-card">
						<div class="king-cta-ribbon">👑 PAKET TERLENGKAP – BEST SELLER</div>
						<div class="king-cta-pkg">Kemitraan Cleanique Mart</div>
						<div class="king-cta-name">PAKET KING</div>
						<div class="king-cta-strike">Rp 30.000.000,-</div>
						<div class="king-cta-price">Rp 27.500.000,-</div>
						<div class="king-cta-savings">🔥 Hemat Rp 2.500.000</div>
						<div class="king-cta-note">Satu kali · 0% royalti · 100% laba milik Anda</div>

						<hr class="king-cta-divider">

						<?php
						$king_cta_feats = [
							'Rak depot 8 kontainer eksklusif',
							'Stok awal produk Rp 8.000.000',
							'Peralatan packing lengkap',
							'Filter UV sterilisasi higienis',
							'Marketplace Shopee & Tokopedia',
							'Optimasi sosial media bisnis',
							'Landing page SEO premium',
							'Google Maps terverifikasi',
							'Media promo cetak lengkap',
							'Training + pendampingan prioritas',
						];
						foreach ( $king_cta_feats as $kf ) : ?>
							<div class="king-cta-feat-row">
								<span class="king-cta-check">✓</span>
								<span class="king-cta-feat-text"><?php echo esc_html( $kf ); ?></span>
							</div>
						<?php endforeach; ?>

						<a href="<?php echo esc_url( $wa_king ); ?>" target="_blank" rel="noopener noreferrer" class="king-cta-btn">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
							ORDER PROMO PAKET KING
						</a>
						<a href="<?php echo esc_url( $wa_general ); ?>" target="_blank" rel="noopener noreferrer" class="king-cta-secondary">
							Konsultasi Gratis Dulu →
						</a>

						<div class="king-cta-guarantee">
							<svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
							PKRT Kemenkes RI · Halal MUI · PT Indotech Berkah Abadi
						</div>

						<hr class="king-cta-divider">
						<div style="text-align:center;font-size:12px;color:rgba(255,255,255,.4);">Budget lebih terbatas? Lihat:</div>
						<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/paket-starter/') ); ?>" style="display:flex;align-items:center;justify-content:center;gap:6px;margin-top:10px;background:rgba(110,231,183,.08);color:#6ee7b7;padding:11px;border-radius:12px;font-size:13px;font-weight:600;text-decoration:none;border:1px solid rgba(110,231,183,.2);">
							Paket Starter – Rp 15.000.000
						</a>
					</div>
				</div>
			</div><!-- /.king-detail-grid -->
		</div>
	</section>

	<!-- ═══════════════════════════════════════════════════ ROI SIMULATOR -->
	<section class="cm-kk-section bg-white">
		<div class="cm-kk-container">
			<div class="cm-kk-eyebrow ey-green">Simulasi Keuntungan</div>
			<h2 class="cm-kk-title">Kalkulator ROI Paket King</h2>
			<p class="cm-kk-sub">Dengan fasilitas marketplace & sosmed aktif, potensi penjualan lebih tinggi. Estimasikan penghasilan Anda.</p>

			<div class="roi-grid">
				<div class="roi-input-card">
					<div style="margin-bottom:22px;">
						<label class="roi-label" for="king-roi-liters">Target Liter Terjual per Hari</label>
						<input type="range" id="king-roi-liters" class="roi-range" min="10" max="120" value="40" oninput="updateKingROI()">
						<div style="display:flex;justify-content:space-between;font-size:12px;color:#94a3b8;margin-top:4px;">
							<span>10 liter</span>
							<span id="king-roi-daily-display" style="font-weight:700;color:#059669;">40 liter</span>
							<span>120 liter</span>
						</div>
					</div>
					<div style="margin-bottom:22px;">
						<label class="roi-label" for="king-roi-price">Harga Jual per Liter (Rp)</label>
						<input type="number" id="king-roi-price" class="roi-input" value="15000" min="8000" max="25000" step="500" oninput="updateKingROI()">
					</div>
					<div style="margin-bottom:22px;">
						<label class="roi-label" for="king-roi-margin">Margin Keuntungan (%)</label>
						<input type="range" id="king-roi-margin" class="roi-range" min="20" max="65" value="40" oninput="updateKingROI()">
						<div style="display:flex;justify-content:space-between;font-size:12px;color:#94a3b8;margin-top:4px;">
							<span>20%</span>
							<span id="king-roi-margin-display" style="font-weight:700;color:#059669;">40%</span>
							<span>65%</span>
						</div>
					</div>
					<div style="background:#f0fdf4;border:1px solid #bbf7d0;border-radius:12px;padding:16px;font-size:13px;color:#166534;line-height:1.6;">
						💡 <strong>Catatan Paket King:</strong> Dengan marketplace aktif, Anda bisa tambah 20-40% penjualan tanpa harus bergantung hanya pada pelanggan walk-in.
					</div>
				</div>

				<div class="roi-result-card">
					<div style="margin-bottom:18px;">
						<div class="roi-result-label">Omzet Harian</div>
						<div class="roi-result-value" id="king-roi-daily-rev">Rp 600.000</div>
						<div class="roi-result-sub">dari 40 liter/hari</div>
					</div>
					<div style="border-top:1px solid rgba(255,255,255,.1);padding-top:18px;margin-bottom:18px;">
						<div class="roi-result-label">Laba Bersih per Bulan</div>
						<div class="roi-result-value" id="king-roi-monthly" style="font-size:34px;">Rp 7.200.000</div>
						<div class="roi-result-sub">laba bersih setelah HPP</div>
					</div>
					<div style="border-top:1px solid rgba(255,255,255,.1);padding-top:18px;margin-bottom:18px;">
						<div class="roi-result-label">Estimasi Break-Even Point</div>
						<div class="roi-result-value" id="king-roi-bep" style="font-size:26px;color:#fbbf24;">± 4 Bulan</div>
						<div class="roi-result-sub">modal kembali penuh</div>
					</div>
					<div style="border-top:1px solid rgba(255,255,255,.1);padding-top:16px;">
						<div class="roi-result-label">Laba 1 Tahun (Proyeksi)</div>
						<div class="roi-result-value" id="king-roi-yearly" style="color:#a7f3d0;">Rp 86.400.000</div>
						<div class="roi-result-sub">setelah modal kembali</div>
					</div>
				</div>
			</div>

			<div style="text-align:center;margin-top:14px;font-size:12px;color:#94a3b8;">
				* Simulasi ilustratif berdasarkan rata-rata performa mitra Cleanique Mart. Hasil aktual bergantung pada lokasi, volume, dan upaya pemasaran lokal.
			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════════════ HOW TO JOIN -->
	<section class="cm-kk-section bg-slate">
		<div class="cm-kk-container">
			<div class="cm-kk-eyebrow ey-gold">Alur Bergabung</div>
			<h2 class="cm-kk-title">4 Langkah Jadi Mitra King Cleanique Mart</h2>
			<p class="cm-kk-sub">Proses terstruktur dan terdampingi penuh dari konsultasi hingga depot resmi buka.</p>

			<div class="join-steps">
				<div class="join-step-card">
					<div class="join-step-num">1</div>
					<div class="join-step-icon">💬</div>
					<div class="join-step-title">Konsultasi Wilayah Prioritas</div>
					<div class="join-step-desc">Hubungi CS via WhatsApp. Tim Kemitraan King menangani Anda dengan jalur prioritas untuk cek proteksi area 3 km eksklusif.</div>
				</div>
				<div class="join-step-card">
					<div class="join-step-num">2</div>
					<div class="join-step-icon">✍️</div>
					<div class="join-step-title">MoU & Pembayaran</div>
					<div class="join-step-desc">Tanda tangan perjanjian kemitraan, pembayaran DP 50%, dan proses produksi + persiapan semua fasilitas King dimulai.</div>
				</div>
				<div class="join-step-card">
					<div class="join-step-num">3</div>
					<div class="join-step-icon">🚀</div>
					<div class="join-step-title">Pengiriman + Setup Digital</div>
					<div class="join-step-desc">Semua peralatan dikirim & dipasang. Bersamaan, tim digital setup marketplace, sosmed, landing page, dan Google Maps.</div>
				</div>
				<div class="join-step-card">
					<div class="join-step-num">4</div>
					<div class="join-step-icon">👑</div>
					<div class="join-step-title">Training & Grand Opening</div>
					<div class="join-step-desc">Training intensif + sesi filter UV. Depot King resmi dibuka dengan semua channel online sudah aktif menghasilkan.</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════════════ SOCIAL PROOF -->
	<section class="cm-kk-section bg-green-dark">
		<div class="cm-kk-container">
			<div style="text-align:center;margin-bottom:48px;">
				<div class="cm-kk-eyebrow ey-gold" style="margin-bottom:14px;">Bukti Nyata</div>
				<h2 class="cm-kk-title light">Kata Mitra King Kami</h2>
				<p class="cm-kk-sub light" style="margin:0 auto;">Bergabung bersama ratusan mitra yang sudah membuktikan sistem kemitraan Cleanique Mart.</p>
			</div>

			<div class="social-proof-strip">
				<div class="sp-card">
					<div class="sp-stars">★★★★★</div>
					<p class="sp-quote">"Paket King worth it banget! Dalam 3 bulan sudah BEP. Sekarang omzet sudah 40 juta per bulan. Tim support-nya responsif dan profesional."</p>
					<div class="sp-author">
						<div class="sp-avatar">B</div>
						<div>
							<div class="sp-name">Budi Santoso</div>
							<div class="sp-city">Mitra King – Temanggung, Jawa Tengah</div>
						</div>
					</div>
				</div>
				<div class="sp-card">
					<div class="sp-stars">★★★★★</div>
					<p class="sp-quote">"Filter UV-nya yang bikin beda. Pelanggan saya percaya karena produknya higienis. Marketplace Shopee juga sudah dapat 200+ orderan bulan ini."</p>
					<div class="sp-author">
						<div class="sp-avatar">S</div>
						<div>
							<div class="sp-name">Sari Dewi</div>
							<div class="sp-city">Mitra King – Boyolali, Jawa Tengah</div>
						</div>
					</div>
				</div>
				<div class="sp-card">
					<div class="sp-stars">★★★★★</div>
					<p class="sp-quote">"Sudah coba banyak franchise, tapi yang paling transparan dan tanpa royalti ya Cleanique Mart. Paket King langsung siap jalan, tidak perlu repot setup sendiri."</p>
					<div class="sp-author">
						<div class="sp-avatar">A</div>
						<div>
							<div class="sp-name">Ahmad Fauzi</div>
							<div class="sp-city">Mitra King – Jambi</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════════════ COMPARE -->
	<section class="cm-kk-section bg-white">
		<div class="cm-kk-container">
			<div class="cm-kk-eyebrow ey-gold">Perbandingan Paket</div>
			<h2 class="cm-kk-title">Starter vs King – Apa Bedanya?</h2>
			<p class="cm-kk-sub">Paket King mencakup semua fasilitas Starter, plus 4 fitur eksklusif yang meningkatkan potensi penjualan secara signifikan.</p>

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
						['Rak Depot 8 Kontainer', '✓', '✓ Eksklusif', false],
						['Stok Produk Awal', 'Rp 6.000.000', 'Rp 8.000.000 (+33%)', true],
						['Desain 3D Interior', '✓', '✓', false],
						['Lisensi Brand', '✓', '✓', false],
						['Peralatan Produksi', '✓ Standar', '✓ Lengkap', false],
						['Peralatan Packing', '✗', '✓ Lengkap', true],
						['Media Promo Cetak', '✓', '✓ Lebih Lengkap', false],
						['Instalasi di Lokasi', '✓', '✓', false],
						['Training Chemical & Bisnis', '✓', '✓', false],
						['Landing Page SEO', '✓', '✓ Premium', false],
						['Google Maps Listing', '✓', '✓', false],
						['Set-Up Marketplace Shopee/Tokopedia', '✗', '✓', true],
						['Set-Up Optimasi Sosial Media', '✗', '✓', true],
						['Sistem Filter UV Sterilisasi', '✗', '✓', true],
						['Biaya Kirim ke Lokasi', '✓', '✓', false],
						['Pendampingan Support', 'Standar', 'Prioritas King', false],
						['Royalti / Bagi Hasil', '0%', '0%', false],
						['Estimasi BEP', '2-4 Bulan', '2-4 Bulan', false],
					];
					foreach ( $compare_rows as $row ) : ?>
						<tr<?php echo $row[3] ? ' class="king-row"' : ''; ?>>
							<td class="col-feature">
								<?php echo esc_html( $row[0] ); ?>
								<?php if ($row[3]) echo ' <span style="font-size:10px;background:#fef3c7;color:#92400e;padding:2px 6px;border-radius:4px;font-weight:700;">KING ONLY</span>'; ?>
							</td>
							<td class="col-starter" style="text-align:center;">
								<?php if ($row[1] === '✗') : ?>
									<span class="compare-cross" style="font-size:16px;">✗</span>
								<?php elseif (strpos($row[1],'✓') !== false) : ?>
									<span class="compare-tick"><?php echo esc_html($row[1]); ?></span>
								<?php else: ?>
									<span class="compare-val"><?php echo esc_html($row[1]); ?></span>
								<?php endif; ?>
							</td>
							<td class="col-king" style="text-align:center;">
								<?php if ($row[2] === '✗') : ?>
									<span class="compare-cross">✗</span>
								<?php elseif (strpos($row[2],'✓') !== false) : ?>
									<span class="compare-tick gold"><?php echo esc_html($row[2]); ?></span>
								<?php else: ?>
									<span class="compare-val" style="color:#065f46;"><?php echo esc_html($row[2]); ?></span>
								<?php endif; ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<div style="display:flex;gap:14px;justify-content:center;margin-top:36px;flex-wrap:wrap;">
				<a href="<?php echo esc_url( $wa_king ); ?>" target="_blank" rel="noopener noreferrer" class="btn-king-primary">
					<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
					Pilih Paket King – Rp 27,5 Juta
				</a>
				<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/paket-starter/') ); ?>" class="btn-king-secondary">
					Lihat Paket Starter – Rp 15 Juta
				</a>
			</div>
		</div>
	</section>

	<!-- ═══════════════════════════════════════════════════ BOTTOM CTA -->
	<section id="king-bottom-cta">
		<div class="cm-kk-container" style="position:relative;z-index:1;">
			<div class="king-bottom-savings">🔥 PROMO: Hemat Rp 2.500.000 – Hanya untuk 10 Orang Pertama</div>
			<div class="king-bottom-title">Miliki Depot Sabun Curah<br>Paling Lengkap di Kota Anda!</div>
			<p class="king-bottom-sub">15 fasilitas eksklusif, filter UV higienis, marketplace & sosmed aktif,<br>semua sudah termasuk dalam satu investasi Rp 27.500.000,-</p>

			<div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
				<a href="<?php echo esc_url( $wa_king ); ?>" target="_blank" rel="noopener noreferrer" class="btn-king-primary" style="font-size:17px;padding:18px 38px;">
					<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
					ORDER PROMO PAKET KING SEKARANG
				</a>
				<a href="<?php echo esc_url( home_url('/kemitraan-cleanique-mart/') ); ?>" class="btn-king-secondary" style="font-size:15px;padding:18px 28px;">
					← Kembali ke Halaman Kemitraan
				</a>
			</div>
		</div>
	</section>

</main>

<script>
function updateKingROI() {
	const liters   = parseInt(document.getElementById('king-roi-liters').value);
	const price    = parseInt(document.getElementById('king-roi-price').value) || 15000;
	const marginPc = parseInt(document.getElementById('king-roi-margin').value);

	document.getElementById('king-roi-daily-display').textContent  = liters + ' liter';
	document.getElementById('king-roi-margin-display').textContent = marginPc + '%';

	const dailyRevenue  = liters * price;
	const dailyProfit   = dailyRevenue * (marginPc / 100);
	const monthlyProfit = dailyProfit * 30;
	const bepMonths     = Math.ceil(27500000 / monthlyProfit);
	const yearlyProfit  = monthlyProfit * (12 - Math.min(bepMonths, 12));

	const fmt = n => 'Rp ' + Math.round(n).toLocaleString('id-ID');

	document.getElementById('king-roi-daily-rev').textContent  = fmt(dailyRevenue);
	document.getElementById('king-roi-monthly').textContent    = fmt(monthlyProfit);
	document.getElementById('king-roi-bep').textContent        = '± ' + bepMonths + ' Bulan';
	document.getElementById('king-roi-yearly').textContent     = fmt(yearlyProfit > 0 ? yearlyProfit : monthlyProfit * 12);
}
updateKingROI();
</script>

<?php get_footer(); ?>
