<?php
/**
 * Shared Landing Page Content Template Part
 * 
 * Used by:
 * - /ide-bisnis-yang-menguntungkan-2026/
 * - /ide-usaha-yang-menjanjikan-2026/
 * - /usaha-sampingan-yang-menjanjikan-2026/
 * - /kemitraan-cleanique-mart/
 * 
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$theme_uri = get_template_directory_uri();

// Default values if not set by wrapper
if ( empty( $lp_badge ) ) {
    $lp_badge = 'Ide bisnis yang menguntungkan di Tahun 2026';
}
if ( empty( $lp_h1 ) ) {
    $lp_h1 = 'Ide Usaha yang Menguntungkan dengan Potensi Omzet Lebih Dari <span id="span-7-472" class="ct-span">50 Juta/Bulan</span>';
}
if ( empty( $lp_keyword ) ) {
    $lp_keyword = 'Ide Bisnis Yang Menguntungkan';
}
if ( empty( $lp_wa_message ) ) {
    $lp_wa_message = 'Halo cleaniquemart.com, Saya Mau Minta Informasi Tentang Ide Bisnis Cleanique Mart';
}
if ( empty( $lp_wa_url ) ) {
    $lp_wa_url = cleaniquemart_get_wa_url( $lp_wa_message );
}
?>
<!-- Enqueue Dedicated Oxygen 472 Styles for LP Sections -->
<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen-472.css?v=<?php echo CLEANIQUEMART_VERSION; ?>">
<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/landing-page-enhancements.css?v=<?php echo CLEANIQUEMART_VERSION; ?>">

<main id="main-content" class="cm-landing-page-wrap">

				<section id="section-3-472" class=" ct-section ct-section-with-shape-divider" ><div class="ct-section-inner-wrap"><div id="div_block-4-472" class="ct-div-block" >
    <div class="cm-badge-glass-hero" style="margin: 0 auto 16px; display: inline-block; padding: 8px 24px; font-size: 15px; font-weight: 600;"><?php echo esc_html($lp_badge); ?></div>
    <h1 id="headline-6-472" class="ct-headline atomic-primary-heading"><?php echo $lp_h1; ?><br></h1>
    <img  id="image-8-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/line-1.gif" class="ct-image" srcset="" sizes="(max-width: 300px) 100vw, 300px" /></div><style>/* FLEX GALLERY */

.oxy-gallery.oxy-gallery-flex {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
}

.oxy-gallery-flex .oxy-gallery-item {
	overflow: hidden;
	flex: auto;

}

.oxy-gallery-flex .oxy-gallery-item-sizer {
	position: relative;
}

.oxy-gallery-flex .oxy-gallery-item-contents {
	position: absolute;
	top: 0; bottom: 0; left: 0; right: 0;
	background-size: cover;
	margin: 0;
}

.oxy-gallery-flex .oxy-gallery-item-contents img {
	width: 100%;
	height: 100%;
	opacity: 0;
}



/* MASONRY GALLERY */

.oxy-gallery.oxy-gallery-masonry {
	display: block;
	overflow: auto;
}

.oxy-gallery-masonry .oxy-gallery-item {
	break-inside: avoid;
	display: block;
	line-height: 0;
	position: relative;
}

.oxy-gallery-masonry figure.oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents img {
	max-width: 100%;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}

/* GRID GALLERY */
.oxy-gallery-grid .oxy-gallery-item {
	overflow: hidden;
	flex: auto;
	position: relative;
}

.oxy-gallery-grid .oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-grid .oxy-gallery-item-contents img {
	width: 100%;
	height: auto;
}

.oxy-gallery-grid .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}</style><style data-element-id="#_gallery-1106-532">
            #_gallery-1106-532.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(0,0,0,0.75); /* caption background color */
                padding: 1em;
                color: #ffffff;  /* caption text color */
                font-weight: bold;
                -webkit-font-smoothing: antialiased;
                font-size: 1em;
                text-align: center;
                line-height: var(--oxy-small-line-height);
                /*pointer-events: none;*/
                transition: 0.3s ease-in-out opacity;
                display: block;
            }

                
            #_gallery-1106-532.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                opacity: 0;
            }
            #_gallery-1106-532.oxy-gallery-captions .oxy-gallery-item:hover .oxy-gallery-item-contents figcaption {
                opacity: 1;
            }

                    
            /* hover effects */
            #_gallery-1106-532.oxy-gallery .oxy-gallery-item {
              opacity: ;
              transition: 0.3s ease-in-out opacity;
            }

            #_gallery-1106-532.oxy-gallery .oxy-gallery-item:hover {
              opacity: ;
            }

        
            #_gallery-1106-532 .oxy-gallery-item .oxy-gallery-item-contents {
                height: 100%;
            }
            #_gallery-1106-532 .oxy-gallery-item .oxy-gallery-item-contents img {
                height: 100%;
                object-fit: cover;
            }

        </style>        <div id="_gallery-1106-532" class="oxy-gallery oxy-gallery-captions oxy-gallery-grid" >
        
            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/temanggung.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/temanggung.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/temanggung.webp" data-original-src-width="800" data-original-src-height="800" alt="Cleanique Mart Temanggung">
                        <figcaption>Cleanique Mart Temanggung</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Jambi.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Jambi.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Jambi.webp" data-original-src-width="1280" data-original-src-height="720" alt="Thumbnail-Mitra-Cleanique-Mart-Jambi">
                        <figcaption>Thumbnail-Mitra-Cleanique-Mart-Jambi</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Boyolali-Depan-3.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Boyolali-Depan-3.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Boyolali-Depan-3.webp" data-original-src-width="1280" data-original-src-height="960" alt="Cleanique Mart Boyolali Depan 3">
                        <figcaption>Cleanique Mart Boyolali Depan 3</figcaption>

                    </figure>
                    
                </a>

            
                </div>
                        <script type="text/javascript">
                    document.addEventListener("oxygenVSBInitGalleryJs_gallery-1106-532",function(){
                        if(jQuery('#_gallery-1106-532').photoSwipe) {
                            jQuery('#_gallery-1106-532').photoSwipe('.oxy-gallery-item-contents');
                        }
                    },false);
                    jQuery(document).ready(function() {
                        let event = new Event('oxygenVSBInitGalleryJs_gallery-1106-532');
                        document.dispatchEvent(event);
                    });
                </script>
            <a id="link-10-472" class="ct-link oxel_icon_button__container" href="<?php echo esc_url($lp_wa_url); ?>" target="_blank" rel="nofollow"  role="button"><div id="fancy_icon-11-472" class="ct-fancy-icon oxel_icon_button_icon" ><svg id="svg-fancy_icon-11-472"><use xlink:href="#FontAwesomeicon-whatsapp"></use></svg></div><div id="text_block-12-472" class="ct-text-block oxel_icon_button_text" >KONSULTASI GRATIS</div></a>
		<div id="-shape-divider-13-472" class="oxy-shape-divider " >        
        <div class="oxy_shape_divider" >
            <svg viewBox="0 0 1440 320" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" >
                <g id="Ocean-Waves" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path d="M60.0736562,199.999824 C74.730684,216.560111 96.1461381,227.000176 120,227.000176 C143.853862,227.000176 165.269316,216.560111 179.926344,199.999824 L180.073656,199.999824 C194.730684,216.560111 216.146138,227.000176 240,227.000176 C263.853862,227.000176 285.269316,216.560111 299.926344,199.999824 L300.073656,199.999824 C314.730684,216.560111 336.146138,227.000176 360,227.000176 C383.853862,227.000176 405.269316,216.560111 419.926344,199.999824 L420.073656,199.999824 C434.730684,216.560111 456.146138,227.000176 480,227.000176 C503.853862,227.000176 525.269316,216.560111 539.926344,199.999824 L540.073656,199.999824 C554.730684,216.560111 576.146138,227.000176 600,227.000176 C623.853862,227.000176 645.269316,216.560111 659.926344,199.999824 L660.073656,199.999824 C674.730684,216.559935 696.146138,227 720,227 C743.853862,227 765.269316,216.559935 779.926344,199.999824 L780.073656,199.999824 C794.730684,216.560111 816.146138,227.000176 840,227.000176 C863.853862,227.000176 885.269316,216.560111 899.926344,199.999824 L900.073656,199.999824 C914.730684,216.560111 936.146138,227.000176 960,227.000176 C983.853862,227.000176 1005.26932,216.560111 1019.92634,199.999824 L1020.07366,199.999824 C1034.73068,216.560111 1056.14614,227.000176 1080,227.000176 C1103.85386,227.000176 1125.26932,216.560111 1139.92634,199.999824 L1140.07366,199.999824 C1154.73068,216.560111 1176.14614,227.000176 1200,227.000176 C1223.85386,227.000176 1245.26932,216.560111 1259.92634,199.999824 L1260.07366,199.999824 C1274.73068,216.560111 1296.14614,227.000176 1320,227.000176 C1343.85386,227.000176 1365.26932,216.560111 1379.92634,199.999824 L1380.07366,199.999824 C1394.73068,216.560111 1416.14614,227.000176 1440,227.000176 L1440,319.999824 L0,319.999824 L0,227.000176 C23.8538619,227.000176 45.269316,216.560111 59.9263438,199.999824 L60.0736562,199.999824 Z" fill="currentColor"></path>
                </g>
            </svg>        </div>

        </div>

		<img  id="image-14-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/bubble.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/bubble.webp 1000w, <?php echo esc_url($theme_uri); ?>/assets/images/bubble-166x300.webp 166w, <?php echo esc_url($theme_uri); ?>/assets/images/bubble-566x1024.webp 566w, <?php echo esc_url($theme_uri); ?>/assets/images/bubble-768x1389.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/bubble-850x1536.webp 850w" sizes="(max-width: 1000px) 100vw, 1000px" />
    <div id="-shape-divider-10-472" class="oxy-shape-divider">        
        <div class="oxy_shape_divider">
            <svg viewBox="0 0 1440 320" version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <g id="Ocean-Waves" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path d="M60.0736562,199.999824 C74.730684,216.560111 96.1461381,227.000176 120,227.000176 C143.853862,227.000176 165.269316,216.560111 179.926344,199.999824 L180.073656,199.999824 C194.730684,216.560111 216.146138,227.000176 240,227.000176 C263.853862,227.000176 285.269316,216.560111 299.926344,199.999824 L300.073656,199.999824 C314.730684,216.560111 336.146138,227.000176 360,227.000176 C383.853862,227.000176 405.269316,216.560111 419.926344,199.999824 L420.073656,199.999824 C434.730684,216.560111 456.146138,227.000176 480,227.000176 C503.853862,227.000176 525.269316,216.560111 539.926344,199.999824 L540.073656,199.999824 C554.730684,216.560111 576.146138,227.000176 600,227.000176 C623.853862,227.000176 645.269316,216.560111 659.926344,199.999824 L660.073656,199.999824 C674.730684,216.559935 696.146138,227 720,227 C743.853862,227 765.269316,216.559935 779.926344,199.999824 L780.073656,199.999824 C794.730684,216.560111 816.146138,227.000176 840,227.000176 C863.853862,227.000176 885.269316,216.560111 899.926344,199.999824 L900.073656,199.999824 C914.730684,216.560111 936.146138,227.000176 960,227.000176 C983.853862,227.000176 1005.26932,216.560111 1019.92634,199.999824 L1020.07366,199.999824 C1034.73068,216.560111 1056.14614,227.000176 1080,227.000176 C1103.85386,227.000176 1125.26932,216.560111 1139.92634,199.999824 L1140.07366,199.999824 C1154.73068,216.560111 1176.14614,227.000176 1200,227.000176 C1223.85386,227.000176 1245.26932,216.560111 1259.92634,199.999824 L1260.07366,199.999824 C1274.73068,216.560111 1296.14614,227.000176 1320,227.000176 C1343.85386,227.000176 1365.26932,216.560111 1379.92634,199.999824 L1380.07366,199.999824 C1394.73068,216.560111 1416.14614,227.000176 1440,227.000176 L1440,319.999824 L0,319.999824 L0,227.000176 C23.8538619,227.000176 45.269316,216.560111 59.9263438,199.999824 L60.0736562,199.999824 Z" fill="currentColor"></path>
                </g>
            </svg>
        </div>
    </div>
    <img id="image-390-100" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/bubble.webp" class="ct-image" />
    </div>
    </section>
    <section id="section-16-472" class=" ct-section" ><div class="ct-section-inner-wrap"><div id="div_block-17-472" class="ct-div-block" ><h2 id="headline-18-472" class="ct-headline"><div style="text-align: center;">Batas Promo Bulan Ini</div></h2>
<div class="cm-live-countdown-container" style="margin: 15px auto 25px; max-width: 380px;">
    <div style="display: flex; justify-content: center; gap: 12px;" id="cm-promo-countdown">
        <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); border-radius: 12px; padding: 10px 14px; min-width: 65px; text-align: center;">
            <span id="cm-days" style="font-size: 28px; font-weight: 800; color: #ffffff; display: block; line-height: 1.1;">00</span>
            <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.8);">Hari</span>
        </div>
        <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); border-radius: 12px; padding: 10px 14px; min-width: 65px; text-align: center;">
            <span id="cm-hours" style="font-size: 28px; font-weight: 800; color: #ffffff; display: block; line-height: 1.1;">00</span>
            <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.8);">Jam</span>
        </div>
        <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); border-radius: 12px; padding: 10px 14px; min-width: 65px; text-align: center;">
            <span id="cm-minutes" style="font-size: 28px; font-weight: 800; color: #ffffff; display: block; line-height: 1.1;">00</span>
            <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.8);">Menit</span>
        </div>
        <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); border-radius: 12px; padding: 10px 14px; min-width: 65px; text-align: center;">
            <span id="cm-seconds" style="font-size: 28px; font-weight: 800; color: #ffeb3b; display: block; line-height: 1.1;">00</span>
            <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.8);">Detik</span>
        </div>
    </div>
