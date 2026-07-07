<?php
/**
 * Header Template
 *
 * @package Sriguna
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$phone    = '0877-1011-1110';
$whatsapp = '6287710111110';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Font Awesome --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip to Content (Accessibility) -->
<a href="#main-content" class="screen-reader-text"><?php esc_html_e( 'Langsung ke konten', 'sriguna' ); ?></a>

<!-- ========== NAVBAR ========== -->
<nav class="navbar" id="navbar" role="navigation" aria-label="<?php esc_attr_e( 'Navigasi Utama', 'sriguna' ); ?>">
    <div class="container">
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-logo" aria-label="Sriguna Computindo - Beranda">
            <img src="<?php echo esc_url( SRIGUNA_URI . '/assets/images/logosriguna.png' ); ?>" alt="Sriguna Computindo Logo" width="280" height="70">
        </a>

        <!-- Desktop Menu -->
        <div class="nav-menu" id="nav-menu">
            <a href="<?php echo esc_url( home_url( '/#beranda' ) ); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>"><?php esc_html_e( 'Beranda', 'sriguna' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/#tentang' ) ); ?>"><?php esc_html_e( 'Tentang kami', 'sriguna' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/#layanan' ) ); ?>"><?php esc_html_e( 'Layanan', 'sriguna' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="<?php echo (is_home() || is_single() || is_archive()) ? 'active' : ''; ?>"><?php esc_html_e( 'Blog', 'sriguna' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/#kontak' ) ); ?>"><?php esc_html_e( 'Kontak', 'sriguna' ); ?></a>
        </div>

        <!-- Desktop CTA -->
        <div class="nav-cta">
            <a href="https://wa.me/<?php echo esc_attr( $whatsapp ); ?>?text=<?php echo rawurlencode( 'Halo Sriguna Computindo, saya tertarik dengan layanan anda.' ); ?>" class="nav-phone" id="nav-phone-btn" target="_blank" rel="noopener">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span>Hubungi Kami</span>
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="nav-toggle" id="nav-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'sriguna' ); ?>" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay" id="mobile-menu-overlay"></div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu Mobile', 'sriguna' ); ?>">
    <a href="<?php echo esc_url( home_url( '/#beranda' ) ); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>"><?php esc_html_e( 'Beranda', 'sriguna' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/#tentang' ) ); ?>"><?php esc_html_e( 'Tentang kami', 'sriguna' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/#layanan' ) ); ?>"><?php esc_html_e( 'Layanan', 'sriguna' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="<?php echo (is_home() || is_single() || is_archive()) ? 'active' : ''; ?>"><?php esc_html_e( 'Blog', 'sriguna' ); ?></a>
    <a href="<?php echo esc_url( home_url( '/#kontak' ) ); ?>"><?php esc_html_e( 'Kontak', 'sriguna' ); ?></a>
    <div class="mobile-cta">
        <a href="https://wa.me/<?php echo esc_attr( $whatsapp ); ?>" class="btn btn-accent" target="_blank" rel="noopener">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            WhatsApp
        </a>
    </div>
</div>



