<?php
/**
 * Template Name: Page Équipe
 *
 * The template for displaying the editorial and management team.
 *
 * @package ORA
 */

get_header(); ?>

<main class="page-content" style="padding-top: 40px;">
    <section class="standard-section">
        <div class="team-intro" style="max-width: 800px; margin-bottom: 60px;">
            <h1 style="font-size: 48px; font-weight: 900; letter-spacing: -0.04em; margin-bottom: 15px;">Équipe éditoriale ORA</h1>
            <p style="font-size: 18px; color: #666; font-weight: 400; line-height: 1.4;">Derrière ORA, une équipe agile, créative et orientée performance.</p>
        </div>

        <div class="team-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 45px 30px; margin-bottom: 60px;">
            <?php
            // Define team members array
            $team_members = array(
                array(
                    'name' => 'Renel ROSENE',
                    'role' => 'CEO & Publishing Director',
                    'img'  => '/assets/img/renel-rosene.jpg',
                    'mono' => 'RR'
                ),
                array(
                    'name' => 'Renald ROSENE',
                    'role' => 'CO‑FOUNDER & Head of Video / Image Production',
                    'img'  => '/assets/img/renald-rosene.png',
                    'mono' => 'RR'
                ),
                array(
                    'name' => 'Vertho CADET',
                    'role' => 'Chief Content & Strategy Officer',
                    'img'  => '',
                    'mono' => 'VC'
                ),
                array(
                    'name' => 'Juniro SAINT JUSTE',
                    'role' => 'Managing Editor – International',
                    'img'  => '/assets/img/junior-saint-juste.jpg',
                    'mono' => 'JSJ'
                ),
                array(
                    'name' => 'John Wathson PIERRE',
                    'role' => 'Content Performance Analyst',
                    'img'  => '/assets/img/john-wathson-pierre.jpg',
                    'mono' => 'JWP'
                )
            );

            foreach ( $team_members as $member ) :
                ?>
                <div class="team-card" style="display: flex; flex-direction: column; gap: 20px;">
                    <div class="card-visual" style="width: 100%; aspect-ratio: 1/1; background: #111; overflow: hidden; border-radius: 4px; display: flex; align-items: center; justify-content: center; position: relative;">
                        <?php if ( ! empty( $member['img'] ) && file_exists( get_template_directory() . $member['img'] ) ) : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() . $member['img'] ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>" class="profile-img" style="width: 100%; height: 100%; object-fit: cover;">
                        <?php else : ?>
                            <span class="monogram" style="font-size: 38px; font-weight: 900; color: #fff; letter-spacing: 2px; text-transform: uppercase;">
                                <?php echo esc_html( $member['mono'] ); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="card-info" style="display: flex; flex-direction: column; gap: 8px;">
                        <span class="role-badge" style="font-size: 9px; font-weight: 900; letter-spacing: 0.15em; color: #ffcc00; text-transform: uppercase;">
                            <?php echo esc_html( $member['role'] ); ?>
                        </span>
                        <h3 style="font-size: 18px; font-weight: 850; color: #111; margin: 0;">
                            <?php echo esc_html( $member['name'] ); ?>
                        </h3>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>

        <div class="team-closing" style="max-width: 800px; margin-top: 60px; padding: 30px 0; border-top: 2px solid #000;">
            <p style="font-size: 16px; color: #333; line-height: 1.6; font-style: italic;">
                ORA s’appuie sur une approche qui allie rapidité, efficacité et durabilité, pour construire un média innovant capable de toucher le monde entier.
            </p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
