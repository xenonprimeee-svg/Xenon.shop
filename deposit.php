

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xylo Hacks | Deposit</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Keep Tailwind tokens consistent with the rest of the XYLO VIP UI
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            darkbg: '#07040f',
            panel: 'rgba(255,255,255,.06)',
            panel2: 'rgba(255,255,255,.08)',
            vipPurple: '#a855f7',
            vipViolet: '#7c3aed'
          }
        }
      }
    };
  </script>
  <!-- Theme CSS (match Status page; bust cache so header/sidebar update) -->
  <link rel="stylesheet" href="/assets/css/style.css?v=1773418345">
  <link rel="stylesheet" href="/assets/css/vip-purple.css?v=1773418345">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .xv-glass {
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.12);
      backdrop-filter: blur(10px);
    }
    .xv-ring {
      box-shadow: 0 0 0 1px rgba(167,139,250,.25), 0 0 24px rgba(168,85,247,.18);
    }
    .xv-btn {
      background: linear-gradient(135deg, rgba(168,85,247,.95), rgba(99,102,241,.95));
      box-shadow: 0 10px 28px rgba(168,85,247,.22);
    }
    .xv-btn:hover {
      box-shadow: 0 12px 36px rgba(168,85,247,.30);
      transform: translateY(-1px);
    }

    /* Premium dark green CTA button (Add Balance) */
    button.xv-btn-green,
    .xv-btn-green,
    [type="submit"].xv-btn-green {
      background:
        radial-gradient(circle at top left, rgba(110,231,183,.18), transparent 38%),
        linear-gradient(135deg, #07140d 0%, #0b2216 30%, #0f3a25 62%, #16a34a 100%) !important;
      border: 1px solid rgba(110,231,183,.20) !important;
      box-shadow:
        inset 0 1px 0 rgba(255,255,255,.10),
        0 12px 32px rgba(5, 46, 22, .42),
        0 0 0 1px rgba(22,163,74,.12) !important;
      color: #ecfdf5 !important;
      font-weight: 800;
      text-shadow: 0 1px 0 rgba(0,0,0,.28);
    }
    button.xv-btn-green:hover,
    .xv-btn-green:hover,
    [type="submit"].xv-btn-green:hover {
      background:
        radial-gradient(circle at top left, rgba(134,239,172,.20), transparent 40%),
        linear-gradient(135deg, #08170f 0%, #0d2919 28%, #14532d 65%, #22c55e 100%) !important;
      border-color: rgba(110,231,183,.28) !important;
      box-shadow:
        inset 0 1px 0 rgba(255,255,255,.14),
        0 16px 40px rgba(5, 46, 22, .52),
        0 0 0 1px rgba(110,231,183,.22) !important;
      transform: translateY(-1px);
      filter: saturate(1.06) brightness(1.04);
    }

    /* Payment method dropdown: make it readable on mobile */
    .xv-pmMenu {
      background: rgba(10, 12, 20, .96) !important;
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-color: rgba(34,197,94,.25) !important;
    }
    .xv-pmMenu button {
      padding: 14px 14px;
    }
    .xv-pmMenu button + button {
      border-top: 1px solid rgba(255,255,255,.08);
    }
    .xv-pmMenu button:hover {
      background: rgba(34,197,94,.08);
    }
    .xv-chip {
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.10);
    }
    .xv-topup-stack {
      position: relative;
      z-index: 20;
      overflow: visible !important;
    }
    .xv-topup-stack form,
    .xv-topup-stack .xv-pm-anchor {
      position: relative;
      overflow: visible !important;
    }
    .xv-chip.selected {
      border-color: rgba(168,85,247,.55);
      box-shadow: 0 0 0 1px rgba(168,85,247,.25), 0 0 18px rgba(168,85,247,.20);
    }

    /* Lightweight deposit notice continue animation. Uses only opacity/transform for smooth GPU-friendly motion. */
    #xvDepositNoticeModal {
      opacity: 0;
      transition: opacity 220ms ease;
    }
    #xvDepositNoticeModal.xv-deposit-notice-open {
      opacity: 1;
    }
    #xvDepositNoticeModal.xv-deposit-notice-closing {
      opacity: 0;
      pointer-events: none;
    }
    #xvDepositNoticeModal .xv-deposit-notice-card {
      opacity: .96;
      transform: translateY(10px) scale(.98);
      transition: transform 220ms ease, opacity 220ms ease;
      will-change: transform, opacity;
    }
    #xvDepositNoticeModal.xv-deposit-notice-open .xv-deposit-notice-card {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
    #xvDepositNoticeModal.xv-deposit-notice-closing .xv-deposit-notice-card {
      opacity: 0;
      transform: translateY(-8px) scale(.985);
    }
    @media (prefers-reduced-motion: reduce) {
      #xvDepositNoticeModal,
      #xvDepositNoticeModal .xv-deposit-notice-card {
        transition: none;
      }
      #xvDepositNoticeModal .xv-deposit-notice-card,
      #xvDepositNoticeModal.xv-deposit-notice-open .xv-deposit-notice-card,
      #xvDepositNoticeModal.xv-deposit-notice-closing .xv-deposit-notice-card {
        transform: none;
      }
    }
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
        <a href="/status.php" class="xv-tab " aria-label="Status">
          <i class="bi bi-activity xv-tabIcon" aria-hidden="true"></i>
          <span class="xv-tabLabel">Status</span>
        </a>
        <a href="/deposit.php" class="xv-tab xv-tabActive" aria-label="Deposit">
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


  <!-- Deposit Important Notice Modal -->
  <div id="xvDepositNoticeModal" class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/75 px-4 py-6 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="xvDepositNoticeTitle">
    <div class="xv-deposit-notice-card w-full max-w-md rounded-3xl border border-amber-300/25 bg-[#090d16] p-5 sm:p-6 text-white shadow-2xl shadow-black/40">
      <div class="flex items-start gap-3">
        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border border-amber-300/25 bg-amber-400/10 text-2xl">⚠️</div>
        <div>
          <h2 id="xvDepositNoticeTitle" class="text-xl font-extrabold tracking-tight text-amber-100">IMPORTANT NOTICE</h2>
          <p class="mt-1 text-sm text-white/60">Please read and confirm before continuing to deposits.</p>
        </div>
      </div>

      <div class="mt-5 space-y-3 rounded-2xl border border-white/10 bg-white/[.04] p-4 text-sm sm:text-base">
        <div class="flex gap-3"><span>📦</span><div><span class="font-bold text-white">Delivery Time:</span> <span class="text-white/80">Instant–48 hours</span></div></div>
        <div class="flex gap-3"><span>⏱</span><div><span class="font-bold text-white">Support Response:</span> <span class="text-white/80">Instant–6 hours</span></div></div>
        <div class="flex gap-3"><span>💸</span><div><span class="font-bold text-white">Refund Policy:</span> <span class="text-white/80">Strictly enforced</span></div></div>
      </div>

      <label class="mt-5 flex cursor-pointer items-start gap-3 rounded-2xl border border-white/10 bg-black/20 p-4 text-sm text-white/85 hover:bg-white/[.04]">
        <input id="xvDepositNoticeAgree" type="checkbox" class="mt-0.5 h-4 w-4 rounded border-white/20 bg-black/30 accent-amber-400">
        <span>I understand and agree</span>
      </label>

      <div class="mt-5">
        <button id="xvDepositNoticeContinue" type="button" disabled class="w-full rounded-2xl border border-white/10 bg-white/10 px-4 py-3 text-sm font-extrabold text-white/45 transition disabled:cursor-not-allowed disabled:opacity-60 enabled:bg-amber-400 enabled:text-black enabled:hover:bg-amber-300">
          Continue (<span id="xvDepositNoticeCountdown">5</span>s)
        </button>
      </div>
    </div>
  </div>


  <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
      <div>
        <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight">Top Up Balance</h1>
        <p class="text-white/70 mt-1">Submit your proof and we will credit your balance after review.</p>
      </div>
      <div class="xv-glass xv-ring rounded-2xl px-4 py-4 border border-emerald-400/20 bg-emerald-500/10 w-full lg:w-[340px] lg:max-w-[340px]">
        <div class="text-xs uppercase tracking-[0.18em] text-emerald-200/70">Minimum top-up</div>
        <div class="mt-1 text-xl font-extrabold text-emerald-200">✦ 50 XC</div>
        <div class="mt-3 text-[11px] font-semibold uppercase tracking-[0.16em] text-white/55">Rates</div>
        <div class="mt-2 space-y-2">
          <div class="flex items-center justify-between rounded-xl border border-white/8 bg-black/15 px-3 py-2 text-sm">
            <span class="text-white/70">USD</span>
            <span class="font-semibold text-emerald-100">$1 = ✦ 50 XC</span>
          </div>
          <div class="flex items-center justify-between rounded-xl border border-white/8 bg-black/15 px-3 py-2 text-sm">
            <span class="text-white/70">PHP</span>
            <span class="font-semibold text-emerald-100">₱1 = ✦ 1 XC</span>
          </div>
        </div>
        <div class="mt-3 text-xs text-white/50">For quick reference only.</div>
      </div>
    </div>

    
    <section class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-6 overflow-visible">
      <div class="xv-glass xv-topup-stack rounded-3xl p-5 sm:p-6 relative z-20 overflow-visible">
        <h2 class="text-lg font-bold">Create a Top-up</h2>
        <p class="text-sm text-white/70 mt-1">Choose amount, method, then upload proof.</p>

        <form class="mt-5 space-y-4 relative overflow-visible" method="POST" enctype="multipart/form-data" novalidate data-guest-topup="1">
          <input type="hidden" name="topup_submit" value="1" />

          <div>
            <label class="block text-sm text-white/80 mb-2">Quick amounts</label>
            <div class="flex flex-wrap gap-2">
              <button type="button" class="xv-chip rounded-xl px-3 py-2 text-sm hover:opacity-90 transition" data-amt="50">✦ 50 XC</button>
              <button type="button" class="xv-chip rounded-xl px-3 py-2 text-sm hover:opacity-90 transition" data-amt="100">✦ 100 XC</button>
              <button type="button" class="xv-chip rounded-xl px-3 py-2 text-sm hover:opacity-90 transition selected" data-amt="300">✦ 300 XC <span class="ml-2 text-[10px] px-2 py-0.5 rounded-full bg-white/10 border border-white/10">Most Popular</span></button>
              <button type="button" class="xv-chip rounded-xl px-3 py-2 text-sm hover:opacity-90 transition" data-amt="500">✦ 500 XC</button>
              <button type="button" class="xv-chip rounded-xl px-3 py-2 text-sm hover:opacity-90 transition" data-amt="1000">✦ 1000 XC</button>
            </div>
          </div>

          <div>
            <label class="block text-sm text-white/80 mb-2">Amount</label>
            <input id="amountInput" name="amount" type="number" min="50" step="1"
                   class="w-full rounded-2xl bg-black/20 border border-white/10 px-4 py-3 outline-none focus:border-violet-300/40 focus:ring-2 focus:ring-violet-500/20"
                   placeholder="Enter amount (min ✦ 50 XC)" required>
          </div>

          <div>
            <label class="block text-sm text-white/80 mb-2">Amount to Pay</label>
            <input id="amountToPay" type="text" readonly
                   class="w-full rounded-2xl bg-black/20 border border-white/10 px-4 py-3 text-white/85 outline-none"
                   value="₱0.00 or $0.00">
          </div>

          <div>
            <label class="block text-sm text-white/80 mb-2">Payment method</label>

            <input type="hidden" name="method_id" id="methodIdInput" value="">
            <div class="relative xv-pm-anchor z-30 overflow-visible">
              <button type="button" id="pmBtn"
                class="w-full flex items-center justify-between gap-3 rounded-2xl bg-black/20 border border-white/10 px-4 py-3 outline-none hover:bg-white/5 transition">
                <span class="flex items-center gap-3 min-w-0">
                  <span id="pmIconWrap" class="w-10 h-10 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center overflow-hidden flex-shrink-0">
                    <i class="bi bi-credit-card text-white/60"></i>
                  </span>
                  <span class="min-w-0">
                    <div id="pmName" class="font-semibold text-white/90 truncate">Select method…</div>
                    <div id="pmHint" class="text-xs text-white/50 truncate">Tap to choose your payment method</div>
                  </span>
                </span>
                <i class="bi bi-chevron-down text-white/70"></i>
              </button>

              <div id="pmMenu" class="hidden absolute z-[9999] mt-2 w-full xv-glass xv-pmMenu rounded-2xl border border-white/10 overflow-hidden">
                <div class="max-h-72 overflow-auto">
                                      <button type="button"
                      class="w-full px-4 py-3 flex items-center gap-3 hover:bg-white/5 transition text-left"
                      data-id="1"
                      data-name="𝗚𝗰𝗮𝘀𝗵"
                      data-instr="Send your payment to the provided phone number above."
                      data-acc="09610525237"
                      data-icon="../assets/uploads/payment_methods/pm_1773414565_7b59e7b4.png">
                      <span class="w-10 h-10 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center overflow-hidden flex-shrink-0">
                                                  <img src="../assets/uploads/payment_methods/pm_1773414565_7b59e7b4.png" alt="" class="w-full h-full object-cover" loading="lazy" decoding="async">
                                              </span>
                      <span class="min-w-0">
                        <div class="font-semibold text-white/90 truncate">𝗚𝗰𝗮𝘀𝗵</div>
                        <div class="text-xs text-white/50 truncate">09610525237</div>
                      </span>
                    </button>
                                      <button type="button"
                      class="w-full px-4 py-3 flex items-center gap-3 hover:bg-white/5 transition text-left"
                      data-id="2"
                      data-name="𝗕𝗶𝘁𝗰𝗼𝗶𝗻 𝗖𝗿𝘆𝗽𝘁𝗼"
                      data-instr="🌐 𝗡𝗲𝘁𝘄𝗼𝗿𝗸: bep20
