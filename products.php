

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xylo Hacks | Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        
        .product-image-small {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }
        
        .category-filter {
            scrollbar-width: thin;
            scrollbar-color: #3b82f6 transparent;
        }
        
        .category-filter::-webkit-scrollbar {
            height: 3px;
        }
        
        .category-filter::-webkit-scrollbar-track {
            background: transparent;
        }
        
        .category-filter::-webkit-scrollbar-thumb {
            background-color: #3b82f6;
            border-radius: 2px;
        }
        
        

        /* Category pill pressed/active state (Tap kategori) */
        .category-filter a:active {
            background: rgba(255, 255, 255, 0.14) !important;
            border-color: rgba(255, 255, 255, 0.35) !important;
        }
        .category-filter a:focus-visible {
            outline: 2px solid rgba(59, 130, 246, 0.55);
            outline-offset: 2px;
        }

        /* Category 'More' modal (glass + purple glow) */
        .xv-modal-overlay{ position:fixed; inset:0; background: rgba(0,0,0,0.72); backdrop-filter: blur(6px); z-index: 3000; display:flex; align-items:center; justify-content:center; padding: 14px; }
        .xv-modal-panel{ width: 100%; max-width: 720px; border-radius: 18px; background: rgba(18, 10, 34, 0.78); border: 1px solid rgba(168, 85, 247, 0.18);
            box-shadow: 0 0 0 1px rgba(168, 85, 247, 0.08) inset, 0 0 50px rgba(168, 85, 247, 0.18), 0 18px 60px rgba(0,0,0,0.6); padding: 14px; }
        @media (max-width: 640px){ .xv-modal-overlay{ align-items: stretch; padding: 0; } .xv-modal-panel{ border-radius: 0; max-width: none; height: 100vh; overflow: hidden; padding: 14px; } }
    
.overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(5px);
            z-index: 1000;
            display: none;
        }
        
        .variant-modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1001;
            width: 90%;
            max-width: 500px;
            display: none;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translate(-50%, -40%);
            }
            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }
        
        .animate-slide-up {
            animation: slideUp 0.2s ease-out;
        }
        
        /* Product item styles */
        .product-item {
            transition: all 0.2s ease;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
        }
        
        .product-item:hover {
            background: rgba(59, 130, 246, 0.05);
            border-color: rgba(59, 130, 246, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        .btn-select {
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            border: 1px solid rgba(59, 130, 246, 0.3);
            transition: all 0.2s;
        }
        
        .btn-select:hover {
            background: rgba(59, 130, 246, 0.2);
            border-color: rgba(59, 130, 246, 0.5);
        }
        
        .desc-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        /* Marquee styles */
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            position: relative;
        }
        
        .marquee-content {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 20s linear infinite;
        }
        
        @keyframes marquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        
        .marquee-container:hover .marquee-content {
            animation-play-state: paused;
        }
        
        /* Key list styles */
        .key-list-item {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            padding: 8px 12px;
            margin-bottom: 8px;
            font-family: monospace;
            font-size: 13px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .key-list-item:last-child {
            margin-bottom: 0;
        }
    
.clamp2{
    display:-webkit-box;
    -webkit-line-clamp:2;
    -webkit-box-orient:vertical;
    overflow:hidden;
}


/* === VIP Product Card Upgrade === */
.vip-product-card{
    --vip-accent: var(--vip-accent, #a855f7);
    --vip-accent-rgb: var(--vip-accent-rgb, 168,85,247);
    position: relative;
    background: linear-gradient(180deg, rgba(120, 40, 255, 0.22) 0%, rgba(70, 15, 190, 0.18) 55%, rgba(40, 8, 120, 0.22) 100%),
                radial-gradient(120% 80% at 30% 10%, rgba(210, 140, 255, 0.18), transparent 60%);
    border: 1px solid rgba(var(--vip-accent-rgb), 0.34);
    border-radius: 18px;
    overflow: hidden;
    backdrop-filter: none;
    -webkit-backdrop-filter: none;
    /* Always-visible VIP neon panel (mobile-safe) */
    box-shadow:
      0 14px 34px rgba(0,0,0,0.40),
      0 0 0 1px rgba(255,255,255,0.06) inset,
      0 0 22px rgba(var(--vip-accent-rgb), 0.18);
    transition: transform .20s ease, box-shadow .20s ease, border-color .20s ease, filter .20s ease;
    display: flex;
    flex-direction: column;
    cursor: default;
}

/* Inner top highlight */
.vip-product-card::after{
    content:"";
    position:absolute;
    left:10px; right:10px; top:10px;
    height:46px;
    background: linear-gradient(180deg, rgba(255,255,255,0.16), rgba(255,255,255,0));
    border-radius: 14px;
    opacity:.55;
    pointer-events:none;
}

/* Edge glow ring that stays INSIDE (not clipped) */
.vip-product-card::before{
    content:"";
    position:absolute;
    inset:0;
    border-radius: 18px;
    pointer-events:none;
    box-shadow:
      0 0 0 1px rgba(var(--vip-accent-rgb), 0.18) inset,
      0 0 0 2px rgba(var(--vip-accent-rgb), 0.10) inset;
    opacity:.9;
}

@media (hover:hover){
  .vip-product-card:hover{
      transform: translateY(-4px);
      border-color: rgba(var(--vip-accent-rgb), 0.62);
      box-shadow:
        0 22px 52px rgba(0,0,0,0.55),
        0 0 0 1px rgba(255,255,255,0.06) inset,
        0 0 36px rgba(var(--vip-accent-rgb), 0.26);
      filter: brightness(1.03);
  }
}

/* Mobile press feedback (no hover) */
.vip-product-card:active{
  transform: translateY(-2px);
  border-color: rgba(var(--vip-accent-rgb), 0.70);
  box-shadow:
    0 18px 44px rgba(0,0,0,0.52),
    0 0 0 1px rgba(255,255,255,0.06) inset,
    0 0 44px rgba(var(--vip-accent-rgb), 0.32);
}

@media (prefers-reduced-motion: reduce){
  .vip-product-card{ transition: none; }
  .vip-product-card:hover, .vip-product-card:active{ transform: none; }
}
.vip-product-card:hover{ transform: none; }
}


.vip-product-media{ position: relative; aspect-ratio: 1/1; overflow: hidden; }
.vip-product-media::after{content:"";position:absolute;inset:10px;border-radius:14px;border:1px solid rgba(var(--vip-accent-rgb),0.18);box-shadow:0 0 0 1px rgba(255,255,255,0.08) inset, 0 0 18px rgba(var(--vip-accent-rgb),0.16);pointer-events:none;}
.vip-product-img{ width: 100%; height: 100%; object-fit: cover; transform: scale(1.01); transition: transform .35s ease; }
@media (hover:hover){ .vip-product-card:hover .vip-product-img{ transform: scale(1.08); } }

.vip-gradient{
    position:absolute; inset:0;
    background: radial-gradient(120% 80% at 50% 20%, rgba(59,130,246,0.22), transparent 55%),
                linear-gradient(to top, rgba(0,0,0,0.50), transparent 45%);
    pointer-events:none;
}

.vip-badge{
    position:absolute;
    top:10px; right:10px;
    display:inline-flex;
    align-items:center;
    gap:6px;
    padding:6px 10px;
    border-radius:999px;
    font-size:11px;
    font-weight:800;
    letter-spacing:.2px;
    color:#fff;
    border:1px solid rgba(255,255,255,0.16);
    box-shadow: 0 10px 25px rgba(0,0,0,0.28);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}
.vip-badge-sold{ background: rgba(220,53,69,0.92); }
.vip-badge-stock{ background: linear-gradient(135deg, rgba(34,197,94,0.92), rgba(16,185,129,0.92)); }

.vip-pill{
    position:absolute;
    left:10px; top:10px;
    display:inline-flex;
    align-items:center;
    gap:6px;
    padding:6px 10px;
    border-radius:999px;
    font-size:11px;
    font-weight:800;
    color:#e5e7eb;
    background: rgba(17,24,39,0.65);
    border:1px solid rgba(255,255,255,0.12);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

.vip-product-body{
    padding: 10px 10px 12px;
    /* Strong VIP purple base for the entire lower card (replaces old gray) */
    background: linear-gradient(180deg,
        rgba(120, 50, 255, 0.32) 0%,
        rgba(88, 24, 210, 0.22) 45%,
        rgba(55, 12, 165, 0.28) 100%
    );
    border-top: 1px solid rgba(210, 140, 255, 0.18);
    display: flex;
    flex-direction: column;
    flex: 1;
    min-height: 0;
    position: relative;
    overflow: hidden;
}

.vip-product-body::before{
    content: "";
    position: absolute;
    inset: -40% -20% auto auto;
    width: 260px;
    height: 260px;
    background: radial-gradient(circle at 35% 35%, rgba(200, 120, 255, 0.18), rgba(200, 120, 255, 0) 62%);
    transform: rotate(12deg);
    pointer-events: none;
}

.vip-product-body > *{
    position: relative;
    z-index: 1;
}

/* === Strong VIP purple panel for title + pills (performance-safe: no blur) === */
.vip-product-info{
    background: linear-gradient(135deg,
        rgba(108, 43, 255, 0.38),
        rgba(198, 82, 255, 0.22)
    );
    border: 1px solid rgba(210, 140, 255, 0.26);
    box-shadow: 0 8px 22px rgba(140, 0, 255, 0.18);
    border-radius: 16px;
    padding: 9px 9px 8px;
    margin-bottom: 10px;
    position: relative;
    overflow: hidden;
}
.vip-product-info::before{
    content: "";
    position: absolute;
    inset: -40% -30% auto auto;
    width: 220px;
    height: 220px;
    background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.16), rgba(255,255,255,0) 60%);
    transform: rotate(18deg);
    pointer-events: none;
}
.vip-product-price{
    margin-top:auto;
    display:flex;
    align-items:center;
    gap:8px;
    justify-content:space-between;
}

/* Price CTA badge (neon green, high contrast) */
.vip-price-badge{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:6px 12px;
    border-radius:999px;
    font-weight:900;
    letter-spacing:.2px;
    font-size:13px;
    line-height:1;
    color: rgba(3, 18, 12, 0.95);
    background: linear-gradient(135deg, rgba(34,197,94,0.98), rgba(16,185,129,0.98));
    border: 1px solid rgba(255,255,255,0.18);
    box-shadow: 0 10px 24px rgba(0,0,0,0.25), 0 0 14px rgba(34,197,94,0.35);
}

/* Buy button (purple glass) — opens modal; card itself is not clickable */
.vip-buy-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:8px;
    padding:6px 12px;
    border-radius:999px;
    font-weight:900;
    font-size:13px;
    line-height:1;
    color:#fff;
    background: linear-gradient(135deg, rgba(168,85,247,0.38), rgba(99,102,241,0.26));
    border: 1px solid rgba(210, 140, 255, 0.32);
    box-shadow: 0 10px 24px rgba(0,0,0,0.22), 0 0 14px rgba(168,85,247,0.32);
    position: relative;
    overflow:hidden;
    transition: transform 0.15s ease, box-shadow 0.15s ease, filter 0.15s ease;
}

.vip-buy-btn::before{
    content:"";
    position:absolute;
    inset:-60% -40% auto auto;
    width:220px;
    height:220px;
    background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.22), rgba(255,255,255,0) 60%);
    transform: rotate(18deg);
    pointer-events:none;
}
.vip-buy-btn i, .vip-buy-btn span{ position:relative; z-index:1; }
.vip-price-badge{white-space:nowrap;flex:1 1 auto;min-width:0;overflow:hidden;text-overflow:ellipsis;}
.vip-buy-btn{flex:0 0 auto;white-space:nowrap;}
.vip-buy-btn.vip-maintenance-btn{gap:4px;padding:5px 8px;font-size:11px;letter-spacing:.1px;min-width:max-content;flex-shrink:0;}
.vip-buy-btn.vip-maintenance-btn i{font-size:11px;}
@media (hover:hover){
    .vip-buy-btn:hover{ transform: translateY(-1px); box-shadow: 0 12px 28px rgba(0,0,0,0.26), 0 0 18px rgba(168,85,247,0.45); }
}
.vip-buy-btn:active{
    transform: scale(0.96);
    box-shadow: 0 0 6px rgba(180, 0, 255, 0.6), inset 0 2px 6px rgba(0, 0, 0, 0.25);
    filter: brightness(1.05);
}

/* Touch/JS fallback: ensure press feedback shows before opening modal */
.vip-buy-btn.is-pressed{
    transform: scale(0.96);
    box-shadow:
      0 0 18px rgba(180, 0, 255, 0.9),
      inset 0 3px 8px rgba(0, 0, 0, 0.35);
    filter: brightness(1.15) saturate(1.2);
}

.vip-product-title{
    color:#e5e7eb;
    font-weight: 800;
    font-size: 13px;
    line-height: 1.2;
    margin-bottom: 6px;
  min-height:44px;
  display:-webkit-box;
  -webkit-line-clamp:2;
  -webkit-box-orient:vertical;
  overflow:hidden;
}


