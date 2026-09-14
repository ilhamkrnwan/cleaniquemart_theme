<?php
/**
 * Cleanique Mart Theme Functions & Definitions
 *
 * @package CleaniqueMart
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'CLEANIQUEMART_VERSION', '2.0.9' );
define( 'CLEANIQUEMART_DIR', get_template_directory() );
define( 'CLEANIQUEMART_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function cleaniquemart_setup() {
	// Let WordPress manage document title
	add_theme_support( 'title-tag' );

	// Enable featured images
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 800, 450, true );

	// Custom logo support
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 280,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	// HTML5 semantics
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Register Navigation Menus
	register_nav_menus( array(
		'primary' => esc_html__( 'Menu Utama (Header)', 'cleaniquemart' ),
		'footer'  => esc_html__( 'Menu Footer', 'cleaniquemart' ),
	) );
}
add_action( 'after_setup_theme', 'cleaniquemart_setup' );

/**
 * Enqueue Styles & Scripts
 */
function cleaniquemart_scripts() {
	// Oxygen-based templates handle their own scripts and styles faithfully to cleaniquemart.com
	if ( is_front_page() || is_page( 'about' ) || is_page( 'tentang-kami' ) || is_page( 'mitra-cleanique-mart' ) || is_page( 'kemitraan-cleanique-mart' ) || is_page( 'contact-us' ) || is_home() || is_archive() || is_page( 'blog' ) || is_singular( 'post' ) || is_page_template( 'page-mitra.php' ) || is_page_template( 'page-contact.php' ) || is_page_template( 'page-about.php' ) || is_page_template( 'page-promo-bundling.php' ) || is_page_template( 'page-kemitraan-paket-starter.php' ) || is_page_template( 'page-kemitraan-paket-king.php' ) || is_page( 'paket-starter' ) || is_page( 'paket-king' ) ) {
		return;
	}

	// Google Fonts: Space Grotesk & DM Sans (Matching Previous Theme Design System)
	wp_enqueue_style(
		'cleaniquemart-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap',
		array(),
		null
	);

	// Theme Main Stylesheet
	wp_enqueue_style(
		'cleaniquemart-style',
		get_stylesheet_uri(),
		array(),
		CLEANIQUEMART_VERSION
	);

	// Main Design System & Components CSS
	wp_enqueue_style(
		'cleaniquemart-main',
		CLEANIQUEMART_URI . '/assets/css/main.css',
		array( 'cleaniquemart-style' ),
		CLEANIQUEMART_VERSION
	);

	// Theme Main JavaScript (Interactive Simulator, Lightbox, WA Modal)
	wp_enqueue_script(
		'cleaniquemart-main-js',
		CLEANIQUEMART_URI . '/assets/js/main.js',
		array(),
		CLEANIQUEMART_VERSION,
		true
	);

	// Localize dynamic data for JS
	wp_localize_script( 'cleaniquemart-main-js', 'cleaniqueData', array(
		'ajaxUrl'      => admin_url( 'admin-ajax.php' ),
		'waPhone'      => get_theme_mod( 'cleaniquemart_wa_phone', '087885590088' ),
		'proposalUrl'  => get_theme_mod( 'cleaniquemart_proposal_url', 'https://drive.google.com/file/d/1R-UhhK5TSumOxNIOZm3mZxmxyn-Y0PGF/view?usp=sharing' ),
		'siteName'     => get_bloginfo( 'name' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'cleaniquemart_scripts' );

/**
 * Helper: Generate WhatsApp URL
 */
function cleaniquemart_get_wa_url( $message = '', $phone = '' ) {
	if ( empty( $phone ) ) {
		$phone = get_theme_mod( 'cleaniquemart_wa_phone', '087885590088' );
	}

	$clean_phone = preg_replace( '/[^0-9]/', '', $phone );
	if ( substr( $clean_phone, 0, 1 ) === '0' ) {
		$clean_phone = '62' . substr( $clean_phone, 1 );
	}

	if ( empty( $message ) ) {
		$message = 'Halo *cleaniquemart.com* Saya Mau Minta Informasi Tentang Mitra Cleanique Mart*';
	}

	return 'https://api.whatsapp.com/send/?phone=' . $clean_phone . '&text=' . rawurlencode( $message ) . '&type=phone_number&app_absent=0';
}

/**
 * Helper: Format Indonesian Rupiah
 */
function cleaniquemart_format_rupiah( $number ) {
	return 'Rp ' . number_format( (float) $number, 0, ',', '.' );
}

/**
 * WordPress Customizer Settings
 */
function cleaniquemart_customize_register( $wp_customize ) {
	// Section: Cleanique Mart Settings
	$wp_customize->add_section( 'cleaniquemart_settings', array(
		'title'       => __( 'Pengaturan Cleanique Mart', 'cleaniquemart' ),
		'priority'    => 30,
		'description' => __( 'Konfigurasi kontak WhatsApp hotline, link proposal, dan informasi kantor pusat.', 'cleaniquemart' ),
	) );

	// Setting: WhatsApp Phone
	$wp_customize->add_setting( 'cleaniquemart_wa_phone', array(
		'default'           => '087885590088',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'cleaniquemart_wa_phone', array(
		'label'       => __( 'Nomor WhatsApp Hotline CS', 'cleaniquemart' ),
		'section'     => 'cleaniquemart_settings',
		'type'        => 'text',
		'description' => __( 'Contoh: 087885590088 (otomatis dikonversi ke format 62)', 'cleaniquemart' ),
	) );

	// Setting: Proposal Google Drive Link
	$wp_customize->add_setting( 'cleaniquemart_proposal_url', array(
		'default'           => 'https://drive.google.com/file/d/1R-UhhK5TSumOxNIOZm3mZxmxyn-Y0PGF/view?usp=sharing',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'cleaniquemart_proposal_url', array(
		'label'       => __( 'Tautan Google Drive Proposal Kemitraan', 'cleaniquemart' ),
		'section'     => 'cleaniquemart_settings',
		'type'        => 'url',
	) );

	// Setting: Office Address
	$wp_customize->add_setting( 'cleaniquemart_office_address', array(
		'default'           => 'Jongke Tengah no. 30 RT.01/RW.23, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'cleaniquemart_office_address', array(
		'label'       => __( 'Alamat Kantor Marketing Sleman', 'cleaniquemart' ),
		'section'     => 'cleaniquemart_settings',
		'type'        => 'textarea',
	) );
}
add_action( 'customize_register', 'cleaniquemart_customize_register' );

/**
 * Fallback Navigation Menu when no WP menu is assigned
 */
function cleaniquemart_primary_menu_fallback() {
	$is_front = is_front_page();
	?>
	<nav class="cm-desktop-nav" id="cm-desktop-nav" aria-label="<?php esc_attr_e( 'Menu Utama', 'cleaniquemart' ); ?>">
		<ul class="cm-nav-list">
			<li class="<?php echo $is_front ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
			</li>
			<li class="<?php echo is_page( 'about' ) ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Tentang Kami</a>
			</li>
			<li class="menu-item-has-children <?php echo ( is_page( 'kemitraan-cleanique-mart' ) || is_page( 'mitra-cleanique-mart' ) ) ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo esc_url( home_url( '/kemitraan-cleanique-mart/' ) ); ?>">
					Kemitraan <span class="cm-nav-badge">Promo</span>
				</a>
				<ul class="sub-menu">
					<li class="<?php echo is_page( 'kemitraan-cleanique-mart' ) ? 'current-menu-item' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/kemitraan-cleanique-mart/' ) ); ?>">Paket Kemitraan</a>
					</li>
					<li class="<?php echo is_page( 'mitra-cleanique-mart' ) ? 'current-menu-item' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/mitra-cleanique-mart/' ) ); ?>">Cabang Mitra (12+ Kota)</a>
					</li>
					<li>
						<a href="<?php echo esc_url( $is_front ? '#cara-bergabung' : home_url( '/#cara-bergabung' ) ); ?>">Cara Bergabung</a>
					</li>
				</ul>
			</li>
			<li class="<?php echo is_page( 'promo-bundling-kebersihan-rumah' ) ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo esc_url( home_url( '/promo-bundling-kebersihan-rumah/' ) ); ?>">
					Promo Bundling <span class="cm-nav-badge cm-badge-emerald">Hemat 60%</span>
				</a>
			</li>
			<li class="<?php echo ( is_home() || is_singular( 'post' ) || is_category() ) ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Artikel</a>
			</li>
			<li class="<?php echo is_page( 'contact-us' ) ? 'current-menu-item' : ''; ?>">
				<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Hubungi Kami</a>
			</li>
		</ul>
	</nav>
	<?php
}

/**
 * Filter to automatically add badges to primary menu items
 */
function cleaniquemart_nav_menu_badges( $title, $item, $args, $depth ) {
	if ( isset( $args->theme_location ) && 'primary' === $args->theme_location && 0 === $depth ) {
		if ( stripos( $title, 'Kemitraan' ) !== false && stripos( $title, 'Promo' ) === false ) {
			$title .= ' <span class="cm-nav-badge">Promo</span>';
		} elseif ( stripos( $title, 'Promo Bundling' ) !== false && stripos( $title, 'Hemat' ) === false ) {
			$title .= ' <span class="cm-nav-badge cm-badge-emerald">Hemat 60%</span>';
		}
	}
	return $title;
}
add_filter( 'nav_menu_item_title', 'cleaniquemart_nav_menu_badges', 10, 4 );

/**
 * Customize posts per page for blog index and archives to ensure pagination displays
 */
function cleaniquemart_blog_posts_per_page( $query ) {
	if ( ! is_admin() && $query->is_main_query() && ( $query->is_home() || $query->is_archive() ) ) {
		$query->set( 'posts_per_page', 6 );
	}
}
add_action( 'pre_get_posts', 'cleaniquemart_blog_posts_per_page' );


