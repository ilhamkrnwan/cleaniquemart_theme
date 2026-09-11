<?php
/**
 * Header Template — LIQUID CLEAN × CLEAN LAB (Light Edition)
 * Theme: Peluang Usaha Laundry
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="description" content="Produsen & supplier kimia laundry tangan pertama dari pabrik. Pewangi, deterjen, softener Orchid Brand — standar IFRA, uji Labkesda DIY, pengiriman kargo ke seluruh Indonesia.">
  <title><?php wp_title('|', true, 'right'); ?>Peluang Usaha Distributor Kimia Laundry — Pabrik Sleman Yogyakarta</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Topbar -->
<div class="topbar">
  <div class="container">
    <div class="topbar-inner">
      <p class="topbar-text">
        <strong>Pabrik Tangan Pertama</strong> &mdash; Kimia Laundry & Pembersih Orchid Brand, Sleman D.I. Yogyakarta. Kargo ke 34 Provinsi.
      </p>
      <div class="topbar-links">
        <a href="https://wa.me/628785590088" target="_blank" rel="noopener" class="topbar-link">
          <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.83.82 2.796.82 3.18 0 5.767-2.586 5.768-5.766 0-3.18-2.587-5.766-5.768-5.766zm9.969 5.766c0 5.485-4.484 9.969-9.969 9.969-1.748 0-3.385-.456-4.819-1.252l-5.212 1.368 1.393-5.087c-.911-1.488-1.431-3.238-1.431-5.11 0-5.485 4.484-9.969 9.969-9.969 5.485 0 9.969 4.484 9.969 9.969z"/></svg>
          <span>0878-5590-088</span>
        </a>
        <a href="#ekosistem" class="topbar-link">Ekosistem Indotech</a>
      </div>
    </div>
  </div>
</div>

<!-- Main Header -->
<header class="site-header" id="site-header">
  <div class="container">
    <nav class="navbar" role="navigation" aria-label="Main navigation">

      <!-- Brand -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" aria-label="Peluang Usaha Laundry — Halaman Utama">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/agen_orchid_logo-removebg-preview-e1663827329523.png"
          alt="Logo Orchid Brand"
          class="brand-logo-img"
          width="36" height="36"
        >
        <div>
          <div class="brand-wordmark">PeluangUsaha<span>Laundry</span></div>
          <div class="brand-tagline">Produsen Tangan Pertama</div>
        </div>
      </a>

      <!-- Desktop Nav -->
      <ul class="nav-menu" role="list">
        <li><a href="#beranda"    class="nav-link">Beranda</a></li>
        <li><a href="#peluang"   class="nav-link">Peluang</a></li>
        <li><a href="#katalog"   class="nav-link">Katalog</a></li>
        <li><a href="#keunggulan" class="nav-link">Keunggulan</a></li>
        <li><a href="#paket"     class="nav-link">Paket</a></li>
        <li><a href="#ekosistem" class="nav-link">Ekosistem</a></li>
        <li><a href="#faq"       class="nav-link">FAQ</a></li>
      </ul>

      <!-- Actions -->
      <div class="navbar-actions">
        <button
          type="button"
          class="btn btn-aqua btn-sm"
          data-open-modal
          data-package="Konsultasi Header"
          id="header-cta-btn"
        >
          Konsultasi Sekarang
        </button>

        <button
          type="button"
          class="mobile-toggle"
          id="mobile-toggle-btn"
          aria-label="Buka menu navigasi"
          aria-expanded="false"
          aria-controls="mobile-drawer"
        >
          <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

    </nav>
  </div>
</header>

<!-- Mobile Drawer -->
<div class="mobile-drawer" id="mobile-drawer" role="dialog" aria-modal="true" aria-label="Menu navigasi">
  <div class="drawer-header">
    <div class="brand-wordmark">PeluangUsaha<span>Laundry</span></div>
    <button type="button" class="drawer-close" id="drawer-close-btn" aria-label="Tutup menu">
      <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </div>

  <nav class="drawer-nav" aria-label="Mobile navigation">
    <a href="#beranda"    class="drawer-link">Beranda</a>
    <a href="#peluang"   class="drawer-link">Peluang Usaha</a>
    <a href="#katalog"   class="drawer-link">Katalog Produk</a>
    <a href="#keunggulan" class="drawer-link">Keunggulan Pabrik</a>
    <a href="#paket"     class="drawer-link">Paket Kemitraan</a>
    <a href="#ekosistem" class="drawer-link">Ekosistem Indotech</a>
    <a href="#faq"       class="drawer-link">FAQ</a>
  </nav>

  <div class="drawer-cta">
    <button type="button" class="btn btn-wa btn-block btn-lg" data-open-modal data-package="Konsultasi Mobile">
      <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.83.82 2.796.82 3.18 0 5.767-2.586 5.768-5.766 0-3.18-2.587-5.766-5.768-5.766zm9.969 5.766c0 5.485-4.484 9.969-9.969 9.969-1.748 0-3.385-.456-4.819-1.252l-5.212 1.368 1.393-5.087c-.911-1.488-1.431-3.238-1.431-5.11 0-5.485 4.484-9.969 9.969-9.969 5.485 0 9.969 4.484 9.969 9.969z"/></svg>
      Chat WhatsApp Pabrik
    </button>
  </div>
</div>

<div class="drawer-backdrop" id="drawer-backdrop"></div>
