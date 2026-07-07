<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Sriguna
 */

get_header();
?>

<main id="main-content" class="section" role="main" style="padding-top: 150px; padding-bottom: 100px; text-align: center;">
    <div class="container">
        <h1 style="font-size: 6rem; color: var(--primary-color); margin-bottom: 20px;">404</h1>
        <h2 style="margin-bottom: 20px;">Halaman Tidak Ditemukan</h2>
        <p style="margin-bottom: 40px; color: #666;">Maaf, halaman yang Anda cari tidak ada atau telah dipindahkan.</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary" style="padding: 10px 25px; border-radius: 50px;">Kembali ke Beranda</a>
    </div>
</main>

<?php get_footer(); ?>
