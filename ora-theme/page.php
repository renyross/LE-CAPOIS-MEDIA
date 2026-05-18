<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ORA
 */

get_header(); ?>

<main class="page-content" style="padding-top: 40px; min-height: 70vh;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="section-header-brut" style="padding: 40px 20px; border-bottom: 2px solid #000; background: #000; color: #fff;">
                    <div class="header-left" style="max-width: 1000px; margin: 0 auto;">
                        <h1 style="font-size: 48px; font-weight: 900; letter-spacing: -0.05em; text-transform: uppercase; margin: 0 0 10px; color: #ffcc00;">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </header>

                <div class="standard-section" style="padding: 60px 20px 120px;">
                    <div class="article-content-wrapper" style="max-width: 1000px; margin: 0 auto; display: block;">
                        <div class="article-main-body" style="max-width: 800px; margin: 0 auto;">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
