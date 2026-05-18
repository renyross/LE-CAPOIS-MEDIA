<?php
/**
 * The template for displaying search results pages for ORA - Le Capois Media.
 *
 * @package ORA
 */

get_header(); ?>

<main class="page-content" style="padding-top: 40px;">
    <section class="search-page-hero" style="max-width: 1000px; margin: 0 auto; padding: 60px 20px 40px; text-align: center;">
        <h1 style="font-size: 48px; font-weight: 900; letter-spacing: -0.04em; margin-bottom: 10px;">Recherche</h1>
        <p style="font-size: 16px; color: #666; margin-bottom: 40px;">Retrouvez toutes les vidéos, podcasts et analyses de ORA en quelques clics.</p>
        
        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="width: 100%; max-width: 600px; margin: 0 auto;">
            <div class="search-bar-container" style="display: flex; align-items: center; border: 2px solid #000; padding: 10px 20px; background: #fff; border-radius: 4px;">
                <svg width="24" height="24" fill="none" stroke="#ccc" stroke-width="2.5" style="margin-right: 15px;"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                <input type="text" name="s" id="mainSearchInput" placeholder="Saisissez votre recherche..." value="<?php echo get_search_query(); ?>" autocomplete="off" style="width: 100%; border: none; outline: none; font-size: 16px; font-weight: 500;">
                <button type="submit" class="search-submit-btn" style="background: #000; color: #fff; border: none; padding: 8px 20px; font-weight: 800; font-size: 12px; letter-spacing: 0.1em; text-transform: uppercase; cursor: pointer; border-radius: 2px;">Rechercher</button>
            </div>
        </form>
    </section>

    <!-- Search Results Section -->
    <section class="results-section" style="padding: 40px 20px 120px; max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 12px; font-weight: 900; margin-bottom: 40px; text-transform: uppercase; color: #999; letter-spacing: 0.15em; text-align: center; border-bottom: 1px solid #eee; padding-bottom: 20px;">
            <?php 
            if ( have_posts() ) {
                printf( esc_html__( 'Résultats de recherche pour : %s', 'ora-theme' ), '"' . get_search_query() . '"' ); 
            } else {
                echo esc_html__( 'Aucun résultat trouvé', 'ora-theme' );
            }
            ?>
        </h2>
        
        <div class="discovery-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 30px;">
            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                    $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                    if ( ! $thumb_url ) {
                        $thumb_url = get_template_directory_uri() . '/assets/img/krisla-hero.png';
                    }
                    $categories = get_the_category();
                    $cat_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'NEWS';
                    ?>
                    <a href="<?php the_permalink(); ?>" class="discovery-card" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; gap: 12px; background: #fff; padding: 15px; border: 1px solid #eee; border-radius: 4px; transition: border-color 0.2s;">
                        <div class="img-wrapper" style="position: relative; aspect-ratio: 9/12; overflow: hidden; border-radius: 2px; background: #f9f9f9;">
                            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <span class="disc-cat" style="font-size: 9px; font-weight: 900; color: #ffcc00; letter-spacing: 0.15em; text-transform: uppercase;">
                            <?php echo esc_html( $cat_name ); ?>
                        </span>
                        <h3 style="font-size: 16px; font-weight: 800; line-height: 1.3; color: #111; margin: 0;">
                            <?php the_title(); ?>
                        </h3>
                        <p style="font-size: 13px; color: #777; line-height: 1.4; margin: 0;">
                            <?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?>
                        </p>
                    </a>
                <?php 
                endwhile; 
            else : 
                ?>
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px 0;">
                    <p style="font-size: 16px; color: #666;">Nous n'avons trouvé aucun article correspondant à votre recherche. Veuillez réessayer avec d'autres termes.</p>
                </div>
            <?php 
            endif; 
            ?>
        </div>

        <!-- Navigation Buttons -->
        <?php if ( have_posts() && ( get_previous_posts_link() || get_next_posts_link() ) ) : ?>
            <div class="grid-nav-brut" style="display: flex; justify-content: center; gap: 20px; margin-top: 60px;">
                <?php
                $prev_link = get_previous_posts_link('<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:24px; height:24px; display:block; margin:auto;"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>');
                $next_link = get_next_posts_link('<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:24px; height:24px; display:block; margin:auto;"><path d="M5 12h14M12 5l7 7-7 7"/></svg>');

                if ( $prev_link ) {
                    echo '<span class="nav-btn-round">' . $prev_link . '</span>';
                } else {
                    echo '<button class="nav-btn-round" disabled style="opacity: 0.3; cursor: default;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:24px; height:24px; display:block; margin:auto;"><path d="M19 12H5M12 19l-7-7 7-7"/></svg></button>';
                }

                if ( $next_link ) {
                    echo '<span class="nav-btn-round">' . $next_link . '</span>';
                } else {
                    echo '<button class="nav-btn-round" disabled style="opacity: 0.3; cursor: default;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:24px; height:24px; display:block; margin:auto;"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>';
                }
                ?>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