</div>
<a id="link-20-472" class="ct-link oxel_icon_button__container" href="#promo2025" target="_self" rel="nofollow"  role="button"><div id="fancy_icon-21-472" class="ct-fancy-icon oxel_icon_button_icon" ><svg id="svg-fancy_icon-21-472"><use xlink:href="#FontAwesomeicon-tags"></use></svg></div><div id="text_block-22-472" class="ct-text-block oxel_icon_button_text" >AMBIL PROMO</div></a></div><div id="new_columns-23-472" class="ct-new-columns" ><div id="div_block-24-472" class="ct-div-block" ><h2 id="headline-25-472" class="ct-headline atomic-secondary-heading">Ide Usaha Yang Menguntungkan&nbsp;<span id="span-26-472" class="ct-span" >dan Terbukti Nyata!</span></h2><h3 id="headline-27-472" class="ct-headline atomic-secondary-heading">Klik untuk memperbesar gambar&nbsp;</h3><div id="text_block-28-472" class="ct-text-block atomic-subheading" >Sudah banyak mitra kami merasakan <b>ide bisnis yang menguntungkan bersama Cleanique Mart</b>. Puluhan mitra telah bergabung dan menikmati pendapatan tambahan dari keuntungan pesanan yang berulang setiap bulannya.<br>Berikut ini adalah beberapa <b>bukti pembelian dan transaksi nyata</b> dari para mitra kami di berbagai daerah sebagai wujud keseriusan dan potensi bisnis ini:<br></div></div><div id="div_block-29-472" class="ct-div-block" ><link rel='stylesheet' id='oxygen-unslider-css'  href='https://cleaniquemart.com/wp-content/plugins/oxygen/component-framework/vendor/unslider/unslider.css' type='text/css' media='all'/><div id="slider-30-472" class="ct-slider ct_unique_slider_865" ><div class="oxygen-unslider-container"><ul><li><div id="slide-31-472" class="ct-slide" ><img  id="image-32-472" alt="pak HERMAN April Jambi" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HERMAN-COY.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HERMAN-COY.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HERMAN-COY.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HERMAN-COY.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HERMAN-COY.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HERMAN-COY.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-33-472" class="ct-slide" ><img  id="image-34-472" alt="Pak Ardiyansyah 1 April Banjarnegara" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-1.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-1.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-1.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-1.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-1.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-1.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-35-472" class="ct-slide" ><img  id="image-36-472" alt="Pak Ardiyansyah 2 April Banjarnegara" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-2.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-2.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-2.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-2.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-2.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-2.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-37-472" class="ct-slide" ><img  id="image-38-472" alt="Pak DANANG April Cirebon" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-april.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-april.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-april.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-april.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-april.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-april.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-39-472" class="ct-slide" ><img  id="image-40-472" alt="Pak EKO SUSANTO 2 Karanganyar" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-41-472" class="ct-slide" ><img  id="image-42-472" alt="Pak DANANG Mei Cirebon" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-mei.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-mei.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-mei.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-mei.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-mei.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-mei.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-43-472" class="ct-slide" ><img  id="image-44-472" alt="Pak Ismail Mei Nabire" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ISMAIL.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ISMAIL.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ISMAIL.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ISMAIL.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ISMAIL.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-ISMAIL.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-45-472" class="ct-slide" ><img  id="image-46-472" alt="Pak EKO SUSANTO 2 Karanganyar" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-47-472" class="ct-slide" ><img  id="image-48-472" alt="Pak DANANG Juni Cirebon" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-juni.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-juni.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-juni.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-juni.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-juni.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-juni.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-49-472" class="ct-slide" ><img  id="image-50-472" alt="Pak Sammy Juni Bandar Lampung" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-sammy.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-sammy.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-sammy.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-sammy.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-sammy.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-sammy.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-51-472" class="ct-slide" ><img  id="image-52-472" alt="Pak HENDRY Juni 1 Medan" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-1.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-1.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-1.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-1.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-1.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-1.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-53-472" class="ct-slide" ><img  id="image-54-472" alt="Pak HENDRY Juni 2 Medan" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-2.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-2.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-2.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-2.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-2.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-2.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li><li><div id="slide-55-472" class="ct-slide" ><img  id="image-56-472" alt="Bu Novi Tangerang" src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2-2.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2-2.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2-2.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2-2.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2-2.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2-2.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /></div></li></ul></div></div><script class="ct-slider-script">jQuery(document).ready(function($){$('#slider-30-472.ct_unique_slider_865 .oxygen-unslider-container:not(.unslider-horizontal,.unslider-fade)').unslider({autoplay: true, delay: 3000, animation: 'horizontal', speed : 750, arrows: true, nav: true, infinite: true})});</script><div id="div_block-57-472" class="ct-div-block" ><style>/* FLEX GALLERY */

.oxy-gallery.oxy-gallery-flex {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
}

.oxy-gallery-flex .oxy-gallery-item {
	overflow: hidden;
	flex: auto;

}

.oxy-gallery-flex .oxy-gallery-item-sizer {
	position: relative;
}

.oxy-gallery-flex .oxy-gallery-item-contents {
	position: absolute;
	top: 0; bottom: 0; left: 0; right: 0;
	background-size: cover;
	margin: 0;
}

.oxy-gallery-flex .oxy-gallery-item-contents img {
	width: 100%;
	height: 100%;
	opacity: 0;
}



/* MASONRY GALLERY */

.oxy-gallery.oxy-gallery-masonry {
	display: block;
	overflow: auto;
}

.oxy-gallery-masonry .oxy-gallery-item {
	break-inside: avoid;
	display: block;
	line-height: 0;
	position: relative;
}

.oxy-gallery-masonry figure.oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents img {
	max-width: 100%;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}

/* GRID GALLERY */
.oxy-gallery-grid .oxy-gallery-item {
	overflow: hidden;
	flex: auto;
	position: relative;
}

.oxy-gallery-grid .oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-grid .oxy-gallery-item-contents img {
	width: 100%;
	height: auto;
}

.oxy-gallery-grid .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}</style><style data-element-id="#_gallery-58-472">
            #_gallery-58-472.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(0,0,0,0.75); /* caption background color */
                padding: 1em;
                color: #ffffff;  /* caption text color */
                font-weight: bold;
                -webkit-font-smoothing: antialiased;
                font-size: 1em;
                text-align: center;
                line-height: var(--oxy-small-line-height);
                /*pointer-events: none;*/
                transition: 0.3s ease-in-out opacity;
                display: block;
            }

                
            #_gallery-58-472.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                opacity: 0;
            }
            #_gallery-58-472.oxy-gallery-captions .oxy-gallery-item:hover .oxy-gallery-item-contents figcaption {
                opacity: 1;
            }

                    
            /* hover effects */
            #_gallery-58-472.oxy-gallery .oxy-gallery-item {
              opacity: ;
              transition: 0.3s ease-in-out opacity;
            }

            #_gallery-58-472.oxy-gallery .oxy-gallery-item:hover {
              opacity: ;
            }

        </style>        <div id="_gallery-58-472" class="oxy-gallery oxy-gallery-captions oxy-gallery-grid" >
        
            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-HERMAN-COY.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HERMAN-COY.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HERMAN-COY.webp" data-original-src-width="1414" data-original-src-height="2000" alt="pak HERMAN April Jambi">
                        <figcaption>pak HERMAN April Jambi</figcaption>

                    </figure>
                    
                </a>

            
                </div>
                        <script type="text/javascript">
                    document.addEventListener("oxygenVSBInitGalleryJs_gallery-58-472",function(){
                        if(jQuery('#_gallery-58-472').photoSwipe) {
                            jQuery('#_gallery-58-472').photoSwipe('.oxy-gallery-item-contents');
                        }
                    },false);
                    jQuery(document).ready(function() {
                        let event = new Event('oxygenVSBInitGalleryJs_gallery-58-472');
                        document.dispatchEvent(event);
                    });
                </script>
            </div></div></div><div id="new_columns-59-472" class="ct-new-columns" ><div id="div_block-60-472" class="ct-div-block" ><style>/* FLEX GALLERY */

.oxy-gallery.oxy-gallery-flex {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
}

.oxy-gallery-flex .oxy-gallery-item {
	overflow: hidden;
	flex: auto;

}

.oxy-gallery-flex .oxy-gallery-item-sizer {
	position: relative;
}

.oxy-gallery-flex .oxy-gallery-item-contents {
	position: absolute;
	top: 0; bottom: 0; left: 0; right: 0;
	background-size: cover;
	margin: 0;
}

.oxy-gallery-flex .oxy-gallery-item-contents img {
	width: 100%;
	height: 100%;
	opacity: 0;
}



/* MASONRY GALLERY */

.oxy-gallery.oxy-gallery-masonry {
	display: block;
	overflow: auto;
}

.oxy-gallery-masonry .oxy-gallery-item {
	break-inside: avoid;
	display: block;
	line-height: 0;
	position: relative;
}

.oxy-gallery-masonry figure.oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents img {
	max-width: 100%;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}

/* GRID GALLERY */
.oxy-gallery-grid .oxy-gallery-item {
	overflow: hidden;
	flex: auto;
	position: relative;
}

.oxy-gallery-grid .oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-grid .oxy-gallery-item-contents img {
	width: 100%;
	height: auto;
}

