<?php
/**
 * The template for displaying all single posts for ORA - Le Capois Media.
 *
 * @package ORA
 */

get_header(); ?>

<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            $categories = get_the_category();
            $cat_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'NEWS';
            $subtitle = get_post_meta( get_the_ID(), '_article_subtitle', true );
            $author = get_the_author();
            $reading_time = ora_estimated_reading_time();
            
            // Image cover
            $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
            $thumb_id = get_post_thumbnail_id();
            $img_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) ?: get_the_title();
            $img_caption = wp_get_attachment_caption( $thumb_id ) ?: 'Crédits : ARCHIVES ORA MEDIA';
            ?>
            <section class="standard-section">
                <div class="container-full">
                    <!-- Article Header -->
                    <div class="article-header" style="max-width: 1000px; margin: 0 auto;">
                        <span class="article-category" style="font-size: 11px; font-weight: 900; letter-spacing: 0.25em; color: #ffcc00; display: inline-block; margin-bottom: 20px; text-transform: uppercase;">
                            <?php echo esc_html( $cat_name ); ?>
                        </span>
                        <h1 class="article-title" style="font-size: 42px; font-weight: 800; line-height: 1.15; letter-spacing: -0.04em; color: #000; margin-bottom: 20px;">
                            <?php the_title(); ?>
                        </h1>
                        <?php if ( ! empty( $subtitle ) ) : ?>
                            <p class="article-subtitle" style="font-size: 20px; line-height: 1.4; color: #666; font-weight: 400; margin-bottom: 25px;">
                                <?php echo esc_html( $subtitle ); ?>
                            </p>
                        <?php endif; ?>
                        
                        <div class="article-meta" style="font-size: 11px; font-weight: 700; color: #999; letter-spacing: 0.05em; border-top: 1px solid #eee; border-bottom: 1px solid #eee; padding: 15px 0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
                            <span>PAR <?php echo esc_html( strtoupper( $author ) ); ?> — PUBLIÉ LE <?php echo esc_html( strtoupper( get_the_date('j F Y') ) ); ?> — <?php echo esc_html( strtoupper( $reading_time ) ); ?> DE LECTURE</span>
                            <div class="social-share" style="display: flex; gap: 10px;">
                                <a href="https://wa.me/?text=<?php echo urlencode( get_permalink() ); ?>" target="_blank" class="social-icon" style="color: #666; transition: color 0.2s;"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.148-.67-1.613-.918-2.213-.242-.584-.487-.504-.67-.514-.173-.01-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-4.734 6.162h-.011c-2.13 0-4.218-.573-6.04-1.654L3 20l1.127-4.108c-1.189-2.062-1.819-4.417-1.819-6.812 0-7.391 6.012-13.403 13.404-13.403 3.582 0 6.95 1.394 9.481 3.926 2.532 2.533 3.926 5.9 3.925 9.477 0 7.392-6.013 13.404-13.405 13.404"/></svg></a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" class="social-icon" style="color: #666; transition: color 0.2s;"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/></svg></a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" class="social-icon" style="color: #666; transition: color 0.2s;"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.325V1.325C24 .593 23.407 0 22.675 0z"/></svg></a>
                            </div>
                        </div>
                    </div>

                    <!-- Landscape Rectangle Cover Image -->
                    <?php if ( $thumb_url ) : ?>
                        <div class="article-hero-cover" style="max-width: 1000px; margin: 40px auto 20px; aspect-ratio: 16/9; overflow: hidden; position: relative; border-radius: 4px;">
                            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        </div>
                        <p class="article-caption" style="max-width: 1000px; margin: 0 auto 20px; font-size: 13px; color: #999; font-style: italic;">
                            <?php echo esc_html( $img_caption ); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </section>

            <!-- Main Post Content -->
            <section class="standard-section" style="padding-top: 0;">
                <div class="container-full">
                    <div class="article-content-wrapper" style="max-width: 1000px; margin: 0 auto; display: block;">
                        <div class="article-main-body" style="max-width: 800px; margin: 0 auto;">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- VOUS POURRIEZ AIMER AUSSI -->
            <section class="standard-section" style="background: #ffffff; border-top: 1px solid #eee; padding: 40px 0 80px;">
                <div class="container-full" style="max-width: 800px; margin: 0 auto;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 30px;">
                        <span style="width: 12px; height: 12px; background: #ffcc00; border-radius: 50%;"></span>
                        <h2 style="font-size: 20px; font-weight: 900; letter-spacing: 0.1em; margin: 0;">Vous pourriez aimer aussi</h2>
                    </div>
                    
                    <div class="carousel-wrapper" style="position: relative; width: 100%;">
                        <button class="carousel-nav-btn prev" style="position: absolute; top: 50%; left: -50px; transform: translateY(-50%); width: 44px; height: 44px; background: white; border: none; border-radius: 50%; box-shadow: 0 4px 15px rgba(0,0,0,0.1); color: #333; font-size: 24px; display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 10; transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);">‹</button>
                        
                        <div class="recommendations-portrait-grid" style="display: flex; overflow-x: auto; gap: 20px; scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none; scroll-snap-type: x mandatory; padding: 10px 0;">
                            <?php
                            // Related posts query based on category
                            $cat_ids = wp_get_post_categories( get_the_ID() );
                            $related_query = new WP_Query( array(
                                'post__not_in'        => array( get_the_ID() ),
                                'posts_per_page'      => 3,
                                'category__in'        => $cat_ids,
                                'post_status'         => 'publish',
                                'ignore_sticky_posts' => 1
                            ) );

                            if ( $related_query->have_posts() ) :
                                while ( $related_query->have_posts() ) : $related_query->the_post();
                                    $rec_thumb = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                                    if ( ! $rec_thumb ) {
                                        $rec_thumb = get_template_directory_uri() . '/assets/img/krisla-hero.png';
                                    }
                                    $rec_cats = get_the_category();
                                    $rec_cat_name = ! empty( $rec_cats ) ? esc_html( $rec_cats[0]->name ) : 'NEWS';
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="portrait-rec-card" style="flex: 0 0 calc(33.33% - 14px); min-width: 220px; text-decoration: none; color: inherit; display: flex; flex-direction: column; gap: 15px; scroll-snap-align: start;">
                                        <div class="rec-thumb-portrait" style="width: 100%; aspect-ratio: 4/5; overflow: hidden; border-radius: 4px;">
                                            <img src="<?php echo esc_url( $rec_thumb ); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                                        </div>
                                        <div class="rec-content" style="display: flex; flex-direction: column; gap: 8px;">
                                            <span class="rec-cat" style="font-size: 9px; font-weight: 900; letter-spacing: 0.15em; color: #999; text-transform: uppercase;">
                                                <?php echo esc_html( $rec_cat_name ); ?>
                                            </span>
                                            <h4 style="font-size: 14px; font-weight: 800; line-height: 1.3; color: #000; margin: 0;">
                                                <?php the_title(); ?>
                                            </h4>
                                        </div>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                // Elegant static fallback slide
                                ?>
                                <div class="portrait-rec-card" style="flex: 0 0 calc(33.33% - 14px); min-width: 220px; display: flex; flex-direction: column; gap: 15px;">
                                    <div class="rec-thumb-portrait" style="width: 100%; aspect-ratio: 4/5; overflow: hidden; border-radius: 4px; background: #eee;"></div>
                                    <div class="rec-content" style="display: flex; flex-direction: column; gap: 8px;">
                                        <span class="rec-cat" style="font-size: 9px; font-weight: 900; letter-spacing: 0.15em; color: #999;">NEWS</span>
                                        <h4 style="font-size: 14px; font-weight: 800;">Aucun article recommandé disponible pour le moment.</h4>
                                    </div>
                                </div>
                            <?php
                            endif;
                            ?>
                        </div>
                        
                        <button class="carousel-nav-btn next" style="position: absolute; top: 50%; right: -50px; transform: translateY(-50%); width: 44px; height: 44px; background: white; border: none; border-radius: 50%; box-shadow: 0 4px 15px rgba(0,0,0,0.1); color: #333; font-size: 24px; display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 10; transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);">›</button>
                    </div>
                </div>
            </section>
            <?php
        endwhile;
    endif;
    ?>
</main>

<script>
    // Inline scrolling engine for recommended posts carousel
    const recGrid = document.querySelector('.recommendations-portrait-grid');
    const recPrev = document.querySelector('.carousel-wrapper .carousel-nav-btn.prev');
    const recNext = document.querySelector('.carousel-wrapper .carousel-nav-btn.next');
    if (recGrid && recPrev && recNext) {
        recNext.addEventListener('click', () => {
            recGrid.scrollBy({ left: recGrid.offsetWidth * 0.8, behavior: 'smooth' });
        });
        recPrev.addEventListener('click', () => {
            recGrid.scrollBy({ left: -recGrid.offsetWidth * 0.8, behavior: 'smooth' });
        });
        recGrid.addEventListener('scroll', () => {
            recPrev.disabled = recGrid.scrollLeft <= 5;
            recNext.disabled = recGrid.scrollLeft + recGrid.offsetWidth >= recGrid.scrollWidth - 5;
        });
        recPrev.disabled = true;
    }
</script>

<?php get_footer(); ?>
