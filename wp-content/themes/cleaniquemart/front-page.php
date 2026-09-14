<?php
/**
 * Cleanique Mart Front Page Template (Faithful to cleaniquemart.com)
 *
 * All sections are modularized into template-parts/front-page/*.php
 * and custom front-page CSS is separated into assets/css/front-page.css
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// 1. Hero & Problems / Impact
get_template_part( 'template-parts/front-page/section', 'hero' );

// 2. Intro & Infographics
get_template_part( 'template-parts/front-page/section', 'intro' );

// 3. Testimoni & Galeri Depot Sabun
get_template_part( 'template-parts/front-page/section', 'testimonials' );

// 4. Keuntungan & Varian Produk Sabun 25L
get_template_part( 'template-parts/front-page/section', 'advantages' );

// 5. Testimoni Mitra Cleanique Mart
get_template_part( 'template-parts/front-page/section', 'mitra' );

// 6. Alasan Kenapa Memilih Kami & Legalitas
get_template_part( 'template-parts/front-page/section', 'reasons-legality' );

// 7. Review Produk Marketplace
get_template_part( 'template-parts/front-page/section', 'reviews' );

// 8. Pilihan Paket Usaha (Paket Starter & Paket King)
get_template_part( 'template-parts/front-page/section', 'packages' );

// 9. Cara Bergabung
get_template_part( 'template-parts/front-page/section', 'how-to-join' );

// 10. CTA Final WhatsApp
get_template_part( 'template-parts/front-page/section', 'cta-final' );

get_footer();
