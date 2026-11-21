/**
 * Maryam Ghabel Clinical — Main JavaScript.
 * - Mobile menu toggle
 * - Scroll animations (IntersectionObserver)
 * - Accessible focus states
 * - Sticky header shadow on scroll
 */
(function () {
    'use strict';

    /**
     * Helper: query an element safely.
     * @param {string} selector
     * @param {Element} [context=document]
     * @returns {Element|null}
     */
    function $(selector, context) {
        return (context || document).querySelector(selector);
    }

    /**
     * Helper: query all elements.
     * @param {string} selector
     * @param {Element} [context=document]
     * @returns {NodeListOf<Element>}
     */
    function $all(selector, context) {
        return (context || document).querySelectorAll(selector);
    }

    document.addEventListener('DOMContentLoaded', function () {
        initMobileMenu();
        initScrollAnimations();
        initStickyHeader();
        initSmoothAnchorScroll();
        initFormEnhancements();
        initKeyboardShortcuts();
    });

    /**
     * Mobile menu: toggle button + outside-click to close + ESC to close.
     */
    function initMobileMenu() {
        var toggle = $('.menu-toggle');
        var nav = $('#site-navigation');
        if (!toggle || !nav) {
            return;
        }

        toggle.addEventListener('click', function () {
            var expanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', String(!expanded));
            nav.classList.toggle('toggled');
            toggle.classList.toggle('is-active');
            document.body.classList.toggle('menu-open', !expanded);
        });

        // Close on outside click.
        document.addEventListener('click', function (event) {
            if (!nav.classList.contains('toggled')) {
                return;
            }
            if (!nav.contains(event.target) && !toggle.contains(event.target)) {
                closeMenu();
            }
        });

        // Close on ESC.
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && nav.classList.contains('toggled')) {
                closeMenu();
                toggle.focus();
            }
        });

        // Close when a nav link is clicked (mobile UX).
        var links = $all('#primary-menu a', nav);
        links.forEach(function (link) {
            link.addEventListener('click', function () {
                if (window.matchMedia('(max-width: 991px)').matches) {
                    closeMenu();
                }
            });
        });

        function closeMenu() {
            nav.classList.remove('toggled');
            toggle.classList.remove('is-active');
            toggle.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('menu-open');
        }
    }

    /**
     * Scroll-triggered animations using IntersectionObserver.
     */
    function initScrollAnimations() {
        var animatedEls = $all('.animate-on-scroll');
        if (!('IntersectionObserver' in window) || !animatedEls.length) {
            // Fallback: just reveal everything.
            animatedEls.forEach(function (el) {
                el.classList.add('is-visible');
            });
            return;
        }

        var observer = new IntersectionObserver(
            function (entries, obs) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            },
            {
                root: null,
                rootMargin: '0px 0px -10% 0px',
                threshold: 0.1,
            }
        );

        animatedEls.forEach(function (el) {
            observer.observe(el);
        });
    }

    /**
     * Sticky header: add shadow on scroll.
     */
    function initStickyHeader() {
        var header = $('.site-header');
        if (!header) {
            return;
        }

        var lastScroll = 0;

        function onScroll() {
            var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > 20) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }

            // Hide on scroll down, show on scroll up (mobile only).
            if (window.matchMedia('(max-width: 991px)').matches) {
                if (currentScroll > 200 && currentScroll > lastScroll && !document.body.classList.contains('menu-open')) {
                    header.style.transform = 'translateY(-100%)';
                } else {
                    header.style.transform = 'translateY(0)';
                }
            } else {
                header.style.transform = '';
            }

            lastScroll = currentScroll;
        }

        // Throttle with requestAnimationFrame.
        var ticking = false;
        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    onScroll();
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });
    }

    /**
     * Smooth scroll for in-page anchor links.
     */
    function initSmoothAnchorScroll() {
        var links = $all('a[href^="#"]:not([href="#"])');
        links.forEach(function (link) {
            link.addEventListener('click', function (event) {
                var href = link.getAttribute('href');
                if (!href || href.length < 2) {
                    return;
                }
                var target = document.querySelector(href);
                if (!target) {
                    return;
                }
                event.preventDefault();
                var headerHeight = ($('.site-header') ? $('.site-header').offsetHeight : 0) + 16;
                var top = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                window.scrollTo({
                    top: top,
                    behavior: 'smooth',
                });
                // Move focus to target after scroll.
                setTimeout(function () {
                    target.setAttribute('tabindex', '-1');
                    target.focus({ preventScroll: true });
                }, 600);
            });
        });
    }

    /**
     * Form enhancements: character counter for textareas.
     */
    function initFormEnhancements() {
        var forms = $all('form.booking-form, form.contact-form');
        forms.forEach(function (form) {
            var textarea = form.querySelector('textarea[maxlength]');
            if (!textarea) {
                return;
            }
            var max = parseInt(textarea.getAttribute('maxlength'), 10);
            if (!max || isNaN(max)) {
                return;
            }

            var counter = document.createElement('div');
            counter.className = 'char-counter';
            counter.setAttribute('aria-live', 'polite');
            counter.style.fontSize = '0.8rem';
            counter.style.color = 'var(--color-gold-dark)';
            counter.style.marginTop = '0.35rem';
            counter.style.textAlign = 'left';

            textarea.parentNode.appendChild(counter);

            function updateCounter() {
                var remaining = max - textarea.value.length;
                counter.textContent = remaining + ' / ' + max;
                if (remaining < 50) {
                    counter.style.color = '#c0392b';
                } else {
                    counter.style.color = 'var(--color-gold-dark)';
                }
            }

            textarea.addEventListener('input', updateCounter);
            updateCounter();
        });

        // Honeypot for native (non-WPForms) forms — lightweight anti-spam.
        forms.forEach(function (form) {
            var honeypot = document.createElement('div');
            honeypot.style.position = 'absolute';
            honeypot.style.left = '-9999px';
            honeypot.style.width = '1px';
            honeypot.style.height = '1px';
            honeypot.style.overflow = 'hidden';
            honeypot.setAttribute('aria-hidden', 'true');
            honeypot.innerHTML = '<label>اگر انسان هستید، این فیلد را خالی بگذارید.<input type="text" name="company_url" tabindex="-1" autocomplete="off"></label>';
            form.appendChild(honeypot);
        });
    }

    /**
     * Keyboard shortcut: "/" focuses search (if a search field exists on page).
     */
    function initKeyboardShortcuts() {
        document.addEventListener('keydown', function (event) {
            if (event.key !== '/' || event.ctrlKey || event.metaKey || event.altKey) {
                return;
            }
            var target = event.target;
            var tag = target.tagName.toLowerCase();
            if (tag === 'input' || tag === 'textarea' || tag === 'select' || target.isContentEditable) {
                return;
            }
            var search = document.querySelector('.search-field');
            if (search) {
                event.preventDefault();
                search.focus();
            }
        });
    }
})();
