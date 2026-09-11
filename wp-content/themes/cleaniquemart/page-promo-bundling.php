<?php
/**
 * Template Name: Promo Bundling Kebersihan Rumah (Authentic UI/UX)
 *
 * Halaman Landing Page Promo Bundling Cleanique Mart
 * Tepat sama persis dengan desain asli cleaniquemart.com/promo-bundling-kebersihan-rumah/
 */

$theme_uri = get_template_directory_uri();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Bundling Produk Kebersihan Rumah Tangga – Cleanique Mart</title>
    
    <!-- Google Fonts Authentic to Oxygen Page -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900|Source+Sans+3:100,200,300,400,500,600,700,800,900|Special+Elite:100,200,300,400,500,600,700,800,900">

    <!-- Oxygen Core & Stylesheets -->
    <link rel="stylesheet" href="<?php echo esc_url($theme_uri); ?>/assets/css/oxygen.css">
    <link rel="stylesheet" href="<?php echo esc_url($theme_uri); ?>/assets/css/oxygen-universal.css">
    <link rel="stylesheet" href="<?php echo esc_url($theme_uri); ?>/assets/css/oxygen-714.css">
    <link rel="stylesheet" href="<?php echo esc_url($theme_uri); ?>/assets/css/ctc-whatsapp.css">

    <!-- jQuery for smooth scrolling & interactions -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
    /* Global Base Tweaks */
    html {
        scroll-behavior: smooth;
    }
    body.oxygen-body {
        margin: 0;
        padding: 0;
        font-family: 'Open Sans', sans-serif;
        color: #333333;
        background-color: #ffffff;
        -webkit-font-smoothing: antialiased;
    }
    .ct-section {
        box-sizing: border-box;
    }
    .ct-section-inner-wrap {
        max-width: 1120px;
        margin-left: auto;
        margin-right: auto;
        box-sizing: border-box;
    }
    img {
        max-width: 100%;
        height: auto;
    }

    /* Social Icons Styling - Ensure white SVG icons inside blue squares */
    #_social_icons-1072-714.oxy-social-icons {
        display: flex !important;
        flex-direction: row !important;
        gap: 8px !important;
        align-items: center !important;
    }
    #_social_icons-1072-714.oxy-social-icons a {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 38px !important;
        height: 38px !important;
        background-color: #6799b2 !important;
        border-radius: 4px !important;
        transition: background-color 0.2s ease !important;
        text-decoration: none !important;
        margin: 0 !important;
    }
    #_social_icons-1072-714.oxy-social-icons a:hover {
        background-color: #004add !important;
    }
    #_social_icons-1072-714.oxy-social-icons a svg {
        width: 18px !important;
        height: 18px !important;
        fill: #ffffff !important;
        color: #ffffff !important;
        display: block !important;
    }
    #_social_icons-1072-714.oxy-social-icons a svg path {
        fill: #ffffff !important;
    }

    /* Email link styling */
    #link_text-1079-714, #link_text-133-714 {
        color: #6799b2;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s ease;
    }
    #link_text-1079-714:hover, #link_text-133-714:hover {
        color: #004add;
    }

    /* Top Header Bar Styling */
    #_header-126-714 {
        width: 100%;
        background: #ffffff;
        z-index: 100;
        position: relative;
    }
    #_header_row-127-714 {
        padding-top: 12px;
        padding-bottom: 4px;
    }
    #_header_row-127-714 .oxy-header-container {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        max-width: 1120px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 20px;
        padding-right: 20px;
    }
    #_header_right-131-714 {
        display: flex;
        align-items: center;
        gap: 16px;
    }
    #text_block-132-714 {
        color: #6799b2;
        font-size: 14px;
        font-weight: 500;
    }
    #_header_row-134-714 {
        padding-top: 8px;
        padding-bottom: 14px;
    }
    #_header_row-134-714 .oxy-header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1120px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 20px;
        padding-right: 20px;
    }
    #link-136-714 {
        display: inline-flex;
        align-items: center;
    }
    #image-137-714 {
        height: 48px;
        width: auto;
        display: block;
    }
    #div_block-140-714 {
        border-top: none !important;
        display: flex;
        align-items: center;
    }
    #link_text-142-714 {
        background-color: #004add !important;
        color: #ffffff !important;
        border-radius: 20px !important;
        padding: 11px 28px !important;
        font-size: 15px !important;
        font-weight: 700 !important;
        text-decoration: none !important;
        display: inline-block !important;
        box-shadow: 0 4px 14px rgba(0, 74, 221, 0.25);
        transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
    }
    #link_text-142-714:hover {
        background-color: #0037a6 !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 74, 221, 0.35);
    }
    @media (max-width: 767px) {
        #_header_row-127-714 .oxy-header-container {
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px;
        }
        #_header_right-131-714 {
            justify-content: center;
            gap: 12px;
            font-size: 12px;
        }
        #_header_row-134-714 .oxy-header-container {
            flex-direction: column;
            gap: 12px;
            text-align: center;
        }
    }

    /* ==========================================================================
       SECTION SPACING & MARGIN HARMONIZATION (Simetri & Kerapian Spacing)
       1. Symmetrical Top & Bottom Padding for every section
       2. Clean, consistent inter-section transitions & margins
       ========================================================================== */

    /* Ensure all sections have clean, flush transitions with zero outer margin */
    .oxygen-body .ct-section {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }

    /* Prevent trailing child elements from adding accidental extra bottom spacing */
    .oxygen-body .ct-section > .ct-section-inner-wrap > *:last-child {
        margin-bottom: 0 !important;
    }

    /* --- 1. HERO SECTION (#section-34-714) --- */
    #section-34-714 > .ct-section-inner-wrap {
        padding-top: 60px !important;
        padding-bottom: 60px !important;
    }

    /* --- 2. CALLOUT BANNER 1 (#section-1574-714) --- */
    #section-1574-714 > .ct-section-inner-wrap {
        padding-top: 50px !important;
        padding-bottom: 50px !important;
    }

    /* --- 3. PRODUCTS CATALOG SECTION (#section-1175-714) --- */
    #section-1175-714 > .ct-section-inner-wrap {
        padding-top: 64px !important;
        padding-bottom: 64px !important;
    }
    #new_columns-1287-714 {
        margin-bottom: 0 !important;
    }

    /* --- 4. MODAL HOLDER SECTION (#section-1370-714) ---
       Eliminate ghost gap caused by empty/hidden modal container */
    #section-1370-714 {
        display: block !important;
        margin: 0 !important;
        padding: 0 !important;
        min-height: 0 !important;
        height: 0 !important;
        border: none !important;
    }
    #section-1370-714 > .ct-section-inner-wrap {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        margin: 0 !important;
        min-height: 0 !important;
        height: 0 !important;
    }

    /* --- 5. CALLOUT VIDEO BANNER 2 (#section-1621-714) ---
       Harmonized with Banner 1 instead of bloated 150px/150px */
    #section-1621-714 > .ct-section-inner-wrap {
        padding-top: 60px !important;
        padding-bottom: 60px !important;
    }

    /* --- 6. PRICING BUNDLING SECTION (#promo-bundling) --- */
    #promo-bundling > .ct-section-inner-wrap {
        padding-top: 64px !important;
        padding-bottom: 64px !important;
    }
    #new_columns-213-714 {
        margin-bottom: 0 !important;
    }

    /* --- 7. CONTACT SECTION WITH WAVE DIVIDER (#section-1456-714) ---
       The wave is absolutely positioned at the BOTTOM of the section spanning 100% full screen width.
       Content in inner-wrap has z-index:2 and bottom padding so it sits comfortably above the wave peak. */
    #section-1456-714 {
        overflow: hidden !important;
        position: relative !important;
        width: 100% !important;
    }
    #section-1456-714 > .ct-section-inner-wrap {
        padding-top: 70px !important;
        padding-bottom: 170px !important;
        position: relative !important;
        z-index: 2 !important;
        max-width: 1120px !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }
    /* Wave shape divider spans 100% full viewport width without cutoff */
    #section-1456-714 .oxy-shape-divider,
    #section-1456-714 #-shape-divider-1502-714 {
        position: absolute !important;
        left: 0 !important;
        right: 0 !important;
        bottom: -1px !important;
        width: 100% !important;
        min-width: 100% !important;
        height: 140px !important;
        z-index: 1 !important;
        pointer-events: none !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow: hidden !important;
    }
    #section-1456-714 .oxy_shape_divider {
        position: absolute !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        width: 100% !important;
        min-width: 100% !important;
        height: 100% !important;
        pointer-events: none !important;
        color: #ffffff !important;
    }
    #section-1456-714 .oxy_shape_divider > svg {
        position: absolute !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        width: 100% !important;
        min-width: 100% !important;
        height: 100% !important;
        display: block !important;
        color: #ffffff !important;
        fill: #ffffff !important;
        transform-origin: bottom center !important;
    }
    #new_columns-1459-714 {
        margin-bottom: 0 !important;
    }

    /* --- 8. FOOTER SECTION (#section-1064-714) --- */
    #section-1064-714 > .ct-section-inner-wrap {
        padding-top: 36px !important;
        padding-bottom: 36px !important;
    }

    /* ==========================================================================
       FOOTER LAYOUT — Rapi & Responsif
       ========================================================================== */

    /* Desktop: row layout */
    #section-1064-714 > .ct-section-inner-wrap {
        display: flex !important;
        flex-direction: row !important;
        justify-content: space-between !important;
        align-items: center !important;
        flex-wrap: wrap !important;
        gap: 16px !important;
    }
    /* Footer kiri: logo + copyright + nav */
    #div_block-1065-714 {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        gap: 20px !important;
        flex-wrap: wrap !important;
    }
    /* Footer kanan: email + phone + sosmed */
    #div_block-1070-714 {
        display: flex !important;
        flex-direction: row !important;
        align-items: center !important;
        gap: 16px !important;
        flex-wrap: wrap !important;
    }

    /* Nav menu di footer — selalu tampil (sembunyikan hamburger) */
    #_nav_menu-1069-714 .oxy-menu-toggle {
        display: none !important;
    }
    #_nav_menu-1069-714 .menu-top-menu-container {
        display: block !important;
    }
    #_nav_menu-1069-714 .oxy-nav-menu-list {
        display: flex !important;
        flex-direction: row !important;
        flex-wrap: wrap !important;
        gap: 4px 16px !important;
        list-style: none !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    #_nav_menu-1069-714 .oxy-nav-menu-list li a {
        font-size: 13px !important;
        color: #333 !important;
        text-decoration: none !important;
        font-weight: 500 !important;
        white-space: nowrap !important;
    }
    #_nav_menu-1069-714 .oxy-nav-menu-list li a:hover {
        color: #004add !important;
    }

    /* ==========================================================================
       RESPONSIVE SECTION SPACING (Tablet <= 991px)
       ========================================================================== */
    @media (max-width: 991px) {
        #section-34-714 > .ct-section-inner-wrap {
            padding-top: 48px !important;
            padding-bottom: 48px !important;
        }
        #section-1574-714 > .ct-section-inner-wrap {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
        }
        #section-1175-714 > .ct-section-inner-wrap {
            padding-top: 48px !important;
            padding-bottom: 48px !important;
        }
        #section-1621-714 > .ct-section-inner-wrap {
            padding-top: 48px !important;
            padding-bottom: 48px !important;
        }
        #promo-bundling > .ct-section-inner-wrap {
            padding-top: 48px !important;
            padding-bottom: 48px !important;
        }
        #section-1456-714 > .ct-section-inner-wrap {
            padding-top: 55px !important;
            padding-bottom: 130px !important;
        }
        #section-1456-714 .oxy-shape-divider,
        #section-1456-714 #-shape-divider-1502-714 {
            height: 100px !important;
        }
        #section-1456-714 .oxy_shape_divider {
            height: 100% !important;
        }
        #new_columns-1459-714 {
            margin-bottom: 0 !important;
        }
        #section-1064-714 > .ct-section-inner-wrap {
            padding-top: 28px !important;
            padding-bottom: 28px !important;
        }
    }

    /* ==========================================================================
       RESPONSIVE SECTION SPACING (Mobile <= 767px)
       ========================================================================== */
    @media (max-width: 767px) {
        #section-34-714 > .ct-section-inner-wrap {
            padding-top: 36px !important;
            padding-bottom: 36px !important;
        }
        #div_block-484-714 {
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
        #section-1574-714 > .ct-section-inner-wrap {
            padding-top: 32px !important;
            padding-bottom: 32px !important;
        }
        #section-1175-714 > .ct-section-inner-wrap {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
        }
        #section-1621-714 > .ct-section-inner-wrap {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
        }
        #promo-bundling > .ct-section-inner-wrap {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
        }
        #section-1456-714 > .ct-section-inner-wrap {
            padding-top: 45px !important;
            padding-bottom: 90px !important;
        }
        #section-1456-714 .oxy-shape-divider,
        #section-1456-714 #-shape-divider-1502-714 {
            height: 70px !important;
        }
        #section-1456-714 .oxy_shape_divider {
            height: 100% !important;
        }
        #new_columns-1459-714 {
            margin-bottom: 0 !important;
        }
        #section-1064-714 > .ct-section-inner-wrap {
            padding-top: 24px !important;
            padding-bottom: 24px !important;
            flex-direction: column !important;
            align-items: center !important;
            text-align: center !important;
            gap: 20px !important;
        }
        /* Footer kiri: stack vertikal di mobile */
        #div_block-1065-714 {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center !important;
            gap: 10px !important;
        }
        /* Nav menu footer mobile: wrap agar rapi */
        #_nav_menu-1069-714 .oxy-nav-menu-list {
            justify-content: center !important;
            gap: 6px 12px !important;
        }
        #_nav_menu-1069-714 .oxy-nav-menu-list li a {
            font-size: 12px !important;
        }
        /* Footer kanan mobile: stack vertikal, tengah */
        #div_block-1070-714 {
            flex-direction: column !important;
            align-items: center !important;
            text-align: center !important;
            gap: 8px !important;
        }
    }
    </style>

    <!-- Custom Style Code Blocks from Live Site -->
    <style id="ct_code_block_css_1368">
    .btn-premium-video {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        color: #ffffff;
        padding: 14px 20px;
        border-radius: 12px;
        font-weight: 700;
        font-size: 15px;
        border: none;
        cursor: pointer;
        margin-top: 15px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
        letter-spacing: 0.5px;
    }
    .btn-premium-video:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 123, 255, 0.4);
        background: linear-gradient(135deg, #0088ff 0%, #0066cc 100%);
    }
    .play-icon {
        background: rgba(255, 255, 255, 0.2);
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 10px;
        font-size: 10px;
    }
    </style>

    <style id="ct_code_block_css_1455">
    .glass-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 999999;
        opacity: 0;
        transition: opacity 0.4s ease-in-out;
    }
    .glass-modal::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        z-index: -1;
    }
    .glass-modal.active {
        opacity: 1;
    }
    .glass-container {
        width: 92%;
        max-width: 850px;
        position: relative;
        transform: scale(0.8);
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }
    .glass-modal.active .glass-container {
        transform: scale(1);
    }
    .video-wrapper-premium {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
        height: 0;
        background: #000;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(255, 255, 255, 0.2);
        isolation: isolate;
        transform: translateZ(0);
        backface-visibility: hidden;
    }
    .video-wrapper-premium iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .glass-close-btn {
        position: absolute;
        top: -60px;
        right: 0;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .glass-close-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: rotate(90deg);
    }
    .modal-footer-text {
        color: rgba(255, 255, 255, 0.6);
        text-align: center;
        margin-top: 20px;
        font-size: 13px;
        font-weight: 300;
        letter-spacing: 1px;
    }
    @media (max-width: 768px) {
        .glass-modal::before {
            backdrop-filter: none;
            -webkit-backdrop-filter: none;
            background: rgba(0, 0, 0, 0.85);
        }
        .glass-close-btn {
            top: -55px;
            right: 10px;
        }
    }
    </style>

    <style id="ht-ctc-animations">
    .ht_ctc_animation {
        animation-duration: 1s;
        animation-fill-mode: both;
        animation-delay: 2s;
        animation-iteration-count: 2;
    }
    @keyframes bounce {
        from, 20%, 53%, to {
            animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            transform: translate3d(0, 0, 0);
        }
        40%, 43% {
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            transform: translate3d(0, -30px, 0) scaleY(1.1);
        }
        70% {
            animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
            transform: translate3d(0, -15px, 0) scaleY(1.05);
        }
        80% {
            transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            transform: translate3d(0, 0, 0) scaleY(0.95);
        }
        90% {
            transform: translate3d(0, -4px, 0) scaleY(1.02);
        }
    }
    .ht_ctc_an_bounce {
        animation-name: bounce;
        transform-origin: center bottom;
    }
    </style>

    <?php wp_head(); ?>
