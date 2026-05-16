

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Creator Program</title>
  <!-- Tailwind is loaded via CDN across the project (local tailwind.min.css is not shipped). -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/vip-purple.css?v=1773418345" />
  <style>
    /* Heavy purple panel like product cards (no washed-out white). */
    .xv-purple-panel{
      background: linear-gradient(135deg, rgba(168,85,247,.18), rgba(10,14,26,.78)) !important;
      border: 1px solid rgba(168,85,247,.22) !important;
      box-shadow: var(--glow-mag) !important;
    }
    .xv-chip{
      background: rgba(168,85,247,.12) !important;
      border: 1px solid rgba(168,85,247,.18) !important;
      box-shadow: 0 0 0 1px rgba(168,85,247,.08) !important;
    }
  
    /* Showcase carousel (match your "Freemium" reference: wide frame + 9:16 screenshots + big circle arrows) */
    .xv-showcase-viewport{
      height: clamp(240px, 46vw, 420px);
      background: radial-gradient(1200px 320px at 50% 0%, rgba(168,85,247,.16), rgba(0,0,0,0)),
                  linear-gradient(135deg, rgba(168,85,247,.10), rgba(10,14,26,.92));
      box-shadow:
        inset 0 0 0 1px rgba(168,85,247,.14),
        0 18px 55px rgba(0,0,0,.55);
      overflow: hidden;
    }
    .xv-showcase-arrow{
      position:absolute;
      top:50%;
      transform:translateY(-50%);
      width:44px;
      height:44px;
      border-radius:999px;
      display:flex;
      align-items:center;
      justify-content:center;
      /* Minimal but more visible purple gradient arrow */
      background:
        radial-gradient(circle at 30% 22%, rgba(212,120,255,0.40), transparent 60%),
        linear-gradient(135deg, rgba(12,7,22,0.78), rgba(132,58,220,0.72)) !important;
      border:1px solid rgba(212,120,255,.30) !important;
      color: rgba(255,255,255,0.96) !important;
      text-shadow: 0 0 10px rgba(212,120,255,0.55) !important;
      box-shadow:
        0 0 0 1px rgba(212,120,255,0.10) inset,
        0 12px 26px rgba(0,0,0,.34),
        0 0 34px rgba(212,120,255,.20) !important;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      cursor:pointer;
      z-index:2;
      opacity:.92;
      user-select:none;
    }
    .xv-showcase-prev{ left: 14px; }
    .xv-showcase-next{ right: 14px; }
    .xv-showcase-arrow:active{
      transform: translateY(-50%) scale(.96);
      filter: brightness(1.06);
    }
    .xv-carousel-track{
      will-change: transform;
      display:flex;
      align-items:center;
      gap: 26px;
      padding: 0 26px;
    }
    .xv-slide{
      height: 100%;
      display:flex;
      align-items:center;
      justify-content:center;
      flex: 0 0 auto;
      opacity: .65;
      transform: scale(.92);
      transition: transform .22s ease, opacity .22s ease;
    }
    .xv-slide.is-active{ opacity: 1; transform: scale(1.02); }
    .xv-slide.is-prev, .xv-slide.is-next{ opacity: .85; transform: scale(.96); }
    .xv-slide-inner{
      width: var(--xvPhoneW, 220px);
      height: var(--xvPhoneH, 390px);
      border-radius: 22px;
      background: rgba(0,0,0,.35);
      border: 1px solid rgba(255,255,255,.10);
      box-shadow: 0 16px 40px rgba(0,0,0,.55);
      overflow: hidden;
    }
    .xv-slide img{ display:block; width:100%; height:100%; object-fit: contain; }
    @media (max-width: 640px){
      .xv-showcase-arrow{ width: 54px; height: 54px; font-size: 26px; }
      .xv-showcase-prev{ left: 10px; }
      .xv-showcase-next{ right: 10px; }
    }
    </style>
</head>
<body class="xv-modal-scroll text-gray-100 min-h-screen">
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


