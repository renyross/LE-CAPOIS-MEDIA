<?php
/**
 * The front page template file for ORA - Le Capois Media.
 *
 * @package ORA
 */

get_header(); ?>

<main>
    <!-- HERO SLIDER SECTION -->
    <section class="hero-article">
        <div class="hero-slider">
            <?php
            // Query 4 latest posts or posts with hero custom field
            $hero_query = new WP_Query( array(
                'posts_per_page' => 4,
                'post_status'    => 'publish',
            ) );

            $slide_count = 0;
            if ( $hero_query->have_posts() ) :
                while ( $hero_query->have_posts() ) : $hero_query->the_post();
                    $active_class = ( $slide_count === 0 ) ? 'active' : '';
                    $categories = get_the_category();
                    $cat_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'NEWS';
                    $author_name = get_the_author();
                    $reading_time = ora_estimated_reading_time();
                    $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                    if ( ! $thumb_url ) {
                        $thumb_url = get_template_directory_uri() . '/assets/img/hero_tech.png';
                    }
                    ?>
                    <div class="hero-slide <?php echo esc_attr( $active_class ); ?>">
                        <div class="hero-image">
                            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" class="elite-image">
                        </div>
                        <div class="hero-content">
                            <span class="category"><?php echo esc_html( strtoupper( $cat_name ) ); ?></span>
                            <h1><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h1>
                            <p class="lead"><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
                            <div class="meta">PAR <?php echo esc_html( strtoupper( $author_name ) ); ?> — <?php echo esc_html( strtoupper( get_the_date('j F Y') ) ); ?> — <?php echo esc_html( $reading_time ); ?> DE LECTURE</div>
                        </div>
                    </div>
                    <?php
                    $slide_count++;
                endwhile;
                wp_reset_postdata();
            else :
                // Hardcoded beautiful fallbacks for fresh installations
                $fallbacks = array(
                    array(
                        'cat'  => 'PROSPECTIVE',
                        'title'=> "Haiti 2030 : le manifeste pour <br>une souveraineté digitale",
                        'lead' => "Face aux défis de la gouvernance traditionnelle, la diaspora émerge comme le premier vecteur d'innovation et de stabilité.",
                        'meta' => 'PAR L. — ANALYSE PROSPECTIVE — 12 MIN DE LECTURE',
                        'img'  => '/assets/img/hero_tech.png'
                    ),
                    array(
                        'cat'  => 'GÉOPOLITIQUE',
                        'title'=> "Influence Haïtienne sur <br>l'Échiquier Mondial",
                        'lead' => "Analyse des nouvelles alliances stratégiques et de la montée en puissance de la diplomatie caribéenne moderne.",
                        'meta' => 'PAR F. — ANALYST STRATÉGIQUE — 8 MIN DE LECTURE',
                        'img'  => '/assets/img/hero_geopolitique.png'
                    ),
                    array(
                        'cat'  => 'ÉCONOMIE',
                        'title'=> "Les Capitaux de la Diaspora <br>en Levier de Croissance",
                        'lead' => "Transformer les transferts de fonds en investissements productifs pour le développement durable des institutions.",
                        'meta' => 'PAR M. — EXPERTE ÉCONOMISTE — 10 MIN DE LECTURE',
                        'img'  => '/assets/img/hero_economie.png'
                    ),
                    array(
                        'cat'  => 'CULTURE',
                        'title'=> "La Renaissance des Arts <br>comme Vecteur de Soft Power",
                        'lead' => "Comment les expressions artistiques locales et la renaissance créative redéfinissent l'attractivité nationale.",
                        'meta' => 'PAR S. — CRITIQUE D’ART — 7 MIN DE LECTURE',
                        'img'  => '/assets/img/hero_culture.png'
                    )
                );

                foreach ( $fallbacks as $key => $fb ) :
                    $active_class = ( $key === 0 ) ? 'active' : '';
                    ?>
                    <div class="hero-slide <?php echo esc_attr( $active_class ); ?>">
                        <div class="hero-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . $fb['img'] ); ?>" alt="Fallback Slide" class="elite-image">
                        </div>
                        <div class="hero-content">
                            <span class="category"><?php echo esc_html( $fb['cat'] ); ?></span>
                            <h1><?php echo wp_kses_post( $fb['title'] ); ?></h1>
                            <p class="lead"><?php echo esc_html( $fb['lead'] ); ?></p>
                            <div class="meta"><?php echo esc_html( $fb['meta'] ); ?></div>
                        </div>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
        </div>

        <!-- Slider Pagination -->
        <div class="hero-pagination">
            <div class="pagination-dot active" data-index="0"></div>
            <div class="pagination-dot" data-index="1"></div>
            <div class="pagination-dot" data-index="2"></div>
            <div class="pagination-dot" data-index="3"></div>
        </div>

        <div class="hero-controls-extra">
            <button class="pause-toggle" onclick="toggleAutoPlay()" aria-label="Pause/Play">
                <svg id="pauseIcon" viewBox="0 0 24 24" width="16" height="16" fill="white"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>
                <svg id="playIcon" viewBox="0 0 24 24" width="16" height="16" fill="white" style="display:none;"><path d="M8 5v14l11-7z"/></svg>
            </button>
        </div>
    </section>

    <!-- SECTION 1: À LA UNE -->
    <section class="standard-section editor-selection">
        <div class="reels-header">
            <h2>À la une</h2>
            <?php
            $news_cat_id = get_cat_ID('News') ?: get_cat_ID('À la une');
            $news_link = $news_cat_id ? get_category_link($news_cat_id) : get_post_type_archive_link('post');
            ?>
            <a href="<?php echo esc_url( $news_link ); ?>" class="btn-all-reels">Tout voir</a>
        </div>
        <div class="selection-grid">
            <?php
            // Query 5 posts tagged or categorized under 'À la une' / 'Featured'
            $featured_query = new WP_Query( array(
                'posts_per_page' => 5,
                'category_name'  => 'a-la-une',
                'post_status'    => 'publish',
            ) );

            if ( ! $featured_query->have_posts() ) {
                // Fallback to general latest posts
                $featured_query = new WP_Query( array(
                    'posts_per_page' => 5,
                    'post_status'    => 'publish',
                ) );
            }

            if ( $featured_query->have_posts() ) :
                $item_index = 0;
                while ( $featured_query->have_posts() ) : $featured_query->the_post();
                    $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                    if ( $item_index === 0 ) : // Main Large Card
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/krisla-hero.png';
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="selection-main" style="text-decoration: none; color: inherit; display: block;">
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" class="elite-image">
                            </div>
                            <div class="card-label">
                                <span class="label-dot"></span>
                                <span>EN UNE</span>
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <div class="card-meta">PAR <?php echo esc_html( strtoupper( get_the_author() ) ); ?> — <?php echo esc_html( ora_estimated_reading_time() ); ?> DE LECTURE</div>
                        </a>
                        <div class="selection-side">
                        <?php
                    else : // Side Cards
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/selection_thumb_maritime_color_177448105113.png';
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="selection-card" style="text-decoration: none; color: inherit;">
                            <div class="image-thumb">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" class="elite-image">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>EN UNE</span>
                                </div>
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </a>
                        <?php
                    endif;
                    $item_index++;
                endwhile;
                ?>
                </div> <!-- Close selection-side wrapper -->
                <?php
                wp_reset_postdata();
            else :
                // Static Fallback if no posts exist
                ?>
                <a href="#" class="selection-main" style="text-decoration: none; color: inherit; display: block;">
                    <div class="image-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/krisla-hero.png' ); ?>" alt="Fallback Krisla" class="elite-image">
                    </div>
                    <div class="card-label">
                        <span class="label-dot"></span>
                        <span>EN UNE</span>
                    </div>
                    <h2>Le système de contrôle implacable de Krisla à Carrefour</h2>
                    <div class="card-meta">PAR LA RÉDACTION — 10 MIN DE LECTURE</div>
                </a>
                <div class="selection-side">
                    <a href="#" class="selection-card" style="text-decoration: none; color: inherit;">
                        <div class="image-thumb">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_med_legal_color_1774481073690.png' ); ?>" alt="Pharmacies" class="elite-image">
                        </div>
                        <div class="card-content">
                            <div class="card-label"><span class="label-dot"></span><span>EN UNE</span></div>
                            <h4>De fausses pharmacies sans autorisation devant l'hôpital La Paix</h4>
                        </div>
                    </a>
                    <a href="#" class="selection-card" style="text-decoration: none; color: inherit;">
                        <div class="image-thumb">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_maritime_color_1774481105113.png' ); ?>" alt="Bateaux" class="elite-image">
                        </div>
                        <div class="card-content">
                            <div class="card-label"><span class="label-dot"></span><span>EN UNE</span></div>
                            <h4>Des bateaux paient les policiers de la garde côtière pour protection</h4>
                        </div>
                    </a>
                </div>
            <?php
            endif;
            ?>
        </div>
    </section>

    <!-- SECTION 2: NOS SÉLECTIONS (HORIZONTAL SLIDING GRID) -->
    <section class="standard-section redaction-articles-section">
        <div class="reels-header">
            <h2>Nos sélections</h2>
            <a href="<?php echo esc_url( get_post_type_archive_link('post') ?: home_url('/articles/') ); ?>" class="btn-all-reels">Tout voir</a>
        </div>
        <div class="carousel-wrapper">
            <button class="carousel-nav-btn prev">‹</button>
            <div class="articles-horizontal-grid">
                <?php
                // Fetch latest posts for the horizontal grid
                $selections_query = new WP_Query( array(
                    'posts_per_page' => 12,
                    'post_status'    => 'publish',
                ) );

                if ( $selections_query->have_posts() ) :
                    $index = 1;
                    while ( $selections_query->have_posts() ) : $selections_query->the_post();
                        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                        if ( ! $thumb_url ) {
                            $thumb_url = 'https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?q=80&w=400&auto=format&fit=crop';
                        }
                        ?>
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                </a>
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article <?php echo $index; ?></span>
                                </div>
                                <h4><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h4>
                            </div>
                        </article>
                        <?php
                        $index++;
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Static Fallbacks
                    for ( $i = 1; $i <= 4; $i++ ) :
                        ?>
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?q=80&w=400&auto=format&fit=crop" alt="Article placeholder">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot"></span>
                                    <span>Article <?php echo $i; ?></span>
                                </div>
                                <h4>Air Tahiti Nui aux côtés du requin, symbole du territoire...</h4>
                            </div>
                        </article>
                        <?php
                    endfor;
                endif;
                ?>
            </div>
            <button class="carousel-nav-btn next">›</button>
        </div>
    </section>

    <!-- SECTION 3: PRODUCTIONS SONORES (PODCASTS CAROUSEL) -->
    <section class="standard-section story-accent-section" id="podcasts" style="background-color:#fafafa;">
        <div class="reels-header">
            <h2>Podcasts</h2>
            <?php
            $podcast_cat_id = get_cat_ID('Podcast');
            $podcast_link = $podcast_cat_id ? get_category_link($podcast_cat_id) : home_url('/podcast/');
            ?>
            <a href="<?php echo esc_url($podcast_link); ?>" class="btn-all-reels">Tout voir</a>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-nav-btn prev">‹</button>
            <div class="podcasts-grid-v2">
                <?php
                // Query posts categorized under 'Podcast'
                $podcasts_query = new WP_Query( array(
                    'posts_per_page' => 6,
                    'category_name'  => 'podcast',
                    'post_status'    => 'publish',
                ) );

                if ( $podcasts_query->have_posts() ) :
                    while ( $podcasts_query->have_posts() ) : $podcasts_query->the_post();
                        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/hero_capois_color_premium_1774478597130.png';
                        }
                        // Custom field fields for podcast details
                        $host = get_post_meta( get_the_ID(), '_podcast_host', true ) ?: 'la rédaction';
                        $main_label = get_post_meta( get_the_ID(), '_podcast_label', true ) ?: 'Émission';
                        ?>
                        <article class="podcast-card-v2">
                            <div class="podcast-thumb-square">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                </a>
                                <div class="podcast-overlay">
                                    <div class="podcast-brut-label"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast</div>
                                    <div class="podcast-host-label">avec <?php echo esc_html( $host ); ?></div>
                                    <div class="podcast-main-label"><?php echo esc_html( $main_label ); ?></div>
                                </div>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_strip_all_tags( get_the_excerpt() ) ); ?></p>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Static Fallbacks
                    ?>
                    <article class="podcast-card-v2">
                        <div class="podcast-thumb-square">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero_capois_color_premium_1774478597130.png' ); ?>" alt="Podcast Fallback">
                            <div class="podcast-overlay">
                                <div class="podcast-brut-label"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast</div>
                                <div class="podcast-host-label">avec la rédaction<br>L'élite</div>
                                <div class="podcast-main-label">Les coulisses<br>du pouvoir</div>
                            </div>
                        </div>
                        <h3>Les coulisses du pouvoir</h3>
                        <p>Découvrez ce qui se passe vraiment derrière les portes closes des ministères et grandes institutions du pays.</p>
                    </article>
                <?php
                endif;
                ?>
            </div>
            <button class="carousel-nav-btn next">›</button>
        </div>
    </section>

    <!-- SECTION 4: RÉCIT AUGMENTÉ (VIDEO REELS) -->
    <section class="standard-section story-accent-section" id="recit-augmente">
        <div class="reels-header">
            <h2>Récit augmenté</h2>
            <?php
            $video_cat_id = get_cat_ID('Documentaires') ?: get_cat_ID('Video');
            $video_link = $video_cat_id ? get_category_link($video_cat_id) : home_url('/documentaires/');
            ?>
            <a href="<?php echo esc_url( $video_link ); ?>" class="btn-all-reels">Tout voir</a>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-nav-btn prev">‹</button>
            <div class="videos-carousel-grid">
                <?php
                // Query posts categorized under 'Video' / 'Documentaires'
                $videos_query = new WP_Query( array(
                    'posts_per_page' => 6,
                    'category_name'  => 'documentaires',
                    'post_status'    => 'publish',
                ) );

                if ( $videos_query->have_posts() ) :
                    while ( $videos_query->have_posts() ) : $videos_query->the_post();
                        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/hero_culture.png';
                        }
                        ?>
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                </a>
                                <div class="reel-play-overlay">▶</div>
                            </div>
                            <h4><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h4>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Static Fallbacks
                    $fallbacks = array(
                        array('title' => 'Le murmure des rues : Exploration sonore des marchés de province', 'img' => '/assets/img/hero_culture.png'),
                        array('title' => "L'œil du cyclone : Immersion visuelle au cœur de la reconstruction", 'img' => '/assets/img/news_summit.png'),
                        array('title' => 'Voix d\'outre-mer : Paroles de la diaspora connectée en 2026', 'img' => '/assets/img/hero_capois_color_premium_1774478597130.png')
                    );
                    foreach ( $fallbacks as $fb ) :
                        ?>
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="<?php echo esc_url( get_template_directory_uri() . $fb['img'] ); ?>" alt="Video fallback">
                                <div class="reel-play-overlay">▶</div>
                            </div>
                            <h4><?php echo esc_html( $fb['title'] ); ?></h4>
                        </article>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
            <button class="carousel-nav-btn next">›</button>
        </div>
    </section>