</head>
<body class="wp-singular page-template-default page page-id-730 wp-embed-responsive wp-theme-oxygen-is-not-a-theme oxygen-body">

<!-- SVG Icon Sprite Definitions (FontAwesome + Linearicons) -->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1">
<defs>
<symbol id="FontAwesomeicon-check" viewBox="0 0 28 28"><title>check</title><path d="M26.109 8.844c0 0.391-0.156 0.781-0.438 1.062l-13.438 13.438c-0.281 0.281-0.672 0.438-1.062 0.438s-0.781-0.156-1.062-0.438l-7.781-7.781c-0.281-0.281-0.438-0.672-0.438-1.062s0.156-0.781 0.438-1.062l2.125-2.125c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l4.594 4.609 10.25-10.266c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l2.125 2.125c0.281 0.281 0.438 0.672 0.438 1.062z"/></symbol>
<symbol id="FontAwesomeicon-check-circle" viewBox="0 0 24 28"><title>check-circle</title><path d="M20.062 11.469c0-0.266-0.094-0.531-0.281-0.719l-1.422-1.406c-0.187-0.187-0.438-0.297-0.703-0.297s-0.516 0.109-0.703 0.297l-6.375 6.359-3.531-3.531c-0.187-0.187-0.438-0.297-0.703-0.297s-0.516 0.109-0.703 0.297l-1.422 1.406c-0.187 0.187-0.281 0.453-0.281 0.719s0.094 0.516 0.281 0.703l5.656 5.656c0.187 0.187 0.453 0.297 0.703 0.297 0.266 0 0.531-0.109 0.719-0.297l8.484-8.484c0.187-0.187 0.281-0.438 0.281-0.703zM24 14c0 6.625-5.375 12-12 12s-12-5.375-12-12 5.375-12 12-12 12 5.375 12 12z"/></symbol>
<symbol id="Lineariconsicon-phone-handset" viewBox="0 0 32 32"><title>phone-handset</title><path d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"/></symbol>
<symbol id="Lineariconsicon-rocket" viewBox="0 0 32 32"><title>rocket</title><path d="M27.993 2.292c-0.124-0.143-0.305-0.221-0.493-0.292-1.086 0-10.476 0.488-16.5 8-1.5 1.867-2.603 3.829-3.406 5.704l-4.594 2.296 4 8 2.743-1.372c0.163 0.767 0.423 1.587 0.757 2.372l-3 3 4 4 3-3c0.785 0.334 1.605 0.594 2.372 0.757l-1.372 2.743 8 4 2.296-4.594c1.875-0.803 3.837-1.906 5.704-3.406 7.52-6.024 8-15.424 8-16.5-0.071-0.188-0.151-0.369-0.293-0.493l-11.207-11.209zM23 14c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></symbol>
</defs>
</svg>