.vip-product-toprow{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:8px;
    margin-bottom:6px;
}
.vip-product-title{
    margin-bottom:0; /* moved to row */
    min-width:0;
}
.vip-chip-device{min-width:0;max-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
100%{ transform: translateX(-45%); }
}
.vip-chip-grow{ flex:1; justify-content:center; }
.vip-product-meta{display:flex;flex-direction:column;align-items:flex-start;gap:4px;margin-bottom:6px;min-width:0;}
.vip-product-meta .vip-chip{max-width:100%;min-width:0;width:auto;}

/* === Pill rows fill width (User/Reseller only) === */
.vip-product-meta{width:100%;}
.vip-product-meta .vip-chip-category,
.vip-product-meta .vip-chip-device{
  width:100%;
  justify-content:flex-start;
  box-sizing:border-box;
}



.vip-chip-category{
  min-width:0;
  overflow:hidden;
  text-overflow:ellipsis;
}
.vip-chip-device{
  min-width:0;
  max-width:100%;
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
}
.vip-chip-device .vip-chip-device-text{display:inline-block;white-space:nowrap;}
.vip-chip{
    display:inline-flex;
    align-items:center;
    gap:6px;
    padding:4px 8px;
    border-radius:999px;
    font-size:10px;
    font-weight:800;
    letter-spacing:.2px;
    color: rgba(229,231,235,0.92);
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    min-width:0;
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
}

/* Product-card pills: strong purple gradient + glow (scoped, won't affect modals) */
.vip-product-card .vip-chip{
    background: linear-gradient(135deg,
        rgba(124, 64, 255, 0.26),
        rgba(216, 92, 255, 0.16)
    );
    border: 1px solid rgba(220, 155, 255, 0.30);
    box-shadow: 0 4px 14px rgba(150, 0, 255, 0.16);
}
.vip-product-card .vip-chip::before{
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(255,255,255,0.12), rgba(255,255,255,0));
    opacity: 0.55;
    pointer-events: none;
}
.vip-product-card .vip-chip{
    position: relative;
}

@media (hover: hover){
  .vip-product-card:hover .vip-product-info{
    box-shadow: 0 10px 28px rgba(160, 0, 255, 0.22);
  }
  .vip-product-card:hover .vip-chip{
    box-shadow: 0 6px 18px rgba(170, 0, 255, 0.22);
  }
}
.vip-chip .bi{ font-size:11px; opacity:.9; }

.vip-product-features{
    font-size:11px;
    font-weight:700;
    color: rgba(229,231,235,0.78);
    margin-bottom:6px;
}
.vip-product-desc{
    font-size:11px;
    color: rgba(229,231,235,0.65);
    line-height:1.25;
    margin-bottom:8px;
}

.clamp1{
    display:-webkit-box;
    -webkit-line-clamp:1;
    -webkit-box-orient:vertical;
    overflow:hidden;
}

