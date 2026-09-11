<?php
/**
 * Template Name: LP - Usaha Sampingan Yang Menjanjikan 2026
 *
 * Dedicated landing page template for:
 * https://cleaniquemart.com/usaha-sampingan-yang-menjanjikan-2026/
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$lp_badge      = 'Usaha sampingan yang menjanjikan di Tahun 2026';
$lp_h1         = 'ide Usaha Sampingan dengan Potensi Omzet Lebih Dari <span id="span-7-472" class="ct-span">50 Juta/Bulan</span>';
$lp_keyword    = 'Usaha Sampingan yang Menjanjikan';
$lp_wa_message = 'Halo cleaniquemart.com, Saya Mau Minta Informasi Tentang Usaha Sampingan Cleanique Mart';
$lp_wa_url     = cleaniquemart_get_wa_url( $lp_wa_message );

get_header();

require get_template_directory() . '/template-parts/landing-page-kemitraan.php';

get_footer();