<header id="_header-126-714" class="oxy-header-wrapper oxy-overlay-header oxy-header" ><div id="_header_row-127-714" class="oxy-header-row"  data-aos="fade"><div class="oxy-header-container"><div id="_header_left-128-714" class="oxy-header-left" ></div><div id="_header_center-130-714" class="oxy-header-center" ></div><div id="_header_right-131-714" class="oxy-header-right" ><div id="text_block-132-714" class="ct-text-block atomic-header-7-text" >+62 878-7218-0088</div><a id="link_text-133-714" class="ct-link-text" href="mailto:orchidbrand@gmail.com" target="_self">orchidbrand@gmail.com</a></div></div></div><div id="_header_row-134-714" class="oxy-header-row"  data-aos="fade"><div class="oxy-header-container"><div id="_header_left-135-714" class="oxy-header-left" ><a id="link-136-714" class="ct-link atomic-logo" href="<?php echo esc_url(home_url('/')); ?>" target="_self"  ><img id="image-137-714" alt="Cleanique Mart" src="<?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-logo-scaled.webp" class="ct-image" /></a></div><div id="_header_center-138-714" class="oxy-header-center" ></div><div id="_header_right-139-714" class="oxy-header-right" ><div id="div_block-140-714" class="ct-div-block" ><a id="link_text-142-714" class="ct-link-text atomic-medium-button" href="https://api.whatsapp.com/send/?phone=6287872180088&#038;text=Halo%20*cleaniquemart.com*%20Saya%20ingin%20informasi%20lebih%20lanjut%20terkait%20paket%20promo%20Bundling%20Produk%20Kebersihan%20Rumah%20Tangga%20Cleanique%20Mart.%20Mohon%20info%20detail%20dan%20proses%20pembeliannya&#038;type=phone_number&#038;app_absent=0" target="_blank"  >Dapatkan Diskon</a></div></div></div></div></header>

