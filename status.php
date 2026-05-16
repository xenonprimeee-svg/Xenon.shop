

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Xylo Hacks | Status</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/vip-purple.css?v=1773418345">
  <style>
    .thumb{width:30px;height:30px;border-radius:10px;overflow:hidden;border:1px solid rgba(255,255,255,.10);background:rgba(255,255,255,.04);flex:0 0 30px}
    .thumb img{width:100%;height:100%;object-fit:cover;display:block}
    .rowItem{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.10)}
    .rowItem:hover{background:rgba(255,255,255,.06)}
    section.cat[data-open="0"] .cat-body{display:none;}
    section.cat[data-open="1"] .cat-body{display:block;}
    .chev{transition:transform .15s ease;}
    section.cat[data-open="1"] .chev{transform:rotate(180deg);}
  
    /* Status pill (per-status colors + icons) */
    .status-pill{display:inline-flex;align-items:center;gap:6px;font-size:11px;line-height:1;padding:4px 10px;border-radius:999px;border:1px solid rgba(255,255,255,.12);white-space:nowrap}
    .status-pill i{font-size:12px;opacity:.95}
    .status-recommended{background:rgba(245,158,11,.18);border-color:rgba(245,158,11,.35);color:rgba(253,230,138,.95)}
    .status-up{background:rgba(34,197,94,.18);border-color:rgba(34,197,94,.35);color:rgba(187,247,208,.95)}
    .status-maintenance{background:rgba(249,115,22,.18);border-color:rgba(249,115,22,.35);color:rgba(254,215,170,.95)}
    .status-updating{background:rgba(59,130,246,.18);border-color:rgba(59,130,246,.35);color:rgba(191,219,254,.95)}
    .status-none{background:rgba(148,163,184,.12);border-color:rgba(148,163,184,.25);color:rgba(226,232,240,.85)}

    /* Changelog modal (glassmorphism) */
    body.xv-modal-open{overflow:hidden}
    .xv-modal{position:fixed;inset:0;display:none;z-index:9999}
    .xv-modal[data-open="1"]{display:block}
    .xv-modal-overlay{position:absolute;inset:0;background:rgba(0,0,0,.55);backdrop-filter:blur(10px)}
    .xv-modal-panel{position:relative;width:calc(100% - 32px);max-width:640px;margin:84px auto 24px;border-radius:18px;
      background:rgba(16,14,26,.62);border:1px solid rgba(255,255,255,.14);
      box-shadow:0 18px 60px rgba(0,0,0,.55)}
    @media (max-width: 640px){.xv-modal-panel{margin:64px auto 16px;width:calc(100% - 24px)}}
    .xv-modal-head{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 16px;border-bottom:1px solid rgba(255,255,255,.10)}
    .xv-modal-title{font-weight:900}
    .xv-modal-close{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.10);border-radius:12px;padding:8px 10px}
    .xv-modal-close:hover{background:rgba(255,255,255,.10)}
    .xv-modal-body{padding:14px 16px;max-height:70vh;overflow:auto}
    
  </style>
</head>
<body class="min-h-screen text-white bg-[#070a12]">
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
        <a href="/status.php" class="xv-tab xv-tabActive" aria-label="Status">
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