Send your payment to the provided address above."
                      data-acc="0x55739c8a8c45ecc0de4e409f23dbf1076e4fdaeb"
                      data-icon="../assets/uploads/payment_methods/pm_1773997404_0b6d4ca5.png">
                      <span class="w-10 h-10 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center overflow-hidden flex-shrink-0">
                                                  <img src="../assets/uploads/payment_methods/pm_1773997404_0b6d4ca5.png" alt="" class="w-full h-full object-cover" loading="lazy" decoding="async">
                                              </span>
                      <span class="min-w-0">
                        <div class="font-semibold text-white/90 truncate">𝗕𝗶𝘁𝗰𝗼𝗶𝗻 𝗖𝗿𝘆𝗽𝘁𝗼</div>
                        <div class="text-xs text-white/50 truncate">0x55739c8a8c45ecc0de4e409f23dbf1076e4fdaeb</div>
                      </span>
                    </button>
                                      <button type="button"
                      class="w-full px-4 py-3 flex items-center gap-3 hover:bg-white/5 transition text-left"
                      data-id="3"
                      data-name="𝗨𝗦𝗗𝗧 𝗖𝗿𝘆𝗽𝘁𝗼"
                      data-instr="🌐 𝗡𝗲𝘁𝘄𝗼𝗿𝗸: bep20