<section id="section-34-714" class=" ct-section"  data-aos="fade-right"><div class="ct-section-inner-wrap"><div id="new_columns-35-714" class="ct-new-columns" ><div id="div_block-36-714" class="ct-div-block" ><h1 id="headline-37-714" class="ct-headline atomic-primary-heading" data-aos="fade-left" data-aos-once="true">Stop Bayar Mahal untuk Sabun Biasa!</h1><h1 id="headline-158-714" class="ct-headline atomic-primary-heading" data-aos="fade-left" data-aos-once="true">Bikin Sendiri 5 Liter Sabun dengan "Biang" Konsentrat.</h1><div id="text_block-38-714" class="ct-text-block atomic-subheading"  data-aos="fade-right" data-aos-once="true">Tahukah Anda bahwa <b>sabun cair biasa didominasi oleh air</b>? Beralihlah ke "<b>Biang Sabun</b>" Cleanique Mart. Kami menjual <b>bibit konsentratnya langsung!</b> Cukup siapkan wadah, tuang <b>1 paket</b> biang ini, <b>tambahkan air</b>, dan <b>aduk</b>. Anda baru saja <b>menghemat uang belanja</b> bulanan secara drastis!<b></b></div><a id="link_text-39-714" class="ct-link-text atomic-primary-button" href="https://api.whatsapp.com/send/?phone=6287872180088&#038;text=Halo%20*cleaniquemart.com*%20Saya%20Mau%20Pesan%20paket%20promo%20Bundling%20Produk%20Kebersihan%20Rumah%20Tangga%20Cleanique%20Mart.%20Mohon%20info%20detail%20dan%20proses%20pembeliannya&#038;type=phone_number&#038;app_absent=0" target="_blank"   data-aos="fade-right">Pesan Sekarang</a><div id="text_block-40-714" class="ct-text-block atomic-small-text"  data-aos="fade-right">"Sudah dipakai 10,000+ Ibu Rumah Tangga"</div></div><div id="div_block-41-714" class="ct-div-block"  data-aos="fade-left" data-aos-duration="1350"><img id="image-42-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/promo-bundling-kebersihan.webp" class="ct-image" data-aos="fade-left" /></div></div><div id="div_block-484-714" class="ct-div-block atomic-content-27-wrapper" ><div id="div_block-488-714" class="ct-div-block atomic-content-27-checklist-wrapper"  data-aos="fade-right"><div id="fancy_icon-489-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-489-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-490-714" class="ct-text-block atomic-content-27-text" ><b>Jelas Wujudnya:</b> Konsentrat padat kaya manfaat, tinggal seduh dengan air.<br></div></div><div id="div_block-491-714" class="ct-div-block atomic-content-27-checklist-wrapper"  data-aos="fade-right"><div id="fancy_icon-492-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-492-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-493-714" class="ct-text-block atomic-content-27-text" ><b>Pasti Hematnya: </b>1 paket kecil menghasilkan 5 liter sabun siap pakai.</div></div><div id="div_block-494-714" class="ct-div-block atomic-content-27-checklist-wrapper"  data-aos="fade-right"><div id="fancy_icon-495-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-495-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-496-714" class="ct-text-block atomic-content-27-text" ><b>Mudah Bikinnya:</b> Anti-gagal, cukup diaduk dalam 5 menit.</div></div></div></div></section>

<section id="section-1574-714" class=" ct-section" ><div class="ct-section-inner-wrap"><div id="new_columns-1575-714" class="ct-new-columns" ><div id="div_block-1576-714" class="ct-div-block" ><h1 id="headline-1577-714" class="ct-headline conference-heading-two">Beli Paket, Jauh Lebih Hemat!</h1></div><div id="div_block-1578-714" class="ct-div-block" ><div id="text_block-1579-714" class="ct-text-block" >Dapatkan stok sabun untuk berbulan-bulan hanya dalam satu klik. Cukup tambah air, aduk 5 menit, beres. Hemat uang belanja tanpa ribet.</div><a id="link_button-1580-714" class="ct-link-button conference-main-button" href="#promo-bundling" target="_self"  >&gt; Lihat Harga Paket</a></div></div></div></section>

<section id="section-1175-714" class=" ct-section" ><div class="ct-section-inner-wrap"><h2 id="headline-1176-714" class="ct-headline atomic-secondary-heading" data-aos="fade-up">Pilihan Konsentrat Premium Andalan Keluarga</h2><div id="text_block-1177-714" class="ct-text-block atomic-subheading"  data-aos="fade-up">Jelajahi keunggulan setiap produk kami. Semuanya dijamin ampuh mengangkat noda, wangi tahan lama, dan ramah di kantong.<br></div><div id="new_columns-1178-714" class="ct-new-columns" ><div id="div_block-1179-714" class="ct-div-block atomic-team-3-column"  data-aos="fade-up"><img id="image-1180-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Detta-Plus-1.webp" class="ct-image atomic-team-3-mate" /><h4 id="headline-1181-714" class="ct-headline atomic-team-3-title">Detta +&nbsp;(Biang Detergen Cair)</h4><div id="text_block-1182-714" class="ct-text-block atomic-team-3-small-text" >Detergen cair konsentrat, bersih maksimal &amp; lebih hemat</div><div id="div_block-1183-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1184-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1184-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1185-714" class="ct-text-block atomic-content-27-text" >Daya bersih kuat, angkat noda membandel</div></div><div id="div_block-1186-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1187-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1187-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1188-714" class="ct-text-block atomic-content-27-text" >Lebih hemat dibanding detergen biasa</div></div><div id="div_block-1357-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1358-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1358-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1359-714" class="ct-text-block atomic-content-27-text" >Wangi tahan lama (banyak pilihan aroma)</div></div><div id="div_block-1366-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="code_block-1368-714" class="ct-code-block" ><button class="btn-premium-video" data-video="https://drive.google.com/file/d/1Rg2qiGhAm7j5LDaX9FzOKcqhDgSElOHh/preview">
   <span class="play-icon">▶</span> Tonton Video Tutorial
</button></div></div></div><div id="div_block-1192-714" class="ct-div-block atomic-team-3-column"  data-aos="fade-up"><img id="image-1193-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Octa-.webp" class="ct-image atomic-team-3-mate" /><h4 id="headline-1194-714" class="ct-headline atomic-team-3-title">Octa + (Biang sabun cuci piring)</h4><div id="text_block-1195-714" class="ct-text-block atomic-team-3-small-text" >Sabun cuci piring ekonomis dengan daya bersih maksimal<br></div><div id="div_block-1196-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1197-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1197-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1198-714" class="ct-text-block atomic-content-27-text" >Ampuh angkat lemak &amp; bau amis</div></div><div id="div_block-1199-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1200-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1200-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1201-714" class="ct-text-block atomic-content-27-text" >Sensasi busa melimpah, nyuci piring cepat beres</div></div><div id="div_block-1202-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1203-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1203-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1204-714" class="ct-text-block atomic-content-27-text" >Aroma segar jeruk nipis</div></div><div id="div_block-1477-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="code_block-1495-714" class="ct-code-block" ><button class="btn-premium-video" data-video="https://drive.google.com/file/d/12kfPts24G73ju322QYZx2AiSo5_rZB8N/preview">
   <span class="play-icon">▶</span> Tonton Video Tutorial
