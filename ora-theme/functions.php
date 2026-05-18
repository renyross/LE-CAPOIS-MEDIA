<?php
/**
 * ORA - Le Capois Media functions and definitions
 *
 * @package ORA
 */

if ( ! function_exists( 'ora_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function ora_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, WordPress will provide it.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(
            array(
                'primary-menu' => esc_html__( 'Menu Principal (Sidebar)', 'ora-theme' ),
                'footer-menu'  => esc_html__( 'Menu Pied de Page', 'ora-theme' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'ora_setup' );

/**
 * Enqueue scripts and styles.
 */
function ora_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'ora-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap', array(), null );

    // Enqueue theme stylesheet.
    wp_enqueue_style( 'ora-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'ora_scripts' );

/**
 * Custom function to get estimated reading time of a post.
 */
function ora_estimated_reading_time() {
    $post = get_post();
    if ( ! $post ) {
        return '1 min';
    }
    $words = str_word_count( strip_tags( $post->post_content ) );
    $minutes = ceil( $words / 200 ); // Avg 200 words per minute
    return $minutes . ' min';
}