.oxy-gallery-grid .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}</style><style data-element-id="#_gallery-61-472">
            #_gallery-61-472.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(0,0,0,0.75); /* caption background color */
                padding: 1em;
                color: #ffffff;  /* caption text color */
                font-weight: bold;
                -webkit-font-smoothing: antialiased;
                font-size: 1em;
                text-align: center;
                line-height: var(--oxy-small-line-height);
                /*pointer-events: none;*/
                transition: 0.3s ease-in-out opacity;
                display: block;
            }

                
            #_gallery-61-472.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                opacity: 0;
            }
            #_gallery-61-472.oxy-gallery-captions .oxy-gallery-item:hover .oxy-gallery-item-contents figcaption {
                opacity: 1;
            }

                    
            /* hover effects */
            #_gallery-61-472.oxy-gallery .oxy-gallery-item {
              opacity: ;
              transition: 0.3s ease-in-out opacity;
            }

            #_gallery-61-472.oxy-gallery .oxy-gallery-item:hover {
              opacity: ;
            }

        </style>        <div id="_gallery-61-472" class="oxy-gallery oxy-gallery-captions oxy-gallery-grid" >
        
            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-1.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-1.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-1.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak Ardiyansyah 1 April Banjarnegara">
                        <figcaption>Pak Ardiyansyah 1 April Banjarnegara</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-2.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-2.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ardiyansyah-2.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak Ardiyansyah 2 April Banjarnegara">
                        <figcaption>Pak Ardiyansyah 2 April Banjarnegara</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-april.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-april.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-april.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak DANANG April Cirebon">
                        <figcaption>Pak DANANG April Cirebon</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-1.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-1.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-1.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak EKO SUSANTO Mei 1 Karanganyar">
                        <figcaption>Pak EKO SUSANTO Mei 1 Karanganyar</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-mei.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-mei.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-mei.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak DANANG Mei Cirebon">
                        <figcaption>Pak DANANG Mei Cirebon</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-ISMAIL.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ISMAIL.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-ISMAIL.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak Ismail Mei Nabire">
                        <figcaption>Pak Ismail Mei Nabire</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak EKO SUSANTO 2 Karanganyar">
                        <figcaption>Pak EKO SUSANTO Mei 2 Karanganyar</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-juni.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-juni.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-DANANG-juni.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak DANANG Juni Cirebon">
                        <figcaption>Pak DANANG Juni Cirebon</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-sammy.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-sammy.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-sammy.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak Sammy Juni Bandar Lampung">
                        <figcaption>Pak Sammy Juni Bandar Lampung</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-1.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-1.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-1.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak HENDRY Juni 1 Medan">
                        <figcaption>Pak HENDRY Juni 1 Medan</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-2.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-2.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-HENDRY-2.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Pak HENDRY Juni 2 Medan">
                        <figcaption>Pak HENDRY Juni 2 Medan</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2-2.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2-2.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/pak-EKO-SUSANTO-2-2.webp" data-original-src-width="1414" data-original-src-height="2000" alt="Bu Novi Tangerang">
                        <figcaption>Bu Novi Tangerang</figcaption>

                    </figure>
                    
                </a>

            
                </div>
                        <script type="text/javascript">
                    document.addEventListener("oxygenVSBInitGalleryJs_gallery-61-472",function(){
                        if(jQuery('#_gallery-61-472').photoSwipe) {
                            jQuery('#_gallery-61-472').photoSwipe('.oxy-gallery-item-contents');
                        }
                    },false);
                    jQuery(document).ready(function() {
                        let event = new Event('oxygenVSBInitGalleryJs_gallery-61-472');
                        document.dispatchEvent(event);
                    });
                </script>
            </div></div></div></section><section id="section-63-472" class=" ct-section" ><div class="ct-section-inner-wrap"><h2 id="headline-64-472" class="ct-headline atomic-secondary-heading">Video Testimoni&nbsp;<br><span id="span-641-472" class="ct-span"><?php echo esc_html($lp_keyword); ?><br>Cleanique Mart&nbsp;</span></h2><div id="text_block-66-472" class="ct-text-block atomic-subheading" >Di bawah ini adalah video testimoni dari <b>Pak Windu Darojat</b>, mitra Cleanique Mart di<b> Temanggung</b>, yang telah menjalankan usaha ini selama lebih dari satu tahun. Beliau berbagi cerita tentang perjalanan usahanya dan bagaimana<b> ide usaha sampingan yaitu Cleanique Mart</b> telah memberikan manfaat nyata bagi penghasilan dan keberlanjutan usahanya.</div><div id="video-67-472" class="ct-video" >
                <div class="oxygen-vsb-responsive-video-wrapper"><iframe  src="https://www.youtube.com/embed/M3TRXqgYm-w" frameborder="0" referrerpolicy="strict-origin-when-cross-origin" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                </div><a id="link-68-472" class="ct-link oxel_icon_button__container" href="<?php echo esc_url($lp_wa_url); ?>" target="_blank" rel="nofollow"  role="button"><div id="fancy_icon-69-472" class="ct-fancy-icon oxel_icon_button_icon" ><svg id="svg-fancy_icon-69-472"><use xlink:href="#FontAwesomeicon-whatsapp"></use></svg></div><div id="text_block-70-472" class="ct-text-block oxel_icon_button_text" >HUBUNGI KAMI</div></a></div></section><section id="section-72-472" class=" ct-section" ><div class="ct-section-inner-wrap"><h2 id="headline-73-472" class="ct-headline atomic-secondary-heading">Beberapa <span id="span-74-472" class="ct-span" >Mitra Cleanique Mart</span></h2><div id="div_block-75-472" class="ct-div-block" ><div id="div_block-76-472" class="ct-div-block " ><a id="link-77-472" class="ct-link zoom-img" href="/cleanique-mart-depok"   ><img  id="image-78-472" alt="Cleanique Mart Depok" src="<?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-tapos-depok.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-tapos-depok.webp 1280w, <?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-tapos-depok.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-tapos-depok.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-tapos-depok.webp 768w" sizes="(max-width: 1280px) 100vw, 1280px" /></a><a id="link-79-472" class="ct-link" href="/cleanique-mart-depok"   ><h2 id="headline-80-472" class="ct-headline atomic-secondary-heading">Cleanique Mart Tapos Depok</h2></a><div id="text_block-81-472" class="ct-text-block atomic-subheading" ><b>Alamat :</b> Jl. Raya Tapos 17-A depan Perumahan Permata Cimanggis - Depok</div></div><div id="div_block-82-472" class="ct-div-block" ><a id="link-83-472" class="ct-link zoom-img" href="/cleanique-mart-palembang/"   ><img  id="image-84-472" alt="cleanique mart palembang" src="<?php echo esc_url($theme_uri); ?>/assets/images/cleanique_mart_palembang.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/cleanique_mart_palembang.webp 1280w, <?php echo esc_url($theme_uri); ?>/assets/images/cleanique_mart_palembang.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/cleanique_mart_palembang.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/cleanique_mart_palembang.webp 768w" sizes="(max-width: 1280px) 100vw, 1280px" /></a><a id="link-85-472" class="ct-link" href="/cleanique-mart-palembang/"   ><h2 id="headline-86-472" class="ct-headline atomic-secondary-heading">Cleanique Mart Palembang</h2></a><div id="text_block-87-472" class="ct-text-block atomic-subheading" ><b>Alamat :</b> Jl. Pipa Reja No.31C, Pipa Jaya, Kec. Kemuning, Kota Palembang, Sumatera Selatan 30128</div></div><div id="div_block-88-472" class="ct-div-block" ><a id="link-89-472" class="ct-link zoom-img" href="/cleanique-mart-malang"   ><img  id="image-90-472" alt="Cleanique Mart Malang Depan Toko" src="<?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Malang-Depan-Toko.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Malang-Depan-Toko.webp 1600w, <?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Malang-Depan-Toko.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Malang-Depan-Toko.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Malang-Depan-Toko.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Malang-Depan-Toko.webp 1536w" sizes="(max-width: 1600px) 100vw, 1600px" /></a><a id="link-91-472" class="ct-link" href="/cleanique-mart-malang"   ><h2 id="headline-92-472" class="ct-headline atomic-secondary-heading">Cleanique Mart Malang<br></h2></a><div id="text_block-93-472" class="ct-text-block atomic-subheading" ><b>Alamat :</b> Jl. Mayjen Sungkono A11, Malang Kel.Bumiayu, Kec.Kedung Kandang. Kota Malang</div></div><div id="div_block-94-472" class="ct-div-block" ><a id="link-95-472" class="ct-link zoom-img" href="/cleanique-mart-situbondo-3"   ><img  id="image-96-472" alt="Cleanique Mart Situbondo" src="<?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Situbondo-1.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Situbondo-1.webp 1600w, <?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Situbondo-1.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Situbondo-1.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Situbondo-1.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Cleanique-Mart-Situbondo-1.webp 1536w" sizes="(max-width: 1600px) 100vw, 1600px" /></a><a id="link-97-472" class="ct-link" href="/cleanique-mart-situbondo-3"   ><h2 id="headline-98-472" class="ct-headline atomic-secondary-heading">Cleanique Mart  Situbondo<br></h2></a><div id="text_block-99-472" class="ct-text-block atomic-subheading" ><b>Alamat :</b> jln cempaka II gg nusa indah no 1 +/-100 m barat pabrik es ds sumberkolak kec panarukan situbondo</div></div><div id="div_block-100-472" class="ct-div-block" ><a id="link-101-472" class="ct-link zoom-img" href="/cleanique-mart-demak-2"   ><img  id="image-102-472" alt="Mitra Cleanique Mart Demak" src="<?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Demak.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Demak.webp 1280w, <?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Demak.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Demak.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Demak.webp 768w" sizes="(max-width: 1280px) 100vw, 1280px" /></a><a id="link-103-472" class="ct-link" href="/cleanique-mart-demak-2"   ><h2 id="headline-104-472" class="ct-headline atomic-secondary-heading">Cleanique Mart  Demak<br></h2></a><div id="text_block-105-472" class="ct-text-block atomic-subheading" ><b>Alamat :</b>&nbsp;Batursari, Mranggen, Demak, Jawa Tengah 59567</div></div><div id="div_block-106-472" class="ct-div-block" ><a id="link-107-472" class="ct-link zoom-img" href="/cleanique-mart-tajem-maguwoharjo"   ><img  id="image-108-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Tajem.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Tajem.webp 1280w, <?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Tajem.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Tajem.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Tajem.webp 768w" sizes="(max-width: 1280px) 100vw, 1280px" /></a><a id="link-109-472" class="ct-link" href="/cleanique-mart-tajem-maguwoharjo"   ><h2 id="headline-110-472" class="ct-headline atomic-secondary-heading">Cleanique Mart Maguwoharjo&nbsp;<br></h2></a><div id="text_block-111-472" class="ct-text-block atomic-subheading" ><b>Alamat :</b>&nbsp;jl raya tajem no 6 rt/rw 02/30 maguwoharjo depok sleman</div></div><div id="div_block-112-472" class="ct-div-block" ><a id="link-113-472" class="ct-link zoom-img" href="/cleanique-mart-temanggung-1"   ><img  id="image-114-472" alt="Thumbnail Mitra Cleanique Mart Temanggung 1" src="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Temanggung-1.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Temanggung-1.webp 1280w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Temanggung-1.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Temanggung-1.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Temanggung-1.webp 768w" sizes="(max-width: 1280px) 100vw, 1280px" /></a><a id="link-115-472" class="ct-link" href="/cleanique-mart-temanggung-1"   ><h2 id="headline-116-472" class="ct-headline atomic-secondary-heading">Cleanique Mart Temanggung 1<br></h2></a><div id="text_block-117-472" class="ct-text-block atomic-subheading" ><b>Alamat :&nbsp;</b>Jl. WR. Supratman No.34, Dongkelan Utara, Jampiroso, Kec. Temanggung, Kabupaten Temanggung, Jawa Tengah 56212&nbsp;</div></div><div id="div_block-118-472" class="ct-div-block" ><a id="link-119-472" class="ct-link zoom-img" href="/cleanique-mart-temanggung-2"   ><img  id="image-120-472" alt="Thumbnail Mitra Cleanique Mart Temanggung 2" src="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Temanggung-2.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Temanggung-2.webp 1280w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Temanggung-2.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Temanggung-2.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Temanggung-2.webp 768w" sizes="(max-width: 1280px) 100vw, 1280px" /></a><a id="link-121-472" class="ct-link" href="/cleanique-mart-temanggung-2"   ><h2 id="headline-122-472" class="ct-headline atomic-secondary-heading">Cleanique Mart Temanggung 2<br></h2></a><div id="text_block-123-472" class="ct-text-block atomic-subheading" ><b>Alamat :&nbsp;</b>Jl Megatan no 4 Dusun nglarangan rt 02, RW.04, Candi Mulyo, Kedu, Temanggung, Jawa Tengah&nbsp;</div></div><div id="div_block-124-472" class="ct-div-block" ><a id="link-125-472" class="ct-link zoom-img" href="/cleanique-mart-karanganyar-2"   ><img  id="image-126-472" alt="Thumbnail Mitra Cleanique Mart Karanganyar" src="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Karanganyar.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Karanganyar.webp 1280w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Karanganyar.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Karanganyar.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Karanganyar.webp 768w" sizes="(max-width: 1280px) 100vw, 1280px" /></a><a id="link-127-472" class="ct-link" href="/cleanique-mart-karanganyar-2"   ><h2 id="headline-128-472" class="ct-headline atomic-secondary-heading">Cleanique Mart Karanganyar<br></h2></a><div id="text_block-129-472" class="ct-text-block atomic-subheading" ><b>Alamat :</b>&nbsp;Jl. Alternatif Matesih, Supan, Tegalgede, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57714</div></div><div id="div_block-1092-532" class="ct-div-block" ><a id="link-1093-532" class="ct-link zoom-img" href="/cleanique-mart-boyolali"   ><img  id="image-1094-532" alt="Thumbnail-Mitra-Cleanique-Mart-Boyolali" src="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Boyolali.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Boyolali.webp 1280w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Boyolali.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Boyolali.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Boyolali.webp 768w" sizes="(max-width: 1280px) 100vw, 1280px" /></a><a id="link-1095-532" class="ct-link" href="/cleanique-mart-boyolali"   ><h2 id="headline-1096-532" class="ct-headline atomic-secondary-heading">Cleanique Mart Boyolali<br></h2></a><div id="text_block-1097-532" class="ct-text-block atomic-subheading" ><b>Alamat</b> : Jalan Jinten no 10 Pulisen, Boyolali, Jawa Tengah 57316</div></div><div id="div_block-1099-532" class="ct-div-block" ><a id="link-1100-532" class="ct-link zoom-img" href="/cleanique-mart-jambi"   ><img  id="image-1101-532" alt="Thumbnail-Mitra-Cleanique-Mart-Jambi" src="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Jambi.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Jambi.webp 1280w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Jambi.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Jambi.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Thumbnail-Mitra-Cleanique-Mart-Jambi.webp 768w" sizes="(max-width: 1280px) 100vw, 1280px" /></a><a id="link-1102-532" class="ct-link" href="/cleanique-mart-jambi"   ><h2 id="headline-1103-532" class="ct-headline atomic-secondary-heading">Cleanique Mart Jambi<br></h2></a><div id="text_block-1104-532" class="ct-text-block atomic-subheading" ><b>Alamat</b> : Jl. Kutilang IV No.29, RT.9, Tambak Sari, Kec. Jambi Sel., Kota Jambi, Jambi 36131</div></div><div id="div_block-1107-532" class="ct-div-block" ><a id="link-1108-532" class="ct-link zoom-img" href="/cleanique-mart-jambi"   ><img  id="image-1109-532" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-jakarta-timur-thumbnail.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-jakarta-timur-thumbnail.webp 1600w, <?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-jakarta-timur-thumbnail.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-jakarta-timur-thumbnail.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-jakarta-timur-thumbnail.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-jakarta-timur-thumbnail.webp 1536w" sizes="(max-width: 1600px) 100vw, 1600px" /></a><a id="link-1110-532" class="ct-link" href="/cleanique-mart-jambi"   ><h2 id="headline-1111-532" class="ct-headline atomic-secondary-heading">Cleanique Mart Jakarta Timur<br></h2></a><div id="text_block-1112-532" class="ct-text-block atomic-subheading" ><b>Alamat</b> : Jl. Cipinang Kebembem I No.24, RT.007/RW.7, Cipinang, Kec. Pulo Gadung, Kota Jakarta Timur, DKI Jakarta 13240</div></div></div></div></section><section id="section-131-472" class=" ct-section" ><div class="ct-section-inner-wrap"><div id="div_block-132-472" class="ct-div-block" ><h2 id="headline-133-472" class="ct-headline atomic-secondary-heading">Testimoni Kesuksesan<br>dan Kemudahan Menjadi<br><span id="span-134-472" class="ct-span" >Mitra Cleanique Mart</span></h2><div id="text_block-643-472" class="ct-text-block atomic-subheading" >Simak cerita para mitra kami yang telah merasakan sendiri <b>kemudahan memulai usaha</b> bersama Cleanique Mart. Dari pelatihan, pendampingan, hingga sistem distribusi yang terstruktur mereka membuktikan bahwa membangun usaha bisa dimulai dengan langkah sederhana dan dukungan yang tepat. Kesuksesan mereka adalah bukti nyata bahwa <b>Cleanique Mart memberi kemudahan </b>bagi siapa saja yang ingin memulai usaha dari rumah.</div><div id="div_block-135-472" class="ct-div-block" ><div id="div_block-136-472" class="ct-div-block" ><img  id="image-137-472" alt="Cleanique Mart Temanggung" src="<?php echo esc_url($theme_uri); ?>/assets/images/temanggung.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/temanggung.webp 800w, <?php echo esc_url($theme_uri); ?>/assets/images/temanggung-300x300.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/temanggung-150x150.webp 150w, <?php echo esc_url($theme_uri); ?>/assets/images/temanggung-768x768.webp 768w" sizes="(max-width: 800px) 100vw, 800px" /><div id="div_block-138-472" class="ct-div-block" ><div id="text_block-139-472" class="ct-text-block" >Sudah 19 tahun saya berbisnis pada sektor Household. Namun ketika saya menjadi Mitra Depo Cleanique banyak sekali dukungan yang tidak saya dapatkan di Perusahaan lain.&nbsp;<br></div></div><div id="div_block-140-472" class="ct-div-block" ><div id="text_block-141-472" class="ct-text-block" ><b>Windu Darojat</b><br><span id="span-142-472" class="ct-span" >Cleanique Mart Temanggung</span></div></div></div><div id="div_block-143-472" class="ct-div-block" ><img  id="image-144-472" alt="Cleanique Mart Palembang" src="<?php echo esc_url($theme_uri); ?>/assets/images/palembang.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/palembang.webp 800w, <?php echo esc_url($theme_uri); ?>/assets/images/palembang-300x300.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/palembang-150x150.webp 150w, <?php echo esc_url($theme_uri); ?>/assets/images/palembang-768x768.webp 768w" sizes="(max-width: 800px) 100vw, 800px" /><div id="div_block-145-472" class="ct-div-block" ><div id="text_block-146-472" class="ct-text-block" >Kami sangat mengapresiasi ide usaha ini dan berkomitmen untuk mengembangkan jaringan distribusi yang luas serta menyediakan produk chemical laundry dan rumah tangga berkualitas bagi masyarakat Kota Palembang.&nbsp;<br></div></div><div id="div_block-147-472" class="ct-div-block" ><div id="text_block-148-472" class="ct-text-block" ><b>Johan Regan Jauw</b><br><span id="span-149-472" class="ct-span" >Cleanique Mart Palembang</span></div></div></div><div id="div_block-150-472" class="ct-div-block" ><img  id="image-151-472" alt="Cleanique Mart Maguwoharjo" src="<?php echo esc_url($theme_uri); ?>/assets/images/Maguwoharjo.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Maguwoharjo.webp 800w, <?php echo esc_url($theme_uri); ?>/assets/images/Maguwoharjo-300x300.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Maguwoharjo-150x150.webp 150w, <?php echo esc_url($theme_uri); ?>/assets/images/Maguwoharjo-768x768.webp 768w" sizes="(max-width: 800px) 100vw, 800px" /><div id="div_block-152-472" class="ct-div-block" ><div id="text_block-153-472" class="ct-text-block" >Bimbingan Depo Cleanique sangat membantu saya dalam mengembangkan usaha isi ulang sabun. Omzet naik drastis, untung berlimpah!<br><br></div></div><div id="div_block-154-472" class="ct-div-block" ><div id="text_block-155-472" class="ct-text-block" ><b>Idha</b><br><span id="span-156-472" class="ct-span" >Cleanique Mart Maguwoharjo</span></div></div></div></div></div></div></section><section id="section-158-472" class=" ct-section" ><div class="ct-section-inner-wrap"><h2 id="headline-159-472" class="ct-headline atomic-secondary-heading">Ide Usaha Yang Menguntungkan<br><span id="span-648-472" class="ct-span" >Cleanique Mart Layak Dipilih?</span><br></h2><div id="div_block-161-472" class="ct-div-block" ><div id="div_block-162-472" class="ct-div-block" ><div id="div_block-163-472" class="ct-div-block" ><div id="fancy_icon-164-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-164-472"><use xlink:href="#FontAwesomeicon-shopping-basket"></use></svg></div></div><div id="div_block-165-472" class="ct-div-block" ><h3 id="headline-166-472" class="ct-headline atomic-secondary-heading">Potensi Pasar Yang Besar<br></h3><div id="text_block-167-472" class="ct-text-block" >Memiliki potensi pasar yang luas karena termasuk dalam kategori kebutuhan harian dengan pola konsumsi berulang, produk seperti deterjen dan sabun selalu menjadi kebutuhan utama konsumen.</div></div></div></div><div id="div_block-168-472" class="ct-div-block" ><div id="div_block-169-472" class="ct-div-block" ><div id="fancy_icon-170-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-170-472"><use xlink:href="#FontAwesomeicon-shopping-basket"></use></svg></div><h3 id="headline-171-472" class="ct-headline atomic-secondary-heading">Potensi Pasar Yang Besar<br><br></h3><div id="text_block-172-472" class="ct-text-block" >Memiliki potensi pasar yang<br>luas karena termasuk dalam&nbsp;<br>kategori kebutuhan harian&nbsp;<br>dengan pola konsumsi berulang, produk seperti deterjen&nbsp;dan sabun selalu menjadi kebutuhan utama konsumen.</div></div><div id="div_block-173-472" class="ct-div-block" ><div id="fancy_icon-174-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-174-472"><use xlink:href="#FontAwesomeicon-money"></use></svg></div><h3 id="headline-175-472" class="ct-headline atomic-secondary-heading">Sistem Kemitraan yang Transparan<br></h3><div id="text_block-176-472" class="ct-text-block" >  Semua proses kemitraan didesain jelas, jujur, dan tanpa biaya tersembunyi. Anda fokus pada pengembangan usaha, kami bantu dari belakang layar.</div></div><div id="div_block-177-472" class="ct-div-block" ><div id="fancy_icon-178-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-178-472"><use xlink:href="#FontAwesomeicon-phone"></use></svg></div><h3 id="headline-179-472" class="ct-headline atomic-secondary-heading">Dukungan Penuh dari Tim Profesional</h3><div id="text_block-180-472" class="ct-text-block" >  Dapatkan dukungan operasional, pemasaran digital, hingga pelatihan rutin untuk mengoptimalkan usaha Anda.</div></div><div id="div_block-181-472" class="ct-div-block" ><div id="fancy_icon-182-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-182-472"><use xlink:href="#FontAwesomeicon-group"></use></svg></div><h3 id="headline-183-472" class="ct-headline atomic-secondary-heading">Produk Dibutuhkan Semua Orang<br></h3><div id="text_block-184-472" class="ct-text-block" > Sabun, deterjen, pembersih lantai, dan cairan rumah tangga lainnya adalah kebutuhan harian bukan tren musiman.</div></div><div id="div_block-185-472" class="ct-div-block" ><div id="fancy_icon-186-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-186-472"><use xlink:href="#FontAwesomeicon-file-o"></use></svg></div><h3 id="headline-187-472" class="ct-headline atomic-secondary-heading">Pengurusan Izin Usaha</h3><div id="text_block-188-472" class="ct-text-block" > Legalitas lengkap dengan izin edar dan sertifikat halal</div></div><div id="div_block-189-472" class="ct-div-block" ><div id="fancy_icon-190-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-190-472"><use xlink:href="#FontAwesomeicon-star-o"></use></svg></div><h3 id="headline-191-472" class="ct-headline atomic-secondary-heading">Terjual Lebih dari 1 Juta Produk</h3><div id="text_block-192-472" class="ct-text-block" > Inovasi yang terbukti sejak 2011.&nbsp; Sudah terjual lebih dari 1 juta produk di seluruh Indonesia, baik online maupun offline.<br><br></div></div><div id="div_block-193-472" class="ct-div-block" ><div id="fancy_icon-194-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-194-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h3 id="headline-195-472" class="ct-headline atomic-secondary-heading">Harga Kompetitif<br></h3><div id="text_block-196-472" class="ct-text-block" > Harga yang kompetitif sehingga mitra tidak mengalami kesulitan dalam menjual produk dan tetap memperoleh keuntungan yang optimal</div></div><div id="div_block-197-472" class="ct-div-block" ><div id="fancy_icon-198-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-198-472"><use xlink:href="#FontAwesomeicon-recycle"></use></svg></div><h3 id="headline-199-472" class="ct-headline atomic-secondary-heading">Ramah Lingkungan<br></h3><div id="text_block-200-472" class="ct-text-block" > Produk berkualitas yang mendukung kelestarian lingkungan<br></div></div><div id="div_block-201-472" class="ct-div-block" ><div id="fancy_icon-202-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-202-472"><use xlink:href="#FontAwesomeicon-flask"></use></svg></div><h3 id="headline-203-472" class="ct-headline atomic-secondary-heading">Pelatihan Produk<br></h3><div id="text_block-204-472" class="ct-text-block" > Kami memastikan Anda bisa menghasilkan produk isi ulang dengan kualitas terbaik<br><br></div></div><div id="div_block-205-472" class="ct-div-block" ><div id="fancy_icon-206-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-206-472"><use xlink:href="#FontAwesomeicon-signal"></use></svg></div><h3 id="headline-207-472" class="ct-headline atomic-secondary-heading">Repeat Order Tinggi<br></h3><div id="text_block-208-472" class="ct-text-block" > Pelanggan akan datang kembali dan kembali lagi. Isi ulang bukan pembelian sekali pakai.<br><br></div></div><div id="div_block-209-472" class="ct-div-block" ><div id="fancy_icon-210-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-210-472"><use xlink:href="#FontAwesomeicon-handshake-o"></use></svg></div><h3 id="headline-211-472" class="ct-headline atomic-secondary-heading">Tanpa Royalti &amp; Biaya Tersembunyi<br></h3><div id="text_block-212-472" class="ct-text-block" > Seluruh keuntungan jadi milik Anda. Kami hanya bantu Anda sukses.<br></div></div><div id="div_block-213-472" class="ct-div-block" ><div id="fancy_icon-214-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-214-472"><use xlink:href="#FontAwesomeicon-wrench"></use></svg></div><h3 id="headline-215-472" class="ct-headline atomic-secondary-heading">Bantuan Setup Lengkap<br></h3><div id="text_block-216-472" class="ct-text-block" > Kami bantu dari A–Z: branding, pelatihan, alat isi ulang, dan support teknis.<br><br></div></div><div id="div_block-217-472" class="ct-div-block" ><div id="fancy_icon-218-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-218-472"><use xlink:href="#FontAwesomeicon-thumbs-o-up"></use></svg></div><h3 id="headline-219-472" class="ct-headline atomic-secondary-heading">Sistem Buktikan Dulu,<br>Baru Percaya<br></h3><div id="text_block-220-472" class="ct-text-block" >  Kalau tidak capai hasil minimal yang dijanjikan, kami kembalikan 100% uang Anda*.<br></div></div></div></div></section><section id="section-705-472" class=" ct-section" ><div class="ct-section-inner-wrap"><h2 id="headline-782-472" class="ct-headline atomic-secondary-heading">Ide Bisnis Yang Menguntungkan<br><span id="span-783-472" class="ct-span" >Mitra Cleanique Mart&nbsp;</span></h2><div id="text_block-785-472" class="ct-text-block atomic-subheading" >Bergabung bersama Cleanique Mart bukan sekadar menjadi reseller produk kebersihan Anda sedang membangun usaha jangka panjang berbasis kebutuhan rumah tangga yang stabil dan berulang. Inilah berbagai <b>keuntungan yang akan Anda dapatkan</b> sebagai mitra kami:<br></div><div id="div_block-715-472" class="ct-div-block" ><div id="div_block-798-472" class="ct-div-block" ><div id="div_block-802-472" class="ct-div-block" ><img  id="image-806-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Pasar-Luas-dan-Terus-Tumbuh.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Pasar-Luas-dan-Terus-Tumbuh.webp 1080w, <?php echo esc_url($theme_uri); ?>/assets/images/Pasar-Luas-dan-Terus-Tumbuh.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Pasar-Luas-dan-Terus-Tumbuh.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Pasar-Luas-dan-Terus-Tumbuh.webp 150w, <?php echo esc_url($theme_uri); ?>/assets/images/Pasar-Luas-dan-Terus-Tumbuh.webp 768w" sizes="(max-width: 1080px) 100vw, 1080px" /></div><div id="div_block-803-472" class="ct-div-block" ><h3 id="headline-800-472" class="ct-headline atomic-secondary-heading"> Pasar Luas dan Terus Tumbuh<br></h3><div id="text_block-801-472" class="ct-text-block" > Produk homecare (sabun, deterjen, pewangi, dsb.) merupakan kebutuhan rutin rumah tangga dan usaha laundry. Ini membuat pasar Anda sangat luas mulai dari tetangga, warung, UKM, hingga pelaku laundry dan horeca (hotel-resto-café).<br></div></div></div><div id="div_block-813-472" class="ct-div-block" ><div id="div_block-814-472" class="ct-div-block" ><img  id="image-815-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Konsumsi-Berulang-Repeat-Order-Tinggi.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Konsumsi-Berulang-Repeat-Order-Tinggi.webp 1080w, <?php echo esc_url($theme_uri); ?>/assets/images/Konsumsi-Berulang-Repeat-Order-Tinggi.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Konsumsi-Berulang-Repeat-Order-Tinggi.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Konsumsi-Berulang-Repeat-Order-Tinggi.webp 150w, <?php echo esc_url($theme_uri); ?>/assets/images/Konsumsi-Berulang-Repeat-Order-Tinggi.webp 768w" sizes="(max-width: 1080px) 100vw, 1080px" /></div><div id="div_block-816-472" class="ct-div-block" ><h3 id="headline-817-472" class="ct-headline atomic-secondary-heading">  Konsumsi Berulang &amp; Repeat Order Tinggi<br></h3><div id="text_block-818-472" class="ct-text-block" > Produk Cleanique Mart habis digunakan, dan konsumen akan terus melakukan pembelian ulang. Ini menciptakan potensi penghasilan berkelanjutan bagi mitra setiap bulannya.<br></div></div></div><div id="div_block-820-472" class="ct-div-block" ><div id="div_block-821-472" class="ct-div-block" ><img  id="image-822-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Akses-ke-Produk-Eksklusif-Berkualitas-Tinggi.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Akses-ke-Produk-Eksklusif-Berkualitas-Tinggi.webp 1080w, <?php echo esc_url($theme_uri); ?>/assets/images/Akses-ke-Produk-Eksklusif-Berkualitas-Tinggi.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Akses-ke-Produk-Eksklusif-Berkualitas-Tinggi.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Akses-ke-Produk-Eksklusif-Berkualitas-Tinggi.webp 150w, <?php echo esc_url($theme_uri); ?>/assets/images/Akses-ke-Produk-Eksklusif-Berkualitas-Tinggi.webp 768w" sizes="(max-width: 1080px) 100vw, 1080px" /></div><div id="div_block-823-472" class="ct-div-block" ><h3 id="headline-824-472" class="ct-headline atomic-secondary-heading">  Akses ke Produk Eksklusif Berkualitas Tinggi<br></h3><div id="text_block-825-472" class="ct-text-block" > Sebagai mitra resmi, Anda mendapatkan akses ke produk berkualitas premium dengan harga khusus mitra. Produk kami telah bersertifikasi Kemenkes RI dan HALAL MUI, serta terbukti efektif dan aman.<br></div></div></div><div id="div_block-826-472" class="ct-div-block" ><div id="div_block-827-472" class="ct-div-block" ><img  id="image-828-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Kesempatan-Buka-Depo-Sendiri-Level-Upgrade.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Kesempatan-Buka-Depo-Sendiri-Level-Upgrade.webp 1080w, <?php echo esc_url($theme_uri); ?>/assets/images/Kesempatan-Buka-Depo-Sendiri-Level-Upgrade.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Kesempatan-Buka-Depo-Sendiri-Level-Upgrade.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Kesempatan-Buka-Depo-Sendiri-Level-Upgrade.webp 150w, <?php echo esc_url($theme_uri); ?>/assets/images/Kesempatan-Buka-Depo-Sendiri-Level-Upgrade.webp 768w" sizes="(max-width: 1080px) 100vw, 1080px" /></div><div id="div_block-829-472" class="ct-div-block" ><h3 id="headline-830-472" class="ct-headline atomic-secondary-heading">  Kesempatan Buka Depo Sendiri (Level Upgrade)<br></h3><div id="text_block-831-472" class="ct-text-block" > Mitra yang berkembang berpeluang naik level menjadi Cleanique Mart di wilayah masing-masing. Anda bisa menjadi distributor lokal dan membuka jaringan reseller sendiri.<br></div></div></div><div id="div_block-833-472" class="ct-div-block" ><div id="div_block-834-472" class="ct-div-block" ><img  id="image-835-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Bisa-Dikembangkan-Menjadi-Bisnis-Keluarga-atau-Waralaba-Lokal.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Bisa-Dikembangkan-Menjadi-Bisnis-Keluarga-atau-Waralaba-Lokal.webp 1080w, <?php echo esc_url($theme_uri); ?>/assets/images/Bisa-Dikembangkan-Menjadi-Bisnis-Keluarga-atau-Waralaba-Lokal.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Bisa-Dikembangkan-Menjadi-Bisnis-Keluarga-atau-Waralaba-Lokal.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Bisa-Dikembangkan-Menjadi-Bisnis-Keluarga-atau-Waralaba-Lokal.webp 150w, <?php echo esc_url($theme_uri); ?>/assets/images/Bisa-Dikembangkan-Menjadi-Bisnis-Keluarga-atau-Waralaba-Lokal.webp 768w" sizes="(max-width: 1080px) 100vw, 1080px" /></div><div id="div_block-836-472" class="ct-div-block" ><h3 id="headline-837-472" class="ct-headline atomic-secondary-heading">  Bisa Dikembangkan Menjadi Bisnis Keluarga atau Waralaba Lokal<br></h3><div id="text_block-838-472" class="ct-text-block" > Model usaha Cleanique Mart sangat fleksibel dan skalabel. Anda bisa melibatkan keluarga untuk operasional harian, bahkan mengembangkannya menjadi merek lokal di daerah Anda.<br></div></div></div><div id="div_block-845-472" class="ct-div-block" ><div id="div_block-846-472" class="ct-div-block" ><img  id="image-847-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Komunitas-Networking-Seluruh-Indonesia.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Komunitas-Networking-Seluruh-Indonesia.webp 1080w, <?php echo esc_url($theme_uri); ?>/assets/images/Komunitas-Networking-Seluruh-Indonesia.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/Komunitas-Networking-Seluruh-Indonesia.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/Komunitas-Networking-Seluruh-Indonesia.webp 150w, <?php echo esc_url($theme_uri); ?>/assets/images/Komunitas-Networking-Seluruh-Indonesia.webp 768w" sizes="(max-width: 1080px) 100vw, 1080px" /></div><div id="div_block-848-472" class="ct-div-block" ><h3 id="headline-849-472" class="ct-headline atomic-secondary-heading">  Komunitas &amp; Networking Seluruh Indonesia<br></h3><div id="text_block-850-472" class="ct-text-block" > Menjadi mitra Cleanique berarti juga bergabung dalam komunitas pebisnis yang saling mendukung. Kami rutin mengadakan sesi pelatihan, zoom sharing, dan diskusi antar mitra seluruh Indonesia.<br></div></div></div></div></div></section><section id="section-461-472" class=" ct-section" ><div class="ct-section-inner-wrap"><h2 id="headline-462-472" class="ct-headline atomic-secondary-heading">Kemudahan Menjadi<br><span id="span-463-472" class="ct-span" >Mitra Cleanique Mart</span></h2><div id="text_block-561-472" class="ct-text-block atomic-subheading" >Menjadi bagian dari Cleanique Mart kini semakin <b>mudah</b>. Kami memahami bahwa memulai usaha tak selalu harus rumit dan mahal. Oleh karena itu, kami memberikan berbagai kemudahan untuk Anda yang ingin menjadi mitra kami:</div><div id="new_columns-530-472" class="ct-new-columns" ><div id="div_block-531-472" class="ct-div-block" ><div id="div_block-541-472" class="ct-div-block" ><div id="div_block-545-472" class="ct-div-block" ><div id="fancy_icon-542-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-542-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div></div><div id="div_block-546-472" class="ct-div-block" ><h3 id="headline-543-472" class="ct-headline atomic-secondary-heading">Kemudahan Tanpa Royalti, 100% Keuntungan Milik Mitra</h3><div id="text_block-544-472" class="ct-text-block" >  Sistem kemitraan Cleanique Mart bukan franchise, sehingga Anda tidak perlu menyetor royalti atau sharing profit ke pusat. Seluruh keuntungan dari penjualan sepenuhnya menjadi milik Anda sebagai mitra.</div></div></div><div id="div_block-551-472" class="ct-div-block" ><div id="div_block-552-472" class="ct-div-block" ><div id="fancy_icon-553-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-553-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div></div><div id="div_block-554-472" class="ct-div-block" ><h3 id="headline-555-472" class="ct-headline atomic-secondary-heading">Kemudahan&nbsp;Tanpa Harus Sewa Toko Fisik Bisa Dijalankan dari Rumah</h3><div id="text_block-556-472" class="ct-text-block" >  Kami mendesain model usaha yang fleksibel, bisa dijalankan dari rumah tanpa harus menyewa ruko atau kios. Ini sangat cocok untuk pemula yang ingin memulai usaha dengan risiko dan biaya tetap yang rendah.</div></div></div><div id="div_block-563-472" class="ct-div-block" ><div id="div_block-564-472" class="ct-div-block" ><div id="fancy_icon-565-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-565-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div></div><div id="div_block-566-472" class="ct-div-block" ><h3 id="headline-567-472" class="ct-headline atomic-secondary-heading">Kemudahan Modal Awal Terjangkau, Mulai dari Paket Basic</h3><div id="text_block-568-472" class="ct-text-block" >  Tersedia beberapa pilihan paket usaha yang bisa disesuaikan dengan kondisi keuangan Anda. Paket basic memungkinkan Anda memulai dengan modal yang minim, tapi tetap berpotensi berkembang besar.</div></div></div></div><div id="div_block-534-472" class="ct-div-block" ><img  id="image-536-472" alt="Mitra Cleanique Mart Temanggung 2" src="<?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Temanggung-2.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Temanggung-2.webp 899w, <?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Temanggung-2.webp 169w, <?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Temanggung-2.webp 575w, <?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Temanggung-2.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Mitra-Cleanique-Mart-Temanggung-2.webp 863w" sizes="(max-width: 899px) 100vw, 899px" /></div></div><div id="new_columns-589-472" class="ct-new-columns" ><div id="div_block-590-472" class="ct-div-block" ><div id="div_block-591-472" class="ct-div-block" ><div id="div_block-592-472" class="ct-div-block" ><div id="fancy_icon-593-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-593-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div></div><div id="div_block-594-472" class="ct-div-block" ><h3 id="headline-595-472" class="ct-headline atomic-secondary-heading">Kemudahan Panduan Lengkap dan Pelatihan Online Gratis</h3><div id="text_block-596-472" class="ct-text-block" >  Kami menyediakan pelatihan usaha, teknis, dan pemasaran secara gratis dan online. Mitra akan mendapatkan panduan meracik produk, cara penjualan, hingga strategi branding yang telah terbukti sukses digunakan.</div></div></div><div id="div_block-597-472" class="ct-div-block" ><div id="div_block-598-472" class="ct-div-block" ><div id="fancy_icon-599-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-599-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div></div><div id="div_block-600-472" class="ct-div-block" ><h3 id="headline-601-472" class="ct-headline atomic-secondary-heading">Kemudahan Bisa Dimulai Sambil Tetap Bekerja / Ibu Rumah Tangga</h3><div id="text_block-602-472" class="ct-text-block" >  Waktu kerja yang fleksibel membuat usaha ini ideal untuk dijalankan secara sampingan. Cocok bagi karyawan, mahasiswa, ibu rumah tangga, atau siapa pun yang ingin mendapatkan penghasilan tambahan dari rumah.</div></div></div></div><div id="div_block-609-472" class="ct-div-block" ><div id="div_block-623-472" class="ct-div-block" ><div id="div_block-624-472" class="ct-div-block" ><div id="fancy_icon-625-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-625-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div></div><div id="div_block-626-472" class="ct-div-block" ><h3 id="headline-627-472" class="ct-headline atomic-secondary-heading">Kemudahan Sistem Order &amp; Laporan Penjualan Digital</h3><div id="text_block-628-472" class="ct-text-block" >  Kami menyediakan sistem digital untuk pencatatan transaksi, pemesanan produk, hingga pemantauan stok. Semua proses lebih efisien dan transparan, memudahkan Anda mengelola bisnis meskipun tanpa pengalaman bisnis sebelumnya.</div></div></div><div id="div_block-629-472" class="ct-div-block" ><div id="div_block-630-472" class="ct-div-block" ><div id="fancy_icon-631-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-631-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div></div><div id="div_block-632-472" class="ct-div-block" ><h3 id="headline-633-472" class="ct-headline atomic-secondary-heading">Kemudahan Dukungan Branding dan Materi Promosi dari Pusat</h3><div id="text_block-634-472" class="ct-text-block" >  Tim pusat menyediakan desain materi promosi, konten media sosial, hingga strategi marketing untuk membantu Anda memasarkan produk secara profesional. Anda tinggal fokus pada penjualan tanpa repot membuat materi dari nol.</div></div></div></div></div><div id="text_block-639-472" class="ct-text-block atomic-subheading" >Kami telah menyiapkan semua sistem dan alat bantu agar Anda bisa langsung fokus pada penjualan dan pengembangan pasar. Tanpa pengalaman pun, Anda bisa <b>memulai bersama kami dengan percaya diri</b>.</div></div></section><section id="section-222-472" class=" ct-section" ><div class="ct-section-inner-wrap"><h2 id="headline-223-472" class="ct-headline atomic-secondary-heading"><span id="span-224-472" class="ct-span" >Review&nbsp;Produk</span>&nbsp;<br>Cleanique Mart di Marketplace</h2><h3 id="headline-225-472" class="ct-headline atomic-secondary-heading">Klik untuk memperbesar gambar&nbsp;</h3><div id="text_block-226-472" class="ct-text-block atomic-subheading" >Berikut ini adalah beberapa review produk kami via marketplace<br><b></b></div><div id="div_block-227-472" class="ct-div-block" ><style>/* FLEX GALLERY */

