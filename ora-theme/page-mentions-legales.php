<?php
/**
 * Template Name: Mentions Légales
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
        <section class="standard-section legal-section">
            <div class="legal-header">
                <span class="legal-date">Date de mise à jour : 18 mai 2026</span>
                <h1>Mentions légales</h1>
            </div>

            <div class="legal-content">
                <div class="identity-card">
                    <p>Le site internet accessible à l’URL du site officiel d’ORA MEDIA (ci-après le « Site ») est édité par :</p>
                    <p style="font-size: 20px; font-weight: 800; color: #000; margin-top: 15px; margin-bottom: 5px;">ORA MEDIA LLC</p>
                    <p>Société à responsabilité limitée de droit américain (Limited Liability Company).</p>
                    <p>Email : <a href="mailto:contact@oramedia.com">contact@oramedia.com</a></p>
                </div>

                <h1>Directeur de la publication</h1>
                <p>Le Directeur de la Publication du Site est le représentant légal de ORA MEDIA LLC.</p>

                <h1>Responsable du traitement</h1>
                <p>ORA MEDIA LLC agit en qualité de responsable du traitement des données personnelles collectées dans le cadre de l’utilisation du Site, conformément au Règlement Général sur la Protection des Données (RGPD).</p>

                <h1>Hébergement</h1>
                <p>Le Site est développé et administré sous <strong>WordPress</strong>.</p>
                <p><a href="https://wordpress.org" target="_blank">WordPress.org</a></p>
                <p>L’hébergement du Site est assuré par le prestataire choisi par ORA MEDIA LLC.</p>

                <h1>Conditions Générales d’Utilisation</h1>
                <p>Les Conditions Générales d’Utilisation du Site ORA MEDIA sont accessibles à tout moment depuis les pages dédiées du Site.</p>

                <h1>Protection des données personnelles</h1>
                <p>ORA MEDIA LLC collecte et traite les données personnelles des utilisateurs conformément aux finalités décrites dans sa <a href="confidentialite.html">Politique de confidentialité</a>.</p>
                <p>Les utilisateurs peuvent consulter cette politique à tout moment sur le Site.</p>

                <h1>Cookies</h1>
                <p>Le Site utilise des cookies et technologies similaires afin :</p>
                <ul>
                    <li>d’améliorer l’expérience utilisateur ;</li>
                    <li>d’analyser l’audience ;</li>
                    <li>de proposer des contenus personnalisés ;</li>
                    <li>de mesurer les performances du Site.</li>
                </ul>
                <p>Pour en savoir plus sur l’utilisation des cookies, les utilisateurs peuvent consulter la <a href="confidentialite.html">Politique de confidentialité</a> du Site.</p>

                <h1>Disponibilité du Site</h1>
                <p>Le Site est accessible 24 heures sur 24 et 7 jours sur 7, sauf interruption programmée ou non, notamment pour des raisons de maintenance technique, de sécurité ou en cas de force majeure.</p>
                <p>ORA MEDIA LLC ne saurait être tenue responsable :</p>
                <ul>
                    <li>d’une interruption temporaire ou définitive du Site ;</li>
                    <li>d’un dysfonctionnement du réseau internet ;</li>
                    <li>d’une incompatibilité technique ;</li>
                    <li>ou de tout dommage direct ou indirect lié à l’utilisation du Site.</li>
                </ul>

                <h1>Responsabilité</h1>
                <p>ORA MEDIA LLC s’efforce de fournir des informations aussi précises et actualisées que possible sur le Site.</p>
                <p>Toutefois, ORA MEDIA LLC ne peut garantir l’exactitude, l’exhaustivité ou l’actualité des informations diffusées.</p>
                <p>L’utilisation des informations disponibles sur le Site relève de la seule responsabilité de l’utilisateur.</p>
                <p>En aucun cas ORA MEDIA LLC, ses partenaires, collaborateurs ou prestataires ne pourront être tenus responsables de dommages directs ou indirects résultant :</p>
                <ul>
                    <li>de l’utilisation du Site ;</li>
                    <li>de l’impossibilité d’accéder au Site ;</li>
                    <li>ou de l’utilisation des informations publiées.</li>
                </ul>

                <h1>Liens externes</h1>
                <p>Le Site peut contenir des liens vers des sites ou plateformes tiers.</p>
                <p>ORA MEDIA LLC ne peut être tenue responsable du contenu, des politiques de confidentialité ou des pratiques de ces services externes.</p>

                <h1>Modification des mentions légales</h1>
                <p>ORA MEDIA LLC se réserve le droit de modifier les présentes mentions légales à tout moment et sans préavis.</p>
                <p>Les utilisateurs sont invités à consulter régulièrement cette page.</p>

                <h1>Loi applicable</h1>
                <p>Les présentes mentions légales sont régies par les lois applicables au siège social de ORA MEDIA LLC ainsi que, le cas échéant, par les réglementations européennes applicables en matière de protection des données personnelles.</p>
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
