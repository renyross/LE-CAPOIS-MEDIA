<?php get_header(); ?>
<main class="main-content">
        <div class="articles-page-wrapper">
            <header class="section-header-brut" style="margin-bottom: 0;">
                <div class="header-left">
                    <h1>Haïti</h1>
                    <p>› L'actualité nationale, décryptée par nos plumes locales.</p>
                </div>
            </header>

            <!-- Section 1: À la une -->
            <section class="standard-section selection-soir-section" id="a-la-une" style="margin-top: 0; padding-top: 0;">
                <div class="selection-soir-grid">
                    <!-- Main Card (Left) -->
                    <a href="article-krisla.html" class="selection-large-card">
                        <div class="img-container" style="position:relative;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/krisla-hero.png" alt="Carrefour">
                            <div class="reel-play-overlay" style="width:60px; height:60px; font-size:24px; opacity:1;">▶</div>
                        </div>
                        <div class="selection-meta">
                            <span class="meta-dot" style="background: #c0392b;"></span>
                            Enquête • Sécurité Nationale
                        </div>
                        <h3>Le système de contrôle implacable de Krisla à Carrefour</h3>
                    </a>

                    <!-- Sidebar List (Right) -->
                    <div class="selection-list">
                        <!-- Item 1 -->
                        <a href="article-pharmacie.html" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_med_legal_color_1774481073690.png" alt="Pharmacies">
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #27ae60;"></span>
                                    Santé▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Légalité</div>
                                <h4>De fausses pharmacies sans autorisation devant l'hôpital La Paix</h4>
                            </div>
                        </a>

                        <!-- Item 2 -->
                        <a href="#" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_maritime_color_1774481105113.png" alt="Maritime">
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #2980b9;"></span>
                                    Maritime▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Garde Côtière</div>
                                <h4>Des bateaux paient les policiers pour une protection officieuse</h4>
                            </div>
                        </a>

                        <!-- Item 3 -->
                        <a href="#" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_sec_sports_color_1774481090048.png" alt="Commissariats">
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #f39c12;"></span>
                                    Justice▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Corruption</div>
                                <h4>Des commissariats collectent de l'argent illégalement en Haïti</h4>
                            </div>
                        </a>

                        <!-- Item 4 -->
                        <a href="#" class="selection-item">
                            <div class="thumb" style="position:relative;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_tech.png" alt="Tech Haiti">
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">
                                    <span class="meta-dot" style="background: #8e44ad;"></span>
                                    Prospective▶
                                </div>
                                <div class="selection-meta" style="margin-top:-8px; opacity:0.8; font-size:10px;">Digital</div>
                                <h4>Haiti 2030 : Le manifeste pour une vraie souveraineté digitale</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Section 2: Analyses Vidéo -->
            <section class="standard-section story-accent-section" id="haiti-videos">
                <div class="reels-header">
                    <div class="header-title-block">
                        <h2 style="font-size: 20px; font-weight: 800;">Nos dernières vidéos</h2>
                        <p style="font-size: 14px; color: #888; margin-top: 5px; font-weight: 400;">L'actualité d'Haïti, décryptée en mouvement.</p>
                    </div>
                    <a href="#" class="btn-all-reels">Tout voir</a>
                </div>

                <div class="carousel-wrapper">
                    <button class="carousel-nav-btn prev" aria-label="Précédent">‹</button>
                    <div class="videos-carousel-grid">
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_capois_color_premium_1774478597130.png" alt="Urbain">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Terrain</span></div>
                            <h4>Port-au-Prince : Au cœur des quartiers</h4>
                        </article>
                        
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_med_legal_color_1774481073690.png" alt="Medical">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Reportage</span></div>
                            <h4>Santé : La quête des soins essentiels</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/economy_color_premium_1774478629301.png" alt="Eco">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Économie</span></div>
                            <h4>Marchés locaux : Le prix de la résilience</h4>
                        </article>

                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_culture.png" alt="Culture Haiti">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <div class="card-label"><span>Société</span></div>
                            <h4>L'art de rue comme témoignage politique</h4>
                        </article>
                    </div>
                    <button class="carousel-nav-btn next" aria-label="Suivant">›</button>
                </div>
            </section>

            <!-- Section 3: Haïti en images (Dedicated Photo Gallery) -->
            <section class="standard-section haiti-gallery-section" id="section-haiti-gallery">
                <div class="reels-header">
                    <div class="header-title-block">
                        <h2 style="font-size: 20px; font-weight: 800;">Haïti en images</h2>
                        <p style="font-size: 14px; color: #888; margin-top: 5px; font-weight: 400;">La beauté et la force d'une nation en clichés.</p>
                    </div>
                    <a href="#" class="btn-all-reels">Tout voir</a>
                </div>

                <div class="carousel-wrapper">
                    <div class="articles-horizontal-grid" id="haiti-images-carousel">
                        <!-- Image 1 -->
                        <div class="article-horizontal-card">
                            <div class="card-thumb" style="height: 200px;">
                                <img src="https://images.unsplash.com/photo-1541873676947-975991138b48?q=80&w=600&auto=format&fit=crop" alt="Haiti Paysage">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Paysage</span></div>
                                <h4 style="font-size: 14px; opacity: 0.8;">Les montagnes majestueuses du Sud</h4>
                            </div>
                        </div>

                        <!-- Image 2 -->
                        <div class="article-horizontal-card">
                            <div class="card-thumb" style="height: 200px;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_capois_color_premium_1774478597130.png" alt="Vie Urbaine">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Quotidien</span></div>
                                <h4 style="font-size: 14px; opacity: 0.8;">L'effervescence des marchés de Port-au-Prince</h4>
                            </div>
                        </div>

                        <!-- Image 3 -->
                        <div class="article-horizontal-card">
                            <div class="card-thumb" style="height: 200px;">
                                <img src="https://images.unsplash.com/photo-1579546673283-4184131f319c?q=80&w=600&auto=format&fit=crop" alt="Architecture">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Patrimoine</span></div>
                                <h4 style="font-size: 14px; opacity: 0.8;">L'héritage architectural du Cap-Haïtien</h4>
                            </div>
                        </div>

                        <!-- Image 4 -->
                        <div class="article-horizontal-card">
                            <div class="card-thumb" style="height: 200px;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_culture.png" alt="Culture Heritage">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Culture</span></div>
                                <h4 style="font-size: 14px; opacity: 0.8;">Célébrations et traditions ancestrales</h4>
                            </div>
                        </div>

                        <!-- Image 5 -->
                        <div class="article-horizontal-card">
                            <div class="card-thumb" style="height: 200px;">
                                <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?q=80&w=600&auto=format&fit=crop" alt="Nature">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Nature</span></div>
                                <h4 style="font-size: 14px; opacity: 0.8;">Les plages turquoises de la côte turquoise</h4>
                            </div>
                        </div>

                        <!-- Image 6 -->
                        <div class="article-horizontal-card">
                            <div class="card-thumb" style="height: 200px;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/economy_color_premium_1774478629301.png" alt="Resilience">
                            </div>
                            <div class="card-content">
                                <div class="card-label"><span>Société</span></div>
                                <h4 style="font-size: 14px; opacity: 0.8;">La résilience au cœur de l'économie locale</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Arrows at the Bottom -->
                    <div class="grid-nav-brut">
                        <button class="carousel-nav-btn prev" id="btn-images-prev" aria-label="Précédent">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                        </button>
                        <button class="carousel-nav-btn next" id="btn-images-next" aria-label="Suivant">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </section>

            <!-- Section 4: Nos derniers articles (Horizontal Carousel) -->
            <section class="standard-section redaction-articles-section" id="section-articles-carousel">
                <div class="reels-header">
                    <h2 style="font-size: 20px; font-weight: 800;">Nos derniers articles</h2>
                    <a href="#" class="btn-all-reels">Tout voir</a>
                </div>

                <div class="carousel-wrapper">
                    <div class="articles-horizontal-grid" id="articles-carousel">
                        <!-- Item 1: Économie -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/economy_color_premium_1774478629301.png" alt="Economie Haiti">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #e67e22;"></span>
                                    <span>Économie • Diaspora</span>
                                </div>
                                <h4>Le rôle vital des transferts de la diaspora dans la résilience nationale</h4>
                            </div>
                        </article>

                        <!-- Item 2: Éducation -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=400&auto=format&fit=crop" alt="Education Haiti">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #3498db;"></span>
                                    <span>Éducation • Réforme</span>
                                </div>
                                <h4>Vers une école plus inclusive : Le défi de l’éducation pour tous</h4>
                            </div>
                        </article>

                        <!-- Item 3: Agriculture -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=400&auto=format&fit=crop" alt="Agriculture Haiti">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #27ae60;"></span>
                                    <span>Agriculture • Ruralité</span>
                                </div>
                                <h4>Relancer la filière caféière : L'or noir reprend vie dans les Nippes</h4>
                            </div>
                        </article>

                        <!-- Item 4: Société -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_capois_color_premium_1774478597130.png" alt="Societe Haiti">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #9b59b6;"></span>
                                    <span>Société • Engagement</span>
                                </div>
                                <h4>La jeunesse engagée : Ces collectifs qui réinventent l'entraide</h4>
                            </div>
                        </article>

                        <!-- Item 5: Culture -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero_culture.png" alt="Culture Haiti">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #f1c40f;"></span>
                                    <span>Culture • Tradition</span>
                                </div>
                                <h4>Le Rara, plus qu'un rythme : Une expression de la souveraineté populaire</h4>
                            </div>
                        </article>

                        <!-- Item 6: Environnement -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?q=80&w=400&auto=format&fit=crop" alt="Environnement Haiti">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #2ecc71;"></span>
                                    <span>Écologie • Sécurité</span>
                                </div>
                                <h4>Reforestation : Le projet vert qui redonne espoir au plateau Central</h4>
                            </div>
                        </article>

                        <!-- Item 7: Infrastructure -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_maritime_color_1774481105113.png" alt="Infrastructure Haiti">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #7f8c8d;"></span>
                                    <span>Transport • Logistique</span>
                                </div>
                                <h4>Routes Nationales : Le défi colossal de la connectivité territoriale</h4>
                            </div>
                        </article>

                        <!-- Item 8: Santé -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_med_legal_color_1774481073690.png" alt="Sante Haiti">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #e74c3c;"></span>
                                    <span>Santé • Proximité</span>
                                </div>
                                <h4>Améliorer l'accès aux soins de base : Le combat des cliniques mobiles</h4>
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
    </main>