.oxy-gallery.oxy-gallery-flex {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
}

.oxy-gallery-flex .oxy-gallery-item {
	overflow: hidden;
	flex: auto;

}

.oxy-gallery-flex .oxy-gallery-item-sizer {
	position: relative;
}

.oxy-gallery-flex .oxy-gallery-item-contents {
	position: absolute;
	top: 0; bottom: 0; left: 0; right: 0;
	background-size: cover;
	margin: 0;
}

.oxy-gallery-flex .oxy-gallery-item-contents img {
	width: 100%;
	height: 100%;
	opacity: 0;
}



/* MASONRY GALLERY */

.oxy-gallery.oxy-gallery-masonry {
	display: block;
	overflow: auto;
}

.oxy-gallery-masonry .oxy-gallery-item {
	break-inside: avoid;
	display: block;
	line-height: 0;
	position: relative;
}

.oxy-gallery-masonry figure.oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents img {
	max-width: 100%;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}

/* GRID GALLERY */
.oxy-gallery-grid .oxy-gallery-item {
	overflow: hidden;
	flex: auto;
	position: relative;
}

.oxy-gallery-grid .oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-grid .oxy-gallery-item-contents img {
	width: 100%;
	height: auto;
}

.oxy-gallery-grid .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}</style><style data-element-id="#_gallery-228-472">
            #_gallery-228-472.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(0,0,0,0.75); /* caption background color */
                padding: 1em;
                color: #ffffff;  /* caption text color */
                font-weight: bold;
                -webkit-font-smoothing: antialiased;
                font-size: 1em;
                text-align: center;
                line-height: var(--oxy-small-line-height);
                /*pointer-events: none;*/
                transition: 0.3s ease-in-out opacity;
                display: block;
            }

                
            #_gallery-228-472.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                opacity: 0;
            }
            #_gallery-228-472.oxy-gallery-captions .oxy-gallery-item:hover .oxy-gallery-item-contents figcaption {
                opacity: 1;
            }

                    
            /* hover effects */
            #_gallery-228-472.oxy-gallery .oxy-gallery-item {
              opacity: ;
              transition: 0.3s ease-in-out opacity;
            }

            #_gallery-228-472.oxy-gallery .oxy-gallery-item:hover {
              opacity: ;
            }

        
            #_gallery-228-472 .oxy-gallery-item .oxy-gallery-item-contents {
                height: 100%;
            }
            #_gallery-228-472 .oxy-gallery-item .oxy-gallery-item-contents img {
                height: 100%;
                object-fit: cover;
            }

        </style>        <div id="_gallery-228-472" class="oxy-gallery oxy-gallery-captions oxy-gallery-grid" >
        
            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/review-determart.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/review-determart.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/review-determart.webp" data-original-src-width="460" data-original-src-height="890" alt="">
                        <figcaption>Review Determart</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/review-essenz.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/review-essenz.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/review-essenz.webp" data-original-src-width="460" data-original-src-height="890" alt="">
                        <figcaption>Review Essenz</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/review-soft-sense.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/review-soft-sense.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/review-soft-sense.webp" data-original-src-width="460" data-original-src-height="890" alt="">
                        <figcaption>Review Soft Sense</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/review-pelicin-setrika.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/review-pelicin-setrika.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/review-pelicin-setrika.webp" data-original-src-width="460" data-original-src-height="890" alt="">
                        <figcaption>Review Pelicin  Setrika</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/review-malabeez.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/review-malabeez.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/review-malabeez.webp" data-original-src-width="460" data-original-src-height="890" alt="">
                        <figcaption>Review Malabeez</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/review-oclean.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/review-oclean.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/review-oclean.webp" data-original-src-width="460" data-original-src-height="890" alt="">
                        <figcaption>Review O Clean</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/review-pel-lantai.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/review-pel-lantai.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/review-pel-lantai.webp" data-original-src-width="460" data-original-src-height="890" alt="">
                        <figcaption>Review Pel Lantai</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/review-athari.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/review-athari.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/review-athari.webp" data-original-src-width="460" data-original-src-height="890" alt="">
                        <figcaption>Review Athari</figcaption>

                    </figure>
                    
                </a>

            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/review-arai.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/review-arai.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/review-arai.webp" data-original-src-width="460" data-original-src-height="890" alt="">
                        <figcaption>Review Arai</figcaption>

                    </figure>
                    
                </a>

            
                </div>
                        <script type="text/javascript">
                    document.addEventListener("oxygenVSBInitGalleryJs_gallery-228-472",function(){
                        if(jQuery('#_gallery-228-472').photoSwipe) {
                            jQuery('#_gallery-228-472').photoSwipe('.oxy-gallery-item-contents');
                        }
                    },false);
                    jQuery(document).ready(function() {
                        let event = new Event('oxygenVSBInitGalleryJs_gallery-228-472');
                        document.dispatchEvent(event);
                    });
                </script>
            </div><link rel='stylesheet' id='oxygen-unslider-css'  href='https://cleaniquemart.com/wp-content/plugins/oxygen/component-framework/vendor/unslider/unslider.css' type='text/css' media='all'/><div id="slider-229-472" class="ct-slider ct_unique_slider_1742" ><div class="oxygen-unslider-container"><ul><li><div id="slide-230-472" class="ct-slide" ><img  id="image-231-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/review-determart.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/review-determart.webp 460w, <?php echo esc_url($theme_uri); ?>/assets/images/review-determart-155x300.webp 155w" sizes="(max-width: 460px) 100vw, 460px" /></div></li><li><div id="slide-232-472" class="ct-slide" ><img  id="image-233-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/review-essenz.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/review-essenz.webp 460w, <?php echo esc_url($theme_uri); ?>/assets/images/review-essenz-155x300.webp 155w" sizes="(max-width: 460px) 100vw, 460px" /></div></li><li><div id="slide-234-472" class="ct-slide" ><img  id="image-235-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/review-soft-sense.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/review-soft-sense.webp 460w, <?php echo esc_url($theme_uri); ?>/assets/images/review-soft-sense-155x300.webp 155w" sizes="(max-width: 460px) 100vw, 460px" /></div></li><li><div id="slide-236-472" class="ct-slide" ><img  id="image-237-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/review-pelicin-setrika.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/review-pelicin-setrika.webp 460w, <?php echo esc_url($theme_uri); ?>/assets/images/review-pelicin-setrika-155x300.webp 155w" sizes="(max-width: 460px) 100vw, 460px" /></div></li><li><div id="slide-238-472" class="ct-slide" ><img  id="image-239-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/review-malabeez.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/review-malabeez.webp 460w, <?php echo esc_url($theme_uri); ?>/assets/images/review-malabeez-155x300.webp 155w" sizes="(max-width: 460px) 100vw, 460px" /></div></li><li><div id="slide-240-472" class="ct-slide" ><img  id="image-241-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/review-oclean.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/review-oclean.webp 460w, <?php echo esc_url($theme_uri); ?>/assets/images/review-oclean-155x300.webp 155w" sizes="(max-width: 460px) 100vw, 460px" /></div></li><li><div id="slide-242-472" class="ct-slide" ><img  id="image-243-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/review-pel-lantai.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/review-pel-lantai.webp 460w, <?php echo esc_url($theme_uri); ?>/assets/images/review-pel-lantai-155x300.webp 155w" sizes="(max-width: 460px) 100vw, 460px" /></div></li><li><div id="slide-244-472" class="ct-slide" ><img  id="image-245-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/review-athari.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/review-athari.webp 460w, <?php echo esc_url($theme_uri); ?>/assets/images/review-athari-155x300.webp 155w" sizes="(max-width: 460px) 100vw, 460px" /></div></li><li><div id="slide-246-472" class="ct-slide" ><img  id="image-247-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/review-arai.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/review-arai.webp 460w, <?php echo esc_url($theme_uri); ?>/assets/images/review-arai-155x300.webp 155w" sizes="(max-width: 460px) 100vw, 460px" /></div></li></ul></div></div><script class="ct-slider-script">jQuery(document).ready(function($){$('#slider-229-472.ct_unique_slider_1742 .oxygen-unslider-container:not(.unslider-horizontal,.unslider-fade)').unslider({autoplay: true, delay: 3000, animation: 'horizontal', speed : 750, arrows: true, nav: true, infinite: true})});</script></div></section><section id="section-249-472" class=" ct-section" ><div class="ct-section-inner-wrap"><h2 id="headline-250-472" class="ct-headline atomic-secondary-heading"><span id="span-251-472" class="ct-span" >Varian Produk</span>&nbsp;<br>Isi Ulang Sabun Cleanique Mart</h2><div id="div_block-252-472" class="ct-div-block" ><div id="div_block-253-472" class="ct-div-block" ><img  id="image-254-472" alt="Hand Wash Cleanique Mart" src="<?php echo esc_url($theme_uri); ?>/assets/images/Hand-Washing-25L.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Hand-Washing-25L.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/Hand-Washing-25L-212x300.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/Hand-Washing-25L-724x1024.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/Hand-Washing-25L-768x1086.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Hand-Washing-25L-1086x1536.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /><div id="div_block-255-472" class="ct-div-block" ><h3 id="text_block-256-472" class="ct-text-block" >Hand Wash 25 L</h3></div></div><div id="div_block-257-472" class="ct-div-block" ><img loading="lazy" id="image-258-472" alt="Deterjen Busa Cleanique Mart" src="<?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Busa-25L.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Busa-25L.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Busa-25L-212x300.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Busa-25L-724x1024.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Busa-25L-768x1086.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Busa-25L-1086x1536.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /><div id="div_block-259-472" class="ct-div-block" ><h3 id="text_block-260-472" class="ct-text-block" >Deterjen Busa 25 L</h3></div></div><div id="div_block-261-472" class="ct-div-block" ><img  id="image-262-472" alt="Deterjen Matic Cleanique Mart" src="<?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Matic-25L.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Matic-25L.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Matic-25L-212x300.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Matic-25L-724x1024.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Matic-25L-768x1086.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Deterjen-Matic-25L-1086x1536.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /><div id="div_block-263-472" class="ct-div-block" ><h3 id="text_block-264-472" class="ct-text-block" >Deterjen Matic 25 L</h3></div></div><div id="div_block-265-472" class="ct-div-block" ><img  id="image-266-472" alt="Parfum Waterbase Cleanique Mart" src="<?php echo esc_url($theme_uri); ?>/assets/images/Parfum-Waterbase-25L.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Parfum-Waterbase-25L.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/Parfum-Waterbase-25L-212x300.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/Parfum-Waterbase-25L-724x1024.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/Parfum-Waterbase-25L-768x1086.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Parfum-Waterbase-25L-1086x1536.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /><div id="div_block-267-472" class="ct-div-block" ><h3 id="text_block-268-472" class="ct-text-block" >Parfum Waterbase 25 L</h3></div></div><div id="div_block-269-472" class="ct-div-block" ><img  id="image-270-472" alt="Softener Cleanique Mart" src="<?php echo esc_url($theme_uri); ?>/assets/images/Softener-25L.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Softener-25L.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/Softener-25L-212x300.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/Softener-25L-724x1024.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/Softener-25L-768x1086.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Softener-25L-1086x1536.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /><div id="div_block-271-472" class="ct-div-block" ><h3 id="text_block-272-472" class="ct-text-block" >Softener 25 L</h3></div></div><div id="div_block-273-472" class="ct-div-block" ><img  id="image-274-472" alt="Pelicin Setrika Cleanique Mart" src="<?php echo esc_url($theme_uri); ?>/assets/images/Pelicin-Setrika-25L.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Pelicin-Setrika-25L.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/Pelicin-Setrika-25L-212x300.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/Pelicin-Setrika-25L-724x1024.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/Pelicin-Setrika-25L-768x1086.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Pelicin-Setrika-25L-1086x1536.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /><div id="div_block-275-472" class="ct-div-block" ><h3 id="text_block-276-472" class="ct-text-block" >Pelicin Setrika 25 L</h3></div></div><div id="div_block-277-472" class="ct-div-block" ><img  id="image-278-472" alt="Dish Washing Cleanique Mart" src="<?php echo esc_url($theme_uri); ?>/assets/images/Dish-Washing-25L.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Dish-Washing-25L.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/Dish-Washing-25L-212x300.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/Dish-Washing-25L-724x1024.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/Dish-Washing-25L-768x1086.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Dish-Washing-25L-1086x1536.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /><div id="div_block-279-472" class="ct-div-block" ><h3 id="text_block-280-472" class="ct-text-block" >Sabun Cuci Piring 25 L</h3></div></div><div id="div_block-281-472" class="ct-div-block" ><img  id="image-282-472" alt="Pel Lantai Cleanique Mart" src="<?php echo esc_url($theme_uri); ?>/assets/images/Pel-Lantai-25L.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Pel-Lantai-25L.webp 1414w, <?php echo esc_url($theme_uri); ?>/assets/images/Pel-Lantai-25L-212x300.webp 212w, <?php echo esc_url($theme_uri); ?>/assets/images/Pel-Lantai-25L-724x1024.webp 724w, <?php echo esc_url($theme_uri); ?>/assets/images/Pel-Lantai-25L-768x1086.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/Pel-Lantai-25L-1086x1536.webp 1086w" sizes="(max-width: 1414px) 100vw, 1414px" /><div id="div_block-283-472" class="ct-div-block" ><h3 id="text_block-284-472" class="ct-text-block" >Pel Lantai 25 L</h3></div></div></div><a id="link-285-472" class="ct-link oxel_icon_button__container" href="<?php echo esc_url($lp_wa_url); ?>" target="_blank" rel="nofollow"  role="button"><div id="fancy_icon-286-472" class="ct-fancy-icon oxel_icon_button_icon" ><svg id="svg-fancy_icon-286-472"><use xlink:href="#FontAwesomeicon-whatsapp"></use></svg></div><div id="text_block-287-472" class="ct-text-block oxel_icon_button_text" >HUBUNGI KAMI</div></a></div></section><section id="section-289-472" class=" ct-section" ><div class="ct-section-inner-wrap"><div id="div_block-290-472" class="ct-div-block" ><h2 id="headline-291-472" class="ct-headline atomic-secondary-heading">Sabun Curah Cleanique Mart<br>&nbsp;<span id="span-292-472" class="ct-span" >Sangat Dibutuhkan</span>&nbsp;<br>Oleh Pemilik Usaha</h2><div id="div_block-293-472" class="ct-div-block" ><div id="div_block-294-472" class="ct-div-block" ><div id="fancy_icon-295-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-295-472"><use xlink:href="#Lineariconsicon-shirt"></use></svg></div><div id="text_block-296-472" class="ct-text-block" >Laundry</div></div><div id="div_block-297-472" class="ct-div-block" ><div id="fancy_icon-298-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-298-472"><use xlink:href="#Lineariconsicon-dinner"></use></svg></div><div id="text_block-299-472" class="ct-text-block" >Rumah Makan/Restoran</div></div><div id="div_block-300-472" class="ct-div-block" ><div id="fancy_icon-301-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-301-472"><use xlink:href="#Lineariconsicon-home"></use></svg></div><div id="text_block-302-472" class="ct-text-block" >Rumah Tangga</div></div><div id="div_block-303-472" class="ct-div-block" ><div id="fancy_icon-304-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-304-472"><use xlink:href="#Lineariconsicon-apartment"></use></svg></div><div id="text_block-305-472" class="ct-text-block" >Industri Gedung</div></div><div id="div_block-306-472" class="ct-div-block" ><div id="fancy_icon-307-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-307-472"><use xlink:href="#Lineariconsicon-dice"></use></svg></div><div id="text_block-308-472" class="ct-text-block" >Hotel/Penginapan</div></div><div id="div_block-309-472" class="ct-div-block" ><div id="fancy_icon-310-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-310-472"><use xlink:href="#Lineariconsicon-store"></use></svg></div><div id="text_block-311-472" class="ct-text-block" >Salon</div></div><div id="div_block-312-472" class="ct-div-block" ><div id="fancy_icon-313-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-313-472"><use xlink:href="#Lineariconsicon-heart-pulse"></use></svg></div><div id="text_block-314-472" class="ct-text-block" >Klinik dan Rumah Sakit</div></div><div id="div_block-315-472" class="ct-div-block" ><div id="fancy_icon-316-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-316-472"><use xlink:href="#Lineariconsicon-car"></use></svg></div><div id="text_block-317-472" class="ct-text-block" >Cuci Mobil/Motor</div></div><div id="div_block-318-472" class="ct-div-block" ><div id="fancy_icon-319-472" class="ct-fancy-icon" ><svg id="svg-fancy_icon-319-472"><use xlink:href="#Lineariconsicon-moon"></use></svg></div><div id="text_block-320-472" class="ct-text-block" >Tempat Ibadah</div></div></div></div></div></section><section id="section-322-472" class=" ct-section" ><div class="ct-section-inner-wrap"><h2 id="headline-323-472" class="ct-headline atomic-secondary-heading">Alasan Kenapa&nbsp;<br><span id="span-324-472" class="ct-span" >Harus&nbsp;Memilih Cleanique Mart</span></h2><div id="new_columns-325-472" class="ct-new-columns" ><div id="div_block-326-472" class="ct-div-block" ><img loading="lazy" id="image-327-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/indotech-full-scaled.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/indotech-full-scaled.webp 2560w, <?php echo esc_url($theme_uri); ?>/assets/images/indotech-full-300x86.webp 300w, <?php echo esc_url($theme_uri); ?>/assets/images/indotech-full-1024x292.webp 1024w, <?php echo esc_url($theme_uri); ?>/assets/images/indotech-full-768x219.webp 768w, <?php echo esc_url($theme_uri); ?>/assets/images/indotech-full-1536x438.webp 1536w, <?php echo esc_url($theme_uri); ?>/assets/images/indotech-full-2048x584.webp 2048w" sizes="(max-width: 2560px) 100vw, 2560px" /><p id="text_block-328-472" class="ct-text-block" ><b>PT Indotech Berkah Abadi</b>&nbsp;berpengalaman dalam bisnis produk <b>PKRT (Perbekalan Kesehatan<br>Rumah Tangga)</b> selama lebih dari 13 tahun (sejak 2011). Distribusi produk kami lebih menyasar pada segmen pasar <b>B2B (business to business)</b> dan juga tidak menutup untuk pasar retail jika terkendala pada akses ke distributor ataupun agen.<br>Produk yang Kami hasilkan memiliki kualitas yang tinggi yang dibuktikan dari hasil uji lab, adanya <b>sertifkat produksi</b>,dan <b>izin edar</b><br></p></div><div id="div_block-329-472" class="ct-div-block" ><style>/* FLEX GALLERY */

