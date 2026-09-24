(() => {
    const pageLinks = {
        'beranda': 'beranda',
        'tentang-kami': 'tentang-kami',
        'program': 'program',
        'kegiatan': 'kegiatan',
        'cerita-kami': 'cerita-kami',
        'kontak': 'kontak',
        'gabung-komunitas': 'kontak#contactForm'
    };

    const navigationItems = [
        { key: 'beranda', label: 'Beranda' },
        { key: 'tentang-kami', label: 'Tentang Kami' },
        { key: 'program', label: 'Program' },
        { key: 'kegiatan', label: 'Kegiatan' },
        { key: 'cerita-kami', label: 'Cerita Kami' },
        { key: 'kontak', label: 'Kontak' }
    ];

    const logoSource = 'https://lh3.googleusercontent.com/aida-public/AB6AXuBlDgDF3UZJEuAkJy1We6L7TsBztJKORIPw6U2Z8QHh0C61rZaGR-LYpGNO7sY8qZ5N2BvV2TaCu1p6JVLyR0RCpzgIrP7O799PhCwFsrPchAtmJcEOO8qh5BkLkAxFLSpIw5VRdbDov9jhN7FVFWtYoAjOtd32B2zRwYVcrykF7flE2SdKFzDwk_WYz5FGy30-QHWkpRge8DL0_ealXDgkTS9fVL7gvU6m1zz9IuUSjpcMbg8oI5cy5ygynQe1ptCzVg';

    const desktopActiveClasses = 'transition-all text-primary font-bold bg-surface-container rounded-full px-space-md py-space-xs';
    const desktopInactiveClasses = 'font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-space-sm py-space-xs rounded-full transition-all';
    const mobileActiveClasses = 'transition-all text-primary font-bold bg-surface-container rounded-2xl px-space-md py-space-sm';
    const mobileInactiveClasses = 'font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-space-md py-space-sm rounded-2xl transition-all';

    function currentPageKey() {
        const currentFile = window.location.pathname.split('/').pop().toLowerCase() || 'index.html';
        const fileToKey = {
            '': 'beranda',
            'index.html': 'beranda',
            'about_us.html': 'tentang-kami',
            'program_us.html': 'program',
            'kegiatan_us.html': 'kegiatan',
            'story_us.html': 'cerita-kami',
            'contact_us.html': 'kontak'
        };

        if (fileToKey[currentFile]) {
            return fileToKey[currentFile];
        }

        const currentItem = navigationItems.find((item) => pageLinks[item.key].split('#')[0] === currentFile);
        return currentItem ? currentItem.key : 'beranda';
    }

    function renderNavigationItems(currentKey, mobile = false) {
        return navigationItems.map((item) => {
            const isActive = item.key === currentKey;
            const classes = mobile
                ? (isActive ? mobileActiveClasses : mobileInactiveClasses)
                : (isActive ? desktopActiveClasses : desktopInactiveClasses);
            const ariaCurrent = isActive ? ' aria-current="page"' : '';

            return `<a class="${classes}" data-path="${item.key}" href="${pageLinks[item.key]}"${ariaCurrent}>${item.label}</a>`;
        }).join('');
    }

    function renderHeader(currentKey) {
        return `
            <header class="fixed top-0 left-0 right-0 w-full z-50 bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(30,48,38,0.06)]">
                <div class="h-20 max-w-[1280px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between">
                    <a class="flex items-center gap-space-sm group" data-path="beranda" href="${pageLinks.beranda}">
                        <div class="w-11 h-11 rounded-full overflow-hidden flex items-center justify-center shadow-sm bg-surface-container-lowest">
                            <img alt="Teman Seiring Logo" class="w-full h-full object-cover" src="${logoSource}">
                        </div>
                        <div class="flex flex-col">
                            <span class="font-headline-sm text-headline-sm text-primary tracking-tight leading-tight">Teman Seiring</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant hidden sm:inline-block">Bertumbuh Bersama, Berdampak Nyata</span>
                        </div>
                    </a>
                    <nav class="hidden lg:flex items-center gap-space-md" aria-label="Navigasi utama">
                        ${renderNavigationItems(currentKey)}
                    </nav>
                    <div class="flex items-center gap-space-sm">
                        <a class="hidden sm:inline-flex items-center justify-center font-label-lg text-label-lg bg-secondary text-on-secondary px-space-lg py-space-sm rounded-full shadow-[0_2px_8px_rgba(161,62,40,0.25)] hover:bg-secondary-container hover:text-on-secondary-container transition-all" data-path="gabung-komunitas" href="${pageLinks['gabung-komunitas']}">
                            Gabung Bersama Kami
                        </a>
                        <div class="flex items-center gap-space-xs pl-space-xs">
                            <img alt="Profile" class="w-8 h-8 rounded-full object-cover" src="${logoSource}">
                            <button aria-controls="site-mobile-menu" aria-expanded="false" aria-label="Buka Menu Navigasi" class="lg:hidden p-space-xs text-on-surface-variant hover:text-on-surface rounded-lg hover:bg-surface-container-high transition-colors" id="site-menu-button" type="button">
                                <span class="material-symbols-outlined text-2xl" id="site-menu-icon">menu</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:hidden border-t border-outline-variant/40 bg-surface/95 backdrop-blur-xl shadow-lg" id="site-mobile-menu">
                    <nav class="max-w-[1280px] mx-auto px-margin-mobile py-space-sm flex flex-col gap-space-xs" aria-label="Navigasi mobile">
                        ${renderNavigationItems(currentKey, true)}
                        <a class="mt-space-xs inline-flex items-center justify-center font-label-lg text-label-lg bg-secondary text-on-secondary px-space-lg py-space-sm rounded-full shadow-[0_2px_8px_rgba(161,62,40,0.25)] hover:bg-secondary-container hover:text-on-secondary-container transition-all" data-path="gabung-komunitas" href="${pageLinks['gabung-komunitas']}">
                            Gabung Bersama Kami
                        </a>
                    </nav>
                </div>
            </header>`;
    }

    function updatePathLinks() {
        document.querySelectorAll('a[data-path]').forEach((link) => {
            const target = pageLinks[link.dataset.path];
            if (target) {
                link.setAttribute('href', target);
            }
        });
    }

    function setupMobileMenu() {
        const menuButton = document.getElementById('site-menu-button');
        const menu = document.getElementById('site-mobile-menu');
        const menuIcon = document.getElementById('site-menu-icon');

        if (!menuButton || !menu || !menuIcon) {
            return;
        }

        const setMenuState = (isOpen) => {
            menu.classList.toggle('hidden', !isOpen);
            menuButton.setAttribute('aria-expanded', String(isOpen));
            menuButton.setAttribute('aria-label', isOpen ? 'Tutup Menu Navigasi' : 'Buka Menu Navigasi');
            menuIcon.textContent = isOpen ? 'close' : 'menu';
        };

        menuButton.addEventListener('click', () => {
            setMenuState(menu.classList.contains('hidden'));
        });

        menu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => setMenuState(false));
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                setMenuState(false);
            }
        });
    }

    const navbarHost = document.querySelector('[data-navbar]');
    if (!navbarHost) {
        return;
    }

    navbarHost.innerHTML = renderHeader(currentPageKey());
    updatePathLinks();
    setupMobileMenu();
})();
