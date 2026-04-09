document.addEventListener('DOMContentLoaded', function () {
    var root = document.documentElement;
    var header = document.querySelector('.site-header');
    var toggle = document.querySelector('.nav-toggle');
    var navigation = document.querySelector('.site-navigation');
    var navLinks = navigation ? navigation.querySelectorAll('a') : [];
    var mobileQuery = window.matchMedia('(max-width: 720px)');
    var ticking = false;

    function syncVisualState() {
        var scrollY = window.scrollY || window.pageYOffset;
        var limitedShift = Math.min(scrollY * 0.08, 26);
        var strongShift = Math.min(scrollY * 0.12, 42);
        var rotation = Math.min(scrollY * 0.01, 3.5);

        if (!header) {
            root.style.setProperty('--scroll-shift', limitedShift.toFixed(2) + 'px');
            root.style.setProperty('--scroll-shift-strong', strongShift.toFixed(2) + 'px');
            root.style.setProperty('--scroll-rotate', rotation.toFixed(2) + 'deg');
        } else {
            header.classList.toggle('is-scrolled', scrollY > 12);
            root.style.setProperty('--scroll-shift', limitedShift.toFixed(2) + 'px');
            root.style.setProperty('--scroll-shift-strong', strongShift.toFixed(2) + 'px');
            root.style.setProperty('--scroll-rotate', rotation.toFixed(2) + 'deg');
        }
    }

    function requestVisualSync() {
        if (ticking) {
            return;
        }

        ticking = true;
        window.requestAnimationFrame(function () {
            syncVisualState();
            ticking = false;
        });
    }

    function closeMenu() {
        if (!toggle || !navigation) {
            return;
        }

        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Menüyü aç');
        navigation.classList.remove('is-open');
        document.body.classList.remove('menu-open');
    }

    function openMenu() {
        if (!toggle || !navigation) {
            return;
        }

        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Menüyü kapat');
        navigation.classList.add('is-open');
        document.body.classList.add('menu-open');
    }

    function syncMenuForViewport() {
        if (!toggle || !navigation) {
            return;
        }

        if (!mobileQuery.matches) {
            navigation.classList.remove('is-open');
            document.body.classList.remove('menu-open');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Menüyü aç');
        }
    }

    syncVisualState();
    syncMenuForViewport();

    window.addEventListener('scroll', requestVisualSync, { passive: true });
    window.addEventListener('resize', function () {
        syncMenuForViewport();
        requestVisualSync();
    });

    if (!toggle || !navigation) {
        return;
    }

    toggle.addEventListener('click', function () {
        var expanded = toggle.getAttribute('aria-expanded') === 'true';

        if (expanded) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    navLinks.forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

    document.addEventListener('click', function (event) {
        if (!mobileQuery.matches || !navigation.classList.contains('is-open')) {
            return;
        }

        if (!navigation.contains(event.target) && !toggle.contains(event.target)) {
            closeMenu();
        }
    });
});
