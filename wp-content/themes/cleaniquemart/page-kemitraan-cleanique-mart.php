<?php
/**
 * Template Name: LP - Kemitraan Cleanique Mart
 *
 * Dedicated landing page template for:
 * https://cleaniquemart.com/kemitraan-cleanique-mart/
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$lp_badge      = 'Peluang Usaha yang Belum Banyak Pesaing di Tahun 2026';
$lp_h1         = 'Produk PASTI Dibutuhkan Semua Orang Potensi Omzet Lebih Dari <span id="span-7-472" class="ct-span">50 Juta/Bulan</span>';
$lp_keyword    = 'Peluang Usaha Kemitraan';
$lp_wa_message = 'Halo cleaniquemart.com, Saya Mau Minta Informasi Tentang Kemitraan Cleanique Mart';
$lp_wa_url     = cleaniquemart_get_wa_url( $lp_wa_message );

get_header();

require get_template_directory() . '/template-parts/landing-page-kemitraan.php';

get_footer();
