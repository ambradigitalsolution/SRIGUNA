<?php get_header(); ?>

<style>
/* Base Reset & Variables for Bento Grid */
:root {
    --bento-gap: 20px;
    --bento-radius: 24px;
    --bento-border: 1px solid rgba(0,0,0,0.06);
}

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

/* Bento Hero Layout */
.bento-hero {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    grid-template-rows: auto auto;
    gap: var(--bento-gap);
    margin-bottom: 50px;
}

.bento-item {
    background: #fff;
    border-radius: var(--bento-radius);
    padding: 30px;
    border: var(--bento-border);
    box-shadow: 0 8px 30px rgba(0,0,0,0.03);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
}

.bento-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.08);
}

/* Specific Bento Items */
.bento-thumbnail {
    grid-column: 1 / 2;
    grid-row: 1 / 3;
    padding: 0;
    min-height: 400px;
    background: #f8f9fa;
}
.bento-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}
.bento-thumbnail:hover img {
    transform: scale(1.04);
}

.bento-title {
    grid-column: 2 / 4;
    grid-row: 1 / 2;
    justify-content: center;
    background: linear-gradient(145deg, #ffffff, #fcfcfc);
}
.bento-title h1 {
    font-size: 2.2rem;
    font-weight: 800;
    line-height: 1.3;
    color: #111;
    margin: 15px 0 0 0;
    letter-spacing: -0.5px;
}

.bento-meta {
    grid-column: 2 / 3;
    grid-row: 2 / 3;
    justify-content: center;
}

.bento-social {
    grid-column: 3 / 4;
    grid-row: 2 / 3;
    justify-content: center;
}

@media (max-width: 992px) {
    .bento-hero {
        grid-template-columns: 1fr;
        grid-template-rows: auto;
    }
    .bento-thumbnail {
        grid-column: 1 / -1;
        grid-row: auto;
        min-height: 250px;
    }
    .bento-title {
        grid-column: 1 / -1;
        grid-row: auto;
    }
    .bento-title h1 {
        font-size: 1.8rem;
    }
    .bento-meta {
        grid-column: 1 / -1;
        grid-row: auto;
    }
    .bento-social {
        grid-column: 1 / -1;
        grid-row: auto;
    }
}

/* Main Content Centered Area */
.blog-focused-layout {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.blog-main-content {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
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
    border-radius: 12px;
    margin: 25px 0;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}
.post-content p {
    margin-bottom: 20px;
    line-height: 1.9;
    font-size: 1.15rem;
    color: #333;
}
.post-content ul, .post-content ol {
    margin-bottom: 20px;
    padding-left: 20px;
    line-height: 1.8;
    font-size: 1.15rem;
    color: #333;
}
.post-content li {
    margin-bottom: 8px;
}

/* Post Navigation Styling */
.post-nav-card {
    flex: 1;
    background: white;
    padding: 25px;
    border-radius: 16px;
    border: var(--bento-border);
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    text-decoration: none;
}
.post-nav-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.06);
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

/* Related Posts Bento */
.related-posts-section {
    margin-top: 80px;
    padding-top: 50px;
    border-top: 2px dashed #eaeaea;
    width: 100%;
}
.bento-related {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: var(--bento-gap);
    margin-top: 30px;
}
.bento-related-item {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    border: var(--bento-border);
    box-shadow: 0 5px 20px rgba(0,0,0,0.03);
    text-decoration: none;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}
.bento-related-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
}
.bento-related-img {
    height: 180px;
    width: 100%;
    position: relative;
    background: #f8f9fa;
}
.bento-related-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.bento-related-item:hover .bento-related-img img {
    transform: scale(1.05);
}
.bento-related-content {
    padding: 20px;
    display: flex;
    flex-direction: column;
    flex: 1;
}
.bento-related-content h4 {
    font-size: 1.15rem;
    font-weight: 700;
    color: #111;
    margin: 0 0 12px 0;
    line-height: 1.4;
    transition: color 0.2s;
}
.bento-related-item:hover .bento-related-content h4 {
    color: var(--primary-500);
}
.bento-related-meta {
    margin-top: auto;
    font-size: 0.85rem;
    color: #777;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.sriguna-breadcrumbs a:hover {
    color: var(--primary-500) !important;
}
</style>