</main>

<script>
    // Hero AutoPlay script
    let currentSlide = 0;
    const slider = document.querySelector('.hero-slider');
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.pagination-dot');
    const pauseIcon = document.getElementById('pauseIcon');
    const playIcon = document.getElementById('playIcon');
    let autoPlayInterval;
    let isPaused = false;

    function showSlide(index) {
        if (!slides.length || !slider) return;
        slides[currentSlide].classList.remove('active');
        if (dots[currentSlide]) dots[currentSlide].classList.remove('active');
        
        currentSlide = (index + slides.length) % slides.length;
        
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        slides[currentSlide].classList.add('active');
        if (dots[currentSlide]) dots[currentSlide].classList.add('active');
    }

    function moveSlide(step) {
        showSlide(currentSlide + step);
        resetAutoPlay();
    }

    function setSlide(index) {
        showSlide(index);
        resetAutoPlay();
    }

    function startAutoPlay() {
        clearInterval(autoPlayInterval);
        autoPlayInterval = setInterval(() => {
            if (!isPaused) {
                showSlide(currentSlide + 1);
            }
        }, 5000);
    }

    function resetAutoPlay() {
        if (!isPaused) {
            startAutoPlay();
        }
    }

    function toggleAutoPlay() {
        isPaused = !isPaused;
        if (isPaused) {
            if (pauseIcon) pauseIcon.style.display = 'none';
            if (playIcon) playIcon.style.display = 'block';
            clearInterval(autoPlayInterval);
        } else {
            if (pauseIcon) pauseIcon.style.display = 'block';
            if (playIcon) playIcon.style.display = 'none';
            startAutoPlay();
        }
    }

    // Connect pagination dots to slides
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            setSlide(index);
        });
    });

    // Start
    startAutoPlay();
</script>

<?php get_footer(); ?>
