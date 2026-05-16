/* XV UI defaults + migration
   Keeps UI preference features, but prevents old stored prefs from locking users into an outdated look.
   If XV_UI_VERSION changes, we clear known UI override keys so the newest design becomes the default.
*/
(function() {
    try {
        var v = (window.XV_UI_VERSION != null) ? String(window.XV_UI_VERSION) : '1';
        var verKey = 'xv_ui_version';
        var prev = null;
        try {
            prev = localStorage.getItem(verKey);
        } catch (e) {
            prev = null;
        }

        if (prev !== v) {
            // Known UI override keys from older builds / experiments.
            var keys = [
                'theme',
                'darkMode',
                'layoutMode',
                'compactMode',
                'vipStyle',
                'xv_theme',
                'xv_layout',
                'xv_density',
                'xv_vip_style',
                'xv_ui_mode'
            ];

            for (var i = 0; i < keys.length; i++) {
                try {
                    localStorage.removeItem(keys[i]);
                } catch (e) {}
            }

            try {
                localStorage.setItem(verKey, v);
            } catch (e) {}
        }
    } catch (e) {
        // Ignore: storage may be blocked.
    }
})();


(function() {
    var root = document.documentElement;
    root.classList.add('xv-render-stable');

    var zoomTimer = null;

    function pulseZoomState() {
        root.classList.add('xv-zooming');
        if (zoomTimer) {
            clearTimeout(zoomTimer);
        }
        zoomTimer = setTimeout(function() {
            root.classList.remove('xv-zooming');
        }, 260);
    }

    function inViewport(el, pad) {
        try {
            var r = el.getBoundingClientRect();
            var w = window.innerWidth || document.documentElement.clientWidth || 0;
            var h = window.innerHeight || document.documentElement.clientHeight || 0;
            var p = pad || 0;
            return r.bottom >= -p && r.right >= -p && r.top <= h + p && r.left <= w + p;
        } catch (e) {
            return false;
        }
    }

    function stabilizeImages() {
        var imgs = document.querySelectorAll('img[loading="lazy"], img[decoding]');
        var eagerCount = 0;
        for (var i = 0; i < imgs.length; i++) {
            var img = imgs[i];
            img.classList.add('xv-lazy-managed');
            if (img.complete) {
                img.classList.remove('xv-is-loading');
                img.classList.add('xv-is-ready');
            } else {
                img.classList.add('xv-is-loading');
                img.addEventListener('load', function() {
                    this.classList.remove('xv-is-loading');
                    this.classList.add('xv-is-ready');
                }, {
                    once: true
                });
                img.addEventListener('error', function() {
                    this.classList.remove('xv-is-loading');
                    this.classList.add('xv-is-ready');
                }, {
                    once: true
                });
            }
            if (eagerCount < 24 && inViewport(img, 700)) {
                try {
                    img.loading = 'eager';
                } catch (e) {}
                try {
                    img.fetchPriority = eagerCount < 8 ? 'high' : 'auto';
                } catch (e) {}
                eagerCount++;
            }
        }
    }

    function debounce(fn, wait) {
        var t = null;
        return function() {
            if (t) {
                clearTimeout(t);
            }
            t = setTimeout(fn, wait);
        };
    }

    var onViewportChange = debounce(function() {
        pulseZoomState();
        stabilizeImages();
    }, 80);

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', stabilizeImages, {
            once: true
        });
    } else {
        stabilizeImages();
    }
    window.addEventListener('resize', onViewportChange, {
        passive: true
    });
    window.addEventListener('orientationchange', onViewportChange, {
        passive: true
    });
    if (window.visualViewport) {
        window.visualViewport.addEventListener('resize', onViewportChange, {
            passive: true
        });
        window.visualViewport.addEventListener('scroll', onViewportChange, {
            passive: true
        });
    }
})();