<div class="blog-page-container" style="padding-top: 130px; padding-bottom: 100px; background-color: #fafbfc;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; width: 100%;">
        <div class="blog-focused-layout">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <!-- BENTO HERO SECTION -->
                <div class="bento-hero" style="width: 100%;">
                    
                    <!-- Box 1: Image -->
                    <div class="bento-item bento-thumbnail">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else: ?>
                            <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: #ccc;">
                                <i class="fa-solid fa-image" style="font-size: 4rem;"></i>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Box 2: Title & Breadcrumbs -->
                    <div class="bento-item bento-title">
                        <nav class="sriguna-breadcrumbs" aria-label="breadcrumb" style="font-size: 0.9rem; color: #666; font-weight: 600; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                            <i class="fa-solid fa-bolt" style="color: #444;"></i>
                            <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #444; text-decoration: none; transition: color 0.2s;">Sriguna</a>
                            <span style="color: #ccc;">/</span>
                            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" style="color: #666; text-decoration: none; transition: color 0.2s;">Blog</a>
                            <span style="color: #ccc;">/</span>
                            <?php 
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" style="color: #111; text-decoration: none; font-weight: 700; transition: color 0.2s;">' . esc_html($categories[0]->name) . '</a>';
                                }
                            ?>
                        </nav>
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <!-- Box 3: Author & Meta -->
                    <div class="bento-item bento-meta">
                        <h3 style="font-size: 0.85rem; text-transform: uppercase; color: #888; margin: 0 0 15px 0; font-weight: 700; letter-spacing: 1px;">Ditulis Oleh</h3>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="width: 50px; height: 50px; border-radius: 12px; background: #ffebeb; color: #ff5e5e; display: flex; align-items: center; justify-content: center; font-size: 1.4rem;">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                            <div style="font-size: 0.95rem; color: #666; display: flex; flex-direction: column; gap: 4px;">
                                <div><span style="color: #111; font-weight: 700; font-size: 1.05rem;"><?php the_author(); ?></span></div>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <i class="fa-regular fa-calendar" style="color: #999;"></i> <?php echo get_the_date('d M Y'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Box 4: Share & Reading Time -->
                    <div class="bento-item bento-social">
                        <div style="margin-bottom: 20px; display: flex; align-items: center; gap: 10px; font-weight: 600; color: #555;">
                            <i class="fa-regular fa-clock" style="font-size: 1.2rem; color: var(--primary-500);"></i>
                            Waktu baca ~<?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> menit
                        </div>
                        <h3 style="font-size: 0.85rem; text-transform: uppercase; color: #888; margin: 0 0 12px 0; font-weight: 700; letter-spacing: 1px;">Bagikan</h3>
                        <div style="display: flex; gap: 12px;">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" style="width: 42px; height: 42px; border-radius: 12px; background: #e7f0ff; color: #1877F2; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s; font-size: 1.2rem;"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" style="width: 42px; height: 42px; border-radius: 12px; background: #eaf5fc; color: #1DA1F2; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s; font-size: 1.2rem;"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" style="width: 42px; height: 42px; border-radius: 12px; background: #e6f9ed; color: #25D366; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s; font-size: 1.3rem;"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>

                </div>
                <!-- END BENTO HERO -->

                <div class="blog-main-content">
                    <article class="single-post-article">
                        
                        <!-- Content Area -->
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>

                    </article>
                    
                    <!-- Post Navigation (Prev/Next) -->
                    <div class="post-navigation" style="margin-top: 60px; display: flex; justify-content: space-between; gap: 25px;">
                        <?php $prev_post = get_previous_post(); if (!empty($prev_post)): ?>
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="post-nav-card" style="text-align: left;">
                                <span class="nav-label" style="color: #888; font-weight: 600; font-size: 0.85rem;"><i class="fa-solid fa-arrow-left"></i> Artikel Sebelumnya</span>
                                <h4 class="nav-title" style="margin-top: 8px; font-weight: 700; color: #111;"><?php echo get_the_title($prev_post->ID); ?></h4>
                            </a>
                        <?php else: ?>
                            <div style="flex: 1;"></div>
                        <?php endif; ?>

                        <?php $next_post = get_next_post(); if (!empty($next_post)): ?>
                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="post-nav-card" style="text-align: right;">
                                <span class="nav-label" style="color: #888; font-weight: 600; font-size: 0.85rem;">Artikel Selanjutnya <i class="fa-solid fa-arrow-right"></i></span>
                                <h4 class="nav-title" style="margin-top: 8px; font-weight: 700; color: #111;"><?php echo get_the_title($next_post->ID); ?></h4>
                            </a>
                        <?php else: ?>
                            <div style="flex: 1;"></div>
                        <?php endif; ?>
                    </div>

                </div> <!-- End blog-main-content -->

            <?php endwhile; endif; ?>
            
            <!-- RELATED POSTS BENTO SECTION -->
            <div class="related-posts-section">
                <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 10px;">
                    <div>
                        <h2 style="font-size: 2rem; font-weight: 800; color: #111; margin: 0; letter-spacing: -0.5px;">Eksplorasi Lanjut</h2>
                        <p style="color: #666; margin: 8px 0 0 0; font-size: 1.1rem;">Rekomendasi bacaan menarik lainnya untuk Anda</p>
                    </div>
                </div>

                <div class="bento-related">
                    <?php
                    $sidebar_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'post__not_in' => array(get_the_ID()),
                        'post_status' => 'publish',
                    );
                    $sidebar_query = new WP_Query($sidebar_args);
                    if ($sidebar_query->have_posts()) :
                        while ($sidebar_query->have_posts()) : $sidebar_query->the_post();
                    ?>
                        <a href="<?php echo get_permalink(); ?>" class="bento-related-item">
                            <div class="bento-related-img">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else: ?>
                                    <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: #ccc;">
                                        <i class="fa-solid fa-image" style="font-size: 2.5rem;"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="bento-related-content">
                                <h4><?php echo wp_trim_words(get_the_title(), 10, '...'); ?></h4>
                                <div class="bento-related-meta">
                                    <span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date('d M Y'); ?></span>
                                    <span style="color: var(--primary-500); font-weight: 600; font-size: 0.8rem; padding: 4px 10px; background: #f0f7ff; border-radius: 20px;">
                                        <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> mnt
                                    </span>
                                </div>
                            </div>
                        </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div> <!-- End related-posts-section -->
            
        </div> <!-- End blog-focused-layout -->
    </div> <!-- End container -->
</div> <!-- End blog-page-container -->

<?php get_footer(); ?>