/* Product card (mobile) — keep title + device pill strictly one row */
.vip-product-toprow{ flex-wrap: nowrap; }
.vip-product-toprow .vip-product-title,
.vip-product-toprow .clamp1{
    flex: 1 1 auto;
    min-width: 0;
    min-height: 0 !important;
    display: block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.vip-product-toprow .vip-chip-device{ flex: 0 0 auto; min-width: 0; }
@media (max-width: 480px){
    .vip-product-toprow{ gap: 6px; }
    .vip-product-toprow .vip-chip-device{ max-width: 46%; }
}
.vip-product-price{
    font-size: 12px;
    font-weight: 900;
    color: #34d399;
    text-shadow: 0 0 18px rgba(52,211,153,0.18);
}
.vip-sold-text{
    color: rgba(229,231,235,0.7);
    font-weight: 700;
}


/* === Center pill text (User/Reseller only) === */
.vip-product-meta .vip-chip-category,
.vip-product-meta .vip-chip-device{
  width:100%;
  justify-content:center !important;
  text-align:center;
  padding-left:12px !important;
  padding-right:12px !important;
}


/* Accent override */
.vip-product-card{ --vip-accent:#a855f7; --vip-accent-rgb:168,85,247; }

.vip-product-card.is-maintenance .vip-product-media::after{
  content:''; position:absolute; inset:0;
  background: linear-gradient(180deg, rgba(127,29,29,0.08), rgba(127,29,29,0.32));
  pointer-events:none;
}
.vip-product-card.is-maintenance .vip-product-img{ filter: saturate(.8) brightness(.82); }
.vip-product-card.is-maintenance .vip-product-info{
  box-shadow: 0 10px 28px rgba(127,29,29,0.18);
  border-color: rgba(239,68,68,0.20);
}
.vip-maintenance-badge{position:absolute;top:10px;right:10px;z-index:3;display:inline-flex;align-items:center;justify-content:center;gap:6px;max-width:calc(100% - 20px);padding:6px 10px;border-radius:999px;font-size:10px;font-weight:900;letter-spacing:.5px;text-transform:uppercase;color:rgba(255,245,245,.99);background:linear-gradient(135deg, rgba(239,68,68,.98), rgba(185,28,28,.92));border:1px solid rgba(255,230,230,.28);box-shadow:0 14px 28px rgba(127,29,29,.34);transform:none;backdrop-filter:blur(6px);}
.vip-featured-badge{position:absolute;top:12px;left:12px;right:auto;z-index:3;display:inline-flex;align-items:center;justify-content:center;gap:6px;max-width:calc(100% - 24px);padding:5px 9px;border-radius:12px 12px 12px 4px;font-size:10px;font-weight:900;letter-spacing:.45px;text-transform:uppercase;color:rgba(255,250,235,.99);background:linear-gradient(135deg, rgba(245,158,11,.98), rgba(217,119,6,.92));border:1px solid rgba(255,237,213,.34);box-shadow:0 12px 26px rgba(146,64,14,.26);transform:none;}
.vip-product-card.is-featured{ --vip-accent:#f59e0b; --vip-accent-rgb:245,158,11; }
.vip-product-card.is-featured::before{ box-shadow:0 0 0 1px rgba(245,158,11,0.34) inset, 0 0 0 2px rgba(255,237,213,0.10) inset; }
.vip-product-card.is-featured .vip-product-media::before{content:"";position:absolute;inset:0;background:radial-gradient(82% 62% at 18% 12%, rgba(245,158,11,.24), transparent 60%);pointer-events:none;}
.vip-product-card.is-featured .vip-product-media::after{border-color:rgba(245,158,11,0.28);box-shadow:0 0 0 1px rgba(255,250,235,0.10) inset, 0 0 22px rgba(245,158,11,0.18);}
.vip-product-card.is-featured .vip-product-info{border-color:rgba(245,158,11,.26);box-shadow:0 14px 34px rgba(146,64,14,.18);}
.vip-product-card.is-featured .vip-buy-btn{background:linear-gradient(135deg, rgba(245,158,11,0.96), rgba(217,119,6,0.92));border-color:rgba(255,237,213,0.34);box-shadow:0 12px 26px rgba(146,64,14,0.24), 0 0 14px rgba(245,158,11,0.18);color:rgba(255,251,235,0.99);}
@media (hover:hover){ .vip-product-card.is-featured .vip-buy-btn:hover{ box-shadow:0 14px 30px rgba(146,64,14,0.28), 0 0 18px rgba(245,158,11,0.22); } }
.vip-product-card.is-featured .vip-buy-btn:active,
.vip-product-card.is-featured .vip-buy-btn.is-pressed{box-shadow:0 0 10px rgba(245,158,11,0.34), inset 0 2px 6px rgba(0,0,0,0.25);filter:brightness(1.04);}
.vip-product-card.is-maintenance .vip-price-badge{
  color: rgba(229,231,235,0.88) !important;
  background: rgba(255,255,255,0.08) !important;
  border-color: rgba(255,255,255,0.12) !important;
  text-shadow:none !important;
}
.vip-buy-btn.vip-maintenance-btn{
  background: linear-gradient(135deg, rgba(239,68,68,.88), rgba(185,28,28,.78)) !important;
  box-shadow: 0 10px 26px rgba(127,29,29,.26), 0 0 18px rgba(239,68,68,.16);
}
.vip-buy-btn.vip-maintenance-btn:hover{ box-shadow: 0 12px 28px rgba(127,29,29,.30), 0 0 18px rgba(239,68,68,.20); }


/* Create Order button (glassmorphism + GREEN gradient, no glow) */
.create-order-btn{
  /* Force true green gradient (override vip-purple.css) */
  background: linear-gradient(135deg,
    rgba(16,185,129,0.92) 0%,
    rgba(34,197,94,0.92) 45%,
    rgba(124,255,107,0.85) 100%
  ) !important;
  border: 1px solid rgba(255,255,255,0.22);
  /* No glow (keep subtle depth only) */
  box-shadow: 0 10px 26px rgba(0,0,0,0.28) !important;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
}
.create-order-btn:hover{
  box-shadow: 0 14px 34px rgba(0,0,0,0.32) !important;
  transform: translateY(-1px);
}
.create-order-btn:active{
  transform: translateY(0);
}

	/* Not enough balance popup */
	.balance-alert{
	  position: fixed;
	  inset: 0;
	  z-index: 9999;
	  display: flex;
	  align-items: center;
	  justify-content: center;
	  padding: 18px;
	  background: rgba(0,0,0,0.45);
	  backdrop-filter: blur(6px);
	  -webkit-backdrop-filter: blur(6px);
	}
	.balance-alert-card{
	  width: 100%;
	  max-width: 360px;
	  border-radius: 16px;
	  background: rgba(30, 27, 75, 0.55);
	  border: 1px solid rgba(255,255,255,0.18);
	  box-shadow: 0 12px 40px rgba(0,0,0,0.35);
	  padding: 16px 14px 14px;
	  position: relative;
	}
	.balance-alert-close{
	  position: absolute;
	  top: 10px;
	  right: 10px;
	  width: 34px;
	  height: 34px;
	  border-radius: 12px;
	  border: 1px solid rgba(255,255,255,0.18);
	  background: rgba(255,255,255,0.08);
	  color: rgba(255,255,255,0.9);
	  box-shadow: none !important; /* ensure no glow from global button styles */
	}
	.balance-alert-title{
	  font-weight: 900;
	  font-size: 16px;
	  margin-bottom: 6px;
	}
	.balance-alert-msg{
	  color: rgba(229,231,235,0.85);
	  font-size: 13px;
	  margin-bottom: 12px;
	}
	.balance-alert-topup{
	  display: inline-flex;
	  width: 100%;
	  align-items: center;
	  justify-content: center;
	  gap: 8px;
	  padding: 10px 12px;
	  border-radius: 14px;
	  text-decoration: none;
	  color: white;
	  font-weight: 800;
	  background: linear-gradient(135deg, rgba(34,197,94,0.85), rgba(16,185,129,0.75));
	  border: 1px solid rgba(255,255,255,0.20);
	  box-shadow: 0 10px 28px rgba(16,185,129,0.25), 0 0 28px rgba(34,197,94,0.30);
	}
	.balance-alert-topup:active{ transform: translateY(1px); }


        /* Order Created Modal (Additive) */
        .xylo-modal-backdrop{
            position: fixed;
            inset: 0;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 18px;
            z-index: 2147483647;
            background: rgba(0,0,0,0.45);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        .xylo-modal-backdrop.is-open{ display:flex; }
        .xylo-modal-card{
            width: min(520px, 100%);
            border-radius: 18px;
            border: 1px solid rgba(255,255,255,0.12);
            background: rgba(24, 12, 40, 0.72);
            box-shadow: 0 18px 60px rgba(0,0,0,0.55);
            position: relative;
            overflow: hidden;
        }
        .xylo-modal-content{ padding: 18px 18px 8px; }
        .xylo-modal-title{
            font-size: 18px;
            font-weight: 800;
            letter-spacing: .2px;
            margin-bottom: 10px;
        }
        .xylo-modal-text{
            font-size: 14px;
            line-height: 1.4;
            opacity: .92;
        }
        .xylo-modal-x{
            position:absolute;
            top: 10px;
            right: 10px;
            width: 38px;
            height: 38px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.16);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            background: linear-gradient(135deg, rgba(239,68,68,0.85), rgba(220,38,38,0.55)) !important;
            color: rgba(255,255,255,0.96) !important;
            box-shadow: 0 10px 26px rgba(239,68,68,0.22), 0 0 22px rgba(220,38,38,0.20);
            font-size: 22px;
            font-weight: 900;
            display:flex;
            align-items:center;
            justify-content:center;
            cursor:pointer;
        }
        .xylo-modal-x:active{ transform: scale(0.98); }

        .xylo-modal-actions{
            display:flex;
            gap: 10px;
            padding: 14px 18px 18px;
        }

/* Janeng: Buy modal UI/UX polish (static, lightweight) */
.xv-modal-topbar{
  padding:14px 16px !important;
  background: rgba(14, 10, 28, .94);
  border-bottom:1px solid rgba(255,255,255,.10) !important;
}
.xv-modal-head{display:flex; flex-direction:column; min-width:0; gap:8px;}
.xv-modal-title-row{display:flex; align-items:center; gap:10px; min-width:0;}
.xv-modal-title-row .bi-box-seam,
#quantityModal .bi-cart-plus{ color:#c084fc !important; }
.xv-modal-title-text{font-size:1rem; font-weight:800; color:#fff; line-height:1.2; min-width:0; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;}
.xv-modal-header-pills{display:flex; flex-wrap:wrap; gap:8px;}
.xv-modal-chip{box-shadow:none !important;}
.xv-modal-scroll{padding:14px 16px 16px !important; max-height:72vh !important;}
.xv-modal-image-wrap{margin-bottom:14px;}
.xv-modal-image-frame{position:relative; aspect-ratio:16/9; border-radius:16px; overflow:hidden; border:1px solid rgba(255,255,255,.10); background:#090814; box-shadow:0 0 0 1px rgba(255,255,255,.04) inset, 0 14px 34px rgba(8,6,20,.35);}
.xv-modal-image-frame::after{content:""; position:absolute; inset:0; pointer-events:none; border-radius:16px; box-shadow:inset 0 0 0 1px rgba(255,255,255,.05);}

.xv-modal-gallery-frame{position:relative;min-height:clamp(190px,42vw,330px);}
.xv-modal-gallery-frame [data-xv-gallery-main],
.xv-modal-gallery-slide{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;}
.xv-modal-gallery-slide{opacity:0;transition:opacity .18s ease;}
.xv-modal-gallery-slide.is-active{opacity:1;}
.xv-gallery-arrow{position:absolute;top:50%;transform:translateY(-50%);z-index:4;width:40px;height:40px;border-radius:999px;border:1px solid rgba(216,180,254,.48);background:linear-gradient(135deg,rgba(168,85,247,.92),rgba(126,34,206,.88));color:#fff;font-size:28px;line-height:1;display:flex;align-items:center;justify-content:center;backdrop-filter:blur(10px);cursor:pointer;box-shadow:0 10px 26px rgba(88,28,135,.42),0 0 0 1px rgba(255,255,255,.08) inset;transition:transform .14s ease,box-shadow .14s ease,background .14s ease;}
.xv-gallery-arrow:hover{background:linear-gradient(135deg,rgba(192,132,252,.98),rgba(147,51,234,.94));box-shadow:0 12px 30px rgba(168,85,247,.48),0 0 0 1px rgba(255,255,255,.12) inset;}
.xv-gallery-arrow:active{transform:translateY(-50%) scale(.96);}
.xv-gallery-prev{left:10px;}
.xv-gallery-next{right:10px;}
.xv-gallery-count{position:absolute;right:10px;bottom:10px;z-index:4;border-radius:999px;background:rgba(36,16,70,.72);border:1px solid rgba(216,180,254,.32);color:#f3e8ff;font-size:11px;font-weight:800;padding:4px 9px;box-shadow:0 8px 20px rgba(88,28,135,.26);}
.xv-gallery-spinner{position:absolute;inset:0;z-index:3;display:none;align-items:center;justify-content:center;background:rgba(5,4,12,.18);pointer-events:none;}
.xv-gallery-spinner::before{content:"";width:30px;height:30px;border-radius:999px;border:3px solid rgba(216,180,254,.30);border-top-color:rgba(192,132,252,.96);animation:xvGallerySpin .75s linear infinite;}
[data-xv-modal-gallery].is-loading .xv-gallery-spinner{display:flex;}
.xv-gallery-dots{position:absolute;left:50%;bottom:10px;transform:translateX(-50%);z-index:4;display:flex;gap:7px;align-items:center;max-width:58%;overflow:hidden;padding:5px 7px;border-radius:999px;background:rgba(36,16,70,.66);border:1px solid rgba(216,180,254,.24);box-shadow:0 10px 24px rgba(88,28,135,.28),0 0 0 1px rgba(255,255,255,.05) inset;backdrop-filter:blur(10px);}
.xv-gallery-dot{width:8px;height:8px;border-radius:999px;border:1px solid rgba(216,180,254,.35);background:rgba(216,180,254,.40);padding:0;cursor:pointer;transition:width .16s ease,background .16s ease,box-shadow .16s ease,border-color .16s ease;}
.xv-gallery-dot.is-active,.xv-gallery-dot.xv-gallery-dot-active,.xv-gallery-dot[data-xv-active="1"]{width:22px;background:linear-gradient(90deg,#c084fc,#a855f7);border-color:rgba(243,232,255,.78);box-shadow:0 0 14px rgba(168,85,247,.70);}
.xv-gallery-single .xv-gallery-arrow,.xv-gallery-single .xv-gallery-count,.xv-gallery-single .xv-gallery-dots{display:none!important;}
@keyframes xvGallerySpin{to{transform:rotate(360deg)}}
@media (max-width:640px){.xv-modal-gallery-frame{min-height:190px}.xv-gallery-arrow{width:36px;height:36px;font-size:24px}.xv-gallery-prev{left:8px}.xv-gallery-next{right:8px}.xv-gallery-dots{bottom:8px;gap:6px}.xv-gallery-count{bottom:8px}}

.xv-scroll-hint{margin:-2px 0 14px; display:flex; align-items:center; justify-content:center; gap:8px; color:rgba(255,255,255,.62); font-size:12px; font-weight:600;}
.xv-scroll-hint .bi{font-size:13px;}
.xv-variant-stack{display:flex; flex-direction:column; gap:10px;}
.xv-variant-option{width:100%; text-align:left; padding:15px 16px; border-radius:18px; border:1px solid rgba(255,255,255,.10); background:linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02)); display:flex; align-items:center; justify-content:space-between; gap:12px; transition:border-color .15s ease, transform .12s ease, background .15s ease, box-shadow .15s ease;}
.xv-variant-option:not([disabled]):hover{border-color:rgba(168,85,247,.46); background:linear-gradient(180deg, rgba(168,85,247,.12), rgba(255,255,255,.03)); box-shadow:0 10px 26px rgba(23,12,44,.24);}
.xv-variant-option:not([disabled]):active{transform:translateY(1px) scale(.995); border-color:rgba(192,132,252,.58);}
.xv-variant-main{display:flex; flex-direction:column; gap:4px; min-width:0;}
.xv-variant-title{font-size:1.02rem; font-weight:700; color:#fff; line-height:1.2;}
.xv-variant-meta{font-size:12px; color:rgba(255,255,255,.55); font-weight:600;}
.xv-variant-side{display:flex; align-items:center; gap:12px; flex:0 0 auto;}
.xv-variant-price{display:flex; flex-direction:column; align-items:flex-end; line-height:1.1;}
.xv-variant-price strong{font-size:1rem; color:#fff;}
.xv-variant-price span{font-size:12px; color:rgba(255,255,255,.55);}
.xv-variant-arrow{width:32px; height:32px; border-radius:999px; border:1px solid rgba(255,255,255,.08); background:rgba(255,255,255,.04); display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,.72);}
.xv-link-stack{padding-top:14px; margin-top:2px; border-top:1px solid rgba(255,255,255,.08); display:flex; flex-direction:column; gap:10px;}
.xv-link-row{width:100%; border-radius:18px; border:1px solid rgba(255,255,255,.10); background:linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02)); padding:14px 15px; display:flex; align-items:center; justify-content:space-between; gap:12px; transition:border-color .15s ease, background .15s ease;}
.xv-link-row:hover{border-color:rgba(168,85,247,.40); background:linear-gradient(180deg, rgba(168,85,247,.10), rgba(255,255,255,.03));}
.xv-link-icon{width:42px; height:42px; border-radius:14px; border:1px solid rgba(255,255,255,.08); background:rgba(255,255,255,.04); display:flex; align-items:center; justify-content:center; color:#c4b5fd; flex:0 0 auto;}
.xv-link-copy{display:flex; flex-direction:column; min-width:0; gap:2px;}
.xv-link-copy strong{font-size:15px; color:#fff; line-height:1.2;}
.xv-link-copy span{font-size:12px; color:rgba(255,255,255,.58);}
.xv-link-go{display:flex; align-items:center; gap:8px; color:#60a5fa; font-size:14px; font-weight:800;}
.xv-link-go .bi{color:rgba(255,255,255,.55);}
#quantityModal{max-width:368px !important;}
#quantityModal > .p-3.border-b{padding:14px 16px !important; background:rgba(14,10,28,.94) !important;}
#quantityModal > .p-4{padding:16px !important; background:rgba(9,10,20,.96) !important;}
#qtyProductInfo{padding:14px !important; border-radius:18px !important; background:linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.02));}
#qtyVariantName{color:#c4b5fd !important; font-weight:800;}
#qtyPricePerKey{color:#6ee7b7 !important;}
.xv-qty-control{width:42px; height:42px; border-radius:14px; border:1px solid rgba(255,255,255,.08); background:rgba(255,255,255,.05); color:#fff; display:flex; align-items:center; justify-content:center; font-size:20px; line-height:1; transition:background .15s ease, border-color .15s ease;}
.xv-qty-control:hover{background:rgba(255,255,255,.08); border-color:rgba(255,255,255,.14);}
#quantityInput{height:42px; border-radius:16px !important; font-weight:700;}
.xv-qty-total{border-radius:18px !important; border-color:rgba(110,231,183,.30) !important; background:linear-gradient(180deg, rgba(16,185,129,.12), rgba(255,255,255,.03)) !important;}
.xv-modal-policy{padding:2px 4px 0; font-size:11px; line-height:1.55; color:rgba(255,255,255,.58);}
.xv-modal-policy a{color:#93c5fd !important;}
.xv-modal-actions-row{display:flex; gap:10px; padding-top:4px;}
.xv-modal-cancel-btn{flex:1; min-height:46px; border-radius:16px; border:1px solid rgba(255,255,255,.10); background:rgba(255,255,255,.04); color:#fff; font-weight:700; transition:background .15s ease, border-color .15s ease;}
.xv-modal-cancel-btn:hover{background:rgba(255,255,255,.08); border-color:rgba(255,255,255,.16);}
.xv-modal-cancel-wrap{position:sticky; bottom:0; z-index:3; margin-top:12px; padding-top:10px; background:transparent;}
.xv-modal-cancel-wrap .xv-modal-cancel-btn{width:100%;}
#variantModal .xv-modal-scroll{padding-bottom:12px !important;}
#variantModal{display:none; flex-direction:column; max-height:min(860px, calc(100dvh - 18px));}
#variantModal .xv-modal-scroll{flex:1 1 auto; min-height:0; max-height:none !important; overflow-y:auto; padding-bottom:12px !important;}
#variantModal .xv-modal-scroll::before,
#variantModal .xv-modal-scroll::after{content:none !important; display:none !important; background:none !important;}
#variantModal .xv-variant-footer{flex:0 0 auto; padding:10px 16px 16px; border-top:1px solid rgba(255,255,255,.08); background:rgba(10,7,24,.98);}
#variantModal .xv-variant-footer .xv-modal-cancel-btn{width:100%; min-height:48px; background:linear-gradient(180deg, rgba(200,52,102,.72), rgba(131,14,54,.92)); border-color:rgba(255,255,255,.14); box-shadow:0 10px 24px rgba(110,12,42,.28);}
#variantModal .xv-variant-footer .xv-modal-cancel-btn:hover{background:linear-gradient(180deg, rgba(219,64,117,.78), rgba(145,18,60,.96)); border-color:rgba(255,255,255,.18);}
@supports not (height: 100dvh){#variantModal{max-height:min(860px, calc(100vh - 18px));}}
.create-order-btn{flex:1; min-height:46px; border-radius:16px !important; font-weight:800 !important; letter-spacing:.01em; box-shadow:none !important;}
@media (max-width:640px){ .xv-modal-topbar{padding:13px 14px !important;} .xv-modal-scroll{padding:12px 14px 14px !important;} .xv-modal-title-text{font-size:15px;} .xv-variant-option{padding:14px;} #quantityModal{max-width:calc(100vw - 18px) !important;} .xv-variant-footer{padding:10px 14px 14px;} }

        .xylo-btn{
            flex: 1;
            text-align:center;
            padding: 10px 12px;
            border-radius: 14px;
            border: 1px solid rgba(255,255,255,0.16);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            font-weight: 800;
            text-decoration:none;
            user-select:none;
            cursor:pointer;
            white-space: nowrap;
        }
        .xylo-btn-close{
            background: linear-gradient(135deg, rgba(239,68,68,0.85), rgba(220,38,38,0.50)) !important;
            color: rgba(255,255,255,0.96) !important;
            box-shadow: 0 14px 32px rgba(239,68,68,0.18), 0 0 26px rgba(220,38,38,0.16);
        }
        .xylo-btn-orders{
            background: linear-gradient(135deg, rgba(34,197,94,0.85), rgba(16,185,129,0.55)) !important;
            color: rgba(255,255,255,0.98) !important;
            box-shadow: 0 14px 34px rgba(16,185,129,0.18), 0 0 28px rgba(34,197,94,0.16);
        }

    
/* XYLO Upgrade 07f: cache-resistant purple modal gallery controls */
.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-arrow{position:absolute!important;top:50%!important;transform:translateY(-50%)!important;z-index:40!important;width:42px!important;height:42px!important;border-radius:999px!important;border:1px solid rgba(216,180,254,.72)!important;background:linear-gradient(135deg,#c084fc 0%,#9333ea 48%,#6d28d9 100%)!important;color:#fff!important;font-size:30px!important;font-weight:900!important;line-height:1!important;display:flex!important;align-items:center!important;justify-content:center!important;backdrop-filter:blur(12px)!important;cursor:pointer!important;box-shadow:0 14px 34px rgba(126,34,206,.52),0 0 0 1px rgba(255,255,255,.16) inset,0 0 18px rgba(168,85,247,.42)!important;text-shadow:0 1px 8px rgba(88,28,135,.65)!important;transition:transform .14s ease,box-shadow .14s ease,filter .14s ease!important;}
.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-arrow:hover{filter:brightness(1.12)!important;box-shadow:0 16px 40px rgba(168,85,247,.62),0 0 0 1px rgba(255,255,255,.22) inset,0 0 24px rgba(192,132,252,.52)!important;}
.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-arrow:active{transform:translateY(-50%) scale(.96)!important;}
.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-prev{left:10px!important;}
.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-next{right:10px!important;}
.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-dots{position:absolute!important;left:50%!important;bottom:10px!important;transform:translateX(-50%)!important;z-index:40!important;display:flex!important;gap:8px!important;align-items:center!important;justify-content:center!important;max-width:58%!important;overflow:hidden!important;padding:6px 8px!important;border-radius:999px!important;background:rgba(46,16,101,.76)!important;border:1px solid rgba(216,180,254,.34)!important;box-shadow:0 12px 28px rgba(88,28,135,.34),0 0 0 1px rgba(255,255,255,.07) inset!important;backdrop-filter:blur(12px)!important;}
.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-dot{width:9px!important;height:9px!important;min-width:9px!important;border-radius:999px!important;border:1px solid rgba(216,180,254,.50)!important;background:rgba(216,180,254,.46)!important;padding:0!important;margin:0!important;cursor:pointer!important;opacity:1!important;box-shadow:none!important;appearance:none!important;-webkit-appearance:none!important;transition:width .16s ease,background .16s ease,box-shadow .16s ease,border-color .16s ease!important;}
.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-dot.is-active,.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-dot.xv-gallery-dot-active,.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-dot[data-xv-active="1"]{width:24px!important;min-width:24px!important;background:linear-gradient(90deg,#e9d5ff 0%,#c084fc 40%,#9333ea 100%)!important;border-color:rgba(250,245,255,.92)!important;box-shadow:0 0 16px rgba(168,85,247,.82),0 0 0 1px rgba(255,255,255,.16) inset!important;}
.xv-modal-image-wrap[data-xv-modal-gallery] .xv-gallery-count{background:rgba(46,16,101,.78)!important;border:1px solid rgba(216,180,254,.40)!important;color:#f5e8ff!important;}

/* Upgrade 08: buy modal trust strip */
.xv-buy-trust-strip{display:grid;grid-template-columns:1fr;gap:8px;margin:-2px 0 12px;padding:10px;border-radius:16px;border:1px solid rgba(216,180,254,.20);background:linear-gradient(135deg,rgba(88,28,135,.22),rgba(30,20,55,.46));box-shadow:0 12px 30px rgba(0,0,0,.22),0 0 0 1px rgba(255,255,255,.04) inset;}
.xv-buy-trust-item,.xv-buy-trust-link{display:flex;align-items:center;gap:8px;min-height:34px;border-radius:12px;padding:8px 10px;font-size:12px;font-weight:800;line-height:1.25;}
.xv-buy-trust-item{color:#f3e8ff;background:rgba(255,255,255,.045);border:1px solid rgba(255,255,255,.07);}
.xv-buy-trust-item i{color:#d8b4fe;text-shadow:0 0 12px rgba(168,85,247,.55);}
.xv-buy-trust-link{justify-content:center;color:#fff!important;text-decoration:none;background:linear-gradient(135deg,#a855f7,#7c3aed);border:1px solid rgba(255,255,255,.14);box-shadow:0 10px 26px rgba(126,34,206,.32);}
.xv-buy-trust-link:hover{filter:brightness(1.07);color:#fff!important;}
@media (min-width:520px){.xv-buy-trust-strip{grid-template-columns:1fr 1fr auto;align-items:center}.xv-buy-trust-link{white-space:nowrap}}


</style>
    <link rel="stylesheet" href="/assets/css/vip-purple.css?v=1773418345">
</head>
<body class="text-gray-100 min-h-screen">
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
        <a href="/products.php" class="xv-tab xv-tabActive" aria-label="Products">
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
        <!-- Alerts -->
        
        
        
        <!-- Announcement Marquee -->
                <div class="glass rounded-lg p-2 mb-4">
            <div class="marquee-container">
                <div class="marquee-content text-sm text-blue-300">
                    <i class="bi bi-megaphone-fill mr-2 text-yellow-400"></i>
                    𝗪𝗲𝗹𝗰𝗼𝗺𝗲 𝗧𝗼 𝗫𝘆𝗹𝗼 𝗦𝘁𝗼𝗿𝗲                </div>
            </div>
        </div>
        
        <!-- Search and Filters -->
        <div class="mb-6 space-y-4">
            <!-- Search Bar (Smart multi-field, matches Admin products search) -->
            <div id="products" class="glass rounded-lg p-3">
                <div class="flex items-center gap-2">
                    <i class="bi bi-search text-gray-400"></i>
                    <input id="productSearchInput" type="text" placeholder="Quick search products..." class="w-full rounded-lg px-3 py-2 text-sm text-gray-100 bg-transparent border border-white/20 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-white/20" autocomplete="off" value="">
                    <button type="button" id="productSearchClear" class="px-3 py-2 text-xs rounded-lg glass border border-white/10 text-gray-200 hover:border-white/30" style="display:none;align-items:center;gap:6px;">
                        <i class="bi bi-x-circle"></i><span>Clear</span>
                    </button>
                </div>
                <p class="text-xs text-gray-400 mt-1">Tip: search by product name, device support, or category.</p>
                <div class="mt-3 flex flex-col sm:flex-row sm:items-center gap-2">
                    <label for="productSortSelect" class="text-xs font-semibold text-gray-300 whitespace-nowrap"><i class="bi bi-sort-down-alt mr-1"></i>Sort:</label>
                    <select id="productSortSelect" class="w-full sm:w-auto rounded-lg px-3 py-2 text-sm text-gray-100 bg-black/30 border border-white/20 focus:outline-none focus:ring-1 focus:ring-purple-400/40">
                        <option value="default" selected>Default order</option>
                        <option value="featured" >Featured first</option>
                        <option value="name_asc" >Name A-Z</option>
                        <option value="name_desc" >Name Z-A</option>
                        <option value="price_low" >Price low to high</option>
                        <option value="price_high" >Price high to low</option>
                        <option value="newest" >Newest first</option>
                    </select>
                </div>

            </div>

            <!-- Filter Bar -->
<div class="glass rounded-lg p-3">
    <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_auto] gap-3 items-end">
        <div>
            <div class="flex items-center gap-2 mb-2">
                <i class="bi bi-controller text-blue-400 text-xs"></i>
                <span class="text-xs font-medium text-gray-300">Game:</span>
            </div>
            <div class="relative z-[80]" id="xvGameSelectorWrap">
                                <button type="button" id="xvGameDropdownBtn" class="w-full rounded-xl px-4 py-3 text-sm text-gray-100 bg-white/5 border border-white/15 focus:outline-none focus:ring-1 focus:ring-purple-400/30 flex items-center justify-between gap-3 text-left">
                    <span class="flex items-center gap-3 min-w-0">
                        <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center">
                            <img src="/assets/img/pill-badges/games.svg" alt="" class="w-full h-full object-cover" loading="lazy">
                        </span>
                        <span class="truncate" id="xvGameDropdownLabel">All Games</span>
                    </span>
                    <i class="bi bi-chevron-down text-gray-400 transition" id="xvGameDropdownChevron"></i>
                </button>
                <div id="xvGameDropdownMenu" class="hidden mt-2 w-full rounded-2xl border border-white/10 bg-[#1b1d27]/95 backdrop-blur-xl shadow-[0_18px_60px_rgba(0,0,0,0.45)] overflow-hidden relative z-50">
                    <div class="max-h-80 overflow-y-auto">
                        <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="all" data-label="All Games" data-badge="/assets/img/pill-badges/games.svg">
                            <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/img/pill-badges/games.svg" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                            <span class="truncate">All Games</span>
                        </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="CODM" data-label="CODM" data-badge="/assets/uploads/category-logos/cat_6_20260313_003636_534b_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_6_20260313_003636_534b_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">CODM</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="PUBGM" data-label="PUBGM" data-badge="/assets/uploads/category-logos/cat_14_20260313_180016_daff_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_14_20260313_180016_daff_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">PUBGM</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="MLBB" data-label="MLBB" data-badge="/assets/uploads/category-logos/cat_13_20260313_175524_9950_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_13_20260313_175524_9950_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">MLBB</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="Crossfire Legends" data-label="Crossfire Legends" data-badge="/assets/uploads/category-logos/cat_7_20260313_180047_a79d_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_7_20260313_180047_a79d_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">Crossfire Legends</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="Delta Force" data-label="Delta Force" data-badge="/assets/uploads/category-logos/cat_8_20260313_180031_bd69_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_8_20260313_180031_bd69_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">Delta Force</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="Bloodstrike" data-label="Bloodstrike" data-badge="/assets/uploads/category-logos/cat_5_20260313_180100_ba44_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_5_20260313_180100_ba44_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">Bloodstrike</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="Honor of Kings" data-label="Honor of Kings" data-badge="/assets/uploads/category-logos/cat_11_20260313_180114_ebe0_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_11_20260313_180114_ebe0_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">Honor of Kings</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="Valorant Mobile" data-label="Valorant Mobile" data-badge="/assets/uploads/category-logos/cat_15_20260313_180129_9fe7_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_15_20260313_180129_9fe7_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">Valorant Mobile</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="Free Fire" data-label="Free Fire" data-badge="/assets/uploads/category-logos/cat_10_20260313_180157_b15d_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_10_20260313_180157_b15d_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">Free Fire</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="Arena Breakout" data-label="Arena Breakout" data-badge="/assets/uploads/category-logos/cat_3_20260313_180145_7c5d_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_3_20260313_180145_7c5d_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">Arena Breakout</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="8 Ball Pool" data-label="8 Ball Pool" data-badge="/assets/uploads/category-logos/cat_25_20260313_180208_21b8_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_25_20260313_180208_21b8_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">8 Ball Pool</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="Farlight 84" data-label="Farlight 84" data-badge="/assets/uploads/category-logos/cat_9_20260313_180221_b887_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_9_20260313_180221_b887_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">Farlight 84</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="Arena of Valor" data-label="Arena of Valor" data-badge="/assets/uploads/category-logos/cat_4_20260313_180233_256a_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_4_20260313_180233_256a_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">Arena of Valor</span>
                            </button>
                                                                                <button type="button" class="xv-game-option w-full flex items-center gap-3 px-4 py-3 text-left text-gray-100 hover:bg-white/8 transition border-b border-white/5" data-value="iPA Tools" data-label="iPA Tools" data-badge="/assets/uploads/category-logos/cat_12_20260313_180242_205b_badge.webp">
                                <span class="w-8 h-8 rounded-lg overflow-hidden bg-white/10 border border-white/10 shrink-0 flex items-center justify-center"><img src="/assets/uploads/category-logos/cat_12_20260313_180242_205b_badge.webp" alt="" class="w-full h-full object-cover" loading="lazy"></span>
                                <span class="truncate">iPA Tools</span>
                            </button>
                                            </div>
                </div>
                <select id="xvGameSelect" class="sr-only">
                    <option value="all" selected>All Games</option>
                                                                    <option value="CODM" >CODM</option>
                                                                    <option value="PUBGM" >PUBGM</option>
                                                                    <option value="MLBB" >MLBB</option>
                                                                    <option value="Crossfire Legends" >Crossfire Legends</option>
                                                                    <option value="Delta Force" >Delta Force</option>
                                                                    <option value="Bloodstrike" >Bloodstrike</option>
                                                                    <option value="Honor of Kings" >Honor of Kings</option>
                                                                    <option value="Valorant Mobile" >Valorant Mobile</option>
                                                                    <option value="Free Fire" >Free Fire</option>
                                                                    <option value="Arena Breakout" >Arena Breakout</option>
                                                                    <option value="8 Ball Pool" >8 Ball Pool</option>
                                                                    <option value="Farlight 84" >Farlight 84</option>
                                                                    <option value="Arena of Valor" >Arena of Valor</option>
                                                                    <option value="iPA Tools" >iPA Tools</option>
                                    </select>
            </div>
        </div>
        <div>
            <div class="flex items-center gap-2 mb-2">
                <i class="bi bi-phone text-purple-300 text-xs"></i>
                <span class="text-xs font-medium text-gray-300">Device:</span>
            </div>
            <div class="flex flex-wrap gap-2" id="xvDevicePills">
                                    <button type="button"
                        class="xv-device-pill px-4 py-2 rounded-xl text-xs font-bold transition border border-white/15 bg-purple-500/80 text-white border-purple-300/40 shadow-[0_0_18px_rgba(168,85,247,0.22)]"
                        data-xv-device-filter="all"
                        aria-pressed="true">
                        All                    </button>
                                    <button type="button"
                        class="xv-device-pill px-4 py-2 rounded-xl text-xs font-bold transition border border-white/15 bg-white/5 text-gray-300 hover:bg-white/10"
                        data-xv-device-filter="android"
                        aria-pressed="false">
                        Android                    </button>
                                    <button type="button"
                        class="xv-device-pill px-4 py-2 rounded-xl text-xs font-bold transition border border-white/15 bg-white/5 text-gray-300 hover:bg-white/10"
                        data-xv-device-filter="ios"
                        aria-pressed="false">
                        iOS                    </button>
                            </div>
        </div>
    </div>
</div>

<!-- Products Grid<!-- Products Grid (USER STORE) -->
        <div class="glass rounded-lg p-3" id="xvProductsGridWrap">
                                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">
                                                                        <div
        class="vip-product-card w-full text-left  is-featured"
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="CODM"
        data-device-family="android"
        data-search="xylo injector android (non-root/root) codm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1778045789_43ac61b4.webp" class="vip-product-img" alt="Xylo Injector" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-featured-badge"><i class="bi bi-stars"></i> Featured</span>
                    <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 5            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Xylo Injector</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_6_20260313_003636_534b_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> CODM</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 40</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 177, 'Xylo Injector', 'CODM', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  is-featured"
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="CODM"
        data-device-family="android"
        data-search="xylo ultima android (non-root/root) codm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1776770235_2112d8d3.webp" class="vip-product-img" alt="Xylo Ultima" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-featured-badge"><i class="bi bi-stars"></i> Featured</span>
                    <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 5            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Xylo Ultima</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_6_20260313_003636_534b_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> CODM</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 150</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 81, 'Xylo Ultima', 'CODM', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  is-featured"
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="CODM"
        data-device-family="android"
        data-search="xylo apex (2 mod - 1 key) android (non-root/root) codm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1776770148_d3f14fd0.webp" class="vip-product-img" alt="Xylo Apex (2 Mod - 1 Key)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-featured-badge"><i class="bi bi-stars"></i> Featured</span>
                    <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 7            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Xylo Apex (2 Mod - 1 Key)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_6_20260313_003636_534b_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> CODM</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 20</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 80, 'Xylo Apex (2 Mod - 1 Key)', 'CODM', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  is-featured"
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="Bloodstrike"
        data-device-family="android"
        data-search="xylo pbs android (non-root/root) bloodstrike">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1776770214_8e769292.webp" class="vip-product-img" alt="Xylo PBS" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-featured-badge"><i class="bi bi-stars"></i> Featured</span>
                    <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 7            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Xylo PBS</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_5_20260313_180100_ba44_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> Bloodstrike</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 20</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 83, 'Xylo PBS', 'Bloodstrike', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  is-featured"
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="6 Games"
        data-device-family="android"
        data-search="xeno (6 games - 1 key) android (non-root/root) mlbb">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1777967698_e26f9a21.webp" class="vip-product-img" alt="Xeno (6 Games - 1 Key)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-featured-badge"><i class="bi bi-stars"></i> Featured</span>
                    <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 4            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Xeno (6 Games - 1 Key)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/img/pill-badges/games.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 6 Games</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 300</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 160, 'Xeno (6 Games - 1 Key)', 'MLBB', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="8 Ball Pool"
        data-device-family="android"
        data-search="aim x android (non-root/root) 8 ball pool">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773796155_fe03208a.webp" class="vip-product-img" alt="Aim X" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 5            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Aim X</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_25_20260313_180208_21b8_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 8 Ball Pool</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 99</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 84, 'Aim X', '8 Ball Pool', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="8 Ball Pool"
        data-device-family="android"
        data-search="king of shots (basic) android (non-root/root) 8 ball pool">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799973_a3d93df2.webp" class="vip-product-img" alt="King of Shots (Basic)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">King of Shots (Basic)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_25_20260313_180208_21b8_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 8 Ball Pool</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 130</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 85, 'King of Shots (Basic)', '8 Ball Pool', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="8 Ball Pool"
        data-device-family="android"
        data-search="king of shots (mod) android (non-root/root) 8 ball pool">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799985_401eb338.webp" class="vip-product-img" alt="King of Shots (Mod)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">King of Shots (Mod)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_25_20260313_180208_21b8_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 8 Ball Pool</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 100</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 86, 'King of Shots (Mod)', '8 Ball Pool', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="8 Ball Pool"
        data-device-family="android"
        data-search="king of shots (premium) android (non-root/root) 8 ball pool">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773800000_bd786478.webp" class="vip-product-img" alt="King of Shots (Premium)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">King of Shots (Premium)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_25_20260313_180208_21b8_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 8 Ball Pool</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 170</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 87, 'King of Shots (Premium)', '8 Ball Pool', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="8 Ball Pool"
        data-device-family="android"
        data-search="ninja.e android (non-root/root) 8 ball pool">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773800022_28dbee3a.webp" class="vip-product-img" alt="Ninja.E" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Ninja.E</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_25_20260313_180208_21b8_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 8 Ball Pool</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 300</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 90, 'Ninja.E', '8 Ball Pool', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="8 Ball Pool"
        data-device-family="android"
        data-search="snake android (non-root/root) 8 ball pool">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773800034_c8cb7fea.webp" class="vip-product-img" alt="Snake" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Snake</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_25_20260313_180208_21b8_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 8 Ball Pool</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 350</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 91, 'Snake', '8 Ball Pool', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="8 Ball Pool"
        data-device-family="ios"
        data-search="gbd 8bp (ios) ios (non-jailbreak/jailbreak) 8 ball pool">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799938_53c910e2.webp" class="vip-product-img" alt="GBD 8BP (iOS)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">GBD 8BP (iOS)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_25_20260313_180208_21b8_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 8 Ball Pool</span>
                                                                <span class="vip-chip vip-chip-device" title="iOS (Non-Jailbreak/Jailbreak)">
                            <img src="/assets/img/pill-badges/ios.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">iOS</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 150</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 92, 'GBD 8BP (iOS)', '8 Ball Pool', 'iOS (Non-Jailbreak/Jailbreak)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="8 Ball Pool"
        data-device-family="ios"
        data-search="wizard ios (non-jailbreak/jailbreak) 8 ball pool">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773800047_80463c12.webp" class="vip-product-img" alt="Wizard" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Wizard</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_25_20260313_180208_21b8_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 8 Ball Pool</span>
                                                                <span class="vip-chip vip-chip-device" title="iOS (Non-Jailbreak/Jailbreak)">
                            <img src="/assets/img/pill-badges/ios.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">iOS</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 280</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 93, 'Wizard', '8 Ball Pool', 'iOS (Non-Jailbreak/Jailbreak)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="2 Games"
        data-device-family="android"
        data-search="aorus (2 games - 1 key) android (non-root/root) delta force">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799834_1e2d42d6.webp" class="vip-product-img" alt="Aorus (2 Games - 1 Key)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 4            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Aorus (2 Games - 1 Key)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/img/pill-badges/games.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 2 Games</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 80</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 94, 'Aorus (2 Games - 1 Key)', 'Delta Force', 'Android (Non-Root/Root)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="3 Games"
        data-device-family="ios"
        data-search="cloud (3 games - 1 key) ios (non-jailbreak/jailbreak) pubgm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799430_32039fc0.webp" class="vip-product-img" alt="Cloud (3 Games - 1 Key)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Cloud (3 Games - 1 Key)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/img/pill-badges/games.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 3 Games</span>
                                                                <span class="vip-chip vip-chip-device" title="iOS (Non-Jailbreak/Jailbreak)">
                            <img src="/assets/img/pill-badges/ios.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">iOS</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 175</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 95, 'Cloud (3 Games - 1 Key)', 'PUBGM', 'iOS (Non-Jailbreak/Jailbreak)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="PUBGM"
        data-device-family="ios"
        data-search="dolphin (ios) ios (non-jailbreak/jailbreak) pubgm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799473_33e50d6b.webp" class="vip-product-img" alt="Dolphin (iOS)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Dolphin (iOS)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_14_20260313_180016_daff_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> PUBGM</span>
                                                                <span class="vip-chip vip-chip-device" title="iOS (Non-Jailbreak/Jailbreak)">
                            <img src="/assets/img/pill-badges/ios.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">iOS</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 120</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 96, 'Dolphin (iOS)', 'PUBGM', 'iOS (Non-Jailbreak/Jailbreak)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="PUBGM"
        data-device-family="ios"
        data-search="golden (ios) ios (non-jailbreak/jailbreak) pubgm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799518_dec721cf.webp" class="vip-product-img" alt="Golden (iOS)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Golden (iOS)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_14_20260313_180016_daff_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> PUBGM</span>
                                                                <span class="vip-chip vip-chip-device" title="iOS (Non-Jailbreak/Jailbreak)">
                            <img src="/assets/img/pill-badges/ios.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">iOS</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 120</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 97, 'Golden (iOS)', 'PUBGM', 'iOS (Non-Jailbreak/Jailbreak)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="PUBGM"
        data-device-family="ios"
        data-search="king (ios) ios (non-jailbreak/jailbreak) pubgm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799613_fcb073af.webp" class="vip-product-img" alt="King (iOS)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">King (iOS)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_14_20260313_180016_daff_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> PUBGM</span>
                                                                <span class="vip-chip vip-chip-device" title="iOS (Non-Jailbreak/Jailbreak)">
                            <img src="/assets/img/pill-badges/ios.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">iOS</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 120</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 98, 'King (iOS)', 'PUBGM', 'iOS (Non-Jailbreak/Jailbreak)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="recommended"
        data-category-label="PUBGM"
        data-device-family="ios"
        data-search="oasis (ios) ios (non-jailbreak/jailbreak) pubgm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799657_402c749a.webp" class="vip-product-img" alt="Oasis (iOS)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Oasis (iOS)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_14_20260313_180016_daff_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> PUBGM</span>
                                                                <span class="vip-chip vip-chip-device" title="iOS (Non-Jailbreak/Jailbreak)">
                            <img src="/assets/img/pill-badges/ios.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">iOS</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 240</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 99, 'Oasis (iOS)', 'PUBGM', 'iOS (Non-Jailbreak/Jailbreak)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="4 Games"
        data-device-family="ios"
        data-search="star 1 key - 4 games (ios) ios (non-jailbreak/jailbreak) pubgm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799747_31f8afae.webp" class="vip-product-img" alt="Star 1 Key - 4 Games (iOS)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Star 1 Key - 4 Games (iOS)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/img/pill-badges/games.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> 4 Games</span>
                                                                <span class="vip-chip vip-chip-device" title="iOS (Non-Jailbreak/Jailbreak)">
                            <img src="/assets/img/pill-badges/ios.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">iOS</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 120</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 100, 'Star 1 Key - 4 Games (iOS)', 'PUBGM', 'iOS (Non-Jailbreak/Jailbreak)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="PUBGM"
        data-device-family="ios"
        data-search="super (ios) ios (non-jailbreak/jailbreak) pubgm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799757_1e0a2988.webp" class="vip-product-img" alt="Super (iOS)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Super (iOS)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_14_20260313_180016_daff_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> PUBGM</span>
                                                                <span class="vip-chip vip-chip-device" title="iOS (Non-Jailbreak/Jailbreak)">
                            <img src="/assets/img/pill-badges/ios.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">iOS</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 120</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 101, 'Super (iOS)', 'PUBGM', 'iOS (Non-Jailbreak/Jailbreak)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="PUBGM"
        data-device-family="ios"
        data-search="vnhax (ios) ios (non-jailbreak/jailbreak) pubgm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799767_f1ce43ca.webp" class="vip-product-img" alt="VNHax (iOS)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">VNHax (iOS)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_14_20260313_180016_daff_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> PUBGM</span>
                                                                <span class="vip-chip vip-chip-device" title="iOS (Non-Jailbreak/Jailbreak)">
                            <img src="/assets/img/pill-badges/ios.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">iOS</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 120</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 102, 'VNHax (iOS)', 'PUBGM', 'iOS (Non-Jailbreak/Jailbreak)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left  "
        data-maintenance="0"
        data-status-key="up"
        data-category-label="PUBGM"
        data-device-family="android"
        data-search="aegis (root) android (root only) pubgm">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1773799399_797875ed.webp" class="vip-product-img" alt="Aegis (Root)" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 3            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Aegis (Root)</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_14_20260313_180016_daff_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> PUBGM</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Root Only)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 100</span>
                                    <button type="button" class="vip-buy-btn" onclick="xvBuyOpen(this, 103, 'Aegis (Root)', 'PUBGM', 'Android (Root Only)', false); event.stopPropagation();">
                        <i class="bi bi-cart3"></i>
                        <span>Buy</span>
                    </button>
                                    </div>
            </div>
</div>
                                                <div
        class="vip-product-card w-full text-left is-maintenance "
        data-maintenance="1"
        data-status-key="maintenance"
        data-category-label="Crossfire Legends"
        data-device-family="android"
        data-search="xylo cfl android (non-root/root) crossfire legends">
        <div class="vip-product-media">
        <img src="/assets/uploads/products/p_1776770187_3cf8a8a9.webp" class="vip-product-img" alt="Xylo CFL" loading="lazy" decoding="async" fetchpriority="low">
        <div class="vip-gradient"></div>
            <span class="vip-maintenance-badge"><i class="bi bi-tools"></i> Maintenance</span>
                    <span class="vip-pill">
                <i class="bi bi-grid-3x3-gap-fill"></i> 7            </span>
            </div>

    <div class="vip-product-body">
        
        <div class="vip-product-info">
            <div class="vip-product-toprow">
                <div class="vip-product-title clamp1">Xylo CFL</div>
            </div>

                            <div class="vip-product-meta">
                                            <span class="vip-chip vip-chip-category"><img src="/assets/uploads/category-logos/cat_7_20260313_180047_a79d_badge.webp" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> Crossfire Legends</span>
                                                                <span class="vip-chip vip-chip-device" title="Android (Non-Root/Root)">
                            <img src="/assets/img/pill-badges/android.svg" alt="" class="vip-chip-icon-img" loading="lazy" decoding="async" fetchpriority="low"> <span class="vip-chip-device-text">Android</span>
                        </span>
                                    </div>
                    </div>

<div class="vip-product-price">
                            <span class="vip-price-badge">✦ 20</span>
                                    <a href="status.php?category=Crossfire%20Legends&product=Xylo%20CFL" class="vip-buy-btn vip-maintenance-btn" onclick="event.stopPropagation();">
                        <i class="bi bi-shield-exclamation"></i>
                        <span>View Status</span>
                    </a>
                                    </div>
                    </div>
</div>
                    </div>
            
            <div id="xvPaginationWrap">
                                            <div class="mt-5 flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                    <div class="text-xs text-gray-400">
                        Showing <span class="text-gray-200 font-semibold">1</span>
                        - <span class="text-gray-200 font-semibold">24</span>
                        of <span class="text-gray-200 font-semibold">91</span> products
                    </div>
                    <div class="flex items-center gap-1 justify-center">
                        <a href="?page=1" class="px-2 py-1 text-xs rounded glass border border-white/10 text-gray-200 hover:border-blue-500/50">First</a>
                        <a href="?page=1" class="px-2 py-1 text-xs rounded glass border border-white/10 text-gray-200 hover:border-blue-500/50">Prev</a>
                                                    <a href="?page=1" class="px-2 py-1 text-xs rounded border bg-blue-500 text-white border-blue-400/50">1</a>
                                                    <a href="?page=2" class="px-2 py-1 text-xs rounded border glass border-white/10 text-gray-200 hover:border-blue-500/50">2</a>
                                                    <a href="?page=3" class="px-2 py-1 text-xs rounded border glass border-white/10 text-gray-200 hover:border-blue-500/50">3</a>
                                                <a href="?page=2" class="px-2 py-1 text-xs rounded glass border border-white/10 text-gray-200 hover:border-blue-500/50">Next</a>
                        <a href="?page=4" class="px-2 py-1 text-xs rounded glass border border-white/10 text-gray-200 hover:border-blue-500/50">Last</a>
                    </div>
                </div>
                        </div>

        </div>
    </main>

    <!-- Variant Selection Modal -->
    <div class="overlay" id="overlay" onclick="xvCloseTopModal()"></div>
    
    <div class="variant-modal xv-glass-modal glass rounded-lg overflow-hidden animate-slide-up border border-white/20" id="variantModal">
        <div class="p-3 border-b border-white/10 flex justify-between items-start xv-modal-topbar">
            <div class="xv-modal-head">
                <div class="xv-modal-title-row">
                    <i class="bi bi-box-seam text-blue-400"></i>
                    <span class="xv-modal-title-text" id="modalProductName"></span>
                </div>
                <div class="xv-modal-header-pills" id="modalHeaderPills" style="display:none;">
                    <span class="vip-chip vip-chip-category xv-modal-chip" id="modalCategoryPill"><i class="bi bi-controller"></i> <span></span></span>
                    <span class="vip-chip vip-chip-device xv-modal-chip" id="modalDevicePill" title=""><i class="bi bi-phone"></i> <span class="vip-chip-device-text"></span></span>
                </div>
            </div>
            <button type="button" onclick="closeVariantModal()" class="xv-close-red" aria-label="Close">
                <i class="bi bi-x text-xl"></i>
            </button>
        </div>
        
        <div class="p-3 max-h-[60vh] overflow-y-auto xv-modal-scroll">
            <div id="variantContent">
                <!-- Variants will be loaded here -->
            </div>
        </div>
        <div class="xv-variant-footer">
            <button type="button" onclick="closeVariantModal()" class="xv-modal-cancel-btn">Cancel</button>
        </div>
    </div>

    <!-- Quantity Selection Modal -->
    <div class="variant-modal glass rounded-lg overflow-hidden animate-slide-up border border-white/20" id="quantityModal" style="max-width: 320px;">
        <div class="p-3 border-b border-white/10 flex justify-between items-center bg-gray-800">
            <h5 class="font-bold text-white text-sm flex items-center gap-2">
                <i class="bi bi-cart-plus text-cyan-300"></i>
                Confirm Purchase
            </h5>
            <button type="button" onclick="closeQuantityModal()" class="xv-close-red" aria-label="Close">
                <i class="bi bi-x text-xl"></i>
            </button>
        </div>
        
        <div class="p-4 bg-gray-900">
            <div class="space-y-4">
                <!-- Product Info -->
                <div id="qtyProductInfo" class="glass p-3 rounded border border-white/20 text-center">
                    <h4 class="font-bold text-white text-sm mb-1" id="qtyProductName"></h4>
                    <div class="text-xs text-gray-300 mb-1">
                        Variant: <span class="text-cyan-300" id="qtyVariantName"></span>
                    </div>
                    <div class="text-xs text-gray-300">
                        Price per item: <span class="text-green-400 font-bold" id="qtyPricePerKey"></span>
                    </div>
                </div>
                
                <!-- Quantity Selector -->
                <div>
                    <label class="text-gray-400 text-xs mb-1.5 block font-medium">Quantity:</label>
                    <div class="flex items-center justify-between gap-2">
                        <button type="button" class="xv-qty-control" onclick="changeQuantity(-1)" aria-label="Decrease quantity">−</button>
                        <input type="number" 
                               class="glass border border-white/20 rounded p-2 w-full bg-transparent text-white text-center text-sm" 
                               id="quantityInput" 
                               value="1" 
                               min="1" 
                               oninput="updateTotalAmount()">
                        <button type="button" class="xv-qty-control" onclick="changeQuantity(1)" aria-label="Increase quantity">+</button>
                    </div>
                </div>
                
                <!-- Total Price -->
                <div class="glass border border-green-500/30 bg-green-500/10 p-3 rounded xv-qty-total">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-300 text-sm">Total Price:</span>
                        <span id="qtyTotalAmount" class="text-green-400 font-bold text-lg"></span>
                    </div>
                </div>
                
                <!-- Balance Info -->
                <div class="text-xs text-gray-400 text-center">
                    Balance after purchase: <span class="text-green-400" id="balanceAfter">✦ 0 XC</span>
                </div>
                
                <!-- Order Agreement -->
                <div class="xv-modal-policy text-center px-1">
                    By creating an order, you agree to our <a href="/terms" class="text-cyan-300 hover:text-cyan-200 underline underline-offset-2">Terms</a>, <a href="/refund" class="text-cyan-300 hover:text-cyan-200 underline underline-offset-2">Refund Policy</a>, and <a href="/delivery" class="text-cyan-300 hover:text-cyan-200 underline underline-offset-2">Delivery Policy</a>.
                </div>
                
                <!-- Action Buttons -->
				<div class="xv-modal-actions-row">
					<button onclick="closeQuantityModal()" 
							class="xv-modal-cancel-btn">
						Cancel
					</button>
					<button type="button" 
							onclick="confirmPurchase()" 
							class="flex-1 create-order-btn text-white py-2 rounded font-medium transition text-sm flex items-center justify-center gap-2">
						<i class="bi bi-check-circle"></i>
						Create Order
					</button>
				</div>
            </div>
        </div>
    </div>

    <!-- Hidden form for actual purchase -->
    <form method="POST" id="quantityPurchaseForm" style="display:none;">
        <input type="hidden" name="duration_group" id="qtyDuration">
        <input type="hidden" name="product_id_duration" id="qtyProductId">
        <input type="hidden" name="quantity" id="qtyQuantity">
        <input type="hidden" name="purchase_duration" value="1">
    </form>

    <!-- Success Modal -->
    
    <script>
        let currentQtyData = {};
        let userBalance = 0;
        const xyloGuestView = true;
	        // --- XYLO VIP: iOS/iPad scroll-lock for Buy Modal (prevents modal jump / background scroll bleed)
	        let xvBodyScrollY = 0;
	        function xvLockBodyScroll() {
	            if (document.body.classList.contains('xv-modal-open')) return;
	            xvBodyScrollY = window.scrollY || window.pageYOffset || 0;
	            document.body.style.top = `-${xvBodyScrollY}px`;
	            document.body.classList.add('xv-modal-open');
	        }
	        function xvUnlockBodyScroll() {
	            if (!document.body.classList.contains('xv-modal-open')) return;
	            document.body.classList.remove('xv-modal-open');
	            document.body.style.top = '';
	            window.scrollTo(0, xvBodyScrollY);
	        }

        // --- Modal helpers (prevents overlay click-through + "blur only" + random jumps) ---
        function xvIsShown(el){
            if(!el) return false;
            return window.getComputedStyle(el).display !== 'none';
        }
        function xvAnyModalOpen(){
            return xvIsShown(document.getElementById('variantModal')) ||
                   xvIsShown(document.getElementById('quantityModal')) ||
                   xvIsShown(document.getElementById('successModal'));
        }
        function xvSyncOverlay(){
            const overlay = document.getElementById('overlay');
            if(!overlay) return;
            if (xvAnyModalOpen()) {
                overlay.style.display = 'block';
                xvLockBodyScroll();
            } else {
                overlay.style.display = 'none';
                xvUnlockBodyScroll();
            }
        }
        function xvCloseTopModal(){
            if (xvIsShown(document.getElementById('quantityModal'))) { closeQuantityModal(); return; }
            if (xvIsShown(document.getElementById('variantModal'))) { closeVariantModal(); return; }
        }
        
        function showVariants(productId, productName, categoryLabel, deviceFullLabel, isMaintenance = false) {
            const __vm = document.getElementById('variantModal');
            if (__vm) {
                __vm.style.display = 'flex';
                // one-time micro-anim hooks (no infinite motion)
                __vm.classList.add('xv-just-opened');
                setTimeout(()=>{ __vm.classList.remove('xv-just-opened'); }, 1200);
            }
            xvSyncOverlay();
            document.getElementById('modalProductName').textContent = productName;

            // Header pills (category + full device)
            const pillsWrap = document.getElementById('modalHeaderPills');
            const catPill = document.getElementById('modalCategoryPill');
            const devPill = document.getElementById('modalDevicePill');
            if (pillsWrap && catPill && devPill) {
                const catTextEl = catPill.querySelector('span');
                if (categoryLabel) {
                    catPill.style.display = 'inline-flex';
                    if (catTextEl) catTextEl.textContent = categoryLabel;
                } else {
                    catPill.style.display = 'none';
                }
                const devTextEl = devPill.querySelector('.vip-chip-device-text');
                if (deviceFullLabel) {
                    devPill.style.display = 'inline-flex';
                    devPill.title = deviceFullLabel;
                    if (devTextEl) devTextEl.textContent = deviceFullLabel;
                } else {
                    devPill.style.display = 'none';
                }
                pillsWrap.style.display = (categoryLabel || deviceFullLabel) ? 'inline-flex' : 'none';
            }


            // Visible loading state so modal never looks empty
            const holder = document.getElementById('variantContent');
            if (holder) {
                holder.innerHTML = `
                    <div class="glass border border-white/10 rounded p-3 text-center text-gray-300 text-sm">
                        <i class="bi bi-arrow-repeat mr-2"></i>Loading…
                    </div>
                `;
            }
            
            // Load variants via AJAX
            fetch(`/user/get_variants.php?product_id=${productId}&category=${encodeURIComponent(categoryLabel || '')}&maintenance=${isMaintenance ? '1' : '0'}`)
                .then(response => response.text())
                .then(html => {
                    const out = (html || '').trim();
                    if (!out) {
                        document.getElementById('variantContent').innerHTML = `
                            <div class="text-center py-6 text-gray-400">
                                <i class="bi bi-exclamation-triangle text-2xl mb-2"></i>
                                <p class="text-sm mb-0">No content returned. Please refresh and try again.</p>
                            </div>
                        `;
                        return;
                    }
                    document.getElementById('variantContent').innerHTML = out;
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('variantContent').innerHTML = `
                        <div class="text-center py-6 text-gray-400">
                            <i class="bi bi-exclamation-triangle text-2xl mb-2"></i>
                            <p class="text-sm mb-0">Failed to load variants</p>
                        </div>
                    `;
                });
        }
        
        function closeVariantModal() {
            document.getElementById('variantModal').style.display = 'none';
            xvSyncOverlay();
        }

        // Full Details toggle (stable on iPad/tablet; scrolls only inside the modal)
        function xvToggleFullDetails(btn) {
            try {
                const wrap = btn.closest('.xv-details-wrap');
                if (!wrap) return;
                const box = wrap.querySelector('.xv-details-box');
                if (!box) return;

                const modal = document.getElementById('variantModal');
                const sc = modal ? modal.querySelector('.xv-modal-scroll') : null;
                const prev = sc ? sc.scrollTop : 0;

                const isOpen = box.style.display === 'block';
                box.style.display = isOpen ? 'none' : 'block';
                box.setAttribute('aria-hidden', isOpen ? 'true' : 'false');

                const label = btn.querySelector('[data-label]');
                if (label) label.textContent = isOpen ? 'Show full details' : 'Hide details';

                // Rotate chevron if present
                const chev = btn.querySelector('.bi-chevron-down, .bi-chevron-up');
                if (chev) {
                    chev.classList.remove('bi-chevron-up', 'bi-chevron-down');
                    chev.classList.add(isOpen ? 'bi-chevron-down' : 'bi-chevron-up');
                }

                // Keep centered modal stable: restore scrollTop, then ensure the box is visible by scrolling INSIDE sc only.
                requestAnimationFrame(() => {
                    if (!sc) return;
                    sc.scrollTop = prev;
                    if (!isOpen) {
                        const pad = 16;
                        const boxTop = box.offsetTop;
                        const boxBottom = boxTop + box.offsetHeight;

                        const viewTop = sc.scrollTop;
                        const viewBottom = sc.scrollTop + sc.clientHeight;

                        if (boxBottom > viewBottom - pad) {
                            sc.scrollTop = boxBottom - sc.clientHeight + pad;
                        } else if (boxTop < viewTop + pad) {
                            sc.scrollTop = Math.max(0, boxTop - pad);
                        }
                    }
                });
            } catch (e) {
                // no-op: do not break modal
            }
        }

        
        function selectVariant(duration, productId, productName, availableQty, price) {
            document.getElementById('variantModal').style.display = 'none';
            
            currentQtyData = { duration, productId, productName, availableQty, price };
            
            document.getElementById('qtyProductName').textContent = productName;
            document.getElementById('qtyVariantName').textContent = duration;
            document.getElementById('qtyPricePerKey').textContent = formatCurrency(price);
            document.getElementById('quantityInput').value = 1;
            document.getElementById('quantityInput').max = Math.max(parseInt(availableQty || 0, 10), 99);
            updateTotalAmount();
            
            document.getElementById('quantityModal').style.display = 'block';
            xvSyncOverlay();
        }
        
        function closeQuantityModal() {
            document.getElementById('quantityModal').style.display = 'none';
            xvSyncOverlay();
        }
        
        function formatCurrency(amount) {
            const num = Number(amount || 0);
            const safe = Number.isFinite(num) ? num : 0;
            return '✦ ' + safe.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' XC';
        }
        
        function updateTotalAmount() {
            const quantity = parseInt(document.getElementById('quantityInput').value) || 1;
            const total = quantity * currentQtyData.price;
            document.getElementById('qtyTotalAmount').textContent = formatCurrency(total);
            
            // Update balance after purchase
            const balanceAfter = userBalance - total;
            document.getElementById('balanceAfter').textContent = formatCurrency(Math.max(balanceAfter, 0));
        }
        
        function changeQuantity(delta) {
            const input = document.getElementById('quantityInput');
            const current = parseInt(input.value) || 1;
            const newValue = current + delta;
            const max = parseInt(input.max) || 1;
            
            if (newValue >= 1 && newValue <= max) {
                input.value = newValue;
                updateTotalAmount();
            }
        }
        
	        function confirmPurchase() {
            if (typeof xyloGuestView !== 'undefined' && xyloGuestView) {
                if (window.xyloShowGuestAuthToast) window.xyloShowGuestAuthToast('create an order');
                else alert('Please login or register to create an order.');
                return;
            }
            const quantity = parseInt(document.getElementById('quantityInput').value) || 1;
            const total = quantity * currentQtyData.price;
            
            if (total > userBalance) {
	                showInsufficientBalanceToast();
                return;
            }
            
            document.getElementById('qtyDuration').value = currentQtyData.duration;
            document.getElementById('qtyProductId').value = currentQtyData.productId;
            document.getElementById('qtyQuantity').value = quantity;
            
            document.getElementById('quantityPurchaseForm').submit();
        }

	        function showInsufficientBalanceToast(){
            showInlineToast({
                message: 'Your balance is not enough to complete this order.',
                detail: 'Add funds to your account, then try creating the order again.',
                actionLabel: 'Go to Deposit',
                actionHref: '/user/deposit.php'
            });
        }

        function showInlineToast(options){
            const root = document.body || document.documentElement;
            if (!root) return;

            const config = (typeof options === 'string') ? { message: options } : (options || {});
            const message = config.message || 'Action required.';
            const detail = config.detail || '';
            const actionLabel = config.actionLabel || '';
            const actionHref = config.actionHref || '';

            let host = document.getElementById('xvRuntimeToastHost');
            if (!host) {
                host = document.createElement('div');
                host.id = 'xvRuntimeToastHost';
                host.className = 'fixed inset-x-0 bottom-4 z-[2147483647] flex justify-center px-4 pointer-events-none';
                root.appendChild(host);
            }

            const toast = document.createElement('div');
            toast.className = 'pointer-events-auto w-full max-w-md overflow-hidden rounded-2xl border border-rose-300/35 bg-slate-950/95 text-white shadow-2xl backdrop-blur-xl';
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(14px) scale(.985)';
            toast.innerHTML = `
                <div class="flex items-start gap-3 px-4 py-3.5">
                    <div class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-rose-500/18 text-rose-300 ring-1 ring-rose-300/20">
                        <i class="bi bi-wallet2 text-base"></i>
                    </div>
                    <div class="min-w-0 flex-1">
                        <div class="text-[11px] uppercase tracking-[0.22em] text-rose-200/80">Insufficient balance</div>
                        <div class="xv-toast-message mt-1 text-sm font-semibold leading-snug text-white"></div>
                        <div class="xv-toast-detail mt-1 text-xs leading-snug text-white/65"></div>
                        <div class="xv-toast-actions mt-3 flex flex-wrap items-center gap-2">
                            <a class="xv-toast-action inline-flex items-center justify-center gap-2 rounded-xl bg-emerald-500/90 px-3.5 py-2 text-xs font-extrabold text-white shadow-lg shadow-emerald-950/30 ring-1 ring-white/15 transition hover:bg-emerald-400" href="#">
                                <i class="bi bi-plus-circle"></i>
                                <span></span>
                            </a>
                            <button type="button" class="xv-toast-dismiss inline-flex items-center justify-center rounded-xl bg-white/8 px-3 py-2 text-xs font-bold text-white/70 transition hover:bg-white/14 hover:text-white">
                                Later
                            </button>
                        </div>
                    </div>
                    <button type="button" class="xv-toast-close ml-1 inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white/8 text-white/70 transition hover:bg-white/14 hover:text-white" aria-label="Close toast">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            `;

            const messageNode = toast.querySelector('.xv-toast-message');
            if (messageNode) messageNode.textContent = message;

            const detailNode = toast.querySelector('.xv-toast-detail');
            if (detailNode) {
                detailNode.textContent = detail;
                if (!detail) detailNode.style.display = 'none';
            }

            const actionLink = toast.querySelector('.xv-toast-action');
            if (actionLink) {
                const labelNode = actionLink.querySelector('span');
                if (labelNode) labelNode.textContent = actionLabel || 'Continue';
                if (actionHref) {
                    actionLink.href = actionHref;
                } else {
                    actionLink.style.display = 'none';
                }
            }

            let toastTimer = null;
            const removeToast = () => {
                if (toastTimer) window.clearTimeout(toastTimer);
                toast.style.opacity = '0';
                toast.style.transform = 'translateY(12px) scale(.985)';
                setTimeout(() => toast.remove(), 220);
            };

            const closeBtn = toast.querySelector('.xv-toast-close');
            const dismissBtn = toast.querySelector('.xv-toast-dismiss');
            if (closeBtn) closeBtn.addEventListener('click', removeToast);
            if (dismissBtn) dismissBtn.addEventListener('click', removeToast);

            host.innerHTML = '';
            host.appendChild(toast);
            requestAnimationFrame(() => {
                toast.style.transition = 'opacity .22s ease, transform .22s ease';
                toast.style.opacity = '1';
                toast.style.transform = 'translateY(0) scale(1)';
            });
            toastTimer = window.setTimeout(removeToast, 6200);
        }

        function showBalanceAlert(){
	            const el = document.getElementById('balanceAlert');
	            if(!el) return;
	            el.style.display = 'flex';
	            el.setAttribute('aria-hidden','false');
	        }
	        function hideBalanceAlert(){
	            const el = document.getElementById('balanceAlert');
	            if(!el) return;
	            el.style.display = 'none';
	            el.setAttribute('aria-hidden','true');
	        }
        
        // Close modals with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeVariantModal();
                closeQuantityModal();
                            }
        });
        
        // Prevent clicks inside modal from closing it
        document.querySelectorAll('.variant-modal').forEach(modal => {
            modal.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });
        
        // Add click animation to product items
        document.querySelectorAll('.product-item').forEach(item => {
            item.addEventListener('click', function(e) {
                if (!e.target.closest('button')) {
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                }
            });
        });

        // Smart multi-field quick search + device pills
        (function(){
            const input = document.getElementById('productSearchInput');
            const clearBtn = document.getElementById('productSearchClear');
            const gameSelect = document.getElementById('xvGameSelect');
            const gameDropdownBtn = document.getElementById('xvGameDropdownBtn');
            const gameDropdownMenu = document.getElementById('xvGameDropdownMenu');
            const gameDropdownLabel = document.getElementById('xvGameDropdownLabel');
            const gameDropdownChevron = document.getElementById('xvGameDropdownChevron');
            const gameOptions = Array.from(document.querySelectorAll('.xv-game-option'));
            const deviceBtns = Array.from(document.querySelectorAll('[data-xv-device-filter]'));
            if (!input) return;
            const cards = Array.from(document.querySelectorAll('.vip-product-card[data-search]'));
            if (cards.length === 0) return;

            const ensureEmpty = () => {
                let el = document.getElementById('xvSearchEmpty');
                if (el) return el;
                el = document.createElement('div');
                el.id = 'xvSearchEmpty';
                el.className = 'text-center py-8 text-sm text-gray-400 hidden';
                el.innerHTML = '<i class="bi bi-search mr-2"></i>No matches.';
                const grid = cards[0].closest('.grid') || cards[0].parentElement;
                if (grid && grid.parentElement) grid.parentElement.appendChild(el);
                return el;
            };

            const emptyEl = ensureEmpty();
            let t;
            let selectedDevice = "all";

            const syncDeviceUi = () => {
                deviceBtns.forEach(btn => {
                    const key = (btn.getAttribute('data-xv-device-filter') || 'all').toLowerCase();
                    const active = key === selectedDevice;
                    btn.setAttribute('aria-pressed', active ? 'true' : 'false');
                    btn.classList.toggle('bg-purple-500/80', active);
                    btn.classList.toggle('text-white', active);
                    btn.classList.toggle('border-purple-300/40', active);
                    btn.classList.toggle('shadow-[0_0_18px_rgba(168,85,247,0.22)]', active);
                    btn.classList.toggle('bg-white/5', !active);
                    btn.classList.toggle('text-gray-300', !active);
                });
            };

            const syncUrl = () => {
                const url = new URL(window.location.href);
                if (selectedDevice && selectedDevice !== 'all') url.searchParams.set('device', selectedDevice);
                else url.searchParams.delete('device');
                window.history.replaceState({}, '', url.toString());
            };

            const apply = () => {
                const q = (input.value || '').toLowerCase().trim();
                let visible = 0;
                cards.forEach(card => {
                    const hay = (card.getAttribute('data-search') || '').toLowerCase();
                    const family = (card.getAttribute('data-device-family') || '').toLowerCase();
                    const matchQ = (!q || hay.includes(q));
                    const matchDevice = (selectedDevice === 'all' || family === selectedDevice);
                    const show = matchQ && matchDevice;
                    card.style.display = show ? '' : 'none';
                    if (show) visible++;
                });
                if (clearBtn) clearBtn.style.display = q ? 'inline-flex' : 'none';
                if (emptyEl) emptyEl.classList.toggle('hidden', visible !== 0);
            };

            const schedule = () => {
                clearTimeout(t);
                t = setTimeout(apply, 120);
            };

            input.addEventListener('input', schedule);
            if (clearBtn) {
                clearBtn.addEventListener('click', () => {
                    input.value = '';
                    input.focus();
                    apply();
                });
            }
            const applyGameSelect = (value, label, badge) => {
                if (!gameSelect) return;
                gameSelect.value = value || 'all';
                if (gameDropdownLabel && label) gameDropdownLabel.textContent = label;
                const img = gameDropdownBtn ? gameDropdownBtn.querySelector('img') : null;
                if (img && badge) img.src = badge;
                const url = new URL(window.location.href);
                const nextValue = (gameSelect.value || 'all');
                if (nextValue === 'all') url.searchParams.set('category', 'all');
                else url.searchParams.set('category', nextValue);
                window.location.href = url.toString();
            };

            if (gameDropdownBtn && gameDropdownMenu) {
                const closeGameMenu = () => {
                    gameDropdownMenu.classList.add('hidden');
                    if (gameDropdownChevron) gameDropdownChevron.classList.remove('rotate-180');
                };
                const openGameMenu = () => {
                    gameDropdownMenu.classList.remove('hidden');
                    if (gameDropdownChevron) gameDropdownChevron.classList.add('rotate-180');
                };
                gameDropdownBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    if (gameDropdownMenu.classList.contains('hidden')) openGameMenu();
                    else closeGameMenu();
                });
                gameOptions.forEach(opt => {
                    opt.addEventListener('click', () => {
                        applyGameSelect(opt.getAttribute('data-value') || 'all', opt.getAttribute('data-label') || 'All Games', opt.getAttribute('data-badge') || '/assets/img/pill-badges/games.svg');
                    });
                });
                document.addEventListener('click', (e) => {
                    if (!e.target.closest('#xvGameSelectorWrap')) closeGameMenu();
                });
            }
            deviceBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    selectedDevice = (btn.getAttribute('data-xv-device-filter') || 'all').toLowerCase();
                    syncDeviceUi();
                    syncUrl();
                    apply();
                });
            });

            syncDeviceUi();
            apply();
        })();
        (function(){
            const sortSelect = document.getElementById('productSortSelect');
            if (!sortSelect) return;
            sortSelect.addEventListener('change', function(){
                const url = new URL(window.location.href);
                const value = sortSelect.value || 'default';
                if (value === 'default') url.searchParams.delete('sort');
                else url.searchParams.set('sort', value);
                url.searchParams.delete('page');
                window.location.href = url.toString();
            });
        })();

    

        // Categories: enable horizontal auto-scroll (wheel + drag) and keep active category in view
        (function(){
            function initCategoryAutoScroll(wrap){
                if(!wrap) return;
                // Wheel -> horizontal scroll
                wrap.addEventListener('wheel', function(e){
                    if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
                        wrap.scrollLeft += e.deltaY;
                        e.preventDefault();
                    }
                }, { passive: false });

                // Drag to scroll (desktop)
                let down = false, startX = 0, startLeft = 0;
                wrap.addEventListener('mousedown', function(e){
                    down = true;
                    startX = e.pageX;
                    startLeft = wrap.scrollLeft;
                });
                wrap.addEventListener('mouseleave', function(){ down = false; });
                window.addEventListener('mouseup', function(){ down = false; });
                wrap.addEventListener('mousemove', function(e){
                    if(!down) return;
                    e.preventDefault();
                    wrap.scrollLeft = startLeft - (e.pageX - startX);
                });

                // Ensure active pill stays visible
                const active = wrap.querySelector('.category-pill-active');
                if(active && active.scrollIntoView){
                    try { active.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' }); } catch(e){}
                }
            }
            document.querySelectorAll('.category-filter').forEach(initCategoryAutoScroll);
        

        // If user came from Home Featured/Available Games (or a legacy redirect),
        // auto-scroll to the product cards area.
        (function(){
            try{
                const params = new URLSearchParams(window.location.search);
                if(params.get('from') === 'featured' || params.get('browse_category') || params.get('category')){
                    const el = document.getElementById('products');
                    if(el) setTimeout(() => el.scrollIntoView({ behavior: 'smooth', block: 'start' }), 150);
                }
            }catch(e){}
        })();
})();
    </script>

<script>
(function(){
  document.addEventListener('DOMContentLoaded', function(){
      });
})();
</script>


<script>
(function(){
  function qs(sel, root){ return (root||document).querySelector(sel); }
  function qsa(sel, root){ return Array.prototype.slice.call((root||document).querySelectorAll(sel)); }

  function setLoading(isLoading){
    var wrap = qs('#xvProductsGridWrap');
    if (!wrap) return;
    if (isLoading) wrap.classList.add('opacity-60','pointer-events-none');
    else wrap.classList.remove('opacity-60','pointer-events-none');
  }

  async function fetchAndSwap(url, push){
    try{
      setLoading(true);
      const res = await fetch(url, {headers:{'X-Requested-With':'XMLHttpRequest'}});
      const html = await res.text();
      const doc = new DOMParser().parseFromString(html, 'text/html');
      const newGrid = qs('#xvProductsGridWrap', doc);
      const newPag = qs('#xvPaginationWrap', doc);
      const curGrid = qs('#xvProductsGridWrap');
      const curPag = qs('#xvPaginationWrap');
      if (newGrid && curGrid) curGrid.innerHTML = newGrid.innerHTML;
      if (newPag && curPag) curPag.innerHTML = newPag.innerHTML;
      if (push) {
        history.pushState({xv:true}, '', url);
      }
      // scroll to top of grid (mobile friendly)
      const top = curGrid ? curGrid.getBoundingClientRect().top + window.scrollY - 12 : 0;
      window.scrollTo({top: Math.max(0, top), behavior: 'smooth'});
    } catch(e){
      // fallback: hard navigate
      window.location.href = url;
    } finally {
      setLoading(false);
    }
  }

  function bind(){
    const pag = qs('#xvPaginationWrap');
    if (!pag) return;
    pag.addEventListener('click', function(ev){
      const a = ev.target.closest('a');
      if (!a) return;
      const href = a.getAttribute('href') || '';
      if (!href || href.startsWith('#') || href.startsWith('javascript:')) return;
      // only intercept same-page pagination
      if (href.indexOf('page=') === -1) return;
      ev.preventDefault();
      fetchAndSwap(href, true);
    });



    // Category clicks (no reload) + 'More' modal
    const catRow = qs('#xvCategoryRow');
    if (catRow) {
      catRow.addEventListener('click', function(ev){
        const a = ev.target.closest('a.xv-cat-link');
        if (!a) return;
        const href = a.getAttribute('href') || '';
        if (!href) return;
        ev.preventDefault();
        qsa('#xvCategoryRow a.xv-cat-link').forEach(el => el.classList.remove('xv-cat-active','category-pill-active','bg-blue-500','text-white','border-blue-400/50'));
        a.classList.add('xv-cat-active','category-pill-active','bg-blue-500','text-white','border-blue-400/50');
        fetchAndSwap(href, true);
      });

      const moreBtn = qs('#xvCategoryMoreBtn');
      const modal = qs('#xvCategoryModal');
      const closeBtn = qs('#xvCategoryModalClose');
      const search = qs('#xvCategoryModalSearch');
      const list = qs('#xvCategoryModalList');

      let modalCats = null; // cached array
      let searchTimer = null;

      function buildHref(catName){
        const base = new URL(window.location.href);
        const searchQ = list ? (list.getAttribute('data-search-q') || '') : '';
        base.searchParams.delete('page');
        if (searchQ) base.searchParams.set('search', searchQ);
        else base.searchParams.delete('search');
        base.searchParams.set('category', catName);
        return base.pathname + '?' + base.searchParams.toString();
      }

      function renderModalCats(filterQ){
        if (!list) return;
        const q = (filterQ || '').trim().toLowerCase();
        const items = [];

        // All option
        if (!q || 'all'.indexOf(q) !== -1) {
          items.push(`
            <a href="${buildHref('all')}" class="xv-cat-link xv-cat-modal-item glass rounded-lg p-2 border border-white/10 hover:border-white/25 transition inline-flex items-center gap-2" data-cat-name="all">
              <div class="w-9 h-9 rounded-lg bg-purple-500/20 border border-purple-400/20 flex items-center justify-center flex-shrink-0">
                <i class="bi bi-stars text-purple-200"></i>
              </div>
              <div class="min-w-0">
                <div class="text-xs font-bold text-white truncate">All</div>
                <div class="text-[10px] text-gray-400 truncate">Show everything</div>
              </div>
            </a>
          `);
        }

        (modalCats || []).forEach(c => {
          const name = (c && c.name) ? String(c.name) : '';
          const hay = (name || '').toLowerCase();
          if (!name) return;
          if (q && hay.indexOf(q) === -1) return;
          const logo = c.logo ? String(c.logo) : '';
          const icon = logo
            ? `<img src="${logo.replace(/"/g,'&quot;')}" alt="" class="w-full h-full object-cover" loading="lazy">`
            : `<i class="bi bi-collection text-gray-300"></i>`;
          items.push(`
            <a href="${buildHref(name)}" class="xv-cat-link xv-cat-modal-item glass rounded-lg p-2 border border-white/10 hover:border-white/25 transition inline-flex items-center gap-2" data-cat-name="${hay.replace(/"/g,'&quot;')}">
              <div class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center overflow-hidden flex-shrink-0">${icon}</div>
              <div class="min-w-0">
                <div class="text-xs font-bold text-white truncate">${name.replace(/</g,'&lt;').replace(/>/g,'&gt;')}</div>
                <div class="text-[10px] text-gray-400 truncate">Tap to filter</div>
              </div>
            </a>
          `);
        });

        list.innerHTML = items.length ? items.join('') : `
          <div class="glass rounded-lg p-3 border border-white/10 col-span-2 sm:col-span-3 text-center text-xs text-gray-300">No categories found.</div>
        `;
      }

      async function ensureModalCatsLoaded(){
        if (!list) return;
        if (list.getAttribute('data-loaded') === '1') return;
        try {
          const res = await fetch('../ajax/categories.php', { credentials: 'same-origin' });
          const data = await res.json();
          modalCats = (data && data.ok && Array.isArray(data.categories)) ? data.categories : [];
        } catch (e) {
          modalCats = [];
        }
        list.setAttribute('data-loaded','1');
        renderModalCats('');
      }

      async function openModal(){
        if (!modal) return;
        modal.style.display = 'flex';
        await ensureModalCatsLoaded();
        if (search){
          search.value = '';
          search.focus();
        }
      }
      function closeModal(){ if(modal){ modal.style.display='none'; } }

      if (moreBtn) moreBtn.addEventListener('click', openModal);
      if (closeBtn) closeBtn.addEventListener('click', closeModal);
      if (modal) modal.addEventListener('click', function(ev){ if(ev.target === modal) closeModal(); });
      document.addEventListener('keydown', function(ev){ if(ev.key === 'Escape') closeModal(); });

      if (search && list) {
        search.addEventListener('input', function(){
          const v = search.value || '';
          if (searchTimer) clearTimeout(searchTimer);
          searchTimer = setTimeout(function(){ renderModalCats(v); }, 180);
        });
      }

      if (list) {
        list.addEventListener('click', function(ev){
          const a = ev.target.closest('a.xv-cat-link');
          if (!a) return;
          const href = a.getAttribute('href') || '';
          if (!href) return;
          ev.preventDefault();
          closeModal();
          const url = new URL(href, window.location.href);
          const cat = url.searchParams.get('category') || 'all';
          const rowLinks = qsa('#xvCategoryRow a.xv-cat-link');
          rowLinks.forEach(el => {
            const u = new URL(el.getAttribute('href') || window.location.href, window.location.href);
            const c = u.searchParams.get('category') || 'all';
            if (c === cat) el.classList.add('xv-cat-active','category-pill-active','bg-blue-500','text-white','border-blue-400/50');
            else el.classList.remove('xv-cat-active','category-pill-active','bg-blue-500','text-white','border-blue-400/50');
          });
          fetchAndSwap(href, true);
        });
      }
    }
    window.addEventListener('popstate', function(){
      // back/forward should restore page content
      fetchAndSwap(window.location.href, false);
    });
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', bind);
  else bind();

  // Ensure press feedback is visible on mobile before opening the buy modal.
  // Some mobile browsers don't reliably paint :active before the onclick handler runs.
  window.xvBuyOpen = function(btn, id, name, category, platform, isMaintenance){
    try {
      if (btn) btn.classList.add('is-pressed');
      // Tiny delay so the pressed style can render.
      setTimeout(function(){
        if (btn) btn.classList.remove('is-pressed');
        if (typeof showVariants === 'function') showVariants(id, name, category, platform, !!isMaintenance);
      }, 90);
    } catch (e) {
      if (typeof showVariants === 'function') showVariants(id, name, category, platform, !!isMaintenance);
    }
    return false;
  };
})();
</script>

<div class="max-w-7xl mx-auto px-3 sm:px-4 lg:px-6 mt-4">
  <p class="text-[11px] text-center text-white/55">By creating an order, you agree to our <a href="/refund" class="text-blue-300 hover:text-blue-200 underline underline-offset-2">Refund Policy</a> and <a href="/delivery" class="text-blue-300 hover:text-blue-200 underline underline-offset-2">Delivery Policy</a>.</p>
</div>

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

  <script src="/assets/js/xv-modal-gallery.js?v=08" defer></script>
  <script src="/assets/js/xv-global-activity-popups.js" defer></script>
  <script src="/assets/js/xylo-lazy-media-30.js" defer></script>
</body>
</html>