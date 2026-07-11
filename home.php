<style>
/* Bento Grid Variables */
:root {
    --bento-gap: 25px;
    --bento-radius: 24px;
    --bento-border: 1px solid rgba(0,0,0,0.06);
}

/* Header Box */
.bento-header-box {
    background: #fff;
    border-radius: var(--bento-radius);
    padding: 35px 40px;
    border: var(--bento-border);
    box-shadow: 0 6px 20px rgba(0,0,0,0.03);
    margin-bottom: var(--bento-gap);
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}
.bento-header-title h1 {
    font-size: 2.2rem;
    font-weight: 800;
    margin: 0;
    color: #111;
    letter-spacing: -0.5px;
}
.bento-header-title p {
    color: #666;
    margin: 5px 0 0 0;
    font-size: 1.05rem;
}
.bento-search-form {
    position: relative;
    width: 350px;
    max-width: 100%;
}
.bento-search-form input {
    width: 100%;
    padding: 14px 20px 14px 45px;
    border: 2px solid #f0f0f0;
    border-radius: 30px;
    outline: none;
    font-size: 0.95rem;
    background: #fcfcfc;
    transition: all 0.2s;
}
.bento-search-form input:focus {
    border-color: var(--primary-500);
    background: #fff;
}
.bento-search-form i {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #aaa;
}

/* Posts Grid */
.bento-posts-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--bento-gap);
    margin-bottom: 40px;
}

/* Generic Post Card */
.bento-post-card {
    background: #fff;
    border-radius: var(--bento-radius);
    overflow: hidden;
    border: var(--bento-border);
    box-shadow: 0 5px 20px rgba(0,0,0,0.03);
    text-decoration: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}
.bento-post-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}
.bento-post-img {
    height: 220px;
    width: 100%;
    position: relative;
    background: #f8f9fa;
    overflow: hidden;
}
.bento-post-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.bento-post-card:hover .bento-post-img img {
    transform: scale(1.05);
}
.bento-post-content {
    padding: 25px;
    display: flex;
    flex-direction: column;
    flex: 1;
}
.bento-post-content h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: #111;
    margin: 0 0 12px 0;
    line-height: 1.4;
    transition: color 0.2s;
}
.bento-post-card:hover .bento-post-content h3 {
    color: var(--primary-500);
}
.bento-post-excerpt {
    color: #555;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 20px;
}
.bento-post-meta {
    margin-top: auto;
    font-size: 0.85rem;
    color: #888;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #f4f4f4;
    padding-top: 15px;
}
.bento-post-meta .author {
    font-weight: 600;
    color: #444;
}

/* Highlight Post Card (1st Post) */
.bento-post-card.highlight {
    grid-column: span 2;
    grid-row: span 2;
    position: relative;
}
.bento-post-card.highlight .bento-post-img {
    height: 100%;
    position: absolute;
    top: 0; left: 0; width: 100%;
}
.bento-post-card.highlight .bento-post-content {
    position: relative;
    z-index: 2;
    justify-content: flex-end;
    padding: 40px;
    background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.1) 100%);
    min-height: 400px;
}
.bento-post-card.highlight h3 {
    color: #fff;
    font-size: 2.2rem;
    margin-bottom: 15px;
}
.bento-post-card.highlight:hover h3 {
    color: #fff;
    text-decoration: underline;
}
.bento-post-card.highlight .bento-post-excerpt {
    color: rgba(255,255,255,0.8);
    font-size: 1.1rem;
    max-width: 80%;
}
.bento-post-card.highlight .bento-post-meta {
    border-color: rgba(255,255,255,0.2);
    color: rgba(255,255,255,0.7);
}
.bento-post-card.highlight .bento-post-meta .author {
    color: #fff;
}

/* Responsive Grid */
@media (max-width: 992px) {
    .bento-posts-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .bento-post-card.highlight {
        grid-column: span 2;
        grid-row: auto;
    }
    .bento-post-card.highlight .bento-post-content {
        min-height: 350px;
    }
}
@media (max-width: 768px) {
    .bento-posts-grid {
        grid-template-columns: 1fr;
    }
    .bento-post-card.highlight {
        grid-column: 1 / -1;
    }
    .bento-header-box {
        flex-direction: column;
        align-items: flex-start;
    }
    .bento-search-form {
        width: 100%;
    }
}

/* Pagination Bento */
.bento-pagination {
    background: #fff;
    border-radius: 20px;
    padding: 20px;
    border: var(--bento-border);
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    display: flex;
    justify-content: center;
    gap: 10px;
}
.bento-pagination .page-numbers {
    padding: 10px 18px;
    border-radius: 12px;
    background: #f4f6f8;
    color: #444;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.2s;
}
.bento-pagination .page-numbers:hover,
.bento-pagination .page-numbers.current {
    background: var(--primary-500);
    color: #fff;
}
</style>

<div class="blog-page-container" style="padding-top: 130px; padding-bottom: 100px; background-color: #f4f6f8;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        
        <!-- HEADER BENTO BOX -->
        <div class="bento-header-box">
            <div class="bento-header-title">
                <h1>Jelajahi Blog Kami</h1>
                <p>Temukan artikel terbaru, tips, dan wawasan seputar teknologi.</p>
            </div>
            
            <form role="search" method="get" class="bento-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" placeholder="Cari artikel..." value="<?php echo get_search_query(); ?>" name="s" />
            </form>
        </div>

        <!-- BENTO POSTS GRID -->
        <div class="bento-posts-grid">
            <?php 
            $count = 0;
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
                    $count++;
                    $is_highlight = ($count == 1);
            ?>
                
                <a href="<?php the_permalink(); ?>" class="bento-post-card <?php echo $is_highlight ? 'highlight' : ''; ?>">
                    
                    <div class="bento-post-img">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail($is_highlight ? 'large' : 'medium'); ?>
                        <?php else : ?>
                            <!-- Fallback Image -->
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/laptop-category.png' ); ?>" alt="Thumbnail">
                        <?php endif; ?>
                    </div>
                    
                    <div class="bento-post-content">
                        <h3><?php echo wp_trim_words(get_the_title(), 12, '...'); ?></h3>
                        <div class="bento-post-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), $is_highlight ? 25 : 15, '...'); ?>
                        </div>
                        <div class="bento-post-meta">
                            <span class="author"><i class="fa-solid fa-user-pen" style="margin-right: 5px;"></i> <?php echo get_the_author(); ?></span>
                            <span><i class="fa-regular fa-clock" style="margin-right: 5px;"></i> <?php echo get_the_date('d M Y'); ?></span>
                        </div>
                    </div>
                    
                </a>
                
            <?php 
                endwhile;
            else : 
            ?>
                <div class="bento-post-card highlight" style="align-items: center; justify-content: center; padding: 50px; grid-column: 1 / -1;">
                    <i class="fa-solid fa-ghost" style="font-size: 3rem; color: #ccc; margin-bottom: 20px;"></i>
                    <h3 style="color: #666; margin: 0;">Belum ada artikel yang diterbitkan.</h3>
                </div>
            <?php endif; ?>
        </div>

        <!-- PAGINATION BENTO -->
        <?php if (paginate_links()) : ?>
            <div class="bento-pagination">
                <?php 
                echo paginate_links([
                    'prev_text' => '<i class="fa-solid fa-arrow-left"></i>',
                    'next_text' => '<i class="fa-solid fa-arrow-right"></i>'
                ]); 
                ?>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>



