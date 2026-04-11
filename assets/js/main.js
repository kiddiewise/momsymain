document.addEventListener('DOMContentLoaded', function () {
    var root = document.documentElement;
    var header = document.querySelector('.site-header');
    var toggle = document.querySelector('.nav-toggle');
    var navigation = document.querySelector('.site-navigation');
    var navLinks = navigation ? navigation.querySelectorAll('a') : [];
    var mobileQuery = window.matchMedia('(max-width: 720px)');
    var reducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    var revealNodes = document.querySelectorAll('[data-reveal]');
    var sections = document.querySelectorAll('section[id]');
    var tiltNodes = document.querySelectorAll('.js-tilt');
    var ticking = false;

    function syncVisualState() {
        var scrollY = window.scrollY || window.pageYOffset;
        var limitedShift = Math.min(scrollY * 0.08, 28);
        var strongShift = Math.min(scrollY * 0.12, 48);
        var rotation = Math.min(scrollY * 0.01, 4.5);
        var viewportHeight = window.innerHeight || 1;
        var progress = Math.min(scrollY / viewportHeight, 3);

        root.style.setProperty('--scroll-shift', limitedShift.toFixed(2) + 'px');
        root.style.setProperty('--scroll-shift-strong', strongShift.toFixed(2) + 'px');
        root.style.setProperty('--scroll-rotate', rotation.toFixed(2) + 'deg');
        root.style.setProperty('--scroll-progress', progress.toFixed(2));

        if (header) {
            header.classList.toggle('is-scrolled', scrollY > 12);
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

    function setupRevealAnimations() {
        if (!revealNodes.length) {
            return;
        }

        if (reducedMotionQuery.matches || !('IntersectionObserver' in window)) {
            revealNodes.forEach(function (node) {
                node.classList.add('is-visible');
            });
            return;
        }

        var revealObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        }, {
            threshold: 0.16,
            rootMargin: '0px 0px -10% 0px'
        });

        revealNodes.forEach(function (node) {
            revealObserver.observe(node);
        });
    }

    function setupActiveNavigation() {
        if (!sections.length || !navLinks.length || !('IntersectionObserver' in window)) {
            return;
        }

        var linkMap = {};
        navLinks.forEach(function (link) {
            var href = link.getAttribute('href');
            if (href && href.charAt(0) === '#') {
                linkMap[href.substring(1)] = link;
            }
        });

        var sectionObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) {
                    return;
                }

                navLinks.forEach(function (link) {
                    link.classList.remove('is-active');
                });

                var activeLink = linkMap[entry.target.id];
                if (activeLink) {
                    activeLink.classList.add('is-active');
                }
            });
        }, {
            threshold: 0.4,
            rootMargin: '-18% 0px -38% 0px'
        });

        sections.forEach(function (section) {
            sectionObserver.observe(section);
        });
    }

    function setupTiltEffects() {
        if (!tiltNodes.length || reducedMotionQuery.matches) {
            return;
        }

        tiltNodes.forEach(function (node) {
            node.addEventListener('pointermove', function (event) {
                var rect = node.getBoundingClientRect();
                var offsetX = (event.clientX - rect.left) / rect.width;
                var offsetY = (event.clientY - rect.top) / rect.height;
                var rotateY = (offsetX - 0.5) * 8;
                var rotateX = (0.5 - offsetY) * 8;

                node.style.setProperty('--tilt-x', rotateY.toFixed(2) + 'deg');
                node.style.setProperty('--tilt-y', rotateX.toFixed(2) + 'deg');
            });

            node.addEventListener('pointerleave', function () {
                node.style.setProperty('--tilt-x', '0deg');
                node.style.setProperty('--tilt-y', '0deg');
            });
        });
    }

    syncVisualState();
    syncMenuForViewport();
    setupRevealAnimations();
    setupActiveNavigation();
    setupTiltEffects();

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
