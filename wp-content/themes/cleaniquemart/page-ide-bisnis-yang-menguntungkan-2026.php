<?php
/**
 * Template Name: LP - Ide Bisnis Yang Menguntungkan 2026
 *
 * Dedicated landing page template for:
 * https://cleaniquemart.com/ide-bisnis-yang-menguntungkan-2026/
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$lp_badge      = 'Ide bisnis yang menguntungkan di Tahun 2026';
$lp_h1         = 'Ide Usaha yang Menguntungkan dengan Potensi Omzet Lebih Dari <span id="span-7-472" class="ct-span">50 Juta/Bulan</span>';
$lp_keyword    = 'Ide Bisnis Yang Menguntungkan';
$lp_wa_message = 'Halo cleaniquemart.com, Saya Mau Minta Informasi Tentang Ide Bisnis Yang Menguntungkan Cleanique Mart';
$lp_wa_url     = cleaniquemart_get_wa_url( $lp_wa_message );

get_header();

require get_template_directory() . '/template-parts/landing-page-kemitraan.php';

get_footer();
