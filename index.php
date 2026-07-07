<?php
/**
 * Main Index Template (Fallback)
 *
 * @package Sriguna
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main-content" class="section" role="main">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Tidak ada konten ditemukan.', 'sriguna' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
