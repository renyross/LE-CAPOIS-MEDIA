<?php get_header(); ?>
<main class="main-content">
        <div class="articles-page-wrapper">
            <header class="section-header-brut">
                <div class="header-left">
                    <h1>Culture</h1>
                    <p>› L'âme d'une nation, à travers ses plumes et ses pinceaux.</p>
                </div>
            </header>

            <!-- Section 1: À la une (Identique à Sport) -->
            <section class="standard-section selection-soir-section" id="a-la-une" style="margin-top: 0; padding-top: 0;">
                <div class="selection-soir-grid">
                    <!-- Main Card (Left) -->
                    <a href="#" class="selection-large-card">
                        <div class="img-container" style="position:relative;">
                            <img src="https://images.unsplash.com/photo-1544923246-77307dddd546?q=80&w=1200&auto=format&fit=crop" alt="Frankétienne">
                            <div class="reel-play-overlay" style="width:60px; height:60px; font-size:24px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-meta">
                            <span class="meta-dot" style="background: #9b59b6;"></span>
                            Portrait • Épopée Littéraire
                        </div>
                        <h3>Frankétienne : Le Chaos créateur du Spiralisme au-delà des frontières</h3>
                    </a>

                    <!-- Sidebar List (Right) -->
                    <div class="selection-list">
                        <!-- Item 1 -->
                        <a href="#" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?q=80&w=400&auto=format&fit=crop" alt="Art Saint-Soleil">
                                <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #f1c40f;"></span>
                                    Peinture▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Transcendance</div>
                                <h4>Le Mystère Saint-Soleil : Quand le sacré redéfinit la peinture haïtienne</h4>
                            </div>
                        </a>

                        <!-- Item 2 -->
                        <a href="#" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_culture.png" alt="Citadelle">
                                <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #e67e22;"></span>
                                    Patrimoine▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Histoire</div>
                                <h4>La Citadelle : Forteresse de la liberté et défi architectural majeur</h4>
                            </div>
                        </a>

                        <!-- Item 3 -->
                        <a href="#" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video_featured_immersion_color_1774831352596.png" alt="Compas">
                                <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #e74c3c;"></span>
                                    Musique▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Patrimoine</div>
                                <h4>Le Compas Direct : L'épopée d'un rythme qui refuse de s'éteindre</h4>
                            </div>
                        </a>

                        <!-- Item 4 -->
                        <a href="#" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_diaspora_color_1774481124070.png" alt="Artisanat">
                                <div class="reel-play-overlay" style="width:30px; height:30px; font-size:14px; opacity:1;">▶</div>
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #2ecc71;"></span>
                                    Artisanat▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Récupération</div>
                                <h4>Atis Rezistans : Le cri du métal dans les rues de Port-au-Prince</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Section 2: Toutes nos vidéos (Identique à Sport) -->
            <section class="standard-section story-accent-section" id="toutes-nos-videos">
                <div class="reels-header">
                    <div class="header-title-block">
                        <h2 style="font-size: 20px; font-weight: 800;">Toutes nos vidéos</h2>
                        <p style="font-size: 14px; color: #888; margin-top: 5px; font-weight: 400;">Explorez la culture sous tous ses angles.</p>
                    </div>
                    <a href="#" class="btn-all-reels">Tout voir</a>
                </div>

                <div class="carousel-wrapper">
                    <button class="carousel-nav-btn prev" aria-label="Précédent">‹</button>
                    <div class="videos-carousel-grid">
                        <!-- 12 Items (Vertical) -->
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1514525253361-903e17924727?q=80&w=400&auto=format&fit=crop" alt="Rara">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Tradition</span></div>
                            <h4>Le Rara de Léogâne : Mystère et rythmes</h4>
                        </article>
                        
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1493225255756-d9584f8606e9?q=80&w=400&auto=format&fit=crop" alt="Jazz">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Musique</span></div>
                            <h4>Jazz aux Cayes : L'improvisation libre</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1549492423-400259a2e574?q=80&w=400&auto=format&fit=crop" alt="Théatre">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Scène</span></div>
                            <h4>Théâtre haitien : La force des mots</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1508898578281-774ac4893c0c?q=80&w=400&auto=format&fit=crop" alt="Louvre">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Patrimoine</span></div>
                            <h4>Musées Nationaux : Gardiens de l'histoire</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1579456209867-0c58e578a994?q=80&w=400&auto=format&fit=crop" alt="Danse">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Mouvement</span></div>
                            <h4>La danse sacrée : L'héritage du Yanvalou</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=400&auto=format&fit=crop" alt="Littérature">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Plume</span></div>
                            <h4>Rencontre littéraire : Voix d'Haïti</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=400&auto=format&fit=crop" alt="Cinéma">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Cinéma</span></div>
                            <h4>7ème Art : La nouvelle vague haïtienne</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1518173946687-a4c8a9b746f5?q=80&w=400&auto=format&fit=crop" alt="Camp">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Nature</span></div>
                            <h4>Paysages et Poèmes : L'écho des cimes</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?q=80&w=400&auto=format&fit=crop" alt="Arch">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Arch</span></div>
                            <h4>Maisons Gingerbread : L'élégance fragile</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1517466787929-bc90951d0974?q=80&w=400&auto=format&fit=crop" alt="Graph">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Urbain</span></div>
                            <h4>Fresques de Rue : Le mur a la parole</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=400&auto=format&fit=crop" alt="Chef">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Goût</span></div>
                            <h4>Gastronomie : L'art du Griot parfait</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=400&auto=format&fit=crop" alt="Mic">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Média</span></div>
                            <h4>Radio en Haïti : Un vecteur culturel</h4>
                        </article>
                    </div>
                    <button class="carousel-nav-btn next" aria-label="Suivant">›</button>
                </div>
            </section>

            <!-- Section 3: Tous nos articles (Identique à Sport) -->
            <section class="standard-section redaction-articles-section" id="section-articles-carousel">
                <div class="reels-header">
                    <h2 style="font-size: 20px; font-weight: 800;">Tous nos articles</h2>
                    <a href="#" class="btn-all-reels">Tout voir</a>
                </div>

                <div class="carousel-wrapper">
                    <div class="articles-horizontal-grid" id="articles-carousel">
                        <!-- 13 Articles (Horizontal) -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1544273677-277914c9ad4a?q=80&w=400&auto=format&fit=crop" alt="Litterature 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Littérature</span></div>
                                <h4>Yanick Lahens : Une écriture au service de la mémoire urbaine</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1579965342575-16428a7c8881?q=80&w=400&auto=format&fit=crop" alt="Peinture 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Peinture</span></div>
                                <h4>Levoy Exil : L'astralisme et l'héritage de Saint-Soleil</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?q=80&w=400&auto=format&fit=crop" alt="Cafe 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Gastronomie</span></div>
                                <h4>Le Café haïtien : De la tradition à la renaissance mondiale</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?q=80&w=400&auto=format&fit=crop" alt="Fest 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Festivals</span></div>
                                <h4>Jacmel : La cité des créateurs et son carnaval mythique</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1460662121276-ec0865842845?q=80&w=400&auto=format&fit=crop" alt="Design 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Artisanat</span></div>
                                <h4>La Broderie d'Or : Un savoir-faire ancestral revisité</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?q=80&w=400&auto=format&fit=crop" alt="Langue 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Linguistique</span></div>
                                <h4>L'Académie du Créole : Protéger et promouvoir notre langue</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1518173946687-a4c8a9b746f5?q=80&w=400&auto=format&fit=crop" alt="Vert 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Patrimoine</span></div>
                                <h4>Les parcs nationaux : Des sanctuaires de culture et de nature</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1534353436294-0dbd4bdac845?q=80&w=400&auto=format&fit=crop" alt="Eau 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Croyances</span></div>
                                <h4>Saut-d'Eau : La confluence des foi et des mythes</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1511139088496-c758e5893c3d?q=80&w=400&auto=format&fit=crop" alt="Ville 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Villes</span></div>
                                <h4>Le Cap : Pourquoi la capitale du Nord reste l'âme historique</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=400&auto=format&fit=crop" alt="Web 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Digital</span></div>
                                <h4>Haiti Web Culture : Comment TikTok change la donne</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1554188248-986adbb73be4?q=80&w=400&auto=format&fit=crop" alt="History 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Histoire</span></div>
                                <h4>Bois-Caïman : L'étincelle de la liberté universelle</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1472289065668-ce6a9a447c5a?q=80&w=400&auto=format&fit=crop" alt="Youth 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Génération</span></div>
                                <h4>La Jeunesse d'Haïti : Créer pour ne pas sombrer</h4>
                            </div>
                        </article>

                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/krisla-hero.png" alt="Goncourt 1">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Littérature</span></div>
                                <h4>Le Prix Goncourt et l'héritage des grandes plumes haïtiennes</h4>
                            </div>
                        </article>
                    </div>

                    <!-- Navigation Arrows at the Bottom -->
                    <div class="grid-nav-brut">
                        <button class="carousel-nav-btn prev" id="btn-articles-prev" aria-label="Précédent">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                        </button>
                        <button class="carousel-nav-btn next" id="btn-articles-next" aria-label="Suivant">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </main>
