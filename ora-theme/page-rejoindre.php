<?php
/**
 * Template Name: À propos
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
<main>
        <!-- Hero Section Section -->
        <section class="brut-hero">
            <div class="brut-hero-content">
                <h1>REJOINDRE ORA</h1>
                <div class="brut-hero-actions">
                    <a href="#intro" class="btn-hero">Parcourir</a>
                    <a href="#contact" class="btn-hero secondary">Postuler</a>
                </div>
            </div>
        </section>

        <div class="premium-sections">
            <!-- Section 01: Discover ORA (Overlapping Premium Layout) -->
            <section class="mission-split-section reverse" id="intro">
                <div class="mission-content">
                    <span class="eyebrow">01 — Qui sommes-nous ?</span>
                    <h2>Qui sommes-nous ?</h2>
                    <p class="lead-text">ORA est un média digital conçu pour une génération connectée, exigeante et en quête de sens.</p>
                    <p style="color: #555; font-size: 16px; line-height: 1.6; margin: 0 0 10px 0;">Nous produisons des contenus courts, longs et immersifs qui permettent non seulement de suivre l’actualité, mais surtout de la comprendre.</p>
                    <p style="color: #555; font-size: 16px; line-height: 1.6; margin: 0 0 10px 0;">À la croisée du storytelling, de la technologie et de la data, ORA développe des formats pensés pour les usages d’aujourd’hui : mobiles, rapides et engageants.</p>
                    <p style="color: #555; font-size: 16px; line-height: 1.6; margin: 0 0 10px 0;">Notre ambition est simple : créer un média capable de capter l’attention, de la retenir et de la transformer en compréhension.</p>
                    <p style="color: #666; font-size: 15px; font-style: italic; line-height: 1.6; margin: 15px 0 0 0; padding-left: 15px; border-left: 3px solid #d00;">ORA est également un terrain d’expression pour les talents, les créateurs et les voix qui veulent avoir un impact réel.</p>
                </div>
                <div class="image-overlap-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_capois_color_premium_1774478597130.png" alt="ORA Team and Vision" class="overlap-main">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_culture.png" alt="ORA Media Production" class="overlap-sub">
                </div>
            </section>

            <!-- Section 02: Vision & Mission (Overlapping Premium Layout) -->
            <section class="mission-split-section" id="mission">
                <div class="image-overlap-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news_summit.png" alt="ORA Editorial Summit" class="overlap-main">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_tech.png" alt="ORA Technology and Data Workspace" class="overlap-sub">
                </div>
                <div class="mission-content">
                    <span class="eyebrow">02 — Impact & Vision</span>
                    <h2>Impact & Vision</h2>
                    <p class="lead-text">Nous croyons en un monde où l’information est claire, accessible et digne de confiance.</p>
                    
                    <h3 class="mission-heading">Notre mission</h3>
                    <ul class="mission-list">
                        <li>Rendre les sujets complexes accessibles</li>
                        <li>Produire des contenus à forte valeur ajoutée</li>
                        <li>Engager des communautés actives et conscientes</li>
                        <li>Utiliser la data pour amplifier la portée et l’impact</li>
                    </ul>
                    
                    <a href="#contact" class="btn-cta-pill">
                        Rejoignez-nous
                        <span class="arrow-circle">➜</span>
                    </a>
                </div>
            </section>

            <!-- Section 03: Nos Valeurs (Grid) -->
            <section class="brut-benefits-section" id="values">
                <span class="section-number">03</span>
                <h2>Nos Valeurs</h2>
                <div class="brut-benefits-grid">
                    <div class="benefit-item">
                        <h4>Clarté</h4>
                        <p>Simplifier sans dénaturer la complexité du monde.</p>
                    </div>
                    <div class="benefit-item">
                        <h4>Exigence</h4>
                        <p>Produire un contenu précis, vérifié et pertinent.</p>
                    </div>
                    <div class="benefit-item">
                        <h4>Innovation</h4>
                        <p>Tester, analyser et optimiser en continu nos formats.</p>
                    </div>
                    <div class="benefit-item">
                        <h4>Responsabilité</h4>
                        <p>Traiter l’information avec rigueur et intégrité.</p>
                    </div>
                </div>
            </section>

            <!-- Section 04: Rejoindre l'équipe & Contact (Overlapping Premium Layout) -->
            <section class="mission-split-section reverse" id="contact">
                <div class="mission-content">
                    <span class="eyebrow">04 — Rejoindre l'équipe</span>
                    <h2>Rejoindre l'équipe</h2>
                    <p class="lead-text">ORA est en construction permanente. Nous recherchons des profils capables de penser, créer et exécuter.</p>
                    <p style="color: #666; font-size: 16px; line-height: 1.6; margin: 0 0 10px 0;">Que vous soyez créateur de contenu, data analyst, designer ou développeur, votre talent a sa place chez nous.</p>
                    
                    <h3 class="mission-heading">Nous contacter</h3>
                    <p style="color: #444; font-size: 16px; font-weight: 600; line-height: 1.4; margin: 0 0 15px 0;">Une collaboration, une opportunité ou une idée ? Parlons-en.</p>
                    
                    <a href="mailto:contact@ora.media" class="btn-cta-pill">
                        Envoyer un message
                        <span class="arrow-circle">➜</span>
                    </a>
                </div>
                <div class="image-overlap-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_culture.png" alt="ORA Creative Team" class="overlap-main">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_geopolitique.png" alt="ORA Content Writers" class="overlap-sub">
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
