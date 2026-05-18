<?php
/**
 * ORA Custom Sidebar Navigation Template
 */

// Helper to determine active states
$is_home      = is_front_page() || is_home();
$is_intl      = is_category( 'international' );
$is_haiti     = is_category( 'haiti' );
$is_politique = is_category( 'politique' );
$is_culture   = is_category( 'culture' );
$is_sport     = is_category( 'sport' );
$is_sante     = is_category( 'sante' );
$is_tech      = is_category( 'technologie' );

$is_podcast   = is_page( 'podcast' );
$is_docs      = is_page( 'documentaires' );
$is_articles  = is_post_type_archive( 'post' ) || ( is_archive() && ! is_category() ) || is_single();
$is_search    = is_search();

// Safe dynamic category URLs
$intl_id = get_cat_ID( 'International' );
$intl_link = $intl_id ? get_category_link( $intl_id ) : home_url( '/category/international/' );

$haiti_id = get_cat_ID( 'Haiti' );
$haiti_link = $haiti_id ? get_category_link( $haiti_id ) : home_url( '/category/haiti/' );

$politique_id = get_cat_ID( 'Politique' );
$politique_link = $politique_id ? get_category_link( $politique_id ) : home_url( '/category/politique/' );

$culture_id = get_cat_ID( 'Culture' );
$culture_link = $culture_id ? get_category_link( $culture_id ) : home_url( '/category/culture/' );

$sport_id = get_cat_ID( 'Sport' );
$sport_link = $sport_id ? get_category_link( $sport_id ) : home_url( '/category/sport/' );

$sante_id = get_cat_ID( 'Sante' );
$sante_link = $sante_id ? get_category_link( $sante_id ) : home_url( '/category/sante/' );

$tech_id = get_cat_ID( 'Technologie' );
$tech_link = $tech_id ? get_category_link( $tech_id ) : home_url( '/category/technologie/' );
?>

<aside class="sidebar">
    <div class="sidebar-branding">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png?v=2" alt="<?php bloginfo( 'name' ); ?>" class="logo-img">
            </a>
        </div>
    </div>
    
    <nav class="sidebar-nav">
        <ul>
            <li>
                <a href="<?php echo esc_url( home_url( '/search-page/' ) ); ?>" class="sidebar-actions-btn <?php echo $is_search ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    Rechercher
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo $is_home ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8h5z"/></svg>
                    Accueil
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( $intl_link ); ?>" class="<?php echo $is_intl ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                    International
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( $haiti_link ); ?>" class="<?php echo $is_haiti ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M4 20h3v-4H4v4zm6 0h3v-9h-3v9zm6 0h3v-14h-3v14z"/></svg>
                    Haiti
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( $politique_link ); ?>" class="<?php echo $is_politique ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                    Politique
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( $culture_link ); ?>" class="<?php echo $is_culture ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                    Culture
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( $sport_link ); ?>" class="<?php echo $is_sport ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    Sport
                </a>
            </li>
            <li class="has-dropdown">
                <a href="javascript:void(0)" class="<?php echo ($is_sante || $is_tech) ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="currentColor"><circle cx="5" cy="12" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="19" cy="12" r="2"/></svg>
                    Plus
                </a>
                <ul class="submenu">
                    <li><a href="<?php echo esc_url( $sante_link ); ?>" class="<?php echo $is_sante ? 'active' : ''; ?>">Santé</a></li>
                    <li><a href="<?php echo esc_url( $tech_link ); ?>" class="<?php echo $is_tech ? 'active' : ''; ?>">Technologie</a></li>
                </ul>
            </li>
        </ul>

        <div class="sidebar-divider"></div>

        <ul>
            <li>
                <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ?: home_url( '/articles/' ) ); ?>" class="<?php echo $is_articles ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    Articles
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/podcast/' ) ); ?>" class="<?php echo $is_podcast ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>
                    Podcast
                </a>
            </li>
            <li>
                <a href="<?php echo esc_url( home_url( '/documentaires/' ) ); ?>" class="<?php echo $is_docs ? 'active' : ''; ?>">
                    <svg class="sidebar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"/><line x1="7" y1="2" x2="7" y2="22"/><line x1="17" y1="2" x2="17" y2="22"/><line x1="2" y1="12" x2="22" y2="12"/><line x1="2" y1="7" x2="7" y2="7"/><line x1="2" y1="17" x2="7" y2="17"/><line x1="17" y1="17" x2="22" y2="17"/><line x1="17" y1="7" x2="22" y2="7"/></svg>
                    Documentaires
                </a>
            </li>
        </ul>

        <div class="sidebar-divider"></div>
        
        <div class="sidebar-edition-container">
            <div class="edition-selector">
                <span>Édition Haïtienne</span>
                <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
            </div>
        </div>
    </nav>
</aside>
