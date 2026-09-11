<?php
/**
 * Template Name: Landing Page - Kemitraan & Ide Usaha 2026 (All-in-One)
 *
 * Dedicated landing page template for Cleanique Mart partnerships and business opportunities:
 * - /ide-bisnis-yang-menguntungkan-2026/
 * - /ide-usaha-yang-menjanjikan-2026/
 * - /usaha-sampingan-yang-menjanjikan-2026/
 * - /kemitraan-cleanique-mart/
 *
 * Automatically detects the page slug or accepts query parameter ?variant=xxx
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$current_slug = get_post_field( 'post_name', get_the_ID() );
if ( isset( $_GET['variant'] ) && ! empty( $_GET['variant'] ) ) {
	$current_slug = sanitize_title( $_GET['variant'] );
}

// Preset configuration for each variation
switch ( $current_slug ) {
	case 'ide-bisnis-yang-menguntungkan-2026':
	case 'ide-bisnis':
		$lp_badge      = 'Ide bisnis yang menguntungkan di Tahun 2026';
		$lp_h1         = 'Ide Usaha yang Menguntungkan dengan Potensi Omzet Lebih Dari <span id="span-7-472" class="ct-span">50 Juta/Bulan</span>';
		$lp_keyword    = 'Ide Bisnis Yang Menguntungkan';
		$lp_wa_message = 'Halo cleaniquemart.com, Saya Mau Minta Informasi Tentang Ide Bisnis Yang Menguntungkan Cleanique Mart';
		break;

	case 'ide-usaha-yang-menjanjikan-2026':
	case 'ide-usaha':
		$lp_badge      = 'Ide Usaha yang Belum Banyak Pesaing di Tahun 2026';
		$lp_h1         = 'Ide Usaha Yang Menjanjikan Potensi Omzet Lebih Dari <span id="span-7-472" class="ct-span">50 Juta/Bulan</span>';
		$lp_keyword    = 'Ide Usaha Yang Menjanjikan';
		$lp_wa_message = 'Halo cleaniquemart.com, Saya Mau Minta Informasi Tentang Ide Usaha Cleanique Mart';
		break;

	case 'usaha-sampingan-yang-menjanjikan-2026':
	case 'usaha-sampingan':
		$lp_badge      = 'Usaha sampingan yang menjanjikan di Tahun 2026';
		$lp_h1         = 'ide Usaha Sampingan dengan Potensi Omzet Lebih Dari <span id="span-7-472" class="ct-span">50 Juta/Bulan</span>';
		$lp_keyword    = 'Usaha Sampingan yang Menjanjikan';
		$lp_wa_message = 'Halo cleaniquemart.com, Saya Mau Minta Informasi Tentang Usaha Sampingan Cleanique Mart';
		break;

	case 'kemitraan-cleanique-mart':
	case 'kemitraan':
	default:
		$lp_badge      = 'Peluang Usaha yang Belum Banyak Pesaing di Tahun 2026';
		$lp_h1         = 'Produk PASTI Dibutuhkan Semua Orang Potensi Omzet Lebih Dari <span id="span-7-472" class="ct-span">50 Juta/Bulan</span>';
		$lp_keyword    = 'Peluang Usaha Kemitraan';
		$lp_wa_message = 'Halo cleaniquemart.com, Saya Mau Minta Informasi Tentang Kemitraan Cleanique Mart';
		break;
}

$lp_wa_url = cleaniquemart_get_wa_url( $lp_wa_message );

get_header();

require get_template_directory() . '/template-parts/landing-page-kemitraan.php';

get_footer();
