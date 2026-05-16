

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xylo Hacks | Official Links</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            darkbg: '#0d0d10',
            panel: '#141418',
            accent: '#3b82f6',
            accent2: '#60a5fa',
          },
          boxShadow: {
            glow: '0 0 25px rgba(59,130,246,0.35)',
          },
        }
      }
    }
  </script>

  <link rel="stylesheet" href="/assets/css/vip-purple.css?v=1773418345">
  <link rel="stylesheet" href="/assets/css/xv-ui-upgrades.css?v=1773418345">

  <style>
    .glass {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .oc-shell { position: relative; overflow: hidden; }
    .oc-shell::before {
      content: '';
      position: absolute;
      inset: 0;
      pointer-events: none;
      background: linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0));
      opacity: .9;
    }
    .oc-safe-chip {
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      padding: .5rem .8rem;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,0.1);
      background: rgba(255,255,255,0.05);
      color: #f3f4f6;
      font-size: .78rem;
      font-weight: 600;
      letter-spacing: .01em;
    }
    .oc-header-copy {
      color: rgba(229,231,235,0.82);
      line-height: 1.7;
      max-width: 42rem;
    }
    .oc-acc-list {
      display: grid;
      gap: 14px;
    }
    .oc-acc-item {
      position: relative;
      border: 1px solid rgba(255,255,255,0.10);
      border-radius: 22px;
      overflow: hidden;
      background: linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.035));
      transition: border-color .16s ease, background .16s ease;
    }
    .oc-acc-trigger {
      width: 100%;
      text-align: left;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
      padding: 18px;
    }
    .oc-acc-leading {
      min-width: 0;
      display: flex;
      align-items: center;
      gap: 14px;
    }
    .oc-acc-icon {
      width: 54px;
      height: 54px;
      flex: 0 0 54px;
      border-radius: 18px;
      border: 1px solid rgba(255,255,255,0.11);
      background: rgba(255,255,255,0.08);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.08);
    }
    .oc-acc-icon img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .oc-acc-name {
      color: #fff;
      font-weight: 700;
      font-size: 1.16rem;
      line-height: 1.15;
    }
    .oc-acc-sub {
      margin-top: .45rem;
      display: flex;
      align-items: center;
      gap: .5rem;
      flex-wrap: wrap;
    }
    .oc-count-pill {
      display: inline-flex;
      align-items: center;
      padding: .26rem .6rem;
      border-radius: 999px;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.08);
      color: rgba(229,231,235,0.9);
      font-size: .76rem;
      font-weight: 600;
    }
    .oc-safe-note {
      color: rgba(209,213,219,0.72);
      font-size: .8rem;
    }
    .oc-acc-chevron-wrap {
      width: 42px;
      height: 42px;
      flex: 0 0 42px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid rgba(255,255,255,0.08);
      background: rgba(255,255,255,0.05);
      color: #d1d5db;
      transition: background .16s ease, border-color .16s ease, color .16s ease;
    }
    .oc-acc-chevron { transition: transform .16s ease; }
    .oc-acc-panel {
      display: none;
    }
    .oc-acc-item.open .oc-acc-panel {
      display: block;
      animation: ocPanelFade .16s ease-out;
    }
    @keyframes ocPanelFade {
      from { opacity: 0; transform: translateY(-4px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .oc-acc-item.open .oc-acc-chevron { transform: rotate(180deg); }
    .oc-acc-item.open .oc-acc-chevron-wrap {
      background: rgba(255,255,255,0.09);
      color: #fff;
    }
    .oc-panel-inner {
      padding: 0 14px 14px;
    }
    .oc-links-wrap {
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 20px;
      background: rgba(11,15,25,0.22);
      padding: 12px;
      display: grid;
      grid-template-columns: 1fr;
      gap: 12px;
    }
    .oc-link-card {
      display: block;
      border-radius: 18px;
      padding: 16px;
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.08);
      transition: background .16s ease, border-color .16s ease;
    }
    .oc-link-card:hover {
      background: rgba(255,255,255,0.075);
    }
    .oc-link-top {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 14px;
    }
    .oc-link-label {
      color: #fff;
      font-weight: 700;
      font-size: 1.04rem;
      line-height: 1.2;
    }
    .oc-link-url {
      color: rgba(209,213,219,0.72);
      font-size: .84rem;
      margin-top: .5rem;
      line-height: 1.45;
      word-break: break-all;
    }
    .oc-link-action {
      width: 40px;
      height: 40px;
      flex: 0 0 40px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid rgba(255,255,255,0.08);
      background: rgba(255,255,255,0.04);
      color: #e5e7eb;
    }

    body.theme-user .oc-acc-item.open {
      border-color: rgba(168,85,247,0.34);
      box-shadow: 0 0 0 1px rgba(168,85,247,0.08) inset;
      background: linear-gradient(180deg, rgba(255,255,255,0.075), rgba(255,255,255,0.04));
    }
    body.theme-user .oc-link-card:hover,
    body.theme-user .oc-acc-item.open .oc-links-wrap {
      border-color: rgba(168,85,247,0.22);
      box-shadow: 0 0 0 1px rgba(168,85,247,0.06) inset;
    }

    @media (min-width: 640px) {
      .oc-links-wrap { grid-template-columns: 1fr 1fr; }
    }
  </style>
</head>

<body class="bg-darkbg text-gray-100 min-h-screen theme-user">
  <!-- Bootstrap Icons (guarantee sidebar/tool icons render on every page that includes nav.php) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="/assets/css/xv-ui-upgrades.css?v=1773418345">
<script>window.XV_UI_VERSION=1773418345;</script>
<script src="/assets/js/ui-defaults.js?v=1773418345"></script>
<script defer src="/assets/js/xylo-guest-auth-toast.js?v=1777595710"></script>
<script>window.XV_NOTIF_POLL_MS=15000;</script>
<script defer src="/assets/js/notifications-poll.js?v=1773418345"></script>
<style>
/* Sticky glass header (top nav): purple glass + glow (no heavy shadow) */
.glass-header{
  background: linear-gradient(135deg,
    rgba(var(--vip-accent-rgb), .16),
    rgba(10,14,26, .66)
  );
  backdrop-filter: blur(18px) saturate(140%);
  -webkit-backdrop-filter: blur(18px) saturate(140%);
  box-shadow: var(--glow-mag), inset 0 1px 0 rgba(255,255,255,.08);
  border: 1px solid rgba(var(--vip-accent-rgb), .22);
  border-radius: 0;
  margin: 0;
}
@supports not ((backdrop-filter: blur(2px)) or (-webkit-backdrop-filter: blur(2px))){
  .glass-header{background: rgba(12,16,28,.92);}
}

/* Brand wordmark (Option B) */
.xv-brand{display:inline-flex;align-items:center;gap:.55rem;min-width:0;}
.xv-brandMark{width:28px;height:28px;border-radius:10px;display:inline-flex;align-items:center;justify-content:center;
  background: rgba(255,255,255,.06);
  border: 1px solid rgba(255,255,255,.10);
  box-shadow: inset 0 1px 0 rgba(255,255,255,.10);
  flex: 0 0 auto;
}
.xv-brandMark img{width:18px;height:18px;object-fit:contain;display:block;}
.xv-brandFallback{font-weight:800;font-size:13px;letter-spacing:.5px;color: rgba(255,255,255,.9);
  text-shadow: 0 0 12px rgba(168,85,247,.35);
}
.xv-brandText{display:inline-flex;align-items:baseline;gap:.35rem;min-width:0;}
.xv-brandText .xv-xylo{font-weight:800;letter-spacing:.2px;}
.xv-brandText .xv-store{font-weight:600;opacity:.72;color: rgba(255,255,255,.92);}

/* Notifications badge (Facebook-like) */
.xv-tab{position:relative;}
.xv-notifBadge{position:absolute; top:7px; right:18px; min-width:18px; height:18px; padding:0 6px;
  border-radius:999px; display:none; align-items:center; justify-content:center;
  font-size:11px; font-weight:800; line-height:18px; letter-spacing:.2px;
  background: rgba(244,63,94,.92); color:white;
  box-shadow: 0 8px 18px rgba(244,63,94,.18);
}
@media (max-width: 1024px){
  .xv-notifBadge{ right: 22px; top: 6px; }
}

/* Offcanvas mobile menu */
.drawer-overlay{position:fixed;inset:0;background:rgba(0,0,0,.65);backdrop-filter:blur(2px);z-index:60;display:none;opacity:0;transition:opacity var(--xv-med,170ms) var(--xv-ease,ease);}
.drawer{position:fixed;top:0;left:0;height:100vh;height:100dvh;width:18rem;max-width:85vw;transform:translateX(-100%) scale(.99);transition:transform var(--xv-slow,220ms) var(--xv-ease,ease);z-index:61;display:flex;flex-direction:column;overflow:hidden;
  /* Match top header: purple glass + glow (no heavy shadow) */
  background: linear-gradient(135deg,
    rgba(var(--vip-accent-rgb), .18),
    rgba(10,14,26, .92)
  );
  backdrop-filter: blur(18px) saturate(140%);
  -webkit-backdrop-filter: blur(18px) saturate(140%);
  border-right: 1px solid rgba(var(--vip-accent-rgb), .22);
  box-shadow: var(--glow-mag), inset 0 1px 0 rgba(255,255,255,.06);
padding-bottom:env(safe-area-inset-bottom);}
.drawer.open{transform:translateX(0) scale(1);} 
.drawer-overlay.open{display:block;opacity:1;}
.drawer nav{overscroll-behavior:contain;-webkit-overflow-scrolling:touch;}
.drawer{overscroll-behavior:contain;touch-action:pan-y;}


/* Desktop/Tablet: when sidebar is OPEN, push content (>=1024px) */
@media (min-width:1024px){
  body.sidebar-open{padding-left:18rem;}
  .drawer{max-width:none;}
  .drawer-overlay{display:none !important;}
}

  body.drawer-lock{overflow:hidden;}
  #drawer{overscroll-behavior:contain;-webkit-overflow-scrolling:touch;}

  .drawer-scroll{flex:1;overflow-y:auto;overscroll-behavior:contain;-webkit-overflow-scrolling:touch;min-height:0;padding-bottom:calc(16px + env(safe-area-inset-bottom));}

  
  /* Move scrollbar to LEFT (keep content LTR) */
  .drawer-scroll{direction: rtl;}
  .drawer-scroll > *{direction: ltr;}
/* Sidebar header + action pills */
  .drawer-topPill{background: rgba(255,255,255,.06); border:1px solid rgba(255,255,255,.10);
    box-shadow: 0 0 18px rgba(var(--vip-accent-rgb), .14), inset 0 1px 0 rgba(255,255,255,.10);
  }
  .drawer-action{width:100%; min-height:52px; border-radius:16px; display:flex; align-items:center; justify-content:center;
    padding: 12px 14px; gap:10px; text-align:center;
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.10);
    box-shadow: 0 0 18px rgba(var(--vip-accent-rgb), .14), inset 0 1px 0 rgba(255,255,255,.10);
  }
  .drawer-action:hover{background: rgba(255,255,255,.09);}
  .drawer-action .sub{font-size:12px; opacity:.85;}
  .drawer-action .main{font-weight:700; display:flex; align-items:center; gap:10px;}
  .drawer-balance{width:100%; min-height:52px; border-radius:16px; padding: 12px 14px;
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.10);
    box-shadow: 0 0 18px rgba(var(--vip-accent-rgb), .14), inset 0 1px 0 rgba(255,255,255,.10);
  }
  .drawer-balance .addbtn{width:40px;height:40px;border-radius:14px;}

