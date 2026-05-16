

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xylo Hacks | Promos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/assets/css/vip-purple.css?v=1773418345">
      <script>window.XV_UI_VERSION=1773418345;</script>
  <script src="/assets/js/ui-defaults.js?v=1773418345"></script>
  <style>
    body{background:#070a12;color:#e5e7eb;}
    .promo-shell{position:relative;overflow:hidden;border:1px solid rgba(168,85,247,.16);background:rgba(10,14,28,.58);box-shadow:0 24px 72px rgba(0,0,0,.62),0 0 0 1px rgba(168,85,247,.18) inset,0 0 44px rgba(168,85,247,.14)}
    .promo-shell::before{content:"";position:absolute;inset:-2px;background:radial-gradient(760px 320px at 14% 8%, rgba(168,85,247,.32), transparent 60%),radial-gradient(640px 280px at 88% 20%, rgba(99,102,241,.22), transparent 62%),radial-gradient(900px 460px at 48% 120%, rgba(168,85,247,.16), transparent 64%);pointer-events:none;opacity:.9}
    .promo-shell>*{position:relative;z-index:1}
    .promo-kicker{display:inline-flex;align-items:center;gap:8px;border-radius:999px;border:1px solid rgba(216,180,254,.28);background:rgba(168,85,247,.12);color:#f3e8ff;padding:7px 11px;font-size:12px;font-weight:900;box-shadow:0 8px 22px rgba(88,28,135,.22)}
    .promo-cta{display:inline-flex;align-items:center;justify-content:center;gap:8px;border-radius:14px;padding:12px 16px;font-weight:900;text-decoration:none;background:linear-gradient(135deg,#a855f7,#7c3aed);border:1px solid rgba(255,255,255,.16);color:#fff;box-shadow:0 14px 34px rgba(126,34,206,.34),0 0 0 1px rgba(255,255,255,.08) inset;transition:transform .16s ease,filter .16s ease}
    .promo-cta:hover{transform:translateY(-1px);filter:brightness(1.06);color:#fff}
    .promo-grid{display:grid;grid-template-columns:repeat(1,minmax(0,1fr));gap:16px;}
    @media (min-width:640px){.promo-grid{grid-template-columns:repeat(2,minmax(0,1fr));}}
    @media (min-width:1024px){.promo-grid{grid-template-columns:repeat(3,minmax(0,1fr));}}
    @media (min-width:1280px){.promo-grid{grid-template-columns:repeat(4,minmax(0,1fr));}}
    .promo-product-card{--vip-accent:#a855f7;--vip-accent-rgb:168,85,247;position:relative;background:linear-gradient(180deg,rgba(120,40,255,.22) 0%,rgba(70,15,190,.18) 55%,rgba(40,8,120,.22) 100%),radial-gradient(120% 80% at 30% 10%,rgba(210,140,255,.18),transparent 60%);border:1px solid rgba(var(--vip-accent-rgb),.34);border-radius:18px;overflow:hidden;box-shadow:0 14px 34px rgba(0,0,0,.40),0 0 0 1px rgba(255,255,255,.06) inset,0 0 22px rgba(var(--vip-accent-rgb),.18);display:flex;flex-direction:column;}
    .promo-product-card::after{content:"";position:absolute;left:10px;right:10px;top:10px;height:46px;background:linear-gradient(180deg,rgba(255,255,255,.16),rgba(255,255,255,0));border-radius:14px;opacity:.55;pointer-events:none;}
    .promo-product-media{position:relative;aspect-ratio:1/1;overflow:hidden;}
    .promo-product-media::after{content:"";position:absolute;inset:10px;border-radius:14px;border:1px solid rgba(var(--vip-accent-rgb),.18);box-shadow:0 0 0 1px rgba(255,255,255,.08) inset,0 0 18px rgba(var(--vip-accent-rgb),.16);pointer-events:none;}
    .promo-product-img{width:100%;height:100%;object-fit:cover;transform:scale(1.01);transition:transform .35s ease;}
    @media (hover:hover){.promo-product-card:hover .promo-product-img{transform:scale(1.06);}}
    .promo-gradient{position:absolute;inset:0;background:radial-gradient(120% 80% at 50% 20%,rgba(59,130,246,.22),transparent 55%),linear-gradient(to top,rgba(0,0,0,.56),transparent 45%);pointer-events:none;}
    .promo-badge{position:absolute;top:12px;left:12px;z-index:3;display:inline-flex;align-items:center;gap:6px;padding:6px 10px;border-radius:12px 12px 12px 4px;font-size:10px;font-weight:900;letter-spacing:.45px;text-transform:uppercase;color:rgba(255,250,235,.99);background:linear-gradient(135deg,rgba(245,158,11,.98),rgba(217,119,6,.92));border:1px solid rgba(255,237,213,.34);box-shadow:0 12px 26px rgba(146,64,14,.26);}
    .promo-slot-pill{position:absolute;right:10px;top:10px;z-index:3;display:inline-flex;align-items:center;gap:6px;padding:6px 10px;border-radius:999px;font-size:11px;font-weight:900;color:#e5e7eb;background:rgba(17,24,39,.70);border:1px solid rgba(255,255,255,.14);backdrop-filter:blur(10px);}
    .promo-product-body{padding:10px 10px 12px;background:linear-gradient(180deg,rgba(120,50,255,.32) 0%,rgba(88,24,210,.22) 45%,rgba(55,12,165,.28) 100%);border-top:1px solid rgba(210,140,255,.18);display:flex;flex-direction:column;flex:1;position:relative;overflow:hidden;}
    .promo-product-info{background:linear-gradient(135deg,rgba(108,43,255,.38),rgba(198,82,255,.22));border:1px solid rgba(210,140,255,.26);box-shadow:0 8px 22px rgba(140,0,255,.18);border-radius:16px;padding:10px;margin-bottom:10px;position:relative;overflow:hidden;}
    .promo-title{font-size:15px;font-weight:900;line-height:1.15;color:#fff;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;min-height:34px;}
    .promo-meta{display:flex;flex-wrap:wrap;gap:6px;margin-top:8px;}
    .promo-chip{display:inline-flex;align-items:center;gap:5px;border:1px solid rgba(255,255,255,.12);background:rgba(255,255,255,.06);color:rgba(255,255,255,.78);border-radius:999px;padding:4px 8px;font-size:11px;font-weight:800;}
    .promo-price-row{display:flex;align-items:baseline;gap:8px;flex-wrap:wrap;margin-top:auto;}
    .promo-regular{text-decoration:line-through;color:rgba(229,231,235,.48);font-weight:800;font-size:13px;}
    .promo-price{display:inline-flex;align-items:center;justify-content:center;padding:7px 12px;border-radius:999px;font-weight:950;color:rgba(3,18,12,.95);background:linear-gradient(135deg,rgba(34,197,94,.98),rgba(16,185,129,.98));border:1px solid rgba(255,255,255,.18);box-shadow:0 10px 24px rgba(0,0,0,.25),0 0 14px rgba(34,197,94,.35);}
    .promo-save{font-size:11px;font-weight:900;color:#bbf7d0;}
    .promo-submit{margin-top:10px;width:100%;display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:10px 12px;border-radius:999px;font-weight:900;font-size:13px;color:#fff;background:linear-gradient(135deg,rgba(168,85,247,.92),rgba(99,102,241,.78));border:1px solid rgba(210,140,255,.32);box-shadow:0 10px 24px rgba(0,0,0,.22),0 0 14px rgba(168,85,247,.25);}
    body.promos-reseller .promo-shell{border-color:rgba(34,197,94,.18);box-shadow:0 24px 72px rgba(0,0,0,.62),0 0 0 1px rgba(34,197,94,.18) inset,0 0 44px rgba(16,185,129,.13)}
    body.promos-reseller .promo-shell::before{background:radial-gradient(760px 320px at 14% 8%,rgba(34,197,94,.24),transparent 60%),radial-gradient(640px 280px at 88% 20%,rgba(16,185,129,.16),transparent 62%),radial-gradient(900px 460px at 48% 120%,rgba(34,197,94,.12),transparent 64%)}
    body.promos-reseller .promo-cta,body.promos-reseller .promo-submit{background:linear-gradient(135deg,rgba(34,197,94,.95),rgba(5,150,105,.88));box-shadow:0 14px 34px rgba(16,185,129,.24),0 0 0 1px rgba(255,255,255,.08) inset}
    @media (prefers-reduced-motion: reduce){.promo-cta,.promo-product-img{transition:none}.promo-cta:hover{transform:none}}

    .promo-card-actions{display:grid;grid-template-columns:1fr;gap:8px;margin-top:10px;}
    .promo-view-btn{width:100%;display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:10px 12px;border-radius:999px;font-weight:900;font-size:13px;color:#f5e8ff;background:rgba(255,255,255,.06);border:1px solid rgba(216,180,254,.24);box-shadow:0 8px 20px rgba(0,0,0,.18);transition:transform .14s ease,background .14s ease,border-color .14s ease;}
    .promo-view-btn:hover{transform:translateY(-1px);background:rgba(168,85,247,.13);border-color:rgba(216,180,254,.42);}
    .promo-modal-backdrop{position:fixed;inset:0;z-index:5000;display:none;align-items:center;justify-content:center;padding:14px;background:rgba(0,0,0,.76);backdrop-filter:blur(8px);}
    .promo-modal-backdrop.is-open{display:flex;}
    .promo-modal-card{width:min(760px,100%);max-height:min(88vh,860px);display:flex;flex-direction:column;border-radius:22px;overflow:hidden;background:linear-gradient(180deg,rgba(20,12,38,.98),rgba(8,10,20,.98));border:1px solid rgba(216,180,254,.20);box-shadow:0 28px 90px rgba(0,0,0,.68),0 0 34px rgba(168,85,247,.18);}
    .promo-modal-head{display:flex;align-items:flex-start;justify-content:space-between;gap:12px;padding:14px 16px;border-bottom:1px solid rgba(255,255,255,.10);background:rgba(255,255,255,.04);}
    .promo-modal-title{font-size:16px;font-weight:950;color:#fff;line-height:1.2;}
    .promo-modal-subtitle{margin-top:4px;font-size:12px;color:rgba(255,255,255,.58);}
    .promo-modal-close{width:38px;height:38px;border-radius:14px;display:inline-flex;align-items:center;justify-content:center;background:rgba(239,68,68,.16);border:1px solid rgba(248,113,113,.25);color:#fecaca;font-weight:900;}
    .promo-modal-scroll{padding:14px 16px 16px;overflow-y:auto;}
    .promo-modal-loading,.promo-modal-error{border:1px solid rgba(255,255,255,.10);background:rgba(255,255,255,.05);border-radius:16px;padding:18px;text-align:center;color:rgba(255,255,255,.74);font-weight:800;}
    .promo-modal-error{border-color:rgba(248,113,113,.25);background:rgba(239,68,68,.10);color:#fecaca;}
    .xv-modal-image-frame{position:relative;aspect-ratio:16/9;border-radius:16px;overflow:hidden;border:1px solid rgba(255,255,255,.10);background:#090814;box-shadow:0 0 0 1px rgba(255,255,255,.04) inset,0 14px 34px rgba(8,6,20,.35);}
    .xv-modal-gallery-frame [data-xv-gallery-main],.xv-modal-gallery-slide{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;}
    .xv-modal-image-wrap{margin-bottom:14px;}
    .xv-gallery-spinner{display:none;position:absolute;inset:0;align-items:center;justify-content:center;background:rgba(0,0,0,.18);}
    .xv-gallery-spinner::after{content:"";width:28px;height:28px;border-radius:999px;border:3px solid rgba(255,255,255,.22);border-top-color:#e9d5ff;animation:xvPromoSpin .7s linear infinite;}
    [data-xv-modal-gallery].is-loading .xv-gallery-spinner{display:flex;}
    @keyframes xvPromoSpin{to{transform:rotate(360deg)}}
    .xv-gallery-arrow{position:absolute!important;top:50%!important;transform:translateY(-50%)!important;z-index:40!important;width:42px!important;height:42px!important;border-radius:999px!important;border:1px solid rgba(216,180,254,.72)!important;background:linear-gradient(135deg,#c084fc 0%,#9333ea 48%,#6d28d9 100%)!important;color:#fff!important;font-size:30px!important;font-weight:900!important;line-height:1!important;display:flex!important;align-items:center!important;justify-content:center!important;backdrop-filter:blur(12px)!important;cursor:pointer!important;box-shadow:0 14px 34px rgba(126,34,206,.52),0 0 0 1px rgba(255,255,255,.16) inset,0 0 18px rgba(168,85,247,.42)!important;}
    .xv-gallery-prev{left:10px!important}.xv-gallery-next{right:10px!important}
    .xv-gallery-dots{position:absolute!important;left:50%!important;bottom:10px!important;transform:translateX(-50%)!important;z-index:40!important;display:flex!important;gap:8px!important;align-items:center!important;justify-content:center!important;max-width:58%!important;overflow:hidden!important;padding:6px 8px!important;border-radius:999px!important;background:rgba(46,16,101,.76)!important;border:1px solid rgba(216,180,254,.34)!important;box-shadow:0 12px 28px rgba(88,28,135,.34),0 0 0 1px rgba(255,255,255,.07) inset!important;backdrop-filter:blur(12px)!important;}
    .xv-gallery-dot{width:9px!important;height:9px!important;min-width:9px!important;border-radius:999px!important;border:1px solid rgba(216,180,254,.50)!important;background:rgba(216,180,254,.46)!important;padding:0!important;margin:0!important;cursor:pointer!important;opacity:1!important;}
    .xv-gallery-dot.is-active,.xv-gallery-dot.xv-gallery-dot-active,.xv-gallery-dot[data-xv-active="1"]{width:24px!important;min-width:24px!important;background:linear-gradient(90deg,#e9d5ff 0%,#c084fc 40%,#9333ea 100%)!important;border-color:rgba(250,245,255,.92)!important;box-shadow:0 0 16px rgba(168,85,247,.82),0 0 0 1px rgba(255,255,255,.16) inset!important;}
    .xv-gallery-count{position:absolute;right:12px;bottom:10px;z-index:41;padding:5px 9px;border-radius:999px;background:rgba(46,16,101,.78)!important;border:1px solid rgba(216,180,254,.40)!important;color:#f5e8ff!important;font-size:11px;font-weight:900;}
    .promo-modal-pills{display:flex;flex-wrap:wrap;gap:7px;margin-bottom:12px;}
    .promo-modal-pricebox{display:flex;align-items:center;justify-content:space-between;gap:12px;border:1px solid rgba(255,255,255,.10);background:rgba(255,255,255,.05);border-radius:18px;padding:12px;margin-bottom:14px;}
    .promo-modal-price-row{display:flex;align-items:baseline;gap:8px;flex-wrap:wrap;}
    .promo-modal-claim-form{margin:0;min-width:180px;}
    .promo-modal-section{border-top:1px solid rgba(255,255,255,.10);padding-top:14px;margin-top:14px;}
    .promo-modal-section-title{display:flex;align-items:center;gap:8px;color:#fff;font-weight:950;font-size:14px;margin-bottom:9px;}
    .promo-link-stack{display:grid;gap:8px;}
    .promo-link-row{display:flex;align-items:center;justify-content:space-between;gap:12px;border:1px solid rgba(255,255,255,.10);background:rgba(255,255,255,.05);border-radius:14px;padding:11px 12px;text-decoration:none;color:#fff;}
    .promo-link-row span{display:flex;align-items:center;gap:9px;font-size:13px;font-weight:800;}
    .promo-link-row strong{font-size:12px;color:#c4b5fd;}
    .promo-detail-copy{white-space:normal;color:rgba(255,255,255,.76);font-size:13px;line-height:1.65;display:grid;gap:10px;}
    .promo-detail-blocks{display:grid;gap:9px;margin-top:10px;}
    .promo-detail-block{border:1px solid rgba(255,255,255,.10);background:rgba(255,255,255,.05);border-radius:14px;padding:11px 12px;color:rgba(255,255,255,.76);font-size:13px;line-height:1.55;}
    .promo-detail-block strong{display:block;color:#fff;margin-bottom:4px;}

    /* Upgrade 28: bottom cancel button inside promo view modal */
    .promo-modal-bottom-actions{position:sticky;bottom:-16px;margin:16px -2px -2px;padding:12px 0 2px;background:linear-gradient(180deg,rgba(15,10,34,0),rgba(15,10,34,.94) 36%,rgba(15,10,34,.98) 100%);z-index:5;}
    .promo-modal-cancel-bottom{width:100%;min-height:46px;border-radius:15px;display:inline-flex;align-items:center;justify-content:center;gap:10px;font-size:13px;font-weight:950;color:#f5e8ff;background:linear-gradient(135deg,rgba(255,255,255,.12),rgba(255,255,255,.06));border:1px solid rgba(233,213,255,.18);box-shadow:0 12px 26px rgba(9,3,28,.24),0 0 0 1px rgba(255,255,255,.04) inset;backdrop-filter:blur(12px);transition:transform .16s ease,border-color .16s ease,background .16s ease;}
    .promo-modal-cancel-bottom:hover{transform:translateY(-1px);border-color:rgba(233,213,255,.30);background:linear-gradient(135deg,rgba(255,255,255,.16),rgba(255,255,255,.08));}
    @media (max-width:640px){.promo-modal-backdrop{align-items:stretch;padding:0}.promo-modal-card{width:100%;max-height:100vh;border-radius:0}.promo-modal-pricebox{align-items:stretch;flex-direction:column}.promo-modal-claim-form{min-width:0;width:100%}}
  
    /* Upgrade 22: stronger purple glassmorphism + better CTAs */
    .promo-product-card{background:linear-gradient(180deg,rgba(51,18,104,.78) 0%,rgba(28,14,68,.82) 58%,rgba(17,10,42,.88) 100%),radial-gradient(120% 90% at 22% 0%,rgba(216,180,254,.22),transparent 55%)!important;border:1px solid rgba(216,180,254,.28)!important;box-shadow:0 18px 48px rgba(10,4,30,.58),0 0 0 1px rgba(255,255,255,.06) inset,0 0 30px rgba(168,85,247,.20)!important;backdrop-filter:blur(12px);}
    .promo-product-media::after{border-color:rgba(233,213,255,.20)!important;box-shadow:0 0 0 1px rgba(255,255,255,.09) inset,0 0 20px rgba(168,85,247,.18)!important;}
    .promo-product-body{background:linear-gradient(180deg,rgba(108,51,195,.26) 0%,rgba(64,31,133,.28) 52%,rgba(20,12,48,.36) 100%)!important;}
    .promo-product-info{background:linear-gradient(135deg,rgba(255,255,255,.10),rgba(255,255,255,.04))!important;border:1px solid rgba(233,213,255,.18)!important;backdrop-filter:blur(12px)!important;box-shadow:0 12px 26px rgba(10,4,30,.24)!important;}
    .promo-chip{background:rgba(255,255,255,.08)!important;border-color:rgba(233,213,255,.14)!important;color:#f5ecff!important;backdrop-filter:blur(8px);}
    .promo-view-btn,.promo-submit{display:inline-flex;align-items:center;justify-content:center;gap:10px;min-height:46px;padding:12px 14px;border-radius:15px;font-size:13px;font-weight:900;letter-spacing:.01em;text-decoration:none;transition:transform .16s ease,box-shadow .16s ease,filter .16s ease,border-color .16s ease,background .16s ease;}
    .promo-view-btn{background:linear-gradient(135deg,rgba(255,255,255,.14),rgba(255,255,255,.06))!important;color:#f7ecff!important;border:1px solid rgba(233,213,255,.24)!important;box-shadow:0 12px 26px rgba(9,3,28,.24),0 0 0 1px rgba(255,255,255,.04) inset!important;backdrop-filter:blur(12px)!important;}
    .promo-submit{background:linear-gradient(135deg,#c084fc 0%,#9333ea 54%,#6d28d9 100%)!important;color:#fff!important;border:1px solid rgba(250,245,255,.22)!important;box-shadow:0 16px 34px rgba(107,33,168,.36),0 0 0 1px rgba(255,255,255,.06) inset,0 0 22px rgba(168,85,247,.22)!important;}
    .promo-view-btn:hover,.promo-submit:hover{transform:translateY(-1px);filter:brightness(1.04);}
    .promo-view-btn:hover{box-shadow:0 16px 34px rgba(9,3,28,.30),0 0 0 1px rgba(255,255,255,.06) inset,0 0 20px rgba(192,132,252,.18)!important;border-color:rgba(233,213,255,.34)!important;background:linear-gradient(135deg,rgba(255,255,255,.18),rgba(255,255,255,.08))!important;}
    .promo-submit:hover{box-shadow:0 18px 38px rgba(107,33,168,.42),0 0 0 1px rgba(255,255,255,.08) inset,0 0 24px rgba(168,85,247,.26)!important;}
    .promo-card-actions{grid-template-columns:minmax(0,1fr);gap:10px;}
    @media (min-width:640px){.promo-card-actions{grid-template-columns:1fr 1fr;}}
    body.promos-reseller .promo-shell,body.promos-reseller .promo-cta,body.promos-reseller .promo-submit{border-color:inherit;box-shadow:inherit;background:unset;}
    body.promos-reseller .promo-shell{border:1px solid rgba(168,85,247,.16)!important;box-shadow:0 24px 72px rgba(0,0,0,.62),0 0 0 1px rgba(168,85,247,.18) inset,0 0 44px rgba(168,85,247,.14)!important;}
    body.promos-reseller .promo-shell::before{background:radial-gradient(760px 320px at 14% 8%, rgba(168,85,247,.32), transparent 60%),radial-gradient(640px 280px at 88% 20%, rgba(99,102,241,.22), transparent 62%),radial-gradient(900px 460px at 48% 120%, rgba(168,85,247,.16), transparent 64%)!important;}
    body.promos-reseller .promo-submit{background:linear-gradient(135deg,#c084fc 0%,#9333ea 54%,#6d28d9 100%)!important;box-shadow:0 16px 34px rgba(107,33,168,.36),0 0 0 1px rgba(255,255,255,.06) inset,0 0 22px rgba(168,85,247,.22)!important;}
    .promo-modal-backdrop{background:radial-gradient(circle at top,rgba(109,40,217,.20),transparent 35%),rgba(4,6,14,.76)!important;backdrop-filter:blur(14px)!important;}
    .promo-modal-card{position:relative;background:linear-gradient(180deg,rgba(37,17,72,.88) 0%,rgba(21,12,44,.90) 52%,rgba(10,8,24,.92) 100%)!important;border:1px solid rgba(233,213,255,.18)!important;box-shadow:0 30px 90px rgba(6,2,18,.72),0 0 0 1px rgba(255,255,255,.04) inset,0 0 42px rgba(168,85,247,.24)!important;backdrop-filter:blur(18px)!important;}
    .promo-modal-card::before{content:"";position:absolute;inset:0;background:radial-gradient(120% 80% at 0% 0%,rgba(216,180,254,.18),transparent 38%),radial-gradient(120% 90% at 100% 0%,rgba(129,140,248,.10),transparent 34%);pointer-events:none;}
    .promo-modal-head,.promo-modal-pricebox,.promo-modal-loading,.promo-modal-error,.promo-link-row,.promo-detail-block,.promo-details-toggle{position:relative;background:linear-gradient(135deg,rgba(255,255,255,.10),rgba(255,255,255,.05))!important;border:1px solid rgba(233,213,255,.14)!important;backdrop-filter:blur(16px)!important;box-shadow:0 12px 24px rgba(9,3,28,.22)!important;}
    .promo-modal-head{border-width:0 0 1px 0!important;border-radius:0!important;background:linear-gradient(135deg,rgba(255,255,255,.10),rgba(255,255,255,.04))!important;}
    .promo-modal-close{background:linear-gradient(135deg,rgba(239,68,68,.18),rgba(248,113,113,.14))!important;border:1px solid rgba(248,113,113,.20)!important;}
    .promo-modal-pills .promo-chip{background:rgba(255,255,255,.08)!important;}
    .promo-link-stack{gap:10px;}
    .promo-link-row{padding:12px 14px;border-radius:16px;gap:14px;}
    .promo-link-row:hover{transform:translateY(-1px);border-color:rgba(233,213,255,.24)!important;box-shadow:0 16px 34px rgba(9,3,28,.28),0 0 0 1px rgba(255,255,255,.04) inset,0 0 18px rgba(168,85,247,.14)!important;color:#fff;}
    .promo-link-main{display:flex;align-items:center;gap:12px;min-width:0;flex:1;}
    .promo-link-icon{width:40px;height:40px;display:inline-flex;align-items:center;justify-content:center;border-radius:14px;background:linear-gradient(135deg,rgba(192,132,252,.26),rgba(147,51,234,.18));border:1px solid rgba(233,213,255,.18);color:#f5d9ff;font-size:18px;flex-shrink:0;box-shadow:0 10px 20px rgba(107,33,168,.20);}
    .promo-link-copy{min-width:0;display:grid;gap:3px;}
    .promo-link-copy strong{font-size:13px;color:#fff;line-height:1.2;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
    .promo-link-copy small{font-size:11px;color:rgba(255,255,255,.56);font-weight:700;}
    .promo-link-cta{display:inline-flex;align-items:center;gap:8px;padding:10px 12px;border-radius:12px;background:linear-gradient(135deg,#c084fc 0%,#9333ea 60%,#7c3aed 100%);color:#fff;font-size:12px;font-weight:900;box-shadow:0 12px 24px rgba(107,33,168,.26);white-space:nowrap;}
    .promo-link-cta i{font-size:12px;}
    .promo-details-toggle{overflow:hidden;border-radius:18px;margin-top:2px;}
    .promo-details-toggle > summary{list-style:none;display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 15px;cursor:pointer;color:#fff;font-weight:900;}
    .promo-details-toggle > summary::-webkit-details-marker{display:none;}
    .promo-details-summary-main{display:flex;align-items:center;gap:10px;min-width:0;font-size:14px;}
    .promo-details-summary-main i{width:34px;height:34px;display:inline-flex;align-items:center;justify-content:center;border-radius:12px;background:linear-gradient(135deg,rgba(192,132,252,.24),rgba(124,58,237,.18));border:1px solid rgba(233,213,255,.18);color:#f5d9ff;}
    .promo-details-summary-side{display:inline-flex;align-items:center;gap:9px;color:#d8b4fe;font-size:11px;font-weight:900;text-transform:uppercase;letter-spacing:.05em;}
    .promo-details-summary-side i{transition:transform .16s ease;}
    .promo-details-toggle[open] .promo-details-summary-side i{transform:rotate(180deg);}
    .promo-details-body{padding:0 15px 15px;}
    .promo-detail-copy,.promo-detail-block{background:rgba(255,255,255,.04)!important;}
    .promo-modal-section{border-top:0;padding-top:0;margin-top:14px;}
    .promo-modal-section + .promo-modal-section{margin-top:12px;}

  
    .promo-chip-visual{padding-left:5px!important;gap:7px!important;}
    .promo-chip-img{width:22px;height:22px;aspect-ratio:1/1;object-fit:cover;border-radius:8px;background:rgba(255,255,255,.10);border:1px solid rgba(255,255,255,.14);box-shadow:0 6px 14px rgba(0,0,0,.18);flex-shrink:0;}
    .promo-modal-legitimacy{display:inline-flex;align-items:center;justify-content:center;gap:9px;border-radius:15px;padding:12px 14px;font-size:13px;font-weight:900;color:#f7ecff;text-decoration:none;background:linear-gradient(135deg,rgba(255,255,255,.14),rgba(255,255,255,.06));border:1px solid rgba(233,213,255,.22);box-shadow:0 12px 26px rgba(9,3,28,.24),0 0 0 1px rgba(255,255,255,.04) inset;backdrop-filter:blur(12px);transition:transform .16s ease,filter .16s ease,border-color .16s ease;}
    .promo-modal-legitimacy:hover{transform:translateY(-1px);filter:brightness(1.04);border-color:rgba(233,213,255,.34);color:#fff;}
    .promo-modal-action-stack{display:grid;grid-template-columns:1fr;gap:9px;min-width:190px;}
    @media (max-width:640px){.promo-modal-action-stack{min-width:0;width:100%;}.promo-modal-legitimacy{width:100%;}}

  
    /* Upgrade 24: promo confirm purchase modal */
    .promo-confirm-backdrop{position:fixed;inset:0;z-index:6200;display:none;align-items:center;justify-content:center;padding:14px;background:radial-gradient(circle at top,rgba(109,40,217,.20),transparent 34%),rgba(3,5,13,.78);backdrop-filter:blur(14px);}
    .promo-confirm-backdrop.is-open{display:flex;}
    .promo-confirm-card{width:min(380px,100%);border-radius:22px;overflow:hidden;background:linear-gradient(180deg,rgba(37,17,72,.92),rgba(10,8,24,.95));border:1px solid rgba(233,213,255,.18);box-shadow:0 28px 86px rgba(0,0,0,.70),0 0 0 1px rgba(255,255,255,.05) inset,0 0 36px rgba(168,85,247,.22);backdrop-filter:blur(18px);}
    .promo-confirm-head{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:14px 16px;border-bottom:1px solid rgba(255,255,255,.10);background:linear-gradient(135deg,rgba(255,255,255,.10),rgba(255,255,255,.04));}
    .promo-confirm-title{display:flex;align-items:center;gap:9px;color:#fff;font-weight:950;font-size:14px;}
    .promo-confirm-title i{color:#d8b4fe;}
    .promo-confirm-close{width:38px;height:38px;display:inline-flex;align-items:center;justify-content:center;border-radius:14px;color:#fecaca;background:rgba(239,68,68,.16);border:1px solid rgba(248,113,113,.22);}
    .promo-confirm-body{padding:16px;background:rgba(7,8,20,.34);}
    .promo-confirm-info{border:1px solid rgba(233,213,255,.16);background:linear-gradient(135deg,rgba(255,255,255,.10),rgba(255,255,255,.05));box-shadow:0 12px 26px rgba(9,3,28,.22);border-radius:16px;padding:13px;text-align:center;}
    .promo-confirm-product{font-size:14px;font-weight:950;color:#fff;line-height:1.25;}
    .promo-confirm-line{margin-top:6px;color:rgba(255,255,255,.70);font-size:12px;}
    .promo-confirm-line strong{color:#d8b4fe;}
    .promo-confirm-field{margin-top:14px;}
    .promo-confirm-label{display:block;margin-bottom:7px;color:rgba(255,255,255,.58);font-size:12px;font-weight:800;}
    .promo-confirm-qty{display:flex;align-items:center;justify-content:space-between;gap:9px;}
    .promo-confirm-qty-btn{width:42px;height:42px;border-radius:14px;display:inline-flex;align-items:center;justify-content:center;color:#fff;background:rgba(255,255,255,.08);border:1px solid rgba(233,213,255,.16);font-size:20px;font-weight:950;}
    .promo-confirm-qty-input{height:42px;min-width:0;flex:1;border-radius:14px;border:1px solid rgba(233,213,255,.16);background:rgba(255,255,255,.06);color:#fff;text-align:center;font-weight:900;outline:none;}
    .promo-confirm-total{margin-top:14px;border-radius:16px;border:1px solid rgba(34,197,94,.28);background:linear-gradient(135deg,rgba(34,197,94,.13),rgba(16,185,129,.07));padding:13px;display:flex;align-items:center;justify-content:space-between;gap:12px;}
    .promo-confirm-total span{color:rgba(255,255,255,.70);font-size:13px;font-weight:800;}
    .promo-confirm-total strong{color:#86efac;font-size:17px;font-weight:950;}
    .promo-confirm-balance{margin-top:10px;text-align:center;color:rgba(255,255,255,.58);font-size:12px;}
    .promo-confirm-balance strong{color:#86efac;}
    .promo-confirm-policy{margin-top:13px;text-align:center;color:rgba(255,255,255,.52);font-size:11px;line-height:1.45;}
    .promo-confirm-policy a{color:#d8b4fe;text-decoration:underline;text-underline-offset:2px;}
    .promo-confirm-actions{display:flex;gap:10px;margin-top:14px;}
    .promo-confirm-cancel,.promo-confirm-create{flex:1;min-height:42px;border-radius:14px;display:inline-flex;align-items:center;justify-content:center;gap:8px;font-size:13px;font-weight:900;text-decoration:none;}
    .promo-confirm-cancel{color:#f5e8ff;background:rgba(255,255,255,.07);border:1px solid rgba(233,213,255,.14);}
    .promo-confirm-create{color:#fff;background:linear-gradient(135deg,#c084fc,#9333ea 58%,#6d28d9);border:1px solid rgba(250,245,255,.20);box-shadow:0 14px 30px rgba(107,33,168,.32);}
    @media (max-width:640px){.promo-confirm-backdrop{align-items:flex-end;padding:10px}.promo-confirm-card{border-radius:22px 22px 18px 18px}.promo-confirm-actions{flex-direction:column}.promo-confirm-cancel,.promo-confirm-create{width:100%;}}

  
    /* Upgrade 29: promo modal scroll hint */
    .promo-scroll-hint{display:flex;align-items:center;justify-content:center;gap:8px;margin:0 0 12px;padding:9px 12px;border-radius:999px;color:#f5e8ff;font-size:12px;font-weight:900;background:linear-gradient(135deg,rgba(168,85,247,.16),rgba(255,255,255,.06));border:1px solid rgba(233,213,255,.18);box-shadow:0 10px 24px rgba(9,3,28,.20),0 0 0 1px rgba(255,255,255,.04) inset;backdrop-filter:blur(12px);}
    .promo-scroll-hint i{color:#d8b4fe;animation:promoHintBounce 1.35s ease-in-out infinite;}
    @keyframes promoHintBounce{0%,100%{transform:translateY(-1px);opacity:.72}50%{transform:translateY(2px);opacity:1}}
    @media (prefers-reduced-motion: reduce){.promo-scroll-hint i{animation:none;}}

  
    /* Upgrade 30: sold-out promo visibility */
    .promo-product-card.is-sold-out{opacity:.78;filter:saturate(.82);}
    .promo-product-card.is-sold-out .promo-product-img{filter:grayscale(.18) brightness(.72);}
    .promo-soldout-badge{position:absolute;left:50%;top:50%;z-index:4;transform:translate(-50%,-50%) rotate(-8deg);display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:10px 16px;border-radius:999px;background:linear-gradient(135deg,rgba(239,68,68,.96),rgba(190,18,60,.92));border:1px solid rgba(254,202,202,.50);color:#fff;font-size:13px;font-weight:950;text-transform:uppercase;letter-spacing:.08em;box-shadow:0 18px 40px rgba(127,29,29,.40),0 0 0 1px rgba(255,255,255,.12) inset;}
    .promo-soldout-note{margin-top:10px;display:flex;align-items:flex-start;gap:8px;border:1px solid rgba(248,113,113,.22);background:rgba(239,68,68,.10);color:#fecaca;border-radius:14px;padding:9px 10px;font-size:12px;font-weight:800;line-height:1.35;}
    .promo-submit.is-disabled,.promo-submit:disabled{cursor:not-allowed!important;opacity:.72!important;filter:saturate(.7)!important;background:linear-gradient(135deg,rgba(100,116,139,.70),rgba(71,85,105,.72))!important;border-color:rgba(226,232,240,.12)!important;box-shadow:0 10px 22px rgba(0,0,0,.24),0 0 0 1px rgba(255,255,255,.04) inset!important;transform:none!important;}
    .promo-modal-soldout{display:flex;align-items:flex-start;gap:10px;border:1px solid rgba(248,113,113,.24);background:linear-gradient(135deg,rgba(239,68,68,.14),rgba(127,29,29,.10));color:#fecaca;border-radius:18px;padding:13px 14px;margin-bottom:14px;box-shadow:0 12px 26px rgba(127,29,29,.16);}
    .promo-modal-soldout strong{display:block;color:#fff;font-size:13px;margin-bottom:2px;}
    .promo-modal-soldout span{font-size:12px;color:#fecaca;line-height:1.45;}

  </style>
</head>
<body class="">
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


<main class="px-4 md:px-8 py-8 md:py-10">
  <section class="max-w-7xl mx-auto promo-shell rounded-3xl p-5 sm:p-6 md:p-8">
    <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-5">
      <div>
        <div class="promo-kicker"><i class="bi bi-fire"></i><span>Promos Hub</span></div>
        <h1 class="mt-4 text-4xl sm:text-5xl font-extrabold tracking-tight text-white">Discounted products and limited offers</h1>
        <p class="mt-4 text-white/70 max-w-2xl text-lg">Claim active product promos with real discounted prices. Promo slots and schedules are controlled by admin.</p>
      </div>
              <a href="#promoProductsGrid" class="promo-cta shrink-0" data-promo-scroll="1"><i class="bi bi-bag-check"></i><span>Browse Products</span></a>
          </div>

          <div id="promoProductsGrid" class="promo-grid mt-7">
                            <article class="promo-product-card ">
            <div class="promo-product-media">
              <img src="/assets/uploads/products/p_1776770214_8e769292.webp" class="promo-product-img" alt="Xylo PBS" loading="lazy" decoding="async" fetchpriority="low">
              <div class="promo-gradient"></div>
              <span class="promo-badge"><i class="bi bi-stars"></i>Grab your slot now!</span>
                              <span class="promo-slot-pill"><i class="bi bi-lightning-charge-fill"></i>4 left</span>
                                        </div>
            <div class="promo-product-body">
              <div class="promo-product-info">
                <h2 class="promo-title">Xylo PBS</h2>
                <div class="promo-meta">
                                    <span class="promo-chip"><i class="bi bi-box-seam"></i>4 slots left</span>                  <span class="promo-chip promo-chip-visual"><img src="/assets/uploads/category-logos/cat_5_20260313_180100_ba44_badge.webp" alt="" class="promo-chip-img" loading="lazy" decoding="async"><span>Bloodstrike</span></span>                  <span class="promo-chip promo-chip-visual" title="Android (Non-Root/Root)"><img src="/assets/img/pill-badges/android.svg" alt="" class="promo-chip-img" loading="lazy" decoding="async"><span>Android</span></span>                </div>
              </div>
              <div class="promo-price-row">
                <span class="promo-regular">✦ 1,000 XC</span>
                <span class="promo-price">✦ 250 XC</span>
                <span class="promo-save">Save ✦ 750 XC</span>              </div>
                            <div class="promo-card-actions">
                <button type="button" class="promo-view-btn" data-promo-view="1" data-product-id="83" data-variant-id="301" data-title="Xylo PBS" data-subtitle="Bloodstrike • Android (Non-Root/Root)"><i class="bi bi-eye-fill"></i><span>View details</span></button>
                                  <a href="/login.php" class="promo-submit text-center no-underline"><i class="bi bi-box-arrow-in-right"></i><span>Login to claim</span></a>
                              </div>
            </div>
          </article>
              </div>
      </section>
</main>


<div class="promo-modal-backdrop" id="promoViewModal" aria-hidden="true">
  <div class="promo-modal-card" role="dialog" aria-modal="true" aria-labelledby="promoViewTitle">
    <div class="promo-modal-head">
      <div>
        <div class="promo-modal-title" id="promoViewTitle">Promo details</div>
        <div class="promo-modal-subtitle" id="promoViewSubtitle">View product details, promo pricing, and links.</div>
      </div>
      <button type="button" class="promo-modal-close" id="promoViewClose" aria-label="Close promo details"><i class="bi bi-x-lg"></i></button>
    </div>
    <div class="promo-modal-scroll" id="promoViewContent">
      <div class="promo-modal-loading"><i class="bi bi-arrow-repeat"></i> Loading promo details…</div>
    </div>
  </div>
</div>


<div class="promo-confirm-backdrop" id="promoConfirmModal" aria-hidden="true">
  <div class="promo-confirm-card" role="dialog" aria-modal="true" aria-labelledby="promoConfirmTitle">
    <div class="promo-confirm-head">
      <div class="promo-confirm-title" id="promoConfirmTitle"><i class="bi bi-cart-check-fill"></i><span>Confirm Purchase</span></div>
      <button type="button" class="promo-confirm-close" id="promoConfirmClose" aria-label="Close confirm purchase"><i class="bi bi-x-lg"></i></button>
    </div>
    <div class="promo-confirm-body">
      <div class="promo-confirm-info">
        <div class="promo-confirm-product" id="promoConfirmProduct">Promo product</div>
        <div class="promo-confirm-line">Variant: <strong id="promoConfirmVariant">Promo offer</strong></div>
        <div class="promo-confirm-line">Price per item: <strong id="promoConfirmPrice">✦ 0.00 XC</strong></div>
      </div>
      <div class="promo-confirm-field">
        <label class="promo-confirm-label" for="promoConfirmQty">Quantity:</label>
        <div class="promo-confirm-qty">
          <button type="button" class="promo-confirm-qty-btn" data-promo-qty="-1" aria-label="Decrease quantity">−</button>
          <input type="number" class="promo-confirm-qty-input" id="promoConfirmQty" min="1" value="1">
          <button type="button" class="promo-confirm-qty-btn" data-promo-qty="1" aria-label="Increase quantity">+</button>
        </div>
      </div>
      <div class="promo-confirm-total">
        <span>Total Price:</span>
        <strong id="promoConfirmTotal">✦ 0.00 XC</strong>
      </div>
      <div class="promo-confirm-balance">Balance after purchase: <strong id="promoConfirmBalanceAfter">✦ 0.00 XC</strong></div>
      <div class="promo-confirm-policy">By creating an order, you agree to our <a href="/terms">Terms</a>, <a href="/refund">Refund Policy</a>, and <a href="/delivery">Delivery Policy</a>.</div>
      <div class="promo-confirm-actions">
        <button type="button" class="promo-confirm-cancel" id="promoConfirmCancel">Cancel</button>
        <button type="button" class="promo-confirm-create" id="promoConfirmCreate"><i class="bi bi-check-circle"></i>Create Order</button>
      </div>
    </div>
  </div>
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


<script>
window.XV_PROMO_USER_BALANCE = 0;
(function(){
  const modal = document.getElementById('promoConfirmModal');
  if (!modal) return;
  const productEl = document.getElementById('promoConfirmProduct');
  const variantEl = document.getElementById('promoConfirmVariant');
  const priceEl = document.getElementById('promoConfirmPrice');
  const qtyEl = document.getElementById('promoConfirmQty');
  const totalEl = document.getElementById('promoConfirmTotal');
  const balanceAfterEl = document.getElementById('promoConfirmBalanceAfter');
  const createBtn = document.getElementById('promoConfirmCreate');
  const closeBtn = document.getElementById('promoConfirmClose');
  const cancelBtn = document.getElementById('promoConfirmCancel');
  let pendingForm = null;
  let unitPrice = 0;
  let maxQty = 99;
  let lastFocus = null;
  function money(amount){
    const num = Number(amount || 0);
    const safe = Number.isFinite(num) ? num : 0;
    return '✦ ' + safe.toLocaleString(undefined, {minimumFractionDigits:2, maximumFractionDigits:2}) + ' XC';
  }
  function clampQty(value){
    let qty = parseInt(value, 10);
    if (!Number.isFinite(qty) || qty < 1) qty = 1;
    if (maxQty > 0) qty = Math.min(qty, maxQty);
    return qty;
  }
  function updateConfirm(){
    const qty = clampQty(qtyEl ? qtyEl.value : 1);
    if (qtyEl) qtyEl.value = qty;
    const total = qty * unitPrice;
    const balance = Number(window.XV_PROMO_USER_BALANCE || 0);
    if (totalEl) totalEl.textContent = money(total);
    if (balanceAfterEl) balanceAfterEl.textContent = money(Math.max(balance - total, 0));
  }
  function openConfirm(form, submitter){
    pendingForm = form;
    lastFocus = submitter || document.activeElement;
    unitPrice = Number(form.getAttribute('data-promo-price') || '0') || 0;
    maxQty = parseInt(form.getAttribute('data-promo-max') || '99', 10) || 99;
    if (productEl) productEl.textContent = form.getAttribute('data-promo-product') || 'Promo product';
    if (variantEl) variantEl.textContent = form.getAttribute('data-promo-duration') || 'Promo offer';
    if (priceEl) priceEl.textContent = money(unitPrice);
    if (qtyEl) { qtyEl.max = String(maxQty); qtyEl.value = '1'; }
    updateConfirm();
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    // Do not auto-focus the quantity input. On mobile this opens the keyboard immediately.
    // Focus a non-text control instead so accessibility is preserved without triggering the keyboard.
    setTimeout(() => {
      try {
        const safeFocusTarget = closeBtn || cancelBtn || createBtn;
        if (safeFocusTarget && safeFocusTarget.focus) safeFocusTarget.focus({ preventScroll: true });
      } catch (_) {}
    }, 30);
  }
  function closeConfirm(){
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    if (!document.getElementById('promoViewModal')?.classList.contains('is-open')) document.body.style.overflow = '';
    if (lastFocus && lastFocus.focus) lastFocus.focus();
  }
  document.addEventListener('submit', function(e){
    const form = e.target.closest && e.target.closest('.promo-claim-form');
    if (!form) return;
    if (form.getAttribute('data-promo-confirmed') === '1') return;
    e.preventDefault();
    openConfirm(form, e.submitter || null);
  }, true);
  document.addEventListener('click', function(e){
    const qtyBtn = e.target.closest('[data-promo-qty]');
    if (qtyBtn) {
      e.preventDefault();
      const delta = parseInt(qtyBtn.getAttribute('data-promo-qty'), 10) || 0;
      if (qtyEl) qtyEl.value = String(clampQty((parseInt(qtyEl.value, 10) || 1) + delta));
      updateConfirm();
      return;
    }
    if (e.target === modal) closeConfirm();
  });
  if (qtyEl) qtyEl.addEventListener('input', updateConfirm);
  if (closeBtn) closeBtn.addEventListener('click', closeConfirm);
  if (cancelBtn) cancelBtn.addEventListener('click', closeConfirm);
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

    const closeToastBtn = toast.querySelector('.xv-toast-close');
    const dismissBtn = toast.querySelector('.xv-toast-dismiss');
    if (closeToastBtn) closeToastBtn.addEventListener('click', removeToast);
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

  if (createBtn) createBtn.addEventListener('click', function(){
    if (!pendingForm) return;
    const qty = clampQty(qtyEl ? qtyEl.value : 1);
    const total = qty * unitPrice;
    const balance = Number(window.XV_PROMO_USER_BALANCE || 0);
    if (total > balance) {
      updateConfirm();
      showInsufficientBalanceToast();
      return;
    }
    const qtyInput = pendingForm.querySelector('input[name="quantity"]');
    if (qtyInput) qtyInput.value = String(qty);
    pendingForm.setAttribute('data-promo-confirmed', '1');
    pendingForm.submit();
  });
  document.addEventListener('keydown', function(e){ if (e.key === 'Escape' && modal.classList.contains('is-open')) closeConfirm(); });
})();
</script>

<script>
(function(){
  document.addEventListener('click', function(e){
    const scrollBtn = e.target.closest('[data-promo-scroll="1"]');
    if (!scrollBtn) return;
    const target = document.getElementById('promoProductsGrid');
    if (!target) return;
    e.preventDefault();
    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
})();
(function(){
  const modal = document.getElementById('promoViewModal');
  const content = document.getElementById('promoViewContent');
  const title = document.getElementById('promoViewTitle');
  const subtitle = document.getElementById('promoViewSubtitle');
  const closeBtn = document.getElementById('promoViewClose');
  if (!modal || !content) return;
  let lastFocus = null;
  function openModal(btn){
    const productId = btn.getAttribute('data-product-id') || '';
    const variantId = btn.getAttribute('data-variant-id') || '';
    lastFocus = btn;
    if (title) title.textContent = btn.getAttribute('data-title') || 'Promo details';
    if (subtitle) subtitle.textContent = btn.getAttribute('data-subtitle') || 'View product details and active promo pricing.';
    content.innerHTML = '<div class="promo-modal-loading"><i class="bi bi-arrow-repeat"></i> Loading promo details…</div>';
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden','false');
    document.body.style.overflow = 'hidden';
    fetch('/ajax/promo_product_details.php?product_id=' + encodeURIComponent(productId) + '&variant_id=' + encodeURIComponent(variantId), { credentials:'same-origin' })
      .then(r => r.text())
      .then(html => {
        content.innerHTML = (html || '').trim() || '<div class="promo-modal-error">No details returned.</div>';
        if (window.xvModalGalleryRefresh) window.xvModalGalleryRefresh();
      })
      .catch(() => { content.innerHTML = '<div class="promo-modal-error">Failed to load promo details. Please refresh and try again.</div>'; });
  }
  function closeModal(){
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden','true');
    document.body.style.overflow = '';
    if (lastFocus && lastFocus.focus) lastFocus.focus();
  }
  document.addEventListener('click', function(e){
    const cancelBottom = e.target.closest('[data-promo-view-cancel="1"]');
    if (cancelBottom) { e.preventDefault(); closeModal(); return; }
    const btn = e.target.closest('[data-promo-view="1"]');
    if (btn) { e.preventDefault(); openModal(btn); return; }
    if (e.target === modal) closeModal();
  });
  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  document.addEventListener('keydown', function(e){ if (e.key === 'Escape' && modal.classList.contains('is-open')) closeModal(); });
})();
</script>

<script src="/assets/js/xv-modal-gallery.js?v=21" defer></script>
<script src="/assets/js/xv-global-activity-popups.js" defer></script>
<script src="/assets/js/xylo-lazy-media-30.js" defer></script>
</body>
</html>
