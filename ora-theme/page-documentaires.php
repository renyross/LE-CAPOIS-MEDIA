<?php
/**
 * Template Name: Documentaires
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
                    <h1>Documentaires</h1>
                    <p>› Regarder le monde en face, à travers l'objectif de POST.</p>
                </div>
            </header>

            <section class="standard-section">
                <!-- Featured Documentary -->
                <div class="doc-card-large">
                    <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=1600&auto=format&fit=crop" alt="Featured Documentary">
                    <div class="doc-content-overlay">
                        <span class="doc-tag">SÉLECTION PREMIUM</span>
                        <h2 style="font-size: 32px; font-weight: 900; margin-bottom: 15px; color: #fff;">L'Ombre des Couloirs : Enquête sur Ti Bwa</h2>
                        <p style="font-size: 18px; opacity: 0.9; max-width: 700px; margin-bottom: 25px;">Une immersion inédite de 52 minutes au cœur des quartiers de Carrefour, là où la loi de la République s'arrête.</p>
                        <a href="#" class="play-btn" style="background: #ffcc00; color: #000; padding: 15px 35px; font-size: 16px;">
                            <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor" style="margin-right: 10px;"><path d="M8 5v14l11-7z"/></svg>
                            VOIR LE DOCUMENTAIRE
                        </a>
                    </div>
                </div>

                <!-- Documentary Grid -->
                <div class="doc-grid-standard">
                    <!-- Doc 1 -->
                    <article class="doc-card" onclick="location.href='#'">
                        <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=600&auto=format&fit=crop" alt="Doc 1">
                        <div class="doc-info-overlay">
                            <div class="doc-meta">
                                <span>SOCIÉTÉ</span>
                                <span style="opacity: 0.5;">•</span>
                                <span>24 MIN</span>
                            </div>
                            <h3>Les Enfants de la Transition : Quel futur pour demain ?</h3>
                            <div class="doc-play-btn">Regarder</div>
                        </div>
                    </article>

                    <!-- Doc 2 -->
                    <article class="doc-card" onclick="location.href='#'">
                        <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?q=80&w=600&auto=format&fit=crop" alt="Doc 2">
                        <div class="doc-info-overlay">
                            <div class="doc-meta">
                                <span>ENVIRONNEMENT</span>
                                <span style="opacity: 0.5;">•</span>
                                <span>45 MIN</span>
                            </div>
                            <h3>La Grand'Anse : Un paradis en sursis face au climat</h3>
                            <div class="doc-play-btn">Regarder</div>
                        </div>
                    </article>

                    <!-- Doc 3 -->
                    <article class="doc-card" onclick="location.href='#'">
                        <img src="https://images.unsplash.com/photo-1542385151-efd9000785a0?q=80&w=600&auto=format&fit=crop" alt="Doc 3">
                        <div class="doc-info-overlay">
                            <div class="doc-meta">
                                <span>HISTOIRE</span>
                                <span style="opacity: 0.5;">•</span>
                                <span>38 MIN</span>
                            </div>
                            <h3>Citadelle : Les gardiens silencieux de la liberté</h3>
                            <div class="doc-play-btn">Regarder</div>
                        </div>
                    </article>
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
    </script>
<?php endif; ?>

<?php get_footer(); ?>
