(function() {
    function ensureStyles() {
        if (document.getElementById('xyloGuestAuthToastStyles')) return;
        var s = document.createElement('style');
        s.id = 'xyloGuestAuthToastStyles';
        s.textContent = '#xyloGuestAuthToastHost{position:fixed;inset:auto 0 18px 0;z-index:2147483647;display:flex;justify-content:center;padding:0 14px;pointer-events:none}.xylo-guest-auth-toast{pointer-events:auto;width:min(520px,100%);border:1px solid rgba(168,85,247,.28);background:linear-gradient(135deg,rgba(17,24,39,.96),rgba(24,12,42,.96));color:#fff;border-radius:22px;box-shadow:0 22px 70px rgba(0,0,0,.45),0 0 0 1px rgba(255,255,255,.06) inset;padding:16px;display:flex;gap:12px;align-items:flex-start;transform:translateY(12px);opacity:0;transition:opacity .18s ease,transform .18s ease}.xylo-guest-auth-toast.show{opacity:1;transform:translateY(0)}.xylo-guest-auth-icon{width:38px;height:38px;border-radius:14px;display:flex;align-items:center;justify-content:center;background:rgba(168,85,247,.18);border:1px solid rgba(168,85,247,.25);color:#d8b4fe;flex:0 0 auto}.xylo-guest-auth-body{min-width:0;flex:1}.xylo-guest-auth-title{font-weight:800;font-size:15px;margin:0 0 3px}.xylo-guest-auth-msg{font-size:13px;line-height:1.4;color:rgba(255,255,255,.74);margin:0 0 12px}.xylo-guest-auth-actions{display:flex;gap:8px;flex-wrap:wrap}.xylo-guest-auth-actions a{display:inline-flex;align-items:center;justify-content:center;gap:6px;text-decoration:none;border-radius:13px;padding:9px 13px;font-weight:800;font-size:13px;line-height:1}.xylo-guest-login{background:linear-gradient(135deg,#a855f7,#6366f1);color:#fff;border:1px solid rgba(255,255,255,.18)}.xylo-guest-register{background:rgba(255,255,255,.07);color:#fff;border:1px solid rgba(255,255,255,.14)}.xylo-guest-auth-close{border:0;background:transparent;color:rgba(255,255,255,.62);font-size:18px;line-height:1;padding:3px;cursor:pointer}.xylo-guest-auth-close:hover{color:#fff}';
        document.head.appendChild(s);
    }

    function removeExisting() {
        var old = document.getElementById('xyloGuestAuthToastHost');
        if (old) old.remove();
    }
    window.xyloShowGuestAuthToast = function(action) {
        ensureStyles();
        removeExisting();
        var label = action || 'continue';
        var host = document.createElement('div');
        host.id = 'xyloGuestAuthToastHost';
        host.innerHTML = '<div class="xylo-guest-auth-toast" role="alert" aria-live="polite"><div class="xylo-guest-auth-icon"><i class="bi bi-lock-fill"></i></div><div class="xylo-guest-auth-body"><p class="xylo-guest-auth-title">Login or register required</p><p class="xylo-guest-auth-msg">Please login or create an account to ' + label + '. You can keep browsing prices and status as a guest.</p><div class="xylo-guest-auth-actions"><a class="xylo-guest-login" href="/login.php"><i class="bi bi-box-arrow-in-right"></i>Login</a><a class="xylo-guest-register" href="/register.php"><i class="bi bi-person-plus"></i>Register</a></div></div><button class="xylo-guest-auth-close" type="button" aria-label="Close">×</button></div>';
        document.body.appendChild(host);
        var box = host.querySelector('.xylo-guest-auth-toast');
        host.querySelector('.xylo-guest-auth-close').addEventListener('click', removeExisting);
        requestAnimationFrame(function() {
            box.classList.add('show');
        });
        clearTimeout(window.__xyloGuestAuthTimer);
        window.__xyloGuestAuthTimer = setTimeout(removeExisting, 6500);
    };
    document.addEventListener('click', function(e) {
        var el = e.target.closest('[data-guest-auth]');
        if (!el) return;
        e.preventDefault();
        e.stopPropagation();
        window.xyloShowGuestAuthToast(el.getAttribute('data-guest-auth') || 'continue');
    }, true);

    document.addEventListener('submit', function(e) {
        var el = e.target && e.target.closest ? e.target.closest('[data-guest-auth]') : null;
        if (!el) return;
        e.preventDefault();
        e.stopPropagation();
        window.xyloShowGuestAuthToast(el.getAttribute('data-guest-auth') || 'continue');
    }, true);
})();