

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="/favicon.png?v=1778657662"><title>Xylo Hacks | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        darkbg: '#0d0d10',
                        panel: '#141418',
                        accent: '#1e40af', // Biru gelap
                        accent2: '#1e3a8a', // Biru lebih gelap
                        accentLight: '#3b82f6', // Untuk efek hover
                    },
                    boxShadow: {
                        glow: '0 0 15px rgba(30, 64, 175, 0.25)',
                    },
                }
            }
        }
        
        // Prevent zoom on mobile
        document.addEventListener('DOMContentLoaded', function() {
            document.addEventListener('touchstart', function(event) {
                if (event.touches.length > 1) {
                    event.preventDefault();
                }
            }, { passive: false });
            
            document.addEventListener('gesturestart', function(event) {
                event.preventDefault();
            });
        });
    </script>
    <style>
        /* Disable zoom on mobile */
        html {
            touch-action: manipulation;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%;
        }
        
        body {
            overflow-x: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
        }
        
        input, button, textarea {
            font-size: 16px !important; /* Prevents zoom on iOS */
        }
        
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in {
            animation: fadeInUp 0.6s ease-out;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        @keyframes glow {
            0%, 100% { box-shadow: 0 0 10px rgba(30, 64, 175, 0.3); }
            50% { box-shadow: 0 0 20px rgba(30, 64, 175, 0.5), 0 0 30px rgba(30, 64, 175, 0.2); }
        }
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }
        .floating-icon {
            animation: float 3s ease-in-out infinite;
        }
        .rotating-bg {
            animation: rotate 20s linear infinite;
        }
        .glow-effect {
            animation: glow 2s ease-in-out infinite;
        }
        .shimmer-bg {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.05), transparent);
            background-size: 200% 100%;
            animation: shimmer 3s infinite;
        }
        .gradient-border {
            position: relative;
            background: linear-gradient(135deg, rgba(30, 64, 175, 0.1), rgba(30, 58, 138, 0.1));
            border-radius: 16px;
            padding: 2px;
        }
        .gradient-border::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 16px;
            padding: 2px;
            background: linear-gradient(135deg, #1e40af, #1e3a8a, #1e40af);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            animation: rotate 3s linear infinite;
        }
        .particle {
            position: absolute;
            width: 6px;
            height: 6px;
            background: rgba(192, 132, 252, 0.65);
            border-radius: 50%;
            animation: float-particle 15s infinite;
            box-shadow: 0 0 22px rgba(192, 132, 252, 0.55);
            filter: blur(0.2px);
            z-index: 1;
        }
        @keyframes float-particle {
            0% {
                transform: translateY(100vh) translateX(0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) translateX(100px) rotate(360deg);
                opacity: 0;
            }
        }
        .input-focus-effect {
            transition: all 0.3s ease;
        }
        .input-focus-effect:focus {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(30, 64, 175, 0.2);
        }
        .btn-hover-effect {
            position: relative;
            overflow: hidden;
        }
        .btn-hover-effect::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        .btn-hover-effect:hover::before {
            width: 300px;
            height: 300px;
        }
        .bg-animated {
            background: linear-gradient(-45deg, #0a0a0a, #121212, #0d0d10, #0a0a0a);
            background-size: 400% 400%;
            animation: gradient-shift 15s ease infinite;
        }

        /* Galaxy starfield canvas (more noticeable, still performance-friendly) */
        .starfield {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            opacity: 0.95;
        }
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        /* Splash Screen Styles */
        #splashScreen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0a0a0a 0%, #121212 50%, #0d0d10 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease-out;
        }
        #splashScreen.fade-out {
            opacity: 0;
            pointer-events: none;
        }
        .splash-logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.22), rgba(255,255,255,0.06) 35%, rgba(0,0,0,0.08) 70%),
                        linear-gradient(135deg, rgba(168, 85, 247, 0.9), rgba(99, 102, 241, 0.85));
            display: flex;
            align-items: center;
            justify-content: center;
            animation: splash-pulse 1.6s ease-in-out infinite;
            box-shadow: 0 0 45px rgba(168, 85, 247, 0.35), 0 0 70px rgba(99, 102, 241, 0.25);
        }
        .splash-logo i {
            font-size: 3rem;
            color: white;
            text-shadow: 0 0 18px rgba(255,255,255,0.18);
        }
        @keyframes splash-pulse {
            0%, 100% { 
                transform: scale(1);
                box-shadow: 0 0 45px rgba(168, 85, 247, 0.35), 0 0 70px rgba(99, 102, 241, 0.25);
            }
            50% { 
                transform: scale(1.1);
                box-shadow: 0 0 65px rgba(168, 85, 247, 0.45), 0 0 90px rgba(99, 102, 241, 0.35);
            }
        }
        .splash-text {
            margin-top: 1.5rem;
            font-size: 1.05rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.95), rgba(99, 102, 241, 0.9));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: text-shimmer 2s ease-in-out infinite;
        }
        @keyframes text-shimmer {
            0%, 100% { opacity: 0.8; }
            50% { opacity: 1; }
        }
        .splash-loader {
            margin-top: 1.25rem;
            width: 180px;
            height: 4px;
            background: rgba(255, 255, 255, 0.06);
            border-radius: 999px;
            overflow: hidden;
            box-shadow: inset 0 0 0 1px rgba(255,255,255,0.05);
        }
        .splash-loader-bar {
            height: 100%;
            width: 40%;
            background: linear-gradient(90deg, rgba(168, 85, 247, 0.9), rgba(99, 102, 241, 0.85), rgba(168, 85, 247, 0.9));
            border-radius: 999px;
            animation: loader-indeterminate 1.2s ease-in-out infinite;
        }
        @keyframes loader-indeterminate {
            0% { transform: translateX(-120%); opacity: 0.8; }
            50% { opacity: 1; }
            100% { transform: translateX(260%); opacity: 0.8; }
        }

        /* Login page polish (glass + purple glow) */
        body.login-shell {
            background: radial-gradient(circle at 20% 15%, rgba(168,85,247,0.22), rgba(0,0,0,0) 42%),
                        radial-gradient(circle at 85% 70%, rgba(99,102,241,0.18), rgba(0,0,0,0) 45%),
                        linear-gradient(135deg, #07070a 0%, #0b0b12 45%, #07070a 100%);
        }
        body.login-shell::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            background:
                radial-gradient(circle at 50% 40%, rgba(168,85,247,0.12), rgba(0,0,0,0) 55%),
                linear-gradient(180deg, rgba(168,85,247,0.06), rgba(0,0,0,0));
            mix-blend-mode: screen;
            opacity: 1;
        }
        .login-card {
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            background: linear-gradient(180deg, rgba(22,16,40,0.62), rgba(14,12,24,0.50));
            border: 1px solid rgba(168,85,247,0.22);
            box-shadow:
                0 0 0 1px rgba(168,85,247,0.10),
                0 24px 60px rgba(0,0,0,0.55),
                0 0 80px rgba(168,85,247,0.26),
                0 0 120px rgba(99,102,241,0.18);
        }
        .login-card:hover {
            box-shadow:
                0 0 0 1px rgba(168,85,247,0.14),
                0 26px 70px rgba(0,0,0,0.60),
                0 0 95px rgba(168,85,247,0.32),
                0 0 140px rgba(99,102,241,0.22);
        }
        .login-input {
            background: linear-gradient(180deg, rgba(168,85,247,0.08), rgba(255,255,255,0.02));
            border-color: rgba(168,85,247,0.16) !important;
            box-shadow: inset 0 0 0 1px rgba(255,255,255,0.03);
        }
        .login-input:focus {
            box-shadow:
                0 0 0 1px rgba(168,85,247,0.25),
                0 0 26px rgba(168,85,247,0.20);
        }
    

