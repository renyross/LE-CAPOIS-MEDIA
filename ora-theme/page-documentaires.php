<?php
/**
 * Template Name: Page Documentaires
 *
 * The template for displaying ORA documentary films and grand format video projects.
 *
 * @package ORA
 */

get_header(); ?>

<main class="main-content" style="padding-top: 40px;">
    <div class="articles-page-wrapper">
        <header class="section-header-brut">
            <div class="header-left">
                <h1>Documentaires</h1>
                <p>› Regarder le monde en face, à travers l'objectif de ORA.</p>
            </div>
        </header>

        <section class="standard-section">
            <?php
            // Query the latest documentary for the grand showcase card
            $featured_doc = new WP_Query( array(
                'posts_per_page' => 1,
                'category_name'  => 'documentaires',
                'post_status'    => 'publish',
            ) );

            if ( $featured_doc->have_posts() ) :
                while ( $featured_doc->have_posts() ) : $featured_doc->the_post();
                    $featured_doc_id = get_the_ID();
                    $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                    if ( ! $thumb_url ) {
                        $thumb_url = 'https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=1600&auto=format&fit=crop';
                    }
                    ?>
                    <!-- Featured Documentary Cover Card -->
                    <div class="doc-card-large" style="position: relative; height: 500px; border-radius: 4px; overflow: hidden; background: #111; margin-bottom: 40px;">
                        <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.6; display: block;">
                        <div class="doc-content-overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 60px 40px; background: linear-gradient(transparent, rgba(0,0,0,0.95)); color: #fff;">
                            <span class="doc-tag" style="background: #ffcc00; color: #000; padding: 4px 12px; font-size: 12px; font-weight: 800; text-transform: uppercase; border-radius: 4px; margin-bottom: 20px; display: inline-block;">SÉLECTION PREMIUM</span>
                            <h2 style="font-size: 32px; font-weight: 900; margin: 0 0 15px; color: #fff;"><?php the_title(); ?></h2>
                            <p style="font-size: 18px; opacity: 0.9; max-width: 700px; margin: 0 0 25px; line-height: 1.4;"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="play-btn" style="background: #ffcc00; color: #000; padding: 15px 35px; font-size: 14px; font-weight: 800; text-transform: uppercase; text-decoration: none; display: inline-flex; align-items: center; border-radius: 4px;">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor" style="margin-right: 10px;"><path d="M8 5v14l11-7z"/></svg>
                                VOIR LE DOCUMENTAIRE
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default Static Showcase Cover
                ?>
                <div class="doc-card-large" style="position: relative; height: 500px; border-radius: 4px; overflow: hidden; background: #111; margin-bottom: 40px;">
                    <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=1600&auto=format&fit=crop" alt="Default Showcase Cover" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.6; display: block;">
                    <div class="doc-content-overlay" style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 60px 40px; background: linear-gradient(transparent, rgba(0,0,0,0.95)); color: #fff;">
                        <span class="doc-tag" style="background: #ffcc00; color: #000; padding: 4px 12px; font-size: 12px; font-weight: 800; text-transform: uppercase; border-radius: 4px; margin-bottom: 20px; display: inline-block;">SÉLECTION PREMIUM</span>
                        <h2 style="font-size: 32px; font-weight: 900; margin: 0 0 15px; color: #fff;">L'Ombre des Couloirs : Enquête sur Ti Bwa</h2>
                        <p style="font-size: 18px; opacity: 0.9; max-width: 700px; margin: 0 0 25px; line-height: 1.4;">Une immersion inédite de 52 minutes au cœur des quartiers de Carrefour, là où la loi de la République s'arrête.</p>
                        <a href="#" class="play-btn" style="background: #ffcc00; color: #000; padding: 15px 35px; font-size: 14px; font-weight: 800; text-transform: uppercase; text-decoration: none; display: inline-flex; align-items: center; border-radius: 4px;">
                            <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor" style="margin-right: 10px;"><path d="M8 5v14l11-7z"/></svg>
                            VOIR LE DOCUMENTAIRE
                        </a>
                    </div>
                </div>
            <?php
            endif;
            ?>

            <!-- Documentaries Standard Grid -->
            <div class="doc-grid-standard" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px;">
                <?php
                // Query remaining documentaries
                $docs_grid = new WP_Query( array(
                    'posts_per_page' => 12,
                    'category_name'  => 'documentaires',
                    'post_status'    => 'publish',
                    'post__not_in'   => isset( $featured_doc_id ) ? array( $featured_doc_id ) : array(),
                ) );

                if ( $docs_grid->have_posts() ) :
                    while ( $docs_grid->have_posts() ) : $docs_grid->the_post();
                        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/hero_culture.png';
                        }
                        $cats = get_the_category();
                        $cat_name = ! empty( $cats ) ? esc_html( $cats[0]->name ) : 'FILM';
                        $duration = get_post_meta( get_the_ID(), '_doc_duration', true ) ?: '30 MIN';
                        ?>
                        <article class="doc-card" onclick="location.href='<?php the_permalink(); ?>'" style="aspect-ratio: 1/1; background: #000; border-radius: 4px; overflow: hidden; position: relative; cursor: pointer;">
                            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8; transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);">
                            <div class="doc-info-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 20px; background: linear-gradient(0deg, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.4) 60%, transparent 100%); display: flex; flex-direction: column; justify-content: flex-end; min-height: 60%; pointer-events: none;">
                                <div class="doc-meta" style="font-size: 11px; font-weight: 900; color: #ffcc00; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 8px; display: flex; align-items: center; gap: 10px;">
                                    <span><?php echo esc_html( $cat_name ); ?></span>
                                    <span style="opacity: 0.5;">•</span>
                                    <span><?php echo esc_html( $duration ); ?></span>
                                </div>
                                <h3 style="margin: 0 0 15px; font-size: 18px; font-weight: 850; line-height: 1.25; color: #fff;">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="doc-play-btn" style="font-size: 10px; font-weight: 900; color: #fff; display: flex; align-items: center; gap: 8px; text-transform: uppercase; letter-spacing: 1px;">Regarder</div>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Fallback static documentaries
                    $static_docs = array(
                        array('title' => 'Les Enfants de la Transition : Quel futur pour demain ?', 'cat' => 'SOCIÉTÉ', 'dur' => '24 MIN', 'img' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=600&auto=format&fit=crop'),
                        array('title' => 'La Grand\'Anse : Un paradis en sursis face au climat', 'cat' => 'ENVIRONNEMENT', 'dur' => '45 MIN', 'img' => 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?q=80&w=600&auto=format&fit=crop'),
                        array('title' => 'Citadelle : Les gardiens silencieux de la liberté', 'cat' => 'HISTOIRE', 'dur' => '38 MIN', 'img' => 'https://images.unsplash.com/photo-1542385151-efd9000785a0?q=80&w=600&auto=format&fit=crop')
                    );
                    foreach ( $static_docs as $sd ) :
                        ?>
                        <article class="doc-card" style="aspect-ratio: 1/1; background: #000; border-radius: 4px; overflow: hidden; position: relative;">
                            <img src="<?php echo esc_url( $sd['img'] ); ?>" alt="Doc Fallback" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8;">
                            <div class="doc-info-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 20px; background: linear-gradient(0deg, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.4) 60%, transparent 100%); display: flex; flex-direction: column; justify-content: flex-end; min-height: 60%; pointer-events: none;">
                                <div class="doc-meta" style="font-size: 11px; font-weight: 900; color: #ffcc00; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 8px; display: flex; align-items: center; gap: 10px;">
                                    <span><?php echo esc_html( $sd['cat'] ); ?></span>
                                    <span style="opacity: 0.5;">•</span>
                                    <span><?php echo esc_html( $sd['dur'] ); ?></span>
                                </div>
                                <h3 style="margin: 0 0 15px; font-size: 18px; font-weight: 850; line-height: 1.25; color: #fff;">
                                    <?php echo esc_html( $sd['title'] ); ?>
                                </h3>
                                <div class="doc-play-btn" style="font-size: 10px; font-weight: 900; color: #fff; display: flex; align-items: center; gap: 8px; text-transform: uppercase; letter-spacing: 1px;">Regarder</div>
                            </div>
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
