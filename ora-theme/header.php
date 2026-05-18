<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon-ora.png?v=2">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="menu-overlay" onclick="toggleMobileMenu()"></div>

    <?php get_sidebar(); ?>

    <header class="mobile-header">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png?v=2" alt="<?php bloginfo( 'name' ); ?>" class="logo-img">
            </a>
        </div>
        <div class="burger-menu" onclick="toggleMobileMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
