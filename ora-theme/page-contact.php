<?php
/**
 * Template Name: Contact
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
        <section class="standard-section contact-section">
            <div class="contact-intro">
                <h1>Nous contacter</h1>
                <p>Une collaboration, une opportunité, une proposition de sujet ou une idée ? Parlons-en.</p>
            </div>

            <div class="premium-form-container">
                <!-- Success Overlay Screen -->
                <div class="success-overlay" id="successOverlay">
                    <div class="success-icon">✓</div>
                    <h2>Message envoyé</h2>
                    <p>Merci pour votre intérêt. Notre équipe éditoriale analysera votre message et vous répondra dans les plus brefs délais.</p>
                </div>

                <form id="contactForm" onsubmit="submitForm(event)">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" required placeholder="Ex. Jean Dupont">
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse e-mail</label>
                            <input type="email" id="email" required placeholder="Ex. jean.dupont@example.com">
                        </div>

                        <div class="form-group full-width">
                            <label for="subject">Sujet de votre demande</label>
                            <select id="subject" required>
                                <option value="" disabled selected>Sélectionnez une option</option>
                                <option value="collaboration">Collaboration / Partenariat</option>
                                <option value="sujet">Proposition de sujet / Tribune libre</option>
                                <option value="recrutement">Rejoindre l'équipe / Recrutement</option>
                                <option value="autre">Autre demande</option>
                            </select>
                        </div>

                        <div class="form-group full-width">
                            <label for="message">Votre message</label>
                            <textarea id="message" required placeholder="Rédigez votre demande ici..."></textarea>
                        </div>
                    </div>

                    <div class="btn-submit-container">
                        <button type="submit" class="btn-submit">Envoyer le message</button>
                    </div>
                </form>
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

        function submitForm(event) {
            event.preventDefault();
            
            // Show premium success overlay
            const overlay = document.getElementById('successOverlay');
            overlay.classList.add('active');
            
            // Asynchronously reset form after a short delay
            setTimeout(() => {
                document.getElementById('contactForm').reset();
            }, 500);

            // Close overlay after 4 seconds
            setTimeout(() => {
                overlay.classList.remove('active');
            }, 4000);
        }
    </script>
<?php endif; ?>

<?php get_footer(); ?>