<script>
        function toggleMobileMenu() {
            document.querySelector('.sidebar').classList.toggle('open');
            document.querySelector('.burger-menu').classList.toggle('open');
            document.querySelector('.menu-overlay').classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        }

        // Carousel Logic
        document.querySelectorAll('.carousel-wrapper').forEach(wrapper => {
            const grid = wrapper.querySelector('.videos-carousel-grid');
            const prevBtn = wrapper.querySelector('.carousel-nav-btn.prev');
            const nextBtn = wrapper.querySelector('.carousel-nav-btn.next');

            if (grid && prevBtn && nextBtn) {
                nextBtn.addEventListener('click', () => {
                    grid.scrollBy({ left: 300, behavior: 'smooth' });
                });
                prevBtn.addEventListener('click', () => {
                    grid.scrollBy({ left: -300, behavior: 'smooth' });
                });
            }
        });

        // --- Articles Carousel Logic (Nos derniers articles) ---
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

        // --- Image Gallery Carousel Logic (Haïti en images) ---
        const imagesGrid = document.getElementById('haiti-images-carousel');
        const iPrevBtn = document.getElementById('btn-images-prev');
        const iNextBtn = document.getElementById('btn-images-next');

        if (imagesGrid && iPrevBtn && iNextBtn) {
            iNextBtn.addEventListener('click', () => {
                imagesGrid.scrollBy({ left: 400, behavior: 'smooth' });
            });
            iPrevBtn.addEventListener('click', () => {
                imagesGrid.scrollBy({ left: -400, behavior: 'smooth' });
            });

            imagesGrid.addEventListener('scroll', () => {
                const isAtStart = imagesGrid.scrollLeft <= 0;
                const isAtEnd = imagesGrid.scrollLeft >= (imagesGrid.scrollWidth - imagesGrid.offsetWidth - 10);
                iPrevBtn.style.opacity = isAtStart ? "0.3" : "1";
                iNextBtn.style.opacity = isAtEnd ? "0.3" : "1";
                iPrevBtn.disabled = isAtStart;
                iNextBtn.disabled = isAtEnd;
            });
            
            // Initial state
            iPrevBtn.style.opacity = "0.3";
            iPrevBtn.disabled = true;
        }
    </script>
<?php get_footer(); ?>