</button></div></div></div><div id="div_block-1205-714" class="ct-div-block atomic-team-3-column"  data-aos="fade-up"><img id="image-1206-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Softa.webp" class="ct-image atomic-team-3-mate" /><h4 id="headline-1207-714" class="ct-headline atomic-team-3-title">Softa (Biang softener / pelembut)</h4><div id="text_block-1208-714" class="ct-text-block atomic-team-3-small-text" >Pelembut pakaian dengan wangi tahan lama &amp; lembut di kain<br></div><div id="div_block-1209-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1210-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1210-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1211-714" class="ct-text-block atomic-content-27-text" >Wangi tahan lama sepanjang hari</div></div><div id="div_block-1212-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1213-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1213-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1214-714" class="ct-text-block atomic-content-27-text" >Tersedia berbagai varian aroma</div></div><div id="div_block-1215-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1216-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1216-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1217-714" class="ct-text-block atomic-content-27-text" >Praktis, mudah dibuat</div></div><div id="div_block-1481-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="code_block-1493-714" class="ct-code-block" ><button class="btn-premium-video" data-video="https://drive.google.com/file/d/17SDLm_WVPTKs0AFzWSKb88xjawUDkpPD/preview">
   <span class="play-icon">▶</span> Tonton Video Tutorial
</button></div></div></div></div><div id="new_columns-1287-714" class="ct-new-columns" ><div id="div_block-1288-714" class="ct-div-block atomic-team-3-column"  data-aos="fade-up"><img id="image-1289-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Biang-Pel-Lantai.webp" class="ct-image atomic-team-3-mate" /><h4 id="headline-1290-714" class="ct-headline atomic-team-3-title">Biang Pel Lantai</h4><div id="text_block-1291-714" class="ct-text-block atomic-team-3-small-text" >Pembersih lantai konsentrat, bersih maksimal tanpa lengket</div><div id="div_block-1292-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1293-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1293-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1294-714" class="ct-text-block atomic-content-27-text" >Pembersih lantai konsentrat, bersih maksimal tanpa lengket</div></div><div id="div_block-1295-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1296-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1296-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1297-714" class="ct-text-block atomic-content-27-text" >Aroma segar menyegarkan ruangan</div></div><div id="div_block-1298-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1299-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1299-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1300-714" class="ct-text-block atomic-content-27-text" >Hemat untuk pemakaian harian</div></div><div id="div_block-1483-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="code_block-1497-714" class="ct-code-block" ><button class="btn-premium-video" data-video="https://drive.google.com/file/d/18_zmjrp_bCGmwr9S1FTpim7mEdzUqUHl/preview">
   <span class="play-icon">▶</span> Tonton Video Tutorial
</button></div></div></div><div id="div_block-1301-714" class="ct-div-block atomic-team-3-column"  data-aos="fade-up"><img id="image-1302-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Biang-Pelicin-Setrika.webp" class="ct-image atomic-team-3-mate" /><h4 id="headline-1303-714" class="ct-headline atomic-team-3-title">Biang Pelicin Setrika</h4><div id="text_block-1304-714" class="ct-text-block atomic-team-3-small-text" >Pelicin pakaian yang bikin setrika lebih cepat &amp; hasil rapi<br></div><div id="div_block-1305-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1306-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1306-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1307-714" class="ct-text-block atomic-content-27-text" >Membantu setrika lebih licin &amp; ringan</div></div><div id="div_block-1308-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1309-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1309-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1310-714" class="ct-text-block atomic-content-27-text" >Cocok untuk kebutuhan rumah &amp; laundry</div></div><div id="div_block-1311-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1312-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1312-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1313-714" class="ct-text-block atomic-content-27-text" >Wangi lembut &amp; tahan lama</div></div><div id="div_block-1485-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="code_block-1499-714" class="ct-code-block" ><button class="btn-premium-video" data-video="https://drive.google.com/file/d/1AlHUysK82qpaE6ZCM6EwGxXQnk73lqeB/preview">
   <span class="play-icon">▶</span> Tonton Video Tutorial
</button></div></div></div><div id="div_block-1314-714" class="ct-div-block atomic-team-3-column"  data-aos="fade-up"><img id="image-1315-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/Biang-Karbol.webp" class="ct-image atomic-team-3-mate" /><h4 id="headline-1316-714" class="ct-headline atomic-team-3-title">Biang Karbol Anti Kuman</h4><div id="text_block-1317-714" class="ct-text-block atomic-team-3-small-text" >Disinfektan kuat untuk bunuh kuman &amp; hilangkan bau tak sedap<br></div><div id="div_block-1318-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1319-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1319-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1320-714" class="ct-text-block atomic-content-27-text" >Efektif membasmi kuman &amp; bakteri</div></div><div id="div_block-1321-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1322-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1322-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1323-714" class="ct-text-block atomic-content-27-text" >Menghilangkan bau tidak sedap</div></div><div id="div_block-1324-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-1325-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-1325-714"><use xlink:href="#FontAwesomeicon-check-circle"></use></svg></div><div id="text_block-1326-714" class="ct-text-block atomic-content-27-text" >Aroma segar (varian tersedia)</div></div><div id="div_block-1487-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="code_block-1501-714" class="ct-code-block" ><button class="btn-premium-video" data-video="https://drive.google.com/file/d/1BefC6kgMNtvAm9DN4M39l04v3r_Yqusw/preview">
   <span class="play-icon">▶</span> Tonton Video Tutorial
</button></div></div></div></div></div></section>

<section id="section-1370-714" class=" ct-section" ><div class="ct-section-inner-wrap"><div id="code_block-1455-714" class="ct-code-block" ><div id="globalVideoModal" class="glass-modal" style="display: none;">
    <div class="glass-container">
        <button id="closeVideoModal" class="glass-close-btn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        
        <div class="video-wrapper-premium">
            <iframe id="videoIframe" src="" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
        
        <div class="modal-footer-text">
            Klik di luar video untuk menutup
        </div>
    </div>
</div></div></div></section>

<section id="section-1621-714" class=" ct-section" ><div class="ct-section-inner-wrap"><div id="div_block-1640-714" class="ct-div-block" ><h1 id="headline-1641-714" class="ct-headline conference-heading-two">Paket<br>Bundling<br>Kebersihan<br>rumah</h1></div><div id="video-1633-714" class="ct-video" >
        		<div class="oxygen-vsb-responsive-video-wrapper oxygen-vsb-responsive-video-wrapper-custom"><iframe
  src="https://drive.google.com/file/d/1sX9-9bEj9HsCYK8RAwHa7uaQvYCrvUeI/preview"
  width="100%"
  height="100%"
  allow="autoplay"
  allowfullscreen>
</iframe></div>
		        </div></div></section>

