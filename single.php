<?php get_header(); ?>

<style>
.post-tags a {
    display: inline-block;
    padding: 6px 16px;
    background: #f1f3f5;
    color: #444;
    border-radius: 30px;
    font-size: 0.85rem;
    font-weight: 500;
    transition: all 0.3s ease;
}
.post-tags a:hover {
    background: var(--primary-500);
    color: #fff;
}
.post-nav-card {
    flex: 1;
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    text-decoration: none;
}
.post-nav-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
}
.post-nav-card .nav-label {
    color: var(--primary-500);
    font-size: 0.85rem;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 10px;
}
.post-nav-card .nav-title {
    margin: 0;
    font-size: 1.1rem;
    color: #333;
    line-height: 1.4;
    font-weight: 600;
    transition: color 0.3s ease;
}
.post-nav-card:hover .nav-title {
    color: var(--primary-500);
}
@media (max-width: 768px) {
    .post-navigation {
        flex-direction: column;
    }
}
.related-post-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}
.post-content h2 {
    font-size: 1.7rem;
    margin-top: 40px;
    margin-bottom: 20px;
    color: var(--primary-600);
    font-weight: 700;
}
.post-content h3 {
    font-size: 1.4rem;
    margin-top: 30px;
    margin-bottom: 15px;
    color: #333;
    font-weight: 600;
}
.post-content img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 20px 0;
}
.post-content p {
    margin-bottom: 20px;
}
</style>

