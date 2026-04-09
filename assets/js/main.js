document.addEventListener('DOMContentLoaded', function () {
    var header = document.querySelector('.site-header');
    var toggle = document.querySelector('.nav-toggle');
    var navigation = document.querySelector('.site-navigation');
    var navLinks = navigation ? navigation.querySelectorAll('a') : [];
    var mobileQuery = window.matchMedia('(max-width: 720px)');

    function syncHeaderState() {
        if (!header) {
            return;
        }

        header.classList.toggle('is-scrolled', window.scrollY > 12);
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

    syncHeaderState();
    syncMenuForViewport();

    window.addEventListener('scroll', syncHeaderState, { passive: true });
    window.addEventListener('resize', syncMenuForViewport);

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
