/**
 * Search Logic for LE CAPOIS / POST
 * Handles the premium search overlay interactions and real-time filtering.
 */

const searchOverlay = document.getElementById('searchOverlay');
const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults');
const closeSearchBtn = document.getElementById('closeSearch');

function openSearch() {
    if (!searchOverlay) return;
    searchOverlay.classList.add('active');
    document.body.classList.add('no-scroll');
    setTimeout(() => searchInput && searchInput.focus(), 300);
}

function closeSearch() {
    if (!searchOverlay) return;
    searchOverlay.classList.remove('active');
    document.body.classList.remove('no-scroll');
    if (searchInput) searchInput.value = '';
    renderResults([]);
}

function performSearch(query) {
    if (!query || query.length < 2) {
        renderResults([]);
        return;
    }

    const filtered = searchIndex.filter(item => {
        const titleMatch = item.title.toLowerCase().includes(query.toLowerCase());
        const categoryMatch = item.category.toLowerCase().includes(query.toLowerCase());
        const excerptMatch = item.excerpt.toLowerCase().includes(query.toLowerCase());
        return titleMatch || categoryMatch || excerptMatch;
    });

    renderResults(filtered);
}

function renderResults(results) {
    if (!searchResults) return;
    
    if (results.length === 0) {
        searchResults.innerHTML = '';
        return;
    }

    searchResults.innerHTML = results.map(item => `
        <a href="${item.url}" class="search-result-item">
            <div class="result-category">${item.category}</div>
            <h3 class="result-title">${item.title}</h3>
            <p class="result-excerpt">${item.excerpt}</p>
        </a>
    `).join('');
}

// Event Listeners
if (searchInput) {
    searchInput.addEventListener('input', (e) => performSearch(e.target.value));
}

if (closeSearchBtn) {
    closeSearchBtn.addEventListener('click', closeSearch);
}

// Global ESC key to close search
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeSearch();
});

// Initialize triggers (Sidebar & Mobile)
document.addEventListener('DOMContentLoaded', () => {
    // Target buttons that contain "Rechercher"
    const triggers = document.querySelectorAll('.sidebar-actions-btn, .sidebar-nav a');
    triggers.forEach(trigger => {
        if (trigger.textContent.trim().includes('Rechercher')) {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                openSearch();
            });
        }
    });

    // Handle mobile burger menu "Rechercher" if it exists
    const mobileSearch = document.querySelector('.mobile-search-btn');
    if (mobileSearch) {
        mobileSearch.addEventListener('click', (e) => {
            e.preventDefault();
            openSearch();
        });
    }
});
