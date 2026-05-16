/* XV Notifications polling (User/Reseller)
   - Updates badge count in header tabs
   - On notifications page, refreshes list via partial fetch
   - Shows toast on new notifications
*/
(function() {
    function qs(sel, root) {
        return (root || document).querySelector(sel);
    }

    function qsa(sel, root) {
        return Array.prototype.slice.call((root || document).querySelectorAll(sel));
    }

    function toast(msg, opts) {
        opts = opts || {};
        try {
            var wrap = document.createElement('div');
            wrap.className = 'fixed top-4 right-4 z-[9999] max-w-[90vw] sm:max-w-sm';
            wrap.innerHTML = '' +
                '<div class="backdrop-blur-md bg-white/10 border border-white/15 rounded-2xl px-4 py-3 shadow-lg shadow-black/20 flex items-start gap-3 cursor-pointer">' +
                '<div class="mt-0.5 text-accent"><i class="bi bi-bell text-xl"></i></div>' +
                '<div class="text-white/90 text-sm leading-snug">' + escapeHtml(msg) + '</div>' +
                '<button type="button" class="ml-1 text-white/60 hover:text-white transition" aria-label="Close">' +
                '<i class="bi bi-x-lg"></i>' +
                '</button>' +
                '</div>';
            document.body.appendChild(wrap);
            var box = qs('div', wrap);
            var btn = qs('button', wrap);
            if (btn) btn.onclick = function(ev) {
                ev.stopPropagation();
                wrap.remove();
            };
            if (box && opts.onClick) box.onclick = function() {
                try {
                    opts.onClick();
                } catch (e) {}
                wrap.remove();
            };
            setTimeout(function() {
                wrap.style.opacity = '0';
                wrap.style.transform = 'translateY(-6px)';
                wrap.style.transition = 'opacity .25s ease, transform .25s ease';
            }, 2600);
            setTimeout(function() {
                wrap.remove();
            }, 3100);
        } catch (e) {}
    }

    function escapeHtml(s) {
        return String(s)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    var lastBadge = 0;

    function pulse(el) {
        try {
            el.animate([{
                transform: 'scale(1)'
            }, {
                transform: 'scale(1.12)'
            }, {
                transform: 'scale(1)'
            }], {
                duration: 260,
                easing: 'ease-out'
            });
        } catch (e) {}
    }

    function setBadge(n) {
        var els = qsa('[data-xv-notif-badge]');
        els.forEach(function(el) {
            var v = (n > 9) ? '9+' : String(n);
            if (!n) {
                el.textContent = '';
                el.style.display = 'none';
            } else {
                el.textContent = v;
                el.style.display = 'inline-flex';
                if (n > lastBadge) pulse(el);

            }
        });
        lastBadge = n;
    }

    var BASE_MS = (window.XV_NOTIF_POLL_MS != null) ? Number(window.XV_NOTIF_POLL_MS) : 15000;
    if (!BASE_MS || isNaN(BASE_MS) || BASE_MS < 5000) BASE_MS = 15000;
    var PAGE_MS = window.XV_IS_NOTIFICATIONS_PAGE ? 8000 : BASE_MS;
    var HIDDEN_MS = 60000;
    var POLL_MS = PAGE_MS;

    var latest = 0;
    var first = true;

    function refreshListIfOnPage() {
        if (!window.XV_IS_NOTIFICATIONS_PAGE) return;
        var base = window.XV_NOTIFICATIONS_PARTIAL_URL;
        if (!base) return;
        fetch(base, {
                credentials: 'same-origin'
            })
            .then(function(r) {
                return r.text();
            })
            .then(function(html) {
                var host = qs('#xvNotifsHost');
                if (host) {
                    var prevScroll = host.scrollTop;
                    host.style.opacity = '0.6';
                    host.style.transition = 'opacity .12s ease';
                    host.innerHTML = html;
                    host.scrollTop = prevScroll;
                    host.style.opacity = '1';
                }
            })
            .catch(function() {});
    }

    function poll() {
        fetch('/ajax/notifications_poll.php', {
                credentials: 'same-origin'
            })
            .then(function(r) {
                return r.json();
            })
            .then(function(data) {
                if (!data || !data.ok) return;
                setBadge(Number((data.unread != null ? data.unread : data.unread_count) || 0));
                var newLatest = Number(data.latest_id || 0);
                if (first) {
                    latest = newLatest;
                    first = false;
                    return;
                }
                if (newLatest && newLatest > latest) {
                    latest = newLatest;
                    toast('New notifications', {
                        onClick: function() {
                            var el = qs('[data-xv-notif-row]');
                            if (el) {
                                el.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                                try {
                                    el.classList.add('xv-newflash');
                                    setTimeout(function() {
                                        el.classList.remove('xv-newflash');
                                    }, 1400);
                                } catch (e) {}
                            }
                        }
                    });
                    refreshListIfOnPage();
                }
            })
            .catch(function() {});
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Initial run
        poll();
        var timer = setInterval(poll, POLL_MS);

        document.addEventListener('visibilitychange', function() {
            clearInterval(timer);
            POLL_MS = document.hidden ? HIDDEN_MS : (window.XV_IS_NOTIFICATIONS_PAGE ? 8000 : BASE_MS);
            timer = setInterval(poll, POLL_MS);
            if (!document.hidden) poll();
        });

        // Click-without-link toast support (don't block real links)
        document.body.addEventListener('click', function(e) {
            var row = e.target && e.target.closest ? e.target.closest('[data-xv-notif-row]') : null;
            if (!row) return;

            // If the row is inside a real anchor link, let the browser handle it.
            // (Previously this capture handler would preventDefault() and show "Coming soon".)
            var a = row.closest ? row.closest('a[href]') : null;
            if (a && a.getAttribute('href')) return;

            // Otherwise, use data-url if provided.
            var url = row.getAttribute('data-url') || '';
            if (url) {
                try {
                    window.location.href = url;
                } catch (err) {}
                return;
            }

            // Fallback toast.
            e.preventDefault();
            toast('Coming soon');
        }, true);
    });
})();