Send your payment to the provided address above."
                      data-acc="0x55739c8a8c45ecc0de4e409f23dbf1076e4fdaeb"
                      data-icon="../assets/uploads/payment_methods/pm_1773997722_78658d1f.png">
                      <span class="w-10 h-10 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center overflow-hidden flex-shrink-0">
                                                  <img src="../assets/uploads/payment_methods/pm_1773997722_78658d1f.png" alt="" class="w-full h-full object-cover" loading="lazy" decoding="async">
                                              </span>
                      <span class="min-w-0">
                        <div class="font-semibold text-white/90 truncate">𝗨𝗦𝗗𝗧 𝗖𝗿𝘆𝗽𝘁𝗼</div>
                        <div class="text-xs text-white/50 truncate">0x55739c8a8c45ecc0de4e409f23dbf1076e4fdaeb</div>
                      </span>
                    </button>
                                  </div>
              </div>
            </div>

            <div id="pmDetails" class="mt-3 hidden xv-glass rounded-2xl p-4 border border-white/10">
              <div class="flex items-center justify-between gap-3">
                <div class="text-sm font-semibold text-white/90">Account</div>
                <button type="button" id="pmCopyBtn" class="text-xs px-3 py-2 rounded-xl border border-emerald-300/20 bg-emerald-500/10 text-emerald-100 hover:bg-emerald-500/15 transition">
                  <i class="bi bi-clipboard2 mr-1"></i>Copy
                </button>
              </div>
              <div class="mt-2 flex items-center gap-2">
                <input id="pmAccount" type="text" readonly
                  class="w-full rounded-2xl bg-black/20 border border-white/10 px-4 py-3 text-white/80 outline-none"
                  value="">
              </div>
              <div id="pmInstructions" class="mt-3 text-sm text-white/70 whitespace-pre-line"></div>
            </div>

            <div id="pmCopyToast" class="fixed bottom-5 left-1/2 -translate-x-1/2 hidden z-[80] px-4 py-2 rounded-2xl border border-emerald-300/25 bg-emerald-500/15 text-emerald-100 xv-green-glow text-sm">
              Copied!
            </div>
          </div></div>
          <div>
              <label class="block text-sm text-white/80 mb-2">Upload proof</label>
              <input name="proof" type="file" accept="image/png,image/jpeg,image/webp" required
                     class="w-full rounded-2xl bg-black/20 border border-white/10 px-4 py-3 text-white/80 file:mr-4 file:rounded-xl file:border-0 file:bg-white/10 file:px-3 file:py-2 file:text-white hover:file:bg-white/15 transition">
              <div class="text-xs text-white/50 mt-2">Accepted: JPG/PNG/WEBP • Max 5MB • Clear success screen</div>
            </div>
          </div>

          <button class="w-full xv-btn-green rounded-2xl py-3 font-extrabold tracking-wide transition" type="submit">
            Add Balance
          </button>
        </form>
      </div>

      <div class="xv-glass rounded-3xl p-5 sm:p-6">
        <div class="flex items-center justify-between">
          <h2 class="text-lg font-bold">Top-up History</h2>
          <span class="text-xs text-white/60">Latest 7</span>
        </div>

        <div class="mt-4 space-y-3">
                      <div class="text-white/60 text-sm">No top-ups yet.</div>
          
          <div class="pt-2">
            <a href="history.php" class="inline-flex w-full items-center justify-center gap-2 rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-sm font-semibold text-white/90 transition hover:bg-white/10 hover:border-white/15">
              <i class="bi bi-clock-history"></i>
              <span>View All</span>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script>
    // Quick amount buttons
    document.querySelectorAll('[data-amt]').forEach(btn => {
      btn.addEventListener('click', () => {
        const amt = btn.getAttribute('data-amt');
        const input = document.getElementById('amountInput');
        if (input) input.value = amt;
        document.querySelectorAll('[data-amt]').forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
      });
    });

    // Method instructions
    const sel = document.getElementById('methodSelect');
    const box = document.getElementById('methodInstructions');
    function updateInstr() {
      if (!sel || !box) return;
      const opt = sel.options[sel.selectedIndex];
      const instr = opt ? opt.getAttribute('data-instr') : '';
      if (instr && instr.trim().length) {
        box.textContent = instr;
        box.classList.remove('hidden');
      } else {
        box.textContent = '';
        box.classList.add('hidden');
      }
    }
    if (sel) {
      sel.addEventListener('change', updateInstr);
      updateInstr();
    }
  </script>

