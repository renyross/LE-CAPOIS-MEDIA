<?php
/**
 * Template Name: CGU
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
                <span class="legal-date">Version en vigueur au 18 mai 2026</span>
                <h1>Conditions Générales d'Utilisation</h1>
            </div>

            <div class="legal-content">
                <div class="identity-card">
                    <p>Les présentes Conditions Générales d’Utilisation (ci-après les « Conditions Générales » ou « CGU ») ont pour objet de définir les modalités d’utilisation des services proposés par ORA MEDIA (ci-après le « Service ORA »).</p>
                    <p style="margin-top: 15px; margin-bottom: 0;">Le Service ORA est accessible via le site internet officiel d’ORA MEDIA (ci-après le « Site »), ainsi que via les plateformes numériques, applications mobiles et réseaux sociaux exploités par ORA MEDIA LLC.</p>
                </div>

                <p>Le Service ORA est édité par :</p>
                <p><strong>ORA MEDIA LLC</strong><br>
                Société à responsabilité limitée de droit américain (Limited Liability Company)<br>
                Email : <a href="mailto:contact@oramedia.com">contact@oramedia.com</a></p>

                <p>Le directeur de la publication est le représentant légal de ORA MEDIA LLC.</p>
                <p>Le Site ORA MEDIA est développé sous WordPress.</p>
                <p><a href="https://wordpress.org" target="_blank">WordPress.org</a></p>

                <p>Les contenus et services proposés par ORA MEDIA sont fournis « en l’état » et sont régis par les présentes Conditions Générales d’Utilisation.</p>
                <p>Les présentes CGU s’appliquent sans préjudice des dispositions légales applicables dans le pays de résidence de l’utilisateur.</p>

                <h1>1. Description du Service ORA</h1>
                <p>ORA MEDIA est un média digital proposant :</p>
                <ul>
                    <li>des contenus vidéo ;</li>
                    <li>des articles ;</li>
                    <li>des interviews ;</li>
                    <li>des reportages ;</li>
                    <li>des contenus diffusés sur les réseaux sociaux ;</li>
                    <li>des contenus éditoriaux et informatifs.</li>
                </ul>

                <p>Le Service ORA permet aux utilisateurs :</p>
                <ul>
                    <li>d’accéder aux contenus publiés ;</li>
                    <li>d’interagir avec certaines publications ;</li>
                    <li>de partager certains contenus ;</li>
                    <li>de recevoir des recommandations personnalisées ;</li>
                    <li>d’accéder à des services ou fonctionnalités complémentaires.</li>
                </ul>

                <h1>2. Accès au Service</h1>
                <p>L’accès au Site est gratuit, hors coûts liés :</p>
                <ul>
                    <li>à la connexion internet ;</li>
                    <li>au matériel informatique ;</li>
                    <li>aux abonnements mobiles ;</li>
                    <li>ou à tout autre coût technique supporté par l’utilisateur.</li>
                </ul>

                <p>L’utilisateur est seul responsable :</p>
                <ul>
                    <li>de son équipement ;</li>
                    <li>de sa connexion internet ;</li>
                    <li>de la sécurité de ses appareils ;</li>
                    <li>et de l’utilisation qu’il fait du Service.</li>
                </ul>

                <p>ORA MEDIA peut suspendre temporairement l’accès au Site pour des raisons :</p>
                <ul>
                    <li>de maintenance ;</li>
                    <li>de sécurité ;</li>
                    <li>d’amélioration technique ;</li>
                    <li>ou de force majeure.</li>
                </ul>

                <h1>3. Compte utilisateur</h1>
                <p>Certaines fonctionnalités peuvent nécessiter la création d’un compte utilisateur.</p>
                <p>L’utilisateur s’engage à fournir des informations exactes, complètes et à jour.</p>
                <p>Chaque utilisateur est responsable de :</p>
                <ul>
                    <li>la confidentialité de ses identifiants ;</li>
                    <li>toutes les actions effectuées depuis son compte.</li>
                </ul>

                <p>En cas d’utilisation frauduleuse du compte, l’utilisateur doit contacter ORA MEDIA immédiatement à :<br>
                <strong><a href="mailto:contact@oramedia.com">contact@oramedia.com</a></strong></p>

                <p>ORA MEDIA se réserve le droit de suspendre ou supprimer un compte en cas :</p>
                <ul>
                    <li>de violation des présentes CGU ;</li>
                    <li>de comportement frauduleux ;</li>
                    <li>d’atteinte aux droits de tiers ;</li>
                    <li>d’utilisation abusive du Service.</li>
                </ul>

                <h1>4. Obligations de l’utilisateur</h1>
                <p>L’utilisateur s’engage à :</p>
                <ul>
                    <li>respecter les lois applicables ;</li>
                    <li>ne pas publier de contenu illicite ;</li>
                    <li>ne pas porter atteinte à ORA MEDIA ou à des tiers ;</li>
                    <li>ne pas perturber le fonctionnement du Site ;</li>
                    <li>ne pas introduire de virus, logiciels malveillants ou systèmes automatisés.</li>
                </ul>

                <p>Sont notamment interdits :</p>
                <ul>
                    <li>les contenus haineux ;</li>
                    <li>les contenus violents ;</li>
                    <li>les contenus diffamatoires ;</li>
                    <li>les contenus portant atteinte à la dignité humaine ;</li>
                    <li>les contenus contraires à la loi.</li>
                </ul>

                <p>ORA MEDIA se réserve le droit de supprimer tout contenu ne respectant pas ces règles.</p>

                <h1>5. Propriété intellectuelle</h1>
                <p>L’ensemble des contenus présents sur le Site ORA MEDIA, incluant notamment :</p>
                <ul>
                    <li>vidéos ;</li>
                    <li>textes ;</li>
                    <li>logos ;</li>
                    <li>marques ;</li>
                    <li>visuels ;</li>
                    <li>graphismes ;</li>
                    <li>photographies ;</li>
                    <li>éléments techniques ;</li>
                    <li>identité visuelle ;</li>
                </ul>
                <p>sont protégés par les lois relatives à la propriété intellectuelle.</p>
                <p>Toute reproduction, diffusion, modification ou exploitation sans autorisation écrite préalable de ORA MEDIA LLC est strictement interdite.</p>

                <h1>6. Licence d’utilisation</h1>
                <p>ORA MEDIA accorde à l’utilisateur une licence :</p>
                <ul>
                    <li>personnelle ;</li>
                    <li>non exclusive ;</li>
                    <li>non transférable ;</li>
                    <li>révocable ;</li>
                </ul>
                <p>lui permettant d’utiliser le Service uniquement dans le cadre d’un usage personnel et non commercial.</p>

                <p>L’utilisateur ne peut notamment pas :</p>
                <ul>
                    <li>copier massivement les contenus ;</li>
                    <li>revendre les contenus ;</li>
                    <li>effectuer du reverse engineering ;</li>
                    <li>exploiter le Service à des fins commerciales sans autorisation.</li>
                </ul>

                <h1>7. Données personnelles</h1>
                <p>ORA MEDIA collecte et traite certaines données personnelles conformément à sa <a href="confidentialite.html">Politique de confidentialité</a>.</p>
                <p>Les utilisateurs sont invités à consulter la Politique de confidentialité accessible sur le Site.</p>
                <p>Conformément au RGPD, l’utilisateur dispose notamment :</p>
                <ul>
                    <li>d’un droit d’accès ;</li>
                    <li>d’un droit de rectification ;</li>
                    <li>d’un droit d’effacement ;</li>
                    <li>d’un droit d’opposition ;</li>
                    <li>d’un droit à la portabilité.</li>
                </ul>

                <p>Pour toute demande relative aux données personnelles :<br>
                <strong><a href="mailto:contact@oramedia.com">contact@oramedia.com</a></strong></p>

                <h1>8. Cookies</h1>
                <p>Le Site utilise des cookies et technologies similaires afin :</p>
                <ul>
                    <li>d’améliorer l’expérience utilisateur ;</li>
                    <li>de mesurer l’audience ;</li>
                    <li>d’analyser les performances ;</li>
                    <li>de personnaliser certains contenus.</li>
                </ul>
                <p>L’utilisateur peut gérer ses préférences depuis les paramètres de son navigateur ou via le bandeau cookies du Site.</p>

                <h1>9. Responsabilité</h1>
                <p>ORA MEDIA met en œuvre tous les moyens raisonnables afin d’assurer :</p>
                <ul>
                    <li>l’accessibilité du Site ;</li>
                    <li>la fiabilité des contenus ;</li>
                    <li>la sécurité du Service.</li>
                </ul>

                <p>Toutefois, ORA MEDIA ne peut garantir :</p>
                <ul>
                    <li>l’absence totale d’erreurs ;</li>
                    <li>l’absence d’interruptions ;</li>
                    <li>ou l’absence de vulnérabilités techniques.</li>
                </ul>

                <p>ORA MEDIA ne pourra être tenue responsable :</p>
                <ul>
                    <li>des dommages indirects ;</li>
                    <li>d’une interruption du Service ;</li>
                    <li>d’une perte de données ;</li>
                    <li>ou d’un usage non conforme du Site par l’utilisateur.</li>
                </ul>

                <h1>10. Liens externes</h1>
                <p>Le Site peut contenir des liens vers des services tiers.</p>
                <p>ORA MEDIA n’exerce aucun contrôle sur ces plateformes externes et ne peut être tenue responsable de leur contenu ou de leurs pratiques.</p>

                <h1>11. Réclamations</h1>
                <p>Pour toute question, réclamation ou signalement :<br>
                <strong><a href="mailto:contact@oramedia.com">contact@oramedia.com</a></strong></p>
                <p>ORA MEDIA s’efforcera de répondre dans un délai raisonnable.</p>

                <h1>12. Modification des Conditions Générales</h1>
                <p>ORA MEDIA se réserve le droit de modifier les présentes CGU à tout moment.</p>
                <p>Les nouvelles versions seront publiées sur le Site et entreront en vigueur dès leur mise en ligne.</p>
                <p>Les utilisateurs sont invités à consulter régulièrement cette page.</p>

                <h1>13. Loi applicable</h1>
                <p>Les présentes Conditions Générales sont régies par les lois applicables au siège social de ORA MEDIA LLC ainsi que, le cas échéant, par les réglementations européennes applicables en matière de protection des données personnelles.</p>
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