/* Option A: Gradient + glow primary button (Login/Register) */
.xylo-primary-btn{
  background: linear-gradient(135deg, rgba(124,58,237,0.92), rgba(91,33,182,0.92)) !important;
  border: 1px solid rgba(186, 85, 255, 0.45) !important;
  color: rgba(255,255,255,0.95) !important;
  box-shadow: 0 10px 30px rgba(124,58,237,0.35), 0 0 0 1px rgba(186,85,255,0.12) inset !important;
  transition: transform .18s ease, box-shadow .18s ease, filter .18s ease;
}
.xylo-primary-btn:hover{
  transform: translateY(-1px);
  filter: brightness(1.05);
  box-shadow: 0 14px 38px rgba(124,58,237,0.48), 0 0 0 1px rgba(186,85,255,0.18) inset !important;
}
.xylo-primary-btn:active{
  transform: translateY(0px);
  filter: brightness(0.98);
}
.xylo-primary-btn::after{
  content:"";
  position:absolute;
  top:-60%;
  left:-30%;
  width:40%;
  height:220%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.35), transparent);
  transform: rotate(18deg) translateX(-120%);
  transition: transform .55s ease;
  pointer-events:none;
  opacity:0.75;
}
.xylo-primary-btn:hover::after{
  transform: rotate(18deg) translateX(360%);
}