<section id="promo-bundling" class=" ct-section" ><div class="ct-section-inner-wrap"><h2 id="headline-302-714" class="ct-headline atomic-secondary-heading" data-aos="fade-right">Beli Paket Jauh Lebih Murah &amp; Untung!</h2><div id="text_block-303-714" class="ct-text-block atomic-subheading"  data-aos="fade-right">Buat apa beli satuan kalau ada paket lengkap yang harganya lebih miring? Kami sudah siapkan racikan paket khusus. Lebih praktis, lebih hemat, dan pastinya bikin seisi rumah bersih maksimal!<br></div><div id="new_columns-213-714" class="ct-new-columns" ><div id="div_block-230-714" class="ct-div-block hosting-pricing-2-column" ><div id="div_block-231-714" class="ct-div-block hosting-pricing-2-wrapper" ><h3 id="headline-641-714" class="ct-headline hosting-pricing-2-title">starter hemat</h3><img id="image-252-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/promo-01.jpeg" class="ct-image" /><h3 id="headline-233-714" class="ct-headline hosting-pricing-2-title">Paket Starter Keluarga<br></h3><div id="text_block-234-714" class="ct-text-block hosting-pricing-2-text" >Kombinasi andalan pembersihan mendasar rumah Anda.<br></div><div id="div_block-599-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-600-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-600-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-601-714" class="ct-text-block atomic-content-27-text" >1x Okta, 1x Detta</div></div><div id="div_block-605-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-606-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-606-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-607-714" class="ct-text-block atomic-content-27-text" >Cocok coba dulu</div></div><div id="div_block-608-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-609-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-609-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-610-714" class="ct-text-block atomic-content-27-text" >Kebutuhan dasar</div></div><div id="text_block-651-714" class="ct-text-block hosting-pricing-2-text" >Rp. 120.000<br></div><div id="text_block-1270-714" class="ct-text-block hosting-pricing-2-text" ><b>harga promo</b><br></div><div id="text_block-235-714" class="ct-text-block hosting-pricing-2-price" ><span style="font-weight: normal;">Rp 89.000</span><br></div><div id="text_block-662-714" class="ct-text-block hosting-pricing-2-text" >Garansi 100% Anti-Gagal<br></div><a id="link_button-237-714" class="ct-link-button hosting-outline-button" href="https://api.whatsapp.com/send/?phone=6287872180088&#038;text=Halo%20*cleaniquemart.com*%20Saya%20Mau%20Minta%20Informasi%20Tentang%20Promo%20Bundling%20Paket%20Starter%20Produk%20Kebersihan%20Rumah%20Tangga%20Cleanique%20Mart.%20Mohon%20info%20detail%20dan%20proses%20pembeliannya&#038;type=phone_number&#038;app_absent=0" target="_blank"  >Klaim Promo Starter</a></div></div><div id="div_block-222-714" class="ct-div-block hosting-pricing-2-column" ><div id="div_block-223-714" class="ct-div-block hosting-pricing-2-wrapper"  data-aos="fade-up"><h3 id="headline-639-714" class="ct-headline hosting-pricing-2-title">Paling laris</h3><img id="image-255-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/promo-02.jpeg" class="ct-image" /><h3 id="headline-225-714" class="ct-headline hosting-pricing-2-title">Paket Keluarga Nyaman<br></h3><div id="text_block-226-714" class="ct-text-block hosting-pricing-2-text" >Paket lengkap untuk lantai kinclong dan pakaian lembut wangi.<br></div><div id="div_block-587-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-588-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-588-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-589-714" class="ct-text-block atomic-content-27-text" >1x Detta, 1x Octa, 1x Softa<br></div></div><div id="div_block-611-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-612-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-612-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-613-714" class="ct-text-block atomic-content-27-text" >1x Biang pel<br></div></div><div id="div_block-614-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-615-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-615-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-616-714" class="ct-text-block atomic-content-27-text" >Hemat sampai 30%<br></div></div><div id="text_block-623-714" class="ct-text-block hosting-pricing-2-text" >Rp. 225.000<br></div><div id="text_block-1274-714" class="ct-text-block hosting-pricing-2-text" ><b>harga promo</b><br></div><div id="text_block-227-714" class="ct-text-block hosting-pricing-2-price" ><span style="font-weight: normal;">Rp 169.000</span><br></div><div id="text_block-660-714" class="ct-text-block hosting-pricing-2-text" >Sisa Kuota Promo Sangat Terbatas<br></div><a id="link_button-229-714" class="ct-link-button hosting-outline-button" href="https://api.whatsapp.com/send/?phone=6287872180088&#038;text=Halo%20*cleaniquemart.com*%20Saya%20Mau%20Minta%20Informasi%20Tentang%20Promo%20Bundling%20Paket%20Keluarga%20Nyaman%20Produk%20Kebersihan%20Rumah%20Tangga%20Cleanique%20Mart.%20Mohon%20info%20detail%20dan%20proses%20pembeliannya&#038;type=phone_number&#038;app_absent=0"   >Klaim Promo Keluarga</a></div></div><div id="div_block-214-714" class="ct-div-block hosting-pricing-2-column" ><div id="div_block-215-714" class="ct-div-block hosting-pricing-2-wrapper"  data-aos="fade-up"><h3 id="headline-217-714" class="ct-headline hosting-pricing-2-title">Super Lengkap</h3><img id="image-249-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/promo-03.jpeg" class="ct-image" /><h3 id="headline-561-714" class="ct-headline hosting-pricing-2-title">Paket Ultimate Bersih</h3><div id="text_block-218-714" class="ct-text-block hosting-pricing-2-text" >Koleksi sempurna. Semua kebutuhan rumah tangga teratasi hemat maksimal ultimate.<br></div><div id="div_block-574-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-575-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-575-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-576-714" class="ct-text-block atomic-content-27-text" >1x Detta, 1x Octa, 1x Softa<br></div></div><div id="div_block-578-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-579-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-579-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-580-714" class="ct-text-block atomic-content-27-text" >1x Biang pel, 1x Biang pelicin, 1x Biang karbol<br></div></div><div id="div_block-581-714" class="ct-div-block atomic-content-27-checklist-wrapper" ><div id="fancy_icon-582-714" class="ct-fancy-icon atomic-content-27-icon" ><svg id="svg-fancy_icon-582-714"><use xlink:href="#FontAwesomeicon-check"></use></svg></div><div id="text_block-583-714" class="ct-text-block atomic-content-27-text" >Hemat maksimal</div></div><div id="text_block-648-714" class="ct-text-block hosting-pricing-2-text" >Rp. 330.000<br></div><div id="text_block-1277-714" class="ct-text-block hosting-pricing-2-text" ><b>harga promo</b></div><div id="text_block-1286-714" class="ct-text-block hosting-pricing-2-price" ><span style="font-weight: normal;">Rp 245.000</span><br></div><div id="text_block-655-714" class="ct-text-block hosting-pricing-2-text" >Paling Hemat<br></div><a id="link_button-221-714" class="ct-link-button hosting-outline-button" href="https://api.whatsapp.com/send/?phone=6287872180088&#038;text=Halo%20*cleaniquemart.com*%20Saya%20Mau%20Minta%20Informasi%20Tentang%20Promo%20Bundling%20Paket%20Ultimate%20Bersih%20Produk%20Kebersihan%20Rumah%20Tangga%20Cleanique%20Mart.%20Mohon%20info%20detail%20dan%20proses%20pembeliannya&#038;type=phone_number&#038;app_absent=0" target="_blank"  >Klaim Promo Ultimate</a></div></div></div></div></section>

