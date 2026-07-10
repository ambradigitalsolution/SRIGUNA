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
.blog-2col-layout {
    display: flex;
    gap: 40px;
    align-items: flex-start;
}
.blog-main-content {
    flex: 1;
    min-width: 0;
}
.blog-right-sidebar {
    width: 380px;
    flex-shrink: 0;
    position: sticky;
    top: 130px;
}
@media (max-width: 992px) {
    .blog-2col-layout {
        flex-direction: column;
    }
    .blog-right-sidebar {
        width: 100%;
        position: static;
        margin-top: 50px;
    }
}
.sidebar-article-item {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    text-decoration: none;
}
.sidebar-article-item img {
    width: 90px;
    height: 90px;
    border-radius: 8px;
    object-fit: cover;
}
.sidebar-article-info h4 {
    font-size: 1rem;
    color: #111;
    margin: 0 0 8px 0;
    line-height: 1.4;
    transition: color 0.2s;
}
.sidebar-article-item:hover .sidebar-article-info h4 {
    color: var(--primary-500);
}
</style>


<div class="blog-page-container" style="padding-top: 130px; padding-bottom: 100px; background-color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; width: 100%;">
        <div class="blog-2col-layout">
            <div class="blog-main-content">
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
        
            </div> <!-- End blog-main-content -->
            
            <!-- Right Sidebar -->
            <aside class="blog-right-sidebar">
                <h3 style="font-size: 1.4rem; font-weight: 800; margin-bottom: 20px; color: #111; padding-bottom: 15px; border-bottom: 1px solid #eaeaea;">Rekomendasi Artikel Lainnya</h3>
                
                <form role="search" method="get" style="margin-bottom: 30px; position: relative;" action="<?php echo esc_url(home_url('/')); ?>">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #999;"></i>
                    <input type="search" name="s" placeholder="Search" style="width: 100%; padding: 12px 15px 12px 45px; border: 1px solid #ddd; border-radius: 8px; outline: none; font-size: 1rem; transition: border-color 0.2s;" onfocus="this.style.borderColor='#007bff'" onblur="this.style.borderColor='#ddd'" />
                </form>

                <div class="sidebar-articles-list">
                    <?php
                    $sidebar_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'post__not_in' => array(get_the_ID()),
                        'post_status' => 'publish',
                    );
                    $sidebar_query = new WP_Query($sidebar_args);
                    if ($sidebar_query->have_posts()) :
                        while ($sidebar_query->have_posts()) : $sidebar_query->the_post();
                    ?>
                        <a href="<?php echo get_permalink(); ?>" class="sidebar-article-item">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php else: ?>
                                <div style="width: 90px; height: 90px; border-radius: 8px; background: #f1f3f5; display: flex; align-items: center; justify-content: center; color: #ccc; flex-shrink: 0;"><i class="fa-solid fa-image" style="font-size: 1.5rem;"></i></div>
                            <?php endif; ?>
                            <div class="sidebar-article-info">
                                <h4><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></h4>
                                <div style="font-size: 0.85rem; color: #777;"><?php echo get_the_date('d M Y'); ?> &middot; <?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> mnt</div>
                            </div>
                        </a>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </aside> <!-- End blog-right-sidebar -->
            
        </div> <!-- End blog-2col-layout -->
    </div> <!-- End container -->
</div> <!-- End blog-page-container -->

<?php get_footer(); ?>