/* Filled mid-purple pill link for Register/Login switch */
.xylo-auth-link{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: .35rem;
  padding: .55rem .85rem;
  border-radius: 999px;
  background: linear-gradient(135deg, rgba(124,58,237,0.78), rgba(91,33,182,0.78)) !important;
  border: 1px solid rgba(186,85,255,0.35);
  color: rgba(255,255,255,0.92) !important;
  box-shadow: 0 10px 26px rgba(124,58,237,0.28);
  text-decoration: none !important;
  transition: transform .18s ease, box-shadow .18s ease, filter .18s ease;
}
.xylo-auth-link:hover{
  transform: translateY(-1px);
  filter: brightness(1.06);
  box-shadow: 0 14px 34px rgba(124,58,237,0.42);
}
.xylo-auth-link:active{
  transform: translateY(0px);
  filter: brightness(0.98);
}
</style>
    <link rel="stylesheet" href="/assets/css/vip-purple.css?v=1773418345">

        <script>window.XV_UI_VERSION=1773418345;</script>
    <script src="/assets/js/ui-defaults.js?v=1773418345"></script>
</head>
<body class="login-shell text-gray-100 min-h-screen flex flex-col relative overflow-hidden">
    <!-- Splash Screen -->
    <div id="splashScreen">
        <div class="text-center">
            <div class="splash-logo mx-auto">
                <i class="bi bi-key-fill"></i>
            </div>
            <div class="splash-text">Powered By Xylo</div>
            <div class="splash-loader">
                <div class="splash-loader-bar"></div>
            </div>
        </div>
    </div>
    <!-- Animated Background Particles -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <canvas class="starfield" aria-hidden="true"></canvas>
        <div class="particle" style="left: 10%; animation-delay: 0s;"></div>
        <div class="particle" style="left: 20%; animation-delay: 2s;"></div>
        <div class="particle" style="left: 30%; animation-delay: 4s;"></div>
        <div class="particle" style="left: 40%; animation-delay: 1s;"></div>
        <div class="particle" style="left: 50%; animation-delay: 3s;"></div>
        <div class="particle" style="left: 60%; animation-delay: 5s;"></div>
        <div class="particle" style="left: 70%; animation-delay: 2.5s;"></div>
        <div class="particle" style="left: 80%; animation-delay: 4.5s;"></div>
        <div class="particle" style="left: 90%; animation-delay: 1.5s;"></div>
    </div>

    <!-- Rotating Gradient Orbs -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-accent/5 rounded-full blur-3xl rotating-bg opacity-30"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-accent2/5 rounded-full blur-3xl rotating-bg opacity-30" style="animation-duration: 15s; animation-direction: reverse;"></div>

    <div class="container mx-auto px-4 relative z-10 w-full flex-1 flex items-center justify-center">
        <div class="max-w-sm w-full mx-auto">
            <div class="glass login-card rounded-xl p-5 animate-fade-in relative overflow-hidden">
                <!-- Animated Border Effect -->
                <div class="absolute inset-0 rounded-xl opacity-30">
                    <div class="absolute inset-0 rounded-xl" style="background: linear-gradient(135deg, rgba(168,85,247,0.85), rgba(99,102,241,0.75), rgba(168,85,247,0.85)); background-size: 220% 220%; animation: gradient-shift 3s ease infinite;"></div>
                </div>
                
                <div class="relative z-10">
                    <div class="text-center mb-3">
                        <h3 class="text-xl font-bold text-white mb-1 bg-gradient-to-r from-accent to-accent2 bg-clip-text text-transparent">Xylo Store Official</h3>
                        <p class="text-gray-500 text-xs">Sign in to continue</p>
                    </div>
                
                                        
                    <form method="POST" autocomplete="on" class="space-y-3">
                        <div class="group">
                            <label for="username" class="block text-gray-500 text-xs mb-1 transition-colors group-focus-within:text-accentLight">
                                <i class="bi bi-person mr-1"></i>Username
                            </label>
                            <div class="relative">
                                <input type="text" 
                                       class="glass login-input border border-white/5 rounded-lg p-2.5 w-full bg-transparent text-white placeholder-gray-600 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/20 input-focus-effect pl-9 text-sm" 
                                       name="username" 
                                       id="username" 
                                       placeholder="Enter username" 
                                       required>
                                <i class="bi bi-person absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-600 group-focus-within:text-accentLight transition-colors text-xs"></i>
                            </div>
                        </div>
                        
                        <div class="group">
                            <label for="password" class="block text-gray-500 text-xs mb-1 transition-colors group-focus-within:text-accentLight">
                                <i class="bi bi-lock-fill mr-1"></i>Password
                            </label>
                            <div class="relative">
                                <input type="password" 
                                       class="glass login-input border border-white/5 rounded-lg p-2.5 w-full bg-transparent text-white placeholder-gray-600 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent/20 input-focus-effect pl-9 text-sm" 
                                       name="password" 
                                       id="password" 
                                       placeholder="Enter password" 
                                       required>
                                <i class="bi bi-lock-fill absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-600 group-focus-within:text-accentLight transition-colors text-xs"></i>
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-accent to-accent2 hover:from-accentLight hover:to-accent text-white py-2.5 rounded-lg font-medium transition-all duration-300 btn-hover-effect relative overflow-hidden group mb-2 text-sm xylo-primary-btn">
                            <span class="relative z-10 flex items-center justify-center">
                                <i class="bi bi-box-arrow-in-right mr-1.5 group-hover:translate-x-1 transition-transform"></i>Login
                            </span>
                        </button>
                    </form>
                    
                    <div class="text-center space-y-2 mt-3">
                        <a href="register.php" class="block text-accentLight hover:text-accent transition-all duration-300 font-medium text-xs group xylo-auth-link">
                            Don't have an account? 
                            <i class="bi bi-arrow-right inline-block group-hover:translate-x-1 transition-transform ml-1"></i>
                        </a>
                        <hr class="border-white/5 my-1"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Splash Screen Animation
        window.addEventListener('load', function() {
            const splashScreen = document.getElementById('splashScreen');
            setTimeout(function() {
                splashScreen.classList.add('fade-out');
                setTimeout(function() {
                    splashScreen.style.display = 'none';
                }, 500);
            }, 2000);
        });
        
        // Prevent zoom on mobile
        document.addEventListener('touchmove', function(event) {
            if (event.scale !== 1) {
                event.preventDefault();
            }
        }, { passive: false });
        
        // Disable double tap to zoom
        let lastTouchEnd = 0;
        document.addEventListener('touchend', function(event) {
            const now = (new Date()).getTime();
            if (now - lastTouchEnd <= 300) {
                event.preventDefault();
            }
            lastTouchEnd = now;
        }, false);
        
        // Disable pinch zoom
        document.addEventListener('gesturechange', function(event) {
            event.preventDefault();
        });

        // Galaxy starfield (noticeable, but optimized)
        (function initGalaxyStarfield() {
            const canvas = document.querySelector('.starfield');
            const container = document.querySelector('.absolute.inset-0.overflow-hidden.pointer-events-none');
            if (!canvas || !container) return;

            const ctx = canvas.getContext('2d', { alpha: true, desynchronized: true });
            if (!ctx) return;

            const DPR_CAP = 1.5; // performance cap
            let dpr = Math.min(window.devicePixelRatio || 1, DPR_CAP);
            let w = 0, h = 0;

            const stars = [];
            const dust = [];
            let raf = null;

            function resize() {
                const rect = container.getBoundingClientRect();
                w = Math.max(1, Math.floor(rect.width));
                h = Math.max(1, Math.floor(rect.height));
                dpr = Math.min(window.devicePixelRatio || 1, DPR_CAP);
                canvas.width = Math.floor(w * dpr);
                canvas.height = Math.floor(h * dpr);
                canvas.style.width = w + 'px';
                canvas.style.height = h + 'px';
                ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

                stars.length = 0;
                dust.length = 0;

                // More visible but still light: scale by area, capped
                const starCount = Math.min(180, Math.max(120, Math.round((w * h) / 11000)));
                for (let i = 0; i < starCount; i++) {
                    const big = Math.random() < 0.12;
                    stars.push({
                        x: Math.random() * w,
                        y: Math.random() * h,
                        r: big ? (Math.random() * 1.8 + 0.9) : (Math.random() * 1.2 + 0.25),
                        a: big ? (Math.random() * 0.55 + 0.25) : (Math.random() * 0.45 + 0.10),
                        tw: Math.random() * 0.02 + 0.004,
                        vx: (Math.random() * 0.10 + 0.03) * (Math.random() > 0.5 ? 1 : -1)
                    });
                }

                // Nebula dust blobs for galaxy feel
                const dustCount = 8;
                for (let i = 0; i < dustCount; i++) {
                    dust.push({
                        x: Math.random() * w,
                        y: Math.random() * h,
                        r: Math.random() * 220 + 140,
                        a: Math.random() * 0.08 + 0.035,
                        hue: Math.random() > 0.5 ? 275 : 245,
                        vx: (Math.random() * 0.05 + 0.012) * (Math.random() > 0.5 ? 1 : -1),
                        vy: (Math.random() * 0.03 + 0.008) * (Math.random() > 0.5 ? 1 : -1)
                    });
                }
            }

            function frame(t) {
                ctx.clearRect(0, 0, w, h);

                // Nebula
                ctx.globalCompositeOperation = 'lighter';
                for (const d of dust) {
                    d.x += d.vx; d.y += d.vy;
                    if (d.x < -d.r) d.x = w + d.r;
                    if (d.x > w + d.r) d.x = -d.r;
                    if (d.y < -d.r) d.y = h + d.r;
                    if (d.y > h + d.r) d.y = -d.r;

                    const g = ctx.createRadialGradient(d.x, d.y, 0, d.x, d.y, d.r);
                    g.addColorStop(0, `hsla(${d.hue}, 95%, 65%, ${d.a})`);
                    g.addColorStop(1, 'rgba(0,0,0,0)');
                    ctx.fillStyle = g;
                    ctx.beginPath();
                    ctx.arc(d.x, d.y, d.r, 0, Math.PI * 2);
                    ctx.fill();
                }

                // Stars
                ctx.globalCompositeOperation = 'screen';
                for (const s of stars) {
                    s.x += s.vx;
                    if (s.x < -2) s.x = w + 2;
                    if (s.x > w + 2) s.x = -2;
                    const tw = Math.sin((t / 650) + (s.x + s.y) * 0.002);
                    const alpha = Math.max(0.05, Math.min(1, s.a + s.tw * tw));
                    ctx.fillStyle = `rgba(235, 245, 255, ${alpha})`;
                    ctx.beginPath();
                    ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
                    ctx.fill();
                }
                ctx.globalCompositeOperation = 'source-over';

                raf = requestAnimationFrame(frame);
            }

            resize();
            raf = requestAnimationFrame(frame);
            window.addEventListener('resize', resize, { passive: true });
            document.addEventListener('visibilitychange', () => {
                if (document.hidden && raf) {
                    cancelAnimationFrame(raf);
                    raf = null;
                } else if (!document.hidden && !raf) {
                    raf = requestAnimationFrame(frame);
                }
            });
        })();
    </script>
<style>
.xylo-legal-micro-wrap{max-width:1200px;margin:26px auto 0;padding:0 16px 18px}
.xylo-legal-micro-wrap-auth{width:100%;max-width:none;margin:8px auto 12px;padding:0 16px 12px;position:relative;z-index:10}
.xylo-legal-micro{display:flex;align-items:center;justify-content:center;gap:10px 12px;flex-wrap:wrap;padding-top:10px;border-top:1px solid rgba(255,255,255,.08);color:rgba(255,255,255,.52);font-size:12px;line-height:1.5}
.xylo-legal-micro a{color:rgba(255,255,255,.68);text-decoration:none;transition:color .22s ease,opacity .22s ease}
.xylo-legal-micro a:hover{color:#fff}
.xylo-legal-dot{opacity:.28}
@media (max-width:640px){.xylo-legal-micro{gap:6px 10px;font-size:11px;padding-top:12px}.xylo-legal-micro-wrap-auth{margin:2px auto 10px;padding:0 14px 10px}}
</style>
<div class="xylo-legal-micro-wrap xylo-legal-micro-wrap-auth">
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
  <script src="/assets/js/xylo-lazy-media-30.js" defer></script>
</body>
</html>