<script>
(function(){
  // Quick amounts
  const amtInput = document.getElementById('amountInput');
  document.querySelectorAll('[data-amt]').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const v = btn.getAttribute('data-amt') || '';
      if (amtInput) amtInput.value = v;
      document.querySelectorAll('[data-amt].selected').forEach(b=>b.classList.remove('selected'));
      btn.classList.add('selected');
    });
  });

  // Payment method dropdown
  const btn = document.getElementById('pmBtn');
  const menu = document.getElementById('pmMenu');
  const nameEl = document.getElementById('pmName');
  const hintEl = document.getElementById('pmHint');
  const iconWrap = document.getElementById('pmIconWrap');
  const idInput = document.getElementById('methodIdInput');
  const details = document.getElementById('pmDetails');
  const accInput = document.getElementById('pmAccount');
  const instrEl = document.getElementById('pmInstructions');
  const copyBtn = document.getElementById('pmCopyBtn');
  const toast = document.getElementById('pmCopyToast');

  function closeMenu(){ if(menu) menu.classList.add('hidden'); }
  function openMenu(){ if(menu) menu.classList.remove('hidden'); }
  function toggleMenu(){ if(!menu) return; menu.classList.contains('hidden') ? openMenu() : closeMenu(); }

  if (btn) btn.addEventListener('click', (e)=>{ e.preventDefault(); toggleMenu(); });

  document.addEventListener('click', (e)=>{
    if (!menu || !btn) return;
    const inside = menu.contains(e.target) || btn.contains(e.target);
    if (!inside) closeMenu();
  });

  function setSelected(opt){
    const id = opt.getAttribute('data-id') || '';
    const nm = opt.getAttribute('data-name') || 'Selected';
    const instr = opt.getAttribute('data-instr') || '';
    const acc = opt.getAttribute('data-acc') || '';
    const icon = opt.getAttribute('data-icon') || '';

    if (idInput) idInput.value = id;
    if (nameEl) nameEl.textContent = nm;
    if (hintEl) hintEl.textContent = acc ? acc : 'Account set in admin';
    if (accInput) accInput.value = acc || '';
    if (instrEl) instrEl.textContent = instr || '';
    if (details) details.classList.remove('hidden');

    if (iconWrap) {
      iconWrap.innerHTML = '';
      if (icon) {
        const img = document.createElement('img');
        img.src = icon;
        img.alt = '';
        img.className = 'w-full h-full object-cover';
        iconWrap.appendChild(img);
      } else {
        const i = document.createElement('i');
        i.className = 'bi bi-wallet2 text-white/60';
        iconWrap.appendChild(i);
      }
    }
  }

  if (menu) {
    menu.querySelectorAll('button[data-id]').forEach(opt=>{
      opt.addEventListener('click', (e)=>{
        e.preventDefault();
        setSelected(opt);
        closeMenu();
      });
    });
  }

  if (copyBtn) {
    copyBtn.addEventListener('click', async (e)=>{
      e.preventDefault();
      const v = (accInput && accInput.value) ? accInput.value : '';
      if (!v) return;
      try {
        await navigator.clipboard.writeText(v);
      } catch(err) {
        // fallback
        const tmp = document.createElement('textarea');
        tmp.value = v; document.body.appendChild(tmp);
        tmp.select(); document.execCommand('copy'); document.body.removeChild(tmp);
      }
      if (toast) {
        toast.classList.remove('hidden');
        setTimeout(()=>toast.classList.add('hidden'), 1400);
      }
    });
  }

  // Basic required validation: ensure method selected
  const form = document.querySelector('form[method="POST"]');
  if (form) {
    form.addEventListener('submit', (e)=>{
      const xyloGuestView = true;
      if (xyloGuestView) {
        e.preventDefault();
        if (window.xyloShowGuestAuthToast) window.xyloShowGuestAuthToast('add balance');
        else alert('Please login or register to add balance.');
        return false;
      }
      const mid = idInput ? idInput.value : '';
      if (!mid) {
        e.preventDefault();
        alert('Please select a payment method.');
      }
    });
  }
})();
</script>