/* XV VIP: glass-framed header logo badge (fill mode) */
.xv-brandMark{
    position:relative;
width:34px;
  height:34px;
  border-radius:14px;
  overflow:hidden;
  background: linear-gradient(145deg, rgba(255,255,255,.14), rgba(255,255,255,.05));
  border: 1px solid rgba(255,255,255,.16);
  box-shadow:
    0 0 18px rgba(168,85,247,.22),
    inset 0 1px 2px rgba(255,255,255,.22),
    inset 0 -6px 14px rgba(0,0,0,.32);
  backdrop-filter: blur(6px) saturate(130%);
  -webkit-backdrop-filter: blur(6px) saturate(130%);
}
.xv-brandMark::before{
  content:"";
  position:absolute;
  inset:0;
  background: radial-gradient(120% 120% at 20% 10%, rgba(255,255,255,.18), transparent 55%),
              radial-gradient(90% 90% at 80% 90%, rgba(168,85,247,.18), transparent 60%);
  pointer-events:none;
}
.xv-brandMark img{
  width:100%;
  height:100%;
  object-fit:cover;
  object-position:center;
  transform: scale(1.08);
  display:block;
}

/* VIP purple active state (so Deposit/Status highlight matches other pages) */
.nav-item{ position:relative; }
.nav-item.active{
  background: rgba(168, 85, 247, 0.12) !important;
  border: 1px solid rgba(168, 85, 247, 0.55) !important;
  box-shadow: 0 0 0 1px rgba(168, 85, 247, 0.18), 0 10px 30px rgba(0,0,0,0.25);
  color: rgba(240, 234, 255, 0.95) !important;
}
.nav-item.active i{ color: rgba(216, 180, 254, 0.95) !important; }