.oxy-gallery.oxy-gallery-flex {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
}

.oxy-gallery-flex .oxy-gallery-item {
	overflow: hidden;
	flex: auto;

}

.oxy-gallery-flex .oxy-gallery-item-sizer {
	position: relative;
}

.oxy-gallery-flex .oxy-gallery-item-contents {
	position: absolute;
	top: 0; bottom: 0; left: 0; right: 0;
	background-size: cover;
	margin: 0;
}

.oxy-gallery-flex .oxy-gallery-item-contents img {
	width: 100%;
	height: 100%;
	opacity: 0;
}



/* MASONRY GALLERY */

.oxy-gallery.oxy-gallery-masonry {
	display: block;
	overflow: auto;
}

.oxy-gallery-masonry .oxy-gallery-item {
	break-inside: avoid;
	display: block;
	line-height: 0;
	position: relative;
}

.oxy-gallery-masonry figure.oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents img {
	max-width: 100%;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}

/* GRID GALLERY */
.oxy-gallery-grid .oxy-gallery-item {
	overflow: hidden;
	flex: auto;
	position: relative;
}

.oxy-gallery-grid .oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-grid .oxy-gallery-item-contents img {
	width: 100%;
	height: auto;
}

.oxy-gallery-grid .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}</style><style data-element-id="#_gallery-330-472">
            #_gallery-330-472.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(0,0,0,0.75); /* caption background color */
                padding: 1em;
                color: #ffffff;  /* caption text color */
                font-weight: bold;
                -webkit-font-smoothing: antialiased;
                font-size: 1em;
                text-align: center;
                line-height: var(--oxy-small-line-height);
                /*pointer-events: none;*/
                transition: 0.3s ease-in-out opacity;
                display: block;
            }

                
            #_gallery-330-472.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                opacity: 0;
            }
            #_gallery-330-472.oxy-gallery-captions .oxy-gallery-item:hover .oxy-gallery-item-contents figcaption {
                opacity: 1;
            }

                    
            /* hover effects */
            #_gallery-330-472.oxy-gallery .oxy-gallery-item {
              opacity: ;
              transition: 0.3s ease-in-out opacity;
            }

            #_gallery-330-472.oxy-gallery .oxy-gallery-item:hover {
              opacity: ;
            }

        </style>        <div id="_gallery-330-472" class="oxy-gallery oxy-gallery-captions oxy-gallery-grid" >
        
            
                <a href='<?php echo esc_url($theme_uri); ?>/assets/images/photo-collage.webp'  class='oxy-gallery-item'>

                    <figure class='oxy-gallery-item-contents'>

                        <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/photo-collage.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/photo-collage.webp" data-original-src-width="1080" data-original-src-height="1080" alt="">
                        <figcaption></figcaption>

                    </figure>
                    
                </a>

            
                </div>
                        <script type="text/javascript">
                    document.addEventListener("oxygenVSBInitGalleryJs_gallery-330-472",function(){
                        if(jQuery('#_gallery-330-472').photoSwipe) {
                            jQuery('#_gallery-330-472').photoSwipe('.oxy-gallery-item-contents');
                        }
                    },false);
                    jQuery(document).ready(function() {
                        let event = new Event('oxygenVSBInitGalleryJs_gallery-330-472');
                        document.dispatchEvent(event);
                    });
                </script>
            </div></div></div></section><section id="section-851-472" class=" ct-section" ><div class="ct-section-inner-wrap"><div id="div_block-852-472" class="ct-div-block" ><h2 id="headline-853-472" class="ct-headline atomic-secondary-heading"><span id="span-885-472" class="ct-span" >Ongkir Menjadi Lebih Hemat</span> Berkat Sistem Pengiriman Terpusat</h2><div id="div_block-919-472" class="ct-div-block" ><div id="div_block-924-472" class="ct-div-block" ><div id="div_block-934-472" class="ct-div-block" ><div id="text_block-923-472" class="ct-text-block atomic-subheading" >Untuk mendukung<b> kemudahan dan penghematan bagi mitra</b>, pengiriman paket usaha Cleanique Mart tidak hanya mengandalkan ekspedisi reguler, tetapi juga memanfaatkan layanan<b> kargo yang lebih ekonomis</b>, terutama untuk pengiriman dalam jumlah besar.&nbsp;<br>Selain itu, customer juga dapat <b>membeli langsung dari mitra Cleanique Mart terdekat</b> di wilayah masing-masing. Dengan cara ini, ongkos kirim bisa ditekan semaksimal mungkin, bahkan memungkinkan pengambilan langsung atau pengiriman lokal yang jauh lebih murah dan cepat.<br></div></div></div><div id="div_block-925-472" class="ct-div-block" ><style>/* FLEX GALLERY */