<section id="section-1456-714" class=" ct-section  ct-section-with-shape-divider" ><div class="ct-section-inner-wrap"><div id="text_block-1457-714" class="ct-text-block hyperion-subheading" >Cleanique mart</div><h1 id="headline-1458-714" class="ct-headline hyperion-heading-two">Hubungi Kami</h1><div id="new_columns-1459-714" class="ct-new-columns" ><div id="div_block-1460-714" class="ct-div-block" ><div id="fancy_icon-1571-714" class="ct-fancy-icon bnb-restaurant-icon" ><svg id="svg-fancy_icon-1571-714"><use xlink:href="#Lineariconsicon-phone-handset"></use></svg></div><h4 id="headline-1462-714" class="ct-headline hyperion-cta-3-title">TANYA ADMIN SEKARANG</h4><div id="text_block-1463-714" class="ct-text-block hyperion-body-text" >Khawatir sabunnya tidak jadi? Tim ahli kami siap memandu kamu dari awal sampai berhasil. 100% dipandu sampai bisa!</div><a id="link_text-1464-714" class="ct-link-text hyperion-outline-button" href="https://api.whatsapp.com/send/?phone=6287872180088&#038;text=Halo%20*cleaniquemart.com*%20Saya%20ingin%20informasi%20lebih%20lanjut%20terkait%20paket%20promo%20Bundling%20Produk%20Kebersihan%20Rumah%20Tangga%20Cleanique%20Mart.%20Mohon%20info%20detail%20dan%20proses%20pembeliannya&#038;type=phone_number&#038;app_absent=0" target="_blank"  >Konsultasi Gratis</a></div><div id="div_block-1465-714" class="ct-div-block" ><div id="fancy_icon-1573-714" class="ct-fancy-icon bnb-restaurant-icon" ><svg id="svg-fancy_icon-1573-714"><use xlink:href="#Lineariconsicon-rocket"></use></svg></div><h4 id="headline-1467-714" class="ct-headline hyperion-cta-3-title">GRATIS ONGKIR HARI INI</h4><div id="text_block-1468-714" class="ct-text-block hyperion-body-text" >Pesan paket biang konsentrat Anda sekarang. Checkout hari ini, dan nikmati layanan bebas biaya kirim ke alamat Anda tanpa syarat ribet.</div><a id="link_text-1469-714" class="ct-link-text hyperion-outline-button" href="https://api.whatsapp.com/send/?phone=6287872180088&#038;text=Halo%20*cleaniquemart.com*%20%F0%9F%91%8BSaya%20ingin%20klaim%20*gratis%20ongkir*%20untuk%20promo%20bundling%20produk%20Cleanique%20Mart.Mohon%20info%20detail%20promo%2C%20syarat%20klaim%20gratis%20ongkir%2C%20dan%20proses%20pemesanannya%20ya.%20Terima%20kasih.&#038;type=phone_number&#038;app_absent=0" target="_blank"  >Klaim Gratis Ongkir</a></div></div></div>
		<div id="-shape-divider-1502-714" class="oxy-shape-divider " >        
        <div class="oxy_shape_divider" >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none"><path fill="currentColor" fill-opacity="1" d="M0,96L30,106.7C60,117,120,139,180,133.3C240,128,300,96,360,80C420,64,480,64,540,101.3C600,139,660,213,720,240C780,267,840,245,900,245.3C960,245,1020,267,1080,250.7C1140,235,1200,181,1260,176C1320,171,1380,213,1410,234.7L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>        </div>
        </div>
		</section>

<section id="section-1064-714" class=" ct-section" ><div class="ct-section-inner-wrap"><div id="div_block-1065-714" class="ct-div-block " ><a id="link-1066-714" class="ct-link atomic-logo" href="http://" target="_self"  ><img id="image-1074-714" alt="" src="<?php echo esc_url($theme_uri); ?>/assets/images/cleanique-mart-logo-scaled.webp" class="ct-image" /></a><div id="text_block-1068-714" class="ct-text-block" >Copyright © Cleaniquemart<br></div><nav id="_nav_menu-1069-714" class="oxy-nav-menu oxy-nav-menu-dropdown-arrow" ><div class='oxy-menu-toggle'><div class='oxy-nav-menu-hamburger-wrap'><div class='oxy-nav-menu-hamburger'><div class='oxy-nav-menu-hamburger-line'></div><div class='oxy-nav-menu-hamburger-line'></div><div class='oxy-nav-menu-hamburger-line'></div></div></div></div><div class="menu-top-menu-container"><ul id="menu-top-menu" class="oxy-nav-menu-list"><li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-26"><a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a></li>
<li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-160"><a href="<?php echo esc_url(home_url('/about/')); ?>">Tentang Kami</a></li>
<li id="menu-item-187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187"><a href="<?php echo esc_url(home_url('/mitra-cleanique-mart/')); ?>">Kemitraan</a></li>
<li id="menu-item-181" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-181"><a href="<?php echo esc_url(home_url('/blog/')); ?>">Artikel</a></li>
<li id="menu-item-516" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-516"><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Hubungi Kami</a></li>
</ul></div></nav></div><div id="div_block-1070-714" class="ct-div-block" ><a id="link_text-1079-714" class="ct-link-text" href="mailto:orchidbrand@gmail.com" target="_self">orchidbrand@gmail.com</a><div id="text_block-1077-714" class="ct-text-block atomic-header-7-text" >+62 878-7218-0088</div><div id="_social_icons-1072-714" class="oxy-social-icons">
    <a href="https://facebook.com" target="_blank" class="oxy-social-icons-facebook" aria-label="Facebook">
        <svg viewBox="0 0 32 32" width="18" height="18" fill="#ffffff" style="display:block;"><path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path></svg>
    </a>
    <a href="https://instagram.com" target="_blank" class="oxy-social-icons-instagram" aria-label="Instagram">
        <svg viewBox="0 0 32 32" width="18" height="18" fill="#ffffff" style="display:block;"><path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path><path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path><path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path></svg>
    </a>
    <a href="https://twitter.com" target="_blank" class="oxy-social-icons-twitter" aria-label="Twitter / X">
        <svg viewBox="0 0 512 512" width="18" height="18" fill="#ffffff" style="display:block;"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
    </a>
    <a href="http://linkedin.com" target="_blank" class="oxy-social-icons-linkedin" aria-label="LinkedIn">
        <svg viewBox="0 0 32 32" width="18" height="18" fill="#ffffff" style="display:block;"><path d="M12 12h5.535v2.837h0.079c0.77-1.381 2.655-2.837 5.464-2.837 5.842 0 6.922 3.637 6.922 8.367v9.633h-5.769v-8.54c0-2.037-0.042-4.657-3.001-4.657-3.005 0-3.463 2.218-3.463 4.509v8.688h-5.767v-18z"></path><path d="M2 12h6v18h-6v-18z"></path><path d="M8 7c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path></svg>
    </a>
</div></div></div></section>

<div id="globalVideoModal" class="glass-modal" style="display: none;">
    <div class="glass-container">
        <button id="closeVideoModal" class="glass-close-btn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        
        <div class="video-wrapper-premium">
            <iframe id="videoIframe" src="" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
        
        <div class="modal-footer-text">
            Klik di luar video untuk menutup
        </div>
    </div>

