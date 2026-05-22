<?php
/**
 * Template Name: Podcast
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
<main class="main-content">
        <div class="articles-page-wrapper">
            <header class="section-header-brut">
                <div class="header-left">
                    <h1>Podcast</h1>
                    <p>› Toutes nos émissions sonores, en continu.</p>
                </div>
            </header>

            <!-- Section: Premium Audio Player Hero -->
            <section class="standard-section" style="padding-top:0;">
                <div class="audio-player-hero">
                    <div class="audio-hero-overlay">
                        <div class="audio-hero-top">
                            <div class="audio-hero-artwork">
                                <img src="/Users/renelrosene/.gemini/antigravity/brain/22b1eefb-29f1-4245-ab00-81e5db021c7c/podcast_hero_people_artwork_1775172257124.png" alt="L'entretien Stratégique Cover Art">
                            </div>
                            <div class="audio-hero-info">
                                <span class="series-label">L'entretien Stratégique • des gens influents</span>
                                <h1>Le Défi de la Reconstruction : Entretien exclusif avec les voix qui façonnent l'avenir d'Haïti</h1>
                            </div>
                            <div class="audio-hero-menu-container">
                                <button class="audio-hero-menu-btn" onclick="toggleHeroMenu(event)">
                                    <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><circle cx="5" cy="12" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="19" cy="12" r="2"/></svg>
                                </button>
                                <div class="audio-hero-dropdown" id="heroDropdown">
                                    <div class="dropdown-item" onclick="toggleSubmenu(event, 'shareSubmenu')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                                        Partager
                                        <svg class="chevron" viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                                    </div>
                                    <div class="dropdown-submenu" id="shareSubmenu">
                                        <div class="dropdown-item" onclick="sharePodcast('facebook')">
                                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                                            Facebook
                                        </div>
                                        <div class="dropdown-item" onclick="sharePodcast('whatsapp')">
                                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.414 0 .018 5.396.015 12.03c0 2.12.541 4.191 1.57 6.011L0 24l6.117-1.605a11.803 11.803 0 005.925 1.586h.005c6.635 0 12.032-5.396 12.035-12.031a11.772 11.772 0 00-3.517-8.411"/></svg>
                                            WhatsApp
                                        </div>
                                        <div class="dropdown-item" onclick="sharePodcast('twitter')">
                                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.045 4.126H5.078z"/></svg>
                                            Twitter (X)
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-item" onclick="toggleSubmenu(event, 'subscribeSubmenu')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>
                                        S'abonner
                                        <svg class="chevron" viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                                    </div>
                                    <div class="dropdown-submenu" id="subscribeSubmenu">
                                        <div class="dropdown-item" onclick="window.open('#apple', '_blank')">
                                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.029-3.91 1.183-4.961 3.014-2.117 3.675-.54 9.103 1.51 12.09 1.002 1.44 2.188 3.054 3.726 3.008 1.482-.06 2.041-.956 3.828-.956s2.29.956 3.844.922c1.611-.026 2.656-1.464 3.644-2.906 1.139-1.665 1.61-3.273 1.636-3.359-.035-.015-3.141-1.204-3.176-4.783-.029-2.985 2.434-4.414 2.546-4.477-1.397-2.042-3.532-2.274-4.282-2.324-1.921-.157-3.41 1.077-4.331 1.077zM15.445 1.1c.097.012.193.027.288.046 1.503.208 2.766 1.42 3.256 2.89.043.13.082.261.116.394a3.86 3.86 0 0 1-1.066 3.298c-.144.15-.296.29-.456.417a4.2 4.2 0 0 1-1.745 1.001 3.518 3.518 0 0 1-.418.064c-.035.004-.07.006-.105.008-1.504.053-2.912-.907-3.565-2.235a4.015 4.015 0 0 1-.223-.746c-.015-.078-.027-.156-.036-.235a3.918 3.918 0 0 1 .465-2.616c.148-.255.32-.497.515-.722A4.07 4.07 0 0 1 15.445 1.1z"/></svg>
                                            Apple Podcast
                                        </div>
                                        <div class="dropdown-item" onclick="window.open('#spotify', '_blank')">
                                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.49 17.3c-.22.36-.68.48-1.04.26-2.58-1.58-5.83-1.94-9.66-1.06-.41.09-.83-.16-.92-.57-.09-.41.16-.83.57-.92 4.2-.96 7.8-.54 10.74 1.25.37.23.49.69.26 1.04zm1.46-3.26c-.28.45-.88.6-1.33.32-2.96-1.82-7.46-2.35-10.96-1.28-.51.15-1.04-.14-1.19-.65-.15-.51.14-1.04.65-1.19 4.01-1.22 9-1.28 12.35.79.45.28.6 1.4.32 1.85zM20.2 11.2C16.8 9.2 11.1 9 7.8 10c-.5.1-1-.2-1.1-.7s.2-1 .7-1.1c3.8-1.1 10.1-.9 14.1 1.5.5.3.6.9.3 1.4-.4.5-1 .6-1.4.3z"/></svg>
                                            Spotify
                                        </div>
                                        <div class="dropdown-item" onclick="window.open('#deezer', '_blank')">
                                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16.58 17.48H24V24h-7.42zM0 17.48h7.42V24H0zm8.29 0h7.42V24H8.29zm8.29-8.49H24v6.52h-7.42zM8.29 8.99h7.42v6.52H8.29zm0-8.49h7.42v6.52H8.29zM16.58.5h7.42v6.52h-7.42z"/></svg>
                                            Deezer
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="audio-hero-player-row">
                            <div class="audio-controls">
                                <button class="control-btn skip-btn">
                                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
                                    <span>15</span>
                                </button>
                                <button class="control-btn play-btn-circle">
                                    <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                                </button>
                                <button class="control-btn skip-btn">
                                    <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
                                    <span>30</span>
                                </button>
                            </div>
                            
                            <div class="audio-waveform" id="hero-waveform">
                                <!-- High-density professional recorder-style waveform (180+ bars) -->
                                <div class="wave-bar" style="height: 10%;"></div><div class="wave-bar" style="height: 15%;"></div><div class="wave-bar" style="height: 25%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 45%;"></div>
                                <div class="wave-bar active" style="height: 60%;"></div><div class="wave-bar active" style="height: 50%;"></div><div class="wave-bar active" style="height: 65%;"></div><div class="wave-bar active" style="height: 80%;"></div><div class="wave-bar active" style="height: 60%;"></div><div class="wave-bar active" style="height: 75%;"></div>
                                <div class="wave-bar active" style="height: 90%;"></div><div class="wave-bar active" style="height: 70%;"></div><div class="wave-bar active" style="height: 55%;"></div><div class="wave-bar active" style="height: 40%;"></div><div class="wave-bar active" style="height: 65%;"></div><div class="wave-bar active" style="height: 85%;"></div>
                                <div class="wave-bar active" style="height: 75%;"></div><div class="wave-bar active" style="height: 60%;"></div><div class="wave-bar active" style="height: 45%;"></div><div class="wave-bar active" style="height: 30%;"></div><div class="wave-bar active" style="height: 25%;"></div><div class="wave-bar active" style="height: 40%;"></div>
                                <div class="wave-bar active" style="height: 60%;"></div><div class="wave-bar active" style="height: 80%;"></div><div class="wave-bar active" style="height: 95%;"></div><div class="wave-bar active" style="height: 70%;"></div><div class="wave-bar active" style="height: 50%;"></div><div class="wave-bar active" style="height: 40%;"></div>
                                <div class="wave-bar active" style="height: 60%;"></div><div class="wave-bar active" style="height: 45%;"></div><div class="wave-bar active" style="height: 30%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 15%;"></div>
                                <div class="wave-bar" style="height: 25%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 50%;"></div><div class="wave-bar" style="height: 45%;"></div><div class="wave-bar" style="height: 60%;"></div>
                                <div class="wave-bar" style="height: 70%;"></div><div class="wave-bar" style="height: 55%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 25%;"></div><div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 20%;"></div>
                                <div class="wave-bar" style="height: 15%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 55%;"></div><div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 10%;"></div><div class="wave-bar" style="height: 20%;"></div>
                                <div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 50%;"></div><div class="wave-bar" style="height: 45%;"></div><div class="wave-bar" style="height: 60%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 25%;"></div>
                                <div class="wave-bar" style="height: 15%;"></div><div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 45%;"></div><div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 10%;"></div>
                                <div class="wave-bar" style="height: 25%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 55%;"></div><div class="wave-bar" style="height: 70%;"></div><div class="wave-bar" style="height: 60%;"></div><div class="wave-bar" style="height: 45%;"></div>
                                <div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 50%;"></div><div class="wave-bar" style="height: 65%;"></div><div class="wave-bar" style="height: 80%;"></div>
                                <div class="wave-bar" style="height: 75%;"></div><div class="wave-bar" style="height: 60%;"></div><div class="wave-bar" style="height: 45%;"></div><div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 35%;"></div>
                                <div class="wave-bar" style="height: 50%;"></div><div class="wave-bar" style="height: 45%;"></div><div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 60%;"></div>
                                <div class="wave-bar" style="height: 80%;"></div><div class="wave-bar" style="height: 70%;"></div><div class="wave-bar" style="height: 55%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 25%;"></div>
                                <div class="wave-bar" style="height: 15%;"></div><div class="wave-bar" style="height: 10%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 50%;"></div><div class="wave-bar" style="height: 45%;"></div>
                                <div class="wave-bar" style="height: 60%;"></div><div class="wave-bar" style="height: 75%;"></div><div class="wave-bar" style="height: 90%;"></div><div class="wave-bar" style="height: 80%;"></div><div class="wave-bar" style="height: 65%;"></div><div class="wave-bar" style="height: 50%;"></div>
                                <div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 25%;"></div><div class="wave-bar" style="height: 15%;"></div><div class="wave-bar" style="height: 10%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 35%;"></div>
                                <div class="wave-bar" style="height: 50%;"></div><div class="wave-bar" style="height: 65%;"></div><div class="wave-bar" style="height: 55%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 20%;"></div>
                                <div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 50%;"></div><div class="wave-bar" style="height: 45%;"></div><div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 15%;"></div>
                                <div class="wave-bar" style="height: 10%;"></div><div class="wave-bar" style="height: 25%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 55%;"></div><div class="wave-bar" style="height: 70%;"></div><div class="wave-bar" style="height: 85%;"></div>
                                <div class="wave-bar" style="height: 90%;"></div><div class="wave-bar" style="height: 75%;"></div><div class="wave-bar" style="height: 60%;"></div><div class="wave-bar" style="height: 45%;"></div><div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 25%;"></div>
                                <div class="wave-bar" style="height: 15%;"></div><div class="wave-bar" style="height: 10%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 45%;"></div><div class="wave-bar" style="height: 60%;"></div>
                                <div class="wave-bar" style="height: 55%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 25%;"></div><div class="wave-bar" style="height: 15%;"></div><div class="wave-bar" style="height: 30%;"></div><div class="wave-bar" style="height: 45%;"></div>
                                <div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 20%;"></div><div class="wave-bar" style="height: 10%;"></div><div class="wave-bar" style="height: 25%;"></div><div class="wave-bar" style="height: 40%;"></div><div class="wave-bar" style="height: 55%;"></div>
                                <div class="wave-bar" style="height: 70%;"></div><div class="wave-bar" style="height: 85%;"></div><div class="wave-bar" style="height: 90%;"></div><div class="wave-bar" style="height: 75%;"></div><div class="wave-bar" style="height: 60%;"></div><div class="wave-bar" style="height: 45%;"></div>
                                <div class="wave-bar" style="height: 35%;"></div><div class="wave-bar" style="height: 25%;"></div><div class="wave-bar" style="height: 15%;"></div><div class="wave-bar" style="height: 10%;"></div>
                            </div>
                            
                            <div class="audio-time-total">- 1:03:54</div>
                        </div>
                        
                        <div class="audio-hero-footer">
                            <span>ORA AUDIO</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Tous les épisodes Grid -->
            <section class="standard-section" style="border-top: 0.5px solid #eee; padding-top: 80px; padding-bottom: 100px; border-bottom: none;">
                <header class="section-header-tous">
                    <h1>Tous les épisodes</h1>
                    <p>› Retrouvez l'intégralité de nos productions sonores.</p>
                </header>

                <div class="episodes-grid-container" style="margin-top: 40px;">
                    <!-- Column 1: ANALYSE -->
                    <article class="podcast-card-v2">
                        <div class="podcast-thumb-square">
                            <img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?q=80&w=600&auto=format&fit=crop" alt="Analyse">
                            <div class="podcast-overlay">
                                <div class="podcast-brut-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast</div>
                                <div class="podcast-host-label">avec la rédaction<br>L'élite</div>
                                <div class="podcast-main-label">Analyse</div>
                            </div>
                        </div>
                        <h3>Le Grand Décryptage #12</h3>
                        <p>Enjeux de la transition et perspectives d'avenir pour la région dans un contexte geopolitique complexe.</p>
                    </article>

                    <!-- Column 2: CULTURE -->
                    <article class="podcast-card-v2">
                        <div class="podcast-thumb-square">
                            <img src="https://images.unsplash.com/photo-1485579149621-3123dd979885?q=80&w=600&auto=format&fit=crop" alt="Culture">
                            <div class="podcast-overlay">
                                <div class="podcast-brut-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast</div>
                                <div class="podcast-host-label">avec Sarah<br>Léger</div>
                                <div class="podcast-main-label">Culture</div>
                            </div>
                        </div>
                        <h3>L'Art de la Résilience</h3>
                        <p>Témoigner de la réalité à travers les expressions artistiques locales et la renaissance créative.</p>
                    </article>

                    <!-- Column 3: TECH -->
                    <article class="podcast-card-v2">
                        <div class="podcast-thumb-square">
                            <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=600&auto=format&fit=crop" alt="Tech">
                            <div class="podcast-overlay">
                                <div class="podcast-brut-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast</div>
                                <div class="podcast-host-label">avec Jean<br>Baptiste</div>
                                <div class="podcast-main-label">Technologie</div>
                            </div>
                        </div>
                        <h3>Demain, le Digital</h3>
                        <p>Opportunités pour la jeunesse dans l'économie numérique mondiale et le tissu social du Grand Nord.</p>
                    </article>

                    <!-- Column 4: INTERNATIONAL -->
                    <article class="podcast-card-v2">
                        <div class="podcast-thumb-square">
                            <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?q=80&w=600&auto=format&fit=crop" alt="International">
                            <div class="podcast-overlay">
                                <div class="podcast-brut-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast</div>
                                <div class="podcast-host-label">avec la rédaction<br>Monde</div>
                                <div class="podcast-main-label">International</div>
                            </div>
                        </div>
                        <h3>Chroniques Mondiales</h3>
                        <p>Le point sur les crises et les alliances stratégiques qui redéfinissent la diplomatie caribéenne.</p>
                    </article>

                    <!-- Column 5: SOCIÉTÉ -->
                    <article class="podcast-card-v2">
                        <div class="podcast-thumb-square">
                            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=600&auto=format&fit=crop" alt="Société">
                            <div class="podcast-overlay">
                                <div class="podcast-brut-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast</div>
                                <div class="podcast-host-label">avec Mina<br>Soundiram</div>
                                <div class="podcast-main-label">Société</div>
                            </div>
                        </div>
                        <h3>Grand Sud : Citoyens</h3>
                        <p>Immersion au cœur des initiatives citoyennes pour le changement et les nouvelles dynamiques sociales.</p>
                    </article>

                    <!-- Column 6: ÉCONOMIE -->
                    <article class="podcast-card-v2">
                        <div class="podcast-thumb-square">
                            <img src="https://images.unsplash.com/photo-1454165833767-124698509923?q=80&w=600&auto=format&fit=crop" alt="Économie">
                            <div class="podcast-overlay">
                                <div class="podcast-brut-label"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png?v=2" alt="Ora." style="height: 18px; width: auto; vertical-align: middle; margin-bottom: 5px;"><br>podcast</div>
                                <div class="podcast-host-label">avec Jean<br>Baptiste</div>
                                <div class="podcast-main-label">Économie</div>
                            </div>
                        </div>
                        <h3>Le Sport comme Levier</h3>
                        <p>Investissement privé et développement durable par les infrastructures sportives et l'agro-industrie.</p>
                    </article>
                </div>
            </section>
        </div>
    </main>
<script>
        function toggleMobileMenu() {
            document.querySelector('.sidebar').classList.toggle('open');
            document.querySelector('.burger-menu').classList.toggle('open');
            document.querySelector('.menu-overlay').classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        }

        function toggleHeroMenu(event) {
            event.stopPropagation();
            document.getElementById('heroDropdown').classList.toggle('active');
            // Close all submenus when hero menu is toggled
            document.querySelectorAll('.dropdown-submenu').forEach(sub => sub.classList.remove('active'));
            document.querySelectorAll('.audio-hero-dropdown .dropdown-item').forEach(item => item.classList.remove('active'));
        }

        function toggleSubmenu(event, submenuId) {
            event.stopPropagation();
            const submenu = document.getElementById(submenuId);
            const toggle = event.currentTarget;
            
            // Close other submenus
            document.querySelectorAll('.dropdown-submenu').forEach(sub => {
                if(sub.id !== submenuId) sub.classList.remove('active');
            });
            document.querySelectorAll('.audio-hero-dropdown .dropdown-item').forEach(item => {
                if(item !== toggle) item.classList.remove('active');
            });

            submenu.classList.toggle('active');
            toggle.classList.toggle('active');
        }

        function sharePodcast(platform) {
            const url = encodeURIComponent(window.location.href);
            const text = encodeURIComponent("Écoutez cet épisode exclusif sur ORA : " + document.querySelector('.audio-hero-info h1').innerText);
            let shareUrl = '';

            switch(platform) {
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                    break;
                case 'twitter':
                    shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${text}`;
                    break;
                case 'whatsapp':
                    shareUrl = `https://api.whatsapp.com/send?text=${text}%20${url}`;
                    break;
            }

            if (shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400');
            }
        }

        window.onclick = function(event) {
            const dropdown = document.getElementById('heroDropdown');
            if (dropdown && dropdown.classList.contains('active')) {
                dropdown.classList.remove('active');
            }
            
            // Handle mobile menu close when clicking overlay
            if (event.target.classList.contains('menu-overlay')) {
                toggleMobileMenu();
            }
        }


    </script>
<?php endif; ?>

<?php get_footer(); ?>
