/* XYLO Upgrade 17: Global activity popups
   Product purchase popups use the site's current active product/variant data from /ajax/global_activity_products.php.
   Usernames/topups remain simulated. Top-up amounts respect the ₱50 minimum. No tracking calls, no external libraries. */
(function() {
    'use strict';

    var path = (window.location.pathname || '').toLowerCase();
    var excluded = [
        '/admin/',
        '/login.php',
        '/register.php',
        '/logout.php',
        '/payment.php',
        '/payment_callback.php',
        '/test_gateway.php',
        '/update_token.php',
        '/telegram/'
    ];

    for (var i = 0; i < excluded.length; i++) {
        if (path.indexOf(excluded[i]) !== -1) return;
    }

    if (window.__xvGlobalActivityPopupsLoaded) return;
    window.__xvGlobalActivityPopupsLoaded = true;

    var users = [
        'Mark****', 'Jay****', 'Anna****', 'Migz****', 'Kyle****', 'Renz****',
        'Jhen****', 'Paulo****', 'Mika****', 'Lance****', 'Nico****', 'Rhea****',
        'Arvin****', 'Kian****', 'Elle****', 'Vince****', 'Ralph****', 'Jc****42'
    ];

    var topups = [50, 50, 50, 50, 70, 70, 100, 100, 100, 150, 150, 200, 200, 300, 500];
    var activeToast = null;
    var closeTimer = null;
    var nextTimer = null;
    var realProducts = [];
    var productFeedLoaded = false;
    var productFeedStarted = false;
    var cacheKey = 'xv_global_activity_products_v2';
    var cacheTtlMs = 15 * 60 * 1000;

    function pick(list) {
        return list[Math.floor(Math.random() * list.length)];
    }

    function peso(value) {
        return '₱' + Number(value).toLocaleString('en-PH', {
            minimumFractionDigits: Number(value) % 1 === 0 ? 0 : 2,
            maximumFractionDigits: 2
        });
    }

    function normalizeProductItem(item) {
        if (!item || typeof item !== 'object') return null;

        var name = String(item.name || item.product_name || '').trim();
        if (!name) return null;

        var duration = String(item.duration || 'Standard').trim();
        if (!duration) duration = 'Standard';

        var price = Number(item.price || item.price_user || 0);
        if (!isFinite(price) || price <= 0) return null;

        return {
            name: name.slice(0, 90),
            duration: duration.slice(0, 60),
            price: price
        };
    }

    function setRealProducts(items) {
        var next = [];
        if (Array.isArray(items)) {
            for (var i = 0; i < items.length; i++) {
                var normalized = normalizeProductItem(items[i]);
                if (normalized) next.push(normalized);
            }
        }
        realProducts = next;
        productFeedLoaded = true;
    }

    function loadCachedProducts() {
        try {
            var raw = window.localStorage ? window.localStorage.getItem(cacheKey) : null;
            if (!raw) return false;

            var cached = JSON.parse(raw);
            if (!cached || !cached.savedAt || !Array.isArray(cached.products)) return false;
            if ((Date.now() - Number(cached.savedAt)) > cacheTtlMs) return false;

            setRealProducts(cached.products);
            return realProducts.length > 0;
        } catch (e) {
            return false;
        }
    }

    function saveCachedProducts(items) {
        try {
            if (!window.localStorage) return;
            window.localStorage.setItem(cacheKey, JSON.stringify({
                savedAt: Date.now(),
                products: items
            }));
        } catch (e) {
            // Ignore storage failures.
        }
    }

    function loadProductFeed() {
        if (productFeedStarted) return;
        productFeedStarted = true;

        var hasUsableCache = loadCachedProducts();

        if (!window.fetch) {
            productFeedLoaded = true;
            return;
        }

        fetch('/ajax/global_activity_products.php', {
                method: 'GET',
                credentials: 'same-origin',
                cache: 'no-store',
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(function(response) {
                if (!response.ok) throw new Error('Product feed unavailable');
                return response.json();
            })
            .then(function(payload) {
                var products = payload && Array.isArray(payload.products) ? payload.products : [];
                setRealProducts(products);
                if (realProducts.length > 0) saveCachedProducts(realProducts);
            })
            .catch(function() {
                if (!hasUsableCache) setRealProducts([]);
            });
    }

    function scheduleNext() {
        window.clearTimeout(nextTimer);
        var delay = 10000 + Math.floor(Math.random() * 10001); // 10–20 seconds
        nextTimer = window.setTimeout(showActivity, delay);
    }

    function removeActive() {
        if (!activeToast) return;
        var node = activeToast;
        activeToast = null;
        node.classList.remove('xv-activity-show');
        node.classList.add('xv-activity-hide');
        window.setTimeout(function() {
            if (node && node.parentNode) node.parentNode.removeChild(node);
        }, 240);
    }

    function makePurchase() {
        var item = pick(realProducts);
        return {
            icon: '🛒',
            eyebrow: 'Someone bought a product',
            title: pick(users) + ' purchased ' + item.name,
            rows: [
                ['Duration', item.duration],
                ['Price', peso(item.price)]
            ]
        };
    }

    function makeTopup() {
        return {
            icon: '💸',
            eyebrow: 'Balance top up',
            title: pick(users) + ' topped up ' + peso(pick(topups)),
            rows: []
        };
    }

    function createToast(data) {
        var toast = document.createElement('section');
        toast.className = 'xv-activity-popup';
        toast.setAttribute('role', 'status');
        toast.setAttribute('aria-live', 'polite');

        var rowHtml = '';
        for (var i = 0; i < data.rows.length; i++) {
            rowHtml += '<div class="xv-activity-row"><span>' + escapeHtml(data.rows[i][0]) + '</span><strong>' + escapeHtml(data.rows[i][1]) + '</strong></div>';
        }

        toast.innerHTML = '' +
            '<button type="button" class="xv-activity-close" aria-label="Close activity popup">×</button>' +
            '<div class="xv-activity-main">' +
            '<div class="xv-activity-icon" aria-hidden="true">' + data.icon + '</div>' +
            '<div class="xv-activity-copy">' +
            '<div class="xv-activity-eyebrow">' + escapeHtml(data.eyebrow) + '</div>' +
            '<div class="xv-activity-title">' + escapeHtml(data.title) + '</div>' +
            rowHtml +
            '</div>' +
            '</div>';

        var closeBtn = toast.querySelector('.xv-activity-close');
        if (closeBtn) closeBtn.addEventListener('click', function() {
            window.clearTimeout(closeTimer);
            removeActive();
            scheduleNext();
        });

        return toast;
    }

    function escapeHtml(value) {
        return String(value).replace(/[&<>"']/g, function(char) {
            return ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            })[char];
        });
    }

    function injectStyle() {
        if (document.getElementById('xv-global-activity-popups-style')) return;
        var style = document.createElement('style');
        style.id = 'xv-global-activity-popups-style';
        style.textContent = '' +
            '.xv-activity-popup{position:fixed;right:18px;bottom:18px;z-index:9997;width:min(360px,calc(100vw - 24px));padding:14px 42px 14px 14px;border:1px solid rgba(255,255,255,.14);border-radius:18px;background:linear-gradient(135deg,rgba(17,24,39,.96),rgba(49,27,89,.94));box-shadow:0 20px 55px rgba(0,0,0,.38),inset 0 1px 0 rgba(255,255,255,.08);color:#fff;backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);opacity:0;transform:translate3d(14px,18px,0) scale(.98);transition:opacity .22s ease,transform .22s ease;font-family:inherit;pointer-events:auto}.xv-activity-show{opacity:1;transform:translate3d(0,0,0) scale(1)}.xv-activity-hide{opacity:0;transform:translate3d(12px,14px,0) scale(.985)}.xv-activity-main{display:flex;gap:12px;align-items:flex-start}.xv-activity-icon{display:grid;place-items:center;flex:0 0 auto;width:38px;height:38px;border-radius:14px;background:rgba(255,255,255,.10);box-shadow:inset 0 1px 0 rgba(255,255,255,.10);font-size:20px}.xv-activity-copy{min-width:0;flex:1}.xv-activity-eyebrow{font-size:11px;line-height:1.2;font-weight:800;letter-spacing:.08em;text-transform:uppercase;color:rgba(216,180,254,.92);margin-bottom:4px}.xv-activity-title{font-size:13px;line-height:1.35;font-weight:750;color:rgba(255,255,255,.96);overflow-wrap:anywhere}.xv-activity-row{display:flex;align-items:center;justify-content:space-between;gap:12px;margin-top:8px;padding-top:8px;border-top:1px solid rgba(255,255,255,.08);font-size:12px;color:rgba(255,255,255,.66)}.xv-activity-row strong{color:#fff;font-weight:800;text-align:right}.xv-activity-close{position:absolute;top:9px;right:10px;width:26px;height:26px;border:0;border-radius:999px;background:rgba(255,255,255,.08);color:rgba(255,255,255,.74);font-size:18px;line-height:1;cursor:pointer;transition:background .16s ease,color .16s ease,transform .16s ease}.xv-activity-close:hover{background:rgba(255,255,255,.16);color:#fff;transform:scale(1.04)}@media (max-width:640px){.xv-activity-popup{right:12px;bottom:12px;width:min(340px,calc(100vw - 24px));border-radius:16px;padding:13px 40px 13px 13px}.xv-activity-title{font-size:12.5px}.xv-activity-row{font-size:11.5px}}@media (prefers-reduced-motion:reduce){.xv-activity-popup,.xv-activity-close{transition:none!important}}';
        document.head.appendChild(style);
    }

    function showActivity() {
        if (document.hidden) {
            scheduleNext();
            return;
        }

        if (!productFeedStarted) loadProductFeed();

        injectStyle();
        removeActive();

        var canShowPurchase = realProducts.length > 0;
        var data = canShowPurchase && Math.random() < 0.58 ? makePurchase() : makeTopup();
        activeToast = createToast(data);
        document.body.appendChild(activeToast);

        window.requestAnimationFrame(function() {
            if (activeToast) activeToast.classList.add('xv-activity-show');
        });

        window.clearTimeout(closeTimer);
        closeTimer = window.setTimeout(function() {
            removeActive();
            scheduleNext();
        }, 5600);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            loadProductFeed();
            scheduleNext();
        }, {
            once: true
        });
    } else {
        loadProductFeed();
        scheduleNext();
    }
})();