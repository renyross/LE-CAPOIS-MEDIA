<?php
/**
 * The front page template file for ORA - Le Capois Media.
 * Reconstructs all 13 sections from the premium static index.html.
 *
 * @package ORA
 */

get_header(); 
$is_elementor = false;
if ( is_front_page() && is_page() ) {
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
<main>
    <!-- SECTION 1: HERO SLIDER SECTION -->
    <section class="hero-article">
        <div class="hero-slider">
            <?php
            // Query 5 latest posts for the slider
            $hero_query = new WP_Query( array(
                'posts_per_page' => 5,
                'post_status'    => 'publish',
            ) );

            $slide_count = 0;
            if ( false && $hero_query->have_posts() ) :
                while ( $hero_query->have_posts() ) : $hero_query->the_post();
                    $active_class = ( $slide_count === 0 ) ? 'active' : '';
                    $categories = get_the_category();
                    $cat_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'PROSPECTIVE';
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
                // Hardcoded beautiful fallbacks from index.html
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
                        'lead' => "Le génie créatif haïtien s'impose mondialement, redéfinissant l'image de la nation par l'excellence artistique.",
                        'meta' => 'PAR Y. — DIRECTEUR ARTISTIQUE — 7 MIN DE LECTURE',
                        'img'  => '/assets/img/hero_culture.png'
                    ),
                    array(
                        'cat'  => 'PROSPECTIVE',
                        'title'=> "Le Capois : L'Architecture <br>d'une Renaissance",
                        'lead' => "Analyse d'un changement de paradigme global où l'élite intellectuelle reprend les rênes de l'avenir institutionnel.",
                        'meta' => 'PAR L. — ÉDITION SPÉCIALE — 15 MIN DE LECTURE',
                        'img'  => '/assets/img/hero_capois_color_premium_1774478597130.png'
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

        <!-- Slider Pagination & Controls -->
        <button class="hero-nav-arrow hero-nav-prev" onclick="moveSlide(-1)">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <button class="hero-nav-arrow hero-nav-next" onclick="moveSlide(1)">
            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
        </button>

        <div class="hero-pagination">
            <span class="pagination-dot active" onclick="setSlide(0)"></span>
            <span class="pagination-dot" onclick="setSlide(1)"></span>
            <span class="pagination-dot" onclick="setSlide(2)"></span>
            <span class="pagination-dot" onclick="setSlide(3)"></span>
            <span class="pagination-dot" onclick="setSlide(4)"></span>
        </div>

        <div class="hero-controls-extra">
            <button class="pause-toggle" id="carouselToggle" onclick="toggleAutoPlay()">
                <svg id="pauseIcon" viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>
                <svg id="playIcon" viewBox="0 0 24 24" width="20" height="20" fill="currentColor" style="display:none;"><polygon points="5 3 19 12 5 21 5 3"/></svg>
            </button>
        </div>
    </section>

    <script>
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
            dots[currentSlide].classList.remove('active');
            
            currentSlide = (index + slides.length) % slides.length;
            
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
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
                pauseIcon.style.display = 'none';
                playIcon.style.display = 'block';
                clearInterval(autoPlayInterval);
            } else {
                pauseIcon.style.display = 'block';
                playIcon.style.display = 'none';
                startAutoPlay();
            }
        }

        startAutoPlay();
    </script>

    <!-- SECTION 2: À LA UNE (EDITOR'S SELECTION) -->
    <section class="standard-section editor-selection">
        <div class="reels-header">
            <h2>À la une</h2>
            <?php
            $a_la_une_cat_id = get_cat_ID('À la une') ?: get_cat_ID('a-la-une');
            $a_la_une_link = $a_la_une_cat_id ? get_category_link($a_la_une_cat_id) : home_url('/');
            ?>
            <a href="<?php echo esc_url($a_la_une_link); ?>" class="btn-all-reels">Tout voir</a>
        </div>
        <div class="selection-grid">
            <?php
            $featured_query = new WP_Query( array(
                'posts_per_page' => 5,
                'category_name'  => 'a-la-une',
                'post_status'    => 'publish',
            ) );

            if ( false && $featured_query->have_posts() ) :
                $item_index = 0;
                while ( $featured_query->have_posts() ) : $featured_query->the_post();
                    $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                    if ( $item_index === 0 ) : // Left Large Card
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
                    else : // Right Small Cards
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/selection_thumb_maritime_color_1774481105113.png';
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
                // Static Fallback from index.html
                ?>
                <a href="<?php echo esc_url( home_url('/article-krisla.html') ); ?>" class="selection-main" style="text-decoration: none; color: inherit; display: block;">
                    <div class="image-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/krisla-hero.png' ); ?>" alt="Contrôle à Carrefour" class="elite-image">
                    </div>
                    <div class="card-label">
                        <span class="label-dot"></span>
                        <span>EN UNE</span>
                    </div>
                    <h2>Le système de contrôle implacable de Krisla à Carrefour</h2>
                    <div class="card-meta">PAR LA RÉDACTION — 10 MIN DE LECTURE</div>
                </a>
                <div class="selection-side">
                    <a href="<?php echo esc_url( home_url('/article-pharmacie.html') ); ?>" class="selection-card" style="text-decoration: none; color: inherit;">
                        <div class="image-thumb">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_med_legal_color_1774481073690.png' ); ?>" alt="Pharmacies" class="elite-image">
                        </div>
                        <div class="card-content">
                            <div class="card-label"><span class="label-dot"></span><span>EN UNE</span></div>
                            <h4>De fausses pharmacies sans autorisation devant l'hôpital La Paix</h4>
                        </div>
                    </a>
                    <article class="selection-card">
                        <div class="image-thumb">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_maritime_color_1774481105113.png' ); ?>" alt="Bateaux" class="elite-image">
                        </div>
                        <div class="card-content">
                            <div class="card-label"><span class="label-dot"></span><span>EN UNE</span></div>
                            <h4>Des bateaux paient les policiers de la garde côtière pour protection</h4>
                        </div>
                    </article>
                    <article class="selection-card">
                        <div class="image-thumb">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_sec_sports_color_1774481090048.png' ); ?>" alt="Commissariats" class="elite-image">
                        </div>
                        <div class="card-content">
                            <div class="card-label"><span class="label-dot"></span><span>EN UNE</span></div>
                            <h4>Des commissariats collectent de l'argent en Haïti. C'est illégal.</h4>
                        </div>
                    </article>
                    <article class="selection-card">
                        <div class="image-thumb">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_diaspora_color_1774481124070.png' ); ?>" alt="Epstein" class="elite-image">
                        </div>
                        <div class="card-content">
                            <div class="card-label"><span class="label-dot"></span><span>EN UNE</span></div>
                            <h4>Des victimes haïtiennes « en danger » dans l'affaire Epstein</h4>
                        </div>
                    </article>
                </div>
            <?php
            endif;
            ?>
        </div>
    </section>

    <!-- SECTION 3: NOS SÉLECTIONS -->
    <section class="standard-section redaction-articles-section">
        <div class="reels-header">
            <h2>Nos sélections</h2>
            <a href="<?php echo esc_url( get_post_type_archive_link('post') ?: home_url('/articles/') ); ?>" class="btn-all-reels">Tout voir</a>
        </div>
        <div class="carousel-wrapper">
            <div class="articles-horizontal-grid">
                <?php
                $selections_query = new WP_Query( array(
                    'posts_per_page' => 12,
                    'post_status'    => 'publish',
                ) );

                if ( false && $selections_query->have_posts() ) :
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
                    // Static Fallbacks from index.html
                    $selections_fallbacks = array(
                        array('title' => 'Air Tahiti Nui aux côtés du requin, symbole du territoire...', 'img' => 'https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?q=80&w=400&auto=format&fit=crop'),
                        array('title' => "Scandale sexuel qui secoue l'Allemagne: enquête pour...", 'img' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?q=80&w=400&auto=format&fit=crop'),
                        array('title' => 'Le policier qui a tué Olivio Gomes condamné à 10 ans de prison po...', 'img' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=600&auto=format&fit=crop'),
                        array('title' => "Gims passe par la case juge d'instruction après la fin de sa garde ...", 'img' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=400&auto=format&fit=crop'),
                        array('title' => 'La mère de deux bébés congelés condamnée à 25 ans de prison', 'img' => 'https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=400&auto=format&fit=crop'),
                        array('title' => "Bolsonaro quitte l'hôpital pour sa résidence afin de purger sa peine à...", 'img' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=400&auto=format&fit=crop'),
                        array('title' => 'Les nouvelles alliances stratégiques en Caraïbe', 'img' => '/assets/img/color_diplomacy_1774872692228.png', 'is_local' => true, 'tag' => 'Diplomatie', 'tag_color' => 'var(--yellow)'),
                        array('title' => 'Justice et souveraineté : Réforme du système judiciaire haïtien', 'img' => '/assets/img/color_justice_1774872712222.png', 'is_local' => true, 'tag' => 'Justice', 'tag_color' => '#d00', 'is_video' => true),
                        array('title' => "Mohammed Sanhadji : « Je voulais devenir Pelé... » L'Architecte de la Performance", 'img' => '/assets/img/color_sport_sanhadji_1774872732973.png', 'is_local' => true, 'tag' => 'Sport 1', 'tag_color' => 'green', 'is_video' => true),
                        array('title' => "Le nouveau défi du développement durable dans l'agro-industrie", 'img' => 'https://images.unsplash.com/photo-1518173946687-a4c8892bbd9f?q=80&w=400&auto=format&fit=crop'),
                        array('title' => "Cryptomonnaies : L'impact de la régulation sur les marchés émergents", 'img' => 'https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?q=80&w=400&auto=format&fit=crop'),
                        array('title' => "Comment l'intelligence artificielle redéfinit le journalisme", 'img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=400&auto=format&fit=crop')
                    );

                    foreach ( $selections_fallbacks as $key => $fb ) :
                        $img_src = isset($fb['is_local']) ? get_template_directory_uri() . $fb['img'] : $fb['img'];
                        $tag = isset($fb['tag']) ? $fb['tag'] : 'Article ' . ($key + 1);
                        $tag_style = isset($fb['tag_color']) ? 'style="background:' . esc_attr($fb['tag_color']) . '"' : '';
                        $tag_text_style = isset($fb['tag_color']) ? 'style="color:' . esc_attr($fb['tag_color']) . '; font-weight:800;"' : '';
                        ?>
                        <article class="article-horizontal-card">
                            <div class="card-thumb" style="position:relative;">
                                <img src="<?php echo esc_url( $img_src ); ?>" alt="Article Fallback">
                                <?php if (isset($fb['is_video'])) : ?>
                                    <div class="reel-play-overlay" style="width:30px; height:30px; background-size:16px;">▶</div>
                                <?php endif; ?>
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" <?php echo $tag_style; ?>></span>
                                    <span <?php echo $tag_text_style; ?>><?php echo esc_html($tag); ?></span>
                                </div>
                                <h4><?php echo esc_html($fb['title']); ?></h4>
                            </div>
                        </article>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
            <div class="grid-nav-brut">
                <button class="carousel-nav-btn prev" aria-label="Previous">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </button>
                <button class="carousel-nav-btn next" aria-label="Next">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- SECTION 4: NOS VIDÉOS -->
    <section class="standard-section selection-soir-section">
        <div class="reels-header">
            <h2 class="section-logo-brut">Nos vidéos</h2>
            <?php
            $video_cat_id = get_cat_ID('Documentaires') ?: get_cat_ID('Video');
            $video_link = $video_cat_id ? get_category_link($video_cat_id) : home_url('/');
            ?>
            <a href="<?php echo esc_url($video_link); ?>" class="btn-all-reels">Tout voir</a>
        </div>

        <div class="selection-soir-grid">
            <?php
            $videos_query = new WP_Query( array(
                'posts_per_page' => 5,
                'category_name'  => 'documentaires',
                'post_status'    => 'publish',
            ) );

            if ( false && $videos_query->have_posts() ) :
                $item_index = 0;
                while ( $videos_query->have_posts() ) : $videos_query->the_post();
                    $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                    $categories = get_the_category();
                    $cat_label = ! empty( $categories ) ? $categories[0]->name : 'Sécurité, Analyse Stratégique';
                    
                    if ( $item_index === 0 ) : // Left Large Card
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/krisla-hero.png';
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="selection-large-card">
                            <div class="img-container" style="position:relative;">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                <div class="reel-play-overlay" style="width:60px; height:60px; font-size:24px; opacity:1;">▶</div>
                            </div>
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #ffcc00;"></span>
                                <?php echo esc_html($cat_label); ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <div class="selection-list">
                        <?php
                    else : // Right Small Cards List
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/selection_thumb_med_legal_color_1774481073690.png';
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #0066cc;"></span>
                                    <?php echo esc_html($cat_label); ?>
                                </div>
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </a>
                        <?php
                    endif;
                    $item_index++;
                endwhile;
                ?>
                </div> <!-- Close selection-list wrapper -->
                <?php
                wp_reset_postdata();
            else :
                // Static Fallback from index.html
                ?>
                <a href="<?php echo esc_url( home_url('/article-krisla.html') ); ?>" class="selection-large-card">
                    <div class="img-container" style="position:relative;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/krisla-hero.png' ); ?>" alt="Woodland Victory">
                        <div class="reel-play-overlay" style="width:60px; height:60px; font-size:24px; opacity:1;">▶</div>
                    </div>
                    <div class="selection-meta">
                        <span class="meta-dot" style="background: #ffcc00;"></span>
                        Sécurité, Analyse Stratégique
                    </div>
                    <h3>Le système de contrôle implacable de Krisla à Carrefour</h3>
                </a>

                <div class="selection-list">
                    <a href="<?php echo esc_url( home_url('/article-pharmacie.html') ); ?>" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_med_legal_color_1774481073690.png' ); ?>" alt="Pharmacies">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #0066cc;"></span>
                                Santé, Société
                            </div>
                            <h4>De fausses pharmacies sans autorisation devant l'hôpital La Paix</h4>
                        </div>
                    </a>

                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_maritime_color_1774481105113.png' ); ?>" alt="Maritime">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #cc0000;"></span>
                                Sécurité, Maritime
                            </div>
                            <h4>Des bateaux paient les policiers de la garde côtière pour protection</h4>
                        </div>
                    </a>

                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_sec_sports_color_1774481090048.png' ); ?>" alt="Commissariats">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #ffcc00;"></span>
                                Justice, Sécurité
                            </div>
                            <h4>Des commissariats collectent des fonds illégaux en Haïti</h4>
                        </div>
                    </a>

                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/video_latest_4_climate_1774831643509.png' ); ?>" alt="Environnement">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #ffcc00;"></span>
                                Climat, Environnement
                            </div>
                            <h4>L'urgence environnementale face au déclin de la biodiversité</h4>
                        </div>
                    </a>
                </div>
            <?php
            endif;
            ?>
        </div>
    </section>

    <!-- SECTION 5: NOS DERNIÈRES VIDÉOS -->
    <section class="standard-section latest-videos-section" id="latest-videos">
        <div class="reels-header">
            <h2 class="section-logo-brut">Nos dernières vidéos</h2>
            <a href="<?php echo esc_url($video_link); ?>" class="btn-all-reels">Tout voir</a>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-nav-btn prev">‹</button>
            <div class="videos-carousel-grid">
                <?php
                $latest_videos_query = new WP_Query( array(
                    'posts_per_page' => 6,
                    'category_name'  => 'documentaires',
                    'post_status'    => 'publish',
                ) );

                if ( false && $latest_videos_query->have_posts() ) :
                    while ( $latest_videos_query->have_posts() ) : $latest_videos_query->the_post();
                        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/hero_tech.png';
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
                    // Static Fallback from index.html
                    $latest_videos_fallbacks = array(
                        array('title' => 'Diplomatie : Les nouvelles alliances stratégiques en Caraïbe', 'img' => '/assets/img/video_latest_1_diplomacy_v2_1774831692777.png'),
                        array('title' => 'Justice et souveraineté : Réforme du système judiciaire haïtien', 'img' => '/assets/img/video_latest_3_justice_1774831624562.png'),
                        array('title' => "Climat : L'urgence environnementale face aux défis régionaux", 'img' => '/assets/img/video_latest_4_climate_1774831643509.png'),
                        array('title' => "Innovation : Le potentiel de l'IA pour le développement local", 'img' => '/assets/img/video_latest_5_tech_future_1774831659413.png'),
                        array('title' => 'Urbanisme : Redessiner Port-au-Prince pour les générations futures', 'img' => '/assets/img/video_latest_6_urban_renewal_1774831673739.png'),
                        array('title' => 'Analyse : Les tendances numériques qui façonnent le monde', 'img' => '/assets/img/hero_tech.png')
                    );

                    foreach ( $latest_videos_fallbacks as $fb ) :
                        ?>
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="<?php echo esc_url( get_template_directory_uri() . $fb['img'] ); ?>" alt="Video Fallback">
                                <div class="reel-play-overlay">▶</div>
                            </div>
                            <h4><?php echo esc_html($fb['title']); ?></h4>
                        </article>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
            <button class="carousel-nav-btn next">›</button>
        </div>
    </section>

    <!-- SECTION 6: CULTURE -->
    <section class="standard-section culture-section" id="culture">
        <div class="reels-header">
            <h2 class="section-logo-brut">Culture</h2>
            <?php
            $culture_cat_id = get_cat_ID('Culture');
            $culture_link = $culture_cat_id ? get_category_link($culture_cat_id) : home_url('/');
            ?>
            <a href="<?php echo esc_url($culture_link); ?>" class="btn-all-reels">Tout voir</a>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-nav-btn prev">‹</button>
            <div class="videos-carousel-grid">
                <?php
                $culture_query = new WP_Query( array(
                    'posts_per_page' => 8,
                    'category_name'  => 'culture',
                    'post_status'    => 'publish',
                ) );

                if ( false && $culture_query->have_posts() ) :
                    while ( $culture_query->have_posts() ) : $culture_query->the_post();
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
                    // Static Fallbacks from index.html
                    $culture_fallbacks = array(
                        array('title' => "LAMA : « L'Architecture de la Renaissance : Le Musée d'Art Haïtien se réinvente »", 'img' => '/assets/img/hero_culture.png'),
                        array('title' => 'Pourquoi le Prix Goncourt regarde vers Port-au-Prince', 'img' => '/assets/img/economy_color_premium_1774478629301.png'),
                        array('title' => "Le prochain chef-d'œuvre de Raoul Peck : Une vision qui bouscule", 'img' => '/assets/img/selection_thumb_diaspora_color_1774481124070.png'),
                        array('title' => "Le jazz haïtien s'invite au Lincoln Center : Une consécration", 'img' => '/assets/img/selection_thumb_med_legal_color_1774481073690.png'),
                        array('title' => 'Exposition: "Terres de Miracles" à la Galerie Capoise.', 'img' => '/assets/img/hero_tech.png'),
                        array('title' => 'Cinéma : "Les Enfants du Nord", un film qui brise les tabous.', 'img' => '/assets/img/hero_economie.png'),
                        array('title' => 'Musique : La nouvelle scène Afro-Haïtienne en pleine explosion.', 'img' => '/assets/img/hero_geopolitique.png'),
                        array('title' => '"Le Chant des Collines" primé à l\'international.', 'img' => '/assets/img/sport_featured.png')
                    );

                    foreach ( $culture_fallbacks as $fb ) :
                        ?>
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="<?php echo esc_url( get_template_directory_uri() . $fb['img'] ); ?>" alt="Culture Fallback">
                                <div class="reel-play-overlay">▶</div>
                            </div>
                            <h4><?php echo esc_html($fb['title']); ?></h4>
                        </article>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
            <button class="carousel-nav-btn next">›</button>
        </div>
    </section>

    <!-- SECTION 7: SPORT -->
    <section class="standard-section selection-soir-section" id="sport">
        <div class="reels-header">
            <h2 class="section-logo-brut">Sport</h2>
            <?php
            $sport_cat_id = get_cat_ID('Sport');
            $sport_link = $sport_cat_id ? get_category_link($sport_cat_id) : home_url('/');
            ?>
            <a href="<?php echo esc_url($sport_link); ?>" class="btn-all-reels">Tout voir</a>
        </div>

        <div class="selection-soir-grid">
            <?php
            $sport_query = new WP_Query( array(
                'posts_per_page' => 5,
                'category_name'  => 'sport',
                'post_status'    => 'publish',
            ) );

            if ( false && $sport_query->have_posts() ) :
                $item_index = 0;
                while ( $sport_query->have_posts() ) : $sport_query->the_post();
                    $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                    $categories = get_the_category();
                    $cat_label = ! empty( $categories ) ? $categories[0]->name : 'Performance, Elite';
                    
                    if ( $item_index === 0 ) : // Left Large Card
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/color_sport_sanhadji_1774872732973.png';
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="selection-large-card">
                            <div class="img-container" style="position:relative;">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                <div class="reel-play-overlay" style="width:60px; height:60px; font-size:24px; opacity:1;">▶</div>
                            </div>
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #27ae60;"></span>
                                <?php echo esc_html($cat_label); ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <div class="selection-list">
                        <?php
                    else : // Right Small Cards
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/selection_thumb_sec_sports_color_1774481090048.png';
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #27ae60;"></span>
                                    <?php echo esc_html($cat_label); ?>
                                </div>
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </a>
                        <?php
                    endif;
                    $item_index++;
                endwhile;
                ?>
                </div> <!-- Close selection-list wrapper -->
                <?php
                wp_reset_postdata();
            else :
                // Static Fallback from index.html
                ?>
                <a href="#" class="selection-large-card">
                    <div class="img-container" style="position:relative;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/color_sport_sanhadji_1774872732973.png' ); ?>" alt="Mohammed Sanhadji">
                        <div class="reel-play-overlay" style="width:60px; height:60px; font-size:24px; opacity:1;">▶</div>
                    </div>
                    <div class="selection-meta">
                        <span class="meta-dot" style="background: #27ae60;"></span>
                        Performance, Elite
                    </div>
                    <h3>Mohammed Sanhadji : « Je voulais devenir Pelé... » L'Architecte de la Performance</h3>
                </a>

                <div class="selection-list">
                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_sec_sports_color_1774481090048.png' ); ?>" alt="Tennis">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #27ae60;"></span>
                                Tennis, Excellence
                            </div>
                            <h4>Tennis : Standards d'excellence et capitaux privés vers une professionnalisation</h4>
                        </div>
                    </a>

                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero_economie.png' ); ?>" alt="Basketball">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #27ae60;"></span>
                                Basketball, Ligue Pro
                            </div>
                            <h4>Basketball : Vers une ligue professionnelle en Haïti ? Les nouveaux enjeux</h4>
                        </div>
                    </a>

                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero_geopolitique.png' ); ?>" alt="Athlétisme">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #27ae60;"></span>
                                Athlétisme, Diaspora
                            </div>
                            <h4>Athlétisme : Les nouveaux espoirs de la diaspora pour les JO 2028</h4>
                        </div>
                    </a>

                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero_culture.png' ); ?>" alt="Stades">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #27ae60;"></span>
                                Infrastructures, Développement
                            </div>
                            <h4>Infrastructures : Le défi de la reconstruction des stades nationaux</h4>
                        </div>
                    </a>
                </div>
            <?php
            endif;
            ?>
        </div>
    </section>

    <!-- SECTION 8: HAITI EN IMAGE -->
    <section class="standard-section economy-section" id="haiti-en-image">
        <div class="reels-header">
            <h2>Haiti en image</h2>
            <?php
            $haiti_cat_id = get_cat_ID('Haiti') ?: get_cat_ID('haiti');
            $haiti_link = $haiti_cat_id ? get_category_link($haiti_cat_id) : home_url('/');
            ?>
            <a href="<?php echo esc_url($haiti_link); ?>" class="btn-all-reels">Tout voir</a>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-nav-btn prev">‹</button>
            <div class="videos-carousel-grid">
                <?php
                $haiti_query = new WP_Query( array(
                    'posts_per_page' => 8,
                    'category_name'  => 'haiti',
                    'post_status'    => 'publish',
                ) );

                if ( false && $haiti_query->have_posts() ) :
                    while ( $haiti_query->have_posts() ) : $haiti_query->the_post();
                        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/economy_color_premium_1774478629301.png';
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
                    // Static Fallbacks from index.html
                    $haiti_fallbacks = array(
                        array('title' => "L'Architecture de la Richesse : Nouveau Modèle Économique de Résilience", 'img' => '/assets/img/economy_color_premium_1774478629301.png'),
                        array('title' => "Fintech : L'Inclusion financière par le mobile banking transforme le quotidien", 'img' => '/assets/img/selection_thumb_med_legal_color_1774481073690.png'),
                        array('title' => "Géopolitique : L'Impact des sanctions internationales sur les routes financières", 'img' => '/assets/img/selection_thumb_maritime_color_1774481105113.png'),
                        array('title' => 'Blockchain : Haïti et les CBDC entre souveraineté nationale et innovation', 'img' => '/assets/img/economy_side_1_1774469380233.png'),
                        array('title' => "Investissement : Pourquoi le capital-risque s'intéresse au Cap-Haïtien", 'img' => '/assets/img/hero_economie.png'),
                        array('title' => "Solaire : L'indépendance énergétique, moteur de la croissance locale", 'img' => '/assets/img/hero_tech.png'),
                        array('title' => "Tourisme : Les enjeux économiques de la restauration du patrimoine", 'img' => '/assets/img/selection_main_color_premium_1774478611922.png'),
                        array('title' => 'Agriculture : La filière cacao, nouvel or brun de la région Nord', 'img' => '/assets/img/hero_geopolitique.png')
                    );

                    foreach ( $haiti_fallbacks as $fb ) :
                        ?>
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="<?php echo esc_url( get_template_directory_uri() . $fb['img'] ); ?>" alt="Haiti Fallback">
                                <div class="reel-play-overlay">▶</div>
                            </div>
                            <h4><?php echo esc_html($fb['title']); ?></h4>
                        </article>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
            <button class="carousel-nav-btn next">›</button>
        </div>
    </section>

    <!-- SECTION 9: POLITIQUE -->
    <section class="standard-section selection-soir-section" id="politique">
        <div class="reels-header">
            <h2 class="section-logo-brut">Politique</h2>
            <?php
            $politique_cat_id = get_cat_ID('Politique');
            $politique_link = $politique_cat_id ? get_category_link($politique_cat_id) : home_url('/');
            ?>
            <a href="<?php echo esc_url($politique_link); ?>" class="btn-all-reels">Tout voir</a>
        </div>

        <div class="selection-soir-grid">
            <?php
            $politique_query = new WP_Query( array(
                'posts_per_page' => 5,
                'category_name'  => 'politique',
                'post_status'    => 'publish',
            ) );

            if ( false && $politique_query->have_posts() ) :
                $item_index = 0;
                while ( $politique_query->have_posts() ) : $politique_query->the_post();
                    $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
                    $categories = get_the_category();
                    $cat_label = ! empty( $categories ) ? $categories[0]->name : 'Éditorial, Analyse';
                    
                    if ( $item_index === 0 ) : // Left Large Card
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/politics_complex_2_1774468872703.png';
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="selection-large-card">
                            <div class="img-container" style="position:relative;">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                <div class="reel-play-overlay" style="width:60px; height:60px; font-size:24px; opacity:1;">▶</div>
                            </div>
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #2c3e50;"></span>
                                <?php echo esc_html($cat_label); ?>
                            </div>
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <div class="selection-list">
                        <?php
                    else : // Right Small Cards
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/selection_thumb_sec_sports_color_1774481090048.png';
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #2c3e50;"></span>
                                    <?php echo esc_html($cat_label); ?>
                                </div>
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </a>
                        <?php
                    endif;
                    $item_index++;
                endwhile;
                ?>
                </div> <!-- Close selection-list wrapper -->
                <?php
                wp_reset_postdata();
            else :
                // Static Fallback from index.html
                ?>
                <a href="#" class="selection-large-card">
                    <div class="img-container" style="position:relative;">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/politics_complex_2_1774468872703.png' ); ?>" alt="Featured Politics">
                        <div class="reel-play-overlay" style="width:60px; height:60px; font-size:24px; opacity:1;">▶</div>
                    </div>
                    <div class="selection-meta">
                        <span class="meta-dot" style="background: #2c3e50;"></span>
                        Éditorial, Analyse
                    </div>
                    <h3>Le Captois : « On ne peut plus bâtir l'avenir sur les ruines du silence »</h3>
                </a>

                <div class="selection-list">
                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_sec_sports_color_1774481090048.png' ); ?>" alt="Anti-corruption">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #2c3e50;"></span>
                                Enquête, Justice
                            </div>
                            <h4>Le pacte secret anti-corruption : Enquête exclusive sur les réseaux d'influence</h4>
                        </div>
                    </a>
                    
                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_maritime_color_1774481105113.png' ); ?>" alt="Contestation">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #2c3e50;"></span>
                                Société, Analyse
                            </div>
                            <h4>Les visages de la contestation 2026 : Analyse approfondie des forces en présence</h4>
                        </div>
                    </a>

                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/politics_complex_1_1774468857473.png' ); ?>" alt="Diplomatie">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #2c3e50;"></span>
                                Diplomatie, International
                            </div>
                            <h4>Diplomatie : Un final surréaliste et une nouvelle victoire de la coopération sud-sud</h4>
                        </div>
                    </a>

                    <a href="#" class="selection-item">
                        <div class="thumb" style="position:relative;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero_geopolitique.png' ); ?>" alt="Souveraineté">
                            <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-item-content">
                            <div class="selection-meta">
                                <span class="meta-dot" style="background: #2c3e50;"></span>
                                Justice, Réforme
                            </div>
                            <h4>Souveraineté : L'indépendance de la justice, socle de la nouvelle république</h4>
                        </div>
                    </a>
                </div>
            <?php
            endif;
            ?>
        </div>
    </section>

    <!-- SECTION 10: JEUX -->
    <section class="standard-section games-section" id="jeux">
        <div class="reels-header">
            <h2>Jeux</h2>
        </div>

        <div class="carousel-wrapper">
            <div class="games-grid-static">
                <div class="game-item">
                    <div class="game-content">
                        <span class="meta">Le quiz sport</span>
                        <p>Répondez aux dix questions posées par la rédaction sur l'histoire du football haïtien.</p>
                        <a href="#" class="btn-premium" style="width: fit-content; padding: 6px 25px; border: 0.5px solid #000; border-radius: 20px;">jouer</a>
                    </div>
                    <div class="game-icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero_capois_color_premium_1774478597130.png' ); ?>" alt="Quiz" class="elite-image">
                    </div>
                </div>

                <div class="game-item">
                    <div class="game-content">
                        <span class="meta">La grille stratège</span>
                        <p>Trouvez les neuf acteurs clés de la transition en fonction de leur influence et secteur.</p>
                        <a href="#" class="btn-premium" style="width: fit-content; padding: 6px 25px; border: 0.5px solid #000; border-radius: 20px;">jouer</a>
                    </div>
                    <div class="game-icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_thumb_med_legal_color_1774481073690.png' ); ?>" alt="Grille" class="elite-image">
                    </div>
                </div>

                <div class="game-item">
                    <div class="game-content">
                        <span class="meta">Pronos Diplomatie</span>
                        <p>Défiez vos collègues sur les scénarios de coopération internationale pour 2026.</p>
                        <a href="#" class="btn-premium" style="width: fit-content; padding: 6px 25px; border: 0.5px solid #000; border-radius: 20px;">découvrir</a>
                    </div>
                    <div class="game-icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/selection_main_color_premium_1774478611922.png' ); ?>" alt="Pronos" class="elite-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 11: PAROLE AU PUBLIC (QUESTIONS) -->
    <section class="standard-section question-section" id="la-question">
        <div class="reels-header">
            <h2>Parole au public</h2>
            <a href="#" class="btn-all-reels">Tout voir</a>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-nav-btn prev">‹</button>
            <div class="videos-carousel-grid">
                <?php
                $questions = array(
                    array('t' => 'C\'est quoi la pire bêtise que vous ayez faite ?', 'sub' => 'VOTRE REGARD — Et vous, c\'est quoi la pire bêtise que vous ayez faite ?', 'img' => '/assets/img/selection_thumb_sec_sports_color_1774481090048.png', 'q' => array("C'est quoi", "la pire bêtise que", "vous ayez faite ?")),
                    array('t' => 'Quel est ton premier souvenir du Tour de France ?', 'sub' => 'C\'est quoi votre premier souvenir du Tour de France ?', 'img' => '/assets/img/selection_thumb_maritime_color_1774481105113.png', 'q' => array("Quel est ton", "premier souvenir", "du Tour de France ?")),
                    array('t' => 'C\'est quoi le conseil que vous donneriez à votre vous d\'il y a 10 ans ?', 'sub' => 'Et vous, c\'est quoi le conseil que vous donneriez à votre vous d\'il y a 10 ans ?', 'img' => '/assets/img/politics_complex_1_1774468857473.png', 'q' => array("C'est quoi le", "conseil que vous", "donneriez à votre vous ?")),
                    array('t' => 'C\'est quand la dernière fois que vous avez pleuré ?', 'sub' => 'VOTRE REGARD — C\'est quand la dernière fois que vous avez pleuré ?', 'img' => '/assets/img/politics_complex_2_1774468872703.png', 'q' => array("C'est quand", "la dernière fois", "que vous avez pleuré ?")),
                    array('t' => 'Si vous étiez un livre, lequel seriez-vous ?', 'sub' => 'VOTRE REGARD — Si vous étiez un livre, lequel seriez-vous ?', 'img' => '/assets/img/hero_culture.png', 'q' => array("Si vous étiez", "un livre, lequel", "seriez-vous ?")),
                    array('t' => 'Quelle est votre plus grande fierté haïtienne ?', 'sub' => 'VOTRE REGARD — Quelle est votre plus grande fierté haïtienne ?', 'img' => '/assets/img/hero_tech.png', 'q' => array("Votre plus", "grande fierté", "haïtienne ?")),
                    array('t' => 'Le Cap-Haïtien en three mots pour vous ?', 'sub' => 'VOTRE REGARD — Le Cap-Haïtien en trois mots pour vous ?', 'img' => '/assets/img/hero_geopolitique.png', 'q' => array("Cap-Haïtien", "en trois mots", "pour vous ?")),
                    array('t' => 'Quel est votre rêve pour Haïti en 2030 ?', 'sub' => 'VOTRE REGARD — Quel est votre rêve pour Haïti en 2030 ?', 'img' => '/assets/img/hero_economie.png', 'q' => array("Votre rêve", "pour Haïti", "en 2030 ?"))
                );

                foreach ( $questions as $q ) :
                    ?>
                    <article class="video-reel-card">
                        <div class="video-thumb-tall">
                            <img src="<?php echo esc_url( get_template_directory_uri() . $q['img'] ); ?>" alt="Public View">
                            <div class="question-overlay">
                                <?php foreach ($q['q'] as $line) : ?>
                                    <div class="yellow-box"><?php echo esc_html($line); ?></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <h4><?php echo esc_html($q['sub']); ?></h4>
                    </article>
                    <?php
                endforeach;
                ?>
            </div>
            <button class="carousel-nav-btn next">›</button>
        </div>
    </section>

    <!-- SECTION 12: PODCASTS -->
    <section class="standard-section podcasts-section" id="podcasts">
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
                $podcasts_query = new WP_Query( array(
                    'posts_per_page' => 6,
                    'category_name'  => 'podcast',
                    'post_status'    => 'publish',
                ) );

                if ( false && $podcasts_query->have_posts() ) :
                    while ( $podcasts_query->have_posts() ) : $podcasts_query->the_post();
                        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                        if ( ! $thumb_url ) {
                            $thumb_url = get_template_directory_uri() . '/assets/img/hero_capois_color_premium_1774478597130.png';
                        }
                        $host = get_post_meta( get_the_ID(), '_podcast_host', true ) ?: 'la rédaction';
                        $main_label = get_post_meta( get_the_ID(), '_podcast_label', true ) ?: 'Les coulisses';
                        ?>
                        <article class="podcast-card-v2">
                            <div class="podcast-thumb-square">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                </a>
                                <div class="podcast-overlay">
                                    <div class="podcast-brut-label">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast
                                    </div>
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
                    // Static Fallbacks from index.html
                    $podcasts_fallbacks = array(
                        array('title' => "L'interview des gens connus", 'host' => 'la rédaction<br>L\'élite', 'label' => 'L\'interview<br>des gens<br>connus', 'desc' => '« L\'interview Post. des gens connus », c\'est le podcast où des personnalités se livrent au micro, comme vous ne les avez jamais entendues.', 'img' => '/assets/img/hero_capois_color_premium_1774478597130.png'),
                        array('title' => "L'envers de l'assiette", 'host' => 'Alexia<br>Duchêne', 'label' => 'L\'envers<br>de l\'assiette', 'desc' => 'Je suis Alexia Duchêne et en tant que cheffe, je me bats pour que l\'on sache comment on cuisine et quel impact ça a.', 'img' => '/assets/img/economy_color_premium_1774478629301.png'),
                        array('title' => "C'est réel", 'host' => 'Mina<br>Soundiram', 'label' => 'C\'est réel.', 'desc' => 'Je suis Mina Soundiram, journaliste chez Post., et mon métier, c\'est de raconter des histoires. Pour moi, le meilleur endroit pour les trouver, c\'est le web.', 'img' => '/assets/img/selection_thumb_sec_sports_color_1774481090048.png'),
                        array('title' => 'Les coulisses du pouvoir', 'host' => 'la rédaction<br>L\'élite', 'label' => 'Les coulisses<br>du pouvoir', 'desc' => 'Découvrez ce qui se passe vraiment derrière les portes closes des ministères et grandes institutions du pays.', 'img' => '/assets/img/hero_capois_color_premium_1774478597130.png'),
                        array('title' => 'Économie locale', 'host' => 'Jean<br>Baptiste', 'label' => 'Économie<br>locale', 'desc' => 'Plongeon au cœur du marché haïtien pour comprendre les défis quotidiens des entrepreneurs et producteurs.', 'img' => '/assets/img/economy_color_premium_1774478629301.png'),
                        array('title' => 'Tech & Avenir', 'host' => 'Sarah<br>Léger', 'label' => 'Tech &<br>Avenir', 'desc' => 'Comment l\'intelligence artificielle et la digitalisation transforment aujourd\'hui le tissu social du Grand Nord.', 'img' => '/assets/img/selection_thumb_sec_sports_color_1774481090048.png')
                    );

                    foreach ( $podcasts_fallbacks as $fb ) :
                        ?>
                        <article class="podcast-card-v2">
                            <div class="podcast-thumb-square">
                                <img src="<?php echo esc_url( get_template_directory_uri() . $fb['img'] ); ?>" alt="Podcast Fallback">
                                <div class="podcast-overlay">
                                    <div class="podcast-brut-label">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast
                                    </div>
                                    <div class="podcast-host-label">avec <?php echo $fb['host']; ?></div>
                                    <div class="podcast-main-label"><?php echo $fb['label']; ?></div>
                                </div>
                            </div>
                            <h3><?php echo esc_html($fb['title']); ?></h3>
                            <p><?php echo esc_html($fb['desc']); ?></p>
                        </article>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
            <button class="carousel-nav-btn next">›</button>
        </div>
    </section>

    <!-- SECTION 13: RÉCIT AUGMENTÉ -->
    <section class="standard-section story-accent-section" id="recit-augmente">
        <div class="reels-header">
            <h2>Récit augmenté</h2>
            <?php
            $docs_link = home_url('/documentaires/');
            ?>
            <a href="<?php echo esc_url($docs_link); ?>" class="btn-all-reels">Tout voir</a>
        </div>

        <div class="carousel-wrapper">
            <button class="carousel-nav-btn prev">‹</button>
            <div class="videos-carousel-grid">
                <?php
                $stories_query = new WP_Query( array(
                    'posts_per_page' => 5,
                    'category_name'  => 'documentaires',
                    'post_status'    => 'publish',
                ) );

                if ( false && $stories_query->have_posts() ) :
                    while ( $stories_query->have_posts() ) : $stories_query->the_post();
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
                    // Static Fallbacks from index.html
                    $stories_fallbacks = array(
                        array('title' => 'Le murmure des rues : Exploration sonore des marchés de province', 'img' => '/assets/img/hero_culture.png'),
                        array('title' => "L'œil du cyclone : Immersion visuelle au cœur de la reconstruction", 'img' => '/assets/img/news_summit.png'),
                        array('title' => 'Voix d\'outre-mer : Paroles de la diaspora connectée en 2026', 'img' => '/assets/img/hero_capois_color_premium_1774478597130.png'),
                        array('title' => 'Mémoire de terre : L\'histoire secrète des domaines sucriers du Nord', 'img' => '/assets/img/hero_geopolitique.png'),
                        array('title' => 'Futur immédiat : Les nouveaux visages de la tech de demain', 'img' => '/assets/img/hero_tech.png')
                    );

                    foreach ( $stories_fallbacks as $fb ) :
                        ?>
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="<?php echo esc_url( get_template_directory_uri() . $fb['img'] ); ?>" alt="Story Fallback">
                                <div class="reel-play-overlay">▶</div>
                            </div>
                            <h4><?php echo esc_html($fb['title']); ?></h4>
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
<?php endif; ?>

<?php get_footer(); ?>
