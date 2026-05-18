<?php
/**
 * Template Name: Page Podcasts
 *
 * The template for displaying ORA audio and podcasts archives.
 *
 * @package ORA
 */

get_header(); ?>

<main class="page-content" style="padding-top: 40px;">
    <div class="articles-page-wrapper">
        
        <?php
        // Query the latest podcast for the Hero player
        $featured_podcast = new WP_Query( array(
            'posts_per_page' => 1,
            'category_name'  => 'podcast',
            'post_status'    => 'publish',
        ) );

        if ( $featured_podcast->have_posts() ) :
            while ( $featured_podcast->have_posts() ) : $featured_podcast->the_post();
                $featured_id = get_the_ID();
                $host = get_post_meta( get_the_ID(), '_podcast_host', true ) ?: 'la rédaction';
                $label = get_post_meta( get_the_ID(), '_podcast_label', true ) ?: 'Émission';
                $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                if ( ! $thumb_url ) {
                    $thumb_url = 'https://images.unsplash.com/photo-1478737270239-2f02b77fc618?q=80&w=600&auto=format&fit=crop';
                }
                ?>
                <!-- Audio Player Hero Section -->
                <section class="standard-section audio-showcase-section" style="padding-bottom: 60px;">
                    <div class="audio-showcase-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; max-width: 1200px; margin: 0 auto; align-items: center;">
                        <div class="audio-showcase-meta">
                            <span class="audio-tag" style="background: #ffcc00; color: #000; padding: 4px 12px; font-size: 11px; font-weight: 900; letter-spacing: 0.1em; text-transform: uppercase;">ÉPISODE À L'HONNEUR</span>
                            <h1 style="font-size: 44px; font-weight: 900; margin: 20px 0 15px; line-height: 1.1; letter-spacing: -0.03em;"><?php the_title(); ?></h1>
                            <p style="font-size: 16px; color: #666; line-height: 1.5; margin-bottom: 25px;"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-listen" style="background: #000; color: #fff; text-decoration: none; padding: 15px 30px; font-size: 12px; font-weight: 800; letter-spacing: 0.1em; text-transform: uppercase; border-radius: 4px; display: inline-block;">ÉCOUTER L'ÉPISODE</a>
                        </div>

                        <!-- Brutalist Mockup Media Player -->
                        <div class="audio-player-mockup" style="background: #000; color: #fff; padding: 30px; border-radius: 4px; display: flex; flex-direction: column; gap: 20px;">
                            <div class="player-top" style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #333; padding-bottom: 15px;">
                                <span style="font-size: 11px; font-weight: 800; letter-spacing: 0.1em; color: #ffcc00;">ORA SOUND SYSTEM</span>
                                <span style="font-size: 11px; color: #999;">DIRECT</span>
                            </div>
                            <div class="player-track" style="display: flex; gap: 20px; align-items: center;">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="Cover" style="width: 80px; height: 80px; object-fit: cover; border-radius: 2px;">
                                <div>
                                    <h4 style="font-size: 16px; font-weight: 800; margin: 0; color: #fff;"><?php the_title(); ?></h4>
                                    <span style="font-size: 12px; color: #aaa; margin-top: 5px; display: inline-block;">par ORA Podcast avec <?php echo esc_html( $host ); ?></span>
                                </div>
                            </div>
                            <div class="player-controls" style="display: flex; align-items: center; gap: 20px;">
                                <button style="background: none; border: none; color: #fff; cursor: pointer; font-size: 24px;">▶</button>
                                <div class="player-wave" style="flex-grow: 1; height: 20px; display: flex; align-items: flex-end; gap: 3px;">
                                    <?php for($i=0; $i<25; $i++): $h = rand(20, 100); ?>
                                        <div style="background: #ffcc00; width: 3px; height: <?php echo $h; ?>%; border-radius: 1px;"></div>
                                    <?php endfor; ?>
                                </div>
                                <span style="font-size: 12px; color: #aaa;">- 45:12</span>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            // Static Default Mockup Player
            ?>
            <section class="standard-section audio-showcase-section" style="padding-bottom: 60px;">
                <div class="audio-showcase-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; max-width: 1200px; margin: 0 auto; align-items: center;">
                    <div class="audio-showcase-meta">
                        <span class="audio-tag" style="background: #ffcc00; color: #000; padding: 4px 12px; font-size: 11px; font-weight: 900; letter-spacing: 0.1em; text-transform: uppercase;">ÉPISODE À L'HONNEUR</span>
                        <h1 style="font-size: 44px; font-weight: 900; margin: 20px 0 15px; line-height: 1.1; letter-spacing: -0.03em;">Le Grand Décryptage #12</h1>
                        <p style="font-size: 16px; color: #666; line-height: 1.5; margin-bottom: 25px;">Enjeux de la transition et perspectives d'avenir pour la région dans un contexte geopolitique complexe.</p>
                        <a href="#" class="btn-listen" style="background: #000; color: #fff; text-decoration: none; padding: 15px 30px; font-size: 12px; font-weight: 800; letter-spacing: 0.1em; text-transform: uppercase; border-radius: 4px; display: inline-block;">ÉCOUTER L'ÉPISODE</a>
                    </div>
                    <div class="audio-player-mockup" style="background: #000; color: #fff; padding: 30px; border-radius: 4px; display: flex; flex-direction: column; gap: 20px;">
                        <div class="player-top" style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #333; padding-bottom: 15px;">
                            <span style="font-size: 11px; font-weight: 800; letter-spacing: 0.1em; color: #ffcc00;">ORA SOUND SYSTEM</span>
                            <span style="font-size: 11px; color: #999;">DIRECT</span>
                        </div>
                        <div class="player-track" style="display: flex; gap: 20px; align-items: center;">
                            <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?q=80&w=600&auto=format&fit=crop" alt="Cover" style="width: 80px; height: 80px; object-fit: cover; border-radius: 2px;">
                            <div>
                                <h4 style="font-size: 16px; font-weight: 800; margin: 0; color: #fff;">Le Grand Décryptage #12</h4>
                                <span style="font-size: 12px; color: #aaa; margin-top: 5px; display: inline-block;">par ORA Podcast avec la rédaction</span>
                            </div>
                        </div>
                        <div class="player-controls" style="display: flex; align-items: center; gap: 20px;">
                            <button style="background: none; border: none; color: #fff; cursor: pointer; font-size: 24px;">▶</button>
                            <div class="player-wave" style="flex-grow: 1; height: 20px; display: flex; align-items: flex-end; gap: 3px;">
                                <?php for($i=0; $i<25; $i++): $h = rand(20, 100); ?>
                                    <div style="background: #ffcc00; width: 3px; height: <?php echo $h; ?>%; border-radius: 1px;"></div>
                                <?php endfor; ?>
                            </div>
                            <span style="font-size: 12px; color: #aaa;">- 1:03:54</span>
                        </div>
                    </div>
                </div>
            </section>
        <?php
        endif;
        ?>

        <!-- Grid: Tous les épisodes Section -->
        <section class="standard-section" style="border-top: 1px solid #eee; padding-top: 80px; padding-bottom: 100px;">
            <header class="section-header-tous" style="margin-bottom: 40px;">
                <h2 style="font-size: 28px; font-weight: 900; letter-spacing: -0.03em;">Tous les épisodes</h2>
                <p style="font-size: 14px; color: #888; margin-top: 5px;">› Retrouvez l'intégralité de nos productions sonores.</p>
            </header>

            <div class="episodes-grid-container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 40px 30px;">
                <?php
                // Query all podcasts
                $podcasts_grid = new WP_Query( array(
                    'posts_per_page' => 12,
                    'category_name'  => 'podcast',
                    'post_status'    => 'publish',
                    'post__not_in'   => isset( $featured_id ) ? array( $featured_id ) : array(),
                ) );

                if ( $podcasts_grid->have_posts() ) :
                    while ( $podcasts_grid->have_posts() ) : $podcasts_grid->the_post();
                        $host = get_post_meta( get_the_ID(), '_podcast_host', true ) ?: 'la rédaction';
                        $label = get_post_meta( get_the_ID(), '_podcast_label', true ) ?: 'Émission';
                        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/hero_capois_color_premium_1774478597130.png';
                        }
                        ?>
                        <article class="podcast-card-v2">
                            <div class="podcast-thumb-square">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                </a>
                                <div class="podcast-overlay">
                                    <div class="podcast-brut-label"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast</div>
                                    <div class="podcast-host-label">avec <?php echo esc_html( $host ); ?></div>
                                    <div class="podcast-main-label"><?php echo esc_html( $label ); ?></div>
                                </div>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Fallback static podcasts cards
                    $static_pods = array(
                        array('title' => 'L\'Art de la Résilience', 'host' => 'Sarah Léger', 'label' => 'Culture', 'img' => 'https://images.unsplash.com/photo-1485579149621-3123dd979885?q=80&w=600&auto=format&fit=crop'),
                        array('title' => 'Demain, le Digital', 'host' => 'Jean Baptiste', 'label' => 'Technologie', 'img' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=600&auto=format&fit=crop'),
                        array('title' => 'Chroniques Mondiales', 'host' => 'la rédaction', 'label' => 'International', 'img' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=600&auto=format&fit=crop')
                    );
                    foreach ( $static_pods as $sp ) :
                        ?>
                        <article class="podcast-card-v2">
                            <div class="podcast-thumb-square">
                                <img src="<?php echo esc_url( $sp['img'] ); ?>" alt="Podcast Cover">
                                <div class="podcast-overlay">
                                    <div class="podcast-brut-label"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast</div>
                                    <div class="podcast-host-label">avec <?php echo esc_html( $sp['host'] ); ?></div>
                                    <div class="podcast-main-label"><?php echo esc_html( $sp['label'] ); ?></div>
                                </div>
                            </div>
                            <h3><?php echo esc_html( $sp['title'] ); ?></h3>
                            <p>Analyse des enjeux stratégiques actuels et des transformations structurelles du Grand Nord.</p>
                        </article>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