<script>
        function toggleMobileMenu() {
            document.querySelector('.sidebar').classList.toggle('open');
            document.querySelector('.burger-menu').classList.toggle('open');
            document.querySelector('.menu-overlay').classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        }

        // --- Video Carousel Logic (Standardized) ---
        const videoGrid = document.querySelector('.videos-carousel-grid');
        const vPrevBtn = document.querySelector('.carousel-nav-btn.prev');
        const vNextBtn = document.querySelector('.carousel-nav-btn.next');

        if (videoGrid && vPrevBtn && vNextBtn) {
            vNextBtn.addEventListener('click', () => {
                videoGrid.scrollBy({ left: 300, behavior: 'smooth' });
            });
            vPrevBtn.addEventListener('click', () => {
                videoGrid.scrollBy({ left: -300, behavior: 'smooth' });
            });

            videoGrid.addEventListener('scroll', () => {
                const isAtStart = videoGrid.scrollLeft <= 0;
                const isAtEnd = videoGrid.scrollLeft >= (videoGrid.scrollWidth - videoGrid.offsetWidth - 10);
                vPrevBtn.style.opacity = isAtStart ? "0.3" : "1";
                vNextBtn.style.opacity = isAtEnd ? "0.3" : "1";
            });
        }

        // --- Articles Carousel Logic (Standardized) ---
        const articlesGrid = document.getElementById('articles-carousel');
        const aPrevBtn = document.getElementById('btn-articles-prev');
        const aNextBtn = document.getElementById('btn-articles-next');

        if (articlesGrid && aPrevBtn && aNextBtn) {
            aNextBtn.addEventListener('click', () => {
                articlesGrid.scrollBy({ left: 400, behavior: 'smooth' });
            });
            aPrevBtn.addEventListener('click', () => {
                articlesGrid.scrollBy({ left: -400, behavior: 'smooth' });
            });

            articlesGrid.addEventListener('scroll', () => {
                const isAtStart = articlesGrid.scrollLeft <= 0;
                const isAtEnd = articlesGrid.scrollLeft >= (articlesGrid.scrollWidth - articlesGrid.offsetWidth - 10);
                aPrevBtn.style.opacity = isAtStart ? "0.3" : "1";
                aNextBtn.style.opacity = isAtEnd ? "0.3" : "1";
                aPrevBtn.disabled = isAtStart;
                aNextBtn.disabled = isAtEnd;
            });
            
            // Initial state
            aPrevBtn.style.opacity = "0.3";
            aPrevBtn.disabled = true;
        }
    </script>
<?php get_footer(); ?>