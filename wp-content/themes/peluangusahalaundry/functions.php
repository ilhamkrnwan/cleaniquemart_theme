<?php
/**
 * Functions and definitions
 * Theme: Peluang Usaha Laundry
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function peluangusahalaundry_setup() {
  // Add default posts and comments RSS feed links to head.
  add_theme_support('automatic-feed-links');

  // Let WordPress manage the document title.
  add_theme_support('title-tag');

  // Enable support for Post Thumbnails on posts and pages.
  add_theme_support('post-thumbnails');

  // Switch default core markup for search form, comment form, and comments to output valid HTML5.
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script'
  ));

  // Register Menus
  register_nav_menus(array(
    'primary' => __('Menu Utama (Header)', 'peluangusahalaundry'),
    'footer'  => __('Menu Footer', 'peluangusahalaundry')
  ));
}
add_action('after_setup_theme', 'peluangusahalaundry_setup');

/**
 * Enqueue scripts and styles.
 */
function peluangusahalaundry_scripts() {
  // Main Theme Stylesheet (WordPress declaration)
  wp_enqueue_style(
    'peluangusahalaundry-style',
    get_stylesheet_uri(),
    array(),
    '1.0.0'
  );

  // Modern Design System CSS
  wp_enqueue_style(
    'peluangusahalaundry-main',
    get_template_directory_uri() . '/assets/css/main.css',
    array(),
    '1.0.0'
  );

  // Main Interactive JavaScript
  wp_enqueue_script(
    'peluangusahalaundry-main-js',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'peluangusahalaundry_scripts');

/**
 * Customizer Settings
 */
function peluangusahalaundry_customize_register($wp_customize) {
  // Section: Pengaturan Peluang Usaha Laundry
  $wp_customize->add_section('peluangusahalaundry_section', array(
    'title'       => __('Pengaturan Peluang Usaha Laundry', 'peluangusahalaundry'),
    'priority'    => 30,
    'description' => __('Kustomisasi nomor WhatsApp, hotline pabrik, dan teks pengumuman promo.', 'peluangusahalaundry')
  ));

  // Setting: Nomor WhatsApp Utama
  $wp_customize->add_setting('pul_wa_number', array(
    'default'           => '6287885590088',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('pul_wa_number', array(
    'label'    => __('Nomor WhatsApp Utama (Format 62xxx)', 'peluangusahalaundry'),
    'section'  => 'peluangusahalaundry_section',
    'type'     => 'text',
  ));

  // Setting: Nomor WhatsApp Kedua
  $wp_customize->add_setting('pul_wa_number_2', array(
    'default'           => '6285600061005',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('pul_wa_number_2', array(
    'label'    => __('Nomor WhatsApp Kedua', 'peluangusahalaundry'),
    'section'  => 'peluangusahalaundry_section',
    'type'     => 'text',
  ));

  // Setting: Teks Promo Topbar
  $wp_customize->add_setting('pul_topbar_text', array(
    'default'           => 'Pabrik & Supplier Sabun Tangan Pertama di Sleman Yogyakarta — Subsidi Ongkir Kargo Seluruh Indonesia',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('pul_topbar_text', array(
    'label'    => __('Teks Pengumuman Topbar', 'peluangusahalaundry'),
    'section'  => 'peluangusahalaundry_section',
    'type'     => 'text',
  ));
}
add_action('customize_register', 'peluangusahalaundry_customize_register');
