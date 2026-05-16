/* XYLO Upgrade 04: 30% viewport lazy reveal for images, videos, and iframes.
   Safe behavior: no layout removal, no business logic changes. */
(function() {
    'use strict';

    var SELECTOR = 'img:not([data-no-lazy]), video:not([data-no-lazy]), iframe:not([data-no-lazy])';
    var REVEAL_CLASS = 'xylo-lazy-visible';
    var PENDING_CLASS = 'xylo-lazy-pending';
    var OBSERVED_ATTR = 'data-xylo-lazy-30';

    function installStyles() {
        if (document.getElementById('xylo-lazy-media-30-style')) return;
        var style = document.createElement('style');
        style.id = 'xylo-lazy-media-30-style';
        style.textContent =
            '.xylo-lazy-pending{opacity:0;}' +
            '.xylo-lazy-visible{opacity:1;transition:opacity .18s ease-out;}' +
            '@media (prefers-reduced-motion: reduce){.xylo-lazy-visible{transition:none;}}';
        document.head.appendChild(style);
    }

    function prepareMedia(el) {
        if (!el || el.nodeType !== 1 || el.getAttribute(OBSERVED_ATTR) === '1') return false;

        var tag = el.tagName ? el.tagName.toLowerCase() : '';
        if (tag === 'img') {
            if (!el.hasAttribute('loading')) el.setAttribute('loading', 'lazy');
            if (!el.hasAttribute('decoding')) el.setAttribute('decoding', 'async');
            if (!el.hasAttribute('fetchpriority')) el.setAttribute('fetchpriority', 'low');
        } else if (tag === 'iframe') {
            if (!el.hasAttribute('loading')) el.setAttribute('loading', 'lazy');
        } else if (tag === 'video') {
            if (!el.hasAttribute('preload')) el.setAttribute('preload', 'none');
            if (!el.hasAttribute('playsinline')) el.setAttribute('playsinline', '');
        }

        el.setAttribute(OBSERVED_ATTR, '1');
        el.classList.add(PENDING_CLASS);
        return true;
    }

    function reveal(el) {
        if (!el || el.classList.contains(REVEAL_CLASS)) return;
        el.classList.remove(PENDING_CLASS);
        el.classList.add(REVEAL_CLASS);

        if (el.tagName && el.tagName.toLowerCase() === 'video') {
            try {
                if (el.readyState === 0 && typeof el.load === 'function') el.load();
            } catch (e) {}
        }
    }

    function visibleRatio(el) {
        var rect = el.getBoundingClientRect();
        if (!rect.width || !rect.height) return 0;
        var vh = window.innerHeight || document.documentElement.clientHeight;
        var vw = window.innerWidth || document.documentElement.clientWidth;
        var visibleX = Math.max(0, Math.min(rect.right, vw) - Math.max(rect.left, 0));
        var visibleY = Math.max(0, Math.min(rect.bottom, vh) - Math.max(rect.top, 0));
        return (visibleX * visibleY) / (rect.width * rect.height);
    }

    function init() {
        installStyles();

        var observer;
        if ('IntersectionObserver' in window) {
            observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.intersectionRatio >= 0.3) {
                        reveal(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: [0, 0.3, 1]
            });
        }

        function scan(root) {
            var nodes = [];
            if (root && root.matches && root.matches(SELECTOR)) nodes.push(root);
            if (root && root.querySelectorAll) {
                nodes = nodes.concat(Array.prototype.slice.call(root.querySelectorAll(SELECTOR)));
            }

            nodes.forEach(function(el) {
                if (!prepareMedia(el)) return;
                if (visibleRatio(el) >= 0.3) {
                    reveal(el);
                } else if (observer) {
                    observer.observe(el);
                } else {
                    reveal(el);
                }
            });
        }

        scan(document);

        if ('MutationObserver' in window) {
            var mo = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    mutation.addedNodes && Array.prototype.forEach.call(mutation.addedNodes, function(node) {
                        if (node && node.nodeType === 1) scan(node);
                    });
                });
            });
            mo.observe(document.documentElement, {
                childList: true,
                subtree: true
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init, {
            once: true
        });
    } else {
        init();
    }
})();