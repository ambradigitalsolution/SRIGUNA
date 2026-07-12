<?php
/**
 * Sriguna Computindo - Theme Functions
 *
 * @package Sriguna
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'SRIGUNA_VERSION', '1.0.0' );
define( 'SRIGUNA_DIR', get_template_directory() );
define( 'SRIGUNA_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function sriguna_setup() {
    // Add title tag support
    add_theme_support( 'title-tag' );

    // Add post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Register nav menus
    register_nav_menus( array(
        'primary'  => __( 'Menu Utama', 'sriguna' ),
        'footer'   => __( 'Menu Footer', 'sriguna' ),
    ) );

    // Set content width
    if ( ! isset( $content_width ) ) {
        $content_width = 1200;
    }
}
add_action( 'after_setup_theme', 'sriguna_setup' );

/**
 * Enqueue Styles & Scripts
 */
function sriguna_enqueue_scripts() {
    // Google Fonts - Inter
    wp_enqueue_style(
        'sriguna-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Main Stylesheet
    wp_enqueue_style(
        'sriguna-style',
        get_stylesheet_uri(),
        array( 'sriguna-google-fonts' ),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    // Main JavaScript
    wp_enqueue_script(
        'sriguna-main',
        SRIGUNA_URI . '/assets/js/main.js',
        array(),
        SRIGUNA_VERSION,
        true
    );

    // Localize script for AJAX
    wp_localize_script( 'sriguna-main', 'srigunaData', array(
        'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
        'themeUrl' => SRIGUNA_URI,
        'nonce'    => wp_create_nonce( 'sriguna_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'sriguna_enqueue_scripts' );

/**
 * WordPress Customizer Settings
 */
function sriguna_customize_register( $wp_customize ) {

    // ==========================================
    // PANEL: Company Info
    // ==========================================
    $wp_customize->add_panel( 'sriguna_company', array(
        'title'    => __( 'Informasi Perusahaan', 'sriguna' ),
        'priority' => 30,
    ) );

    // ------ Section: Contact ------
    $wp_customize->add_section( 'sriguna_contact', array(
        'title' => __( 'Kontak', 'sriguna' ),
        'panel' => 'sriguna_company',
    ) );

    // Phone
    $wp_customize->add_setting( 'sriguna_phone', array(
        'default'           => '0877-1011-1110',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'sriguna_phone', array(
        'label'   => __( 'Nomor Telepon', 'sriguna' ),
        'section' => 'sriguna_contact',
        'type'    => 'text',
    ) );

    // WhatsApp
    $wp_customize->add_setting( 'sriguna_whatsapp', array(
        'default'           => '6287710111110',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'sriguna_whatsapp', array(
        'label'       => __( 'Nomor WhatsApp (dengan kode negara)', 'sriguna' ),
        'section'     => 'sriguna_contact',
        'type'        => 'text',
        'description' => __( 'Contoh: 6287710111110', 'sriguna' ),
    ) );


    // Address
    $wp_customize->add_setting( 'sriguna_address', array(
        'default'           => 'Jl. Komp. Depag No.31, Bambu Apus, Kec. Pamulang, Kota Tangerang Selatan, Banten 15415',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'sriguna_address', array(
        'label'   => __( 'Alamat', 'sriguna' ),
        'section' => 'sriguna_contact',
        'type'    => 'textarea',
    ) );

    // Operating Hours
    $wp_customize->add_setting( 'sriguna_hours', array(
        'default'           => 'Senin - Sabtu: 09.00 - 18.00',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'sriguna_hours', array(
        'label'   => __( 'Jam Operasional', 'sriguna' ),
        'section' => 'sriguna_contact',
        'type'    => 'text',
    ) );

    // ------ Section: Social Media ------
    $wp_customize->add_section( 'sriguna_social', array(
        'title' => __( 'Social Media', 'sriguna' ),
        'panel' => 'sriguna_company',
    ) );

    $social_platforms = array(
        'instagram' => 'Instagram URL',
        'facebook'  => 'Facebook URL',
        'tiktok'    => 'TikTok URL',
        'youtube'   => 'YouTube URL',
        'twitter'   => 'Twitter/X URL',
    );

    foreach ( $social_platforms as $key => $label ) {
        $wp_customize->add_setting( "sriguna_social_{$key}", array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( "sriguna_social_{$key}", array(
            'label'   => __( $label, 'sriguna' ),
            'section' => 'sriguna_social',
            'type'    => 'url',
        ) );
    }

    // ==========================================
    // PANEL: Statistics
    // ==========================================
    $wp_customize->add_section( 'sriguna_stats', array(
        'title'    => __( 'Statistik', 'sriguna' ),
        'priority' => 35,
    ) );

    $stats = array(
        'units'     => array( 'label' => 'Unit Terjual', 'default' => '2000+' ),
        'customers' => array( 'label' => 'Pelanggan Puas', 'default' => '1500+' ),
        'rating'    => array( 'label' => 'Rating Google', 'default' => '4.9/5' ),
        'safe'      => array( 'label' => 'Aman & Terpercaya', 'default' => '100%' ),
    );

    foreach ( $stats as $key => $stat ) {
        $wp_customize->add_setting( "sriguna_stat_{$key}", array(
            'default'           => $stat['default'],
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "sriguna_stat_{$key}", array(
            'label'   => __( $stat['label'], 'sriguna' ),
            'section' => 'sriguna_stats',
            'type'    => 'text',
        ) );
    }

    // ==========================================
    // SECTION: SEO Settings
    // ==========================================
    $wp_customize->add_section( 'sriguna_seo', array(
        'title'    => __( 'SEO Settings', 'sriguna' ),
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'sriguna_meta_description', array(
        'default'           => 'Sriguna Computindo — Jual Beli Komputer Bekas dan Laptop Bekas Berkualitas. Harga terbaik, kualitas terjamin, transaksi aman.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'sriguna_meta_description', array(
        'label'   => __( 'Meta Description', 'sriguna' ),
        'section' => 'sriguna_seo',
        'type'    => 'textarea',
    ) );

    $wp_customize->add_setting( 'sriguna_meta_keywords', array(
        'default'           => 'komputer bekas, laptop bekas, jual beli komputer, laptop second, PC bekas berkualitas, Sriguna Computindo',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'sriguna_meta_keywords', array(
        'label'   => __( 'Meta Keywords', 'sriguna' ),
        'section' => 'sriguna_seo',
        'type'    => 'textarea',
    ) );
}
add_action( 'customize_register', 'sriguna_customize_register' );

/**
 * Helper: Get Theme Mod with fallback
 */
function sriguna_get( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}

/**
 * Generate Schema.org LocalBusiness JSON-LD
 */
function sriguna_schema_markup() {
    if ( is_front_page() ) {
        $schema = array(
            '@context'    => 'https://schema.org',
            '@type'       => 'LocalBusiness',
            'name'        => 'Sriguna Computindo',
            'description' => sriguna_get( 'sriguna_meta_description', 'Spesialis borongan komputer, laptop, dan alat kantor bekas berkualitas.' ),
            'url'         => home_url(),
            'telephone'   => '0877-1011-1110',
            'address'     => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'Jl. Komp. Depag No.31, Bambu Apus, Kec. Pamulang, Kota Tangerang Selatan, Banten 15415',
                'addressLocality' => 'Tangerang Selatan',
                'addressCountry'  => 'ID',
            ),
            'image'       => SRIGUNA_URI . '/assets/images/logosriguna.png',
            'priceRange'  => 'Rp',
            'aggregateRating' => array(
                '@type'       => 'AggregateRating',
                'ratingValue' => '4.9',
                'reviewCount' => '1500',
            ),
        );
        echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'sriguna_schema_markup' );

/**
 * Custom meta tags for SEO
 */
function sriguna_meta_tags() {
    if ( is_front_page() ) {
        $description = sriguna_get( 'sriguna_meta_description', 'Sriguna Computindo — Spesialis borongan komputer, laptop, dan alat kantor bekas.' );
        $keywords    = sriguna_get( 'sriguna_meta_keywords', 'borongan komputer, komputer bekas, laptop bekas, borongan alat kantor' );
        $og_image    = SRIGUNA_URI . '/assets/images/logosriguna.png';

        echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
        echo '<meta name="keywords" content="' . esc_attr( $keywords ) . '">' . "\n";

        // Open Graph
        echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
        echo '<meta property="og:image" content="' . esc_url( $og_image ) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url( home_url() ) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:locale" content="id_ID">' . "\n";

        // Twitter Card
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">' . "\n";
        echo '<meta name="twitter:image" content="' . esc_url( $og_image ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'sriguna_meta_tags', 1 );

/**
 * Add preconnect for Google Fonts
 */
function sriguna_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'sriguna_resource_hints', 10, 2 );

/**
 * Remove WordPress version from head
 */
remove_action( 'wp_head', 'wp_generator' );

/**
 * Add custom body classes
 */
function sriguna_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'front-page';
    }
    return $classes;
}
add_filter( 'body_class', 'sriguna_body_classes' );

/**
 * Automatically inject "Baca Juga" (Related Post) into article content
 */
function sriguna_inline_related_post( $content ) {
    if ( is_single() && in_the_loop() && is_main_query() ) {
        $related_post = get_previous_post();
        
        // Fallback: If no previous post (oldest post), try next post
        if ( empty( $related_post ) ) {
            $related_post = get_next_post();
        }
        
        // Fallback: Just get 1 recent post that is not the current one
        if ( empty( $related_post ) ) {
            $recent = get_posts( array(
                'numberposts' => 1,
                'post__not_in' => array( get_the_ID() ),
                'post_status' => 'publish'
            ) );
            if ( !empty( $recent ) ) {
                $related_post = $recent[0];
            }
        }

        if ( !empty($related_post) ) {
            $related_link = '<div style="margin: 35px 0; padding: 18px 24px; background-color: #f8f9fa; border-left: 5px solid #007bff; border-radius: 6px;">';
            $related_link .= '<strong style="color: #111; font-size: 1.15rem; font-family: Inter, sans-serif;">Baca Juga: <a href="' . esc_url(get_permalink($related_post->ID)) . '" style="color: #007bff; text-decoration: none; border-bottom: 1px solid #007bff; padding-bottom: 2px;">' . esc_html(get_the_title($related_post->ID)) . '</a></strong>';
            $related_link .= '</div>';
            
            // Split content by paragraphs
            $paragraphs = explode( '</p>', $content );
            $count = count( $paragraphs );
            
            if ( $count > 3 ) {
                // Insert after 2nd paragraph (array_splice at index 2)
                array_splice( $paragraphs, 2, 0, $related_link );
                $content = implode( '</p>', $paragraphs );
            } else {
                // Append at the end if the article is very short
                $content .= $related_link;
            }
        }
    }
    return $content;
}
add_filter( 'the_content', 'sriguna_inline_related_post' );

/**
 * Limit search results to posts only (exclude pages)
 */
function sriguna_search_filter( $query ) {
    if ( $query->is_search && ! is_admin() && $query->is_main_query() ) {
        $query->set( 'post_type', 'post' );
    }
    return $query;
}
add_filter( 'pre_get_posts', 'sriguna_search_filter' );
