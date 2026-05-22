<?php
/**
 * Template Name: Articles
 *
 * @package ORA
 */

get_header(); 

$is_elementor = false;
if ( is_page() ) {
    $is_elementor = get_post_meta( get_the_ID(), '_elementor_edit_mode', true );
}
?>

<?php if ( $is_elementor ) : ?>
    <main class="page-content" style="padding-top: 40px; min-height: 80vh;">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </main>
<?php else : ?>
<main class="main-content">
        <div class="articles-page-wrapper">
            <header class="section-header-brut">
                <div class="header-left">
                    <h1>L’information par nos plumes:</h1>
                    <p>Toute l’actualité, tout de suite</p>
                </div>

            </header>

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
                        <a href="article-krisla.html" class="btn-pill-black">Lire l'article</a>
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

                    <a href="article-pharmacie.html" class="side-article-card">
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
                        <!-- Card 1 -->
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

                        <!-- Card 4 -->
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

                        <!-- Card 2 -->
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

                        <!-- Card 5 -->
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

                        <!-- Card 3 -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/economy_color_premium_1774478629301.png" alt="Article 3">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 3</span>
                                </div>
                                <h4>Le policier qui a tué Olivio Gomes condamné à 10 ans de prison po...</h4>
                            </div>
                        </article>

                        <!-- Card 6 -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news_summit.png" alt="Article 6">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 6</span>
                                </div>
                                <h4>Bolsonaro quitte l'hôpital pour sa résidence afin de purger sa peine à...</h4>
                            </div>
                        </article>

                        <!-- Card 7 -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_tech.png" alt="Article 7">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 7</span>
                                </div>
                                <h4>L'intelligence artificielle au service de l'agriculture haïtienne</h4>
                            </div>
                        </article>

                        <!-- Card 10 -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_capois_color_premium_1774478597130.png" alt="Article 10">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 10</span>
                                </div>
                                <h4>Infrastructures routières : le grand chantier du Grand Sud</h4>
                            </div>
                        </article>

                        <!-- Card 8 -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/economy_color_premium_1774478629301.png" alt="Article 8">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 8</span>
                                </div>
                                <h4>Le port de Port-au-Prince : défis et opportunités logistiques</h4>
                            </div>
                        </article>

                        <!-- Card 11 -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news_summit.png" alt="Article 11">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 11</span>
                                </div>
                                <h4>Haïti au sommet régional : quelle voix pour la diaspora ?</h4>
                            </div>
                        </article>

                        <!-- Card 9 -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_culture.png" alt="Article 9">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 9</span>
                                </div>
                                <h4>L'artisanat local s'exporte : quand tradition rime avec design</h4>
                            </div>
                        </article>

                        <!-- Card 12 -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_rejoindre_post.png" alt="Article 12">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article 12</span>
                                </div>
                                <h4>Énergie solaire : la solution pour l'électrification rurale ?</h4>
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
        </div>
    </main>
<script>
        function toggleMobileMenu() {
            document.querySelector('.sidebar').classList.toggle('open');
            document.querySelector('.burger-menu').classList.toggle('open');
            document.querySelector('.menu-overlay').classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        }

        // Carousel Navigation Logic
        const grid = document.querySelector('.articles-horizontal-grid');
        const prevBtn = document.querySelector('.carousel-nav-btn.prev');
        const nextBtn = document.querySelector('.carousel-nav-btn.next');

        if (grid && prevBtn && nextBtn) {
            nextBtn.addEventListener('click', () => {
                grid.scrollBy({ left: grid.offsetWidth, behavior: 'smooth' });
            });
            prevBtn.addEventListener('click', () => {
                grid.scrollBy({ left: -grid.offsetWidth, behavior: 'smooth' });
            });
        }
    </script>
<?php endif; ?>

<?php get_footer(); ?>