/* XYLO: remove pill background (hamburger + role/brand) across roles */
.glass-header .xv-topPill{
  background: transparent !important;
  border-color: transparent !important;
  box-shadow: none !important;
  backdrop-filter: none !important;
  -webkit-backdrop-filter: none !important;
}


/* === XV Center Tabs (Facebook-style) === */
.xv-centerNav{display:flex;justify-content:center;min-width:0;padding:.10rem 0 .18rem;border-top:1px solid rgba(255,255,255,.08)}
.xv-tabs{display:flex;align-items:center;justify-content:center;gap:.12rem;width:100%;max-width:100%;min-width:0;padding:0 1rem}
@media (min-width: 768px){ .xv-tabs{padding:0 1.5rem} }
.xv-tab{flex:1;min-width:48px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:.12rem;padding:.22rem .16rem;border-radius:10px;color:rgba(255,255,255,.86);transition:background var(--xv-med,170ms) var(--xv-ease,ease), transform var(--xv-fast,120ms) var(--xv-ease,ease)}
.xv-tab:hover{background:rgba(255,255,255,.06);transform:translateY(-1px)}
.xv-tab:active{transform:translateY(0) scale(.98)}
.xv-tabIcon{font-size:1.00rem;line-height:1}
.xv-tabLabel{font-size:.60rem;letter-spacing:.02em;opacity:.82}
@media (max-width: 1024px){ .xv-tabLabel{display:none} .xv-tab{padding:.46rem .2rem;gap:.15rem} .xv-tabIcon{font-size:1.15rem} }
.xv-tabActive{background:rgba(var(--vip-accent-rgb), .12);color:#fff;position:relative}
.xv-tabActive::after{content:"";position:absolute;left:14%;right:14%;bottom:0;height:2px;border-radius:999px;background:rgba(var(--vip-accent-rgb), .95);box-shadow:0 0 18px rgba(var(--vip-accent-rgb), .35)}
/* Ensure center nav doesn't push right actions off-screen */
.xv-headerRow{gap: .6rem}
.xv-authBtns{display:flex;align-items:center;gap:.4rem;flex:0 0 auto;}
.xv-authBtn{display:inline-flex;align-items:center;gap:.32rem;padding:.5rem .72rem;border-radius:999px;font-size:.76rem;font-weight:600;line-height:1;white-space:nowrap;min-width:0;}
.xv-authBtn i{font-size:.9rem;flex:0 0 auto;}
@media (max-width:640px){
  .xv-authBtns{gap:.3rem;}
  .xv-authBtn{padding:.48rem .62rem;font-size:.72rem;}
}

</style>


<div class="glass-header sticky top-0 z-50 border-b border-white/10">
  <div class="flex items-center justify-between gap-3 px-4 md:px-6 py-3 xv-headerRow">
    <div class="flex items-center gap-3 md:gap-5 min-w-0">
      <!-- Mobile: hamburger LEFT of title -->
      <button class="xv-topPill text-purple-300 focus:outline-none flex items-center justify-center w-10 h-10 rounded-full hover:bg-white/5" onclick="toggleDrawer()" aria-label="Toggle menu">
        <!-- Inline SVG so hamburger is always visible even if icon font fails -->
        <svg aria-hidden="true" viewBox="0 0 24 24" class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 6H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          <path d="M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </button>

      <div class="xv-topPill transition flex items-center rounded-full px-3 py-2 max-w-[60vw] sm:max-w-none truncate whitespace-nowrap cursor-default select-none"aria-label="Xylo Store"><span class="xv-brand">
                    <span class="xv-brandMark" aria-hidden="true">
                          <img src="/assets/uploads/branding/store_logo_1772085503_ea159d.webp" alt="" loading="lazy" decoding="async">
                      </span>
          <span class="xv-brandText truncate">
                        <span class="xv-xylo" style="color: #9900ff; text-shadow: 0 0 14px rgba(168,85,247,.35);">
              Xylo            </span>
            <span class="xv-store">Store</span>
          </span>
        </span></div>

      <nav class="hidden items-center space-x-1">
        <a href="/home.php" class="px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition flex items-center"><i class="bi bi-speedometer2 mr-2"></i>Dashboard</a>
        <a href="/deposit.php" class="px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition flex items-center"><i class="bi bi-wallet2 mr-2"></i>Deposit</a>
        <a href="/products.php" class="px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition flex items-center"><i class="bi bi-bag-check mr-2"></i>Products</a>
        <a href="/status.php" class="px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition flex items-center"><i class="bi bi-activity mr-2"></i>Status</a>
<a href="/mykeys.php" class="px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition flex items-center"><i class="bi bi-key mr-2"></i>My Keys</a>
        
        <a href="/orders.php" data-guest-auth="view your orders" class="px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition flex items-center"><i class="bi bi-receipt mr-2"></i>Orders</a>
        <a href="/account.php" data-guest-auth="manage account settings" class="px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition flex items-center"><i class="bi bi-person-gear mr-2"></i>Account Settings</a>
      </nav>
    </div>

            
<div class="flex items-center justify-between sm:justify-end space-x-3 w-auto">
              <div class="xv-authBtns shrink-0">
          <a href="/login.php" class="xv-authBtn border border-white/15 bg-white/5 hover:bg-white/10 text-white transition">
            <i class="bi bi-box-arrow-in-right"></i><span>Login</span>
          </a>
          <a href="/register.php" class="xv-authBtn bg-blue-500 hover:bg-blue-600 text-white transition">
            <i class="bi bi-person-plus"></i><span>Register</span>
          </a>
        </div>
          </div>
  </div>


  <div class="xv-centerNav" aria-label="Primary navigation">
      <div class="xv-tabs">
        <a href="/home.php" class="xv-tab " aria-label="Home">
          <i class="bi bi-house xv-tabIcon" aria-hidden="true"></i>
          <span class="xv-tabLabel">Home</span>
        </a>
        <a href="/products.php" class="xv-tab " aria-label="Products">
          <i class="bi bi-bag-check xv-tabIcon" aria-hidden="true"></i>
          <span class="xv-tabLabel">Products</span>
        </a>
        <a href="/free/index.php" data-guest-auth="view free trials" class="xv-tab " aria-label="Free">
          <i class="bi bi-gift xv-tabIcon" aria-hidden="true"></i>
          <span class="xv-tabLabel">Free</span>
        </a>
        <a href="/notifications.php" class="xv-tab " aria-label="Notifications">
          <i class="bi bi-bell xv-tabIcon" aria-hidden="true"></i>
          <span class="xv-notifBadge" data-xv-notif-badge aria-hidden="true"></span>
          <span class="xv-tabLabel">Notifications</span>
        </a>
        <a href="/status.php" class="xv-tab " aria-label="Status">
          <i class="bi bi-activity xv-tabIcon" aria-hidden="true"></i>
          <span class="xv-tabLabel">Status</span>
        </a>
        <a href="/deposit.php" class="xv-tab " aria-label="Deposit">
          <i class="bi bi-wallet2 xv-tabIcon" aria-hidden="true"></i>
          <span class="xv-tabLabel">Deposit</span>
        </a>

      </div>
    </div>

</div>

<!-- Drawer -->
<div id="drawerOverlay" class="drawer-overlay" onclick="closeDrawer()"></div>
<aside id="drawer" class="drawer glass border-r border-white/10 flex flex-col">
  <div class="p-4 border-b border-white/10 flex items-center justify-between">
    <!-- Match the top header brand: icon + wordmark + glow font -->
    <div class="xv-brand min-w-0 cursor-default select-none"aria-label="Xylo Store">      <span class="xv-brandMark" aria-hidden="true">
                  <img src="/assets/uploads/branding/store_logo_1772085503_ea159d.webp" alt="" loading="lazy" decoding="async">
              </span>
      <span class="xv-brandText truncate">
                <span class="xv-xylo" style="color: #9900ff; text-shadow: 0 0 14px rgba(168,85,247,.35);">
          Xylo        </span>
        <span class="xv-store">Store</span>
      </span></div>
    <button class="drawer-topPill text-gray-200 hover:text-white w-10 h-10 rounded-full inline-flex items-center justify-center" onclick="closeDrawer()" aria-label="Close menu">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>
  <nav class="p-3 space-y-1 drawer-scroll">
<div class="nav-group" data-group="Core" data-default-open="1">
<div class="space-y-1 pl-2 pr-1">
        <a data-title="Home" href="/home.php" class="nav-item block px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition"><i class="bi bi-house-door mr-2"></i>Home</a>
<a data-title="Products" href="/products.php" class="nav-item block px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition"><i class="bi bi-bag-check mr-2"></i>Products</a>
<a data-title="Promos" href="/promos.php" class="nav-item block px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition"><i class="bi bi-fire mr-2"></i>Promos</a>
<a data-title="Free Trials" href="/free/index.php" data-guest-auth="view free trials" class="nav-item block px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition"><i class="bi bi-gift mr-2"></i>Free Trials</a>
<a data-title="Status" href="/status.php" class="nav-item block px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition"><i class="bi bi-activity mr-2"></i>Status</a>
        <a data-title="Deposit" href="/deposit.php" class="nav-item block px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition"><i class="bi bi-wallet2 mr-2"></i>Deposit</a>
	        <a data-title="Orders" href="/orders.php" data-guest-auth="view your orders" class="nav-item block px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition"><i class="bi bi-receipt mr-2"></i>Orders</a>
<a data-title="Reseller Program" href="/reseller-program.php" class="nav-item block px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition"><i class="bi bi-people mr-2"></i>Reseller Program</a>
<a data-title="Creator Program" href="/creator-program.php" class="nav-item block px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition"><i class="bi bi-camera-reels mr-2"></i>Creator Program</a>
        <a data-title="Settings" href="/account.php" data-guest-auth="manage account settings" class="nav-item block px-4 py-2 rounded-lg hover:bg-purple-400/10 hover:text-purple-300 transition"><i class="bi bi-person-gear mr-2"></i>Settings</a>
      </div>
    </div>
  <div class="px-3 pt-3 pb-4 space-y-3">
    <!-- Balance (match Logout width) -->
    <div class="drawer-balance flex items-center justify-between gap-3 text-sm">
      <div class="flex items-center gap-2 min-w-0">
        <i class="bi bi-wallet2 text-green-300"></i>
        <span class="text-white/70">Balance</span>
        <span class="font-semibold text-green-300 truncate">✦0.00</span>
      </div>
      <a href="/deposit.php" class="drawer-topPill addbtn inline-flex items-center justify-center text-white/85 hover:text-white" aria-label="Add funds">+</a>
    </div>

    <!-- Support / Official Links (same height/width as Logout) -->
    <a href="https://t.me/m/O40OZqOHZTJl" target="_blank" rel="noopener"       class="drawer-action drawer-action--pc">
      <div class="text-center leading-tight">
        <div class="sub">Need help?</div>
        <div class="main"><i class="bi bi-headset"></i><span>Contact Support</span></div>
      </div>
    </a>

    <a href="/official_channels.php" class="drawer-action drawer-action--pc">
      <div class="text-center leading-tight">
        <div class="main"><i class="bi bi-megaphone"></i><span>Official Links</span></div>
      </div>
    </a>

          <div class="grid grid-cols-2 gap-3">
        <a href="/login.php" class="drawer-action">
          <div class="text-center leading-tight">
            <div class="main"><i class="bi bi-box-arrow-in-right"></i><span>Login</span></div>
          </div>
        </a>
        <a href="/register.php" class="drawer-action">
          <div class="text-center leading-tight">
            <div class="main"><i class="bi bi-person-plus"></i><span>Register</span></div>
          </div>
        </a>
      </div>
      </div>

  </nav>
</aside>

<script>
(function(){
  const drawer = document.getElementById('drawer');
  const overlay = document.getElementById('drawerOverlay');
  const mq = window.matchMedia('(min-width:1024px)'); 
  function lockBody(){ document.body.classList.add('drawer-lock'); }
  function unlockBody(){ document.body.classList.remove('drawer-lock'); }
// desktop/tablet breakpoint

  // Keep sidebar CLOSED by default for all breakpoints.
  // This function only syncs overlay/padding behavior based on viewport + open state.
  function syncLayout(isDesktop){
    if(isDesktop){
      overlay.classList.remove('open');
      if(drawer.classList.contains('open')) document.body.classList.add('sidebar-open');
      else document.body.classList.remove('sidebar-open');
    } else {
      document.body.classList.remove('sidebar-open');
      if(drawer.classList.contains('open')) overlay.classList.add('open');
      else overlay.classList.remove('open');
    }
  }

  window.openDrawer = function(){
    drawer.classList.add('open');
    if(mq.matches){
      document.body.classList.add('sidebar-open');
      overlay.classList.remove('open');
    } else {
      document.body.classList.remove('sidebar-open');
      overlay.classList.add('open');
    }
  };

  window.closeDrawer = function(){
    drawer.classList.remove('open');
    document.body.classList.remove('sidebar-open');
    overlay.classList.remove('open');
  };

  window.toggleDrawer = function(){
    if(drawer.classList.contains('open')){
      closeDrawer();
    } else {
      openDrawer();
    }
  };

  // init (closed by default)
  closeDrawer();
  syncLayout(mq.matches);

  // update on resize
  if(typeof mq.addEventListener === 'function'){
    mq.addEventListener('change', e => syncLayout(e.matches));
  } else if(typeof mq.addListener === 'function'){
    mq.addListener(e => syncLayout(e.matches));
  }

  document.addEventListener('keydown', function(e){
    if (e.key === 'Escape') closeDrawer();
  });
})();

// Highlight current page in sidebar (supports pretty URLs like /user/dep, /user/stat)
(function markActiveNav(){
  const p = window.location.pathname || '';
  const map = {
    '/user/dep': '/user/deposit.php',
    '/user/stat': '/user/status.php',
    '/user/prod': '/user/products.php',
    '/user/his': '/user/history.php',
    '/user/key': '/user/my_keys.php',
    '/user/acc': '/user/account_settings.php'
  };
  let norm = p;
  for(const k of Object.keys(map)){
    if(p === k || p.startsWith(k + '/') || p.startsWith(k + '?')){
      norm = map[k];
      break;
    }
  }
  document.querySelectorAll('a.nav-item').forEach(a => {
    try{
      const ap = new URL(a.getAttribute('href'), window.location.origin).pathname;
      if(ap === p || ap === norm) a.classList.add('active');
    }catch(e){}
  });
})();


</script>


  <main class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4 md:space-y-6">
    <div class="flex justify-between items-center">
      <h3 class="text-xl md:text-2xl font-bold text-white">
        <i class="bi bi-megaphone mr-2"></i>Official Links
      </h3>
    </div>

    <div class="glass oc-shell rounded-[24px] md:rounded-[28px] overflow-hidden">
      <div class="p-4 md:p-6 lg:p-7 relative z-[1]">
        <div class="flex flex-col gap-4 mb-5">
          <span class="oc-safe-chip"><i class="bi bi-patch-check-fill"></i> Verified destinations only</span>
          <p class="oc-header-copy">Verified destinations for updates, support, and community. Use these links to stay safe and avoid copycat pages.</p>
        </div>

                  <div class="oc-acc-list">
                          <div class="glass oc-acc-item" data-oc-acc>
                <button type="button" class="oc-acc-trigger" data-oc-acc-trigger aria-expanded="false">
                  <div class="oc-acc-leading min-w-0">
                    <div class="oc-acc-icon">
                                              <img src="/assets/img/official_channels/legitmacy-and-feedbacks.webp" alt="" />
                                          </div>
                    <div class="min-w-0">
                      <div class="oc-acc-name truncate">Legitmacy and Feedbacks</div>
                      <div class="oc-acc-sub">
                        <span class="oc-count-pill">2 links</span>
                        <span class="oc-safe-note">Trusted links</span>
                      </div>
                    </div>
                  </div>
                  <div class="oc-acc-chevron-wrap">
                    <div class="oc-acc-chevron"><i class="bi bi-chevron-down"></i></div>
                  </div>
                </button>
                <div class="oc-acc-panel" data-oc-acc-panel>
                  <div class="oc-panel-inner">
                    <div class="oc-links-wrap">
                                              <a href="https://t.me/XyloNotScammer" target="_blank" rel="noopener" class="oc-link-card">
                          <div class="oc-link-top">
                            <div class="min-w-0">
                              <div class="oc-link-label">Legitmacy (Proof of Purchase)</div>
                              <div class="oc-link-url">https://t.me/XyloNotScammer</div>
                            </div>
                            <div class="oc-link-action"><i class="bi bi-box-arrow-up-right"></i></div>
                          </div>
                        </a>
                                              <a href="https://t.me/+CIm5wcPaYLFmNDll" target="_blank" rel="noopener" class="oc-link-card">
                          <div class="oc-link-top">
                            <div class="min-w-0">
                              <div class="oc-link-label">Feedbacks Channel</div>
                              <div class="oc-link-url">https://t.me/+CIm5wcPaYLFmNDll</div>
                            </div>
                            <div class="oc-link-action"><i class="bi bi-box-arrow-up-right"></i></div>
                          </div>
                        </a>
                                          </div>
                  </div>
                </div>
              </div>
                          <div class="glass oc-acc-item" data-oc-acc>
                <button type="button" class="oc-acc-trigger" data-oc-acc-trigger aria-expanded="false">
                  <div class="oc-acc-leading min-w-0">
                    <div class="oc-acc-icon">
                                              <img src="/assets/img/official_channels/official-telegram.webp" alt="" />
                                          </div>
                    <div class="min-w-0">
                      <div class="oc-acc-name truncate">Telegram</div>
                      <div class="oc-acc-sub">
                        <span class="oc-count-pill">4 links</span>
                        <span class="oc-safe-note">Trusted links</span>
                      </div>
                    </div>
                  </div>
                  <div class="oc-acc-chevron-wrap">
                    <div class="oc-acc-chevron"><i class="bi bi-chevron-down"></i></div>
                  </div>
                </button>
                <div class="oc-acc-panel" data-oc-acc-panel>
                  <div class="oc-panel-inner">
                    <div class="oc-links-wrap">
                                              <a href="https://t.me/xylogamesph" target="_blank" rel="noopener" class="oc-link-card">
                          <div class="oc-link-top">
                            <div class="min-w-0">
                              <div class="oc-link-label">Contact Owner</div>
                              <div class="oc-link-url">https://t.me/xylogamesph</div>
                            </div>
                            <div class="oc-link-action"><i class="bi bi-box-arrow-up-right"></i></div>
                          </div>
                        </a>
                                              <a href="https://t.me/XyloMainChannel" target="_blank" rel="noopener" class="oc-link-card">
                          <div class="oc-link-top">
                            <div class="min-w-0">
                              <div class="oc-link-label">Official Channel</div>
                              <div class="oc-link-url">https://t.me/XyloMainChannel</div>
                            </div>
                            <div class="oc-link-action"><i class="bi bi-box-arrow-up-right"></i></div>
                          </div>
                        </a>
                                              <a href="https://t.me/xylodc0" target="_blank" rel="noopener" class="oc-link-card">
                          <div class="oc-link-top">
                            <div class="min-w-0">
                              <div class="oc-link-label">Public Group Chat</div>
                              <div class="oc-link-url">https://t.me/xylodc0</div>
                            </div>
                            <div class="oc-link-action"><i class="bi bi-box-arrow-up-right"></i></div>
                          </div>
                        </a>
                                              <a href="https://t.me/addlist/M-rWTlv-igJmNzVl" target="_blank" rel="noopener" class="oc-link-card">
                          <div class="oc-link-top">
                            <div class="min-w-0">
                              <div class="oc-link-label">All Games Channel</div>
                              <div class="oc-link-url">https://t.me/addlist/M-rWTlv-igJmNzVl</div>
                            </div>
                            <div class="oc-link-action"><i class="bi bi-box-arrow-up-right"></i></div>
                          </div>
                        </a>
                                          </div>
                  </div>
                </div>
              </div>
                          <div class="glass oc-acc-item" data-oc-acc>
                <button type="button" class="oc-acc-trigger" data-oc-acc-trigger aria-expanded="false">
                  <div class="oc-acc-leading min-w-0">
                    <div class="oc-acc-icon">
                                              <img src="/assets/img/official_channels/tiktok.webp" alt="" />
                                          </div>
                    <div class="min-w-0">
                      <div class="oc-acc-name truncate">TikTok</div>
                      <div class="oc-acc-sub">
                        <span class="oc-count-pill">1 link</span>
                        <span class="oc-safe-note">Trusted links</span>
                      </div>
                    </div>
                  </div>
                  <div class="oc-acc-chevron-wrap">
                    <div class="oc-acc-chevron"><i class="bi bi-chevron-down"></i></div>
                  </div>
                </button>
                <div class="oc-acc-panel" data-oc-acc-panel>
                  <div class="oc-panel-inner">
                    <div class="oc-links-wrap">
                                              <a href="http://tiktok.com/@xylogamesph" target="_blank" rel="noopener" class="oc-link-card">
                          <div class="oc-link-top">
                            <div class="min-w-0">
                              <div class="oc-link-label">Official TikTok</div>
                              <div class="oc-link-url">http://tiktok.com/@xylogamesph</div>
                            </div>
                            <div class="oc-link-action"><i class="bi bi-box-arrow-up-right"></i></div>
                          </div>
                        </a>
                                          </div>
                  </div>
                </div>
              </div>
                          <div class="glass oc-acc-item" data-oc-acc>
                <button type="button" class="oc-acc-trigger" data-oc-acc-trigger aria-expanded="false">
                  <div class="oc-acc-leading min-w-0">
                    <div class="oc-acc-icon">
                                              <img src="/assets/img/official_channels/facebook.webp" alt="" />
                                          </div>
                    <div class="min-w-0">
                      <div class="oc-acc-name truncate">Facebook</div>
                      <div class="oc-acc-sub">
                        <span class="oc-count-pill">1 link</span>
                        <span class="oc-safe-note">Trusted links</span>
                      </div>
                    </div>
                  </div>
                  <div class="oc-acc-chevron-wrap">
                    <div class="oc-acc-chevron"><i class="bi bi-chevron-down"></i></div>
                  </div>
                </button>
                <div class="oc-acc-panel" data-oc-acc-panel>
                  <div class="oc-panel-inner">
                    <div class="oc-links-wrap">
                                              <a href="https://www.facebook.com/share/1A2bRbdvP2/" target="_blank" rel="noopener" class="oc-link-card">
                          <div class="oc-link-top">
                            <div class="min-w-0">
                              <div class="oc-link-label">Facebook Page</div>
                              <div class="oc-link-url">https://www.facebook.com/share/1A2bRbdvP2/</div>
                            </div>
                            <div class="oc-link-action"><i class="bi bi-box-arrow-up-right"></i></div>
                          </div>
                        </a>
                                          </div>
                  </div>
                </div>
              </div>
                          <div class="glass oc-acc-item" data-oc-acc>
                <button type="button" class="oc-acc-trigger" data-oc-acc-trigger aria-expanded="false">
                  <div class="oc-acc-leading min-w-0">
                    <div class="oc-acc-icon">
                                              <img src="/assets/img/official_channels/youtube.webp" alt="" />
                                          </div>
                    <div class="min-w-0">
                      <div class="oc-acc-name truncate">YouTube</div>
                      <div class="oc-acc-sub">
                        <span class="oc-count-pill">1 link</span>
                        <span class="oc-safe-note">Trusted links</span>
                      </div>
                    </div>
                  </div>
                  <div class="oc-acc-chevron-wrap">
                    <div class="oc-acc-chevron"><i class="bi bi-chevron-down"></i></div>
                  </div>
                </button>
                <div class="oc-acc-panel" data-oc-acc-panel>
                  <div class="oc-panel-inner">
                    <div class="oc-links-wrap">
                                              <a href="https://youtube.com/@xylogamesph1?si=LHJX6NLM_pfDqavH" target="_blank" rel="noopener" class="oc-link-card">
                          <div class="oc-link-top">
                            <div class="min-w-0">
                              <div class="oc-link-label">YouTube Channel</div>
                              <div class="oc-link-url">https://youtube.com/@xylogamesph1?si=LHJX6NLM_pfDqavH</div>
                            </div>
                            <div class="oc-link-action"><i class="bi bi-box-arrow-up-right"></i></div>
                          </div>
                        </a>
                                          </div>
                  </div>
                </div>
              </div>
                      </div>
              </div>
    </div>
  </main>

  <script>
    (function () {
      const items = Array.from(document.querySelectorAll('[data-oc-acc]'));
      const closeItem = (item) => {
        item.classList.remove('open');
        const btn = item.querySelector('[data-oc-acc-trigger]');
        if (btn) btn.setAttribute('aria-expanded', 'false');
      };

      items.forEach((item) => {
        const btn = item.querySelector('[data-oc-acc-trigger]');
        if (!btn) return;
        btn.addEventListener('click', () => {
          const willOpen = !item.classList.contains('open');
          items.forEach((other) => {
            if (other !== item) closeItem(other);
          });
          item.classList.toggle('open', willOpen);
          btn.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
        });
      });
    })();
  </script>
  <script src="/assets/js/xv-global-activity-popups.js" defer></script>
  <script src="/assets/js/xylo-lazy-media-30.js" defer></script>
</body>
</html>