<main class="p-4">
  <div class="max-w-4xl mx-auto">

    <!-- Header / hero -->
    <div class="glass xv-purple-panel rounded-2xl p-5">
      <div class="flex items-start justify-between gap-3">
        <div>
          <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight">Creator Program</h1>
          <p class="text-white/75 mt-2 text-sm md:text-base">Earn keys, big discounts, benefits and more!</p>
        </div>
        <a href="#apply" class="xv-chip inline-flex items-center gap-2 rounded-full px-4 py-2 text-sm font-extrabold">Apply</a>
      </div>
    </div>

    
    <!-- 1) BENEFITS -->
    <section class="mt-6">
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-extrabold tracking-tight">Benefits</h2></div>
      <div class="mt-3 grid gap-3 md:grid-cols-2">
        <div class="glass xv-purple-panel rounded-2xl p-5">
          <div class="font-bold text-white/90">✅ Creator Rewards</div>
          <ul class="mt-3 space-y-2 text-white/70 text-sm list-disc pl-5">
                          <li>Free keys for Xylo Products (e.g. Xylo V1, Xylo V2, Xylo CFL, Xylo PBS)</li>
                          <li>30% discount for all products</li>
                      </ul>
        </div>
        <div class="glass xv-purple-panel rounded-2xl p-5">
          <div class="font-bold text-white/90">🎁 Tools, Materials, Access</div>
          <ul class="mt-3 space-y-2 text-white/70 text-sm list-disc pl-5">
                          <li>Access to editing materials and resources (e.g. templates, packs guides)</li>
                          <li>Access to VIP apps (e.g. Capcut Pro, Remini Pro, X-Recorder Premium)</li>
                      </ul>
        </div>
      </div>
    

  <div class="mt-4 glass xv-purple-panel rounded-2xl p-4 xv-carousel" data-xv-carousel>
    <div class="flex items-center justify-between gap-3 mb-3">
      <div class="font-extrabold text-white/90">Highlights</div>
    </div>

    <div class="relative overflow-hidden rounded-2xl border border-purple-500/15 xv-showcase-viewport" data-xv-viewport>
      <div class="xv-carousel-track flex transition-transform duration-300 ease-out" data-xv-track>
                  <div class="xv-slide shrink-0">
            <div class="xv-slide-inner">
              <img src="/assets/uploads/creator_carousel/6723_20260219_090502_c2724961.jpg" alt="Creator highlight" loading="lazy" />
            </div>
          </div>
                  <div class="xv-slide shrink-0">
            <div class="xv-slide-inner">
              <img src="/assets/uploads/creator_carousel/6717_20260219_090502_3670e9ab.jpg" alt="Creator highlight" loading="lazy" />
            </div>
          </div>
                  <div class="xv-slide shrink-0">
            <div class="xv-slide-inner">
              <img src="/assets/uploads/creator_carousel/6694_20260219_090502_a11417fb.jpg" alt="Creator highlight" loading="lazy" />
            </div>
          </div>
                  <div class="xv-slide shrink-0">
            <div class="xv-slide-inner">
              <img src="/assets/uploads/creator_carousel/7658_20260313_181251_91ebfe69.webp" alt="Creator highlight" loading="lazy" />
            </div>
          </div>
                  <div class="xv-slide shrink-0">
            <div class="xv-slide-inner">
              <img src="/assets/uploads/creator_carousel/7658_20260313_181259_7890366b.webp" alt="Creator highlight" loading="lazy" />
            </div>
          </div>
              </div>

      <!-- Side arrow buttons (like showcase carousel) -->
      <button type="button" class="xv-showcase-arrow xv-showcase-prev" aria-label="Previous" data-xv-prev>‹</button>
      <button type="button" class="xv-showcase-arrow xv-showcase-next" aria-label="Next" data-xv-next>›</button>
    </div>

    <div class="mt-3 flex items-center justify-center gap-2" data-xv-dots></div>
  </div>

  
    </section>

    <!-- 2) REQUIREMENTS -->
    <section class="mt-6">
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-extrabold tracking-tight">Requirements</h2></div>
      <div class="mt-3 glass xv-purple-panel rounded-2xl p-5">
        <ul class="space-y-2 text-white/70 text-sm list-disc pl-5">
                      <li>Active Telegram account</li>
                      <li>Public Platform (YouTube / TikTok / Facebook)</li>
                      <li>Very Active</li>
                      <li>Must follow Creator Program rules and submit proofs after approval</li>
                  </ul>
      </div>
    </section>

    <!-- 3) APPLICATION -->
    <section id="apply" class="mt-6">
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-extrabold tracking-tight">Application</h2>
        <span class="xv-chip rounded-full px-3 py-1 text-xs">Apply</span>
      </div>
      <div class="mt-3 glass xv-purple-panel rounded-2xl p-5">
        <p class="text-white/70 text-sm">Fill out the form. After submit, you’ll get a copy-ready template (no proofs yet).</p>

        
        <form method="post" class="mt-4 grid gap-3" data-guest-auth="submit creator application">
          <div class="grid gap-3 md:grid-cols-2">
            <input name="name" placeholder="Your Name" class="w-full rounded-xl bg-black/30 border border-white/10 px-4 py-3" />
            <input name="telegram" placeholder="Telegram Username (e.g. @xylo)" class="w-full rounded-xl bg-black/30 border border-white/10 px-4 py-3" />
          </div>
          <div class="grid gap-3 md:grid-cols-2">
            <select name="role" class="w-full rounded-xl bg-black/30 border border-white/10 px-4 py-3">
              <option value="">Select Role</option>
              <option value="Streamer">Streamer</option>
              <option value="Editor / Content Creator">Editor / Content Creator</option>
              <option value="Feedback Sender">Feedback Sender</option>
            </select>
            <input name="link" placeholder="Channel / Portfolio Link" class="w-full rounded-xl bg-black/30 border border-white/10 px-4 py-3" />
          </div>
          <textarea name="note" rows="4" placeholder="Tell us what you create and why you want to join" class="w-full rounded-xl bg-black/30 border border-white/10 px-4 py-3"></textarea>
          <button class="w-full rounded-xl px-4 py-3 font-extrabold text-black" style="background:linear-gradient(135deg, rgba(255,210,80,.92), rgba(255,160,0,.85));">Submit Application</button>
        </form>
      </div>
    </section>

    <!-- 4) VAULT -->
    <section class="mt-6">
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-extrabold tracking-tight">Vault</h2></div>
      <div class="mt-3 glass xv-purple-panel rounded-2xl p-5">
        <div class="text-white/80 text-sm">Vault contents (available after approval):</div>
        <ul class="mt-3 space-y-2 text-white/70 text-sm list-disc pl-5">
                      <li>Editing Materials</li>
                      <li>Premium Apps</li>
                      <li>Updated APKs / Files</li>
                      <li>Tips &amp; Tricks</li>
                      <li>Creator Benefits</li>
                      <li>Proof Submission Guide (Instructions for earning free keys)</li>
                  </ul>
      </div>
    </section>

    <!-- 5) RULES -->
    <section class="mt-6 mb-8">
      <div class="flex items-center justify-between">
        <h2 class="text-xl font-extrabold tracking-tight">Rules</h2></div>
      <div class="mt-3 glass xv-purple-panel rounded-2xl p-5">
        <ul class="space-y-2 text-white/70 text-sm list-disc pl-5">
                      <li>Streamer: 1 hour live stream = 1 day key every 1000 viewers</li>
                      <li>Editor / Content Creator: 1 video = 1–3 day key (depends on duration &amp; quality)</li>
                      <li>Feedback Sender: 20 feedbacks = 1 day key</li>
                      <li>Discount Rule: When you avail a key with the 40% discount, you must post a 1-minute edit/gameplay or stream for 2 hours every day until your key expires.</li>
                      <li>Keys can be used personally or sold</li>
                      <li>Note: Abuse/scam = removal from the program.</li>
                  </ul>
      </div>
    </section>

  </div>
