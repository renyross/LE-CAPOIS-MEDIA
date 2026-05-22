<?php get_header(); ?>
<main class="main-content">
        <div class="articles-page-wrapper">
            <header class="section-header-brut" style="margin-bottom: 0;">
                <div class="header-left">
                    <h1>Santé</h1>
                    <p>› Les défis de la santé publique et les découvertes qui changent nos vies.</p>
                </div>
            </header>

            <!-- À la une Section -->
            <section class="standard-section selection-soir-section" id="a-la-une" style="margin-top: 0; padding-top: 0;">
                <div class="selection-soir-grid">
                    <!-- Main Featured Article -->
                    <a href="#" class="selection-large-card">
                        <div class="img-container">
                            <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?q=80&w=1200&auto=format&fit=crop" alt="Santé Feature">
                        </div>
                        <div class="selection-meta">
                            <span class="meta-dot" style="background: #e74c3c;"></span>
                            ENQUÊTE • SANTÉ PUBLIQUE
                        </div>
                        <h3>Système de santé : Urgence d'une réforme structurelle en Haïti</h3>
                    </a>

                    <!-- Sidebar List -->
                    <div class="selection-list">
                        <a href="article-pharmacie.html" class="selection-item">
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_med_legal_color_1774481073690.png" alt="Pharmacies">
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">SANTÉ PUBLIQUE • ENQUÊTE</div>
                                <h4>De fausses pharmacies sans autorisation devant l'hôpital La Paix</h4>
                            </div>
                        </a>
                        <a href="#" class="selection-item">
                            <div class="thumb">
                                <img src="https://images.unsplash.com/photo-1527613426441-4da17471b66d?q=80&w=300&auto=format&fit=crop" alt="Médecine">
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">TECHNOLOGIE • MÉDECINE</div>
                                <h4>La télémédecine : Un pont vers les zones reculées</h4>
                            </div>
                        </a>
                        <a href="#" class="selection-item">
                            <div class="thumb">
                                <img src="https://images.unsplash.com/photo-1523206489230-c012c64b2b48?q=80&w=300&auto=format&fit=crop" alt="Santé Mentale">
                            </div>
                            <div class="selection-item-content">
                                <div class="selection-meta">PSYCHOLOGIE • BIEN-ÊTRE</div>
                                <h4>Santé mentale : Briser le tabou du traumatisme collectif</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Portraits & Témoignages Section -->
            <section class="standard-section story-accent-section">
                <div class="reels-header">
                    <h2 style="font-size: 20px; font-weight: 800;">Portraits & Témoignages</h2>
                    <a href="#" class="btn-all-reels">Tout voir</a>
                </div>
                <div class="carousel-wrapper">
                    <div class="videos-carousel-grid">
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1559839734-2b71f1536783?q=80&w=400&auto=format&fit=crop" alt="Dr Jean">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <h4>D<sup>r</sup> Jean : 30 ans au service des provinces</h4>
                        </article>
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1590105577767-e21a46b53b45?q=80&w=400&auto=format&fit=crop" alt="Infirmière">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <h4>Les anges blancs du Cap-Haïtien</h4>
                        </article>
                        <article class="video-reel-card">
                            <div class="video-thumb-tall">
                                <img src="https://images.unsplash.com/photo-1581594693702-fbdc51b2ad46?q=80&w=400&auto=format&fit=crop" alt="Innovation">
                                <div class="reel-play-overlay" style="opacity: 1;">▶</div>
                            </div>
                            <h4>Innovations : Le futur de la chirurgie locale</h4>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Section 3: Dernières publications (Horizontal Carousel) -->
            <section class="standard-section redaction-articles-section" id="section-articles-carousel">
                <div class="reels-header">
                    <h2 style="font-size: 20px; font-weight: 800;">Dernières publications</h2>
                    <a href="#" class="btn-all-reels">Tout voir</a>
                </div>

                <div class="carousel-wrapper">
                    <div class="articles-horizontal-grid" id="articles-carousel">
                        <!-- Item 1: Vaccination -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1504813184591-01592fd03cfd?q=80&w=400&auto=format&fit=crop" alt="Vaccination">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #e74c3c;"></span>
                                    <span>PRÉVENTION • CAMPAGNE</span>
                                </div>
                                <h4>Vaccination : Le défi de l'immunité collective</h4>
                            </div>
                        </article>

                        <!-- Item 2: Labo -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1511174511562-5f7f18b85461?q=80&w=400&auto=format&fit=crop" alt="Labo">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #3498db;"></span>
                                    <span>SCIENCE • RECHERCHE</span>
                                </div>
                                <h4>Antibiorésistance : Le combat invisible</h4>
                            </div>
                        </article>

                        <!-- Item 3: Nutrition -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?q=80&w=400&auto=format&fit=crop" alt="Nutrition">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #27ae60;"></span>
                                    <span>BIEN-ÊTRE • NUTRITION</span>
                                </div>
                                <h4>Alimentation saine : Les piliers du régime méditerranéen</h4>
                            </div>
                        </article>

                        <!-- Item 4: Stress -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?q=80&w=400&auto=format&fit=crop" alt="Stress">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #9b59b6;"></span>
                                    <span>PSYCHOLOGIE • STRESS</span>
                                </div>
                                <h4>Gérer l'anxiété : La méditation de pleine conscience au quotidien</h4>
                            </div>
                        </article>

                        <!-- Item 5: Sport -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=400&auto=format&fit=crop" alt="Sport">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #f1c40f;"></span>
                                    <span>PHYSIQUE • VITALITÉ</span>
                                </div>
                                <h4>Sport et Santé : Pourquoi l'activité physique est votre meilleur médicament</h4>
                            </div>
                        </article>

                        <!-- Item 6: Sommeil -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?q=80&w=400&auto=format&fit=crop" alt="Sommeil">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #2980b9;"></span>
                                    <span>RÉCUPÉRATION • SOMMEIL</span>
                                </div>
                                <h4>L'art de bien dormir : Les secrets d'un sommeil réparateur</h4>
                            </div>
                        </article>

                        <!-- Item 7: Hygiène -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1527613426441-4da17471b66d?q=80&w=400&auto=format&fit=crop" alt="Hygiene">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #16a085;"></span>
                                    <span>PUBLIQUE • HYGIÈNE</span>
                                </div>
                                <h4>Accès à l'eau : Un enjeu vital pour la santé des populations rurales</h4>
                            </div>
                        </article>

                        <!-- Item 8: Technologie -->
                        <article class="article-horizontal-card">
                            <div class="card-thumb">
                                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=400&auto=format&fit=crop" alt="Telemedecine">
                            </div>
                            <div class="card-content">
                                <div class="card-label">
                                    <span class="label-dot" style="background: #7f8c8d;"></span>
                                    <span>DIGITAL • MÉDECINE</span>
                                </div>
                                <h4>Télémédecine : Comment le numérique transforme l'accès aux soins</h4>
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
    </script>
<?php get_footer(); ?>