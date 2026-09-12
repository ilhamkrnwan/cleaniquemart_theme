<?php
/**
 * Cleanique Mart Header Template (Faithful to cleaniquemart.com)
 *
 * @package CleaniqueMart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$theme_uri = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Google Fonts authentic to cleaniquemart.com -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900|Source+Sans+3:100,200,300,400,500,600,700,800,900|Roboto:100,200,300,400,500,600,700,800,900|Special+Elite:100,200,300,400,500,600,700,800,900|Lexend:300,400,500,600,700,800&display=swap">

	<!-- Oxygen Core & Stylesheets -->
	<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen.css">
	<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen-universal.css">
	<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen-11.css">
	<?php if ( is_front_page() ) : ?>
		<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen-100.css?v=<?php echo CLEANIQUEMART_VERSION; ?>">
	<?php elseif ( is_page( 'about' ) || is_page( 'tentang-kami' ) || is_page_template( 'page-about.php' ) ) : ?>
		<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen-156.css">
	<?php elseif ( is_page( 'kemitraan-cleanique-mart' ) || is_page( 'ide-bisnis-yang-menguntungkan-2026' ) || is_page( 'ide-usaha-yang-menjanjikan-2026' ) || is_page( 'usaha-sampingan-yang-menjanjikan-2026' ) || is_page_template( 'page-landing-kemitraan.php' ) || is_page_template( 'page-ide-bisnis-yang-menguntungkan-2026.php' ) || is_page_template( 'page-ide-usaha-yang-menjanjikan-2026.php' ) || is_page_template( 'page-usaha-sampingan-yang-menjanjikan-2026.php' ) || is_page_template( 'page-kemitraan-cleanique-mart.php' ) ) : ?>
		<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen-472.css">
		<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/landing-page-enhancements.css?v=<?php echo CLEANIQUEMART_VERSION; ?>">
	<?php elseif ( is_page( 'mitra-cleanique-mart' ) || is_page_template( 'page-mitra.php' ) || is_page_template( 'page-kemitraan-paket-starter.php' ) || is_page_template( 'page-kemitraan-paket-king.php' ) || is_page( 'paket-starter' ) || is_page( 'paket-king' ) ) : ?>
		<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen-162.css">
	<?php elseif ( is_page( 'contact-us' ) || is_page( 'kontak' ) || is_page_template( 'page-contact.php' ) ) : ?>
		<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen-512.css">
	<?php elseif ( is_home() || is_archive() || is_page( 'blog' ) ) : ?>
		<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen-168.css">
	<?php elseif ( is_singular( 'post' ) ) : ?>
		<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/oxygen-178.css">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/ctc-whatsapp.css">
	<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/main.css?v=<?php echo CLEANIQUEMART_VERSION; ?>">

	<!-- jQuery & Unslider Carousel -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<link rel="stylesheet" href="<?php echo esc_url( $theme_uri ); ?>/assets/css/unslider.css">
	<script src="<?php echo esc_url( $theme_uri ); ?>/assets/js/unslider-min.js"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class( 'wp-embed-responsive wp-theme-oxygen-is-not-a-theme oxygen-body' ); ?>>
<?php
wp_body_open();
get_template_part( 'template-parts/svg-defs' );
?>

<header id="_header-26-11" class="oxy-header-wrapper oxy-sticky-header oxy-header">
	<div id="_header_row-27-11" class="oxy-header-row">
		<div class="oxy-header-container">
			<div id="_header_left-28-11" class="oxy-header-left">
				<a id="link-29-11" class="ct-link atomic-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_self">
					<img id="image-30-11" alt="Cleanique Mart" src="<?php echo esc_url( $theme_uri ); ?>/assets/images/cleanique-mart-logo-scaled.webp" class="ct-image" />
				</a>
			</div>
			<div id="_header_center-31-11" class="oxy-header-center"></div>
			<div id="_header_right-32-11" class="oxy-header-right">
				<nav id="_nav_menu-33-11" class="oxy-nav-menu oxy-nav-menu-dropdowns oxy-nav-menu-dropdown-arrow">
					<div class='oxy-menu-toggle'>
						<div class='oxy-nav-menu-hamburger-wrap'>
							<div class='oxy-nav-menu-hamburger'>
								<div class='oxy-nav-menu-hamburger-line'></div>
								<div class='oxy-nav-menu-hamburger-line'></div>
								<div class='oxy-nav-menu-hamburger-line'></div>
							</div>
						</div>
					</div>
					<div class="menu-top-menu-container">
						<ul id="menu-top-menu" class="oxy-nav-menu-list">
							<li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo is_front_page() ? 'current-menu-item page_item current_page_item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo is_front_page() ? 'aria-current="page"' : ''; ?>>Beranda</a></li>
							<li id="menu-item-160" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo ( is_page( 'about' ) || is_page( 'tentang-kami' ) ) ? 'current-menu-item page_item current_page_item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" <?php echo is_page( 'about' ) ? 'aria-current="page"' : ''; ?>>Tentang Kami</a></li>
							<li id="menu-item-187" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo ( is_page( 'mitra-cleanique-mart' ) || is_page( 'kemitraan-cleanique-mart' ) ) ? 'current-menu-item page_item current_page_item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/mitra-cleanique-mart/' ) ); ?>" <?php echo ( is_page( 'mitra-cleanique-mart' ) || is_page( 'kemitraan-cleanique-mart' ) ) ? 'aria-current="page"' : ''; ?>>Kemitraan</a></li>
							<li id="menu-item-181" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo ( is_home() || is_singular( 'post' ) ) ? 'current-menu-item page_item current_page_item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Artikel</a></li>
							<li id="menu-item-516" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo is_page( 'contact-us' ) ? 'current-menu-item page_item current_page_item' : ''; ?>"><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" <?php echo is_page( 'contact-us' ) ? 'aria-current="page"' : ''; ?>>Hubungi Kami</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