<main class="max-w-6xl mx-auto px-4 md:px-6 py-6">
  <div class="flex items-end justify-between gap-3 mb-4">
    <div>
      <h1 class="text-xl md:text-2xl font-extrabold flex items-center gap-2">
        <i class="bi bi-activity text-accent"></i> Status
      </h1>
      <p class="text-sm text-gray-400 mt-1">View status of all products here.</p>
    </div>
    <button type="button" id="openChangelog" class="text-xs bg-white/10 hover:bg-white/15 border border-white/10 px-3 py-2 rounded-lg text-white/90 flex items-center gap-2">
      <i class="bi bi-broadcast"></i><span>Changelog</span>
    </button>
  </div>
    <div class="space-y-4" id="cats">
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="codm">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_6_20260313_003636_534b.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">CODM</div>
                <div class="text-xs text-white/50">Products: 21</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xylo apex (2 mod - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1776770148_d3f14fd0.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xylo Apex (2 Mod - 1 Key)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xylo injector">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1778045789_43ac61b4.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xylo Injector</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xylo ultima">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1776770235_2112d8d3.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xylo Ultima</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno (6 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777967698_e26f9a21.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno (6 Games - 1 Key)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="aegisgc3 garena (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800431_b8b43cf5.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">AegisGC3 Garena (iOS)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="aegisgc3 global (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800449_cbf047fc.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">AegisGC3 Global (iOS)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777969034_4d4d99b0.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno emulator (pc)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777968354_970ad956.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno Emulator (PC)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="cloud (3 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799430_32039fc0.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Cloud (3 Games - 1 Key)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="link chip 1 key - 6 games">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777536826_37033d32.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Link Chip 1 Key - 6 Games</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="nexus">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777966765_f09d7885.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Nexus</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="star 1 key - 4 games (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799747_31f8afae.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Star 1 Key - 4 Games (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd codm">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777970253_9925d11b.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD CODM</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="morella codm">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800484_4f52e2c2.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Morella CODM</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="private brand global (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800417_4d5c8553.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Private Brand Global (iOS)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="aero (global)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777573776_94a66d1d.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Aero (Global)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd (global)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777975033_9f16d135.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD (Global)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="nexus injector">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777974623_57788f0a.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Nexus Injector</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="pouria (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777970880_1fc4428c.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Pouria (Root)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="vikings (global)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777970659_e43d81b8.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Vikings (Global)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="vikings root/emulator (global)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777970770_67b0dda6.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Vikings Root/Emulator (Global)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="pubgm">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_14_20260313_180016_daff.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">PUBGM</div>
                <div class="text-xs text-white/50">Products: 27</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="zolo (2 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799792_4f601f87.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Zolo (2 Games - 1 Key)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="cloud (3 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799430_32039fc0.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Cloud (3 Games - 1 Key)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="oasis (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799657_402c749a.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Oasis (iOS)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="link chip 1 key - 6 games">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777536826_37033d32.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Link Chip 1 Key - 6 Games</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno (6 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777967698_e26f9a21.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno (6 Games - 1 Key)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777969286_52e79fcd.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="contra">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799455_3bfe7329.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Contra</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd mod">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799507_e0bfd34f.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD Mod</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="king">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799597_861b15ac.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">King</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="shield">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799667_679b4152.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Shield</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="silent">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799690_f14aaffb.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Silent</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="x-project">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799780_a643831d.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">X-Project</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="zoon">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799801_1490d7a2.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Zoon</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="dolphin (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799473_33e50d6b.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Dolphin (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="golden (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799518_dec721cf.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Golden (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="king (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799613_fcb073af.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">King (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="vnhax (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799767_f1ce43ca.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">VNHax (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="star 1 key - 4 games (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799747_31f8afae.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Star 1 Key - 4 Games (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="super (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799757_1e0a2988.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Super (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="auto skillz (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799415_dad24c16.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Auto Skillz (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="aegis (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799399_797875ed.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Aegis (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="kc lite (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799532_179519e5.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">KC Lite (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="kc pro (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799544_e897a91b.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">KC Pro (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="kc std (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799561_946f76c8.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">KC STD (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="ninja cn (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799641_943839ae.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Ninja CN (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="ninja kernel (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799630_11a7e06d.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Ninja Kernel (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="spark skillz (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799704_c2293736.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Spark Skillz (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="mlbb">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_13_20260313_175524_9950.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">MLBB</div>
                <div class="text-xs text-white/50">Products: 10</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="chronos">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1774266336_32878a48.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Chronos</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777968737_3117afa2.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno (6 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777967698_e26f9a21.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno (6 Games - 1 Key)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="asura (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777537446_5168c386.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Asura (iOS)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="morella">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800927_89385aee.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Morella</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="pulse">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800939_0b6c894f.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Pulse</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="fluorite (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800912_a551927c.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Fluorite (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="cloud (3 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799430_32039fc0.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Cloud (3 Games - 1 Key)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777975426_3f28d0a7.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="star 1 key - 4 games (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799747_31f8afae.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Star 1 Key - 4 Games (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="crossfire legends">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_7_20260313_180047_a79d.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">Crossfire Legends</div>
                <div class="text-xs text-white/50">Products: 8</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="link chip 1 key - 6 games">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777536826_37033d32.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Link Chip 1 Key - 6 Games</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="luxury (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800338_c4646b67.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Luxury (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xylo cfl">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1776770187_3cf8a8a9.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xylo CFL</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gameplus (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800327_6a857043.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Gameplus (Root)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd cfl">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800280_fd70be32.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD CFL</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd cfl (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800292_aebb97e1.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD CFL (iOS)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777969424_5ec18ff9.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno (6 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777967698_e26f9a21.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno (6 Games - 1 Key)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="delta force">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_8_20260313_180031_bd69.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">Delta Force</div>
                <div class="text-xs text-white/50">Products: 7</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="aorus (2 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799834_1e2d42d6.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Aorus (2 Games - 1 Key)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="link chip 1 key - 6 games">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777536826_37033d32.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Link Chip 1 Key - 6 Games</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777974459_082b0f81.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD (iOS)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="dragon (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800688_7d03d8e8.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Dragon (iOS)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="zolo (2 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799792_4f601f87.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Zolo (2 Games - 1 Key)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="fatality (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800679_d6b67946.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Fatality (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="ninja dfm (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800666_24449d7e.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Ninja DFM (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="bloodstrike">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_5_20260313_180100_ba44.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">Bloodstrike</div>
                <div class="text-xs text-white/50">Products: 3</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xylo pbs">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1776770214_8e769292.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xylo PBS</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777969522_34a85bc8.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno (6 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777967698_e26f9a21.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno (6 Games - 1 Key)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="honor of kings">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_11_20260313_180114_ebe0.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">Honor of Kings</div>
                <div class="text-xs text-white/50">Products: 1</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gameplus">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800873_eb99f4ef.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Gameplus</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="valorant mobile">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_15_20260313_180129_9fe7.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">Valorant Mobile</div>
                <div class="text-xs text-white/50">Products: 3</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="link chip 1 key - 6 games">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777536826_37033d32.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Link Chip 1 Key - 6 Games</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="aorus (2 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799834_1e2d42d6.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Aorus (2 Games - 1 Key)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777975266_eea1f6ae.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD (iOS)</div>
                        <span class="status-pill status-maintenance" data-status-pill data-status-key="maintenance"><i class="bi bi-tools"></i><span class="label">Maintenance</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="free fire">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_10_20260313_180157_b15d.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">Free Fire</div>
                <div class="text-xs text-white/50">Products: 8</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="drip ff">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800737_9d94ad88.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Drip FF</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd pro ff (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800815_c7defdfb.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD Pro FF (iOS)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="hg">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800826_f7f55396.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">HG</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="fluorite ff (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800776_500400e0.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Fluorite FF (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd ff (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800805_356300f4.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD FF (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="drip ff (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800751_a89bc284.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Drip FF (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="eleven (root)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800762_4e59a39f.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Eleven (Root)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="patoteam">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777537115_b16d5a51.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">PatoTeam</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="arena breakout">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_3_20260313_180145_7c5d.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">Arena Breakout</div>
                <div class="text-xs text-white/50">Products: 1</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="link chip 1 key - 6 games">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777536826_37033d32.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Link Chip 1 Key - 6 Games</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="8 ball pool">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_25_20260313_180208_21b8.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">8 Ball Pool</div>
                <div class="text-xs text-white/50">Products: 11</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="aim x">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773796155_fe03208a.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Aim X</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="snake">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800034_c8cb7fea.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Snake</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777969117_6003569a.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="xeno (6 games - 1 key)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1777967698_e26f9a21.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Xeno (6 Games - 1 Key)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbd 8bp (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799938_53c910e2.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">GBD 8BP (iOS)</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="king of shots (basic)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799973_a3d93df2.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">King of Shots (Basic)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="king of shots (mod)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799985_401eb338.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">King of Shots (Mod)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="king of shots (premium)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800000_bd786478.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">King of Shots (Premium)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="ninja.e">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800022_28dbee3a.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Ninja.E</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="wizard">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800047_80463c12.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Wizard</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="star 1 key - 4 games (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773799747_31f8afae.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Star 1 Key - 4 Games (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="farlight 84">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_9_20260313_180221_b887.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">Farlight 84</div>
                <div class="text-xs text-white/50">Products: 1</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="private brand">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800883_b2510ded.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Private Brand</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="arena of valor">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_4_20260313_180233_256a.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">Arena of Valor</div>
                <div class="text-xs text-white/50">Products: 4</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gameplus aov / rov / lqmb">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800158_93d5ca87.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Gameplus AOV / ROV / LQMB</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="private brand taiwan">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800186_9ca3ac9b.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Private Brand Taiwan</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="private brand taiwan (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800140_f4b9d2cb.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Private Brand Taiwan (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="private brand vietnam (ios)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800208_3a68f32f.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Private Brand Vietnam (iOS)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
                      <section class="glass border border-white/10 rounded-xl overflow-hidden cat" data-open="0" data-cat-name="ipa tools">
          <button type="button" class="toggle-cat w-full px-4 py-3 bg-white/5 border-b border-white/10 flex items-center justify-between gap-3">
            <div class="flex items-center gap-2 min-w-0">
                              <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/category-logos/cat_12_20260313_180242_205b.webp" alt=""></span>
                            <div class="min-w-0 text-left">
                <div class="font-extrabold truncate">iPA Tools</div>
                <div class="text-xs text-white/50">Products: 3</div>
              </div>
            </div>
            <i class="bi bi-chevron-down chev text-white/70"></i>
          </button>

          <div class="cat-body p-4">
                          <div class="space-y-2">
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbox / esign">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800620_a53ce10f.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Gbox / Esign</div>
                        <span class="status-pill status-recommended" data-status-pill data-status-key="recommended"><i class="bi bi-star-fill"></i><span class="label">Recommended</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="gbox / esign (ipad)">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800579_1c74b3db.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Gbox / Esign (iPAD)</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                                                                      <div class="rowItem rounded-xl px-3 py-3 flex items-center gap-2" data-product-name="store plus - everyone">
                                          <span class="thumb"><img loading="lazy" decoding="async" src="/assets/uploads/products/p_1773800640_8ed647ed.webp" alt=""></span>
                                        <div class="min-w-0 flex-1">
                      <div class="flex items-center gap-2 min-w-0">
                        <div class="font-bold truncate flex-1">Store Plus - Everyone</div>
                        <span class="status-pill status-up" data-status-pill data-status-key="up"><i class="bi bi-check-circle-fill"></i><span class="label">Up and Running</span></span>
                      </div>
</div>
                  </div>
                              </div>
                      </div>
        </section>
          </div>
  

  <div id="changelogModal" class="xv-modal" data-open="0" aria-hidden="true">
    <div class="xv-modal-overlay" data-close="1"></div>
    <div class="xv-modal-panel">
      <div class="xv-modal-head">
        <div class="flex items-center gap-2 min-w-0">
          <i class="bi bi-broadcast text-accent"></i>
          <div class="xv-modal-title truncate">Live Changelog</div>
          <span class="text-xs text-white/50">(last 48h)</span>
        </div>
        <button type="button" class="xv-modal-close" data-close="1" aria-label="Close"><i class="bi bi-x-lg"></i></button>
      </div>
      <div class="xv-modal-body" id="changelog-modal-body"></div>
    </div>
  </div>

</main>

<script>
(function(){
  // Live changelog render (modal)
  const live = [];
  const modal = document.getElementById('changelogModal');
  const modalBody = document.getElementById('changelog-modal-body');
  const openBtn = document.getElementById('openChangelog');

  function esc(s){return String(s||'').replace(/[&<>"']/g, c=>({"&":"&amp;","<":"&lt;",">":"&gt;","\"":"&quot;","'":"&#39;"}[c]));}
  function fmtTime(ts){
    const d = new Date((ts||0)*1000);
    if (isNaN(d)) return '';
    return d.toLocaleString(undefined, { year:'numeric', month:'short', day:'2-digit', hour:'2-digit', minute:'2-digit' });
  }
  function renderLive(){
    if (!modalBody) return;
    if (!Array.isArray(live) || live.length===0){
      modalBody.innerHTML = '<div class="text-sm text-gray-400">No recent updates.</div>';
      return;
    }
    const rows = live.slice().sort((a,b)=>(b.ts||0)-(a.ts||0)).slice(0,80).map(e=>{
      const brand = esc(e.brand||'');
      const cat = esc(e.category||'');
      const from = esc(e.from||'');
      const to = esc(e.to||'');
      const t = fmtTime(e.ts||0);
      const logo = (e.logo||'') ? `<img src="../${esc(String(e.logo).replace(/^\/+/,''))}" class="w-7 h-7 rounded-lg object-cover border border-white/10" alt="" loading="lazy" decoding="async">` : '<div class="w-7 h-7 rounded-lg bg-white/5 border border-white/10"></div>';
      return `<div class="flex items-start gap-2 py-2 border-b border-white/10 last:border-b-0">
        ${logo}
        <div class="min-w-0">
          <div class="text-sm text-white/90 font-semibold truncate">${brand} <span class="text-white/40 font-normal">(${cat})</span></div>
          <div class="text-xs text-white/60 mt-0.5">${from} <span class="text-white/40">→</span> ${to}</div>
          <div class="text-[11px] text-white/35 mt-0.5">${t}</div>
        </div>
      </div>`;
    }).join('');
    modalBody.innerHTML = `<div class="space-y-0">${rows}</div>`;
  }

  function openModal(){
    if (!modal) return;
    renderLive();
    modal.dataset.open = '1';
    document.body.classList.add('xv-modal-open');
  }
  function closeModal(){
    if (!modal) return;
    modal.dataset.open = '0';
    document.body.classList.remove('xv-modal-open');
  }

  if (openBtn) openBtn.addEventListener('click', (e)=>{ e.preventDefault(); openModal(); });

  if (modal) {
    modal.addEventListener('click', (e)=>{
      const closeEl = e.target && (e.target.getAttribute('data-close')==='1' ? e.target : e.target.closest('[data-close="1"]'));
      if (closeEl) { e.preventDefault(); closeModal(); }
    });
  }

  const cats = Array.from(document.querySelectorAll('section.cat'));
  cats.forEach((sec)=>{
    const btn = sec.querySelector('.toggle-cat');
    if (!btn) return;
    sec.dataset.open = '0';
    btn.addEventListener('click', (e)=>{
      e.preventDefault();
      sec.dataset.open = (sec.dataset.open === '1') ? '0' : '1';
    });
  });

  const params = new URLSearchParams(window.location.search || '');
  const wantedCat = (params.get('category') || '').trim().toLowerCase();
  const wantedProduct = (params.get('product') || '').trim().toLowerCase();
  if (wantedCat) {
    const targetSec = cats.find(sec => (sec.dataset.catName || '').trim().toLowerCase() === wantedCat);
    if (targetSec) {
      targetSec.dataset.open = '1';
      requestAnimationFrame(() => {
        const productRow = wantedProduct ? targetSec.querySelector('[data-product-name="' + CSS.escape(wantedProduct) + '"]') : null;
        const scrollTarget = productRow || targetSec;
        scrollTarget.scrollIntoView({ behavior: 'smooth', block: productRow ? 'center' : 'start' });
      });
    }
  }
})();
</script>

  <script src="/assets/js/xv-global-activity-popups.js" defer></script>
  <script src="/assets/js/xylo-lazy-media-30.js" defer></script>
</body>
</html>
