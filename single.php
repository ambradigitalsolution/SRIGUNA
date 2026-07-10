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
</style>

<div class="blog-page-container" style="padding-top: 130px; padding-bottom: 80px; background-color: #f8f9fa;">
    <div class="container">
        <div class="blog-layout">
            <!-- Main Content Area -->
            <div class="blog-main">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="single-post-card" style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                        
                        <div class="blog-meta" style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 15px; display: flex; gap: 15px; align-items: center;">
                            <span style="background: var(--primary-500); color: white; padding: 4px 10px; border-radius: 4px; font-weight: bold;"><?php the_category(', '); ?></span>
                            <span><i class="fa-solid fa-user"></i> <?php the_author(); ?></span>
                            <span><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></span>
                        </div>
                        
                        <h1 style="font-size: 2rem; color: var(--primary-600); margin-bottom: 25px; font-weight: 800; line-height: 1.3;"><?php the_title(); ?></h1>
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="margin-bottom: 30px;">
                                <?php the_post_thumbnail('large', ['style' => 'width: 100%; max-height: 450px; object-fit: cover; border-radius: 8px;']); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content" style="line-height: 1.8; font-size: 1rem; color: #444;">
                            <?php the_content(); ?>
                        </div>
                        
                        <!-- Share Section -->
                        <div class="post-share" style="margin-top: 40px; padding: 20px 0; border-top: 1px solid #eee; display: flex; align-items: center; gap: 15px;">
                            <h4 style="margin: 0; font-size: 1rem;">Bagikan:</h4>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" style="width: 35px; height: 35px; background: #3b5998; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%;"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" style="width: 35px; height: 35px; background: #1da1f2; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%;"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" style="width: 35px; height: 35px; background: #25d366; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%;"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" style="width: 35px; height: 35px; background: #0077b5; color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%;"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        
                        <!-- Tags Section -->
                        <?php 
                        $tags = get_the_tags();
                        if($tags) : ?>
                        <div class="post-tags" style="margin-top: 35px; display: flex; align-items: center; flex-wrap: wrap; gap: 10px;">
                            <span style="font-weight: bold; font-size: 1rem; color: #333; margin-right: 5px;">Tags:</span>
                            <?php foreach($tags as $tag): ?>
                                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Author Box -->
                        <div class="author-box" style="margin-top: 40px; padding: 25px; background: #f8f9fa; border-radius: 8px; display: flex; gap: 20px; align-items: flex-start;">
                            <div class="author-avatar" style="flex-shrink: 0; width: 60px; height: 60px; background: var(--primary-500); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; box-shadow: 0 4px 10px rgba(30, 136, 229, 0.2);">
                                <i class="fa-solid fa-user-pen"></i>
                            </div>
                            <div class="author-info">
                                <h4 style="margin: 0 0 10px 0; font-size: 1.2rem;"><?php the_author(); ?></h4>
                                <p style="margin: 0; color: #666; font-size: 0.95rem; line-height: 1.6;">
                                    <?php 
                                    $author_desc = get_the_author_meta('description'); 
                                    echo !empty($author_desc) ? $author_desc : 'Penulis yang membagikan wawasan seputar teknologi, lelang, dan pengelolaan aset IT perusahaan di Oscar Network.';
                                    ?>
                                </p>
                            </div>
                        </div>
                        
                    </article>
                    
                    <!-- Post Navigation (Prev/Next) -->
                    <div class="post-navigation" style="margin-top: 40px; display: flex; justify-content: space-between; gap: 20px;">
                        <?php $prev_post = get_previous_post(); if (!empty($prev_post)): ?>
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="post-nav-card" style="text-align: left;">
                                <span class="nav-label"><i class="fa-solid fa-arrow-left"></i> Sebelumnya</span>
                                <h4 class="nav-title"><?php echo get_the_title($prev_post->ID); ?></h4>
                            </a>
                        <?php else: ?>
                            <div style="flex: 1;"></div>
                        <?php endif; ?>

                        <?php $next_post = get_next_post(); if (!empty($next_post)): ?>
                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="post-nav-card" style="text-align: right;">
                                <span class="nav-label">Selanjutnya <i class="fa-solid fa-arrow-right"></i></span>
                                <h4 class="nav-title"><?php echo get_the_title($next_post->ID); ?></h4>
                            </a>
                        <?php else: ?>
                            <div style="flex: 1;"></div>
                        <?php endif; ?>
                    </div>



                <?php endwhile; endif; ?>
            </div>
            
            <!-- Sidebar Area -->
            <aside class="blog-sidebar">
                <div class="widget search-widget">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="search" class="search-field" placeholder="Search Post" value="<?php echo get_search_query(); ?>" name="s" />
                        <button type="submit" class="search-submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                
                <div class="widget recent-posts-widget">
                    <h3 class="widget-title">Artikel Pilihan</h3>
                    <div class="widget-posts-list">
                        <?php
                        $sidebar_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'post_status' => 'publish',
                        );
                        $sidebar_query = new WP_Query($sidebar_args);
                        if ($sidebar_query->have_posts()) :
                            while ($sidebar_query->have_posts()) : $sidebar_query->the_post();
                        ?>
                            <div class="widget-post-item">
                                <div class="widget-post-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        <?php else : ?>
                                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pc-category.png' ); ?>" alt="Thumb" style="width:60px; height:60px; object-fit:cover; border-radius:4px;">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="widget-post-info">
                                    <h4 class="widget-post-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></a></h4>
                                    <div class="widget-post-date"><i class="fa-regular fa-clock"></i> <?php echo get_the_date(); ?></div>
                                </div>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </aside>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>
