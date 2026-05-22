<?php
/**
 * The template for displaying search results pages for ORA - Le Capois Media.
 *
 * @package ORA
 */

get_header(); ?>

    <main class="page-content" style="background-color: #fff; min-height: 100vh;">
        <section class="search-page-hero" style="padding: 60px 40px 40px; max-width: 800px; margin: 0 auto; text-align: center;">
            <h1 style="font-size: 42px; font-weight: 700; letter-spacing: -1.5px; margin-bottom: 15px; color: #111; text-transform: none;">Recherche</h1>
            <p style="font-size: 16px; color: #888; margin-bottom: 30px; line-height: 1.6; font-weight: 400;">Retrouvez toutes les vidéos, podcasts et analyses de POST en quelques clics.</p>
            
            <div class="search-bar-container" style="display: flex; align-items: center; gap: 15px; background: #fff; border-bottom: 1px solid #e0e0e0; padding: 15px 0; border-radius: 0;">
                <svg width="24" height="24" fill="none" stroke="#ccc" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                <input type="text" id="mainSearchInput" placeholder="Saisissez votre recherche..." value="<?php echo esc_attr(get_search_query()); ?>" autocomplete="off" style="flex-grow: 1; border: none; outline: none; font-size: 20px; font-weight: 400; color: #111; background: transparent;">
                <button class="search-submit-btn" style="background: transparent; color: #111; border: 1px solid #111; padding: 10px 25px; border-radius: 4px; font-weight: 600; cursor: pointer; font-size: 14px;">Rechercher</button>
            </div>
        </section>

        <section class="filter-section" style="padding: 0 40px 40px; max-width: 800px; margin: 0 auto; display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
            <button class="filter-chip active" data-filter="tout" style="padding: 5px 0; border: none; border-bottom: 2px solid #111; background: transparent; font-size: 13px; font-weight: 600; cursor: pointer; color: #111; text-transform: uppercase; letter-spacing: 0.05em;">Tout</button>
            <button class="filter-chip" data-filter="video" style="padding: 5px 0; border: none; border-bottom: 2px solid transparent; background: transparent; font-size: 13px; font-weight: 600; cursor: pointer; color: #888; text-transform: uppercase; letter-spacing: 0.05em;">Vidéos</button>
            <button class="filter-chip" data-filter="article" style="padding: 5px 0; border: none; border-bottom: 2px solid transparent; background: transparent; font-size: 13px; font-weight: 600; cursor: pointer; color: #888; text-transform: uppercase; letter-spacing: 0.05em;">Articles</button>
            <button class="filter-chip" data-filter="podcast" style="padding: 5px 0; border: none; border-bottom: 2px solid transparent; background: transparent; font-size: 13px; font-weight: 600; cursor: pointer; color: #888; text-transform: uppercase; letter-spacing: 0.05em;">Podcasts</button>
        </section>

        <section class="results-section" style="padding: 0 80px 120px; max-width: 1600px; margin: 0 auto;">
            <h2 id="resultTitle" style="font-size: 12px; font-weight: 800; margin-bottom: 40px; text-transform: uppercase; color: #aaa; letter-spacing: 0.1em; text-align: center;">Dernières publications</h2>
            <div class="discovery-grid" id="discoveryGrid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 25px;">
                <!-- Data will be populated by JS -->
            </div>

            <!-- Navigation Buttons -->
            <div class="grid-nav-brut" style="display: flex; justify-content: center; gap: 20px; margin-top: 50px; padding-bottom: 40px;">
                <button class="nav-btn-round" id="prevDiscovery" onclick="movePage(-1)" aria-label="Précédent" style="width: 50px; height: 50px; border-radius: 50%; border: 1.5px solid #e0e0e0; background: #fff; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #111;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width: 24px; height: 24px;"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </button>
                <button class="nav-btn-round" id="nextDiscovery" onclick="movePage(1)" aria-label="Suivant" style="width: 50px; height: 50px; border-radius: 50%; border: 1.5px solid #e0e0e0; background: #fff; display: flex; align-items: center; justify-content: center; cursor: pointer; color: #111;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width: 24px; height: 24px;"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        </section>
    </main>

    <script src="<?php echo get_template_directory_uri(); ?>/js/search-data.js"></script>
    <script>
        const discoveryGrid = document.getElementById('discoveryGrid');
        const mainInput = document.getElementById('mainSearchInput');
        const resultTitle = document.getElementById('resultTitle');
        const chips = document.querySelectorAll('.filter-chip');
        const prevBtn = document.getElementById('prevDiscovery');
        const nextBtn = document.getElementById('nextDiscovery');
        
        let currentFilter = 'tout';
        let currentPage = 0;
        const itemsPerPage = 5;
        let currentResults = [];

        function renderDiscovery(results) {
            discoveryGrid.innerHTML = '';
            
            const sourceItems = results.length > 0 ? results : (mainInput.value.length <= 1 ? searchIndex : []);
            currentResults = sourceItems;

            if (results.length > 0) {
                resultTitle.textContent = `Résultats (${results.length})`;
            } else if (mainInput.value.length > 1) {
                resultTitle.textContent = "Aucun résultat trouvé";
                prevBtn.disabled = true;
                nextBtn.disabled = true;
                return;
            } else {
                resultTitle.textContent = "Dernières publications";
            }

            const start = currentPage * itemsPerPage;
            const end = start + itemsPerPage;
            const pagedItems = sourceItems.slice(start, end);

            prevBtn.disabled = currentPage === 0;
            nextBtn.disabled = end >= sourceItems.length;

            pagedItems.forEach(item => {
                if (currentFilter !== 'tout' && item.type !== currentFilter) return;

                const card = document.createElement('a');
                card.href = item.url;
                card.className = `discovery-card ${item.type === 'article' ? 'article-type' : ''}`;
                card.style = "display: flex; flex-direction: column; gap: 12px; text-decoration: none; color: inherit;";
                
                let imageUrl = item.image || '<?php echo get_template_directory_uri(); ?>/assets/img/krisla-hero.png';
                if (!imageUrl.startsWith('http') && !imageUrl.startsWith('<?php echo get_template_directory_uri(); ?>')) {
                    imageUrl = '<?php echo get_template_directory_uri(); ?>/' + imageUrl;
                }

                card.innerHTML = `
                    <div class="img-wrapper" style="aspect-ratio: 9/15; border-radius: 8px; position: relative; background: #f9f9f9; overflow: hidden;">
                        <div style="position: absolute; top: 20px; right: 20px; color: #fff; font-weight: 900; font-size: 18px; z-index: 5; text-shadow: 0 2px 4px rgba(0,0,0,0.5);"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png?v=2" alt="Ora." class="logo-img" style="height: 18px; width: auto; vertical-align: middle;"></div>
                        <img src="${imageUrl}" alt="${item.title}" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.95; transition: opacity 0.3s ease;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.95">
                        
                        <div class="card-overlay-content" style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 20px; background: linear-gradient(transparent, rgba(0,0,0,0.8));">
                             ${item.type === 'video' || item.type === 'podcast' ? '<div style="margin-bottom: 10px; width: 30px; height: 30px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #000; font-size: 10px;">▶</div>' : ''}
                            <h3 style="color: #fff; font-size: 16px; font-weight: 800; line-height: 1.2; margin: 0; text-shadow: 0 1px 2px rgba(0,0,0,0.5);">${item.title}</h3>
                        </div>
                    </div>
                    <div style="padding-top: 15px;">
                        <p style="font-size: 13px; font-weight: 700; color: #000; line-height: 1.3; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; margin: 0;">${item.excerpt}</p>
                    </div>
                `;
                discoveryGrid.appendChild(card);
            });
        }

        function movePage(direction) {
            currentPage += direction;
            renderDiscovery(mainInput.value.length > 1 ? currentResults : []);
            window.scrollTo({ top: discoveryGrid.offsetTop - 100, behavior: 'smooth' });
        }

        window.addEventListener('DOMContentLoaded', () => {
            const params = new URLSearchParams(window.location.search);
            const q = params.get('q') || params.get('s');
            if (q) {
                mainInput.value = q;
                performDiscoverySearch();
            } else {
                renderDiscovery([]);
            }
        });

        function performDiscoverySearch() {
            currentPage = 0; 
            const query = mainInput.value.toLowerCase();
            if (query.length < 2) {
                renderDiscovery([]);
                return;
            }

            const filtered = searchIndex.filter(item => {
                return item.title.toLowerCase().includes(query) || 
                       item.category.toLowerCase().includes(query) ||
                       item.excerpt.toLowerCase().includes(query);
            });

            renderDiscovery(filtered);
        }

        mainInput.addEventListener('input', performDiscoverySearch);

        chips.forEach(chip => {
            chip.addEventListener('click', () => {
                chips.forEach(c => {
                    c.classList.remove('active');
                    c.style.borderBottomColor = 'transparent';
                    c.style.color = '#888';
                });
                chip.classList.add('active');
                chip.style.borderBottomColor = '#111';
                chip.style.color = '#111';
                currentFilter = chip.dataset.filter;
                currentPage = 0; 
                performDiscoverySearch();
            });
        });
    </script>
<?php get_footer(); ?>
