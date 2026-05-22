<?php
/**
 * Template Name: Confidentialité
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
                <span class="legal-date">Date de dernière mise à jour : 18 mai 2026</span>
                <h1>Politique de protection des données</h1>
            </div>

            <div class="legal-content">
                <div class="identity-card">
                    <p>Le service ORA MEDIA (ci-après le « Service ORA ») est édité par <strong>ORA MEDIA LLC</strong>, société à responsabilité limitée de droit américain (Limited Liability Company), spécialisée dans les médias digitaux, les contenus vidéo et l’information numérique.</p>
                </div>

                <p>Le Service ORA est accessible via le site internet officiel d’ORA MEDIA (ci-après le « Site ») ainsi que via ses différentes plateformes numériques et réseaux sociaux associés.</p>
                <p>La présente Politique de protection des données personnelles s’applique aux données personnelles collectées, traitées, transmises et conservées dans le cadre de l’utilisation du Service ORA.</p>
                <p>Une donnée personnelle désigne toute information se rapportant à une personne physique identifiée ou identifiable (nom, prénom, adresse e-mail, adresse IP, identifiant unique, etc.).</p>
                
                <p>ORA MEDIA LLC s’engage à traiter les données personnelles de ses utilisateurs conformément à la réglementation applicable, notamment :</p>
                <ul>
                    <li>le Règlement Général sur la Protection des Données (RGPD) n°2016/679 ;</li>
                    <li>la loi Informatique et Libertés du 6 janvier 1978 modifiée ;</li>
                    <li>ainsi que toute réglementation applicable relative à la protection des données personnelles.</li>
                </ul>

                <h1>1. Responsable du traitement</h1>
                <p>Le responsable du traitement des données personnelles collectées sur le Site est :</p>
                <p><strong>ORA MEDIA LLC</strong><br>
                Email de contact : <a href="mailto:contact@oramedia.com">contact@oramedia.com</a></p>

                <h1>2. Données personnelles collectées</h1>
                <p>ORA MEDIA LLC peut collecter différentes catégories de données personnelles lorsque vous utilisez le Site :</p>

                <h3>Données de navigation</h3>
                <ul>
                    <li>Adresse IP ;</li>
                    <li>Type de navigateur ;</li>
                    <li>Système d’exploitation ;</li>
                    <li>Pages consultées ;</li>
                    <li>Temps de visite ;</li>
                    <li>Date et heure de connexion ;</li>
                    <li>Source de provenance.</li>
                </ul>

                <h3>Données communiquées volontairement</h3>
                <ul>
                    <li>Adresse e-mail ;</li>
                    <li>Nom et prénom ;</li>
                    <li>Informations transmises via les formulaires de contact, sondages ou inscriptions à une newsletter.</li>
                </ul>

                <h3>Données issues des cookies et traceurs</h3>
                <p>Le Site peut utiliser des cookies permettant de mesurer l’audience, améliorer l’experience utilisateur et personnaliser certains contenus.</p>
                <p>Vous êtes responsable de l’exactitude des données que vous transmettez à ORA MEDIA LLC.</p>

                <h1>3. Utilisation des données personnelles</h1>
                <p>Les données personnelles collectées peuvent être utilisées pour les finalités suivantes :</p>

                <div class="premium-table-container">
                    <table class="premium-table">
                        <thead>
                            <tr>
                                <th>Finalité</th>
                                <th>Base légale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Amélioration de l’expérience utilisateur</td>
                                <td>Intérêt légitime</td>
                            </tr>
                            <tr>
                                <td>Analyse d’audience et statistiques</td>
                                <td>Intérêt légitime</td>
                            </tr>
                            <tr>
                                <td>Personnalisation des contenus</td>
                                <td>Intérêt légitime</td>
                            </tr>
                            <tr>
                                <td>Gestion des demandes envoyées via le Site</td>
                                <td>Exécution de mesures précontractuelles</td>
                            </tr>
                            <tr>
                                <td>Envoi de newsletters et communications marketing</td>
                                <td>Consentement</td>
                            </tr>
                            <tr>
                                <td>Gestion de la sécurité du Site</td>
                                <td>Obligation légale et intérêt légitime</td>
                            </tr>
                            <tr>
                                <td>Gestion des litiges et contentieux</td>
                                <td>Intérêt légitime</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h1>4. Destinataires des données</h1>
                <p>Les données personnelles collectées sont accessibles uniquement :</p>
                <ul>
                    <li>aux équipes habilitées d’ORA MEDIA LLC ;</li>
                    <li>aux prestataires techniques intervenant dans le fonctionnement du Site ;</li>
                    <li>aux autorités administratives ou judiciaires lorsque la loi l’exige.</li>
                </ul>
                <p>ORA MEDIA LLC ne vend jamais les données personnelles de ses utilisateurs.</p>

                <h1>5. Durée de conservation des données</h1>
                <p>Les données personnelles sont conservées uniquement pendant la durée nécessaire aux finalités pour lesquelles elles ont été collectées.</p>
                <p>À titre indicatif :</p>
                <ul>
                    <li>Données de contact : jusqu’au retrait du consentement ;</li>
                    <li>Cookies : maximum 13 mois ;</li>
                    <li>Données liées à un contentieux : durée légale applicable.</li>
                </ul>

                <h1>6. Cookies et traceurs</h1>
                <p>Le Site ORA MEDIA utilise différents cookies et technologies similaires afin :</p>
                <ul>
                    <li>d’assurer le bon fonctionnement du Site ;</li>
                    <li>d’analyser l’audience ;</li>
                    <li>de mesurer les performances ;</li>
                    <li>d’améliorer l’expérience utilisateur.</li>
                </ul>

                <p>Les outils pouvant être utilisés incluent notamment :</p>
                <ul>
                    <li>Google Analytics ;</li>
                    <li>Meta Pixel ;</li>
                    <li>TikTok Pixel ;</li>
                    <li>outils statistiques internes.</li>
                </ul>

                <p>Conformément à la réglementation applicable, vous pouvez accepter, refuser ou personnaliser l’utilisation des cookies à tout moment depuis le bandeau de gestion des cookies affiché lors de votre première visite.</p>
                <p>Vous pouvez également configurer votre navigateur pour bloquer les cookies.</p>

                <h3>Documentation des navigateurs</h3>
                <ul>
                    <li>Google Chrome : <a href="https://support.google.com/chrome/" target="_blank">support.google.com/chrome/</a></li>
                    <li>Mozilla Firefox : <a href="https://support.mozilla.org/fr/" target="_blank">support.mozilla.org/fr/</a></li>
                    <li>Safari : <a href="https://support.apple.com/fr-fr/safari" target="_blank">support.apple.com/fr-fr/safari</a></li>
                    <li>Microsoft Edge : <a href="https://support.microsoft.com/fr-fr/microsoft-edge" target="_blank">support.microsoft.com/fr-fr/microsoft-edge</a></li>
                </ul>

                <h1>7. Sécurité des données</h1>
                <p>ORA MEDIA LLC met en œuvre des mesures techniques, organisationnelles et de sécurité adaptées afin de protéger les données personnelles contre :</p>
                <ul>
                    <li>l’accès non autorisé ;</li>
                    <li>la perte ;</li>
                    <li>la destruction ;</li>
                    <li>l’altération ;</li>
                    <li>ou la divulgation accidentelle.</li>
                </ul>

                <h1>8. Vos droits</h1>
                <p>Conformément au RGPD, vous disposez des droits suivants :</p>
                <ul>
                    <li>droit d’accès ;</li>
                    <li>droit de rectification ;</li>
                    <li>droit d’effacement ;</li>
                    <li>droit d’opposition ;</li>
                    <li>droit à la limitation du traitement ;</li>
                    <li>droit à la portabilité des données ;</li>
                    <li>droit de retirer votre consentement à tout moment.</li>
                </ul>

                <p>Vous pouvez exercer vos droits en envoyant une demande à :<br>
                <strong><a href="mailto:contact@oramedia.com">contact@oramedia.com</a></strong></p>

                <p>Vous disposez également du droit d’introduire une réclamation auprès de la CNIL :<br>
                <a href="https://www.cnil.fr" target="_blank">www.cnil.fr</a></p>

                <h1>9. Liens externes</h1>
                <p>Le Site peut contenir des liens vers des plateformes externes ou des réseaux sociaux.</p>
                <p>ORA MEDIA LLC ne peut être tenue responsable des politiques de confidentialité appliquées par ces services tiers. Nous vous invitons à consulter leurs politiques respectives.</p>

                <h1>10. Modification de la politique de confidentialité</h1>
                <p>La présente Politique de protection des données personnelles peut être modifiée à tout moment afin de rester conforme aux évolutions légales, réglementaires ou techniques.</p>
                <p>Les utilisateurs sont invités à consulter régulièrement cette page.</p>
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