<div class="blog-page-container" style="padding-top: 130px; padding-bottom: 100px; background-color: #ffffff;">
    <div class="container" style="max-width: 800px; margin: 0 auto; width: 100%;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <article class="single-post-article">
                <!-- Traveloka Style Breadcrumbs -->
                <nav class="sriguna-breadcrumbs" aria-label="breadcrumb" style="margin-bottom: 25px; font-size: 0.95rem; color: #666; font-weight: 600; display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-bolt" style="color: #444;"></i>
                    <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #444; text-decoration: none;">Sriguna</a>
                    <span style="color: #ccc;">/</span>
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" style="color: #666; text-decoration: none;">Blog</a>
                    <span style="color: #ccc;">/</span>
                    <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" style="color: #111; text-decoration: none; font-weight: 700;">' . esc_html($categories[0]->name) . '</a>';
                        }
                    ?>
                </nav>

                <!-- Huge Title -->
                <h1 style="font-size: 2.8rem; color: #111; margin-bottom: 25px; font-weight: 800; line-height: 1.25; letter-spacing: -0.5px;"><?php the_title(); ?></h1>
                
                <!-- Traveloka Style Meta Row -->
                <div class="traveloka-meta-row" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 35px; border-bottom: 1px solid #eaeaea; padding-bottom: 25px; flex-wrap: wrap; gap: 15px;">
                    
                    <div class="meta-left" style="display: flex; align-items: center; gap: 12px;">
                        <!-- Avatar -->
                        <div style="width: 45px; height: 45px; border-radius: 50%; background: #ff5e5e; color: white; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                            <i class="fa-solid fa-user-pen"></i>
                        </div>
                        <!-- Author & Date Info -->
                        <div style="font-size: 0.95rem; color: #777; display: flex; flex-direction: column; gap: 2px;">
                            <div><span style="color: #111; font-weight: 700;"><?php the_author(); ?></span></div>
                            <div><?php echo get_the_date(); ?> &middot; Waktu baca <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> menit</div>
                        </div>
                    </div>

                    <!-- Social Share -->
                    <div class="meta-right" style="display: flex; gap: 10px;">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" style="width: 38px; height: 38px; border-radius: 50%; border: 1px solid #ddd; color: #1877F2; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s; font-size: 1.1rem;"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" style="width: 38px; height: 38px; border-radius: 50%; border: 1px solid #ddd; color: #14171A; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s; font-size: 1.1rem;"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" style="width: 38px; height: 38px; border-radius: 50%; border: 1px solid #ddd; color: #25D366; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s; font-size: 1.2rem;"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                
                <!-- Full Width Image within container -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div style="margin-bottom: 40px; width: 100%;">
                        <?php the_post_thumbnail('large', ['style' => 'width: 100%; max-height: 500px; object-fit: cover; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);']); ?>
                    </div>
                <?php endif; ?>
                
                <!-- Content Area -->
                <div class="post-content" style="line-height: 1.9; font-size: 1.15rem; color: #222;">
                    <?php the_content(); ?>
                </div>


                
                <!-- Related Posts -->
                <?php
                $categories = get_the_category();
                $my_query = null;
                
                if ($categories) {
                    $category_ids = array();
                    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                    $args = array(
                        'category__in' => $category_ids,
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 2, // 2 articles
                        'ignore_sticky_posts' => 1
                    );
                    $my_query = new wp_query( $args );
                }
                
                // Fallback: Jika tidak ada artikel di kategori yang sama, ambil artikel terbaru apa saja
                if ( !$my_query || !$my_query->have_posts() ) {
                    $args = array(
                        'post__not_in' => array(get_the_ID()),
                        'posts_per_page' => 2,
                        'ignore_sticky_posts' => 1
                    );
                    $my_query = new wp_query( $args );
                }

                if( $my_query->have_posts() ) {
                    echo '<div class="related-posts-section" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #eaeaea;">';
                    echo '<h3 style="font-size: 1.5rem; margin-bottom: 25px; font-weight: 800; color: #111;">Baca Juga:</h3>';
                    echo '<div style="display: flex; gap: 20px; flex-wrap: wrap;">';
                    while( $my_query->have_posts() ) {
                        $my_query->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="related-post-card" style="flex: 1; min-width: 250px; background: #fff; border: 1px solid #eaeaea; border-radius: 12px; overflow: hidden; text-decoration: none; display: flex; flex-direction: column; transition: transform 0.3s ease;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div style="height: 180px; overflow: hidden;">
                                    <?php the_post_thumbnail('medium', ['style' => 'width: 100%; height: 100%; object-fit: cover;']); ?>
                                </div>
                            <?php endif; ?>
                            <div style="padding: 20px;">
                                <h4 style="margin: 0; font-size: 1.1rem; color: #111; line-height: 1.4; font-weight: 700;"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></h4>
                            </div>
                        </a>
                        <?php
                    }
                    echo '</div></div>';
                    wp_reset_query();
                }
                ?>
                
            </article>
            
            <!-- Post Navigation (Prev/Next) -->
            <div class="post-navigation" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid #eaeaea; display: flex; justify-content: space-between; gap: 20px;">
                <?php $prev_post = get_previous_post(); if (!empty($prev_post)): ?>
                    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="post-nav-card" style="text-align: left; padding: 20px; border: 1px solid #eaeaea; border-radius: 12px; box-shadow: none;">
                        <span class="nav-label" style="color: #666; font-weight: 600; font-size: 0.85rem;"><i class="fa-solid fa-arrow-left"></i> Sebelumnya</span>
                        <h4 class="nav-title" style="margin-top: 8px; font-weight: 700; color: #111;"><?php echo get_the_title($prev_post->ID); ?></h4>
                    </a>
                <?php else: ?>
                    <div style="flex: 1;"></div>
                <?php endif; ?>

                <?php $next_post = get_next_post(); if (!empty($next_post)): ?>
                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="post-nav-card" style="text-align: right; padding: 20px; border: 1px solid #eaeaea; border-radius: 12px; box-shadow: none;">
                        <span class="nav-label" style="color: #666; font-weight: 600; font-size: 0.85rem;">Selanjutnya <i class="fa-solid fa-arrow-right"></i></span>
                        <h4 class="nav-title" style="margin-top: 8px; font-weight: 700; color: #111;"><?php echo get_the_title($next_post->ID); ?></h4>
                    </a>
                <?php else: ?>
                    <div style="flex: 1;"></div>
                <?php endif; ?>
            </div>

        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
