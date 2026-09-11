<?php
/**
 * Template Name: LP - Ide Usaha Yang Menjanjikan 2026
 *
 * Dedicated landing page template for:
 * https://cleaniquemart.com/ide-usaha-yang-menjanjikan-2026/
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$lp_badge      = 'Ide Usaha yang Belum Banyak Pesaing di Tahun 2026';
$lp_h1         = 'Ide Usaha Yang Menjanjikan Potensi Omzet Lebih Dari <span id="span-7-472" class="ct-span">50 Juta/Bulan</span>';
$lp_keyword    = 'Ide Usaha Yang Menjanjikan';
$lp_wa_message = 'Halo cleaniquemart.com, Saya Mau Minta Informasi Tentang Ide Usaha Cleanique Mart';
$lp_wa_url     = cleaniquemart_get_wa_url( $lp_wa_message );

get_header();

require get_template_directory() . '/template-parts/landing-page-kemitraan.php';

get_footer();