.oxy-gallery.oxy-gallery-flex {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
}

.oxy-gallery-flex .oxy-gallery-item {
	overflow: hidden;
	flex: auto;

}

.oxy-gallery-flex .oxy-gallery-item-sizer {
	position: relative;
}

.oxy-gallery-flex .oxy-gallery-item-contents {
	position: absolute;
	top: 0; bottom: 0; left: 0; right: 0;
	background-size: cover;
	margin: 0;
}

.oxy-gallery-flex .oxy-gallery-item-contents img {
	width: 100%;
	height: 100%;
	opacity: 0;
}



/* MASONRY GALLERY */

.oxy-gallery.oxy-gallery-masonry {
	display: block;
	overflow: auto;
}

.oxy-gallery-masonry .oxy-gallery-item {
	break-inside: avoid;
	display: block;
	line-height: 0;
	position: relative;
}

.oxy-gallery-masonry figure.oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents img {
	max-width: 100%;
}

.oxy-gallery-masonry .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}

/* GRID GALLERY */
.oxy-gallery-grid .oxy-gallery-item {
	overflow: hidden;
	flex: auto;
	position: relative;
}

.oxy-gallery-grid .oxy-gallery-item-contents {
	margin: 0;
}

.oxy-gallery-grid .oxy-gallery-item-contents img {
	width: 100%;
	height: auto;
}