</main>



<script>
(function(){
  function clamp(n, lo, hi){ return Math.max(lo, Math.min(hi, n)); }

  function initCarousel(root){
    var viewport = root.querySelector('[data-xv-viewport]');
    var track = root.querySelector('[data-xv-track]');
    if (!viewport || !track) return;

    var slides = Array.prototype.slice.call(track.children || []);
    var count = slides.length || 0;

    var btnPrev = root.querySelector('[data-xv-prev]');
    var btnNext = root.querySelector('[data-xv-next]');
    var dotsWrap = root.querySelector('[data-xv-dots]');

    var idx = 0;
    // We keep ONE active index, but show a "peek" layout (center + partial sides) like your reference.
    var perView = 1;
    var gap = 18; // px
    var step = 0; // px (slide width + gap)
    var maxIdx = 0;
    var baseOffset = 0; // px (centering offset)

    function compute(){
      // "Freemium"-style: centered 9:16 screenshot with prev/next peeking.
      // We keep ONE active index, but show 3 visually (center + partial sides) by:
      // - making slides narrower than the viewport, and
      // - adding symmetric padding so the active slide is centered.
      maxIdx = Math.max(0, count - 1);

      var vw = viewport.clientWidth;
      var vh = viewport.clientHeight;

      // Goal: Freemium-style showcase (wide stage) where 9:16 screenshots sit inside
      // smaller "phone" rectangles, with prev/next partially visible.
      var phoneH = Math.max(240, Math.min(380, Math.floor(vh * 0.86)));
      var phoneW = Math.max(160, Math.min(280, Math.floor(phoneH * 9 / 16)));
      // Mobile: keep it smaller so it doesn't dominate the whole page.
      if (window.innerWidth < 640) phoneW = Math.min(phoneW, Math.floor(vw * 0.62));

      viewport.style.setProperty('--xvPhoneH', phoneH + 'px');
      viewport.style.setProperty('--xvPhoneW', phoneW + 'px');

      var slideW = phoneW;

      // Center the active slide between the arrows (Freemium-style).
      step = slideW + gap;
      baseOffset = Math.floor((vw - slideW) / 2);

      track.style.gap = gap + 'px';
      track.style.paddingLeft = '0px';
      track.style.paddingRight = '0px';
      slides.forEach(function(s){
        s.style.width = slideW + 'px';
        s.style.height = '100%';
      });

      if (dotsWrap){
        dotsWrap.innerHTML = '';
        // One dot per image.
        for (var i=0;i<count;i++){
          var b = document.createElement('button');
          b.type = 'button';
          b.className = 'h-2.5 w-2.5 rounded-full';
          b.setAttribute('data-xv-dot', String(i));
          b.style.background = 'rgba(255,255,255,.25)';
          dotsWrap.appendChild(b);
        }
      }

      idx = clamp(idx, 0, maxIdx);
      paint();
    }

    function paint(){
      track.style.transform = 'translateX(' + (baseOffset - (idx * step)) + 'px)';

      // coverflow-ish emphasis (apply to inner frame so layout stays stable)
      slides.forEach(function(s, i){
        var d = Math.abs(i - idx);
        var inner = s.querySelector('.xv-slide-inner');
        if (!inner) return;
        inner.style.transition = 'transform 180ms ease, opacity 180ms ease, filter 180ms ease';
        if (d === 0){
          inner.style.opacity = '1';
          inner.style.transform = 'scale(1)';
          inner.style.filter = 'saturate(1.06)';
        } else if (d === 1){
          inner.style.opacity = '0.78';
          inner.style.transform = 'scale(0.96)';
          inner.style.filter = 'saturate(0.92)';
        } else {
          inner.style.opacity = '0.55';
          inner.style.transform = 'scale(0.92)';
          inner.style.filter = 'saturate(0.85)';
        }

        // Mark active/prev/next so CSS can do a Freemium-like focus effect.
        s.classList.toggle('is-active', i === idx);
        s.classList.toggle('is-prev', i === (idx - 1 + slides.length) % slides.length);
        s.classList.toggle('is-next', i === (idx + 1) % slides.length);
      });

      if (dotsWrap){
        var dots = dotsWrap.querySelectorAll('[data-xv-dot]');
        dots.forEach(function(d){ d.style.background = 'rgba(255,255,255,.25)'; });
        var active = dotsWrap.querySelector('[data-xv-dot="'+idx+'"]');
        if (active) active.style.background = 'rgba(255,255,255,.85)';
      }
    }

    function go(n){
      idx = clamp(n, 0, maxIdx);
      paint();
    }

    if (btnPrev) btnPrev.addEventListener('click', function(){ go(idx-1); });
    if (btnNext) btnNext.addEventListener('click', function(){ go(idx+1); });

    if (dotsWrap){
      dotsWrap.addEventListener('click', function(e){
        var t = e.target;
        if (!t || !t.getAttribute) return;
        var v = t.getAttribute('data-xv-dot');
        if (v === null) return;
        var n = parseInt(v, 10);
        if (!isNaN(n)) go(n);
      });
    }

    // Swipe (mobile)
    var startX = null;
    viewport.addEventListener('touchstart', function(e){
      if (!e.touches || !e.touches[0]) return;
      startX = e.touches[0].clientX;
    }, {passive:true});
    viewport.addEventListener('touchend', function(e){
      if (startX === null) return;
      var endX = (e.changedTouches && e.changedTouches[0]) ? e.changedTouches[0].clientX : startX;
      var dx = endX - startX;
      startX = null;
      if (Math.abs(dx) < 35) return;
      if (dx < 0) go(idx+1); else go(idx-1);
    });

    window.addEventListener('resize', function(){ compute(); });

    compute();
  }

  document.querySelectorAll('[data-xv-carousel]').forEach(initCarousel);
})();
</script>

  <script src="/assets/js/xv-global-activity-popups.js" defer></script>
  <script src="/assets/js/xylo-lazy-media-30.js" defer></script>
</body>
</html>
