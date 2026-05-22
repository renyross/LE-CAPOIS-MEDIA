<?php
/**
 * Template Name: Article - Pharmacie
 * Template Post Type: post, page
 *
 * @package ORA
 */

get_header(); 

$is_elementor = false;
if ( is_singular() ) {
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
<main>
        <section class="standard-section">
            <div class="container-full">
                <!-- Article Header -->
                <div class="article-header" style="max-width: 1000px; margin: 0 auto;">
                    <span class="article-category">SANTÉ PUBLIQUE & ENQUÊTE</span>
                    <h1 class="article-title">De fausses pharmacies sans autorisation devant l'hôpital La Paix</h1>
                    <p class="article-subtitle">Une menace sanitaire rampante au cœur de la capitale haïtienne, sous les yeux des autorités impuissantes.</p>
                    
                    <div class="article-meta">
                        PAR LA RÉDACTION — PUBLIÉ LE 18 MAI 2026 — 8 MIN DE LECTURE
                        <div class="social-share">
                            <a href="#" class="social-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.148-.67-1.613-.918-2.213-.242-.584-.487-.504-.67-.514-.173-.01-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-4.734 6.162h-.011c-2.13 0-4.218-.573-6.04-1.654L3 20l1.127-4.108c-1.189-2.062-1.819-4.417-1.819-6.812 0-7.391 6.012-13.403 13.404-13.403 3.582 0 6.95 1.394 9.481 3.926 2.532 2.533 3.926 5.9 3.925 9.477 0 7.392-6.013 13.404-13.405 13.404"/></svg></a>
                            <a href="#" class="social-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.466 4.757l9.288 12.247-3.606 4.122-9.288-12.247 3.606-4.122zm-3.328-2.507L.636 14.5 4.242 18.622 12.744 6.37l-3.606-4.12zm14.228 14.228l-3.606 4.122 3.606-4.122z"/></svg></a>
                            <a href="#" class="social-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.325V1.325C24 .593 23.407 0 22.675 0z"/></svg></a>
                        </div>
                    </div>
                </div>
                <!-- Hero Cover aligned with header margins - Landscape Rectangle Orientation -->
                <div class="article-hero-cover" style="max-width: 1000px; margin: 40px auto 20px; aspect-ratio: 16/9; overflow: hidden; position: relative; border-radius: 4px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_med_legal_color_1774481073690.png" alt="Pharmacies Sauvages" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </div>
                <p class="article-caption" style="max-width: 1000px; margin: 0 auto 20px; font-size: 13px; color: #999; font-style: italic;">Crédits : ARCHIVES POST MEDIA — Médicaments sauvages vendus à la sauvette devant l'Hôpital La Paix.</p>
            </div>
        </section>

        <section class="standard-section" style="padding-top: 0;">
            <div class="container-full">
                <!-- Article Content Grid with Sidebar -->
                <div class="article-content-wrapper" style="max-width: 1000px; margin: 0 auto; display: block;">
                    <div class="article-main-body" style="max-width: 800px; margin: 0 auto;">
                        <p class="article-lead">
                            Devant les portes de l'Hôpital Universitaire de la Paix, à Delmas 33, le spectacle est quotidien mais terrifiant. Des étals improvisés, des boîtes en carton remplies de comprimés exposées au soleil de plomb et à la poussière de la rue, font office de pharmacies de fortune. Sans aucune autorisation du Ministère de la Santé Publique et de la Population (MSPP), des marchands ambulants distribuent des antibiotiques, des antalgiques et d'autres molécules sensibles, transformant les abords d'un des plus grands centres hospitaliers du pays en un marché de la mort à ciel ouvert.
                        </p>

                        <h3>L'anarchie médicamenteuse aux portes de l'hôpital</h3>
                        <p>
                            Le constat est sans appel. À quelques mètres seulement de l'entrée principale de l'hôpital La Paix, des dizaines de kiosques informels proposent à la vente une panoplie de médicaments dont la provenance et les conditions de conservation violent toutes les normes pharmaceutiques internationales. Le soleil brûlant d'Haïti altère les principes actifs de ces produits chimiques, les rendant soit inefficaces, soit extrêmement toxiques.
                        </p>
                        <p>
                            "Les patients sortent de l'hôpital avec une ordonnance, et pour économiser quelques gourdes ou par simple commodité, ils achètent leurs produits directement sur le trottoir", déplore un médecin interne sous couvert d'anonymat. "Ce qu'ils ignorent, c'est qu'ils achètent souvent des poisons déguisés ou des contrefaçons inopérantes."
                        </p>

                        <div class="pull-quote">
                            "Un médicament exposé au soleil et à la poussière n'est plus un remède, c'est un danger mortel pour l'organisme."
                        </div>

                        <h3>L'absence d'autorisation et le vide réglementaire</h3>
                        <p>
                            Aucune de ces structures informelles ne dispose d'une licence d'exploitation ou de la présence obligatoire d'un pharmacien diplômé. Les vendeurs, n'ayant reçu aucune formation médicale ou pharmaceutique, s'improvisent prescripteurs. Ils conseillent les dosages au jugé, encouragent l'automédication sauvage et distribuent des antibiotiques à large spectre sans aucune ordonnance.
                        </p>
                        <p>
                            Cette prolifération sauvage témoigne d'un manque criant de régulation et de contrôle de la part de la Direction de la Pharmacie, du Médicament et de la Médecine Traditionnelle (DPM/MT) du MSPP. Malgré les nombreuses campagnes d'avertissement théoriques, aucune action concrète d'assainissement ou de saisie n'est entreprise sur le terrain pour nettoyer les alentours de l'Hôpital La Paix.
                        </p>

                        <h3>Un business de la misère aux conséquences mortelles</h3>
                        <p>
                            Ce marché noir du médicament prospère sur le terreau de la misère économique et de la défaillance du système de protection sociale. Face au coût élevé des pharmacies privées autorisées, le consommateur haïtien se tourne vers la solution la moins onéreuse, au péril de sa vie.
                        </p>
                        <p>
                            Les cas d'insuffisances rénales aiguës, d'intoxications sévères et de résistance accrue aux antibiotiques se multiplient dans les salles d'urgence de l'hôpital lui-même, ironiquement provoqués par les produits achetés juste devant ses grilles. Pour les spécialistes de la santé, si rien n'est fait pour éradiquer ces pharmacies sauvages et réglementer strictement la distribution du médicament en Haïti, la crise sanitaire ne fera que s'aggraver.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- VOUS POURRIEZ AIMER AUSSI - Horizontal Portrait Grid -->
        <section class="standard-section" style="background: #ffffff; border-top: 1px solid #eee; padding: 40px 0 80px;">
            <div class="container-full" style="max-width: 800px; margin: 0 auto;">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 30px;">
                    <span style="width: 12px; height: 12px; background: #ffcc00; border-radius: 50%;"></span>
                    <h2 style="font-size: 20px; font-weight: 900; letter-spacing: 0.1em; margin: 0;">Vous pourriez aimer aussi</h2>
                </div>
                
                <div class="carousel-wrapper" style="position: relative; width: 100%;">
                    <button class="carousel-nav-btn prev" style="position: absolute; top: 50%; left: -50px; transform: translateY(-50%); width: 44px; height: 44px; background: white; border: none; border-radius: 50%; box-shadow: 0 4px 15px rgba(0,0,0,0.1); color: #333; font-size: 24px; display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 10; transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);">‹</button>
                    
                    <div class="recommendations-portrait-grid" style="display: flex; overflow-x: auto; gap: 20px; scroll-behavior: smooth; scrollbar-width: none; -ms-overflow-style: none; scroll-snap-type: x mandatory; padding: 10px 0;">
                        <style>
                            .recommendations-portrait-grid::-webkit-scrollbar { display: none; }
                            .portrait-rec-card { flex: 0 0 170px; scroll-snap-align: start; cursor: pointer; transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1); min-width: 0; text-decoration: none; display: block; }
                            .portrait-rec-card:hover { transform: translateY(-10px); }
                            .portrait-rec-card .image-thumb { box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; }
                            .portrait-rec-card:hover .image-thumb { box-shadow: 0 12px 24px rgba(0,0,0,0.12); }
                            
                            @media (max-width: 900px) {
                                .carousel-nav-btn { display: none !important; }
                                .portrait-rec-card { flex: 0 0 150px; }
                                .recommendations-portrait-grid { padding-left: 0; padding-right: 0; }
                            }
                        </style>
                        
                        <!-- Card 1 -->
                        <a href="article-krisla.html" class="portrait-rec-card">
                            <div class="image-thumb" style="width: 100%; aspect-ratio: 2/3; border-radius: 4px; overflow: hidden; margin-bottom: 12px; background: #f5f5f5;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/krisla-hero.png" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h4 style="font-size: 13px; font-weight: 800; line-height: 1.3; margin: 0; color: #111;">Le système de contrôle implacable de Krisla...</h4>
                        </a>

                        <!-- Card 2 -->
                        <a href="index.html" class="portrait-rec-card">
                            <div class="image-thumb" style="width: 100%; aspect-ratio: 2/3; border-radius: 4px; overflow: hidden; margin-bottom: 12px; background: #f5f5f5;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_maritime_color_1774481105113.png" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h4 style="font-size: 13px; font-weight: 800; line-height: 1.3; margin: 0; color: #111;">Des bateaux paient les policiers de la...</h4>
                        </a>

                        <!-- Card 3 -->
                        <a href="index.html" class="portrait-rec-card">
                            <div class="image-thumb" style="width: 100%; aspect-ratio: 2/3; border-radius: 4px; overflow: hidden; margin-bottom: 12px; background: #f5f5f5;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/selection_thumb_sec_sports_color_1774481090048.png" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h4 style="font-size: 13px; font-weight: 800; line-height: 1.3; margin: 0; color: #111;">Des commissariats collectent des fonds...</h4>
                        </a>

                        <!-- Card 4 -->
                        <a href="index.html" class="portrait-rec-card">
                            <div class="image-thumb" style="width: 100%; aspect-ratio: 2/3; border-radius: 4px; overflow: hidden; margin-bottom: 12px; background: #f5f5f5;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/color_diplomacy_1774872692228.png" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h4 style="font-size: 13px; font-weight: 800; line-height: 1.3; margin: 0; color: #111;">Les nouvelles alliances en Caraïbe</h4>
                        </a>

                        <!-- Card 5 -->
                        <a href="index.html" class="portrait-rec-card">
                            <div class="image-thumb" style="width: 100%; aspect-ratio: 2/3; border-radius: 4px; overflow: hidden; margin-bottom: 12px; background: #f5f5f5;">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/color_justice_1774872712222.png" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h4 style="font-size: 13px; font-weight: 800; line-height: 1.3; margin: 0; color: #111;">Réforme du système judiciaire haïtien</h4>
                        </a>
                    </div>
                    
                    <button class="carousel-nav-btn next" style="position: absolute; top: 50%; right: -50px; transform: translateY(-50%); width: 44px; height: 44px; background: white; border: none; border-radius: 50%; box-shadow: 0 4px 15px rgba(0,0,0,0.1); color: #333; font-size: 24px; display: flex; align-items: center; justify-content: center; cursor: pointer; z-index: 10; transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);">›</button>
                </div>
            </div>
        </section>
    </main>