<!-- Floating WhatsApp Chat Widget -->
<div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-2  ht_ctc_entry_animation ht_ctc_an_entry_corner " id="ht-ctc-chat"  
				style="display: none;  position: fixed; bottom: 15px; right: 15px;"   >
												<div class="ht_ctc_style ht_ctc_chat_style">
													<span class="ht_ctc_notification" style="display:none; padding:0px; margin:0px; position:relative; float:right; z-index:9999999;">
						<span class="ht_ctc_badge" style="position: absolute; top: -11px; right: -11px; font-size:12px; font-weight:600; height:22px; width:22px; box-sizing:border-box; border-radius:50%;  background:#ff4c4c; color:#ffffff; display:flex; justify-content:center; align-items:center;">1</span>
					</span>
					<div  style="display: flex; justify-content: center; align-items: center;  " class="ctc-analytics ctc_s_2">
	<p class="ctc-analytics ctc_cta ctc_cta_stick ht-ctc-cta  ht-ctc-cta-hover " style="padding: 0px 16px; line-height: 1.6; font-size: 15px; background-color: #25D366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; order: 0; ">Klaim Promo Anda</p>
	<svg style="pointer-events:none; display:block; height:50px; width:50px;" width="50px" height="50px" viewBox="0 0 1024 1024">
        <defs>
        <path id="htwasqicona-chat" d="M1023.941 765.153c0 5.606-.171 17.766-.508 27.159-.824 22.982-2.646 52.639-5.401 66.151-4.141 20.306-10.392 39.472-18.542 55.425-9.643 18.871-21.943 35.775-36.559 50.364-14.584 14.56-31.472 26.812-50.315 36.416-16.036 8.172-35.322 14.426-55.744 18.549-13.378 2.701-42.812 4.488-65.648 5.3-9.402.336-21.564.505-27.15.505l-504.226-.081c-5.607 0-17.765-.172-27.158-.509-22.983-.824-52.639-2.646-66.152-5.4-20.306-4.142-39.473-10.392-55.425-18.542-18.872-9.644-35.775-21.944-50.364-36.56-14.56-14.584-26.812-31.471-36.415-50.314-8.174-16.037-14.428-35.323-18.551-55.744-2.7-13.378-4.487-42.812-5.3-65.649-.334-9.401-.503-21.563-.503-27.148l.08-504.228c0-5.607.171-17.766.508-27.159.825-22.983 2.646-52.639 5.401-66.151 4.141-20.306 10.391-39.473 18.542-55.426C34.154 93.24 46.455 76.336 61.07 61.747c14.584-14.559 31.472-26.812 50.315-36.416 16.037-8.172 35.324-14.426 55.745-18.549 13.377-2.701 42.812-4.488 65.648-5.3 9.402-.335 21.565-.504 27.149-.504l504.227.081c5.608 0 17.766.171 27.159.508 22.983.825 52.638 2.646 66.152 5.401 20.305 4.141 39.472 10.391 55.425 18.542 18.871 9.643 35.774 21.944 50.363 36.559 14.559 14.584 26.812 31.471 36.415 50.315 8.174 16.037 14.428 35.323 18.551 55.744 2.7 13.378 4.486 42.812 5.3 65.649.335 9.402.504 21.564.504 27.15l-.082 504.226z"/>
        </defs>
        <linearGradient id="htwasqiconb-chat" gradientUnits="userSpaceOnUse" x1="512.001" y1=".978" x2="512.001" y2="1025.023">
            <stop offset="0" stop-color="#61fd7d"/>
            <stop offset="1" stop-color="#2bb826"/>
        </linearGradient>
        <use xlink:href="#htwasqicona-chat" overflow="visible" style="fill: url(#htwasqiconb-chat)" fill="url(#htwasqiconb-chat)"/>
        <g>
            <path style="fill: #FFFFFF;" fill="#FFF" d="M783.302 243.246c-69.329-69.387-161.529-107.619-259.763-107.658-202.402 0-367.133 164.668-367.214 367.072-.026 64.699 16.883 127.854 49.017 183.522l-52.096 190.229 194.665-51.047c53.636 29.244 114.022 44.656 175.482 44.682h.151c202.382 0 367.128-164.688 367.21-367.094.039-98.087-38.121-190.319-107.452-259.706zM523.544 808.047h-.125c-54.767-.021-108.483-14.729-155.344-42.529l-11.146-6.612-115.517 30.293 30.834-112.592-7.259-11.544c-30.552-48.579-46.688-104.729-46.664-162.379.066-168.229 136.985-305.096 305.339-305.096 81.521.031 158.154 31.811 215.779 89.482s89.342 134.332 89.312 215.859c-.066 168.243-136.984 305.118-305.209 305.118zm167.415-228.515c-9.177-4.591-54.286-26.782-62.697-29.843-8.41-3.062-14.526-4.592-20.645 4.592-6.115 9.182-23.699 29.843-29.053 35.964-5.352 6.122-10.704 6.888-19.879 2.296-9.176-4.591-38.74-14.277-73.786-45.526-27.275-24.319-45.691-54.359-51.043-63.543-5.352-9.183-.569-14.146 4.024-18.72 4.127-4.109 9.175-10.713 13.763-16.069 4.587-5.355 6.117-9.183 9.175-15.304 3.059-6.122 1.529-11.479-.765-16.07-2.293-4.591-20.644-49.739-28.29-68.104-7.447-17.886-15.013-15.466-20.645-15.747-5.346-.266-11.469-.322-17.585-.322s-16.057 2.295-24.467 11.478-32.113 31.374-32.113 76.521c0 45.147 32.877 88.764 37.465 94.885 4.588 6.122 64.699 98.771 156.741 138.502 21.892 9.45 38.982 15.094 52.308 19.322 21.98 6.979 41.982 5.995 57.793 3.634 17.628-2.633 54.284-22.189 61.932-43.615 7.646-21.427 7.646-39.791 5.352-43.617-2.294-3.826-8.41-6.122-17.585-10.714z"/>
        </g>
        </svg></div>
								</div>
							</div>

<script>
// Smooth scroll for anchor links
jQuery(document).on('click', 'a[href*="#"]', function(t) {
    if (jQuery(this).is('[href="#"]') || jQuery(this).is('[href="#0"]')) return;
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            t.preventDefault();
            jQuery('html, body').animate({ scrollTop: target.offset().top - 20 }, 800);
        }
    }
});

// Video Modal Trigger Logic
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('globalVideoModal');
    const iframe = document.getElementById('videoIframe');
    const closeBtn = document.getElementById('closeVideoModal');
    const openButtons = document.querySelectorAll('.btn-premium-video');

    if (openButtons && modal && iframe) {
        openButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const videoUrl = this.getAttribute('data-video');
                iframe.src = videoUrl;
                modal.style.display = 'flex';
                modal.style.justifyContent = 'center';
                modal.style.alignItems = 'center';
                setTimeout(() => {
                    modal.classList.add('active');
                }, 10);
                document.body.style.overflow = 'hidden';
            });
        });

        function closeModal() {
            modal.classList.remove('active');
            setTimeout(() => {
                iframe.src = "";
                modal.style.display = 'none';
                document.body.style.overflow = '';
            }, 400);
        }

        if (closeBtn) closeBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', function(e) {
            if (e.target === modal) closeModal();
        });
    }

    // Floating WhatsApp Hover & Click
    const ctcChat = document.getElementById('ht-ctc-chat');
    if (ctcChat) {
        ctcChat.style.display = 'block';
        const ctaText = ctcChat.querySelector('.ht-ctc-cta');
        ctcChat.addEventListener('mouseenter', function() {
            if (ctaText) ctaText.style.display = 'block';
        });
        ctcChat.addEventListener('mouseleave', function() {
            if (ctaText) ctaText.style.display = 'none';
        });
        ctcChat.addEventListener('click', function() {
            window.open('https://api.whatsapp.com/send/?phone=6287872180088&text=Halo%20Cleanique%20Mart,%20saya%20tertarik%20dengan%20Promo%20Bundling%20Kebersihan%20Rumah&type=phone_number&app_absent=0', '_blank');
        });
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>