.oxy-gallery-grid .oxy-gallery-item .oxy-gallery-item-contents figcaption {
	display: none;
}</style><style data-element-id="#_gallery-928-472">            #_gallery-928-472.oxy-gallery-flex .oxy-gallery-item {
                width: calc(100.000% - 10px - 10px);
                margin: 10px;
                min-width: px;
                overflow: hidden;
                flex: auto;
            }

            #_gallery-928-472.oxy-gallery-flex .oxy-gallery-item-sizer {
                padding-bottom: 56.25%;
                position: relative;
            }
        
            #_gallery-928-472.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(0,0,0,0.75); /* caption background color */
                padding: 1em;
                color: #ffffff;  /* caption text color */
                font-weight: bold;
                -webkit-font-smoothing: antialiased;
                font-size: 1em;
                text-align: center;
                line-height: var(--oxy-small-line-height);
                /*pointer-events: none;*/
                transition: 0.3s ease-in-out opacity;
                display: block;
            }

                
            #_gallery-928-472.oxy-gallery-captions .oxy-gallery-item .oxy-gallery-item-contents figcaption:not(:empty) {
                opacity: 0;
            }
            #_gallery-928-472.oxy-gallery-captions .oxy-gallery-item:hover .oxy-gallery-item-contents figcaption {
                opacity: 1;
            }

                    
            /* hover effects */
            #_gallery-928-472.oxy-gallery .oxy-gallery-item {
              opacity: ;
              transition: 0.3s ease-in-out opacity;
            }

            #_gallery-928-472.oxy-gallery .oxy-gallery-item:hover {
              opacity: ;
            }

        </style>        <div id="_gallery-928-472" class="oxy-gallery oxy-gallery-captions oxy-gallery-flex" >
        
                
                    <a href='<?php echo esc_url($theme_uri); ?>/assets/images/ONGKIR-REGULER.webp'  class='oxy-gallery-item'>
                        <div class='oxy-gallery-item-sizer'>

                            <figure class='oxy-gallery-item-contents' style='background-image: url(<?php echo esc_url($theme_uri); ?>/assets/images/ONGKIR-REGULER.webp);'>

                                <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/ONGKIR-REGULER.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/ONGKIR-REGULER.webp" data-original-src-width="1920" data-original-src-height="1080" alt="Ongkos Kirim Reguler">
                                <figcaption>Ongkos Kirim Reguler</figcaption>

                            </figure>

                        </div>
                    </a>

                
                    <a href='<?php echo esc_url($theme_uri); ?>/assets/images/ONGKIR-CARGO.webp'  class='oxy-gallery-item'>
                        <div class='oxy-gallery-item-sizer'>

                            <figure class='oxy-gallery-item-contents' style='background-image: url(<?php echo esc_url($theme_uri); ?>/assets/images/ONGKIR-CARGO.webp);'>

                                <img  src="<?php echo esc_url($theme_uri); ?>/assets/images/ONGKIR-CARGO.webp" data-original-src="<?php echo esc_url($theme_uri); ?>/assets/images/ONGKIR-CARGO.webp" data-original-src-width="1920" data-original-src-height="1080" alt="Ongkos Kirim Cargo">
                                <figcaption>Ongkos Kirim Cargo</figcaption>

                            </figure>

                        </div>
                    </a>

                
                </div>
                        <script type="text/javascript">
                    document.addEventListener("oxygenVSBInitGalleryJs_gallery-928-472",function(){
                        if(jQuery('#_gallery-928-472').photoSwipe) {
                            jQuery('#_gallery-928-472').photoSwipe('.oxy-gallery-item-contents');
                        }
                    },false);
                    jQuery(document).ready(function() {
                        let event = new Event('oxygenVSBInitGalleryJs_gallery-928-472');
                        document.dispatchEvent(event);
                    });
                </script>
            </div><div id="div_block-929-472" class="ct-div-block" ><div id="div_block-937-472" class="ct-div-block" ><div id="div_block-936-472" class="ct-div-block" ><h3 id="headline-933-472" class="ct-headline atomic-secondary-heading">Perbandingan Simulasi Pengiriman Dari Mitra Terdekat dan Dari Pusat<br></h3><div id="text_block-945-472" class="ct-text-block atomic-subheading" ><b>Contoh :</b> Pengiriman produk Cleanique isi ulang sebanyak <b>30 kg</b> untuk kebutuhan mitra baru<br></div></div><div id="div_block-938-472" class="ct-div-block" ><div id="div_block-1073-472" class="ct-div-block" ><div id="div_block-1074-472" class="ct-div-block" ><h3 id="text_block-1075-472" class="ct-text-block" >Simulasi A </h3><div id="text_block-1076-472" class="ct-text-block atomic-subheading" ><b></b> Kirim Langsung dari Pusat (Jogja ke Pontianak)<br><br></div></div><div id="div_block-1077-472" class="ct-div-block" ><div id="div_block-1078-472" class="ct-div-block oxel_iconlist" ><div id="div_block-1079-472" class="ct-div-block oxel_iconlist__row" ><div id="fancy_icon-1080-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-1080-472"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1081-472" class="ct-text-block oxel_iconlist__row__label" >Berat barang: <b>30 kg</b></div></div><div id="div_block-1082-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-1083-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-1083-472"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1084-472" class="ct-text-block oxel_iconlist__row__label" >Pengiriman<b> </b>via <b>kargo darat &amp; laut (ekspedisi reguler)</b></div></div><div id="div_block-1085-472" class="ct-div-block oxel_iconlist__row" ><div id="fancy_icon-1086-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-1086-472"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1087-472" class="ct-text-block oxel_iconlist__row__label" >Estimasi ongkos kirim: <b>Rp 450.000 – Rp 600.000</b><span style="font-weight: normal;"></span></div></div><div id="div_block-1088-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-1089-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-1089-472"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1090-472" class="ct-text-block oxel_iconlist__row__label" >Estimasi waktu pengiriman:<b>&nbsp;7–10 hari kerja</b></div></div></div></div></div></div><div id="div_block-942-472" class="ct-div-block" ><div id="div_block-1030-472" class="ct-div-block" ><div id="div_block-1031-472" class="ct-div-block" ><h3 id="text_block-1032-472" class="ct-text-block" >Simulasi B&nbsp;</h3><div id="text_block-1033-472" class="ct-text-block atomic-subheading" ><b></b> Ambil Stok dari Mitra Terdekat (Misal: Mitra Cleanique Mart di Pontianak atau Singkawang)<br></div></div><div id="div_block-1034-472" class="ct-div-block" ><div id="div_block-1035-472" class="ct-div-block oxel_iconlist" ><div id="div_block-1036-472" class="ct-div-block oxel_iconlist__row" ><div id="fancy_icon-1037-4722" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-1037-4722"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1038-472" class="ct-text-block oxel_iconlist__row__label" >Berat barang:<b> 30 kg</b></div></div><div id="div_block-1039-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-1040-4722" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-1040-4722"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1041-472" class="ct-text-block oxel_iconlist__row__label" >Pengiriman via <b>kurir lokal / ojek online / COD</b></div></div><div id="div_block-1042-472" class="ct-div-block oxel_iconlist__row" ><div id="fancy_icon-1043-4722" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-1043-4722"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1044-472" class="ct-text-block oxel_iconlist__row__label" >Estimasi ongkos kirim: <b>Rp 50.000 – Rp 100.000 (bahkan bisa ambil langsung)</b><span style="font-weight: normal;"></span></div></div><div id="div_block-1045-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-1046-4722" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-1046-4722"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1047-472" class="ct-text-block oxel_iconlist__row__label" >Estimasi waktu pengiriman: <b>1 hari / langsung</b></div></div></div></div></div></div></div></div></div></div></div></section><section id="section-332-472" class=" ct-section" ><div class="ct-section-inner-wrap"><div id="div_block-333-472" class="ct-div-block" ><h2 id="headline-907-472" class="ct-headline atomic-secondary-heading"><span id="span-912-472" class="ct-span" >Pilihan Paket Usaha Cleanique Mart</span><br>Yang Dapat Anda Pilih<br></h2><div id="promo2025" class="ct-text-block atomic-subheading" >Dapatkan <b>Harga Spesial</b> untuk Paket King hanya di bulan ini! Stok terbatas, waktu terbatas <b>jangan sia-siakan kesempatan ini</b> untuk memulai usaha dengan potensi keuntungan besar bersama Cleanique Mart.</div><div id="div_block-337-472" class="ct-div-block" ><div id="div_block-338-472" class="ct-div-block" ><h2 id="headline-339-472" class="ct-headline">PAKET STARTER</h2><div id="div_block-340-472" class="ct-div-block oxel_horizontal_divider" ><div id="code_block-341-472" class="ct-code-block oxel_horizontal_divider__line" ><!-- --></div><div id="code_block-342-472" class="ct-code-block oxel_horizontal_divider__line" ><!-- --></div></div><div id="div_block-343-472" class="ct-div-block" ><h5 id="text_block-344-472" class="ct-text-block" >Rp 15.000.000,-</h5></div><div id="div_block-345-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-346-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-346-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-347-472" class="ct-text-block oxel_iconlist__row__label" >Rak Depot 8 Kontainer</h4></div><div id="div_block-348-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-349-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-349-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-350-472" class="ct-text-block oxel_iconlist__row__label" >Produk Senilai 6.000.000</h4></div><div id="div_block-351-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-352-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-352-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-353-472" class="ct-text-block oxel_iconlist__row__label" >Desain 3D Interior</h4></div><div id="div_block-354-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-355-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-355-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-356-472" class="ct-text-block oxel_iconlist__row__label" >Lisensi Cleanique Mart</h4></div><div id="div_block-357-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-358-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-358-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-359-472" class="ct-text-block oxel_iconlist__row__label" >Peralatan Produksi</h4></div><div id="div_block-360-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-361-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-361-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-362-472" class="ct-text-block oxel_iconlist__row__label" >Include Biaya Kirim</h4></div><div id="div_block-363-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-364-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-364-472"><use xlink:href="#FontAwesomeicon-close"></use></svg></div><h4 id="text_block-365-472" class="ct-text-block oxel_iconlist__row__label" >Peralatan Packing</h4></div><div id="div_block-366-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-367-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-367-472"><use xlink:href="#FontAwesomeicon-close"></use></svg></div><h4 id="text_block-368-472" class="ct-text-block oxel_iconlist__row__label" >Set-Up Marketplace</h4></div><div id="div_block-369-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-370-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-370-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-371-472" class="ct-text-block oxel_iconlist__row__label" >Media Promo Cetak</h4></div><div id="div_block-372-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-373-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-373-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-374-472" class="ct-text-block oxel_iconlist__row__label" >Instalasi Media Promo&nbsp;<br>Cetak di Lokasi</h4></div><div id="div_block-375-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-376-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-376-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-377-472" class="ct-text-block oxel_iconlist__row__label" >Training Chemical&nbsp;<br>dan Bisnis<br></h4></div><div id="div_block-378-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-379-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-379-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-380-472" class="ct-text-block oxel_iconlist__row__label" >Landing Page SEO<br>Friendly</h4></div><div id="div_block-381-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-382-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-382-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-383-472" class="ct-text-block oxel_iconlist__row__label" >Listing &amp; Optimasi<br>Google Maps<br></h4></div><div id="div_block-384-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-385-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-385-472"><use xlink:href="#FontAwesomeicon-close"></use></svg></div><h4 id="text_block-386-472" class="ct-text-block oxel_iconlist__row__label" >Set-Up dan Optimasi<br>Sosmed</h4></div><div id="div_block-387-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-388-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-388-472"><use xlink:href="#FontAwesomeicon-close"></use></svg></div><h4 id="text_block-389-472" class="ct-text-block oxel_iconlist__row__label" >Filter UV<br></h4></div><a id="link-390-472" class="ct-link" href="<?php echo esc_url($lp_wa_url); ?>" target="_blank" rel="nofollow" ><h5 id="text_block-391-472" class="ct-text-block" >ORDER SEKARANG&nbsp;</h5></a></div><div id="div_block-392-472" class="ct-div-block" ><h2 id="headline-393-472" class="ct-headline">PAKET KING</h2><div id="div_block-394-472" class="ct-div-block oxel_horizontal_divider" ><div id="code_block-395-472" class="ct-code-block oxel_horizontal_divider__line" ><!-- --></div><div id="code_block-396-472" class="ct-code-block oxel_horizontal_divider__line" ><!-- --></div></div><div id="div_block-397-472" class="ct-div-block" ><h5 id="text_block-398-472" class="ct-text-block" >Rp 30.000.000,-</h5><h5 id="text_block-399-472" class="ct-text-block" >Rp 27.500.000,-</h5></div><div id="div_block-400-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-401-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-401-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-402-472" class="ct-text-block oxel_iconlist__row__label" >Rak Depot&nbsp;8 Kontainer</h4></div><div id="div_block-403-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-404-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-404-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-405-472" class="ct-text-block oxel_iconlist__row__label" >Produk Senilai 8.000.000</h4></div><div id="div_block-406-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-407-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-407-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-408-472" class="ct-text-block oxel_iconlist__row__label" >Desain 3D Interior</h4></div><div id="div_block-409-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-410-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-410-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-411-472" class="ct-text-block oxel_iconlist__row__label" >Lisensi Cleanique Mart</h4></div><div id="div_block-412-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-413-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-413-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-414-472" class="ct-text-block oxel_iconlist__row__label" >Peralatan Produksi</h4></div><div id="div_block-415-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-416-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-416-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-417-472" class="ct-text-block oxel_iconlist__row__label" >Include Biaya Kirim</h4></div><div id="div_block-418-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-419-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-419-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-420-472" class="ct-text-block oxel_iconlist__row__label" >Peralatan Packing</h4></div><div id="div_block-421-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-422-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-422-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-423-472" class="ct-text-block oxel_iconlist__row__label" >Set-Up Marketplace</h4></div><div id="div_block-424-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-425-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-425-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-426-472" class="ct-text-block oxel_iconlist__row__label" >Media Promo Cetak</h4></div><div id="div_block-427-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-428-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-428-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-429-472" class="ct-text-block oxel_iconlist__row__label" >Instalasi Media Promo&nbsp;<br>Cetak di Lokasi</h4></div><div id="div_block-430-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-431-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-431-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-432-472" class="ct-text-block oxel_iconlist__row__label" >Training Chemical&nbsp;<br>dan Bisnis<br></h4></div><div id="div_block-433-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-434-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-434-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-435-472" class="ct-text-block oxel_iconlist__row__label" >Landing Page SEO<br>Friendly</h4></div><div id="div_block-436-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-437-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-437-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-438-472" class="ct-text-block oxel_iconlist__row__label" >Listing &amp; Optimasi<br>Google Maps<br></h4></div><div id="div_block-439-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-440-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-440-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-441-472" class="ct-text-block oxel_iconlist__row__label" >Set-Up dan Optimasi<br>Sosmed</h4></div><div id="div_block-442-472" class="ct-div-block oxel_iconlist__row oxel_iconlist__row--dark" ><div id="fancy_icon-443-472" class="ct-fancy-icon oxel_iconlist__row__icon" ><svg id="svg-fancy_icon-443-472"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><h4 id="text_block-444-472" class="ct-text-block oxel_iconlist__row__label" >Filter UV<br></h4></div><img  id="image-445-472" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Hanya-untuk-10-orang-pertama.svg" class="ct-image" srcset="" sizes="(max-width: 111px) 100vw, 111px" /><a id="link-446-472" class="ct-link" href="<?php echo esc_url($lp_wa_url); ?>" target="_blank" rel="nofollow" ><h5 id="text_block-447-472" class="ct-text-block" >ORDER SEKARANG</h5></a></div></div></div></div></section><section id="section-449-472" class=" ct-section" ><div class="ct-section-inner-wrap"><img  id="image-450-472" alt="Garansi Sukses" src="<?php echo esc_url($theme_uri); ?>/assets/images/Garansi-Sukses.webp" class="ct-image" srcset="<?php echo esc_url($theme_uri); ?>/assets/images/Garansi-Sukses.webp 694w, <?php echo esc_url($theme_uri); ?>/assets/images/Garansi-Sukses.webp 300w" sizes="(max-width: 694px) 100vw, 694px" /><div id="text_block-451-472" class="ct-text-block" >Dengan keyakinan tinggi<br>akan suksesnya bisnis Anda,<br>Maka Kami akan mengambil alih<br>resiko kegagalan Anda.<br></div><div id="text_block-452-472" class="ct-text-block" >"Kami menjamin,&nbsp;<br></div><div id="text_block-453-472" class="ct-text-block" >modal Anda akan kembali&nbsp;<br>dalam&nbsp;12 bulan,&nbsp;<br></div><div id="text_block-454-472" class="ct-text-block" >atau kami mengembalikan<br>dana&nbsp;Anda&nbsp;sepenuhnya."*<br></div><div id="text_block-455-472" class="ct-text-block" >*syarat dan ketentuan berlaku</div></div></section><section 