<script>
(function(){
  const amountInput = document.getElementById('amountInput');
  const amountToPayInput = document.getElementById('amountToPay');
  if (!amountInput || !amountToPayInput) return;

  const USD_RATE = 50;
  const PHP_RATE = 1;

  function formatMoney(symbol, value){
    return symbol + Number(value || 0).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2});
  }

  function updatePayFields(){
    const xc = Math.max(0, parseFloat(amountInput.value || '0') || 0);
    const phpValue = formatMoney('₱', xc / PHP_RATE);
    const usdValue = formatMoney('$', xc / USD_RATE);
    amountToPayInput.value = `${phpValue} or ${usdValue}`;
  }

  amountInput.addEventListener('input', updatePayFields);
  document.querySelectorAll('[data-amt]').forEach(btn => {
    btn.addEventListener('click', () => setTimeout(updatePayFields, 0));
  });

  const selectedQuick = document.querySelector('[data-amt].selected');
  if (selectedQuick && !amountInput.value) {
    amountInput.value = selectedQuick.getAttribute('data-amt') || '';
  }
  updatePayFields();
})();
</script>

<p class="text-[11px] text-center text-white/55 -mt-1">Balance requests are reviewed according to our <a href="/refund" class="text-violet-200 hover:text-white underline underline-offset-2">Refund Policy</a>.</p>
<style>
.xylo-legal-micro-wrap{max-width:1200px;margin:26px auto 0;padding:0 16px 18px}
.xylo-legal-micro-wrap-auth{width:100%;max-width:none;margin:8px auto 12px;padding:0 16px 12px;position:relative;z-index:10}
.xylo-legal-micro{display:flex;align-items:center;justify-content:center;gap:10px 12px;flex-wrap:wrap;padding-top:10px;border-top:1px solid rgba(255,255,255,.08);color:rgba(255,255,255,.52);font-size:12px;line-height:1.5}
.xylo-legal-micro a{color:rgba(255,255,255,.68);text-decoration:none;transition:color .22s ease,opacity .22s ease}
.xylo-legal-micro a:hover{color:#fff}
.xylo-legal-dot{opacity:.28}
@media (max-width:640px){.xylo-legal-micro{gap:6px 10px;font-size:11px;padding-top:12px}.xylo-legal-micro-wrap-auth{margin:2px auto 10px;padding:0 14px 10px}}
</style>
<div class="xylo-legal-micro-wrap">
  <div class="xylo-legal-micro">
    <span>© 2026 Xylo Store</span>
    <span class="xylo-legal-dot">·</span>
    <a href="/terms">Terms</a>
    <span class="xylo-legal-dot">·</span>
    <a href="/privacy">Privacy</a>
    <span class="xylo-legal-dot">·</span>
    <a href="/refund">Refund</a>
    <span class="xylo-legal-dot">·</span>
    <a href="/delivery">Delivery</a>
  </div>
</div>

  

<script>
(function(){
  const modal = document.getElementById('xvDepositNoticeModal');
  if (!modal) return;

  const animationMs = 220;
  let isClosing = false;

  function closeModal(){
    if (isClosing) return;
    isClosing = true;
    modal.classList.remove('xv-deposit-notice-open');
    modal.classList.add('xv-deposit-notice-closing');
    window.setTimeout(function(){
      modal.classList.add('hidden');
      modal.classList.remove('flex', 'xv-deposit-notice-closing');
      document.documentElement.classList.remove('overflow-hidden');
      document.body.classList.remove('overflow-hidden');
      isClosing = false;
    }, animationMs);
  }
  function openModal(){
    modal.classList.remove('hidden', 'xv-deposit-notice-closing');
    modal.classList.add('flex');
    document.documentElement.classList.add('overflow-hidden');
    document.body.classList.add('overflow-hidden');
    window.requestAnimationFrame(function(){
      modal.classList.add('xv-deposit-notice-open');
    });
  }

  const agree = document.getElementById('xvDepositNoticeAgree');
  const continueBtn = document.getElementById('xvDepositNoticeContinue');
  let remaining = 5;
  let countdownDone = false;

  function syncContinue(){
    if (!continueBtn) return;
    const agreed = !agree || agree.checked;
    continueBtn.disabled = !(countdownDone && agreed);
    if (!countdownDone) {
      continueBtn.innerHTML = 'Continue (<span id="xvDepositNoticeCountdown">' + remaining + '</span>s)';
    } else {
      continueBtn.textContent = agreed ? 'Continue' : 'Check agreement first';
    }
  }

  openModal();
  syncContinue();

  const timer = setInterval(function(){
    remaining -= 1;
    const liveCountdown = document.getElementById('xvDepositNoticeCountdown');
    if (liveCountdown) liveCountdown.textContent = String(Math.max(remaining, 0));
    if (remaining <= 0) {
      clearInterval(timer);
      countdownDone = true;
      syncContinue();
    }
  }, 1000);

  if (agree) agree.addEventListener('change', syncContinue);
  if (continueBtn) continueBtn.addEventListener('click', function(){
    if (continueBtn.disabled) return;
    closeModal();
  });
})();
</script>

  <script src="/assets/js/xv-global-activity-popups.js" defer></script>
  <script src="/assets/js/xylo-lazy-media-30.js" defer></script>
</body>
</html>
