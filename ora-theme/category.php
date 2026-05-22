<?php
/**
 * The category template file for ORA - Le Capois Media.
 *
 * @package ORA
 */

get_header(); ?>

<main class="main-content">
    <div class="articles-page-wrapper">
        <header class="section-header-brut" style="margin-bottom: 0; padding: 40px 20px; border-bottom: 2px solid #000; background: #000; color: #fff;">
            <div class="header-left">
                <h1 style="font-size: 48px; font-weight: 900; letter-spacing: -0.05em; text-transform: uppercase; margin: 0 0 10px; color: #ffcc00;">
                    <?php single_cat_title(); ?>
                </h1>
                <p style="font-size: 16px; font-weight: 400; color: #ccc; margin: 0;">
                    <?php echo category_description() ?: '› L\'actualité décryptée par la rédaction de ORA.'; ?>
                </p>
            </div>
        </header>

        <!-- Dynamic Category Posts Grid -->
        <?php if ( have_posts() ) : ?>
        <section class="standard-section selection-soir-section" id="a-la-une" style="margin-top: 0; padding-top: 40px;">
            <div class="selection-soir-grid">
                <?php
                    $post_index = 0;
                    $side_posts = array();

                    while ( have_posts() ) : the_post();
                        if ( $post_index === 0 ) : // First post is the large featured card
                            $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                            if ( ! $thumb_url ) {
                                $thumb_url = get_template_directory_uri() . '/assets/img/krisla-hero.png';
                            }
                            ?>
                            <a href="<?php the_permalink(); ?>" class="selection-large-card" style="text-decoration: none; color: inherit; display: block;">
                                <div class="img-container" style="position:relative; width: 100%; aspect-ratio: 16/10; overflow: hidden; border-radius: 4px;">
                                    <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="selection-meta" style="margin-top: 15px; font-size: 11px; font-weight: 800; letter-spacing: 0.1em; color: #ff5555; text-transform: uppercase; display: flex; align-items: center; gap: 8px;">
                                    <span class="meta-dot" style="width: 8px; height: 8px; background: #c0392b; border-radius: 50%;"></span>
                                    <?php echo esc_html( single_cat_title('', false) ); ?> • UNE
                                </div>
                                <h3 style="font-size: 26px; font-weight: 800; line-height: 1.2; letter-spacing: -0.02em; margin-top: 10px;">
                                    <?php the_title(); ?>
                                </h3>
                            </a>
                            <div class="selection-list">
                            <?php
                        else : // Secondary posts are added to the list side
                            $side_posts[] = get_post();
                        endif;
                        $post_index++;
                    endwhile;

                    // Output side posts if any
                    if ( ! empty( $side_posts ) ) {
                        foreach ( $side_posts as $sp ) {
                            $sp_thumb = get_the_post_thumbnail_url( $sp->ID, 'medium' );
                            if ( ! $sp_thumb ) {
                                $sp_thumb = get_template_directory_uri() . '/assets/img/selection_thumb_maritime_color_1774481105113.png';
                            }
                            $sp_link = get_permalink( $sp->ID );
                            $sp_title = get_the_title( $sp->ID );
                            ?>
                            <a href="<?php echo esc_url( $sp_link ); ?>" class="selection-item" style="text-decoration: none; color: inherit; display: flex; gap: 15px; border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 15px;">
                                <div class="thumb" style="position:relative; width: 80px; height: 80px; flex-shrink: 0; overflow: hidden; border-radius: 4px;">
                                    <img src="<?php echo esc_url( $sp_thumb ); ?>" alt="<?php echo esc_attr( $sp_title ); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="selection-item-content" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="selection-meta" style="font-size: 9px; font-weight: 800; letter-spacing: 0.1em; color: #27ae60; text-transform: uppercase;">
                                        <span class="meta-dot" style="width: 6px; height: 6px; background: #27ae60; border-radius: 50%; display: inline-block; margin-right: 4px;"></span>
                                        <?php echo esc_html( single_cat_title('', false) ); ?>
                                    </div>
                                    <h4 style="font-size: 15px; font-weight: 700; line-height: 1.3; margin: 6px 0 0; color: #111;">
                                        <?php echo esc_html( $sp_title ); ?>
                                    </h4>
                                </div>
                            </a>
                            <?php
                        }
                    }
                    ?>
                    </div> <!-- Close selection-list wrapper -->
            </div>
        </section>

        <!-- Dynamic Category Archive Slider / Secondary Section -->
        <?php if ( $wp_query->found_posts > 5 ) : ?>
            <section class="standard-section story-accent-section" style="border-top: 1px solid #eee; padding-top: 60px;">
                <div class="reels-header">
                    <h2>Autres publications</h2>
                </div>
                <div class="carousel-wrapper">
                    <button class="carousel-nav-btn prev">‹</button>
                    <div class="articles-horizontal-grid">
                        <?php
                        $extra_count = 0;
                        while ( have_posts() ) : the_post();
                            if ( $extra_count >= 5 ) : // Render all other posts beyond the first 5
                                $sp_thumb = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                                if ( ! $sp_thumb ) {
                                    $sp_thumb = 'https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?q=80&w=400&auto=format&fit=crop';
                                }
                                ?>
                                <article class="article-horizontal-card">
                                    <div class="card-thumb">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo esc_url( $sp_thumb ); ?>" alt="<?php the_title_attribute(); ?>">
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-label">
                                            <span class="label-dot"></span>
                                            <span><?php echo esc_html( single_cat_title('', false) ); ?></span>
                                        </div>
                                        <h4><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h4>
                                    </div>
                                </article>
                                <?php
                            endif;
                            $extra_count++;
                        endwhile;
                        ?>
                    </div>
                    <button class="carousel-nav-btn next">›</button>
                </div>
            </section>
        <?php endif; ?>
        <?php else : ?>
            <!-- Section 1: À la une -->
            <section class="standard-section selection-soir-section" id="a-la-une" style="margin-top: 0; padding-top: 0;">
                <div class="selection-soir-grid">
                    <!-- Main Card (Left) -->
                    <a href="#" class="selection-large-card">
                        <div class="img-container" style="position:relative;">
                            <img src="https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?q=80&w=1200&auto=format&fit=crop" alt="Politique Haiti">
                            <div class="reel-play-overlay" style="width:60px; height:60px; font-size:24px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-meta">
                            <span class="meta-dot" style="background: #2c3e50;"></span>
                            Analyse • Gouvernance
                        </div>
                        <h3>Transition Politique : Les défis d'un consensus national durable</h3>
                    </a>

                    <!-- Sidebar List (Right) -->
                    <div class="selection-list">
                        <!-- Item 1 -->
                        <a href="#" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/color_justice_1774872712222.png" alt="Reforme">
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #e74c3c;"></span>
                                    Réforme▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Institutions</div>
                                <h4> Justice et souveraineté : Réforme du système judiciaire haïtien</h4>
                            </div>
                        </a>

                        <!-- Item 2 -->
                        <a href="#" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_capois_color_premium_1774478597130.png" alt="Citoyen">
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #3498db;"></span>
                                    Citoyenneté▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Engagement</div>
                                <h4>Les nouveaux visages de l'engagement citoyen en Haïti</h4>
                            </div>
                        </a>

                        <!-- Item 3 -->
                        <a href="#" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/economy_color_premium_1774478629301.png" alt="Eco Politic">
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #f1c40f;"></span>
                                    Économie▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Budget</div>
                                <h4>Économie Politique : Quelle vision pour le développement du Grand Sud ?</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Section 2: Politique en direct (Vidéos) -->
            <section class="standard-section story-accent-section" id="politique-videos">
                <div class="reels-header">
                    <div class="header-title-block">
                        <h2 style="font-size: 20px; font-weight: 800;">Catégorie en direct</h2>
                        <p style="font-size: 14px; color: #888; margin-top: 5px; font-weight: 400;">Interviews, débats et reportages.</p>
                    </div>
                    <a href="#" class="btn-all-reels">Tout voir</a>
                </div>

                <div class="carousel-wrapper">
                    <button class="carousel-nav-btn prev" aria-label="Précédent">‹</button>
                    <div class="videos-carousel-grid">
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1541873676947-975991138b48?q=80&w=400&auto=format&fit=crop" alt="Debat">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Débat</span></div>
                            <h4>Le Grand Format : Face à la Rédaction</h4>
                        </article>
                        
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1454165833222-d1d44d2752dd?q=80&w=400&auto=format&fit=crop" alt="Conf">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Presse</span></div>
                            <h4>Point de Presse : Les annonces de la semaine</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1507537290036-79ec2646399c?q=80&w=400&auto=format&fit=crop" alt="Territoire">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Territoire</span></div>
                            <h4>Pouvoir local : La parole aux communes</h4>
                        </article>
                    </div>
                    <button class="carousel-nav-btn next" aria-label="Suivant">›</button>
                </div>
            </section>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
