<?php
/**
 * Template Name: Équipe
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
        <section class="standard-section">
            <div class="team-intro">
                <h1>Équipe éditoriale ORA</h1>
                <p>Derrière ORA, une équipe agile, créative et orientée performance.</p>
            </div>

            <div class="team-grid">
                <!-- Renel ROSENE -->
                <div class="team-card">
                    <div class="card-visual">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/renel-rosene.jpg" alt="Renel ROSENE" class="profile-img">
                    </div>
                    <div class="card-info">
                        <span class="role-badge">CEO & Publishing Director</span>
                        <h3>Renel ROSENE</h3>
                    </div>
                </div>

                <!-- Renald ROSENE -->
                <div class="team-card">
                    <div class="card-visual">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/renald-rosene.png" alt="Renald ROSENE" class="profile-img">
                    </div>
                    <div class="card-info">
                        <span class="role-badge">CO‑FOUNDER & Head of Video / Image Production</span>
                        <h3>Renald ROSENE</h3>
                    </div>
                </div>

                <!-- Vertho CADET -->
                <div class="team-card">
                    <div class="card-visual">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vertho-cadet.jpg" alt="Vertho CADET" class="profile-img">
                    </div>
                    <div class="card-info">
                        <span class="role-badge">Chief Content & Strategy Officer</span>
                        <h3>Vertho CADET</h3>
                    </div>
                </div>

                <!-- Juniro SAINT JUSTE -->
                <div class="team-card">
                    <div class="card-visual">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/junior-saint-juste.jpg" alt="Juniro SAINT JUSTE" class="profile-img">
                    </div>
                    <div class="card-info">
                        <span class="role-badge">Managing Editor – International</span>
                        <h3>Juniro SAINT JUSTE</h3>
                    </div>
                </div>

                <!-- John Wathson PIERRE -->
                <div class="team-card">
                    <div class="card-visual">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/john-wathson-pierre.jpg" alt="John Wathson PIERRE" class="profile-img">
                    </div>
                    <div class="card-info">
                        <span class="role-badge">Content Performance Analyst</span>
                        <h3>John Wathson PIERRE</h3>
                    </div>
                </div>
            </div>

            <div class="team-closing">
                <p>ORA s’appuie sur une approche qui allie rapidité, efficacité et durabilité, pour construire un média innovant capable de toucher le monde entier.</p>
            </div>
        </section>
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