</main>

<!-- Interactive Lightbox Modal for Testimonial Images & Outlets -->
<div id="cm-image-lightbox" style="display:none; position:fixed; z-index:999999; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.85); backdrop-filter:blur(8px); align-items:center; justify-content:center; cursor:zoom-out;">
    <button type="button" id="cm-lightbox-close" style="position:absolute; top:24px; right:28px; background:rgba(255,255,255,0.2); border:none; color:#fff; font-size:32px; width:48px; height:48px; border-radius:50%; cursor:pointer; display:flex; align-items:center; justify-content:center; transition:background 0.2s;">&times;</button>
    <img id="cm-lightbox-img" src="" alt="Zoom Preview" style="max-width:92%; max-height:90vh; border-radius:12px; box-shadow:0 25px 60px rgba(0,0,0,0.5); object-fit:contain;" />
</div>

<script>
(function($) {
    $(document).ready(function() {
        // 1. Live Countdown Timer to End of Month
        function updateCountdown() {
            var now = new Date();
            // End of current month
            var endOfMonth = new Date(now.getFullYear(), now.getMonth() + 1, 0, 23, 59, 59);
            var diff = endOfMonth - now;

            if (diff <= 0) {
                // If reached, set to next 3 days promo cycle
                diff = 3 * 24 * 60 * 60 * 1000;
            }

            var days = Math.floor(diff / (1000 * 60 * 60 * 24));
            var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((diff % (1000 * 60)) / 1000);

            $('#cm-days').text(days < 10 ? '0' + days : days);
            $('#cm-hours').text(hours < 10 ? '0' + hours : hours);
            $('#cm-minutes').text(minutes < 10 ? '0' + minutes : minutes);
            $('#cm-seconds').text(seconds < 10 ? '0' + seconds : seconds);
        }
        updateCountdown();
        setInterval(updateCountdown, 1000);

        // 2. Click to zoom on gallery items and images with click-to-enlarge
        $('.oxy-gallery-item, #div_block-135-472 img, #div_block-75-472 img, #div_block-225-472 img, .ct-gallery-item').on('click', function(e) {
            var $img = $(this).is('img') ? $(this) : $(this).find('img');
            var src = $img.attr('data-original-src') || $img.attr('src');
            if (src) {
                e.preventDefault();
                $('#cm-lightbox-img').attr('src', src);
                $('#cm-image-lightbox').css('display', 'flex').hide().fadeIn(200);
            }
        });

        $('#cm-image-lightbox, #cm-lightbox-close').on('click', function(e) {
            if (e.target !== document.getElementById('cm-lightbox-img')) {
                $('#cm-image-lightbox').fadeOut(200);
            }
        });

        // 3. Smooth scroll for anchor links
        $('a[href^="#"]').on('click', function(e) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                e.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 80
                }, 600);
            }
        });
    });
})(jQuery);
</script>