<script>
        function toggleMobileMenu() {
            document.querySelector('.sidebar').classList.toggle('open');
            document.querySelector('.burger-menu').classList.toggle('open');
            document.querySelector('.menu-overlay').classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        }

        // Carousel Logic for recommendations
        const grid = document.querySelector('.recommendations-portrait-grid');
        const prevBtn = document.querySelector('.carousel-nav-btn.prev');
        const nextBtn = document.querySelector('.carousel-nav-btn.next');

        if (grid && prevBtn && nextBtn) {
            nextBtn.addEventListener('click', () => {
                grid.scrollBy({ left: 360, behavior: 'smooth' });
            });

            prevBtn.addEventListener('click', () => {
                grid.scrollBy({ left: -360, behavior: 'smooth' });
            });

            grid.addEventListener('scroll', () => {
                prevBtn.style.opacity = grid.scrollLeft <= 5 ? '0.3' : '1';
                prevBtn.style.cursor = grid.scrollLeft <= 5 ? 'not-allowed' : 'pointer';
                
                const isAtEnd = grid.scrollLeft + grid.offsetWidth >= grid.scrollWidth - 5;
                nextBtn.style.opacity = isAtEnd ? '0.3' : '1';
                nextBtn.style.cursor = isAtEnd ? 'not-allowed' : 'pointer';
            });

            // Initial state
            prevBtn.style.opacity = '0.3';
            prevBtn.style.cursor = 'not-allowed';
        }
    </script>
<?php endif; ?>

<?php get_footer(); ?>
