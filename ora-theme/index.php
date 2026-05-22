<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ORA
 */

get_header(); ?>

<main class="page-content" style="padding-top: 40px;">
    <div class="articles-page-wrapper">
        <header class="section-header-brut" style="padding: 40px 20px; border-bottom: 2px solid #000; background: #000; color: #fff;">
            <div class="header-left">
                <h1 style="font-size: 48px; font-weight: 900; letter-spacing: -0.05em; text-transform: uppercase; margin: 0 0 10px; color: #ffcc00;">
                    <?php 
                    if ( is_home() && ! is_front_page() ) {
                        single_post_title();
                    } else {
                        esc_html_e( 'Publications', 'ora-theme' );
                    }
                    ?>
                </h1>
                <p style="font-size: 16px; font-weight: 400; color: #ccc; margin: 0;">
                    › <?php esc_html_e( 'Découvrez l\'intégralité de nos analyses et reportages.', 'ora-theme' ); ?>
                </p>
            </div>
        </header>

        <!-- Main General Posts Grid -->
        <?php if ( have_posts() ) : ?>
        <section class="standard-section" style="padding: 60px 20px 120px; max-width: 1200px; margin: 0 auto;">
            <div class="discovery-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 30px;">
                <?php 
                    while ( have_posts() ) : the_post(); 
                        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/krisla-hero.png';
                        }
                        $categories = get_the_category();
                        $cat_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'NEWS';
                        ?>
                        <a href="<?php the_permalink(); ?>" class="discovery-card" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; gap: 12px; background: #fff; padding: 15px; border: 1px solid #eee; border-radius: 4px;">
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
                ?>
            </div>

            <!-- Custom Brutalist Pagination Buttons -->
            <?php if ( get_previous_posts_link() || get_next_posts_link() ) : ?>
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
        <?php else : ?>
            <section class="article-featured-grid-v2">
                <!-- Main Featured (Left) -->
                <div class="featured-main-card">
                    <div class="img-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news_summit.png" alt="Summit">
                    </div>
                    <div class="content">
                        <div class="feature-meta">
                            <span class="label-dot"></span>
                            Summit • Article à la une
                        </div>
                        <h2>Nouveau Sommet Geopolitique : Les enjeux d'un monde en mutation</h2>
                        <p class="description">Alors que les puissances mondiales se réunissent, POST analyse les conséquences stratégiques pour la zone Caraïbe et le rôle crucial de la diaspora dans les nouveaux équilibres.</p>
                        <a href="#" class="btn-pill-black">Lire l'article</a>
                    </div>
                </div>

                <!-- Side Articles (Right) -->
                <div class="featured-side-list">
                    <a href="#" class="side-article-card">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_tech.png" alt="Tech">
                        </div>
                        <div class="side-content">
                            <div class="feature-meta" style="font-size: 11px;">
                                <span class="label-dot" style="width: 7px; height: 7px;"></span>
                                Prospective
                            </div>
                            <h4>Haiti 2030 : le manifeste pour une souveraineté digitale</h4>
                        </div>
                    </a>

                    <a href="#" class="side-article-card">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_med_legal_color_1774481073690.png" alt="Pharmacies">
                        </div>
                        <div class="side-content">
                            <div class="feature-meta" style="font-size: 11px;">
                                <span class="label-dot" style="width: 7px; height: 7px;"></span>
                                Santé Publique
                            </div>
                            <h4>De fausses pharmacies sans autorisation devant l'hôpital La Paix</h4>
                        </div>
                    </a>

                    <a href="#" class="side-article-card">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_capois_color_premium_1774478597130.png" alt="Society">
                        </div>
                        <div class="side-content">
                            <div class="feature-meta" style="font-size: 11px;">
                                <span class="label-dot" style="width: 7px; height: 7px;"></span>
                                Politique
                            </div>
                            <h4>Les nouveaux visages de l'engagement citoyen</h4>
                        </div>
                    </a>
                </div>
            </section>

            <section class="standard-section redaction-articles-section">
                <div class="reels-header">
                    <div class="header-title-block">
                        <h2 style="font-size: 20px; font-weight: 800;">Nos dernières publications</h2>
                        <p style="font-size: 14px; color: #888; margin-top: 5px; font-weight: 400;">Explorez les archives et les grands formats de POST.</p>
                    </div>
                    <a href="#" class="btn-all-reels">Tout voir</a>
                </div>

                <div class="carousel-wrapper">
                    <div class="articles-horizontal-grid">
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_tech.png" alt="Article 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 1</span>
                                </div>
                                <h4>Air Tahiti Nui aux côtés du requin, symbole du territoire...</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_capois_color_premium_1774478597130.png" alt="Article 4">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 4</span>
                                </div>
                                <h4>Gims passe par la case juge d'instruction après la fin de sa garde...</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_rejoindre_post.png" alt="Article 2">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 2</span>
                                </div>
                                <h4>Scandale sexuel qui secoue l'Allemagne: enquête pour...</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_sec_sports_color_1774481090048.png" alt="Article 5">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 5</span>
                                </div>
                                <h4>La mère de deux bébés congelés condamnée à 25 ans de prison</h4>
                            </div>
                        </article>
                    </div>

                    <div class="grid-nav-brut">
                        <button class="carousel-nav-btn prev" aria-label="Précédent">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                        </button>
                        <button class="carousel-nav-btn next" aria-label="Suivant">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
